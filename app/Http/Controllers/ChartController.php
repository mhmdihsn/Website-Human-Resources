<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        $data = [
            'labels' => ['Januari', 'Februari', 'Maret', 'April', 'Mei'],
            'datasets' => [
                [
                    'label' => 'Penjualan',
                    'data' => [10, 20, 30, 40, 50],
                    'backgroundColor' => ['rgba(75, 192, 192, 0.2)'],
                    'borderColor' => ['rgba(75, 192, 192, 1)'],
                    'borderWidth' => 1,
                ]
            ]
        ];
        return view('charts.index', compact('data'));
    }
}
