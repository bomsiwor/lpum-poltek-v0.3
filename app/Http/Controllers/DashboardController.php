<?php

namespace App\Http\Controllers;

use App\Models\StudyProgram;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    protected $users;

    public function __construct()
    {
        $this->users = new User();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('Dashboard.index', $data);
    }

    public function profile()
    {
        $study_programs = StudyProgram::all();

        $data = [
            'title' => 'Kelola Profil',
            'study_programs' => $study_programs
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
        $all_user = User::all();
        $data = [
            'title' => 'Kelola User',
            'users' => $all_user
        ];

        return view('Dashboard.manage-user', $data);
    }
}
