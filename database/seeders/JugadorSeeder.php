<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JugadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jugadors')->insert([
            'numero'=> '1',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Pablo',
            'apellidos'=> 'Machín',
            'apodo'=> 'Pablo Machín',
            'fecha_nacimiento'=> '1975',
            'altura'=> '1.81',
            'nacionalidad'=> 'Soria (Soria)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '2',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Fernando',
            'apellidos'=> 'Pacheco Flores',
            'apodo'=> 'Fernando Pacheco',
            'fecha_nacimiento'=> '1992',
            'altura'=> '1.86',
            'nacionalidad'=> 'Puebla de Obando (Badajoz)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '3',
            'seccion'=> 'Base',
            'edicion'=> '4',
            'nombre'=> 'Antonio',
            'apellidos'=> 'Sivera Salvà',
            'apodo'=> 'Sivera',
            'fecha_nacimiento'=> '1996',
            'altura'=> '1.8',
            'nacionalidad'=> 'Javea (Alicante)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '4',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Joaquín',
            'apellidos'=> 'Navarro Jiménez',
            'apodo'=> 'Ximo Navarro',
            'fecha_nacimiento'=> '190',
            'altura'=> '1.77',
            'nacionalidad'=> 'Guadahortuna (Granada)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '5',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Martín',
            'apellidos'=> 'Aguirregabiria Padilla',
            'apodo'=> 'Martín',
            'fecha_nacimiento'=> '1996',
            'altura'=> '1.76',
            'nacionalidad'=> 'Vitoria-Gasteiz (Álava)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '6',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Victor',
            'apellidos'=> 'Laguardia Cisnero',
            'apodo'=> 'Laguardia',
            'fecha_nacimiento'=> '1989',
            'altura'=> '1.85',
            'nacionalidad'=> 'Zaragoza (Zaragoza)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '7',
            'seccion'=> 'Base',
            'edicion'=> '4',
            'nombre'=> 'Javier',
            'apellidos'=> 'López Carballo',
            'apodo'=> 'Javi López',
            'fecha_nacimiento'=> '2002',
            'altura'=> '1.83',
            'nacionalidad'=> 'La Orotava (Tenerife)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '8',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Rodrigo',
            'apellidos'=> 'Ely',
            'apodo'=> 'Rodrigo Ely',
            'fecha_nacimiento'=> '1993',
            'altura'=> '1.88',
            'nacionalidad'=> 'Rio Grande del Sur (Brasil)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '9',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Rubén',
            'apellidos'=> 'Duarte Sánchez',
            'apodo'=> 'Duarte',
            'fecha_nacimiento'=> '1995',
            'altura'=> '1.72',
            'nacionalidad'=> 'lmería (Almería)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '10',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Adrián',
            'apellidos'=> 'Marín Gómez',
            'apodo'=> 'Adrián Marín',
            'fecha_nacimiento'=> '197',
            'altura'=> '1.86',
            'nacionalidad'=> 'Torre-Pacheco (Murcia)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '11',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Manu',
            'apellidos'=> 'García Sánchez',
            'apodo'=> 'Manu García',
            'fecha_nacimiento'=> '1986',
            'altura'=> '1.82',
            'nacionalidad'=> 'Vitoia-Gasteiz (Álava)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '12',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Pere',
            'apellidos'=> 'Pons Riera',
            'apodo'=> 'Pere Pons',
            'fecha_nacimiento'=> '1993',
            'altura'=> '1.77',
            'nacionalidad'=> 'Sant Marti Vell (Gerona)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '13',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Luis',
            'apellidos'=> 'Rioja González',
            'apodo'=> 'Luis Rioja',
            'fecha_nacimiento'=> '1993',
            'altura'=> '1.76',
            'nacionalidad'=> 'Las Cabezas de San (Sevilla)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '14',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Tomás',
            'apellidos'=> 'Pina Isla',
            'apodo'=> 'Pina',
            'fecha_nacimiento'=> '1987',
            'altura'=> '1.85',
            'nacionalidad'=> 'Villarta de San Juan (Ciudad Real)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '15',
            'seccion'=> 'Base',
            'edicion'=> '4',
            'nombre'=> 'John',
            'apellidos'=> 'Guidetti',
            'apodo'=> 'Guidetti',
            'fecha_nacimiento'=> '1992',
            'altura'=> '1.85',
            'nacionalidad'=> 'Estocolmo (Suecia)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '16B',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Édgar',
            'apellidos'=> 'Mendez',
            'apodo'=> 'Edgar',
            'fecha_nacimiento'=> '1990',
            'altura'=> '1.88',
            'nacionalidad'=> 'Arafo (Santa Cruz de Tenerife)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '16B',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Borja',
            'apellidos'=> 'Sainz',
            'apodo'=> 'Borja Sanz',
            'fecha_nacimiento'=> '2001',
            'altura'=> '1.74',
            'nacionalidad'=> 'Leioa (Bizkaia)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '17',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Lucas',
            'apellidos'=> 'Pérez Martínez',
            'apodo'=> 'Lucas Pérez',
            'fecha_nacimiento'=> '1988',
            'altura'=> '1.80',
            'nacionalidad'=> 'La Coruña (La Coruña)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '18',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'José Luis',
            'apellidos'=> 'Mato Sanmartín',
            'apodo'=> 'Joselu',
            'fecha_nacimiento'=> '1990',
            'altura'=> '1.91',
            'nacionalidad'=> 'Stuttgart (Alemania)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '13',
            'seccion'=> 'Serie 10',
            'edicion'=> '1',
            'nombre'=> 'Lucas',
            'apellidos'=> 'Pérez Martínez',
            'apodo'=> 'Lucas Pérez',
            'fecha_nacimiento'=> '1988',
            'altura'=> '1.80',
            'nacionalidad'=> 'La Coruña (La Coruña)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '9',
            'seccion'=> 'Ultimos Fichajes',
            'edicion'=> '3',
            'nombre'=> 'Deyversin',
            'apellidos'=> 'Silva Acosta',
            'apodo'=> 'Deyverson',
            'fecha_nacimiento'=> '1991',
            'altura'=> '1.89',
            'nacionalidad'=> 'Rio de Janeiro (Brasil)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '27',
            'seccion'=> 'Ultimos Fichajes',
            'edicion'=> '4',
            'nombre'=> 'Rodrigo Andrés',
            'apellidos'=> 'Battaglia',
            'apodo'=> 'Battaglia',
            'fecha_nacimiento'=> '1991',
            'altura'=> '1.87',
            'nacionalidad'=> 'Morón (Argentina)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '33',
            'seccion'=> 'Ultimos Fichajes',
            'edicion'=> '4',
            'nombre'=> 'Florian',
            'apellidos'=> 'Lejeune',
            'apodo'=> 'Lejeune',
            'fecha_nacimiento'=> '1991',
            'altura'=> '1.88',
            'nacionalidad'=> 'París (Fracia)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '47',
            'seccion'=> 'Ultimos Fichajes',
            'edicion'=> '4',
            'nombre'=> 'Jose Ignacio',
            'apellidos'=> 'Peleteiro Ramallo',
            'apodo'=> 'Jota Peleteiro',
            'fecha_nacimiento'=> '1991',
            'altura'=> '1.80',
            'nacionalidad'=> 'Puebla de Caramiñal (La Coruña)',
            'equipo_id'=> '1'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '1',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Gaizka',
            'apellidos'=> 'Garitano',
            'apodo'=> 'Gaizka Garitano',
            'fecha_nacimiento'=> '1975',
            'altura'=> '',
            'nacionalidad'=> 'Derio (Bizkaia)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '2',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Unai',
            'apellidos'=> 'Simón',
            'apodo'=> 'Unai Simón',
            'fecha_nacimiento'=> '1997',
            'altura'=> '1.90',
            'nacionalidad'=> 'Bizkaia',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '3',
            'seccion'=> 'Base',
            'edicion'=> '3',
            'nombre'=> 'Jokin',
            'apellidos'=> 'Ezkieta',
            'apodo'=> 'Ezkieta',
            'fecha_nacimiento'=> '1996',
            'altura'=> '1.93',
            'nacionalidad'=> 'Villava (Navarra)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '3BIS',
            'seccion'=> 'Base',
            'edicion'=> '4',
            'nombre'=> 'Iago',
            'apellidos'=> 'Herrerín',
            'apodo'=> 'Iago Herrerín',
            'fecha_nacimiento'=> '1988',
            'altura'=> '1.87',
            'nacionalidad'=> 'Bilbao (Bizkaia)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '4A',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Óscar',
            'apellidos'=> 'De Marcos',
            'apodo'=> 'De Marcos',
            'fecha_nacimiento'=> '1989',
            'altura'=> '1.80',
            'nacionalidad'=> 'Laguardia (Álava)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '4B',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Iñigo',
            'apellidos'=> 'Lekue',
            'apodo'=> 'Lekue',
            'fecha_nacimiento'=> '1993',
            'altura'=> '1.80',
            'nacionalidad'=> 'Bilbao (Bizkaia)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '5',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Ander',
            'apellidos'=> 'Capa',
            'apodo'=> 'Capa',
            'fecha_nacimiento'=> '1992',
            'altura'=> '1.73',
            'nacionalidad'=> 'Portugalete (Bizkaia)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '6',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Unai',
            'apellidos'=> 'Núñez',
            'apodo'=> 'Núñez',
            'fecha_nacimiento'=> '1997',
            'altura'=> '1.86',
            'nacionalidad'=> 'Portugalete 8Bizkaia)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '7',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Íñigo',
            'apellidos'=> 'Martínez',
            'apodo'=> 'Íñigo Martínez',
            'fecha_nacimiento'=> '1991',
            'altura'=> '1.81',
            'nacionalidad'=> 'Bilbao (Bizkaia)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '8',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Yeray',
            'apellidos'=> 'Álvarez',
            'apodo'=> 'Yeray',
            'fecha_nacimiento'=> '1991',
            'altura'=> '1.81',
            'nacionalidad'=> 'Barakaldo (Bizkaia)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '9',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Yuri',
            'apellidos'=> 'Berchiche',
            'apodo'=> 'Yuri',
            'fecha_nacimiento'=> '1995',
            'altura'=> '1.83',
            'nacionalidad'=> 'Zarautz (Gipuzkoa)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '10',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Dani',
            'apellidos'=> 'García',
            'apodo'=> 'Dani García',
            'fecha_nacimiento'=> '1990',
            'altura'=> '1.91',
            'nacionalidad'=> 'Vitoria (Álava)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '11',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Mikel',
            'apellidos'=> 'Vezga',
            'apodo'=> 'Vesga',
            'fecha_nacimiento'=> '1993',
            'altura'=> '1.91',
            'nacionalidad'=> 'Vitoria (Álava)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '12',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Unai',
            'apellidos'=> 'López',
            'apodo'=> 'Unai López',
            'fecha_nacimiento'=> '1995',
            'altura'=> '1.69',
            'nacionalidad'=> 'Rentería (Gipuzkoa)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '13',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Oihan',
            'apellidos'=> 'Sancet',
            'apodo'=> 'Sancet',
            'fecha_nacimiento'=> '2000',
            'altura'=> '1.88',
            'nacionalidad'=> 'Pamplona (Navarra)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '14',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Iker',
            'apellidos'=> 'Miniain',
            'apodo'=> 'Muniain',
            'fecha_nacimiento'=> '1992',
            'altura'=> '1.69',
            'nacionalidad'=> 'Pamplona (Navarra)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '15',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Raúl',
            'apellidos'=> 'García',
            'apodo'=> 'Raúl García',
            'fecha_nacimiento'=> '1986',
            'altura'=> '1.83',
            'nacionalidad'=> 'Pamplona (Navarra)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '16A',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Ibai',
            'apellidos'=> 'Gómez',
            'apodo'=> 'Ibai Gómez',
            'fecha_nacimiento'=> '1989',
            'altura'=> '1.79',
            'nacionalidad'=> 'Bilbao (Bizkaia)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '16B',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Iñigo',
            'apellidos'=> 'Córdoba',
            'apodo'=> 'Córdoba',
            'fecha_nacimiento'=> '1997',
            'altura'=> '1.80',
            'nacionalidad'=> 'Bilbao (Bizkaia)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '17',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Iñaki',
            'apellidos'=> 'Williams',
            'apodo'=> 'Williams',
            'fecha_nacimiento'=> '1994',
            'altura'=> '1.86',
            'nacionalidad'=> 'Bilbao (Bizkaia)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '18',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Asier',
            'apellidos'=> 'Villalibre',
            'apodo'=> 'Villalibre',
            'fecha_nacimiento'=> '1997',
            'altura'=> '1.84',
            'nacionalidad'=> 'Gernika (Bizkaia)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '14',
            'seccion'=> 'Serie 10',
            'edicion'=> '1',
            'nombre'=> 'Iker',
            'apellidos'=> 'Muniain',
            'apodo'=> 'Muniain',
            'fecha_nacimiento'=> '1992',
            'altura'=> '1.69',
            'nacionalidad'=> 'Pamplona (Navarra)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '24',
            'seccion'=> 'Serie 10',
            'edicion'=> '1',
            'nombre'=> 'Iñaki',
            'apellidos'=> 'Williams',
            'apodo'=> 'Williams',
            'fecha_nacimiento'=> '1994',
            'altura'=> '1.86',
            'nacionalidad'=> 'Bilbao (Bizkaia)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '28',
            'seccion'=> 'Ultimos Fichajes',
            'edicion'=> '4',
            'nombre'=> 'Jon',
            'apellidos'=> 'Morcillo',
            'apodo'=> 'Morcillo',
            'fecha_nacimiento'=> '1998',
            'altura'=> '1.83',
            'nacionalidad'=> 'Amorebieta-Etxano (Bizkaia)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '41',
            'seccion'=> 'Ultimos Fichajes',
            'edicion'=> '4',
            'nombre'=> 'Íñigo',
            'apellidos'=> 'Vicente',
            'apodo'=> 'Íñigo Vicente',
            'fecha_nacimiento'=> '1998',
            'altura'=> '1.78',
            'nacionalidad'=> 'Derio (Bizkaia)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '64',
            'seccion'=> 'Ultimos Fichajes',
            'edicion'=> '4',
            'nombre'=> 'Alejandro',
            'apellidos'=> 'Berenguer',
            'apodo'=> 'Berenguer',
            'fecha_nacimiento'=> '1995',
            'altura'=> '1.75',
            'nacionalidad'=> 'Berañain (Navarra)',
            'equipo_id'=> '2'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '1',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Diego Pablo',
            'apellidos'=> 'Simeone',
            'apodo'=> 'Simeone',
            'fecha_nacimiento'=> '1970',
            'altura'=> '',
            'nacionalidad'=> 'Buenos Aires (Argentina)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '2',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Jan',
            'apellidos'=> 'Oblak',
            'apodo'=> 'Oblak',
            'fecha_nacimiento'=> '1993',
            'altura'=> '1.88',
            'nacionalidad'=> 'Skofja Loka (Eslovenia)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '3',
            'seccion'=> 'Base',
            'edicion'=> '4',
            'nombre'=> 'Ivo',
            'apellidos'=> 'Grbic',
            'apodo'=> 'Grbic',
            'fecha_nacimiento'=> '1996',
            'altura'=> '1.95',
            'nacionalidad'=> 'Split (Croacia)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '4',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Kieran',
            'apellidos'=> 'Trippier',
            'apodo'=> 'Trippier',
            'fecha_nacimiento'=> '1990',
            'altura'=> '1.73',
            'nacionalidad'=> 'Bury (Inglaterra)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '5',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Stefan',
            'apellidos'=> 'Savic',
            'apodo'=> 'Savic',
            'fecha_nacimiento'=> '1991',
            'altura'=> '1.86',
            'nacionalidad'=> 'Mojkovac (Montenegro)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '6',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Felipe',
            'apellidos'=> 'Monteiro',
            'apodo'=> 'Felipe',
            'fecha_nacimiento'=> '1989',
            'altura'=> '1.91',
            'nacionalidad'=> 'Mogi das Cruzes (Brasil)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '7',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'José María',
            'apellidos'=> 'Giménez',
            'apodo'=> 'Giménez',
            'fecha_nacimiento'=> '1995',
            'altura'=> '1.85',
            'nacionalidad'=> 'Toledo (Uruguay)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '8A',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Santiago',
            'apellidos'=> 'Arias',
            'apodo'=> 'Arias',
            'fecha_nacimiento'=> '1992',
            'altura'=> '1.77',
            'nacionalidad'=> 'Bogotá (Colombia)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '8B',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Mario',
            'apellidos'=> 'Hermoso',
            'apodo'=> 'Mario Hermoso',
            'fecha_nacimiento'=> '1995',
            'altura'=> '1.81',
            'nacionalidad'=> 'Madrid (Madrid)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '3',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Renan',
            'apellidos'=> 'Lodi',
            'apodo'=> 'Lodi',
            'fecha_nacimiento'=> '1998',
            'altura'=> '1.73',
            'nacionalidad'=> 'Serrana (Brasil)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '10',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Marcos',
            'apellidos'=> 'Llorente',
            'apodo'=> 'Marcos Llorente',
            'fecha_nacimiento'=> '1995',
            'altura'=> '1.80',
            'nacionalidad'=> 'Madrid (Madrid)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '11A',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Thomas',
            'apellidos'=> 'Partey',
            'apodo'=> 'Thomas',
            'fecha_nacimiento'=> '1993',
            'altura'=> '1.85',
            'nacionalidad'=> 'Odumase Krobo (Ghana)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '11B',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Héctor',
            'apellidos'=> 'Herrera',
            'apodo'=> 'Herrera',
            'fecha_nacimiento'=> '1990',
            'altura'=> '1.80',
            'nacionalidad'=> 'Tijuana (México)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '12',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Koke',
            'apellidos'=> 'Koke',
            'apodo'=> '',
            'fecha_nacimiento'=> '1992',
            'altura'=> '1.78',
            'nacionalidad'=> 'Madrid (Madrid)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '13',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Saúl',
            'apellidos'=> 'Ñiguez',
            'apodo'=> 'Saul',
            'fecha_nacimiento'=> '1994',
            'altura'=> '1.82',
            'nacionalidad'=> 'Elche (Alicante)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '14A',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Yannick',
            'apellidos'=> 'Carrasco',
            'apodo'=> 'Carrasco',
            'fecha_nacimiento'=> '1993',
            'altura'=> '1.83',
            'nacionalidad'=> 'Ixelles (Bélgica)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '14B',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Vitolo',
            'apellidos'=> '',
            'apodo'=> 'Vitolo',
            'fecha_nacimiento'=> '1989',
            'altura'=> '1.83',
            'nacionalidad'=> 'Las Palmas de Gran Canaria (Gran Canaria)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '15',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'João Félix',
            'apellidos'=> 'Sequeira',
            'apodo'=> 'Joao Félix',
            'fecha_nacimiento'=> '1999',
            'altura'=> '1.80',
            'nacionalidad'=> 'Viseu (Portugal)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '16',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Ángel',
            'apellidos'=> 'Correo',
            'apodo'=> 'Correa',
            'fecha_nacimiento'=> '1995',
            'altura'=> '1.71',
            'nacionalidad'=> 'Rosario (Argentina)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '17',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Áñvaro',
            'apellidos'=> 'Morata',
            'apodo'=> 'Morata',
            'fecha_nacimiento'=> '1992',
            'altura'=> '1.90',
            'nacionalidad'=> 'Madrid (Madrid)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '18',
            'seccion'=> 'Base',
            'edicion'=> '1',
            'nombre'=> 'Diego',
            'apellidos'=> 'Costa',
            'apodo'=> 'Diego Costa',
            'fecha_nacimiento'=> '1988',
            'altura'=> '1.86',
            'nacionalidad'=> 'Lagarto (Brasil)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '4BIS',
            'seccion'=> 'Base',
            'edicion'=> '4',
            'nombre'=> 'Sime',
            'apellidos'=> 'Srsaljko',
            'apodo'=> 'Vrsaljko',
            'fecha_nacimiento'=> '1992',
            'altura'=> '1.83',
            'nacionalidad'=> 'Rijeka (Croacia)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '17BIS',
            'seccion'=> 'Base',
            'edicion'=> '4',
            'nombre'=> 'Thomas',
            'apellidos'=> 'Lemar',
            'apodo'=> 'Lemar',
            'fecha_nacimiento'=> '1995',
            'altura'=> '1.70',
            'nacionalidad'=> 'Baie-Mahaut (Guadalupe)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '11',
            'seccion'=> 'Serie 10',
            'edicion'=> '1',
            'nombre'=> 'João Felix',
            'apellidos'=> 'Sequeira',
            'apodo'=> 'Joao Félix',
            'fecha_nacimiento'=> '1999',
            'altura'=> '1.80',
            'nacionalidad'=> 'Viseu (Portugal)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '15',
            'seccion'=> 'Serie 10',
            'edicion'=> '1',
            'nombre'=> 'Marcos',
            'apellidos'=> 'Llorente',
            'apodo'=> 'Marcos Llorente',
            'fecha_nacimiento'=> '1995',
            'altura'=> '1.80',
            'nacionalidad'=> 'Madrid (Madrid)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '21',
            'seccion'=> 'Serie 10',
            'edicion'=> '1',
            'nombre'=> 'Saúl',
            'apellidos'=> 'Ñiguez',
            'apodo'=> 'Saul',
            'fecha_nacimiento'=> '1994',
            'altura'=> '1.82',
            'nacionalidad'=> 'Elche (Alicante)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '30',
            'seccion'=> 'Ultimos Fichajes',
            'edicion'=> '4',
            'nombre'=> 'Luis',
            'apellidos'=> 'Suárez',
            'apodo'=> 'Luis Suárez',
            'fecha_nacimiento'=> '1987',
            'altura'=> '1.81',
            'nacionalidad'=> 'Salto (Uruguay)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '46',
            'seccion'=> 'Ultimos Fichajes',
            'edicion'=> '4',
            'nombre'=> 'Lucas',
            'apellidos'=> 'Torreira',
            'apodo'=> 'Torreira',
            'fecha_nacimiento'=> '1996',
            'altura'=> '1.66',
            'nacionalidad'=> 'Fray Bentos (Uruguay)',
            'equipo_id'=> '3'
        ]);
        DB::table('jugadors')->insert([
            'numero'=> '70',
            'seccion'=> 'Top Fichajes',
            'edicion'=> '4',
            'nombre'=> 'Luis',
            'apellidos'=> 'Suárez',
            'apodo'=> 'Luis Suárez',
            'fecha_nacimiento'=> '1987',
            'altura'=> '1.81',
            'nacionalidad'=> 'Salto(Uruguay)',
            'equipo_id'=> '3'
        ]);
    }
}
