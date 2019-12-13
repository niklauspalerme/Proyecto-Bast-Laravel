-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bast
-- ------------------------------------------------------
-- Server version	5.7.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `address` varchar(75) NOT NULL,
  `schedule` varchar(75) NOT NULL,
  `price` varchar(45) DEFAULT NULL,
  `image` varchar(150) NOT NULL,
  `descrip1` varchar(150) NOT NULL,
  `descrip2` varchar(5000) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activities`
--

LOCK TABLES `activities` WRITE;
/*!40000 ALTER TABLE `activities` DISABLE KEYS */;
INSERT INTO `activities` VALUES (1,'La Feria de San Telmo','Inicia desde la calle Defensa 120','Domingos de 10.00hs a 17.00 hs.','Gratis','https://www.buenosaires123.com.ar/imagenes/feria_san_telmo_domingos.jpg','Es un verdadero festival callejero. Cada domingo recibe \ncerca de 10 mil personas, entre ellas a muchos turistas extranjeros.','Visitar el mercado es aventurarse a un paseo que rememora la Buenos Aires de antes. \nRealizar las compras del día, buscar algún condimento que no es sencillo encontrar en otro lugar, \no simplemente dejarse llevar entre los puestos de antigüedades, artesanías, discos o juguetes viejos,\n es una experiencia ecléctica, que toma lo mejor de cada rubro para hacer de ello una combinación nueva y \n única. Este rejunte de propuestas disímiles son el gran atractivo del paseo.',NULL,NULL),(2,'Caminito','Calles Del Valle Iberlucea y Magallanes','Todos los días de 9.00hs a 19.00hs','Gratis','https://media.diariopopular.com.ar/adjuntos/143/imagenes/003/403/0003403989.jpg','Caminito es uno de los paseos más emblemáticos de la ciudad y de los \natractivos imperdibles para quienes la visitan. ','Esta feria se encuentra en el popular paseo de Caminito, en el barrio de La Boca. Con sus\n conventillos pintados de distintos colores, Caminito se ha convertido en uno de los recorridos más \n emblemáticos de la ciudad y, desde el año 1959, es reconocido como museo a cielo abierto gracias \n a las numerosas donaciones de distintos artistas y al impulso fundamental del pintor Benito Quinquela Martín, \n vecino del barrio y cuyo museo se encuentra en las inmediaciones.',NULL,NULL),(3,'La Feria del Libro en Plaza Italia','Avenida Santa Fé y Darregueyra',' Sábados, Domingos y Feriados de 12 a 20:30 hs.','Gratis','http://2.bp.blogspot.com/-ZiT3xLW8KWY/UtMtPWEgAfI/AAAAAAAABJg/urk--jW4sqk/s1600/DSC08543.gif','Está fija todo el año y es una de las ferias más importante de libros usados del país.','\nIr a la feria de libros de Plaza Italia ya es un clásico de Palermo. Está fija todo \nel año y es una de las ferias más importante de libros usados del país. Se halla muy\n cerca del Zoológico, frente al La Rural.  En las semanas en que se hace la Feria de\n l libro, el que pasea puede darse una panzada de libros y visitar en un día dos ferias\n muy diferentes entre sí. Cada una tiene distintos tipos de libros, de contenido, y distintos modos de exposición.',NULL,NULL),(4,'La Feria de Recoleta','Entre la avenida Pueyrredón y Libertador','Todos los fines de semana y feriados de 11.00 a 20.00 hs.','Gratuito','https://www.buenosaires.travel/wp-content/buenosaires_uploads/capital-federal-22-801x563.jpg','La Feria de Recoleta es el mayor mercado artesanal de Buenos Aires. Un lugar ideal para comprar regalos y recuerdos.','La Feria de Recoleta es un paseo artesanal ubicado en la Plaza Francia. \nMás específicamente situada entre las avenidas Pueyrredón y Del Libertador de Recoleta, es también conocida por el nombre de Feria de Plaza Francia, en honor al espacio verde que la aloja. Se inició en los años 70 y hoy en día es una de las ferias artesanales más importantes y variadas de la Ciudad de Buenos Aires.\n\nEntre la oferta del paseo se encuentran instrumentos de diversos materiales como cerámica, cuero, madera, \nmetal, plástico, tejidos en tela y telar. La feria abre todos los fines de semana, incluyendo feriados, en horario de 11 de la mañana, y se extiende hasta las 20 horas. La opción también incluye actividades nocturnas, ya que en los alrededores de la plaza también se llevan a cabo espectáculos callejeros que integran músicos, malabaristas, payasos y artistas callejeros, tanto de día como de noche.\n\nLos inicios de la feria se remontan a finales de la década de 1970, cuando un grupo de personas se reunió p\nara comenzar a vender sus artesanías en el interior de la plaza. Con los años, la venta se oficializó, y la \nferia comenzó a crecer inusitadamente, llegando a contar hoy en día con más de cien artesanos registrados.\n\nJunto al predio se ubica el Centro Cultural Recoleta, además de la Iglesia del Pilar y el Cementerio de Recoleta. \nOtros atractivos cercanos lo constituyen el Museo de Bellas Artes y el Monumento a La Flor, por lo que es posible\n visitar los alrededores para conocer otros espacios interesantes.',NULL,NULL),(5,'La Feria de Plaza Serrano','Calle Jorge Luis Borges y calle Honduras, Plaza Serrano, Palermo.','Sábados, domingos y feriados de 10.00 a 20.00 hs.','Gratuito','https://turismo.buenosaires.gob.ar/sites/turismo/files/feria_plaza_cortzar_serrano_palermo_1200_2.jpg','La Feria de Plaza Serrano en Palermo Soho es el lugar ideal para comprar ropa y accesorios, en especial para \nlas mujeres.','Plaza serrano, más conocida como “placita serrano”, pero en realidad llamada “Plaza Cortazar” \nes un clásico de la noche en Palermo. Un plaza rodeada de bares, ferias y locales de ropa, libros y\n discos, ¿qué más se puede pedir? Perfecto para un día que combine mate y shopping o para pasear por la feria de artesanías.\n\nEn la fera de Plaza Serrano vas a encontrar ropa, mates decorados, carteras de cuero, obras de arte, \nartistas callejeros que pintan retratos caricaturescos de la gente, juegos de ingenio y más. La feria \nse renueva a menudo ya que algunos extranjeros paran en Placita Serrano y hay mucha movida de gente.',NULL,NULL),(6,'El Mercado de las Pulgas','Avenida Dorrego 1600 y Niceto Vega','De Martes a Domingo de 10.00 a 19.00 horas','Gratuito','https://buenosairesconnect.com/wp-content/uploads/2011/06/Mercado-de-Pulgas-fotos-16.jpg','Funciona desde el año 1986 en un gran galpón donde pueden encontrarse todo tipo de curiosidades y donde se destacan las antigüedades','Funciona desde el año 1986 en un gran galpón donde pueden encontrarse todo tipo de curiosidades y donde se destacan las antigüedades en mobiliario, obras de arte y objetos de todas las épocas y estilos. En una fusión de bohemia y objetos de calidad, todo tipo de personajes desfilan por allí y como un gran “cambalache”, conviven las tarotistas que tiran las cartas, los vendedores de sifones de vidrio, los buscavidas, los locales del ´70 con ofertas que incluyen desde las lámparas a los muebles y otros tantos objetos de valor. Actualmente todo el edificio se encuentra en tareas de reconstrucción.',NULL,NULL),(7,'Experiencia gastronómica argentina','El restaurante está en Fitz Roy 2110','El 24, 25 y 31 de diciembre ','Aproximadamente $3.724','https://media-cdn.tripadvisor.com/media/attractions-splice-spp-540x360/06/6f/20/df.jpg','Venga y únase a nosotros en un delicioso viaje por la gastronomía más destacada de Argentina en la experiencia culinaria más divertida e interactiva d','Venga y únase a nosotros en un delicioso viaje por la gastronomía más destacada de Argentina en la experiencia culinaria más divertida e interactiva de Buenos Aires. Añada algo de brillo a su velada y opte por la clase de elaboración de cócteles a base de vino para empezar. A continuación, aprenderá cómo cerrar empanadas utilizando diferentes técnicas de \"repulga\". Durante la cena disfrutará de cuatro vinos boutique maridados a la perfección con alimentos de todos los rincones de Argentina y podrá la guinda con lo que muchos dicen que es la mejor carne de todo el país. El último paso será aprender a preparar la bebida más popular de Argentina, el mate, junto con los dulces más famosos, los alfajores.',NULL,NULL),(8,'Lección de tango y cata de vinos.','Dr. Tomás Manuel de Anchorena 575','De Lunes a Sabado. Hora 14.00hs y 19.00hs','Aproximadamente $1.840','https://media-cdn.tripadvisor.com/media/attractions-splice-spp-540x360/07/18/0f/d2.jpg','Lección de tango de 60 minutos y desgustación empanadas caseras y vinos.','Tendrás una experiencia maravillosa. Al principio vas a hacer una clase de tango de 60 minutos, donde aprenderás los movimientos básicos. Podrás bailar en una milonga después de eso. Cuando terminemos la clase, vamos a probar algunas empanadas caseras, con vinos típicos de Argentina. La experiencia es dentro de un típico y original conventillo (casa popular de los inmigrantes). Entonces, tendrás la oportunidad de ver cómo solían vivir los inmigrantes.',NULL,NULL),(9,'Fiesta Plop','Avenida Federico Lacroze 3455','Todos los viernes de 00.30hs a 5.00hs','A partir de $250','https://www.vuenosairez.com/images/eventos/fiesta-plo-371077.jpg','Una de las fiestas más reconocidas de la ciudad, no podés perdertela','La nueva generación gay tiene su propia fiesta, la Plop, donde mandan los que tienen entre 18 y 25 años. La atmósfera es colorida e infantil, y la música todavía más. Acá se bailan las canciones de los grandes programas infantiles de los últimos 20 años, que provocan que el público salte amontonado. Acá los chicos son divertidos y esa onda se contagia entre la gente. La fiesta incluye disfraz, barra libre, música pop y mucho desparpajo.','2019-08-18 00:58:34','2019-08-18 00:58:34');
/*!40000 ALTER TABLE `activities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `activities_users`
--

