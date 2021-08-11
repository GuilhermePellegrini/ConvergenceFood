<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert(
            [
                'name' => 'RONDONIA',
                'uf' => 'RO',
                'ibge' => '11',
            ],

            [
                'name' => 'ACRE',
                'uf' => 'AC',
                'ibge' => '12',
            ],

            [
                'name' => 'AMAZONAS',
                'uf' => 'AM',
                'ibge' => '13',
            ],

            [
                'name' => 'RORAIMA',
                'uf' => 'RR',
                'ibge' => '14',
            ],

            [
                'name' => 'PARA',
                'uf' => 'PA',
                'ibge' => '15',
            ],

            [
                'name' => 'AMAPA',
                'uf' => 'AP',
                'ibge' => '16',
            ],

            [
                'name' => 'TOCANTINS',
                'uf' => 'TO',
                'ibge' => '17',
            ],

            [
                'name' => 'MARANHAO',
                'uf' => 'MA',
                'ibge' => '21',
            ],

            [
                'name' => 'PIAUI',
                'uf' => 'PI',
                'ibge' => '22',
            ],

            [
                'name' => 'CEARA',
                'uf' => 'CE',
                'ibge' => '23',
            ],

            [
                'name' => 'RIO GRANDE DO NORTE',
                'uf' => 'RN',
                'ibge' => '24',
            ],

            [
                'name' => 'PARAIBA',
                'uf' => 'PB',
                'ibge' => '25',
            ],

            [
                'name' => 'PERNAMBUCO',
                'uf' => 'PE',
                'ibge' => '26',
            ],

            [
                'name' => 'ALAGOAS',
                'uf' => 'AL',
                'ibge' => '27',
            ],

            [
                'name' => 'SERGIPE',
                'uf' => 'SE',
                'ibge' => '28',
            ],

            [
                'name' => 'BAHIA',
                'uf' => 'BA',
                'ibge' => '29',
            ],

            [
                'name' => 'MINAS GERAIS',
                'uf' => 'MG',
                'ibge' => '31',
            ],

            [
                'name' => 'ESPIRITO SANTO',
                'uf' => 'ES',
                'ibge' => '32',
            ],

            [
                'name' => 'RIO DE JANEIRO',
                'uf' => 'RJ',
                'ibge' => '33',
            ],

            [
                'name' => 'SAO PAULO',
                'uf' => 'SP',
                'ibge' => '35',
            ],
            
            [
                'name' => 'PARANA',
                'uf' => 'PR',
                'ibge' => '41',
            ],

            [
                'name' => 'SANTA CATARINA',
                'uf' => 'SC',
                'ibge' => '42',
            ],

            [
                'name' => 'RIO GRANDE DO SUL',
                'uf' => 'RS',
                'ibge' => '43',
            ],

            [
                'name' => 'MATO GROSSO DO SUL',
                'uf' => 'MS',
                'ibge' => '50',
            ],
            
            [
                'name' => 'MATO GROSSO',
                'uf' => 'MT',
                'ibge' => '51',
            ],

            [
                'name' => 'GOIAS',
                'uf' => 'GO',
                'ibge' => '52',
            ],

            [
                'name' => 'DISTRITO FEDERAL',
                'uf' => 'DF',
                'ibge' => '53',
            ],
                  
        );
    }
}
