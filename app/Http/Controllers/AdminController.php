<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applyjob;

class AdminController extends Controller
{
    public function showapplyjob ()
    {
        $data = Applyjob::all();
        return view('admin.showapplyjob', compact('data'));
    }

    public function acceptApplyjob($id)
    {
        $apply = Applyjob::find($id);
        if ($apply) {
            $apply->status = 'Accepted';
            $apply->save();
            return response()->json(['success' => true, 'status' => 'Accepted']);
        }
        return response()->json(['success' => false], 404);
    }

    public function cancelApplyjob($id)
    {
        $applyjob = Applyjob::find($id);
        if ($applyjob) {
            $applyjob->status = 'Rejected';
            $applyjob->save();
            return response()->json(['success' => true, 'status' => 'Rejected']);
        }
        return response()->json(['success' => false], 404);
    }

    public function report ()
    {

        return view ('admin.report');
    }


    public function index()
    {
    $chart = (new LarapexChart)->barChart()
        ->setTitle('Jumlah Pelamar Per Hari')
        ->setSubtitle('Data Pelamar dari Sistem')
        ->addData('Pelamar', [10, 20, 30])
        ->setXAxis(['Senin', 'Selasa', 'Rabu']);

    return view('admin.home', compact('chart'));
    }

}
