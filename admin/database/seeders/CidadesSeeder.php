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

            /* RONDONIA */

            [
                'name' => 'Adamantina',
                'estado_id' => '1',
                'ibge' => '3500105',
            ],
            [
                'name' => 'Cabixi',
                'estado_id' => '1',
                'ibge' => '1100031',
            ],
            [
                'name' => 'Cacoal',
                'estado_id' => '1',
                'ibge' => '1100049',
            ],
            [
                'name' => 'Cerejeiras',
                'estado_id' => '1',
                'ibge' => '1100056',
            ],
            [
                'name' => 'Colorado do Oeste',
                'estado_id' => '1',
                'ibge' => '1100064',
            ],
            [
                'name' => 'Corumbiara',
                'estado_id' => '1',
                'ibge' => '1100072',
            ],
            [
            'name' => 'Costa Marques',
                'estado_id' => '1',
                'ibge' => '1100080',
            ],
            [
                'name' => 'Guajara-Mirim',
                'estado_id' => '1',
                'ibge' => '1100106',
            ],
            [
                'name' => 'Jaru',
                'estado_id' => '1',
                'ibge' => '1100114',
            ],
            [
                'name' => 'Ji-Parana',
                'estado_id' => '1',
                'ibge' => '1100122',
            ],
            [
                'name' => 'Ouro Preto do Oeste',
                'estado_id' => '1',
                'ibge' => '1100155',
            ],
            [
                'name' => 'Pimenta Bueno',
                'estado_id' => '1',
                'ibge' => '1100189',
            ],
            [
                'name' => 'Porto Velho',
                'estado_id' => '1',
                'ibge' => '1100205',
            ],
            [
                'name' => 'Presidente Medici',
                'estado_id' => '1',
                'ibge' => '1100254',
            ],
            [
                'name' => 'Rio Crespo',
                'estado_id' => '1',
                'ibge' => '1100262',
            ],
            [
                'name' => 'Rolim de Moura',
                'estado_id' => '1',
                'ibge' => '1100288',
            ],
            [
                'name' => 'Vilhena',
                'estado_id' => '1',
                'ibge' => '1100304',
            ],
            [
                'name' => 'Sao Miguel do Guapore',
                'estado_id' => '1',
                'ibge' => '1100320',
            ],
            [
                'name' => 'Nova Mamore',
                'estado_id' => '1',
                'ibge' => '1100338',
            ],
            [
                'name' => 'Alto Alegre dos Parecis',
                'estado_id' => '1',
                'ibge' => '1100379',
            ],
            [
                'name' => 'Alto Paraiso',
                'estado_id' => '1',
                'ibge' => '1100403',
            ],
            [
                'name' => 'Buritis',
                'estado_id' => '1',
                'ibge' => '1100452',
            ],
            [
                'name' => 'Novo Horizonte do Oeste',
                'estado_id' => '1',
                'ibge' => '1100502',
            ],
            [
                'name' => 'Cacaulandia',
                'estado_id' => '1',
                'ibge' => '1100601',
            ],
            [
                'name' => 'Campo Novo de Rondonia',
                'estado_id' => '1',
                'ibge' => '1100700',
            ],
            [
                'name' => 'Candeias do Jamari',
                'estado_id' => '1',
                'ibge' => '1100809',
            ],
            [
                'name' => 'Castanheiras',
                'estado_id' => '1',
                'ibge' => '1100908',
            ],
            [
                'name' => 'Chupinguaia',
                'estado_id' => '1',
                'ibge' => '1100924',
            ],
            [
                'name' => 'Cujubim',
                'estado_id' => '1',
                'ibge' => '1100940',
            ],
            [
                'name' => 'Governador Jorge Teixeira',
                'estado_id' => '1',
                'ibge' => '1101005',
            ],
            [
                'name' => 'Itapua do Oeste',
                'estado_id' => '1',
                'ibge' => '1101104',
            ],
            [
                'name' => 'Ministro Andreazza',
                'estado_id' => '1',
                'ibge' => '1101203',
            ],
            [
                'name' => 'Mirante da Serra',
                'estado_id' => '1',
                'ibge' => '1101302',
            ],
            [
                'name' => 'Monte Negro',
                'estado_id' => '1',
                'ibge' => '1101401',
            ],
            [
                'name' => 'Nova Uniao',
                'estado_id' => '1',
                'ibge' => '1101435',
            ],
            [
                'name' => 'Parecis',
                'estado_id' => '1',
                'ibge' => '1101450',
            ],
            [
                'name' => 'Pimenteiras do Oeste',
                'estado_id' => '1',
                'ibge' => '1101468',
            ],
            [
                'name' => 'Primavera de Rondonia',
                'estado_id' => '1',
                'ibge' => '1101476',
            ],
            [
                'name' => 'Sao Francisco do Guapore',
                'estado_id' => '1',
                'ibge' => '1101492',
            ],
            [
                'name' => 'Seringueiras',
                'estado_id' => '1',
                'ibge' => '1101500',
            ],
            [
                'name' => 'Teixeiropolis',
                'estado_id' => '1',
                'ibge' => '1101559',
            ],
            [
                'name' => 'Theobroma',
                'estado_id' => '1',
                'ibge' => '1101609',
            ],
            [
                'name' => 'Urupa',
                'estado_id' => '1',
                'ibge' => '1101708',
            ],
            [
                'name' => 'Vale do Anari',
                'estado_id' => '1',
                'ibge' => '1101757',
            ],
            [
                'name' => 'Vale do Paraiso',
                'estado_id' => '1',
                'ibge' => '1101807',
            ],
            [
                'name' => 'Sao Felipe D Oeste',
                'estado_id' => '1',
                'ibge' => '1101484',
            ],
            [
                'name' => 'Alvorada D Oeste',
                'estado_id' => '1',
                'ibge' => '1100346',
            ],
            [
                'name' => 'Santa Luzia D Oeste',
                'estado_id' => '1',
                'ibge' => '1100296',
            ],
            [
                'name' => 'Nova Brasilandia D Oeste',
                'estado_id' => '1',
                'ibge' => '1100148',
            ],
            [
                'name' => 'Machadinho D Oeste',
                'estado_id' => '1',
                'ibge' => '1100130',
            ],
            [
                'name' => 'Espigao D Oeste ',
                'estado_id' => '1',
                'ibge' => '1100098',
            ],
            [
                'name' => 'Alta Floresta D Oeste',
                'estado_id' => '1',
                'ibge' => '1100015',
            ],

            /* Acre */

            [
                'name' => 'Acrelandia',
                'estado_id' => '2',
                'ibge' => '1200013',
            ],
            [
                'name' => 'Assis Brasil',
                'estado_id' => '2',
                'ibge' => '1200054',
            ],
            [
                'name' => 'Brasileia',
                'estado_id' => '2',
                'ibge' => '1200104',
            ],
            [
                'name' => 'Bujari',
                'estado_id' => '2',
                'ibge' => '1200138',
            ],
            [
                'name' => 'Capixaba',
                'estado_id' => '2',
                'ibge' => '1200179',
            ],
            [
                'name' => 'Cruzeiro do Sul',
                'estado_id' => '2',
                'ibge' => '1200203',
            ],
            [
                'name' => 'Epitaciolandia',
                'estado_id' => '2',
                'ibge' => '1200252',
            ],
            [
                'name' => 'Feijo',
                'estado_id' => '2',
                'ibge' => '1200302',
            ],
            [
                'name' => 'Jordao',
                'estado_id' => '2',
                'ibge' => '1200328',
            ],
            [
                'name' => 'Mancio Lima',
                'estado_id' => '2',
                'ibge' => '1200336',
            ],
            [
                'name' => 'Manoel Urbano',
                'estado_id' => '2',
                'ibge' => '1200344',
            ],
            [
                'name' => 'Marechal Thaumaturgo',
                'estado_id' => '2',
                'ibge' => '1200351',
            ],
            [
                'name' => 'Placido de Castro',
                'estado_id' => '2',
                'ibge' => '1200385',
            ],
            [
                'name' => 'Porto Walter',
                'estado_id' => '2',
                'ibge' => '1200393',
            ],
            [
                'name' => 'Rio Branco',
                'estado_id' => '2',
                'ibge' => '1200401',
            ],
            [
                'name' => 'Rodrigues Alves',
                'estado_id' => '2',
                'ibge' => '1200427',
            ],
            [
                'name' => 'Santa Rosa do Purus',
                'estado_id' => '2',
                'ibge' => '1200435',
            ],
            [
                'name' => 'Senador Guiomard',
                'estado_id' => '2',
                'ibge' => '1200450',
            ],
            [
                'name' => 'Sena Madureira',
                'estado_id' => '2',
                'ibge' => '1200500',
            ],
            [
                'name' => 'Tarauaca',
                'estado_id' => '2',
                'ibge' => '1200609',
            ],
            [
                'name' => 'Xapuri',
                'estado_id' => '2',
                'ibge' => '1200708',
            ],
            [
                'name' => 'Porto Acre',
                'estado_id' => '2',
                'ibge' => '1200807',
            ],

            /* Amazonas */

            [
                'name' => 'Alvaraes',
                'estado_id' => '3',
                'ibge' => '1300029',
            ],
            [
                'name' => 'Amatura',
                'estado_id' => '3',
                'ibge' => '1300060',
            ],
            [
                'name' => 'Anama',
                'estado_id' => '3',
                'ibge' => '1300086',
            ],
            [
                'name' => 'Anori',
                'estado_id' => '3',
                'ibge' => '1300102',
            ],
            [
                'name' => 'Apui',
                'estado_id' => '3',
                'ibge' => '1300144',
            ],
            [
                'name' => 'Atalaia do Norte',
                'estado_id' => '3',
                'ibge' => '1300201',
            ],
            [
                'name' => 'Autazes',
                'estado_id' => '3',
                'ibge' => '1300300',
            ],
            [
                'name' => 'Barcelos',
                'estado_id' => '3',
                'ibge' => '1300409',
            ],
            [
                'name' => 'Barreirinha',
                'estado_id' => '3',
                'ibge' => '1300508',
            ],
            [
                'name' => 'Benjamin Constant',
                'estado_id' => '3',
                'ibge' => '1300607',
            ],
            [
                'name' => 'Beruri',
                'estado_id' => '3',
                'ibge' => '1300631',
            ],
            [
                'name' => 'Boa Vista do Ramos',
                'estado_id' => '3',
                'ibge' => '1300680',
            ],
            [
                'name' => 'Boca do Acre',
                'estado_id' => '3',
                'ibge' => '1300706',
            ],
            [
                'name' => 'Borba',
                'estado_id' => '3',
                'ibge' => '1300805',
            ],
            [
                'name' => 'Caapiranga',
                'estado_id' => '3',
                'ibge' => '1300839',
            ],
            [
                'name' => 'Canutama',
                'estado_id' => '3',
                'ibge' => '1300904',
            ],
            [
                'name' => 'Carauari',
                'estado_id' => '3',
                'ibge' => '1301001',
            ],
            [
                'name' => 'Careiro',
                'estado_id' => '3',
                'ibge' => '1301100',
            ],
            [
                'name' => 'Careiro da Varzea',
                'estado_id' => '3',
                'ibge' => '1301159',
            ],
            [
                'name' => 'Coari',
                'estado_id' => '3',
                'ibge' => '1301209',
            ],
            [
                'name' => 'Codajas',
                'estado_id' => '3',
                'ibge' => '1301308',
            ],
            [
                'name' => 'Eirunepe',
                'estado_id' => '3',
                'ibge' => '1301407',
            ],
            [
                'name' => 'Envira',
                'estado_id' => '3',
                'ibge' => '1301506',
            ],
            [
                'name' => 'Fonte Boa',
                'estado_id' => '3',
                'ibge' => '1301605',
            ],
            [
                'name' => 'Guajara',
                'estado_id' => '3',
                'ibge' => '1301654',
            ],
            [
                'name' => 'Humaita',
                'estado_id' => '3',
                'ibge' => '1301704',
            ],
            [
                'name' => 'Ipixuna',
                'estado_id' => '3',
                'ibge' => '1301803',
            ],
            [
                'name' => 'Iranduba',
                'estado_id' => '3',
                'ibge' => '1301852',
            ],
            [
                'name' => 'Itacoatiara',
                'estado_id' => '3',
                'ibge' => '1301902',
            ],
            [
                'name' => 'Itamarati',
                'estado_id' => '3',
                'ibge' => '1301951',
            ],
            [
                'name' => 'Itapiranga',
                'estado_id' => '3',
                'ibge' => '1302009',
            ],
            [
                'name' => 'Japura',
                'estado_id' => '3',
                'ibge' => '1302108',
            ],
            [
                'name' => 'Jurua',
                'estado_id' => '3',
                'ibge' => '1302207',
            ],
            [
                'name' => 'Jutai',
                'estado_id' => '3',
                'ibge' => '1302306',
            ],
            [
                'name' => 'Labrea',
                'estado_id' => '3',
                'ibge' => '1302405',
            ],
            [
                'name' => 'Manacapuru',
                'estado_id' => '3',
                'ibge' => '1302504',
            ],
            [
                'name' => 'Manaquiri',
                'estado_id' => '3',
                'ibge' => '1302553',
            ],
            [
                'name' => 'Manaus',
                'estado_id' => '3',
                'ibge' => '1302603',
            ],
            [
                'name' => 'Manicore',
                'estado_id' => '3',
                'ibge' => '1302702',
            ],
            [
                'name' => 'Maraa',
                'estado_id' => '3',
                'ibge' => '1302801',
            ],
            [
                'name' => 'Maues',
                'estado_id' => '3',
                'ibge' => '1302900',
            ],
            [
                'name' => 'Nhamunda',
                'estado_id' => '3',
                'ibge' => '1303007',
            ],
            [
                'name' => 'Nova Olinda do Norte',
                'estado_id' => '3',
                'ibge' => '1303106',
            ],
            [
                'name' => 'Novo Airao',
                'estado_id' => '3',
                'ibge' => '1303205',
            ],
            [
                'name' => 'Novo Aripuana',
                'estado_id' => '3',
                'ibge' => '1303304',
            ],
            [
                'name' => 'Parintins',
                'estado_id' => '3',
                'ibge' => '1303403',
            ],
            [
                'name' => 'Pauini',
                'estado_id' => '3',
                'ibge' => '1303502',
            ],
            [
                'name' => 'Presidente Figueiredo',
                'estado_id' => '3',
                'ibge' => '1303536',
            ],
            [
                'name' => 'Rio Preto da Eva',
                'estado_id' => '3',
                'ibge' => '1303569',
            ],
            [
                'name' => 'Santa Isabel do Rio Negro',
                'estado_id' => '3',
                'ibge' => '1303601',
            ],
            [
                'name' => 'Santo Antonio do Ica',
                'estado_id' => '3',
                'ibge' => '1303700',
            ],
            [
                'name' => 'Sao Gabriel da Cachoeira',
                'estado_id' => '3',
                'ibge' => '1303809',
            ],
            [
                'name' => 'Sao Paulo de Olivenca',
                'estado_id' => '3',
                'ibge' => '1303908',
            ],
            [
                'name' => 'Sao Sebastiao do Uatuma',
                'estado_id' => '3',
                'ibge' => '1303957',
            ],
            [
                'name' => 'Silves',
                'estado_id' => '3',
                'ibge' => '1304005',
            ],
            [
                'name' => 'Tabatinga',
                'estado_id' => '3',
                'ibge' => '1304062',
            ],
            [
                'name' => 'Tapaua',
                'estado_id' => '3',
                'ibge' => '1304104',
            ],
            [
                'name' => 'Tefe',
                'estado_id' => '3',
                'ibge' => '1304203',
            ],
            [
                'name' => 'Tonantins',
                'estado_id' => '3',
                'ibge' => '1304237',
            ],
            [
                'name' => 'Uarini',
                'estado_id' => '3',
                'ibge' => '1304260',
            ],
            [
                'name' => 'Urucara',
                'estado_id' => '3',
                'ibge' => '1304302',
            ],
            [
                'name' => 'Urucurituba',
                'estado_id' => '3',
                'ibge' => '1304401',
            ],

            /* Roraima  */

            [
                'name' => 'Amajari',
                'estado_id' => '4',
                'ibge' => '1400027',
            ],
            [
                'name' => 'Alto Alegre',
                'estado_id' => '4',
                'ibge' => '1400050',
            ],
            [
                'name' => 'Boa Vista',
                'estado_id' => '4',
                'ibge' => '1400100',
            ],
            [
                'name' => 'Bonfim',
                'estado_id' => '4',
                'ibge' => '1400159',
            ],
            [
                'name' => 'Canta',
                'estado_id' => '4',
                'ibge' => '1400175',
            ],
            [
                'name' => 'Caracarai',
                'estado_id' => '4',
                'ibge' => '1400209',
            ],
            [
                'name' => 'Caroebe',
                'estado_id' => '4',
                'ibge' => '1400233',
            ],
            [
                'name' => 'Iracema',
                'estado_id' => '4',
                'ibge' => '1400282',
            ],
            [
                'name' => 'Mucajai',
                'estado_id' => '4',
                'ibge' => '1400308',
            ],
            [
                'name' => 'Normandia',
                'estado_id' => '4',
                'ibge' => '1400407',
            ],
            [
                'name' => 'Pacaraima',
                'estado_id' => '4',
                'ibge' => '1400456',
            ],
            [
                'name' => 'Rorainopolis',
                'estado_id' => '4',
                'ibge' => '1400472',
            ],
            [
                'name' => 'Sao Joao da Baliza',
                'estado_id' => '4',
                'ibge' => '1400506',
            ],
            [
                'name' => 'Sao Luiz',
                'estado_id' => '4',
                'ibge' => '1400605',
            ],
            [
                'name' => 'Uiramuta',
                'estado_id' => '4',
                'ibge' => '1400704',
            ],

            /* Pará  */

            [
                'name' => 'Abaetetuba',
                'estado_id' => '5',
                'ibge' => '1500107',
            ],
            [
                'name' => 'Abel Figueiredo',
                'estado_id' => '5',
                'ibge' => '1500131',
            ],
            [
                'name' => 'Acara',
                'estado_id' => '5',
                'ibge' => '1500206',
            ],
            [
                'name' => 'Afua',
                'estado_id' => '5',
                'ibge' => '1500305',
            ],
            [
                'name' => 'Agua Azul do Norte',
                'estado_id' => '5',
                'ibge' => '1500347',
            ],
            [
                'name' => 'Alenquer',
                'estado_id' => '5',
                'ibge' => '1500404',
            ],
            [
                'name' => 'Almeirim',
                'estado_id' => '5',
                'ibge' => '1500503',
            ],
            [
                'name' => 'Altamira',
                'estado_id' => '5',
                'ibge' => '1500602',
            ],
            [
                'name' => 'Anajas',
                'estado_id' => '5',
                'ibge' => '1500701',
            ],
            [
                'name' => 'Ananindeua',
                'estado_id' => '5',
                'ibge' => '1500800',
            ],
            [
                'name' => 'Anapu',
                'estado_id' => '5',
                'ibge' => '1500859',
            ],
            [
                'name' => 'Augusto Corr�a',
                'estado_id' => '5',
                'ibge' => '1500909',
            ],
            [
                'name' => 'Aurora do Para',
                'estado_id' => '5',
                'ibge' => '1500958',
            ],
            [
                'name' => 'Aveiro',
                'estado_id' => '5',
                'ibge' => '1501006',
            ],
            [
                'name' => 'Bagre',
                'estado_id' => '5',
                'ibge' => '1501105',
            ],
            [
                'name' => 'Baiao',
                'estado_id' => '5',
                'ibge' => '1501204',
            ],
            [
                'name' => 'Bannach',
                'estado_id' => '5',
                'ibge' => '1501253',
            ],
            [
                'name' => 'Barcarena',
                'estado_id' => '5',
                'ibge' => '1501303',
            ],
            [
                'name' => 'Belem',
                'estado_id' => '5',
                'ibge' => '1501402',
            ],
            [
                'name' => 'Belterra',
                'estado_id' => '5',
                'ibge' => '1501451',
            ],
            [
                'name' => 'Benevides',
                'estado_id' => '5',
                'ibge' => '1501501',
            ],
            [
                'name' => 'Bom Jesus do Tocantins',
                'estado_id' => '5',
                'ibge' => '1501576',
            ],
            [
                'name' => 'Bonito',
                'estado_id' => '5',
                'ibge' => '1501600',
            ],
            [
                'name' => 'Braganca',
                'estado_id' => '5',
                'ibge' => '1501709',
            ],
            [
                'name' => 'Brasil Novo',
                'estado_id' => '5',
                'ibge' => '1501725',
            ],
            [
                'name' => 'Brejo Grande do Araguaia',
                'estado_id' => '5',
                'ibge' => '1501758',
            ],
            [
                'name' => 'Breu Branco',
                'estado_id' => '5',
                'ibge' => '1501782',
            ],
            [
                'name' => 'Breves',
                'estado_id' => '5',
                'ibge' => '1501808',
            ],
            [
                'name' => 'Bujaru',
                'estado_id' => '5',
                'ibge' => '1501907',
            ],
            [
                'name' => 'Cachoeira do Piria',
                'estado_id' => '5',
                'ibge' => '1501956',
            ],
            [
                'name' => 'Cachoeira do Arari',
                'estado_id' => '5',
                'ibge' => '1502004',
            ],
            [
                'name' => 'Cameta',
                'estado_id' => '5',
                'ibge' => '1502103',
            ],
            [
                'name' => 'Canaa dos Carajas',
                'estado_id' => '5',
                'ibge' => '1502152',
            ],
            [
                'name' => 'Capanema',
                'estado_id' => '5',
                'ibge' => '1502202',
            ],
            [
                'name' => 'Capitao Poco',
                'estado_id' => '5',
                'ibge' => '1502301',
            ],
            [
                'name' => 'Castanhal',
                'estado_id' => '5',
                'ibge' => '1502400',
            ],
            [
                'name' => 'Chaves',
                'estado_id' => '5',
                'ibge' => '1502509',
            ],
            [
                'name' => 'Colares',
                'estado_id' => '5',
                'ibge' => '1502608',
            ],
            [
                'name' => 'Conceicao do Araguaia',
                'estado_id' => '5',
                'ibge' => '1502707',
            ],
            [
                'name' => 'Concordia do Para',
                'estado_id' => '5',
                'ibge' => '1502756',
            ],
            [
                'name' => 'Cumaru do Norte',
                'estado_id' => '5',
                'ibge' => '1502764',
            ],
            [
                'name' => 'Curionopolis',
                'estado_id' => '5',
                'ibge' => '1502772',
            ],
            [
                'name' => 'Curralinho',
                'estado_id' => '5',
                'ibge' => '1502806',
            ],
            [
                'name' => 'Curua',
                'estado_id' => '5',
                'ibge' => '1502855',
            ],
            [
                'name' => 'Curuca',
                'estado_id' => '5',
                'ibge' => '1502905',
            ],
            [
                'name' => 'Dom Eliseu',
                'estado_id' => '5',
                'ibge' => '1502939',
            ],
            [
                'name' => 'Eldorado dos Carajas',
                'estado_id' => '5',
                'ibge' => '1502954',
            ],
            [
                'name' => 'Faro',
                'estado_id' => '5',
                'ibge' => '1503002',
            ],
            [
                'name' => 'Floresta do Araguaia',
                'estado_id' => '5',
                'ibge' => '1503044',
            ],
            [
                'name' => 'Garrafao do Norte',
                'estado_id' => '5',
                'ibge' => '1503077',
            ],
            [
                'name' => 'Goianesia do Para',
                'estado_id' => '5',
                'ibge' => '1503093',
            ],
            [
                'name' => 'Gurupa',
                'estado_id' => '5',
                'ibge' => '1503101',
            ],
            [
                'name' => 'Igarape-Acu',
                'estado_id' => '5',
                'ibge' => '1503200',
            ],
            [
                'name' => 'Igarape-Miri',
                'estado_id' => '5',
                'ibge' => '1503309',
            ],
            [
                'name' => 'Inhangapi',
                'estado_id' => '5',
                'ibge' => '1503408',
            ],
            [
                'name' => 'Ipixuna do Para',
                'estado_id' => '5',
                'ibge' => '1503457',
            ],
            [
                'name' => 'Irituia',
                'estado_id' => '5',
                'ibge' => '1503507',
            ],
            [
                'name' => 'Itaituba',
                'estado_id' => '5',
                'ibge' => '1503606',
            ],
            [
                'name' => 'Itupiranga',
                'estado_id' => '5',
                'ibge' => '1503705',
            ],
            [
                'name' => 'Jacareacanga',
                'estado_id' => '5',
                'ibge' => '1503754',
            ],
            [
                'name' => 'Jacunda',
                'estado_id' => '5',
                'ibge' => '1503804',
            ],
            [
                'name' => 'Juruti',
                'estado_id' => '5',
                'ibge' => '1503903',
            ],
            [
                'name' => 'Limoeiro do Ajuru',
                'estado_id' => '5',
                'ibge' => '1504000',
            ],
            [
                'name' => 'Mae do Rio',
                'estado_id' => '5',
                'ibge' => '1504059',
            ],
            [
                'name' => 'Magalhaes Barata',
                'estado_id' => '5',
                'ibge' => '1504109',
            ],
            [
                'name' => 'Maraba',
                'estado_id' => '5',
                'ibge' => '1504208',
            ],
            [
                'name' => 'Maracana',
                'estado_id' => '5',
                'ibge' => '1504307',
            ],
            [
                'name' => 'Marapanim',
                'estado_id' => '5',
                'ibge' => '1504406',
            ],
            [
                'name' => 'Marituba',
                'estado_id' => '5',
                'ibge' => '1504422',
            ],
            [
                'name' => 'Medicilandia',
                'estado_id' => '5',
                'ibge' => '1504455',
            ],
            [
                'name' => 'Melgaco',
                'estado_id' => '5',
                'ibge' => '1504505',
            ],
            [
                'name' => 'Mocajuba',
                'estado_id' => '5',
                'ibge' => '1504604',
            ],
            [
                'name' => 'Moju',
                'estado_id' => '5',
                'ibge' => '1504703',
            ],
            [
                'name' => 'Monte Alegre',
                'estado_id' => '5',
                'ibge' => '1504802',
            ],
            [
                'name' => 'Muana',
                'estado_id' => '5',
                'ibge' => '1504901',
            ],
            [
                'name' => 'Nova Esperanca do Piria',
                'estado_id' => '5',
                'ibge' => '1504950',
            ],
            [
                'name' => 'Nova Ipixuna',
                'estado_id' => '5',
                'ibge' => '1504976',
            ],
            [
                'name' => 'Nova Timboteua',
                'estado_id' => '5',
                'ibge' => '1505007',
            ],
            [
                'name' => 'Novo Progresso',
                'estado_id' => '5',
                'ibge' => '1505031',
            ],
            [
                'name' => 'Novo Repartimento',
                'estado_id' => '5',
                'ibge' => '1505064',
            ],
            [
                'name' => '�bidos',
                'estado_id' => '5',
                'ibge' => '1505106',
            ],
            [
                'name' => 'Oeiras do Para',
                'estado_id' => '5',
                'ibge' => '1505205',
            ],
            [
                'name' => 'Oriximina',
                'estado_id' => '5',
                'ibge' => '1505304',
            ],
            [
                'name' => 'Ourem',
                'estado_id' => '5',
                'ibge' => '1505403',
            ],
            [
                'name' => 'Ourilandia do Norte',
                'estado_id' => '5',
                'ibge' => '1505437',
            ],
            [
                'name' => 'Pacaja',
                'estado_id' => '5',
                'ibge' => '1505486',
            ],
            [
                'name' => 'Palestina do Para',
                'estado_id' => '5',
                'ibge' => '1505494',
            ],
            [
                'name' => 'Paragominas',
                'estado_id' => '5',
                'ibge' => '1505502',
            ],
            [
                'name' => 'Parauapebas',
                'estado_id' => '5',
                'ibge' => '1505536',
            ],
            [
                'name' => 'Peixe-Boi',
                'estado_id' => '5',
                'ibge' => '1505601',
            ],
            [
                'name' => 'Picarra',
                'estado_id' => '5',
                'ibge' => '1505635',
            ],
            [
                'name' => 'Placas',
                'estado_id' => '5',
                'ibge' => '1505650',
            ],
            [
                'name' => 'Ponta de Pedras',
                'estado_id' => '5',
                'ibge' => '1505700',
            ],
            [
                'name' => 'Portel',
                'estado_id' => '5',
                'ibge' => '1505809',
            ],
            [
                'name' => 'Porto de Moz',
                'estado_id' => '5',
                'ibge' => '1505908',
            ],
            [
                'name' => 'Prainha',
                'estado_id' => '5',
                'ibge' => '1506005',
            ],
            [
                'name' => 'Primavera',
                'estado_id' => '5',
                'ibge' => '1506104',
            ],
            [
                'name' => 'Quatipuru',
                'estado_id' => '5',
                'ibge' => '1506112',
            ],
            [
                'name' => 'Redencao',
                'estado_id' => '5',
                'ibge' => '1506138',
            ],
            [
                'name' => 'Rio Maria',
                'estado_id' => '5',
                'ibge' => '1506161',
            ],
            [
                'name' => 'Rondon do Para',
                'estado_id' => '5',
                'ibge' => '1506187',
            ],
            [
                'name' => 'Ruropolis',
                'estado_id' => '5',
                'ibge' => '1506195',
            ],
            [
                'name' => 'Salinopolis',
                'estado_id' => '5',
                'ibge' => '1506203',
            ],
            [
                'name' => 'Salvaterra',
                'estado_id' => '5',
                'ibge' => '1506302',
            ],
            [
                'name' => 'Santa Barbara do Para',
                'estado_id' => '5',
                'ibge' => '1506351',
            ],
            [
                'name' => 'Santa Cruz do Arari',
                'estado_id' => '5',
                'ibge' => '1506401',
            ],
            [
                'name' => 'Santa Isabel do Para',
                'estado_id' => '5',
                'ibge' => '1506500',
            ],
            [
                'name' => 'Santa Luzia do Para',
                'estado_id' => '5',
                'ibge' => '1506559',
            ],
            [
                'name' => 'Santa Maria das Barreiras',
                'estado_id' => '5',
                'ibge' => '1506583',
            ],
            [
                'name' => 'Santa Maria do Para',
                'estado_id' => '5',
                'ibge' => '1506609',
            ],
            [
                'name' => 'Santana do Araguaia',
                'estado_id' => '5',
                'ibge' => '1506708',
            ],
            [
                'name' => 'Santarem',
                'estado_id' => '5',
                'ibge' => '1506807',
            ],
            [
                'name' => 'Santarem Novo',
                'estado_id' => '5',
                'ibge' => '1506906',
            ],
            [
                'name' => 'Santo Antonio do Taua',
                'estado_id' => '5',
                'ibge' => '1507003',
            ],
            [
                'name' => 'Sao Caetano de Odivelas',
                'estado_id' => '5',
                'ibge' => '1507102',
            ],
            [
                'name' => 'Sao Domingos do Araguaia',
                'estado_id' => '5',
                'ibge' => '1507151',
            ],
            [
                'name' => 'Sao Domingos do Capim',
                'estado_id' => '5',
                'ibge' => '1507201',
            ],
            [
                'name' => 'Sao Felix do Xingu',
                'estado_id' => '5',
                'ibge' => '1507300',
            ],
            [
                'name' => 'Sao Francisco do Para',
                'estado_id' => '5',
                'ibge' => '1507409',
            ],
            [
                'name' => 'Sao Geraldo do Araguaia',
                'estado_id' => '5',
                'ibge' => '1507458',
            ],
            [
                'name' => 'Sao Joao da Ponta',
                'estado_id' => '5',
                'ibge' => '1507466',
            ],
            [
                'name' => 'Sao Joao de Pirabas',
                'estado_id' => '5',
                'ibge' => '1507474',
            ],
            [
                'name' => 'Sao Joao do Araguaia',
                'estado_id' => '5',
                'ibge' => '1507508',
            ],
            [
                'name' => 'Sao Miguel do Guama',
                'estado_id' => '5',
                'ibge' => '1507607',
            ],
            [
                'name' => 'Sao Sebastiao da Boa Vista',
                'estado_id' => '5',
                'ibge' => '1507706',
            ],
            [
                'name' => 'Sapucaia',
                'estado_id' => '5',
                'ibge' => '1507755',
            ],
            [
                'name' => 'Senador Jose Porfirio',
                'estado_id' => '5',
                'ibge' => '1507805',
            ],
            [
                'name' => 'Soure',
                'estado_id' => '5',
                'ibge' => '1507904',
            ],
            [
                'name' => 'Tailandia',
                'estado_id' => '5',
                'ibge' => '1507953',
            ],
            [
                'name' => 'Terra Alta',
                'estado_id' => '5',
                'ibge' => '1507961',
            ],
            [
                'name' => 'Terra Santa',
                'estado_id' => '5',
                'ibge' => '1507979',
            ],
            [
                'name' => 'Tome-Acu',
                'estado_id' => '5',
                'ibge' => '1508001',
            ],
            [
                'name' => 'Tracuateua',
                'estado_id' => '5',
                'ibge' => '1508035',
            ],
            [
                'name' => 'Trairao',
                'estado_id' => '5',
                'ibge' => '1508050',
            ],
            [
                'name' => 'Tucuma',
                'estado_id' => '5',
                'ibge' => '1508084',
            ],
            [
                'name' => 'Tucurui',
                'estado_id' => '5',
                'ibge' => '1508100',
            ],
            [
                'name' => 'Ulianopolis',
                'estado_id' => '5',
                'ibge' => '1508126',
            ],
            [
                'name' => 'Uruara',
                'estado_id' => '5',
                'ibge' => '1508159',
            ],
            [
                'name' => 'Vigia',
                'estado_id' => '5',
                'ibge' => '1508209',
            ],
            [
                'name' => 'Viseu',
                'estado_id' => '5',
                'ibge' => '1508308',
            ],
            [
                'name' => 'Vitoria do Xingu',
                'estado_id' => '5',
                'ibge' => '1508357',
            ],
            [
                'name' => 'Xinguara',
                'estado_id' => '5',
                'ibge' => '1508407',
            ],
            [
                'name' => 'Pau D Arco',
                'estado_id' => '5',
                'ibge' => '1505551',
            ],

            /* Amapá */

            [
                'name' => 'Serra do Navio',
                'estado_id' => '6',
                'ibge' => '1600055',
            ],
            [
                'name' => 'Amapa',
                'estado_id' => '6',
                'ibge' => '1600105',
            ],
            [
                'name' => 'Pedra Branca do Amapari',
                'estado_id' => '6',
                'ibge' => '1600154',
            ],
            [
                'name' => 'Calcoene',
                'estado_id' => '6',
                'ibge' => '1600204',
            ],
            [
                'name' => 'Cutias',
                'estado_id' => '6',
                'ibge' => '1600212',
            ],
            [
                'name' => 'Ferreira Gomes',
                'estado_id' => '6',
                'ibge' => '1600238',
            ],
            [
                'name' => 'Itaubal',
                'estado_id' => '6',
                'ibge' => '1600253',
            ],
            [
                'name' => 'Laranjal do Jari',
                'estado_id' => '6',
                'ibge' => '1600279',
            ],
            [
                'name' => 'Macapa',
                'estado_id' => '6',
                'ibge' => '1600303',
            ],
            [
                'name' => 'Mazagao',
                'estado_id' => '6',
                'ibge' => '1600402',
            ],
            [
                'name' => 'Oiapoque',
                'estado_id' => '6',
                'ibge' => '1600501',
            ],
            [
                'name' => 'Porto Grande',
                'estado_id' => '6',
                'ibge' => '1600535',
            ],
            [
                'name' => 'Pracuuba',
                'estado_id' => '6',
                'ibge' => '1600550',
            ],
            [
                'name' => 'Santana',
                'estado_id' => '6',
                'ibge' => '1600600',
            ],
            [
                'name' => 'Tartarugalzinho',
                'estado_id' => '6',
                'ibge' => '1600709',
            ],
            [
                'name' => 'Vitoria do Jari',
                'estado_id' => '6',
                'ibge' => '1600808',
            ],

            /* 	Tocantins */

            [
                'name' => 'Abreulandia',
                'estado_id' => '7',
                'ibge' => '1700251',
            ],
            [
                'name' => 'Aguiarnopolis',
                'estado_id' => '7',
                'ibge' => '1700301',
            ],
            [
                'name' => 'Alianca do Tocantins',
                'estado_id' => '7',
                'ibge' => '1700350',
            ],
            [
                'name' => 'Almas',
                'estado_id' => '7',
                'ibge' => '1700400',
            ],
            [
                'name' => 'Alvorada',
                'estado_id' => '7',
                'ibge' => '1700707',
            ],
            [
                'name' => 'Ananas',
                'estado_id' => '7',
                'ibge' => '1701002',
            ],
            [
                'name' => 'Angico',
                'estado_id' => '7',
                'ibge' => '1701051',
            ],
            [
                'name' => 'Aparecida do Rio Negro',
                'estado_id' => '7',
                'ibge' => '1701101',
            ],
            [
                'name' => 'Aragominas',
                'estado_id' => '7',
                'ibge' => '1701309',
            ],
            [
                'name' => 'Araguacema',
                'estado_id' => '7',
                'ibge' => '1701903',
            ],
            [
                'name' => 'Araguacu',
                'estado_id' => '7',
                'ibge' => '1702000',
            ],
            [
                'name' => 'Araguaina',
                'estado_id' => '7',
                'ibge' => '1702109',
            ],
            [
                'name' => 'Araguana',
                'estado_id' => '7',
                'ibge' => '1702158',
            ],
            [
                'name' => 'Araguatins',
                'estado_id' => '7',
                'ibge' => '1702208',
            ],
            [
                'name' => 'Arapoema',
                'estado_id' => '7',
                'ibge' => '1702307',
            ],
            [
                'name' => 'Arraias',
                'estado_id' => '7',
                'ibge' => '1702406',
            ],
            [
                'name' => 'Augustinopolis',
                'estado_id' => '7',
                'ibge' => '1702554',
            ],
            [
                'name' => 'Aurora do Tocantins',
                'estado_id' => '7',
                'ibge' => '1702703',
            ],
            [
                'name' => 'Axixa do Tocantins',
                'estado_id' => '7',
                'ibge' => '1702901',
            ],
            [
                'name' => 'Babaculandia',
                'estado_id' => '7',
                'ibge' => '1703008',
            ],
            [
                'name' => 'Bandeirantes do Tocantins',
                'estado_id' => '7',
                'ibge' => '1703057',
            ],
            [
                'name' => 'Barra do Ouro',
                'estado_id' => '7',
                'ibge' => '1703073',
            ],
            [
                'name' => 'Barrolandia',
                'estado_id' => '7',
                'ibge' => '1703107',
            ],
            [
                'name' => 'Bernardo Sayao',
                'estado_id' => '7',
                'ibge' => '1703206',
            ],
            [
                'name' => 'Bom Jesus do Tocantins',
                'estado_id' => '7',
                'ibge' => '1703305',
            ],
            [
                'name' => 'Brasilandia do Tocantins',
                'estado_id' => '7',
                'ibge' => '1703602',
            ],
            [
                'name' => 'Brejinho de Nazare',
                'estado_id' => '7',
                'ibge' => '1703701',
            ],
            [
                'name' => 'Buriti do Tocantins',
                'estado_id' => '7',
                'ibge' => '1703800',
            ],
            [
                'name' => 'Cachoeirinha',
                'estado_id' => '7',
                'ibge' => '1703826',
            ],
            [
                'name' => 'Campos Lindos',
                'estado_id' => '7',
                'ibge' => '1703842',
            ],
            [
                'name' => 'Cariri do Tocantins',
                'estado_id' => '7',
                'ibge' => '1703867',
            ],
            [
                'name' => 'Carmolandia',
                'estado_id' => '7',
                'ibge' => '1703883',
            ],
            [
                'name' => 'Carrasco Bonito',
                'estado_id' => '7',
                'ibge' => '1703891',
            ],
            [
                'name' => 'Caseara',
                'estado_id' => '7',
                'ibge' => '1703909',
            ],
            [
                'name' => 'Centenario',
                'estado_id' => '7',
                'ibge' => '1704105',
            ],
            [
                'name' => 'Chapada de Areia',
                'estado_id' => '7',
                'ibge' => '1704600',
            ],
            [
                'name' => 'Chapada da Natividade',
                'estado_id' => '7',
                'ibge' => '1705102',
            ],
            [
                'name' => 'Colinas do Tocantins',
                'estado_id' => '7',
                'ibge' => '1705508',
            ],
            [
                'name' => 'Combinado',
                'estado_id' => '7',
                'ibge' => '1705557',
            ],
            [
                'name' => 'Conceicao do Tocantins',
                'estado_id' => '7',
                'ibge' => '1705607',
            ],
            [
                'name' => 'Couto Magalhaes',
                'estado_id' => '7',
                'ibge' => '1706001',
            ],
            [
                'name' => 'Cristalandia',
                'estado_id' => '7',
                'ibge' => '1706100',
            ],
            [
                'name' => 'Crixas do Tocantins',
                'estado_id' => '7',
                'ibge' => '1706258',
            ],
            [
                'name' => 'Darcinopolis',
                'estado_id' => '7',
                'ibge' => '1706506',
            ],
            [
                'name' => 'Dianopolis',
                'estado_id' => '7',
                'ibge' => '1707009',
            ],
            [
                'name' => 'Divinopolis do Tocantins',
                'estado_id' => '7',
                'ibge' => '1707108',
            ],
            [
                'name' => 'Dois Irmaos do Tocantins',
                'estado_id' => '7',
                'ibge' => '1707207',
            ],
            [
                'name' => 'Duere',
                'estado_id' => '7',
                'ibge' => '1707306',
            ],
            [
                'name' => 'Esperantina',
                'estado_id' => '7',
                'ibge' => '1707405',
            ],
            [
                'name' => 'Fatima',
                'estado_id' => '7',
                'ibge' => '1707553',
            ],
            [
                'name' => 'Figueiropolis',
                'estado_id' => '7',
                'ibge' => '1707652',
            ],
            [
                'name' => 'Filadelfia',
                'estado_id' => '7',
                'ibge' => '1707702',
            ],
            [
                'name' => 'Formoso do Araguaia',
                'estado_id' => '7',
                'ibge' => '1708205',
            ],
            [
                'name' => 'Fortaleza do Tabocao',
                'estado_id' => '7',
                'ibge' => '1708254',
            ],
            [
                'name' => 'Goianorte',
                'estado_id' => '7',
                'ibge' => '1708304',
            ],
            [
                'name' => 'Goiatins',
                'estado_id' => '7',
                'ibge' => '1709005',
            ],
            [
                'name' => 'Guarai',
                'estado_id' => '7',
                'ibge' => '1709302',
            ],
            [
                'name' => 'Gurupi',
                'estado_id' => '7',
                'ibge' => '1709500',
            ],
            [
                'name' => 'Ipueiras',
                'estado_id' => '7',
                'ibge' => '1709807',
            ],
            [
                'name' => 'Itacaja',
                'estado_id' => '7',
                'ibge' => '1710508',
            ],
            [
                'name' => 'Itaguatins',
                'estado_id' => '7',
                'ibge' => '1710706',
            ],
            [
                'name' => 'Itapiratins',
                'estado_id' => '7',
                'ibge' => '1710904',
            ],
            [
                'name' => 'Itapora do Tocantins',
                'estado_id' => '7',
                'ibge' => '1711100',
            ],
            [
                'name' => 'Ja� do Tocantins',
                'estado_id' => '7',
                'ibge' => '1711506',
            ],
            [
                'name' => 'Juarina',
                'estado_id' => '7',
                'ibge' => '1711803',
            ],
            [
                'name' => 'Lagoa da Confusao',
                'estado_id' => '7',
                'ibge' => '1711902',
            ],
            [
                'name' => 'Lagoa do Tocantins',
                'estado_id' => '7',
                'ibge' => '1711951',
            ],
            [
                'name' => 'Lajeado',
                'estado_id' => '7',
                'ibge' => '1712009',
            ],
            [
                'name' => 'Lavandeira',
                'estado_id' => '7',
                'ibge' => '1712157',
            ],
            [
                'name' => 'Lizarda',
                'estado_id' => '7',
                'ibge' => '1712405',
            ],
            [
                'name' => 'Luzinopolis',
                'estado_id' => '7',
                'ibge' => '1712454',
            ],
            [
                'name' => 'Marianopolis do Tocantins',
                'estado_id' => '7',
                'ibge' => '1712504',
            ],
            [
                'name' => 'Mateiros',
                'estado_id' => '7',
                'ibge' => '1712702',
            ],
            [
                'name' => 'Maurilandia do Tocantins',
                'estado_id' => '7',
                'ibge' => '1712801',
            ],
            [
                'name' => 'Miracema do Tocantins',
                'estado_id' => '7',
                'ibge' => '1713205',
            ],
            [
                'name' => 'Miranorte',
                'estado_id' => '7',
                'ibge' => '1713304',
            ],
            [
                'name' => 'Monte do Carmo',
                'estado_id' => '7',
                'ibge' => '1713601',
            ],
            [
                'name' => 'Monte Santo do Tocantins',
                'estado_id' => '7',
                'ibge' => '1713700',
            ],
            [
                'name' => 'Palmeiras do Tocantins',
                'estado_id' => '7',
                'ibge' => '1713809',
            ],
            [
                'name' => 'Muricilandia',
                'estado_id' => '7',
                'ibge' => '1713957',
            ],
            [
                'name' => 'Natividade',
                'estado_id' => '7',
                'ibge' => '1714203',
            ],
            [
                'name' => 'Nazare',
                'estado_id' => '7',
                'ibge' => '1714302',
            ],
            [
                'name' => 'Nova Olinda',
                'estado_id' => '7',
                'ibge' => '1714880',
            ],
            [
                'name' => 'Nova Rosalandia',
                'estado_id' => '7',
                'ibge' => '1715002',
            ],
            [
                'name' => 'Novo Acordo',
                'estado_id' => '7',
                'ibge' => '1715101',
            ],
            [
                'name' => 'Novo Alegre',
                'estado_id' => '7',
                'ibge' => '1715150',
            ],
            [
                'name' => 'Novo Jardim',
                'estado_id' => '7',
                'ibge' => '1715259',
            ],
            [
                'name' => 'Oliveira de Fatima',
                'estado_id' => '7',
                'ibge' => '1715507',
            ],
            [
                'name' => 'Palmeirante',
                'estado_id' => '7',
                'ibge' => '1715705',
            ],
            [
                'name' => 'Palmeiropolis',
                'estado_id' => '7',
                'ibge' => '1715754',
            ],
            [
                'name' => 'Paraiso do Tocantins',
                'estado_id' => '7',
                'ibge' => '1716109',
            ],
            [
                'name' => 'Parana',
                'estado_id' => '7',
                'ibge' => '1716208',
            ],
            [
                'name' => 'Pedro Afonso',
                'estado_id' => '7',
                'ibge' => '1716505',
            ],
            [
                'name' => 'Peixe',
                'estado_id' => '7',
                'ibge' => '1716604',
            ],
            [
                'name' => 'Pequizeiro',
                'estado_id' => '7',
                'ibge' => '1716653',
            ],
            [
                'name' => 'Colmeia',
                'estado_id' => '7',
                'ibge' => '1716703',
            ],
            [
                'name' => 'Pindorama do Tocantins',
                'estado_id' => '7',
                'ibge' => '1717008',
            ],
            [
                'name' => 'Piraqu�',
                'estado_id' => '7',
                'ibge' => '1717206',
            ],
            [
                'name' => 'Pium',
                'estado_id' => '7',
                'ibge' => '1717503',
            ],
            [
                'name' => 'Ponte Alta do Bom Jesus',
                'estado_id' => '7',
                'ibge' => '1717800',
            ],
            [
                'name' => 'Ponte Alta do Tocantins',
                'estado_id' => '7',
                'ibge' => '1717909',
            ],
            [
                'name' => 'Porto Alegre do Tocantins',
                'estado_id' => '7',
                'ibge' => '1718006',
            ],
            [
                'name' => 'Porto Nacional',
                'estado_id' => '7',
                'ibge' => '1718204',
            ],
            [
                'name' => 'Praia Norte',
                'estado_id' => '7',
                'ibge' => '1718303',
            ],
            [
                'name' => 'Presidente Kennedy',
                'estado_id' => '7',
                'ibge' => '1718402',
            ],
            [
                'name' => 'Pugmil',
                'estado_id' => '7',
                'ibge' => '1718451',
            ],
            [
                'name' => 'Recursolandia',
                'estado_id' => '7',
                'ibge' => '1718501',
            ],
            [
                'name' => 'Riachinho',
                'estado_id' => '7',
                'ibge' => '1718550',
            ],
            [
                'name' => 'Rio da Conceicao',
                'estado_id' => '7',
                'ibge' => '1718659',
            ],
            [
                'name' => 'Rio dos Bois',
                'estado_id' => '7',
                'ibge' => '1718709',
            ],
            [
                'name' => 'Rio Sono',
                'estado_id' => '7',
                'ibge' => '1718758',
            ],
            [
                'name' => 'Sampaio',
                'estado_id' => '7',
                'ibge' => '1718808',
            ],
            [
                'name' => 'Sandolandia',
                'estado_id' => '7',
                'ibge' => '1718840',
            ],
            [
                'name' => 'Santa Fe do Araguaia',
                'estado_id' => '7',
                'ibge' => '1718865',
            ],
            [
                'name' => 'Santa Maria do Tocantins',
                'estado_id' => '7',
                'ibge' => '1718881',
            ],
            [
                'name' => 'Santa Rita do Tocantins',
                'estado_id' => '7',
                'ibge' => '1718899',
            ],
            [
                'name' => 'Santa Rosa do Tocantins',
                'estado_id' => '7',
                'ibge' => '1718907',
            ],
            [
                'name' => 'Santa Tereza do Tocantins',
                'estado_id' => '7',
                'ibge' => '1719004',
            ],
            [
                'name' => 'Santa Terezinha do Tocantins',
                'estado_id' => '7',
                'ibge' => '1720002',
            ],
            [
                'name' => 'Sao Bento do Tocantins',
                'estado_id' => '7',
                'ibge' => '1720101',
            ],
            [
                'name' => 'Sao Felix do Tocantins',
                'estado_id' => '7',
                'ibge' => '1720150',
            ],
            [
                'name' => 'Sao Miguel do Tocantins',
                'estado_id' => '7',
                'ibge' => '1720200',
            ],
            [
                'name' => 'Sao Salvador do Tocantins',
                'estado_id' => '7',
                'ibge' => '1720259',
            ],
            [
                'name' => 'Sao Sebastiao do Tocantins',
                'estado_id' => '7',
                'ibge' => '1720309',
            ],
            [
                'name' => 'Sao Valerio',
                'estado_id' => '7',
                'ibge' => '1720499',
            ],
            [
                'name' => 'Silvanopolis',
                'estado_id' => '7',
                'ibge' => '1720655',
            ],
            [
                'name' => 'Sitio Novo do Tocantins',
                'estado_id' => '7',
                'ibge' => '1720804',
            ],
            [
                'name' => 'Sucupira',
                'estado_id' => '7',
                'ibge' => '1720853',
            ],
            [
                'name' => 'Taguatinga',
                'estado_id' => '7',
                'ibge' => '1720903',
            ],
            [
                'name' => 'Taipas do Tocantins',
                'estado_id' => '7',
                'ibge' => '1720937',
            ],
            [
                'name' => 'Talisma',
                'estado_id' => '7',
                'ibge' => '1720978',
            ],
            [
                'name' => 'Palmas',
                'estado_id' => '7',
                'ibge' => '1721000',
            ],
            [
                'name' => 'Tocantinia',
                'estado_id' => '7',
                'ibge' => '1721109',
            ],
            [
                'name' => 'Tocantinopolis',
                'estado_id' => '7',
                'ibge' => '1721208',
            ],
            [
                'name' => 'Tupirama',
                'estado_id' => '7',
                'ibge' => '1721257',
            ],
            [
                'name' => 'Tupiratins',
                'estado_id' => '7',
                'ibge' => '1721307',
            ],
            [
                'name' => 'Wanderlandia',
                'estado_id' => '7',
                'ibge' => '1722081',
            ],
            [
                'name' => 'Xambioa',
                'estado_id' => '7',
                'ibge' => '1722107',
            ],
            [
                'name' => 'Pau D Arco',
                'estado_id' => '7',
                'ibge' => '1716307',
            ],

            /* Maranhão */

            [
                'name' => 'Acailandia',
                'estado_id' => '8',
                'ibge' => '2100055',
            ],
            [
                'name' => 'Afonso Cunha',
                'estado_id' => '8',
                'ibge' => '2100105',
            ],
            [
                'name' => 'Agua Doce do Maranhao',
                'estado_id' => '8',
                'ibge' => '2100154',
            ],
            [
                'name' => 'Alcantara',
                'estado_id' => '8',
                'ibge' => '2100204',
            ],
            [
                'name' => 'Aldeias Altas',
                'estado_id' => '8',
                'ibge' => '2100303',
            ],
            [
                'name' => 'Altamira do Maranhao',
                'estado_id' => '8',
                'ibge' => '2100402',
            ],
            [
                'name' => 'Alto Alegre do Maranhao',
                'estado_id' => '8',
                'ibge' => '2100436',
            ],
            [
                'name' => 'Alto Alegre do Pindare',
                'estado_id' => '8',
                'ibge' => '2100477',
            ],
            [
                'name' => 'Alto Parnaiba',
                'estado_id' => '8',
                'ibge' => '2100501',
            ],
            [
                'name' => 'Amapa do Maranhao',
                'estado_id' => '8',
                'ibge' => '2100550',
            ],
            [
                'name' => 'Amarante do Maranhao',
                'estado_id' => '8',
                'ibge' => '2100600',
            ],
            [
                'name' => 'Anajatuba',
                'estado_id' => '8',
                'ibge' => '2100709',
            ],
            [
                'name' => 'Anapurus',
                'estado_id' => '8',
                'ibge' => '2100808',
            ],
            [
                'name' => 'Apicum-Acu',
                'estado_id' => '8',
                'ibge' => '2100832',
            ],
            [
                'name' => 'Araguana',
                'estado_id' => '8',
                'ibge' => '2100873',
            ],
            [
                'name' => 'Araioses',
                'estado_id' => '8',
                'ibge' => '2100907',
            ],
            [
                'name' => 'Arame',
                'estado_id' => '8',
                'ibge' => '2100956',
            ],
            [
                'name' => 'Arari',
                'estado_id' => '8',
                'ibge' => '2101004',
            ],
            [
                'name' => 'Axixa',
                'estado_id' => '8',
                'ibge' => '2101103',
            ],
            [
                'name' => 'Bacabal',
                'estado_id' => '8',
                'ibge' => '2101202',
            ],
            [
                'name' => 'Bacabeira',
                'estado_id' => '8',
                'ibge' => '2101251',
            ],
            [
                'name' => 'Bacuri',
                'estado_id' => '8',
                'ibge' => '2101301',
            ],
            [
                'name' => 'Bacurituba',
                'estado_id' => '8',
                'ibge' => '2101350',
            ],
            [
                'name' => 'Balsas',
                'estado_id' => '8',
                'ibge' => '2101400',
            ],
            [
                'name' => 'Barao de Graja�',
                'estado_id' => '8',
                'ibge' => '2101509',
            ],
            [
                'name' => 'Barra do Corda',
                'estado_id' => '8',
                'ibge' => '2101608',
            ],
            [
                'name' => 'Barreirinhas',
                'estado_id' => '8',
                'ibge' => '2101707',
            ],
            [
                'name' => 'Belagua',
                'estado_id' => '8',
                'ibge' => '2101731',
            ],
            [
                'name' => 'Bela Vista do Maranhao',
                'estado_id' => '8',
                'ibge' => '2101772',
            ],
            [
                'name' => 'Benedito Leite',
                'estado_id' => '8',
                'ibge' => '2101806',
            ],
            [
                'name' => 'Bequimao',
                'estado_id' => '8',
                'ibge' => '2101905',
            ],
            [
                'name' => 'Bernardo do Mearim',
                'estado_id' => '8',
                'ibge' => '2101939',
            ],
            [
                'name' => 'Boa Vista do Gurupi',
                'estado_id' => '8',
                'ibge' => '2101970',
            ],
            [
                'name' => 'Bom Jardim',
                'estado_id' => '8',
                'ibge' => '2102002',
            ],
            [
                'name' => 'Bom Jesus das Selvas',
                'estado_id' => '8',
                'ibge' => '2102036',
            ],
            [
                'name' => 'Bom Lugar',
                'estado_id' => '8',
                'ibge' => '2102077',
            ],
            [
                'name' => 'Brejo',
                'estado_id' => '8',
                'ibge' => '2102101',
            ],
            [
                'name' => 'Brejo de Areia',
                'estado_id' => '8',
                'ibge' => '2102150',
            ],
            [
                'name' => 'Buriti',
                'estado_id' => '8',
                'ibge' => '2102200',
            ],
            [
                'name' => 'Buriti Bravo',
                'estado_id' => '8',
                'ibge' => '2102309',
            ],
            [
                'name' => 'Buriticupu',
                'estado_id' => '8',
                'ibge' => '2102325',
            ],
            [
                'name' => 'Buritirana',
                'estado_id' => '8',
                'ibge' => '2102358',
            ],
            [
                'name' => 'Cachoeira Grande',
                'estado_id' => '8',
                'ibge' => '2102374',
            ],
            [
                'name' => 'Cajapio',
                'estado_id' => '8',
                'ibge' => '2102408',
            ],
            [
                'name' => 'Cajari',
                'estado_id' => '8',
                'ibge' => '2102507',
            ],
            [
                'name' => 'Campestre do Maranhao',
                'estado_id' => '8',
                'ibge' => '2102556',
            ],
            [
                'name' => 'Candido Mendes',
                'estado_id' => '8',
                'ibge' => '2102606',
            ],
            [
                'name' => 'Cantanhede',
                'estado_id' => '8',
                'ibge' => '2102705',
            ],
            [
                'name' => 'Capinzal do Norte',
                'estado_id' => '8',
                'ibge' => '2102754',
            ],
            [
                'name' => 'Carolina',
                'estado_id' => '8',
                'ibge' => '2102804',
            ],
            [
                'name' => 'Carutapera',
                'estado_id' => '8',
                'ibge' => '2102903',
            ],
            [
                'name' => 'Caxias',
                'estado_id' => '8',
                'ibge' => '2103000',
            ],
            [
                'name' => 'Cedral',
                'estado_id' => '8',
                'ibge' => '2103109',
            ],
            [
                'name' => 'Central do Maranhao',
                'estado_id' => '8',
                'ibge' => '2103125',
            ],
            [
                'name' => 'Centro do Guilherme',
                'estado_id' => '8',
                'ibge' => '2103158',
            ],
            [
                'name' => 'Centro Novo do Maranhao',
                'estado_id' => '8',
                'ibge' => '2103174',
            ],
            [
                'name' => 'Chapadinha',
                'estado_id' => '8',
                'ibge' => '2103208',
            ],
            [
                'name' => 'Cidelandia',
                'estado_id' => '8',
                'ibge' => '2103257',
            ],
            [
                'name' => 'Codo',
                'estado_id' => '8',
                'ibge' => '2103307',
            ],
            [
                'name' => 'Coelho Neto',
                'estado_id' => '8',
                'ibge' => '2103406',
            ],
            [
                'name' => 'Colinas',
                'estado_id' => '8',
                'ibge' => '2103505',
            ],
            [
                'name' => 'Conceicao do Lago-Acu',
                'estado_id' => '8',
                'ibge' => '2103554',
            ],
            [
                'name' => 'Coroata',
                'estado_id' => '8',
                'ibge' => '2103604',
            ],
            [
                'name' => 'Cururupu',
                'estado_id' => '8',
                'ibge' => '2103703',
            ],
            [
                'name' => 'Davinopolis',
                'estado_id' => '8',
                'ibge' => '2103752',
            ],
            [
                'name' => 'Dom Pedro',
                'estado_id' => '8',
                'ibge' => '2103802',
            ],
            [
                'name' => 'Duque Bacelar',
                'estado_id' => '8',
                'ibge' => '2103901',
            ],
            [
                'name' => 'Esperantinopolis',
                'estado_id' => '8',
                'ibge' => '2104008',
            ],
            [
                'name' => 'Estreito',
                'estado_id' => '8',
                'ibge' => '2104057',
            ],
            [
                'name' => 'Feira Nova do Maranhao',
                'estado_id' => '8',
                'ibge' => '2104073',
            ],
            [
                'name' => 'Fernando Falcao',
                'estado_id' => '8',
                'ibge' => '2104081',
            ],
            [
                'name' => 'Formosa da Serra Negra',
                'estado_id' => '8',
                'ibge' => '2104099',
            ],
            [
                'name' => 'Fortaleza dos Nogueiras',
                'estado_id' => '8',
                'ibge' => '2104107',
            ],
            [
                'name' => 'Fortuna',
                'estado_id' => '8',
                'ibge' => '2104206',
            ],
            [
                'name' => 'Godofredo Viana',
                'estado_id' => '8',
                'ibge' => '2104305',
            ],
            [
                'name' => 'Goncalves Dias',
                'estado_id' => '8',
                'ibge' => '2104404',
            ],
            [
                'name' => 'Governador Archer',
                'estado_id' => '8',
                'ibge' => '2104503',
            ],
            [
                'name' => 'Governador Edison Lobao',
                'estado_id' => '8',
                'ibge' => '2104552',
            ],
            [
                'name' => 'Governador Eug�nio Barros',
                'estado_id' => '8',
                'ibge' => '2104602',
            ],
            [
                'name' => 'Governador Luiz Rocha',
                'estado_id' => '8',
                'ibge' => '2104628',
            ],
            [
                'name' => 'Governador Newton Bello',
                'estado_id' => '8',
                'ibge' => '2104651',
            ],
            [
                'name' => 'Governador Nunes Freire',
                'estado_id' => '8',
                'ibge' => '2104677',
            ],
            [
                'name' => 'Graca Aranha',
                'estado_id' => '8',
                'ibge' => '2104701',
            ],
            [
                'name' => 'Graja�',
                'estado_id' => '8',
                'ibge' => '2104800',
            ],
            [
                'name' => 'Guimaraes',
                'estado_id' => '8',
                'ibge' => '2104909',
            ],
            [
                'name' => 'Humberto de Campos',
                'estado_id' => '8',
                'ibge' => '2105005',
            ],
            [
                'name' => 'Icatu',
                'estado_id' => '8',
                'ibge' => '2105104',
            ],
            [
                'name' => 'Igarape do Meio',
                'estado_id' => '8',
                'ibge' => '2105153',
            ],
            [
                'name' => 'Igarape Grande',
                'estado_id' => '8',
                'ibge' => '2105203',
            ],
            [
                'name' => 'Imperatriz',
                'estado_id' => '8',
                'ibge' => '2105302',
            ],
            [
                'name' => 'Itaipava do Graja�',
                'estado_id' => '8',
                'ibge' => '2105351',
            ],
            [
                'name' => 'Itapecuru Mirim',
                'estado_id' => '8',
                'ibge' => '2105401',
            ],
            [
                'name' => 'Itinga do Maranhao',
                'estado_id' => '8',
                'ibge' => '2105427',
            ],
            [
                'name' => 'Jatoba',
                'estado_id' => '8',
                'ibge' => '2105450',
            ],
            [
                'name' => 'Jenipapo dos Vieiras',
                'estado_id' => '8',
                'ibge' => '2105476',
            ],
            [
                'name' => 'Joao Lisboa',
                'estado_id' => '8',
                'ibge' => '2105500',
            ],
            [
                'name' => 'Joselandia',
                'estado_id' => '8',
                'ibge' => '2105609',
            ],
            [
                'name' => 'Junco do Maranhao',
                'estado_id' => '8',
                'ibge' => '2105658',
            ],
            [
                'name' => 'Lago da Pedra',
                'estado_id' => '8',
                'ibge' => '2105708',
            ],
            [
                'name' => 'Lago do Junco',
                'estado_id' => '8',
                'ibge' => '2105807',
            ],
            [
                'name' => 'Lago Verde',
                'estado_id' => '8',
                'ibge' => '2105906',
            ],
            [
                'name' => 'Lagoa do Mato',
                'estado_id' => '8',
                'ibge' => '2105922',
            ],
            [
                'name' => 'Lago dos Rodrigues',
                'estado_id' => '8',
                'ibge' => '2105948',
            ],
            [
                'name' => 'Lagoa Grande do Maranhao',
                'estado_id' => '8',
                'ibge' => '2105963',
            ],
            [
                'name' => 'Lajeado Novo',
                'estado_id' => '8',
                'ibge' => '2105989',
            ],
            [
                'name' => 'Lima Campos',
                'estado_id' => '8',
                'ibge' => '2106003',
            ],
            [
                'name' => 'Loreto',
                'estado_id' => '8',
                'ibge' => '2106102',
            ],
            [
                'name' => 'Luis Domingues',
                'estado_id' => '8',
                'ibge' => '2106201',
            ],
            [
                'name' => 'Magalhaes de Almeida',
                'estado_id' => '8',
                'ibge' => '2106300',
            ],
            [
                'name' => 'Maracacume',
                'estado_id' => '8',
                'ibge' => '2106326',
            ],
            [
                'name' => 'Maraja do Sena',
                'estado_id' => '8',
                'ibge' => '2106359',
            ],
            [
                'name' => 'Maranhaozinho',
                'estado_id' => '8',
                'ibge' => '2106375',
            ],
            [
                'name' => 'Mata Roma',
                'estado_id' => '8',
                'ibge' => '2106409',
            ],
            [
                'name' => 'Matinha',
                'estado_id' => '8',
                'ibge' => '2106508',
            ],
            [
                'name' => 'Mat�es',
                'estado_id' => '8',
                'ibge' => '2106607',
            ],
            [
                'name' => 'Mat�es do Norte',
                'estado_id' => '8',
                'ibge' => '2106631',
            ],
            [
                'name' => 'Milagres do Maranhao',
                'estado_id' => '8',
                'ibge' => '2106672',
            ],
            [
                'name' => 'Mirador',
                'estado_id' => '8',
                'ibge' => '2106706',
            ],
            [
                'name' => 'Miranda do Norte',
                'estado_id' => '8',
                'ibge' => '2106755',
            ],
            [
                'name' => 'Mirinzal',
                'estado_id' => '8',
                'ibge' => '2106805',
            ],
            [
                'name' => 'Moncao',
                'estado_id' => '8',
                'ibge' => '2106904',
            ],
            [
                'name' => 'Montes Altos',
                'estado_id' => '8',
                'ibge' => '2107001',
            ],
            [
                'name' => 'Morros',
                'estado_id' => '8',
                'ibge' => '2107100',
            ],
            [
                'name' => 'Nina Rodrigues',
                'estado_id' => '8',
                'ibge' => '2107209',
            ],
            [
                'name' => 'Nova Colinas',
                'estado_id' => '8',
                'ibge' => '2107258',
            ],
            [
                'name' => 'Nova Iorque',
                'estado_id' => '8',
                'ibge' => '2107308',
            ],
            [
                'name' => 'Nova Olinda do Maranhao',
                'estado_id' => '8',
                'ibge' => '2107357',
            ],
            [
                'name' => 'Olinda Nova do Maranhao',
                'estado_id' => '8',
                'ibge' => '2107456',
            ],
            [
                'name' => 'Paco do Lumiar',
                'estado_id' => '8',
                'ibge' => '2107506',
            ],
            [
                'name' => 'Palmeirandia',
                'estado_id' => '8',
                'ibge' => '2107605',
            ],
            [
                'name' => 'Paraibano',
                'estado_id' => '8',
                'ibge' => '2107704',
            ],
            [
                'name' => 'Parnarama',
                'estado_id' => '8',
                'ibge' => '2107803',
            ],
            [
                'name' => 'Passagem Franca',
                'estado_id' => '8',
                'ibge' => '2107902',
            ],
            [
                'name' => 'Pastos Bons',
                'estado_id' => '8',
                'ibge' => '2108009',
            ],
            [
                'name' => 'Paulino Neves',
                'estado_id' => '8',
                'ibge' => '2108058',
            ],
            [
                'name' => 'Paulo Ramos',
                'estado_id' => '8',
                'ibge' => '2108108',
            ],
            [
                'name' => 'Pedreiras',
                'estado_id' => '8',
                'ibge' => '2108207',
            ],
            [
                'name' => 'Pedro do Rosario',
                'estado_id' => '8',
                'ibge' => '2108256',
            ],
            [
                'name' => 'Penalva',
                'estado_id' => '8',
                'ibge' => '2108306',
            ],
            [
                'name' => 'Peri Mirim',
                'estado_id' => '8',
                'ibge' => '2108405',
            ],
            [
                'name' => 'Peritoro',
                'estado_id' => '8',
                'ibge' => '2108454',
            ],
            [
                'name' => 'Pindare-Mirim',
                'estado_id' => '8',
                'ibge' => '2108504',
            ],
            [
                'name' => 'Pinheiro',
                'estado_id' => '8',
                'ibge' => '2108603',
            ],
            [
                'name' => 'Pio XII',
                'estado_id' => '8',
                'ibge' => '2108702',
            ],
            [
                'name' => 'Pirapemas',
                'estado_id' => '8',
                'ibge' => '2108801',
            ],
            [
                'name' => 'Pocao de Pedras',
                'estado_id' => '8',
                'ibge' => '2108900',
            ],
            [
                'name' => 'Porto Franco',
                'estado_id' => '8',
                'ibge' => '2109007',
            ],
            [
                'name' => 'Porto Rico do Maranhao',
                'estado_id' => '8',
                'ibge' => '2109056',
            ],
            [
                'name' => 'Presidente Dutra',
                'estado_id' => '8',
                'ibge' => '2109106',
            ],
            [
                'name' => 'Presidente Juscelino',
                'estado_id' => '8',
                'ibge' => '2109205',
            ],
            [
                'name' => 'Presidente Medici',
                'estado_id' => '8',
                'ibge' => '2109239',
            ],
            [
                'name' => 'Presidente Sarney',
                'estado_id' => '8',
                'ibge' => '2109270',
            ],
            [
                'name' => 'Presidente Vargas',
                'estado_id' => '8',
                'ibge' => '2109304',
            ],
            [
                'name' => 'Primeira Cruz',
                'estado_id' => '8',
                'ibge' => '2109403',
            ],
            [
                'name' => 'Raposa',
                'estado_id' => '8',
                'ibge' => '2109452',
            ],
            [
                'name' => 'Riachao',
                'estado_id' => '8',
                'ibge' => '2109502',
            ],
            [
                'name' => 'Ribamar Fiquene',
                'estado_id' => '8',
                'ibge' => '2109551',
            ],
            [
                'name' => 'Rosario',
                'estado_id' => '8',
                'ibge' => '2109601',
            ],
            [
                'name' => 'Sambaiba',
                'estado_id' => '8',
                'ibge' => '2109700',
            ],
            [
                'name' => 'Santa Filomena do Maranhao',
                'estado_id' => '8',
                'ibge' => '2109759',
            ],
            [
                'name' => 'Santa Helena',
                'estado_id' => '8',
                'ibge' => '2109809',
            ],
            [
                'name' => 'Santa In�s',
                'estado_id' => '8',
                'ibge' => '2109908',
            ],
            [
                'name' => 'Santa Luzia',
                'estado_id' => '8',
                'ibge' => '2110005',
            ],
            [
                'name' => 'Santa Luzia do Parua',
                'estado_id' => '8',
                'ibge' => '2110039',
            ],
            [
                'name' => 'Santa Quiteria do Maranhao',
                'estado_id' => '8',
                'ibge' => '2110104',
            ],
            [
                'name' => 'Santa Rita',
                'estado_id' => '8',
                'ibge' => '2110203',
            ],
            [
                'name' => 'Santana do Maranhao',
                'estado_id' => '8',
                'ibge' => '2110237',
            ],
            [
                'name' => 'Santo Amaro do Maranhao',
                'estado_id' => '8',
                'ibge' => '2110278',
            ],
            [
                'name' => 'Santo Antonio dos Lopes',
                'estado_id' => '8',
                'ibge' => '2110302',
            ],
            [
                'name' => 'Sao Benedito do Rio Preto',
                'estado_id' => '8',
                'ibge' => '2110401',
            ],
            [
                'name' => 'Sao Bento',
                'estado_id' => '8',
                'ibge' => '2110500',
            ],
            [
                'name' => 'Sao Bernardo',
                'estado_id' => '8',
                'ibge' => '2110609',
            ],
            [
                'name' => 'Sao Domingos do Azeitao',
                'estado_id' => '8',
                'ibge' => '2110658',
            ],
            [
                'name' => 'Sao Domingos do Maranhao',
                'estado_id' => '8',
                'ibge' => '2110708',
            ],
            [
                'name' => 'Sao Felix de Balsas',
                'estado_id' => '8',
                'ibge' => '2110807',
            ],
            [
                'name' => 'Sao Francisco do Brejao',
                'estado_id' => '8',
                'ibge' => '2110856',
            ],
            [
                'name' => 'Sao Francisco do Maranhao',
                'estado_id' => '8',
                'ibge' => '2110906',
            ],
            [
                'name' => 'Sao Joao Batista',
                'estado_id' => '8',
                'ibge' => '2111003',
            ],
            [
                'name' => 'Sao Joao do Car�',
                'estado_id' => '8',
                'ibge' => '2111029',
            ],
            [
                'name' => 'Sao Joao do Paraiso',
                'estado_id' => '8',
                'ibge' => '2111052',
            ],
            [
                'name' => 'Sao Joao do Soter',
                'estado_id' => '8',
                'ibge' => '2111078',
            ],
            [
                'name' => 'Sao Joao dos Patos',
                'estado_id' => '8',
                'ibge' => '2111102',
            ],
            [
                'name' => 'Sao Jose de Ribamar',
                'estado_id' => '8',
                'ibge' => '2111201',
            ],
            [
                'name' => 'Sao Jose dos Basilios',
                'estado_id' => '8',
                'ibge' => '2111250',
            ],
            [
                'name' => 'Sao Luis',
                'estado_id' => '8',
                'ibge' => '2111300',
            ],
            [
                'name' => 'Sao Luis Gonzaga do Maranhao',
                'estado_id' => '8',
                'ibge' => '2111409',
            ],
            [
                'name' => 'Sao Mateus do Maranhao',
                'estado_id' => '8',
                'ibge' => '2111508',
            ],
            [
                'name' => 'Sao Pedro da Agua Branca',
                'estado_id' => '8',
                'ibge' => '2111532',
            ],
            [
                'name' => 'Sao Pedro dos Crentes',
                'estado_id' => '8',
                'ibge' => '2111573',
            ],
            [
                'name' => 'Sao Raimundo das Mangabeiras',
                'estado_id' => '8',
                'ibge' => '2111607',
            ],
            [
                'name' => 'Sao Raimundo do Doca Bezerra',
                'estado_id' => '8',
                'ibge' => '2111631',
            ],
            [
                'name' => 'Sao Roberto',
                'estado_id' => '8',
                'ibge' => '2111672',
            ],
            [
                'name' => 'Sao Vicente Ferrer',
                'estado_id' => '8',
                'ibge' => '2111706',
            ],
            [
                'name' => 'Satubinha',
                'estado_id' => '8',
                'ibge' => '2111722',
            ],
            [
                'name' => 'Senador Alexandre Costa',
                'estado_id' => '8',
                'ibge' => '2111748',
            ],
            [
                'name' => 'Senador La Rocque',
                'estado_id' => '8',
                'ibge' => '2111763',
            ],
            [
                'name' => 'Serrano do Maranhao',
                'estado_id' => '8',
                'ibge' => '2111789',
            ],
            [
                'name' => 'Sitio Novo',
                'estado_id' => '8',
                'ibge' => '2111805',
            ],
            [
                'name' => 'Sucupira do Norte',
                'estado_id' => '8',
                'ibge' => '2111904',
            ],
            [
                'name' => 'Sucupira do Riachao',
                'estado_id' => '8',
                'ibge' => '2111953',
            ],
            [
                'name' => 'Tasso Fragoso',
                'estado_id' => '8',
                'ibge' => '2112001',
            ],
            [
                'name' => 'Timbiras',
                'estado_id' => '8',
                'ibge' => '2112100',
            ],
            [
                'name' => 'Timon',
                'estado_id' => '8',
                'ibge' => '2112209',
            ],
            [
                'name' => 'Trizidela do Vale',
                'estado_id' => '8',
                'ibge' => '2112233',
            ],
            [
                'name' => 'Tufilandia',
                'estado_id' => '8',
                'ibge' => '2112274',
            ],
            [
                'name' => 'Tuntum',
                'estado_id' => '8',
                'ibge' => '2112308',
            ],
            [
                'name' => 'Turiacu',
                'estado_id' => '8',
                'ibge' => '2112407',
            ],
            [
                'name' => 'Turilandia',
                'estado_id' => '8',
                'ibge' => '2112456',
            ],
            [
                'name' => 'Tutoia',
                'estado_id' => '8',
                'ibge' => '2112506',
            ],
            [
                'name' => 'Urbano Santos',
                'estado_id' => '8',
                'ibge' => '2112605',
            ],
            [
                'name' => 'Vargem Grande',
                'estado_id' => '8',
                'ibge' => '2112704',
            ],
            [
                'name' => 'Viana',
                'estado_id' => '8',
                'ibge' => '2112803',
            ],
            [
                'name' => 'Vila Nova dos Martirios',
                'estado_id' => '8',
                'ibge' => '2112852',
            ],
            [
                'name' => 'Vitoria do Mearim',
                'estado_id' => '8',
                'ibge' => '2112902',
            ],
            [
                'name' => 'Vitorino Freire',
                'estado_id' => '8',
                'ibge' => '2113009',
            ],
            [
                'name' => 'Ze Doca',
                'estado_id' => '8',
                'ibge' => '2114007',
            ],
            [
                'name' => 'Olho D Agua das Cunhas',
                'estado_id' => '8',
                'ibge' => '2107407',
            ],

            /* Piauí */

            [
                'name' => 'Acaua',
                'estado_id' => '9',
                'ibge' => '2200053',
            ],
            [
                'name' => 'Agricolandia',
                'estado_id' => '9',
                'ibge' => '2200103',
            ],
            [
                'name' => 'Agua Branca',
                'estado_id' => '9',
                'ibge' => '2200202',
            ],
            [
                'name' => 'Alagoinha do Piaui',
                'estado_id' => '9',
                'ibge' => '2200251',
            ],
            [
                'name' => 'Alegrete do Piaui',
                'estado_id' => '9',
                'ibge' => '2200277',
            ],
            [
                'name' => 'Alto Longa',
                'estado_id' => '9',
                'ibge' => '2200301',
            ],
            [
                'name' => 'Altos',
                'estado_id' => '9',
                'ibge' => '2200400',
            ],
            [
                'name' => 'Alvorada do Gurgueia',
                'estado_id' => '9',
                'ibge' => '2200459',
            ],
            [
                'name' => 'Amarante',
                'estado_id' => '9',
                'ibge' => '2200509',
            ],
            [
                'name' => 'Angical do Piaui',
                'estado_id' => '9',
                'ibge' => '2200608',
            ],
            [
                'name' => 'Anisio de Abreu',
                'estado_id' => '9',
                'ibge' => '2200707',
            ],
            [
                'name' => 'Antonio Almeida',
                'estado_id' => '9',
                'ibge' => '2200806',
            ],
            [
                'name' => 'Aroazes',
                'estado_id' => '9',
                'ibge' => '2200905',
            ],
            [
                'name' => 'Aroeiras do Itaim',
                'estado_id' => '9',
                'ibge' => '2200954',
            ],
            [
                'name' => 'Arraial',
                'estado_id' => '9',
                'ibge' => '2201002',
            ],
            [
                'name' => 'Assuncao do Piaui',
                'estado_id' => '9',
                'ibge' => '2201051',
            ],
            [
                'name' => 'Avelino Lopes',
                'estado_id' => '9',
                'ibge' => '2201101',
            ],
            [
                'name' => 'Baixa Grande do Ribeiro',
                'estado_id' => '9',
                'ibge' => '2201150',
            ],
            [
                'name' => 'Barras',
                'estado_id' => '9',
                'ibge' => '2201200',
            ],
            [
                'name' => 'Barreiras do Piaui',
                'estado_id' => '9',
                'ibge' => '2201309',
            ],
            [
                'name' => 'Barro Duro',
                'estado_id' => '9',
                'ibge' => '2201408',
            ],
            [
                'name' => 'Batalha',
                'estado_id' => '9',
                'ibge' => '2201507',
            ],
            [
                'name' => 'Bela Vista do Piaui',
                'estado_id' => '9',
                'ibge' => '2201556',
            ],
            [
                'name' => 'Belem do Piaui',
                'estado_id' => '9',
                'ibge' => '2201572',
            ],
            [
                'name' => 'Beneditinos',
                'estado_id' => '9',
                'ibge' => '2201606',
            ],
            [
                'name' => 'Bertolinia',
                'estado_id' => '9',
                'ibge' => '2201705',
            ],
            [
                'name' => 'Betania do Piaui',
                'estado_id' => '9',
                'ibge' => '2201739',
            ],
            [
                'name' => 'Boa Hora',
                'estado_id' => '9',
                'ibge' => '2201770',
            ],
            [
                'name' => 'Bocaina',
                'estado_id' => '9',
                'ibge' => '2201804',
            ],
            [
                'name' => 'Bom Jesus',
                'estado_id' => '9',
                'ibge' => '2201903',
            ],
            [
                'name' => 'Bom Principio do Piaui',
                'estado_id' => '9',
                'ibge' => '2201919',
            ],
            [
                'name' => 'Bonfim do Piaui',
                'estado_id' => '9',
                'ibge' => '2201929',
            ],
            [
                'name' => 'Boqueirao do Piaui',
                'estado_id' => '9',
                'ibge' => '2201945',
            ],
            [
                'name' => 'Brasileira',
                'estado_id' => '9',
                'ibge' => '2201960',
            ],
            [
                'name' => 'Brejo do Piaui',
                'estado_id' => '9',
                'ibge' => '2201988',
            ],
            [
                'name' => 'Buriti dos Lopes',
                'estado_id' => '9',
                'ibge' => '2202000',
            ],
            [
                'name' => 'Buriti dos Montes',
                'estado_id' => '9',
                'ibge' => '2202026',
            ],
            [
                'name' => 'Cabeceiras do Piaui',
                'estado_id' => '9',
                'ibge' => '2202059',
            ],
            [
                'name' => 'Cajazeiras do Piaui',
                'estado_id' => '9',
                'ibge' => '2202075',
            ],
            [
                'name' => 'Cajueiro da Praia',
                'estado_id' => '9',
                'ibge' => '2202083',
            ],
            [
                'name' => 'Caldeirao Grande do Piaui',
                'estado_id' => '9',
                'ibge' => '2202091',
            ],
            [
                'name' => 'Campinas do Piaui',
                'estado_id' => '9',
                'ibge' => '2202109',
            ],
            [
                'name' => 'Campo Alegre do Fidalgo',
                'estado_id' => '9',
                'ibge' => '2202117',
            ],
            [
                'name' => 'Campo Grande do Piaui',
                'estado_id' => '9',
                'ibge' => '2202133',
            ],
            [
                'name' => 'Campo Largo do Piaui',
                'estado_id' => '9',
                'ibge' => '2202174',
            ],
            [
                'name' => 'Campo Maior',
                'estado_id' => '9',
                'ibge' => '2202208',
            ],
            [
                'name' => 'Canavieira',
                'estado_id' => '9',
                'ibge' => '2202251',
            ],
            [
                'name' => 'Canto do Buriti',
                'estado_id' => '9',
                'ibge' => '2202307',
            ],
            [
                'name' => 'Capitao de Campos',
                'estado_id' => '9',
                'ibge' => '2202406',
            ],
            [
                'name' => 'Capitao Gervasio Oliveira',
                'estado_id' => '9',
                'ibge' => '2202455',
            ],
            [
                'name' => 'Caracol',
                'estado_id' => '9',
                'ibge' => '2202505',
            ],
            [
                'name' => 'Cara�bas do Piaui',
                'estado_id' => '9',
                'ibge' => '2202539',
            ],
            [
                'name' => 'Caridade do Piaui',
                'estado_id' => '9',
                'ibge' => '2202554',
            ],
            [
                'name' => 'Castelo do Piaui',
                'estado_id' => '9',
                'ibge' => '2202604',
            ],
            [
                'name' => 'Caxingo',
                'estado_id' => '9',
                'ibge' => '2202653',
            ],
            [
                'name' => 'Cocal',
                'estado_id' => '9',
                'ibge' => '2202703',
            ],
            [
                'name' => 'Cocal de Telha',
                'estado_id' => '9',
                'ibge' => '2202711',
            ],
            [
                'name' => 'Cocal dos Alves',
                'estado_id' => '9',
                'ibge' => '2202729',
            ],
            [
                'name' => 'Coivaras',
                'estado_id' => '9',
                'ibge' => '2202737',
            ],
            [
                'name' => 'Colonia do Gurgueia',
                'estado_id' => '9',
                'ibge' => '2202752',
            ],
            [
                'name' => 'Colonia do Piaui',
                'estado_id' => '9',
                'ibge' => '2202778',
            ],
            [
                'name' => 'Conceicao do Caninde',
                'estado_id' => '9',
                'ibge' => '2202802',
            ],
            [
                'name' => 'Coronel Jose Dias',
                'estado_id' => '9',
                'ibge' => '2202851',
            ],
            [
                'name' => 'Corrente',
                'estado_id' => '9',
                'ibge' => '2202901',
            ],
            [
                'name' => 'Cristalandia do Piaui',
                'estado_id' => '9',
                'ibge' => '2203008',
            ],
            [
                'name' => 'Cristino Castro',
                'estado_id' => '9',
                'ibge' => '2203107',
            ],
            [
                'name' => 'Curimata',
                'estado_id' => '9',
                'ibge' => '2203206',
            ],
            [
                'name' => 'Currais',
                'estado_id' => '9',
                'ibge' => '2203230',
            ],
            [
                'name' => 'Curralinhos',
                'estado_id' => '9',
                'ibge' => '2203255',
            ],
            [
                'name' => 'Curral Novo do Piaui',
                'estado_id' => '9',
                'ibge' => '2203271',
            ],
            [
                'name' => 'Demerval Lobao',
                'estado_id' => '9',
                'ibge' => '2203305',
            ],
            [
                'name' => 'Dirceu Arcoverde',
                'estado_id' => '9',
                'ibge' => '2203354',
            ],
            [
                'name' => 'Dom Expedito Lopes',
                'estado_id' => '9',
                'ibge' => '2203404',
            ],
            [
                'name' => 'Domingos Mourao',
                'estado_id' => '9',
                'ibge' => '2203420',
            ],
            [
                'name' => 'Dom Inoc�ncio',
                'estado_id' => '9',
                'ibge' => '2203453',
            ],
            [
                'name' => 'Elesbao Veloso',
                'estado_id' => '9',
                'ibge' => '2203503',
            ],
            [
                'name' => 'Eliseu Martins',
                'estado_id' => '9',
                'ibge' => '2203602',
            ],
            [
                'name' => 'Esperantina',
                'estado_id' => '9',
                'ibge' => '2203701',
            ],
            [
                'name' => 'Fartura do Piaui',
                'estado_id' => '9',
                'ibge' => '2203750',
            ],
            [
                'name' => 'Flores do Piaui',
                'estado_id' => '9',
                'ibge' => '2203800',
            ],
            [
                'name' => 'Floresta do Piaui',
                'estado_id' => '9',
                'ibge' => '2203859',
            ],
            [
                'name' => 'Floriano',
                'estado_id' => '9',
                'ibge' => '2203909',
            ],
            [
                'name' => 'Francinopolis',
                'estado_id' => '9',
                'ibge' => '2204006',
            ],
            [
                'name' => 'Francisco Ayres',
                'estado_id' => '9',
                'ibge' => '2204105',
            ],
            [
                'name' => 'Francisco Macedo',
                'estado_id' => '9',
                'ibge' => '2204154',
            ],
            [
                'name' => 'Francisco Santos',
                'estado_id' => '9',
                'ibge' => '2204204',
            ],
            [
                'name' => 'Fronteiras',
                'estado_id' => '9',
                'ibge' => '2204303',
            ],
            [
                'name' => 'Geminiano',
                'estado_id' => '9',
                'ibge' => '2204352',
            ],
            [
                'name' => 'Gilbues',
                'estado_id' => '9',
                'ibge' => '2204402',
            ],
            [
                'name' => 'Guadalupe',
                'estado_id' => '9',
                'ibge' => '2204501',
            ],
            [
                'name' => 'Guaribas',
                'estado_id' => '9',
                'ibge' => '2204550',
            ],
            [
                'name' => 'Hugo Napoleao',
                'estado_id' => '9',
                'ibge' => '2204600',
            ],
            [
                'name' => 'Ilha Grande',
                'estado_id' => '9',
                'ibge' => '2204659',
            ],
            [
                'name' => 'Inhuma',
                'estado_id' => '9',
                'ibge' => '2204709',
            ],
            [
                'name' => 'Ipiranga do Piaui',
                'estado_id' => '9',
                'ibge' => '2204808',
            ],
            [
                'name' => 'Isaias Coelho',
                'estado_id' => '9',
                'ibge' => '2204907',
            ],
            [
                'name' => 'Itainopolis',
                'estado_id' => '9',
                'ibge' => '2205003',
            ],
            [
                'name' => 'Itaueira',
                'estado_id' => '9',
                'ibge' => '2205102',
            ],
            [
                'name' => 'Jacobina do Piaui',
                'estado_id' => '9',
                'ibge' => '2205151',
            ],
            [
                'name' => 'Jaicos',
                'estado_id' => '9',
                'ibge' => '2205201',
            ],
            [
                'name' => 'Jardim do Mulato',
                'estado_id' => '9',
                'ibge' => '2205250',
            ],
            [
                'name' => 'Jatoba do Piaui',
                'estado_id' => '9',
                'ibge' => '2205276',
            ],
            [
                'name' => 'Jerumenha',
                'estado_id' => '9',
                'ibge' => '2205300',
            ],
            [
                'name' => 'Joao Costa',
                'estado_id' => '9',
                'ibge' => '2205359',
            ],
            [
                'name' => 'Joaquim Pires',
                'estado_id' => '9',
                'ibge' => '2205409',
            ],
            [
                'name' => 'Joca Marques',
                'estado_id' => '9',
                'ibge' => '2205458',
            ],
            [
                'name' => 'Jose de Freitas',
                'estado_id' => '9',
                'ibge' => '2205508',
            ],
            [
                'name' => 'Juazeiro do Piaui',
                'estado_id' => '9',
                'ibge' => '2205516',
            ],
            [
                'name' => 'J�lio Borges',
                'estado_id' => '9',
                'ibge' => '2205524',
            ],
            [
                'name' => 'Jurema',
                'estado_id' => '9',
                'ibge' => '2205532',
            ],
            [
                'name' => 'Lagoinha do Piaui',
                'estado_id' => '9',
                'ibge' => '2205540',
            ],
            [
                'name' => 'Lagoa Alegre',
                'estado_id' => '9',
                'ibge' => '2205557',
            ],
            [
                'name' => 'Lagoa do Barro do Piaui',
                'estado_id' => '9',
                'ibge' => '2205565',
            ],
            [
                'name' => 'Lagoa de Sao Francisco',
                'estado_id' => '9',
                'ibge' => '2205573',
            ],
            [
                'name' => 'Lagoa do Piaui',
                'estado_id' => '9',
                'ibge' => '2205581',
            ],
            [
                'name' => 'Lagoa do Sitio',
                'estado_id' => '9',
                'ibge' => '2205599',
            ],
            [
                'name' => 'Landri Sales',
                'estado_id' => '9',
                'ibge' => '2205607',
            ],
            [
                'name' => 'Luis Correia',
                'estado_id' => '9',
                'ibge' => '2205706',
            ],
            [
                'name' => 'Luzilandia',
                'estado_id' => '9',
                'ibge' => '2205805',
            ],
            [
                'name' => 'Madeiro',
                'estado_id' => '9',
                'ibge' => '2205854',
            ],
            [
                'name' => 'Manoel Emidio',
                'estado_id' => '9',
                'ibge' => '2205904',
            ],
            [
                'name' => 'Marcolandia',
                'estado_id' => '9',
                'ibge' => '2205953',
            ],
            [
                'name' => 'Marcos Parente',
                'estado_id' => '9',
                'ibge' => '2206001',
            ],
            [
                'name' => 'Massap� do Piaui',
                'estado_id' => '9',
                'ibge' => '2206050',
            ],
            [
                'name' => 'Matias Olimpio',
                'estado_id' => '9',
                'ibge' => '2206100',
            ],
            [
                'name' => 'Miguel Alves',
                'estado_id' => '9',
                'ibge' => '2206209',
            ],
            [
                'name' => 'Miguel Leao',
                'estado_id' => '9',
                'ibge' => '2206308',
            ],
            [
                'name' => 'Milton Brandao',
                'estado_id' => '9',
                'ibge' => '2206357',
            ],
            [
                'name' => 'Monsenhor Gil',
                'estado_id' => '9',
                'ibge' => '2206407',
            ],
            [
                'name' => 'Monsenhor Hipolito',
                'estado_id' => '9',
                'ibge' => '2206506',
            ],
            [
                'name' => 'Monte Alegre do Piaui',
                'estado_id' => '9',
                'ibge' => '2206605',
            ],
            [
                'name' => 'Morro Cabeca no Tempo',
                'estado_id' => '9',
                'ibge' => '2206654',
            ],
            [
                'name' => 'Morro do Chapeu do Piaui',
                'estado_id' => '9',
                'ibge' => '2206670',
            ],
            [
                'name' => 'Murici dos Portelas',
                'estado_id' => '9',
                'ibge' => '2206696',
            ],
            [
                'name' => 'Nazare do Piaui',
                'estado_id' => '9',
                'ibge' => '2206704',
            ],
            [
                'name' => 'Nazaria',
                'estado_id' => '9',
                'ibge' => '2206720',
            ],
            [
                'name' => 'Nossa Senhora de Nazare',
                'estado_id' => '9',
                'ibge' => '2206753',
            ],
            [
                'name' => 'Nossa Senhora dos Remedios',
                'estado_id' => '9',
                'ibge' => '2206803',
            ],
            [
                'name' => 'Novo Oriente do Piaui',
                'estado_id' => '9',
                'ibge' => '2206902',
            ],
            [
                'name' => 'Novo Santo Antonio',
                'estado_id' => '9',
                'ibge' => '2206951',
            ],
            [
                'name' => 'Oeiras',
                'estado_id' => '9',
                'ibge' => '2207009',
            ],
            [
                'name' => 'Padre Marcos',
                'estado_id' => '9',
                'ibge' => '2207207',
            ],
            [
                'name' => 'Paes Landim',
                'estado_id' => '9',
                'ibge' => '2207306',
            ],
            [
                'name' => 'Paje� do Piaui',
                'estado_id' => '9',
                'ibge' => '2207355',
            ],
            [
                'name' => 'Palmeira do Piaui',
                'estado_id' => '9',
                'ibge' => '2207405',
            ],
            [
                'name' => 'Palmeirais',
                'estado_id' => '9',
                'ibge' => '2207504',
            ],
            [
                'name' => 'Paqueta',
                'estado_id' => '9',
                'ibge' => '2207553',
            ],
            [
                'name' => 'Parnagua',
                'estado_id' => '9',
                'ibge' => '2207603',
            ],
            [
                'name' => 'Parnaiba',
                'estado_id' => '9',
                'ibge' => '2207702',
            ],
            [
                'name' => 'Passagem Franca do Piaui',
                'estado_id' => '9',
                'ibge' => '2207751',
            ],
            [
                'name' => 'Patos do Piaui',
                'estado_id' => '9',
                'ibge' => '2207777',
            ],
            [
                'name' => 'Paulistana',
                'estado_id' => '9',
                'ibge' => '2207801',
            ],
            [
                'name' => 'Pavussu',
                'estado_id' => '9',
                'ibge' => '2207850',
            ],
            [
                'name' => 'Pedro II',
                'estado_id' => '9',
                'ibge' => '2207900',
            ],
            [
                'name' => 'Pedro Laurentino',
                'estado_id' => '9',
                'ibge' => '2207934',
            ],
            [
                'name' => 'Nova Santa Rita',
                'estado_id' => '9',
                'ibge' => '2207959',
            ],
            [
                'name' => 'Picos',
                'estado_id' => '9',
                'ibge' => '2208007',
            ],
            [
                'name' => 'Pimenteiras',
                'estado_id' => '9',
                'ibge' => '2208106',
            ],
            [
                'name' => 'Pio IX',
                'estado_id' => '9',
                'ibge' => '2208205',
            ],
            [
                'name' => 'Piracuruca',
                'estado_id' => '9',
                'ibge' => '2208304',
            ],
            [
                'name' => 'Piripiri',
                'estado_id' => '9',
                'ibge' => '2208403',
            ],
            [
                'name' => 'Porto',
                'estado_id' => '9',
                'ibge' => '2208502',
            ],
            [
                'name' => 'Porto Alegre do Piaui',
                'estado_id' => '9',
                'ibge' => '2208551',
            ],
            [
                'name' => 'Prata do Piaui',
                'estado_id' => '9',
                'ibge' => '2208601',
            ],
            [
                'name' => 'Queimada Nova',
                'estado_id' => '9',
                'ibge' => '2208650',
            ],
            [
                'name' => 'Redencao do Gurgueia',
                'estado_id' => '9',
                'ibge' => '2208700',
            ],
            [
                'name' => 'Regeneracao',
                'estado_id' => '9',
                'ibge' => '2208809',
            ],
            [
                'name' => 'Riacho Frio',
                'estado_id' => '9',
                'ibge' => '2208858',
            ],
            [
                'name' => 'Ribeira do Piaui',
                'estado_id' => '9',
                'ibge' => '2208874',
            ],
            [
                'name' => 'Ribeiro Goncalves',
                'estado_id' => '9',
                'ibge' => '2208908',
            ],
            [
                'name' => 'Rio Grande do Piaui',
                'estado_id' => '9',
                'ibge' => '2209005',
            ],
            [
                'name' => 'Santa Cruz do Piaui',
                'estado_id' => '9',
                'ibge' => '2209104',
            ],
            [
                'name' => 'Santa Cruz dos Milagres',
                'estado_id' => '9',
                'ibge' => '2209153',
            ],
            [
                'name' => 'Santa Filomena',
                'estado_id' => '9',
                'ibge' => '2209203',
            ],
            [
                'name' => 'Santa Luz',
                'estado_id' => '9',
                'ibge' => '2209302',
            ],
            [
                'name' => 'Santana do Piaui',
                'estado_id' => '9',
                'ibge' => '2209351',
            ],
            [
                'name' => 'Santa Rosa do Piaui',
                'estado_id' => '9',
                'ibge' => '2209377',
            ],
            [
                'name' => 'Santo Antonio de Lisboa',
                'estado_id' => '9',
                'ibge' => '2209401',
            ],
            [
                'name' => 'Santo Antonio dos Milagres',
                'estado_id' => '9',
                'ibge' => '2209450',
            ],
            [
                'name' => 'Santo Inacio do Piaui',
                'estado_id' => '9',
                'ibge' => '2209500',
            ],
            [
                'name' => 'Sao Braz do Piaui',
                'estado_id' => '9',
                'ibge' => '2209559',
            ],
            [
                'name' => 'Sao Felix do Piaui',
                'estado_id' => '9',
                'ibge' => '2209609',
            ],
            [
                'name' => 'Sao Francisco de Assis do Pia',
                'estado_id' => '9',
                'ibge' => '2209658',
            ],
            [
                'name' => 'Sao Francisco do Piaui',
                'estado_id' => '9',
                'ibge' => '2209708',
            ],
            [
                'name' => 'Sao Goncalo do Gurgueia',
                'estado_id' => '9',
                'ibge' => '2209757',
            ],
            [
                'name' => 'Sao Goncalo do Piaui',
                'estado_id' => '9',
                'ibge' => '2209807',
            ],
            [
                'name' => 'Sao Joao da Canabrava',
                'estado_id' => '9',
                'ibge' => '2209856',
            ],
            [
                'name' => 'Sao Joao da Fronteira',
                'estado_id' => '9',
                'ibge' => '2209872',
            ],
            [
                'name' => 'Sao Joao da Serra',
                'estado_id' => '9',
                'ibge' => '2209906',
            ],
            [
                'name' => 'Sao Joao da Varjota',
                'estado_id' => '9',
                'ibge' => '2209955',
            ],
            [
                'name' => 'Sao Joao do Arraial',
                'estado_id' => '9',
                'ibge' => '2209971',
            ],
            [
                'name' => 'Sao Joao do Piaui',
                'estado_id' => '9',
                'ibge' => '2210003',
            ],
            [
                'name' => 'Sao Jose do Divino',
                'estado_id' => '9',
                'ibge' => '2210052',
            ],
            [
                'name' => 'Sao Jose do Peixe',
                'estado_id' => '9',
                'ibge' => '2210102',
            ],
            [
                'name' => 'Sao Jose do Piaui',
                'estado_id' => '9',
                'ibge' => '2210201',
            ],
            [
                'name' => 'Sao Juliao',
                'estado_id' => '9',
                'ibge' => '2210300',
            ],
            [
                'name' => 'Sao Lourenco do Piaui',
                'estado_id' => '9',
                'ibge' => '2210359',
            ],
            [
                'name' => 'Sao Luis do Piaui',
                'estado_id' => '9',
                'ibge' => '2210375',
            ],
            [
                'name' => 'Sao Miguel da Baixa Grande',
                'estado_id' => '9',
                'ibge' => '2210383',
            ],
            [
                'name' => 'Sao Miguel do Fidalgo',
                'estado_id' => '9',
                'ibge' => '2210391',
            ],
            [
                'name' => 'Sao Miguel do Tapuio',
                'estado_id' => '9',
                'ibge' => '2210409',
            ],
            [
                'name' => 'Sao Pedro do Piaui',
                'estado_id' => '9',
                'ibge' => '2210508',
            ],
            [
                'name' => 'Sao Raimundo Nonato',
                'estado_id' => '9',
                'ibge' => '2210607',
            ],
            [
                'name' => 'Sebastiao Barros',
                'estado_id' => '9',
                'ibge' => '2210623',
            ],
            [
                'name' => 'Sebastiao Leal',
                'estado_id' => '9',
                'ibge' => '2210631',
            ],
            [
                'name' => 'Sigefredo Pacheco',
                'estado_id' => '9',
                'ibge' => '2210656',
            ],
            [
                'name' => 'Sim�es',
                'estado_id' => '9',
                'ibge' => '2210706',
            ],
            [
                'name' => 'Simplicio Mendes',
                'estado_id' => '9',
                'ibge' => '2210805',
            ],
            [
                'name' => 'Socorro do Piaui',
                'estado_id' => '9',
                'ibge' => '2210904',
            ],
            [
                'name' => 'Sussuapara',
                'estado_id' => '9',
                'ibge' => '2210938',
            ],
            [
                'name' => 'Tamboril do Piaui',
                'estado_id' => '9',
                'ibge' => '2210953',
            ],
            [
                'name' => 'Tanque do Piaui',
                'estado_id' => '9',
                'ibge' => '2210979',
            ],
            [
                'name' => 'Teresina',
                'estado_id' => '9',
                'ibge' => '2211001',
            ],
            [
                'name' => 'Uniao',
                'estado_id' => '9',
                'ibge' => '2211100',
            ],
            [
                'name' => 'Urucui',
                'estado_id' => '9',
                'ibge' => '2211209',
            ],
            [
                'name' => 'Valenca do Piaui',
                'estado_id' => '9',
                'ibge' => '2211308',
            ],
            [
                'name' => 'Varzea Branca',
                'estado_id' => '9',
                'ibge' => '2211357',
            ],
            [
                'name' => 'Varzea Grande',
                'estado_id' => '9',
                'ibge' => '2211407',
            ],
            [
                'name' => 'Vera Mendes',
                'estado_id' => '9',
                'ibge' => '2211506',
            ],
            [
                'name' => 'Vila Nova do Piaui',
                'estado_id' => '9',
                'ibge' => '2211605',
            ],
            [
                'name' => 'Wall Ferraz',
                'estado_id' => '9',
                'ibge' => '2211704',
            ],
            [
                'name' => 'Pau D Arco do Piaui',
                'estado_id' => '9',
                'ibge' => '2207793',
            ],
            [
                'name' => 'Olho D Agua do Piaui',
                'estado_id' => '9',
                'ibge' => '2207108',
            ],
            [
                'name' => 'Barra D Alcantara',
                'estado_id' => '9',
                'ibge' => '2201176',
            ],

            /* Ceará  */

            [
                'name' => 'Abaiara',
                'estado_id' => '10',
                'ibge' => '2300101',
            ],
            [
                'name' => 'Acarape',
                'estado_id' => '10',
                'ibge' => '2300150',
            ],
            [
                'name' => 'Acara�',
                'estado_id' => '10',
                'ibge' => '2300200',
            ],
            [
                'name' => 'Acopiara',
                'estado_id' => '10',
                'ibge' => '2300309',
            ],
            [
                'name' => 'Aiuaba',
                'estado_id' => '10',
                'ibge' => '2300408',
            ],
            [
                'name' => 'Alcantaras',
                'estado_id' => '10',
                'ibge' => '2300507',
            ],
            [
                'name' => 'Altaneira',
                'estado_id' => '10',
                'ibge' => '2300606',
            ],
            [
                'name' => 'Alto Santo',
                'estado_id' => '10',
                'ibge' => '2300705',
            ],
            [
                'name' => 'Amontada',
                'estado_id' => '10',
                'ibge' => '2300754',
            ],
            [
                'name' => 'Antonina do Norte',
                'estado_id' => '10',
                'ibge' => '2300804',
            ],
            [
                'name' => 'Apuiares',
                'estado_id' => '10',
                'ibge' => '2300903',
            ],
            [
                'name' => 'Aquiraz',
                'estado_id' => '10',
                'ibge' => '2301000',
            ],
            [
                'name' => 'Aracati',
                'estado_id' => '10',
                'ibge' => '2301109',
            ],
            [
                'name' => 'Aracoiaba',
                'estado_id' => '10',
                'ibge' => '2301208',
            ],
            [
                'name' => 'Ararenda',
                'estado_id' => '10',
                'ibge' => '2301257',
            ],
            [
                'name' => 'Araripe',
                'estado_id' => '10',
                'ibge' => '2301307',
            ],
            [
                'name' => 'Aratuba',
                'estado_id' => '10',
                'ibge' => '2301406',
            ],
            [
                'name' => 'Arneiroz',
                'estado_id' => '10',
                'ibge' => '2301505',
            ],
            [
                'name' => 'Assare',
                'estado_id' => '10',
                'ibge' => '2301604',
            ],
            [
                'name' => 'Aurora',
                'estado_id' => '10',
                'ibge' => '2301703',
            ],
            [
                'name' => 'Baixio',
                'estado_id' => '10',
                'ibge' => '2301802',
            ],
            [
                'name' => 'Banabui�',
                'estado_id' => '10',
                'ibge' => '2301851',
            ],
            [
                'name' => 'Barbalha',
                'estado_id' => '10',
                'ibge' => '2301901',
            ],
            [
                'name' => 'Barreira',
                'estado_id' => '10',
                'ibge' => '2301950',
            ],
            [
                'name' => 'Barro',
                'estado_id' => '10',
                'ibge' => '2302008',
            ],
            [
                'name' => 'Barroquinha',
                'estado_id' => '10',
                'ibge' => '2302057',
            ],
            [
                'name' => 'Baturite',
                'estado_id' => '10',
                'ibge' => '2302107',
            ],
            [
                'name' => 'Beberibe',
                'estado_id' => '10',
                'ibge' => '2302206',
            ],
            [
                'name' => 'Bela Cruz',
                'estado_id' => '10',
                'ibge' => '2302305',
            ],
            [
                'name' => 'Boa Viagem',
                'estado_id' => '10',
                'ibge' => '2302404',
            ],
            [
                'name' => 'Brejo Santo',
                'estado_id' => '10',
                'ibge' => '2302503',
            ],
            [
                'name' => 'Camocim',
                'estado_id' => '10',
                'ibge' => '2302602',
            ],
            [
                'name' => 'Campos Sales',
                'estado_id' => '10',
                'ibge' => '2302701',
            ],
            [
                'name' => 'Caninde',
                'estado_id' => '10',
                'ibge' => '2302800',
            ],
            [
                'name' => 'Capistrano',
                'estado_id' => '10',
                'ibge' => '2302909',
            ],
            [
                'name' => 'Caridade',
                'estado_id' => '10',
                'ibge' => '2303006',
            ],
            [
                'name' => 'Carire',
                'estado_id' => '10',
                'ibge' => '2303105',
            ],
            [
                'name' => 'Caririacu',
                'estado_id' => '10',
                'ibge' => '2303204',
            ],
            [
                'name' => 'Cari�s',
                'estado_id' => '10',
                'ibge' => '2303303',
            ],
            [
                'name' => 'Carnaubal',
                'estado_id' => '10',
                'ibge' => '2303402',
            ],
            [
                'name' => 'Cascavel',
                'estado_id' => '10',
                'ibge' => '2303501',
            ],
            [
                'name' => 'Catarina',
                'estado_id' => '10',
                'ibge' => '2303600',
            ],
            [
                'name' => 'Catunda',
                'estado_id' => '10',
                'ibge' => '2303659',
            ],
            [
                'name' => 'Caucaia',
                'estado_id' => '10',
                'ibge' => '2303709',
            ],
            [
                'name' => 'Cedro',
                'estado_id' => '10',
                'ibge' => '2303808',
            ],
            [
                'name' => 'Chaval',
                'estado_id' => '10',
                'ibge' => '2303907',
            ],
            [
                'name' => 'Choro',
                'estado_id' => '10',
                'ibge' => '2303931',
            ],
            [
                'name' => 'Chorozinho',
                'estado_id' => '10',
                'ibge' => '2303956',
            ],
            [
                'name' => 'Corea�',
                'estado_id' => '10',
                'ibge' => '2304004',
            ],
            [
                'name' => 'Crate�s',
                'estado_id' => '10',
                'ibge' => '2304103',
            ],
            [
                'name' => 'Crato',
                'estado_id' => '10',
                'ibge' => '2304202',
            ],
            [
                'name' => 'Croata',
                'estado_id' => '10',
                'ibge' => '2304236',
            ],
            [
                'name' => 'Cruz',
                'estado_id' => '10',
                'ibge' => '2304251',
            ],
            [
                'name' => 'Deputado Irapuan Pinheiro',
                'estado_id' => '10',
                'ibge' => '2304269',
            ],
            [
                'name' => 'Erer�',
                'estado_id' => '10',
                'ibge' => '2304277',
            ],
            [
                'name' => 'Eusebio',
                'estado_id' => '10',
                'ibge' => '2304285',
            ],
            [
                'name' => 'Farias Brito',
                'estado_id' => '10',
                'ibge' => '2304301',
            ],
            [
                'name' => 'Forquilha',
                'estado_id' => '10',
                'ibge' => '2304350',
            ],
            [
                'name' => 'Fortaleza',
                'estado_id' => '10',
                'ibge' => '2304400',
            ],
            [
                'name' => 'Fortim',
                'estado_id' => '10',
                'ibge' => '2304459',
            ],
            [
                'name' => 'Frecheirinha',
                'estado_id' => '10',
                'ibge' => '2304509',
            ],
            [
                'name' => 'General Sampaio',
                'estado_id' => '10',
                'ibge' => '2304608',
            ],
            [
                'name' => 'Graca',
                'estado_id' => '10',
                'ibge' => '2304657',
            ],
            [
                'name' => 'Granja',
                'estado_id' => '10',
                'ibge' => '2304707',
            ],
            [
                'name' => 'Granjeiro',
                'estado_id' => '10',
                'ibge' => '2304806',
            ],
            [
                'name' => 'Groairas',
                'estado_id' => '10',
                'ibge' => '2304905',
            ],
            [
                'name' => 'Guai�ba',
                'estado_id' => '10',
                'ibge' => '2304954',
            ],
            [
                'name' => 'Guaraciaba do Norte',
                'estado_id' => '10',
                'ibge' => '2305001',
            ],
            [
                'name' => 'Guaramiranga',
                'estado_id' => '10',
                'ibge' => '2305100',
            ],
            [
                'name' => 'Hidrolandia',
                'estado_id' => '10',
                'ibge' => '2305209',
            ],
            [
                'name' => 'Horizonte',
                'estado_id' => '10',
                'ibge' => '2305233',
            ],
            [
                'name' => 'Ibaretama',
                'estado_id' => '10',
                'ibge' => '2305266',
            ],
            [
                'name' => 'Ibiapina',
                'estado_id' => '10',
                'ibge' => '2305308',
            ],
            [
                'name' => 'Ibicuitinga',
                'estado_id' => '10',
                'ibge' => '2305332',
            ],
            [
                'name' => 'Icapui',
                'estado_id' => '10',
                'ibge' => '2305357',
            ],
            [
                'name' => 'Ico',
                'estado_id' => '10',
                'ibge' => '2305407',
            ],
            [
                'name' => 'Iguatu',
                'estado_id' => '10',
                'ibge' => '2305506',
            ],
            [
                'name' => 'Independ�ncia',
                'estado_id' => '10',
                'ibge' => '2305605',
            ],
            [
                'name' => 'Ipaporanga',
                'estado_id' => '10',
                'ibge' => '2305654',
            ],
            [
                'name' => 'Ipaumirim',
                'estado_id' => '10',
                'ibge' => '2305704',
            ],
            [
                'name' => 'Ipu',
                'estado_id' => '10',
                'ibge' => '2305803',
            ],
            [
                'name' => 'Ipueiras',
                'estado_id' => '10',
                'ibge' => '2305902',
            ],
            [
                'name' => 'Iracema',
                'estado_id' => '10',
                'ibge' => '2306009',
            ],
            [
                'name' => 'Iraucuba',
                'estado_id' => '10',
                'ibge' => '2306108',
            ],
            [
                'name' => 'Itaicaba',
                'estado_id' => '10',
                'ibge' => '2306207',
            ],
            [
                'name' => 'Itaitinga',
                'estado_id' => '10',
                'ibge' => '2306256',
            ],
            [
                'name' => 'Itapage',
                'estado_id' => '10',
                'ibge' => '2306306',
            ],
            [
                'name' => 'Itapipoca',
                'estado_id' => '10',
                'ibge' => '2306405',
            ],
            [
                'name' => 'Itapi�na',
                'estado_id' => '10',
                'ibge' => '2306504',
            ],
            [
                'name' => 'Itarema',
                'estado_id' => '10',
                'ibge' => '2306553',
            ],
            [
                'name' => 'Itatira',
                'estado_id' => '10',
                'ibge' => '2306603',
            ],
            [
                'name' => 'Jaguaretama',
                'estado_id' => '10',
                'ibge' => '2306702',
            ],
            [
                'name' => 'Jaguaribara',
                'estado_id' => '10',
                'ibge' => '2306801',
            ],
            [
                'name' => 'Jaguaribe',
                'estado_id' => '10',
                'ibge' => '2306900',
            ],
            [
                'name' => 'Jaguaruana',
                'estado_id' => '10',
                'ibge' => '2307007',
            ],
            [
                'name' => 'Jardim',
                'estado_id' => '10',
                'ibge' => '2307106',
            ],
            [
                'name' => 'Jati',
                'estado_id' => '10',
                'ibge' => '2307205',
            ],
            [
                'name' => 'Jijoca de Jericoacoara',
                'estado_id' => '10',
                'ibge' => '2307254',
            ],
            [
                'name' => 'Juazeiro do Norte',
                'estado_id' => '10',
                'ibge' => '2307304',
            ],
            [
                'name' => 'Jucas',
                'estado_id' => '10',
                'ibge' => '2307403',
            ],
            [
                'name' => 'Lavras da Mangabeira',
                'estado_id' => '10',
                'ibge' => '2307502',
            ],
            [
                'name' => 'Limoeiro do Norte',
                'estado_id' => '10',
                'ibge' => '2307601',
            ],
            [
                'name' => 'Madalena',
                'estado_id' => '10',
                'ibge' => '2307635',
            ],
            [
                'name' => 'Maracana�',
                'estado_id' => '10',
                'ibge' => '2307650',
            ],
            [
                'name' => 'Maranguape',
                'estado_id' => '10',
                'ibge' => '2307700',
            ],
            [
                'name' => 'Marco',
                'estado_id' => '10',
                'ibge' => '2307809',
            ],
            [
                'name' => 'Martinopole',
                'estado_id' => '10',
                'ibge' => '2307908',
            ],
            [
                'name' => 'Massap�',
                'estado_id' => '10',
                'ibge' => '2308005',
            ],
            [
                'name' => 'Mauriti',
                'estado_id' => '10',
                'ibge' => '2308104',
            ],
            [
                'name' => 'Meruoca',
                'estado_id' => '10',
                'ibge' => '2308203',
            ],
            [
                'name' => 'Milagres',
                'estado_id' => '10',
                'ibge' => '2308302',
            ],
            [
                'name' => 'Milha',
                'estado_id' => '10',
                'ibge' => '2308351',
            ],
            [
                'name' => 'Miraima',
                'estado_id' => '10',
                'ibge' => '2308377',
            ],
            [
                'name' => 'Missao Velha',
                'estado_id' => '10',
                'ibge' => '2308401',
            ],
            [
                'name' => 'Mombaca',
                'estado_id' => '10',
                'ibge' => '2308500',
            ],
            [
                'name' => 'Monsenhor Tabosa',
                'estado_id' => '10',
                'ibge' => '2308609',
            ],
            [
                'name' => 'Morada Nova',
                'estado_id' => '10',
                'ibge' => '2308708',
            ],
            [
                'name' => 'Mora�jo',
                'estado_id' => '10',
                'ibge' => '2308807',
            ],
            [
                'name' => 'Morrinhos',
                'estado_id' => '10',
                'ibge' => '2308906',
            ],
            [
                'name' => 'Mucambo',
                'estado_id' => '10',
                'ibge' => '2309003',
            ],
            [
                'name' => 'Mulungu',
                'estado_id' => '10',
                'ibge' => '2309102',
            ],
            [
                'name' => 'Nova Olinda',
                'estado_id' => '10',
                'ibge' => '2309201',
            ],
            [
                'name' => 'Nova Russas',
                'estado_id' => '10',
                'ibge' => '2309300',
            ],
            [
                'name' => 'Novo Oriente',
                'estado_id' => '10',
                'ibge' => '2309409',
            ],
            [
                'name' => 'Ocara',
                'estado_id' => '10',
                'ibge' => '2309458',
            ],
            [
                'name' => 'Oros',
                'estado_id' => '10',
                'ibge' => '2309508',
            ],
            [
                'name' => 'Pacajus',
                'estado_id' => '10',
                'ibge' => '2309607',
            ],
            [
                'name' => 'Pacatuba',
                'estado_id' => '10',
                'ibge' => '2309706',
            ],
            [
                'name' => 'Pacoti',
                'estado_id' => '10',
                'ibge' => '2309805',
            ],
            [
                'name' => 'Pacuja',
                'estado_id' => '10',
                'ibge' => '2309904',
            ],
            [
                'name' => 'Palhano',
                'estado_id' => '10',
                'ibge' => '2310001',
            ],
            [
                'name' => 'Palmacia',
                'estado_id' => '10',
                'ibge' => '2310100',
            ],
            [
                'name' => 'Paracuru',
                'estado_id' => '10',
                'ibge' => '2310209',
            ],
            [
                'name' => 'Paraipaba',
                'estado_id' => '10',
                'ibge' => '2310258',
            ],
            [
                'name' => 'Parambu',
                'estado_id' => '10',
                'ibge' => '2310308',
            ],
            [
                'name' => 'Paramoti',
                'estado_id' => '10',
                'ibge' => '2310407',
            ],
            [
                'name' => 'Pedra Branca',
                'estado_id' => '10',
                'ibge' => '2310506',
            ],
            [
                'name' => 'Penaforte',
                'estado_id' => '10',
                'ibge' => '2310605',
            ],
            [
                'name' => 'Pentecoste',
                'estado_id' => '10',
                'ibge' => '2310704',
            ],
            [
                'name' => 'Pereiro',
                'estado_id' => '10',
                'ibge' => '2310803',
            ],
            [
                'name' => 'Pindoretama',
                'estado_id' => '10',
                'ibge' => '2310852',
            ],
            [
                'name' => 'Piquet Carneiro',
                'estado_id' => '10',
                'ibge' => '2310902',
            ],
            [
                'name' => 'Pires Ferreira',
                'estado_id' => '10',
                'ibge' => '2310951',
            ],
            [
                'name' => 'Poranga',
                'estado_id' => '10',
                'ibge' => '2311009',
            ],
            [
                'name' => 'Porteiras',
                'estado_id' => '10',
                'ibge' => '2311108',
            ],
            [
                'name' => 'Potengi',
                'estado_id' => '10',
                'ibge' => '2311207',
            ],
            [
                'name' => 'Potiretama',
                'estado_id' => '10',
                'ibge' => '2311231',
            ],
            [
                'name' => 'Quiterianopolis',
                'estado_id' => '10',
                'ibge' => '2311264',
            ],
            [
                'name' => 'Quixada',
                'estado_id' => '10',
                'ibge' => '2311306',
            ],
            [
                'name' => 'Quixelo',
                'estado_id' => '10',
                'ibge' => '2311355',
            ],
            [
                'name' => 'Quixeramobim',
                'estado_id' => '10',
                'ibge' => '2311405',
            ],
            [
                'name' => 'Quixere',
                'estado_id' => '10',
                'ibge' => '2311504',
            ],
            [
                'name' => 'Redencao',
                'estado_id' => '10',
                'ibge' => '2311603',
            ],
            [
                'name' => 'Reriutaba',
                'estado_id' => '10',
                'ibge' => '2311702',
            ],
            [
                'name' => 'Russas',
                'estado_id' => '10',
                'ibge' => '2311801',
            ],
            [
                'name' => 'Saboeiro',
                'estado_id' => '10',
                'ibge' => '2311900',
            ],
            [
                'name' => 'Salitre',
                'estado_id' => '10',
                'ibge' => '2311959',
            ],
            [
                'name' => 'Santana do Acara�',
                'estado_id' => '10',
                'ibge' => '2312007',
            ],
            [
                'name' => 'Santana do Cariri',
                'estado_id' => '10',
                'ibge' => '2312106',
            ],
            [
                'name' => 'Santa Quiteria',
                'estado_id' => '10',
                'ibge' => '2312205',
            ],
            [
                'name' => 'Sao Benedito',
                'estado_id' => '10',
                'ibge' => '2312304',
            ],
            [
                'name' => 'Sao Goncalo do Amarante',
                'estado_id' => '10',
                'ibge' => '2312403',
            ],
            [
                'name' => 'Sao Joao do Jaguaribe',
                'estado_id' => '10',
                'ibge' => '2312502',
            ],
            [
                'name' => 'Sao Luis do Curu',
                'estado_id' => '10',
                'ibge' => '2312601',
            ],
            [
                'name' => 'Senador Pompeu',
                'estado_id' => '10',
                'ibge' => '2312700',
            ],
            [
                'name' => 'Senador Sa',
                'estado_id' => '10',
                'ibge' => '2312809',
            ],
            [
                'name' => 'Sobral',
                'estado_id' => '10',
                'ibge' => '2312908',
            ],
            [
                'name' => 'Solonopole',
                'estado_id' => '10',
                'ibge' => '2313005',
            ],
            [
                'name' => 'Tabuleiro do Norte',
                'estado_id' => '10',
                'ibge' => '2313104',
            ],
            [
                'name' => 'Tamboril',
                'estado_id' => '10',
                'ibge' => '2313203',
            ],
            [
                'name' => 'Tarrafas',
                'estado_id' => '10',
                'ibge' => '2313252',
            ],
            [
                'name' => 'Taua',
                'estado_id' => '10',
                'ibge' => '2313302',
            ],
            [
                'name' => 'Tejucuoca',
                'estado_id' => '10',
                'ibge' => '2313351',
            ],
            [
                'name' => 'Tiangua',
                'estado_id' => '10',
                'ibge' => '2313401',
            ],
            [
                'name' => 'Trairi',
                'estado_id' => '10',
                'ibge' => '2313500',
            ],
            [
                'name' => 'Tururu',
                'estado_id' => '10',
                'ibge' => '2313559',
            ],
            [
                'name' => 'Ubajara',
                'estado_id' => '10',
                'ibge' => '2313609',
            ],
            [
                'name' => 'Umari',
                'estado_id' => '10',
                'ibge' => '2313708',
            ],
            [
                'name' => 'Umirim',
                'estado_id' => '10',
                'ibge' => '2313757',
            ],
            [
                'name' => 'Uruburetama',
                'estado_id' => '10',
                'ibge' => '2313807',
            ],
            [
                'name' => 'Uruoca',
                'estado_id' => '10',
                'ibge' => '2313906',
            ],
            [
                'name' => 'Varjota',
                'estado_id' => '10',
                'ibge' => '2313955',
            ],
            [
                'name' => 'Varzea Alegre',
                'estado_id' => '10',
                'ibge' => '2314003',
            ],
            [
                'name' => 'Vicosa do Ceara',
                'estado_id' => '10',
                'ibge' => '2314102',
            ],

            /* Rio Grande do Norte  */

            [
                'name' => 'Acari',
                'estado_id' => '11',
                'ibge' => '2400109',
            ],
            [
                'name' => 'Acu',
                'estado_id' => '11',
                'ibge' => '2400208',
            ],
            [
                'name' => 'Afonso Bezerra',
                'estado_id' => '11',
                'ibge' => '2400307',
            ],
            [
                'name' => 'Agua Nova',
                'estado_id' => '11',
                'ibge' => '2400406',
            ],
            [
                'name' => 'Alexandria',
                'estado_id' => '11',
                'ibge' => '2400505',
            ],
            [
                'name' => 'Almino Afonso',
                'estado_id' => '11',
                'ibge' => '2400604',
            ],
            [
                'name' => 'Alto do Rodrigues',
                'estado_id' => '11',
                'ibge' => '2400703',
            ],
            [
                'name' => 'Angicos',
                'estado_id' => '11',
                'ibge' => '2400802',
            ],
            [
                'name' => 'Antonio Martins',
                'estado_id' => '11',
                'ibge' => '2400901',
            ],
            [
                'name' => 'Apodi',
                'estado_id' => '11',
                'ibge' => '2401008',
            ],
            [
                'name' => 'Areia Branca',
                'estado_id' => '11',
                'ibge' => '2401107',
            ],
            [
                'name' => 'Ar�s',
                'estado_id' => '11',
                'ibge' => '2401206',
            ],
            [
                'name' => 'Augusto Severo',
                'estado_id' => '11',
                'ibge' => '2401305',
            ],
            [
                'name' => 'Baia Formosa',
                'estado_id' => '11',
                'ibge' => '2401404',
            ],
            [
                'name' => 'Bara�na',
                'estado_id' => '11',
                'ibge' => '2401453',
            ],
            [
                'name' => 'Barcelona',
                'estado_id' => '11',
                'ibge' => '2401503',
            ],
            [
                'name' => 'Bento Fernandes',
                'estado_id' => '11',
                'ibge' => '2401602',
            ],
            [
                'name' => 'Bodo',
                'estado_id' => '11',
                'ibge' => '2401651',
            ],
            [
                'name' => 'Bom Jesus',
                'estado_id' => '11',
                'ibge' => '2401701',
            ],
            [
                'name' => 'Brejinho',
                'estado_id' => '11',
                'ibge' => '2401800',
            ],
            [
                'name' => 'Caicara do Norte',
                'estado_id' => '11',
                'ibge' => '2401859',
            ],
            [
                'name' => 'Caicara do Rio do Vento',
                'estado_id' => '11',
                'ibge' => '2401909',
            ],
            [
                'name' => 'Caico',
                'estado_id' => '11',
                'ibge' => '2402006',
            ],
            [
                'name' => 'Campo Redondo',
                'estado_id' => '11',
                'ibge' => '2402105',
            ],
            [
                'name' => 'Canguaretama',
                'estado_id' => '11',
                'ibge' => '2402204',
            ],
            [
                'name' => 'Cara�bas',
                'estado_id' => '11',
                'ibge' => '2402303',
            ],
            [
                'name' => 'Carna�ba dos Dantas',
                'estado_id' => '11',
                'ibge' => '2402402',
            ],
            [
                'name' => 'Carnaubais',
                'estado_id' => '11',
                'ibge' => '2402501',
            ],
            [
                'name' => 'Ceara-Mirim',
                'estado_id' => '11',
                'ibge' => '2402600',
            ],
            [
                'name' => 'Cerro Cora',
                'estado_id' => '11',
                'ibge' => '2402709',
            ],
            [
                'name' => 'Coronel Ezequiel',
                'estado_id' => '11',
                'ibge' => '2402808',
            ],
            [
                'name' => 'Coronel Joao Pessoa',
                'estado_id' => '11',
                'ibge' => '2402907',
            ],
            [
                'name' => 'Cruzeta',
                'estado_id' => '11',
                'ibge' => '2403004',
            ],
            [
                'name' => 'Currais Novos',
                'estado_id' => '11',
                'ibge' => '2403103',
            ],
            [
                'name' => 'Doutor Severiano',
                'estado_id' => '11',
                'ibge' => '2403202',
            ],
            [
                'name' => 'Parnamirim',
                'estado_id' => '11',
                'ibge' => '2403251',
            ],
            [
                'name' => 'Encanto',
                'estado_id' => '11',
                'ibge' => '2403301',
            ],
            [
                'name' => 'Equador',
                'estado_id' => '11',
                'ibge' => '2403400',
            ],
            [
                'name' => 'Espirito Santo',
                'estado_id' => '11',
                'ibge' => '2403509',
            ],
            [
                'name' => 'Extremoz',
                'estado_id' => '11',
                'ibge' => '2403608',
            ],
            [
                'name' => 'Felipe Guerra',
                'estado_id' => '11',
                'ibge' => '2403707',
            ],
            [
                'name' => 'Fernando Pedroza',
                'estado_id' => '11',
                'ibge' => '2403756',
            ],
            [
                'name' => 'Florania',
                'estado_id' => '11',
                'ibge' => '2403806',
            ],
            [
                'name' => 'Francisco Dantas',
                'estado_id' => '11',
                'ibge' => '2403905',
            ],
            [
                'name' => 'Frutuoso Gomes',
                'estado_id' => '11',
                'ibge' => '2404002',
            ],
            [
                'name' => 'Galinhos',
                'estado_id' => '11',
                'ibge' => '2404101',
            ],
            [
                'name' => 'Goianinha',
                'estado_id' => '11',
                'ibge' => '2404200',
            ],
            [
                'name' => 'Governador Dix-Sept Rosado',
                'estado_id' => '11',
                'ibge' => '2404309',
            ],
            [
                'name' => 'Grossos',
                'estado_id' => '11',
                'ibge' => '2404408',
            ],
            [
                'name' => 'Guamare',
                'estado_id' => '11',
                'ibge' => '2404507',
            ],
            [
                'name' => 'Ielmo Marinho',
                'estado_id' => '11',
                'ibge' => '2404606',
            ],
            [
                'name' => 'Ipanguacu',
                'estado_id' => '11',
                'ibge' => '2404705',
            ],
            [
                'name' => 'Ipueira',
                'estado_id' => '11',
                'ibge' => '2404804',
            ],
            [
                'name' => 'Itaja',
                'estado_id' => '11',
                'ibge' => '2404853',
            ],
            [
                'name' => 'Ita�',
                'estado_id' => '11',
                'ibge' => '2404903',
            ],
            [
                'name' => 'Jacana',
                'estado_id' => '11',
                'ibge' => '2405009',
            ],
            [
                'name' => 'Jandaira',
                'estado_id' => '11',
                'ibge' => '2405108',
            ],
            [
                'name' => 'Janduis',
                'estado_id' => '11',
                'ibge' => '2405207',
            ],
            [
                'name' => 'Januario Cicco',
                'estado_id' => '11',
                'ibge' => '2405306',
            ],
            [
                'name' => 'Japi',
                'estado_id' => '11',
                'ibge' => '2405405',
            ],
            [
                'name' => 'Jardim de Angicos',
                'estado_id' => '11',
                'ibge' => '2405504',
            ],
            [
                'name' => 'Jardim de Piranhas',
                'estado_id' => '11',
                'ibge' => '2405603',
            ],
            [
                'name' => 'Jardim do Serido',
                'estado_id' => '11',
                'ibge' => '2405702',
            ],
            [
                'name' => 'Joao Camara',
                'estado_id' => '11',
                'ibge' => '2405801',
            ],
            [
                'name' => 'Joao Dias',
                'estado_id' => '11',
                'ibge' => '2405900',
            ],
            [
                'name' => 'Jose da Penha',
                'estado_id' => '11',
                'ibge' => '2406007',
            ],
            [
                'name' => 'Jucurutu',
                'estado_id' => '11',
                'ibge' => '2406106',
            ],
            [
                'name' => 'Jundia',
                'estado_id' => '11',
                'ibge' => '2406155',
            ],
            [
                'name' => 'Lagoa de Pedras',
                'estado_id' => '11',
                'ibge' => '2406304',
            ],
            [
                'name' => 'Lagoa de Velhos',
                'estado_id' => '11',
                'ibge' => '2406403',
            ],
            [
                'name' => 'Lagoa Nova',
                'estado_id' => '11',
                'ibge' => '2406502',
            ],
            [
                'name' => 'Lagoa Salgada',
                'estado_id' => '11',
                'ibge' => '2406601',
            ],
            [
                'name' => 'Lajes',
                'estado_id' => '11',
                'ibge' => '2406700',
            ],
            [
                'name' => 'Lajes Pintadas',
                'estado_id' => '11',
                'ibge' => '2406809',
            ],
            [
                'name' => 'Lucrecia',
                'estado_id' => '11',
                'ibge' => '2406908',
            ],
            [
                'name' => 'Luis Gomes',
                'estado_id' => '11',
                'ibge' => '2407005',
            ],
            [
                'name' => 'Macaiba',
                'estado_id' => '11',
                'ibge' => '2407104',
            ],
            [
                'name' => 'Macau',
                'estado_id' => '11',
                'ibge' => '2407203',
            ],
            [
                'name' => 'Major Sales',
                'estado_id' => '11',
                'ibge' => '2407252',
            ],
            [
                'name' => 'Marcelino Vieira',
                'estado_id' => '11',
                'ibge' => '2407302',
            ],
            [
                'name' => 'Martins',
                'estado_id' => '11',
                'ibge' => '2407401',
            ],
            [
                'name' => 'Maxaranguape',
                'estado_id' => '11',
                'ibge' => '2407500',
            ],
            [
                'name' => 'Messias Targino',
                'estado_id' => '11',
                'ibge' => '2407609',
            ],
            [
                'name' => 'Montanhas',
                'estado_id' => '11',
                'ibge' => '2407708',
            ],
            [
                'name' => 'Monte Alegre',
                'estado_id' => '11',
                'ibge' => '2407807',
            ],
            [
                'name' => 'Monte das Gameleiras',
                'estado_id' => '11',
                'ibge' => '2407906',
            ],
            [
                'name' => 'Mossoro',
                'estado_id' => '11',
                'ibge' => '2408003',
            ],
            [
                'name' => 'Natal',
                'estado_id' => '11',
                'ibge' => '2408102',
            ],
            [
                'name' => 'Nisia Floresta',
                'estado_id' => '11',
                'ibge' => '2408201',
            ],
            [
                'name' => 'Nova Cruz',
                'estado_id' => '11',
                'ibge' => '2408300',
            ],
            [
                'name' => 'Ouro Branco',
                'estado_id' => '11',
                'ibge' => '2408508',
            ],
            [
                'name' => 'Parana',
                'estado_id' => '11',
                'ibge' => '2408607',
            ],
            [
                'name' => 'Para�',
                'estado_id' => '11',
                'ibge' => '2408706',
            ],
            [
                'name' => 'Parazinho',
                'estado_id' => '11',
                'ibge' => '2408805',
            ],
            [
                'name' => 'Parelhas',
                'estado_id' => '11',
                'ibge' => '2408904',
            ],
            [
                'name' => 'Rio do Fogo',
                'estado_id' => '11',
                'ibge' => '2408953',
            ],
            [
                'name' => 'Passa e Fica',
                'estado_id' => '11',
                'ibge' => '2409100',
            ],
            [
                'name' => 'Passagem',
                'estado_id' => '11',
                'ibge' => '2409209',
            ],
            [
                'name' => 'Patu',
                'estado_id' => '11',
                'ibge' => '2409308',
            ],
            [
                'name' => 'Santa Maria',
                'estado_id' => '11',
                'ibge' => '2409332',
            ],
            [
                'name' => 'Pau dos Ferros',
                'estado_id' => '11',
                'ibge' => '2409407',
            ],
            [
                'name' => 'Pedra Grande',
                'estado_id' => '11',
                'ibge' => '2409506',
            ],
            [
                'name' => 'Pedra Preta',
                'estado_id' => '11',
                'ibge' => '2409605',
            ],
            [
                'name' => 'Pedro Avelino',
                'estado_id' => '11',
                'ibge' => '2409704',
            ],
            [
                'name' => 'Pedro Velho',
                'estado_id' => '11',
                'ibge' => '2409803',
            ],
            [
                'name' => 'Pend�ncias',
                'estado_id' => '11',
                'ibge' => '2409902',
            ],
            [
                'name' => 'Pil�es',
                'estado_id' => '11',
                'ibge' => '2410009',
            ],
            [
                'name' => 'Poco Branco',
                'estado_id' => '11',
                'ibge' => '2410108',
            ],
            [
                'name' => 'Portalegre',
                'estado_id' => '11',
                'ibge' => '2410207',
            ],
            [
                'name' => 'Porto do Mangue',
                'estado_id' => '11',
                'ibge' => '2410256',
            ],
            [
                'name' => 'Presidente Juscelino',
                'estado_id' => '11',
                'ibge' => '2410306',
            ],
            [
                'name' => 'Pureza',
                'estado_id' => '11',
                'ibge' => '2410405',
            ],
            [
                'name' => 'Rafael Fernandes',
                'estado_id' => '11',
                'ibge' => '2410504',
            ],
            [
                'name' => 'Rafael Godeiro',
                'estado_id' => '11',
                'ibge' => '2410603',
            ],
            [
                'name' => 'Riacho da Cruz',
                'estado_id' => '11',
                'ibge' => '2410702',
            ],
            [
                'name' => 'Riacho de Santana',
                'estado_id' => '11',
                'ibge' => '2410801',
            ],
            [
                'name' => 'Riachuelo',
                'estado_id' => '11',
                'ibge' => '2410900',
            ],
            [
                'name' => 'Rodolfo Fernandes',
                'estado_id' => '11',
                'ibge' => '2411007',
            ],
            [
                'name' => 'Tibau',
                'estado_id' => '11',
                'ibge' => '2411056',
            ],
            [
                'name' => 'Ruy Barbosa',
                'estado_id' => '11',
                'ibge' => '2411106',
            ],
            [
                'name' => 'Santa Cruz',
                'estado_id' => '11',
                'ibge' => '2411205',
            ],
            [
                'name' => 'Santana do Matos',
                'estado_id' => '11',
                'ibge' => '2411403',
            ],
            [
                'name' => 'Santana do Serido',
                'estado_id' => '11',
                'ibge' => '2411429',
            ],
            [
                'name' => 'Santo Antonio',
                'estado_id' => '11',
                'ibge' => '2411502',
            ],
            [
                'name' => 'Sao Bento do Norte',
                'estado_id' => '11',
                'ibge' => '2411601',
            ],
            [
                'name' => 'Sao Bento do Trairi',
                'estado_id' => '11',
                'ibge' => '2411700',
            ],
            [
                'name' => 'Sao Fernando',
                'estado_id' => '11',
                'ibge' => '2411809',
            ],
            [
                'name' => 'Sao Francisco do Oeste',
                'estado_id' => '11',
                'ibge' => '2411908',
            ],
            [
                'name' => 'Sao Goncalo do Amarante',
                'estado_id' => '11',
                'ibge' => '2412005',
            ],
            [
                'name' => 'Sao Joao do Sabugi',
                'estado_id' => '11',
                'ibge' => '2412104',
            ],
            [
                'name' => 'Sao Jose de Mipibu',
                'estado_id' => '11',
                'ibge' => '2412203',
            ],
            [
                'name' => 'Sao Jose do Campestre',
                'estado_id' => '11',
                'ibge' => '2412302',
            ],
            [
                'name' => 'Sao Jose do Serido',
                'estado_id' => '11',
                'ibge' => '2412401',
            ],
            [
                'name' => 'Sao Miguel',
                'estado_id' => '11',
                'ibge' => '2412500',
            ],
            [
                'name' => 'Sao Miguel do Gostoso',
                'estado_id' => '11',
                'ibge' => '2412559',
            ],
            [
                'name' => 'Sao Paulo do Potengi',
                'estado_id' => '11',
                'ibge' => '2412609',
            ],
            [
                'name' => 'Sao Pedro',
                'estado_id' => '11',
                'ibge' => '2412708',
            ],
            [
                'name' => 'Sao Rafael',
                'estado_id' => '11',
                'ibge' => '2412807',
            ],
            [
                'name' => 'Sao Tome',
                'estado_id' => '11',
                'ibge' => '2412906',
            ],
            [
                'name' => 'Sao Vicente',
                'estado_id' => '11',
                'ibge' => '2413003',
            ],
            [
                'name' => 'Senador Eloi de Souza',
                'estado_id' => '11',
                'ibge' => '2413102',
            ],
            [
                'name' => 'Senador Georgino Avelino',
                'estado_id' => '11',
                'ibge' => '2413201',
            ],
            [
                'name' => 'Serra de Sao Bento',
                'estado_id' => '11',
                'ibge' => '2413300',
            ],
            [
                'name' => 'Serra do Mel',
                'estado_id' => '11',
                'ibge' => '2413359',
            ],
            [
                'name' => 'Serra Negra do Norte',
                'estado_id' => '11',
                'ibge' => '2413409',
            ],
            [
                'name' => 'Serrinha',
                'estado_id' => '11',
                'ibge' => '2413508',
            ],
            [
                'name' => 'Serrinha dos Pintos',
                'estado_id' => '11',
                'ibge' => '2413557',
            ],
            [
                'name' => 'Severiano Melo',
                'estado_id' => '11',
                'ibge' => '2413607',
            ],
            [
                'name' => 'Sitio Novo',
                'estado_id' => '11',
                'ibge' => '2413706',
            ],
            [
                'name' => 'Taboleiro Grande',
                'estado_id' => '11',
                'ibge' => '2413805',
            ],
            [
                'name' => 'Taipu',
                'estado_id' => '11',
                'ibge' => '2413904',
            ],
            [
                'name' => 'Tangara',
                'estado_id' => '11',
                'ibge' => '2414001',
            ],
            [
                'name' => 'Tenente Ananias',
                'estado_id' => '11',
                'ibge' => '2414100',
            ],
            [
                'name' => 'Tenente Laurentino Cruz',
                'estado_id' => '11',
                'ibge' => '2414159',
            ],
            [
                'name' => 'Tibau do Sul',
                'estado_id' => '11',
                'ibge' => '2414209',
            ],
            [
                'name' => 'Timba�ba dos Batistas',
                'estado_id' => '11',
                'ibge' => '2414308',
            ],
            [
                'name' => 'Touros',
                'estado_id' => '11',
                'ibge' => '2414407',
            ],
            [
                'name' => 'Triunfo Potiguar',
                'estado_id' => '11',
                'ibge' => '2414456',
            ],
            [
                'name' => 'Umarizal',
                'estado_id' => '11',
                'ibge' => '2414506',
            ],
            [
                'name' => 'Upanema',
                'estado_id' => '11',
                'ibge' => '2414605',
            ],
            [
                'name' => 'Varzea',
                'estado_id' => '11',
                'ibge' => '2414704',
            ],
            [
                'name' => 'Venha-Ver',
                'estado_id' => '11',
                'ibge' => '2414753',
            ],
            [
                'name' => 'Vera Cruz',
                'estado_id' => '11',
                'ibge' => '2414803',
            ],
            [
                'name' => 'Vicosa',
                'estado_id' => '11',
                'ibge' => '2414902',
            ],
            [
                'name' => 'Vila Flor',
                'estado_id' => '11',
                'ibge' => '2415008',
            ],
            [
                'name' => 'Olho D Agua do Borges',
                'estado_id' => '11',
                'ibge' => '2408409',
            ],
            [
                'name' => 'Lagoa D Anta',
                'estado_id' => '11',
                'ibge' => '2406205',
            ],

            /* Paraíba  */

            [
                'name' => 'Agua Branca',
                'estado_id' => '12',
                'ibge' => '2500106',
            ],
            [
                'name' => 'Aguiar',
                'estado_id' => '12',
                'ibge' => '2500205',
            ],
            [
                'name' => 'Alagoa Grande',
                'estado_id' => '12',
                'ibge' => '2500304',
            ],
            [
                'name' => 'Alagoa Nova',
                'estado_id' => '12',
                'ibge' => '2500403',
            ],
            [
                'name' => 'Alagoinha',
                'estado_id' => '12',
                'ibge' => '2500502',
            ],
            [
                'name' => 'Alcantil',
                'estado_id' => '12',
                'ibge' => '2500536',
            ],
            [
                'name' => 'Algodao de Jandaira',
                'estado_id' => '12',
                'ibge' => '2500577',
            ],
            [
                'name' => 'Alhandra',
                'estado_id' => '12',
                'ibge' => '2500601',
            ],
            [
                'name' => 'Sao Joao do Rio do Peixe',
                'estado_id' => '12',
                'ibge' => '2500700',
            ],
            [
                'name' => 'Amparo',
                'estado_id' => '12',
                'ibge' => '2500734',
            ],
            [
                'name' => 'Aparecida',
                'estado_id' => '12',
                'ibge' => '2500775',
            ],
            [
                'name' => 'Aracagi',
                'estado_id' => '12',
                'ibge' => '2500809',
            ],
            [
                'name' => 'Arara',
                'estado_id' => '12',
                'ibge' => '2500908',
            ],
            [
                'name' => 'Araruna',
                'estado_id' => '12',
                'ibge' => '2501005',
            ],
            [
                'name' => 'Areia',
                'estado_id' => '12',
                'ibge' => '2501104',
            ],
            [
                'name' => 'Areia de Bara�nas',
                'estado_id' => '12',
                'ibge' => '2501153',
            ],
            [
                'name' => 'Areial',
                'estado_id' => '12',
                'ibge' => '2501203',
            ],
            [
                'name' => 'Aroeiras',
                'estado_id' => '12',
                'ibge' => '2501302',
            ],
            [
                'name' => 'Assuncao',
                'estado_id' => '12',
                'ibge' => '2501351',
            ],
            [
                'name' => 'Baia da Traicao',
                'estado_id' => '12',
                'ibge' => '2501401',
            ],
            [
                'name' => 'Bananeiras',
                'estado_id' => '12',
                'ibge' => '2501500',
            ],
            [
                'name' => 'Bara�na',
                'estado_id' => '12',
                'ibge' => '2501534',
            ],
            [
                'name' => 'Barra de Santana',
                'estado_id' => '12',
                'ibge' => '2501575',
            ],
            [
                'name' => 'Barra de Santa Rosa',
                'estado_id' => '12',
                'ibge' => '2501609',
            ],
            [
                'name' => 'Barra de Sao Miguel',
                'estado_id' => '12',
                'ibge' => '2501708',
            ],
            [
                'name' => 'Bayeux',
                'estado_id' => '12',
                'ibge' => '2501807',
            ],
            [
                'name' => 'Belem',
                'estado_id' => '12',
                'ibge' => '2501906',
            ],
            [
                'name' => 'Belem do Brejo do Cruz',
                'estado_id' => '12',
                'ibge' => '2502003',
            ],
            [
                'name' => 'Bernardino Batista',
                'estado_id' => '12',
                'ibge' => '2502052',
            ],
            [
                'name' => 'Boa Ventura',
                'estado_id' => '12',
                'ibge' => '2502102',
            ],
            [
                'name' => 'Boa Vista',
                'estado_id' => '12',
                'ibge' => '2502151',
            ],
            [
                'name' => 'Bom Jesus',
                'estado_id' => '12',
                'ibge' => '2502201',
            ],
            [
                'name' => 'Bom Sucesso',
                'estado_id' => '12',
                'ibge' => '2502300',
            ],
            [
                'name' => 'Bonito de Santa Fe',
                'estado_id' => '12',
                'ibge' => '2502409',
            ],
            [
                'name' => 'Boqueirao',
                'estado_id' => '12',
                'ibge' => '2502508',
            ],
            [
                'name' => 'Igaracy',
                'estado_id' => '12',
                'ibge' => '2502607',
            ],
            [
                'name' => 'Borborema',
                'estado_id' => '12',
                'ibge' => '2502706',
            ],
            [
                'name' => 'Brejo do Cruz',
                'estado_id' => '12',
                'ibge' => '2502805',
            ],
            [
                'name' => 'Brejo dos Santos',
                'estado_id' => '12',
                'ibge' => '2502904',
            ],
            [
                'name' => 'Caapora',
                'estado_id' => '12',
                'ibge' => '2503001',
            ],
            [
                'name' => 'Cabaceiras',
                'estado_id' => '12',
                'ibge' => '2503100',
            ],
            [
                'name' => 'Cabedelo',
                'estado_id' => '12',
                'ibge' => '2503209',
            ],
            [
                'name' => 'Cachoeira dos �ndios',
                'estado_id' => '12',
                'ibge' => '2503308',
            ],
            [
                'name' => 'Cacimba de Areia',
                'estado_id' => '12',
                'ibge' => '2503407',
            ],
            [
                'name' => 'Cacimba de Dentro',
                'estado_id' => '12',
                'ibge' => '2503506',
            ],
            [
                'name' => 'Cacimbas',
                'estado_id' => '12',
                'ibge' => '2503555',
            ],
            [
                'name' => 'Caicara',
                'estado_id' => '12',
                'ibge' => '2503605',
            ],
            [
                'name' => 'Cajazeiras',
                'estado_id' => '12',
                'ibge' => '2503704',
            ],
            [
                'name' => 'Cajazeirinhas',
                'estado_id' => '12',
                'ibge' => '2503753',
            ],
            [
                'name' => 'Caldas Brandao',
                'estado_id' => '12',
                'ibge' => '2503803',
            ],
            [
                'name' => 'Camala�',
                'estado_id' => '12',
                'ibge' => '2503902',
            ],
            [
                'name' => 'Campina Grande',
                'estado_id' => '12',
                'ibge' => '2504009',
            ],
            [
                'name' => 'Capim',
                'estado_id' => '12',
                'ibge' => '2504033',
            ],
            [
                'name' => 'Cara�bas',
                'estado_id' => '12',
                'ibge' => '2504074',
            ],
            [
                'name' => 'Carrapateira',
                'estado_id' => '12',
                'ibge' => '2504108',
            ],
            [
                'name' => 'Casserengue',
                'estado_id' => '12',
                'ibge' => '2504157',
            ],
            [
                'name' => 'Catingueira',
                'estado_id' => '12',
                'ibge' => '2504207',
            ],
            [
                'name' => 'Catole do Rocha',
                'estado_id' => '12',
                'ibge' => '2504306',
            ],
            [
                'name' => 'Caturite',
                'estado_id' => '12',
                'ibge' => '2504355',
            ],
            [
                'name' => 'Conceicao',
                'estado_id' => '12',
                'ibge' => '2504405',
            ],
            [
                'name' => 'Condado',
                'estado_id' => '12',
                'ibge' => '2504504',
            ],
            [
                'name' => 'Conde',
                'estado_id' => '12',
                'ibge' => '2504603',
            ],
            [
                'name' => 'Congo',
                'estado_id' => '12',
                'ibge' => '2504702',
            ],
            [
                'name' => 'Coremas',
                'estado_id' => '12',
                'ibge' => '2504801',
            ],
            [
                'name' => 'Coxixola',
                'estado_id' => '12',
                'ibge' => '2504850',
            ],
            [
                'name' => 'Cruz do Espirito Santo',
                'estado_id' => '12',
                'ibge' => '2504900',
            ],
            [
                'name' => 'Cubati',
                'estado_id' => '12',
                'ibge' => '2505006',
            ],
            [
                'name' => 'Cuite',
                'estado_id' => '12',
                'ibge' => '2505105',
            ],
            [
                'name' => 'Cuitegi',
                'estado_id' => '12',
                'ibge' => '2505204',
            ],
            [
                'name' => 'Cuite de Mamanguape',
                'estado_id' => '12',
                'ibge' => '2505238',
            ],
            [
                'name' => 'Curral de Cima',
                'estado_id' => '12',
                'ibge' => '2505279',
            ],
            [
                'name' => 'Curral Velho',
                'estado_id' => '12',
                'ibge' => '2505303',
            ],
            [
                'name' => 'Damiao',
                'estado_id' => '12',
                'ibge' => '2505352',
            ],
            [
                'name' => 'Desterro',
                'estado_id' => '12',
                'ibge' => '2505402',
            ],
            [
                'name' => 'Vista Serrana',
                'estado_id' => '12',
                'ibge' => '2505501',
            ],
            [
                'name' => 'Diamante',
                'estado_id' => '12',
                'ibge' => '2505600',
            ],
            [
                'name' => 'Dona In�s',
                'estado_id' => '12',
                'ibge' => '2505709',
            ],
            [
                'name' => 'Duas Estradas',
                'estado_id' => '12',
                'ibge' => '2505808',
            ],
            [
                'name' => 'Emas',
                'estado_id' => '12',
                'ibge' => '2505907',
            ],
            [
                'name' => 'Esperanca',
                'estado_id' => '12',
                'ibge' => '2506004',
            ],
            [
                'name' => 'Fagundes',
                'estado_id' => '12',
                'ibge' => '2506103',
            ],
            [
                'name' => 'Frei Martinho',
                'estado_id' => '12',
                'ibge' => '2506202',
            ],
            [
                'name' => 'Gado Bravo',
                'estado_id' => '12',
                'ibge' => '2506251',
            ],
            [
                'name' => 'Guarabira',
                'estado_id' => '12',
                'ibge' => '2506301',
            ],
            [
                'name' => 'Gurinhem',
                'estado_id' => '12',
                'ibge' => '2506400',
            ],
            [
                'name' => 'Gurjao',
                'estado_id' => '12',
                'ibge' => '2506509',
            ],
            [
                'name' => 'Ibiara',
                'estado_id' => '12',
                'ibge' => '2506608',
            ],
            [
                'name' => 'Imaculada',
                'estado_id' => '12',
                'ibge' => '2506707',
            ],
            [
                'name' => 'Inga',
                'estado_id' => '12',
                'ibge' => '2506806',
            ],
            [
                'name' => 'Itabaiana',
                'estado_id' => '12',
                'ibge' => '2506905',
            ],
            [
                'name' => 'Itaporanga',
                'estado_id' => '12',
                'ibge' => '2507002',
            ],
            [
                'name' => 'Itapororoca',
                'estado_id' => '12',
                'ibge' => '2507101',
            ],
            [
                'name' => 'Itatuba',
                'estado_id' => '12',
                'ibge' => '2507200',
            ],
            [
                'name' => 'Jacara�',
                'estado_id' => '12',
                'ibge' => '2507309',
            ],
            [
                'name' => 'Jerico',
                'estado_id' => '12',
                'ibge' => '2507408',
            ],
            [
                'name' => 'Joao Pessoa',
                'estado_id' => '12',
                'ibge' => '2507507',
            ],
            [
                'name' => 'Juarez Tavora',
                'estado_id' => '12',
                'ibge' => '2507606',
            ],
            [
                'name' => 'Juazeirinho',
                'estado_id' => '12',
                'ibge' => '2507705',
            ],
            [
                'name' => 'Junco do Serido',
                'estado_id' => '12',
                'ibge' => '2507804',
            ],
            [
                'name' => 'Juripiranga',
                'estado_id' => '12',
                'ibge' => '2507903',
            ],
            [
                'name' => 'Juru',
                'estado_id' => '12',
                'ibge' => '2508000',
            ],
            [
                'name' => 'Lagoa',
                'estado_id' => '12',
                'ibge' => '2508109',
            ],
            [
                'name' => 'Lagoa de Dentro',
                'estado_id' => '12',
                'ibge' => '2508208',
            ],
            [
                'name' => 'Lagoa Seca',
                'estado_id' => '12',
                'ibge' => '2508307',
            ],
            [
                'name' => 'Lastro',
                'estado_id' => '12',
                'ibge' => '2508406',
            ],
            [
                'name' => 'Livramento',
                'estado_id' => '12',
                'ibge' => '2508505',
            ],
            [
                'name' => 'Logradouro',
                'estado_id' => '12',
                'ibge' => '2508554',
            ],
            [
                'name' => 'Lucena',
                'estado_id' => '12',
                'ibge' => '2508604',
            ],
            [
                'name' => 'Malta',
                'estado_id' => '12',
                'ibge' => '2508802',
            ],
            [
                'name' => 'Mamanguape',
                'estado_id' => '12',
                'ibge' => '2508901',
            ],
            [
                'name' => 'Manaira',
                'estado_id' => '12',
                'ibge' => '2509008',
            ],
            [
                'name' => 'Marcacao',
                'estado_id' => '12',
                'ibge' => '2509057',
            ],
            [
                'name' => 'Mari',
                'estado_id' => '12',
                'ibge' => '2509107',
            ],
            [
                'name' => 'Marizopolis',
                'estado_id' => '12',
                'ibge' => '2509156',
            ],
            [
                'name' => 'Massaranduba',
                'estado_id' => '12',
                'ibge' => '2509206',
            ],
            [
                'name' => 'Mataraca',
                'estado_id' => '12',
                'ibge' => '2509305',
            ],
            [
                'name' => 'Matinhas',
                'estado_id' => '12',
                'ibge' => '2509339',
            ],
            [
                'name' => 'Mato Grosso',
                'estado_id' => '12',
                'ibge' => '2509370',
            ],
            [
                'name' => 'Matureia',
                'estado_id' => '12',
                'ibge' => '2509396',
            ],
            [
                'name' => 'Mogeiro',
                'estado_id' => '12',
                'ibge' => '2509404',
            ],
            [
                'name' => 'Montadas',
                'estado_id' => '12',
                'ibge' => '2509503',
            ],
            [
                'name' => 'Monte Horebe',
                'estado_id' => '12',
                'ibge' => '2509602',
            ],
            [
                'name' => 'Monteiro',
                'estado_id' => '12',
                'ibge' => '2509701',
            ],
            [
                'name' => 'Mulungu',
                'estado_id' => '12',
                'ibge' => '2509800',
            ],
            [
                'name' => 'Natuba',
                'estado_id' => '12',
                'ibge' => '2509909',
            ],
            [
                'name' => 'Nazarezinho',
                'estado_id' => '12',
                'ibge' => '2510006',
            ],
            [
                'name' => 'Nova Floresta',
                'estado_id' => '12',
                'ibge' => '2510105',
            ],
            [
                'name' => 'Nova Olinda',
                'estado_id' => '12',
                'ibge' => '2510204',
            ],
            [
                'name' => 'Nova Palmeira',
                'estado_id' => '12',
                'ibge' => '2510303',
            ],
            [
                'name' => 'Olivedos',
                'estado_id' => '12',
                'ibge' => '2510501',
            ],
            [
                'name' => 'Ouro Velho',
                'estado_id' => '12',
                'ibge' => '2510600',
            ],
            [
                'name' => 'Parari',
                'estado_id' => '12',
                'ibge' => '2510659',
            ],
            [
                'name' => 'Passagem',
                'estado_id' => '12',
                'ibge' => '2510709',
            ],
            [
                'name' => 'Patos',
                'estado_id' => '12',
                'ibge' => '2510808',
            ],
            [
                'name' => 'Paulista',
                'estado_id' => '12',
                'ibge' => '2510907',
            ],
            [
                'name' => 'Pedra Branca',
                'estado_id' => '12',
                'ibge' => '2511004',
            ],
            [
                'name' => 'Pedra Lavrada',
                'estado_id' => '12',
                'ibge' => '2511103',
            ],
            [
                'name' => 'Pedras de Fogo',
                'estado_id' => '12',
                'ibge' => '2511202',
            ],
            [
                'name' => 'Pianco',
                'estado_id' => '12',
                'ibge' => '2511301',
            ],
            [
                'name' => 'Picui',
                'estado_id' => '12',
                'ibge' => '2511400',
            ],
            [
                'name' => 'Pilar',
                'estado_id' => '12',
                'ibge' => '2511509',
            ],
            [
                'name' => 'Pil�es',
                'estado_id' => '12',
                'ibge' => '2511608',
            ],
            [
                'name' => 'Pil�ezinhos',
                'estado_id' => '12',
                'ibge' => '2511707',
            ],
            [
                'name' => 'Pirpirituba',
                'estado_id' => '12',
                'ibge' => '2511806',
            ],
            [
                'name' => 'Pitimbu',
                'estado_id' => '12',
                'ibge' => '2511905',
            ],
            [
                'name' => 'Pocinhos',
                'estado_id' => '12',
                'ibge' => '2512002',
            ],
            [
                'name' => 'Poco Dantas',
                'estado_id' => '12',
                'ibge' => '2512036',
            ],
            [
                'name' => 'Poco de Jose de Moura',
                'estado_id' => '12',
                'ibge' => '2512077',
            ],
            [
                'name' => 'Pombal',
                'estado_id' => '12',
                'ibge' => '2512101',
            ],
            [
                'name' => 'Prata',
                'estado_id' => '12',
                'ibge' => '2512200',
            ],
            [
                'name' => 'Princesa Isabel',
                'estado_id' => '12',
                'ibge' => '2512309',
            ],
            [
                'name' => 'Puxinana',
                'estado_id' => '12',
                'ibge' => '2512408',
            ],
            [
                'name' => 'Queimadas',
                'estado_id' => '12',
                'ibge' => '2512507',
            ],
            [
                'name' => 'Quixaba',
                'estado_id' => '12',
                'ibge' => '2512606',
            ],
            [
                'name' => 'Remigio',
                'estado_id' => '12',
                'ibge' => '2512705',
            ],
            [
                'name' => 'Pedro Regis',
                'estado_id' => '12',
                'ibge' => '2512721',
            ],
            [
                'name' => 'Riachao',
                'estado_id' => '12',
                'ibge' => '2512747',
            ],
            [
                'name' => 'Riachao do Bacamarte',
                'estado_id' => '12',
                'ibge' => '2512754',
            ],
            [
                'name' => 'Riachao do Poco',
                'estado_id' => '12',
                'ibge' => '2512762',
            ],
            [
                'name' => 'Riacho de Santo Antonio',
                'estado_id' => '12',
                'ibge' => '2512788',
            ],
            [
                'name' => 'Riacho dos Cavalos',
                'estado_id' => '12',
                'ibge' => '2512804',
            ],
            [
                'name' => 'Rio Tinto',
                'estado_id' => '12',
                'ibge' => '2512903',
            ],
            [
                'name' => 'Salgadinho',
                'estado_id' => '12',
                'ibge' => '2513000',
            ],
            [
                'name' => 'Salgado de Sao Felix',
                'estado_id' => '12',
                'ibge' => '2513109',
            ],
            [
                'name' => 'Santa Cecilia',
                'estado_id' => '12',
                'ibge' => '2513158',
            ],
            [
                'name' => 'Santa Cruz',
                'estado_id' => '12',
                'ibge' => '2513208',
            ],
            [
                'name' => 'Santa Helena',
                'estado_id' => '12',
                'ibge' => '2513307',
            ],
            [
                'name' => 'Santa In�s',
                'estado_id' => '12',
                'ibge' => '2513356',
            ],
            [
                'name' => 'Santa Luzia',
                'estado_id' => '12',
                'ibge' => '2513406',
            ],
            [
                'name' => 'Santana de Mangueira',
                'estado_id' => '12',
                'ibge' => '2513505',
            ],
            [
                'name' => 'Santana dos Garrotes',
                'estado_id' => '12',
                'ibge' => '2513604',
            ],
            [
                'name' => 'Santarem',
                'estado_id' => '12',
                'ibge' => '2513653',
            ],
            [
                'name' => 'Santa Rita',
                'estado_id' => '12',
                'ibge' => '2513703',
            ],
            [
                'name' => 'Santa Teresinha',
                'estado_id' => '12',
                'ibge' => '2513802',
            ],
            [
                'name' => 'Santo Andre',
                'estado_id' => '12',
                'ibge' => '2513851',
            ],
            [
                'name' => 'Sao Bento',
                'estado_id' => '12',
                'ibge' => '2513901',
            ],
            [
                'name' => 'Sao Bentinho',
                'estado_id' => '12',
                'ibge' => '2513927',
            ],
            [
                'name' => 'Sao Domingos do Cariri',
                'estado_id' => '12',
                'ibge' => '2513943',
            ],
            [
                'name' => 'Sao Domingos',
                'estado_id' => '12',
                'ibge' => '2513968',
            ],
            [
                'name' => 'Sao Francisco',
                'estado_id' => '12',
                'ibge' => '2513984',
            ],
            [
                'name' => 'Sao Joao do Cariri',
                'estado_id' => '12',
                'ibge' => '2514008',
            ],
            [
                'name' => 'Sao Joao do Tigre',
                'estado_id' => '12',
                'ibge' => '2514107',
            ],
            [
                'name' => 'Sao Jose da Lagoa Tapada',
                'estado_id' => '12',
                'ibge' => '2514206',
            ],
            [
                'name' => 'Sao Jose de Caiana',
                'estado_id' => '12',
                'ibge' => '2514305',
            ],
            [
                'name' => 'Sao Jose de Espinharas',
                'estado_id' => '12',
                'ibge' => '2514404',
            ],
            [
                'name' => 'Sao Jose dos Ramos',
                'estado_id' => '12',
                'ibge' => '2514453',
            ],
            [
                'name' => 'Sao Jose de Piranhas',
                'estado_id' => '12',
                'ibge' => '2514503',
            ],
            [
                'name' => 'Sao Jose de Princesa',
                'estado_id' => '12',
                'ibge' => '2514552',
            ],
            [
                'name' => 'Sao Jose do Bonfim',
                'estado_id' => '12',
                'ibge' => '2514602',
            ],
            [
                'name' => 'Sao Jose do Brejo do Cruz',
                'estado_id' => '12',
                'ibge' => '2514651',
            ],
            [
                'name' => 'Sao Jose do Sabugi',
                'estado_id' => '12',
                'ibge' => '2514701',
            ],
            [
                'name' => 'Sao Jose dos Cordeiros',
                'estado_id' => '12',
                'ibge' => '2514800',
            ],
            [
                'name' => 'Sao Mamede',
                'estado_id' => '12',
                'ibge' => '2514909',
            ],
            [
                'name' => 'Sao Miguel de Taipu',
                'estado_id' => '12',
                'ibge' => '2515005',
            ],
            [
                'name' => 'Sao Sebastiao de Lagoa de Roc',
                'estado_id' => '12',
                'ibge' => '2515104',
            ],
            [
                'name' => 'Sao Sebastiao do Umbuzeiro',
                'estado_id' => '12',
                'ibge' => '2515203',
            ],
            [
                'name' => 'Sape',
                'estado_id' => '12',
                'ibge' => '2515302',
            ],
            [
                'name' => 'Serido',
                'estado_id' => '12',
                'ibge' => '2515401',
            ],
            [
                'name' => 'Serra Branca',
                'estado_id' => '12',
                'ibge' => '2515500',
            ],
            [
                'name' => 'Serra da Raiz',
                'estado_id' => '12',
                'ibge' => '2515609',
            ],
            [
                'name' => 'Serra Grande',
                'estado_id' => '12',
                'ibge' => '2515708',
            ],
            [
                'name' => 'Serra Redonda',
                'estado_id' => '12',
                'ibge' => '2515807',
            ],
            [
                'name' => 'Serraria',
                'estado_id' => '12',
                'ibge' => '2515906',
            ],
            [
                'name' => 'Sertaozinho',
                'estado_id' => '12',
                'ibge' => '2515930',
            ],
            [
                'name' => 'Sobrado',
                'estado_id' => '12',
                'ibge' => '2515971',
            ],
            [
                'name' => 'Solanea',
                'estado_id' => '12',
                'ibge' => '2516003',
            ],
            [
                'name' => 'Soledade',
                'estado_id' => '12',
                'ibge' => '2516102',
            ],
            [
                'name' => 'Soss�go',
                'estado_id' => '12',
                'ibge' => '2516151',
            ],
            [
                'name' => 'Sousa',
                'estado_id' => '12',
                'ibge' => '2516201',
            ],
            [
                'name' => 'Sume',
                'estado_id' => '12',
                'ibge' => '2516300',
            ],
            [
                'name' => 'Campo de Santana',
                'estado_id' => '12',
                'ibge' => '2516409',
            ],
            [
                'name' => 'Taperoa',
                'estado_id' => '12',
                'ibge' => '2516508',
            ],
            [
                'name' => 'Tavares',
                'estado_id' => '12',
                'ibge' => '2516607',
            ],
            [
                'name' => 'Teixeira',
                'estado_id' => '12',
                'ibge' => '2516706',
            ],
            [
                'name' => 'Tenorio',
                'estado_id' => '12',
                'ibge' => '2516755',
            ],
            [
                'name' => 'Triunfo',
                'estado_id' => '12',
                'ibge' => '2516805',
            ],
            [
                'name' => 'Uira�na',
                'estado_id' => '12',
                'ibge' => '2516904',
            ],
            [
                'name' => 'Umbuzeiro',
                'estado_id' => '12',
                'ibge' => '2517001',
            ],
            [
                'name' => 'Varzea',
                'estado_id' => '12',
                'ibge' => '2517100',
            ],
            [
                'name' => 'Vieiropolis',
                'estado_id' => '12',
                'ibge' => '2517209',
            ],
            [
                'name' => 'Zabel�',
                'estado_id' => '12',
                'ibge' => '2517407',
            ],
            [
                'name' => 'Olho D agua ',
                'estado_id' => '12',
                'ibge' => '2510402',
            ],
            [
                'name' => 'Mae D Agua',
                'estado_id' => '12',
                'ibge' => '2508703',
            ],

            /* Pernambuco */

            [
                'name' => 'Abreu e Lima',
                'estado_id' => '13',
                'ibge' => '2600054',
            ],
            [
                'name' => 'Afogados da Ingazeira',
                'estado_id' => '13',
                'ibge' => '2600104',
            ],
            [
                'name' => 'Afranio',
                'estado_id' => '13',
                'ibge' => '2600203',
            ],
            [
                'name' => 'Agrestina',
                'estado_id' => '13',
                'ibge' => '2600302',
            ],
            [
                'name' => 'Agua Preta',
                'estado_id' => '13',
                'ibge' => '2600401',
            ],
            [
                'name' => 'Aguas Belas',
                'estado_id' => '13',
                'ibge' => '2600500',
            ],
            [
                'name' => 'Alagoinha',
                'estado_id' => '13',
                'ibge' => '2600609',
            ],
            [
                'name' => 'Alianca',
                'estado_id' => '13',
                'ibge' => '2600708',
            ],
            [
                'name' => 'Altinho',
                'estado_id' => '13',
                'ibge' => '2600807',
            ],
            [
                'name' => 'Amaraji',
                'estado_id' => '13',
                'ibge' => '2600906',
            ],
            [
                'name' => 'Angelim',
                'estado_id' => '13',
                'ibge' => '2601003',
            ],
            [
                'name' => 'Aracoiaba',
                'estado_id' => '13',
                'ibge' => '2601052',
            ],
            [
                'name' => 'Araripina',
                'estado_id' => '13',
                'ibge' => '2601102',
            ],
            [
                'name' => 'Arcoverde',
                'estado_id' => '13',
                'ibge' => '2601201',
            ],
            [
                'name' => 'Barra de Guabiraba',
                'estado_id' => '13',
                'ibge' => '2601300',
            ],
            [
                'name' => 'Barreiros',
                'estado_id' => '13',
                'ibge' => '2601409',
            ],
            [
                'name' => 'Belem de Maria',
                'estado_id' => '13',
                'ibge' => '2601508',
            ],
            [
                'name' => 'Belem do Sao Francisco',
                'estado_id' => '13',
                'ibge' => '2601607',
            ],
            [
                'name' => 'Belo Jardim',
                'estado_id' => '13',
                'ibge' => '2601706',
            ],
            [
                'name' => 'Betania',
                'estado_id' => '13',
                'ibge' => '2601805',
            ],
            [
                'name' => 'Bezerros',
                'estado_id' => '13',
                'ibge' => '2601904',
            ],
            [
                'name' => 'Bodoco',
                'estado_id' => '13',
                'ibge' => '2602001',
            ],
            [
                'name' => 'Bom Conselho',
                'estado_id' => '13',
                'ibge' => '2602100',
            ],
            [
                'name' => 'Bom Jardim',
                'estado_id' => '13',
                'ibge' => '2602209',
            ],
            [
                'name' => 'Bonito',
                'estado_id' => '13',
                'ibge' => '2602308',
            ],
            [
                'name' => 'Brejao',
                'estado_id' => '13',
                'ibge' => '2602407',
            ],
            [
                'name' => 'Brejinho',
                'estado_id' => '13',
                'ibge' => '2602506',
            ],
            [
                'name' => 'Brejo da Madre de Deus',
                'estado_id' => '13',
                'ibge' => '2602605',
            ],
            [
                'name' => 'Buenos Aires',
                'estado_id' => '13',
                'ibge' => '2602704',
            ],
            [
                'name' => 'Buique',
                'estado_id' => '13',
                'ibge' => '2602803',
            ],
            [
                'name' => 'Cabo de Santo Agostinho',
                'estado_id' => '13',
                'ibge' => '2602902',
            ],
            [
                'name' => 'Cabrobo',
                'estado_id' => '13',
                'ibge' => '2603009',
            ],
            [
                'name' => 'Cachoeirinha',
                'estado_id' => '13',
                'ibge' => '2603108',
            ],
            [
                'name' => 'Caetes',
                'estado_id' => '13',
                'ibge' => '2603207',
            ],
            [
                'name' => 'Calcado',
                'estado_id' => '13',
                'ibge' => '2603306',
            ],
            [
                'name' => 'Calumbi',
                'estado_id' => '13',
                'ibge' => '2603405',
            ],
            [
                'name' => 'Camaragibe',
                'estado_id' => '13',
                'ibge' => '2603454',
            ],
            [
                'name' => 'Camocim de Sao Felix',
                'estado_id' => '13',
                'ibge' => '2603504',
            ],
            [
                'name' => 'Camutanga',
                'estado_id' => '13',
                'ibge' => '2603603',
            ],
            [
                'name' => 'Canhotinho',
                'estado_id' => '13',
                'ibge' => '2603702',
            ],
            [
                'name' => 'Capoeiras',
                'estado_id' => '13',
                'ibge' => '2603801',
            ],
            [
                'name' => 'Carnaiba',
                'estado_id' => '13',
                'ibge' => '2603900',
            ],
            [
                'name' => 'Carnaubeira da Penha',
                'estado_id' => '13',
                'ibge' => '2603926',
            ],
            [
                'name' => 'Carpina',
                'estado_id' => '13',
                'ibge' => '2604007',
            ],
            [
                'name' => 'Caruaru',
                'estado_id' => '13',
                'ibge' => '2604106',
            ],
            [
                'name' => 'Casinhas',
                'estado_id' => '13',
                'ibge' => '2604155',
            ],
            [
                'name' => 'Catende',
                'estado_id' => '13',
                'ibge' => '2604205',
            ],
            [
                'name' => 'Cedro',
                'estado_id' => '13',
                'ibge' => '2604304',
            ],
            [
                'name' => 'Cha de Alegria',
                'estado_id' => '13',
                'ibge' => '2604403',
            ],
            [
                'name' => 'Cha Grande',
                'estado_id' => '13',
                'ibge' => '2604502',
            ],
            [
                'name' => 'Condado',
                'estado_id' => '13',
                'ibge' => '2604601',
            ],
            [
                'name' => 'Correntes',
                'estado_id' => '13',
                'ibge' => '2604700',
            ],
            [
                'name' => 'Cort�s',
                'estado_id' => '13',
                'ibge' => '2604809',
            ],
            [
                'name' => 'Cumaru',
                'estado_id' => '13',
                'ibge' => '2604908',
            ],
            [
                'name' => 'Cupira',
                'estado_id' => '13',
                'ibge' => '2605004',
            ],
            [
                'name' => 'Custodia',
                'estado_id' => '13',
                'ibge' => '2605103',
            ],
            [
                'name' => 'Dormentes',
                'estado_id' => '13',
                'ibge' => '2605152',
            ],
            [
                'name' => 'Escada',
                'estado_id' => '13',
                'ibge' => '2605202',
            ],
            [
                'name' => 'Exu',
                'estado_id' => '13',
                'ibge' => '2605301',
            ],
            [
                'name' => 'Feira Nova',
                'estado_id' => '13',
                'ibge' => '2605400',
            ],
            [
                'name' => 'Fernando de Noronha',
                'estado_id' => '13',
                'ibge' => '2605459',
            ],
            [
                'name' => 'Ferreiros',
                'estado_id' => '13',
                'ibge' => '2605509',
            ],
            [
                'name' => 'Flores',
                'estado_id' => '13',
                'ibge' => '2605608',
            ],
            [
                'name' => 'Floresta',
                'estado_id' => '13',
                'ibge' => '2605707',
            ],
            [
                'name' => 'Frei Miguelinho',
                'estado_id' => '13',
                'ibge' => '2605806',
            ],
            [
                'name' => 'Gameleira',
                'estado_id' => '13',
                'ibge' => '2605905',
            ],
            [
                'name' => 'Garanhuns',
                'estado_id' => '13',
                'ibge' => '2606002',
            ],
            [
                'name' => 'Gloria do Goita',
                'estado_id' => '13',
                'ibge' => '2606101',
            ],
            [
                'name' => 'Goiana',
                'estado_id' => '13',
                'ibge' => '2606200',
            ],
            [
                'name' => 'Granito',
                'estado_id' => '13',
                'ibge' => '2606309',
            ],
            [
                'name' => 'Gravata',
                'estado_id' => '13',
                'ibge' => '2606408',
            ],
            [
                'name' => 'Iati',
                'estado_id' => '13',
                'ibge' => '2606507',
            ],
            [
                'name' => 'Ibimirim',
                'estado_id' => '13',
                'ibge' => '2606606',
            ],
            [
                'name' => 'Ibirajuba',
                'estado_id' => '13',
                'ibge' => '2606705',
            ],
            [
                'name' => 'Igarassu',
                'estado_id' => '13',
                'ibge' => '2606804',
            ],
            [
                'name' => 'Iguaraci',
                'estado_id' => '13',
                'ibge' => '2606903',
            ],
            [
                'name' => 'Inaja',
                'estado_id' => '13',
                'ibge' => '2607000',
            ],
            [
                'name' => 'Ingazeira',
                'estado_id' => '13',
                'ibge' => '2607109',
            ],
            [
                'name' => 'Ipojuca',
                'estado_id' => '13',
                'ibge' => '2607208',
            ],
            [
                'name' => 'Ipubi',
                'estado_id' => '13',
                'ibge' => '2607307',
            ],
            [
                'name' => 'Itacuruba',
                'estado_id' => '13',
                'ibge' => '2607406',
            ],
            [
                'name' => 'Itaiba',
                'estado_id' => '13',
                'ibge' => '2607505',
            ],
            [
                'name' => 'Ilha de Itamaraca',
                'estado_id' => '13',
                'ibge' => '2607604',
            ],
            [
                'name' => 'Itambe',
                'estado_id' => '13',
                'ibge' => '2607653',
            ],
            [
                'name' => 'Itapetim',
                'estado_id' => '13',
                'ibge' => '2607703',
            ],
            [
                'name' => 'Itapissuma',
                'estado_id' => '13',
                'ibge' => '2607752',
            ],
            [
                'name' => 'Itaquitinga',
                'estado_id' => '13',
                'ibge' => '2607802',
            ],
            [
                'name' => 'Jaboatao dos Guararapes',
                'estado_id' => '13',
                'ibge' => '2607901',
            ],
            [
                'name' => 'Jaqueira',
                'estado_id' => '13',
                'ibge' => '2607950',
            ],
            [
                'name' => 'Jata�ba',
                'estado_id' => '13',
                'ibge' => '2608008',
            ],
            [
                'name' => 'Jatoba',
                'estado_id' => '13',
                'ibge' => '2608057',
            ],
            [
                'name' => 'Joao Alfredo',
                'estado_id' => '13',
                'ibge' => '2608107',
            ],
            [
                'name' => 'Joaquim Nabuco',
                'estado_id' => '13',
                'ibge' => '2608206',
            ],
            [
                'name' => 'Jucati',
                'estado_id' => '13',
                'ibge' => '2608255',
            ],
            [
                'name' => 'Jupi',
                'estado_id' => '13',
                'ibge' => '2608305',
            ],
            [
                'name' => 'Jurema',
                'estado_id' => '13',
                'ibge' => '2608404',
            ],
            [
                'name' => 'Lagoa do Carro',
                'estado_id' => '13',
                'ibge' => '2608453',
            ],
            [
                'name' => 'LAGOA DE ITAENGA',
                'estado_id' => '13',
                'ibge' => '2608503',
            ],
            [
                'name' => 'Lagoa do Ouro',
                'estado_id' => '13',
                'ibge' => '2608602',
            ],
            [
                'name' => 'Lagoa dos Gatos',
                'estado_id' => '13',
                'ibge' => '2608701',
            ],
            [
                'name' => 'Lagoa Grande',
                'estado_id' => '13',
                'ibge' => '2608750',
            ],
            [
                'name' => 'Lajedo',
                'estado_id' => '13',
                'ibge' => '2608800',
            ],
            [
                'name' => 'Limoeiro',
                'estado_id' => '13',
                'ibge' => '2608909',
            ],
            [
                'name' => 'Macaparana',
                'estado_id' => '13',
                'ibge' => '2609006',
            ],
            [
                'name' => 'Machados',
                'estado_id' => '13',
                'ibge' => '2609105',
            ],
            [
                'name' => 'Manari',
                'estado_id' => '13',
                'ibge' => '2609154',
            ],
            [
                'name' => 'Maraial',
                'estado_id' => '13',
                'ibge' => '2609204',
            ],
            [
                'name' => 'Mirandiba',
                'estado_id' => '13',
                'ibge' => '2609303',
            ],
            [
                'name' => 'Moreno',
                'estado_id' => '13',
                'ibge' => '2609402',
            ],
            [
                'name' => 'Nazare da Mata',
                'estado_id' => '13',
                'ibge' => '2609501',
            ],
            [
                'name' => 'Olinda',
                'estado_id' => '13',
                'ibge' => '2609600',
            ],
            [
                'name' => 'Orobo',
                'estado_id' => '13',
                'ibge' => '2609709',
            ],
            [
                'name' => 'Oroco',
                'estado_id' => '13',
                'ibge' => '2609808',
            ],
            [
                'name' => 'Ouricuri',
                'estado_id' => '13',
                'ibge' => '2609907',
            ],
            [
                'name' => 'Palmares',
                'estado_id' => '13',
                'ibge' => '2610004',
            ],
            [
                'name' => 'Palmeirina',
                'estado_id' => '13',
                'ibge' => '2610103',
            ],
            [
                'name' => 'Panelas',
                'estado_id' => '13',
                'ibge' => '2610202',
            ],
            [
                'name' => 'Paranatama',
                'estado_id' => '13',
                'ibge' => '2610301',
            ],
            [
                'name' => 'Parnamirim',
                'estado_id' => '13',
                'ibge' => '2610400',
            ],
            [
                'name' => 'Passira',
                'estado_id' => '13',
                'ibge' => '2610509',
            ],
            [
                'name' => 'Paudalho',
                'estado_id' => '13',
                'ibge' => '2610608',
            ],
            [
                'name' => 'Paulista',
                'estado_id' => '13',
                'ibge' => '2610707',
            ],
            [
                'name' => 'Pedra',
                'estado_id' => '13',
                'ibge' => '2610806',
            ],
            [
                'name' => 'Pesqueira',
                'estado_id' => '13',
                'ibge' => '2610905',
            ],
            [
                'name' => 'Petrolandia',
                'estado_id' => '13',
                'ibge' => '2611002',
            ],
            [
                'name' => 'Petrolina',
                'estado_id' => '13',
                'ibge' => '2611101',
            ],
            [
                'name' => 'Pocao',
                'estado_id' => '13',
                'ibge' => '2611200',
            ],
            [
                'name' => 'Pombos',
                'estado_id' => '13',
                'ibge' => '2611309',
            ],
            [
                'name' => 'Primavera',
                'estado_id' => '13',
                'ibge' => '2611408',
            ],
            [
                'name' => 'Quipapa',
                'estado_id' => '13',
                'ibge' => '2611507',
            ],
            [
                'name' => 'Quixaba',
                'estado_id' => '13',
                'ibge' => '2611533',
            ],
            [
                'name' => 'Recife',
                'estado_id' => '13',
                'ibge' => '2611606',
            ],
            [
                'name' => 'Riacho das Almas',
                'estado_id' => '13',
                'ibge' => '2611705',
            ],
            [
                'name' => 'Ribeirao',
                'estado_id' => '13',
                'ibge' => '2611804',
            ],
            [
                'name' => 'Rio Formoso',
                'estado_id' => '13',
                'ibge' => '2611903',
            ],
            [
                'name' => 'Saire',
                'estado_id' => '13',
                'ibge' => '2612000',
            ],
            [
                'name' => 'Salgadinho',
                'estado_id' => '13',
                'ibge' => '2612109',
            ],
            [
                'name' => 'Salgueiro',
                'estado_id' => '13',
                'ibge' => '2612208',
            ],
            [
                'name' => 'Saloa',
                'estado_id' => '13',
                'ibge' => '2612307',
            ],
            [
                'name' => 'Sanharo',
                'estado_id' => '13',
                'ibge' => '2612406',
            ],
            [
                'name' => 'Santa Cruz',
                'estado_id' => '13',
                'ibge' => '2612455',
            ],
            [
                'name' => 'Santa Cruz da Baixa Verde',
                'estado_id' => '13',
                'ibge' => '2612471',
            ],
            [
                'name' => 'Santa Cruz do Capibaribe',
                'estado_id' => '13',
                'ibge' => '2612505',
            ],
            [
                'name' => 'Santa Filomena',
                'estado_id' => '13',
                'ibge' => '2612554',
            ],
            [
                'name' => 'Santa Maria da Boa Vista',
                'estado_id' => '13',
                'ibge' => '2612604',
            ],
            [
                'name' => 'Santa Maria do Cambuca',
                'estado_id' => '13',
                'ibge' => '2612703',
            ],
            [
                'name' => 'Santa Terezinha',
                'estado_id' => '13',
                'ibge' => '2612802',
            ],
            [
                'name' => 'Sao Benedito do Sul',
                'estado_id' => '13',
                'ibge' => '2612901',
            ],
            [
                'name' => 'Sao Bento do Una',
                'estado_id' => '13',
                'ibge' => '2613008',
            ],
            [
                'name' => 'Sao Caetano',
                'estado_id' => '13',
                'ibge' => '2613107',
            ],
            [
                'name' => 'Sao Joao',
                'estado_id' => '13',
                'ibge' => '2613206',
            ],
            [
                'name' => 'Sao Joaquim do Monte',
                'estado_id' => '13',
                'ibge' => '2613305',
            ],
            [
                'name' => 'Sao Jose da Coroa Grande',
                'estado_id' => '13',
                'ibge' => '2613404',
            ],
            [
                'name' => 'Sao Jose do Belmonte',
                'estado_id' => '13',
                'ibge' => '2613503',
            ],
            [
                'name' => 'Sao Jose do Egito',
                'estado_id' => '13',
                'ibge' => '2613602',
            ],
            [
                'name' => 'Sao Lourenco da Mata',
                'estado_id' => '13',
                'ibge' => '2613701',
            ],
            [
                'name' => 'Sao Vicente Ferrer',
                'estado_id' => '13',
                'ibge' => '2613800',
            ],
            [
                'name' => 'Serra Talhada',
                'estado_id' => '13',
                'ibge' => '2613909',
            ],
            [
                'name' => 'Serrita',
                'estado_id' => '13',
                'ibge' => '2614006',
            ],
            [
                'name' => 'Sertania',
                'estado_id' => '13',
                'ibge' => '2614105',
            ],
            [
                'name' => 'Sirinhaem',
                'estado_id' => '13',
                'ibge' => '2614204',
            ],
            [
                'name' => 'Moreilandia',
                'estado_id' => '13',
                'ibge' => '2614303',
            ],
            [
                'name' => 'Solidao',
                'estado_id' => '13',
                'ibge' => '2614402',
            ],
            [
                'name' => 'Surubim',
                'estado_id' => '13',
                'ibge' => '2614501',
            ],
            [
                'name' => 'Tabira',
                'estado_id' => '13',
                'ibge' => '2614600',
            ],
            [
                'name' => 'Tacaimbo',
                'estado_id' => '13',
                'ibge' => '2614709',
            ],
            [
                'name' => 'Tacaratu',
                'estado_id' => '13',
                'ibge' => '2614808',
            ],
            [
                'name' => 'Tamandare',
                'estado_id' => '13',
                'ibge' => '2614857',
            ],
            [
                'name' => 'Taquaritinga do Norte',
                'estado_id' => '13',
                'ibge' => '2615003',
            ],
            [
                'name' => 'Terezinha',
                'estado_id' => '13',
                'ibge' => '2615102',
            ],
            [
                'name' => 'Terra Nova',
                'estado_id' => '13',
                'ibge' => '2615201',
            ],
            [
                'name' => 'Timba�ba',
                'estado_id' => '13',
                'ibge' => '2615300',
            ],
            [
                'name' => 'Toritama',
                'estado_id' => '13',
                'ibge' => '2615409',
            ],
            [
                'name' => 'Tracunhaem',
                'estado_id' => '13',
                'ibge' => '2615508',
            ],
            [
                'name' => 'Trindade',
                'estado_id' => '13',
                'ibge' => '2615607',
            ],
            [
                'name' => 'Triunfo',
                'estado_id' => '13',
                'ibge' => '2615706',
            ],
            [
                'name' => 'Tupanatinga',
                'estado_id' => '13',
                'ibge' => '2615805',
            ],
            [
                'name' => 'Tuparetama',
                'estado_id' => '13',
                'ibge' => '2615904',
            ],
            [
                'name' => 'Venturosa',
                'estado_id' => '13',
                'ibge' => '2616001',
            ],
            [
                'name' => 'Verdejante',
                'estado_id' => '13',
                'ibge' => '2616100',
            ],
            [
                'name' => 'Vertente do Lerio',
                'estado_id' => '13',
                'ibge' => '2616183',
            ],
            [
                'name' => 'Vertentes',
                'estado_id' => '13',
                'ibge' => '2616209',
            ],
            [
                'name' => 'Vic�ncia',
                'estado_id' => '13',
                'ibge' => '2616308',
            ],
            [
                'name' => 'Vitoria de Santo Antao',
                'estado_id' => '13',
                'ibge' => '2616407',
            ],
            [
                'name' => 'Xexeu',
                'estado_id' => '13',
                'ibge' => '2616506',
            ],

            /* Alagoas */

            [
                'name' => 'Agua Branca',
                'estado_id' => '14',
                'ibge' => '2700102',
            ],
            [
                'name' => 'Anadia',
                'estado_id' => '14',
                'ibge' => '2700201',
            ],
            [
                'name' => 'Arapiraca',
                'estado_id' => '14',
                'ibge' => '2700300',
            ],
            [
                'name' => 'Atalaia',
                'estado_id' => '14',
                'ibge' => '2700409',
            ],
            [
                'name' => 'Barra de Santo Antonio',
                'estado_id' => '14',
                'ibge' => '2700508',
            ],
            [
                'name' => 'Barra de Sao Miguel',
                'estado_id' => '14',
                'ibge' => '2700607',
            ],
            [
                'name' => 'Batalha',
                'estado_id' => '14',
                'ibge' => '2700706',
            ],
            [
                'name' => 'Belem',
                'estado_id' => '14',
                'ibge' => '2700805',
            ],
            [
                'name' => 'Belo Monte',
                'estado_id' => '14',
                'ibge' => '2700904',
            ],
            [
                'name' => 'Boca da Mata',
                'estado_id' => '14',
                'ibge' => '2701001',
            ],
            [
                'name' => 'Branquinha',
                'estado_id' => '14',
                'ibge' => '2701100',
            ],
            [
                'name' => 'Cacimbinhas',
                'estado_id' => '14',
                'ibge' => '2701209',
            ],
            [
                'name' => 'Cajueiro',
                'estado_id' => '14',
                'ibge' => '2701308',
            ],
            [
                'name' => 'Campestre',
                'estado_id' => '14',
                'ibge' => '2701357',
            ],
            [
                'name' => 'Campo Alegre',
                'estado_id' => '14',
                'ibge' => '2701407',
            ],
            [
                'name' => 'Campo Grande',
                'estado_id' => '14',
                'ibge' => '2701506',
            ],
            [
                'name' => 'Canapi',
                'estado_id' => '14',
                'ibge' => '2701605',
            ],
            [
                'name' => 'Capela',
                'estado_id' => '14',
                'ibge' => '2701704',
            ],
            [
                'name' => 'Carneiros',
                'estado_id' => '14',
                'ibge' => '2701803',
            ],
            [
                'name' => 'Cha Preta',
                'estado_id' => '14',
                'ibge' => '2701902',
            ],
            [
                'name' => 'Coite do Noia',
                'estado_id' => '14',
                'ibge' => '2702009',
            ],
            [
                'name' => 'Colonia Leopoldina',
                'estado_id' => '14',
                'ibge' => '2702108',
            ],
            [
                'name' => 'Coqueiro Seco',
                'estado_id' => '14',
                'ibge' => '2702207',
            ],
            [
                'name' => 'Coruripe',
                'estado_id' => '14',
                'ibge' => '2702306',
            ],
            [
                'name' => 'Craibas',
                'estado_id' => '14',
                'ibge' => '2702355',
            ],
            [
                'name' => 'Delmiro Gouveia',
                'estado_id' => '14',
                'ibge' => '2702405',
            ],
            [
                'name' => 'Dois Riachos',
                'estado_id' => '14',
                'ibge' => '2702504',
            ],
            [
                'name' => 'Estrela de Alagoas',
                'estado_id' => '14',
                'ibge' => '2702553',
            ],
            [
                'name' => 'Feira Grande',
                'estado_id' => '14',
                'ibge' => '2702603',
            ],
            [
                'name' => 'Feliz Deserto',
                'estado_id' => '14',
                'ibge' => '2702702',
            ],
            [
                'name' => 'Flexeiras',
                'estado_id' => '14',
                'ibge' => '2702801',
            ],
            [
                'name' => 'Girau do Ponciano',
                'estado_id' => '14',
                'ibge' => '2702900',
            ],
            [
                'name' => 'Ibateguara',
                'estado_id' => '14',
                'ibge' => '2703007',
            ],
            [
                'name' => 'Igaci',
                'estado_id' => '14',
                'ibge' => '2703106',
            ],
            [
                'name' => 'Igreja Nova',
                'estado_id' => '14',
                'ibge' => '2703205',
            ],
            [
                'name' => 'Inhapi',
                'estado_id' => '14',
                'ibge' => '2703304',
            ],
            [
                'name' => 'Jacare dos Homens',
                'estado_id' => '14',
                'ibge' => '2703403',
            ],
            [
                'name' => 'Jacuipe',
                'estado_id' => '14',
                'ibge' => '2703502',
            ],
            [
                'name' => 'Japaratinga',
                'estado_id' => '14',
                'ibge' => '2703601',
            ],
            [
                'name' => 'Jaramataia',
                'estado_id' => '14',
                'ibge' => '2703700',
            ],
            [
                'name' => 'Jequia da Praia',
                'estado_id' => '14',
                'ibge' => '2703759',
            ],
            [
                'name' => 'Joaquim Gomes',
                'estado_id' => '14',
                'ibge' => '2703809',
            ],
            [
                'name' => 'Jundia',
                'estado_id' => '14',
                'ibge' => '2703908',
            ],
            [
                'name' => 'Junqueiro',
                'estado_id' => '14',
                'ibge' => '2704005',
            ],
            [
                'name' => 'Lagoa da Canoa',
                'estado_id' => '14',
                'ibge' => '2704104',
            ],
            [
                'name' => 'Limoeiro de Anadia',
                'estado_id' => '14',
                'ibge' => '2704203',
            ],
            [
                'name' => 'Maceio',
                'estado_id' => '14',
                'ibge' => '2704302',
            ],
            [
                'name' => 'Major Isidoro',
                'estado_id' => '14',
                'ibge' => '2704401',
            ],
            [
                'name' => 'Maragogi',
                'estado_id' => '14',
                'ibge' => '2704500',
            ],
            [
                'name' => 'Maravilha',
                'estado_id' => '14',
                'ibge' => '2704609',
            ],
            [
                'name' => 'Marechal Deodoro',
                'estado_id' => '14',
                'ibge' => '2704708',
            ],
            [
                'name' => 'Maribondo',
                'estado_id' => '14',
                'ibge' => '2704807',
            ],
            [
                'name' => 'Mar Vermelho',
                'estado_id' => '14',
                'ibge' => '2704906',
            ],
            [
                'name' => 'Mata Grande',
                'estado_id' => '14',
                'ibge' => '2705002',
            ],
            [
                'name' => 'Matriz de Camaragibe',
                'estado_id' => '14',
                'ibge' => '2705101',
            ],
            [
                'name' => 'Messias',
                'estado_id' => '14',
                'ibge' => '2705200',
            ],
            [
                'name' => 'Minador do Negrao',
                'estado_id' => '14',
                'ibge' => '2705309',
            ],
            [
                'name' => 'Monteiropolis',
                'estado_id' => '14',
                'ibge' => '2705408',
            ],
            [
                'name' => 'Murici',
                'estado_id' => '14',
                'ibge' => '2705507',
            ],
            [
                'name' => 'Novo Lino',
                'estado_id' => '14',
                'ibge' => '2705606',
            ],
            [
                'name' => 'Olivenca',
                'estado_id' => '14',
                'ibge' => '2706000',
            ],
            [
                'name' => 'Ouro Branco',
                'estado_id' => '14',
                'ibge' => '2706109',
            ],
            [
                'name' => 'Palestina',
                'estado_id' => '14',
                'ibge' => '2706208',
            ],
            [
                'name' => 'Palmeira dos �ndios',
                'estado_id' => '14',
                'ibge' => '2706307',
            ],
            [
                'name' => 'Pao de Ac�car',
                'estado_id' => '14',
                'ibge' => '2706406',
            ],
            [
                'name' => 'Pariconha',
                'estado_id' => '14',
                'ibge' => '2706422',
            ],
            [
                'name' => 'Paripueira',
                'estado_id' => '14',
                'ibge' => '2706448',
            ],
            [
                'name' => 'Passo de Camaragibe',
                'estado_id' => '14',
                'ibge' => '2706505',
            ],
            [
                'name' => 'Paulo Jacinto',
                'estado_id' => '14',
                'ibge' => '2706604',
            ],
            [
                'name' => 'Penedo',
                'estado_id' => '14',
                'ibge' => '2706703',
            ],
            [
                'name' => 'Piacabucu',
                'estado_id' => '14',
                'ibge' => '2706802',
            ],
            [
                'name' => 'Pilar',
                'estado_id' => '14',
                'ibge' => '2706901',
            ],
            [
                'name' => 'Pindoba',
                'estado_id' => '14',
                'ibge' => '2707008',
            ],
            [
                'name' => 'Piranhas',
                'estado_id' => '14',
                'ibge' => '2707107',
            ],
            [
                'name' => 'Poco das Trincheiras',
                'estado_id' => '14',
                'ibge' => '2707206',
            ],
            [
                'name' => 'Porto Calvo',
                'estado_id' => '14',
                'ibge' => '2707305',
            ],
            [
                'name' => 'Porto de Pedras',
                'estado_id' => '14',
                'ibge' => '2707404',
            ],
            [
                'name' => 'Porto Real do Colegio',
                'estado_id' => '14',
                'ibge' => '2707503',
            ],
            [
                'name' => 'Quebrangulo',
                'estado_id' => '14',
                'ibge' => '2707602',
            ],
            [
                'name' => 'Rio Largo',
                'estado_id' => '14',
                'ibge' => '2707701',
            ],
            [
                'name' => 'Roteiro',
                'estado_id' => '14',
                'ibge' => '2707800',
            ],
            [
                'name' => 'Santa Luzia do Norte',
                'estado_id' => '14',
                'ibge' => '2707909',
            ],
            [
                'name' => 'Santana do Ipanema',
                'estado_id' => '14',
                'ibge' => '2708006',
            ],
            [
                'name' => 'Santana do Munda�',
                'estado_id' => '14',
                'ibge' => '2708105',
            ],
            [
                'name' => 'Sao Bras',
                'estado_id' => '14',
                'ibge' => '2708204',
            ],
            [
                'name' => 'Sao Jose da Laje',
                'estado_id' => '14',
                'ibge' => '2708303',
            ],
            [
                'name' => 'Sao Jose da Tapera',
                'estado_id' => '14',
                'ibge' => '2708402',
            ],
            [
                'name' => 'Sao Luis do Quitunde',
                'estado_id' => '14',
                'ibge' => '2708501',
            ],
            [
                'name' => 'Sao Miguel dos Campos',
                'estado_id' => '14',
                'ibge' => '2708600',
            ],
            [
                'name' => 'Sao Miguel dos Milagres',
                'estado_id' => '14',
                'ibge' => '2708709',
            ],
            [
                'name' => 'Sao Sebastiao',
                'estado_id' => '14',
                'ibge' => '2708808',
            ],
            [
                'name' => 'Satuba',
                'estado_id' => '14',
                'ibge' => '2708907',
            ],
            [
                'name' => 'Senador Rui Palmeira',
                'estado_id' => '14',
                'ibge' => '2708956',
            ],
            [
                'name' => 'Taquarana',
                'estado_id' => '14',
                'ibge' => '2709103',
            ],
            [
                'name' => 'Teotonio Vilela',
                'estado_id' => '14',
                'ibge' => '2709152',
            ],
            [
                'name' => 'Traipu',
                'estado_id' => '14',
                'ibge' => '2709202',
            ],
            [
                'name' => 'Uniao dos Palmares',
                'estado_id' => '14',
                'ibge' => '2709301',
            ],
            [
                'name' => 'Vicosa',
                'estado_id' => '14',
                'ibge' => '2709400',
            ],
            [
                'name' => 'Tanque D Arca ',
                'estado_id' => '14',
                'ibge' => '2709004',
            ],
            [
                'name' => 'Olho D agua Grande ',
                'estado_id' => '14',
                'ibge' => '2705903',
            ],
            [
                'name' => 'Olho D agua do Casado ',
                'estado_id' => '14',
                'ibge' => '2705804',
            ],
            [
                'name' => 'Olho D agua das Flores ',
                'estado_id' => '14',
                'ibge' => '2705705',
            ],

            /* Sergipe */

            [
                'name' => 'Amparo de Sao Francisco',
                'estado_id' => '15',
                'ibge' => '2800100',
            ],
            [
                'name' => 'Aquidaba',
                'estado_id' => '15',
                'ibge' => '2800209',
            ],
            [
                'name' => 'Aracaju',
                'estado_id' => '15',
                'ibge' => '2800308',
            ],
            [
                'name' => 'Araua',
                'estado_id' => '15',
                'ibge' => '2800407',
            ],
            [
                'name' => 'Areia Branca',
                'estado_id' => '15',
                'ibge' => '2800506',
            ],
            [
                'name' => 'Barra dos Coqueiros',
                'estado_id' => '15',
                'ibge' => '2800605',
            ],
            [
                'name' => 'Boquim',
                'estado_id' => '15',
                'ibge' => '2800670',
            ],
            [
                'name' => 'Brejo Grande',
                'estado_id' => '15',
                'ibge' => '2800704',
            ],
            [
                'name' => 'Campo do Brito',
                'estado_id' => '15',
                'ibge' => '2801009',
            ],
            [
                'name' => 'Canhoba',
                'estado_id' => '15',
                'ibge' => '2801108',
            ],
            [
                'name' => 'Caninde de Sao Francisco',
                'estado_id' => '15',
                'ibge' => '2801207',
            ],
            [
                'name' => 'Capela',
                'estado_id' => '15',
                'ibge' => '2801306',
            ],
            [
                'name' => 'Carira',
                'estado_id' => '15',
                'ibge' => '2801405',
            ],
            [
                'name' => 'Carmopolis',
                'estado_id' => '15',
                'ibge' => '2801504',
            ],
            [
                'name' => 'Cedro de Sao Joao',
                'estado_id' => '15',
                'ibge' => '2801603',
            ],
            [
                'name' => 'Cristinapolis',
                'estado_id' => '15',
                'ibge' => '2801702',
            ],
            [
                'name' => 'Cumbe',
                'estado_id' => '15',
                'ibge' => '2801900',
            ],
            [
                'name' => 'Divina Pastora',
                'estado_id' => '15',
                'ibge' => '2802007',
            ],
            [
                'name' => 'Estancia',
                'estado_id' => '15',
                'ibge' => '2802106',
            ],
            [
                'name' => 'Feira Nova',
                'estado_id' => '15',
                'ibge' => '2802205',
            ],
            [
                'name' => 'Frei Paulo',
                'estado_id' => '15',
                'ibge' => '2802304',
            ],
            [
                'name' => 'Gararu',
                'estado_id' => '15',
                'ibge' => '2802403',
            ],
            [
                'name' => 'General Maynard',
                'estado_id' => '15',
                'ibge' => '2802502',
            ],
            [
                'name' => 'Gracho Cardoso',
                'estado_id' => '15',
                'ibge' => '2802601',
            ],
            [
                'name' => 'Ilha das Flores',
                'estado_id' => '15',
                'ibge' => '2802700',
            ],
            [
                'name' => 'Indiaroba',
                'estado_id' => '15',
                'ibge' => '2802809',
            ],
            [
                'name' => 'Itabaiana',
                'estado_id' => '15',
                'ibge' => '2802908',
            ],
            [
                'name' => 'Itabaianinha',
                'estado_id' => '15',
                'ibge' => '2803005',
            ],
            [
                'name' => 'Itabi',
                'estado_id' => '15',
                'ibge' => '2803104',
            ],
            [
                'name' => 'Japaratuba',
                'estado_id' => '15',
                'ibge' => '2803302',
            ],
            [
                'name' => 'Japoata',
                'estado_id' => '15',
                'ibge' => '2803401',
            ],
            [
                'name' => 'Lagarto',
                'estado_id' => '15',
                'ibge' => '2803500',
            ],
            [
                'name' => 'Laranjeiras',
                'estado_id' => '15',
                'ibge' => '2803609',
            ],
            [
                'name' => 'Macambira',
                'estado_id' => '15',
                'ibge' => '2803708',
            ],
            [
                'name' => 'Malhada dos Bois',
                'estado_id' => '15',
                'ibge' => '2803807',
            ],
            [
                'name' => 'Malhador',
                'estado_id' => '15',
                'ibge' => '2803906',
            ],
            [
                'name' => 'Maruim',
                'estado_id' => '15',
                'ibge' => '2804003',
            ],
            [
                'name' => 'Moita Bonita',
                'estado_id' => '15',
                'ibge' => '2804102',
            ],
            [
                'name' => 'Monte Alegre de Sergipe',
                'estado_id' => '15',
                'ibge' => '2804201',
            ],
            [
                'name' => 'Muribeca',
                'estado_id' => '15',
                'ibge' => '2804300',
            ],
            [
                'name' => 'Neopolis',
                'estado_id' => '15',
                'ibge' => '2804409',
            ],
            [
                'name' => 'Nossa Senhora Aparecida',
                'estado_id' => '15',
                'ibge' => '2804458',
            ],
            [
                'name' => 'Nossa Senhora da Gloria',
                'estado_id' => '15',
                'ibge' => '2804508',
            ],
            [
                'name' => 'Nossa Senhora das Dores',
                'estado_id' => '15',
                'ibge' => '2804607',
            ],
            [
                'name' => 'Nossa Senhora de Lourdes',
                'estado_id' => '15',
                'ibge' => '2804706',
            ],
            [
                'name' => 'Nossa Senhora do Socorro',
                'estado_id' => '15',
                'ibge' => '2804805',
            ],
            [
                'name' => 'Pacatuba',
                'estado_id' => '15',
                'ibge' => '2804904',
            ],
            [
                'name' => 'Pedra Mole',
                'estado_id' => '15',
                'ibge' => '2805000',
            ],
            [
                'name' => 'Pedrinhas',
                'estado_id' => '15',
                'ibge' => '2805109',
            ],
            [
                'name' => 'Pinhao',
                'estado_id' => '15',
                'ibge' => '2805208',
            ],
            [
                'name' => 'Pirambu',
                'estado_id' => '15',
                'ibge' => '2805307',
            ],
            [
                'name' => 'Poco Redondo',
                'estado_id' => '15',
                'ibge' => '2805406',
            ],
            [
                'name' => 'Poco Verde',
                'estado_id' => '15',
                'ibge' => '2805505',
            ],
            [
                'name' => 'Porto da Folha',
                'estado_id' => '15',
                'ibge' => '2805604',
            ],
            [
                'name' => 'Propria',
                'estado_id' => '15',
                'ibge' => '2805703',
            ],
            [
                'name' => 'Riachao do Dantas',
                'estado_id' => '15',
                'ibge' => '2805802',
            ],
            [
                'name' => 'Riachuelo',
                'estado_id' => '15',
                'ibge' => '2805901',
            ],
            [
                'name' => 'Ribeiropolis',
                'estado_id' => '15',
                'ibge' => '2806008',
            ],
            [
                'name' => 'Rosario do Catete',
                'estado_id' => '15',
                'ibge' => '2806107',
            ],
            [
                'name' => 'Salgado',
                'estado_id' => '15',
                'ibge' => '2806206',
            ],
            [
                'name' => 'Santa Luzia do Itanhy',
                'estado_id' => '15',
                'ibge' => '2806305',
            ],
            [
                'name' => 'Santana do Sao Francisco',
                'estado_id' => '15',
                'ibge' => '2806404',
            ],
            [
                'name' => 'Santa Rosa de Lima',
                'estado_id' => '15',
                'ibge' => '2806503',
            ],
            [
                'name' => 'Santo Amaro das Brotas',
                'estado_id' => '15',
                'ibge' => '2806602',
            ],
            [
                'name' => 'Sao Cristovao',
                'estado_id' => '15',
                'ibge' => '2806701',
            ],
            [
                'name' => 'Sao Domingos',
                'estado_id' => '15',
                'ibge' => '2806800',
            ],
            [
                'name' => 'Sao Francisco',
                'estado_id' => '15',
                'ibge' => '2806909',
            ],
            [
                'name' => 'Sao Miguel do Aleixo',
                'estado_id' => '15',
                'ibge' => '2807006',
            ],
            [
                'name' => 'Simao Dias',
                'estado_id' => '15',
                'ibge' => '2807105',
            ],
            [
                'name' => 'Siriri',
                'estado_id' => '15',
                'ibge' => '2807204',
            ],
            [
                'name' => 'Telha',
                'estado_id' => '15',
                'ibge' => '2807303',
            ],
            [
                'name' => 'Tobias Barreto',
                'estado_id' => '15',
                'ibge' => '2807402',
            ],
            [
                'name' => 'Tomar do Geru',
                'estado_id' => '15',
                'ibge' => '2807501',
            ],
            [
                'name' => 'Umba�ba',
                'estado_id' => '15',
                'ibge' => '2807600',
            ],
            [
                'name' => 'Itaporanga D Ajuda ',
                'estado_id' => '15',
                'ibge' => '2803203',
            ],

            /* Bahia */

            [
                'name' => 'Abaira',
                'estado_id' => '16',
                'ibge' => '2900108',
            ],
            [
                'name' => 'Abare',
                'estado_id' => '16',
                'ibge' => '2900207',
            ],
            [
                'name' => 'Acajutiba',
                'estado_id' => '16',
                'ibge' => '2900306',
            ],
            [
                'name' => 'Adustina',
                'estado_id' => '16',
                'ibge' => '2900355',
            ],
            [
                'name' => 'Agua Fria',
                'estado_id' => '16',
                'ibge' => '2900405',
            ],
            [
                'name' => '�rico Cardoso',
                'estado_id' => '16',
                'ibge' => '2900504',
            ],
            [
                'name' => 'Aiquara',
                'estado_id' => '16',
                'ibge' => '2900603',
            ],
            [
                'name' => 'Alagoinhas',
                'estado_id' => '16',
                'ibge' => '2900702',
            ],
            [
                'name' => 'Alcobaca',
                'estado_id' => '16',
                'ibge' => '2900801',
            ],
            [
                'name' => 'Almadina',
                'estado_id' => '16',
                'ibge' => '2900900',
            ],
            [
                'name' => 'Amargosa',
                'estado_id' => '16',
                'ibge' => '2901007',
            ],
            [
                'name' => 'Amelia Rodrigues',
                'estado_id' => '16',
                'ibge' => '2901106',
            ],
            [
                'name' => 'America Dourada',
                'estado_id' => '16',
                'ibge' => '2901155',
            ],
            [
                'name' => 'Anage',
                'estado_id' => '16',
                'ibge' => '2901205',
            ],
            [
                'name' => 'Andarai',
                'estado_id' => '16',
                'ibge' => '2901304',
            ],
            [
                'name' => 'Andorinha',
                'estado_id' => '16',
                'ibge' => '2901353',
            ],
            [
                'name' => 'Angical',
                'estado_id' => '16',
                'ibge' => '2901403',
            ],
            [
                'name' => 'Anguera',
                'estado_id' => '16',
                'ibge' => '2901502',
            ],
            [
                'name' => 'Antas',
                'estado_id' => '16',
                'ibge' => '2901601',
            ],
            [
                'name' => 'Antonio Cardoso',
                'estado_id' => '16',
                'ibge' => '2901700',
            ],
            [
                'name' => 'Antonio Goncalves',
                'estado_id' => '16',
                'ibge' => '2901809',
            ],
            [
                'name' => 'Apora',
                'estado_id' => '16',
                'ibge' => '2901908',
            ],
            [
                'name' => 'Apuarema',
                'estado_id' => '16',
                'ibge' => '2901957',
            ],
            [
                'name' => 'Aracatu',
                'estado_id' => '16',
                'ibge' => '2902005',
            ],
            [
                'name' => 'Aracas',
                'estado_id' => '16',
                'ibge' => '2902054',
            ],
            [
                'name' => 'Araci',
                'estado_id' => '16',
                'ibge' => '2902104',
            ],
            [
                'name' => 'Aramari',
                'estado_id' => '16',
                'ibge' => '2902203',
            ],
            [
                'name' => 'Arataca',
                'estado_id' => '16',
                'ibge' => '2902252',
            ],
            [
                'name' => 'Aratuipe',
                'estado_id' => '16',
                'ibge' => '2902302',
            ],
            [
                'name' => 'Aurelino Leal',
                'estado_id' => '16',
                'ibge' => '2902401',
            ],
            [
                'name' => 'Baianopolis',
                'estado_id' => '16',
                'ibge' => '2902500',
            ],
            [
                'name' => 'Baixa Grande',
                'estado_id' => '16',
                'ibge' => '2902609',
            ],
            [
                'name' => 'Banza�',
                'estado_id' => '16',
                'ibge' => '2902658',
            ],
            [
                'name' => 'Barra',
                'estado_id' => '16',
                'ibge' => '2902708',
            ],
            [
                'name' => 'Barra da Estiva',
                'estado_id' => '16',
                'ibge' => '2902807',
            ],
            [
                'name' => 'Barra do Choca',
                'estado_id' => '16',
                'ibge' => '2902906',
            ],
            [
                'name' => 'Barra do Mendes',
                'estado_id' => '16',
                'ibge' => '2903003',
            ],
            [
                'name' => 'Barra do Rocha',
                'estado_id' => '16',
                'ibge' => '2903102',
            ],
            [
                'name' => 'Barreiras',
                'estado_id' => '16',
                'ibge' => '2903201',
            ],
            [
                'name' => 'Barro Alto',
                'estado_id' => '16',
                'ibge' => '2903235',
            ],
            [
                'name' => 'Barrocas',
                'estado_id' => '16',
                'ibge' => '2903276',
            ],
            [
                'name' => 'Barro Preto',
                'estado_id' => '16',
                'ibge' => '2903300',
            ],
            [
                'name' => 'Belmonte',
                'estado_id' => '16',
                'ibge' => '2903409',
            ],
            [
                'name' => 'Belo Campo',
                'estado_id' => '16',
                'ibge' => '2903508',
            ],
            [
                'name' => 'Biritinga',
                'estado_id' => '16',
                'ibge' => '2903607',
            ],
            [
                'name' => 'Boa Nova',
                'estado_id' => '16',
                'ibge' => '2903706',
            ],
            [
                'name' => 'Boa Vista do Tupim',
                'estado_id' => '16',
                'ibge' => '2903805',
            ],
            [
                'name' => 'Bom Jesus da Lapa',
                'estado_id' => '16',
                'ibge' => '2903904',
            ],
            [
                'name' => 'Bom Jesus da Serra',
                'estado_id' => '16',
                'ibge' => '2903953',
            ],
            [
                'name' => 'Boninal',
                'estado_id' => '16',
                'ibge' => '2904001',
            ],
            [
                'name' => 'Bonito',
                'estado_id' => '16',
                'ibge' => '2904050',
            ],
            [
                'name' => 'Boquira',
                'estado_id' => '16',
                'ibge' => '2904100',
            ],
            [
                'name' => 'Botupora',
                'estado_id' => '16',
                'ibge' => '2904209',
            ],
            [
                'name' => 'Brej�es',
                'estado_id' => '16',
                'ibge' => '2904308',
            ],
            [
                'name' => 'Brejolandia',
                'estado_id' => '16',
                'ibge' => '2904407',
            ],
            [
                'name' => 'Brotas de Maca�bas',
                'estado_id' => '16',
                'ibge' => '2904506',
            ],
            [
                'name' => 'Brumado',
                'estado_id' => '16',
                'ibge' => '2904605',
            ],
            [
                'name' => 'Buerarema',
                'estado_id' => '16',
                'ibge' => '2904704',
            ],
            [
                'name' => 'Buritirama',
                'estado_id' => '16',
                'ibge' => '2904753',
            ],
            [
                'name' => 'Caatiba',
                'estado_id' => '16',
                'ibge' => '2904803',
            ],
            [
                'name' => 'Cabaceiras do Paraguacu',
                'estado_id' => '16',
                'ibge' => '2904852',
            ],
            [
                'name' => 'Cachoeira',
                'estado_id' => '16',
                'ibge' => '2904902',
            ],
            [
                'name' => 'Cacule',
                'estado_id' => '16',
                'ibge' => '2905008',
            ],
            [
                'name' => 'Caem',
                'estado_id' => '16',
                'ibge' => '2905107',
            ],
            [
                'name' => 'Caetanos',
                'estado_id' => '16',
                'ibge' => '2905156',
            ],
            [
                'name' => 'Caetite',
                'estado_id' => '16',
                'ibge' => '2905206',
            ],
            [
                'name' => 'Cafarnaum',
                'estado_id' => '16',
                'ibge' => '2905305',
            ],
            [
                'name' => 'Cairu',
                'estado_id' => '16',
                'ibge' => '2905404',
            ],
            [
                'name' => 'Caldeirao Grande',
                'estado_id' => '16',
                'ibge' => '2905503',
            ],
            [
                'name' => 'Camacan',
                'estado_id' => '16',
                'ibge' => '2905602',
            ],
            [
                'name' => 'Camacari',
                'estado_id' => '16',
                'ibge' => '2905701',
            ],
            [
                'name' => 'Camamu',
                'estado_id' => '16',
                'ibge' => '2905800',
            ],
            [
                'name' => 'Campo Alegre de Lourdes',
                'estado_id' => '16',
                'ibge' => '2905909',
            ],
            [
                'name' => 'Campo Formoso',
                'estado_id' => '16',
                'ibge' => '2906006',
            ],
            [
                'name' => 'Canapolis',
                'estado_id' => '16',
                'ibge' => '2906105',
            ],
            [
                'name' => 'Canarana',
                'estado_id' => '16',
                'ibge' => '2906204',
            ],
            [
                'name' => 'Canavieiras',
                'estado_id' => '16',
                'ibge' => '2906303',
            ],
            [
                'name' => 'Candeal',
                'estado_id' => '16',
                'ibge' => '2906402',
            ],
            [
                'name' => 'Candeias',
                'estado_id' => '16',
                'ibge' => '2906501',
            ],
            [
                'name' => 'Candiba',
                'estado_id' => '16',
                'ibge' => '2906600',
            ],
            [
                'name' => 'Candido Sales',
                'estado_id' => '16',
                'ibge' => '2906709',
            ],
            [
                'name' => 'Cansancao',
                'estado_id' => '16',
                'ibge' => '2906808',
            ],
            [
                'name' => 'Canudos',
                'estado_id' => '16',
                'ibge' => '2906824',
            ],
            [
                'name' => 'Capela do Alto Alegre',
                'estado_id' => '16',
                'ibge' => '2906857',
            ],
            [
                'name' => 'Capim Grosso',
                'estado_id' => '16',
                'ibge' => '2906873',
            ],
            [
                'name' => 'Caraibas',
                'estado_id' => '16',
                'ibge' => '2906899',
            ],
            [
                'name' => 'Caravelas',
                'estado_id' => '16',
                'ibge' => '2906907',
            ],
            [
                'name' => 'Cardeal da Silva',
                'estado_id' => '16',
                'ibge' => '2907004',
            ],
            [
                'name' => 'Carinhanha',
                'estado_id' => '16',
                'ibge' => '2907103',
            ],
            [
                'name' => 'Casa Nova',
                'estado_id' => '16',
                'ibge' => '2907202',
            ],
            [
                'name' => 'Castro Alves',
                'estado_id' => '16',
                'ibge' => '2907301',
            ],
            [
                'name' => 'Catolandia',
                'estado_id' => '16',
                'ibge' => '2907400',
            ],
            [
                'name' => 'Catu',
                'estado_id' => '16',
                'ibge' => '2907509',
            ],
            [
                'name' => 'Caturama',
                'estado_id' => '16',
                'ibge' => '2907558',
            ],
            [
                'name' => 'Central',
                'estado_id' => '16',
                'ibge' => '2907608',
            ],
            [
                'name' => 'Chorrocho',
                'estado_id' => '16',
                'ibge' => '2907707',
            ],
            [
                'name' => 'Cicero Dantas',
                'estado_id' => '16',
                'ibge' => '2907806',
            ],
            [
                'name' => 'Cipo',
                'estado_id' => '16',
                'ibge' => '2907905',
            ],
            [
                'name' => 'Coaraci',
                'estado_id' => '16',
                'ibge' => '2908002',
            ],
            [
                'name' => 'Cocos',
                'estado_id' => '16',
                'ibge' => '2908101',
            ],
            [
                'name' => 'Conceicao da Feira',
                'estado_id' => '16',
                'ibge' => '2908200',
            ],
            [
                'name' => 'Conceicao do Almeida',
                'estado_id' => '16',
                'ibge' => '2908309',
            ],
            [
                'name' => 'Conceicao do Coite',
                'estado_id' => '16',
                'ibge' => '2908408',
            ],
            [
                'name' => 'Conceicao do Jacuipe',
                'estado_id' => '16',
                'ibge' => '2908507',
            ],
            [
                'name' => 'Conde',
                'estado_id' => '16',
                'ibge' => '2908606',
            ],
            [
                'name' => 'Conde�ba',
                'estado_id' => '16',
                'ibge' => '2908705',
            ],
            [
                'name' => 'Contendas do Sincora',
                'estado_id' => '16',
                'ibge' => '2908804',
            ],
            [
                'name' => 'Coracao de Maria',
                'estado_id' => '16',
                'ibge' => '2908903',
            ],
            [
                'name' => 'Cordeiros',
                'estado_id' => '16',
                'ibge' => '2909000',
            ],
            [
                'name' => 'Coribe',
                'estado_id' => '16',
                'ibge' => '2909109',
            ],
            [
                'name' => 'Coronel Joao Sa',
                'estado_id' => '16',
                'ibge' => '2909208',
            ],
            [
                'name' => 'Correntina',
                'estado_id' => '16',
                'ibge' => '2909307',
            ],
            [
                'name' => 'Cotegipe',
                'estado_id' => '16',
                'ibge' => '2909406',
            ],
            [
                'name' => 'Cravolandia',
                'estado_id' => '16',
                'ibge' => '2909505',
            ],
            [
                'name' => 'Crisopolis',
                'estado_id' => '16',
                'ibge' => '2909604',
            ],
            [
                'name' => 'Cristopolis',
                'estado_id' => '16',
                'ibge' => '2909703',
            ],
            [
                'name' => 'Cruz das Almas',
                'estado_id' => '16',
                'ibge' => '2909802',
            ],
            [
                'name' => 'Curaca',
                'estado_id' => '16',
                'ibge' => '2909901',
            ],
            [
                'name' => 'Dario Meira',
                'estado_id' => '16',
                'ibge' => '2910008',
            ],
            [
                'name' => 'Dom Basilio',
                'estado_id' => '16',
                'ibge' => '2910107',
            ],
            [
                'name' => 'Dom Macedo Costa',
                'estado_id' => '16',
                'ibge' => '2910206',
            ],
            [
                'name' => 'Elisio Medrado',
                'estado_id' => '16',
                'ibge' => '2910305',
            ],
            [
                'name' => 'Encruzilhada',
                'estado_id' => '16',
                'ibge' => '2910404',
            ],
            [
                'name' => 'Entre Rios',
                'estado_id' => '16',
                'ibge' => '2910503',
            ],
            [
                'name' => 'Esplanada',
                'estado_id' => '16',
                'ibge' => '2910602',
            ],
            [
                'name' => 'Euclides da Cunha',
                'estado_id' => '16',
                'ibge' => '2910701',
            ],
            [
                'name' => 'Eunapolis',
                'estado_id' => '16',
                'ibge' => '2910727',
            ],
            [
                'name' => 'Fatima',
                'estado_id' => '16',
                'ibge' => '2910750',
            ],
            [
                'name' => 'Feira da Mata',
                'estado_id' => '16',
                'ibge' => '2910776',
            ],
            [
                'name' => 'Feira de Santana',
                'estado_id' => '16',
                'ibge' => '2910800',
            ],
            [
                'name' => 'Filadelfia',
                'estado_id' => '16',
                'ibge' => '2910859',
            ],
            [
                'name' => 'Firmino Alves',
                'estado_id' => '16',
                'ibge' => '2910909',
            ],
            [
                'name' => 'Floresta Azul',
                'estado_id' => '16',
                'ibge' => '2911006',
            ],
            [
                'name' => 'Formosa do Rio Preto',
                'estado_id' => '16',
                'ibge' => '2911105',
            ],
            [
                'name' => 'Gandu',
                'estado_id' => '16',
                'ibge' => '2911204',
            ],
            [
                'name' => 'Gaviao',
                'estado_id' => '16',
                'ibge' => '2911253',
            ],
            [
                'name' => 'Gentio do Ouro',
                'estado_id' => '16',
                'ibge' => '2911303',
            ],
            [
                'name' => 'Gloria',
                'estado_id' => '16',
                'ibge' => '2911402',
            ],
            [
                'name' => 'Gongogi',
                'estado_id' => '16',
                'ibge' => '2911501',
            ],
            [
                'name' => 'Governador Mangabeira',
                'estado_id' => '16',
                'ibge' => '2911600',
            ],
            [
                'name' => 'Guajeru',
                'estado_id' => '16',
                'ibge' => '2911659',
            ],
            [
                'name' => 'Guanambi',
                'estado_id' => '16',
                'ibge' => '2911709',
            ],
            [
                'name' => 'Guaratinga',
                'estado_id' => '16',
                'ibge' => '2911808',
            ],
            [
                'name' => 'Heliopolis',
                'estado_id' => '16',
                'ibge' => '2911857',
            ],
            [
                'name' => 'Iacu',
                'estado_id' => '16',
                'ibge' => '2911907',
            ],
            [
                'name' => 'Ibiassuc�',
                'estado_id' => '16',
                'ibge' => '2912004',
            ],
            [
                'name' => 'Ibicarai',
                'estado_id' => '16',
                'ibge' => '2912103',
            ],
            [
                'name' => 'Ibicoara',
                'estado_id' => '16',
                'ibge' => '2912202',
            ],
            [
                'name' => 'Ibicui',
                'estado_id' => '16',
                'ibge' => '2912301',
            ],
            [
                'name' => 'Ibipeba',
                'estado_id' => '16',
                'ibge' => '2912400',
            ],
            [
                'name' => 'Ibipitanga',
                'estado_id' => '16',
                'ibge' => '2912509',
            ],
            [
                'name' => 'Ibiquera',
                'estado_id' => '16',
                'ibge' => '2912608',
            ],
            [
                'name' => 'Ibirapitanga',
                'estado_id' => '16',
                'ibge' => '2912707',
            ],
            [
                'name' => 'Ibirapua',
                'estado_id' => '16',
                'ibge' => '2912806',
            ],
            [
                'name' => 'Ibirataia',
                'estado_id' => '16',
                'ibge' => '2912905',
            ],
            [
                'name' => 'Ibitiara',
                'estado_id' => '16',
                'ibge' => '2913002',
            ],
            [
                'name' => 'Ibitita',
                'estado_id' => '16',
                'ibge' => '2913101',
            ],
            [
                'name' => 'Ibotirama',
                'estado_id' => '16',
                'ibge' => '2913200',
            ],
            [
                'name' => 'Ichu',
                'estado_id' => '16',
                'ibge' => '2913309',
            ],
            [
                'name' => 'Igapora',
                'estado_id' => '16',
                'ibge' => '2913408',
            ],
            [
                'name' => 'Igrapi�na',
                'estado_id' => '16',
                'ibge' => '2913457',
            ],
            [
                'name' => 'Iguai',
                'estado_id' => '16',
                'ibge' => '2913507',
            ],
            [
                'name' => 'Ilheus',
                'estado_id' => '16',
                'ibge' => '2913606',
            ],
            [
                'name' => 'Inhambupe',
                'estado_id' => '16',
                'ibge' => '2913705',
            ],
            [
                'name' => 'Ipecaeta',
                'estado_id' => '16',
                'ibge' => '2913804',
            ],
            [
                'name' => 'Ipia�',
                'estado_id' => '16',
                'ibge' => '2913903',
            ],
            [
                'name' => 'Ipira',
                'estado_id' => '16',
                'ibge' => '2914000',
            ],
            [
                'name' => 'Ipupiara',
                'estado_id' => '16',
                'ibge' => '2914109',
            ],
            [
                'name' => 'Irajuba',
                'estado_id' => '16',
                'ibge' => '2914208',
            ],
            [
                'name' => 'Iramaia',
                'estado_id' => '16',
                'ibge' => '2914307',
            ],
            [
                'name' => 'Iraquara',
                'estado_id' => '16',
                'ibge' => '2914406',
            ],
            [
                'name' => 'Irara',
                'estado_id' => '16',
                'ibge' => '2914505',
            ],
            [
                'name' => 'Irec�',
                'estado_id' => '16',
                'ibge' => '2914604',
            ],
            [
                'name' => 'Itabela',
                'estado_id' => '16',
                'ibge' => '2914653',
            ],
            [
                'name' => 'Itaberaba',
                'estado_id' => '16',
                'ibge' => '2914703',
            ],
            [
                'name' => 'Itabuna',
                'estado_id' => '16',
                'ibge' => '2914802',
            ],
            [
                'name' => 'Itacare',
                'estado_id' => '16',
                'ibge' => '2914901',
            ],
            [
                'name' => 'Itaete',
                'estado_id' => '16',
                'ibge' => '2915007',
            ],
            [
                'name' => 'Itagi',
                'estado_id' => '16',
                'ibge' => '2915106',
            ],
            [
                'name' => 'Itagiba',
                'estado_id' => '16',
                'ibge' => '2915205',
            ],
            [
                'name' => 'Itagimirim',
                'estado_id' => '16',
                'ibge' => '2915304',
            ],
            [
                'name' => 'Itaguacu da Bahia',
                'estado_id' => '16',
                'ibge' => '2915353',
            ],
            [
                'name' => 'Itaju do Colonia',
                'estado_id' => '16',
                'ibge' => '2915403',
            ],
            [
                'name' => 'Itajuipe',
                'estado_id' => '16',
                'ibge' => '2915502',
            ],
            [
                'name' => 'Itamaraju',
                'estado_id' => '16',
                'ibge' => '2915601',
            ],
            [
                'name' => 'Itamari',
                'estado_id' => '16',
                'ibge' => '2915700',
            ],
            [
                'name' => 'Itambe',
                'estado_id' => '16',
                'ibge' => '2915809',
            ],
            [
                'name' => 'Itanagra',
                'estado_id' => '16',
                'ibge' => '2915908',
            ],
            [
                'name' => 'Itanhem',
                'estado_id' => '16',
                'ibge' => '2916005',
            ],
            [
                'name' => 'Itaparica',
                'estado_id' => '16',
                'ibge' => '2916104',
            ],
            [
                'name' => 'Itape',
                'estado_id' => '16',
                'ibge' => '2916203',
            ],
            [
                'name' => 'Itapebi',
                'estado_id' => '16',
                'ibge' => '2916302',
            ],
            [
                'name' => 'Itapetinga',
                'estado_id' => '16',
                'ibge' => '2916401',
            ],
            [
                'name' => 'Itapicuru',
                'estado_id' => '16',
                'ibge' => '2916500',
            ],
            [
                'name' => 'Itapitanga',
                'estado_id' => '16',
                'ibge' => '2916609',
            ],
            [
                'name' => 'Itaquara',
                'estado_id' => '16',
                'ibge' => '2916708',
            ],
            [
                'name' => 'Itarantim',
                'estado_id' => '16',
                'ibge' => '2916807',
            ],
            [
                'name' => 'Itatim',
                'estado_id' => '16',
                'ibge' => '2916856',
            ],
            [
                'name' => 'Itirucu',
                'estado_id' => '16',
                'ibge' => '2916906',
            ],
            [
                'name' => 'Iti�ba',
                'estado_id' => '16',
                'ibge' => '2917003',
            ],
            [
                'name' => 'Itororo',
                'estado_id' => '16',
                'ibge' => '2917102',
            ],
            [
                'name' => 'Ituacu',
                'estado_id' => '16',
                'ibge' => '2917201',
            ],
            [
                'name' => 'Itubera',
                'estado_id' => '16',
                'ibge' => '2917300',
            ],
            [
                'name' => 'Iui�',
                'estado_id' => '16',
                'ibge' => '2917334',
            ],
            [
                'name' => 'Jaborandi',
                'estado_id' => '16',
                'ibge' => '2917359',
            ],
            [
                'name' => 'Jacaraci',
                'estado_id' => '16',
                'ibge' => '2917409',
            ],
            [
                'name' => 'Jacobina',
                'estado_id' => '16',
                'ibge' => '2917508',
            ],
            [
                'name' => 'Jaguaquara',
                'estado_id' => '16',
                'ibge' => '2917607',
            ],
            [
                'name' => 'Jaguarari',
                'estado_id' => '16',
                'ibge' => '2917706',
            ],
            [
                'name' => 'Jaguaripe',
                'estado_id' => '16',
                'ibge' => '2917805',
            ],
            [
                'name' => 'Jandaira',
                'estado_id' => '16',
                'ibge' => '2917904',
            ],
            [
                'name' => 'Jequie',
                'estado_id' => '16',
                'ibge' => '2918001',
            ],
            [
                'name' => 'Jeremoabo',
                'estado_id' => '16',
                'ibge' => '2918100',
            ],
            [
                'name' => 'Jiquirica',
                'estado_id' => '16',
                'ibge' => '2918209',
            ],
            [
                'name' => 'Jita�na',
                'estado_id' => '16',
                'ibge' => '2918308',
            ],
            [
                'name' => 'Joao Dourado',
                'estado_id' => '16',
                'ibge' => '2918357',
            ],
            [
                'name' => 'Juazeiro',
                'estado_id' => '16',
                'ibge' => '2918407',
            ],
            [
                'name' => 'Jucurucu',
                'estado_id' => '16',
                'ibge' => '2918456',
            ],
            [
                'name' => 'Jussara',
                'estado_id' => '16',
                'ibge' => '2918506',
            ],
            [
                'name' => 'Jussari',
                'estado_id' => '16',
                'ibge' => '2918555',
            ],
            [
                'name' => 'Jussiape',
                'estado_id' => '16',
                'ibge' => '2918605',
            ],
            [
                'name' => 'Lafaiete Coutinho',
                'estado_id' => '16',
                'ibge' => '2918704',
            ],
            [
                'name' => 'Lagoa Real',
                'estado_id' => '16',
                'ibge' => '2918753',
            ],
            [
                'name' => 'Laje',
                'estado_id' => '16',
                'ibge' => '2918803',
            ],
            [
                'name' => 'Lajedao',
                'estado_id' => '16',
                'ibge' => '2918902',
            ],
            [
                'name' => 'Lajedinho',
                'estado_id' => '16',
                'ibge' => '2919009',
            ],
            [
                'name' => 'Lajedo do Tabocal',
                'estado_id' => '16',
                'ibge' => '2919058',
            ],
            [
                'name' => 'Lamarao',
                'estado_id' => '16',
                'ibge' => '2919108',
            ],
            [
                'name' => 'Lapao',
                'estado_id' => '16',
                'ibge' => '2919157',
            ],
            [
                'name' => 'Lauro de Freitas',
                'estado_id' => '16',
                'ibge' => '2919207',
            ],
            [
                'name' => 'Lencois',
                'estado_id' => '16',
                'ibge' => '2919306',
            ],
            [
                'name' => 'Licinio de Almeida',
                'estado_id' => '16',
                'ibge' => '2919405',
            ],
            [
                'name' => 'Livramento de Nossa Senhora',
                'estado_id' => '16',
                'ibge' => '2919504',
            ],
            [
                'name' => 'Luis Eduardo Magalhaes',
                'estado_id' => '16',
                'ibge' => '2919553',
            ],
            [
                'name' => 'Macajuba',
                'estado_id' => '16',
                'ibge' => '2919603',
            ],
            [
                'name' => 'Macarani',
                'estado_id' => '16',
                'ibge' => '2919702',
            ],
            [
                'name' => 'Maca�bas',
                'estado_id' => '16',
                'ibge' => '2919801',
            ],
            [
                'name' => 'Macurure',
                'estado_id' => '16',
                'ibge' => '2919900',
            ],
            [
                'name' => 'Madre de Deus',
                'estado_id' => '16',
                'ibge' => '2919926',
            ],
            [
                'name' => 'Maetinga',
                'estado_id' => '16',
                'ibge' => '2919959',
            ],
            [
                'name' => 'Maiquinique',
                'estado_id' => '16',
                'ibge' => '2920007',
            ],
            [
                'name' => 'Mairi',
                'estado_id' => '16',
                'ibge' => '2920106',
            ],
            [
                'name' => 'Malhada',
                'estado_id' => '16',
                'ibge' => '2920205',
            ],
            [
                'name' => 'Malhada de Pedras',
                'estado_id' => '16',
                'ibge' => '2920304',
            ],
            [
                'name' => 'Manoel Vitorino',
                'estado_id' => '16',
                'ibge' => '2920403',
            ],
            [
                'name' => 'Mansidao',
                'estado_id' => '16',
                'ibge' => '2920452',
            ],
            [
                'name' => 'Maracas',
                'estado_id' => '16',
                'ibge' => '2920502',
            ],
            [
                'name' => 'Maragogipe',
                'estado_id' => '16',
                'ibge' => '2920601',
            ],
            [
                'name' => 'Mara�',
                'estado_id' => '16',
                'ibge' => '2920700',
            ],
            [
                'name' => 'Marcionilio Souza',
                'estado_id' => '16',
                'ibge' => '2920809',
            ],
            [
                'name' => 'Mascote',
                'estado_id' => '16',
                'ibge' => '2920908',
            ],
            [
                'name' => 'Mata de Sao Joao',
                'estado_id' => '16',
                'ibge' => '2921005',
            ],
            [
                'name' => 'Matina',
                'estado_id' => '16',
                'ibge' => '2921054',
            ],
            [
                'name' => 'Medeiros Neto',
                'estado_id' => '16',
                'ibge' => '2921104',
            ],
            [
                'name' => 'Miguel Calmon',
                'estado_id' => '16',
                'ibge' => '2921203',
            ],
            [
                'name' => 'Milagres',
                'estado_id' => '16',
                'ibge' => '2921302',
            ],
            [
                'name' => 'Mirangaba',
                'estado_id' => '16',
                'ibge' => '2921401',
            ],
            [
                'name' => 'Mirante',
                'estado_id' => '16',
                'ibge' => '2921450',
            ],
            [
                'name' => 'Monte Santo',
                'estado_id' => '16',
                'ibge' => '2921500',
            ],
            [
                'name' => 'Morpara',
                'estado_id' => '16',
                'ibge' => '2921609',
            ],
            [
                'name' => 'Morro do Chapeu',
                'estado_id' => '16',
                'ibge' => '2921708',
            ],
            [
                'name' => 'Mortugaba',
                'estado_id' => '16',
                'ibge' => '2921807',
            ],
            [
                'name' => 'Mucug�',
                'estado_id' => '16',
                'ibge' => '2921906',
            ],
            [
                'name' => 'Mucuri',
                'estado_id' => '16',
                'ibge' => '2922003',
            ],
            [
                'name' => 'Mulungu do Morro',
                'estado_id' => '16',
                'ibge' => '2922052',
            ],
            [
                'name' => 'Mundo Novo',
                'estado_id' => '16',
                'ibge' => '2922102',
            ],
            [
                'name' => 'Muniz Ferreira',
                'estado_id' => '16',
                'ibge' => '2922201',
            ],
            [
                'name' => 'Muquem de Sao Francisco',
                'estado_id' => '16',
                'ibge' => '2922250',
            ],
            [
                'name' => 'Muritiba',
                'estado_id' => '16',
                'ibge' => '2922300',
            ],
            [
                'name' => 'Mutuipe',
                'estado_id' => '16',
                'ibge' => '2922409',
            ],
            [
                'name' => 'Nazare',
                'estado_id' => '16',
                'ibge' => '2922508',
            ],
            [
                'name' => 'Nilo Pecanha',
                'estado_id' => '16',
                'ibge' => '2922607',
            ],
            [
                'name' => 'Nordestina',
                'estado_id' => '16',
                'ibge' => '2922656',
            ],
            [
                'name' => 'Nova Canaa',
                'estado_id' => '16',
                'ibge' => '2922706',
            ],
            [
                'name' => 'Nova Fatima',
                'estado_id' => '16',
                'ibge' => '2922730',
            ],
            [
                'name' => 'Nova Ibia',
                'estado_id' => '16',
                'ibge' => '2922755',
            ],
            [
                'name' => 'Nova Itarana',
                'estado_id' => '16',
                'ibge' => '2922805',
            ],
            [
                'name' => 'Nova Redencao',
                'estado_id' => '16',
                'ibge' => '2922854',
            ],
            [
                'name' => 'Nova Soure',
                'estado_id' => '16',
                'ibge' => '2922904',
            ],
            [
                'name' => 'Nova Vicosa',
                'estado_id' => '16',
                'ibge' => '2923001',
            ],
            [
                'name' => 'Novo Horizonte',
                'estado_id' => '16',
                'ibge' => '2923035',
            ],
            [
                'name' => 'Novo Triunfo',
                'estado_id' => '16',
                'ibge' => '2923050',
            ],
            [
                'name' => 'Olindina',
                'estado_id' => '16',
                'ibge' => '2923100',
            ],
            [
                'name' => 'Oliveira dos Brejinhos',
                'estado_id' => '16',
                'ibge' => '2923209',
            ],
            [
                'name' => 'Ouricangas',
                'estado_id' => '16',
                'ibge' => '2923308',
            ],
            [
                'name' => 'Ourolandia',
                'estado_id' => '16',
                'ibge' => '2923357',
            ],
            [
                'name' => 'Palmas de Monte Alto',
                'estado_id' => '16',
                'ibge' => '2923407',
            ],
            [
                'name' => 'Palmeiras',
                'estado_id' => '16',
                'ibge' => '2923506',
            ],
            [
                'name' => 'Paramirim',
                'estado_id' => '16',
                'ibge' => '2923605',
            ],
            [
                'name' => 'Paratinga',
                'estado_id' => '16',
                'ibge' => '2923704',
            ],
            [
                'name' => 'Paripiranga',
                'estado_id' => '16',
                'ibge' => '2923803',
            ],
            [
                'name' => 'Pau Brasil',
                'estado_id' => '16',
                'ibge' => '2923902',
            ],
            [
                'name' => 'Paulo Afonso',
                'estado_id' => '16',
                'ibge' => '2924009',
            ],
            [
                'name' => 'Pe de Serra',
                'estado_id' => '16',
                'ibge' => '2924058',
            ],
            [
                'name' => 'Pedrao',
                'estado_id' => '16',
                'ibge' => '2924108',
            ],
            [
                'name' => 'Pedro Alexandre',
                'estado_id' => '16',
                'ibge' => '2924207',
            ],
            [
                'name' => 'Piata',
                'estado_id' => '16',
                'ibge' => '2924306',
            ],
            [
                'name' => 'Pilao Arcado',
                'estado_id' => '16',
                'ibge' => '2924405',
            ],
            [
                'name' => 'Pindai',
                'estado_id' => '16',
                'ibge' => '2924504',
            ],
            [
                'name' => 'Pindobacu',
                'estado_id' => '16',
                'ibge' => '2924603',
            ],
            [
                'name' => 'Pintadas',
                'estado_id' => '16',
                'ibge' => '2924652',
            ],
            [
                'name' => 'Pirai do Norte',
                'estado_id' => '16',
                'ibge' => '2924678',
            ],
            [
                'name' => 'Piripa',
                'estado_id' => '16',
                'ibge' => '2924702',
            ],
            [
                'name' => 'Piritiba',
                'estado_id' => '16',
                'ibge' => '2924801',
            ],
            [
                'name' => 'Planaltino',
                'estado_id' => '16',
                'ibge' => '2924900',
            ],
            [
                'name' => 'Planalto',
                'estado_id' => '16',
                'ibge' => '2925006',
            ],
            [
                'name' => 'Poc�es',
                'estado_id' => '16',
                'ibge' => '2925105',
            ],
            [
                'name' => 'Pojuca',
                'estado_id' => '16',
                'ibge' => '2925204',
            ],
            [
                'name' => 'Ponto Novo',
                'estado_id' => '16',
                'ibge' => '2925253',
            ],
            [
                'name' => 'Porto Seguro',
                'estado_id' => '16',
                'ibge' => '2925303',
            ],
            [
                'name' => 'Potiragua',
                'estado_id' => '16',
                'ibge' => '2925402',
            ],
            [
                'name' => 'Prado',
                'estado_id' => '16',
                'ibge' => '2925501',
            ],
            [
                'name' => 'Presidente Dutra',
                'estado_id' => '16',
                'ibge' => '2925600',
            ],
            [
                'name' => 'Presidente Janio Quadros',
                'estado_id' => '16',
                'ibge' => '2925709',
            ],
            [
                'name' => 'Presidente Tancredo Neves',
                'estado_id' => '16',
                'ibge' => '2925758',
            ],
            [
                'name' => 'Queimadas',
                'estado_id' => '16',
                'ibge' => '2925808',
            ],
            [
                'name' => 'Quijingue',
                'estado_id' => '16',
                'ibge' => '2925907',
            ],
            [
                'name' => 'Quixabeira',
                'estado_id' => '16',
                'ibge' => '2925931',
            ],
            [
                'name' => 'Rafael Jambeiro',
                'estado_id' => '16',
                'ibge' => '2925956',
            ],
            [
                'name' => 'Remanso',
                'estado_id' => '16',
                'ibge' => '2926004',
            ],
            [
                'name' => 'Retirolandia',
                'estado_id' => '16',
                'ibge' => '2926103',
            ],
            [
                'name' => 'Riachao das Neves',
                'estado_id' => '16',
                'ibge' => '2926202',
            ],
            [
                'name' => 'Riachao do Jacuipe',
                'estado_id' => '16',
                'ibge' => '2926301',
            ],
            [
                'name' => 'Riacho de Santana',
                'estado_id' => '16',
                'ibge' => '2926400',
            ],
            [
                'name' => 'Ribeira do Amparo',
                'estado_id' => '16',
                'ibge' => '2926509',
            ],
            [
                'name' => 'Ribeira do Pombal',
                'estado_id' => '16',
                'ibge' => '2926608',
            ],
            [
                'name' => 'Ribeirao do Largo',
                'estado_id' => '16',
                'ibge' => '2926657',
            ],
            [
                'name' => 'Rio de Contas',
                'estado_id' => '16',
                'ibge' => '2926707',
            ],
            [
                'name' => 'Rio do Antonio',
                'estado_id' => '16',
                'ibge' => '2926806',
            ],
            [
                'name' => 'Rio do Pires',
                'estado_id' => '16',
                'ibge' => '2926905',
            ],
            [
                'name' => 'Rio Real',
                'estado_id' => '16',
                'ibge' => '2927002',
            ],
            [
                'name' => 'Rodelas',
                'estado_id' => '16',
                'ibge' => '2927101',
            ],
            [
                'name' => 'Ruy Barbosa',
                'estado_id' => '16',
                'ibge' => '2927200',
            ],
            [
                'name' => 'Salinas da Margarida',
                'estado_id' => '16',
                'ibge' => '2927309',
            ],
            [
                'name' => 'Salvador',
                'estado_id' => '16',
                'ibge' => '2927408',
            ],
            [
                'name' => 'Santa Barbara',
                'estado_id' => '16',
                'ibge' => '2927507',
            ],
            [
                'name' => 'Santa Brigida',
                'estado_id' => '16',
                'ibge' => '2927606',
            ],
            [
                'name' => 'Santa Cruz Cabralia',
                'estado_id' => '16',
                'ibge' => '2927705',
            ],
            [
                'name' => 'Santa Cruz da Vitoria',
                'estado_id' => '16',
                'ibge' => '2927804',
            ],
            [
                'name' => 'Santa In�s',
                'estado_id' => '16',
                'ibge' => '2927903',
            ],
            [
                'name' => 'Santaluz',
                'estado_id' => '16',
                'ibge' => '2928000',
            ],
            [
                'name' => 'Santa Luzia',
                'estado_id' => '16',
                'ibge' => '2928059',
            ],
            [
                'name' => 'Santa Maria da Vitoria',
                'estado_id' => '16',
                'ibge' => '2928109',
            ],
            [
                'name' => 'Santana',
                'estado_id' => '16',
                'ibge' => '2928208',
            ],
            [
                'name' => 'Santanopolis',
                'estado_id' => '16',
                'ibge' => '2928307',
            ],
            [
                'name' => 'Santa Rita de Cassia',
                'estado_id' => '16',
                'ibge' => '2928406',
            ],
            [
                'name' => 'Santa Teresinha',
                'estado_id' => '16',
                'ibge' => '2928505',
            ],
            [
                'name' => 'Santo Amaro',
                'estado_id' => '16',
                'ibge' => '2928604',
            ],
            [
                'name' => 'Santo Antonio de Jesus',
                'estado_id' => '16',
                'ibge' => '2928703',
            ],
            [
                'name' => 'Santo Est�vao',
                'estado_id' => '16',
                'ibge' => '2928802',
            ],
            [
                'name' => 'Sao Desiderio',
                'estado_id' => '16',
                'ibge' => '2928901',
            ],
            [
                'name' => 'Sao Domingos',
                'estado_id' => '16',
                'ibge' => '2928950',
            ],
            [
                'name' => 'Sao Felix',
                'estado_id' => '16',
                'ibge' => '2929008',
            ],
            [
                'name' => 'Sao Felix do Coribe',
                'estado_id' => '16',
                'ibge' => '2929057',
            ],
            [
                'name' => 'Sao Felipe',
                'estado_id' => '16',
                'ibge' => '2929107',
            ],
            [
                'name' => 'Sao Francisco do Conde',
                'estado_id' => '16',
                'ibge' => '2929206',
            ],
            [
                'name' => 'Sao Gabriel',
                'estado_id' => '16',
                'ibge' => '2929255',
            ],
            [
                'name' => 'Sao Goncalo dos Campos',
                'estado_id' => '16',
                'ibge' => '2929305',
            ],
            [
                'name' => 'Sao Jose da Vitoria',
                'estado_id' => '16',
                'ibge' => '2929354',
            ],
            [
                'name' => 'Sao Jose do Jacuipe',
                'estado_id' => '16',
                'ibge' => '2929370',
            ],
            [
                'name' => 'Sao Miguel das Matas',
                'estado_id' => '16',
                'ibge' => '2929404',
            ],
            [
                'name' => 'Sao Sebastiao do Passe',
                'estado_id' => '16',
                'ibge' => '2929503',
            ],
            [
                'name' => 'Sapeacu',
                'estado_id' => '16',
                'ibge' => '2929602',
            ],
            [
                'name' => 'Satiro Dias',
                'estado_id' => '16',
                'ibge' => '2929701',
            ],
            [
                'name' => 'Saubara',
                'estado_id' => '16',
                'ibge' => '2929750',
            ],
            [
                'name' => 'Sa�de',
                'estado_id' => '16',
                'ibge' => '2929800',
            ],
            [
                'name' => 'Seabra',
                'estado_id' => '16',
                'ibge' => '2929909',
            ],
            [
                'name' => 'Sebastiao Laranjeiras',
                'estado_id' => '16',
                'ibge' => '2930006',
            ],
            [
                'name' => 'Senhor do Bonfim',
                'estado_id' => '16',
                'ibge' => '2930105',
            ],
            [
                'name' => 'Serra do Ramalho',
                'estado_id' => '16',
                'ibge' => '2930154',
            ],
            [
                'name' => 'Sento Se',
                'estado_id' => '16',
                'ibge' => '2930204',
            ],
            [
                'name' => 'Serra Dourada',
                'estado_id' => '16',
                'ibge' => '2930303',
            ],
            [
                'name' => 'Serra Preta',
                'estado_id' => '16',
                'ibge' => '2930402',
            ],
            [
                'name' => 'Serrinha',
                'estado_id' => '16',
                'ibge' => '2930501',
            ],
            [
                'name' => 'Serrolandia',
                'estado_id' => '16',
                'ibge' => '2930600',
            ],
            [
                'name' => 'Sim�es Filho',
                'estado_id' => '16',
                'ibge' => '2930709',
            ],
            [
                'name' => 'Sitio do Mato',
                'estado_id' => '16',
                'ibge' => '2930758',
            ],
            [
                'name' => 'Sitio do Quinto',
                'estado_id' => '16',
                'ibge' => '2930766',
            ],
            [
                'name' => 'Sobradinho',
                'estado_id' => '16',
                'ibge' => '2930774',
            ],
            [
                'name' => 'Souto Soares',
                'estado_id' => '16',
                'ibge' => '2930808',
            ],
            [
                'name' => 'Tabocas do Brejo Velho',
                'estado_id' => '16',
                'ibge' => '2930907',
            ],
            [
                'name' => 'Tanhacu',
                'estado_id' => '16',
                'ibge' => '2931004',
            ],
            [
                'name' => 'Tanque Novo',
                'estado_id' => '16',
                'ibge' => '2931053',
            ],
            [
                'name' => 'Tanquinho',
                'estado_id' => '16',
                'ibge' => '2931103',
            ],
            [
                'name' => 'Taperoa',
                'estado_id' => '16',
                'ibge' => '2931202',
            ],
            [
                'name' => 'Tapiramuta',
                'estado_id' => '16',
                'ibge' => '2931301',
            ],
            [
                'name' => 'Teixeira de Freitas',
                'estado_id' => '16',
                'ibge' => '2931350',
            ],
            [
                'name' => 'Teodoro Sampaio',
                'estado_id' => '16',
                'ibge' => '2931400',
            ],
            [
                'name' => 'Teofilandia',
                'estado_id' => '16',
                'ibge' => '2931509',
            ],
            [
                'name' => 'Teolandia',
                'estado_id' => '16',
                'ibge' => '2931608',
            ],
            [
                'name' => 'Terra Nova',
                'estado_id' => '16',
                'ibge' => '2931707',
            ],
            [
                'name' => 'Tremedal',
                'estado_id' => '16',
                'ibge' => '2931806',
            ],
            [
                'name' => 'Tucano',
                'estado_id' => '16',
                'ibge' => '2931905',
            ],
            [
                'name' => 'Uaua',
                'estado_id' => '16',
                'ibge' => '2932002',
            ],
            [
                'name' => 'Ubaira',
                'estado_id' => '16',
                'ibge' => '2932101',
            ],
            [
                'name' => 'Ubaitaba',
                'estado_id' => '16',
                'ibge' => '2932200',
            ],
            [
                'name' => 'Ubata',
                'estado_id' => '16',
                'ibge' => '2932309',
            ],
            [
                'name' => 'Uibai',
                'estado_id' => '16',
                'ibge' => '2932408',
            ],
            [
                'name' => 'Umburanas',
                'estado_id' => '16',
                'ibge' => '2932457',
            ],
            [
                'name' => 'Una',
                'estado_id' => '16',
                'ibge' => '2932507',
            ],
            [
                'name' => 'Urandi',
                'estado_id' => '16',
                'ibge' => '2932606',
            ],
            [
                'name' => 'Urucuca',
                'estado_id' => '16',
                'ibge' => '2932705',
            ],
            [
                'name' => 'Utinga',
                'estado_id' => '16',
                'ibge' => '2932804',
            ],
            [
                'name' => 'Valenca',
                'estado_id' => '16',
                'ibge' => '2932903',
            ],
            [
                'name' => 'Valente',
                'estado_id' => '16',
                'ibge' => '2933000',
            ],
            [
                'name' => 'Varzea da Roca',
                'estado_id' => '16',
                'ibge' => '2933059',
            ],
            [
                'name' => 'Varzea do Poco',
                'estado_id' => '16',
                'ibge' => '2933109',
            ],
            [
                'name' => 'Varzea Nova',
                'estado_id' => '16',
                'ibge' => '2933158',
            ],
            [
                'name' => 'Varzedo',
                'estado_id' => '16',
                'ibge' => '2933174',
            ],
            [
                'name' => 'Vera Cruz',
                'estado_id' => '16',
                'ibge' => '2933208',
            ],
            [
                'name' => 'Vereda',
                'estado_id' => '16',
                'ibge' => '2933257',
            ],
            [
                'name' => 'Vitoria da Conquista',
                'estado_id' => '16',
                'ibge' => '2933307',
            ],
            [
                'name' => 'Wagner',
                'estado_id' => '16',
                'ibge' => '2933406',
            ],
            [
                'name' => 'Wanderley',
                'estado_id' => '16',
                'ibge' => '2933455',
            ],
            [
                'name' => 'Wenceslau Guimaraes',
                'estado_id' => '16',
                'ibge' => '2933505',
            ],
            [
                'name' => 'Xique-Xique',
                'estado_id' => '16',
                'ibge' => '2933604',
            ],
            [
                'name' => 'Dias D avila ',
                'estado_id' => '16',
                'ibge' => '2910057',
            ],

            /* Minas Gerais */

            [
                'name' => 'Abadia dos Dourados',
                'estado_id' => '17',
                'ibge' => '3100104',
            ],
            [
                'name' => 'Abaete',
                'estado_id' => '17',
                'ibge' => '3100203',
            ],
            [
                'name' => 'Abre Campo',
                'estado_id' => '17',
                'ibge' => '3100302',
            ],
            [
                'name' => 'Acaiaca',
                'estado_id' => '17',
                'ibge' => '3100401',
            ],
            [
                'name' => 'Acucena',
                'estado_id' => '17',
                'ibge' => '3100500',
            ],
            [
                'name' => 'Agua Boa',
                'estado_id' => '17',
                'ibge' => '3100609',
            ],
            [
                'name' => 'Agua Comprida',
                'estado_id' => '17',
                'ibge' => '3100708',
            ],
            [
                'name' => 'Aguanil',
                'estado_id' => '17',
                'ibge' => '3100807',
            ],
            [
                'name' => 'Aguas Formosas',
                'estado_id' => '17',
                'ibge' => '3100906',
            ],
            [
                'name' => 'Aguas Vermelhas',
                'estado_id' => '17',
                'ibge' => '3101003',
            ],
            [
                'name' => 'Aimores',
                'estado_id' => '17',
                'ibge' => '3101102',
            ],
            [
                'name' => 'Aiuruoca',
                'estado_id' => '17',
                'ibge' => '3101201',
            ],
            [
                'name' => 'Alagoa',
                'estado_id' => '17',
                'ibge' => '3101300',
            ],
            [
                'name' => 'Albertina',
                'estado_id' => '17',
                'ibge' => '3101409',
            ],
            [
                'name' => 'Alem Paraiba',
                'estado_id' => '17',
                'ibge' => '3101508',
            ],
            [
                'name' => 'Alfenas',
                'estado_id' => '17',
                'ibge' => '3101607',
            ],
            [
                'name' => 'Alfredo Vasconcelos',
                'estado_id' => '17',
                'ibge' => '3101631',
            ],
            [
                'name' => 'Almenara',
                'estado_id' => '17',
                'ibge' => '3101706',
            ],
            [
                'name' => 'Alpercata',
                'estado_id' => '17',
                'ibge' => '3101805',
            ],
            [
                'name' => 'Alpinopolis',
                'estado_id' => '17',
                'ibge' => '3101904',
            ],
            [
                'name' => 'Alterosa',
                'estado_id' => '17',
                'ibge' => '3102001',
            ],
            [
                'name' => 'Alto Caparao',
                'estado_id' => '17',
                'ibge' => '3102050',
            ],
            [
                'name' => 'Alto Rio Doce',
                'estado_id' => '17',
                'ibge' => '3102100',
            ],
            [
                'name' => 'Alvarenga',
                'estado_id' => '17',
                'ibge' => '3102209',
            ],
            [
                'name' => 'Alvinopolis',
                'estado_id' => '17',
                'ibge' => '3102308',
            ],
            [
                'name' => 'Alvorada de Minas',
                'estado_id' => '17',
                'ibge' => '3102407',
            ],
            [
                'name' => 'Amparo do Serra',
                'estado_id' => '17',
                'ibge' => '3102506',
            ],
            [
                'name' => 'Andradas',
                'estado_id' => '17',
                'ibge' => '3102605',
            ],
            [
                'name' => 'Cachoeira de Paje�',
                'estado_id' => '17',
                'ibge' => '3102704',
            ],
            [
                'name' => 'Andrelandia',
                'estado_id' => '17',
                'ibge' => '3102803',
            ],
            [
                'name' => 'Angelandia',
                'estado_id' => '17',
                'ibge' => '3102852',
            ],
            [
                'name' => 'Antonio Carlos',
                'estado_id' => '17',
                'ibge' => '3102902',
            ],
            [
                'name' => 'Antonio Dias',
                'estado_id' => '17',
                'ibge' => '3103009',
            ],
            [
                'name' => 'Antonio Prado de Minas',
                'estado_id' => '17',
                'ibge' => '3103108',
            ],
            [
                'name' => 'Aracai',
                'estado_id' => '17',
                'ibge' => '3103207',
            ],
            [
                'name' => 'Aracitaba',
                'estado_id' => '17',
                'ibge' => '3103306',
            ],
            [
                'name' => 'Aracuai',
                'estado_id' => '17',
                'ibge' => '3103405',
            ],
            [
                'name' => 'Araguari',
                'estado_id' => '17',
                'ibge' => '3103504',
            ],
            [
                'name' => 'Arantina',
                'estado_id' => '17',
                'ibge' => '3103603',
            ],
            [
                'name' => 'Araponga',
                'estado_id' => '17',
                'ibge' => '3103702',
            ],
            [
                'name' => 'Arapora',
                'estado_id' => '17',
                'ibge' => '3103751',
            ],
            [
                'name' => 'Arapua',
                'estado_id' => '17',
                'ibge' => '3103801',
            ],
            [
                'name' => 'Ara�jos',
                'estado_id' => '17',
                'ibge' => '3103900',
            ],
            [
                'name' => 'Araxa',
                'estado_id' => '17',
                'ibge' => '3104007',
            ],
            [
                'name' => 'Arceburgo',
                'estado_id' => '17',
                'ibge' => '3104106',
            ],
            [
                'name' => 'Arcos',
                'estado_id' => '17',
                'ibge' => '3104205',
            ],
            [
                'name' => 'Areado',
                'estado_id' => '17',
                'ibge' => '3104304',
            ],
            [
                'name' => 'Argirita',
                'estado_id' => '17',
                'ibge' => '3104403',
            ],
            [
                'name' => 'Aricanduva',
                'estado_id' => '17',
                'ibge' => '3104452',
            ],
            [
                'name' => 'Arinos',
                'estado_id' => '17',
                'ibge' => '3104502',
            ],
            [
                'name' => 'Astolfo Dutra',
                'estado_id' => '17',
                'ibge' => '3104601',
            ],
            [
                'name' => 'Ataleia',
                'estado_id' => '17',
                'ibge' => '3104700',
            ],
            [
                'name' => 'Augusto de Lima',
                'estado_id' => '17',
                'ibge' => '3104809',
            ],
            [
                'name' => 'Baependi',
                'estado_id' => '17',
                'ibge' => '3104908',
            ],
            [
                'name' => 'Baldim',
                'estado_id' => '17',
                'ibge' => '3105004',
            ],
            [
                'name' => 'Bambui',
                'estado_id' => '17',
                'ibge' => '3105103',
            ],
            [
                'name' => 'Bandeira',
                'estado_id' => '17',
                'ibge' => '3105202',
            ],
            [
                'name' => 'Bandeira do Sul',
                'estado_id' => '17',
                'ibge' => '3105301',
            ],
            [
                'name' => 'Barao de Cocais',
                'estado_id' => '17',
                'ibge' => '3105400',
            ],
            [
                'name' => 'Barao de Monte Alto',
                'estado_id' => '17',
                'ibge' => '3105509',
            ],
            [
                'name' => 'Barbacena',
                'estado_id' => '17',
                'ibge' => '3105608',
            ],
            [
                'name' => 'Barra Longa',
                'estado_id' => '17',
                'ibge' => '3105707',
            ],
            [
                'name' => 'Barroso',
                'estado_id' => '17',
                'ibge' => '3105905',
            ],
            [
                'name' => 'Bela Vista de Minas',
                'estado_id' => '17',
                'ibge' => '3106002',
            ],
            [
                'name' => 'Belmiro Braga',
                'estado_id' => '17',
                'ibge' => '3106101',
            ],
            [
                'name' => 'Belo Horizonte',
                'estado_id' => '17',
                'ibge' => '3106200',
            ],
            [
                'name' => 'Belo Oriente',
                'estado_id' => '17',
                'ibge' => '3106309',
            ],
            [
                'name' => 'Belo Vale',
                'estado_id' => '17',
                'ibge' => '3106408',
            ],
            [
                'name' => 'Berilo',
                'estado_id' => '17',
                'ibge' => '3106507',
            ],
            [
                'name' => 'Bertopolis',
                'estado_id' => '17',
                'ibge' => '3106606',
            ],
            [
                'name' => 'Berizal',
                'estado_id' => '17',
                'ibge' => '3106655',
            ],
            [
                'name' => 'Betim',
                'estado_id' => '17',
                'ibge' => '3106705',
            ],
            [
                'name' => 'Bias Fortes',
                'estado_id' => '17',
                'ibge' => '3106804',
            ],
            [
                'name' => 'Bicas',
                'estado_id' => '17',
                'ibge' => '3106903',
            ],
            [
                'name' => 'Biquinhas',
                'estado_id' => '17',
                'ibge' => '3107000',
            ],
            [
                'name' => 'Boa Esperanca',
                'estado_id' => '17',
                'ibge' => '3107109',
            ],
            [
                'name' => 'Bocaina de Minas',
                'estado_id' => '17',
                'ibge' => '3107208',
            ],
            [
                'name' => 'Bocai�va',
                'estado_id' => '17',
                'ibge' => '3107307',
            ],
            [
                'name' => 'Bom Despacho',
                'estado_id' => '17',
                'ibge' => '3107406',
            ],
            [
                'name' => 'Bom Jardim de Minas',
                'estado_id' => '17',
                'ibge' => '3107505',
            ],
            [
                'name' => 'Bom Jesus da Penha',
                'estado_id' => '17',
                'ibge' => '3107604',
            ],
            [
                'name' => 'Bom Jesus do Amparo',
                'estado_id' => '17',
                'ibge' => '3107703',
            ],
            [
                'name' => 'Bom Jesus do Galho',
                'estado_id' => '17',
                'ibge' => '3107802',
            ],
            [
                'name' => 'Bom Repouso',
                'estado_id' => '17',
                'ibge' => '3107901',
            ],
            [
                'name' => 'Bom Sucesso',
                'estado_id' => '17',
                'ibge' => '3108008',
            ],
            [
                'name' => 'Bonfim',
                'estado_id' => '17',
                'ibge' => '3108107',
            ],
            [
                'name' => 'Bonfinopolis de Minas',
                'estado_id' => '17',
                'ibge' => '3108206',
            ],
            [
                'name' => 'Bonito de Minas',
                'estado_id' => '17',
                'ibge' => '3108255',
            ],
            [
                'name' => 'Borda da Mata',
                'estado_id' => '17',
                'ibge' => '3108305',
            ],
            [
                'name' => 'Botelhos',
                'estado_id' => '17',
                'ibge' => '3108404',
            ],
            [
                'name' => 'Botumirim',
                'estado_id' => '17',
                'ibge' => '3108503',
            ],
            [
                'name' => 'Brasilandia de Minas',
                'estado_id' => '17',
                'ibge' => '3108552',
            ],
            [
                'name' => 'Brasilia de Minas',
                'estado_id' => '17',
                'ibge' => '3108602',
            ],
            [
                'name' => 'Bras Pires',
                'estado_id' => '17',
                'ibge' => '3108701',
            ],
            [
                'name' => 'Bra�nas',
                'estado_id' => '17',
                'ibge' => '3108800',
            ],
            [
                'name' => 'Brasopolis',
                'estado_id' => '17',
                'ibge' => '3108909',
            ],
            [
                'name' => 'Brumadinho',
                'estado_id' => '17',
                'ibge' => '3109006',
            ],
            [
                'name' => 'Bueno Brandao',
                'estado_id' => '17',
                'ibge' => '3109105',
            ],
            [
                'name' => 'Buenopolis',
                'estado_id' => '17',
                'ibge' => '3109204',
            ],
            [
                'name' => 'Bugre',
                'estado_id' => '17',
                'ibge' => '3109253',
            ],
            [
                'name' => 'Buritis',
                'estado_id' => '17',
                'ibge' => '3109303',
            ],
            [
                'name' => 'Buritizeiro',
                'estado_id' => '17',
                'ibge' => '3109402',
            ],
            [
                'name' => 'Cabeceira Grande',
                'estado_id' => '17',
                'ibge' => '3109451',
            ],
            [
                'name' => 'Cabo Verde',
                'estado_id' => '17',
                'ibge' => '3109501',
            ],
            [
                'name' => 'Cachoeira da Prata',
                'estado_id' => '17',
                'ibge' => '3109600',
            ],
            [
                'name' => 'Cachoeira de Minas',
                'estado_id' => '17',
                'ibge' => '3109709',
            ],
            [
                'name' => 'Cachoeira Dourada',
                'estado_id' => '17',
                'ibge' => '3109808',
            ],
            [
                'name' => 'Caetanopolis',
                'estado_id' => '17',
                'ibge' => '3109907',
            ],
            [
                'name' => 'Caete',
                'estado_id' => '17',
                'ibge' => '3110004',
            ],
            [
                'name' => 'Caiana',
                'estado_id' => '17',
                'ibge' => '3110103',
            ],
            [
                'name' => 'Cajuri',
                'estado_id' => '17',
                'ibge' => '3110202',
            ],
            [
                'name' => 'Caldas',
                'estado_id' => '17',
                'ibge' => '3110301',
            ],
            [
                'name' => 'Camacho',
                'estado_id' => '17',
                'ibge' => '3110400',
            ],
            [
                'name' => 'Camanducaia',
                'estado_id' => '17',
                'ibge' => '3110509',
            ],
            [
                'name' => 'Cambui',
                'estado_id' => '17',
                'ibge' => '3110608',
            ],
            [
                'name' => 'Cambuquira',
                'estado_id' => '17',
                'ibge' => '3110707',
            ],
            [
                'name' => 'Campanario',
                'estado_id' => '17',
                'ibge' => '3110806',
            ],
            [
                'name' => 'Campanha',
                'estado_id' => '17',
                'ibge' => '3110905',
            ],
            [
                'name' => 'Campestre',
                'estado_id' => '17',
                'ibge' => '3111002',
            ],
            [
                'name' => 'Campina Verde',
                'estado_id' => '17',
                'ibge' => '3111101',
            ],
            [
                'name' => 'Campo Azul',
                'estado_id' => '17',
                'ibge' => '3111150',
            ],
            [
                'name' => 'Campo Belo',
                'estado_id' => '17',
                'ibge' => '3111200',
            ],
            [
                'name' => 'Campo do Meio',
                'estado_id' => '17',
                'ibge' => '3111309',
            ],
            [
                'name' => 'Campo Florido',
                'estado_id' => '17',
                'ibge' => '3111408',
            ],
            [
                'name' => 'Campos Altos',
                'estado_id' => '17',
                'ibge' => '3111507',
            ],
            [
                'name' => 'Campos Gerais',
                'estado_id' => '17',
                'ibge' => '3111606',
            ],
            [
                'name' => 'Canaa',
                'estado_id' => '17',
                'ibge' => '3111705',
            ],
            [
                'name' => 'Canapolis',
                'estado_id' => '17',
                'ibge' => '3111804',
            ],
            [
                'name' => 'Cana Verde',
                'estado_id' => '17',
                'ibge' => '3111903',
            ],
            [
                'name' => 'Candeias',
                'estado_id' => '17',
                'ibge' => '3112000',
            ],
            [
                'name' => 'Cantagalo',
                'estado_id' => '17',
                'ibge' => '3112059',
            ],
            [
                'name' => 'Caparao',
                'estado_id' => '17',
                'ibge' => '3112109',
            ],
            [
                'name' => 'Capela Nova',
                'estado_id' => '17',
                'ibge' => '3112208',
            ],
            [
                'name' => 'Capelinha',
                'estado_id' => '17',
                'ibge' => '3112307',
            ],
            [
                'name' => 'Capetinga',
                'estado_id' => '17',
                'ibge' => '3112406',
            ],
            [
                'name' => 'Capim Branco',
                'estado_id' => '17',
                'ibge' => '3112505',
            ],
            [
                'name' => 'Capinopolis',
                'estado_id' => '17',
                'ibge' => '3112604',
            ],
            [
                'name' => 'Capitao Andrade',
                'estado_id' => '17',
                'ibge' => '3112653',
            ],
            [
                'name' => 'Capitao Eneas',
                'estado_id' => '17',
                'ibge' => '3112703',
            ],
            [
                'name' => 'Capitolio',
                'estado_id' => '17',
                'ibge' => '3112802',
            ],
            [
                'name' => 'Caputira',
                'estado_id' => '17',
                'ibge' => '3112901',
            ],
            [
                'name' => 'Carai',
                'estado_id' => '17',
                'ibge' => '3113008',
            ],
            [
                'name' => 'Caranaiba',
                'estado_id' => '17',
                'ibge' => '3113107',
            ],
            [
                'name' => 'Carandai',
                'estado_id' => '17',
                'ibge' => '3113206',
            ],
            [
                'name' => 'Carangola',
                'estado_id' => '17',
                'ibge' => '3113305',
            ],
            [
                'name' => 'Caratinga',
                'estado_id' => '17',
                'ibge' => '3113404',
            ],
            [
                'name' => 'Carbonita',
                'estado_id' => '17',
                'ibge' => '3113503',
            ],
            [
                'name' => 'Careacu',
                'estado_id' => '17',
                'ibge' => '3113602',
            ],
            [
                'name' => 'Carlos Chagas',
                'estado_id' => '17',
                'ibge' => '3113701',
            ],
            [
                'name' => 'Carmesia',
                'estado_id' => '17',
                'ibge' => '3113800',
            ],
            [
                'name' => 'Carmo da Cachoeira',
                'estado_id' => '17',
                'ibge' => '3113909',
            ],
            [
                'name' => 'Carmo da Mata',
                'estado_id' => '17',
                'ibge' => '3114006',
            ],
            [
                'name' => 'Carmo de Minas',
                'estado_id' => '17',
                'ibge' => '3114105',
            ],
            [
                'name' => 'Carmo do Cajuru',
                'estado_id' => '17',
                'ibge' => '3114204',
            ],
            [
                'name' => 'Carmo do Paranaiba',
                'estado_id' => '17',
                'ibge' => '3114303',
            ],
            [
                'name' => 'Carmo do Rio Claro',
                'estado_id' => '17',
                'ibge' => '3114402',
            ],
            [
                'name' => 'Carmopolis de Minas',
                'estado_id' => '17',
                'ibge' => '3114501',
            ],
            [
                'name' => 'Carneirinho',
                'estado_id' => '17',
                'ibge' => '3114550',
            ],
            [
                'name' => 'Carrancas',
                'estado_id' => '17',
                'ibge' => '3114600',
            ],
            [
                'name' => 'Carvalhopolis',
                'estado_id' => '17',
                'ibge' => '3114709',
            ],
            [
                'name' => 'Carvalhos',
                'estado_id' => '17',
                'ibge' => '3114808',
            ],
            [
                'name' => 'Casa Grande',
                'estado_id' => '17',
                'ibge' => '3114907',
            ],
            [
                'name' => 'Cascalho Rico',
                'estado_id' => '17',
                'ibge' => '3115003',
            ],
            [
                'name' => 'Cassia',
                'estado_id' => '17',
                'ibge' => '3115102',
            ],
            [
                'name' => 'Conceicao da Barra de Minas',
                'estado_id' => '17',
                'ibge' => '3115201',
            ],
            [
                'name' => 'Cataguases',
                'estado_id' => '17',
                'ibge' => '3115300',
            ],
            [
                'name' => 'Catas Altas',
                'estado_id' => '17',
                'ibge' => '3115359',
            ],
            [
                'name' => 'Catas Altas da Noruega',
                'estado_id' => '17',
                'ibge' => '3115409',
            ],
            [
                'name' => 'Catuji',
                'estado_id' => '17',
                'ibge' => '3115458',
            ],
            [
                'name' => 'Catuti',
                'estado_id' => '17',
                'ibge' => '3115474',
            ],
            [
                'name' => 'Caxambu',
                'estado_id' => '17',
                'ibge' => '3115508',
            ],
            [
                'name' => 'Cedro do Abaete',
                'estado_id' => '17',
                'ibge' => '3115607',
            ],
            [
                'name' => 'Central de Minas',
                'estado_id' => '17',
                'ibge' => '3115706',
            ],
            [
                'name' => 'Centralina',
                'estado_id' => '17',
                'ibge' => '3115805',
            ],
            [
                'name' => 'Chacara',
                'estado_id' => '17',
                'ibge' => '3115904',
            ],
            [
                'name' => 'Chale',
                'estado_id' => '17',
                'ibge' => '3116001',
            ],
            [
                'name' => 'Chapada do Norte',
                'estado_id' => '17',
                'ibge' => '3116100',
            ],
            [
                'name' => 'Chapada Ga�cha',
                'estado_id' => '17',
                'ibge' => '3116159',
            ],
            [
                'name' => 'Chiador',
                'estado_id' => '17',
                'ibge' => '3116209',
            ],
            [
                'name' => 'Cipotanea',
                'estado_id' => '17',
                'ibge' => '3116308',
            ],
            [
                'name' => 'Claraval',
                'estado_id' => '17',
                'ibge' => '3116407',
            ],
            [
                'name' => 'Claro dos Poc�es',
                'estado_id' => '17',
                'ibge' => '3116506',
            ],
            [
                'name' => 'Claudio',
                'estado_id' => '17',
                'ibge' => '3116605',
            ],
            [
                'name' => 'Coimbra',
                'estado_id' => '17',
                'ibge' => '3116704',
            ],
            [
                'name' => 'Coluna',
                'estado_id' => '17',
                'ibge' => '3116803',
            ],
            [
                'name' => 'Comendador Gomes',
                'estado_id' => '17',
                'ibge' => '3116902',
            ],
            [
                'name' => 'Comercinho',
                'estado_id' => '17',
                'ibge' => '3117009',
            ],
            [
                'name' => 'Conceicao da Aparecida',
                'estado_id' => '17',
                'ibge' => '3117108',
            ],
            [
                'name' => 'Conceicao das Pedras',
                'estado_id' => '17',
                'ibge' => '3117207',
            ],
            [
                'name' => 'Conceicao das Alagoas',
                'estado_id' => '17',
                'ibge' => '3117306',
            ],
            [
                'name' => 'Conceicao de Ipanema',
                'estado_id' => '17',
                'ibge' => '3117405',
            ],
            [
                'name' => 'Conceicao do Mato Dentro',
                'estado_id' => '17',
                'ibge' => '3117504',
            ],
            [
                'name' => 'Conceicao do Para',
                'estado_id' => '17',
                'ibge' => '3117603',
            ],
            [
                'name' => 'Conceicao do Rio Verde',
                'estado_id' => '17',
                'ibge' => '3117702',
            ],
            [
                'name' => 'Conceicao dos Ouros',
                'estado_id' => '17',
                'ibge' => '3117801',
            ],
            [
                'name' => 'Conego Marinho',
                'estado_id' => '17',
                'ibge' => '3117836',
            ],
            [
                'name' => 'Confins',
                'estado_id' => '17',
                'ibge' => '3117876',
            ],
            [
                'name' => 'Congonhal',
                'estado_id' => '17',
                'ibge' => '3117900',
            ],
            [
                'name' => 'Congonhas',
                'estado_id' => '17',
                'ibge' => '3118007',
            ],
            [
                'name' => 'Congonhas do Norte',
                'estado_id' => '17',
                'ibge' => '3118106',
            ],
            [
                'name' => 'Conquista',
                'estado_id' => '17',
                'ibge' => '3118205',
            ],
            [
                'name' => 'Conselheiro Lafaiete',
                'estado_id' => '17',
                'ibge' => '3118304',
            ],
            [
                'name' => 'Conselheiro Pena',
                'estado_id' => '17',
                'ibge' => '3118403',
            ],
            [
                'name' => 'Consolacao',
                'estado_id' => '17',
                'ibge' => '3118502',
            ],
            [
                'name' => 'Contagem',
                'estado_id' => '17',
                'ibge' => '3118601',
            ],
            [
                'name' => 'Coqueiral',
                'estado_id' => '17',
                'ibge' => '3118700',
            ],
            [
                'name' => 'Coracao de Jesus',
                'estado_id' => '17',
                'ibge' => '3118809',
            ],
            [
                'name' => 'Cordisburgo',
                'estado_id' => '17',
                'ibge' => '3118908',
            ],
            [
                'name' => 'Cordislandia',
                'estado_id' => '17',
                'ibge' => '3119005',
            ],
            [
                'name' => 'Corinto',
                'estado_id' => '17',
                'ibge' => '3119104',
            ],
            [
                'name' => 'Coroaci',
                'estado_id' => '17',
                'ibge' => '3119203',
            ],
            [
                'name' => 'Coromandel',
                'estado_id' => '17',
                'ibge' => '3119302',
            ],
            [
                'name' => 'Coronel Fabriciano',
                'estado_id' => '17',
                'ibge' => '3119401',
            ],
            [
                'name' => 'Coronel Murta',
                'estado_id' => '17',
                'ibge' => '3119500',
            ],
            [
                'name' => 'Coronel Pacheco',
                'estado_id' => '17',
                'ibge' => '3119609',
            ],
            [
                'name' => 'Coronel Xavier Chaves',
                'estado_id' => '17',
                'ibge' => '3119708',
            ],
            [
                'name' => 'Corrego Danta',
                'estado_id' => '17',
                'ibge' => '3119807',
            ],
            [
                'name' => 'Corrego do Bom Jesus',
                'estado_id' => '17',
                'ibge' => '3119906',
            ],
            [
                'name' => 'Corrego Fundo',
                'estado_id' => '17',
                'ibge' => '3119955',
            ],
            [
                'name' => 'Corrego Novo',
                'estado_id' => '17',
                'ibge' => '3120003',
            ],
            [
                'name' => 'Couto de Magalhaes de Minas',
                'estado_id' => '17',
                'ibge' => '3120102',
            ],
            [
                'name' => 'Crisolita',
                'estado_id' => '17',
                'ibge' => '3120151',
            ],
            [
                'name' => 'Cristais',
                'estado_id' => '17',
                'ibge' => '3120201',
            ],
            [
                'name' => 'Cristalia',
                'estado_id' => '17',
                'ibge' => '3120300',
            ],
            [
                'name' => 'Cristiano Otoni',
                'estado_id' => '17',
                'ibge' => '3120409',
            ],
            [
                'name' => 'Cristina',
                'estado_id' => '17',
                'ibge' => '3120508',
            ],
            [
                'name' => 'Crucilandia',
                'estado_id' => '17',
                'ibge' => '3120607',
            ],
            [
                'name' => 'Cruzeiro da Fortaleza',
                'estado_id' => '17',
                'ibge' => '3120706',
            ],
            [
                'name' => 'Cruzilia',
                'estado_id' => '17',
                'ibge' => '3120805',
            ],
            [
                'name' => 'Cuparaque',
                'estado_id' => '17',
                'ibge' => '3120839',
            ],
            [
                'name' => 'Curral de Dentro',
                'estado_id' => '17',
                'ibge' => '3120870',
            ],
            [
                'name' => 'Curvelo',
                'estado_id' => '17',
                'ibge' => '3120904',
            ],
            [
                'name' => 'Datas',
                'estado_id' => '17',
                'ibge' => '3121001',
            ],
            [
                'name' => 'Delfim Moreira',
                'estado_id' => '17',
                'ibge' => '3121100',
            ],
            [
                'name' => 'Delfinopolis',
                'estado_id' => '17',
                'ibge' => '3121209',
            ],
            [
                'name' => 'Delta',
                'estado_id' => '17',
                'ibge' => '3121258',
            ],
            [
                'name' => 'Descoberto',
                'estado_id' => '17',
                'ibge' => '3121308',
            ],
            [
                'name' => 'Desterro de Entre Rios',
                'estado_id' => '17',
                'ibge' => '3121407',
            ],
            [
                'name' => 'Desterro do Melo',
                'estado_id' => '17',
                'ibge' => '3121506',
            ],
            [
                'name' => 'Diamantina',
                'estado_id' => '17',
                'ibge' => '3121605',
            ],
            [
                'name' => 'Diogo de Vasconcelos',
                'estado_id' => '17',
                'ibge' => '3121704',
            ],
            [
                'name' => 'Dionisio',
                'estado_id' => '17',
                'ibge' => '3121803',
            ],
            [
                'name' => 'Divinesia',
                'estado_id' => '17',
                'ibge' => '3121902',
            ],
            [
                'name' => 'Divino',
                'estado_id' => '17',
                'ibge' => '3122009',
            ],
            [
                'name' => 'Divino das Laranjeiras',
                'estado_id' => '17',
                'ibge' => '3122108',
            ],
            [
                'name' => 'Divinolandia de Minas',
                'estado_id' => '17',
                'ibge' => '3122207',
            ],
            [
                'name' => 'Divinopolis',
                'estado_id' => '17',
                'ibge' => '3122306',
            ],
            [
                'name' => 'Divisa Alegre',
                'estado_id' => '17',
                'ibge' => '3122355',
            ],
            [
                'name' => 'Divisa Nova',
                'estado_id' => '17',
                'ibge' => '3122405',
            ],
            [
                'name' => 'Divisopolis',
                'estado_id' => '17',
                'ibge' => '3122454',
            ],
            [
                'name' => 'Dom Bosco',
                'estado_id' => '17',
                'ibge' => '3122470',
            ],
            [
                'name' => 'Dom Cavati',
                'estado_id' => '17',
                'ibge' => '3122504',
            ],
            [
                'name' => 'Dom Joaquim',
                'estado_id' => '17',
                'ibge' => '3122603',
            ],
            [
                'name' => 'Dom Silverio',
                'estado_id' => '17',
                'ibge' => '3122702',
            ],
            [
                'name' => 'Dom Vicoso',
                'estado_id' => '17',
                'ibge' => '3122801',
            ],
            [
                'name' => 'Dona Eusebia',
                'estado_id' => '17',
                'ibge' => '3122900',
            ],
            [
                'name' => 'Dores de Campos',
                'estado_id' => '17',
                'ibge' => '3123007',
            ],
            [
                'name' => 'Dores de Guanhaes',
                'estado_id' => '17',
                'ibge' => '3123106',
            ],
            [
                'name' => 'Dores do Indaia',
                'estado_id' => '17',
                'ibge' => '3123205',
            ],
            [
                'name' => 'Dores do Turvo',
                'estado_id' => '17',
                'ibge' => '3123304',
            ],
            [
                'name' => 'Doresopolis',
                'estado_id' => '17',
                'ibge' => '3123403',
            ],
            [
                'name' => 'Douradoquara',
                'estado_id' => '17',
                'ibge' => '3123502',
            ],
            [
                'name' => 'Durande',
                'estado_id' => '17',
                'ibge' => '3123528',
            ],
            [
                'name' => 'Eloi Mendes',
                'estado_id' => '17',
                'ibge' => '3123601',
            ],
            [
                'name' => 'Engenheiro Caldas',
                'estado_id' => '17',
                'ibge' => '3123700',
            ],
            [
                'name' => 'Engenheiro Navarro',
                'estado_id' => '17',
                'ibge' => '3123809',
            ],
            [
                'name' => 'Entre Folhas',
                'estado_id' => '17',
                'ibge' => '3123858',
            ],
            [
                'name' => 'Entre Rios de Minas',
                'estado_id' => '17',
                'ibge' => '3123908',
            ],
            [
                'name' => 'Ervalia',
                'estado_id' => '17',
                'ibge' => '3124005',
            ],
            [
                'name' => 'Esmeraldas',
                'estado_id' => '17',
                'ibge' => '3124104',
            ],
            [
                'name' => 'Espera Feliz',
                'estado_id' => '17',
                'ibge' => '3124203',
            ],
            [
                'name' => 'Espinosa',
                'estado_id' => '17',
                'ibge' => '3124302',
            ],
            [
                'name' => 'Espirito Santo do Dourado',
                'estado_id' => '17',
                'ibge' => '3124401',
            ],
            [
                'name' => 'Estiva',
                'estado_id' => '17',
                'ibge' => '3124500',
            ],
            [
                'name' => 'Estrela Dalva',
                'estado_id' => '17',
                'ibge' => '3124609',
            ],
            [
                'name' => 'Estrela do Indaia',
                'estado_id' => '17',
                'ibge' => '3124708',
            ],
            [
                'name' => 'Estrela do Sul',
                'estado_id' => '17',
                'ibge' => '3124807',
            ],
            [
                'name' => 'Eugenopolis',
                'estado_id' => '17',
                'ibge' => '3124906',
            ],
            [
                'name' => 'Ewbank da Camara',
                'estado_id' => '17',
                'ibge' => '3125002',
            ],
            [
                'name' => 'Extrema',
                'estado_id' => '17',
                'ibge' => '3125101',
            ],
            [
                'name' => 'Fama',
                'estado_id' => '17',
                'ibge' => '3125200',
            ],
            [
                'name' => 'Faria Lemos',
                'estado_id' => '17',
                'ibge' => '3125309',
            ],
            [
                'name' => 'Felicio dos Santos',
                'estado_id' => '17',
                'ibge' => '3125408',
            ],
            [
                'name' => 'Sao Goncalo do Rio Preto',
                'estado_id' => '17',
                'ibge' => '3125507',
            ],
            [
                'name' => 'Felisburgo',
                'estado_id' => '17',
                'ibge' => '3125606',
            ],
            [
                'name' => 'Felixlandia',
                'estado_id' => '17',
                'ibge' => '3125705',
            ],
            [
                'name' => 'Fernandes Tourinho',
                'estado_id' => '17',
                'ibge' => '3125804',
            ],
            [
                'name' => 'Ferros',
                'estado_id' => '17',
                'ibge' => '3125903',
            ],
            [
                'name' => 'Fervedouro',
                'estado_id' => '17',
                'ibge' => '3125952',
            ],
            [
                'name' => 'Florestal',
                'estado_id' => '17',
                'ibge' => '3126000',
            ],
            [
                'name' => 'Formiga',
                'estado_id' => '17',
                'ibge' => '3126109',
            ],
            [
                'name' => 'Formoso',
                'estado_id' => '17',
                'ibge' => '3126208',
            ],
            [
                'name' => 'Fortaleza de Minas',
                'estado_id' => '17',
                'ibge' => '3126307',
            ],
            [
                'name' => 'Fortuna de Minas',
                'estado_id' => '17',
                'ibge' => '3126406',
            ],
            [
                'name' => 'Francisco Badaro',
                'estado_id' => '17',
                'ibge' => '3126505',
            ],
            [
                'name' => 'Francisco Dumont',
                'estado_id' => '17',
                'ibge' => '3126604',
            ],
            [
                'name' => 'Francisco Sa',
                'estado_id' => '17',
                'ibge' => '3126703',
            ],
            [
                'name' => 'Franciscopolis',
                'estado_id' => '17',
                'ibge' => '3126752',
            ],
            [
                'name' => 'Frei Gaspar',
                'estado_id' => '17',
                'ibge' => '3126802',
            ],
            [
                'name' => 'Frei Inoc�ncio',
                'estado_id' => '17',
                'ibge' => '3126901',
            ],
            [
                'name' => 'Frei Lagonegro',
                'estado_id' => '17',
                'ibge' => '3126950',
            ],
            [
                'name' => 'Fronteira',
                'estado_id' => '17',
                'ibge' => '3127008',
            ],
            [
                'name' => 'Fronteira dos Vales',
                'estado_id' => '17',
                'ibge' => '3127057',
            ],
            [
                'name' => 'Fruta de Leite',
                'estado_id' => '17',
                'ibge' => '3127073',
            ],
            [
                'name' => 'Frutal',
                'estado_id' => '17',
                'ibge' => '3127107',
            ],
            [
                'name' => 'Funilandia',
                'estado_id' => '17',
                'ibge' => '3127206',
            ],
            [
                'name' => 'Galileia',
                'estado_id' => '17',
                'ibge' => '3127305',
            ],
            [
                'name' => 'Gameleiras',
                'estado_id' => '17',
                'ibge' => '3127339',
            ],
            [
                'name' => 'Glaucilandia',
                'estado_id' => '17',
                'ibge' => '3127354',
            ],
            [
                'name' => 'Goiabeira',
                'estado_id' => '17',
                'ibge' => '3127370',
            ],
            [
                'name' => 'Goiana',
                'estado_id' => '17',
                'ibge' => '3127388',
            ],
            [
                'name' => 'Goncalves',
                'estado_id' => '17',
                'ibge' => '3127404',
            ],
            [
                'name' => 'Gonzaga',
                'estado_id' => '17',
                'ibge' => '3127503',
            ],
            [
                'name' => 'Gouveia',
                'estado_id' => '17',
                'ibge' => '3127602',
            ],
            [
                'name' => 'Governador Valadares',
                'estado_id' => '17',
                'ibge' => '3127701',
            ],
            [
                'name' => 'Grao Mogol',
                'estado_id' => '17',
                'ibge' => '3127800',
            ],
            [
                'name' => 'Grupiara',
                'estado_id' => '17',
                'ibge' => '3127909',
            ],
            [
                'name' => 'Guanhaes',
                'estado_id' => '17',
                'ibge' => '3128006',
            ],
            [
                'name' => 'Guape',
                'estado_id' => '17',
                'ibge' => '3128105',
            ],
            [
                'name' => 'Guaraciaba',
                'estado_id' => '17',
                'ibge' => '3128204',
            ],
            [
                'name' => 'Guaraciama',
                'estado_id' => '17',
                'ibge' => '3128253',
            ],
            [
                'name' => 'Guaranesia',
                'estado_id' => '17',
                'ibge' => '3128303',
            ],
            [
                'name' => 'Guarani',
                'estado_id' => '17',
                'ibge' => '3128402',
            ],
            [
                'name' => 'Guarara',
                'estado_id' => '17',
                'ibge' => '3128501',
            ],
            [
                'name' => 'Guarda-Mor',
                'estado_id' => '17',
                'ibge' => '3128600',
            ],
            [
                'name' => 'Guaxupe',
                'estado_id' => '17',
                'ibge' => '3128709',
            ],
            [
                'name' => 'Guidoval',
                'estado_id' => '17',
                'ibge' => '3128808',
            ],
            [
                'name' => 'Guimarania',
                'estado_id' => '17',
                'ibge' => '3128907',
            ],
            [
                'name' => 'Guiricema',
                'estado_id' => '17',
                'ibge' => '3129004',
            ],
            [
                'name' => 'Gurinhata',
                'estado_id' => '17',
                'ibge' => '3129103',
            ],
            [
                'name' => 'Heliodora',
                'estado_id' => '17',
                'ibge' => '3129202',
            ],
            [
                'name' => 'Iapu',
                'estado_id' => '17',
                'ibge' => '3129301',
            ],
            [
                'name' => 'Ibertioga',
                'estado_id' => '17',
                'ibge' => '3129400',
            ],
            [
                'name' => 'Ibia',
                'estado_id' => '17',
                'ibge' => '3129509',
            ],
            [
                'name' => 'Ibiai',
                'estado_id' => '17',
                'ibge' => '3129608',
            ],
            [
                'name' => 'Ibiracatu',
                'estado_id' => '17',
                'ibge' => '3129657',
            ],
            [
                'name' => 'Ibiraci',
                'estado_id' => '17',
                'ibge' => '3129707',
            ],
            [
                'name' => 'Ibirite',
                'estado_id' => '17',
                'ibge' => '3129806',
            ],
            [
                'name' => 'Ibiti�ra de Minas',
                'estado_id' => '17',
                'ibge' => '3129905',
            ],
            [
                'name' => 'Ibituruna',
                'estado_id' => '17',
                'ibge' => '3130002',
            ],
            [
                'name' => 'Icarai de Minas',
                'estado_id' => '17',
                'ibge' => '3130051',
            ],
            [
                'name' => 'Igarape',
                'estado_id' => '17',
                'ibge' => '3130101',
            ],
            [
                'name' => 'Igaratinga',
                'estado_id' => '17',
                'ibge' => '3130200',
            ],
            [
                'name' => 'Iguatama',
                'estado_id' => '17',
                'ibge' => '3130309',
            ],
            [
                'name' => 'Ijaci',
                'estado_id' => '17',
                'ibge' => '3130408',
            ],
            [
                'name' => 'Ilicinea',
                'estado_id' => '17',
                'ibge' => '3130507',
            ],
            [
                'name' => 'Imbe de Minas',
                'estado_id' => '17',
                'ibge' => '3130556',
            ],
            [
                'name' => 'Inconfidentes',
                'estado_id' => '17',
                'ibge' => '3130606',
            ],
            [
                'name' => 'Indaiabira',
                'estado_id' => '17',
                'ibge' => '3130655',
            ],
            [
                'name' => 'Indianopolis',
                'estado_id' => '17',
                'ibge' => '3130705',
            ],
            [
                'name' => 'Ingai',
                'estado_id' => '17',
                'ibge' => '3130804',
            ],
            [
                'name' => 'Inhapim',
                'estado_id' => '17',
                'ibge' => '3130903',
            ],
            [
                'name' => 'Inha�ma',
                'estado_id' => '17',
                'ibge' => '3131000',
            ],
            [
                'name' => 'Inimutaba',
                'estado_id' => '17',
                'ibge' => '3131109',
            ],
            [
                'name' => 'Ipaba',
                'estado_id' => '17',
                'ibge' => '3131158',
            ],
            [
                'name' => 'Ipanema',
                'estado_id' => '17',
                'ibge' => '3131208',
            ],
            [
                'name' => 'Ipatinga',
                'estado_id' => '17',
                'ibge' => '3131307',
            ],
            [
                'name' => 'Ipiacu',
                'estado_id' => '17',
                'ibge' => '3131406',
            ],
            [
                'name' => 'Ipui�na',
                'estado_id' => '17',
                'ibge' => '3131505',
            ],
            [
                'name' => 'Irai de Minas',
                'estado_id' => '17',
                'ibge' => '3131604',
            ],
            [
                'name' => 'Itabira',
                'estado_id' => '17',
                'ibge' => '3131703',
            ],
            [
                'name' => 'Itabirinha',
                'estado_id' => '17',
                'ibge' => '3131802',
            ],
            [
                'name' => 'Itabirito',
                'estado_id' => '17',
                'ibge' => '3131901',
            ],
            [
                'name' => 'Itacambira',
                'estado_id' => '17',
                'ibge' => '3132008',
            ],
            [
                'name' => 'Itacarambi',
                'estado_id' => '17',
                'ibge' => '3132107',
            ],
            [
                'name' => 'Itaguara',
                'estado_id' => '17',
                'ibge' => '3132206',
            ],
            [
                'name' => 'Itaipe',
                'estado_id' => '17',
                'ibge' => '3132305',
            ],
            [
                'name' => 'Itajuba',
                'estado_id' => '17',
                'ibge' => '3132404',
            ],
            [
                'name' => 'Itamarandiba',
                'estado_id' => '17',
                'ibge' => '3132503',
            ],
            [
                'name' => 'Itamarati de Minas',
                'estado_id' => '17',
                'ibge' => '3132602',
            ],
            [
                'name' => 'Itambacuri',
                'estado_id' => '17',
                'ibge' => '3132701',
            ],
            [
                'name' => 'Itambe do Mato Dentro',
                'estado_id' => '17',
                'ibge' => '3132800',
            ],
            [
                'name' => 'Itamogi',
                'estado_id' => '17',
                'ibge' => '3132909',
            ],
            [
                'name' => 'Itamonte',
                'estado_id' => '17',
                'ibge' => '3133006',
            ],
            [
                'name' => 'Itanhandu',
                'estado_id' => '17',
                'ibge' => '3133105',
            ],
            [
                'name' => 'Itanhomi',
                'estado_id' => '17',
                'ibge' => '3133204',
            ],
            [
                'name' => 'Itaobim',
                'estado_id' => '17',
                'ibge' => '3133303',
            ],
            [
                'name' => 'Itapagipe',
                'estado_id' => '17',
                'ibge' => '3133402',
            ],
            [
                'name' => 'Itapecerica',
                'estado_id' => '17',
                'ibge' => '3133501',
            ],
            [
                'name' => 'Itapeva',
                'estado_id' => '17',
                'ibge' => '3133600',
            ],
            [
                'name' => 'Itatiaiucu',
                'estado_id' => '17',
                'ibge' => '3133709',
            ],
            [
                'name' => 'Ita� de Minas',
                'estado_id' => '17',
                'ibge' => '3133758',
            ],
            [
                'name' => 'Ita�na',
                'estado_id' => '17',
                'ibge' => '3133808',
            ],
            [
                'name' => 'Itaverava',
                'estado_id' => '17',
                'ibge' => '3133907',
            ],
            [
                'name' => 'Itinga',
                'estado_id' => '17',
                'ibge' => '3134004',
            ],
            [
                'name' => 'Itueta',
                'estado_id' => '17',
                'ibge' => '3134103',
            ],
            [
                'name' => 'Ituiutaba',
                'estado_id' => '17',
                'ibge' => '3134202',
            ],
            [
                'name' => 'Itumirim',
                'estado_id' => '17',
                'ibge' => '3134301',
            ],
            [
                'name' => 'Iturama',
                'estado_id' => '17',
                'ibge' => '3134400',
            ],
            [
                'name' => 'Itutinga',
                'estado_id' => '17',
                'ibge' => '3134509',
            ],
            [
                'name' => 'Jaboticatubas',
                'estado_id' => '17',
                'ibge' => '3134608',
            ],
            [
                'name' => 'Jacinto',
                'estado_id' => '17',
                'ibge' => '3134707',
            ],
            [
                'name' => 'Jacui',
                'estado_id' => '17',
                'ibge' => '3134806',
            ],
            [
                'name' => 'Jacutinga',
                'estado_id' => '17',
                'ibge' => '3134905',
            ],
            [
                'name' => 'Jaguaracu',
                'estado_id' => '17',
                'ibge' => '3135001',
            ],
            [
                'name' => 'Jaiba',
                'estado_id' => '17',
                'ibge' => '3135050',
            ],
            [
                'name' => 'Jampruca',
                'estado_id' => '17',
                'ibge' => '3135076',
            ],
            [
                'name' => 'Jana�ba',
                'estado_id' => '17',
                'ibge' => '3135100',
            ],
            [
                'name' => 'Januaria',
                'estado_id' => '17',
                'ibge' => '3135209',
            ],
            [
                'name' => 'Japaraiba',
                'estado_id' => '17',
                'ibge' => '3135308',
            ],
            [
                'name' => 'Japonvar',
                'estado_id' => '17',
                'ibge' => '3135357',
            ],
            [
                'name' => 'Jeceaba',
                'estado_id' => '17',
                'ibge' => '3135407',
            ],
            [
                'name' => 'Jenipapo de Minas',
                'estado_id' => '17',
                'ibge' => '3135456',
            ],
            [
                'name' => 'Jequeri',
                'estado_id' => '17',
                'ibge' => '3135506',
            ],
            [
                'name' => 'Jequitai',
                'estado_id' => '17',
                'ibge' => '3135605',
            ],
            [
                'name' => 'Jequitiba',
                'estado_id' => '17',
                'ibge' => '3135704',
            ],
            [
                'name' => 'Jequitinhonha',
                'estado_id' => '17',
                'ibge' => '3135803',
            ],
            [
                'name' => 'Jesuania',
                'estado_id' => '17',
                'ibge' => '3135902',
            ],
            [
                'name' => 'Joaima',
                'estado_id' => '17',
                'ibge' => '3136009',
            ],
            [
                'name' => 'Joanesia',
                'estado_id' => '17',
                'ibge' => '3136108',
            ],
            [
                'name' => 'Joao Monlevade',
                'estado_id' => '17',
                'ibge' => '3136207',
            ],
            [
                'name' => 'Joao Pinheiro',
                'estado_id' => '17',
                'ibge' => '3136306',
            ],
            [
                'name' => 'Joaquim Felicio',
                'estado_id' => '17',
                'ibge' => '3136405',
            ],
            [
                'name' => 'Jordania',
                'estado_id' => '17',
                'ibge' => '3136504',
            ],
            [
                'name' => 'Jose Goncalves de Minas',
                'estado_id' => '17',
                'ibge' => '3136520',
            ],
            [
                'name' => 'Jose Raydan',
                'estado_id' => '17',
                'ibge' => '3136553',
            ],
            [
                'name' => 'Josenopolis',
                'estado_id' => '17',
                'ibge' => '3136579',
            ],
            [
                'name' => 'Nova Uniao',
                'estado_id' => '17',
                'ibge' => '3136603',
            ],
            [
                'name' => 'Juatuba',
                'estado_id' => '17',
                'ibge' => '3136652',
            ],
            [
                'name' => 'Juiz de Fora',
                'estado_id' => '17',
                'ibge' => '3136702',
            ],
            [
                'name' => 'Juramento',
                'estado_id' => '17',
                'ibge' => '3136801',
            ],
            [
                'name' => 'Juruaia',
                'estado_id' => '17',
                'ibge' => '3136900',
            ],
            [
                'name' => 'Juvenilia',
                'estado_id' => '17',
                'ibge' => '3136959',
            ],
            [
                'name' => 'Ladainha',
                'estado_id' => '17',
                'ibge' => '3137007',
            ],
            [
                'name' => 'Lagamar',
                'estado_id' => '17',
                'ibge' => '3137106',
            ],
            [
                'name' => 'Lagoa da Prata',
                'estado_id' => '17',
                'ibge' => '3137205',
            ],
            [
                'name' => 'Lagoa dos Patos',
                'estado_id' => '17',
                'ibge' => '3137304',
            ],
            [
                'name' => 'Lagoa Dourada',
                'estado_id' => '17',
                'ibge' => '3137403',
            ],
            [
                'name' => 'Lagoa Formosa',
                'estado_id' => '17',
                'ibge' => '3137502',
            ],
            [
                'name' => 'Lagoa Grande',
                'estado_id' => '17',
                'ibge' => '3137536',
            ],
            [
                'name' => 'Lagoa Santa',
                'estado_id' => '17',
                'ibge' => '3137601',
            ],
            [
                'name' => 'Lajinha',
                'estado_id' => '17',
                'ibge' => '3137700',
            ],
            [
                'name' => 'Lambari',
                'estado_id' => '17',
                'ibge' => '3137809',
            ],
            [
                'name' => 'Lamim',
                'estado_id' => '17',
                'ibge' => '3137908',
            ],
            [
                'name' => 'Laranjal',
                'estado_id' => '17',
                'ibge' => '3138005',
            ],
            [
                'name' => 'Lassance',
                'estado_id' => '17',
                'ibge' => '3138104',
            ],
            [
                'name' => 'Lavras',
                'estado_id' => '17',
                'ibge' => '3138203',
            ],
            [
                'name' => 'Leandro Ferreira',
                'estado_id' => '17',
                'ibge' => '3138302',
            ],
            [
                'name' => 'Leme do Prado',
                'estado_id' => '17',
                'ibge' => '3138351',
            ],
            [
                'name' => 'Leopoldina',
                'estado_id' => '17',
                'ibge' => '3138401',
            ],
            [
                'name' => 'Liberdade',
                'estado_id' => '17',
                'ibge' => '3138500',
            ],
            [
                'name' => 'Lima Duarte',
                'estado_id' => '17',
                'ibge' => '3138609',
            ],
            [
                'name' => 'Limeira do Oeste',
                'estado_id' => '17',
                'ibge' => '3138625',
            ],
            [
                'name' => 'Lontra',
                'estado_id' => '17',
                'ibge' => '3138658',
            ],
            [
                'name' => 'Luisburgo',
                'estado_id' => '17',
                'ibge' => '3138674',
            ],
            [
                'name' => 'Luislandia',
                'estado_id' => '17',
                'ibge' => '3138682',
            ],
            [
                'name' => 'Luminarias',
                'estado_id' => '17',
                'ibge' => '3138708',
            ],
            [
                'name' => 'Luz',
                'estado_id' => '17',
                'ibge' => '3138807',
            ],
            [
                'name' => 'Machacalis',
                'estado_id' => '17',
                'ibge' => '3138906',
            ],
            [
                'name' => 'Machado',
                'estado_id' => '17',
                'ibge' => '3139003',
            ],
            [
                'name' => 'Madre de Deus de Minas',
                'estado_id' => '17',
                'ibge' => '3139102',
            ],
            [
                'name' => 'Malacacheta',
                'estado_id' => '17',
                'ibge' => '3139201',
            ],
            [
                'name' => 'Mamonas',
                'estado_id' => '17',
                'ibge' => '3139250',
            ],
            [
                'name' => 'Manga',
                'estado_id' => '17',
                'ibge' => '3139300',
            ],
            [
                'name' => 'Manhuacu',
                'estado_id' => '17',
                'ibge' => '3139409',
            ],
            [
                'name' => 'Manhumirim',
                'estado_id' => '17',
                'ibge' => '3139508',
            ],
            [
                'name' => 'Mantena',
                'estado_id' => '17',
                'ibge' => '3139607',
            ],
            [
                'name' => 'Maravilhas',
                'estado_id' => '17',
                'ibge' => '3139706',
            ],
            [
                'name' => 'Mar de Espanha',
                'estado_id' => '17',
                'ibge' => '3139805',
            ],
            [
                'name' => 'Maria da Fe',
                'estado_id' => '17',
                'ibge' => '3139904',
            ],
            [
                'name' => 'Mariana',
                'estado_id' => '17',
                'ibge' => '3140001',
            ],
            [
                'name' => 'Marilac',
                'estado_id' => '17',
                'ibge' => '3140100',
            ],
            [
                'name' => 'Mario Campos',
                'estado_id' => '17',
                'ibge' => '3140159',
            ],
            [
                'name' => 'Maripa de Minas',
                'estado_id' => '17',
                'ibge' => '3140209',
            ],
            [
                'name' => 'Marlieria',
                'estado_id' => '17',
                'ibge' => '3140308',
            ],
            [
                'name' => 'Marmelopolis',
                'estado_id' => '17',
                'ibge' => '3140407',
            ],
            [
                'name' => 'Martinho Campos',
                'estado_id' => '17',
                'ibge' => '3140506',
            ],
            [
                'name' => 'Martins Soares',
                'estado_id' => '17',
                'ibge' => '3140530',
            ],
            [
                'name' => 'Mata Verde',
                'estado_id' => '17',
                'ibge' => '3140555',
            ],
            [
                'name' => 'Materlandia',
                'estado_id' => '17',
                'ibge' => '3140605',
            ],
            [
                'name' => 'Mateus Leme',
                'estado_id' => '17',
                'ibge' => '3140704',
            ],
            [
                'name' => 'Matias Barbosa',
                'estado_id' => '17',
                'ibge' => '3140803',
            ],
            [
                'name' => 'Matias Cardoso',
                'estado_id' => '17',
                'ibge' => '3140852',
            ],
            [
                'name' => 'Matipo',
                'estado_id' => '17',
                'ibge' => '3140902',
            ],
            [
                'name' => 'Mato Verde',
                'estado_id' => '17',
                'ibge' => '3141009',
            ],
            [
                'name' => 'Matozinhos',
                'estado_id' => '17',
                'ibge' => '3141108',
            ],
            [
                'name' => 'Matutina',
                'estado_id' => '17',
                'ibge' => '3141207',
            ],
            [
                'name' => 'Medeiros',
                'estado_id' => '17',
                'ibge' => '3141306',
            ],
            [
                'name' => 'Medina',
                'estado_id' => '17',
                'ibge' => '3141405',
            ],
            [
                'name' => 'Mendes Pimentel',
                'estado_id' => '17',
                'ibge' => '3141504',
            ],
            [
                'name' => 'Merc�s',
                'estado_id' => '17',
                'ibge' => '3141603',
            ],
            [
                'name' => 'Mesquita',
                'estado_id' => '17',
                'ibge' => '3141702',
            ],
            [
                'name' => 'Minas Novas',
                'estado_id' => '17',
                'ibge' => '3141801',
            ],
            [
                'name' => 'Minduri',
                'estado_id' => '17',
                'ibge' => '3141900',
            ],
            [
                'name' => 'Mirabela',
                'estado_id' => '17',
                'ibge' => '3142007',
            ],
            [
                'name' => 'Miradouro',
                'estado_id' => '17',
                'ibge' => '3142106',
            ],
            [
                'name' => 'Mirai',
                'estado_id' => '17',
                'ibge' => '3142205',
            ],
            [
                'name' => 'Miravania',
                'estado_id' => '17',
                'ibge' => '3142254',
            ],
            [
                'name' => 'Moeda',
                'estado_id' => '17',
                'ibge' => '3142304',
            ],
            [
                'name' => 'Moema',
                'estado_id' => '17',
                'ibge' => '3142403',
            ],
            [
                'name' => 'Monjolos',
                'estado_id' => '17',
                'ibge' => '3142502',
            ],
            [
                'name' => 'Monsenhor Paulo',
                'estado_id' => '17',
                'ibge' => '3142601',
            ],
            [
                'name' => 'Montalvania',
                'estado_id' => '17',
                'ibge' => '3142700',
            ],
            [
                'name' => 'Monte Alegre de Minas',
                'estado_id' => '17',
                'ibge' => '3142809',
            ],
            [
                'name' => 'Monte Azul',
                'estado_id' => '17',
                'ibge' => '3142908',
            ],
            [
                'name' => 'Monte Belo',
                'estado_id' => '17',
                'ibge' => '3143005',
            ],
            [
                'name' => 'Monte Carmelo',
                'estado_id' => '17',
                'ibge' => '3143104',
            ],
            [
                'name' => 'Monte Formoso',
                'estado_id' => '17',
                'ibge' => '3143153',
            ],
            [
                'name' => 'Monte Santo de Minas',
                'estado_id' => '17',
                'ibge' => '3143203',
            ],
            [
                'name' => 'Montes Claros',
                'estado_id' => '17',
                'ibge' => '3143302',
            ],
            [
                'name' => 'Monte Siao',
                'estado_id' => '17',
                'ibge' => '3143401',
            ],
            [
                'name' => 'Montezuma',
                'estado_id' => '17',
                'ibge' => '3143450',
            ],
            [
                'name' => 'Morada Nova de Minas',
                'estado_id' => '17',
                'ibge' => '3143500',
            ],
            [
                'name' => 'Morro da Garca',
                'estado_id' => '17',
                'ibge' => '3143609',
            ],
            [
                'name' => 'Morro do Pilar',
                'estado_id' => '17',
                'ibge' => '3143708',
            ],
            [
                'name' => 'Munhoz',
                'estado_id' => '17',
                'ibge' => '3143807',
            ],
            [
                'name' => 'Muriae',
                'estado_id' => '17',
                'ibge' => '3143906',
            ],
            [
                'name' => 'Mutum',
                'estado_id' => '17',
                'ibge' => '3144003',
            ],
            [
                'name' => 'Muzambinho',
                'estado_id' => '17',
                'ibge' => '3144102',
            ],
            [
                'name' => 'Nacip Raydan',
                'estado_id' => '17',
                'ibge' => '3144201',
            ],
            [
                'name' => 'Nanuque',
                'estado_id' => '17',
                'ibge' => '3144300',
            ],
            [
                'name' => 'Naque',
                'estado_id' => '17',
                'ibge' => '3144359',
            ],
            [
                'name' => 'Natalandia',
                'estado_id' => '17',
                'ibge' => '3144375',
            ],
            [
                'name' => 'Natercia',
                'estado_id' => '17',
                'ibge' => '3144409',
            ],
            [
                'name' => 'Nazareno',
                'estado_id' => '17',
                'ibge' => '3144508',
            ],
            [
                'name' => 'Nepomuceno',
                'estado_id' => '17',
                'ibge' => '3144607',
            ],
            [
                'name' => 'Ninheira',
                'estado_id' => '17',
                'ibge' => '3144656',
            ],
            [
                'name' => 'Nova Belem',
                'estado_id' => '17',
                'ibge' => '3144672',
            ],
            [
                'name' => 'Nova Era',
                'estado_id' => '17',
                'ibge' => '3144706',
            ],
            [
                'name' => 'Nova Lima',
                'estado_id' => '17',
                'ibge' => '3144805',
            ],
            [
                'name' => 'Nova Modica',
                'estado_id' => '17',
                'ibge' => '3144904',
            ],
            [
                'name' => 'Nova Ponte',
                'estado_id' => '17',
                'ibge' => '3145000',
            ],
            [
                'name' => 'Nova Porteirinha',
                'estado_id' => '17',
                'ibge' => '3145059',
            ],
            [
                'name' => 'Nova Resende',
                'estado_id' => '17',
                'ibge' => '3145109',
            ],
            [
                'name' => 'Nova Serrana',
                'estado_id' => '17',
                'ibge' => '3145208',
            ],
            [
                'name' => 'Novo Cruzeiro',
                'estado_id' => '17',
                'ibge' => '3145307',
            ],
            [
                'name' => 'Novo Oriente de Minas',
                'estado_id' => '17',
                'ibge' => '3145356',
            ],
            [
                'name' => 'Novorizonte',
                'estado_id' => '17',
                'ibge' => '3145372',
            ],
            [
                'name' => 'Olaria',
                'estado_id' => '17',
                'ibge' => '3145406',
            ],
            [
                'name' => 'Olimpio Noronha',
                'estado_id' => '17',
                'ibge' => '3145505',
            ],
            [
                'name' => 'Oliveira',
                'estado_id' => '17',
                'ibge' => '3145604',
            ],
            [
                'name' => 'Oliveira Fortes',
                'estado_id' => '17',
                'ibge' => '3145703',
            ],
            [
                'name' => 'Onca de Pitangui',
                'estado_id' => '17',
                'ibge' => '3145802',
            ],
            [
                'name' => 'Oratorios',
                'estado_id' => '17',
                'ibge' => '3145851',
            ],
            [
                'name' => 'Orizania',
                'estado_id' => '17',
                'ibge' => '3145877',
            ],
            [
                'name' => 'Ouro Branco',
                'estado_id' => '17',
                'ibge' => '3145901',
            ],
            [
                'name' => 'Ouro Fino',
                'estado_id' => '17',
                'ibge' => '3146008',
            ],
            [
                'name' => 'Ouro Preto',
                'estado_id' => '17',
                'ibge' => '3146107',
            ],
            [
                'name' => 'Ouro Verde de Minas',
                'estado_id' => '17',
                'ibge' => '3146206',
            ],
            [
                'name' => 'Padre Carvalho',
                'estado_id' => '17',
                'ibge' => '3146255',
            ],
            [
                'name' => 'Padre Paraiso',
                'estado_id' => '17',
                'ibge' => '3146305',
            ],
            [
                'name' => 'Paineiras',
                'estado_id' => '17',
                'ibge' => '3146404',
            ],
            [
                'name' => 'Pains',
                'estado_id' => '17',
                'ibge' => '3146503',
            ],
            [
                'name' => 'Pai Pedro',
                'estado_id' => '17',
                'ibge' => '3146552',
            ],
            [
                'name' => 'Paiva',
                'estado_id' => '17',
                'ibge' => '3146602',
            ],
            [
                'name' => 'Palma',
                'estado_id' => '17',
                'ibge' => '3146701',
            ],
            [
                'name' => 'Palmopolis',
                'estado_id' => '17',
                'ibge' => '3146750',
            ],
            [
                'name' => 'Papagaios',
                'estado_id' => '17',
                'ibge' => '3146909',
            ],
            [
                'name' => 'Paracatu',
                'estado_id' => '17',
                'ibge' => '3147006',
            ],
            [
                'name' => 'Para de Minas',
                'estado_id' => '17',
                'ibge' => '3147105',
            ],
            [
                'name' => 'Paraguacu',
                'estado_id' => '17',
                'ibge' => '3147204',
            ],
            [
                'name' => 'Paraisopolis',
                'estado_id' => '17',
                'ibge' => '3147303',
            ],
            [
                'name' => 'Paraopeba',
                'estado_id' => '17',
                'ibge' => '3147402',
            ],
            [
                'name' => 'Passabem',
                'estado_id' => '17',
                'ibge' => '3147501',
            ],
            [
                'name' => 'Passa Quatro',
                'estado_id' => '17',
                'ibge' => '3147600',
            ],
            [
                'name' => 'Passa Tempo',
                'estado_id' => '17',
                'ibge' => '3147709',
            ],
            [
                'name' => 'Passa-Vinte',
                'estado_id' => '17',
                'ibge' => '3147808',
            ],
            [
                'name' => 'Passos',
                'estado_id' => '17',
                'ibge' => '3147907',
            ],
            [
                'name' => 'Patis',
                'estado_id' => '17',
                'ibge' => '3147956',
            ],
            [
                'name' => 'Patos de Minas',
                'estado_id' => '17',
                'ibge' => '3148004',
            ],
            [
                'name' => 'Patrocinio',
                'estado_id' => '17',
                'ibge' => '3148103',
            ],
            [
                'name' => 'Patrocinio do Muriae',
                'estado_id' => '17',
                'ibge' => '3148202',
            ],
            [
                'name' => 'Paula Candido',
                'estado_id' => '17',
                'ibge' => '3148301',
            ],
            [
                'name' => 'Paulistas',
                'estado_id' => '17',
                'ibge' => '3148400',
            ],
            [
                'name' => 'Pavao',
                'estado_id' => '17',
                'ibge' => '3148509',
            ],
            [
                'name' => 'Pecanha',
                'estado_id' => '17',
                'ibge' => '3148608',
            ],
            [
                'name' => 'Pedra Azul',
                'estado_id' => '17',
                'ibge' => '3148707',
            ],
            [
                'name' => 'Pedra Bonita',
                'estado_id' => '17',
                'ibge' => '3148756',
            ],
            [
                'name' => 'Pedra do Anta',
                'estado_id' => '17',
                'ibge' => '3148806',
            ],
            [
                'name' => 'Pedra do Indaia',
                'estado_id' => '17',
                'ibge' => '3148905',
            ],
            [
                'name' => 'Pedra Dourada',
                'estado_id' => '17',
                'ibge' => '3149002',
            ],
            [
                'name' => 'Pedralva',
                'estado_id' => '17',
                'ibge' => '3149101',
            ],
            [
                'name' => 'Pedras de Maria da Cruz',
                'estado_id' => '17',
                'ibge' => '3149150',
            ],
            [
                'name' => 'Pedrinopolis',
                'estado_id' => '17',
                'ibge' => '3149200',
            ],
            [
                'name' => 'Pedro Leopoldo',
                'estado_id' => '17',
                'ibge' => '3149309',
            ],
            [
                'name' => 'Pedro Teixeira',
                'estado_id' => '17',
                'ibge' => '3149408',
            ],
            [
                'name' => 'Pequeri',
                'estado_id' => '17',
                'ibge' => '3149507',
            ],
            [
                'name' => 'Pequi',
                'estado_id' => '17',
                'ibge' => '3149606',
            ],
            [
                'name' => 'Perdigao',
                'estado_id' => '17',
                'ibge' => '3149705',
            ],
            [
                'name' => 'Perdizes',
                'estado_id' => '17',
                'ibge' => '3149804',
            ],
            [
                'name' => 'Perd�es',
                'estado_id' => '17',
                'ibge' => '3149903',
            ],
            [
                'name' => 'Periquito',
                'estado_id' => '17',
                'ibge' => '3149952',
            ],
            [
                'name' => 'Pescador',
                'estado_id' => '17',
                'ibge' => '3150000',
            ],
            [
                'name' => 'Piau',
                'estado_id' => '17',
                'ibge' => '3150109',
            ],
            [
                'name' => 'Piedade de Caratinga',
                'estado_id' => '17',
                'ibge' => '3150158',
            ],
            [
                'name' => 'Piedade de Ponte Nova',
                'estado_id' => '17',
                'ibge' => '3150208',
            ],
            [
                'name' => 'Piedade do Rio Grande',
                'estado_id' => '17',
                'ibge' => '3150307',
            ],
            [
                'name' => 'Piedade dos Gerais',
                'estado_id' => '17',
                'ibge' => '3150406',
            ],
            [
                'name' => 'Pimenta',
                'estado_id' => '17',
                'ibge' => '3150505',
            ],
            [
                'name' => 'Pintopolis',
                'estado_id' => '17',
                'ibge' => '3150570',
            ],
            [
                'name' => 'Piracema',
                'estado_id' => '17',
                'ibge' => '3150604',
            ],
            [
                'name' => 'Pirajuba',
                'estado_id' => '17',
                'ibge' => '3150703',
            ],
            [
                'name' => 'Piranga',
                'estado_id' => '17',
                'ibge' => '3150802',
            ],
            [
                'name' => 'Pirangucu',
                'estado_id' => '17',
                'ibge' => '3150901',
            ],
            [
                'name' => 'Piranguinho',
                'estado_id' => '17',
                'ibge' => '3151008',
            ],
            [
                'name' => 'Pirapetinga',
                'estado_id' => '17',
                'ibge' => '3151107',
            ],
            [
                'name' => 'Pirapora',
                'estado_id' => '17',
                'ibge' => '3151206',
            ],
            [
                'name' => 'Pira�ba',
                'estado_id' => '17',
                'ibge' => '3151305',
            ],
            [
                'name' => 'Pitangui',
                'estado_id' => '17',
                'ibge' => '3151404',
            ],
            [
                'name' => 'Piumhi',
                'estado_id' => '17',
                'ibge' => '3151503',
            ],
            [
                'name' => 'Planura',
                'estado_id' => '17',
                'ibge' => '3151602',
            ],
            [
                'name' => 'Poco Fundo',
                'estado_id' => '17',
                'ibge' => '3151701',
            ],
            [
                'name' => 'Pocos de Caldas',
                'estado_id' => '17',
                'ibge' => '3151800',
            ],
            [
                'name' => 'Pocrane',
                'estado_id' => '17',
                'ibge' => '3151909',
            ],
            [
                'name' => 'Pompeu',
                'estado_id' => '17',
                'ibge' => '3152006',
            ],
            [
                'name' => 'Ponte Nova',
                'estado_id' => '17',
                'ibge' => '3152105',
            ],
            [
                'name' => 'Ponto Chique',
                'estado_id' => '17',
                'ibge' => '3152131',
            ],
            [
                'name' => 'Ponto dos Volantes',
                'estado_id' => '17',
                'ibge' => '3152170',
            ],
            [
                'name' => 'Porteirinha',
                'estado_id' => '17',
                'ibge' => '3152204',
            ],
            [
                'name' => 'Porto Firme',
                'estado_id' => '17',
                'ibge' => '3152303',
            ],
            [
                'name' => 'Pote',
                'estado_id' => '17',
                'ibge' => '3152402',
            ],
            [
                'name' => 'Pouso Alegre',
                'estado_id' => '17',
                'ibge' => '3152501',
            ],
            [
                'name' => 'Pouso Alto',
                'estado_id' => '17',
                'ibge' => '3152600',
            ],
            [
                'name' => 'Prados',
                'estado_id' => '17',
                'ibge' => '3152709',
            ],
            [
                'name' => 'Prata',
                'estado_id' => '17',
                'ibge' => '3152808',
            ],
            [
                'name' => 'Pratapolis',
                'estado_id' => '17',
                'ibge' => '3152907',
            ],
            [
                'name' => 'Pratinha',
                'estado_id' => '17',
                'ibge' => '3153004',
            ],
            [
                'name' => 'Presidente Bernardes',
                'estado_id' => '17',
                'ibge' => '3153103',
            ],
            [
                'name' => 'Presidente Juscelino',
                'estado_id' => '17',
                'ibge' => '3153202',
            ],
            [
                'name' => 'Presidente Kubitschek',
                'estado_id' => '17',
                'ibge' => '3153301',
            ],
            [
                'name' => 'Presidente Olegario',
                'estado_id' => '17',
                'ibge' => '3153400',
            ],
            [
                'name' => 'Alto Jequitiba',
                'estado_id' => '17',
                'ibge' => '3153509',
            ],
            [
                'name' => 'Prudente de Morais',
                'estado_id' => '17',
                'ibge' => '3153608',
            ],
            [
                'name' => 'Quartel Geral',
                'estado_id' => '17',
                'ibge' => '3153707',
            ],
            [
                'name' => 'Queluzito',
                'estado_id' => '17',
                'ibge' => '3153806',
            ],
            [
                'name' => 'Raposos',
                'estado_id' => '17',
                'ibge' => '3153905',
            ],
            [
                'name' => 'Raul Soares',
                'estado_id' => '17',
                'ibge' => '3154002',
            ],
            [
                'name' => 'Recreio',
                'estado_id' => '17',
                'ibge' => '3154101',
            ],
            [
                'name' => 'Reduto',
                'estado_id' => '17',
                'ibge' => '3154150',
            ],
            [
                'name' => 'Resende Costa',
                'estado_id' => '17',
                'ibge' => '3154200',
            ],
            [
                'name' => 'Resplendor',
                'estado_id' => '17',
                'ibge' => '3154309',
            ],
            [
                'name' => 'Ressaquinha',
                'estado_id' => '17',
                'ibge' => '3154408',
            ],
            [
                'name' => 'Riachinho',
                'estado_id' => '17',
                'ibge' => '3154457',
            ],
            [
                'name' => 'Riacho dos Machados',
                'estado_id' => '17',
                'ibge' => '3154507',
            ],
            [
                'name' => 'Ribeirao das Neves',
                'estado_id' => '17',
                'ibge' => '3154606',
            ],
            [
                'name' => 'Ribeirao Vermelho',
                'estado_id' => '17',
                'ibge' => '3154705',
            ],
            [
                'name' => 'Rio Acima',
                'estado_id' => '17',
                'ibge' => '3154804',
            ],
            [
                'name' => 'Rio Casca',
                'estado_id' => '17',
                'ibge' => '3154903',
            ],
            [
                'name' => 'Rio Doce',
                'estado_id' => '17',
                'ibge' => '3155009',
            ],
            [
                'name' => 'Rio do Prado',
                'estado_id' => '17',
                'ibge' => '3155108',
            ],
            [
                'name' => 'Rio Espera',
                'estado_id' => '17',
                'ibge' => '3155207',
            ],
            [
                'name' => 'Rio Manso',
                'estado_id' => '17',
                'ibge' => '3155306',
            ],
            [
                'name' => 'Rio Novo',
                'estado_id' => '17',
                'ibge' => '3155405',
            ],
            [
                'name' => 'Rio Paranaiba',
                'estado_id' => '17',
                'ibge' => '3155504',
            ],
            [
                'name' => 'Rio Pardo de Minas',
                'estado_id' => '17',
                'ibge' => '3155603',
            ],
            [
                'name' => 'Rio Piracicaba',
                'estado_id' => '17',
                'ibge' => '3155702',
            ],
            [
                'name' => 'Rio Pomba',
                'estado_id' => '17',
                'ibge' => '3155801',
            ],
            [
                'name' => 'Rio Preto',
                'estado_id' => '17',
                'ibge' => '3155900',
            ],
            [
                'name' => 'Rio Vermelho',
                'estado_id' => '17',
                'ibge' => '3156007',
            ],
            [
                'name' => 'Ritapolis',
                'estado_id' => '17',
                'ibge' => '3156106',
            ],
            [
                'name' => 'Rochedo de Minas',
                'estado_id' => '17',
                'ibge' => '3156205',
            ],
            [
                'name' => 'Rodeiro',
                'estado_id' => '17',
                'ibge' => '3156304',
            ],
            [
                'name' => 'Romaria',
                'estado_id' => '17',
                'ibge' => '3156403',
            ],
            [
                'name' => 'Rosario da Limeira',
                'estado_id' => '17',
                'ibge' => '3156452',
            ],
            [
                'name' => 'Rubelita',
                'estado_id' => '17',
                'ibge' => '3156502',
            ],
            [
                'name' => 'Rubim',
                'estado_id' => '17',
                'ibge' => '3156601',
            ],
            [
                'name' => 'Sabara',
                'estado_id' => '17',
                'ibge' => '3156700',
            ],
            [
                'name' => 'Sabinopolis',
                'estado_id' => '17',
                'ibge' => '3156809',
            ],
            [
                'name' => 'Sacramento',
                'estado_id' => '17',
                'ibge' => '3156908',
            ],
            [
                'name' => 'Salinas',
                'estado_id' => '17',
                'ibge' => '3157005',
            ],
            [
                'name' => 'Salto da Divisa',
                'estado_id' => '17',
                'ibge' => '3157104',
            ],
            [
                'name' => 'Santa Barbara',
                'estado_id' => '17',
                'ibge' => '3157203',
            ],
            [
                'name' => 'Santa Barbara do Leste',
                'estado_id' => '17',
                'ibge' => '3157252',
            ],
            [
                'name' => 'Santa Barbara do Monte Verde',
                'estado_id' => '17',
                'ibge' => '3157278',
            ],
            [
                'name' => 'Santa Barbara do Tug�rio',
                'estado_id' => '17',
                'ibge' => '3157302',
            ],
            [
                'name' => 'Santa Cruz de Minas',
                'estado_id' => '17',
                'ibge' => '3157336',
            ],
            [
                'name' => 'Santa Cruz de Salinas',
                'estado_id' => '17',
                'ibge' => '3157377',
            ],
            [
                'name' => 'Santa Cruz do Escalvado',
                'estado_id' => '17',
                'ibge' => '3157401',
            ],
            [
                'name' => 'Santa Efig�nia de Minas',
                'estado_id' => '17',
                'ibge' => '3157500',
            ],
            [
                'name' => 'Santa Fe de Minas',
                'estado_id' => '17',
                'ibge' => '3157609',
            ],
            [
                'name' => 'Santa Helena de Minas',
                'estado_id' => '17',
                'ibge' => '3157658',
            ],
            [
                'name' => 'Santa Juliana',
                'estado_id' => '17',
                'ibge' => '3157708',
            ],
            [
                'name' => 'Santa Luzia',
                'estado_id' => '17',
                'ibge' => '3157807',
            ],
            [
                'name' => 'Santa Margarida',
                'estado_id' => '17',
                'ibge' => '3157906',
            ],
            [
                'name' => 'Santa Maria de Itabira',
                'estado_id' => '17',
                'ibge' => '3158003',
            ],
            [
                'name' => 'Santa Maria do Salto',
                'estado_id' => '17',
                'ibge' => '3158102',
            ],
            [
                'name' => 'Santa Maria do Suacui',
                'estado_id' => '17',
                'ibge' => '3158201',
            ],
            [
                'name' => 'Santana da Vargem',
                'estado_id' => '17',
                'ibge' => '3158300',
            ],
            [
                'name' => 'Santana de Cataguases',
                'estado_id' => '17',
                'ibge' => '3158409',
            ],
            [
                'name' => 'Santana de Pirapama',
                'estado_id' => '17',
                'ibge' => '3158508',
            ],
            [
                'name' => 'Santana do Deserto',
                'estado_id' => '17',
                'ibge' => '3158607',
            ],
            [
                'name' => 'Santana do Garambeu',
                'estado_id' => '17',
                'ibge' => '3158706',
            ],
            [
                'name' => 'Santana do Jacare',
                'estado_id' => '17',
                'ibge' => '3158805',
            ],
            [
                'name' => 'Santana do Manhuacu',
                'estado_id' => '17',
                'ibge' => '3158904',
            ],
            [
                'name' => 'Santana do Paraiso',
                'estado_id' => '17',
                'ibge' => '3158953',
            ],
            [
                'name' => 'Santana do Riacho',
                'estado_id' => '17',
                'ibge' => '3159001',
            ],
            [
                'name' => 'Santana dos Montes',
                'estado_id' => '17',
                'ibge' => '3159100',
            ],
            [
                'name' => 'Santa Rita de Caldas',
                'estado_id' => '17',
                'ibge' => '3159209',
            ],
            [
                'name' => 'Santa Rita de Jacutinga',
                'estado_id' => '17',
                'ibge' => '3159308',
            ],
            [
                'name' => 'Santa Rita de Minas',
                'estado_id' => '17',
                'ibge' => '3159357',
            ],
            [
                'name' => 'Santa Rita de Ibitipoca',
                'estado_id' => '17',
                'ibge' => '3159407',
            ],
            [
                'name' => 'Santa Rita do Itueto',
                'estado_id' => '17',
                'ibge' => '3159506',
            ],
            [
                'name' => 'Santa Rita do Sapucai',
                'estado_id' => '17',
                'ibge' => '3159605',
            ],
            [
                'name' => 'Santa Rosa da Serra',
                'estado_id' => '17',
                'ibge' => '3159704',
            ],
            [
                'name' => 'Santa Vitoria',
                'estado_id' => '17',
                'ibge' => '3159803',
            ],
            [
                'name' => 'Santo Antonio do Amparo',
                'estado_id' => '17',
                'ibge' => '3159902',
            ],
            [
                'name' => 'Santo Antonio do Aventureiro',
                'estado_id' => '17',
                'ibge' => '3160009',
            ],
            [
                'name' => 'Santo Antonio do Grama',
                'estado_id' => '17',
                'ibge' => '3160108',
            ],
            [
                'name' => 'Santo Antonio do Itambe',
                'estado_id' => '17',
                'ibge' => '3160207',
            ],
            [
                'name' => 'Santo Antonio do Jacinto',
                'estado_id' => '17',
                'ibge' => '3160306',
            ],
            [
                'name' => 'Santo Antonio do Monte',
                'estado_id' => '17',
                'ibge' => '3160405',
            ],
            [
                'name' => 'Santo Antonio do Retiro',
                'estado_id' => '17',
                'ibge' => '3160454',
            ],
            [
                'name' => 'Santo Antonio do Rio Abaixo',
                'estado_id' => '17',
                'ibge' => '3160504',
            ],
            [
                'name' => 'Santo Hipolito',
                'estado_id' => '17',
                'ibge' => '3160603',
            ],
            [
                'name' => 'Santos Dumont',
                'estado_id' => '17',
                'ibge' => '3160702',
            ],
            [
                'name' => 'Sao Bento Abade',
                'estado_id' => '17',
                'ibge' => '3160801',
            ],
            [
                'name' => 'Sao Bras do Suacui',
                'estado_id' => '17',
                'ibge' => '3160900',
            ],
            [
                'name' => 'Sao Domingos das Dores',
                'estado_id' => '17',
                'ibge' => '3160959',
            ],
            [
                'name' => 'Sao Domingos do Prata',
                'estado_id' => '17',
                'ibge' => '3161007',
            ],
            [
                'name' => 'Sao Felix de Minas',
                'estado_id' => '17',
                'ibge' => '3161056',
            ],
            [
                'name' => 'Sao Francisco',
                'estado_id' => '17',
                'ibge' => '3161106',
            ],
            [
                'name' => 'Sao Francisco de Paula',
                'estado_id' => '17',
                'ibge' => '3161205',
            ],
            [
                'name' => 'Sao Francisco de Sales',
                'estado_id' => '17',
                'ibge' => '3161304',
            ],
            [
                'name' => 'Sao Francisco do Gloria',
                'estado_id' => '17',
                'ibge' => '3161403',
            ],
            [
                'name' => 'Sao Geraldo',
                'estado_id' => '17',
                'ibge' => '3161502',
            ],
            [
                'name' => 'Sao Geraldo da Piedade',
                'estado_id' => '17',
                'ibge' => '3161601',
            ],
            [
                'name' => 'Sao Geraldo do Baixio',
                'estado_id' => '17',
                'ibge' => '3161650',
            ],
            [
                'name' => 'Sao Goncalo do Abaete',
                'estado_id' => '17',
                'ibge' => '3161700',
            ],
            [
                'name' => 'Sao Goncalo do Para',
                'estado_id' => '17',
                'ibge' => '3161809',
            ],
            [
                'name' => 'Sao Goncalo do Rio Abaixo',
                'estado_id' => '17',
                'ibge' => '3161908',
            ],
            [
                'name' => 'Sao Goncalo do Sapucai',
                'estado_id' => '17',
                'ibge' => '3162005',
            ],
            [
                'name' => 'Sao Gotardo',
                'estado_id' => '17',
                'ibge' => '3162104',
            ],
            [
                'name' => 'Sao Joao Batista do Gloria',
                'estado_id' => '17',
                'ibge' => '3162203',
            ],
            [
                'name' => 'Sao Joao da Lagoa',
                'estado_id' => '17',
                'ibge' => '3162252',
            ],
            [
                'name' => 'Sao Joao da Mata',
                'estado_id' => '17',
                'ibge' => '3162302',
            ],
            [
                'name' => 'Sao Joao da Ponte',
                'estado_id' => '17',
                'ibge' => '3162401',
            ],
            [
                'name' => 'Sao Joao das Miss�es',
                'estado_id' => '17',
                'ibge' => '3162450',
            ],
            [
                'name' => 'Sao Joao del Rei',
                'estado_id' => '17',
                'ibge' => '3162500',
            ],
            [
                'name' => 'Sao Joao do Manhuacu',
                'estado_id' => '17',
                'ibge' => '3162559',
            ],
            [
                'name' => 'Sao Joao do Manteninha',
                'estado_id' => '17',
                'ibge' => '3162575',
            ],
            [
                'name' => 'Sao Joao do Oriente',
                'estado_id' => '17',
                'ibge' => '3162609',
            ],
            [
                'name' => 'Sao Joao do Pacui',
                'estado_id' => '17',
                'ibge' => '3162658',
            ],
            [
                'name' => 'Sao Joao do Paraiso',
                'estado_id' => '17',
                'ibge' => '3162708',
            ],
            [
                'name' => 'Sao Joao Evangelista',
                'estado_id' => '17',
                'ibge' => '3162807',
            ],
            [
                'name' => 'Sao Joao Nepomuceno',
                'estado_id' => '17',
                'ibge' => '3162906',
            ],
            [
                'name' => 'Sao Joaquim de Bicas',
                'estado_id' => '17',
                'ibge' => '3162922',
            ],
            [
                'name' => 'Sao Jose da Barra',
                'estado_id' => '17',
                'ibge' => '3162948',
            ],
            [
                'name' => 'Sao Jose da Lapa',
                'estado_id' => '17',
                'ibge' => '3162955',
            ],
            [
                'name' => 'Sao Jose da Safira',
                'estado_id' => '17',
                'ibge' => '3163003',
            ],
            [
                'name' => 'Sao Jose da Varginha',
                'estado_id' => '17',
                'ibge' => '3163102',
            ],
            [
                'name' => 'Sao Jose do Alegre',
                'estado_id' => '17',
                'ibge' => '3163201',
            ],
            [
                'name' => 'Sao Jose do Divino',
                'estado_id' => '17',
                'ibge' => '3163300',
            ],
            [
                'name' => 'Sao Jose do Goiabal',
                'estado_id' => '17',
                'ibge' => '3163409',
            ],
            [
                'name' => 'Sao Jose do Jacuri',
                'estado_id' => '17',
                'ibge' => '3163508',
            ],
            [
                'name' => 'Sao Jose do Mantimento',
                'estado_id' => '17',
                'ibge' => '3163607',
            ],
            [
                'name' => 'Sao Lourenco',
                'estado_id' => '17',
                'ibge' => '3163706',
            ],
            [
                'name' => 'Sao Miguel do Anta',
                'estado_id' => '17',
                'ibge' => '3163805',
            ],
            [
                'name' => 'Sao Pedro da Uniao',
                'estado_id' => '17',
                'ibge' => '3163904',
            ],
            [
                'name' => 'Sao Pedro dos Ferros',
                'estado_id' => '17',
                'ibge' => '3164001',
            ],
            [
                'name' => 'Sao Pedro do Suacui',
                'estado_id' => '17',
                'ibge' => '3164100',
            ],
            [
                'name' => 'Sao Romao',
                'estado_id' => '17',
                'ibge' => '3164209',
            ],
            [
                'name' => 'Sao Roque de Minas',
                'estado_id' => '17',
                'ibge' => '3164308',
            ],
            [
                'name' => 'Sao Sebastiao da Bela Vista',
                'estado_id' => '17',
                'ibge' => '3164407',
            ],
            [
                'name' => 'Sao Sebastiao da Vargem Alegr',
                'estado_id' => '17',
                'ibge' => '3164431',
            ],
            [
                'name' => 'Sao Sebastiao do Anta',
                'estado_id' => '17',
                'ibge' => '3164472',
            ],
            [
                'name' => 'Sao Sebastiao do Maranhao',
                'estado_id' => '17',
                'ibge' => '3164506',
            ],
            [
                'name' => 'Sao Sebastiao do Oeste',
                'estado_id' => '17',
                'ibge' => '3164605',
            ],
            [
                'name' => 'Sao Sebastiao do Paraiso',
                'estado_id' => '17',
                'ibge' => '3164704',
            ],
            [
                'name' => 'Sao Sebastiao do Rio Preto',
                'estado_id' => '17',
                'ibge' => '3164803',
            ],
            [
                'name' => 'Sao Sebastiao do Rio Verde',
                'estado_id' => '17',
                'ibge' => '3164902',
            ],
            [
                'name' => 'Sao Tiago',
                'estado_id' => '17',
                'ibge' => '3165008',
            ],
            [
                'name' => 'Sao Tomas de Aquino',
                'estado_id' => '17',
                'ibge' => '3165107',
            ],
            [
                'name' => 'Sao Thome das Letras',
                'estado_id' => '17',
                'ibge' => '3165206',
            ],
            [
                'name' => 'Sao Vicente de Minas',
                'estado_id' => '17',
                'ibge' => '3165305',
            ],
            [
                'name' => 'Sapucai-Mirim',
                'estado_id' => '17',
                'ibge' => '3165404',
            ],
            [
                'name' => 'Sardoa',
                'estado_id' => '17',
                'ibge' => '3165503',
            ],
            [
                'name' => 'Sarzedo',
                'estado_id' => '17',
                'ibge' => '3165537',
            ],
            [
                'name' => 'Setubinha',
                'estado_id' => '17',
                'ibge' => '3165552',
            ],
            [
                'name' => 'Sem-Peixe',
                'estado_id' => '17',
                'ibge' => '3165560',
            ],
            [
                'name' => 'Senador Amaral',
                'estado_id' => '17',
                'ibge' => '3165578',
            ],
            [
                'name' => 'Senador Cortes',
                'estado_id' => '17',
                'ibge' => '3165602',
            ],
            [
                'name' => 'Senador Firmino',
                'estado_id' => '17',
                'ibge' => '3165701',
            ],
            [
                'name' => 'Senador Jose Bento',
                'estado_id' => '17',
                'ibge' => '3165800',
            ],
            [
                'name' => 'Senador Modestino Goncalves',
                'estado_id' => '17',
                'ibge' => '3165909',
            ],
            [
                'name' => 'Senhora de Oliveira',
                'estado_id' => '17',
                'ibge' => '3166006',
            ],
            [
                'name' => 'Senhora do Porto',
                'estado_id' => '17',
                'ibge' => '3166105',
            ],
            [
                'name' => 'Senhora dos Remedios',
                'estado_id' => '17',
                'ibge' => '3166204',
            ],
            [
                'name' => 'Sericita',
                'estado_id' => '17',
                'ibge' => '3166303',
            ],
            [
                'name' => 'Seritinga',
                'estado_id' => '17',
                'ibge' => '3166402',
            ],
            [
                'name' => 'Serra Azul de Minas',
                'estado_id' => '17',
                'ibge' => '3166501',
            ],
            [
                'name' => 'Serra da Saudade',
                'estado_id' => '17',
                'ibge' => '3166600',
            ],
            [
                'name' => 'Serra dos Aimores',
                'estado_id' => '17',
                'ibge' => '3166709',
            ],
            [
                'name' => 'Serra do Salitre',
                'estado_id' => '17',
                'ibge' => '3166808',
            ],
            [
                'name' => 'Serrania',
                'estado_id' => '17',
                'ibge' => '3166907',
            ],
            [
                'name' => 'Serranopolis de Minas',
                'estado_id' => '17',
                'ibge' => '3166956',
            ],
            [
                'name' => 'Serranos',
                'estado_id' => '17',
                'ibge' => '3167004',
            ],
            [
                'name' => 'Serro',
                'estado_id' => '17',
                'ibge' => '3167103',
            ],
            [
                'name' => 'Sete Lagoas',
                'estado_id' => '17',
                'ibge' => '3167202',
            ],
            [
                'name' => 'Silveirania',
                'estado_id' => '17',
                'ibge' => '3167301',
            ],
            [
                'name' => 'Silvianopolis',
                'estado_id' => '17',
                'ibge' => '3167400',
            ],
            [
                'name' => 'Simao Pereira',
                'estado_id' => '17',
                'ibge' => '3167509',
            ],
            [
                'name' => 'Simonesia',
                'estado_id' => '17',
                'ibge' => '3167608',
            ],
            [
                'name' => 'Sobralia',
                'estado_id' => '17',
                'ibge' => '3167707',
            ],
            [
                'name' => 'Soledade de Minas',
                'estado_id' => '17',
                'ibge' => '3167806',
            ],
            [
                'name' => 'Tabuleiro',
                'estado_id' => '17',
                'ibge' => '3167905',
            ],
            [
                'name' => 'Taiobeiras',
                'estado_id' => '17',
                'ibge' => '3168002',
            ],
            [
                'name' => 'Taparuba',
                'estado_id' => '17',
                'ibge' => '3168051',
            ],
            [
                'name' => 'Tapira',
                'estado_id' => '17',
                'ibge' => '3168101',
            ],
            [
                'name' => 'Tapirai',
                'estado_id' => '17',
                'ibge' => '3168200',
            ],
            [
                'name' => 'Taquaracu de Minas',
                'estado_id' => '17',
                'ibge' => '3168309',
            ],
            [
                'name' => 'Tarumirim',
                'estado_id' => '17',
                'ibge' => '3168408',
            ],
            [
                'name' => 'Teixeiras',
                'estado_id' => '17',
                'ibge' => '3168507',
            ],
            [
                'name' => 'Teofilo Otoni',
                'estado_id' => '17',
                'ibge' => '3168606',
            ],
            [
                'name' => 'Timoteo',
                'estado_id' => '17',
                'ibge' => '3168705',
            ],
            [
                'name' => 'Tiradentes',
                'estado_id' => '17',
                'ibge' => '3168804',
            ],
            [
                'name' => 'Tiros',
                'estado_id' => '17',
                'ibge' => '3168903',
            ],
            [
                'name' => 'Tocantins',
                'estado_id' => '17',
                'ibge' => '3169000',
            ],
            [
                'name' => 'Tocos do Moji',
                'estado_id' => '17',
                'ibge' => '3169059',
            ],
            [
                'name' => 'Toledo',
                'estado_id' => '17',
                'ibge' => '3169109',
            ],
            [
                'name' => 'Tombos',
                'estado_id' => '17',
                'ibge' => '3169208',
            ],
            [
                'name' => 'Tr�s Corac�es',
                'estado_id' => '17',
                'ibge' => '3169307',
            ],
            [
                'name' => 'Tr�s Marias',
                'estado_id' => '17',
                'ibge' => '3169356',
            ],
            [
                'name' => 'Tr�s Pontas',
                'estado_id' => '17',
                'ibge' => '3169406',
            ],
            [
                'name' => 'Tumiritinga',
                'estado_id' => '17',
                'ibge' => '3169505',
            ],
            [
                'name' => 'Tupaciguara',
                'estado_id' => '17',
                'ibge' => '3169604',
            ],
            [
                'name' => 'Turmalina',
                'estado_id' => '17',
                'ibge' => '3169703',
            ],
            [
                'name' => 'Turvolandia',
                'estado_id' => '17',
                'ibge' => '3169802',
            ],
            [
                'name' => 'Uba',
                'estado_id' => '17',
                'ibge' => '3169901',
            ],
            [
                'name' => 'Ubai',
                'estado_id' => '17',
                'ibge' => '3170008',
            ],
            [
                'name' => 'Ubaporanga',
                'estado_id' => '17',
                'ibge' => '3170057',
            ],
            [
                'name' => 'Uberaba',
                'estado_id' => '17',
                'ibge' => '3170107',
            ],
            [
                'name' => 'Uberlandia',
                'estado_id' => '17',
                'ibge' => '3170206',
            ],
            [
                'name' => 'Umburatiba',
                'estado_id' => '17',
                'ibge' => '3170305',
            ],
            [
                'name' => 'Unai',
                'estado_id' => '17',
                'ibge' => '3170404',
            ],
            [
                'name' => 'Uniao de Minas',
                'estado_id' => '17',
                'ibge' => '3170438',
            ],
            [
                'name' => 'Uruana de Minas',
                'estado_id' => '17',
                'ibge' => '3170479',
            ],
            [
                'name' => 'Urucania',
                'estado_id' => '17',
                'ibge' => '3170503',
            ],
            [
                'name' => 'Urucuia',
                'estado_id' => '17',
                'ibge' => '3170529',
            ],
            [
                'name' => 'Vargem Alegre',
                'estado_id' => '17',
                'ibge' => '3170578',
            ],
            [
                'name' => 'Vargem Bonita',
                'estado_id' => '17',
                'ibge' => '3170602',
            ],
            [
                'name' => 'Vargem Grande do Rio Pardo',
                'estado_id' => '17',
                'ibge' => '3170651',
            ],
            [
                'name' => 'Varginha',
                'estado_id' => '17',
                'ibge' => '3170701',
            ],
            [
                'name' => 'Varjao de Minas',
                'estado_id' => '17',
                'ibge' => '3170750',
            ],
            [
                'name' => 'Varzea da Palma',
                'estado_id' => '17',
                'ibge' => '3170800',
            ],
            [
                'name' => 'Varzelandia',
                'estado_id' => '17',
                'ibge' => '3170909',
            ],
            [
                'name' => 'Vazante',
                'estado_id' => '17',
                'ibge' => '3171006',
            ],
            [
                'name' => 'Verdelandia',
                'estado_id' => '17',
                'ibge' => '3171030',
            ],
            [
                'name' => 'Veredinha',
                'estado_id' => '17',
                'ibge' => '3171071',
            ],
            [
                'name' => 'Verissimo',
                'estado_id' => '17',
                'ibge' => '3171105',
            ],
            [
                'name' => 'Vermelho Novo',
                'estado_id' => '17',
                'ibge' => '3171154',
            ],
            [
                'name' => 'Vespasiano',
                'estado_id' => '17',
                'ibge' => '3171204',
            ],
            [
                'name' => 'Vicosa',
                'estado_id' => '17',
                'ibge' => '3171303',
            ],
            [
                'name' => 'Vieiras',
                'estado_id' => '17',
                'ibge' => '3171402',
            ],
            [
                'name' => 'Mathias Lobato',
                'estado_id' => '17',
                'ibge' => '3171501',
            ],
            [
                'name' => 'Virgem da Lapa',
                'estado_id' => '17',
                'ibge' => '3171600',
            ],
            [
                'name' => 'Virginia',
                'estado_id' => '17',
                'ibge' => '3171709',
            ],
            [
                'name' => 'Virginopolis',
                'estado_id' => '17',
                'ibge' => '3171808',
            ],
            [
                'name' => 'Virgolandia',
                'estado_id' => '17',
                'ibge' => '3171907',
            ],
            [
                'name' => 'Visconde do Rio Branco',
                'estado_id' => '17',
                'ibge' => '3172004',
            ],
            [
                'name' => 'Volta Grande',
                'estado_id' => '17',
                'ibge' => '3172103',
            ],
            [
                'name' => 'Wenceslau Braz',
                'estado_id' => '17',
                'ibge' => '3172202',
            ],
            [
                'name' => 'Pingo D agua ',
                'estado_id' => '17',
                'ibge' => '3150539',
            ],
            [
                'name' => 'Olhos D agua ',
                'estado_id' => '17',
                'ibge' => '3145455',
            ],

            /* Espírito Santo */

            [
                'name' => 'Afonso Claudio',
                'estado_id' => '18',
                'ibge' => '3200102',
            ],
            [
                'name' => 'Aguia Branca',
                'estado_id' => '18',
                'ibge' => '3200136',
            ],
            [
                'name' => 'Agua Doce do Norte',
                'estado_id' => '18',
                'ibge' => '3200169',
            ],
            [
                'name' => 'Alegre',
                'estado_id' => '18',
                'ibge' => '3200201',
            ],
            [
                'name' => 'Alfredo Chaves',
                'estado_id' => '18',
                'ibge' => '3200300',
            ],
            [
                'name' => 'Alto Rio Novo',
                'estado_id' => '18',
                'ibge' => '3200359',
            ],
            [
                'name' => 'Anchieta',
                'estado_id' => '18',
                'ibge' => '3200409',
            ],
            [
                'name' => 'Apiaca',
                'estado_id' => '18',
                'ibge' => '3200508',
            ],
            [
                'name' => 'Aracruz',
                'estado_id' => '18',
                'ibge' => '3200607',
            ],
            [
                'name' => 'Atilio Vivacqua',
                'estado_id' => '18',
                'ibge' => '3200706',
            ],
            [
                'name' => 'Baixo Guandu',
                'estado_id' => '18',
                'ibge' => '3200805',
            ],
            [
                'name' => 'Barra de Sao Francisco',
                'estado_id' => '18',
                'ibge' => '3200904',
            ],
            [
                'name' => 'Boa Esperanca',
                'estado_id' => '18',
                'ibge' => '3201001',
            ],
            [
                'name' => 'Bom Jesus do Norte',
                'estado_id' => '18',
                'ibge' => '3201100',
            ],
            [
                'name' => 'Brejetuba',
                'estado_id' => '18',
                'ibge' => '3201159',
            ],
            [
                'name' => 'Cachoeiro de Itapemirim',
                'estado_id' => '18',
                'ibge' => '3201209',
            ],
            [
                'name' => 'Cariacica',
                'estado_id' => '18',
                'ibge' => '3201308',
            ],
            [
                'name' => 'Castelo',
                'estado_id' => '18',
                'ibge' => '3201407',
            ],
            [
                'name' => 'Colatina',
                'estado_id' => '18',
                'ibge' => '3201506',
            ],
            [
                'name' => 'Conceicao da Barra',
                'estado_id' => '18',
                'ibge' => '3201605',
            ],
            [
                'name' => 'Conceicao do Castelo',
                'estado_id' => '18',
                'ibge' => '3201704',
            ],
            [
                'name' => 'Divino de Sao Lourenco',
                'estado_id' => '18',
                'ibge' => '3201803',
            ],
            [
                'name' => 'Domingos Martins',
                'estado_id' => '18',
                'ibge' => '3201902',
            ],
            [
                'name' => 'Dores do Rio Preto',
                'estado_id' => '18',
                'ibge' => '3202009',
            ],
            [
                'name' => 'Ecoporanga',
                'estado_id' => '18',
                'ibge' => '3202108',
            ],
            [
                'name' => 'Fundao',
                'estado_id' => '18',
                'ibge' => '3202207',
            ],
            [
                'name' => 'Governador Lindenberg',
                'estado_id' => '18',
                'ibge' => '3202256',
            ],
            [
                'name' => 'Guacui',
                'estado_id' => '18',
                'ibge' => '3202306',
            ],
            [
                'name' => 'Guarapari',
                'estado_id' => '18',
                'ibge' => '3202405',
            ],
            [
                'name' => 'Ibatiba',
                'estado_id' => '18',
                'ibge' => '3202454',
            ],
            [
                'name' => 'Ibiracu',
                'estado_id' => '18',
                'ibge' => '3202504',
            ],
            [
                'name' => 'Ibitirama',
                'estado_id' => '18',
                'ibge' => '3202553',
            ],
            [
                'name' => 'Iconha',
                'estado_id' => '18',
                'ibge' => '3202603',
            ],
            [
                'name' => 'Irupi',
                'estado_id' => '18',
                'ibge' => '3202652',
            ],
            [
                'name' => 'Itaguacu',
                'estado_id' => '18',
                'ibge' => '3202702',
            ],
            [
                'name' => 'Itapemirim',
                'estado_id' => '18',
                'ibge' => '3202801',
            ],
            [
                'name' => 'Itarana',
                'estado_id' => '18',
                'ibge' => '3202900',
            ],
            [
                'name' => 'I�na',
                'estado_id' => '18',
                'ibge' => '3203007',
            ],
            [
                'name' => 'Jaguare',
                'estado_id' => '18',
                'ibge' => '3203056',
            ],
            [
                'name' => 'Jeronimo Monteiro',
                'estado_id' => '18',
                'ibge' => '3203106',
            ],
            [
                'name' => 'Joao Neiva',
                'estado_id' => '18',
                'ibge' => '3203130',
            ],
            [
                'name' => 'Laranja da Terra',
                'estado_id' => '18',
                'ibge' => '3203163',
            ],
            [
                'name' => 'Linhares',
                'estado_id' => '18',
                'ibge' => '3203205',
            ],
            [
                'name' => 'Mantenopolis',
                'estado_id' => '18',
                'ibge' => '3203304',
            ],
            [
                'name' => 'Marataizes',
                'estado_id' => '18',
                'ibge' => '3203320',
            ],
            [
                'name' => 'Marechal Floriano',
                'estado_id' => '18',
                'ibge' => '3203346',
            ],
            [
                'name' => 'Marilandia',
                'estado_id' => '18',
                'ibge' => '3203353',
            ],
            [
                'name' => 'Mimoso do Sul',
                'estado_id' => '18',
                'ibge' => '3203403',
            ],
            [
                'name' => 'Montanha',
                'estado_id' => '18',
                'ibge' => '3203502',
            ],
            [
                'name' => 'Mucurici',
                'estado_id' => '18',
                'ibge' => '3203601',
            ],
            [
                'name' => 'Muniz Freire',
                'estado_id' => '18',
                'ibge' => '3203700',
            ],
            [
                'name' => 'Muqui',
                'estado_id' => '18',
                'ibge' => '3203809',
            ],
            [
                'name' => 'Nova Venecia',
                'estado_id' => '18',
                'ibge' => '3203908',
            ],
            [
                'name' => 'Pancas',
                'estado_id' => '18',
                'ibge' => '3204005',
            ],
            [
                'name' => 'Pedro Canario',
                'estado_id' => '18',
                'ibge' => '3204054',
            ],
            [
                'name' => 'Pinheiros',
                'estado_id' => '18',
                'ibge' => '3204104',
            ],
            [
                'name' => 'Pi�ma',
                'estado_id' => '18',
                'ibge' => '3204203',
            ],
            [
                'name' => 'Ponto Belo',
                'estado_id' => '18',
                'ibge' => '3204252',
            ],
            [
                'name' => 'Presidente Kennedy',
                'estado_id' => '18',
                'ibge' => '3204302',
            ],
            [
                'name' => 'Rio Bananal',
                'estado_id' => '18',
                'ibge' => '3204351',
            ],
            [
                'name' => 'Rio Novo do Sul',
                'estado_id' => '18',
                'ibge' => '3204401',
            ],
            [
                'name' => 'Santa Leopoldina',
                'estado_id' => '18',
                'ibge' => '3204500',
            ],
            [
                'name' => 'Santa Maria de Jetiba',
                'estado_id' => '18',
                'ibge' => '3204559',
            ],
            [
                'name' => 'Santa Teresa',
                'estado_id' => '18',
                'ibge' => '3204609',
            ],
            [
                'name' => 'Sao Domingos do Norte',
                'estado_id' => '18',
                'ibge' => '3204658',
            ],
            [
                'name' => 'Sao Gabriel da Palha',
                'estado_id' => '18',
                'ibge' => '3204708',
            ],
            [
                'name' => 'Sao Jose do Calcado',
                'estado_id' => '18',
                'ibge' => '3204807',
            ],
            [
                'name' => 'Sao Mateus',
                'estado_id' => '18',
                'ibge' => '3204906',
            ],
            [
                'name' => 'Sao Roque do Canaa',
                'estado_id' => '18',
                'ibge' => '3204955',
            ],
            [
                'name' => 'Serra',
                'estado_id' => '18',
                'ibge' => '3205002',
            ],
            [
                'name' => 'Sooretama',
                'estado_id' => '18',
                'ibge' => '3205010',
            ],
            [
                'name' => 'Vargem Alta',
                'estado_id' => '18',
                'ibge' => '3205036',
            ],
            [
                'name' => 'Venda Nova do Imigrante',
                'estado_id' => '18',
                'ibge' => '3205069',
            ],
            [
                'name' => 'Viana',
                'estado_id' => '18',
                'ibge' => '3205101',
            ],
            [
                'name' => 'Vila Pavao',
                'estado_id' => '18',
                'ibge' => '3205150',
            ],
            [
                'name' => 'Vila Valerio',
                'estado_id' => '18',
                'ibge' => '3205176',
            ],
            [
                'name' => 'Vila Velha',
                'estado_id' => '18',
                'ibge' => '3205200',
            ],
            [
                'name' => 'Vitoria',
                'estado_id' => '18',
                'ibge' => '3205309',
            ],

            /* 	Rio de Janeiro */

            [
                'name' => 'Angra dos Reis',
                'estado_id' => '19',
                'ibge' => '3300100',
            ],
            [
                'name' => 'Aperibe',
                'estado_id' => '19',
                'ibge' => '3300159',
            ],
            [
                'name' => 'Araruama',
                'estado_id' => '19',
                'ibge' => '3300209',
            ],
            [
                'name' => 'Areal',
                'estado_id' => '19',
                'ibge' => '3300225',
            ],
            [
                'name' => 'Armacao dos B�zios',
                'estado_id' => '19',
                'ibge' => '3300233',
            ],
            [
                'name' => 'Arraial do Cabo',
                'estado_id' => '19',
                'ibge' => '3300258',
            ],
            [
                'name' => 'Barra do Pirai',
                'estado_id' => '19',
                'ibge' => '3300308',
            ],
            [
                'name' => 'Barra Mansa',
                'estado_id' => '19',
                'ibge' => '3300407',
            ],
            [
                'name' => 'Belford Roxo',
                'estado_id' => '19',
                'ibge' => '3300456',
            ],
            [
                'name' => 'Bom Jardim',
                'estado_id' => '19',
                'ibge' => '3300506',
            ],
            [
                'name' => 'Bom Jesus do Itabapoana',
                'estado_id' => '19',
                'ibge' => '3300605',
            ],
            [
                'name' => 'Cabo Frio',
                'estado_id' => '19',
                'ibge' => '3300704',
            ],
            [
                'name' => 'Cachoeiras de Macacu',
                'estado_id' => '19',
                'ibge' => '3300803',
            ],
            [
                'name' => 'Cambuci',
                'estado_id' => '19',
                'ibge' => '3300902',
            ],
            [
                'name' => 'Carapebus',
                'estado_id' => '19',
                'ibge' => '3300936',
            ],
            [
                'name' => 'Comendador Levy Gasparian',
                'estado_id' => '19',
                'ibge' => '3300951',
            ],
            [
                'name' => 'Campos dos Goytacazes',
                'estado_id' => '19',
                'ibge' => '3301009',
            ],
            [
                'name' => 'Cantagalo',
                'estado_id' => '19',
                'ibge' => '3301108',
            ],
            [
                'name' => 'Cardoso Moreira',
                'estado_id' => '19',
                'ibge' => '3301157',
            ],
            [
                'name' => 'Carmo',
                'estado_id' => '19',
                'ibge' => '3301207',
            ],
            [
                'name' => 'Casimiro de Abreu',
                'estado_id' => '19',
                'ibge' => '3301306',
            ],
            [
                'name' => 'Conceicao de Macabu',
                'estado_id' => '19',
                'ibge' => '3301405',
            ],
            [
                'name' => 'Cordeiro',
                'estado_id' => '19',
                'ibge' => '3301504',
            ],
            [
                'name' => 'Duas Barras',
                'estado_id' => '19',
                'ibge' => '3301603',
            ],
            [
                'name' => 'Duque de Caxias',
                'estado_id' => '19',
                'ibge' => '3301702',
            ],
            [
                'name' => 'Engenheiro Paulo de Frontin',
                'estado_id' => '19',
                'ibge' => '3301801',
            ],
            [
                'name' => 'Guapimirim',
                'estado_id' => '19',
                'ibge' => '3301850',
            ],
            [
                'name' => 'Iguaba Grande',
                'estado_id' => '19',
                'ibge' => '3301876',
            ],
            [
                'name' => 'Itaborai',
                'estado_id' => '19',
                'ibge' => '3301900',
            ],
            [
                'name' => 'Itaguai',
                'estado_id' => '19',
                'ibge' => '3302007',
            ],
            [
                'name' => 'Italva',
                'estado_id' => '19',
                'ibge' => '3302056',
            ],
            [
                'name' => 'Itaocara',
                'estado_id' => '19',
                'ibge' => '3302106',
            ],
            [
                'name' => 'Itaperuna',
                'estado_id' => '19',
                'ibge' => '3302205',
            ],
            [
                'name' => 'Itatiaia',
                'estado_id' => '19',
                'ibge' => '3302254',
            ],
            [
                'name' => 'Japeri',
                'estado_id' => '19',
                'ibge' => '3302270',
            ],
            [
                'name' => 'Laje do Muriae',
                'estado_id' => '19',
                'ibge' => '3302304',
            ],
            [
                'name' => 'Macae',
                'estado_id' => '19',
                'ibge' => '3302403',
            ],
            [
                'name' => 'Macuco',
                'estado_id' => '19',
                'ibge' => '3302452',
            ],
            [
                'name' => 'Mage',
                'estado_id' => '19',
                'ibge' => '3302502',
            ],
            [
                'name' => 'Mangaratiba',
                'estado_id' => '19',
                'ibge' => '3302601',
            ],
            [
                'name' => 'Marica',
                'estado_id' => '19',
                'ibge' => '3302700',
            ],
            [
                'name' => 'Mendes',
                'estado_id' => '19',
                'ibge' => '3302809',
            ],
            [
                'name' => 'Mesquita',
                'estado_id' => '19',
                'ibge' => '3302858',
            ],
            [
                'name' => 'Miguel Pereira',
                'estado_id' => '19',
                'ibge' => '3302908',
            ],
            [
                'name' => 'Miracema',
                'estado_id' => '19',
                'ibge' => '3303005',
            ],
            [
                'name' => 'Natividade',
                'estado_id' => '19',
                'ibge' => '3303104',
            ],
            [
                'name' => 'Nilopolis',
                'estado_id' => '19',
                'ibge' => '3303203',
            ],
            [
                'name' => 'Niteroi',
                'estado_id' => '19',
                'ibge' => '3303302',
            ],
            [
                'name' => 'Nova Friburgo',
                'estado_id' => '19',
                'ibge' => '3303401',
            ],
            [
                'name' => 'Nova Iguacu',
                'estado_id' => '19',
                'ibge' => '3303500',
            ],
            [
                'name' => 'Paracambi',
                'estado_id' => '19',
                'ibge' => '3303609',
            ],
            [
                'name' => 'Paraiba do Sul',
                'estado_id' => '19',
                'ibge' => '3303708',
            ],
            [
                'name' => 'Paraty',
                'estado_id' => '19',
                'ibge' => '3303807',
            ],
            [
                'name' => 'Paty do Alferes',
                'estado_id' => '19',
                'ibge' => '3303856',
            ],
            [
                'name' => 'Petropolis',
                'estado_id' => '19',
                'ibge' => '3303906',
            ],
            [
                'name' => 'Pinheiral',
                'estado_id' => '19',
                'ibge' => '3303955',
            ],
            [
                'name' => 'Pirai',
                'estado_id' => '19',
                'ibge' => '3304003',
            ],
            [
                'name' => 'Porci�ncula',
                'estado_id' => '19',
                'ibge' => '3304102',
            ],
            [
                'name' => 'Porto Real',
                'estado_id' => '19',
                'ibge' => '3304110',
            ],
            [
                'name' => 'Quatis',
                'estado_id' => '19',
                'ibge' => '3304128',
            ],
            [
                'name' => 'Queimados',
                'estado_id' => '19',
                'ibge' => '3304144',
            ],
            [
                'name' => 'Quissama',
                'estado_id' => '19',
                'ibge' => '3304151',
            ],
            [
                'name' => 'Resende',
                'estado_id' => '19',
                'ibge' => '3304201',
            ],
            [
                'name' => 'Rio Bonito',
                'estado_id' => '19',
                'ibge' => '3304300',
            ],
            [
                'name' => 'Rio Claro',
                'estado_id' => '19',
                'ibge' => '3304409',
            ],
            [
                'name' => 'Rio das Flores',
                'estado_id' => '19',
                'ibge' => '3304508',
            ],
            [
                'name' => 'Rio das Ostras',
                'estado_id' => '19',
                'ibge' => '3304524',
            ],
            [
                'name' => 'Rio de Janeiro',
                'estado_id' => '19',
                'ibge' => '3304557',
            ],
            [
                'name' => 'Santa Maria Madalena',
                'estado_id' => '19',
                'ibge' => '3304607',
            ],
            [
                'name' => 'Santo Antonio de Padua',
                'estado_id' => '19',
                'ibge' => '3304706',
            ],
            [
                'name' => 'Sao Francisco de Itabapoana',
                'estado_id' => '19',
                'ibge' => '3304755',
            ],
            [
                'name' => 'Sao Fidelis',
                'estado_id' => '19',
                'ibge' => '3304805',
            ],
            [
                'name' => 'Sao Goncalo',
                'estado_id' => '19',
                'ibge' => '3304904',
            ],
            [
                'name' => 'Sao Joao da Barra',
                'estado_id' => '19',
                'ibge' => '3305000',
            ],
            [
                'name' => 'Sao Joao de Meriti',
                'estado_id' => '19',
                'ibge' => '3305109',
            ],
            [
                'name' => 'Sao Jose de Uba',
                'estado_id' => '19',
                'ibge' => '3305133',
            ],
            [
                'name' => 'Sao Jose do Vale do Rio Preto',
                'estado_id' => '19',
                'ibge' => '3305158',
            ],
            [
                'name' => 'Sao Pedro da Aldeia',
                'estado_id' => '19',
                'ibge' => '3305208',
            ],
            [
                'name' => 'Sao Sebastiao do Alto',
                'estado_id' => '19',
                'ibge' => '3305307',
            ],
            [
                'name' => 'Sapucaia',
                'estado_id' => '19',
                'ibge' => '3305406',
            ],
            [
                'name' => 'Saquarema',
                'estado_id' => '19',
                'ibge' => '3305505',
            ],
            [
                'name' => 'Seropedica',
                'estado_id' => '19',
                'ibge' => '3305554',
            ],
            [
                'name' => 'Silva Jardim',
                'estado_id' => '19',
                'ibge' => '3305604',
            ],
            [
                'name' => 'Sumidouro',
                'estado_id' => '19',
                'ibge' => '3305703',
            ],
            [
                'name' => 'Tangua',
                'estado_id' => '19',
                'ibge' => '3305752',
            ],
            [
                'name' => 'Teresopolis',
                'estado_id' => '19',
                'ibge' => '3305802',
            ],
            [
                'name' => 'Trajano de Moraes',
                'estado_id' => '19',
                'ibge' => '3305901',
            ],
            [
                'name' => 'Tres Rios',
                'estado_id' => '19',
                'ibge' => '3306008',
            ],
            [
                'name' => 'Valenca',
                'estado_id' => '19',
                'ibge' => '3306107',
            ],
            [
                'name' => 'Varre-Sai',
                'estado_id' => '19',
                'ibge' => '3306156',
            ],
            [
                'name' => 'Vassouras',
                'estado_id' => '19',
                'ibge' => '3306206',
            ],
            [
                'name' => 'Volta Redonda',
                'estado_id' => '19',
                'ibge' => '3306305',
            ],

            /* São Paulo */

            [
                'name' => 'Adamantina',
                'estado_id' => '20',
                'ibge' => '3500105',
            ],
            [
                'name' => 'Adolfo',
                'estado_id' => '20',
                'ibge' => '3500204',
            ],
            [
                'name' => 'Aguai',
                'estado_id' => '20',
                'ibge' => '3500303',
            ],
            [
                'name' => 'Aguas da Prata',
                'estado_id' => '20',
                'ibge' => '3500402',
            ],
            [
                'name' => 'Aguas de Lindoia',
                'estado_id' => '20',
                'ibge' => '3500501',
            ],
            [
                'name' => 'Aguas de Santa Barbara',
                'estado_id' => '20',
                'ibge' => '3500550',
            ],
            [
                'name' => 'Aguas de Sao Pedro',
                'estado_id' => '20',
                'ibge' => '3500600',
            ],
            [
                'name' => 'Agudos',
                'estado_id' => '20',
                'ibge' => '3500709',
            ],
            [
                'name' => 'Alambari',
                'estado_id' => '20',
                'ibge' => '3500758',
            ],
            [
                'name' => 'Alfredo Marcondes',
                'estado_id' => '20',
                'ibge' => '3500808',
            ],
            [
                'name' => 'Altair',
                'estado_id' => '20',
                'ibge' => '3500907',
            ],
            [
                'name' => 'Altinopolis',
                'estado_id' => '20',
                'ibge' => '3501004',
            ],
            [
                'name' => 'Alto Alegre',
                'estado_id' => '20',
                'ibge' => '3501103',
            ],
            [
                'name' => 'Aluminio',
                'estado_id' => '20',
                'ibge' => '3501152',
            ],
            [
                'name' => 'Alvares Florence',
                'estado_id' => '20',
                'ibge' => '3501202',
            ],
            [
                'name' => 'Alvares Machado',
                'estado_id' => '20',
                'ibge' => '3501301',
            ],
            [
                'name' => 'Alvaro de Carvalho',
                'estado_id' => '20',
                'ibge' => '3501400',
            ],
            [
                'name' => 'Alvinlandia',
                'estado_id' => '20',
                'ibge' => '3501509',
            ],
            [
                'name' => 'Americana',
                'estado_id' => '20',
                'ibge' => '3501608',
            ],
            [
                'name' => 'Americo Brasiliense',
                'estado_id' => '20',
                'ibge' => '3501707',
            ],
            [
                'name' => 'Americo de Campos',
                'estado_id' => '20',
                'ibge' => '3501806',
            ],
            [
                'name' => 'Amparo',
                'estado_id' => '20',
                'ibge' => '3501905',
            ],
            [
                'name' => 'Analandia',
                'estado_id' => '20',
                'ibge' => '3502002',
            ],
            [
                'name' => 'Andradina',
                'estado_id' => '20',
                'ibge' => '3502101',
            ],
            [
                'name' => 'Angatuba',
                'estado_id' => '20',
                'ibge' => '3502200',
            ],
            [
                'name' => 'Anhembi',
                'estado_id' => '20',
                'ibge' => '3502309',
            ],
            [
                'name' => 'Anhumas',
                'estado_id' => '20',
                'ibge' => '3502408',
            ],
            [
                'name' => 'Aparecida',
                'estado_id' => '20',
                'ibge' => '3502507',
            ],
            [
                'name' => 'Apiai',
                'estado_id' => '20',
                'ibge' => '3502705',
            ],
            [
                'name' => 'Aracariguama',
                'estado_id' => '20',
                'ibge' => '3502754',
            ],
            [
                'name' => 'Aracatuba',
                'estado_id' => '20',
                'ibge' => '3502804',
            ],
            [
                'name' => 'Aracoiaba da Serra',
                'estado_id' => '20',
                'ibge' => '3502903',
            ],
            [
                'name' => 'Aramina',
                'estado_id' => '20',
                'ibge' => '3503000',
            ],
            [
                'name' => 'Arandu',
                'estado_id' => '20',
                'ibge' => '3503109',
            ],
            [
                'name' => 'Arapei',
                'estado_id' => '20',
                'ibge' => '3503158',
            ],
            [
                'name' => 'Araraquara',
                'estado_id' => '20',
                'ibge' => '3503208',
            ],
            [
                'name' => 'Araras',
                'estado_id' => '20',
                'ibge' => '3503307',
            ],
            [
                'name' => 'Arco-�ris',
                'estado_id' => '20',
                'ibge' => '3503356',
            ],
            [
                'name' => 'Arealva',
                'estado_id' => '20',
                'ibge' => '3503406',
            ],
            [
                'name' => 'Areias',
                'estado_id' => '20',
                'ibge' => '3503505',
            ],
            [
                'name' => 'Areiopolis',
                'estado_id' => '20',
                'ibge' => '3503604',
            ],
            [
                'name' => 'Ariranha',
                'estado_id' => '20',
                'ibge' => '3503703',
            ],
            [
                'name' => 'Artur Nogueira',
                'estado_id' => '20',
                'ibge' => '3503802',
            ],
            [
                'name' => 'Aruja',
                'estado_id' => '20',
                'ibge' => '3503901',
            ],
            [
                'name' => 'Aspasia',
                'estado_id' => '20',
                'ibge' => '3503950',
            ],
            [
                'name' => 'Assis',
                'estado_id' => '20',
                'ibge' => '3504008',
            ],
            [
                'name' => 'Atibaia',
                'estado_id' => '20',
                'ibge' => '3504107',
            ],
            [
                'name' => 'Auriflama',
                'estado_id' => '20',
                'ibge' => '3504206',
            ],
            [
                'name' => 'Avai',
                'estado_id' => '20',
                'ibge' => '3504305',
            ],
            [
                'name' => 'Avanhandava',
                'estado_id' => '20',
                'ibge' => '3504404',
            ],
            [
                'name' => 'Avare',
                'estado_id' => '20',
                'ibge' => '3504503',
            ],
            [
                'name' => 'Bady Bassitt',
                'estado_id' => '20',
                'ibge' => '3504602',
            ],
            [
                'name' => 'Balbinos',
                'estado_id' => '20',
                'ibge' => '3504701',
            ],
            [
                'name' => 'Balsamo',
                'estado_id' => '20',
                'ibge' => '3504800',
            ],
            [
                'name' => 'Bananal',
                'estado_id' => '20',
                'ibge' => '3504909',
            ],
            [
                'name' => 'Barao de Antonina',
                'estado_id' => '20',
                'ibge' => '3505005',
            ],
            [
                'name' => 'Barbosa',
                'estado_id' => '20',
                'ibge' => '3505104',
            ],
            [
                'name' => 'Bariri',
                'estado_id' => '20',
                'ibge' => '3505203',
            ],
            [
                'name' => 'Barra Bonita',
                'estado_id' => '20',
                'ibge' => '3505302',
            ],
            [
                'name' => 'Barra do Chapeu',
                'estado_id' => '20',
                'ibge' => '3505351',
            ],
            [
                'name' => 'Barra do Turvo',
                'estado_id' => '20',
                'ibge' => '3505401',
            ],
            [
                'name' => 'Barretos',
                'estado_id' => '20',
                'ibge' => '3505500',
            ],
            [
                'name' => 'Barrinha',
                'estado_id' => '20',
                'ibge' => '3505609',
            ],
            [
                'name' => 'Barueri',
                'estado_id' => '20',
                'ibge' => '3505708',
            ],
            [
                'name' => 'Bastos',
                'estado_id' => '20',
                'ibge' => '3505807',
            ],
            [
                'name' => 'Batatais',
                'estado_id' => '20',
                'ibge' => '3505906',
            ],
            [
                'name' => 'Bauru',
                'estado_id' => '20',
                'ibge' => '3506003',
            ],
            [
                'name' => 'Bebedouro',
                'estado_id' => '20',
                'ibge' => '3506102',
            ],
            [
                'name' => 'Bento de Abreu',
                'estado_id' => '20',
                'ibge' => '3506201',
            ],
            [
                'name' => 'Bernardino de Campos',
                'estado_id' => '20',
                'ibge' => '3506300',
            ],
            [
                'name' => 'Bertioga',
                'estado_id' => '20',
                'ibge' => '3506359',
            ],
            [
                'name' => 'Bilac',
                'estado_id' => '20',
                'ibge' => '3506409',
            ],
            [
                'name' => 'Birigui',
                'estado_id' => '20',
                'ibge' => '3506508',
            ],
            [
                'name' => 'Biritiba-Mirim',
                'estado_id' => '20',
                'ibge' => '3506607',
            ],
            [
                'name' => 'Boa Esperanca do Sul',
                'estado_id' => '20',
                'ibge' => '3506706',
            ],
            [
                'name' => 'Bocaina',
                'estado_id' => '20',
                'ibge' => '3506805',
            ],
            [
                'name' => 'Bofete',
                'estado_id' => '20',
                'ibge' => '3506904',
            ],
            [
                'name' => 'Boituva',
                'estado_id' => '20',
                'ibge' => '3507001',
            ],
            [
                'name' => 'Bom Jesus dos Perd�es',
                'estado_id' => '20',
                'ibge' => '3507100',
            ],
            [
                'name' => 'Bom Sucesso de Itarare',
                'estado_id' => '20',
                'ibge' => '3507159',
            ],
            [
                'name' => 'Bora',
                'estado_id' => '20',
                'ibge' => '3507209',
            ],
            [
                'name' => 'Boraceia',
                'estado_id' => '20',
                'ibge' => '3507308',
            ],
            [
                'name' => 'Borborema',
                'estado_id' => '20',
                'ibge' => '3507407',
            ],
            [
                'name' => 'Borebi',
                'estado_id' => '20',
                'ibge' => '3507456',
            ],
            [
                'name' => 'Botucatu',
                'estado_id' => '20',
                'ibge' => '3507506',
            ],
            [
                'name' => 'Braganca Paulista',
                'estado_id' => '20',
                'ibge' => '3507605',
            ],
            [
                'name' => 'Bra�na',
                'estado_id' => '20',
                'ibge' => '3507704',
            ],
            [
                'name' => 'Brejo Alegre',
                'estado_id' => '20',
                'ibge' => '3507753',
            ],
            [
                'name' => 'Brodowski',
                'estado_id' => '20',
                'ibge' => '3507803',
            ],
            [
                'name' => 'Brotas',
                'estado_id' => '20',
                'ibge' => '3507902',
            ],
            [
                'name' => 'Buri',
                'estado_id' => '20',
                'ibge' => '3508009',
            ],
            [
                'name' => 'Buritama',
                'estado_id' => '20',
                'ibge' => '3508108',
            ],
            [
                'name' => 'Buritizal',
                'estado_id' => '20',
                'ibge' => '3508207',
            ],
            [
                'name' => 'Cabralia Paulista',
                'estado_id' => '20',
                'ibge' => '3508306',
            ],
            [
                'name' => 'Cabre�va',
                'estado_id' => '20',
                'ibge' => '3508405',
            ],
            [
                'name' => 'Cacapava',
                'estado_id' => '20',
                'ibge' => '3508504',
            ],
            [
                'name' => 'Cachoeira Paulista',
                'estado_id' => '20',
                'ibge' => '3508603',
            ],
            [
                'name' => 'Caconde',
                'estado_id' => '20',
                'ibge' => '3508702',
            ],
            [
                'name' => 'Cafelandia',
                'estado_id' => '20',
                'ibge' => '3508801',
            ],
            [
                'name' => 'Caiabu',
                'estado_id' => '20',
                'ibge' => '3508900',
            ],
            [
                'name' => 'Caieiras',
                'estado_id' => '20',
                'ibge' => '3509007',
            ],
            [
                'name' => 'Caiua',
                'estado_id' => '20',
                'ibge' => '3509106',
            ],
            [
                'name' => 'Cajamar',
                'estado_id' => '20',
                'ibge' => '3509205',
            ],
            [
                'name' => 'Cajati',
                'estado_id' => '20',
                'ibge' => '3509254',
            ],
            [
                'name' => 'Cajobi',
                'estado_id' => '20',
                'ibge' => '3509304',
            ],
            [
                'name' => 'Cajuru',
                'estado_id' => '20',
                'ibge' => '3509403',
            ],
            [
                'name' => 'Campina do Monte Alegre',
                'estado_id' => '20',
                'ibge' => '3509452',
            ],
            [
                'name' => 'Campinas',
                'estado_id' => '20',
                'ibge' => '3509502',
            ],
            [
                'name' => 'Campo Limpo Paulista',
                'estado_id' => '20',
                'ibge' => '3509601',
            ],
            [
                'name' => 'Campos do Jordao',
                'estado_id' => '20',
                'ibge' => '3509700',
            ],
            [
                'name' => 'Campos Novos Paulista',
                'estado_id' => '20',
                'ibge' => '3509809',
            ],
            [
                'name' => 'Cananeia',
                'estado_id' => '20',
                'ibge' => '3509908',
            ],
            [
                'name' => 'Canas',
                'estado_id' => '20',
                'ibge' => '3509957',
            ],
            [
                'name' => 'Candido Mota',
                'estado_id' => '20',
                'ibge' => '3510005',
            ],
            [
                'name' => 'Candido Rodrigues',
                'estado_id' => '20',
                'ibge' => '3510104',
            ],
            [
                'name' => 'Canitar',
                'estado_id' => '20',
                'ibge' => '3510153',
            ],
            [
                'name' => 'Capao Bonito',
                'estado_id' => '20',
                'ibge' => '3510203',
            ],
            [
                'name' => 'Capela do Alto',
                'estado_id' => '20',
                'ibge' => '3510302',
            ],
            [
                'name' => 'Capivari',
                'estado_id' => '20',
                'ibge' => '3510401',
            ],
            [
                'name' => 'Caraguatatuba',
                'estado_id' => '20',
                'ibge' => '3510500',
            ],
            [
                'name' => 'Carapicuiba',
                'estado_id' => '20',
                'ibge' => '3510609',
            ],
            [
                'name' => 'Cardoso',
                'estado_id' => '20',
                'ibge' => '3510708',
            ],
            [
                'name' => 'Casa Branca',
                'estado_id' => '20',
                'ibge' => '3510807',
            ],
            [
                'name' => 'Cassia dos Coqueiros',
                'estado_id' => '20',
                'ibge' => '3510906',
            ],
            [
                'name' => 'Castilho',
                'estado_id' => '20',
                'ibge' => '3511003',
            ],
            [
                'name' => 'Catanduva',
                'estado_id' => '20',
                'ibge' => '3511102',
            ],
            [
                'name' => 'Catigua',
                'estado_id' => '20',
                'ibge' => '3511201',
            ],
            [
                'name' => 'Cedral',
                'estado_id' => '20',
                'ibge' => '3511300',
            ],
            [
                'name' => 'Cerqueira Cesar',
                'estado_id' => '20',
                'ibge' => '3511409',
            ],
            [
                'name' => 'Cerquilho',
                'estado_id' => '20',
                'ibge' => '3511508',
            ],
            [
                'name' => 'Cesario Lange',
                'estado_id' => '20',
                'ibge' => '3511607',
            ],
            [
                'name' => 'Charqueada',
                'estado_id' => '20',
                'ibge' => '3511706',
            ],
            [
                'name' => 'Clementina',
                'estado_id' => '20',
                'ibge' => '3511904',
            ],
            [
                'name' => 'Colina',
                'estado_id' => '20',
                'ibge' => '3512001',
            ],
            [
                'name' => 'Colombia',
                'estado_id' => '20',
                'ibge' => '3512100',
            ],
            [
                'name' => 'Conchal',
                'estado_id' => '20',
                'ibge' => '3512209',
            ],
            [
                'name' => 'Conchas',
                'estado_id' => '20',
                'ibge' => '3512308',
            ],
            [
                'name' => 'Cordeiropolis',
                'estado_id' => '20',
                'ibge' => '3512407',
            ],
            [
                'name' => 'Coroados',
                'estado_id' => '20',
                'ibge' => '3512506',
            ],
            [
                'name' => 'Coronel Macedo',
                'estado_id' => '20',
                'ibge' => '3512605',
            ],
            [
                'name' => 'Corumbatai',
                'estado_id' => '20',
                'ibge' => '3512704',
            ],
            [
                'name' => 'Cosmopolis',
                'estado_id' => '20',
                'ibge' => '3512803',
            ],
            [
                'name' => 'Cosmorama',
                'estado_id' => '20',
                'ibge' => '3512902',
            ],
            [
                'name' => 'Cotia',
                'estado_id' => '20',
                'ibge' => '3513009',
            ],
            [
                'name' => 'Cravinhos',
                'estado_id' => '20',
                'ibge' => '3513108',
            ],
            [
                'name' => 'Cristais Paulista',
                'estado_id' => '20',
                'ibge' => '3513207',
            ],
            [
                'name' => 'Cruzalia',
                'estado_id' => '20',
                'ibge' => '3513306',
            ],
            [
                'name' => 'Cruzeiro',
                'estado_id' => '20',
                'ibge' => '3513405',
            ],
            [
                'name' => 'Cubatao',
                'estado_id' => '20',
                'ibge' => '3513504',
            ],
            [
                'name' => 'Cunha',
                'estado_id' => '20',
                'ibge' => '3513603',
            ],
            [
                'name' => 'Descalvado',
                'estado_id' => '20',
                'ibge' => '3513702',
            ],
            [
                'name' => 'Diadema',
                'estado_id' => '20',
                'ibge' => '3513801',
            ],
            [
                'name' => 'Dirce Reis',
                'estado_id' => '20',
                'ibge' => '3513850',
            ],
            [
                'name' => 'Divinolandia',
                'estado_id' => '20',
                'ibge' => '3513900',
            ],
            [
                'name' => 'Dobrada',
                'estado_id' => '20',
                'ibge' => '3514007',
            ],
            [
                'name' => 'Dois Corregos',
                'estado_id' => '20',
                'ibge' => '3514106',
            ],
            [
                'name' => 'Dolcinopolis',
                'estado_id' => '20',
                'ibge' => '3514205',
            ],
            [
                'name' => 'Dourado',
                'estado_id' => '20',
                'ibge' => '3514304',
            ],
            [
                'name' => 'Dracena',
                'estado_id' => '20',
                'ibge' => '3514403',
            ],
            [
                'name' => 'Duartina',
                'estado_id' => '20',
                'ibge' => '3514502',
            ],
            [
                'name' => 'Dumont',
                'estado_id' => '20',
                'ibge' => '3514601',
            ],
            [
                'name' => 'Echapora',
                'estado_id' => '20',
                'ibge' => '3514700',
            ],
            [
                'name' => 'Eldorado',
                'estado_id' => '20',
                'ibge' => '3514809',
            ],
            [
                'name' => 'Elias Fausto',
                'estado_id' => '20',
                'ibge' => '3514908',
            ],
            [
                'name' => 'Elisiario',
                'estado_id' => '20',
                'ibge' => '3514924',
            ],
            [
                'name' => 'Emba�ba',
                'estado_id' => '20',
                'ibge' => '3514957',
            ],
            [
                'name' => 'Embu',
                'estado_id' => '20',
                'ibge' => '3515004',
            ],
            [
                'name' => 'Embu-Guacu',
                'estado_id' => '20',
                'ibge' => '3515103',
            ],
            [
                'name' => 'Emilianopolis',
                'estado_id' => '20',
                'ibge' => '3515129',
            ],
            [
                'name' => 'Engenheiro Coelho',
                'estado_id' => '20',
                'ibge' => '3515152',
            ],
            [
                'name' => 'Espirito Santo do Pinhal',
                'estado_id' => '20',
                'ibge' => '3515186',
            ],
            [
                'name' => 'Espirito Santo do Turvo',
                'estado_id' => '20',
                'ibge' => '3515194',
            ],
            [
                'name' => 'Estrela do Norte',
                'estado_id' => '20',
                'ibge' => '3515301',
            ],
            [
                'name' => 'Euclides da Cunha Paulista',
                'estado_id' => '20',
                'ibge' => '3515350',
            ],
            [
                'name' => 'Fartura',
                'estado_id' => '20',
                'ibge' => '3515400',
            ],
            [
                'name' => 'Fernandopolis',
                'estado_id' => '20',
                'ibge' => '3515509',
            ],
            [
                'name' => 'Fernando Prestes',
                'estado_id' => '20',
                'ibge' => '3515608',
            ],
            [
                'name' => 'Fernao',
                'estado_id' => '20',
                'ibge' => '3515657',
            ],
            [
                'name' => 'Ferraz de Vasconcelos',
                'estado_id' => '20',
                'ibge' => '3515707',
            ],
            [
                'name' => 'Flora Rica',
                'estado_id' => '20',
                'ibge' => '3515806',
            ],
            [
                'name' => 'Floreal',
                'estado_id' => '20',
                'ibge' => '3515905',
            ],
            [
                'name' => 'Florida Paulista',
                'estado_id' => '20',
                'ibge' => '3516002',
            ],
            [
                'name' => 'Florinia',
                'estado_id' => '20',
                'ibge' => '3516101',
            ],
            [
                'name' => 'Franca',
                'estado_id' => '20',
                'ibge' => '3516200',
            ],
            [
                'name' => 'Francisco Morato',
                'estado_id' => '20',
                'ibge' => '3516309',
            ],
            [
                'name' => 'Franco da Rocha',
                'estado_id' => '20',
                'ibge' => '3516408',
            ],
            [
                'name' => 'Gabriel Monteiro',
                'estado_id' => '20',
                'ibge' => '3516507',
            ],
            [
                'name' => 'Galia',
                'estado_id' => '20',
                'ibge' => '3516606',
            ],
            [
                'name' => 'Garca',
                'estado_id' => '20',
                'ibge' => '3516705',
            ],
            [
                'name' => 'Gastao Vidigal',
                'estado_id' => '20',
                'ibge' => '3516804',
            ],
            [
                'name' => 'Gaviao Peixoto',
                'estado_id' => '20',
                'ibge' => '3516853',
            ],
            [
                'name' => 'General Salgado',
                'estado_id' => '20',
                'ibge' => '3516903',
            ],
            [
                'name' => 'Getulina',
                'estado_id' => '20',
                'ibge' => '3517000',
            ],
            [
                'name' => 'Glicerio',
                'estado_id' => '20',
                'ibge' => '3517109',
            ],
            [
                'name' => 'Guaicara',
                'estado_id' => '20',
                'ibge' => '3517208',
            ],
            [
                'name' => 'Guaimb�',
                'estado_id' => '20',
                'ibge' => '3517307',
            ],
            [
                'name' => 'Guaira',
                'estado_id' => '20',
                'ibge' => '3517406',
            ],
            [
                'name' => 'Guapiacu',
                'estado_id' => '20',
                'ibge' => '3517505',
            ],
            [
                'name' => 'Guapiara',
                'estado_id' => '20',
                'ibge' => '3517604',
            ],
            [
                'name' => 'Guara',
                'estado_id' => '20',
                'ibge' => '3517703',
            ],
            [
                'name' => 'Guaracai',
                'estado_id' => '20',
                'ibge' => '3517802',
            ],
            [
                'name' => 'Guaraci',
                'estado_id' => '20',
                'ibge' => '3517901',
            ],
            [
                'name' => 'Guaranta',
                'estado_id' => '20',
                'ibge' => '3518107',
            ],
            [
                'name' => 'Guararapes',
                'estado_id' => '20',
                'ibge' => '3518206',
            ],
            [
                'name' => 'Guararema',
                'estado_id' => '20',
                'ibge' => '3518305',
            ],
            [
                'name' => 'Guaratingueta',
                'estado_id' => '20',
                'ibge' => '3518404',
            ],
            [
                'name' => 'Guarei',
                'estado_id' => '20',
                'ibge' => '3518503',
            ],
            [
                'name' => 'Guariba',
                'estado_id' => '20',
                'ibge' => '3518602',
            ],
            [
                'name' => 'Guaruja',
                'estado_id' => '20',
                'ibge' => '3518701',
            ],
            [
                'name' => 'Guarulhos',
                'estado_id' => '20',
                'ibge' => '3518800',
            ],
            [
                'name' => 'Guatapara',
                'estado_id' => '20',
                'ibge' => '3518859',
            ],
            [
                'name' => 'Guzolandia',
                'estado_id' => '20',
                'ibge' => '3518909',
            ],
            [
                'name' => 'Herculandia',
                'estado_id' => '20',
                'ibge' => '3519006',
            ],
            [
                'name' => 'Holambra',
                'estado_id' => '20',
                'ibge' => '3519055',
            ],
            [
                'name' => 'Hortolandia',
                'estado_id' => '20',
                'ibge' => '3519071',
            ],
            [
                'name' => 'Iacanga',
                'estado_id' => '20',
                'ibge' => '3519105',
            ],
            [
                'name' => 'Iacri',
                'estado_id' => '20',
                'ibge' => '3519204',
            ],
            [
                'name' => 'Iaras',
                'estado_id' => '20',
                'ibge' => '3519253',
            ],
            [
                'name' => 'Ibate',
                'estado_id' => '20',
                'ibge' => '3519303',
            ],
            [
                'name' => 'Ibira',
                'estado_id' => '20',
                'ibge' => '3519402',
            ],
            [
                'name' => 'Ibirarema',
                'estado_id' => '20',
                'ibge' => '3519501',
            ],
            [
                'name' => 'Ibitinga',
                'estado_id' => '20',
                'ibge' => '3519600',
            ],
            [
                'name' => 'Ibi�na',
                'estado_id' => '20',
                'ibge' => '3519709',
            ],
            [
                'name' => 'Icem',
                'estado_id' => '20',
                'ibge' => '3519808',
            ],
            [
                'name' => 'Iep�',
                'estado_id' => '20',
                'ibge' => '3519907',
            ],
            [
                'name' => 'Igaracu do Tiet�',
                'estado_id' => '20',
                'ibge' => '3520004',
            ],
            [
                'name' => 'Igarapava',
                'estado_id' => '20',
                'ibge' => '3520103',
            ],
            [
                'name' => 'Igarata',
                'estado_id' => '20',
                'ibge' => '3520202',
            ],
            [
                'name' => 'Iguape',
                'estado_id' => '20',
                'ibge' => '3520301',
            ],
            [
                'name' => 'Ilhabela',
                'estado_id' => '20',
                'ibge' => '3520400',
            ],
            [
                'name' => 'Ilha Comprida',
                'estado_id' => '20',
                'ibge' => '3520426',
            ],
            [
                'name' => 'Ilha Solteira',
                'estado_id' => '20',
                'ibge' => '3520442',
            ],
            [
                'name' => 'Indaiatuba',
                'estado_id' => '20',
                'ibge' => '3520509',
            ],
            [
                'name' => 'Indiana',
                'estado_id' => '20',
                'ibge' => '3520608',
            ],
            [
                'name' => 'Indiapora',
                'estado_id' => '20',
                'ibge' => '3520707',
            ],
            [
                'name' => 'In�bia Paulista',
                'estado_id' => '20',
                'ibge' => '3520806',
            ],
            [
                'name' => 'Ipaussu',
                'estado_id' => '20',
                'ibge' => '3520905',
            ],
            [
                'name' => 'Ipero',
                'estado_id' => '20',
                'ibge' => '3521002',
            ],
            [
                'name' => 'Ipe�na',
                'estado_id' => '20',
                'ibge' => '3521101',
            ],
            [
                'name' => 'Ipigua',
                'estado_id' => '20',
                'ibge' => '3521150',
            ],
            [
                'name' => 'Iporanga',
                'estado_id' => '20',
                'ibge' => '3521200',
            ],
            [
                'name' => 'Ipua',
                'estado_id' => '20',
                'ibge' => '3521309',
            ],
            [
                'name' => 'Iracemapolis',
                'estado_id' => '20',
                'ibge' => '3521408',
            ],
            [
                'name' => 'Irapua',
                'estado_id' => '20',
                'ibge' => '3521507',
            ],
            [
                'name' => 'Irapuru',
                'estado_id' => '20',
                'ibge' => '3521606',
            ],
            [
                'name' => 'Itabera',
                'estado_id' => '20',
                'ibge' => '3521705',
            ],
            [
                'name' => 'Itai',
                'estado_id' => '20',
                'ibge' => '3521804',
            ],
            [
                'name' => 'Itajobi',
                'estado_id' => '20',
                'ibge' => '3521903',
            ],
            [
                'name' => 'Itaju',
                'estado_id' => '20',
                'ibge' => '3522000',
            ],
            [
                'name' => 'Itanhaem',
                'estado_id' => '20',
                'ibge' => '3522109',
            ],
            [
                'name' => 'Itaoca',
                'estado_id' => '20',
                'ibge' => '3522158',
            ],
            [
                'name' => 'Itapecerica da Serra',
                'estado_id' => '20',
                'ibge' => '3522208',
            ],
            [
                'name' => 'Itapetininga',
                'estado_id' => '20',
                'ibge' => '3522307',
            ],
            [
                'name' => 'Itapeva',
                'estado_id' => '20',
                'ibge' => '3522406',
            ],
            [
                'name' => 'Itapevi',
                'estado_id' => '20',
                'ibge' => '3522505',
            ],
            [
                'name' => 'Itapira',
                'estado_id' => '20',
                'ibge' => '3522604',
            ],
            [
                'name' => 'Itapirapua Paulista',
                'estado_id' => '20',
                'ibge' => '3522653',
            ],
            [
                'name' => 'Itapolis',
                'estado_id' => '20',
                'ibge' => '3522703',
            ],
            [
                'name' => 'Itaporanga',
                'estado_id' => '20',
                'ibge' => '3522802',
            ],
            [
                'name' => 'Itapui',
                'estado_id' => '20',
                'ibge' => '3522901',
            ],
            [
                'name' => 'Itapura',
                'estado_id' => '20',
                'ibge' => '3523008',
            ],
            [
                'name' => 'Itaquaquecetuba',
                'estado_id' => '20',
                'ibge' => '3523107',
            ],
            [
                'name' => 'Itarare',
                'estado_id' => '20',
                'ibge' => '3523206',
            ],
            [
                'name' => 'Itariri',
                'estado_id' => '20',
                'ibge' => '3523305',
            ],
            [
                'name' => 'Itatiba',
                'estado_id' => '20',
                'ibge' => '3523404',
            ],
            [
                'name' => 'Itatinga',
                'estado_id' => '20',
                'ibge' => '3523503',
            ],
            [
                'name' => 'Itirapina',
                'estado_id' => '20',
                'ibge' => '3523602',
            ],
            [
                'name' => 'Itirapua',
                'estado_id' => '20',
                'ibge' => '3523701',
            ],
            [
                'name' => 'Itobi',
                'estado_id' => '20',
                'ibge' => '3523800',
            ],
            [
                'name' => 'Itu',
                'estado_id' => '20',
                'ibge' => '3523909',
            ],
            [
                'name' => 'Itupeva',
                'estado_id' => '20',
                'ibge' => '3524006',
            ],
            [
                'name' => 'Ituverava',
                'estado_id' => '20',
                'ibge' => '3524105',
            ],
            [
                'name' => 'Jaborandi',
                'estado_id' => '20',
                'ibge' => '3524204',
            ],
            [
                'name' => 'Jaboticabal',
                'estado_id' => '20',
                'ibge' => '3524303',
            ],
            [
                'name' => 'Jacarei',
                'estado_id' => '20',
                'ibge' => '3524402',
            ],
            [
                'name' => 'Jaci',
                'estado_id' => '20',
                'ibge' => '3524501',
            ],
            [
                'name' => 'Jacupiranga',
                'estado_id' => '20',
                'ibge' => '3524600',
            ],
            [
                'name' => 'Jaguari�na',
                'estado_id' => '20',
                'ibge' => '3524709',
            ],
            [
                'name' => 'Jales',
                'estado_id' => '20',
                'ibge' => '3524808',
            ],
            [
                'name' => 'Jambeiro',
                'estado_id' => '20',
                'ibge' => '3524907',
            ],
            [
                'name' => 'Jandira',
                'estado_id' => '20',
                'ibge' => '3525003',
            ],
            [
                'name' => 'Jardinopolis',
                'estado_id' => '20',
                'ibge' => '3525102',
            ],
            [
                'name' => 'Jarinu',
                'estado_id' => '20',
                'ibge' => '3525201',
            ],
            [
                'name' => 'Ja�',
                'estado_id' => '20',
                'ibge' => '3525300',
            ],
            [
                'name' => 'Jeriquara',
                'estado_id' => '20',
                'ibge' => '3525409',
            ],
            [
                'name' => 'Joanopolis',
                'estado_id' => '20',
                'ibge' => '3525508',
            ],
            [
                'name' => 'Joao Ramalho',
                'estado_id' => '20',
                'ibge' => '3525607',
            ],
            [
                'name' => 'Jose Bonifacio',
                'estado_id' => '20',
                'ibge' => '3525706',
            ],
            [
                'name' => 'J�lio Mesquita',
                'estado_id' => '20',
                'ibge' => '3525805',
            ],
            [
                'name' => 'Jumirim',
                'estado_id' => '20',
                'ibge' => '3525854',
            ],
            [
                'name' => 'Jundiai',
                'estado_id' => '20',
                'ibge' => '3525904',
            ],
            [
                'name' => 'Junqueiropolis',
                'estado_id' => '20',
                'ibge' => '3526001',
            ],
            [
                'name' => 'Juquia',
                'estado_id' => '20',
                'ibge' => '3526100',
            ],
            [
                'name' => 'Juquitiba',
                'estado_id' => '20',
                'ibge' => '3526209',
            ],
            [
                'name' => 'Lagoinha',
                'estado_id' => '20',
                'ibge' => '3526308',
            ],
            [
                'name' => 'Laranjal Paulista',
                'estado_id' => '20',
                'ibge' => '3526407',
            ],
            [
                'name' => 'Lavinia',
                'estado_id' => '20',
                'ibge' => '3526506',
            ],
            [
                'name' => 'Lavrinhas',
                'estado_id' => '20',
                'ibge' => '3526605',
            ],
            [
                'name' => 'Leme',
                'estado_id' => '20',
                'ibge' => '3526704',
            ],
            [
                'name' => 'Lencois Paulista',
                'estado_id' => '20',
                'ibge' => '3526803',
            ],
            [
                'name' => 'Limeira',
                'estado_id' => '20',
                'ibge' => '3526902',
            ],
            [
                'name' => 'Lindoia',
                'estado_id' => '20',
                'ibge' => '3527009',
            ],
            [
                'name' => 'Lins',
                'estado_id' => '20',
                'ibge' => '3527108',
            ],
            [
                'name' => 'Lorena',
                'estado_id' => '20',
                'ibge' => '3527207',
            ],
            [
                'name' => 'Lourdes',
                'estado_id' => '20',
                'ibge' => '3527256',
            ],
            [
                'name' => 'Louveira',
                'estado_id' => '20',
                'ibge' => '3527306',
            ],
            [
                'name' => 'Lucelia',
                'estado_id' => '20',
                'ibge' => '3527405',
            ],
            [
                'name' => 'Lucianopolis',
                'estado_id' => '20',
                'ibge' => '3527504',
            ],
            [
                'name' => 'Luis Antonio',
                'estado_id' => '20',
                'ibge' => '3527603',
            ],
            [
                'name' => 'Luiziania',
                'estado_id' => '20',
                'ibge' => '3527702',
            ],
            [
                'name' => 'Lupercio',
                'estado_id' => '20',
                'ibge' => '3527801',
            ],
            [
                'name' => 'Lutecia',
                'estado_id' => '20',
                'ibge' => '3527900',
            ],
            [
                'name' => 'Macatuba',
                'estado_id' => '20',
                'ibge' => '3528007',
            ],
            [
                'name' => 'Macaubal',
                'estado_id' => '20',
                'ibge' => '3528106',
            ],
            [
                'name' => 'Macedonia',
                'estado_id' => '20',
                'ibge' => '3528205',
            ],
            [
                'name' => 'Magda',
                'estado_id' => '20',
                'ibge' => '3528304',
            ],
            [
                'name' => 'Mairinque',
                'estado_id' => '20',
                'ibge' => '3528403',
            ],
            [
                'name' => 'Mairipora',
                'estado_id' => '20',
                'ibge' => '3528502',
            ],
            [
                'name' => 'Manduri',
                'estado_id' => '20',
                'ibge' => '3528601',
            ],
            [
                'name' => 'Maraba Paulista',
                'estado_id' => '20',
                'ibge' => '3528700',
            ],
            [
                'name' => 'Maracai',
                'estado_id' => '20',
                'ibge' => '3528809',
            ],
            [
                'name' => 'Marapoama',
                'estado_id' => '20',
                'ibge' => '3528858',
            ],
            [
                'name' => 'Mariapolis',
                'estado_id' => '20',
                'ibge' => '3528908',
            ],
            [
                'name' => 'Marilia',
                'estado_id' => '20',
                'ibge' => '3529005',
            ],
            [
                'name' => 'Marinopolis',
                'estado_id' => '20',
                'ibge' => '3529104',
            ],
            [
                'name' => 'Martinopolis',
                'estado_id' => '20',
                'ibge' => '3529203',
            ],
            [
                'name' => 'Matao',
                'estado_id' => '20',
                'ibge' => '3529302',
            ],
            [
                'name' => 'Maua',
                'estado_id' => '20',
                'ibge' => '3529401',
            ],
            [
                'name' => 'Mendonca',
                'estado_id' => '20',
                'ibge' => '3529500',
            ],
            [
                'name' => 'Meridiano',
                'estado_id' => '20',
                'ibge' => '3529609',
            ],
            [
                'name' => 'Mesopolis',
                'estado_id' => '20',
                'ibge' => '3529658',
            ],
            [
                'name' => 'Miguelopolis',
                'estado_id' => '20',
                'ibge' => '3529708',
            ],
            [
                'name' => 'Mineiros do Tiet�',
                'estado_id' => '20',
                'ibge' => '3529807',
            ],
            [
                'name' => 'Miracatu',
                'estado_id' => '20',
                'ibge' => '3529906',
            ],
            [
                'name' => 'Mira Estrela',
                'estado_id' => '20',
                'ibge' => '3530003',
            ],
            [
                'name' => 'Mirandopolis',
                'estado_id' => '20',
                'ibge' => '3530102',
            ],
            [
                'name' => 'Mirante do Paranapanema',
                'estado_id' => '20',
                'ibge' => '3530201',
            ],
            [
                'name' => 'Mirassol',
                'estado_id' => '20',
                'ibge' => '3530300',
            ],
            [
                'name' => 'Mirassolandia',
                'estado_id' => '20',
                'ibge' => '3530409',
            ],
            [
                'name' => 'Mococa',
                'estado_id' => '20',
                'ibge' => '3530508',
            ],
            [
                'name' => 'Mogi das Cruzes',
                'estado_id' => '20',
                'ibge' => '3530607',
            ],
            [
                'name' => 'Mogi Guacu',
                'estado_id' => '20',
                'ibge' => '3530706',
            ],
            [
                'name' => 'Moji Mirim',
                'estado_id' => '20',
                'ibge' => '3530805',
            ],
            [
                'name' => 'Mombuca',
                'estado_id' => '20',
                'ibge' => '3530904',
            ],
            [
                'name' => 'Monc�es',
                'estado_id' => '20',
                'ibge' => '3531001',
            ],
            [
                'name' => 'Mongagua',
                'estado_id' => '20',
                'ibge' => '3531100',
            ],
            [
                'name' => 'Monte Alegre do Sul',
                'estado_id' => '20',
                'ibge' => '3531209',
            ],
            [
                'name' => 'Monte Alto',
                'estado_id' => '20',
                'ibge' => '3531308',
            ],
            [
                'name' => 'Monte Aprazivel',
                'estado_id' => '20',
                'ibge' => '3531407',
            ],
            [
                'name' => 'Monte Azul Paulista',
                'estado_id' => '20',
                'ibge' => '3531506',
            ],
            [
                'name' => 'Monte Castelo',
                'estado_id' => '20',
                'ibge' => '3531605',
            ],
            [
                'name' => 'Monteiro Lobato',
                'estado_id' => '20',
                'ibge' => '3531704',
            ],
            [
                'name' => 'Monte Mor',
                'estado_id' => '20',
                'ibge' => '3531803',
            ],
            [
                'name' => 'Morro Agudo',
                'estado_id' => '20',
                'ibge' => '3531902',
            ],
            [
                'name' => 'Morungaba',
                'estado_id' => '20',
                'ibge' => '3532009',
            ],
            [
                'name' => 'Motuca',
                'estado_id' => '20',
                'ibge' => '3532058',
            ],
            [
                'name' => 'Murutinga do Sul',
                'estado_id' => '20',
                'ibge' => '3532108',
            ],
            [
                'name' => 'Nantes',
                'estado_id' => '20',
                'ibge' => '3532157',
            ],
            [
                'name' => 'Narandiba',
                'estado_id' => '20',
                'ibge' => '3532207',
            ],
            [
                'name' => 'Natividade da Serra',
                'estado_id' => '20',
                'ibge' => '3532306',
            ],
            [
                'name' => 'Nazare Paulista',
                'estado_id' => '20',
                'ibge' => '3532405',
            ],
            [
                'name' => 'Neves Paulista',
                'estado_id' => '20',
                'ibge' => '3532504',
            ],
            [
                'name' => 'Nhandeara',
                'estado_id' => '20',
                'ibge' => '3532603',
            ],
            [
                'name' => 'Nipoa',
                'estado_id' => '20',
                'ibge' => '3532702',
            ],
            [
                'name' => 'Nova Alianca',
                'estado_id' => '20',
                'ibge' => '3532801',
            ],
            [
                'name' => 'Nova Campina',
                'estado_id' => '20',
                'ibge' => '3532827',
            ],
            [
                'name' => 'Nova Canaa Paulista',
                'estado_id' => '20',
                'ibge' => '3532843',
            ],
            [
                'name' => 'Nova Castilho',
                'estado_id' => '20',
                'ibge' => '3532868',
            ],
            [
                'name' => 'Nova Europa',
                'estado_id' => '20',
                'ibge' => '3532900',
            ],
            [
                'name' => 'Nova Granada',
                'estado_id' => '20',
                'ibge' => '3533007',
            ],
            [
                'name' => 'Nova Guataporanga',
                'estado_id' => '20',
                'ibge' => '3533106',
            ],
            [
                'name' => 'Nova Independ�ncia',
                'estado_id' => '20',
                'ibge' => '3533205',
            ],
            [
                'name' => 'Novais',
                'estado_id' => '20',
                'ibge' => '3533254',
            ],
            [
                'name' => 'Nova Luzitania',
                'estado_id' => '20',
                'ibge' => '3533304',
            ],
            [
                'name' => 'Nova Odessa',
                'estado_id' => '20',
                'ibge' => '3533403',
            ],
            [
                'name' => 'Novo Horizonte',
                'estado_id' => '20',
                'ibge' => '3533502',
            ],
            [
                'name' => 'Nuporanga',
                'estado_id' => '20',
                'ibge' => '3533601',
            ],
            [
                'name' => 'Ocaucu',
                'estado_id' => '20',
                'ibge' => '3533700',
            ],
            [
                'name' => '�leo',
                'estado_id' => '20',
                'ibge' => '3533809',
            ],
            [
                'name' => 'Olimpia',
                'estado_id' => '20',
                'ibge' => '3533908',
            ],
            [
                'name' => 'Onda Verde',
                'estado_id' => '20',
                'ibge' => '3534005',
            ],
            [
                'name' => 'Oriente',
                'estado_id' => '20',
                'ibge' => '3534104',
            ],
            [
                'name' => 'Orindi�va',
                'estado_id' => '20',
                'ibge' => '3534203',
            ],
            [
                'name' => 'Orlandia',
                'estado_id' => '20',
                'ibge' => '3534302',
            ],
            [
                'name' => 'Osasco',
                'estado_id' => '20',
                'ibge' => '3534401',
            ],
            [
                'name' => 'Oscar Bressane',
                'estado_id' => '20',
                'ibge' => '3534500',
            ],
            [
                'name' => 'Osvaldo Cruz',
                'estado_id' => '20',
                'ibge' => '3534609',
            ],
            [
                'name' => 'Ourinhos',
                'estado_id' => '20',
                'ibge' => '3534708',
            ],
            [
                'name' => 'Ouroeste',
                'estado_id' => '20',
                'ibge' => '3534757',
            ],
            [
                'name' => 'Ouro Verde',
                'estado_id' => '20',
                'ibge' => '3534807',
            ],
            [
                'name' => 'Pacaembu',
                'estado_id' => '20',
                'ibge' => '3534906',
            ],
            [
                'name' => 'Palestina',
                'estado_id' => '20',
                'ibge' => '3535002',
            ],
            [
                'name' => 'Palmares Paulista',
                'estado_id' => '20',
                'ibge' => '3535101',
            ],
            [
                'name' => 'Palmital',
                'estado_id' => '20',
                'ibge' => '3535309',
            ],
            [
                'name' => 'Panorama',
                'estado_id' => '20',
                'ibge' => '3535408',
            ],
            [
                'name' => 'Paraguacu Paulista',
                'estado_id' => '20',
                'ibge' => '3535507',
            ],
            [
                'name' => 'Paraibuna',
                'estado_id' => '20',
                'ibge' => '3535606',
            ],
            [
                'name' => 'Paraiso',
                'estado_id' => '20',
                'ibge' => '3535705',
            ],
            [
                'name' => 'Paranapanema',
                'estado_id' => '20',
                'ibge' => '3535804',
            ],
            [
                'name' => 'Paranapua',
                'estado_id' => '20',
                'ibge' => '3535903',
            ],
            [
                'name' => 'Parapua',
                'estado_id' => '20',
                'ibge' => '3536000',
            ],
            [
                'name' => 'Pardinho',
                'estado_id' => '20',
                'ibge' => '3536109',
            ],
            [
                'name' => 'Pariquera-Acu',
                'estado_id' => '20',
                'ibge' => '3536208',
            ],
            [
                'name' => 'Parisi',
                'estado_id' => '20',
                'ibge' => '3536257',
            ],
            [
                'name' => 'Patrocinio Paulista',
                'estado_id' => '20',
                'ibge' => '3536307',
            ],
            [
                'name' => 'Pauliceia',
                'estado_id' => '20',
                'ibge' => '3536406',
            ],
            [
                'name' => 'Paulinia',
                'estado_id' => '20',
                'ibge' => '3536505',
            ],
            [
                'name' => 'Paulistania',
                'estado_id' => '20',
                'ibge' => '3536570',
            ],
            [
                'name' => 'Paulo de Faria',
                'estado_id' => '20',
                'ibge' => '3536604',
            ],
            [
                'name' => 'Pederneiras',
                'estado_id' => '20',
                'ibge' => '3536703',
            ],
            [
                'name' => 'Pedra Bela',
                'estado_id' => '20',
                'ibge' => '3536802',
            ],
            [
                'name' => 'Pedranopolis',
                'estado_id' => '20',
                'ibge' => '3536901',
            ],
            [
                'name' => 'Pedregulho',
                'estado_id' => '20',
                'ibge' => '3537008',
            ],
            [
                'name' => 'Pedreira',
                'estado_id' => '20',
                'ibge' => '3537107',
            ],
            [
                'name' => 'Pedrinhas Paulista',
                'estado_id' => '20',
                'ibge' => '3537156',
            ],
            [
                'name' => 'Pedro de Toledo',
                'estado_id' => '20',
                'ibge' => '3537206',
            ],
            [
                'name' => 'Penapolis',
                'estado_id' => '20',
                'ibge' => '3537305',
            ],
            [
                'name' => 'Pereira Barreto',
                'estado_id' => '20',
                'ibge' => '3537404',
            ],
            [
                'name' => 'Pereiras',
                'estado_id' => '20',
                'ibge' => '3537503',
            ],
            [
                'name' => 'Peruibe',
                'estado_id' => '20',
                'ibge' => '3537602',
            ],
            [
                'name' => 'Piacatu',
                'estado_id' => '20',
                'ibge' => '3537701',
            ],
            [
                'name' => 'Piedade',
                'estado_id' => '20',
                'ibge' => '3537800',
            ],
            [
                'name' => 'Pilar do Sul',
                'estado_id' => '20',
                'ibge' => '3537909',
            ],
            [
                'name' => 'Pindamonhangaba',
                'estado_id' => '20',
                'ibge' => '3538006',
            ],
            [
                'name' => 'Pindorama',
                'estado_id' => '20',
                'ibge' => '3538105',
            ],
            [
                'name' => 'Pinhalzinho',
                'estado_id' => '20',
                'ibge' => '3538204',
            ],
            [
                'name' => 'Piquerobi',
                'estado_id' => '20',
                'ibge' => '3538303',
            ],
            [
                'name' => 'Piquete',
                'estado_id' => '20',
                'ibge' => '3538501',
            ],
            [
                'name' => 'Piracaia',
                'estado_id' => '20',
                'ibge' => '3538600',
            ],
            [
                'name' => 'Piracicaba',
                'estado_id' => '20',
                'ibge' => '3538709',
            ],
            [
                'name' => 'Piraju',
                'estado_id' => '20',
                'ibge' => '3538808',
            ],
            [
                'name' => 'Pirajui',
                'estado_id' => '20',
                'ibge' => '3538907',
            ],
            [
                'name' => 'Pirangi',
                'estado_id' => '20',
                'ibge' => '3539004',
            ],
            [
                'name' => 'Pirapora do Bom Jesus',
                'estado_id' => '20',
                'ibge' => '3539103',
            ],
            [
                'name' => 'Pirapozinho',
                'estado_id' => '20',
                'ibge' => '3539202',
            ],
            [
                'name' => 'Pirassununga',
                'estado_id' => '20',
                'ibge' => '3539301',
            ],
            [
                'name' => 'Piratininga',
                'estado_id' => '20',
                'ibge' => '3539400',
            ],
            [
                'name' => 'Pitangueiras',
                'estado_id' => '20',
                'ibge' => '3539509',
            ],
            [
                'name' => 'Planalto',
                'estado_id' => '20',
                'ibge' => '3539608',
            ],
            [
                'name' => 'Platina',
                'estado_id' => '20',
                'ibge' => '3539707',
            ],
            [
                'name' => 'Poa',
                'estado_id' => '20',
                'ibge' => '3539806',
            ],
            [
                'name' => 'Poloni',
                'estado_id' => '20',
                'ibge' => '3539905',
            ],
            [
                'name' => 'Pompeia',
                'estado_id' => '20',
                'ibge' => '3540002',
            ],
            [
                'name' => 'Pongai',
                'estado_id' => '20',
                'ibge' => '3540101',
            ],
            [
                'name' => 'Pontal',
                'estado_id' => '20',
                'ibge' => '3540200',
            ],
            [
                'name' => 'Pontalinda',
                'estado_id' => '20',
                'ibge' => '3540259',
            ],
            [
                'name' => 'Pontes Gestal',
                'estado_id' => '20',
                'ibge' => '3540309',
            ],
            [
                'name' => 'Populina',
                'estado_id' => '20',
                'ibge' => '3540408',
            ],
            [
                'name' => 'Porangaba',
                'estado_id' => '20',
                'ibge' => '3540507',
            ],
            [
                'name' => 'Porto Feliz',
                'estado_id' => '20',
                'ibge' => '3540606',
            ],
            [
                'name' => 'Porto Ferreira',
                'estado_id' => '20',
                'ibge' => '3540705',
            ],
            [
                'name' => 'Potim',
                'estado_id' => '20',
                'ibge' => '3540754',
            ],
            [
                'name' => 'Potirendaba',
                'estado_id' => '20',
                'ibge' => '3540804',
            ],
            [
                'name' => 'Pracinha',
                'estado_id' => '20',
                'ibge' => '3540853',
            ],
            [
                'name' => 'Pradopolis',
                'estado_id' => '20',
                'ibge' => '3540903',
            ],
            [
                'name' => 'Praia Grande',
                'estado_id' => '20',
                'ibge' => '3541000',
            ],
            [
                'name' => 'Pratania',
                'estado_id' => '20',
                'ibge' => '3541059',
            ],
            [
                'name' => 'Presidente Alves',
                'estado_id' => '20',
                'ibge' => '3541109',
            ],
            [
                'name' => 'Presidente Bernardes',
                'estado_id' => '20',
                'ibge' => '3541208',
            ],
            [
                'name' => 'Presidente Epitacio',
                'estado_id' => '20',
                'ibge' => '3541307',
            ],
            [
                'name' => 'Presidente Prudente',
                'estado_id' => '20',
                'ibge' => '3541406',
            ],
            [
                'name' => 'Presidente Venceslau',
                'estado_id' => '20',
                'ibge' => '3541505',
            ],
            [
                'name' => 'Promissao',
                'estado_id' => '20',
                'ibge' => '3541604',
            ],
            [
                'name' => 'Quadra',
                'estado_id' => '20',
                'ibge' => '3541653',
            ],
            [
                'name' => 'Quata',
                'estado_id' => '20',
                'ibge' => '3541703',
            ],
            [
                'name' => 'Queiroz',
                'estado_id' => '20',
                'ibge' => '3541802',
            ],
            [
                'name' => 'Queluz',
                'estado_id' => '20',
                'ibge' => '3541901',
            ],
            [
                'name' => 'Quintana',
                'estado_id' => '20',
                'ibge' => '3542008',
            ],
            [
                'name' => 'Rafard',
                'estado_id' => '20',
                'ibge' => '3542107',
            ],
            [
                'name' => 'Rancharia',
                'estado_id' => '20',
                'ibge' => '3542206',
            ],
            [
                'name' => 'Redencao da Serra',
                'estado_id' => '20',
                'ibge' => '3542305',
            ],
            [
                'name' => 'Regente Feijo',
                'estado_id' => '20',
                'ibge' => '3542404',
            ],
            [
                'name' => 'Reginopolis',
                'estado_id' => '20',
                'ibge' => '3542503',
            ],
            [
                'name' => 'Registro',
                'estado_id' => '20',
                'ibge' => '3542602',
            ],
            [
                'name' => 'Restinga',
                'estado_id' => '20',
                'ibge' => '3542701',
            ],
            [
                'name' => 'Ribeira',
                'estado_id' => '20',
                'ibge' => '3542800',
            ],
            [
                'name' => 'Ribeirao Bonito',
                'estado_id' => '20',
                'ibge' => '3542909',
            ],
            [
                'name' => 'Ribeirao Branco',
                'estado_id' => '20',
                'ibge' => '3543006',
            ],
            [
                'name' => 'Ribeirao Corrente',
                'estado_id' => '20',
                'ibge' => '3543105',
            ],
            [
                'name' => 'Ribeirao do Sul',
                'estado_id' => '20',
                'ibge' => '3543204',
            ],
            [
                'name' => 'Ribeirao dos �ndios',
                'estado_id' => '20',
                'ibge' => '3543238',
            ],
            [
                'name' => 'Ribeirao Grande',
                'estado_id' => '20',
                'ibge' => '3543253',
            ],
            [
                'name' => 'Ribeirao Pires',
                'estado_id' => '20',
                'ibge' => '3543303',
            ],
            [
                'name' => 'Ribeirao Preto',
                'estado_id' => '20',
                'ibge' => '3543402',
            ],
            [
                'name' => 'Riversul',
                'estado_id' => '20',
                'ibge' => '3543501',
            ],
            [
                'name' => 'Rifaina',
                'estado_id' => '20',
                'ibge' => '3543600',
            ],
            [
                'name' => 'Rincao',
                'estado_id' => '20',
                'ibge' => '3543709',
            ],
            [
                'name' => 'Rinopolis',
                'estado_id' => '20',
                'ibge' => '3543808',
            ],
            [
                'name' => 'Rio Claro',
                'estado_id' => '20',
                'ibge' => '3543907',
            ],
            [
                'name' => 'Rio das Pedras',
                'estado_id' => '20',
                'ibge' => '3544004',
            ],
            [
                'name' => 'Rio Grande da Serra',
                'estado_id' => '20',
                'ibge' => '3544103',
            ],
            [
                'name' => 'Riolandia',
                'estado_id' => '20',
                'ibge' => '3544202',
            ],
            [
                'name' => 'Rosana',
                'estado_id' => '20',
                'ibge' => '3544251',
            ],
            [
                'name' => 'Roseira',
                'estado_id' => '20',
                'ibge' => '3544301',
            ],
            [
                'name' => 'Rubiacea',
                'estado_id' => '20',
                'ibge' => '3544400',
            ],
            [
                'name' => 'Rubineia',
                'estado_id' => '20',
                'ibge' => '3544509',
            ],
            [
                'name' => 'Sabino',
                'estado_id' => '20',
                'ibge' => '3544608',
            ],
            [
                'name' => 'Sagres',
                'estado_id' => '20',
                'ibge' => '3544707',
            ],
            [
                'name' => 'Sales',
                'estado_id' => '20',
                'ibge' => '3544806',
            ],
            [
                'name' => 'Sales Oliveira',
                'estado_id' => '20',
                'ibge' => '3544905',
            ],
            [
                'name' => 'Salesopolis',
                'estado_id' => '20',
                'ibge' => '3545001',
            ],
            [
                'name' => 'Salmourao',
                'estado_id' => '20',
                'ibge' => '3545100',
            ],
            [
                'name' => 'Saltinho',
                'estado_id' => '20',
                'ibge' => '3545159',
            ],
            [
                'name' => 'Salto',
                'estado_id' => '20',
                'ibge' => '3545209',
            ],
            [
                'name' => 'Salto de Pirapora',
                'estado_id' => '20',
                'ibge' => '3545308',
            ],
            [
                'name' => 'Salto Grande',
                'estado_id' => '20',
                'ibge' => '3545407',
            ],
            [
                'name' => 'Sandovalina',
                'estado_id' => '20',
                'ibge' => '3545506',
            ],
            [
                'name' => 'Santa Adelia',
                'estado_id' => '20',
                'ibge' => '3545605',
            ],
            [
                'name' => 'Santa Albertina',
                'estado_id' => '20',
                'ibge' => '3545704',
            ],
            [
                'name' => 'Santa Branca',
                'estado_id' => '20',
                'ibge' => '3546009',
            ],
            [
                'name' => 'Santa Cruz da Conceicao',
                'estado_id' => '20',
                'ibge' => '3546207',
            ],
            [
                'name' => 'Santa Cruz da Esperanca',
                'estado_id' => '20',
                'ibge' => '3546256',
            ],
            [
                'name' => 'Santa Cruz das Palmeiras',
                'estado_id' => '20',
                'ibge' => '3546306',
            ],
            [
                'name' => 'Santa Cruz do Rio Pardo',
                'estado_id' => '20',
                'ibge' => '3546405',
            ],
            [
                'name' => 'Santa Ernestina',
                'estado_id' => '20',
                'ibge' => '3546504',
            ],
            [
                'name' => 'Santa Fe do Sul',
                'estado_id' => '20',
                'ibge' => '3546603',
            ],
            [
                'name' => 'Santa Gertrudes',
                'estado_id' => '20',
                'ibge' => '3546702',
            ],
            [
                'name' => 'Santa Isabel',
                'estado_id' => '20',
                'ibge' => '3546801',
            ],
            [
                'name' => 'Santa L�cia',
                'estado_id' => '20',
                'ibge' => '3546900',
            ],
            [
                'name' => 'Santa Maria da Serra',
                'estado_id' => '20',
                'ibge' => '3547007',
            ],
            [
                'name' => 'Santa Mercedes',
                'estado_id' => '20',
                'ibge' => '3547106',
            ],
            [
                'name' => 'Santana da Ponte Pensa',
                'estado_id' => '20',
                'ibge' => '3547205',
            ],
            [
                'name' => 'Santana de Parnaiba',
                'estado_id' => '20',
                'ibge' => '3547304',
            ],
            [
                'name' => 'Santa Rita do Passa Quatro',
                'estado_id' => '20',
                'ibge' => '3547502',
            ],
            [
                'name' => 'Santa Rosa de Viterbo',
                'estado_id' => '20',
                'ibge' => '3547601',
            ],
            [
                'name' => 'Santa Salete',
                'estado_id' => '20',
                'ibge' => '3547650',
            ],
            [
                'name' => 'Santo Anastacio',
                'estado_id' => '20',
                'ibge' => '3547700',
            ],
            [
                'name' => 'Santo Andre',
                'estado_id' => '20',
                'ibge' => '3547809',
            ],
            [
                'name' => 'Santo Antonio da Alegria',
                'estado_id' => '20',
                'ibge' => '3547908',
            ],
            [
                'name' => 'Santo Antonio de Posse',
                'estado_id' => '20',
                'ibge' => '3548005',
            ],
            [
                'name' => 'Santo Antonio do Aracangua',
                'estado_id' => '20',
                'ibge' => '3548054',
            ],
            [
                'name' => 'Santo Antonio do Jardim',
                'estado_id' => '20',
                'ibge' => '3548104',
            ],
            [
                'name' => 'Santo Antonio do Pinhal',
                'estado_id' => '20',
                'ibge' => '3548203',
            ],
            [
                'name' => 'Santo Expedito',
                'estado_id' => '20',
                'ibge' => '3548302',
            ],
            [
                'name' => 'Santopolis do Aguapei',
                'estado_id' => '20',
                'ibge' => '3548401',
            ],
            [
                'name' => 'Santos',
                'estado_id' => '20',
                'ibge' => '3548500',
            ],
            [
                'name' => 'Sao Bento do Sapucai',
                'estado_id' => '20',
                'ibge' => '3548609',
            ],
            [
                'name' => 'Sao Bernardo do Campo',
                'estado_id' => '20',
                'ibge' => '3548708',
            ],
            [
                'name' => 'Sao Caetano do Sul',
                'estado_id' => '20',
                'ibge' => '3548807',
            ],
            [
                'name' => 'Sao Carlos',
                'estado_id' => '20',
                'ibge' => '3548906',
            ],
            [
                'name' => 'Sao Francisco',
                'estado_id' => '20',
                'ibge' => '3549003',
            ],
            [
                'name' => 'Sao Joao da Boa Vista',
                'estado_id' => '20',
                'ibge' => '3549102',
            ],
            [
                'name' => 'Sao Joao das Duas Pontes',
                'estado_id' => '20',
                'ibge' => '3549201',
            ],
            [
                'name' => 'Sao Joao de Iracema',
                'estado_id' => '20',
                'ibge' => '3549250',
            ],
            [
                'name' => 'Sao Joaquim da Barra',
                'estado_id' => '20',
                'ibge' => '3549409',
            ],
            [
                'name' => 'Sao Jose da Bela Vista',
                'estado_id' => '20',
                'ibge' => '3549508',
            ],
            [
                'name' => 'Sao Jose do Barreiro',
                'estado_id' => '20',
                'ibge' => '3549607',
            ],
            [
                'name' => 'Sao Jose do Rio Pardo',
                'estado_id' => '20',
                'ibge' => '3549706',
            ],
            [
                'name' => 'Sao Jose do Rio Preto',
                'estado_id' => '20',
                'ibge' => '3549805',
            ],
            [
                'name' => 'Sao Jose dos Campos',
                'estado_id' => '20',
                'ibge' => '3549904',
            ],
            [
                'name' => 'Sao Lourenco da Serra',
                'estado_id' => '20',
                'ibge' => '3549953',
            ],
            [
                'name' => 'Sao Luis do Paraitinga',
                'estado_id' => '20',
                'ibge' => '3550001',
            ],
            [
                'name' => 'Sao Manuel',
                'estado_id' => '20',
                'ibge' => '3550100',
            ],
            [
                'name' => 'Sao Miguel Arcanjo',
                'estado_id' => '20',
                'ibge' => '3550209',
            ],
            [
                'name' => 'Sao Paulo',
                'estado_id' => '20',
                'ibge' => '3550308',
            ],
            [
                'name' => 'Sao Pedro',
                'estado_id' => '20',
                'ibge' => '3550407',
            ],
            [
                'name' => 'Sao Pedro do Turvo',
                'estado_id' => '20',
                'ibge' => '3550506',
            ],
            [
                'name' => 'Sao Roque',
                'estado_id' => '20',
                'ibge' => '3550605',
            ],
            [
                'name' => 'Sao Sebastiao',
                'estado_id' => '20',
                'ibge' => '3550704',
            ],
            [
                'name' => 'Sao Sebastiao da Grama',
                'estado_id' => '20',
                'ibge' => '3550803',
            ],
            [
                'name' => 'Sao Simao',
                'estado_id' => '20',
                'ibge' => '3550902',
            ],
            [
                'name' => 'Sao Vicente',
                'estado_id' => '20',
                'ibge' => '3551009',
            ],
            [
                'name' => 'Sarapui',
                'estado_id' => '20',
                'ibge' => '3551108',
            ],
            [
                'name' => 'Sarutaia',
                'estado_id' => '20',
                'ibge' => '3551207',
            ],
            [
                'name' => 'Sebastianopolis do Sul',
                'estado_id' => '20',
                'ibge' => '3551306',
            ],
            [
                'name' => 'Serra Azul',
                'estado_id' => '20',
                'ibge' => '3551405',
            ],
            [
                'name' => 'Serrana',
                'estado_id' => '20',
                'ibge' => '3551504',
            ],
            [
                'name' => 'Serra Negra',
                'estado_id' => '20',
                'ibge' => '3551603',
            ],
            [
                'name' => 'Sertaozinho',
                'estado_id' => '20',
                'ibge' => '3551702',
            ],
            [
                'name' => 'Sete Barras',
                'estado_id' => '20',
                'ibge' => '3551801',
            ],
            [
                'name' => 'Severinia',
                'estado_id' => '20',
                'ibge' => '3551900',
            ],
            [
                'name' => 'Silveiras',
                'estado_id' => '20',
                'ibge' => '3552007',
            ],
            [
                'name' => 'Socorro',
                'estado_id' => '20',
                'ibge' => '3552106',
            ],
            [
                'name' => 'Sorocaba',
                'estado_id' => '20',
                'ibge' => '3552205',
            ],
            [
                'name' => 'Sud Mennucci',
                'estado_id' => '20',
                'ibge' => '3552304',
            ],
            [
                'name' => 'Sumare',
                'estado_id' => '20',
                'ibge' => '3552403',
            ],
            [
                'name' => 'Suzano',
                'estado_id' => '20',
                'ibge' => '3552502',
            ],
            [
                'name' => 'Suzanapolis',
                'estado_id' => '20',
                'ibge' => '3552551',
            ],
            [
                'name' => 'Tabapua',
                'estado_id' => '20',
                'ibge' => '3552601',
            ],
            [
                'name' => 'Tabatinga',
                'estado_id' => '20',
                'ibge' => '3552700',
            ],
            [
                'name' => 'Taboao da Serra',
                'estado_id' => '20',
                'ibge' => '3552809',
            ],
            [
                'name' => 'Taciba',
                'estado_id' => '20',
                'ibge' => '3552908',
            ],
            [
                'name' => 'Taguai',
                'estado_id' => '20',
                'ibge' => '3553005',
            ],
            [
                'name' => 'Taiacu',
                'estado_id' => '20',
                'ibge' => '3553104',
            ],
            [
                'name' => 'Tai�va',
                'estado_id' => '20',
                'ibge' => '3553203',
            ],
            [
                'name' => 'Tamba�',
                'estado_id' => '20',
                'ibge' => '3553302',
            ],
            [
                'name' => 'Tanabi',
                'estado_id' => '20',
                'ibge' => '3553401',
            ],
            [
                'name' => 'Tapirai',
                'estado_id' => '20',
                'ibge' => '3553500',
            ],
            [
                'name' => 'Tapiratiba',
                'estado_id' => '20',
                'ibge' => '3553609',
            ],
            [
                'name' => 'Taquaral',
                'estado_id' => '20',
                'ibge' => '3553658',
            ],
            [
                'name' => 'Taquaritinga',
                'estado_id' => '20',
                'ibge' => '3553708',
            ],
            [
                'name' => 'Taquarituba',
                'estado_id' => '20',
                'ibge' => '3553807',
            ],
            [
                'name' => 'Taquarivai',
                'estado_id' => '20',
                'ibge' => '3553856',
            ],
            [
                'name' => 'Tarabai',
                'estado_id' => '20',
                'ibge' => '3553906',
            ],
            [
                'name' => 'Taruma',
                'estado_id' => '20',
                'ibge' => '3553955',
            ],
            [
                'name' => 'Tatui',
                'estado_id' => '20',
                'ibge' => '3554003',
            ],
            [
                'name' => 'Taubate',
                'estado_id' => '20',
                'ibge' => '3554102',
            ],
            [
                'name' => 'Tejupa',
                'estado_id' => '20',
                'ibge' => '3554201',
            ],
            [
                'name' => 'Teodoro Sampaio',
                'estado_id' => '20',
                'ibge' => '3554300',
            ],
            [
                'name' => 'Terra Roxa',
                'estado_id' => '20',
                'ibge' => '3554409',
            ],
            [
                'name' => 'Tiet�',
                'estado_id' => '20',
                'ibge' => '3554508',
            ],
            [
                'name' => 'Timburi',
                'estado_id' => '20',
                'ibge' => '3554607',
            ],
            [
                'name' => 'Torre de Pedra',
                'estado_id' => '20',
                'ibge' => '3554656',
            ],
            [
                'name' => 'Torrinha',
                'estado_id' => '20',
                'ibge' => '3554706',
            ],
            [
                'name' => 'Trabiju',
                'estado_id' => '20',
                'ibge' => '3554755',
            ],
            [
                'name' => 'Tremembe',
                'estado_id' => '20',
                'ibge' => '3554805',
            ],
            [
                'name' => 'Tr�s Fronteiras',
                'estado_id' => '20',
                'ibge' => '3554904',
            ],
            [
                'name' => 'Tuiuti',
                'estado_id' => '20',
                'ibge' => '3554953',
            ],
            [
                'name' => 'Tupa',
                'estado_id' => '20',
                'ibge' => '3555000',
            ],
            [
                'name' => 'Tupi Paulista',
                'estado_id' => '20',
                'ibge' => '3555109',
            ],
            [
                'name' => 'Turi�ba',
                'estado_id' => '20',
                'ibge' => '3555208',
            ],
            [
                'name' => 'Turmalina',
                'estado_id' => '20',
                'ibge' => '3555307',
            ],
            [
                'name' => 'Ubarana',
                'estado_id' => '20',
                'ibge' => '3555356',
            ],
            [
                'name' => 'Ubatuba',
                'estado_id' => '20',
                'ibge' => '3555406',
            ],
            [
                'name' => 'Ubirajara',
                'estado_id' => '20',
                'ibge' => '3555505',
            ],
            [
                'name' => 'Uchoa',
                'estado_id' => '20',
                'ibge' => '3555604',
            ],
            [
                'name' => 'Uniao Paulista',
                'estado_id' => '20',
                'ibge' => '3555703',
            ],
            [
                'name' => 'Urania',
                'estado_id' => '20',
                'ibge' => '3555802',
            ],
            [
                'name' => 'Uru',
                'estado_id' => '20',
                'ibge' => '3555901',
            ],
            [
                'name' => 'Urup�s',
                'estado_id' => '20',
                'ibge' => '3556008',
            ],
            [
                'name' => 'Valentim Gentil',
                'estado_id' => '20',
                'ibge' => '3556107',
            ],
            [
                'name' => 'Valinhos',
                'estado_id' => '20',
                'ibge' => '3556206',
            ],
            [
                'name' => 'Valparaiso',
                'estado_id' => '20',
                'ibge' => '3556305',
            ],
            [
                'name' => 'Vargem',
                'estado_id' => '20',
                'ibge' => '3556354',
            ],
            [
                'name' => 'Vargem Grande do Sul',
                'estado_id' => '20',
                'ibge' => '3556404',
            ],
            [
                'name' => 'Vargem Grande Paulista',
                'estado_id' => '20',
                'ibge' => '3556453',
            ],
            [
                'name' => 'Varzea Paulista',
                'estado_id' => '20',
                'ibge' => '3556503',
            ],
            [
                'name' => 'Vera Cruz',
                'estado_id' => '20',
                'ibge' => '3556602',
            ],
            [
                'name' => 'Vinhedo',
                'estado_id' => '20',
                'ibge' => '3556701',
            ],
            [
                'name' => 'Viradouro',
                'estado_id' => '20',
                'ibge' => '3556800',
            ],
            [
                'name' => 'Vista Alegre do Alto',
                'estado_id' => '20',
                'ibge' => '3556909',
            ],
            [
                'name' => 'Vitoria Brasil',
                'estado_id' => '20',
                'ibge' => '3556958',
            ],
            [
                'name' => 'Votorantim',
                'estado_id' => '20',
                'ibge' => '3557006',
            ],
            [
                'name' => 'Votuporanga',
                'estado_id' => '20',
                'ibge' => '3557105',
            ],
            [
                'name' => 'Zacarias',
                'estado_id' => '20',
                'ibge' => '3557154',
            ],
            [
                'name' => 'Chavantes',
                'estado_id' => '20',
                'ibge' => '3557204',
            ],
            [
                'name' => 'Estiva Gerbi',
                'estado_id' => '20',
                'ibge' => '3557303',
            ],
            [
                'name' => 'Sao Joao do Pau D Alho ',
                'estado_id' => '20',
                'ibge' => '3549300',
            ],
            [
                'name' => 'Santa Rita D Oeste ',
                'estado_id' => '20',
                'ibge' => '3547403',
            ],
            [
                'name' => 'Santa Clara D Oeste ',
                'estado_id' => '20',
                'ibge' => '3546108',
            ],
            [
                'name' => 'Santa Barbara D Oeste ',
                'estado_id' => '20',
                'ibge' => '3545803',
            ],
            [
                'name' => 'Palmeira D Oeste ',
                'estado_id' => '20',
                'ibge' => '3535200',
            ],
            [
                'name' => 'Guarani D Oeste ',
                'estado_id' => '20',
                'ibge' => '3518008',
            ],
            [
                'name' => 'Estrela D Oeste ',
                'estado_id' => '20',
                'ibge' => '3515202',
            ],
            [
                'name' => 'Aparecida D Oeste ',
                'estado_id' => '20',
                'ibge' => '3502606',
            ],

            /* Paraná */

            [
                'name' => 'Abatia',
                'estado_id' => '21',
                'ibge' => '4100103',
            ],
            [
                'name' => 'Adrianopolis',
                'estado_id' => '21',
                'ibge' => '4100202',
            ],
            [
                'name' => 'Agudos do Sul',
                'estado_id' => '21',
                'ibge' => '4100301',
            ],
            [
                'name' => 'Almirante Tamandare',
                'estado_id' => '21',
                'ibge' => '4100400',
            ],
            [
                'name' => 'Altamira do Parana',
                'estado_id' => '21',
                'ibge' => '4100459',
            ],
            [
                'name' => 'Altonia',
                'estado_id' => '21',
                'ibge' => '4100509',
            ],
            [
                'name' => 'Alto Parana',
                'estado_id' => '21',
                'ibge' => '4100608',
            ],
            [
                'name' => 'Alto Piquiri',
                'estado_id' => '21',
                'ibge' => '4100707',
            ],
            [
                'name' => 'Alvorada do Sul',
                'estado_id' => '21',
                'ibge' => '4100806',
            ],
            [
                'name' => 'Amapora',
                'estado_id' => '21',
                'ibge' => '4100905',
            ],
            [
                'name' => 'Ampere',
                'estado_id' => '21',
                'ibge' => '4101002',
            ],
            [
                'name' => 'Anahy',
                'estado_id' => '21',
                'ibge' => '4101051',
            ],
            [
                'name' => 'Andira',
                'estado_id' => '21',
                'ibge' => '4101101',
            ],
            [
                'name' => '�ngulo',
                'estado_id' => '21',
                'ibge' => '4101150',
            ],
            [
                'name' => 'Antonina',
                'estado_id' => '21',
                'ibge' => '4101200',
            ],
            [
                'name' => 'Antonio Olinto',
                'estado_id' => '21',
                'ibge' => '4101309',
            ],
            [
                'name' => 'Apucarana',
                'estado_id' => '21',
                'ibge' => '4101408',
            ],
            [
                'name' => 'Arapongas',
                'estado_id' => '21',
                'ibge' => '4101507',
            ],
            [
                'name' => 'Arapoti',
                'estado_id' => '21',
                'ibge' => '4101606',
            ],
            [
                'name' => 'Arapua',
                'estado_id' => '21',
                'ibge' => '4101655',
            ],
            [
                'name' => 'Araruna',
                'estado_id' => '21',
                'ibge' => '4101705',
            ],
            [
                'name' => 'Araucaria',
                'estado_id' => '21',
                'ibge' => '4101804',
            ],
            [
                'name' => 'Ariranha do Ivai',
                'estado_id' => '21',
                'ibge' => '4101853',
            ],
            [
                'name' => 'Assai',
                'estado_id' => '21',
                'ibge' => '4101903',
            ],
            [
                'name' => 'Assis Chateaubriand',
                'estado_id' => '21',
                'ibge' => '4102000',
            ],
            [
                'name' => 'Astorga',
                'estado_id' => '21',
                'ibge' => '4102109',
            ],
            [
                'name' => 'Atalaia',
                'estado_id' => '21',
                'ibge' => '4102208',
            ],
            [
                'name' => 'Balsa Nova',
                'estado_id' => '21',
                'ibge' => '4102307',
            ],
            [
                'name' => 'Bandeirantes',
                'estado_id' => '21',
                'ibge' => '4102406',
            ],
            [
                'name' => 'Barbosa Ferraz',
                'estado_id' => '21',
                'ibge' => '4102505',
            ],
            [
                'name' => 'Barracao',
                'estado_id' => '21',
                'ibge' => '4102604',
            ],
            [
                'name' => 'Barra do Jacare',
                'estado_id' => '21',
                'ibge' => '4102703',
            ],
            [
                'name' => 'Bela Vista da Caroba',
                'estado_id' => '21',
                'ibge' => '4102752',
            ],
            [
                'name' => 'Bela Vista do Paraiso',
                'estado_id' => '21',
                'ibge' => '4102802',
            ],
            [
                'name' => 'Bituruna',
                'estado_id' => '21',
                'ibge' => '4102901',
            ],
            [
                'name' => 'Boa Esperanca',
                'estado_id' => '21',
                'ibge' => '4103008',
            ],
            [
                'name' => 'Boa Esperanca do Iguacu',
                'estado_id' => '21',
                'ibge' => '4103024',
            ],
            [
                'name' => 'Boa Ventura de Sao Roque',
                'estado_id' => '21',
                'ibge' => '4103040',
            ],
            [
                'name' => 'Boa Vista da Aparecida',
                'estado_id' => '21',
                'ibge' => '4103057',
            ],
            [
                'name' => 'Bocai�va do Sul',
                'estado_id' => '21',
                'ibge' => '4103107',
            ],
            [
                'name' => 'Bom Jesus do Sul',
                'estado_id' => '21',
                'ibge' => '4103156',
            ],
            [
                'name' => 'Bom Sucesso',
                'estado_id' => '21',
                'ibge' => '4103206',
            ],
            [
                'name' => 'Bom Sucesso do Sul',
                'estado_id' => '21',
                'ibge' => '4103222',
            ],
            [
                'name' => 'Borrazopolis',
                'estado_id' => '21',
                'ibge' => '4103305',
            ],
            [
                'name' => 'Braganey',
                'estado_id' => '21',
                'ibge' => '4103354',
            ],
            [
                'name' => 'Brasilandia do Sul',
                'estado_id' => '21',
                'ibge' => '4103370',
            ],
            [
                'name' => 'Cafeara',
                'estado_id' => '21',
                'ibge' => '4103404',
            ],
            [
                'name' => 'Cafelandia',
                'estado_id' => '21',
                'ibge' => '4103453',
            ],
            [
                'name' => 'Cafezal do Sul',
                'estado_id' => '21',
                'ibge' => '4103479',
            ],
            [
                'name' => 'California',
                'estado_id' => '21',
                'ibge' => '4103503',
            ],
            [
                'name' => 'Cambara',
                'estado_id' => '21',
                'ibge' => '4103602',
            ],
            [
                'name' => 'Cambe',
                'estado_id' => '21',
                'ibge' => '4103701',
            ],
            [
                'name' => 'Cambira',
                'estado_id' => '21',
                'ibge' => '4103800',
            ],
            [
                'name' => 'Campina da Lagoa',
                'estado_id' => '21',
                'ibge' => '4103909',
            ],
            [
                'name' => 'Campina do Simao',
                'estado_id' => '21',
                'ibge' => '4103958',
            ],
            [
                'name' => 'Campina Grande do Sul',
                'estado_id' => '21',
                'ibge' => '4104006',
            ],
            [
                'name' => 'Campo Bonito',
                'estado_id' => '21',
                'ibge' => '4104055',
            ],
            [
                'name' => 'Campo do Tenente',
                'estado_id' => '21',
                'ibge' => '4104105',
            ],
            [
                'name' => 'Campo Largo',
                'estado_id' => '21',
                'ibge' => '4104204',
            ],
            [
                'name' => 'Campo Magro',
                'estado_id' => '21',
                'ibge' => '4104253',
            ],
            [
                'name' => 'Campo Mourao',
                'estado_id' => '21',
                'ibge' => '4104303',
            ],
            [
                'name' => 'Candido de Abreu',
                'estado_id' => '21',
                'ibge' => '4104402',
            ],
            [
                'name' => 'Candoi',
                'estado_id' => '21',
                'ibge' => '4104428',
            ],
            [
                'name' => 'Cantagalo',
                'estado_id' => '21',
                'ibge' => '4104451',
            ],
            [
                'name' => 'Capanema',
                'estado_id' => '21',
                'ibge' => '4104501',
            ],
            [
                'name' => 'Capitao Leonidas Marques',
                'estado_id' => '21',
                'ibge' => '4104600',
            ],
            [
                'name' => 'Carambei',
                'estado_id' => '21',
                'ibge' => '4104659',
            ],
            [
                'name' => 'Carlopolis',
                'estado_id' => '21',
                'ibge' => '4104709',
            ],
            [
                'name' => 'Cascavel',
                'estado_id' => '21',
                'ibge' => '4104808',
            ],
            [
                'name' => 'Castro',
                'estado_id' => '21',
                'ibge' => '4104907',
            ],
            [
                'name' => 'Catanduvas',
                'estado_id' => '21',
                'ibge' => '4105003',
            ],
            [
                'name' => 'Centenario do Sul',
                'estado_id' => '21',
                'ibge' => '4105102',
            ],
            [
                'name' => 'Cerro Azul',
                'estado_id' => '21',
                'ibge' => '4105201',
            ],
            [
                'name' => 'Ceu Azul',
                'estado_id' => '21',
                'ibge' => '4105300',
            ],
            [
                'name' => 'Chopinzinho',
                'estado_id' => '21',
                'ibge' => '4105409',
            ],
            [
                'name' => 'Cianorte',
                'estado_id' => '21',
                'ibge' => '4105508',
            ],
            [
                'name' => 'Cidade Ga�cha',
                'estado_id' => '21',
                'ibge' => '4105607',
            ],
            [
                'name' => 'Clevelandia',
                'estado_id' => '21',
                'ibge' => '4105706',
            ],
            [
                'name' => 'Colombo',
                'estado_id' => '21',
                'ibge' => '4105805',
            ],
            [
                'name' => 'Colorado',
                'estado_id' => '21',
                'ibge' => '4105904',
            ],
            [
                'name' => 'Congonhinhas',
                'estado_id' => '21',
                'ibge' => '4106001',
            ],
            [
                'name' => 'Conselheiro Mairinck',
                'estado_id' => '21',
                'ibge' => '4106100',
            ],
            [
                'name' => 'Contenda',
                'estado_id' => '21',
                'ibge' => '4106209',
            ],
            [
                'name' => 'Corbelia',
                'estado_id' => '21',
                'ibge' => '4106308',
            ],
            [
                'name' => 'Cornelio Procopio',
                'estado_id' => '21',
                'ibge' => '4106407',
            ],
            [
                'name' => 'Coronel Domingos Soares',
                'estado_id' => '21',
                'ibge' => '4106456',
            ],
            [
                'name' => 'Coronel Vivida',
                'estado_id' => '21',
                'ibge' => '4106506',
            ],
            [
                'name' => 'Corumbatai do Sul',
                'estado_id' => '21',
                'ibge' => '4106555',
            ],
            [
                'name' => 'Cruzeiro do Iguacu',
                'estado_id' => '21',
                'ibge' => '4106571',
            ],
            [
                'name' => 'Cruzeiro do Oeste',
                'estado_id' => '21',
                'ibge' => '4106605',
            ],
            [
                'name' => 'Cruzeiro do Sul',
                'estado_id' => '21',
                'ibge' => '4106704',
            ],
            [
                'name' => 'Cruz Machado',
                'estado_id' => '21',
                'ibge' => '4106803',
            ],
            [
                'name' => 'Cruzmaltina',
                'estado_id' => '21',
                'ibge' => '4106852',
            ],
            [
                'name' => 'Curitiba',
                'estado_id' => '21',
                'ibge' => '4106902',
            ],
            [
                'name' => 'Curi�va',
                'estado_id' => '21',
                'ibge' => '4107009',
            ],
            [
                'name' => 'Diamante do Norte',
                'estado_id' => '21',
                'ibge' => '4107108',
            ],
            [
                'name' => 'Diamante do Sul',
                'estado_id' => '21',
                'ibge' => '4107124',
            ],
            [
                'name' => 'Dois Vizinhos',
                'estado_id' => '21',
                'ibge' => '4107207',
            ],
            [
                'name' => 'Douradina',
                'estado_id' => '21',
                'ibge' => '4107256',
            ],
            [
                'name' => 'Doutor Camargo',
                'estado_id' => '21',
                'ibge' => '4107306',
            ],
            [
                'name' => 'Eneas Marques',
                'estado_id' => '21',
                'ibge' => '4107405',
            ],
            [
                'name' => 'Engenheiro Beltrao',
                'estado_id' => '21',
                'ibge' => '4107504',
            ],
            [
                'name' => 'Esperanca Nova',
                'estado_id' => '21',
                'ibge' => '4107520',
            ],
            [
                'name' => 'Entre Rios do Oeste',
                'estado_id' => '21',
                'ibge' => '4107538',
            ],
            [
                'name' => 'Espigao Alto do Iguacu',
                'estado_id' => '21',
                'ibge' => '4107546',
            ],
            [
                'name' => 'Farol',
                'estado_id' => '21',
                'ibge' => '4107553',
            ],
            [
                'name' => 'Faxinal',
                'estado_id' => '21',
                'ibge' => '4107603',
            ],
            [
                'name' => 'Fazenda Rio Grande',
                'estado_id' => '21',
                'ibge' => '4107652',
            ],
            [
                'name' => 'F�nix',
                'estado_id' => '21',
                'ibge' => '4107702',
            ],
            [
                'name' => 'Fernandes Pinheiro',
                'estado_id' => '21',
                'ibge' => '4107736',
            ],
            [
                'name' => 'Figueira',
                'estado_id' => '21',
                'ibge' => '4107751',
            ],
            [
                'name' => 'Florai',
                'estado_id' => '21',
                'ibge' => '4107801',
            ],
            [
                'name' => 'Flor da Serra do Sul',
                'estado_id' => '21',
                'ibge' => '4107850',
            ],
            [
                'name' => 'Floresta',
                'estado_id' => '21',
                'ibge' => '4107900',
            ],
            [
                'name' => 'Florestopolis',
                'estado_id' => '21',
                'ibge' => '4108007',
            ],
            [
                'name' => 'Florida',
                'estado_id' => '21',
                'ibge' => '4108106',
            ],
            [
                'name' => 'Formosa do Oeste',
                'estado_id' => '21',
                'ibge' => '4108205',
            ],
            [
                'name' => 'Foz do Iguacu',
                'estado_id' => '21',
                'ibge' => '4108304',
            ],
            [
                'name' => 'Francisco Alves',
                'estado_id' => '21',
                'ibge' => '4108320',
            ],
            [
                'name' => 'Francisco Beltrao',
                'estado_id' => '21',
                'ibge' => '4108403',
            ],
            [
                'name' => 'Foz do Jordao',
                'estado_id' => '21',
                'ibge' => '4108452',
            ],
            [
                'name' => 'General Carneiro',
                'estado_id' => '21',
                'ibge' => '4108502',
            ],
            [
                'name' => 'Godoy Moreira',
                'estado_id' => '21',
                'ibge' => '4108551',
            ],
            [
                'name' => 'Goioer�',
                'estado_id' => '21',
                'ibge' => '4108601',
            ],
            [
                'name' => 'Goioxim',
                'estado_id' => '21',
                'ibge' => '4108650',
            ],
            [
                'name' => 'Grandes Rios',
                'estado_id' => '21',
                'ibge' => '4108700',
            ],
            [
                'name' => 'Guaira',
                'estado_id' => '21',
                'ibge' => '4108809',
            ],
            [
                'name' => 'Guairaca',
                'estado_id' => '21',
                'ibge' => '4108908',
            ],
            [
                'name' => 'Guamiranga',
                'estado_id' => '21',
                'ibge' => '4108957',
            ],
            [
                'name' => 'Guapirama',
                'estado_id' => '21',
                'ibge' => '4109005',
            ],
            [
                'name' => 'Guaporema',
                'estado_id' => '21',
                'ibge' => '4109104',
            ],
            [
                'name' => 'Guaraci',
                'estado_id' => '21',
                'ibge' => '4109203',
            ],
            [
                'name' => 'Guaraniacu',
                'estado_id' => '21',
                'ibge' => '4109302',
            ],
            [
                'name' => 'Guarapuava',
                'estado_id' => '21',
                'ibge' => '4109401',
            ],
            [
                'name' => 'Guaraquecaba',
                'estado_id' => '21',
                'ibge' => '4109500',
            ],
            [
                'name' => 'Guaratuba',
                'estado_id' => '21',
                'ibge' => '4109609',
            ],
            [
                'name' => 'Honorio Serpa',
                'estado_id' => '21',
                'ibge' => '4109658',
            ],
            [
                'name' => 'Ibaiti',
                'estado_id' => '21',
                'ibge' => '4109708',
            ],
            [
                'name' => 'Ibema',
                'estado_id' => '21',
                'ibge' => '4109757',
            ],
            [
                'name' => 'Ibipora',
                'estado_id' => '21',
                'ibge' => '4109807',
            ],
            [
                'name' => 'Icaraima',
                'estado_id' => '21',
                'ibge' => '4109906',
            ],
            [
                'name' => 'Iguaracu',
                'estado_id' => '21',
                'ibge' => '4110003',
            ],
            [
                'name' => 'Iguatu',
                'estado_id' => '21',
                'ibge' => '4110052',
            ],
            [
                'name' => 'Imba�',
                'estado_id' => '21',
                'ibge' => '4110078',
            ],
            [
                'name' => 'Imbituva',
                'estado_id' => '21',
                'ibge' => '4110102',
            ],
            [
                'name' => 'Inacio Martins',
                'estado_id' => '21',
                'ibge' => '4110201',
            ],
            [
                'name' => 'Inaja',
                'estado_id' => '21',
                'ibge' => '4110300',
            ],
            [
                'name' => 'Indianopolis',
                'estado_id' => '21',
                'ibge' => '4110409',
            ],
            [
                'name' => 'Ipiranga',
                'estado_id' => '21',
                'ibge' => '4110508',
            ],
            [
                'name' => 'Ipora',
                'estado_id' => '21',
                'ibge' => '4110607',
            ],
            [
                'name' => 'Iracema do Oeste',
                'estado_id' => '21',
                'ibge' => '4110656',
            ],
            [
                'name' => 'Irati',
                'estado_id' => '21',
                'ibge' => '4110706',
            ],
            [
                'name' => 'Iretama',
                'estado_id' => '21',
                'ibge' => '4110805',
            ],
            [
                'name' => 'Itaguaje',
                'estado_id' => '21',
                'ibge' => '4110904',
            ],
            [
                'name' => 'Itaipulandia',
                'estado_id' => '21',
                'ibge' => '4110953',
            ],
            [
                'name' => 'Itambaraca',
                'estado_id' => '21',
                'ibge' => '4111001',
            ],
            [
                'name' => 'Itambe',
                'estado_id' => '21',
                'ibge' => '4111100',
            ],
            [
                'name' => 'Itaperucu',
                'estado_id' => '21',
                'ibge' => '4111258',
            ],
            [
                'name' => 'Ita�na do Sul',
                'estado_id' => '21',
                'ibge' => '4111308',
            ],
            [
                'name' => 'Ivai',
                'estado_id' => '21',
                'ibge' => '4111407',
            ],
            [
                'name' => 'Ivaipora',
                'estado_id' => '21',
                'ibge' => '4111506',
            ],
            [
                'name' => 'Ivate',
                'estado_id' => '21',
                'ibge' => '4111555',
            ],
            [
                'name' => 'Ivatuba',
                'estado_id' => '21',
                'ibge' => '4111605',
            ],
            [
                'name' => 'Jaboti',
                'estado_id' => '21',
                'ibge' => '4111704',
            ],
            [
                'name' => 'Jacarezinho',
                'estado_id' => '21',
                'ibge' => '4111803',
            ],
            [
                'name' => 'Jaguapita',
                'estado_id' => '21',
                'ibge' => '4111902',
            ],
            [
                'name' => 'Jaguariaiva',
                'estado_id' => '21',
                'ibge' => '4112009',
            ],
            [
                'name' => 'Jandaia do Sul',
                'estado_id' => '21',
                'ibge' => '4112108',
            ],
            [
                'name' => 'Janiopolis',
                'estado_id' => '21',
                'ibge' => '4112207',
            ],
            [
                'name' => 'Japira',
                'estado_id' => '21',
                'ibge' => '4112306',
            ],
            [
                'name' => 'Japura',
                'estado_id' => '21',
                'ibge' => '4112405',
            ],
            [
                'name' => 'Jardim Alegre',
                'estado_id' => '21',
                'ibge' => '4112504',
            ],
            [
                'name' => 'Jardim Olinda',
                'estado_id' => '21',
                'ibge' => '4112603',
            ],
            [
                'name' => 'Jataizinho',
                'estado_id' => '21',
                'ibge' => '4112702',
            ],
            [
                'name' => 'Jesuitas',
                'estado_id' => '21',
                'ibge' => '4112751',
            ],
            [
                'name' => 'Joaquim Tavora',
                'estado_id' => '21',
                'ibge' => '4112801',
            ],
            [
                'name' => 'Jundiai do Sul',
                'estado_id' => '21',
                'ibge' => '4112900',
            ],
            [
                'name' => 'Juranda',
                'estado_id' => '21',
                'ibge' => '4112959',
            ],
            [
                'name' => 'Jussara',
                'estado_id' => '21',
                'ibge' => '4113007',
            ],
            [
                'name' => 'Kalore',
                'estado_id' => '21',
                'ibge' => '4113106',
            ],
            [
                'name' => 'Lapa',
                'estado_id' => '21',
                'ibge' => '4113205',
            ],
            [
                'name' => 'Laranjal',
                'estado_id' => '21',
                'ibge' => '4113254',
            ],
            [
                'name' => 'Laranjeiras do Sul',
                'estado_id' => '21',
                'ibge' => '4113304',
            ],
            [
                'name' => 'Leopolis',
                'estado_id' => '21',
                'ibge' => '4113403',
            ],
            [
                'name' => 'Lidianopolis',
                'estado_id' => '21',
                'ibge' => '4113429',
            ],
            [
                'name' => 'Lindoeste',
                'estado_id' => '21',
                'ibge' => '4113452',
            ],
            [
                'name' => 'Loanda',
                'estado_id' => '21',
                'ibge' => '4113502',
            ],
            [
                'name' => 'Lobato',
                'estado_id' => '21',
                'ibge' => '4113601',
            ],
            [
                'name' => 'Londrina',
                'estado_id' => '21',
                'ibge' => '4113700',
            ],
            [
                'name' => 'Luiziana',
                'estado_id' => '21',
                'ibge' => '4113734',
            ],
            [
                'name' => 'Lunardelli',
                'estado_id' => '21',
                'ibge' => '4113759',
            ],
            [
                'name' => 'Lupionopolis',
                'estado_id' => '21',
                'ibge' => '4113809',
            ],
            [
                'name' => 'Mallet',
                'estado_id' => '21',
                'ibge' => '4113908',
            ],
            [
                'name' => 'Mambor�',
                'estado_id' => '21',
                'ibge' => '4114005',
            ],
            [
                'name' => 'Mandaguacu',
                'estado_id' => '21',
                'ibge' => '4114104',
            ],
            [
                'name' => 'Mandaguari',
                'estado_id' => '21',
                'ibge' => '4114203',
            ],
            [
                'name' => 'Mandirituba',
                'estado_id' => '21',
                'ibge' => '4114302',
            ],
            [
                'name' => 'Manfrinopolis',
                'estado_id' => '21',
                'ibge' => '4114351',
            ],
            [
                'name' => 'Mangueirinha',
                'estado_id' => '21',
                'ibge' => '4114401',
            ],
            [
                'name' => 'Manoel Ribas',
                'estado_id' => '21',
                'ibge' => '4114500',
            ],
            [
                'name' => 'Marechal Candido Rondon',
                'estado_id' => '21',
                'ibge' => '4114609',
            ],
            [
                'name' => 'Maria Helena',
                'estado_id' => '21',
                'ibge' => '4114708',
            ],
            [
                'name' => 'Marialva',
                'estado_id' => '21',
                'ibge' => '4114807',
            ],
            [
                'name' => 'Marilandia do Sul',
                'estado_id' => '21',
                'ibge' => '4114906',
            ],
            [
                'name' => 'Marilena',
                'estado_id' => '21',
                'ibge' => '4115002',
            ],
            [
                'name' => 'Mariluz',
                'estado_id' => '21',
                'ibge' => '4115101',
            ],
            [
                'name' => 'Maringa',
                'estado_id' => '21',
                'ibge' => '4115200',
            ],
            [
                'name' => 'Mariopolis',
                'estado_id' => '21',
                'ibge' => '4115309',
            ],
            [
                'name' => 'Maripa',
                'estado_id' => '21',
                'ibge' => '4115358',
            ],
            [
                'name' => 'Marmeleiro',
                'estado_id' => '21',
                'ibge' => '4115408',
            ],
            [
                'name' => 'Marquinho',
                'estado_id' => '21',
                'ibge' => '4115457',
            ],
            [
                'name' => 'Marumbi',
                'estado_id' => '21',
                'ibge' => '4115507',
            ],
            [
                'name' => 'Matelandia',
                'estado_id' => '21',
                'ibge' => '4115606',
            ],
            [
                'name' => 'Matinhos',
                'estado_id' => '21',
                'ibge' => '4115705',
            ],
            [
                'name' => 'Mato Rico',
                'estado_id' => '21',
                'ibge' => '4115739',
            ],
            [
                'name' => 'Maua da Serra',
                'estado_id' => '21',
                'ibge' => '4115754',
            ],
            [
                'name' => 'Medianeira',
                'estado_id' => '21',
                'ibge' => '4115804',
            ],
            [
                'name' => 'Mercedes',
                'estado_id' => '21',
                'ibge' => '4115853',
            ],
            [
                'name' => 'Mirador',
                'estado_id' => '21',
                'ibge' => '4115903',
            ],
            [
                'name' => 'Miraselva',
                'estado_id' => '21',
                'ibge' => '4116000',
            ],
            [
                'name' => 'Missal',
                'estado_id' => '21',
                'ibge' => '4116059',
            ],
            [
                'name' => 'Moreira Sales',
                'estado_id' => '21',
                'ibge' => '4116109',
            ],
            [
                'name' => 'Morretes',
                'estado_id' => '21',
                'ibge' => '4116208',
            ],
            [
                'name' => 'Munhoz de Melo',
                'estado_id' => '21',
                'ibge' => '4116307',
            ],
            [
                'name' => 'Nossa Senhora das Gracas',
                'estado_id' => '21',
                'ibge' => '4116406',
            ],
            [
                'name' => 'Nova Alianca do Ivai',
                'estado_id' => '21',
                'ibge' => '4116505',
            ],
            [
                'name' => 'Nova America da Colina',
                'estado_id' => '21',
                'ibge' => '4116604',
            ],
            [
                'name' => 'Nova Aurora',
                'estado_id' => '21',
                'ibge' => '4116703',
            ],
            [
                'name' => 'Nova Cantu',
                'estado_id' => '21',
                'ibge' => '4116802',
            ],
            [
                'name' => 'Nova Esperanca',
                'estado_id' => '21',
                'ibge' => '4116901',
            ],
            [
                'name' => 'Nova Esperanca do Sudoeste',
                'estado_id' => '21',
                'ibge' => '4116950',
            ],
            [
                'name' => 'Nova Fatima',
                'estado_id' => '21',
                'ibge' => '4117008',
            ],
            [
                'name' => 'Nova Laranjeiras',
                'estado_id' => '21',
                'ibge' => '4117057',
            ],
            [
                'name' => 'Nova Londrina',
                'estado_id' => '21',
                'ibge' => '4117107',
            ],
            [
                'name' => 'Nova Olimpia',
                'estado_id' => '21',
                'ibge' => '4117206',
            ],
            [
                'name' => 'Nova Santa Barbara',
                'estado_id' => '21',
                'ibge' => '4117214',
            ],
            [
                'name' => 'Nova Santa Rosa',
                'estado_id' => '21',
                'ibge' => '4117222',
            ],
            [
                'name' => 'Nova Prata do Iguacu',
                'estado_id' => '21',
                'ibge' => '4117255',
            ],
            [
                'name' => 'Nova Tebas',
                'estado_id' => '21',
                'ibge' => '4117271',
            ],
            [
                'name' => 'Novo Itacolomi',
                'estado_id' => '21',
                'ibge' => '4117297',
            ],
            [
                'name' => 'Ortigueira',
                'estado_id' => '21',
                'ibge' => '4117305',
            ],
            [
                'name' => 'Ourizona',
                'estado_id' => '21',
                'ibge' => '4117404',
            ],
            [
                'name' => 'Ouro Verde do Oeste',
                'estado_id' => '21',
                'ibge' => '4117453',
            ],
            [
                'name' => 'Paicandu',
                'estado_id' => '21',
                'ibge' => '4117503',
            ],
            [
                'name' => 'Palmas',
                'estado_id' => '21',
                'ibge' => '4117602',
            ],
            [
                'name' => 'Palmeira',
                'estado_id' => '21',
                'ibge' => '4117701',
            ],
            [
                'name' => 'Palmital',
                'estado_id' => '21',
                'ibge' => '4117800',
            ],
            [
                'name' => 'Palotina',
                'estado_id' => '21',
                'ibge' => '4117909',
            ],
            [
                'name' => 'Paraiso do Norte',
                'estado_id' => '21',
                'ibge' => '4118006',
            ],
            [
                'name' => 'Paranacity',
                'estado_id' => '21',
                'ibge' => '4118105',
            ],
            [
                'name' => 'Paranagua',
                'estado_id' => '21',
                'ibge' => '4118204',
            ],
            [
                'name' => 'Paranapoema',
                'estado_id' => '21',
                'ibge' => '4118303',
            ],
            [
                'name' => 'Paranavai',
                'estado_id' => '21',
                'ibge' => '4118402',
            ],
            [
                'name' => 'Pato Bragado',
                'estado_id' => '21',
                'ibge' => '4118451',
            ],
            [
                'name' => 'Pato Branco',
                'estado_id' => '21',
                'ibge' => '4118501',
            ],
            [
                'name' => 'Paula Freitas',
                'estado_id' => '21',
                'ibge' => '4118600',
            ],
            [
                'name' => 'Paulo Frontin',
                'estado_id' => '21',
                'ibge' => '4118709',
            ],
            [
                'name' => 'Peabiru',
                'estado_id' => '21',
                'ibge' => '4118808',
            ],
            [
                'name' => 'Perobal',
                'estado_id' => '21',
                'ibge' => '4118857',
            ],
            [
                'name' => 'Perola',
                'estado_id' => '21',
                'ibge' => '4118907',
            ],
            [
                'name' => 'Pi�n',
                'estado_id' => '21',
                'ibge' => '4119103',
            ],
            [
                'name' => 'Pinhais',
                'estado_id' => '21',
                'ibge' => '4119152',
            ],
            [
                'name' => 'Pinhalao',
                'estado_id' => '21',
                'ibge' => '4119202',
            ],
            [
                'name' => 'Pinhal de Sao Bento',
                'estado_id' => '21',
                'ibge' => '4119251',
            ],
            [
                'name' => 'Pinhao',
                'estado_id' => '21',
                'ibge' => '4119301',
            ],
            [
                'name' => 'Pirai do Sul',
                'estado_id' => '21',
                'ibge' => '4119400',
            ],
            [
                'name' => 'Piraquara',
                'estado_id' => '21',
                'ibge' => '4119509',
            ],
            [
                'name' => 'Pitanga',
                'estado_id' => '21',
                'ibge' => '4119608',
            ],
            [
                'name' => 'Pitangueiras',
                'estado_id' => '21',
                'ibge' => '4119657',
            ],
            [
                'name' => 'Planaltina do Parana',
                'estado_id' => '21',
                'ibge' => '4119707',
            ],
            [
                'name' => 'Planalto',
                'estado_id' => '21',
                'ibge' => '4119806',
            ],
            [
                'name' => 'Ponta Grossa',
                'estado_id' => '21',
                'ibge' => '4119905',
            ],
            [
                'name' => 'Pontal do Parana',
                'estado_id' => '21',
                'ibge' => '4119954',
            ],
            [
                'name' => 'Porecatu',
                'estado_id' => '21',
                'ibge' => '4120002',
            ],
            [
                'name' => 'Porto Amazonas',
                'estado_id' => '21',
                'ibge' => '4120101',
            ],
            [
                'name' => 'Porto Barreiro',
                'estado_id' => '21',
                'ibge' => '4120150',
            ],
            [
                'name' => 'Porto Rico',
                'estado_id' => '21',
                'ibge' => '4120200',
            ],
            [
                'name' => 'Porto Vitoria',
                'estado_id' => '21',
                'ibge' => '4120309',
            ],
            [
                'name' => 'Prado Ferreira',
                'estado_id' => '21',
                'ibge' => '4120333',
            ],
            [
                'name' => 'Pranchita',
                'estado_id' => '21',
                'ibge' => '4120358',
            ],
            [
                'name' => 'Presidente Castelo Branco',
                'estado_id' => '21',
                'ibge' => '4120408',
            ],
            [
                'name' => 'Primeiro de Maio',
                'estado_id' => '21',
                'ibge' => '4120507',
            ],
            [
                'name' => 'Prudentopolis',
                'estado_id' => '21',
                'ibge' => '4120606',
            ],
            [
                'name' => 'Quarto Centenario',
                'estado_id' => '21',
                'ibge' => '4120655',
            ],
            [
                'name' => 'Quatigua',
                'estado_id' => '21',
                'ibge' => '4120705',
            ],
            [
                'name' => 'Quatro Barras',
                'estado_id' => '21',
                'ibge' => '4120804',
            ],
            [
                'name' => 'Quatro Pontes',
                'estado_id' => '21',
                'ibge' => '4120853',
            ],
            [
                'name' => 'Quedas do Iguacu',
                'estado_id' => '21',
                'ibge' => '4120903',
            ],
            [
                'name' => 'Quer�ncia do Norte',
                'estado_id' => '21',
                'ibge' => '4121000',
            ],
            [
                'name' => 'Quinta do Sol',
                'estado_id' => '21',
                'ibge' => '4121109',
            ],
            [
                'name' => 'Quitandinha',
                'estado_id' => '21',
                'ibge' => '4121208',
            ],
            [
                'name' => 'Ramilandia',
                'estado_id' => '21',
                'ibge' => '4121257',
            ],
            [
                'name' => 'Rancho Alegre',
                'estado_id' => '21',
                'ibge' => '4121307',
            ],
            [
                'name' => 'Realeza',
                'estado_id' => '21',
                'ibge' => '4121406',
            ],
            [
                'name' => 'Reboucas',
                'estado_id' => '21',
                'ibge' => '4121505',
            ],
            [
                'name' => 'Renascenca',
                'estado_id' => '21',
                'ibge' => '4121604',
            ],
            [
                'name' => 'Reserva',
                'estado_id' => '21',
                'ibge' => '4121703',
            ],
            [
                'name' => 'Reserva do Iguacu',
                'estado_id' => '21',
                'ibge' => '4121752',
            ],
            [
                'name' => 'Ribeirao Claro',
                'estado_id' => '21',
                'ibge' => '4121802',
            ],
            [
                'name' => 'Ribeirao do Pinhal',
                'estado_id' => '21',
                'ibge' => '4121901',
            ],
            [
                'name' => 'Rio Azul',
                'estado_id' => '21',
                'ibge' => '4122008',
            ],
            [
                'name' => 'Rio Bom',
                'estado_id' => '21',
                'ibge' => '4122107',
            ],
            [
                'name' => 'Rio Bonito do Iguacu',
                'estado_id' => '21',
                'ibge' => '4122156',
            ],
            [
                'name' => 'Rio Branco do Ivai',
                'estado_id' => '21',
                'ibge' => '4122172',
            ],
            [
                'name' => 'Rio Branco do Sul',
                'estado_id' => '21',
                'ibge' => '4122206',
            ],
            [
                'name' => 'Rio Negro',
                'estado_id' => '21',
                'ibge' => '4122305',
            ],
            [
                'name' => 'Rolandia',
                'estado_id' => '21',
                'ibge' => '4122404',
            ],
            [
                'name' => 'Roncador',
                'estado_id' => '21',
                'ibge' => '4122503',
            ],
            [
                'name' => 'Rondon',
                'estado_id' => '21',
                'ibge' => '4122602',
            ],
            [
                'name' => 'Rosario do Ivai',
                'estado_id' => '21',
                'ibge' => '4122651',
            ],
            [
                'name' => 'Sabaudia',
                'estado_id' => '21',
                'ibge' => '4122701',
            ],
            [
                'name' => 'Salgado Filho',
                'estado_id' => '21',
                'ibge' => '4122800',
            ],
            [
                'name' => 'Salto do Itarare',
                'estado_id' => '21',
                'ibge' => '4122909',
            ],
            [
                'name' => 'Salto do Lontra',
                'estado_id' => '21',
                'ibge' => '4123006',
            ],
            [
                'name' => 'Santa Amelia',
                'estado_id' => '21',
                'ibge' => '4123105',
            ],
            [
                'name' => 'Santa Cecilia do Pavao',
                'estado_id' => '21',
                'ibge' => '4123204',
            ],
            [
                'name' => 'Santa Cruz de Monte Castelo',
                'estado_id' => '21',
                'ibge' => '4123303',
            ],
            [
                'name' => 'Santa Fe',
                'estado_id' => '21',
                'ibge' => '4123402',
            ],
            [
                'name' => 'Santa Helena',
                'estado_id' => '21',
                'ibge' => '4123501',
            ],
            [
                'name' => 'Santa In�s',
                'estado_id' => '21',
                'ibge' => '4123600',
            ],
            [
                'name' => 'Santa Isabel do Ivai',
                'estado_id' => '21',
                'ibge' => '4123709',
            ],
            [
                'name' => 'Santa Izabel do Oeste',
                'estado_id' => '21',
                'ibge' => '4123808',
            ],
            [
                'name' => 'Santa L�cia',
                'estado_id' => '21',
                'ibge' => '4123824',
            ],
            [
                'name' => 'Santa Maria do Oeste',
                'estado_id' => '21',
                'ibge' => '4123857',
            ],
            [
                'name' => 'Santa Mariana',
                'estado_id' => '21',
                'ibge' => '4123907',
            ],
            [
                'name' => 'Santa Monica',
                'estado_id' => '21',
                'ibge' => '4123956',
            ],
            [
                'name' => 'Santana do Itarare',
                'estado_id' => '21',
                'ibge' => '4124004',
            ],
            [
                'name' => 'Santa Tereza do Oeste',
                'estado_id' => '21',
                'ibge' => '4124020',
            ],
            [
                'name' => 'Santa Terezinha de Itaipu',
                'estado_id' => '21',
                'ibge' => '4124053',
            ],
            [
                'name' => 'Santo Antonio da Platina',
                'estado_id' => '21',
                'ibge' => '4124103',
            ],
            [
                'name' => 'Santo Antonio do Caiua',
                'estado_id' => '21',
                'ibge' => '4124202',
            ],
            [
                'name' => 'Santo Antonio do Paraiso',
                'estado_id' => '21',
                'ibge' => '4124301',
            ],
            [
                'name' => 'Santo Antonio do Sudoeste',
                'estado_id' => '21',
                'ibge' => '4124400',
            ],
            [
                'name' => 'Santo Inacio',
                'estado_id' => '21',
                'ibge' => '4124509',
            ],
            [
                'name' => 'Sao Carlos do Ivai',
                'estado_id' => '21',
                'ibge' => '4124608',
            ],
            [
                'name' => 'Sao Jeronimo da Serra',
                'estado_id' => '21',
                'ibge' => '4124707',
            ],
            [
                'name' => 'Sao Joao',
                'estado_id' => '21',
                'ibge' => '4124806',
            ],
            [
                'name' => 'Sao Joao do Caiua',
                'estado_id' => '21',
                'ibge' => '4124905',
            ],
            [
                'name' => 'Sao Joao do Ivai',
                'estado_id' => '21',
                'ibge' => '4125001',
            ],
            [
                'name' => 'Sao Joao do Triunfo',
                'estado_id' => '21',
                'ibge' => '4125100',
            ],
            [
                'name' => 'Sao Jorge do Ivai',
                'estado_id' => '21',
                'ibge' => '4125308',
            ],
            [
                'name' => 'Sao Jorge do Patrocinio',
                'estado_id' => '21',
                'ibge' => '4125357',
            ],
            [
                'name' => 'Sao Jose da Boa Vista',
                'estado_id' => '21',
                'ibge' => '4125407',
            ],
            [
                'name' => 'Sao Jose das Palmeiras',
                'estado_id' => '21',
                'ibge' => '4125456',
            ],
            [
                'name' => 'Sao Jose dos Pinhais',
                'estado_id' => '21',
                'ibge' => '4125506',
            ],
            [
                'name' => 'Sao Manoel do Parana',
                'estado_id' => '21',
                'ibge' => '4125555',
            ],
            [
                'name' => 'Sao Mateus do Sul',
                'estado_id' => '21',
                'ibge' => '4125605',
            ],
            [
                'name' => 'Sao Miguel do Iguacu',
                'estado_id' => '21',
                'ibge' => '4125704',
            ],
            [
                'name' => 'Sao Pedro do Iguacu',
                'estado_id' => '21',
                'ibge' => '4125753',
            ],
            [
                'name' => 'Sao Pedro do Ivai',
                'estado_id' => '21',
                'ibge' => '4125803',
            ],
            [
                'name' => 'Sao Pedro do Parana',
                'estado_id' => '21',
                'ibge' => '4125902',
            ],
            [
                'name' => 'Sao Sebastiao da Amoreira',
                'estado_id' => '21',
                'ibge' => '4126009',
            ],
            [
                'name' => 'Sao Tome',
                'estado_id' => '21',
                'ibge' => '4126108',
            ],
            [
                'name' => 'Sapopema',
                'estado_id' => '21',
                'ibge' => '4126207',
            ],
            [
                'name' => 'Sarandi',
                'estado_id' => '21',
                'ibge' => '4126256',
            ],
            [
                'name' => 'Saudade do Iguacu',
                'estado_id' => '21',
                'ibge' => '4126272',
            ],
            [
                'name' => 'Senges',
                'estado_id' => '21',
                'ibge' => '4126306',
            ],
            [
                'name' => 'Serranopolis do Iguacu',
                'estado_id' => '21',
                'ibge' => '4126355',
            ],
            [
                'name' => 'Sertaneja',
                'estado_id' => '21',
                'ibge' => '4126405',
            ],
            [
                'name' => 'Sertanopolis',
                'estado_id' => '21',
                'ibge' => '4126504',
            ],
            [
                'name' => 'Siqueira Campos',
                'estado_id' => '21',
                'ibge' => '4126603',
            ],
            [
                'name' => 'Sulina',
                'estado_id' => '21',
                'ibge' => '4126652',
            ],
            [
                'name' => 'Tamarana',
                'estado_id' => '21',
                'ibge' => '4126678',
            ],
            [
                'name' => 'Tamboara',
                'estado_id' => '21',
                'ibge' => '4126702',
            ],
            [
                'name' => 'Tapejara',
                'estado_id' => '21',
                'ibge' => '4126801',
            ],
            [
                'name' => 'Tapira',
                'estado_id' => '21',
                'ibge' => '4126900',
            ],
            [
                'name' => 'Teixeira Soares',
                'estado_id' => '21',
                'ibge' => '4127007',
            ],
            [
                'name' => 'Tel�maco Borba',
                'estado_id' => '21',
                'ibge' => '4127106',
            ],
            [
                'name' => 'Terra Boa',
                'estado_id' => '21',
                'ibge' => '4127205',
            ],
            [
                'name' => 'Terra Rica',
                'estado_id' => '21',
                'ibge' => '4127304',
            ],
            [
                'name' => 'Terra Roxa',
                'estado_id' => '21',
                'ibge' => '4127403',
            ],
            [
                'name' => 'Tibagi',
                'estado_id' => '21',
                'ibge' => '4127502',
            ],
            [
                'name' => 'Tijucas do Sul',
                'estado_id' => '21',
                'ibge' => '4127601',
            ],
            [
                'name' => 'Toledo',
                'estado_id' => '21',
                'ibge' => '4127700',
            ],
            [
                'name' => 'Tomazina',
                'estado_id' => '21',
                'ibge' => '4127809',
            ],
            [
                'name' => 'Tr�s Barras do Parana',
                'estado_id' => '21',
                'ibge' => '4127858',
            ],
            [
                'name' => 'Tunas do Parana',
                'estado_id' => '21',
                'ibge' => '4127882',
            ],
            [
                'name' => 'Tuneiras do Oeste',
                'estado_id' => '21',
                'ibge' => '4127908',
            ],
            [
                'name' => 'Tupassi',
                'estado_id' => '21',
                'ibge' => '4127957',
            ],
            [
                'name' => 'Turvo',
                'estado_id' => '21',
                'ibge' => '4127965',
            ],
            [
                'name' => 'Ubirata',
                'estado_id' => '21',
                'ibge' => '4128005',
            ],
            [
                'name' => 'Umuarama',
                'estado_id' => '21',
                'ibge' => '4128104',
            ],
            [
                'name' => 'Uniao da Vitoria',
                'estado_id' => '21',
                'ibge' => '4128203',
            ],
            [
                'name' => 'Uniflor',
                'estado_id' => '21',
                'ibge' => '4128302',
            ],
            [
                'name' => 'Urai',
                'estado_id' => '21',
                'ibge' => '4128401',
            ],
            [
                'name' => 'Wenceslau Braz',
                'estado_id' => '21',
                'ibge' => '4128500',
            ],
            [
                'name' => 'Ventania',
                'estado_id' => '21',
                'ibge' => '4128534',
            ],
            [
                'name' => 'Vera Cruz do Oeste',
                'estado_id' => '21',
                'ibge' => '4128559',
            ],
            [
                'name' => 'Ver�',
                'estado_id' => '21',
                'ibge' => '4128609',
            ],
            [
                'name' => 'Alto Paraiso',
                'estado_id' => '21',
                'ibge' => '4128625',
            ],
            [
                'name' => 'Doutor Ulysses',
                'estado_id' => '21',
                'ibge' => '4128633',
            ],
            [
                'name' => 'Virmond',
                'estado_id' => '21',
                'ibge' => '4128658',
            ],
            [
                'name' => 'Vitorino',
                'estado_id' => '21',
                'ibge' => '4128708',
            ],
            [
                'name' => 'Xambr�',
                'estado_id' => '21',
                'ibge' => '4128807',
            ],
            [
                'name' => 'Sao Jorge D Oeste ',
                'estado_id' => '21',
                'ibge' => '4125209',
            ],
            [
                'name' => 'Rancho Alegre D Oeste ',
                'estado_id' => '21',
                'ibge' => '4121356',
            ],
            [
                'name' => 'Perola D Oeste ',
                'estado_id' => '21',
                'ibge' => '4119004',
            ],
            [
                'name' => 'Itapejara D Oeste ',
                'estado_id' => '21',
                'ibge' => '4111209',
            ],
            [
                'name' => 'Diamante D Oeste ',
                'estado_id' => '21',
                'ibge' => '4107157',
            ],

            /* Santa Catarina */

            [
                'name' => 'Abdon Batista',
                'estado_id' => '22',
                'ibge' => '4200051',
            ],
            [
                'name' => 'Abelardo Luz',
                'estado_id' => '22',
                'ibge' => '4200101',
            ],
            [
                'name' => 'Agrolandia',
                'estado_id' => '22',
                'ibge' => '4200200',
            ],
            [
                'name' => 'Agronomica',
                'estado_id' => '22',
                'ibge' => '4200309',
            ],
            [
                'name' => 'Agua Doce',
                'estado_id' => '22',
                'ibge' => '4200408',
            ],
            [
                'name' => 'Aguas de Chapeco',
                'estado_id' => '22',
                'ibge' => '4200507',
            ],
            [
                'name' => 'Aguas Frias',
                'estado_id' => '22',
                'ibge' => '4200556',
            ],
            [
                'name' => 'Aguas Mornas',
                'estado_id' => '22',
                'ibge' => '4200606',
            ],
            [
                'name' => 'Alfredo Wagner',
                'estado_id' => '22',
                'ibge' => '4200705',
            ],
            [
                'name' => 'Alto Bela Vista',
                'estado_id' => '22',
                'ibge' => '4200754',
            ],
            [
                'name' => 'Anchieta',
                'estado_id' => '22',
                'ibge' => '4200804',
            ],
            [
                'name' => 'Angelina',
                'estado_id' => '22',
                'ibge' => '4200903',
            ],
            [
                'name' => 'Anita Garibaldi',
                'estado_id' => '22',
                'ibge' => '4201000',
            ],
            [
                'name' => 'Anitapolis',
                'estado_id' => '22',
                'ibge' => '4201109',
            ],
            [
                'name' => 'Antonio Carlos',
                'estado_id' => '22',
                'ibge' => '4201208',
            ],
            [
                'name' => 'Api�na',
                'estado_id' => '22',
                'ibge' => '4201257',
            ],
            [
                'name' => 'Arabuta',
                'estado_id' => '22',
                'ibge' => '4201273',
            ],
            [
                'name' => 'Araquari',
                'estado_id' => '22',
                'ibge' => '4201307',
            ],
            [
                'name' => 'Ararangua',
                'estado_id' => '22',
                'ibge' => '4201406',
            ],
            [
                'name' => 'Armazem',
                'estado_id' => '22',
                'ibge' => '4201505',
            ],
            [
                'name' => 'Arroio Trinta',
                'estado_id' => '22',
                'ibge' => '4201604',
            ],
            [
                'name' => 'Arvoredo',
                'estado_id' => '22',
                'ibge' => '4201653',
            ],
            [
                'name' => 'Ascurra',
                'estado_id' => '22',
                'ibge' => '4201703',
            ],
            [
                'name' => 'Atalanta',
                'estado_id' => '22',
                'ibge' => '4201802',
            ],
            [
                'name' => 'Aurora',
                'estado_id' => '22',
                'ibge' => '4201901',
            ],
            [
                'name' => 'Balneario Arroio do Silva',
                'estado_id' => '22',
                'ibge' => '4201950',
            ],
            [
                'name' => 'Balneario Cambori�',
                'estado_id' => '22',
                'ibge' => '4202008',
            ],
            [
                'name' => 'Balneario Barra do Sul',
                'estado_id' => '22',
                'ibge' => '4202057',
            ],
            [
                'name' => 'Balneario Gaivota',
                'estado_id' => '22',
                'ibge' => '4202073',
            ],
            [
                'name' => 'Bandeirante',
                'estado_id' => '22',
                'ibge' => '4202081',
            ],
            [
                'name' => 'Barra Bonita',
                'estado_id' => '22',
                'ibge' => '4202099',
            ],
            [
                'name' => 'Barra Velha',
                'estado_id' => '22',
                'ibge' => '4202107',
            ],
            [
                'name' => 'Bela Vista do Toldo',
                'estado_id' => '22',
                'ibge' => '4202131',
            ],
            [
                'name' => 'Belmonte',
                'estado_id' => '22',
                'ibge' => '4202156',
            ],
            [
                'name' => 'Benedito Novo',
                'estado_id' => '22',
                'ibge' => '4202206',
            ],
            [
                'name' => 'Biguacu',
                'estado_id' => '22',
                'ibge' => '4202305',
            ],
            [
                'name' => 'Blumenau',
                'estado_id' => '22',
                'ibge' => '4202404',
            ],
            [
                'name' => 'Bocaina do Sul',
                'estado_id' => '22',
                'ibge' => '4202438',
            ],
            [
                'name' => 'Bombinhas',
                'estado_id' => '22',
                'ibge' => '4202453',
            ],
            [
                'name' => 'Bom Jardim da Serra',
                'estado_id' => '22',
                'ibge' => '4202503',
            ],
            [
                'name' => 'Bom Jesus',
                'estado_id' => '22',
                'ibge' => '4202537',
            ],
            [
                'name' => 'Bom Jesus do Oeste',
                'estado_id' => '22',
                'ibge' => '4202578',
            ],
            [
                'name' => 'Bom Retiro',
                'estado_id' => '22',
                'ibge' => '4202602',
            ],
            [
                'name' => 'Botuvera',
                'estado_id' => '22',
                'ibge' => '4202701',
            ],
            [
                'name' => 'Braco do Norte',
                'estado_id' => '22',
                'ibge' => '4202800',
            ],
            [
                'name' => 'Braco do Trombudo',
                'estado_id' => '22',
                'ibge' => '4202859',
            ],
            [
                'name' => 'Brunopolis',
                'estado_id' => '22',
                'ibge' => '4202875',
            ],
            [
                'name' => 'Brusque',
                'estado_id' => '22',
                'ibge' => '4202909',
            ],
            [
                'name' => 'Cacador',
                'estado_id' => '22',
                'ibge' => '4203006',
            ],
            [
                'name' => 'Caibi',
                'estado_id' => '22',
                'ibge' => '4203105',
            ],
            [
                'name' => 'Calmon',
                'estado_id' => '22',
                'ibge' => '4203154',
            ],
            [
                'name' => 'Cambori�',
                'estado_id' => '22',
                'ibge' => '4203204',
            ],
            [
                'name' => 'Capao Alto',
                'estado_id' => '22',
                'ibge' => '4203253',
            ],
            [
                'name' => 'Campo Alegre',
                'estado_id' => '22',
                'ibge' => '4203303',
            ],
            [
                'name' => 'Campo Belo do Sul',
                'estado_id' => '22',
                'ibge' => '4203402',
            ],
            [
                'name' => 'Campo Er�',
                'estado_id' => '22',
                'ibge' => '4203501',
            ],
            [
                'name' => 'Campos Novos',
                'estado_id' => '22',
                'ibge' => '4203600',
            ],
            [
                'name' => 'Canelinha',
                'estado_id' => '22',
                'ibge' => '4203709',
            ],
            [
                'name' => 'Canoinhas',
                'estado_id' => '22',
                'ibge' => '4203808',
            ],
            [
                'name' => 'Capinzal',
                'estado_id' => '22',
                'ibge' => '4203907',
            ],
            [
                'name' => 'Capivari de Baixo',
                'estado_id' => '22',
                'ibge' => '4203956',
            ],
            [
                'name' => 'Catanduvas',
                'estado_id' => '22',
                'ibge' => '4204004',
            ],
            [
                'name' => 'Caxambu do Sul',
                'estado_id' => '22',
                'ibge' => '4204103',
            ],
            [
                'name' => 'Celso Ramos',
                'estado_id' => '22',
                'ibge' => '4204152',
            ],
            [
                'name' => 'Cerro Negro',
                'estado_id' => '22',
                'ibge' => '4204178',
            ],
            [
                'name' => 'Chapadao do Lageado',
                'estado_id' => '22',
                'ibge' => '4204194',
            ],
            [
                'name' => 'Chapeco',
                'estado_id' => '22',
                'ibge' => '4204202',
            ],
            [
                'name' => 'Cocal do Sul',
                'estado_id' => '22',
                'ibge' => '4204251',
            ],
            [
                'name' => 'Concordia',
                'estado_id' => '22',
                'ibge' => '4204301',
            ],
            [
                'name' => 'Cordilheira Alta',
                'estado_id' => '22',
                'ibge' => '4204350',
            ],
            [
                'name' => 'Coronel Freitas',
                'estado_id' => '22',
                'ibge' => '4204400',
            ],
            [
                'name' => 'Coronel Martins',
                'estado_id' => '22',
                'ibge' => '4204459',
            ],
            [
                'name' => 'Corupa',
                'estado_id' => '22',
                'ibge' => '4204509',
            ],
            [
                'name' => 'Correia Pinto',
                'estado_id' => '22',
                'ibge' => '4204558',
            ],
            [
                'name' => 'Crici�ma',
                'estado_id' => '22',
                'ibge' => '4204608',
            ],
            [
                'name' => 'Cunha Pora',
                'estado_id' => '22',
                'ibge' => '4204707',
            ],
            [
                'name' => 'Cunhatai',
                'estado_id' => '22',
                'ibge' => '4204756',
            ],
            [
                'name' => 'Curitibanos',
                'estado_id' => '22',
                'ibge' => '4204806',
            ],
            [
                'name' => 'Descanso',
                'estado_id' => '22',
                'ibge' => '4204905',
            ],
            [
                'name' => 'Dionisio Cerqueira',
                'estado_id' => '22',
                'ibge' => '4205001',
            ],
            [
                'name' => 'Dona Emma',
                'estado_id' => '22',
                'ibge' => '4205100',
            ],
            [
                'name' => 'Doutor Pedrinho',
                'estado_id' => '22',
                'ibge' => '4205159',
            ],
            [
                'name' => 'Entre Rios',
                'estado_id' => '22',
                'ibge' => '4205175',
            ],
            [
                'name' => 'Ermo',
                'estado_id' => '22',
                'ibge' => '4205191',
            ],
            [
                'name' => 'Erval Velho',
                'estado_id' => '22',
                'ibge' => '4205209',
            ],
            [
                'name' => 'Faxinal dos Guedes',
                'estado_id' => '22',
                'ibge' => '4205308',
            ],
            [
                'name' => 'Flor do Sertao',
                'estado_id' => '22',
                'ibge' => '4205357',
            ],
            [
                'name' => 'Florianopolis',
                'estado_id' => '22',
                'ibge' => '4205407',
            ],
            [
                'name' => 'Formosa do Sul',
                'estado_id' => '22',
                'ibge' => '4205431',
            ],
            [
                'name' => 'Forquilhinha',
                'estado_id' => '22',
                'ibge' => '4205456',
            ],
            [
                'name' => 'Fraiburgo',
                'estado_id' => '22',
                'ibge' => '4205506',
            ],
            [
                'name' => 'Frei Rogerio',
                'estado_id' => '22',
                'ibge' => '4205555',
            ],
            [
                'name' => 'Galvao',
                'estado_id' => '22',
                'ibge' => '4205605',
            ],
            [
                'name' => 'Garopaba',
                'estado_id' => '22',
                'ibge' => '4205704',
            ],
            [
                'name' => 'Garuva',
                'estado_id' => '22',
                'ibge' => '4205803',
            ],
            [
                'name' => 'Gaspar',
                'estado_id' => '22',
                'ibge' => '4205902',
            ],
            [
                'name' => 'Governador Celso Ramos',
                'estado_id' => '22',
                'ibge' => '4206009',
            ],
            [
                'name' => 'Grao Para',
                'estado_id' => '22',
                'ibge' => '4206108',
            ],
            [
                'name' => 'Gravatal',
                'estado_id' => '22',
                'ibge' => '4206207',
            ],
            [
                'name' => 'Guabiruba',
                'estado_id' => '22',
                'ibge' => '4206306',
            ],
            [
                'name' => 'Guaraciaba',
                'estado_id' => '22',
                'ibge' => '4206405',
            ],
            [
                'name' => 'Guaramirim',
                'estado_id' => '22',
                'ibge' => '4206504',
            ],
            [
                'name' => 'Guaruja do Sul',
                'estado_id' => '22',
                'ibge' => '4206603',
            ],
            [
                'name' => 'Guatamb�',
                'estado_id' => '22',
                'ibge' => '4206652',
            ],
            [
                'name' => 'Ibiam',
                'estado_id' => '22',
                'ibge' => '4206751',
            ],
            [
                'name' => 'Ibicare',
                'estado_id' => '22',
                'ibge' => '4206801',
            ],
            [
                'name' => 'Ibirama',
                'estado_id' => '22',
                'ibge' => '4206900',
            ],
            [
                'name' => 'Icara',
                'estado_id' => '22',
                'ibge' => '4207007',
            ],
            [
                'name' => 'Ilhota',
                'estado_id' => '22',
                'ibge' => '4207106',
            ],
            [
                'name' => 'Imarui',
                'estado_id' => '22',
                'ibge' => '4207205',
            ],
            [
                'name' => 'Imbituba',
                'estado_id' => '22',
                'ibge' => '4207304',
            ],
            [
                'name' => 'Imbuia',
                'estado_id' => '22',
                'ibge' => '4207403',
            ],
            [
                'name' => 'Indaial',
                'estado_id' => '22',
                'ibge' => '4207502',
            ],
            [
                'name' => 'Iomer�',
                'estado_id' => '22',
                'ibge' => '4207577',
            ],
            [
                'name' => 'Ipira',
                'estado_id' => '22',
                'ibge' => '4207601',
            ],
            [
                'name' => 'Ipora do Oeste',
                'estado_id' => '22',
                'ibge' => '4207650',
            ],
            [
                'name' => 'Ipuacu',
                'estado_id' => '22',
                'ibge' => '4207684',
            ],
            [
                'name' => 'Ipumirim',
                'estado_id' => '22',
                'ibge' => '4207700',
            ],
            [
                'name' => 'Iraceminha',
                'estado_id' => '22',
                'ibge' => '4207759',
            ],
            [
                'name' => 'Irani',
                'estado_id' => '22',
                'ibge' => '4207809',
            ],
            [
                'name' => 'Irati',
                'estado_id' => '22',
                'ibge' => '4207858',
            ],
            [
                'name' => 'Irineopolis',
                'estado_id' => '22',
                'ibge' => '4207908',
            ],
            [
                'name' => 'Ita',
                'estado_id' => '22',
                'ibge' => '4208005',
            ],
            [
                'name' => 'Itaiopolis',
                'estado_id' => '22',
                'ibge' => '4208104',
            ],
            [
                'name' => 'Itajai',
                'estado_id' => '22',
                'ibge' => '4208203',
            ],
            [
                'name' => 'Itapema',
                'estado_id' => '22',
                'ibge' => '4208302',
            ],
            [
                'name' => 'Itapiranga',
                'estado_id' => '22',
                'ibge' => '4208401',
            ],
            [
                'name' => 'Itapoa',
                'estado_id' => '22',
                'ibge' => '4208450',
            ],
            [
                'name' => 'Ituporanga',
                'estado_id' => '22',
                'ibge' => '4208500',
            ],
            [
                'name' => 'Jabora',
                'estado_id' => '22',
                'ibge' => '4208609',
            ],
            [
                'name' => 'Jacinto Machado',
                'estado_id' => '22',
                'ibge' => '4208708',
            ],
            [
                'name' => 'Jaguaruna',
                'estado_id' => '22',
                'ibge' => '4208807',
            ],
            [
                'name' => 'Jaragua do Sul',
                'estado_id' => '22',
                'ibge' => '4208906',
            ],
            [
                'name' => 'Jardinopolis',
                'estado_id' => '22',
                'ibge' => '4208955',
            ],
            [
                'name' => 'Joacaba',
                'estado_id' => '22',
                'ibge' => '4209003',
            ],
            [
                'name' => 'Joinville',
                'estado_id' => '22',
                'ibge' => '4209102',
            ],
            [
                'name' => 'Jose Boiteux',
                'estado_id' => '22',
                'ibge' => '4209151',
            ],
            [
                'name' => 'Jupia',
                'estado_id' => '22',
                'ibge' => '4209177',
            ],
            [
                'name' => 'Lacerdopolis',
                'estado_id' => '22',
                'ibge' => '4209201',
            ],
            [
                'name' => 'Lages',
                'estado_id' => '22',
                'ibge' => '4209300',
            ],
            [
                'name' => 'Laguna',
                'estado_id' => '22',
                'ibge' => '4209409',
            ],
            [
                'name' => 'Lajeado Grande',
                'estado_id' => '22',
                'ibge' => '4209458',
            ],
            [
                'name' => 'Laurentino',
                'estado_id' => '22',
                'ibge' => '4209508',
            ],
            [
                'name' => 'Lauro Muller',
                'estado_id' => '22',
                'ibge' => '4209607',
            ],
            [
                'name' => 'Lebon Regis',
                'estado_id' => '22',
                'ibge' => '4209706',
            ],
            [
                'name' => 'Leoberto Leal',
                'estado_id' => '22',
                'ibge' => '4209805',
            ],
            [
                'name' => 'Lindoia do Sul',
                'estado_id' => '22',
                'ibge' => '4209854',
            ],
            [
                'name' => 'Lontras',
                'estado_id' => '22',
                'ibge' => '4209904',
            ],
            [
                'name' => 'Luiz Alves',
                'estado_id' => '22',
                'ibge' => '4210001',
            ],
            [
                'name' => 'Luzerna',
                'estado_id' => '22',
                'ibge' => '4210035',
            ],
            [
                'name' => 'Macieira',
                'estado_id' => '22',
                'ibge' => '4210050',
            ],
            [
                'name' => 'Mafra',
                'estado_id' => '22',
                'ibge' => '4210100',
            ],
            [
                'name' => 'Major Gercino',
                'estado_id' => '22',
                'ibge' => '4210209',
            ],
            [
                'name' => 'Major Vieira',
                'estado_id' => '22',
                'ibge' => '4210308',
            ],
            [
                'name' => 'Maracaja',
                'estado_id' => '22',
                'ibge' => '4210407',
            ],
            [
                'name' => 'Maravilha',
                'estado_id' => '22',
                'ibge' => '4210506',
            ],
            [
                'name' => 'Marema',
                'estado_id' => '22',
                'ibge' => '4210555',
            ],
            [
                'name' => 'Massaranduba',
                'estado_id' => '22',
                'ibge' => '4210605',
            ],
            [
                'name' => 'Matos Costa',
                'estado_id' => '22',
                'ibge' => '4210704',
            ],
            [
                'name' => 'Meleiro',
                'estado_id' => '22',
                'ibge' => '4210803',
            ],
            [
                'name' => 'Mirim Doce',
                'estado_id' => '22',
                'ibge' => '4210852',
            ],
            [
                'name' => 'Modelo',
                'estado_id' => '22',
                'ibge' => '4210902',
            ],
            [
                'name' => 'Mondai',
                'estado_id' => '22',
                'ibge' => '4211009',
            ],
            [
                'name' => 'Monte Carlo',
                'estado_id' => '22',
                'ibge' => '4211058',
            ],
            [
                'name' => 'Monte Castelo',
                'estado_id' => '22',
                'ibge' => '4211108',
            ],
            [
                'name' => 'Morro da Fumaca',
                'estado_id' => '22',
                'ibge' => '4211207',
            ],
            [
                'name' => 'Morro Grande',
                'estado_id' => '22',
                'ibge' => '4211256',
            ],
            [
                'name' => 'Navegantes',
                'estado_id' => '22',
                'ibge' => '4211306',
            ],
            [
                'name' => 'Nova Erechim',
                'estado_id' => '22',
                'ibge' => '4211405',
            ],
            [
                'name' => 'Nova Itaberaba',
                'estado_id' => '22',
                'ibge' => '4211454',
            ],
            [
                'name' => 'Nova Trento',
                'estado_id' => '22',
                'ibge' => '4211504',
            ],
            [
                'name' => 'Nova Veneza',
                'estado_id' => '22',
                'ibge' => '4211603',
            ],
            [
                'name' => 'Novo Horizonte',
                'estado_id' => '22',
                'ibge' => '4211652',
            ],
            [
                'name' => 'Orleans',
                'estado_id' => '22',
                'ibge' => '4211702',
            ],
            [
                'name' => 'Otacilio Costa',
                'estado_id' => '22',
                'ibge' => '4211751',
            ],
            [
                'name' => 'Ouro',
                'estado_id' => '22',
                'ibge' => '4211801',
            ],
            [
                'name' => 'Ouro Verde',
                'estado_id' => '22',
                'ibge' => '4211850',
            ],
            [
                'name' => 'Paial',
                'estado_id' => '22',
                'ibge' => '4211876',
            ],
            [
                'name' => 'Painel',
                'estado_id' => '22',
                'ibge' => '4211892',
            ],
            [
                'name' => 'Palhoca',
                'estado_id' => '22',
                'ibge' => '4211900',
            ],
            [
                'name' => 'Palma Sola',
                'estado_id' => '22',
                'ibge' => '4212007',
            ],
            [
                'name' => 'Palmeira',
                'estado_id' => '22',
                'ibge' => '4212056',
            ],
            [
                'name' => 'Palmitos',
                'estado_id' => '22',
                'ibge' => '4212106',
            ],
            [
                'name' => 'Papanduva',
                'estado_id' => '22',
                'ibge' => '4212205',
            ],
            [
                'name' => 'Paraiso',
                'estado_id' => '22',
                'ibge' => '4212239',
            ],
            [
                'name' => 'Passo de Torres',
                'estado_id' => '22',
                'ibge' => '4212254',
            ],
            [
                'name' => 'Passos Maia',
                'estado_id' => '22',
                'ibge' => '4212270',
            ],
            [
                'name' => 'Paulo Lopes',
                'estado_id' => '22',
                'ibge' => '4212304',
            ],
            [
                'name' => 'Pedras Grandes',
                'estado_id' => '22',
                'ibge' => '4212403',
            ],
            [
                'name' => 'Penha',
                'estado_id' => '22',
                'ibge' => '4212502',
            ],
            [
                'name' => 'Peritiba',
                'estado_id' => '22',
                'ibge' => '4212601',
            ],
            [
                'name' => 'Petrolandia',
                'estado_id' => '22',
                'ibge' => '4212700',
            ],
            [
                'name' => 'Balneario Picarras',
                'estado_id' => '22',
                'ibge' => '4212809',
            ],
            [
                'name' => 'Pinhalzinho',
                'estado_id' => '22',
                'ibge' => '4212908',
            ],
            [
                'name' => 'Pinheiro Preto',
                'estado_id' => '22',
                'ibge' => '4213005',
            ],
            [
                'name' => 'Piratuba',
                'estado_id' => '22',
                'ibge' => '4213104',
            ],
            [
                'name' => 'Planalto Alegre',
                'estado_id' => '22',
                'ibge' => '4213153',
            ],
            [
                'name' => 'Pomerode',
                'estado_id' => '22',
                'ibge' => '4213203',
            ],
            [
                'name' => 'Ponte Alta',
                'estado_id' => '22',
                'ibge' => '4213302',
            ],
            [
                'name' => 'Ponte Alta do Norte',
                'estado_id' => '22',
                'ibge' => '4213351',
            ],
            [
                'name' => 'Ponte Serrada',
                'estado_id' => '22',
                'ibge' => '4213401',
            ],
            [
                'name' => 'Porto Belo',
                'estado_id' => '22',
                'ibge' => '4213500',
            ],
            [
                'name' => 'Porto Uniao',
                'estado_id' => '22',
                'ibge' => '4213609',
            ],
            [
                'name' => 'Pouso Redondo',
                'estado_id' => '22',
                'ibge' => '4213708',
            ],
            [
                'name' => 'Praia Grande',
                'estado_id' => '22',
                'ibge' => '4213807',
            ],
            [
                'name' => 'Presidente Castello Branco',
                'estado_id' => '22',
                'ibge' => '4213906',
            ],
            [
                'name' => 'Presidente Get�lio',
                'estado_id' => '22',
                'ibge' => '4214003',
            ],
            [
                'name' => 'Presidente Nereu',
                'estado_id' => '22',
                'ibge' => '4214102',
            ],
            [
                'name' => 'Princesa',
                'estado_id' => '22',
                'ibge' => '4214151',
            ],
            [
                'name' => 'Quilombo',
                'estado_id' => '22',
                'ibge' => '4214201',
            ],
            [
                'name' => 'Rancho Queimado',
                'estado_id' => '22',
                'ibge' => '4214300',
            ],
            [
                'name' => 'Rio das Antas',
                'estado_id' => '22',
                'ibge' => '4214409',
            ],
            [
                'name' => 'Rio do Campo',
                'estado_id' => '22',
                'ibge' => '4214508',
            ],
            [
                'name' => 'Rio do Oeste',
                'estado_id' => '22',
                'ibge' => '4214607',
            ],
            [
                'name' => 'Rio dos Cedros',
                'estado_id' => '22',
                'ibge' => '4214706',
            ],
            [
                'name' => 'Rio do Sul',
                'estado_id' => '22',
                'ibge' => '4214805',
            ],
            [
                'name' => 'Rio Fortuna',
                'estado_id' => '22',
                'ibge' => '4214904',
            ],
            [
                'name' => 'Rio Negrinho',
                'estado_id' => '22',
                'ibge' => '4215000',
            ],
            [
                'name' => 'Rio Rufino',
                'estado_id' => '22',
                'ibge' => '4215059',
            ],
            [
                'name' => 'Riqueza',
                'estado_id' => '22',
                'ibge' => '4215075',
            ],
            [
                'name' => 'Rodeio',
                'estado_id' => '22',
                'ibge' => '4215109',
            ],
            [
                'name' => 'Romelandia',
                'estado_id' => '22',
                'ibge' => '4215208',
            ],
            [
                'name' => 'Salete',
                'estado_id' => '22',
                'ibge' => '4215307',
            ],
            [
                'name' => 'Saltinho',
                'estado_id' => '22',
                'ibge' => '4215356',
            ],
            [
                'name' => 'Salto Veloso',
                'estado_id' => '22',
                'ibge' => '4215406',
            ],
            [
                'name' => 'Sangao',
                'estado_id' => '22',
                'ibge' => '4215455',
            ],
            [
                'name' => 'Santa Cecilia',
                'estado_id' => '22',
                'ibge' => '4215505',
            ],
            [
                'name' => 'Santa Helena',
                'estado_id' => '22',
                'ibge' => '4215554',
            ],
            [
                'name' => 'Santa Rosa de Lima',
                'estado_id' => '22',
                'ibge' => '4215604',
            ],
            [
                'name' => 'Santa Rosa do Sul',
                'estado_id' => '22',
                'ibge' => '4215653',
            ],
            [
                'name' => 'Santa Terezinha',
                'estado_id' => '22',
                'ibge' => '4215679',
            ],
            [
                'name' => 'Santa Terezinha do Progresso',
                'estado_id' => '22',
                'ibge' => '4215687',
            ],
            [
                'name' => 'Santiago do Sul',
                'estado_id' => '22',
                'ibge' => '4215695',
            ],
            [
                'name' => 'Santo Amaro da Imperatriz',
                'estado_id' => '22',
                'ibge' => '4215703',
            ],
            [
                'name' => 'Sao Bernardino',
                'estado_id' => '22',
                'ibge' => '4215752',
            ],
            [
                'name' => 'Sao Bento do Sul',
                'estado_id' => '22',
                'ibge' => '4215802',
            ],
            [
                'name' => 'Sao Bonifacio',
                'estado_id' => '22',
                'ibge' => '4215901',
            ],
            [
                'name' => 'Sao Carlos',
                'estado_id' => '22',
                'ibge' => '4216008',
            ],
            [
                'name' => 'Sao Cristovao do Sul',
                'estado_id' => '22',
                'ibge' => '4216057',
            ],
            [
                'name' => 'Sao Domingos',
                'estado_id' => '22',
                'ibge' => '4216107',
            ],
            [
                'name' => 'Sao Francisco do Sul',
                'estado_id' => '22',
                'ibge' => '4216206',
            ],
            [
                'name' => 'Sao Joao do Oeste',
                'estado_id' => '22',
                'ibge' => '4216255',
            ],
            [
                'name' => 'Sao Joao Batista',
                'estado_id' => '22',
                'ibge' => '4216305',
            ],
            [
                'name' => 'Sao Joao do Itaperi�',
                'estado_id' => '22',
                'ibge' => '4216354',
            ],
            [
                'name' => 'Sao Joao do Sul',
                'estado_id' => '22',
                'ibge' => '4216404',
            ],
            [
                'name' => 'Sao Joaquim',
                'estado_id' => '22',
                'ibge' => '4216503',
            ],
            [
                'name' => 'Sao Jose',
                'estado_id' => '22',
                'ibge' => '4216602',
            ],
            [
                'name' => 'Sao Jose do Cedro',
                'estado_id' => '22',
                'ibge' => '4216701',
            ],
            [
                'name' => 'Sao Jose do Cerrito',
                'estado_id' => '22',
                'ibge' => '4216800',
            ],
            [
                'name' => 'Sao Lourenco do Oeste',
                'estado_id' => '22',
                'ibge' => '4216909',
            ],
            [
                'name' => 'Sao Ludgero',
                'estado_id' => '22',
                'ibge' => '4217006',
            ],
            [
                'name' => 'Sao Martinho',
                'estado_id' => '22',
                'ibge' => '4217105',
            ],
            [
                'name' => 'Sao Miguel da Boa Vista',
                'estado_id' => '22',
                'ibge' => '4217154',
            ],
            [
                'name' => 'Sao Miguel do Oeste',
                'estado_id' => '22',
                'ibge' => '4217204',
            ],
            [
                'name' => 'Sao Pedro de Alcantara',
                'estado_id' => '22',
                'ibge' => '4217253',
            ],
            [
                'name' => 'Saudades',
                'estado_id' => '22',
                'ibge' => '4217303',
            ],
            [
                'name' => 'Schroeder',
                'estado_id' => '22',
                'ibge' => '4217402',
            ],
            [
                'name' => 'Seara',
                'estado_id' => '22',
                'ibge' => '4217501',
            ],
            [
                'name' => 'Serra Alta',
                'estado_id' => '22',
                'ibge' => '4217550',
            ],
            [
                'name' => 'Sideropolis',
                'estado_id' => '22',
                'ibge' => '4217600',
            ],
            [
                'name' => 'Sombrio',
                'estado_id' => '22',
                'ibge' => '4217709',
            ],
            [
                'name' => 'Sul Brasil',
                'estado_id' => '22',
                'ibge' => '4217758',
            ],
            [
                'name' => 'Taio',
                'estado_id' => '22',
                'ibge' => '4217808',
            ],
            [
                'name' => 'Tangara',
                'estado_id' => '22',
                'ibge' => '4217907',
            ],
            [
                'name' => 'Tigrinhos',
                'estado_id' => '22',
                'ibge' => '4217956',
            ],
            [
                'name' => 'Tijucas',
                'estado_id' => '22',
                'ibge' => '4218004',
            ],
            [
                'name' => 'Timbe do Sul',
                'estado_id' => '22',
                'ibge' => '4218103',
            ],
            [
                'name' => 'Timbo',
                'estado_id' => '22',
                'ibge' => '4218202',
            ],
            [
                'name' => 'Timbo Grande',
                'estado_id' => '22',
                'ibge' => '4218251',
            ],
            [
                'name' => 'Tr�s Barras',
                'estado_id' => '22',
                'ibge' => '4218301',
            ],
            [
                'name' => 'Treviso',
                'estado_id' => '22',
                'ibge' => '4218350',
            ],
            [
                'name' => 'Treze de Maio',
                'estado_id' => '22',
                'ibge' => '4218400',
            ],
            [
                'name' => 'Treze Tilias',
                'estado_id' => '22',
                'ibge' => '4218509',
            ],
            [
                'name' => 'Trombudo Central',
                'estado_id' => '22',
                'ibge' => '4218608',
            ],
            [
                'name' => 'Tubarao',
                'estado_id' => '22',
                'ibge' => '4218707',
            ],
            [
                'name' => 'Tunapolis',
                'estado_id' => '22',
                'ibge' => '4218756',
            ],
            [
                'name' => 'Turvo',
                'estado_id' => '22',
                'ibge' => '4218806',
            ],
            [
                'name' => 'Uniao do Oeste',
                'estado_id' => '22',
                'ibge' => '4218855',
            ],
            [
                'name' => 'Urubici',
                'estado_id' => '22',
                'ibge' => '4218905',
            ],
            [
                'name' => 'Urupema',
                'estado_id' => '22',
                'ibge' => '4218954',
            ],
            [
                'name' => 'Urussanga',
                'estado_id' => '22',
                'ibge' => '4219002',
            ],
            [
                'name' => 'Vargeao',
                'estado_id' => '22',
                'ibge' => '4219101',
            ],
            [
                'name' => 'Vargem',
                'estado_id' => '22',
                'ibge' => '4219150',
            ],
            [
                'name' => 'Vargem Bonita',
                'estado_id' => '22',
                'ibge' => '4219176',
            ],
            [
                'name' => 'Vidal Ramos',
                'estado_id' => '22',
                'ibge' => '4219200',
            ],
            [
                'name' => 'Videira',
                'estado_id' => '22',
                'ibge' => '4219309',
            ],
            [
                'name' => 'Vitor Meireles',
                'estado_id' => '22',
                'ibge' => '4219358',
            ],
            [
                'name' => 'Witmarsum',
                'estado_id' => '22',
                'ibge' => '4219408',
            ],
            [
                'name' => 'Xanxer�',
                'estado_id' => '22',
                'ibge' => '4219507',
            ],
            [
                'name' => 'Xavantina',
                'estado_id' => '22',
                'ibge' => '4219606',
            ],
            [
                'name' => 'Xaxim',
                'estado_id' => '22',
                'ibge' => '4219705',
            ],
            [
                'name' => 'Zortea',
                'estado_id' => '22',
                'ibge' => '4219853',
            ],
            [
                'name' => 'Herval D Oeste ',
                'estado_id' => '22',
                'ibge' => '4206702',
            ],

            /* Rio Grande do Sul */

            [
                'name' => 'Acegua',
                'estado_id' => '23',
                'ibge' => '4300034',
            ],
            [
                'name' => 'Agua Santa',
                'estado_id' => '23',
                'ibge' => '4300059',
            ],
            [
                'name' => 'Agudo',
                'estado_id' => '23',
                'ibge' => '4300109',
            ],
            [
                'name' => 'Ajuricaba',
                'estado_id' => '23',
                'ibge' => '4300208',
            ],
            [
                'name' => 'Alecrim',
                'estado_id' => '23',
                'ibge' => '4300307',
            ],
            [
                'name' => 'Alegrete',
                'estado_id' => '23',
                'ibge' => '4300406',
            ],
            [
                'name' => 'Alegria',
                'estado_id' => '23',
                'ibge' => '4300455',
            ],
            [
                'name' => 'Almirante Tamandare do Sul',
                'estado_id' => '23',
                'ibge' => '4300471',
            ],
            [
                'name' => 'Alpestre',
                'estado_id' => '23',
                'ibge' => '4300505',
            ],
            [
                'name' => 'Alto Alegre',
                'estado_id' => '23',
                'ibge' => '4300554',
            ],
            [
                'name' => 'Alto Feliz',
                'estado_id' => '23',
                'ibge' => '4300570',
            ],
            [
                'name' => 'Alvorada',
                'estado_id' => '23',
                'ibge' => '4300604',
            ],
            [
                'name' => 'Amaral Ferrador',
                'estado_id' => '23',
                'ibge' => '4300638',
            ],
            [
                'name' => 'Ametista do Sul',
                'estado_id' => '23',
                'ibge' => '4300646',
            ],
            [
                'name' => 'Andre da Rocha',
                'estado_id' => '23',
                'ibge' => '4300661',
            ],
            [
                'name' => 'Anta Gorda',
                'estado_id' => '23',
                'ibge' => '4300703',
            ],
            [
                'name' => 'Antonio Prado',
                'estado_id' => '23',
                'ibge' => '4300802',
            ],
            [
                'name' => 'Arambare',
                'estado_id' => '23',
                'ibge' => '4300851',
            ],
            [
                'name' => 'Ararica',
                'estado_id' => '23',
                'ibge' => '4300877',
            ],
            [
                'name' => 'Aratiba',
                'estado_id' => '23',
                'ibge' => '4300901',
            ],
            [
                'name' => 'Arroio do Meio',
                'estado_id' => '23',
                'ibge' => '4301008',
            ],
            [
                'name' => 'Arroio do Sal',
                'estado_id' => '23',
                'ibge' => '4301057',
            ],
            [
                'name' => 'Arroio do Padre',
                'estado_id' => '23',
                'ibge' => '4301073',
            ],
            [
                'name' => 'Arroio dos Ratos',
                'estado_id' => '23',
                'ibge' => '4301107',
            ],
            [
                'name' => 'Arroio do Tigre',
                'estado_id' => '23',
                'ibge' => '4301206',
            ],
            [
                'name' => 'Arroio Grande',
                'estado_id' => '23',
                'ibge' => '4301305',
            ],
            [
                'name' => 'Arvorezinha',
                'estado_id' => '23',
                'ibge' => '4301404',
            ],
            [
                'name' => 'Augusto Pestana',
                'estado_id' => '23',
                'ibge' => '4301503',
            ],
            [
                'name' => 'Aurea',
                'estado_id' => '23',
                'ibge' => '4301552',
            ],
            [
                'name' => 'Bage',
                'estado_id' => '23',
                'ibge' => '4301602',
            ],
            [
                'name' => 'Balneario Pinhal',
                'estado_id' => '23',
                'ibge' => '4301636',
            ],
            [
                'name' => 'Barao',
                'estado_id' => '23',
                'ibge' => '4301651',
            ],
            [
                'name' => 'Barao de Cotegipe',
                'estado_id' => '23',
                'ibge' => '4301701',
            ],
            [
                'name' => 'Barao do Triunfo',
                'estado_id' => '23',
                'ibge' => '4301750',
            ],
            [
                'name' => 'Barracao',
                'estado_id' => '23',
                'ibge' => '4301800',
            ],
            [
                'name' => 'Barra do Guarita',
                'estado_id' => '23',
                'ibge' => '4301859',
            ],
            [
                'name' => 'Barra do Quarai',
                'estado_id' => '23',
                'ibge' => '4301875',
            ],
            [
                'name' => 'Barra do Ribeiro',
                'estado_id' => '23',
                'ibge' => '4301909',
            ],
            [
                'name' => 'Barra do Rio Azul',
                'estado_id' => '23',
                'ibge' => '4301925',
            ],
            [
                'name' => 'Barra Funda',
                'estado_id' => '23',
                'ibge' => '4301958',
            ],
            [
                'name' => 'Barros Cassal',
                'estado_id' => '23',
                'ibge' => '4302006',
            ],
            [
                'name' => 'Benjamin Constant do Sul',
                'estado_id' => '23',
                'ibge' => '4302055',
            ],
            [
                'name' => 'Bento Goncalves',
                'estado_id' => '23',
                'ibge' => '4302105',
            ],
            [
                'name' => 'Boa Vista das Miss�es',
                'estado_id' => '23',
                'ibge' => '4302154',
            ],
            [
                'name' => 'Boa Vista do Burica',
                'estado_id' => '23',
                'ibge' => '4302204',
            ],
            [
                'name' => 'Boa Vista do Cadeado',
                'estado_id' => '23',
                'ibge' => '4302220',
            ],
            [
                'name' => 'Boa Vista do Incra',
                'estado_id' => '23',
                'ibge' => '4302238',
            ],
            [
                'name' => 'Boa Vista do Sul',
                'estado_id' => '23',
                'ibge' => '4302253',
            ],
            [
                'name' => 'Bom Jesus',
                'estado_id' => '23',
                'ibge' => '4302303',
            ],
            [
                'name' => 'Bom Principio',
                'estado_id' => '23',
                'ibge' => '4302352',
            ],
            [
                'name' => 'Bom Progresso',
                'estado_id' => '23',
                'ibge' => '4302378',
            ],
            [
                'name' => 'Bom Retiro do Sul',
                'estado_id' => '23',
                'ibge' => '4302402',
            ],
            [
                'name' => 'Boqueirao do Leao',
                'estado_id' => '23',
                'ibge' => '4302451',
            ],
            [
                'name' => 'Bossoroca',
                'estado_id' => '23',
                'ibge' => '4302501',
            ],
            [
                'name' => 'Bozano',
                'estado_id' => '23',
                'ibge' => '4302584',
            ],
            [
                'name' => 'Braga',
                'estado_id' => '23',
                'ibge' => '4302600',
            ],
            [
                'name' => 'Brochier',
                'estado_id' => '23',
                'ibge' => '4302659',
            ],
            [
                'name' => 'Butia',
                'estado_id' => '23',
                'ibge' => '4302709',
            ],
            [
                'name' => 'Cacapava do Sul',
                'estado_id' => '23',
                'ibge' => '4302808',
            ],
            [
                'name' => 'Cacequi',
                'estado_id' => '23',
                'ibge' => '4302907',
            ],
            [
                'name' => 'Cachoeira do Sul',
                'estado_id' => '23',
                'ibge' => '4303004',
            ],
            [
                'name' => 'Cachoeirinha',
                'estado_id' => '23',
                'ibge' => '4303103',
            ],
            [
                'name' => 'Cacique Doble',
                'estado_id' => '23',
                'ibge' => '4303202',
            ],
            [
                'name' => 'Caibate',
                'estado_id' => '23',
                'ibge' => '4303301',
            ],
            [
                'name' => 'Caicara',
                'estado_id' => '23',
                'ibge' => '4303400',
            ],
            [
                'name' => 'Camaqua',
                'estado_id' => '23',
                'ibge' => '4303509',
            ],
            [
                'name' => 'Camargo',
                'estado_id' => '23',
                'ibge' => '4303558',
            ],
            [
                'name' => 'Cambara do Sul',
                'estado_id' => '23',
                'ibge' => '4303608',
            ],
            [
                'name' => 'Campestre da Serra',
                'estado_id' => '23',
                'ibge' => '4303673',
            ],
            [
                'name' => 'Campina das Miss�es',
                'estado_id' => '23',
                'ibge' => '4303707',
            ],
            [
                'name' => 'Campinas do Sul',
                'estado_id' => '23',
                'ibge' => '4303806',
            ],
            [
                'name' => 'Campo Bom',
                'estado_id' => '23',
                'ibge' => '4303905',
            ],
            [
                'name' => 'Campo Novo',
                'estado_id' => '23',
                'ibge' => '4304002',
            ],
            [
                'name' => 'Campos Borges',
                'estado_id' => '23',
                'ibge' => '4304101',
            ],
            [
                'name' => 'Candelaria',
                'estado_id' => '23',
                'ibge' => '4304200',
            ],
            [
                'name' => 'Candido Godoi',
                'estado_id' => '23',
                'ibge' => '4304309',
            ],
            [
                'name' => 'Candiota',
                'estado_id' => '23',
                'ibge' => '4304358',
            ],
            [
                'name' => 'Canela',
                'estado_id' => '23',
                'ibge' => '4304408',
            ],
            [
                'name' => 'Cangucu',
                'estado_id' => '23',
                'ibge' => '4304507',
            ],
            [
                'name' => 'Canoas',
                'estado_id' => '23',
                'ibge' => '4304606',
            ],
            [
                'name' => 'Canudos do Vale',
                'estado_id' => '23',
                'ibge' => '4304614',
            ],
            [
                'name' => 'Capao Bonito do Sul',
                'estado_id' => '23',
                'ibge' => '4304622',
            ],
            [
                'name' => 'Capao da Canoa',
                'estado_id' => '23',
                'ibge' => '4304630',
            ],
            [
                'name' => 'Capao do Cipo',
                'estado_id' => '23',
                'ibge' => '4304655',
            ],
            [
                'name' => 'Capao do Leao',
                'estado_id' => '23',
                'ibge' => '4304663',
            ],
            [
                'name' => 'Capivari do Sul',
                'estado_id' => '23',
                'ibge' => '4304671',
            ],
            [
                'name' => 'Capela de Santana',
                'estado_id' => '23',
                'ibge' => '4304689',
            ],
            [
                'name' => 'Capitao',
                'estado_id' => '23',
                'ibge' => '4304697',
            ],
            [
                'name' => 'Carazinho',
                'estado_id' => '23',
                'ibge' => '4304705',
            ],
            [
                'name' => 'Caraa',
                'estado_id' => '23',
                'ibge' => '4304713',
            ],
            [
                'name' => 'Carlos Barbosa',
                'estado_id' => '23',
                'ibge' => '4304804',
            ],
            [
                'name' => 'Carlos Gomes',
                'estado_id' => '23',
                'ibge' => '4304853',
            ],
            [
                'name' => 'Casca',
                'estado_id' => '23',
                'ibge' => '4304903',
            ],
            [
                'name' => 'Caseiros',
                'estado_id' => '23',
                'ibge' => '4304952',
            ],
            [
                'name' => 'Catuipe',
                'estado_id' => '23',
                'ibge' => '4305009',
            ],
            [
                'name' => 'Caxias do Sul',
                'estado_id' => '23',
                'ibge' => '4305108',
            ],
            [
                'name' => 'Centenario',
                'estado_id' => '23',
                'ibge' => '4305116',
            ],
            [
                'name' => 'Cerrito',
                'estado_id' => '23',
                'ibge' => '4305124',
            ],
            [
                'name' => 'Cerro Branco',
                'estado_id' => '23',
                'ibge' => '4305132',
            ],
            [
                'name' => 'Cerro Grande',
                'estado_id' => '23',
                'ibge' => '4305157',
            ],
            [
                'name' => 'Cerro Grande do Sul',
                'estado_id' => '23',
                'ibge' => '4305173',
            ],
            [
                'name' => 'Cerro Largo',
                'estado_id' => '23',
                'ibge' => '4305207',
            ],
            [
                'name' => 'Chapada',
                'estado_id' => '23',
                'ibge' => '4305306',
            ],
            [
                'name' => 'Charqueadas',
                'estado_id' => '23',
                'ibge' => '4305355',
            ],
            [
                'name' => 'Charrua',
                'estado_id' => '23',
                'ibge' => '4305371',
            ],
            [
                'name' => 'Chiapetta',
                'estado_id' => '23',
                'ibge' => '4305405',
            ],
            [
                'name' => 'Chui',
                'estado_id' => '23',
                'ibge' => '4305439',
            ],
            [
                'name' => 'Chuvisca',
                'estado_id' => '23',
                'ibge' => '4305447',
            ],
            [
                'name' => 'Cidreira',
                'estado_id' => '23',
                'ibge' => '4305454',
            ],
            [
                'name' => 'Ciriaco',
                'estado_id' => '23',
                'ibge' => '4305504',
            ],
            [
                'name' => 'Colinas',
                'estado_id' => '23',
                'ibge' => '4305587',
            ],
            [
                'name' => 'Colorado',
                'estado_id' => '23',
                'ibge' => '4305603',
            ],
            [
                'name' => 'Condor',
                'estado_id' => '23',
                'ibge' => '4305702',
            ],
            [
                'name' => 'Constantina',
                'estado_id' => '23',
                'ibge' => '4305801',
            ],
            [
                'name' => 'Coqueiro Baixo',
                'estado_id' => '23',
                'ibge' => '4305835',
            ],
            [
                'name' => 'Coqueiros do Sul',
                'estado_id' => '23',
                'ibge' => '4305850',
            ],
            [
                'name' => 'Coronel Barros',
                'estado_id' => '23',
                'ibge' => '4305871',
            ],
            [
                'name' => 'Coronel Bicaco',
                'estado_id' => '23',
                'ibge' => '4305900',
            ],
            [
                'name' => 'Coronel Pilar',
                'estado_id' => '23',
                'ibge' => '4305934',
            ],
            [
                'name' => 'Cotipora',
                'estado_id' => '23',
                'ibge' => '4305959',
            ],
            [
                'name' => 'Coxilha',
                'estado_id' => '23',
                'ibge' => '4305975',
            ],
            [
                'name' => 'Crissiumal',
                'estado_id' => '23',
                'ibge' => '4306007',
            ],
            [
                'name' => 'Cristal',
                'estado_id' => '23',
                'ibge' => '4306056',
            ],
            [
                'name' => 'Cristal do Sul',
                'estado_id' => '23',
                'ibge' => '4306072',
            ],
            [
                'name' => 'Cruz Alta',
                'estado_id' => '23',
                'ibge' => '4306106',
            ],
            [
                'name' => 'Cruzaltense',
                'estado_id' => '23',
                'ibge' => '4306130',
            ],
            [
                'name' => 'Cruzeiro do Sul',
                'estado_id' => '23',
                'ibge' => '4306205',
            ],
            [
                'name' => 'David Canabarro',
                'estado_id' => '23',
                'ibge' => '4306304',
            ],
            [
                'name' => 'Derrubadas',
                'estado_id' => '23',
                'ibge' => '4306320',
            ],
            [
                'name' => 'Dezesseis de Novembro',
                'estado_id' => '23',
                'ibge' => '4306353',
            ],
            [
                'name' => 'Dilermando de Aguiar',
                'estado_id' => '23',
                'ibge' => '4306379',
            ],
            [
                'name' => 'Dois Irmaos',
                'estado_id' => '23',
                'ibge' => '4306403',
            ],
            [
                'name' => 'Dois Irmaos das Miss�es',
                'estado_id' => '23',
                'ibge' => '4306429',
            ],
            [
                'name' => 'Dois Lajeados',
                'estado_id' => '23',
                'ibge' => '4306452',
            ],
            [
                'name' => 'Dom Feliciano',
                'estado_id' => '23',
                'ibge' => '4306502',
            ],
            [
                'name' => 'Dom Pedro de Alcantara',
                'estado_id' => '23',
                'ibge' => '4306551',
            ],
            [
                'name' => 'Dom Pedrito',
                'estado_id' => '23',
                'ibge' => '4306601',
            ],
            [
                'name' => 'Dona Francisca',
                'estado_id' => '23',
                'ibge' => '4306700',
            ],
            [
                'name' => 'Doutor Mauricio Cardoso',
                'estado_id' => '23',
                'ibge' => '4306734',
            ],
            [
                'name' => 'Doutor Ricardo',
                'estado_id' => '23',
                'ibge' => '4306759',
            ],
            [
                'name' => 'Eldorado do Sul',
                'estado_id' => '23',
                'ibge' => '4306767',
            ],
            [
                'name' => 'Encantado',
                'estado_id' => '23',
                'ibge' => '4306809',
            ],
            [
                'name' => 'Encruzilhada do Sul',
                'estado_id' => '23',
                'ibge' => '4306908',
            ],
            [
                'name' => 'Engenho Velho',
                'estado_id' => '23',
                'ibge' => '4306924',
            ],
            [
                'name' => 'Entre-Ijuis',
                'estado_id' => '23',
                'ibge' => '4306932',
            ],
            [
                'name' => 'Entre Rios do Sul',
                'estado_id' => '23',
                'ibge' => '4306957',
            ],
            [
                'name' => 'Erebango',
                'estado_id' => '23',
                'ibge' => '4306973',
            ],
            [
                'name' => 'Erechim',
                'estado_id' => '23',
                'ibge' => '4307005',
            ],
            [
                'name' => 'Ernestina',
                'estado_id' => '23',
                'ibge' => '4307054',
            ],
            [
                'name' => 'Herval',
                'estado_id' => '23',
                'ibge' => '4307104',
            ],
            [
                'name' => 'Erval Grande',
                'estado_id' => '23',
                'ibge' => '4307203',
            ],
            [
                'name' => 'Erval Seco',
                'estado_id' => '23',
                'ibge' => '4307302',
            ],
            [
                'name' => 'Esmeralda',
                'estado_id' => '23',
                'ibge' => '4307401',
            ],
            [
                'name' => 'Esperanca do Sul',
                'estado_id' => '23',
                'ibge' => '4307450',
            ],
            [
                'name' => 'Espumoso',
                'estado_id' => '23',
                'ibge' => '4307500',
            ],
            [
                'name' => 'Estacao',
                'estado_id' => '23',
                'ibge' => '4307559',
            ],
            [
                'name' => 'Estancia Velha',
                'estado_id' => '23',
                'ibge' => '4307609',
            ],
            [
                'name' => 'Esteio',
                'estado_id' => '23',
                'ibge' => '4307708',
            ],
            [
                'name' => 'Estrela',
                'estado_id' => '23',
                'ibge' => '4307807',
            ],
            [
                'name' => 'Estrela Velha',
                'estado_id' => '23',
                'ibge' => '4307815',
            ],
            [
                'name' => 'Eug�nio de Castro',
                'estado_id' => '23',
                'ibge' => '4307831',
            ],
            [
                'name' => 'Fagundes Varela',
                'estado_id' => '23',
                'ibge' => '4307864',
            ],
            [
                'name' => 'Farroupilha',
                'estado_id' => '23',
                'ibge' => '4307906',
            ],
            [
                'name' => 'Faxinal do Soturno',
                'estado_id' => '23',
                'ibge' => '4308003',
            ],
            [
                'name' => 'Faxinalzinho',
                'estado_id' => '23',
                'ibge' => '4308052',
            ],
            [
                'name' => 'Fazenda Vilanova',
                'estado_id' => '23',
                'ibge' => '4308078',
            ],
            [
                'name' => 'Feliz',
                'estado_id' => '23',
                'ibge' => '4308102',
            ],
            [
                'name' => 'Flores da Cunha',
                'estado_id' => '23',
                'ibge' => '4308201',
            ],
            [
                'name' => 'Floriano Peixoto',
                'estado_id' => '23',
                'ibge' => '4308250',
            ],
            [
                'name' => 'Fontoura Xavier',
                'estado_id' => '23',
                'ibge' => '4308300',
            ],
            [
                'name' => 'Formigueiro',
                'estado_id' => '23',
                'ibge' => '4308409',
            ],
            [
                'name' => 'Forquetinha',
                'estado_id' => '23',
                'ibge' => '4308433',
            ],
            [
                'name' => 'Fortaleza dos Valos',
                'estado_id' => '23',
                'ibge' => '4308458',
            ],
            [
                'name' => 'Frederico Westphalen',
                'estado_id' => '23',
                'ibge' => '4308508',
            ],
            [
                'name' => 'Garibaldi',
                'estado_id' => '23',
                'ibge' => '4308607',
            ],
            [
                'name' => 'Garruchos',
                'estado_id' => '23',
                'ibge' => '4308656',
            ],
            [
                'name' => 'Gaurama',
                'estado_id' => '23',
                'ibge' => '4308706',
            ],
            [
                'name' => 'General Camara',
                'estado_id' => '23',
                'ibge' => '4308805',
            ],
            [
                'name' => 'Gentil',
                'estado_id' => '23',
                'ibge' => '4308854',
            ],
            [
                'name' => 'Get�lio Vargas',
                'estado_id' => '23',
                'ibge' => '4308904',
            ],
            [
                'name' => 'Girua',
                'estado_id' => '23',
                'ibge' => '4309001',
            ],
            [
                'name' => 'Glorinha',
                'estado_id' => '23',
                'ibge' => '4309050',
            ],
            [
                'name' => 'Gramado',
                'estado_id' => '23',
                'ibge' => '4309100',
            ],
            [
                'name' => 'Gramado dos Loureiros',
                'estado_id' => '23',
                'ibge' => '4309126',
            ],
            [
                'name' => 'Gramado Xavier',
                'estado_id' => '23',
                'ibge' => '4309159',
            ],
            [
                'name' => 'Gravatai',
                'estado_id' => '23',
                'ibge' => '4309209',
            ],
            [
                'name' => 'Guabiju',
                'estado_id' => '23',
                'ibge' => '4309258',
            ],
            [
                'name' => 'Guaiba',
                'estado_id' => '23',
                'ibge' => '4309308',
            ],
            [
                'name' => 'Guapore',
                'estado_id' => '23',
                'ibge' => '4309407',
            ],
            [
                'name' => 'Guarani das Miss�es',
                'estado_id' => '23',
                'ibge' => '4309506',
            ],
            [
                'name' => 'Harmonia',
                'estado_id' => '23',
                'ibge' => '4309555',
            ],
            [
                'name' => 'Herveiras',
                'estado_id' => '23',
                'ibge' => '4309571',
            ],
            [
                'name' => 'Horizontina',
                'estado_id' => '23',
                'ibge' => '4309605',
            ],
            [
                'name' => 'Hulha Negra',
                'estado_id' => '23',
                'ibge' => '4309654',
            ],
            [
                'name' => 'Humaita',
                'estado_id' => '23',
                'ibge' => '4309704',
            ],
            [
                'name' => 'Ibarama',
                'estado_id' => '23',
                'ibge' => '4309753',
            ],
            [
                'name' => 'Ibiaca',
                'estado_id' => '23',
                'ibge' => '4309803',
            ],
            [
                'name' => 'Ibiraiaras',
                'estado_id' => '23',
                'ibge' => '4309902',
            ],
            [
                'name' => 'Ibirapuita',
                'estado_id' => '23',
                'ibge' => '4309951',
            ],
            [
                'name' => 'Ibiruba',
                'estado_id' => '23',
                'ibge' => '4310009',
            ],
            [
                'name' => 'Igrejinha',
                'estado_id' => '23',
                'ibge' => '4310108',
            ],
            [
                'name' => 'Ijui',
                'estado_id' => '23',
                'ibge' => '4310207',
            ],
            [
                'name' => 'Ilopolis',
                'estado_id' => '23',
                'ibge' => '4310306',
            ],
            [
                'name' => 'Imbe',
                'estado_id' => '23',
                'ibge' => '4310330',
            ],
            [
                'name' => 'Imigrante',
                'estado_id' => '23',
                'ibge' => '4310363',
            ],
            [
                'name' => 'Independ�ncia',
                'estado_id' => '23',
                'ibge' => '4310405',
            ],
            [
                'name' => 'Inhacora',
                'estado_id' => '23',
                'ibge' => '4310413',
            ],
            [
                'name' => 'Ip�',
                'estado_id' => '23',
                'ibge' => '4310439',
            ],
            [
                'name' => 'Ipiranga do Sul',
                'estado_id' => '23',
                'ibge' => '4310462',
            ],
            [
                'name' => 'Irai',
                'estado_id' => '23',
                'ibge' => '4310504',
            ],
            [
                'name' => 'Itaara',
                'estado_id' => '23',
                'ibge' => '4310538',
            ],
            [
                'name' => 'Itacurubi',
                'estado_id' => '23',
                'ibge' => '4310553',
            ],
            [
                'name' => 'Itapuca',
                'estado_id' => '23',
                'ibge' => '4310579',
            ],
            [
                'name' => 'Itaqui',
                'estado_id' => '23',
                'ibge' => '4310603',
            ],
            [
                'name' => 'Itati',
                'estado_id' => '23',
                'ibge' => '4310652',
            ],
            [
                'name' => 'Itatiba do Sul',
                'estado_id' => '23',
                'ibge' => '4310702',
            ],
            [
                'name' => 'Ivora',
                'estado_id' => '23',
                'ibge' => '4310751',
            ],
            [
                'name' => 'Ivoti',
                'estado_id' => '23',
                'ibge' => '4310801',
            ],
            [
                'name' => 'Jaboticaba',
                'estado_id' => '23',
                'ibge' => '4310850',
            ],
            [
                'name' => 'Jacuizinho',
                'estado_id' => '23',
                'ibge' => '4310876',
            ],
            [
                'name' => 'Jacutinga',
                'estado_id' => '23',
                'ibge' => '4310900',
            ],
            [
                'name' => 'Jaguarao',
                'estado_id' => '23',
                'ibge' => '4311007',
            ],
            [
                'name' => 'Jaguari',
                'estado_id' => '23',
                'ibge' => '4311106',
            ],
            [
                'name' => 'Jaquirana',
                'estado_id' => '23',
                'ibge' => '4311122',
            ],
            [
                'name' => 'Jari',
                'estado_id' => '23',
                'ibge' => '4311130',
            ],
            [
                'name' => 'Joia',
                'estado_id' => '23',
                'ibge' => '4311155',
            ],
            [
                'name' => 'J�lio de Castilhos',
                'estado_id' => '23',
                'ibge' => '4311205',
            ],
            [
                'name' => 'Lagoa Bonita do Sul',
                'estado_id' => '23',
                'ibge' => '4311239',
            ],
            [
                'name' => 'Lagoao',
                'estado_id' => '23',
                'ibge' => '4311254',
            ],
            [
                'name' => 'Lagoa dos Tr�s Cantos',
                'estado_id' => '23',
                'ibge' => '4311270',
            ],
            [
                'name' => 'Lagoa Vermelha',
                'estado_id' => '23',
                'ibge' => '4311304',
            ],
            [
                'name' => 'Lajeado',
                'estado_id' => '23',
                'ibge' => '4311403',
            ],
            [
                'name' => 'Lajeado do Bugre',
                'estado_id' => '23',
                'ibge' => '4311429',
            ],
            [
                'name' => 'Lavras do Sul',
                'estado_id' => '23',
                'ibge' => '4311502',
            ],
            [
                'name' => 'Liberato Salzano',
                'estado_id' => '23',
                'ibge' => '4311601',
            ],
            [
                'name' => 'Lindolfo Collor',
                'estado_id' => '23',
                'ibge' => '4311627',
            ],
            [
                'name' => 'Linha Nova',
                'estado_id' => '23',
                'ibge' => '4311643',
            ],
            [
                'name' => 'Machadinho',
                'estado_id' => '23',
                'ibge' => '4311700',
            ],
            [
                'name' => 'Macambara',
                'estado_id' => '23',
                'ibge' => '4311718',
            ],
            [
                'name' => 'Mampituba',
                'estado_id' => '23',
                'ibge' => '4311734',
            ],
            [
                'name' => 'Manoel Viana',
                'estado_id' => '23',
                'ibge' => '4311759',
            ],
            [
                'name' => 'Maquine',
                'estado_id' => '23',
                'ibge' => '4311775',
            ],
            [
                'name' => 'Marata',
                'estado_id' => '23',
                'ibge' => '4311791',
            ],
            [
                'name' => 'Marau',
                'estado_id' => '23',
                'ibge' => '4311809',
            ],
            [
                'name' => 'Marcelino Ramos',
                'estado_id' => '23',
                'ibge' => '4311908',
            ],
            [
                'name' => 'Mariana Pimentel',
                'estado_id' => '23',
                'ibge' => '4311981',
            ],
            [
                'name' => 'Mariano Moro',
                'estado_id' => '23',
                'ibge' => '4312005',
            ],
            [
                'name' => 'Marques de Souza',
                'estado_id' => '23',
                'ibge' => '4312054',
            ],
            [
                'name' => 'Mata',
                'estado_id' => '23',
                'ibge' => '4312104',
            ],
            [
                'name' => 'Mato Castelhano',
                'estado_id' => '23',
                'ibge' => '4312138',
            ],
            [
                'name' => 'Mato Leitao',
                'estado_id' => '23',
                'ibge' => '4312153',
            ],
            [
                'name' => 'Mato Queimado',
                'estado_id' => '23',
                'ibge' => '4312179',
            ],
            [
                'name' => 'Maximiliano de Almeida',
                'estado_id' => '23',
                'ibge' => '4312203',
            ],
            [
                'name' => 'Minas do Leao',
                'estado_id' => '23',
                'ibge' => '4312252',
            ],
            [
                'name' => 'Miraguai',
                'estado_id' => '23',
                'ibge' => '4312302',
            ],
            [
                'name' => 'Montauri',
                'estado_id' => '23',
                'ibge' => '4312351',
            ],
            [
                'name' => 'Monte Alegre dos Campos',
                'estado_id' => '23',
                'ibge' => '4312377',
            ],
            [
                'name' => 'Monte Belo do Sul',
                'estado_id' => '23',
                'ibge' => '4312385',
            ],
            [
                'name' => 'Montenegro',
                'estado_id' => '23',
                'ibge' => '4312401',
            ],
            [
                'name' => 'Mormaco',
                'estado_id' => '23',
                'ibge' => '4312427',
            ],
            [
                'name' => 'Morrinhos do Sul',
                'estado_id' => '23',
                'ibge' => '4312443',
            ],
            [
                'name' => 'Morro Redondo',
                'estado_id' => '23',
                'ibge' => '4312450',
            ],
            [
                'name' => 'Morro Reuter',
                'estado_id' => '23',
                'ibge' => '4312476',
            ],
            [
                'name' => 'Mostardas',
                'estado_id' => '23',
                'ibge' => '4312500',
            ],
            [
                'name' => 'Mucum',
                'estado_id' => '23',
                'ibge' => '4312609',
            ],
            [
                'name' => 'Muitos Cap�es',
                'estado_id' => '23',
                'ibge' => '4312617',
            ],
            [
                'name' => 'Muliterno',
                'estado_id' => '23',
                'ibge' => '4312625',
            ],
            [
                'name' => 'Nao-Me-Toque',
                'estado_id' => '23',
                'ibge' => '4312658',
            ],
            [
                'name' => 'Nicolau Vergueiro',
                'estado_id' => '23',
                'ibge' => '4312674',
            ],
            [
                'name' => 'Nonoai',
                'estado_id' => '23',
                'ibge' => '4312708',
            ],
            [
                'name' => 'Nova Alvorada',
                'estado_id' => '23',
                'ibge' => '4312757',
            ],
            [
                'name' => 'Nova Araca',
                'estado_id' => '23',
                'ibge' => '4312807',
            ],
            [
                'name' => 'Nova Bassano',
                'estado_id' => '23',
                'ibge' => '4312906',
            ],
            [
                'name' => 'Nova Boa Vista',
                'estado_id' => '23',
                'ibge' => '4312955',
            ],
            [
                'name' => 'Nova Brescia',
                'estado_id' => '23',
                'ibge' => '4313003',
            ],
            [
                'name' => 'Nova Candelaria',
                'estado_id' => '23',
                'ibge' => '4313011',
            ],
            [
                'name' => 'Nova Esperanca do Sul',
                'estado_id' => '23',
                'ibge' => '4313037',
            ],
            [
                'name' => 'Nova Hartz',
                'estado_id' => '23',
                'ibge' => '4313060',
            ],
            [
                'name' => 'Nova Padua',
                'estado_id' => '23',
                'ibge' => '4313086',
            ],
            [
                'name' => 'Nova Palma',
                'estado_id' => '23',
                'ibge' => '4313102',
            ],
            [
                'name' => 'Nova Petropolis',
                'estado_id' => '23',
                'ibge' => '4313201',
            ],
            [
                'name' => 'Nova Prata',
                'estado_id' => '23',
                'ibge' => '4313300',
            ],
            [
                'name' => 'Nova Ramada',
                'estado_id' => '23',
                'ibge' => '4313334',
            ],
            [
                'name' => 'Nova Roma do Sul',
                'estado_id' => '23',
                'ibge' => '4313359',
            ],
            [
                'name' => 'Nova Santa Rita',
                'estado_id' => '23',
                'ibge' => '4313375',
            ],
            [
                'name' => 'Novo Cabrais',
                'estado_id' => '23',
                'ibge' => '4313391',
            ],
            [
                'name' => 'Novo Hamburgo',
                'estado_id' => '23',
                'ibge' => '4313409',
            ],
            [
                'name' => 'Novo Machado',
                'estado_id' => '23',
                'ibge' => '4313425',
            ],
            [
                'name' => 'Novo Tiradentes',
                'estado_id' => '23',
                'ibge' => '4313441',
            ],
            [
                'name' => 'Novo Xingu',
                'estado_id' => '23',
                'ibge' => '4313466',
            ],
            [
                'name' => 'Novo Barreiro',
                'estado_id' => '23',
                'ibge' => '4313490',
            ],
            [
                'name' => 'Osorio',
                'estado_id' => '23',
                'ibge' => '4313508',
            ],
            [
                'name' => 'Paim Filho',
                'estado_id' => '23',
                'ibge' => '4313607',
            ],
            [
                'name' => 'Palmares do Sul',
                'estado_id' => '23',
                'ibge' => '4313656',
            ],
            [
                'name' => 'Palmeira das Miss�es',
                'estado_id' => '23',
                'ibge' => '4313706',
            ],
            [
                'name' => 'Palmitinho',
                'estado_id' => '23',
                'ibge' => '4313805',
            ],
            [
                'name' => 'Panambi',
                'estado_id' => '23',
                'ibge' => '4313904',
            ],
            [
                'name' => 'Pantano Grande',
                'estado_id' => '23',
                'ibge' => '4313953',
            ],
            [
                'name' => 'Parai',
                'estado_id' => '23',
                'ibge' => '4314001',
            ],
            [
                'name' => 'Paraiso do Sul',
                'estado_id' => '23',
                'ibge' => '4314027',
            ],
            [
                'name' => 'Pareci Novo',
                'estado_id' => '23',
                'ibge' => '4314035',
            ],
            [
                'name' => 'Parobe',
                'estado_id' => '23',
                'ibge' => '4314050',
            ],
            [
                'name' => 'Passa Sete',
                'estado_id' => '23',
                'ibge' => '4314068',
            ],
            [
                'name' => 'Passo do Sobrado',
                'estado_id' => '23',
                'ibge' => '4314076',
            ],
            [
                'name' => 'Passo Fundo',
                'estado_id' => '23',
                'ibge' => '4314100',
            ],
            [
                'name' => 'Paulo Bento',
                'estado_id' => '23',
                'ibge' => '4314134',
            ],
            [
                'name' => 'Paverama',
                'estado_id' => '23',
                'ibge' => '4314159',
            ],
            [
                'name' => 'Pedras Altas',
                'estado_id' => '23',
                'ibge' => '4314175',
            ],
            [
                'name' => 'Pedro Osorio',
                'estado_id' => '23',
                'ibge' => '4314209',
            ],
            [
                'name' => 'Pejucara',
                'estado_id' => '23',
                'ibge' => '4314308',
            ],
            [
                'name' => 'Pelotas',
                'estado_id' => '23',
                'ibge' => '4314407',
            ],
            [
                'name' => 'Picada Cafe',
                'estado_id' => '23',
                'ibge' => '4314423',
            ],
            [
                'name' => 'Pinhal',
                'estado_id' => '23',
                'ibge' => '4314456',
            ],
            [
                'name' => 'Pinhal da Serra',
                'estado_id' => '23',
                'ibge' => '4314464',
            ],
            [
                'name' => 'Pinhal Grande',
                'estado_id' => '23',
                'ibge' => '4314472',
            ],
            [
                'name' => 'Pinheirinho do Vale',
                'estado_id' => '23',
                'ibge' => '4314498',
            ],
            [
                'name' => 'Pinheiro Machado',
                'estado_id' => '23',
                'ibge' => '4314506',
            ],
            [
                'name' => 'Pirapo',
                'estado_id' => '23',
                'ibge' => '4314555',
            ],
            [
                'name' => 'Piratini',
                'estado_id' => '23',
                'ibge' => '4314605',
            ],
            [
                'name' => 'Planalto',
                'estado_id' => '23',
                'ibge' => '4314704',
            ],
            [
                'name' => 'Poco das Antas',
                'estado_id' => '23',
                'ibge' => '4314753',
            ],
            [
                'name' => 'Pontao',
                'estado_id' => '23',
                'ibge' => '4314779',
            ],
            [
                'name' => 'Ponte Preta',
                'estado_id' => '23',
                'ibge' => '4314787',
            ],
            [
                'name' => 'Portao',
                'estado_id' => '23',
                'ibge' => '4314803',
            ],
            [
                'name' => 'Porto Alegre',
                'estado_id' => '23',
                'ibge' => '4314902',
            ],
            [
                'name' => 'Porto Lucena',
                'estado_id' => '23',
                'ibge' => '4315008',
            ],
            [
                'name' => 'Porto Maua',
                'estado_id' => '23',
                'ibge' => '4315057',
            ],
            [
                'name' => 'Porto Vera Cruz',
                'estado_id' => '23',
                'ibge' => '4315073',
            ],
            [
                'name' => 'Porto Xavier',
                'estado_id' => '23',
                'ibge' => '4315107',
            ],
            [
                'name' => 'Pouso Novo',
                'estado_id' => '23',
                'ibge' => '4315131',
            ],
            [
                'name' => 'Presidente Lucena',
                'estado_id' => '23',
                'ibge' => '4315149',
            ],
            [
                'name' => 'Progresso',
                'estado_id' => '23',
                'ibge' => '4315156',
            ],
            [
                'name' => 'Protasio Alves',
                'estado_id' => '23',
                'ibge' => '4315172',
            ],
            [
                'name' => 'Putinga',
                'estado_id' => '23',
                'ibge' => '4315206',
            ],
            [
                'name' => 'Quarai',
                'estado_id' => '23',
                'ibge' => '4315305',
            ],
            [
                'name' => 'Quatro Irmaos',
                'estado_id' => '23',
                'ibge' => '4315313',
            ],
            [
                'name' => 'Quevedos',
                'estado_id' => '23',
                'ibge' => '4315321',
            ],
            [
                'name' => 'Quinze de Novembro',
                'estado_id' => '23',
                'ibge' => '4315354',
            ],
            [
                'name' => 'Redentora',
                'estado_id' => '23',
                'ibge' => '4315404',
            ],
            [
                'name' => 'Relvado',
                'estado_id' => '23',
                'ibge' => '4315453',
            ],
            [
                'name' => 'Restinga Seca',
                'estado_id' => '23',
                'ibge' => '4315503',
            ],
            [
                'name' => 'Rio dos �ndios',
                'estado_id' => '23',
                'ibge' => '4315552',
            ],
            [
                'name' => 'Rio Grande',
                'estado_id' => '23',
                'ibge' => '4315602',
            ],
            [
                'name' => 'Rio Pardo',
                'estado_id' => '23',
                'ibge' => '4315701',
            ],
            [
                'name' => 'Riozinho',
                'estado_id' => '23',
                'ibge' => '4315750',
            ],
            [
                'name' => 'Roca Sales',
                'estado_id' => '23',
                'ibge' => '4315800',
            ],
            [
                'name' => 'Rodeio Bonito',
                'estado_id' => '23',
                'ibge' => '4315909',
            ],
            [
                'name' => 'Rolador',
                'estado_id' => '23',
                'ibge' => '4315958',
            ],
            [
                'name' => 'Rolante',
                'estado_id' => '23',
                'ibge' => '4316006',
            ],
            [
                'name' => 'Ronda Alta',
                'estado_id' => '23',
                'ibge' => '4316105',
            ],
            [
                'name' => 'Rondinha',
                'estado_id' => '23',
                'ibge' => '4316204',
            ],
            [
                'name' => 'Roque Gonzales',
                'estado_id' => '23',
                'ibge' => '4316303',
            ],
            [
                'name' => 'Rosario do Sul',
                'estado_id' => '23',
                'ibge' => '4316402',
            ],
            [
                'name' => 'Sagrada Familia',
                'estado_id' => '23',
                'ibge' => '4316428',
            ],
            [
                'name' => 'Saldanha Marinho',
                'estado_id' => '23',
                'ibge' => '4316436',
            ],
            [
                'name' => 'Salto do Jacui',
                'estado_id' => '23',
                'ibge' => '4316451',
            ],
            [
                'name' => 'Salvador das Miss�es',
                'estado_id' => '23',
                'ibge' => '4316477',
            ],
            [
                'name' => 'Salvador do Sul',
                'estado_id' => '23',
                'ibge' => '4316501',
            ],
            [
                'name' => 'Sananduva',
                'estado_id' => '23',
                'ibge' => '4316600',
            ],
            [
                'name' => 'Santa Barbara do Sul',
                'estado_id' => '23',
                'ibge' => '4316709',
            ],
            [
                'name' => 'Santa Cecilia do Sul',
                'estado_id' => '23',
                'ibge' => '4316733',
            ],
            [
                'name' => 'Santa Clara do Sul',
                'estado_id' => '23',
                'ibge' => '4316758',
            ],
            [
                'name' => 'Santa Cruz do Sul',
                'estado_id' => '23',
                'ibge' => '4316808',
            ],
            [
                'name' => 'Santa Maria',
                'estado_id' => '23',
                'ibge' => '4316907',
            ],
            [
                'name' => 'Santa Maria do Herval',
                'estado_id' => '23',
                'ibge' => '4316956',
            ],
            [
                'name' => 'Santa Margarida do Sul',
                'estado_id' => '23',
                'ibge' => '4316972',
            ],
            [
                'name' => 'Santana da Boa Vista',
                'estado_id' => '23',
                'ibge' => '4317004',
            ],
            [
                'name' => 'Santa Rosa',
                'estado_id' => '23',
                'ibge' => '4317202',
            ],
            [
                'name' => 'Santa Tereza',
                'estado_id' => '23',
                'ibge' => '4317251',
            ],
            [
                'name' => 'Santa Vitoria do Palmar',
                'estado_id' => '23',
                'ibge' => '4317301',
            ],
            [
                'name' => 'Santiago',
                'estado_id' => '23',
                'ibge' => '4317400',
            ],
            [
                'name' => 'Santo �ngelo',
                'estado_id' => '23',
                'ibge' => '4317509',
            ],
            [
                'name' => 'Santo Antonio do Palma',
                'estado_id' => '23',
                'ibge' => '4317558',
            ],
            [
                'name' => 'Santo Antonio da Patrulha',
                'estado_id' => '23',
                'ibge' => '4317608',
            ],
            [
                'name' => 'Santo Antonio das Miss�es',
                'estado_id' => '23',
                'ibge' => '4317707',
            ],
            [
                'name' => 'Santo Antonio do Planalto',
                'estado_id' => '23',
                'ibge' => '4317756',
            ],
            [
                'name' => 'Santo Augusto',
                'estado_id' => '23',
                'ibge' => '4317806',
            ],
            [
                'name' => 'Santo Cristo',
                'estado_id' => '23',
                'ibge' => '4317905',
            ],
            [
                'name' => 'Santo Expedito do Sul',
                'estado_id' => '23',
                'ibge' => '4317954',
            ],
            [
                'name' => 'Sao Borja',
                'estado_id' => '23',
                'ibge' => '4318002',
            ],
            [
                'name' => 'Sao Domingos do Sul',
                'estado_id' => '23',
                'ibge' => '4318051',
            ],
            [
                'name' => 'Sao Francisco de Assis',
                'estado_id' => '23',
                'ibge' => '4318101',
            ],
            [
                'name' => 'Sao Francisco de Paula',
                'estado_id' => '23',
                'ibge' => '4318200',
            ],
            [
                'name' => 'Sao Gabriel',
                'estado_id' => '23',
                'ibge' => '4318309',
            ],
            [
                'name' => 'Sao Jeronimo',
                'estado_id' => '23',
                'ibge' => '4318408',
            ],
            [
                'name' => 'Sao Joao da Urtiga',
                'estado_id' => '23',
                'ibge' => '4318424',
            ],
            [
                'name' => 'Sao Joao do Pol�sine',
                'estado_id' => '23',
                'ibge' => '4318432',
            ],
            [
                'name' => 'Sao Jorge',
                'estado_id' => '23',
                'ibge' => '4318440',
            ],
            [
                'name' => 'Sao Jose das Miss�es',
                'estado_id' => '23',
                'ibge' => '4318457',
            ],
            [
                'name' => 'Sao Jose do Herval',
                'estado_id' => '23',
                'ibge' => '4318465',
            ],
            [
                'name' => 'Sao Jose do Hort�ncio',
                'estado_id' => '23',
                'ibge' => '4318481',
            ],
            [
                'name' => 'Sao Jose do Inhacora',
                'estado_id' => '23',
                'ibge' => '4318499',
            ],
            [
                'name' => 'Sao Jose do Norte',
                'estado_id' => '23',
                'ibge' => '4318507',
            ],
            [
                'name' => 'Sao Jose do Ouro',
                'estado_id' => '23',
                'ibge' => '4318606',
            ],
            [
                'name' => 'Sao Jose do Sul',
                'estado_id' => '23',
                'ibge' => '4318614',
            ],
            [
                'name' => 'Sao Jose dos Ausentes',
                'estado_id' => '23',
                'ibge' => '4318622',
            ],
            [
                'name' => 'Sao Leopoldo',
                'estado_id' => '23',
                'ibge' => '4318705',
            ],
            [
                'name' => 'Sao Lourenco do Sul',
                'estado_id' => '23',
                'ibge' => '4318804',
            ],
            [
                'name' => 'Sao Luiz Gonzaga',
                'estado_id' => '23',
                'ibge' => '4318903',
            ],
            [
                'name' => 'Sao Marcos',
                'estado_id' => '23',
                'ibge' => '4319000',
            ],
            [
                'name' => 'Sao Martinho',
                'estado_id' => '23',
                'ibge' => '4319109',
            ],
            [
                'name' => 'Sao Martinho da Serra',
                'estado_id' => '23',
                'ibge' => '4319125',
            ],
            [
                'name' => 'Sao Miguel das Miss�es',
                'estado_id' => '23',
                'ibge' => '4319158',
            ],
            [
                'name' => 'Sao Nicolau',
                'estado_id' => '23',
                'ibge' => '4319208',
            ],
            [
                'name' => 'Sao Paulo das Miss�es',
                'estado_id' => '23',
                'ibge' => '4319307',
            ],
            [
                'name' => 'Sao Pedro da Serra',
                'estado_id' => '23',
                'ibge' => '4319356',
            ],
            [
                'name' => 'Sao Pedro das Miss�es',
                'estado_id' => '23',
                'ibge' => '4319364',
            ],
            [
                'name' => 'Sao Pedro do Butia',
                'estado_id' => '23',
                'ibge' => '4319372',
            ],
            [
                'name' => 'Sao Pedro do Sul',
                'estado_id' => '23',
                'ibge' => '4319406',
            ],
            [
                'name' => 'Sao Sebastiao do Cai',
                'estado_id' => '23',
                'ibge' => '4319505',
            ],
            [
                'name' => 'Sao Sepe',
                'estado_id' => '23',
                'ibge' => '4319604',
            ],
            [
                'name' => 'Sao Valentim',
                'estado_id' => '23',
                'ibge' => '4319703',
            ],
            [
                'name' => 'Sao Valentim do Sul',
                'estado_id' => '23',
                'ibge' => '4319711',
            ],
            [
                'name' => 'Sao Valerio do Sul',
                'estado_id' => '23',
                'ibge' => '4319737',
            ],
            [
                'name' => 'Sao Vendelino',
                'estado_id' => '23',
                'ibge' => '4319752',
            ],
            [
                'name' => 'Sao Vicente do Sul',
                'estado_id' => '23',
                'ibge' => '4319802',
            ],
            [
                'name' => 'Sapiranga',
                'estado_id' => '23',
                'ibge' => '4319901',
            ],
            [
                'name' => 'Sapucaia do Sul',
                'estado_id' => '23',
                'ibge' => '4320008',
            ],
            [
                'name' => 'Sarandi',
                'estado_id' => '23',
                'ibge' => '4320107',
            ],
            [
                'name' => 'Seberi',
                'estado_id' => '23',
                'ibge' => '4320206',
            ],
            [
                'name' => 'Sede Nova',
                'estado_id' => '23',
                'ibge' => '4320230',
            ],
            [
                'name' => 'Segredo',
                'estado_id' => '23',
                'ibge' => '4320263',
            ],
            [
                'name' => 'Selbach',
                'estado_id' => '23',
                'ibge' => '4320305',
            ],
            [
                'name' => 'Senador Salgado Filho',
                'estado_id' => '23',
                'ibge' => '4320321',
            ],
            [
                'name' => 'Sentinela do Sul',
                'estado_id' => '23',
                'ibge' => '4320354',
            ],
            [
                'name' => 'Serafina Corr�a',
                'estado_id' => '23',
                'ibge' => '4320404',
            ],
            [
                'name' => 'Serio',
                'estado_id' => '23',
                'ibge' => '4320453',
            ],
            [
                'name' => 'Sertao',
                'estado_id' => '23',
                'ibge' => '4320503',
            ],
            [
                'name' => 'Sertao Santana',
                'estado_id' => '23',
                'ibge' => '4320552',
            ],
            [
                'name' => 'Sete de Setembro',
                'estado_id' => '23',
                'ibge' => '4320578',
            ],
            [
                'name' => 'Severiano de Almeida',
                'estado_id' => '23',
                'ibge' => '4320602',
            ],
            [
                'name' => 'Silveira Martins',
                'estado_id' => '23',
                'ibge' => '4320651',
            ],
            [
                'name' => 'Sinimbu',
                'estado_id' => '23',
                'ibge' => '4320677',
            ],
            [
                'name' => 'Sobradinho',
                'estado_id' => '23',
                'ibge' => '4320701',
            ],
            [
                'name' => 'Soledade',
                'estado_id' => '23',
                'ibge' => '4320800',
            ],
            [
                'name' => 'Tabai',
                'estado_id' => '23',
                'ibge' => '4320859',
            ],
            [
                'name' => 'Tapejara',
                'estado_id' => '23',
                'ibge' => '4320909',
            ],
            [
                'name' => 'Tapera',
                'estado_id' => '23',
                'ibge' => '4321006',
            ],
            [
                'name' => 'Tapes',
                'estado_id' => '23',
                'ibge' => '4321105',
            ],
            [
                'name' => 'Taquara',
                'estado_id' => '23',
                'ibge' => '4321204',
            ],
            [
                'name' => 'Taquari',
                'estado_id' => '23',
                'ibge' => '4321303',
            ],
            [
                'name' => 'Taquarucu do Sul',
                'estado_id' => '23',
                'ibge' => '4321329',
            ],
            [
                'name' => 'Tavares',
                'estado_id' => '23',
                'ibge' => '4321352',
            ],
            [
                'name' => 'Tenente Portela',
                'estado_id' => '23',
                'ibge' => '4321402',
            ],
            [
                'name' => 'Terra de Areia',
                'estado_id' => '23',
                'ibge' => '4321436',
            ],
            [
                'name' => 'Teutonia',
                'estado_id' => '23',
                'ibge' => '4321451',
            ],
            [
                'name' => 'Tio Hugo',
                'estado_id' => '23',
                'ibge' => '4321469',
            ],
            [
                'name' => 'Tiradentes do Sul',
                'estado_id' => '23',
                'ibge' => '4321477',
            ],
            [
                'name' => 'Toropi',
                'estado_id' => '23',
                'ibge' => '4321493',
            ],
            [
                'name' => 'Torres',
                'estado_id' => '23',
                'ibge' => '4321501',
            ],
            [
                'name' => 'Tramandai',
                'estado_id' => '23',
                'ibge' => '4321600',
            ],
            [
                'name' => 'Travesseiro',
                'estado_id' => '23',
                'ibge' => '4321626',
            ],
            [
                'name' => 'Tr�s Arroios',
                'estado_id' => '23',
                'ibge' => '4321634',
            ],
            [
                'name' => 'Tr�s Cachoeiras',
                'estado_id' => '23',
                'ibge' => '4321667',
            ],
            [
                'name' => 'Tr�s Coroas',
                'estado_id' => '23',
                'ibge' => '4321709',
            ],
            [
                'name' => 'Tr�s de Maio',
                'estado_id' => '23',
                'ibge' => '4321808',
            ],
            [
                'name' => 'Tr�s Forquilhas',
                'estado_id' => '23',
                'ibge' => '4321832',
            ],
            [
                'name' => 'Tr�s Palmeiras',
                'estado_id' => '23',
                'ibge' => '4321857',
            ],
            [
                'name' => 'Tr�s Passos',
                'estado_id' => '23',
                'ibge' => '4321907',
            ],
            [
                'name' => 'Trindade do Sul',
                'estado_id' => '23',
                'ibge' => '4321956',
            ],
            [
                'name' => 'Triunfo',
                'estado_id' => '23',
                'ibge' => '4322004',
            ],
            [
                'name' => 'Tucunduva',
                'estado_id' => '23',
                'ibge' => '4322103',
            ],
            [
                'name' => 'Tunas',
                'estado_id' => '23',
                'ibge' => '4322152',
            ],
            [
                'name' => 'Tupanci do Sul',
                'estado_id' => '23',
                'ibge' => '4322186',
            ],
            [
                'name' => 'Tupancireta',
                'estado_id' => '23',
                'ibge' => '4322202',
            ],
            [
                'name' => 'Tupandi',
                'estado_id' => '23',
                'ibge' => '4322251',
            ],
            [
                'name' => 'Tuparendi',
                'estado_id' => '23',
                'ibge' => '4322301',
            ],
            [
                'name' => 'Turucu',
                'estado_id' => '23',
                'ibge' => '4322327',
            ],
            [
                'name' => 'Ubiretama',
                'estado_id' => '23',
                'ibge' => '4322343',
            ],
            [
                'name' => 'Uniao da Serra',
                'estado_id' => '23',
                'ibge' => '4322350',
            ],
            [
                'name' => 'Unistalda',
                'estado_id' => '23',
                'ibge' => '4322376',
            ],
            [
                'name' => 'Uruguaiana',
                'estado_id' => '23',
                'ibge' => '4322400',
            ],
            [
                'name' => 'Vacaria',
                'estado_id' => '23',
                'ibge' => '4322509',
            ],
            [
                'name' => 'Vale Verde',
                'estado_id' => '23',
                'ibge' => '4322525',
            ],
            [
                'name' => 'Vale do Sol',
                'estado_id' => '23',
                'ibge' => '4322533',
            ],
            [
                'name' => 'Vale Real',
                'estado_id' => '23',
                'ibge' => '4322541',
            ],
            [
                'name' => 'Vanini',
                'estado_id' => '23',
                'ibge' => '4322558',
            ],
            [
                'name' => 'Venancio Aires',
                'estado_id' => '23',
                'ibge' => '4322608',
            ],
            [
                'name' => 'Vera Cruz',
                'estado_id' => '23',
                'ibge' => '4322707',
            ],
            [
                'name' => 'Veranopolis',
                'estado_id' => '23',
                'ibge' => '4322806',
            ],
            [
                'name' => 'Vespasiano Correa',
                'estado_id' => '23',
                'ibge' => '4322855',
            ],
            [
                'name' => 'Viadutos',
                'estado_id' => '23',
                'ibge' => '4322905',
            ],
            [
                'name' => 'Viamao',
                'estado_id' => '23',
                'ibge' => '4323002',
            ],
            [
                'name' => 'Vicente Dutra',
                'estado_id' => '23',
                'ibge' => '4323101',
            ],
            [
                'name' => 'Victor Graeff',
                'estado_id' => '23',
                'ibge' => '4323200',
            ],
            [
                'name' => 'Vila Flores',
                'estado_id' => '23',
                'ibge' => '4323309',
            ],
            [
                'name' => 'Vila Langaro',
                'estado_id' => '23',
                'ibge' => '4323358',
            ],
            [
                'name' => 'Vila Maria',
                'estado_id' => '23',
                'ibge' => '4323408',
            ],
            [
                'name' => 'Vila Nova do Sul',
                'estado_id' => '23',
                'ibge' => '4323457',
            ],
            [
                'name' => 'Vista Alegre',
                'estado_id' => '23',
                'ibge' => '4323507',
            ],
            [
                'name' => 'Vista Alegre do Prata',
                'estado_id' => '23',
                'ibge' => '4323606',
            ],
            [
                'name' => 'Vista Ga�cha',
                'estado_id' => '23',
                'ibge' => '4323705',
            ],
            [
                'name' => 'Vitoria das Miss�es',
                'estado_id' => '23',
                'ibge' => '4323754',
            ],
            [
                'name' => 'Westfalia',
                'estado_id' => '23',
                'ibge' => '4323770',
            ],
            [
                'name' => 'Xangri-la',
                'estado_id' => '23',
                'ibge' => '4323804',
            ],
            [
                'name' => 'Sant Ana do Livramento ',
                'estado_id' => '23',
                'ibge' => '4317103',
            ],

            /* Mato Grosso do Sul */

            [
                'name' => 'Agua Clara',
                'estado_id' => '24',
                'ibge' => '5000203',
            ],
            [
                'name' => 'Alcinopolis',
                'estado_id' => '24',
                'ibge' => '5000252',
            ],
            [
                'name' => 'Amambai',
                'estado_id' => '24',
                'ibge' => '5000609',
            ],
            [
                'name' => 'Anastacio',
                'estado_id' => '24',
                'ibge' => '5000708',
            ],
            [
                'name' => 'Anaurilandia',
                'estado_id' => '24',
                'ibge' => '5000807',
            ],
            [
                'name' => 'Angelica',
                'estado_id' => '24',
                'ibge' => '5000856',
            ],
            [
                'name' => 'Antonio Joao',
                'estado_id' => '24',
                'ibge' => '5000906',
            ],
            [
                'name' => 'Aparecida do Taboado',
                'estado_id' => '24',
                'ibge' => '5001003',
            ],
            [
                'name' => 'Aquidauana',
                'estado_id' => '24',
                'ibge' => '5001102',
            ],
            [
                'name' => 'Aral Moreira',
                'estado_id' => '24',
                'ibge' => '5001243',
            ],
            [
                'name' => 'Bandeirantes',
                'estado_id' => '24',
                'ibge' => '5001508',
            ],
            [
                'name' => 'Bataguassu',
                'estado_id' => '24',
                'ibge' => '5001904',
            ],
            [
                'name' => 'Bataypora',
                'estado_id' => '24',
                'ibge' => '5002001',
            ],
            [
                'name' => 'Bela Vista',
                'estado_id' => '24',
                'ibge' => '5002100',
            ],
            [
                'name' => 'Bodoquena',
                'estado_id' => '24',
                'ibge' => '5002159',
            ],
            [
                'name' => 'Bonito',
                'estado_id' => '24',
                'ibge' => '5002209',
            ],
            [
                'name' => 'Brasilandia',
                'estado_id' => '24',
                'ibge' => '5002308',
            ],
            [
                'name' => 'Caarapo',
                'estado_id' => '24',
                'ibge' => '5002407',
            ],
            [
                'name' => 'Camapua',
                'estado_id' => '24',
                'ibge' => '5002605',
            ],
            [
                'name' => 'Campo Grande',
                'estado_id' => '24',
                'ibge' => '5002704',
            ],
            [
                'name' => 'Caracol',
                'estado_id' => '24',
                'ibge' => '5002803',
            ],
            [
                'name' => 'Cassilandia',
                'estado_id' => '24',
                'ibge' => '5002902',
            ],
            [
                'name' => 'Chapadao do Sul',
                'estado_id' => '24',
                'ibge' => '5002951',
            ],
            [
                'name' => 'Corguinho',
                'estado_id' => '24',
                'ibge' => '5003108',
            ],
            [
                'name' => 'Coronel Sapucaia',
                'estado_id' => '24',
                'ibge' => '5003157',
            ],
            [
                'name' => 'Corumba',
                'estado_id' => '24',
                'ibge' => '5003207',
            ],
            [
                'name' => 'Costa Rica',
                'estado_id' => '24',
                'ibge' => '5003256',
            ],
            [
                'name' => 'Coxim',
                'estado_id' => '24',
                'ibge' => '5003306',
            ],
            [
                'name' => 'Deodapolis',
                'estado_id' => '24',
                'ibge' => '5003454',
            ],
            [
                'name' => 'Dois Irmaos do Buriti',
                'estado_id' => '24',
                'ibge' => '5003488',
            ],
            [
                'name' => 'Douradina',
                'estado_id' => '24',
                'ibge' => '5003504',
            ],
            [
                'name' => 'Dourados',
                'estado_id' => '24',
                'ibge' => '5003702',
            ],
            [
                'name' => 'Eldorado',
                'estado_id' => '24',
                'ibge' => '5003751',
            ],
            [
                'name' => 'Fatima do Sul',
                'estado_id' => '24',
                'ibge' => '5003801',
            ],
            [
                'name' => 'Figueirao',
                'estado_id' => '24',
                'ibge' => '5003900',
            ],
            [
                'name' => 'Gloria de Dourados',
                'estado_id' => '24',
                'ibge' => '5004007',
            ],
            [
                'name' => 'Guia Lopes da Laguna',
                'estado_id' => '24',
                'ibge' => '5004106',
            ],
            [
                'name' => 'Iguatemi',
                'estado_id' => '24',
                'ibge' => '5004304',
            ],
            [
                'name' => 'Inoc�ncia',
                'estado_id' => '24',
                'ibge' => '5004403',
            ],
            [
                'name' => 'Itapora',
                'estado_id' => '24',
                'ibge' => '5004502',
            ],
            [
                'name' => 'Itaquirai',
                'estado_id' => '24',
                'ibge' => '5004601',
            ],
            [
                'name' => 'Ivinhema',
                'estado_id' => '24',
                'ibge' => '5004700',
            ],
            [
                'name' => 'Japora',
                'estado_id' => '24',
                'ibge' => '5004809',
            ],
            [
                'name' => 'Jaraguari',
                'estado_id' => '24',
                'ibge' => '5004908',
            ],
            [
                'name' => 'Jardim',
                'estado_id' => '24',
                'ibge' => '5005004',
            ],
            [
                'name' => 'Jatei',
                'estado_id' => '24',
                'ibge' => '5005103',
            ],
            [
                'name' => 'Juti',
                'estado_id' => '24',
                'ibge' => '5005152',
            ],
            [
                'name' => 'Ladario',
                'estado_id' => '24',
                'ibge' => '5005202',
            ],
            [
                'name' => 'Laguna Carapa',
                'estado_id' => '24',
                'ibge' => '5005251',
            ],
            [
                'name' => 'Maracaju',
                'estado_id' => '24',
                'ibge' => '5005400',
            ],
            [
                'name' => 'Miranda',
                'estado_id' => '24',
                'ibge' => '5005608',
            ],
            [
                'name' => 'Mundo Novo',
                'estado_id' => '24',
                'ibge' => '5005681',
            ],
            [
                'name' => 'Navirai',
                'estado_id' => '24',
                'ibge' => '5005707',
            ],
            [
                'name' => 'Nioaque',
                'estado_id' => '24',
                'ibge' => '5005806',
            ],
            [
                'name' => 'Nova Alvorada do Sul',
                'estado_id' => '24',
                'ibge' => '5006002',
            ],
            [
                'name' => 'Nova Andradina',
                'estado_id' => '24',
                'ibge' => '5006200',
            ],
            [
                'name' => 'Novo Horizonte do Sul',
                'estado_id' => '24',
                'ibge' => '5006259',
            ],
            [
                'name' => 'Paranaiba',
                'estado_id' => '24',
                'ibge' => '5006309',
            ],
            [
                'name' => 'Paranhos',
                'estado_id' => '24',
                'ibge' => '5006358',
            ],
            [
                'name' => 'Pedro Gomes',
                'estado_id' => '24',
                'ibge' => '5006408',
            ],
            [
                'name' => 'Ponta Pora',
                'estado_id' => '24',
                'ibge' => '5006606',
            ],
            [
                'name' => 'Porto Murtinho',
                'estado_id' => '24',
                'ibge' => '5006903',
            ],
            [
                'name' => 'Ribas do Rio Pardo',
                'estado_id' => '24',
                'ibge' => '5007109',
            ],
            [
                'name' => 'Rio Brilhante',
                'estado_id' => '24',
                'ibge' => '5007208',
            ],
            [
                'name' => 'Rio Negro',
                'estado_id' => '24',
                'ibge' => '5007307',
            ],
            [
                'name' => 'Rio Verde de Mato Grosso',
                'estado_id' => '24',
                'ibge' => '5007406',
            ],
            [
                'name' => 'Rochedo',
                'estado_id' => '24',
                'ibge' => '5007505',
            ],
            [
                'name' => 'Santa Rita do Pardo',
                'estado_id' => '24',
                'ibge' => '5007554',
            ],
            [
                'name' => 'Sao Gabriel do Oeste',
                'estado_id' => '24',
                'ibge' => '5007695',
            ],
            [
                'name' => 'Sete Quedas',
                'estado_id' => '24',
                'ibge' => '5007703',
            ],
            [
                'name' => 'Selviria',
                'estado_id' => '24',
                'ibge' => '5007802',
            ],
            [
                'name' => 'Sidrolandia',
                'estado_id' => '24',
                'ibge' => '5007901',
            ],
            [
                'name' => 'Sonora',
                'estado_id' => '24',
                'ibge' => '5007935',
            ],
            [
                'name' => 'Tacuru',
                'estado_id' => '24',
                'ibge' => '5007950',
            ],
            [
                'name' => 'Taquarussu',
                'estado_id' => '24',
                'ibge' => '5007976',
            ],
            [
                'name' => 'Terenos',
                'estado_id' => '24',
                'ibge' => '5008008',
            ],
            [
                'name' => 'Tr�s Lagoas',
                'estado_id' => '24',
                'ibge' => '5008305',
            ],
            [
                'name' => 'Vicentina',
                'estado_id' => '24',
                'ibge' => '5008404',
            ],

            /* Mato Grosso */

            [
                'name' => 'Acorizal',
                'estado_id' => '25',
                'ibge' => '5100102',
            ],
            [
                'name' => 'Agua Boa',
                'estado_id' => '25',
                'ibge' => '5100201',
            ],
            [
                'name' => 'Alta Floresta',
                'estado_id' => '25',
                'ibge' => '5100250',
            ],
            [
                'name' => 'Alto Araguaia',
                'estado_id' => '25',
                'ibge' => '5100300',
            ],
            [
                'name' => 'Alto Boa Vista',
                'estado_id' => '25',
                'ibge' => '5100359',
            ],
            [
                'name' => 'Alto Garcas',
                'estado_id' => '25',
                'ibge' => '5100409',
            ],
            [
                'name' => 'Alto Paraguai',
                'estado_id' => '25',
                'ibge' => '5100508',
            ],
            [
                'name' => 'Alto Taquari',
                'estado_id' => '25',
                'ibge' => '5100607',
            ],
            [
                'name' => 'Apiacas',
                'estado_id' => '25',
                'ibge' => '5100805',
            ],
            [
                'name' => 'Araguaiana',
                'estado_id' => '25',
                'ibge' => '5101001',
            ],
            [
                'name' => 'Araguainha',
                'estado_id' => '25',
                'ibge' => '5101209',
            ],
            [
                'name' => 'Araputanga',
                'estado_id' => '25',
                'ibge' => '5101258',
            ],
            [
                'name' => 'Arenapolis',
                'estado_id' => '25',
                'ibge' => '5101308',
            ],
            [
                'name' => 'Aripuana',
                'estado_id' => '25',
                'ibge' => '5101407',
            ],
            [
                'name' => 'Barao de Melgaco',
                'estado_id' => '25',
                'ibge' => '5101605',
            ],
            [
                'name' => 'Barra do Bugres',
                'estado_id' => '25',
                'ibge' => '5101704',
            ],
            [
                'name' => 'Barra do Garcas',
                'estado_id' => '25',
                'ibge' => '5101803',
            ],
            [
                'name' => 'Bom Jesus do Araguaia',
                'estado_id' => '25',
                'ibge' => '5101852',
            ],
            [
                'name' => 'Brasnorte',
                'estado_id' => '25',
                'ibge' => '5101902',
            ],
            [
                'name' => 'Caceres',
                'estado_id' => '25',
                'ibge' => '5102504',
            ],
            [
                'name' => 'Campinapolis',
                'estado_id' => '25',
                'ibge' => '5102603',
            ],
            [
                'name' => 'Campo Novo do Parecis',
                'estado_id' => '25',
                'ibge' => '5102637',
            ],
            [
                'name' => 'Campo Verde',
                'estado_id' => '25',
                'ibge' => '5102678',
            ],
            [
                'name' => 'Campos de J�lio',
                'estado_id' => '25',
                'ibge' => '5102686',
            ],
            [
                'name' => 'Canabrava do Norte',
                'estado_id' => '25',
                'ibge' => '5102694',
            ],
            [
                'name' => 'Canarana',
                'estado_id' => '25',
                'ibge' => '5102702',
            ],
            [
                'name' => 'Carlinda',
                'estado_id' => '25',
                'ibge' => '5102793',
            ],
            [
                'name' => 'Castanheira',
                'estado_id' => '25',
                'ibge' => '5102850',
            ],
            [
                'name' => 'Chapada dos Guimaraes',
                'estado_id' => '25',
                'ibge' => '5103007',
            ],
            [
                'name' => 'Claudia',
                'estado_id' => '25',
                'ibge' => '5103056',
            ],
            [
                'name' => 'Cocalinho',
                'estado_id' => '25',
                'ibge' => '5103106',
            ],
            [
                'name' => 'Colider',
                'estado_id' => '25',
                'ibge' => '5103205',
            ],
            [
                'name' => 'Colniza',
                'estado_id' => '25',
                'ibge' => '5103254',
            ],
            [
                'name' => 'Comodoro',
                'estado_id' => '25',
                'ibge' => '5103304',
            ],
            [
                'name' => 'Confresa',
                'estado_id' => '25',
                'ibge' => '5103353',
            ],
            [
                'name' => 'Cotriguacu',
                'estado_id' => '25',
                'ibge' => '5103379',
            ],
            [
                'name' => 'Cuiaba',
                'estado_id' => '25',
                'ibge' => '5103403',
            ],
            [
                'name' => 'Curvelandia',
                'estado_id' => '25',
                'ibge' => '5103437',
            ],
            [
                'name' => 'Denise',
                'estado_id' => '25',
                'ibge' => '5103452',
            ],
            [
                'name' => 'Diamantino',
                'estado_id' => '25',
                'ibge' => '5103502',
            ],
            [
                'name' => 'Dom Aquino',
                'estado_id' => '25',
                'ibge' => '5103601',
            ],
            [
                'name' => 'Feliz Natal',
                'estado_id' => '25',
                'ibge' => '5103700',
            ],
            [
                'name' => 'Ga�cha do Norte',
                'estado_id' => '25',
                'ibge' => '5103858',
            ],
            [
                'name' => 'General Carneiro',
                'estado_id' => '25',
                'ibge' => '5103908',
            ],
            [
                'name' => 'Guaranta do Norte',
                'estado_id' => '25',
                'ibge' => '5104104',
            ],
            [
                'name' => 'Guiratinga',
                'estado_id' => '25',
                'ibge' => '5104203',
            ],
            [
                'name' => 'Indiavai',
                'estado_id' => '25',
                'ibge' => '5104500',
            ],
            [
                'name' => 'Ipiranga do Norte',
                'estado_id' => '25',
                'ibge' => '5104526',
            ],
            [
                'name' => 'Itanhanga',
                'estado_id' => '25',
                'ibge' => '5104542',
            ],
            [
                'name' => 'Ita�ba',
                'estado_id' => '25',
                'ibge' => '5104559',
            ],
            [
                'name' => 'Itiquira',
                'estado_id' => '25',
                'ibge' => '5104609',
            ],
            [
                'name' => 'Jaciara',
                'estado_id' => '25',
                'ibge' => '5104807',
            ],
            [
                'name' => 'Jangada',
                'estado_id' => '25',
                'ibge' => '5104906',
            ],
            [
                'name' => 'Jauru',
                'estado_id' => '25',
                'ibge' => '5105002',
            ],
            [
                'name' => 'Juara',
                'estado_id' => '25',
                'ibge' => '5105101',
            ],
            [
                'name' => 'Juina',
                'estado_id' => '25',
                'ibge' => '5105150',
            ],
            [
                'name' => 'Juruena',
                'estado_id' => '25',
                'ibge' => '5105176',
            ],
            [
                'name' => 'Juscimeira',
                'estado_id' => '25',
                'ibge' => '5105200',
            ],
            [
                'name' => 'Lucas do Rio Verde',
                'estado_id' => '25',
                'ibge' => '5105259',
            ],
            [
                'name' => 'Luciara',
                'estado_id' => '25',
                'ibge' => '5105309',
            ],
            [
                'name' => 'Vila Bela da Santissima Trind',
                'estado_id' => '25',
                'ibge' => '5105507',
            ],
            [
                'name' => 'Marcelandia',
                'estado_id' => '25',
                'ibge' => '5105580',
            ],
            [
                'name' => 'Matupa',
                'estado_id' => '25',
                'ibge' => '5105606',
            ],
            [
                'name' => 'Nobres',
                'estado_id' => '25',
                'ibge' => '5105903',
            ],
            [
                'name' => 'Nortelandia',
                'estado_id' => '25',
                'ibge' => '5106000',
            ],
            [
                'name' => 'Nossa Senhora do Livramento',
                'estado_id' => '25',
                'ibge' => '5106109',
            ],
            [
                'name' => 'Nova Bandeirantes',
                'estado_id' => '25',
                'ibge' => '5106158',
            ],
            [
                'name' => 'Nova Nazare',
                'estado_id' => '25',
                'ibge' => '5106174',
            ],
            [
                'name' => 'Nova Lacerda',
                'estado_id' => '25',
                'ibge' => '5106182',
            ],
            [
                'name' => 'Nova Santa Helena',
                'estado_id' => '25',
                'ibge' => '5106190',
            ],
            [
                'name' => 'Nova Brasilandia',
                'estado_id' => '25',
                'ibge' => '5106208',
            ],
            [
                'name' => 'Nova Canaa do Norte',
                'estado_id' => '25',
                'ibge' => '5106216',
            ],
            [
                'name' => 'Nova Mutum',
                'estado_id' => '25',
                'ibge' => '5106224',
            ],
            [
                'name' => 'Nova Olimpia',
                'estado_id' => '25',
                'ibge' => '5106232',
            ],
            [
                'name' => 'Nova Ubirata',
                'estado_id' => '25',
                'ibge' => '5106240',
            ],
            [
                'name' => 'Nova Xavantina',
                'estado_id' => '25',
                'ibge' => '5106257',
            ],
            [
                'name' => 'Novo Mundo',
                'estado_id' => '25',
                'ibge' => '5106265',
            ],
            [
                'name' => 'Novo Horizonte do Norte',
                'estado_id' => '25',
                'ibge' => '5106273',
            ],
            [
                'name' => 'Novo Sao Joaquim',
                'estado_id' => '25',
                'ibge' => '5106281',
            ],
            [
                'name' => 'Paranaita',
                'estado_id' => '25',
                'ibge' => '5106299',
            ],
            [
                'name' => 'Paranatinga',
                'estado_id' => '25',
                'ibge' => '5106307',
            ],
            [
                'name' => 'Novo Santo Antonio',
                'estado_id' => '25',
                'ibge' => '5106315',
            ],
            [
                'name' => 'Pedra Preta',
                'estado_id' => '25',
                'ibge' => '5106372',
            ],
            [
                'name' => 'Peixoto de Azevedo',
                'estado_id' => '25',
                'ibge' => '5106422',
            ],
            [
                'name' => 'Planalto da Serra',
                'estado_id' => '25',
                'ibge' => '5106455',
            ],
            [
                'name' => 'Pocone',
                'estado_id' => '25',
                'ibge' => '5106505',
            ],
            [
                'name' => 'Pontal do Araguaia',
                'estado_id' => '25',
                'ibge' => '5106653',
            ],
            [
                'name' => 'Ponte Branca',
                'estado_id' => '25',
                'ibge' => '5106703',
            ],
            [
                'name' => 'Pontes e Lacerda',
                'estado_id' => '25',
                'ibge' => '5106752',
            ],
            [
                'name' => 'Porto Alegre do Norte',
                'estado_id' => '25',
                'ibge' => '5106778',
            ],
            [
                'name' => 'Porto dos Ga�chos',
                'estado_id' => '25',
                'ibge' => '5106802',
            ],
            [
                'name' => 'Porto Esperidiao',
                'estado_id' => '25',
                'ibge' => '5106828',
            ],
            [
                'name' => 'Porto Estrela',
                'estado_id' => '25',
                'ibge' => '5106851',
            ],
            [
                'name' => 'Poxoreo',
                'estado_id' => '25',
                'ibge' => '5107008',
            ],
            [
                'name' => 'Primavera do Leste',
                'estado_id' => '25',
                'ibge' => '5107040',
            ],
            [
                'name' => 'Quer�ncia',
                'estado_id' => '25',
                'ibge' => '5107065',
            ],
            [
                'name' => 'Sao Jose dos Quatro Marcos',
                'estado_id' => '25',
                'ibge' => '5107107',
            ],
            [
                'name' => 'Reserva do Cabacal',
                'estado_id' => '25',
                'ibge' => '5107156',
            ],
            [
                'name' => 'Ribeirao Cascalheira',
                'estado_id' => '25',
                'ibge' => '5107180',
            ],
            [
                'name' => 'Ribeiraozinho',
                'estado_id' => '25',
                'ibge' => '5107198',
            ],
            [
                'name' => 'Rio Branco',
                'estado_id' => '25',
                'ibge' => '5107206',
            ],
            [
                'name' => 'Santa Carmem',
                'estado_id' => '25',
                'ibge' => '5107248',
            ],
            [
                'name' => 'Santo Afonso',
                'estado_id' => '25',
                'ibge' => '5107263',
            ],
            [
                'name' => 'Sao Jose do Povo',
                'estado_id' => '25',
                'ibge' => '5107297',
            ],
            [
                'name' => 'Sao Jose do Rio Claro',
                'estado_id' => '25',
                'ibge' => '5107305',
            ],
            [
                'name' => 'Sao Jose do Xingu',
                'estado_id' => '25',
                'ibge' => '5107354',
            ],
            [
                'name' => 'Sao Pedro da Cipa',
                'estado_id' => '25',
                'ibge' => '5107404',
            ],
            [
                'name' => 'Rondolandia',
                'estado_id' => '25',
                'ibge' => '5107578',
            ],
            [
                'name' => 'Rondonopolis',
                'estado_id' => '25',
                'ibge' => '5107602',
            ],
            [
                'name' => 'Rosario Oeste',
                'estado_id' => '25',
                'ibge' => '5107701',
            ],
            [
                'name' => 'Santa Cruz do Xingu',
                'estado_id' => '25',
                'ibge' => '5107743',
            ],
            [
                'name' => 'Salto do Ceu',
                'estado_id' => '25',
                'ibge' => '5107750',
            ],
            [
                'name' => 'Santa Rita do Trivelato',
                'estado_id' => '25',
                'ibge' => '5107768',
            ],
            [
                'name' => 'Santa Terezinha',
                'estado_id' => '25',
                'ibge' => '5107776',
            ],
            [
                'name' => 'Santo Antonio do Leste',
                'estado_id' => '25',
                'ibge' => '5107792',
            ],
            [
                'name' => 'Santo Antonio do Leverger',
                'estado_id' => '25',
                'ibge' => '5107800',
            ],
            [
                'name' => 'Sao Felix do Araguaia',
                'estado_id' => '25',
                'ibge' => '5107859',
            ],
            [
                'name' => 'Sapezal',
                'estado_id' => '25',
                'ibge' => '5107875',
            ],
            [
                'name' => 'Serra Nova Dourada',
                'estado_id' => '25',
                'ibge' => '5107883',
            ],
            [
                'name' => 'Sinop',
                'estado_id' => '25',
                'ibge' => '5107909',
            ],
            [
                'name' => 'Sorriso',
                'estado_id' => '25',
                'ibge' => '5107925',
            ],
            [
                'name' => 'Tabapora',
                'estado_id' => '25',
                'ibge' => '5107941',
            ],
            [
                'name' => 'Tangara da Serra',
                'estado_id' => '25',
                'ibge' => '5107958',
            ],
            [
                'name' => 'Tapurah',
                'estado_id' => '25',
                'ibge' => '5108006',
            ],
            [
                'name' => 'Terra Nova do Norte',
                'estado_id' => '25',
                'ibge' => '5108055',
            ],
            [
                'name' => 'Tesouro',
                'estado_id' => '25',
                'ibge' => '5108105',
            ],
            [
                'name' => 'Torixoreu',
                'estado_id' => '25',
                'ibge' => '5108204',
            ],
            [
                'name' => 'Uniao do Sul',
                'estado_id' => '25',
                'ibge' => '5108303',
            ],
            [
                'name' => 'Vale de Sao Domingos',
                'estado_id' => '25',
                'ibge' => '5108352',
            ],
            [
                'name' => 'Varzea Grande',
                'estado_id' => '25',
                'ibge' => '5108402',
            ],
            [
                'name' => 'Vera',
                'estado_id' => '25',
                'ibge' => '5108501',
            ],
            [
                'name' => 'Vila Rica',
                'estado_id' => '25',
                'ibge' => '5108600',
            ],
            [
                'name' => 'Nova Guarita',
                'estado_id' => '25',
                'ibge' => '5108808',
            ],
            [
                'name' => 'Nova Marilandia',
                'estado_id' => '25',
                'ibge' => '5108857',
            ],
            [
                'name' => 'Nova Maringa',
                'estado_id' => '25',
                'ibge' => '5108907',
            ],
            [
                'name' => 'Nova Monte Verde',
                'estado_id' => '25',
                'ibge' => '5108956',
            ],
            [
                'name' => 'Mirassol D Oeste ',
                'estado_id' => '25',
                'ibge' => '5105622',
            ],
            [
                'name' => 'Lambari D Oeste ',
                'estado_id' => '25',
                'ibge' => '5105234',
            ],
            [
                'name' => 'Gloria D Oeste ',
                'estado_id' => '25',
                'ibge' => '5103957',
            ],
            [
                'name' => 'Figueiropolis D Oeste ',
                'estado_id' => '25',
                'ibge' => '5103809',
            ],
            [
                'name' => 'Conquista D Oeste ',
                'estado_id' => '25',
                'ibge' => '5103361',
            ],

            /* Goiás */

            [
                'name' => 'Abadia de Goias',
                'estado_id' => '26',
                'ibge' => '5200050',
            ],
            [
                'name' => 'Abadiania',
                'estado_id' => '26',
                'ibge' => '5200100',
            ],
            [
                'name' => 'Acre�na',
                'estado_id' => '26',
                'ibge' => '5200134',
            ],
            [
                'name' => 'Adelandia',
                'estado_id' => '26',
                'ibge' => '5200159',
            ],
            [
                'name' => 'Agua Fria de Goias',
                'estado_id' => '26',
                'ibge' => '5200175',
            ],
            [
                'name' => 'Agua Limpa',
                'estado_id' => '26',
                'ibge' => '5200209',
            ],
            [
                'name' => 'Aguas Lindas de Goias',
                'estado_id' => '26',
                'ibge' => '5200258',
            ],
            [
                'name' => 'Alexania',
                'estado_id' => '26',
                'ibge' => '5200308',
            ],
            [
                'name' => 'Aloandia',
                'estado_id' => '26',
                'ibge' => '5200506',
            ],
            [
                'name' => 'Alto Horizonte',
                'estado_id' => '26',
                'ibge' => '5200555',
            ],
            [
                'name' => 'Alto Paraiso de Goias',
                'estado_id' => '26',
                'ibge' => '5200605',
            ],
            [
                'name' => 'Alvorada do Norte',
                'estado_id' => '26',
                'ibge' => '5200803',
            ],
            [
                'name' => 'Amaralina',
                'estado_id' => '26',
                'ibge' => '5200829',
            ],
            [
                'name' => 'Americano do Brasil',
                'estado_id' => '26',
                'ibge' => '5200852',
            ],
            [
                'name' => 'Amorinopolis',
                'estado_id' => '26',
                'ibge' => '5200902',
            ],
            [
                'name' => 'Anapolis',
                'estado_id' => '26',
                'ibge' => '5201108',
            ],
            [
                'name' => 'Anhanguera',
                'estado_id' => '26',
                'ibge' => '5201207',
            ],
            [
                'name' => 'Anicuns',
                'estado_id' => '26',
                'ibge' => '5201306',
            ],
            [
                'name' => 'Aparecida de Goiania',
                'estado_id' => '26',
                'ibge' => '5201405',
            ],
            [
                'name' => 'Aparecida do Rio Doce',
                'estado_id' => '26',
                'ibge' => '5201454',
            ],
            [
                'name' => 'Apore',
                'estado_id' => '26',
                'ibge' => '5201504',
            ],
            [
                'name' => 'Aracu',
                'estado_id' => '26',
                'ibge' => '5201603',
            ],
            [
                'name' => 'Aragarcas',
                'estado_id' => '26',
                'ibge' => '5201702',
            ],
            [
                'name' => 'Aragoiania',
                'estado_id' => '26',
                'ibge' => '5201801',
            ],
            [
                'name' => 'Araguapaz',
                'estado_id' => '26',
                'ibge' => '5202155',
            ],
            [
                'name' => 'Arenopolis',
                'estado_id' => '26',
                'ibge' => '5202353',
            ],
            [
                'name' => 'Aruana',
                'estado_id' => '26',
                'ibge' => '5202502',
            ],
            [
                'name' => 'Aurilandia',
                'estado_id' => '26',
                'ibge' => '5202601',
            ],
            [
                'name' => 'Avelinopolis',
                'estado_id' => '26',
                'ibge' => '5202809',
            ],
            [
                'name' => 'Baliza',
                'estado_id' => '26',
                'ibge' => '5203104',
            ],
            [
                'name' => 'Barro Alto',
                'estado_id' => '26',
                'ibge' => '5203203',
            ],
            [
                'name' => 'Bela Vista de Goias',
                'estado_id' => '26',
                'ibge' => '5203302',
            ],
            [
                'name' => 'Bom Jardim de Goias',
                'estado_id' => '26',
                'ibge' => '5203401',
            ],
            [
                'name' => 'Bom Jesus de Goias',
                'estado_id' => '26',
                'ibge' => '5203500',
            ],
            [
                'name' => 'Bonfinopolis',
                'estado_id' => '26',
                'ibge' => '5203559',
            ],
            [
                'name' => 'Bonopolis',
                'estado_id' => '26',
                'ibge' => '5203575',
            ],
            [
                'name' => 'Brazabrantes',
                'estado_id' => '26',
                'ibge' => '5203609',
            ],
            [
                'name' => 'Britania',
                'estado_id' => '26',
                'ibge' => '5203807',
            ],
            [
                'name' => 'Buriti Alegre',
                'estado_id' => '26',
                'ibge' => '5203906',
            ],
            [
                'name' => 'Buriti de Goias',
                'estado_id' => '26',
                'ibge' => '5203939',
            ],
            [
                'name' => 'Buritinopolis',
                'estado_id' => '26',
                'ibge' => '5203962',
            ],
            [
                'name' => 'Cabeceiras',
                'estado_id' => '26',
                'ibge' => '5204003',
            ],
            [
                'name' => 'Cachoeira Alta',
                'estado_id' => '26',
                'ibge' => '5204102',
            ],
            [
                'name' => 'Cachoeira de Goias',
                'estado_id' => '26',
                'ibge' => '5204201',
            ],
            [
                'name' => 'Cachoeira Dourada',
                'estado_id' => '26',
                'ibge' => '5204250',
            ],
            [
                'name' => 'Cacu',
                'estado_id' => '26',
                'ibge' => '5204300',
            ],
            [
                'name' => 'Caiaponia',
                'estado_id' => '26',
                'ibge' => '5204409',
            ],
            [
                'name' => 'Caldas Novas',
                'estado_id' => '26',
                'ibge' => '5204508',
            ],
            [
                'name' => 'Caldazinha',
                'estado_id' => '26',
                'ibge' => '5204557',
            ],
            [
                'name' => 'Campestre de Goias',
                'estado_id' => '26',
                'ibge' => '5204607',
            ],
            [
                'name' => 'Campinacu',
                'estado_id' => '26',
                'ibge' => '5204656',
            ],
            [
                'name' => 'Campinorte',
                'estado_id' => '26',
                'ibge' => '5204706',
            ],
            [
                'name' => 'Campo Alegre de Goias',
                'estado_id' => '26',
                'ibge' => '5204805',
            ],
            [
                'name' => 'Campo Limpo de Goias',
                'estado_id' => '26',
                'ibge' => '5204854',
            ],
            [
                'name' => 'Campos Belos',
                'estado_id' => '26',
                'ibge' => '5204904',
            ],
            [
                'name' => 'Campos Verdes',
                'estado_id' => '26',
                'ibge' => '5204953',
            ],
            [
                'name' => 'Carmo do Rio Verde',
                'estado_id' => '26',
                'ibge' => '5205000',
            ],
            [
                'name' => 'Castelandia',
                'estado_id' => '26',
                'ibge' => '5205059',
            ],
            [
                'name' => 'Catalao',
                'estado_id' => '26',
                'ibge' => '5205109',
            ],
            [
                'name' => 'Caturai',
                'estado_id' => '26',
                'ibge' => '5205208',
            ],
            [
                'name' => 'Cavalcante',
                'estado_id' => '26',
                'ibge' => '5205307',
            ],
            [
                'name' => 'Ceres',
                'estado_id' => '26',
                'ibge' => '5205406',
            ],
            [
                'name' => 'Cezarina',
                'estado_id' => '26',
                'ibge' => '5205455',
            ],
            [
                'name' => 'Chapadao do Ceu',
                'estado_id' => '26',
                'ibge' => '5205471',
            ],
            [
                'name' => 'Cidade Ocidental',
                'estado_id' => '26',
                'ibge' => '5205497',
            ],
            [
                'name' => 'Cocalzinho de Goias',
                'estado_id' => '26',
                'ibge' => '5205513',
            ],
            [
                'name' => 'Colinas do Sul',
                'estado_id' => '26',
                'ibge' => '5205521',
            ],
            [
                'name' => 'Corrego do Ouro',
                'estado_id' => '26',
                'ibge' => '5205703',
            ],
            [
                'name' => 'Corumba de Goias',
                'estado_id' => '26',
                'ibge' => '5205802',
            ],
            [
                'name' => 'Corumbaiba',
                'estado_id' => '26',
                'ibge' => '5205901',
            ],
            [
                'name' => 'Cristalina',
                'estado_id' => '26',
                'ibge' => '5206206',
            ],
            [
                'name' => 'Cristianopolis',
                'estado_id' => '26',
                'ibge' => '5206305',
            ],
            [
                'name' => 'Crixas',
                'estado_id' => '26',
                'ibge' => '5206404',
            ],
            [
                'name' => 'Crominia',
                'estado_id' => '26',
                'ibge' => '5206503',
            ],
            [
                'name' => 'Cumari',
                'estado_id' => '26',
                'ibge' => '5206602',
            ],
            [
                'name' => 'Damianopolis',
                'estado_id' => '26',
                'ibge' => '5206701',
            ],
            [
                'name' => 'Damolandia',
                'estado_id' => '26',
                'ibge' => '5206800',
            ],
            [
                'name' => 'Davinopolis',
                'estado_id' => '26',
                'ibge' => '5206909',
            ],
            [
                'name' => 'Diorama',
                'estado_id' => '26',
                'ibge' => '5207105',
            ],
            [
                'name' => 'Doverlandia',
                'estado_id' => '26',
                'ibge' => '5207253',
            ],
            [
                'name' => 'Edealina',
                'estado_id' => '26',
                'ibge' => '5207352',
            ],
            [
                'name' => 'Edeia',
                'estado_id' => '26',
                'ibge' => '5207402',
            ],
            [
                'name' => 'Estrela do Norte',
                'estado_id' => '26',
                'ibge' => '5207501',
            ],
            [
                'name' => 'Faina',
                'estado_id' => '26',
                'ibge' => '5207535',
            ],
            [
                'name' => 'Fazenda Nova',
                'estado_id' => '26',
                'ibge' => '5207600',
            ],
            [
                'name' => 'Firminopolis',
                'estado_id' => '26',
                'ibge' => '5207808',
            ],
            [
                'name' => 'Flores de Goias',
                'estado_id' => '26',
                'ibge' => '5207907',
            ],
            [
                'name' => 'Formosa',
                'estado_id' => '26',
                'ibge' => '5208004',
            ],
            [
                'name' => 'Formoso',
                'estado_id' => '26',
                'ibge' => '5208103',
            ],
            [
                'name' => 'Gameleira de Goias',
                'estado_id' => '26',
                'ibge' => '5208152',
            ],
            [
                'name' => 'Divinopolis de Goias',
                'estado_id' => '26',
                'ibge' => '5208301',
            ],
            [
                'name' => 'Goianapolis',
                'estado_id' => '26',
                'ibge' => '5208400',
            ],
            [
                'name' => 'Goiandira',
                'estado_id' => '26',
                'ibge' => '5208509',
            ],
            [
                'name' => 'Goianesia',
                'estado_id' => '26',
                'ibge' => '5208608',
            ],
            [
                'name' => 'Goiania',
                'estado_id' => '26',
                'ibge' => '5208707',
            ],
            [
                'name' => 'Goianira',
                'estado_id' => '26',
                'ibge' => '5208806',
            ],
            [
                'name' => 'Goias',
                'estado_id' => '26',
                'ibge' => '5208905',
            ],
            [
                'name' => 'Goiatuba',
                'estado_id' => '26',
                'ibge' => '5209101',
            ],
            [
                'name' => 'Gouvelandia',
                'estado_id' => '26',
                'ibge' => '5209150',
            ],
            [
                'name' => 'Guapo',
                'estado_id' => '26',
                'ibge' => '5209200',
            ],
            [
                'name' => 'Guaraita',
                'estado_id' => '26',
                'ibge' => '5209291',
            ],
            [
                'name' => 'Guarani de Goias',
                'estado_id' => '26',
                'ibge' => '5209408',
            ],
            [
                'name' => 'Guarinos',
                'estado_id' => '26',
                'ibge' => '5209457',
            ],
            [
                'name' => 'Heitorai',
                'estado_id' => '26',
                'ibge' => '5209606',
            ],
            [
                'name' => 'Hidrolandia',
                'estado_id' => '26',
                'ibge' => '5209705',
            ],
            [
                'name' => 'Hidrolina',
                'estado_id' => '26',
                'ibge' => '5209804',
            ],
            [
                'name' => 'Iaciara',
                'estado_id' => '26',
                'ibge' => '5209903',
            ],
            [
                'name' => 'Inaciolandia',
                'estado_id' => '26',
                'ibge' => '5209937',
            ],
            [
                'name' => 'Indiara',
                'estado_id' => '26',
                'ibge' => '5209952',
            ],
            [
                'name' => 'Inhumas',
                'estado_id' => '26',
                'ibge' => '5210000',
            ],
            [
                'name' => 'Ipameri',
                'estado_id' => '26',
                'ibge' => '5210109',
            ],
            [
                'name' => 'Ipiranga de Goias',
                'estado_id' => '26',
                'ibge' => '5210158',
            ],
            [
                'name' => 'Ipora',
                'estado_id' => '26',
                'ibge' => '5210208',
            ],
            [
                'name' => 'Israelandia',
                'estado_id' => '26',
                'ibge' => '5210307',
            ],
            [
                'name' => 'Itaberai',
                'estado_id' => '26',
                'ibge' => '5210406',
            ],
            [
                'name' => 'Itaguari',
                'estado_id' => '26',
                'ibge' => '5210562',
            ],
            [
                'name' => 'Itaguaru',
                'estado_id' => '26',
                'ibge' => '5210604',
            ],
            [
                'name' => 'Itaja',
                'estado_id' => '26',
                'ibge' => '5210802',
            ],
            [
                'name' => 'Itapaci',
                'estado_id' => '26',
                'ibge' => '5210901',
            ],
            [
                'name' => 'Itapirapua',
                'estado_id' => '26',
                'ibge' => '5211008',
            ],
            [
                'name' => 'Itapuranga',
                'estado_id' => '26',
                'ibge' => '5211206',
            ],
            [
                'name' => 'Itaruma',
                'estado_id' => '26',
                'ibge' => '5211305',
            ],
            [
                'name' => 'Itaucu',
                'estado_id' => '26',
                'ibge' => '5211404',
            ],
            [
                'name' => 'Itumbiara',
                'estado_id' => '26',
                'ibge' => '5211503',
            ],
            [
                'name' => 'Ivolandia',
                'estado_id' => '26',
                'ibge' => '5211602',
            ],
            [
                'name' => 'Jandaia',
                'estado_id' => '26',
                'ibge' => '5211701',
            ],
            [
                'name' => 'Jaragua',
                'estado_id' => '26',
                'ibge' => '5211800',
            ],
            [
                'name' => 'Jatai',
                'estado_id' => '26',
                'ibge' => '5211909',
            ],
            [
                'name' => 'Jaupaci',
                'estado_id' => '26',
                'ibge' => '5212006',
            ],
            [
                'name' => 'Jes�polis',
                'estado_id' => '26',
                'ibge' => '5212055',
            ],
            [
                'name' => 'Joviania',
                'estado_id' => '26',
                'ibge' => '5212105',
            ],
            [
                'name' => 'Jussara',
                'estado_id' => '26',
                'ibge' => '5212204',
            ],
            [
                'name' => 'Lagoa Santa',
                'estado_id' => '26',
                'ibge' => '5212253',
            ],
            [
                'name' => 'Leopoldo de Bulh�es',
                'estado_id' => '26',
                'ibge' => '5212303',
            ],
            [
                'name' => 'Luziania',
                'estado_id' => '26',
                'ibge' => '5212501',
            ],
            [
                'name' => 'Mairipotaba',
                'estado_id' => '26',
                'ibge' => '5212600',
            ],
            [
                'name' => 'Mambai',
                'estado_id' => '26',
                'ibge' => '5212709',
            ],
            [
                'name' => 'Mara Rosa',
                'estado_id' => '26',
                'ibge' => '5212808',
            ],
            [
                'name' => 'Marzagao',
                'estado_id' => '26',
                'ibge' => '5212907',
            ],
            [
                'name' => 'Matrincha',
                'estado_id' => '26',
                'ibge' => '5212956',
            ],
            [
                'name' => 'Maurilandia',
                'estado_id' => '26',
                'ibge' => '5213004',
            ],
            [
                'name' => 'Mimoso de Goias',
                'estado_id' => '26',
                'ibge' => '5213053',
            ],
            [
                'name' => 'Minacu',
                'estado_id' => '26',
                'ibge' => '5213087',
            ],
            [
                'name' => 'Mineiros',
                'estado_id' => '26',
                'ibge' => '5213103',
            ],
            [
                'name' => 'Moipora',
                'estado_id' => '26',
                'ibge' => '5213400',
            ],
            [
                'name' => 'Monte Alegre de Goias',
                'estado_id' => '26',
                'ibge' => '5213509',
            ],
            [
                'name' => 'Montes Claros de Goias',
                'estado_id' => '26',
                'ibge' => '5213707',
            ],
            [
                'name' => 'Montividiu',
                'estado_id' => '26',
                'ibge' => '5213756',
            ],
            [
                'name' => 'Montividiu do Norte',
                'estado_id' => '26',
                'ibge' => '5213772',
            ],
            [
                'name' => 'Morrinhos',
                'estado_id' => '26',
                'ibge' => '5213806',
            ],
            [
                'name' => 'Morro Agudo de Goias',
                'estado_id' => '26',
                'ibge' => '5213855',
            ],
            [
                'name' => 'Mossamedes',
                'estado_id' => '26',
                'ibge' => '5213905',
            ],
            [
                'name' => 'Mozarlandia',
                'estado_id' => '26',
                'ibge' => '5214002',
            ],
            [
                'name' => 'Mundo Novo',
                'estado_id' => '26',
                'ibge' => '5214051',
            ],
            [
                'name' => 'Mutunopolis',
                'estado_id' => '26',
                'ibge' => '5214101',
            ],
            [
                'name' => 'Nazario',
                'estado_id' => '26',
                'ibge' => '5214408',
            ],
            [
                'name' => 'Neropolis',
                'estado_id' => '26',
                'ibge' => '5214507',
            ],
            [
                'name' => 'Niquelandia',
                'estado_id' => '26',
                'ibge' => '5214606',
            ],
            [
                'name' => 'Nova America',
                'estado_id' => '26',
                'ibge' => '5214705',
            ],
            [
                'name' => 'Nova Aurora',
                'estado_id' => '26',
                'ibge' => '5214804',
            ],
            [
                'name' => 'Nova Crixas',
                'estado_id' => '26',
                'ibge' => '5214838',
            ],
            [
                'name' => 'Nova Gloria',
                'estado_id' => '26',
                'ibge' => '5214861',
            ],
            [
                'name' => 'Nova Iguacu de Goias',
                'estado_id' => '26',
                'ibge' => '5214879',
            ],
            [
                'name' => 'Nova Roma',
                'estado_id' => '26',
                'ibge' => '5214903',
            ],
            [
                'name' => 'Nova Veneza',
                'estado_id' => '26',
                'ibge' => '5215009',
            ],
            [
                'name' => 'Novo Brasil',
                'estado_id' => '26',
                'ibge' => '5215207',
            ],
            [
                'name' => 'Novo Gama',
                'estado_id' => '26',
                'ibge' => '5215231',
            ],
            [
                'name' => 'Novo Planalto',
                'estado_id' => '26',
                'ibge' => '5215256',
            ],
            [
                'name' => 'Orizona',
                'estado_id' => '26',
                'ibge' => '5215306',
            ],
            [
                'name' => 'Ouro Verde de Goias',
                'estado_id' => '26',
                'ibge' => '5215405',
            ],
            [
                'name' => 'Ouvidor',
                'estado_id' => '26',
                'ibge' => '5215504',
            ],
            [
                'name' => 'Padre Bernardo',
                'estado_id' => '26',
                'ibge' => '5215603',
            ],
            [
                'name' => 'Palestina de Goias',
                'estado_id' => '26',
                'ibge' => '5215652',
            ],
            [
                'name' => 'Palmeiras de Goias',
                'estado_id' => '26',
                'ibge' => '5215702',
            ],
            [
                'name' => 'Palmelo',
                'estado_id' => '26',
                'ibge' => '5215801',
            ],
            [
                'name' => 'Palminopolis',
                'estado_id' => '26',
                'ibge' => '5215900',
            ],
            [
                'name' => 'Panama',
                'estado_id' => '26',
                'ibge' => '5216007',
            ],
            [
                'name' => 'Paranaiguara',
                'estado_id' => '26',
                'ibge' => '5216304',
            ],
            [
                'name' => 'Para�na',
                'estado_id' => '26',
                'ibge' => '5216403',
            ],
            [
                'name' => 'Perolandia',
                'estado_id' => '26',
                'ibge' => '5216452',
            ],
            [
                'name' => 'Petrolina de Goias',
                'estado_id' => '26',
                'ibge' => '5216809',
            ],
            [
                'name' => 'Pilar de Goias',
                'estado_id' => '26',
                'ibge' => '5216908',
            ],
            [
                'name' => 'Piracanjuba',
                'estado_id' => '26',
                'ibge' => '5217104',
            ],
            [
                'name' => 'Piranhas',
                'estado_id' => '26',
                'ibge' => '5217203',
            ],
            [
                'name' => 'Pirenopolis',
                'estado_id' => '26',
                'ibge' => '5217302',
            ],
            [
                'name' => 'Pires do Rio',
                'estado_id' => '26',
                'ibge' => '5217401',
            ],
            [
                'name' => 'Planaltina',
                'estado_id' => '26',
                'ibge' => '5217609',
            ],
            [
                'name' => 'Pontalina',
                'estado_id' => '26',
                'ibge' => '5217708',
            ],
            [
                'name' => 'Porangatu',
                'estado_id' => '26',
                'ibge' => '5218003',
            ],
            [
                'name' => 'Porteirao',
                'estado_id' => '26',
                'ibge' => '5218052',
            ],
            [
                'name' => 'Portelandia',
                'estado_id' => '26',
                'ibge' => '5218102',
            ],
            [
                'name' => 'Posse',
                'estado_id' => '26',
                'ibge' => '5218300',
            ],
            [
                'name' => 'Professor Jamil',
                'estado_id' => '26',
                'ibge' => '5218391',
            ],
            [
                'name' => 'Quirinopolis',
                'estado_id' => '26',
                'ibge' => '5218508',
            ],
            [
                'name' => 'Rialma',
                'estado_id' => '26',
                'ibge' => '5218607',
            ],
            [
                'name' => 'Rianapolis',
                'estado_id' => '26',
                'ibge' => '5218706',
            ],
            [
                'name' => 'Rio Quente',
                'estado_id' => '26',
                'ibge' => '5218789',
            ],
            [
                'name' => 'Rio Verde',
                'estado_id' => '26',
                'ibge' => '5218805',
            ],
            [
                'name' => 'Rubiataba',
                'estado_id' => '26',
                'ibge' => '5218904',
            ],
            [
                'name' => 'Sanclerlandia',
                'estado_id' => '26',
                'ibge' => '5219001',
            ],
            [
                'name' => 'Santa Barbara de Goias',
                'estado_id' => '26',
                'ibge' => '5219100',
            ],
            [
                'name' => 'Santa Cruz de Goias',
                'estado_id' => '26',
                'ibge' => '5219209',
            ],
            [
                'name' => 'Santa Fe de Goias',
                'estado_id' => '26',
                'ibge' => '5219258',
            ],
            [
                'name' => 'Santa Helena de Goias',
                'estado_id' => '26',
                'ibge' => '5219308',
            ],
            [
                'name' => 'Santa Isabel',
                'estado_id' => '26',
                'ibge' => '5219357',
            ],
            [
                'name' => 'Santa Rita do Araguaia',
                'estado_id' => '26',
                'ibge' => '5219407',
            ],
            [
                'name' => 'Santa Rita do Novo Destino',
                'estado_id' => '26',
                'ibge' => '5219456',
            ],
            [
                'name' => 'Santa Rosa de Goias',
                'estado_id' => '26',
                'ibge' => '5219506',
            ],
            [
                'name' => 'Santa Tereza de Goias',
                'estado_id' => '26',
                'ibge' => '5219605',
            ],
            [
                'name' => 'Santa Terezinha de Goias',
                'estado_id' => '26',
                'ibge' => '5219704',
            ],
            [
                'name' => 'Santo Antonio da Barra',
                'estado_id' => '26',
                'ibge' => '5219712',
            ],
            [
                'name' => 'Santo Antonio de Goias',
                'estado_id' => '26',
                'ibge' => '5219738',
            ],
            [
                'name' => 'Santo Antonio do Descoberto',
                'estado_id' => '26',
                'ibge' => '5219753',
            ],
            [
                'name' => 'Sao Domingos',
                'estado_id' => '26',
                'ibge' => '5219803',
            ],
            [
                'name' => 'Sao Francisco de Goias',
                'estado_id' => '26',
                'ibge' => '5219902',
            ],
            [
                'name' => 'Sao Joao da Para�na',
                'estado_id' => '26',
                'ibge' => '5220058',
            ],
            [
                'name' => 'Sao Luis de Montes Belos',
                'estado_id' => '26',
                'ibge' => '5220108',
            ],
            [
                'name' => 'Sao Luiz do Norte',
                'estado_id' => '26',
                'ibge' => '5220157',
            ],
            [
                'name' => 'Sao Miguel do Araguaia',
                'estado_id' => '26',
                'ibge' => '5220207',
            ],
            [
                'name' => 'Sao Miguel do Passa Quatro',
                'estado_id' => '26',
                'ibge' => '5220264',
            ],
            [
                'name' => 'Sao Patricio',
                'estado_id' => '26',
                'ibge' => '5220280',
            ],
            [
                'name' => 'Sao Simao',
                'estado_id' => '26',
                'ibge' => '5220405',
            ],
            [
                'name' => 'Senador Canedo',
                'estado_id' => '26',
                'ibge' => '5220454',
            ],
            [
                'name' => 'Serranopolis',
                'estado_id' => '26',
                'ibge' => '5220504',
            ],
            [
                'name' => 'Silvania',
                'estado_id' => '26',
                'ibge' => '5220603',
            ],
            [
                'name' => 'Simolandia',
                'estado_id' => '26',
                'ibge' => '5220686',
            ],
            [
                'name' => 'Taquaral de Goias',
                'estado_id' => '26',
                'ibge' => '5221007',
            ],
            [
                'name' => 'Teresina de Goias',
                'estado_id' => '26',
                'ibge' => '5221080',
            ],
            [
                'name' => 'Terezopolis de Goias',
                'estado_id' => '26',
                'ibge' => '5221197',
            ],
            [
                'name' => 'Tr�s Ranchos',
                'estado_id' => '26',
                'ibge' => '5221304',
            ],
            [
                'name' => 'Trindade',
                'estado_id' => '26',
                'ibge' => '5221403',
            ],
            [
                'name' => 'Trombas',
                'estado_id' => '26',
                'ibge' => '5221452',
            ],
            [
                'name' => 'Turvania',
                'estado_id' => '26',
                'ibge' => '5221502',
            ],
            [
                'name' => 'Turvelandia',
                'estado_id' => '26',
                'ibge' => '5221551',
            ],
            [
                'name' => 'Uirapuru',
                'estado_id' => '26',
                'ibge' => '5221577',
            ],
            [
                'name' => 'Uruacu',
                'estado_id' => '26',
                'ibge' => '5221601',
            ],
            [
                'name' => 'Uruana',
                'estado_id' => '26',
                'ibge' => '5221700',
            ],
            [
                'name' => 'Urutai',
                'estado_id' => '26',
                'ibge' => '5221809',
            ],
            [
                'name' => 'Valparaiso de Goias',
                'estado_id' => '26',
                'ibge' => '5221858',
            ],
            [
                'name' => 'Varjao',
                'estado_id' => '26',
                'ibge' => '5221908',
            ],
            [
                'name' => 'Vianopolis',
                'estado_id' => '26',
                'ibge' => '5222005',
            ],
            [
                'name' => 'Vicentinopolis',
                'estado_id' => '26',
                'ibge' => '5222054',
            ],
            [
                'name' => 'Vila Boa',
                'estado_id' => '26',
                'ibge' => '5222203',
            ],
            [
                'name' => 'Vila Propicio',
                'estado_id' => '26',
                'ibge' => '5222302',
            ],
            [
                'name' => 'Sitio D Abadia ',
                'estado_id' => '26',
                'ibge' => '5220702',
            ],
            [
                'name' => 'Sao Joao D Alianca ',
                'estado_id' => '26',
                'ibge' => '5220009',
            ],

            /* 	Distrito Federal */

            [
                'name' => 'Brasilia',
                'estado_id' => '27',
                'ibge' => '5300108',
            ],

        );
    }
}
