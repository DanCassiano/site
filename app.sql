/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.6.17 : Database - app
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`app` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `app`;

/*Table structure for table `imagens` */

DROP TABLE IF EXISTS `imagens`;

CREATE TABLE `imagens` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `imagens` */

insert  into `imagens`(`Id`,`imagem`) values (1,'user.png');

/*Table structure for table `permissoes` */

DROP TABLE IF EXISTS `permissoes`;

CREATE TABLE `permissoes` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `permissao` varchar(150) NOT NULL DEFAULT '',
  `id_pai` int(11) NOT NULL DEFAULT '0',
  `link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `permissoes` */

insert  into `permissoes`(`Id`,`permissao`,`id_pai`,`link`) values (1,'Paginas',0,'paginas'),(2,'Add',1,NULL),(3,'Del',1,NULL),(4,'Edit',1,NULL),(5,'Usuários',0,'usuarios'),(6,'Add',5,NULL),(7,'Del',5,NULL),(8,'Edit',5,NULL);

/*Table structure for table `usuario_imagens` */

DROP TABLE IF EXISTS `usuario_imagens`;

CREATE TABLE `usuario_imagens` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL DEFAULT '0',
  `id_imagem` int(11) NOT NULL DEFAULT '0',
  `ativa` tinyint(3) DEFAULT '0',
  PRIMARY KEY (`Id`),
  KEY `fk_user` (`id_usuario`),
  KEY `fk_imagem` (`id_imagem`),
  CONSTRAINT `fk_imagem` FOREIGN KEY (`id_imagem`) REFERENCES `imagens` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_user` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `usuario_imagens` */

insert  into `usuario_imagens`(`Id`,`id_usuario`,`id_imagem`,`ativa`) values (1,1,1,1);

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `senha` varchar(100) NOT NULL DEFAULT '',
  `ativo` tinyint(3) DEFAULT '1',
  `data_cadastro` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`usuario`,`email`,`senha`,`ativo`,`data_cadastro`) values (1,'dan','dan@dan.com.br','1cc39ffd758234422e1f75beadfc5fb2',1,'2015-12-19 00:00:00.000000'),(2,'Jordan','jordan@jordan.caom.br','123',1,'2015-12-19 00:00:00.000000'),(11,'joao','joaoasdasd@asasd','1cc39ffd758234422e1f75beadfc5fb2',1,NULL),(12,'joao','joaoasdasd@asasd','1cc39ffd758234422e1f75beadfc5fb2',1,NULL),(13,'joao','joaoasdasd@asasd','1cc39ffd758234422e1f75beadfc5fb2',1,NULL),(14,'joao','joaoasdasd@asasd','1cc39ffd758234422e1f75beadfc5fb2',1,NULL);

DROP TABLE IF EXISTS `usuario_permissoes`;

CREATE TABLE `usuario_permissoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_permissao` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_permissao` (`id_permissao`),
  CONSTRAINT `usuario_permissoes_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `usuario_permissoes_ibfk_2` FOREIGN KEY (`id_permissao`) REFERENCES `permissoes` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hora` datetime NOT NULL,
  `ip` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `relacionamento` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `tabela` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sql` text COLLATE latin1_general_ci,
  `mensagem` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `hora` (`hora`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;


CREATE TABLE `site`.`paginas`(  
  `id` INT NOT NULL AUTO_INCREMENT,
  `pagina` VARCHAR(250),
  `link` VARCHAR(200),
  `publicado` TINYINT(1) DEFAULT 0,
  `permitir_view` TINYINT(1) DEFAULT 1,
  `data_criacao` DATE,
  PRIMARY KEY (`id`)
) ENGINE=INNODB CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `paginas` (`pagina`, `publicado`, `data_criacao`) VALUES ('Pagina Exemplo', '1', '2015-12-26'); 

ALTER TABLE `site`.`paginas`   
  ADD COLUMN `id_autor` INT NULL AFTER `data_criacao`;

DROP TABLE IF EXISTS `media`;
  CREATE TABLE `site`.`media`(  
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `media` VARCHAR(150),
  `tipo` INT COMMENT '1: imagens 2: audios 3:videos',
  `diretorio` VARCHAR(100),
  `data_adicao` DATETIME ,
  PRIMARY KEY (`id`)
) ENGINE=INNODB CHARSET=utf8 COLLATE=utf8_general_ci;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
