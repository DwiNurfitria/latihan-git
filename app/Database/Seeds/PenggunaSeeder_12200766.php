<?php

namespace App\Database\Seeds;

use App\Models\Pengguna;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'Dwi Nurfitria',
                'password'  => md5('12200766')
            ],
            [
                'nama'      => 'admin',
                'password'  => md5('12345')
            ],
            [
                'nama'      => '12200766',
                'password'  => md5('Dwi Nurfitria')
            ]
        ];

        $p = new Pengguna();
        $p->insertBatch($data);
    }
}
