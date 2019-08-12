<?php

$nombre_inmobiliaria = "Inmobiliaria Medina Santos";

//logo empresa
$logo_empresa = [
	"src" => "images/Logo.png",
	"alt" => "Logo Inmobiliaria Medina Santos"
]; 

// boton pse
$pse = [
	"link" => "",
	"src" => "images/logopse.png",
	"alt" => "Pagos PSE"
];

// redes sociales
$redes_sociales = [
	"facebook" => [
		"link" => "https://www.facebook.com/",
		"icono" => "fab fa-facebook-f",
		"imagen" => "images/facebook.png"
	],
	"instagram" => [
		"link" => "https://www.instagram.com/",
		"icono" => "fab fa-instagram",
		"imagen" => "images/instagram.png"
	],
	"twitter" => [
		"link" => "https://www.twitter.com/",
		"icono" => "fab fa-twitter",
		"imagen" => "images/twitter.png"
	],
];

//datos de contacto 
$datos_contacto = [
	"direccion" => [
		"direccion" => "Calle 147 # 101- 56 <br> Local 9 C.C. Fiesta Suba, Bogotá",
		"icono" => "fas fa-map-marker-alt",
	],
	"telefono_fijo" => [
		"link"=> "+570317221563",
		"imprimir" => "PBX +57(1) 722 1563",
		"icono" => "fas fa-phone-alt",
	],
	"celular" => [
		"link"=> "+573144830040",
		"imprimir" => "314 483 0040",
		"icono" => "fas fa-mobile-alt",
	],
	"whatsapp" => [
		"link"=> "https://api.whatsapp.com/send?phone=573102537420&text=&source=&data=",
		"imprimir" => "310 253 7420",
		"icono" => "fab fa-whatsapp",
	],
	"correo" => [
		"correo" => "inmobiliariamedinasa@outlook.com",
		"icono" => "far fa-envelope",
	],
	"horario" => [
		"horario" => "",
		"icono" => "fas fa-calendar-alt",
	],	
];

//logos aliados
$logos_aliados = [
	0 => "images/LOGO PROTECSA.png",
	1 => "images/LOGO EL LIBERTADOR.png",
	2 => "images/LOGO SIMI.png",
];

//iconos servicios
$iconos_servicios = [
	"arrendamientos" => "fas fa-sign",
	"ventas" => "fas fa-tags",
	"asesoria_inmobiliaria" => "fas fa-handshake",
	"servicios_locativos" => "fas fa-toolbox",
	"creditos_hipotecarios" => "fas fa-hand-holding-usd",
	"seguros" => "fas fa-file-invoice-dollar",
];

//formularios aseguradoras
$formularios_aseguradoras = [
	0 => [
		'nombre' => 'Libertador Persona Jurídica',
		'ruta' => '/'
	],
	1 => [
		'nombre' => 'Libertador Persona Natural',
		'ruta' => '/'
	],
	2 => [
		'nombre' => 'Protecsa Persona Jurídica',
		'ruta' => '/'
	],
	3 => [
		'nombre' => 'Protecsa Persona Natural',
		'ruta' => '/'
	],
];

//imagenes slide home
$imagenes_slide_principal = [
	0 =>[
		'imagen' => 'images/slide1.jpg',
		'alt' => 'Imagen carrusel principal'
	],
	1 => [
		'imagen' => 'images/slide2.jpg',
		'alt' =>'Imagen carrusel principal'
	],
	2 => [
		'imagen' => 'images/slide3.jpg',
		'alt' =>'Imagen carrusel principal'
	],
];

//frases slides home
$frases_slide_principal = [
	0 => "Gran oferta de Inmuebles",
	1 => "Encuentra tu inmueble soñado",
	2 => "Pensamos en tus necesidades de vivienda o negocio"
];

//textos quienes somos
$texto_quienes_somos = [
	"proyeccion" => [
		"imagen" => "images/quienes_somos.jpg",
		"titulo" => "Bienvenido a Inmobiliaria Medina Santos",
		"subtitulo" => "Proyección",
		"parrafos" => [
			0 => "Conformamos un equipo de trabajo altamente calificado en el área de servicios profesionales de Finca Raíz, poseemos las capacidades técnicas e intelectuales para desarrollar estrategias orientadas a lograr la satisfacción y la seguridad de nuestros clientes.",
			1 => "Hemos venido forjando un proyecto de personalización del servicio donde nuestra responsabilidad, integridad  y cumplimiento son nuestra presentación.",			
		],
	],
	"mision" => [
		"titulo" => "Misión",
		"parrafo" => "Somos una empresa de servicio inmobiliario personalizado, nos proyectamos en principios éticos y morales brindando así seriedad, seguridad, e integridad en todos nuestros procesos comerciales.   Seguros de que día a día contribuiremos al desarrollo de un buen futuro de nuestro país,  convencidos que a través de negocios efectivos lograremos la satisfacción de nuestros clientes.",
		"imagen" => "images/mision.jpg"
	],
	"vision" => [
		"imagen" => "images/vision.jpg",
		"titulo" => "Visión",
		"parrafo" => "Trabajar con excelencia constantemente para ofrecer al cliente inmobiliario nuestro mejor servicio a través de nuevos productos que cubran la necesidad de acompañamiento en los diferentes procesos que abarquen el mercado inmobiliario.",
	],	
];

//textos y banner contador de estadisticas seccion quienes somos
$texto_contador_estadisticas = [
	"parrafos" => [
		0 => "Experiencia",
		1 => "Total Inmuebles",
		2 => "Inmuebles en Arriendo",
		3 => "Inmuebles en Venta",
		],
	"imagen" => "images/banner_estadisticas.png"
];

//textos servicios
$texto_servicios = [
	"arrendamientos" => [
		"titulo" => "Arrendamientos",
		"parrafos" => [
			0 => "",
		]
	],
	"ventas" => [
		"titulo" => "Ventas",
		"parrafos" => [
			0 => "",
		]
	],
	"asesoria_inmobiliaria" => [
		"titulo" => "Asesoría Inmobiliaria",
		"parrafos" => [
			0 => "",
		]
	],
	"servicios_locativos" => [
		"titulo" => "Servicios Locativos",
		"parrafos" => [
			0 => "",
		]
	],
	"creditos_hipotecarios" => [
		"titulo" => "Créditos Hipotecarios",
		"parrafos" => [
			0 => "",
		],
	],
	"seguros" => [
		"titulo" => "Seguros",
		"parrafos" => [
			0 => "",
		]
	],
];
?>