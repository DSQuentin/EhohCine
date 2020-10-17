-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           10.5.4-MariaDB - mariadb.org binary distribution
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Listage de la structure de la table projetcine. film
CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomfilm` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT '0',
  `anneereal` year(4) DEFAULT 2000,
  `synopsis` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `genre_id` int(11) DEFAULT NULL,
  `real_id` int(11) DEFAULT NULL,
  `urlaffiche` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Listage des données de la table projetcine.film : ~4 rows (environ)
DELETE FROM `film`;
/*!40000 ALTER TABLE `film` DISABLE KEYS */;
INSERT INTO `film` (`id`, `nomfilm`, `anneereal`, `synopsis`, `genre_id`, `real_id`, `urlaffiche`) VALUES
	(4, 'Le Parrain', '1972', 'En 1945, à New York, les Corleone sont une des cinq familles de la mafia. Don Vito Corleone, "parrain" de cette famille, marie sa fille à un bookmaker. Sollozzo, " parrain " de la famille Tattaglia, propose à Don Vito une association dans le trafic de drogue, mais celui-ci refuse. Sonny, un de ses fils, y est quant à lui favorable. Afin de traiter avec Sonny, Sollozzo tente de faire tuer Don Vito, mais celui-ci en réchappe. Michael, le frère cadet de Sonny, recherche alors les commanditaires de l\'attentat et tue Sollozzo et le chef de la police, en représailles. Michael part alors en Sicile, où il épouse Apollonia, mais celle-ci est assassinée à sa place. De retour à New York, Michael épouse Kay Adams et se prépare à devenir le successeur de son père...', 4, 3, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/wnDNKCeBQzioXYQrXcSyrmRHVxf.jpg'),
	(5, 'Pulp Fiction', '1994', 'L\'odyssée sanglante et burlesque de petits malfrats dans la jungle d\'Hollywood : deux petits tueurs, un dangereux gangster marié à une camée, un boxeur roublard, des prêteurs sur gages sadiques, un caïd élégant et dévoué, un dealer bon mari et de deux tourtereaux à la gâchette facile.', 1, 4, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/4TBdF7nFw2aKNM0gPOlDNq3v3se.jpg'),
	(6, 'Forest Gump', '1994', 'Forrest Gump est le symbole d\'une époque, un candide dans une Amérique qui a perdu son innocence. Merveilleusement interprété par Tom Hanks, Forrest vit une série d\'aventures, de l\'état d\'handicapé physique à celui de star du football, de héros du Vietnam au roi de la crevette, des honneurs de la Maison Blanche au bonheur d\'une grande histoire d\'amour. Son cœur dépasse les limites de son Q.I.', 5, 5, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/A0Th0x8QIzP0njrFAJnYQ5ouIoB.jpg'),
	(7, 'Fight Club', '1999', 'Le narrateur, sans identité précise, vit seul, travaille seul, dort seul, mange seul ses plateaux-repas pour une personne comme beaucoup d’autres personnes seules qui connaissent la misère humaine, morale et sexuelle. C’est pourquoi il va devenir membre du Fight club, un lieu clandestin où il va pouvoir retrouver sa virilité, l’échange et la communication. Ce club est dirigé par Tyler Durden, une sorte d’anarchiste entre gourou et philosophe qui prêche l’amour de son prochain.', 6, 6, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/jSziioSwPVrOy9Yow3XhWIBDjq1.jpg');
/*!40000 ALTER TABLE `film` ENABLE KEYS */;

-- Listage de la structure de la table projetcine. genre
CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomgenre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Listage des données de la table projetcine.genre : ~11 rows (environ)
DELETE FROM `genre`;
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
INSERT INTO `genre` (`id`, `nomgenre`) VALUES
	(1, 'Thriller'),
	(2, 'Action'),
	(3, 'Fantastique'),
	(4, 'Crime'),
	(5, 'Comedie'),
	(6, 'Drame'),
	(7, NULL),
	(8, NULL),
	(9, NULL),
	(10, 'Dessin Animé'),
	(11, 'Animation'),
	(12, 'Science-Fiction');
/*!40000 ALTER TABLE `genre` ENABLE KEYS */;

-- Listage de la structure de la table projetcine. realisateur
CREATE TABLE IF NOT EXISTS `realisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomreal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `prenomreal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `naissancereal` year(4) DEFAULT NULL,
  `biographie` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `urlphoto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Listage des données de la table projetcine.realisateur : ~4 rows (environ)
