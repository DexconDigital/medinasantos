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
		"link" => "https://www.facebook.com/inmobiliaria.medinasantos",
		"icono" => "fab fa-facebook-f",
		"imagen" => "images/facebook.png"
	],
	"instagram" => [
		"link" => "https://www.instagram.com/medinasantosinmobiliaria/?hl=es-la",
		"icono" => "fab fa-instagram",
		"imagen" => "images/instagram.png"
	],
	"twitter" => [
		"link" => " https://twitter.com/Inmobil78395188",
		"icono" => "fab fa-twitter",
		"imagen" => "images/twitter.png"
	],
];

//datos de contacto 
$datos_contacto = [
	"direccion" => [
		"direccion" => "Calle 147 # 101- 56 Local 9 <br> C.C. Fiesta Suba, Bogotá",
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
		"link"=> "https://api.whatsapp.com/send?phone=573138049994&text=&source=&data=",
		"imprimir" => "313 804 9994",
		"icono" => "fab fa-whatsapp",
	],
	"correo" => [
		"link" => "inmobiliariamedinasantos@outlook.com",
		"correo" => "inmobiliariamedinasantos@outlook.com",
		"correo_espacio" =>"inmobiliariamedinasantos<br class='d-none d-md-block espacio-correo'>@outlook.com",
		"icono" => "far fa-envelope",
	],
	"horario" => [
		"horario" => "Lunes a Viernes 8:00 a 1:00 pm, y de 2.:0 a 6:00 p.m, Sabados 8:30 a 12:30 am.",
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
	"avaluos" => "fas fa-balance-scale",
	"servicios_locativos" => "fas fa-toolbox",
	"creditos_hipotecarios" => "fas fa-hand-holding-usd",
	"seguros" => "fas fa-file-invoice-dollar",
];

//formularios aseguradoras
$formularios_aseguradoras = [
	0 => [
		'nombre' => 'Libertador Persona Jurídica',
		'ruta' => 'formularios/formulario_persona_juridica_libertador.pdf'
	],
	1 => [
		'nombre' => 'Libertador Persona Natural',
		'ruta' => 'formularios/formulario_persona_natural_libertador.pdf'
	],
	2 => [
		'nombre' => 'Protecsa Persona Jurídica',
		'ruta' => 'formularios/AFIANZAMIENTO-PERSONA-JURIDICA.pdf'
	],
	3 => [
		'nombre' => 'Protecsa Persona Natural',
		'ruta' => 'formularios/AFIANZAMIENTO-PERSONA-NATURAL.pdf'
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
	"quienes_somos" => [
		"imagen" => "images/quienes_somos.jpg",
		"titulo" => "Bienvenido a Inmobiliaria Medina Santos",
		"parrafos" => [
			0 => "Somos una Organización de Servicio Inmobiliario especializada en Arrendamientos, Ventas, Avalúos Urbanos  Rurales y Comerciales, Asesorías,  Seguros y Reparaciones Locativas.  Desde el año 2006 hemos cumplido con la normatividad vigente conferidas en la ley 820 de 2003, el Decreto Nacional 51 de 2004, los Decretos Distritales 121 de 2008 y 572 de 2015.",
			1 => "Cumplimos con la ley de protección de sus datos teniendo en cuenta que son de carácter confidencial de conformidad con las normas legales vigentes.",
		],
	],
	"proyeccion" => [
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
		"parrafos" => 'Nuestro Departamento de Arrendamientos dispone para usted toda la experiencia y profesionalismo en la protección y administración de su inmueble incluyéndolo dentro de nuestra póliza colectiva garantizando integridad, seriedad y puntualidad.  Además, ofrecemos cobertura en servicios públicos y daños y faltantes del inventario.',
	],
	"ventas" => [
		"titulo" => "Ventas",
		"parrafos" => 'Nuestro Departamento de ventas comercializa su Inmueble con las tarifas establecidas por la Lonja de Propiedad Raíz de Bogotá.  Les acompañamos y les asesoramos  profesionalmente durante el proceso de la compra-venta, tramitando y revisando los documentos y paz y salvos que se requieran hasta la escrituración.',
	],
	"avaluos" => [
		"titulo" => "Avalúos",
		"parrafos" => 'Contamos con valuadores especializados e inscritos en la Oficina de Registro Nacional de Valuadores capacitados para valorar su propiedad, con estudios del sector o zona que se requiera y garantizar que el precio de su negociación sea el real del mercado. Al valorar su inmueble se le entregara un concepto técnico completo tanto de la parte física como de la zona de ubicación acompañado con su debido registro fotográfico y el estudio de la situación jurídica del predio.',
	],
	"servicios_locativos" => [
		"titulo" => "Servicios Locativos",
		"parrafos" => 'Atendemos el mantenimiento básico de su inmueble, para garantizar el buen estado en general y buen funcionamiento en que se debe mantener el inmueble.',
	],
	"creditos_hipotecarios" => [
		"titulo" => "Créditos Hipotecarios",
		"parrafos" => '',
	],
	"seguros" => [
		"titulo" => "Seguros",
		"parrafos" => '',
	],
];
?>