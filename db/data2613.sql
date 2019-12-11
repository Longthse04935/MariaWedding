-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.34-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for weddingblog
CREATE DATABASE IF NOT EXISTS `weddingblog` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `weddingblog`;

-- Dumping structure for table weddingblog.blogs
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `description` text,
  `type` varchar(50) DEFAULT 'photo',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `image` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table weddingblog.blogs: ~4 rows (approximately)
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` (`id`, `title`, `description`, `type`, `created`, `updated`, `status`, `image`) VALUES
	(1, 'Photo', NULL, 'photo', '2014-06-04 15:52:20', '0000-00-00 00:00:00', 1, 'photo1.jpg'),
	(2, 'Don\'t Go Far Off\r\n', 'Don\'t go far off, not even for a day, because -- \r\nbecause -- I don\'t know how to say it: a day is long \r\nand I will be waiting for you, as in an empty station \r\nwhen the trains are parked off somewhere else, asleep. \r\n\r\nDon\'t leave me, even for an hour, because \r\nthen the little drops of anguish will all run together, \r\nthe smoke that roams looking for a home will drift \r\ninto me, choking my lost heart. \r\n\r\nOh, may your silhouette never dissolve on the beach; \r\nmay your eyelids never flutter into the empty distance. \r\nDon\'t leave me for a second, my dearest, \r\n\r\nbecause in that moment you\'ll have gone so far \r\nI\'ll wander mazily over all the earth, asking, \r\nWill you come back? Will you leave me here, dying?', 'article', '2012-12-20 15:55:15', '0000-00-00 00:00:00', 1, NULL),
	(3, 'Dolore magna aliquam', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. \r\n\r\nUt wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. \r\n\r\nDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.  \r\n\r\n\r\nMirum est notare quam littera gothica.', 'diary', '2012-11-12 15:59:06', '0000-00-00 00:00:00', 1, 'photo2.jpg'),
	(4, 'Dolore magna aliquam', '"If I had a flower for every time I thought of you ...I could walk through my garden forever."', 'quote', '2012-11-12 15:59:06', '0000-00-00 00:00:00', 1, NULL);
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;

-- Dumping structure for table weddingblog.guestbook
CREATE TABLE IF NOT EXISTS `guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `webaddress` varchar(50) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

-- Dumping data for table weddingblog.guestbook: ~2 rows (approximately)
/*!40000 ALTER TABLE `guestbook` DISABLE KEYS */;
INSERT INTO `guestbook` (`id`, `message`, `name`, `email`, `webaddress`, `img`, `date`) VALUES
	(47, 'Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est not...', 'Charlotte Robert', 'Longthse04935@fpt.edu.vn', NULL, 'photo3.jpg', '2015-10-27 00:00:00'),
	(48, 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum', 'André Martin', 'Longth@gmail.com', NULL, NULL, '2012-11-20 10:24:50');
/*!40000 ALTER TABLE `guestbook` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
