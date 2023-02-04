<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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

    public function changePicture(Request $request)
    {
        if (auth()->user()->image) :
            Storage::delete(auth()->user()->image);
        endif;

        Validator::validate(
            $request->all(),
            [
                'photo' => [
                    File::image()->max(1024)
                ]
            ],
            [
                'photo.image' => 'Salah upload'
            ]
        );

        $data['image'] = $request->photo->store('photos');

        User::where('id', auth()->user()->id)->update($data);

        return back()->with('status', 'Berhasil ganti foto profil!');
    }

    public function deletePicture()
    {
        $data['image'] = null;

        User::where('id', auth()->user()->id)->update($data);
        return back()->with('status', 'Berhasil hapus foto profil!');
    }

    public function changeDetail(Request $request)
    {
        if ($request->ajax()) :
            $validator = Validator::make($request->all(), [
                'email' => 'required|email:dns',
                'nama' => 'required|string',
                'nim' => 'required|integer',
                'password' => 'required',
                'phone' => 'alpha_num',
                'study_program_id' => 'required|between:1,3'
            ]);

            $validated = $validator->validated();

            User::where('id', auth()->user()->id)->update($validated);
            return response()->json($validated);
        endif;
    }

    public function massUpload(Request $request)
    {
        $import = new UsersImport;
        Excel::import($import, $request->file('users'));

        $count = $import->getCountRow();

        return back()->with("message", "Berhasil mengupdate $count user");
    }

    public function deleteUser(Request $request)
    {
        User::where('nim', $request->param)->delete();

        return back()->with("message", "Berhasil hapus user");
    }
}
