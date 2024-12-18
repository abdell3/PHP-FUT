-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : mer. 18 déc. 2024 à 10:09
-- Version du serveur : 9.1.0
-- Version de PHP : 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `futgestion`
--

-- --------------------------------------------------------

--
-- Structure de la table `Club`
--

CREATE TABLE `Club` (
  `id_club` int NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Club`
--

INSERT INTO `Club` (`id_club`, `nom`, `logo`) VALUES
(1, 'Inter Miami', 'https://cdn.sofifa.net/meta/team/239235/120.png'),
(2, 'Al Nassr', 'https://cdn.sofifa.net/meta/team/2506/120.png'),
(3, 'Manchester City', 'https://cdn.sofifa.net/players/239/085/25_120.png'),
(4, 'Atletico Madrid', 'https://cdn.sofifa.net/meta/team/7980/120.png'),
(5, 'Al-Hilal', 'https://cdn.sofifa.net/meta/team/7011/120.png'),
(6, 'Paris Saint-Germain', 'https://cdn.sofifa.net/meta/team/591/120.png');

-- --------------------------------------------------------

--
-- Structure de la table `Nationality`
--

CREATE TABLE `Nationality` (
  `id_natio` int NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `continent` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Nationality`
--

INSERT INTO `Nationality` (`id_natio`, `nom`, `continent`) VALUES
(1, 'Argentina', 'Amerique-sud'),
(2, 'Portugal', 'Europ'),
(3, 'Belgium', 'Europ'),
(4, 'Slovenia', 'Europ'),
(5, 'Morocco', 'Afrique'),
(6, 'Italy', 'Europ');

-- --------------------------------------------------------

--
-- Structure de la table `Player`
--

CREATE TABLE `Player` (
  `id_player` int NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `positio` varchar(100) DEFAULT NULL,
  `id_club` int DEFAULT NULL,
  `id_natio` int DEFAULT NULL,
  `id_statG` int DEFAULT NULL,
  `id_statN` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Player`
--

INSERT INTO `Player` (`id_player`, `nom`, `img`, `positio`, `id_club`, `id_natio`, `id_statG`, `id_statN`) VALUES
(1, 'Lionel Messi', 'https://cdn.sofifa.net/players/158/023/25_120.png', 'RW', 1, 1, NULL, 1),
(2, 'Cristiano Ronaldo', 'https://cdn.sofifa.net/players/020/801/25_120.png', 'ST', 2, 2, NULL, 2),
(3, 'Kevin De Bruyne', 'https://cdn.sofifa.net/players/192/985/25_120.png', 'CM', 3, 3, NULL, 3),
(4, 'Jan Oblak', 'https://cdn.sofifa.net/players/200/389/25_120.png', 'GK', 4, 4, 1, NULL),
(5, 'Yassine Bounou', 'https://cdn.sofifa.net/players/209/981/25_120.png', 'GK', 5, 5, 2, NULL),
(6, 'Gianluigi Donnarumma', 'https://cdn.sofifa.net/players/230/621/25_120.png', 'GK', 6, 6, 3, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `StatiqG`
--

CREATE TABLE `StatiqG` (
  `id_statG` int NOT NULL,
  `rating` int DEFAULT NULL,
  `diving` int DEFAULT NULL,
  `handling` int DEFAULT NULL,
  `kicking` int DEFAULT NULL,
  `reflexes` int DEFAULT NULL,
  `speed` int DEFAULT NULL,
  `positioning` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `StatiqG`
--

INSERT INTO `StatiqG` (`id_statG`, `rating`, `diving`, `handling`, `kicking`, `reflexes`, `speed`, `positioning`) VALUES
(1, 91, 89, 90, 78, 92, 50, 88),
(2, 84, 81, 82, 77, 86, 38, 83),
(3, 89, 88, 84, 75, 90, 50, 85);

-- --------------------------------------------------------

--
-- Structure de la table `StatiqN`
--

CREATE TABLE `StatiqN` (
  `id_statN` int NOT NULL,
  `rating` int DEFAULT NULL,
  `pace` int DEFAULT NULL,
  `shooting` int DEFAULT NULL,
  `passing` int DEFAULT NULL,
  `dribbling` int DEFAULT NULL,
  `defending` int DEFAULT NULL,
  `physical` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `StatiqN`
--

INSERT INTO `StatiqN` (`id_statN`, `rating`, `pace`, `shooting`, `passing`, `dribbling`, `defending`, `physical`) VALUES
(1, 93, 85, 92, 91, 95, 35, 65),
(2, 91, 84, 94, 82, 87, 34, 77),
(3, 91, 74, 86, 93, 88, 64, 78);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Club`
--
ALTER TABLE `Club`
  ADD PRIMARY KEY (`id_club`);

--
-- Index pour la table `Nationality`
--
ALTER TABLE `Nationality`
  ADD PRIMARY KEY (`id_natio`);

--
-- Index pour la table `Player`
--
ALTER TABLE `Player`
  ADD PRIMARY KEY (`id_player`),
  ADD KEY `id_club` (`id_club`),
  ADD KEY `id_natio` (`id_natio`),
  ADD KEY `id_statG` (`id_statG`),
  ADD KEY `id_statN` (`id_statN`);

--
-- Index pour la table `StatiqG`
--
ALTER TABLE `StatiqG`
  ADD PRIMARY KEY (`id_statG`);

--
-- Index pour la table `StatiqN`
--
ALTER TABLE `StatiqN`
  ADD PRIMARY KEY (`id_statN`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Club`
--
ALTER TABLE `Club`
  MODIFY `id_club` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `Nationality`
--
ALTER TABLE `Nationality`
  MODIFY `id_natio` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `Player`
--
ALTER TABLE `Player`
  MODIFY `id_player` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `StatiqG`
--
ALTER TABLE `StatiqG`
  MODIFY `id_statG` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `StatiqN`
--
ALTER TABLE `StatiqN`
  MODIFY `id_statN` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Player`
--
ALTER TABLE `Player`
  ADD CONSTRAINT `Player_ibfk_1` FOREIGN KEY (`id_club`) REFERENCES `Club` (`id_club`),
  ADD CONSTRAINT `Player_ibfk_2` FOREIGN KEY (`id_natio`) REFERENCES `Nationality` (`id_natio`),
  ADD CONSTRAINT `Player_ibfk_3` FOREIGN KEY (`id_statG`) REFERENCES `StatiqG` (`id_statG`),
  ADD CONSTRAINT `Player_ibfk_4` FOREIGN KEY (`id_statN`) REFERENCES `StatiqN` (`id_statN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
