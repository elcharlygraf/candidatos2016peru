<?php

use Illuminate\Database\Seeder;

class CandidatosSeed extends Seeder
{

    public function run()
    {
            DB::table('candidatos')->insert(
            array(
				array(
					'nombres' => 'ALAN GABRIEL LUDWIG GARCIA PEREZ',
					'partido' => 'ALIANZA POPULAR'
					),
				array(
					'nombres' => 'ALEJANDRO TOLEDO MANRIQUE',
					'partido' => 'PERU POSIBLE'
					),
				array(
					'nombres' => 'ANTERO FLORES ARAOZ ESPARZA',
					'partido' => 'PARTIDO POLITICO ORDEN'
					),
				array(
					'nombres' => 'FRANCISCO ERNESTO DIEZ-CANSECO TÁVARA',
					'partido' => 'PERU NACION'
					),
				array(
					'nombres' => 'GREGORIO SANTOS GUERRERO',
					'partido' => 'DEMOCRACIA DIRECTA'
					),
				array(
					'nombres' => 'ISAAC ALFREDO BARNECHEA GARCIA',
					'partido' => 'ACCION POPULAR'
					),
				array(
					'nombres' => 'KEIKO SOFIA FUJIMORI HIGUCHI',
					'partido' => 'FUERZA POPULAR'
					),
				array(
					'nombres' => 'LUIS FERNANDO OLIVERA VEGA',
					'partido' => 'FRENTE ESPERANZA'
					),
				array(
					'nombres' => 'MIGUEL WALTER HILARIO ESCOBAR',
					'partido' => 'PROGRESANDO PERU'
					),
				array(
					'nombres' => 'PEDRO PABLO KUCZYNSKI GODARD',
					'partido' => 'PERUANOS POR EL KAMBIO'
					),
				array(
					'nombres' => 'VERONIKA FANNY MENDOZA FRISCH',
					'partido' => 'EL FRENTE AMPLIO POR JUSTICIA, VIDA Y LIBERTAD'
					)
            ));
    }
}
