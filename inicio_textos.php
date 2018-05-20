<?php

$nombre = '<span class="logo_first">Google, </span><span class="logo_second">luego existo</span>';
$nombre_plano = 'Google, luego existo';

$descripcion = get_bloginfo('description', 'display');

$social = [
  [
    'icon' => 'fab fa-facebook-f',
    'url' => 'https://facebook.com'
  ],[
    'icon' => 'fab fa-twitter',
    'url' => 'https://twitter.com'
  ],[
    'icon' => 'fab fa-linkedin-in',
    'url' => 'https://www.linkedin.com'
  ],[
    'icon' => 'fas fa-rss',
    'url' => 'https://www.rss.com'
  ]
];

$contacto = 'Contacto';
$ult_entradas = 'Últimas entradas';

$que_hacemos = '404 Página no encontrada';
$que_hacemos_text = '<p>Si no estás aún online, ¿a qué esperas? ¡Te estás perdiendo el siglo XXI enterito!</p>
<p>Y es que da igual que tengas una tienda de perritos calientes o una editorial, lo que importa es que existas en la red.</p>
<p>
  El 89% de los consumidores utiliza su teléfono móvil en tiendas para contrastar precios y consultar las reseñas de la gente.
  Y no consulta solo los productos de la tienda, ¡compara con los de la competencia! Si no tienes página web, redes ni reseñas es lo mismo que si nadie hubiera probado tu producto o servicio nunca.
</p>
<p>
  El consumidor de hoy es inteligente y le gusta saberlo todo antes de tomar una decisión.
  Tú tienes justo lo que necesita, pero él no lo sabe. ¿Vas a perder la oportunidad de convencerlo?
</p>';

$que_hacemos2 = 'Pero «Encontrada» no basta';
$que_hacemos_text2 = '<p>Tienes que hacerte dos preguntas: «¿puede mi potencial cliente encontrarme?» y «¿se quedará si me encuentra?»</p>
<p>
  Casi todo el mundo está ya en Google, pero una gran mayoría no tiene visibilidad.
  Son muchas tiendas en una avenida muy larga.
  (Y algunas muy feas, por cierto). Si quieres que te encuentren, necesitas una estrategia, SEO y contenidos.
</p>
<p>
  Si un visitante te encuentra, tienes 2,3* segundos para convencerle de que se quede.
  En tan poco tiempo necesitas causar una buena impresión, y rápido.
  Un diseño atractivo, textos ágiles y que vayan al grano, cómo vas a ayudarle tú y solo tú, tanto como si vendes vestidos estampados como si tienes un alquiler de gatos de compañía.
</p>
<p>¿Y qué me dices de las redes? Pero no vamos a seguir extendiéndonos:<br> ya lo pillas.</p>';

$getInTouch = 'Contacto';
$getInTouch_text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

$escribenos = '¡Escríbenos aquí!';

$send = 'Enviar';

$proyectos_title = 'Proyectos';
$proyectos_text = 'Hemos decorado el escaparate digital de todas estas empresas:';

$proyectos = [
  [
    'titulo' => 'Centro Maná',
    'modal_id' => 'centro_mana',
    'active' => 1,
    'img' => 'img-06.jpg',
    'descr' => '<p>Centro Maná es un centro de psicología integrativa en Jalón, Alicante.</p>
      <p>Maite necesitaba promocionar el centro y sus actividades y atraer a nuevos clientes. También quería ofrecer un boletín a sus suscriptores con toda la información de eventos futuros y que pudieran apuntarse fácil y cómodamente a través de la web.</p>
      <p>Una web funcional y atractiva es fundamental para generar autoridad y para seguir creciendo. Los que conocían a Maite y su centro la recomendaban por el boca a boca, pero se estaba perdiendo todo el tráfico de la gente que buscaba servicios de psicología y talleres de terapia por la zona.</p>
      <p>Hoy Maite tiene a sus clientes de toda la vida, siempre fieles, y un flujo constante de gente nueva que no hubiera conocido Centro Maná de otra forma.</p>',
    'url' => 'project.html'
  ],[
    'titulo' => 'WriterMuse',
    'modal_id' => 'writermuse',
    'active' => 0,
    'img' => 'img-07.jpg',
    'descr' => '<p>WriterMuse es una plataforma para escritores noveles donde encontrar todo tipo de recursos de escritura y creatividad, y donde Marta ofrece sus servicios como correctora y asesora literaria.</p>
    <p>WriterMuse es un centro de recursos, un blog y una página profesional, pero tiene una peculiaridad que lo hace único. Entre los dos creamos un complejo sistema de emailing para ayudar a cada visitante con su problema específico, porque cada persona es un mundo, pero cada escritor es todo un universo.</p>
    <p>(Marta): Este es mi proyecto personal, algo en lo que creo a pies juntillas: la creatividad es para todos y la escritura puede volver a ser un placer, con las herramientas adecuadas.</p>',
    'url' => 'project.html'
  ],[
    'titulo' => 'The Body Massamagrell',
    'modal_id' => 'the_body_massamagrell',
    'active' => 0,
    'img' => 'img-07.jpg',
    'descr' => '<p>The Body Massamagrell (TBM) es un centro de entrenamiento con electroestimulación.</p>
    <p>María quería que su público objetivo la encontrara y que conocieran lo que es la electroestimulación, y para ello iniciamos una campaña de publicidad en redes.</p>
    <p>Para lograrlo, empezamos a crear contenido útil, viral y que reflejara sus valores: salud, deporte y bienestar en una época en que el tiempo es escaso y preciado, y también sorteos y promociones que dieran a conocer su centro a miles de personas que nunca habían pasado por delante.</p>
    <p>Hoy María ha renovado su cartera de clientes, y los fieles hablan de ella en redes y en la calle. Desde Facebook ha conseguido conquistar su pueblo y hacer que pruebe la electroestimulación hasta la señora Puri de la panadería.</p>',
    'url' => 'project.html'
  ],[
    'titulo' => 'TAGDisruptor',
    'modal_id' => 'the_body_massamagrell',
    'active' => 0,
    'img' => 'img-07.jpg',
    'descr' => '<p>TAGDisruptor es una empresa valenciana de estética con un sistema innovador para la reducción de grasa localizada. Pero innovador de verdad, ¿eh? Te lo aplicas tú mismo en 5 min.</p>
    <p>José Luís y Alfredo tenían un producto rompedor, pero no sabían cómo moverlo online para darse a conocer. Tenían algo muy guay pero ningún tipo de publicidad, contenido o testimonio que creara autoridad y confianza en el usuario.</p>
    <p>Empezamos una campaña de marketing con influencers y a crear contenido para sus redes sociales, y ahora han conseguido expandirse hasta contar con más de 40 franquiciados y 6 distribuciones en el extranjero. El mérito de la idea es todo suyo, pero el de la imagen online es nuestro (y no tenemos abuela).</p>',
    'url' => 'project.html'
  ]
];