DELETE FROM `realisateur`;
/*!40000 ALTER TABLE `realisateur` DISABLE KEYS */;
INSERT INTO `realisateur` (`id`, `nomreal`, `prenomreal`, `naissancereal`, `biographie`, `urlphoto`) VALUES
	(3, 'Ford Coppola', 'Francis', '1972', 'Francis Ford Coppola (né le 7 avril 1939) est un réalisateur, producteur et scénariste américain. Il est largement reconnu comme l\'un des réalisateurs les plus célèbres et les plus influents d\'Hollywood. Il incarnait le groupe de cinéastes connu sous le nom de New Hollywood, qui comprenait George Lucas, Martin Scorsese, Robert Altman, Woody Allen et William Friedkin, qui a émergé au début des années 1970 avec des idées non conventionnelles qui ont défié le cinéma contemporain.', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/mGKkVp3l9cipPt10AqoQnwaPrfI.jpg'),
	(4, 'Tarantino', 'Quentin', '1963', 'Quentin Tarantino, né le 27 mars 1963 à Knoxville dans le Tennessee, est un réalisateur, scénariste, producteur et acteur américain. Il se fait connaître en tant que réalisateur de films indépendants avec ses deux premiers films, Reservoir Dogs (1992) et Pulp Fiction (1994) et remporte pour ce dernier la Palme d\'or à Cannes. Après un troisième film en 1997 (Jackie Brown), il effectue son retour avec les deux volets de Kill Bill (2003 et 2004). Inglourious Basterds (2009) et Django Unchained (2012) sont ses plus grands succès commerciaux internationaux. Son deuxième western, Les Huit Salopards, est sorti en fin 2015.', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/1gjcpAa99FAOWGnrUvHEXXsRs7o.jpg'),
	(5, 'Zemeckis', 'Robert', '1952', 'Robert Lee Zemeckis (né le 14 mai 1952) est un réalisateur, producteur et scénariste américain. Zemeckis est apparu pour la première fois au grand public dans les années 1980 en tant que réalisateur de la série de films comiques de voyage dans le temps "Back to the Future", ainsi que de l\'épopée d\'action/animation en direct qui a remporté un Academy Award "Who Framed Roger Rabbit" (1988). Dans les années 1990, il s\'est diversifié dans des films plus dramatiques, notamment "Forrest Gump" de 1994, pour lequel il a remporté un Academy Award du meilleur réalisateur.\n\nTraduit avec www.DeepL.com/Translator (version gratuite)', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/lPYDQ5LYNJ12rJZENtyASmVZ1Ql.jpg'),
	(6, 'Fincher', 'David', '1962', 'David Andrew Leo Fincher (né le 28 août 1962) est un réalisateur et réalisateur de vidéoclips américain. Connu pour ses thrillers sombres et élégants, tels que Seven (1995), The Game (1997), Fight Club (1999), Panic Room (2002) et Zodiac (2007), Fincher a reçu des nominations aux Oscars du meilleur réalisateur pour son 2008 le film L\'étrange histoire de Benjamin Button et son film 2010 The Social Network, qui lui a également valu le Golden Globe et le BAFTA du meilleur réalisateur.', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/wdBeQXDNbbjkIKXHeEZtQShwSDM.jpg'),
	(7, 'Nolan', 'Christopher', '1970', 'Christopher Edward Nolan (né le 30 juillet 1970) est un réalisateur, scénariste et producteur de films anglo-américains. Il est né à Westminster, Londres, en Angleterre, et possède la double nationalité britannique et américaine grâce à sa mère américaine. Il est connu pour avoir écrit et réalisé des films acclamés par la critique tels que Memento (2000), The Prestige (2006), The Dark Knight Trilogy (2005-12), Inception (2010), Interstellar (2014) et Dunkerque (2017). Nolan est le fondateur de la société de production Syncopy Films. Il collabore souvent avec sa femme, la productrice Emma Thomas, et son frère, le scénariste Jonathan Nolan.', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/xuAIuYSmsUzKlUMBFGVZaWsY3DZ.jpg');
/*!40000 ALTER TABLE `realisateur` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
