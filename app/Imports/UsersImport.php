<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;

class UsersImport implements OnEachRow, WithHeadingRow, WithUpserts
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    // public function model(array $row)
    // {
    //     return new User([
    // 'nama' => $row['nama'],
    // 'email' => $row['email'],
    // 'password' => Hash::make("password"),
    // 'nim' => $row['nim'],
    // 'study_program_id' => $row['prodi']
    //     ]);
    // }

    public function onRow(Row $row)
    {
        $user = User::create([
            'nama' => $row['nama'],
            'email' => $row['email'],
            'password' => Hash::make("password"),
            'nim' => $row['nim'],
            'study_program_id' => $row['prodi']
        ]);

        $user->assignRole('User');
    }

    public function uniqueBy()
    {
        return 'email';
    }
}
