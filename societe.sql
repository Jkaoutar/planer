-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 08:19 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `planer`
--

-- --------------------------------------------------------

--
-- Table structure for table `societe`
--

CREATE TABLE `societe` (
  `id` int(11) NOT NULL,
  `Entreprise` varchar(300) CHARACTER SET utf8 NOT NULL,
  `IntituleProjet` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `BrancheActivitee` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `ProgrammeInvestissement` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `DateSignature` date DEFAULT NULL,
  `DateLancement` varchar(18) CHARACTER SET utf8 DEFAULT NULL,
  `DateEcheance` varchar(18) DEFAULT NULL,
  `EmploisPrevus` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `EmploisReels` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `MobilisationTerrain` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `PaiementTerrain` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `AutorisationConstruire` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `Construction` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `EtapesAdministratives` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `PrimeImpulsion` int(11) DEFAULT NULL,
  `Prime` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `PretHonneur` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `PretHonneurPrCent` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `MontantPretHonneurDebloque` int(11) DEFAULT NULL,
  `DatePretHonneurDebloque` int(11) DEFAULT NULL,
  `PRETHONNEURNONDEBLOQUE` int(11) DEFAULT NULL,
  `DatePretHonneurDebloquePrCent` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `MontantVersement1` int(11) DEFAULT NULL,
  `DateVersement1` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `MontantVersement2` int(11) DEFAULT NULL,
  `DateVersement2` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `MontantVersement3` int(11) DEFAULT NULL,
  `DateVersement3` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `MontantVersement4` int(11) DEFAULT NULL,
  `DateVersement4` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `MontantVersement5` int(11) DEFAULT NULL,
  `DateVersement5` int(11) DEFAULT NULL,
  `PrimeImpulsionDebloquePrCent` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `PrimeImpulsionDebloque` int(11) DEFAULT NULL,
  `PrimeImpulsionNonDebloque` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `created_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `societe`
--

INSERT INTO `societe` (`id`, `Entreprise`, `IntituleProjet`, `BrancheActivitee`, `ProgrammeInvestissement`, `DateSignature`, `DateLancement`, `DateEcheance`, `EmploisPrevus`, `EmploisReels`, `MobilisationTerrain`, `PaiementTerrain`, `AutorisationConstruire`, `Construction`, `EtapesAdministratives`, `PrimeImpulsion`, `Prime`, `PretHonneur`, `PretHonneurPrCent`, `MontantPretHonneurDebloque`, `DatePretHonneurDebloque`, `PRETHONNEURNONDEBLOQUE`, `DatePretHonneurDebloquePrCent`, `MontantVersement1`, `DateVersement1`, `MontantVersement2`, `DateVersement2`, `MontantVersement3`, `DateVersement3`, `MontantVersement4`, `DateVersement4`, `MontantVersement5`, `DateVersement5`, `PrimeImpulsionDebloquePrCent`, `PrimeImpulsionDebloque`, `PrimeImpulsionNonDebloque`, `updated_at`, `created_at`) VALUES
(1, 'A2I LAB  SARL\r\n', 'LABORATOIRE D\'ANALYSE PHYSICO CHIMIQUE DES MINERAIS ET DES MATERIAUX', 'Services fournis principalement aux entreprises', '2750000', '2020-06-30', NULL, NULL, '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-28 09:15:16', '2022-01-28 09:15:16'),
(2, 'ABATTOIRS ACHARK     ', 'ABATTOIR BOVIN ET OVIN', 'Industries alimentaires', '3400000', '2020-06-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-28 10:09:57', '2022-01-28 10:09:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `societe`
--
ALTER TABLE `societe`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`Entreprise`,`IntituleProjet`,`BrancheActivitee`,`ProgrammeInvestissement`,`DateSignature`,`DateLancement`,`DateEcheance`,`EmploisPrevus`,`EmploisReels`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `societe`
--
ALTER TABLE `societe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