$quienes_somos = 'Nosotros';
$quienes_somos_text = 'Escritora y programador. Desarrollador web y community manager. Palabras y código.<br> Los opuestos se atraen y se complementan para montar tu escaparate online soñado.';

// Quienes somos
$nosotros = [
  [
    'id' => 'foto-marta',
    'nombre' => 'Marta Tornero',
    'img' => 'marta.png',
    'img-mobile' => 'marta-arriba.png',
    'alt' => 'Marta Tornero',
    'funcion' => 'Copywriter & Community Manager',
    'descr' => 'Sed elementum vehicula nisl, a egestas velit rhoncus nec.Cras vel sapien tincidunt, lacinia risus vel, imperdiet neque.',
    'social' => [
      [
        'icon' => 'fab fa-facebook-f',
        'url' => 'https://facebook.com'
      ],[
        'icon' => 'fab fa-twitter',
        'url' => 'https://twitter.com'
      ],[
        'icon' => 'fab fa-linkedin-in',
        'url' => 'https://www.linkedin.com'
      ],[
        'icon' => 'fas fa-rss',
        'url' => 'https://www.linkedin.com'
      ]
    ]
  ],[
    'id' => 'foto-andreu',
    'nombre' => 'Andreu García',
    'img' => 'andreu.png',
    'img-mobile' => 'andreu-abajo.png',
    'alt' => 'Andreu Garcia',
    'funcion' => 'Full Stack Developer',
    'descr' => 'Sed elementum vehicula nisl, a egestas velit rhoncus nec.Cras vel sapien tincidunt, lacinia risus vel, imperdiet neque.',
    'social' => [
      [
        'icon' => 'fab fa-facebook-f',
        'url' => 'https://facebook.com'
      ],[
        'icon' => 'fab fa-twitter',
        'url' => 'https://twitter.com'
      ],[
        'icon' => 'fab fa-linkedin-in',
        'url' => 'https://www.linkedin.com'
      ],[
        'icon' => 'fas fa-rss',
        'url' => 'https://www.linkedin.com'
      ]
    ]
  ]
];

$testimonios = [
  [
    'nombre' => 'Aroa Fernández',
    'modal_id' => 'slider_1',
    'active' => 1,
    'img' => 'marta.png',
    'descr' => 'Marta es una profesional excelente, tanto por su dedicación a los proyectos en los que se embarca, como en eficacia y rapidez. El trabajo de edición que ha realizado para nuestra empresa ha sido más de lo que nosotros teníamos pensado y nos ha ayudado a replantear algunos aspectos de nuestra web y nos ha permitido adecuarla a nuestras actuales necesidades.',
    'url' => 'aroafernandez.com'
  ],[
    'nombre' => 'Isabel Llano',
    'modal_id' => 'slider_2',
    'active' => 0,
    'img' => 'andreu.png',
    'descr' => 'A veces desconocemos el valor de algunas profesiones. Con el afán de estar al día y aunar criterios contactamos con Marta Tornero para que nos hiciera una revisión de los textos, sobre los que aportó otra mirada y trabajó de manera exhaustiva. Gracias a ella me di cuenta de todo lo que podíamos mejorar y he aprendido a valorar esa otra visión: la que aporta un profesional.',
    'url' => 'Instituto Valenciano de Terapias Naturales'
  ]
];
