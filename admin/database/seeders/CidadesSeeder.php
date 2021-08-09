<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cidades')->insert(
            [
                'name' => 'Adamantina',
                'estado_id' => '1',
                'ibge' => '3500105',
            ],
        );
    }
}
