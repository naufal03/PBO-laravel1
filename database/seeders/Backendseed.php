<?php

namespace Database\Seeders;

use App\Models\BackendDb;
use Illuminate\Database\Seeder;

class Backendseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $backenddummy = [
            [
                'name' => 'kalian',
                'kelas' => 'XII RPL 2',
            ],

            [
                'name' => 'kalian',
                'kelas' => 'XII RPL 2',
            ],

            [
                'name' => 'kalian',
                'kelas' => 'XII RPL 2',
            ],

            [
                'name' => 'kalian',
                'kelas' => 'XII RPL 2',
            ],

            [
                'name' => 'kalian',
                'kelas' => 'XII RPL 2',
            ],

            [
                'name' => 'kalian',
                'kelas' => 'XII RPL 2',
            ],
        ];
        //pengulangan data dummy
        foreach ($backenddummy as $bd) {
            BackendDb::create($bd);
        }
    }
}
