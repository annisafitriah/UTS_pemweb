<?php

namespace Database\Seeders;

use App\Models\Supir;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supir::create([
            'nama' => 'Annisa Nur Fitriah',
            'alamat' => 'Kab Tangerang',
            'telepon' => '081211260662',
            'sim' => 'aktif',
            'status' => 'mahasiswa',
            'foto' => 'https://i.pinimg.com/originals/d5/2f/18/d52f18db78eefa5149b0f963b9555817.jpg'
        ]);
    }
}
