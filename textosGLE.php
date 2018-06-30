<?php

$nombre = '<span class="logo_first">Google, </span><span class="logo_second">luego existo</span>';
// $nombre_colors = '<span class="g-az">G</span><span class="g-ro">o</span><span class="g-am">o</span><span class="g-az">g</span><span class="g-ve">l</span><span class="g-ro">e</span>, <span class="logo_second">luego existo</span>';
$nombre_plano = 'Google, luego existo';

$descripcion = get_bloginfo('description', 'display');

$contacto = 'Contacto';
$ult_entradas = 'Últimos artículos';
$ult_entradas_text = 'Nuestro contenido, de periodicidad tan indefinida como la posición-velocidad de un electrón:';

$centrado_title = 'El blog personal ha vuelto.';
$centrado_text = '<p>Escribimos y hacemos fotos porque sí, como en los albores de Internet.</p>
<p>Artículos de opinión para cuando no podemos resistirnos a darla y fotografía<br> de lo cotidiano y lo extraordinario, que a menudo es lo mismo.</p>';

$second_title = 'Aquí, en GLE...';

$que_hacemos = '1. No somos sociales.';
$que_hacemos_text = '<p></p>
<p>No estamos en redes porque ya tenemos bastante con la vida real. Eso no significa que no nos guste hablar:</p>
<p>
  ¡escríbenos en el formulario o déjanos un comentario!
</p>
<p>
  Lo leemos y respondemos todo, hasta el spam.
</p>';

$que_hacemos2 = '2. Nos da igual el SEO.';
$que_hacemos_text2 = '
<p>
  No es que no queramos que nos encuentre Google, es que no vamos a escribir en función de las palabras clave de moda ahora.
</p>
<p>
  Hacemos fotos y hablamos de lo que nos apetece en cada momento.
</p>';

$que_hacemos3 = '3. No buscamos embajadores, clientes o prosélitos.';
$que_hacemos_text3 = '<p>Nos gusta gustarte, como a todo el mundo, pero no vamos a tratar de hacerte suscriptor, perseguirte con cadenas de emails automatizadas ni tratar de venderte nada.</p>';

$escribenos = '¡Escríbenos aquí!';

$send = 'Enviar';

$slides_title = '¿De qué va esto?';
// $slides_text = 'Hemos decorado el escaparate digital de todas estas empresas:';

$slides = [
  [
    'titulo' => 'Artículos de opinión',
    'id' => 'slide_opinion',
    'active' => 1,
    'img' => 'opinion.jpeg',
    'descr' => '<p>Escribimos sobre todo tipo de temas: marketing, programación, videojuegos, redes sociales, literatura, sociedad, tecnología, gatos... </p>
      <p>Marta tiene un negocio online orientado a la creatividad y la lectura crítica para escritores, WriterMuse, además de trabajar como copywriter y asesora de marketing para el Instituto Valenciano de Terapias Naturales. Con estos dos proyectos no tiene bastante: necesita un espacio donde poder desahogarse sobre estos temas que no la dejan dormir, como la manera de vengarse del periquito que la despierta a las tres de la mañana.</p>
      <p>Este no es un blog que busca responder a las preguntas de los lectores y convertirse en una autoridad de su nicho. Aquí se habla de lo que sea, como en la sobremesa en casa de tus tíos (a veces también con un chupito de mistela, o lo que se beba en tu región).</p>',
    'url' => ''
  ],[
    'titulo' => 'Fotografía',
    'id' => 'slide_fotografia',
    'active' => 0,
    'img' => 'fotografia.jpeg',
    'descr' => '<p>Para Andreu, la fotografía es el arte de transmitir la esencia de los momentos y las situaciones a través de  una imagen.</p>
    <p>Para Marta es una excusa para moverse un poco y entrar en lugares que están normalmente vedados.</p>
    <p>Todas las fotografías que subimos en nuestros artículos están registradas bajo la licencia Creative Commons*: puedes utilizarlas con cualquier fin en tus proyectos. Nos gusta que lo que hacemos solo para nosotros también pueda servir a los demás. </p>',
    'url' => ''
  ]
  // ,[
  //   'titulo' => 'Nosotros',
  //   'id' => 'slide_2',
  //   'active' => 0,
  //   'img' => 'writermuse.jpg',
  //   'descr' => '<p>De vez en cuando puede que entremos en terreno personal, pero no te vamos a contar nuestros viajes ni los inventos que hacemos en la cocina porque nuestro yo digital es una cosa y nosotros como personas, otra. Si te pasas por Valencia y quieres un café, nos conoceremos de verdad.</p>',
  //   'url' => 'https://writermuse.es'
  // ]
];

$fullancho = 'Fotografía';
$fullancho_text = 'Hacemos fotos para nosotros, pero nos encanta compartirlas, te dejamos usar nuestras fotos hasta para empapelar las paredes de tu casa y no hace falta que nos cites a cada invitado que tengas.';

