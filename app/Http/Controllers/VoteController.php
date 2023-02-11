<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use PDF;

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

    public function printPDF()
    {
        $logo = base64_encode(public_path('assets/images/Logo-lpum.png'));

        $data = [
            'user' => User::all(),
            'logo' => $logo
        ];

        $pdf = PDF::loadView('Dashboard.printable', $data);

        return $pdf->stream('file.pdf');
    }
}