DROP TABLE IF EXISTS `activities_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activities_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `id_activities` int(11) NOT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activities_users`
--

LOCK TABLES `activities_users` WRITE;
/*!40000 ALTER TABLE `activities_users` DISABLE KEYS */;
INSERT INTO `activities_users` VALUES (2,4,2,NULL,NULL),(3,4,1,NULL,NULL),(5,4,3,NULL,NULL),(6,5,1,'2019-08-12 01:01:23','2019-08-12 01:01:23'),(7,5,1,'2019-08-12 01:02:34','2019-08-12 01:02:34'),(8,5,3,'2019-08-12 01:04:08','2019-08-12 01:04:08'),(9,5,4,'2019-08-12 01:05:20','2019-08-12 01:05:20'),(10,4,1,'2019-08-12 17:04:20','2019-08-12 17:04:20'),(11,5,9,'2019-08-20 20:26:39','2019-08-20 20:26:39');
/*!40000 ALTER TABLE `activities_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foods`
--

DROP TABLE IF EXISTS `foods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `address` varchar(75) NOT NULL,
  `schedule` varchar(75) NOT NULL,
  `price` varchar(45) DEFAULT NULL,
  `image` varchar(150) NOT NULL,
  `descrip1` varchar(150) NOT NULL,
  `descrip2` varchar(5000) NOT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foods`
--

LOCK TABLES `foods` WRITE;
/*!40000 ALTER TABLE `foods` DISABLE KEYS */;
INSERT INTO `foods` VALUES (1,'Il Trovatore','Avenida Rivadavia 5078','De Lunes a Domingos de 10.00hs a 00.00hs','Apartir de $180','https://d1jnk9nvznvex1.cloudfront.net/wp-content/uploads/2017/11/il-trovatore-1.jpg?x13392','Una de las heladerias artesanales italinas mas fmaosas de la ciudad','Fundada en el año 1963 por el señor Vito Diana, quien arriba desde su Italia natal con mucho ánimo de progreso \nen el año 1952. En sus primeros años de estadía en la Argentina hizo sus primeros pasos como heladero artesanal.',NULL,NULL),(2,'Siga la vaca','Avenida Moreau de Justo 1714','Todos los días de 12.00hs a 00.00hs','Apartir de $650','https://cdn.needish.com/is-prod-deals/sQh4fCoVr_XtvMX3yAaQ9Q/scale/900x600.jpg','El innovador sistema aplicado a la principal \ntradición gastronómica argentina, el asado.','El innovador sistema ‘todo incluido’ aplicado a la principal tradición gastronómica argentina, \nel asado, elaborado con las mejores materias primas del mercado y ofrecido a un precio fijo, \nsin sorpresas ni costos ocultos resultaron clave a la hora del reconocimiento de nuestros clientes argentinos y extranjeros.\nInaugurado en 1993, el primer local creció hasta ser capaz de recibir, a más de 300 personas.',NULL,NULL),(3,'Le Pain Quotidien','Vicente López 2050','De Domingo a Domingo de 9.00hs a 00.00hs','Apartir de $ 150','http://a.mktgcdn.com/p/e8S5rKDAM0wKbmtkDXgpYbR5T7Py4d93kgZUVrXsErs/470x264.png','Nuestro menú celebra la simplicidad de los alimentos frescos y nutritivos.','En este mundo cambiante y agitado, te invitamos a disfrutar de un lugar en el cual se aprecia la tradición y la sencillez. Nuestros panaderos mezclan harina de trigo orgánica molida en piedra, sal marina y agua con masa madre para crear un humilde comienzo de cuatro ingredientes. Los panes son entonces pacientemente amasados a mano y cocidos en nuestros hornos revestidos de piedra. Son las hogazas artesanales de nuestro pasado, horneadas según la tradición. Nuestro pan elaborado a mano se convie',NULL,NULL),(4,'Croque Madame','Avenida Libertador 1902','De Lunes a Domingo de 10.00hs a 00.00 hs.','Apartir de $ 150','https://media-cdn.tripadvisor.com/media/photo-s/0a/c0/b7/ba/area-externa-do-cafe.jpg','Un clásico y hermoso refugio del bullicio del barrio. La propuesta del espacio es cocina popular fra','Este restaurant y confitería situado dentro del perímetro del Palacio Errázuriz, hoy Museo Nacional de Arte Decorativo funciona en un edificio que es independiente al mismo. Alli, en el interior del Museo, nos encontramos con Croque Madame, un clásico y hermoso refugio del bullicio del barrio. La propuesta del espacio es cocina popular francesa. El nombre hace referencia a los “croque”: rodajas de pan del día anterior, dorados, con queso gruyere, jamón o lo que haya sobrado del día anterior',NULL,NULL),(5,'La Cabrera','Cabrera 5127','Todos los días de 12.30hs a 1.00hs','A partir de $600','https://www.edicionciudad.com/wp-content/uploads/2018/09/cabrera-1.jpg','En La Cabrera seleccionamos los mejores cortes de las razas Hereford y Aberdeen Angus.','En La Cabrera se encuentra la mejor carne argentina, excelentes vinos y una selección de guarniciones, especialmente elaboradas para cada plato y servidas en pequeñas cazuelas.  No se trata de una parrilla más, la intención es que aquellos que vayan, argentinos y turistas, puedan vivir una experiencia única. Los porteños se identifican, los extranjeros se sorprenden.  En el país de las vacas, La Cabrera se posicionó como una parrilla de culto, de las mejores de la ciudad. No se trata de una parrilla tradicional, Gastón Riveira, su creador, la define como “bien porteña”.','2019-08-18 00:31:32','2019-08-18 00:31:32');
/*!40000 ALTER TABLE `foods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foods_users`
--

DROP TABLE IF EXISTS `foods_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foods_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `id_foods` int(11) NOT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foods_users`
--

LOCK TABLES `foods_users` WRITE;
/*!40000 ALTER TABLE `foods_users` DISABLE KEYS */;
INSERT INTO `foods_users` VALUES (1,4,2,NULL,NULL),(3,4,3,NULL,NULL),(4,4,4,NULL,NULL),(5,4,4,'2019-08-12 03:36:02','2019-08-12 03:36:02'),(6,4,4,'2019-08-12 03:36:19','2019-08-12 03:36:19'),(8,4,3,'2019-08-13 18:15:50','2019-08-13 18:15:50'),(9,4,1,'2019-08-13 18:15:55','2019-08-13 18:15:55'),(10,4,3,'2019-08-13 18:15:57','2019-08-13 18:15:57'),(11,4,4,'2019-08-13 18:16:01','2019-08-13 18:16:01');
/*!40000 ALTER TABLE `foods_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `address` varchar(75) NOT NULL,
  `schedule` varchar(75) NOT NULL,
  `price` varchar(45) DEFAULT NULL,
  `image` varchar(150) NOT NULL,
  `descrip1` varchar(150) NOT NULL,
  `descrip2` varchar(5000) NOT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotels`
--

LOCK TABLES `hotels` WRITE;
/*!40000 ALTER TABLE `hotels` DISABLE KEYS */;
INSERT INTO `hotels` VALUES (2,'Centuria Hotel Buenos Aires','Calle Suipacha 30 ','Todos los días de 10.00hs a 24.00hs ','A partir de $ 1200','https://q-ec.bstatic.com/images/hotel/max1280x900/374/37485666.jpg','Centuria Hotel Buenos Aires está ubicado en pleno corazón de la Ciudad de Buenos Aires','Centuria Hotel Buenos Aires está ubicado en pleno corazón de la Ciudad de Buenos Aires, a tan solo 300 metros del Obelisco y de la Calle Florida. Contamos con 70 habitaciones, salones para eventos y convenciones, desayuno buffet, cochera cubierta, gym y servicio de WI-FI en todas las áreas del establecimiento.',NULL,NULL),(3,'Exe Hotel Colón','Carlos Pellegrini 507 ','Todos los días hasta las 00.00hs','A partir de $1800','https://r-ec.bstatic.com/images/hotel/max1280x900/622/62262049.jpg','Hotel de 4 estrellas ofrece habitaciones cómodas en el barrio Centro de Buenos Aires','El Exe Hotel Colon de 4 estrellas ofrece habitaciones cómodas en el barrio Centro de Buenos Aires de Ciudad Autónoma de Buenos Aires. Después de renovación en 2008, el hotel está en el edificio de 14 pisos con una arquitectura tradicional.',NULL,NULL),(4,'Four Seasons Hotel','1086/88 Posadas','Todos los días de 10.00hs a 24.00hs','A partir de USD545','https://q-ec.bstatic.com/images/hotel/max1024x768/221/22113570.jpg','Four Seasons combina una mansión de principios del siglo XX','Ubicado en el exclusivo barrio de La Recoleta, Four Seasons combina una mansión de principios del siglo XX y una torre contemporánea, lo que resulta en lo mejor de las comodidades modernas con glamur del estilo europeo. Reúnase con colegas y amigos para tomar cócteles en Pony Line y bistecs añejados en seco en Elena, o disfrute de una tradición porteña –la parrillada del domingo– en nuestro jardín secreto.','2019-08-18 01:31:37','2019-08-18 01:31:37');
/*!40000 ALTER TABLE `hotels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotels_users`
--

DROP TABLE IF EXISTS `hotels_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hotels_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `id_hotels` int(11) NOT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotels_users`
--

LOCK TABLES `hotels_users` WRITE;
/*!40000 ALTER TABLE `hotels_users` DISABLE KEYS */;
INSERT INTO `hotels_users` VALUES (1,4,3,'2019-08-12 14:45:05','2019-08-12 14:45:05'),(2,5,3,'2019-08-20 20:27:06','2019-08-20 20:27:06');
/*!40000 ALTER TABLE `hotels_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `places`
--

DROP TABLE IF EXISTS `places`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `places` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(75) NOT NULL,
  `schedule` varchar(75) NOT NULL,
  `price` varchar(45) DEFAULT NULL,
  `image` varchar(500) NOT NULL,
  `descrip1` varchar(150) NOT NULL,
  `descrip2` varchar(5000) NOT NULL,
  `placescol` varchar(45) DEFAULT NULL,
  `placescol1` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `places`
--

LOCK TABLES `places` WRITE;
/*!40000 ALTER TABLE `places` DISABLE KEYS */;
INSERT INTO `places` VALUES (2,'La Casa Rosada','Calle Balcarce 50','Las visitas son sábados de 10.00 hs a 18.00 hs.','Gratuito','https://i.blogs.es/3fe687/casarosada-6-12-2015/1366_2000.jpg','También conocida como Casa de Gobierno, es uno de los edificios más emblemáticos de la Ciudad de Buenos Aires.','Es la sede del Poder Ejecutivo de la República Argentina. Dentro de la misma se encuentra el despacho del presidente de la Nación Argentina. Este edificio se localiza en la calle Balcarce 50, en el barrio de Monserrat en la Ciudad de Buenos Aires, frente a la histórica Plaza de Mayo. Su color característico es rosado y es considerado uno de los edificios más \nemblemáticos de Buenos Aires. Alberga además el Museo de la Casa de Gobierno, con objetos relacionados con los presidentes del país',NULL,NULL,NULL,NULL),(3,'Malba','Avenida Figueroa Alcorta 3415','Jueves a Lunes de 10.00hs a 20.00hs','$200','https://upload.wikimedia.org/wikipedia/commons/a/a7/Malba_-_Milla_Museos.jpg','Es uno de los museos mas importantes de latinoamerica. Posee mas de 400 obras','Fue fundado en septiembre de 2001 con el objetivo de coleccionar, preservar, estudiar y difundir el arte latinoamericano desde principios del siglo XX hasta la actualidad. Es una institución privada sin fines de lucro que conserva y exhibe un patrimonio de aproximadamente 400 obras de los principales artistas modernos y contemporáneos de la región. Combina un calendario de exposiciones temporales, con la exhibición estable de su colección institucional, y funciona simultáneamente como un espacio plural de producción de actividades culturales y educativas. Ofrece ciclos de cine, literatura y diseño y lleva adelante una tarea de educativa a través de programas destinados a diferentes tipos de públicos. En mayo de 2007, el Malba fue declarado Sitio de Interés Cultural por parte de la Legislatura de la Ciudad Autónoma de Buenos Aires. En noviembre de 2008, recibió el Premio Konex de Platino como Mejor entidad cultural de la última década.',NULL,NULL,'2019-08-18 01:49:23','2019-08-18 01:49:23');
/*!40000 ALTER TABLE `places` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `places_users`
--

DROP TABLE IF EXISTS `places_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `places_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `id_places` int(11) NOT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `places_users`
--

LOCK TABLES `places_users` WRITE;
/*!40000 ALTER TABLE `places_users` DISABLE KEYS */;
INSERT INTO `places_users` VALUES (1,4,2,'2019-08-12 14:59:10','2019-08-12 14:59:10'),(2,4,2,'2019-08-13 15:41:15','2019-08-13 15:41:15'),(3,3,2,'2019-08-15 00:01:07','2019-08-15 00:01:07');
/*!40000 ALTER TABLE `places_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `answer` varchar(300) NOT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'¿Quiénes somos?','Somos una website que se encarga en ayudar tanto a lugareños como extranjeros para que puedan conocer un poco más acerca la linda ciudad de Buenos Aires y puedan aprovechar cada rincón que esta maravillosa ciudad ofrece al mundo.','img/Pregf_01.png'),(2,'¿Que podes hacer aqui en BAST?','Aqui podras organizar una agenda de los sitios que querés visitar ya sean actividades, lugares, sitios de comida y hoteles. Cada uno de los lugares podras encontrar una breve reseña , como tambien su horario, ubicación y un precio estimado.','img/Pregf_02.png'),(3,'¿Qué es la sección LUGARES?','En esta sección de la página podaras encontrar información de\n cada uno sitios más turísticos y visitados de Bueno Aires Ciudad Capital (CABA). Podrás encontrar desde barrios hasta \n lugares un poco más específico donde podrás iniciar tu aventura turística.','img/Pregf_03.png'),(4,'¿Qué es la sección GASTRONOMIA?','En esta sección podrá encontrar los lugares más chic para poder compartir con tu familia y amigos. Podrás encontrar lugares desde \nrestaurantes más icónicos de la ciudad como las franquicias de comida preferidas por el público porteño.','img/Pregf_04.png'),(5,'¿Qué es la sección HOTELES?','Esta sección esta dedica al hospedaje. Aquí podrás encontrar posadas, residencias y hoteles que podrás usar \ncomo referencia para que así puedas escoger la elección de hospedaje más cómoda para vos.','img/Pregf_05.png'),(6,'¿Qué es la sección ACTIVIDADES?','Buenos Aires Ciudad Capital es \nconocida como la Nueva York de Latino América por eso es que la ciudad siempre ofrece distintas\n actividades adaptándose a cada uno de sus habitantes y turistas. Aquí podrás ver cada una de las \n actividades que la ciudad propone.','img/Pregf_06.png');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `password` varchar(60) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'Facundo Esteban','11-1234-567-8-9','11-111-1111','facu@gmail.com','7Bi3Zv7G5ol2S8netgBAj0ynYsaiK8RJBCYpFUee.png',1,'12345678','2019-08-19 20:21:58','2019-08-09 23:33:47'),(4,'Nicolas Palermo',NULL,NULL,'nicolax0416@gmail.com','AAuUkpoZ2laul8mjWXKiCZfCjp4htAHmBO7ih52e.jpeg',NULL,'123456789','2019-08-19 20:49:13','2019-08-11 20:16:32'),(5,'Alvaro Benavides','22-222-2222','11-111-1111','alvaro94@gmail.com','uekP0eVxui7d2WV1PZPhm1Mg3j8TzwvtMH79Hwh0.jpeg',1,'$2y$10$BOwduDwVYABd46DH31Fz9uvTSfdoT/XB2gh0nR0D2qF7K3CaOOSeu','2019-08-20 20:29:56','2019-08-11 20:17:56'),(6,'Facundo Esteban',NULL,NULL,'facundo@gmail.com','T7H4iLFxnTkxag7mAtIkAtfdWXbjWILviTwoAIEe.png',NULL,'$2y$10$gkCmvxAMaWcpNjj/DD8G/OBHS0rKojRLBqLnAI4RcNogtrx5ycd42','2019-08-20 12:22:22','2019-08-20 12:22:22'),(7,'micaela',NULL,NULL,'mica@gmail.com','7Bi3Zv7G5ol2S8netgBAj0ynYsaiK8RJBCYpFUee.png',NULL,'$2y$10$I4eyxQ11nfeRivt4.amzFOlUVxljfQrpZOTTSxiS0SifUyu26nx6S','2019-08-21 00:01:05','2019-08-21 00:01:05');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-20 21:12:05
