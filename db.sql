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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Listage des données de la table projetcine.film : ~4 rows (environ)
DELETE FROM `film`;
/*!40000 ALTER TABLE `film` DISABLE KEYS */;
INSERT INTO `film` (`id`, `nomfilm`, `anneereal`, `synopsis`, `genre_id`, `real_id`, `urlaffiche`) VALUES
	(5, 'Pulp Fiction', '1994', 'L\'odyssée sanglante et burlesque de petits malfrats dans la jungle d\'Hollywood : deux petits tueurs, un dangereux gangster marié à une camée, un boxeur roublard, des prêteurs sur gages sadiques, un caïd élégant et dévoué, un dealer bon mari et de deux tourtereaux à la gâchette facile.', 1, 4, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/4TBdF7nFw2aKNM0gPOlDNq3v3se.jpg'),
	(6, 'Forest Gump', '1994', 'Forrest Gump est le symbole d\'une époque, un candide dans une Amérique qui a perdu son innocence. Merveilleusement interprété par Tom Hanks, Forrest vit une série d\'aventures, de l\'état d\'handicapé physique à celui de star du football, de héros du Vietnam au roi de la crevette, des honneurs de la Maison Blanche au bonheur d\'une grande histoire d\'amour. Son cœur dépasse les limites de son Q.I.', 5, 5, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/A0Th0x8QIzP0njrFAJnYQ5ouIoB.jpg'),
	(7, 'Fight Club', '1999', 'Le narrateur, sans identité précise, vit seul, travaille seul, dort seul, mange seul ses plateaux-repas pour une personne comme beaucoup d’autres personnes seules qui connaissent la misère humaine, morale et sexuelle. C’est pourquoi il va devenir membre du Fight club, un lieu clandestin où il va pouvoir retrouver sa virilité, l’échange et la communication. Ce club est dirigé par Tyler Durden, une sorte d’anarchiste entre gourou et philosophe qui prêche l’amour de son prochain.', 6, 6, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/jSziioSwPVrOy9Yow3XhWIBDjq1.jpg'),
	(9, 'Kill Bill : Volume 1', '2003', 'Au cours d\'une cérémonie de mariage en plein désert, un commando fait irruption dans la chapelle et tire sur les convives. Laissée pour morte, la Mariée enceinte retrouve ses esprits après un coma de quatre ans. Celle qui a auparavant exercé les fonctions de tueuse à gages au sein du Détachement International des Vipères Assassines n\'a alors plus qu\'une seule idée en tête : venger la mort de ses proches en éliminant tous les membres de l\'organisation criminelle, dont leur chef Bill qu\'elle se réserve pour la fin.', 2, 4, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/udRaQKzT0LG4iQFxHLaYjno9uAT.jpg'),
	(10, 'Peninsula', '2020', 'La péninsule se déroule quatre ans après Train to Busan, alors que les personnages se battent pour fuir un pays en ruine à la suite d\'un désastre sans précédent.', 13, 9, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/eFQDY2GcVRhWl0hYJw55iP1JKYn.jpg'),
	(11, 'Joker', '2019', 'Dans les années 1980, à Gotham City, Arthur Fleck, un humoriste de stand-up raté, bascule dans la folie et devient le Joker.', 4, 10, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/zDyT3gIeae39UgL9P6jL5Zc3zyt.jpg'),
	(12, 'La Reine des neiges II', '2019', 'Elsa, Anna, Kristoff, Olaf et Sven voyagent bien au-delà des portes d’Arendelle à la recherche de réponses sur le passé d\'Elsa. Cette dernière rencontre un Nokk – un esprit d’eau mythique prenant la forme d’un cheval - qui utilise le pouvoir de l’océan pour protéger les secrets de la forêt.', 11, 11, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/6zbuHXiuCdHZ57fZOlfUknpzCjU.jpg'),
	(13, 'Fast & Furious : Hobbs & Shaw', '2019', 'Depuis que Hobbs, fidèle agent de sécurité au service diplomatique des États-Unis, combatif mais droit, et Shaw, un homme sans foi ni loi, ancien membre de l’élite militaire britannique, se sont affrontés en 2015 dans Fast & Furious 7, les deux hommes font tout ce qu’ils peuvent pour se nuire l’un à l’autre. Mais lorsque Brixton, un anarchiste génétiquement modifié, met la main sur une arme de destruction massive après avoir battu le meilleur agent du MI6 qui se trouve être la sœur de Shaw, les deux ennemis de longue date vont devoir alors faire équipe pour faire tomber le seul adversaire capable de les anéantir.', 2, 12, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/pmm4sNfXjnhN902F3SJHgMPFtlg.jpg'),
	(14, 'Spider-Man : Far from Home', '2019', 'Peter et ses amis passent leurs vacances d’été en Europe. Mais ils n’auront pas vraiment l’occasion de se reposer puisque Peter accepte d’aider Nick Fury pour débusquer les mystérieuses créatures qui sont la cause des catastrophes naturelles qui frappent le continent.', 14, 13, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/9mnl1Qm7duOIr5t7Hx9a5d6mbbi.jpg'),
	(15, 'Clown', '2014', 'Lorsque le clown engagé pour animer l\'anniversaire de son fils leur fait faux bond, un père de famille doit prendre la relève et lui-même revêtir un déguisement de clown pour assurer le spectacle. Mais très vite, il réalise que le costume est devenu une seconde peau dont il ne pourra se débarasser. A moins d\'accomplir une mission macabre...', 13, 13, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/on210WgyhATKDnmTEjh4tk0jYB5.jpg'),
	(16, 'Le Roi Lion', '2019', 'Au fond de la savane africaine, tous les animaux célèbrent la naissance de Simba, leur futur roi. Les mois passent. Simba idolâtre son père, le roi Mufasa, qui prend à cœur de lui faire comprendre les enjeux de sa royale destinée. Mais tout le monde ne semble pas de cet avis. Scar, le frère de Mufasa, l\'ancien héritier du trône, a ses propres plans. La bataille pour la prise de contrôle de la Terre des Lions est ravagée par la trahison, la tragédie et le drame, ce qui finit par entraîner l\'exil de Simba. Avec l\'aide de deux nouveaux amis, Timon et Pumbaa, le jeune lion va devoir trouver comment grandir et reprendre ce qui lui revient de droit.', 11, 14, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/7QqLsDKe3myax9mfQf5EvJ2qk6u.jpg'),
	(17, 'Iron Man', '2008', 'Tony Stark, inventeur de génie, vendeur d\'armes et playboy milliardaire, est kidnappé. Forcé par ses ravisseurs de fabriquer une arme redoutable, il construit en secret une armure high-tech révolutionnaire qu\'il utilise pour s\'échapper. Comprenant la puissance de cette armure, il décide de l\'améliorer et de l\'utiliser pour faire régner la justice et protéger les innocents.', 12, 14, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/dMc96Rn0XutMaIYJNwkJ5yO9oTh.jpg'),
	(18, 'Iron Man 2', '2010', 'Le monde sait désormais que l\'inventeur milliardaire Tony Stark et le super-héros Iron Man ne font qu\'un. Malgré la pression du gouvernement, de la presse et du public pour qu\'il partage sa technologie avec l\'armée, Tony n\'est pas disposé à divulguer les secrets de son armure, redoutant que l\'information atterrisse dans de mauvaises mains. Avec Pepper Potts et James "Rhodey" Rhodes à ses côtés, Tony va forger de nouvelles alliances et affronter de nouvelles forces toutes-puissantes...', 12, 14, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/g9DSeSozGi4zpUyeOYZYMNmIv9O.jpg'),
	(21, 'Django Unchained', '2012', 'Dans le sud des États-Unis, deux ans avant la guerre de Sécession, le Dr King Schultz, un chasseur de primes allemand, fait l’acquisition de Django, un esclave qui peut l’aider à traquer les frères Brittle, les meurtriers qu’il recherche. Schultz promet à Django de lui rendre sa liberté lorsqu’il aura capturé les Brittle – morts ou vifs. Alors que les deux hommes pistent les dangereux criminels, Django n’oublie pas que son seul but est de retrouver Broomhilda, sa femme, dont il fut séparé à cause du commerce des esclaves… Lorsque Django et Schultz arrivent dans l’immense plantation du puissant Calvin Candie, ils éveillent les soupçons de Stephen, un esclave qui sert Candie et a toute sa confiance. Le moindre de leurs mouvements est désormais épié par une dangereuse organisation de plus en plus proche… Si Django et Schultz veulent espérer s’enfuir avec Broomhilda, ils vont devoir choisir entre l’indépendance et la solidarité, entre le sacrifice et la survie…', 6, 4, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/hodO0759IB5LbzUiiLKB50gT2UO.jpg');
/*!40000 ALTER TABLE `film` ENABLE KEYS */;

-- Listage de la structure de la table projetcine. genre
CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomgenre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Listage des données de la table projetcine.genre : ~9 rows (environ)
DELETE FROM `genre`;
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
INSERT INTO `genre` (`id`, `nomgenre`) VALUES
	(1, 'Thriller'),
	(2, 'Action'),
	(3, 'Fantastique'),
	(4, 'Crime'),
	(5, 'Comedie'),
	(6, 'Drame'),
	(10, 'Dessin Animé'),
	(11, 'Animation'),
	(12, 'Science-Fiction'),
	(13, 'Horreur'),
	(14, 'Aventure');
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Listage des données de la table projetcine.realisateur : ~5 rows (environ)
DELETE FROM `realisateur`;
/*!40000 ALTER TABLE `realisateur` DISABLE KEYS */;
INSERT INTO `realisateur` (`id`, `nomreal`, `prenomreal`, `naissancereal`, `biographie`, `urlphoto`) VALUES
	(3, 'Ford Coppola', 'Francis', '1972', 'Francis Ford Coppola (né le 7 avril 1939) est un réalisateur, producteur et scénariste américain. Il est largement reconnu comme l\'un des réalisateurs les plus célèbres et les plus influents d\'Hollywood. Il incarnait le groupe de cinéastes connu sous le nom de New Hollywood, qui comprenait George Lucas, Martin Scorsese, Robert Altman, Woody Allen et William Friedkin, qui a émergé au début des années 1970 avec des idées non conventionnelles qui ont défié le cinéma contemporain.', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/mGKkVp3l9cipPt10AqoQnwaPrfI.jpg'),
	(4, 'Tarantino', 'Quentin', '1963', 'Quentin Tarantino, né le 27 mars 1963 à Knoxville dans le Tennessee, est un réalisateur, scénariste, producteur et acteur américain. Il se fait connaître en tant que réalisateur de films indépendants avec ses deux premiers films, Reservoir Dogs (1992) et Pulp Fiction (1994) et remporte pour ce dernier la Palme d\'or à Cannes. Après un troisième film en 1997 (Jackie Brown), il effectue son retour avec les deux volets de Kill Bill (2003 et 2004). Inglourious Basterds (2009) et Django Unchained (2012) sont ses plus grands succès commerciaux internationaux. Son deuxième western, Les Huit Salopards, est sorti en fin 2015.', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/1gjcpAa99FAOWGnrUvHEXXsRs7o.jpg'),
	(5, 'Zemeckis', 'Robert', '1952', 'Robert Lee Zemeckis (né le 14 mai 1952) est un réalisateur, producteur et scénariste américain. Zemeckis est apparu pour la première fois au grand public dans les années 1980 en tant que réalisateur de la série de films comiques de voyage dans le temps "Back to the Future", ainsi que de l\'épopée d\'action/animation en direct qui a remporté un Academy Award "Who Framed Roger Rabbit" (1988). Dans les années 1990, il s\'est diversifié dans des films plus dramatiques, notamment "Forrest Gump" de 1994, pour lequel il a remporté un Academy Award du meilleur réalisateur.\n\nTraduit avec www.DeepL.com/Translator (version gratuite)', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/lPYDQ5LYNJ12rJZENtyASmVZ1Ql.jpg'),
	(6, 'Fincher', 'David', '1962', 'David Andrew Leo Fincher (né le 28 août 1962) est un réalisateur et réalisateur de vidéoclips américain. Connu pour ses thrillers sombres et élégants, tels que Seven (1995), The Game (1997), Fight Club (1999), Panic Room (2002) et Zodiac (2007), Fincher a reçu des nominations aux Oscars du meilleur réalisateur pour son 2008 le film L\'étrange histoire de Benjamin Button et son film 2010 The Social Network, qui lui a également valu le Golden Globe et le BAFTA du meilleur réalisateur.', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/wdBeQXDNbbjkIKXHeEZtQShwSDM.jpg'),
	(7, 'Nolan', 'Christopher', '1970', 'Christopher Edward Nolan (né le 30 juillet 1970) est un réalisateur, scénariste et producteur de films anglo-américains. Il est né à Westminster, Londres, en Angleterre, et possède la double nationalité britannique et américaine grâce à sa mère américaine. Il est connu pour avoir écrit et réalisé des films acclamés par la critique tels que Memento (2000), The Prestige (2006), The Dark Knight Trilogy (2005-12), Inception (2010), Interstellar (2014) et Dunkerque (2017). Nolan est le fondateur de la société de production Syncopy Films. Il collabore souvent avec sa femme, la productrice Emma Thomas, et son frère, le scénariste Jonathan Nolan.', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/xuAIuYSmsUzKlUMBFGVZaWsY3DZ.jpg'),
	(8, 'Trevorrow', 'Colin', '1976', 'Colin T. Trevorrow (US : /trəˈvɑːroʊ/ ; né le 13 septembre 1976) est un réalisateur et scénariste américain. Il a réalisé le film indépendant Safety Not Guaranteed (2012) et le film à succès Jurassic World (2015), et a également co-écrit le scénario de Jurassic World et de sa suite en 2018.', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/hzJECUTAElHjQTRciGWP6I9X2d2.jpg'),
	(9, 'Sang-Ho', 'Yeon', '1978', 'Yeon Sang-ho (née en 1978) est une réalisatrice et scénariste sud-coréenne. Il a écrit et réalisé les films d\'animation The King of Pigs (2011) et The Fake (2013), ainsi que le film d\'action Train to Busan (2016).', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/ux5voUQtKPXMpbWIR3WYAboNYAH.jpg'),
	(10, 'Phillips', 'Todd', '1970', 'Le scénariste et réalisateur américain Todd Phillips a réalisé son premier film alors qu\'il était encore étudiant à l\'université de New York et il est devenu l\'un des films d\'étudiants les plus rentables de l\'époque, obtenant même une sortie limitée en salle ; le long métrage documentaire "Hated" : GG Allin and the Murder Junkies". Il est surtout connu pour avoir réalisé les films comiques Road Trip, Old School, The Hangover et Due Date.\n\nTraduit avec www.DeepL.com/Translator (version gratuite)', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/A6FPht87DiqXzp456WjakLi2AtP.jpg'),
	(11, 'Buck', 'Chris', '1960', 'Chris Buck est un réalisateur connu pour avoir réalisé Tarzan et Surf\'s Up. Il a également travaillé comme animateur superviseur sur Home on the Range et Chicken Little.\n\nChris Buck a également travaillé chez Disney sur le long métrage d\'animation Pocahontas en 1995, où il a supervisé l\'animation de trois personnages principaux : Percy, Grand-Mère Willow et Wiggins. Buck a également participé à la conception des personnages de la superproduction animée The Little Mermaid (1989), a réalisé des animations expérimentales pour The Rescuers Down Under et Who Framed Roger Rabbit ? et a été animateur sur The Fox and the Hound.\n\nTraduit avec www.DeepL.com/Translator (version gratuite)', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/ponaYm3Xr1Pki8JVDSIzfA4NkNw.jpg'),
	(12, 'Leitch', 'David', '1969', 'David Leitch est acteur, cascadeur, écrivain, producteur, coordinateur de cascades et réalisateur. Il a joué dans Confessions of an Action Star, Tron : Legacy et The Matrix Trilogy.', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/htO4qu7yMUfZzJR9DF9iXch8ina.jpg'),
	(13, 'Watts', 'Jon', '1981', 'Jon Watts est un réalisateur, producteur et scénariste américain. Il a réalisé les films Clown and Cop Car et des épisodes de l\'Onion News Network.\n\nWatts est né et a grandi à Fountain, dans le Colorado. Il a étudié le cinéma à l\'Université de New York.\n\nAvant de réaliser des films, Watts a dirigé des publicités pour la société de production Park Pictures. Lorsqu\'il a essayé d\'obtenir le poste de réalisateur de Spider-Man : Homecoming, Watts s\'est fait tatouer Spider-Man sur la poitrine pour se faire "remarquer sur le terrain".\n\nTraduit avec www.DeepL.com/Translator (version gratuite)', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/fkXChMX6CUXY1yOxBehAzvaTCl7.jpg'),
	(14, 'Favreau', 'Jon', '1966', 'Jonathan Favreau (né le 19 octobre 1966) est un acteur, réalisateur, producteur et scénariste américain. En tant qu\'acteur, il est connu pour des rôles dans des films tels que Rudy (1993), Swingers (1996) (qu\'il a également écrit), Very Bad Things (1998), Daredevil (2003), The Break-Up (2006), Couples Retreat (2009) et Chef (2014) (qu\'il a également écrit et réalisé).', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/8MtRRnEHaBSw8Ztdl8saXiw1egP.jpg');
/*!40000 ALTER TABLE `realisateur` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
