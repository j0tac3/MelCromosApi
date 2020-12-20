<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipos')->insert([
            'nombre' => 'Deportivo Alavés',
            'escudo' => 'deportivoalaves.png',
            'estadio' => 'Mendizorroza',
            'fundacion' => 1921,
            'presidente' => 'Alfonso Fernandez de Trocóniz'
        ]);
        DB::table('equipos')->insert([
            'nombre'=> 'Athletic club',
            'escudo'=> 'athleticclub.png',
            'estadio'=> 'San Mamés',
            'fundacion'=> 1898,
            'presidente'=> 'Aitor Elizegi Alberdi'
        ]);
        DB::table('equipos')->insert([
            'nombre'=> 'Atlético de Madrid',
            'escudo'=> 'atleticodemadrid.png',
            'estadio'=> 'Wanda',
            'fundacion'=> 1903,
            'presidente'=> 'Alfonso Fernandez de Trocóniz'
        ]);
        DB::table('equipos')->insert([
            'nombre'=> 'FC Barcelona',
            'escudo'=> 'fcbarcelona.png',
            'estadio'=> 'Camp Nou',
            'fundacion'=> 1899,
            'presidente'=> 'Josep Maria Bartomeu'
        ]);
        DB::table('equipos')->insert([
            'nombre'=> 'Real Betis',
            'escudo'=> 'realbetis.png',
            'estadio'=> 'Benito Villamarín',
            'fundacion'=> 1907,
            'presidente'=> 'Ángel Haro García'
        ]);
        DB::table('equipos')->insert([
            'nombre'=> 'Cádiz CF',
            'escudo'=> 'cadizcf.png',
            'estadio'=> 'Ramón Carranza',
            'fundacion'=> 1910,
            'presidente'=> 'Manuel Vizcaino Fernandez'
        ]);
        DB::table('equipos')->insert([
            'nombre'=> 'RC Celta',
            'escudo'=> 'rccelta.png',
            'estadio'=> 'Abanca Balaídos',
            'fundacion'=> 1923,
            'presidente'=> 'Carlos Mouriño Atanes'
        ]);
        DB::table('equipos')->insert([
            'nombre'=> 'SD Eibar',
            'escudo'=> 'sdeibar.png',
            'estadio'=> 'Ipurua',
            'fundacion'=> 1940,
            'presidente'=> 'Amaia Gorostiza Tellería'
        ]);
        DB::table('equipos')->insert([
            'nombre'=> 'Getafe CF',
            'escudo'=> 'getafecf.png',
            'estadio'=> 'Coliseum Alfonso Pérez',
            'fundacion'=> 1983,
            'presidente'=> 'Ángel Torres Sánchez'
        ]);
        DB::table('equipos')->insert([
            'nombre'=> 'Granada CF',
            'escudo'=> 'granadacf.png',
            'estadio'=> 'Nuevo Los Cármenes',
            'fundacion'=> 1931,
            'presidente'=> 'Jiang Lizhang'
        ]);
        DB::table('equipos')->insert([
            'nombre'=> 'SD Huesca',
            'escudo'=> 'sdhuesca.png',
            'estadio'=> 'El Alcoraz',
            'fundacion'=> 1910,
            'presidente'=> 'Manuel Torres Guillaumet'
        ]);
        DB::table('equipos')->insert([
            'nombre'=> 'Levante UD',
            'escudo'=> 'levanteud.png',
            'estadio'=> 'Ciutat de València',
            'fundacion'=> 1909,
            'presidente'=> 'Francisco JAbvier Catalán Vena'
        ]);
        DB::table('equipos')->insert([
            'nombre'=> 'Real Madrid',
            'escudo'=> 'realmadrid.png',
            'estadio'=> 'Santiago Bernabéu',
            'fundacion'=> 1902,
            'presidente'=> 'Florentino Pérez Rodriguez'
        ]);
        DB::table('equipos')->insert([
            'nombre'=> 'CA Osasuna',
            'escudo'=> 'caosasuna.png',
            'estadio'=> 'El Sadar',
            'fundacion'=> 1920,
            'presidente'=> 'Luis Sabalza Iriarte'
        ]);
        DB::table('equipos')->insert([
            'nombre'=> 'Real Sociedad',
            'escudo'=> 'realsociedad.png',
            'estadio'=> 'Reale Arena',
            'fundacion'=> 1909,
            'presidente'=> 'Jokin Aperribay Bedialauneta'
        ]);
        DB::table('equipos')->insert([
            'nombre'=> 'Sevilla FC',
            'escudo'=> 'sevillafc.png',
            'estadio'=> 'Ramón Sánchez-Pijuán',
            'fundacion'=> 1890,
            'presidente'=> 'José Castro Carmona'
        ]);
        DB::table('equipos')->insert([
            'nombre'=> 'Valencia CF',
            'escudo'=> 'valenciacf.png',
            'estadio'=> 'Mestalla',
            'fundacion'=> 1919,
            'presidente'=> 'Anil Murthy'
        ]);
        DB::table('equipos')->insert([
            'nombre'=> 'R. Valladolid CF',
            'escudo'=> 'rvalladolidcf.png',
            'estadio'=> 'José Zorrilla',
            'fundacion'=> 1928,
            'presidente'=> 'Ronaldo Nazário de Lima'
        ]);
        DB::table('equipos')->insert([
            'nombre'=> 'Villarreal CF',
            'escudo'=> 'villarrealcf.png',
            'estadio'=> 'Estadio De La Cerámica',
            'fundacion'=> 1923,
            'presidente'=> 'Fernando Roig Alfonso'
        ]);
        DB::table('equipos')->insert([
            'nombre'=> 'Elche CF',
            'escudo'=> 'elchecf.png',
            'estadio'=> 'Estadio Martínez Valero',
            'fundacion'=> 1922,
            'presidente'=> 'Joaquín Buitrago Marhuenda'
        ]);
    }
}
