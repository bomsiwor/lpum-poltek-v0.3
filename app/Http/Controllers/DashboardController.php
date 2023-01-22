<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('Dashboard.index', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'Kelola Profil'
        ];

        return view('Dashboard.profil', $data);
    }

    public function vote()
    {
        $data = [
            'title' => 'Info Pemira'
        ];

        return view('Dashboard.coblos', $data);
    }

    public function hasil()
    {
        $data = [
            'title' => 'Hasil Pemira'
        ];

        return view('Dashboard.hasil', $data);
    }

    public function manageUser()
    {
        $data = [
            'title' => 'Kelola User'
        ];

        return view('Dashboard.manage-user', $data);
    }
}
