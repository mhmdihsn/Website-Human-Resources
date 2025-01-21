<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Applyjob;
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function redirect()
{
    if (Auth::id()) {
        if (Auth::user()->usertype == '0') {
            return view('home');
        } else {

// Mengambil data applyjob dalam 30 hari terakhir
$applyjobs = Applyjob::where('created_at', '>=', Carbon::now()->subDays(30))
    ->get();

// Menghitung jumlah status
$totalPending = $applyjobs->where('status', 'pending')->count();
$totalAccepted = $applyjobs->where('status', 'Accepted')->count();
$totalRejected = $applyjobs->where('status', 'Rejected')->count();

// Membuat PieChart menggunakan LarapexChart
$chart = LarapexChart::pieChart()
    ->setTitle('Distribusi Status Pelamar (30 Hari Terakhir)')
    ->setSubtitle('Pending, Accepted, Rejected')
    ->addData([$totalPending, $totalAccepted, $totalRejected]) // Data untuk PieChart
    ->setLabels(['Pending', 'Accepted', 'Rejected']) // Label untuk masing-masing bagian
    ->setColors(['#FFB300', '#4CAF50', '#F44336']); // Warna untuk setiap status

    

            // Kirim data ke view
            return view('admin.home', compact('chart'));
        }
    } else {
        return redirect()->back();
    }
}


}
