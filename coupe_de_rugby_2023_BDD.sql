-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 15 mai 2023 à 13:07
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
-- Base de données : `coupe_de_rugby_2023`
--

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `id` int NOT NULL AUTO_INCREMENT,
  `embleme` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Classement_Mondial` int NOT NULL,
  `Pays` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`id`, `embleme`, `Classement_Mondial`, `Pays`) VALUES
(1, 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Flag_of_France_%281794%E2%80%931815%2C_1830%E2%80%931974%2C_2020%E2%80%93present%29.svg/langfr-225px-Flag_of_France_%281794%E2%80%931815%2C_1830%E2%80%931974%2C_2020%E2%80%93present%29.svg.png', 2, 'France'),
(2, 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Flag_of_New_Zealand.svg/250px-Flag_of_New_Zealand.svg.png', 3, 'Nouvelle-Zélande'),
(3, 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Flag_of_Italy_%282003%E2%80%932006%29.svg/220px-Flag_of_Italy_%282003%E2%80%932006%29.svg.png', 14, 'Italie'),
(4, 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Namibia.svg/langfr-225px-Flag_of_Namibia.svg.png', 21, 'Namibie'),
(5, 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Uruguay.svg/langfr-225px-Flag_of_Uruguay.svg.png', 17, 'Uruguay'),
(6, 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Flag_of_South_Africa.svg/langfr-225px-Flag_of_South_Africa.svg.png', 4, 'Afrique du Sud'),
(7, 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Flag_of_Scotland.svg/langfr-225px-Flag_of_Scotland.svg.png', 5, 'Ecosse'),
(8, 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Flag_of_Ireland.svg/langfr-225px-Flag_of_Ireland.svg.png', 1, 'Irlande'),
(9, 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flag_of_Romania.svg/langfr-225px-Flag_of_Romania.svg.png', 19, 'Roumanie'),
(10, 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Tonga.svg/1280px-Flag_of_Tonga.svg.png', 15, 'Tonga'),
(11, 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Flag_of_Australia_%28converted%29.svg/langfr-225px-Flag_of_Australia_%28converted%29.svg.png', 7, 'Australie'),
(12, 'https://www.larousse.fr/encyclopedie/data/images/1009491-Drapeau_des_%C3%AEles_Fidji.jpg', 13, 'Fidji'),
(13, 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Flag_of_Wales.svg/langfr-225px-Flag_of_Wales.svg.png', 9, 'Pays de Galles'),
(14, 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/langfr-225px-Flag_of_Georgia.svg.png', 11, 'Géorgie'),
(15, 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Portugal.svg/langfr-225px-Flag_of_Portugal.svg.png', 16, 'Portugal'),
(16, 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Flag_of_the_United_Kingdom_%283-5%29.svg/langfr-225px-Flag_of_the_United_Kingdom_%283-5%29.svg.png', 6, 'Angleterre'),
(17, 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Flag_of_Argentina.svg/langfr-225px-Flag_of_Argentina.svg.png', 8, 'Argentine'),
(18, 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Flag_of_Chile.svg/langfr-225px-Flag_of_Chile.svg.png', 22, 'Chili'),
(19, 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Flag_of_Japan.svg/langfr-225px-Flag_of_Japan.svg.png', 10, 'Japon'),
(20, 'https://upload.wikimedia.org/wikipedia/commons/3/31/Flag_of_Samoa.svg', 12, 'Samoa');

-- --------------------------------------------------------

--
-- Structure de la table `joueurs`
--

DROP TABLE IF EXISTS `joueurs`;
CREATE TABLE IF NOT EXISTS `joueurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `poste` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pays_id` int NOT NULL,
  `club` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `age` int NOT NULL,
  `taille` float NOT NULL,
  `poids` float NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prenom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `joueurs_ibfk_1` (`pays_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `joueurs`
--

INSERT INTO `joueurs` (`id`, `poste`, `pays_id`, `club`, `age`, `taille`, `poids`, `nom`, `prenom`, `photo`) VALUES
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
(49, 'Talonneur', 2, 'Wellington Hurricanes', 25, 1.77, 108, 'Aumua', 'Asafo', 'https://medias.lequipe.fr/img-sportif-rugby/9807/110');

-- --------------------------------------------------------

--
-- Structure de la table `rencontre`
--

DROP TABLE IF EXISTS `rencontre`;
CREATE TABLE IF NOT EXISTS `rencontre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Horaire` datetime NOT NULL,
  `Equipe_1` int NOT NULL,
  `Equipe_2` int NOT NULL,
  `lieu` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Equipe_1` (`Equipe_1`),
  KEY `Equipe_2` (`Equipe_2`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `rencontre`
--

INSERT INTO `rencontre` (`id`, `Horaire`, `Equipe_1`, `Equipe_2`, `lieu`) VALUES
(1, '2023-09-08 21:00:00', 1, 2, 'Stade Geoffroy-Guichard, Saint-Étienne'),
(2, '2023-09-09 13:00:00', 3, 4, 'Stade de Bordeaux, Bordeaux'),
(3, '2023-09-14 21:00:00', 1, 5, 'Stadium de Toulouse, Toulouse'),
(4, '2023-09-15 21:00:00', 2, 4, 'Stade de Marseille, Marseille'),
(5, '2023-09-20 17:45:00', 3, 5, 'Stade Pierre-Mauroy, Lille'),
(6, '2023-09-21 21:00:00', 1, 4, 'Stade de Nice, Nice'),
(7, '2023-09-27 17:45:00', 5, 4, 'Stade de la Beaujoire, Nantes'),
(8, '2023-09-29 21:00:00', 2, 3, ''),
(9, '2023-10-05 21:00:00', 2, 5, ''),
(10, '2023-10-06 21:00:00', 1, 3, '');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`email`, `password`, `id`, `pseudo`) VALUES
('hamon.yohann0416@gmail.com', '$2y$10$N7N.dOj4xFU/TomjCe7dw.6Ch3kwlA.1X5SZPSip2zJfAUPk4sJGi', 1, 'admin1'),
('test@test', '$2y$10$wPGDcOG9toy6NuGvIpDmHOlMjPa4iOVd6QG0NhfwBFZ97k/qMWH7S', 3, 'test');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `joueurs`
--
ALTER TABLE `joueurs`
  ADD CONSTRAINT `joueurs_ibfk_1` FOREIGN KEY (`pays_id`) REFERENCES `equipe` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `rencontre`
--
ALTER TABLE `rencontre`
  ADD CONSTRAINT `rencontre_ibfk_1` FOREIGN KEY (`Equipe_1`) REFERENCES `equipe` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rencontre_ibfk_2` FOREIGN KEY (`Equipe_2`) REFERENCES `equipe` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
