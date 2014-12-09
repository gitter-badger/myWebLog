# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.38)
# Database: myweblog
# Generation Time: 2014-12-09 20:14:01 +0000
# ************************************************************

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `myweblog`
--
CREATE DATABASE IF NOT EXISTS `myweblog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `myweblog`;

-- --------------------------------------------------------

--
-- Structure de la table `billet`
--

CREATE TABLE IF NOT EXISTS `billet` (
  `id_billet` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `updated` date DEFAULT NULL,
  `content` text,
  `tags` varchar(255) DEFAULT NULL,
  `id_tags` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_billet`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `sexe` varchar(100) DEFAULT NULL,
  `telephone` varchar(10) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `passwd` varchar(255) NOT NULL,
  `id_type_account` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `user_profile`
--

INSERT INTO `user_profile` (`id_user`, `nom`, `prenom`, `mail`, `date_naissance`, `sexe`, `telephone`, `login`, `passwd`, `id_type_account`) VALUES
(1, 'I am', 'root', 'root@root.fr', '0000-00-00', 'Homme', '0623422342', 'root', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 1),
(2, 'Je s appelle', 'Groot', 'jesapelle@groot.fr', '0000-00-00', 'Autre', '0611223342', 'groot', 'a0745ef751b4a2916ab1e10e3029f374c98e75f1', 2),
(3, 'COQUELET', 'Christophe', 'coquelet.c@gmail.com', '0000-00-00', 'M.', '', 'coquel_d', 'eb09f436d7c8cb4063d342e58c4e6b796313bcba', 2),
(5, 'test1', 'test2', 'test@test.test', '0000-00-00', 'M.', '', 'test_3', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 2),
(6, 'Team', 'Rocket', 'team@rocket.poke', '0000-00-00', 'M.', '', 'TR', 'd9e83874d260f2f10d48d98c0b773b836096d426', 2);
(7,'Beors','Sofiane','s.beors@gmail.com','0000-00-00','M.','','kidd_soso','40bd001563085fc35165329ea1ff5c5ecbdbbeef',2);

-- --------------------------------------------------------

--
-- Structure de la table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id_type_account` int(11) NOT NULL,
  `nom_type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_type_account`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