$quienes_somos = 'Nosotros';
$quienes_somos_text = 'De vez en cuando puede que entremos en terreno personal, pero no te vamos a contar nuestros viajes<br> ni los inventos que hacemos en la cocina porque nuestro yo digital es una cosa y nosotros como personas, otra.<br>Si te pasas por Valencia y quieres un café, nos conoceremos de verdad.';
// Escritora y programador. Desarrollador web y copywriter. Palabras y código.<br> Los opuestos se atraen y se complementan para montar tu escaparate online soñado.

// Quienes somos
$nosotros = [
  [
    'id' => 'foto-marta',
    'nombre' => 'Marta Tornero',
    'img' => 'marta.png',
    'img-mobile' => 'marta-arriba.png',
    'alt' => 'Marta Tornero',
    'funcion' => 'Copywriter & Community Manager',
    'descr' => 'A Marta le pirra todo lo que tenga que ver con escribir. Escribe ficción, escribe artículos, escribe textos para la web y redes sociales y escribe en su diario (pero no todos los días porque ya le parece demasiado). Cuando ya no puede más, se pone a leer. Pero no es tan obsesiva como puede parecerte: también baila (con Andreu, mejor que mejor), da paseos (durante los cuales piensa en escribir) y se devana los sesos con películas sobre paradojas temporales.',
    'botonacos' => [
      [
        'texto' => 'Visitar <b>mtornero.com</b>',
        'url' => 'https://mtornero.com'
      ],[
        'texto' => 'Visitar <b>writermuse.es</b>',
        'url' => 'https://writermuse.es'
      ]
    ],
    'social' => [
      [
        'icon' => 'fab fa-linkedin-in',
        'url' => 'https://www.linkedin.com/in/marta-tornero-rubio'
      ],[
        'icon' => 'fab fa-twitter',
        'url' => 'https://twitter.com/MartaWriterMuse'
      ],[
        'icon' => 'fab fa-facebook-f',
        'url' => 'https://www.facebook.com/mtornerorubio'
      ]
    ]
  ],[
    'id' => 'foto-andreu',
    'nombre' => 'Andreu García',
    'img' => 'andreu.png',
    'img-mobile' => 'andreu-abajo.png',
    'alt' => 'Andreu Garcia',
    'funcion' => 'Full Stack Developer & Fotógrafo',
    'descr' => 'A Andreu le encanta solucionar problemas y dar con la manera óptima y exacta de hacer algo, y no deja en paz una página web hasta que todos los recursos han sido optimizados al máximo (lo cual a veces desespera a Marta). Típico cerebro de hemisferio izquierdo dominante, lógico y racional... hasta que lo conoces. Bailongo, culo inquieto y apasionado de la fotografía, querría tener su propio huerto urbano pero se le mueren hasta los tomates cherry.',
    'botonacos' => [
      [
        'texto' => 'Visitar <b>andreugarcia.com</b>',
        'url' => 'https://andreugarcia.com'
      ]
    ],
    'social' => [
      [
        'icon' => 'fab fa-linkedin-in',
        'url' => 'https://www.linkedin.com/in/andreugarcia-com'
      ],[
        'icon' => 'fab fa-paypal',
        'url' => 'https://www.paypal.me/anduwet/0.85'
      ]
      // ,[
      //   'icon' => 'fab fa-facebook-f',
      //   'url' => 'https://www.facebook.com/anduwet'
      // ]
    ]
  ]
];

$subscribe = 'Suscribirse';
$subscribe_text = 'Si quieres seguirnos en nuestras variopintas aventuras, suscríbete y recibirás, en exclusiva y solo para ti,<br> totalmente gratis, sin gato encerrado, un email de vez en cuando avisándote de que hay una nueva publicación. <br>Eso es todo.';

// $getInTouch = 'Contacto';
// $getInTouch_text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

$testimonios = [
  [
    'nombre' => 'Aroa Fernández',
    'modal_id' => 'slider_1',
    'active' => 1,
    'img' => 'testimonio_aroa_250.png',
    'descr' => 'Marta es una profesional excelente, tanto por su dedicación a los proyectos en los que se embarca, como en eficacia y rapidez. El trabajo de edición que ha realizado para nuestra empresa ha sido más de lo que nosotros teníamos pensado y nos ha ayudado a replantear algunos aspectos de nuestra web y nos ha permitido adecuarla a nuestras actuales necesidades.',
    'url' => 'aroafernandez.com'
  ],[
    'nombre' => 'Isabel Llano',
    'modal_id' => 'slider_2',
    'active' => 0,
    'img' => 'testimonio_isa_250.png',
    'descr' => 'A veces desconocemos el valor de algunas profesiones. Con el afán de estar al día y aunar criterios contactamos con Marta Tornero para que nos hiciera una revisión de los textos, sobre los que aportó otra mirada y trabajó de manera exhaustiva. Gracias a ella me di cuenta de todo lo que podíamos mejorar y he aprendido a valorar esa otra visión: la que aporta un profesional.',
    'url' => 'http://www.institutovalencianodeterapiasnaturales.com/'
  ]
];
