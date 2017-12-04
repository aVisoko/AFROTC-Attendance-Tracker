-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: AF_info
-- ------------------------------------------------------
-- Server version	5.7.20

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
-- Table structure for table `UserInfo`
--

DROP TABLE IF EXISTS `UserInfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `UserInfo` (
  `id` int(11) NOT NULL,
  `f_name` varchar(45) NOT NULL,
  `l_name` varchar(45) NOT NULL,
  `as_class` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UserInfo`
--

LOCK TABLES `UserInfo` WRITE;
/*!40000 ALTER TABLE `UserInfo` DISABLE KEYS */;
INSERT INTO `UserInfo` VALUES (8,'alex','bradshaw',200,'abradshaw','kst752'),(35,'austin','kessler',100,'akessler','nrf218'),(42,'aaron','mcnair',200,'amcnair','fbf607'),(67,'austin','parrish',300,'aparrish','rld51'),(53,'adam','scott',200,'ascott','evu104'),(56,'andrew','sites',100,'asites','okq517'),(64,'arthur','wands',200,'awands','wag56'),(17,'benjamin','dahlgren',100,'bdahlgren','ico498'),(24,'braeden','ede',100,'bede','cge57'),(57,'benjamin','snider bilbrey',100,'bsnider','iue962'),(58,'benjamin','stewart',100,'bstewart','vxt257'),(65,'branden','white',250,'bwhite','olt317'),(62,'clarence','valelo',100,'cvalelo','jrd523'),(63,'chad','walrod',100,'cwalrod','rwl33'),(2,'dominick','bass',100,'dbass','xid943'),(25,'dakota','evans',100,'devans','cag832'),(9,'evan','brenner',100,'ebrenner','iqd104'),(26,'evan','fessler',100,'efessler','wbm537'),(34,'emily','kessel',100,'ekessel','zns598'),(49,'emery','powell',200,'epowell','vbd389'),(66,'eric','rachell',300,'erachell','mio217'),(33,'griffin','johnson',200,'gjohnson','xqu385'),(41,'griffen','mcafee-myers',200,'gmcafee-myers','zrg393'),(51,'gabrielle','sapienza',100,'gsapienza','wxz987'),(21,'hannah','deaver',100,'hdeaver','cgo432'),(39,'harrison','lara',100,'hlara','lsc74'),(1,'jon','armington',100,'jarmington','dly943'),(11,'john','callahan',200,'jcallahan','bfm891'),(30,'jared','holm',200,'jholm','vtf387'),(32,'jacob','jenkins',100,'jjenkins','suy728'),(36,'jesse','kessler',250,'jkessler','jza915'),(38,'james','knifong',200,'jknifong','rvs523'),(40,'jacob','lentz',100,'jlentz','voa715'),(48,'joshua','patton',200,'jpatton','fvc243'),(59,'joshua','stovall',200,'jstovall','jnq100'),(5,'katie','bocanegra',100,'kbocanegra','sau595'),(7,'kendall','boyd',200,'kboyd','mbd227'),(37,'kelsy','klingensmith',100,'kklingensmith','ovo492'),(13,'liam','canady',200,'lcanady','ygc662'),(20,'latavis','davis',100,'ldavis','grw611'),(31,'logan','james',100,'ljames','ijx616'),(52,'landon','schwarz',200,'lschwarz','ify380'),(3,'mackenzie','bay',100,'mbay','riv519'),(6,'morgan','boley',100,'mboley','ulk160'),(19,'matthew','davis',200,'mdavis','uqy412'),(28,'marissa','hatfield',100,'mhatfield','ahx873'),(29,'mike','hodge',100,'mhodge','eha414'),(47,'margaret','page',100,'mpage','hte936'),(15,'nicohl','corretjer',200,'ncorretjer','nud257'),(18,'nathan','daniel',200,'ndaniel','acg886'),(50,'nicholas','rhodes',200,'nrhodes','mpx113'),(22,'orrin','donaldson',200,'odonaldson','nay290'),(4,'rachael','beckerman',100,'rbeckerman','nns743'),(27,'raynesha','green',100,'rgreen','fbd377'),(43,'rodney','moffett',100,'rmoffett','kve624'),(60,'ryan','tindall',200,'rtindall','wwh705'),(14,'sarah','christy',100,'schristy','xrj391'),(16,'seth','crockett',200,'scrockett','ftf640'),(23,'samuel','dudenhoeffer',100,'sdudenhoeffer','ckr565'),(45,'spencer','nyquist',200,'snyquist','fsl498'),(46,'sarah','overby',100,'soverby','pko346'),(54,'scully','scully',200,'sscully','gae405'),(61,'steven','todd',250,'stodd','jcz633'),(55,'trey','shaw',100,'tshaw','cvx618'),(10,'valyssa','caballero',100,'vcaballero','zrq996'),(12,'zachary','cambron',200,'zcambron','ech667'),(44,'zoe','montgomery',200,'zmontgomery','wwp722');
/*!40000 ALTER TABLE `UserInfo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-03 20:01:35
