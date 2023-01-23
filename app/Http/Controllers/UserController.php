<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userDetail(User $user)
    {
        if (request()->ajax()) :
            return response()->json([
                'data' => $user,
                'pwd' => $user->password,
                'prodi' => $user->study_program->nama
            ]);
        endif;
    }
}
