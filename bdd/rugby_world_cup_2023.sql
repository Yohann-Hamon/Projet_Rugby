-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 29 juin 2023 à 15:50
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rugby_world_cup_2023`
--

-- --------------------------------------------------------

--
-- Structure de la table `meetings`
--

DROP TABLE IF EXISTS `meetings`;
CREATE TABLE IF NOT EXISTS `meetings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `datetime` datetime NOT NULL,
  `team_1` int NOT NULL,
  `team_2` int NOT NULL,
  `place` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `equipe_1` (`team_1`) USING BTREE,
  KEY `equipe_2` (`team_2`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `meetings`
--

INSERT INTO `meetings` (`id`, `datetime`, `team_1`, `team_2`, `place`, `score`) VALUES
(1, '2023-09-08 21:00:00', 1, 4, 'Stade Geoffroy-Guichard, Saint-Étienne', '--'),
(2, '2023-09-09 13:00:00', 2, 3, 'Stade de Bordeaux, Bordeaux', '--'),
(3, '2023-09-14 21:00:00', 1, 5, 'Stadium de Toulouse, Toulouse', '--'),
(4, '2023-09-15 21:00:00', 4, 3, 'Stade de Marseille, Marseille', '--'),
(5, '2023-09-20 17:45:00', 2, 5, 'Stade Pierre-Mauroy, Lille', '--'),
(6, '2023-09-21 21:00:00', 1, 3, 'Stade de Nice, Nice', '--'),
(7, '2023-09-27 17:45:00', 5, 3, 'Stade de la Beaujoire, Nantes', '--'),
(8, '2023-09-29 21:00:00', 4, 2, '\'\'', '--'),
(9, '2023-10-05 21:00:00', 4, 5, '\'\'', '--'),
(10, '2023-10-06 21:00:00', 1, 2, '\'\'', '--');

-- --------------------------------------------------------

--
-- Structure de la table `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `id` int NOT NULL AUTO_INCREMENT,
  `position` varchar(255) NOT NULL,
  `country_id` int NOT NULL,
  `club` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `joueurs_ibfk_1` (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `players`
--

INSERT INTO `players` (`id`, `position`, `country_id`, `club`, `age`, `height`, `weight`, `lastname`, `firstname`, `picture`) VALUES
(0, 'Pilier', 2, 'Zebre', 25, 1.89, 135, 'Neculai', 'Ion', ''),
(1, 'Talonneur', 1, 'Castres', 26, 1.84, 107, 'Barlot', 'Gaetan', 'https://medias.lequipe.fr/img-sportif-rugby/9917/100'),
(2, 'Talonneur', 1, 'Toulon', 24, 1.84, 108, 'Baubigny', 'Teddy', 'https://medias.lequipe.fr/img-sportif-rugby/9059/100'),
(3, 'Talonneur', 1, 'Toulouse', 27, 1.81, 95, 'Marchand', 'Julien', 'https://medias.lequipe.fr/img-sportif-rugby/7657/100'),
(4, 'Talonneur', 1, 'Toulouse', 26, 1.84, 124, 'Mauvaka', 'Peato', 'https://medias.lequipe.fr/img-sportif-rugby/9130/100'),
(5, 'Pilier', 1, 'Toulouse', 29, 1.8, 110, 'Aldegheri', 'Dorian', 'https://medias.lequipe.fr/img-sportif-rugby/7196/100'),
(6, 'Pilier', 1, 'La Rochelle', 33, 1.97, 145, 'Atonio', 'Uini', 'https://medias.lequipe.fr/img-sportif-rugby/6161/100'),
(7, 'Pilier', 1, 'Toulouse', 29, 1.82, 115, 'Baille', 'Cyril', 'https://medias.lequipe.fr/img-sportif-rugby/6874/100'),
(8, 'Pilier', 1, 'Stade Français', 26, 1.82, 110, 'Castets', 'Clément', 'https://medias.lequipe.fr/img-sportif-rugby/8644/100'),
(9, 'pilier', 1, 'Racing 92', 23, 1.85, 116, 'Falatea', 'Sipili', 'https://medias.lequipe.fr/img-sportif-rugby/9838/100'),
(10, 'pilier', 1, 'Montpellier Hérault Rugby', 27, 1.84, 118, 'Haouas', 'Mohammed', 'https://medias.lequipe.fr/img-sportif-rugby/8731/100'),
(11, 'pilier', 1, 'Union Bordeaux Bègles', 23, 1.82, 118, 'Wardi', 'Réda', 'https://medias.lequipe.fr/img-sportif-rugby/8295/100'),
(12, 'deuxième ligne', 1, 'Stade Rochelais', 22, 1.78, 108, 'Chalureau', 'Bastien', 'https://medias.lequipe.fr/img-sportif-rugby/7560/100'),
(13, 'deuxième ligne', 1, 'Racing 92', 23, 1.96, 120, 'Flament', 'Thibaud', 'https://medias.lequipe.fr/img-sportif-rugby/11095/100'),
(14, 'deuxième ligne', 1, 'Stade Rochelais', 23, 1.9, 112, 'Jolmes', 'Thomas', 'https://medias.lequipe.fr/img-sportif-rugby/8521/100'),
(15, 'deuxième ligne', 1, 'Stade Rochelais', 26, 1.95, 118, 'Lavault', 'Thomas', 'https://medias.lequipe.fr/img-sportif-rugby/9982/100'),
(16, 'deuxième ligne', 1, 'Racing 92', 28, 2.02, 126, 'Taofifenua', 'Romain', 'https://medias.lequipe.fr/img-sportif-rugby/11500000000005190/100'),
(17, 'deuxième ligne', 1, 'Montpellier Hérault Rugby', 29, 2.01, 126, 'Willemse', 'Paul', 'https://medias.lequipe.fr/img-sportif-rugby/7506/100'),
(18, 'troisième ligne', 1, 'Stade Rochelais', 25, 1.92, 113, 'Alldritt', 'Grégory', 'https://medias.lequipe.fr/img-sportif-rugby/9827/100'),
(19, 'Troisième ligne', 1, 'Racing 92', 26, 1.92, 109, 'Bécognée', 'Alexandre', 'https://medias.lequipe.fr/img-sportif-rugby/9482/100'),
(20, 'Troisième ligne', 1, 'Union Bordeaux Bègles', 23, 1.95, 115, 'Boudehent', 'Paul', 'https://medias.lequipe.fr/img-sportif-rugby/10607/100'),
(21, 'Troisième ligne', 1, 'Lyon Olympique Universitaire', 24, 1.9, 105, 'Cretin', 'Dylan', 'https://medias.lequipe.fr/img-sportif-rugby/9001/100'),
(22, 'Troisième ligne', 1, 'Stade Toulousain', 28, 1.93, 102, 'Cros', 'François', 'https://medias.lequipe.fr/img-sportif-rugby/8445/100'),
(23, 'Troisième ligne', 1, 'Castres Olympique', 25, 1.93, 103, 'Jelonch', 'Anthony', 'https://medias.lequipe.fr/img-sportif-rugby/8301/100'),
(24, 'Troisième ligne', 1, 'Stade Français Paris', 28, 1.91, 110, 'Macalou', 'Sekou', 'https://medias.lequipe.fr/img-sportif-rugby/7598/100'),
(25, 'Troisième ligne', 1, 'Rugby Club Toulonnais', 28, 1.91, 108, 'Ollivon', 'Charles', 'https://medias.lequipe.fr/img-sportif-rugby/6949/100'),
(26, 'Troisième ligne', 1, 'Union Bordeaux Bègles', 25, 1.96, 112, 'Roumat', 'Alexandre', 'https://medias.lequipe.fr/img-sportif-rugby/8049/100'),
(27, 'Demi de mêlée', 1, 'Lyon OU', 25, 1.73, 80, 'Couilloud', 'Baptiste', 'https://medias.lequipe.fr/img-sportif-rugby/8519/100'),
(28, 'Demi de mêlée', 1, 'Stade Toulousain', 26, 1.74, 85, 'Dupont', 'Antoine', 'https://medias.lequipe.fr/img-sportif-rugby/7776/100'),
(29, 'ouverture', 1, 'RC Toulon', 21, 1.75, 75, 'Le Garrec', 'Nolann', 'https://medias.lequipe.fr/img-sportif-rugby/11309/100'),
(30, 'Demi de mêlée', 1, 'Union Bordeaux Bègles', 28, 1.78, 80, 'Lucu', 'Maxime', 'https://medias.lequipe.fr/img-sportif-rugby/7624/100'),
(31, 'Demi de mêlée', 1, 'Stade Rochelais', 27, 1.78, 83, 'Serin', 'Baptiste', 'https://medias.lequipe.fr/img-sportif-rugby/6929/100'),
(32, 'ouverture', 1, 'Section Paloise', 24, 1.81, 88, 'Hastoy', 'Antoine', 'https://medias.lequipe.fr/img-sportif-rugby/8536/100'),
(33, 'ouverture', 1, 'Union Bordeaux Bègles', 23, 1.82, 89, 'Jalibert', 'Matthieu', 'https://medias.lequipe.fr/img-sportif-rugby/9569/100'),
(34, 'ouverture', 1, 'Stade Toulousain', 23, 1.82, 89, 'Ntamack', 'Romain', 'https://medias.lequipe.fr/img-sportif-rugby/9577/100'),
(35, 'Centre', 1, 'ASM Clermont Auvergne', 24, 1.85, 95, 'Barassi', 'Pierre-Louis', 'https://medias.lequipe.fr/img-sportif-rugby/9004/100'),
(36, 'Centre', 1, 'Stade Français', 28, 1.84, 105, 'Danty', 'Jonathan', 'https://medias.lequipe.fr/img-sportif-rugby/6174/100'),
(37, 'Centre', 1, 'Union Bordeaux Bègles', 23, 1.83, 94, 'Delbouis', 'Julien', 'https://medias.lequipe.fr/img-sportif-rugby/9447/100'),
(38, 'Centre', 1, 'Lyon OU', 21, 1.87, 98, 'Dumortier', 'Ethan', 'https://medias.lequipe.fr/img-sportif-rugby/10703/100'),
(39, 'Centre', 1, 'Racing 92', 28, 1.88, 97, 'Fickou', 'Gaël', 'https://medias.lequipe.fr/img-sportif-rugby/6636/100'),
(40, 'Ailier', 1, 'FC Grenoble', 21, 1.77, 83, 'Gailleton', 'Emilien', 'https://medias.lequipe.fr/img-sportif-rugby/11955/100'),
(41, 'Ailier', 1, 'Union Bordeaux Bègles', 21, 1.87, 98, 'Moefana', 'Yoram', 'https://medias.lequipe.fr/img-sportif-rugby/10137/100'),
(42, 'Ailier', 1, 'Stade Rochelais', 21, 1.82, 88, 'Bielle-Biarrey', 'Louis', 'https://medias.lequipe.fr/img-sportif-rugby/12281/100'),
(43, 'Arrière', 1, 'Stade Toulousain', 22, 1.78, 81, 'Lebel', 'Matthis', 'https://medias.lequipe.fr/img-sportif-rugby/9983/100'),
(44, 'Ailier', 1, 'ASM Clermont Auvergne', 25, 1.86, 90, 'Penaud', 'Damian', 'https://medias.lequipe.fr/img-sportif-rugby/8514/100'),
(45, 'Ailier', 1, 'RC Toulon', 26, 1.75, 85, 'Villière', 'Gabin', 'https://medias.lequipe.fr/img-sportif-rugby/10740/100'),
(46, 'Arrière', 1, 'Section Paloise', 23, 1.76, 80, 'Buros', 'Romain', 'https://medias.lequipe.fr/img-sportif-rugby/8406/100'),
(47, 'Arrière', 1, 'RC Toulon', 22, 1.86, 89, 'Jaminet', 'Melvyn', 'https://medias.lequipe.fr/img-sportif-rugby/11225/100'),
(48, 'Arrière', 1, 'Stade Toulousain', 26, 1.86, 86, 'Ramos', 'Thomas', 'https://medias.lequipe.fr/img-sportif-rugby/7403/100'),
(49, 'Talonneur', 3, 'Windhoek', 26, 1.79, 98, 'Obert', 'Nortje', 'https://medias.lequipe.fr/img-sportif-rugby/10871/110'),
(50, 'Talonneur', 3, 'Cheetahs', 28, 1.83, 101, 'Louis', 'Van der Westhuizen', 'https://medias.lequipe.fr/img-sportif-rugby/8064/100'),
(51, 'Talonneur', 3, 'Bayonne', 35, 1.75, 106, 'Torsten', 'Van Jaarsveld', 'https://medias.lequipe.fr/img-sportif-rugby/8063/100'),
(52, 'Pilier', 3, '', 35, 1.87, 122, 'Johannes', 'Aranos Coetzee', 'https://medias.lequipe.fr/img-sportif-rugby/5809/110'),
(53, 'Pilier', 3, 'Wanderers', 31, 185, 136, 'A.J.', 'De Klerk', 'http://medias.lequipe.fr/img-sportif-rugby/8066/110'),
(54, 'Pilier', 3, 'Windhoek', 25, 1.82, 100, 'Rademeyer', 'Andre', 'https://medias.lequipe.fr/img-sportif-rugby/10872/110'),
(55, 'Pilier', 3, 'Windhoek', 30, 1.77, 110, 'Sethie', 'Des', 'https://medias.lequipe.fr/img-sportif-rugby/10874/110'),
(56, 'Pilier', 3, 'Leopards', 26, 1.86, 111, 'Theron', 'Nelius', 'https://medias.lequipe.fr/img-sportif-rugby/10873/110'),
(57, '2ème ligne', 3, 'Leopards', 28, 1.9, 110, 'Retief', 'Johan', 'https://medias.lequipe.fr/img-sportif-rugby/10875/110'),
(58, '2ème ligne', 3, 'Mautauban', 32, 2, 110, 'Uanivi', 'Tjiuee', 'https://medias.lequipe.fr/img-sportif-rugby/7077/100'),
(59, '3ème ligne', 3, 'Windhoek', 27, 1.9, 93, 'Booysen', 'Adriaan', ''),
(60, '3ème ligne', 3, 'Windhoek', 34, 1.78, 95, 'Forbes', 'Thomasau', 'https://medias.lequipe.fr/img-sportif-rugby/10876/110'),
(61, 'Pilier', 2, 'Trévise', 31, 1.83, 119, 'Ferrari', 'Simone', 'https://medias.lequipe.fr/img-sportif-rugby/8235/100'),
(62, 'Arrière', 2, 'Stade Toulousain', 24, 1.77, 68, 'Capuozzo', 'Ange', 'https://medias.lequipe.fr/img-sportif-rugby/10695/100'),
(63, 'Talonneur', 2, 'Zebre', 32, 1.83, 104, 'Bigi', 'Lucas', 'https://medias.lequipe.fr/img-sportif-rugby/8234/100'),
(64, 'Talonneur', 2, 'Trévise', 22, 1.83, 106, 'Lucchesi', 'Gianmarco', 'https://medias.lequipe.fr/img-sportif-rugby/11176/100'),
(65, 'Talonneur', 2, 'Trévise', 27, 1.82, 103, 'Nicotera', 'Giacomo', 'https://medias.lequipe.fr/img-sportif-rugby/12303/100'),
(66, 'Pilier', 2, 'Brive', 21, 1.84, 118, 'Ceccarelli', 'Pietro', 'https://medias.lequipe.fr/img-sportif-rugby/7447/100'),
(67, '3ème ligne', 3, 'Windhoek', 25, 1.86, 98, 'Gaoseb', 'Prince', 'https://medias.lequipe.fr/img-sportif-rugby/10878/110'),
(68, '3ème ligne', 3, 'Windhoek', 28, 1.96, 98, 'Wilhelm Katjijeko', 'Muharua', 'https://medias.lequipe.fr/img-sportif-rugby/10877/110'),
(70, '3ème ligne', 3, 'Windhoek', 37, 1.83, 92, 'Kitshoff', 'Ruan', 'https://medias.lequipe.fr/img-sportif-rugby/6014/110'),
(71, '3ème ligne', 3, 'Valence-Romans', 40, 1.91, 113, 'Van Lill', 'Pieter-Jan', 'https://medias.lequipe.fr/img-sportif-rugby/6021/110'),
(72, 'Demi de mêlée', 3, 'Windhoek', 37, 1.8, 85, 'Jantjies', 'Eugene', 'https://medias.lequipe.fr/img-sportif-rugby/4274/110'),
(73, 'Pilier', 2, 'Zebre', 25, 1.81, 108, 'Fischetti', 'Danilo', 'https://medias.lequipe.fr/img-sportif-rugby/11028/100'),
(74, 'Pilier', 2, 'Trévise', 25, 1.8, 116, 'Nemer', 'Ivan', 'https://medias.lequipe.fr/img-sportif-rugby/11443/100'),
(75, '2ème ligne', 2, 'Trévise', 25, 1.95, 110, 'Cannone', 'Niccolo', 'https://medias.lequipe.fr/img-sportif-rugby/11099/100'),
(76, '2ème ligne', 2, 'Massy', 32, 1.94, 112, 'Fuser', 'Marco', 'https://medias.lequipe.fr/img-sportif-rugby/6576/100'),
(77, '2ème ligne', 2, 'Trévise', 29, 1.98, 108, 'Ruzza', 'Federico', 'https://medias.lequipe.fr/img-sportif-rugby/8397/100'),
(78, 'Demi de mêlée', 3, 'Boland kavaliers', 28, 1.64, 68, 'Stevens', 'Damian', 'https://medias.lequipe.fr/img-sportif-rugby/8061/110'),
(79, 'Ouverture', 3, 'Baia Mare', 29, 1.75, 80, 'Helarius', 'Kisting', 'https://medias.lequipe.fr/img-sportif-rugby/10881/110'),
(80, 'Ouverture', 3, 'Windhoek', 26, 1.76, 75, 'Loubser', 'Cliven', 'https://medias.lequipe.fr/img-sportif-rugby/10880/110'),
(81, '3/4 Centre', 3, 'Windhoek', 37, 1.87, 98, 'De La Harpe', 'Darryl', 'https://medias.lequipe.fr/img-sportif-rugby/5996/110'),
(82, '3/4 Centre', 3, 'Colomiers', 32, 1.84, 92, 'Deysel', 'Johan', 'https://medias.lequipe.fr/img-sportif-rugby/8060/100'),
(83, '3/4 Centre', 3, 'Windhoek', 28, 1.8, 90, 'Newman', 'Justin', 'https://medias.lequipe.fr/img-sportif-rugby/10882/110'),
(84, '3/4 aile', 3, 'Windhoek', 27, 1.78, 90, 'Du Toit', 'Janry', 'https://medias.lequipe.fr/img-sportif-rugby/10884/110'),
(85, '3/4 aile', 3, 'Windhoek', 32, 1.88, 92, 'Greyling', 'Johan Corné', 'https://medias.lequipe.fr/img-sportif-rugby/8059/110'),
(86, '3/4 aile', 3, 'Windhoek', 30, 1.86, 84, 'Walters', 'Peter John', 'https://medias.lequipe.fr/img-sportif-rugby/10885/110'),
(87, 'Arrière', 3, 'Windhoek', 25, 1.85, 87, 'Plato', 'Chad', 'https://medias.lequipe.fr/img-sportif-rugby/10883/110'),
(88, 'Arrière', 3, 'Wanderers', 32, 1.8, 80, 'Tromp', 'Johan', 'http://medias.lequipe.fr/img-sportif-rugby/8056/110'),
(89, '2ème ligne', 2, 'Calvisano', 26, 2, 125, 'Venditti', 'Gabriele', 'https://medias.lequipe.fr/img-sportif-rugby/11048/110'),
(90, '3ème ligne', 2, 'Zèbre', 22, 1.9, 103, 'Andreani', 'Luca', 'https://medias.lequipe.fr/img-sportif-rugby/12189/100'),
(91, '3ème ligne', 2, 'Trévise', 22, 1.9, 102, 'Cannone', 'Lorenzo', 'https://medias.lequipe.fr/img-sportif-rugby/12192/100'),
(92, '3ème ligne', 2, 'Trévise', 29, 1.91, 102, 'Halafihi', 'Toa', 'https://medias.lequipe.fr/img-sportif-rugby/9746/100'),
(93, '3ème ligne', 2, 'Trévise', 25, 1.88, 103, 'Lamaro', 'Michele', 'https://medias.lequipe.fr/img-sportif-rugby/10989/100'),
(94, '3ème ligne', 2, 'Trévise', 29, 1.94, 110, 'Negri', 'Sebastian Luke', 'https://medias.lequipe.fr/img-sportif-rugby/8632/100'),
(95, '3ème ligne', 2, 'Trévise', 27, 1.93, 98, 'Pettinelli', 'Giovanni', 'https://medias.lequipe.fr/img-sportif-rugby/10242/100'),
(96, '3ème ligne', 2, 'Zebre', 30, 1.96, 121, 'Sisi', 'David', 'https://medias.lequipe.fr/img-sportif-rugby/6440/100'),
(97, '3ème ligne', 2, 'Trévise', 23, 1.88, 100, 'Zuliani', 'Manuel', 'https://medias.lequipe.fr/img-sportif-rugby/11177/100'),
(98, 'Demi de mêlée', 2, 'Calvisano', 22, 1.74, 79, 'Albanese', 'Manfredi', 'https://medias.lequipe.fr/img-sportif-rugby/12427/100'),
(99, 'Demi de mêlée', 2, 'Zebre', 24, 1.83, 85, 'Fusco', 'Alessandro', 'https://medias.lequipe.fr/img-sportif-rugby/11447/100'),
(100, 'Demi de mêlée', 2, 'Trévise', 21, 1.74, 83, 'Garbisi', 'Alessandro', 'https://medias.lequipe.fr/img-sportif-rugby/12277/100'),
(101, 'Demi de mêlée', 2, 'Gloucester', 22, 1.73, 73, 'Varney', 'Stephen', 'https://medias.lequipe.fr/img-sportif-rugby/11359/100'),
(102, 'Demi d\'Ouverture', 2, 'Harlequins', 30, 1.83, 92, 'Allan', 'Tommaso', 'https://medias.lequipe.fr/img-sportif-rugby/7207/100'),
(103, 'Demi d\'Ouverture', 2, 'Montpellier', 23, 1.83, 93, 'Garbisi', 'Paolo', 'https://medias.lequipe.fr/img-sportif-rugby/11323/100'),
(104, 'Demi d\'Ouverture', 2, 'Trévise', 21, 1.88, 88, 'Marin', 'Leonardo', 'https://medias.lequipe.fr/img-sportif-rugby/12194/100'),
(105, '3/4 Centre', 2, 'Trévise', 31, 1.89, 99, 'Brex', 'Ignacio', 'https://medias.lequipe.fr/img-sportif-rugby/9636/100'),
(106, '3/4 Centre', 2, 'Zebre', 28, 1.86, 103, 'Lucchin', 'Enrico', 'https://medias.lequipe.fr/img-sportif-rugby/11029/110'),
(107, '3/4 Centre', 2, 'Trévise', 21, 1.84, 110, 'Menoncello', 'Tommaso', 'https://medias.lequipe.fr/img-sportif-rugby/12276/100'),
(108, '3/4 Centre', 2, 'Trévise', 32, 1.83, 100, 'Morisi', 'Luca', 'https://medias.lequipe.fr/img-sportif-rugby/6446/100'),
(109, '3/4 Aile', 2, 'Zebre', 27, 1.78, 80, 'Bruno', 'Pierre', 'https://medias.lequipe.fr/img-sportif-rugby/11038/100'),
(110, '3/4 Aile', 2, 'Trévise', 29, 1.8, 93, 'Ioane', 'Monty', 'https://medias.lequipe.fr/img-sportif-rugby/7040/100'),
(111, 'Talonneur', 4, 'Wellington Hurricanes', 26, 1.77, 108, 'Aumua', 'Asafo', 'https://medias.lequipe.fr/img-sportif-rugby/9807/110'),
(112, 'Talonneur', 4, 'Wellington Hurricanes', 36, 1.84, 110, 'Coles', 'Dane', 'https://medias.lequipe.fr/img-sportif-rugby/6880/100'),
(113, 'Talonneur', 4, 'Chiefs', 26, 1.83, 115, 'Taukei’aho', 'Samisoni', ' '),
(114, 'Talonneur', 4, 'Crusaders', 32, 1.83, 106, 'Taylor', 'Codie', 'https://medias.lequipe.fr/img-sportif-rugby/7934/100'),
(115, 'Pilier', 4, 'Crusaders', 31, 1.83, 115, 'Bower', 'George', ''),
(116, 'Pilier', 4, 'Otago Highlanders', 25, 1.9, 122, 'De Groot', 'Ethan', ''),
(117, 'Pilier', 4, 'Crusaders', 32, 1.84, 116, 'Laulala', 'Nepo', 'https://medias.lequipe.fr/img-sportif-rugby/7928/100'),
(118, 'Arrière', 2, 'Trévise', 30, 1.91, 100, 'Padovani', 'Edoardo', 'https://medias.lequipe.fr/img-sportif-rugby/8395/100'),
(125, 'Pilier', 4, 'Otago Highlanders', 27, 1.92, 127, 'Laumax', 'Tyrel', 'https://medias.lequipe.fr/img-sportif-rugby/10404/100'),
(126, 'Pilier', 4, 'Crusaders', 23, 1, 1, 'Newell', 'Fletcher', ''),
(127, 'Pilier', 4, 'Chiefs', 27, 1.89, 111, 'Ross', 'Aidan', '');

-- --------------------------------------------------------

--
-- Structure de la table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `id` int NOT NULL AUTO_INCREMENT,
  `emblem` varchar(255) NOT NULL,
  `world_rank` int NOT NULL,
  `country` varchar(255) NOT NULL,
  `pool` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `teams`
--

INSERT INTO `teams` (`id`, `emblem`, `world_rank`, `country`, `pool`) VALUES
(1, 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Flag_of_France_%281794%E2%80%931815%2C_1830%E2%80%931974%2C_2020%E2%80%93present%29.svg/langfr-225px-Flag_of_France_%281794%E2%80%931815%2C_1830%E2%80%931974%2C_2020%E2%80%93present%29.svg.png', 2, 'France', 'A'),
(2, 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Flag_of_Italy_%282003%E2%80%932006%29.svg/220px-Flag_of_Italy_%282003%E2%80%932006%29.svg.png', 14, 'Italie', 'A'),
(3, 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Namibia.svg/langfr-225px-Flag_of_Namibia.svg.png', 21, 'Namibie', 'A'),
(4, 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Flag_of_New_Zealand.svg/250px-Flag_of_New_Zealand.svg.png', 3, 'Nouvelle-Zélande', 'A'),
(5, 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Uruguay.svg/langfr-225px-Flag_of_Uruguay.svg.png', 17, 'Uruguay', 'A'),
(6, 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Flag_of_South_Africa.svg/langfr-225px-Flag_of_South_Africa.svg.png', 4, 'Afrique du Sud', 'B'),
(7, 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Flag_of_Scotland.svg/langfr-225px-Flag_of_Scotland.svg.png', 5, 'Ecosse', 'B'),
(8, 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Flag_of_Ireland.svg/langfr-225px-Flag_of_Ireland.svg.png', 1, 'Irlande', 'B'),
(9, 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flag_of_Romania.svg/langfr-225px-Flag_of_Romania.svg.png', 19, 'Roumanie', 'B'),
(10, 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Tonga.svg/1280px-Flag_of_Tonga.svg.png', 15, 'Tonga', 'B'),
(11, 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Flag_of_Australia_%28converted%29.svg/langfr-225px-Flag_of_Australia_%28converted%29.svg.png', 7, 'Australie', 'C'),
(12, 'https://www.larousse.fr/encyclopedie/data/images/1009491-Drapeau_des_%C3%AEles_Fidji.jpg', 13, 'Fidji', 'C'),
(13, 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Flag_of_Wales.svg/langfr-225px-Flag_of_Wales.svg.png', 9, 'Pays de Galles', 'C'),
(14, 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/langfr-225px-Flag_of_Georgia.svg.png', 11, 'Géorgie', 'C'),
(15, 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Portugal.svg/langfr-225px-Flag_of_Portugal.svg.png', 16, 'Portugal', 'C'),
(16, 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Flag_of_the_United_Kingdom_%283-5%29.svg/langfr-225px-Flag_of_the_United_Kingdom_%283-5%29.svg.png', 6, 'Angleterre', 'D'),
(17, 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Flag_of_Argentina.svg/langfr-225px-Flag_of_Argentina.svg.png', 8, 'Argentine', 'D'),
(18, 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Flag_of_Chile.svg/langfr-225px-Flag_of_Chile.svg.png', 22, 'Chili', 'D'),
(19, 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Flag_of_Japan.svg/langfr-225px-Flag_of_Japan.svg.png', 10, 'Japon', 'D'),
(20, 'https://upload.wikimedia.org/wikipedia/commons/3/31/Flag_of_Samoa.svg', 12, 'Samoa', 'D');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `mail`, `password`, `username`) VALUES
(4, 'vivien24@gmail.com', 'vivi', 'babayaga'),
(5, 'vivi@gmail.com', 'vivi', 'vivi'),
(6, 'vivi@gmail.com', 'vivi', 'Vivounet'),
(7, 'v@gmail.com', 'vv', 'vv'),
(8, 'vivi', '$2y$10$BGc1ZDsC/itBSdazQNWaS.mOwXGEb2S/qkxlpA.1.i5.r3H0sAW4S', 'vivi'),
(9, 'vovo', '$2y$10$wQlcU3IfrQvzD93nzRS93.tykKO6s0qSr.MoCX/8ziWGzZdsWdsoK', 'vovo'),
(10, 'vovo', '$2y$10$2dJEBktECymFJThQ73Dcaukb.u4IqghCKF.KY68lp5nIB1Gb31kJK', 'vovo'),
(11, 'vivian', '$2y$10$zWNZkll.eGiP2tx.VfdMG.VUdpWPtFUgPV4QVLmNtT7.rzHRRGfJm', 'vivian'),
(12, 'vivi', '$2y$10$wtFelBf7Cq/TvsNt7DtEcO.uUgOPklU7AdmjLmb3bhKJAoUThuxa.', 'vivi'),
(13, 'vava', '$2y$10$8iPUb4nzpNlh4IlvcJGfIOdM6wQxKq8IvBhC1O0w6KHctbKUCsAWa', 'vava'),
(14, 'vuvu', '$2y$10$lVZsdAw1b67FxzElCDMPferJH0ZHMYh6AIvfEuTGEAiAzpgTv98cq', 'vuvu'),
(15, 'vuvu', '$2y$10$O0KdAkkgVDkq54AvKRFR0eLzM71q20qTWAFiEfHDzpKJGxPuZnfMS', 'vuvu');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `meetings`
--
ALTER TABLE `meetings`
  ADD CONSTRAINT `meetings_ibfk_1` FOREIGN KEY (`team_1`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `meetings_ibfk_2` FOREIGN KEY (`team_2`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
