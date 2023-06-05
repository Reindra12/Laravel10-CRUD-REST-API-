<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\students;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        students::factory()->create([
            'nim' => '16010322',
            'kode_kelas' => 'MK1001',
            'nama_mahasiswa' => 'Indra Irawanto',
            'username' => 'indra',
            'password' => '16010322',
            'email' => 'reindra@gmail.com',
            'jk' => 'L',
            'alamat' => 'Brabe-Maron-Probolinggo',
            'no_hp' => '082330199009',
            'foto' => '8kWWkixMDyDX0qm4CB9syNFSNBzGMewPCAFSK1vO.jpg',


        ]);

        students::factory()->create([
            'nim' => '16010321',
            'kode_kelas' => 'MK1001',
            'nama_mahasiswa' => 'Rudi Hartono',
            'username' => 'rudi',
            'password' => '16010321',
            'email' => 'rudi@gmail.com',
            'jk' => 'L',
            'alamat' => 'Brabe-Maron-Probolinggo',
            'no_hp' => '082330199009',
            'foto' => '8kWWkixMDyDX0qm4CB9syNFSNBzGMewPCAFSK1vO.jpg',


        ]);

        students::factory()->create([
            'nim' => '16010320',
            'kode_kelas' => 'MK1001',
            'nama_mahasiswa' => 'Syamsul arifin',
            'username' => 'syamsul',
            'password' => '16010320',
            'email' => 'syamsul@gmail.com',
            'jk' => 'L',
            'alamat' => 'Brabe-Maron-Probolinggo',
            'no_hp' => '082330199009',
            'foto' => '8kWWkixMDyDX0qm4CB9syNFSNBzGMewPCAFSK1vO.jpg',


        ]);
    }
}
