<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Monolog\Handler\IFTTTHandler;
use Psy\CodeCleaner\AssignThisVariablePass;

class UsersImport implements OnEachRow, WithHeadingRow, WithUpserts
{
    private $rows = 0;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function onRow(Row $row)
    {
        $user = User::upsert([
            'nama' => $row['nama'],
            'email' => $row['email'],
            'password' => Hash::make("password"),
            'nim' => $row['nim'],
            'study_program_id' => $row['prodi']
        ], 'email');

        if (!$user) :
            $user->assignRole('User');
        endif;
        ++$this->rows;
    }

    public function uniqueBy()
    {
        return 'email';
    }

    public function getCountRow()
    {
        return $this->rows;
    }
}
