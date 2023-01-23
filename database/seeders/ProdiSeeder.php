<?php

namespace Database\Seeders;

use App\Models\StudyProgram;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $daftar = [
            'Teknokimia Nuklir',
            'Elektronika Instrumentasi',
            'Elektro Mekanika'
        ];
        foreach ($daftar as $item) :
            StudyProgram::create(['nama' => $item]);
        endforeach;
    }
}
