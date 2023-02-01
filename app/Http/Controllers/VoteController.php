<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class VoteController extends Controller
{
    public function verify(Request $request)
    {
        $data = $request->input('data');
        foreach ($data as $d) :
            User::where('id', $d)->update([
                'vote_status' => 1
            ]);
        endforeach;

        return response()->json([
            'message' => "Sukses mengaktifkan massal"
        ]);
    }

    public function unverify(Request $request)
    {
        $data = $request->input('data');
        foreach ($data as $d) :
            User::where('id', $d)->update([
                'vote_status' => 0
            ]);
        endforeach;

        return response()->json([
            'message' => "Sukses menonaktifkan massal"
        ]);
    }

    public function addRole()
    {
        $role = Role::create([
            'name' => 'User'
        ]);

        return back();
    }
}
