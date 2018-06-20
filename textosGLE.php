<?php

$nombre = '<span class="logo_first">Google, </span><span class="logo_second">luego existo</span>';
// $nombre_colors = '<span class="g-az">G</span><span class="g-ro">o</span><span class="g-am">o</span><span class="g-az">g</span><span class="g-ve">l</span><span class="g-ro">e</span>, <span class="logo_second">luego existo</span>';
$nombre_plano = 'Google, luego existo';

$descripcion = get_bloginfo('description', 'display');

$contacto = 'Contacto';
$ult_entradas = 'Últimas entradas';

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

$getInTouch = 'Contacto';
$getInTouch_text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

$escribenos = '¡Escríbenos aquí!';

$send = 'Enviar';

$proyectos_title = 'Proyectos';
$proyectos_text = 'Hemos decorado el escaparate digital de todas estas empresas:';

$proyectos = [
  [
    'titulo' => 'Afactys',
    'modal_id' => 'afactys',
    'active' => 1,
    'img' => 'afactys.jpg',
    'descr' => '<p>Afactys es una red social para profesionales del arte, especialmente del mundo dramático, para que pudieran promocionar su porfolio y entablar relaciones sociales y de trabajo con artistas y mánagers. La compañía empezó como un proyecto entre amigos, una idea de pequeña envergadura que creció y creció y que acabó consiguiendo <b>financiación del Ministerio de Cultura para promover el trabajo de los actores.</b></p>
      <p>(Andreu): Cuando ahora me frustro intentando hacer cosas nuevas, me acuerdo de que cuando empecé con Afactys no sabía nada y tenía que consultar la documentación hasta para mandar un formulario. Era frustrante, pero también muy satisfactorio. Programé todo Afactys, desde la validación de los correos hasta la estructura de la base de datos, y por eso le tengo un cariño especial.</p>',
    'url' => 'https://afactys.com'
  ],[
    'titulo' => 'WriterMuse',
    'modal_id' => 'writermuse',
    'active' => 0,
    'img' => 'writermuse.jpg',
    'descr' => '<p>WriterMuse es una plataforma para escritores noveles donde encontrar todo tipo de recursos de escritura y creatividad, y donde Marta ofrece sus servicios como correctora y asesora literaria.</p>
    <p>WriterMuse es un centro de recursos, un blog y una página profesional, pero tiene una peculiaridad que lo hace único. Entre los dos creamos <b>un complejo sistema de emailing para ayudar a cada visitante con su problema específico</b>, porque cada persona es un mundo, pero cada escritor es todo un universo.</p>
    <p>(Marta): Este es mi proyecto personal, algo en lo que creo a pies juntillas: la creatividad es para todos y la escritura puede volver a ser un placer, con las herramientas adecuadas.</p>',
    'url' => 'https://writermuse.es'
  ],[
    'titulo' => 'Cuentónomo',
    'modal_id' => 'cuentonomo',
    'active' => 0,
    'img' => 'cuentonomo.png',
    'descr' => '<p>Cuentónomo es un proyecto personal que empezó como una aplicación sencilla para contar los ingresos y los gastos que teníamos como autónomos y calcular automáticamente los desgraves y lo que había que ingresar de IVA cada trimestre. </p>
    <p>(Andreu): Algunos amigos que la vieron me dijeron que estaba muy bien y que por qué no la ofrecía al público, así que la adapté para que empleara una base de datos e hice los cambios necesarios para que pudieran trabajar en ella múltiples usuarios.</p>
    <p>Cada día se nos ocurren cosas nuevas que Cuentónomo podría incluir para hacernos la vida más fácil. A eso nos dedicamos los programadores, al fin y al cabo, y siempre que algún compañero viene con una nueva idea trato de encontrar tiempo para implantarla.</p>
    <p><b>Aunque es una app súper útil, sin duda el consenso es que el logo es lo mejor de la aplicación.</b></p>',
    'url' => 'https://cuentonomo.com'
  ],[
    'titulo' => 'Instituto Valenciano de Terapias Naturales',
    'modal_id' => 'ivatena',
    'active' => 0,
    'img' => 'ivatena.jpg',
    'descr' => '<p>El Instituto Valenciano de Terapias Naturales contaba con una página web desde hacía años, pero sabía que no le estaba sacando el máximo provecho. Por otro lado, aunque publicaba semanalmente, su equipo de redactores trabajaba sin una guía de estilo ni una <b>estrategia de contenidos definida que les ayudara a orientar las publicaciones a una venta concreta.</b></p>
    <p>Contactaron con nosotros para que revisáramos juntos la web, para detectar dónde podría mejorar y adecuarse mejor a sus necesidades actuales: limpiamos los menús para facilitar la navegación, añadimos secciones bajo cada formación para que el lector no tuviera que rastrear la información y enfatizamos los beneficios para que el cliente potencial quisiera acceder a sus servicios. Hoy son el centro más importante de Valencia en formación de terapias naturales, con más de 40 profesionales trabajando con ellos.</p>',
    'url' => 'http://www.institutovalencianodeterapiasnaturales.com/'
  ],[
    'titulo' => 'Taxo Valoración',
    'modal_id' => 'taxo',
    'active' => 0,
    'img' => 'taxo.png',
    'descr' => '<p>Taxo Valoración necesitaba <b>renovarse y cambiar las aplicaciones viejas de gestión por unas nuevas y más efectivas</b>, no solo para la empresa sino también para los clientes externos, pero hasta que presentamos las nuevas apps transcurrió un periodo oscuro en que el trabajo de programación consistió sobre todo en deshacer marañas de código y solucionar líos.</p>
    <p>Taxo es ahora uno de nuestros principales clientes, y actualmente gestionamos dos proyectos con ellos con nombre en código molón: Delfos y Ulises. Delfos es una aplicación web de gestión interna desde la cual los encargados de personal llevan a cabo búsquedas de tasadores y consultas de documentos. Y Ulises… es todavía secreto, pero está pensado para ser un programa tan inteligente como su epónimo mitológico.</p>',
    'url' => 'https://taxo.es'
  ],[
    'titulo' => 'The Body Massamagrell',
    'modal_id' => 'the_body_massamagrell',
    'active' => 0,
    'img' => 'thebody_m.jpg',
    'descr' => '<p>The Body Massamagrell es un centro de entrenamiento con electroestimulación, una modalidad que incorpora aparatos de EMS para simular un ejercicio mucho más intenso en solo 20 minutos. María quería que su público objetivo la encontrara y que conocieran lo que es la electroestimulación, y para ello iniciamos una campaña de publicidad en redes.</p>
    <p>Para lograrlo, empezamos a crear contenido útil, viral y que reflejara sus valores: salud, deporte y bienestar en una época en que el tiempo es escaso y preciado, y también sorteos y promociones que dieran a conocer su centro a miles de personas que nunca habían pasado por delante.</p>
    <p>Hoy María ha renovado su cartera de clientes, y los fieles hablan de ella en redes y en la calle. Desde Facebook ha conseguido conquistar su pueblo y hacer que pruebe la electroestimulación hasta la señora Puri de la panadería: es nuestro ejemplo preferido de que <b>todo el mundo puede utilizar internet para hacer crecer su negocio, hasta un negocio unipersonal como el de María.</b></p>',
    'url' => 'https://www.facebook.com/bodymassamagrell'
  ],[
    'titulo' => 'TAGDisruptor',
    'modal_id' => 'tagdisruptor',
    'active' => 0,
    'img' => 'tagdisruptor.jpg',
    'descr' => '<p>TAGDisruptor es una empresa valenciana de estética con un sistema innovador para la reducción de grasa localizada. Pero innovador de verdad, ¿eh? Te lo aplicas tú mismo en 5 min.</p>
    <p>José Luís y Alfredo tenían un producto rompedor, pero no sabían cómo moverlo online para darse a conocer. Tenían algo muy guay pero ningún tipo de publicidad, contenido o testimonio que creara autoridad y confianza en el usuario.</p>
    <p>Empezamos una <b>campaña de marketing con influencers y a crear contenido para sus redes sociales</b>, y ahora han conseguido expandirse hasta contar con más de 40 franquiciados y 6 distribuciones en el extranjero. El mérito de la idea es todo suyo, pero el de la imagen online es nuestro (y no tenemos abuela).</p>',
    'url' => 'https://tagdisruptor.com'
  ]
];

$quienes_somos = 'Nosotros';
$quienes_somos_text = 'Escritora y programador. Desarrollador web y copywriter. Palabras y código.<br> Los opuestos se atraen y se complementan para montar tu escaparate online soñado.';

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
    'funcion' => 'Full Stack Developer',
    'descr' => 'A Andreu le encanta solucionar problemas y dar con la manera óptima y exacta de hacer algo, y no deja en paz una página web hasta que todos los recursos han sido optimizados al máximo (lo cual a veces desespera a Marta). Típico cerebro de hemisferio izquierdo dominante, lógico y racional... hasta que lo conoces. Bailongo, culo inquieto y apasionado de la música electrónica, querría tener su propio huerto urbano pero se le mueren hasta los tomates cherry.',
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
      ]
      // ,[
      //   'icon' => 'fab fa-twitter',
      //   'url' => 'https://twitter.com/andreu55'
      // ],[
      //   'icon' => 'fab fa-facebook-f',
      //   'url' => 'https://www.facebook.com/anduwet'
      // ]
    ]
  ]
];

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
