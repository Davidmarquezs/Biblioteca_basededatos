<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Libro;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
			'name'     => 'administrador',
			'email'    => 'Admin.vintage@gmail.com',
			'password' => bcrypt('admin123')
        ]);
        
        DB::table('libros')->insert([
			'codigo'   => 'LIB-01',
			'nombre'   => 'Ingles 1',
			//'categoria'=> 'poesia',
			'resenia'  => 'La Divina comedia (en italiano moderno: Divina Commedia, en toscano: Divina Comedìa) es un poema escrito por Dante Alighieri. Se desconoce la fecha exacta en que fue redactado aunque las opiniones más reconocidas aseguran que el Infierno pudo ser compuesto entre 1304 y 1308, el Purgatorio de 1307 a 1314 y, por último, el Paraíso de 1313 a 1321, fecha del fallecimiento del poeta. Se considera por tanto que la redacción de la primera parte habría sido alternada con la redacción del Convivium y De vulgari eloquentia, mientras que De monarchia pertenecería a la época de la segunda o tercera etapa, a la última de las cuales hay que atribuir sin duda la de dos obras de menor empeño: la Cuestión de agua y La Tierra y las dos églogas escritas en respuesta a sendos poemas de Giovanni de Regina. Es la creación más importante de su autor y una de las obras fundamentales de la transición del pensamiento medieval (teocentrista) al renacentista (antropocentrista). Es considerada la obra maestra de la literatura italiana y una de las cumbres de la literatura universal.',
			'isbn'     => '1059862350',
			'cantidad' => '15',
			'precio'   => '28',
			'imagen'   => 'ingles1.jpg'
        ]);

      /*  DB::table('libros')->insert([
			'codigo'   => 'LIB-02',
			'nombre'   => 'Moby Dick',
			//'categoria'=> 'fantasia',
			'resenia'  => 'Moby Dickn es una novela del escritor Herman Melville publicada en 1851. Narra la travesía del barco ballenero Pequod, comandado por el capitán Ahab, junto a Ismael y el arponero Queequog en la obsesiva y autodestructiva persecución de un gran cachalote blanco. Al margen de la persecución y evolución de sus personajes, el tema de la novela es eminentemente enciclopédico al incluir detalladas y extensas descripciones de la caza de las ballenas en el siglo XIX y multitud de otros detalles sobre la vida marinera de la época. Quizá por ello la novela no tuvo ningún éxito comercial en su primera publicación, aunque con posterioridad haya servido para cimentar la reputación del autor y situarlo entre los mejores escritores estadounidenses.',
			'isbn'     => '2059462360',
			'cantidad' => '18',
			'precio'   => '25',
			'imagen'   => 'moby.jpg'
        ]);

        DB::table('libros')->insert([
			'codigo'   => 'LIB-03',
			'nombre'   => 'Diez Negritos',
			//'categoria'=> 'policial',
			'resenia'  => 'Diez negritos, también conocida como Y no quedó ninguno (titulada originalmente como Ten Little Niggers y modificada posteriormente por las connotaciones peyorativas de la palabra nigger en lengua inglesa), es una novela policíaca de la escritora británica Agatha Christie, publicada originalmente en Reino Unido por Collins Crime Club el 6 de noviembre de 1939. El título, que hace referencia a una canción infantil,5​6​ se cambió por And Then There Were None en la primera edición de Estados Unidos, y el título de la canción de la novela, por Ten Little Indians (Diez indiecitos)',
			'isbn'     => '3052689700',
			'cantidad' => '22',
			'precio'   => '18',
			'imagen'   => 'diez.jpg'
        ]);

        DB::table('libros')->insert([
			'codigo'   => 'LIB-04',
			'nombre'   => 'Canaima',
			//'categoria'=> 'aventura',
			'resenia'  => 'Canaima es una novela de aventura y drama, escrita por Rómulo Gallegos, publicada en 1935, ambientada en la región con el mismo nombre al sur de Venezuela en el estado Bolívar, en especial en la zona de explotación de las minas de oro de El Callao, en ese entonces zona selvática. En esta obra, la selva del Orinoco es el gran personaje y el motivo que impulsa todas las acciones de sus personajes. La lucha despiadada contra la naturaleza, el terror del caciquismo y el ansia de riquezas, dominio y poder, constituyen el tema principal de esta novela.',
			'isbn'     => '9850060302',
			'cantidad' => '22',
			'precio'   => '15',
			'imagen'   => 'canaima.jpg'
        ]);

        DB::table('libros')->insert([
			'codigo'   => 'LIB-05',
			'nombre'   => 'La Metamorfosis',
			//'categoria'=> 'fantasia',
			'resenia'  => 'La metamorfosis o La transformación (Die Verwandlung, en su título original en alemán) es una novela corta escrita por Franz Kafka en 1915. La historia trata sobre Gregorio Samsa, cuya repentina transformación en un enorme insecto dificulta cada vez más la comunicación de su entorno social con él, hasta que es considerado intolerable por su familia y finalmente perece.Con un volumen de unas 70 páginas impresas, es el más largo de los relatos que Kafka terminó y publicó durante su vida. El texto se publicó por primera vez en 1915 en el número de octubre de la revista Die Weißen Blätter bajo la dirección de René Schickele.',
			'isbn'     => '1803065088',
			'cantidad' => '22',
			'precio'   => '15',
			'imagen'   => 'metamorfosis.jpg'
        ]);

        DB::table('libros')->insert([
			'codigo'   => 'LIB-06',
			'nombre'   => 'Don Quijote de la Mancha',
			//'categoria'=> 'aventura',
			'resenia'  => 'Don Quijote de la Mancha es una novela escrita por el español Miguel de Cervantes Saavedra. Publicada su primera parte con el título de El ingenioso hidalgo don Quijote de la Mancha a comienzos de 1605, es la obra más destacada de la literatura española y una de las principales de la literatura universal, además de ser la más leída después de la Biblia. En 1615 apareció su continuación con el título de Segunda parte del ingenioso caballero don Quijote de la Mancha. El Quijote de 1605 se publicó dividido en cuatro partes; pero al aparecer el Quijote de 1615 en calidad de Segunda parte de la obra, quedó revocada de hecho la partición en cuatro secciones del volumen publicado diez años antes por Cervantes.',
			'isbn'     => '5505206780',
			'cantidad' => '12',
			'precio'   => '35',
			'imagen'   => 'quijote.jpeg'
        ]);

        DB::table('libros')->insert([
			'codigo'   => 'LIB-07',
			'nombre'   => 'Decameron',
			//'categoria'=> 'fantasia',
			'resenia'  => 'El Decamerón (Decameron o Decamerone, en italiano), subtitulado Príncipe Galeoto (Prencipe Galeotto en italiano antiguo), es un libro constituido por cien cuentos, algunos de ellos novelas cortas, escritos por Giovanni Boccaccio entre 1351 y 1353. Desarrolla tres temas principales: el amor, la inteligencia humana y la fortuna. Los diversos cuentos de amor en el Decamerón van de lo erótico a lo trágico. Son relatos de ingenio, bromas y lecciones vitales. Para engarzar las cien historias, el libro está construido como una narración enmarcada. La obra comienza con una descripción de la peste bubónica (la epidemia de peste negra que golpeó a Florencia en 1348), lo que da motivo a que un grupo de diez jóvenes (siete mujeres y tres hombres) que huyen de la plaga, se refugien en una villa en las afueras de Florencia.',
			'isbn'     => '1230120580',
			'cantidad' => '10',
			'precio'   => '32',
			'imagen'   => 'decameron.jpg'
        ]);

        DB::table('libros')->insert([
			'codigo'   => 'LIB-08',
			'nombre'   => 'Padre Rico Padre Pobre',
			//'categoria'=> 'finanzas',
			'resenia'  => 'Padre rico y padre pobre es un libro escrito por Robert Kiyosaki y Sharon Lechter. Evoca el concepto de libertad financiera a través de la inversión, los inmuebles, ser dueño de negocios y el uso de tácticas de protección financiera. Padre Rico Padre Pobre está escrito de una forma anecdótica y está orientado a crear un interés público en las finanzas. Kiyosaki y Lechter aconsejan que ser dueño de un sistema o forma de producción, es mejor que ser un empleado asalariado. Este es un tema recurrente en los capítulos del libro',
			'isbn'     => '4502568710',
			'cantidad' => '25',
			'precio'   => '20',
			'imagen'   => 'padre.jpg'
        ]);

        DB::table('libros')->insert([
			'codigo'   => 'LIB-09',
			'nombre'   => 'Las Venas Abiertas de America',
			//'categoria'=> 'fantasia',
			'resenia'  => 'Las venas abiertas de América Latina es un libro publicado en 1971 por el escritor uruguayo Eduardo Galeano. En la obra, el autor opina de modo global sobre la historia de América Latina desde la colonización hasta la América Latina contemporánea, argumentando con crónicas y narraciones el constante saqueo de los recursos naturales de la región por parte de los imperios coloniales, entre los siglos XVI y XIX, y los Estados imperialistas, como el Reino Unido y los Estados Unidos principalmente, desde el siglo XIX en adelante. La obra recibió mención honorífica del Premio Casa de las Américas',
			'isbn'     => '0236910508',
			'cantidad' => '8',
			'precio'   => '22',
			'imagen'   => 'venas.jpg'
        ]);

        DB::table('libros')->insert([
			'codigo'   => 'LIB-10',
			'nombre'   => '¿Quien se ha llevado mi queso?',
			//'categoria'=> 'finanzas',
			'resenia'  => '¿Quién se ha llevado mi queso? Una manera sorprendente de afrontar el cambio en el trabajo y en la vida privada, publicado en 1998, es un libro de motivación escrito por Spencer Johnson (un escritor estadounidense) en el estilo de una parábola. Describe el cambio en el trabajo y la vida, y cuatro típicas reacciones (resistirse al cambio por miedo a algo peor, aprender a adaptarse cuando se comprende que el cambio puede conducir a algo mejor, detectar pronto el cambio y finalmente apresurarse hacia la acción) al citado cambio con dos ratones, dos "liliputienses", y sus búsquedas de queso. Un superventas empresarial de New York Times desde el lanzamiento, ¿Quién se ha llevado mi queso? permaneció en la lista por casi cinco años y pasó en torno a doscientas semanas en la lista de no ficción de pasta dura de Publishers Weekly.',
			'isbn'     => '7846205062',
			'cantidad' => '30',
			'precio'   => '18',
			'imagen'   => 'queso.jpg'
        ]);*/
    }
}
