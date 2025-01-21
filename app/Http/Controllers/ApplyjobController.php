<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applyjob;
use Illuminate\Support\Facades\Storage;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;

class ApplyjobController extends Controller
{
    public function store(Request $request )
    {
        try {
            // Validasi data yang diterima dari form
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'position' => 'required|string|max:255',
                'cv' => 'required|file|mimes:pdf,doc,docx|max:10048', // Validasi file CV
            ], [
                'name.required' => 'Isi nama lengkap Anda di sini.',
                'email.required' => 'Masukkan alamat email Anda.',
                'phone.required' => 'Nomor telepon wajib diisi.',
                'position.required' => 'Pilih posisi pekerjaan.',
                'cv.required' => 'Unggah CV Anda dalam format PDF, DOC, atau DOCX.',
            ]);

            // Simpan data applyjob
            $applyjob = new Applyjob();
            $applyjob->name = $request->name;
            $applyjob->email = $request->email;
            $applyjob->phone = $request->phone;
            $applyjob->position = $request->position;

            // Menyimpan file CV
            if ($request->hasFile('cv')) {
                // Menyimpan file CV ke folder 'cv_files' dan mendapatkan path file
                $cvPath = $request->file('cv')->store('cv', 'public');
                $applyjob->cv = $cvPath;
            }

            // Set status default untuk aplikasi
            $applyjob->status = 'pending'; // Status default bisa diubah sesuai kebutuhan
            $applyjob->save();

            // Mengembalikan respons JSON jika sukses
            if ($request->ajax()) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Application submitted successfully!',
                ]);
            }

            return redirect()->route('applyjob.create')->with('success', 'Application submitted successfully!');
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Failed to submit application. Please try again.',
                ], 500);
            }

            return redirect()->route('applyjob.create')->with('error', 'Failed to submit application. Please try again.');
        }
    }

    public function create()
    {
        return view('jobdetails'); // Mengembalikan view untuk form aplikasi pekerjaan
    }

    public function updateStatus(Request $request)
    {
    $request->validate([
        'id' => 'required|exists:applyjobs,id',
        'status' => 'required|in:pending,approved,rejected',
    ]);

    $applyjob = Applyjob::find($request->id);
    $applyjob->status = $request->status;
    $applyjob->save();

    return response()->json(['success' => true]);
    }


    // public function updateStatus(Request $request)
    // {
    //     $applyjob = Applyjob::find($request->id);
    //     $applyjob->status = $request->status;
    //     $applyjob->save();

    //     return response()->json(['success' => true]);
    // }

    public function showChart()
    {
        // Ambil jumlah aplikasi berdasarkan tanggal
        $pelamarPerHari = Applyjob::selectRaw('DATE(created_at) as date, COUNT(*) as total')
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        // Memisahkan data untuk grafik
        $dates = [];
        $totals = [];

        foreach ($pelamarPerHari as $item) {
            $dates[] = Carbon::parse($item->date)->format('Y-m-d');
            $totals[] = $item->total;
        }

        // Membuat grafik menggunakan LarapexChart
        $chart = LarapexChart::barChart()
            ->addData('Pending', $pendingCounts)
            ->addData('Accepted', $acceptedCounts)
            ->addData('Rejected', $rejectedCounts)
            ->setLabels($labels) // Set labels for the X-axis
            ->setColors(['#FFB300', '#4CAF50', '#F44336'])
            ->setXAxis($labels); // Explicitly set X-axis labels (dates)



        // Data tambahan untuk view
        // $data = [
        //     'chart' => $chart,
        //     'totalPelamar' => Applyjob::count(),
        // ];

        return view('admin.home', compact($chart));
    }


}
