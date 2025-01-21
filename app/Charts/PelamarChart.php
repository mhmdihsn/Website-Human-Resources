<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class PelamarChart extends Chart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build()
    {

        $pelamar = Pelamar::get();
        $data = [
            $pelamar->where('status','pending')->count(),
            $pelamar->where('status','accepted')->count(),
            $pelamar->where('status','rejected')->count()
        ];

        $label = [
            'Pending',
            'Accepted',
            'Rejected'
        ];


        return $this->chart->pieChart()
            ->setTitle('Data Pelamar')
            ->setSubtitle(date('Y'))
            ->addData($data)
            ->setLabels($label);
    }
}
