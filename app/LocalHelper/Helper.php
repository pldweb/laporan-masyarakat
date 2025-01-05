<?php


namespace App\LocalHelper;

class Helper
{
    public static function renderIndicatorDashbard() : array
    {
        $data = [
            [
                'title' => 'Sales',
                'number' => 2.382,
                'report_percentage' => '-3.65',
                'time' => 'Since last week'
            ],
            [
                'title' => 'Sales',
                'number' => 2.382,
                'report_percentage' => '-3.65',
                'time' => 'Since last week'
            ],
            [
                'title' => 'Sales',
                'number' => 2.382,
                'report_percentage' => '-3.65',
                'time' => 'Since last week'
            ],
            [
                'title' => 'Sales',
                'number' => 2.382,
                'report_percentage' => '-3.65',
                'time' => 'Since last week'
            ],
        ];

        return $data;
    }

    public static function renderMenuSideBar() : array
    {
        $data = [
            [
                'icon' => 'speedometer',
                'text' => 'Dashboard Laporan',
                'href' => url('dashboard'),
            ],
            [
                'icon' => 'book-half',
                'text' => 'Data Laporan',
                'href' => url('data-laporan'),
            ],
            [
                'icon' => 'people-fill',
                'text' => 'Data Pelapor',
                'href' => url('data-pelapor'),
            ],
            [
                'icon' => 'people-fill',
                'text' => 'Data Petugas',
                'href' => url('data-petugas'),
            ],
            [
                'icon' => 'gear-fill',
                'text' => 'Pengaturan',
                'href' => url('pengaturan'),
            ],
        ];

        return $data;

    }
}
