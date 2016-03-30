<?php

use Illuminate\Database\Seeder;

class DepartamentosSeed extends Seeder
{
    public function run()
    {
        DB::table('departamentos')->insert(
            array(
				array('nombre' => 'Ancash'),
				array('nombre' => 'Apurimac'),
				array('nombre' => 'Arequipa'),
				array('nombre' => 'Ayacucho'),
				array('nombre' => 'Cajamarca'),
				array('nombre' => 'Callao'),
				array('nombre' => 'Cusco'),
				array('nombre' => 'Huancavelica'),
				array('nombre' => 'Huanuco'),
				array('nombre' => 'Ica'),
				array('nombre' => 'Junin '),
				array('nombre' => 'La Libertad'),
				array('nombre' => 'Lambayeque'),
				array('nombre' => 'Lima'),
				array('nombre' => 'Loreto'),
				array('nombre' => 'Madre De Dios'),
				array('nombre' => 'Moquegua'),
				array('nombre' => 'Pasco'),
				array('nombre' => 'Piura'),
				array('nombre' => 'Puno '),
				array('nombre' => 'San Martin'),
				array('nombre' => 'Tacna'),
				array('nombre' => 'Tumbes'),
				array('nombre' => 'Uca')
            ));
    }
}
