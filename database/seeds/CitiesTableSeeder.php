<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
      /**
       * Ejecutar seed.
       * 
       * @return void
       */
      public function run()
      {
            DB::table('cities')->insert([
                  // Chaco
                  ['state_id' => 1, 'name' => 'Aviá Teraí'],
                  ['state_id' => 1, 'name' => 'Barranqueras'],
                  ['state_id' => 1, 'name' => 'Campo Largo'],
                  ['state_id' => 1, 'name' => 'Charadai'],
                  ['state_id' => 1, 'name' => 'Charata'],
                  ['state_id' => 1, 'name' => 'Colonia Elisa'],
                  ['state_id' => 1, 'name' => 'Conc. Ntra Sra del Bermejo'],
                  ['state_id' => 1, 'name' => 'Concepción del Bermejo'],
                  ['state_id' => 1, 'name' => 'Coronel Du Graty'],
                  ['state_id' => 1, 'name' => 'Corzuela'],
                  ['state_id' => 1, 'name' => 'Cote Lai'],
                  ['state_id' => 1, 'name' => 'Fontana'],
                  ['state_id' => 1, 'name' => 'Gancedo'],
                  ['state_id' => 1, 'name' => 'General Pinedo'],
                  ['state_id' => 1, 'name' => 'General Vedia'],
                  ['state_id' => 1, 'name' => 'Gral San Martin'],
                  ['state_id' => 1, 'name' => 'Hermoso Campo'],
                  ['state_id' => 1, 'name' => 'Isla del Cerrito'],
                  ['state_id' => 1, 'name' => 'Juan José Castelli'],
                  ['state_id' => 1, 'name' => 'La Escondida'],
                  ['state_id' => 1, 'name' => 'La Leonesa'],
                  ['state_id' => 1, 'name' => 'La Sabana'],
                  ['state_id' => 1, 'name' => 'La Verde'],
                  ['state_id' => 1, 'name' => 'Las Breñas'],
                  ['state_id' => 1, 'name' => 'Las Palmas'],
                  ['state_id' => 1, 'name' => 'Los Frentones'],
                  ['state_id' => 1, 'name' => 'Machagai'],
                  ['state_id' => 1, 'name' => 'Makallé'],
                  ['state_id' => 1, 'name' => 'Margarita Belén'],
                  ['state_id' => 1, 'name' => 'Miraflores'],
                  ['state_id' => 1, 'name' => 'Presidencia Roque Sáenz Peña'],
                  ['state_id' => 1, 'name' => 'Pampa del Indio'],
                  ['state_id' => 1, 'name' => 'Pampa del Infierno'],
                  ['state_id' => 1, 'name' => 'Presidencia de la Plaza'],
                  ['state_id' => 1, 'name' => 'Presidencia Roca'],
                  ['state_id' => 1, 'name' => 'Puerto Bermejo'],
                  ['state_id' => 1, 'name' => 'Puerto Eva Perón'],
                  ['state_id' => 1, 'name' => 'Puerto Tirol'],
                  ['state_id' => 1, 'name' => 'Puerto Vilelas'],
                  ['state_id' => 1, 'name' => 'Quitilipi'],
                  ['state_id' => 1, 'name' => 'Resistencia'],
                  ['state_id' => 1, 'name' => 'San Bernardo'],
                  ['state_id' => 1, 'name' => 'Santa Sylvina'],
                  ['state_id' => 1, 'name' => 'Taco Pozo'],
                  ['state_id' => 1, 'name' => 'Tres Isletas'],
                  ['state_id' => 1, 'name' => 'Villa Angela'],
                  ['state_id' => 1, 'name' => 'Villa Berthet'],
                  // Corrientes
                  ['state_id' => 2, 'name' => 'Alvear'],
                  ['state_id' => 2, 'name' => 'Bella Vista'],
                  ['state_id' => 2, 'name' => 'Berón de Astrada'],
                  ['state_id' => 2, 'name' => 'Caá Catí'],
                  ['state_id' => 2, 'name' => 'Colonia Libertad'],
                  ['state_id' => 2, 'name' => "Colonia Liebig's"],
                  ['state_id' => 2, 'name' => 'Colonia Santa Rosa'],
                  ['state_id' => 2, 'name' => 'Concepción'],
                  ['state_id' => 2, 'name' => 'Corrientes'],
                  ['state_id' => 2, 'name' => 'Curuzu Cuatia'],
                  ['state_id' => 2, 'name' => 'Empedrado'],
                  ['state_id' => 2, 'name' => 'Esquina'],
                  ['state_id' => 2, 'name' => 'Estación Libertad'],
                  ['state_id' => 2, 'name' => 'Gobernador Virasoro'],
                  ['state_id' => 2, 'name' => 'Goya'],
                  ['state_id' => 2, 'name' => 'Itá Ibaté'],
                  ['state_id' => 2, 'name' => 'Itatí'],
                  ['state_id' => 2, 'name' => 'Ituzaingó'],
                  ['state_id' => 2, 'name' => 'Juan Pujol'],
                  ['state_id' => 2, 'name' => 'La Cruz'],
                  ['state_id' => 2, 'name' => 'Lavalle'],
                  ['state_id' => 2, 'name' => 'Mburucuyá'],
                  ['state_id' => 2, 'name' => 'Mercedes'],
                  ['state_id' => 2, 'name' => 'Mocoretá'],
                  ['state_id' => 2, 'name' => 'Monte Caseros'],
                  ['state_id' => 2, 'name' => 'Palmar Grande'],
                  ['state_id' => 2, 'name' => 'Parada Acuña'],
                  ['state_id' => 2, 'name' => 'Parada Pucheta'],
                  ['state_id' => 2, 'name' => 'Paso de la Patria'],
                  ['state_id' => 2, 'name' => 'Paso de los libres'],
                  ['state_id' => 2, 'name' => 'Perugorría'],
                  ['state_id' => 2, 'name' => 'Saladas'],
                  ['state_id' => 2, 'name' => 'San Cosme'],
                  ['state_id' => 2, 'name' => 'San Lorenzo'],
                  ['state_id' => 2, 'name' => 'San Luis del Palmar'],
                  ['state_id' => 2, 'name' => 'San Miguel'],
                  ['state_id' => 2, 'name' => 'San Roque'],
                  ['state_id' => 2, 'name' => 'Santa Ana de los Guácaras'],
                  ['state_id' => 2, 'name' => 'Santa Lucía'],
                  ['state_id' => 2, 'name' => 'Santo Tomé'],
                  ['state_id' => 2, 'name' => 'Sauce'],
                  ['state_id' => 2, 'name' => 'Tapebicuá'],
                  ['state_id' => 2, 'name' => 'Yahapé'],
                  ['state_id' => 2, 'name' => 'Yapeyú'],
                  // Entre Rios
                  ['state_id' => 3, 'name' => 'Aldea Asunción'],
                  ['state_id' => 3, 'name' => 'Aldea San Antonio'],
                  ['state_id' => 3, 'name' => 'Aldea San Juan'],
                  ['state_id' => 3, 'name' => 'Antelo'],
                  ['state_id' => 3, 'name' => 'Arroyo Barú'],
                  ['state_id' => 3, 'name' => 'Basavilbaso'],
                  ['state_id' => 3, 'name' => 'Betbeder'],
                  ['state_id' => 3, 'name' => 'Bovril'],
                  ['state_id' => 3, 'name' => 'Brazo Largo'],
                  ['state_id' => 3, 'name' => 'Caseros'],
                  ['state_id' => 3, 'name' => 'Ceibas'],
                  ['state_id' => 3, 'name' => 'Cerrito'],
                  ['state_id' => 3, 'name' => 'Chajarí'],
                  ['state_id' => 3, 'name' => 'Colón'],
                  ['state_id' => 3, 'name' => 'Concepción del Uruguay'],
                  ['state_id' => 3, 'name' => 'Concordia'],
                  ['state_id' => 3, 'name' => 'Crespo'],
                  ['state_id' => 3, 'name' => 'Diamante'],
                  ['state_id' => 3, 'name' => 'El Pingo'],
                  ['state_id' => 3, 'name' => 'Federación'],
                  ['state_id' => 3, 'name' => 'Federal'],
                  ['state_id' => 3, 'name' => 'General Campos'],
                  ['state_id' => 3, 'name' => 'General Galarza'],
                  ['state_id' => 3, 'name' => 'General Ramírez'],
                  ['state_id' => 3, 'name' => 'Gualeguay'],
                  ['state_id' => 3, 'name' => 'Gualeguaychú'],
                  ['state_id' => 3, 'name' => 'Hasenkamp (Argentina)'],
                  ['state_id' => 3, 'name' => 'Hernandarias'],
                  ['state_id' => 3, 'name' => 'La Paz'],
                  ['state_id' => 3, 'name' => 'Larroque'],
                  ['state_id' => 3, 'name' => 'Libertador San Martín'],
                  ['state_id' => 3, 'name' => 'Lucas González'],
                  ['state_id' => 3, 'name' => 'Maciá'],
                  ['state_id' => 3, 'name' => 'María Grande'],
                  ['state_id' => 3, 'name' => 'Nogoya'],
                  ['state_id' => 3, 'name' => 'Oro Verde'],
                  ['state_id' => 3, 'name' => 'Paraná'],
                  ['state_id' => 3, 'name' => 'Paso de La Arena'],
                  ['state_id' => 3, 'name' => 'Primero de Mayo'],
                  ['state_id' => 3, 'name' => 'Pronunciamiento'],
                  ['state_id' => 3, 'name' => 'Puerto Ibicuy'],
                  ['state_id' => 3, 'name' => 'Rosario del Tala'],
                  ['state_id' => 3, 'name' => 'San Benito'],
                  ['state_id' => 3, 'name' => 'San José'],
                  ['state_id' => 3, 'name' => 'San José de Feliciano'],
                  ['state_id' => 3, 'name' => 'San Justo'],
                  ['state_id' => 3, 'name' => 'San Salvador'],
                  ['state_id' => 3, 'name' => 'Santa Elena'],
                  ['state_id' => 3, 'name' => 'Strobel'],
                  ['state_id' => 3, 'name' => 'Urdinarrain'],
                  ['state_id' => 3, 'name' => 'Viale'],
                  ['state_id' => 3, 'name' => 'Victoria'],
                  ['state_id' => 3, 'name' => 'Villa Elisa'],
                  ['state_id' => 3, 'name' => 'Villa Paranacito'],
                  ['state_id' => 3, 'name' => 'Villaguay'],
                  ['state_id' => 3, 'name' => 'Walter Moss'],
                  // Formosa
                  ['state_id' => 4, 'name' => 'Clorinda'],
                  ['state_id' => 4, 'name' => 'Comandante Fontana'],
                  ['state_id' => 4, 'name' => 'El Colorado'],
                  ['state_id' => 4, 'name' => 'El Espinillo'],
                  ['state_id' => 4, 'name' => 'Estanislao del Campo'],
                  ['state_id' => 4, 'name' => 'Formosa'],
                  ['state_id' => 4, 'name' => 'General Mosconi'],
                  ['state_id' => 4, 'name' => 'Gral Manuel Belgrano'],
                  ['state_id' => 4, 'name' => 'Herradura'],
                  ['state_id' => 4, 'name' => 'Ibarreta'],
                  ['state_id' => 4, 'name' => 'Ingeniero Juárez'],
                  ['state_id' => 4, 'name' => 'Laguna Blanca'],
                  ['state_id' => 4, 'name' => 'Laguna Yema'],
                  ['state_id' => 4, 'name' => 'Las Lomitas'],
                  ['state_id' => 4, 'name' => 'Mayor Vicente Villafañe'],
                  ['state_id' => 4, 'name' => 'Palo Santo'],
                  ['state_id' => 4, 'name' => 'Pirane'],
                  ['state_id' => 4, 'name' => 'Pozo del Tigre'],
                  ['state_id' => 4, 'name' => 'Riacho He-Hé'],
                  ['state_id' => 4, 'name' => 'San Francisco de Laishi'],
                  ['state_id' => 4, 'name' => 'San Martín 2'],
                  ['state_id' => 4, 'name' => 'Villa Dos Trece'],
                  ['state_id' => 4, 'name' => 'Villa General Güemes'],
                  // Misiones
                  ['state_id' => 5, 'name' => '2 de Mayo'],
                  ['state_id' => 5, 'name' => '25 de Mayo'],
                  ['state_id' => 5, 'name' => '9 de Julio'],
                  ['state_id' => 5, 'name' => 'Alba Posse'],
                  ['state_id' => 5, 'name' => 'Almafuerte'],
                  ['state_id' => 5, 'name' => 'Apostoles'],
                  ['state_id' => 5, 'name' => 'Aristóbulo del Valle'],
                  ['state_id' => 5, 'name' => 'Arroyo del Medio'],
                  ['state_id' => 5, 'name' => 'Azara'],
                  ['state_id' => 5, 'name' => 'Bernardo de Irigoyen'],
                  ['state_id' => 5, 'name' => 'Bonpland'],
                  ['state_id' => 5, 'name' => 'Caá Yarí'],
                  ['state_id' => 5, 'name' => 'Campo Grande'],
                  ['state_id' => 5, 'name' => 'Campo Ramón'],
                  ['state_id' => 5, 'name' => 'Campo Viera'],
                  ['state_id' => 5, 'name' => 'Candelaria'],
                  ['state_id' => 5, 'name' => 'Capioví'],
                  ['state_id' => 5, 'name' => 'Caraguatay'],
                  ['state_id' => 5, 'name' => 'Cerro Azul'],
                  ['state_id' => 5, 'name' => 'Cerro Corá'],
                  ['state_id' => 5, 'name' => 'Colonia Alberdi'],
                  ['state_id' => 5, 'name' => 'Colonia Aurora'],
                  ['state_id' => 5, 'name' => 'Colonia Delicia'],
                  ['state_id' => 5, 'name' => 'Colonia Polana'],
                  ['state_id' => 5, 'name' => 'Colonia Victoria'],
                  ['state_id' => 5, 'name' => 'Comandante Andresito'],
                  ['state_id' => 5, 'name' => 'Concepción de la Sierra'],
                  ['state_id' => 5, 'name' => 'Corpus'],
                  ['state_id' => 5, 'name' => 'Dos Arroyos'],
                  ['state_id' => 5, 'name' => 'El Alcázar'],
                  ['state_id' => 5, 'name' => 'El Dorado'],
                  ['state_id' => 5, 'name' => 'El Soberbio'],
                  ['state_id' => 5, 'name' => 'Fachinal'],
                  ['state_id' => 5, 'name' => 'Florentino Ameghino'],
                  ['state_id' => 5, 'name' => 'Garuhapé'],
                  ['state_id' => 5, 'name' => 'Garupá'],
                  ['state_id' => 5, 'name' => 'General Alvear'],
                  ['state_id' => 5, 'name' => 'General Urquiza'],
                  ['state_id' => 5, 'name' => 'Gobernador López'],
                  ['state_id' => 5, 'name' => 'Gobernador Roca'],
                  ['state_id' => 5, 'name' => 'Guaraní'],
                  ['state_id' => 5, 'name' => 'Hipólito Yrigoyen'],
                  ['state_id' => 5, 'name' => 'Itacaruaré'],
                  ['state_id' => 5, 'name' => 'Jardín América'],
                  ['state_id' => 5, 'name' => 'Leandro N. Alem'],
                  ['state_id' => 5, 'name' => 'Loreto'],
                  ['state_id' => 5, 'name' => 'Los Helechos'],
                  ['state_id' => 5, 'name' => 'Mártires'],
                  ['state_id' => 5, 'name' => 'Mojón Grande'],
                  ['state_id' => 5, 'name' => 'Obera'],
                  ['state_id' => 5, 'name' => 'Olegario Víctor Andrade'],
                  ['state_id' => 5, 'name' => 'Panambí'],
                  ['state_id' => 5, 'name' => 'Posadas'],
                  ['state_id' => 5, 'name' => 'Profundidad'],
                  ['state_id' => 5, 'name' => 'Puerto Esperanza'],
                  ['state_id' => 5, 'name' => 'Puerto Iguazú'],
                  ['state_id' => 5, 'name' => 'Puerto Leoni'],
                  ['state_id' => 5, 'name' => 'Puerto Libertad'],
                  ['state_id' => 5, 'name' => 'Puerto Piray'],
                  ['state_id' => 5, 'name' => 'Puerto Rico'],
                  ['state_id' => 5, 'name' => 'Ruiz de Montoya'],
                  ['state_id' => 5, 'name' => 'San Antonio'],
                  ['state_id' => 5, 'name' => 'San Ignacio'],
                  ['state_id' => 5, 'name' => 'San Javier'],
                  ['state_id' => 5, 'name' => 'San José'],
                  ['state_id' => 5, 'name' => 'San Martín'],
                  ['state_id' => 5, 'name' => 'San Pedro'],
                  ['state_id' => 5, 'name' => 'San Vicente'],
                  ['state_id' => 5, 'name' => 'Santa Ana'],
                  ['state_id' => 5, 'name' => 'Santa María'],
                  ['state_id' => 5, 'name' => 'Santiago de Liniers'],
                  ['state_id' => 5, 'name' => 'Santo Pipó'],
                  ['state_id' => 5, 'name' => 'Tres Capones'],
                  ['state_id' => 5, 'name' => 'Wanda']
            ]);    
      }
}
