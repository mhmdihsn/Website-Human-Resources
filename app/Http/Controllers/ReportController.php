<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\ApplyJob;

class ReportController extends Controller
{
    public function exportPdf()
    {
        $applyJobs = ApplyJob::all();  // Ambil semua data pelamar

        $pdf = PDF::loadView('admin.exportPdf', compact('applyJobs'));

        return $pdf->stream('laporan.pdf');
        // return $pdf->download('apply_jobs_report.pdf');  // Mengunduh file PDF
    }

    public function exportExcel()
    {
        $applyJobs = ApplyJob::all();
        return Excel::download(new ApplyJobExport, 'apply_jobs_report.xlsx');
    }

    public function showReport()
    {
        $applyJobs = ApplyJob::all();  // Get all job applications
        return view('admin.report', compact('applyJobs'));
    }

}
