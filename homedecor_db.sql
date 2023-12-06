/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.7.9 : Database - decor
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`decor` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `decor`;

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `Username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`Username`,`password`,`type`,`status`) values 
('admin@gmail.com','admin','admin','1'),
('diya@gmail.com','diya','customer','1'),
('joyal@gmail.com','joyal','customer','1'),
('anu@gmail.com','anu','customer','1'),
('dhl@gmail.com','dhl','courier','1'),
('asra@gmail.com','asra','staff','1'),
('ecom@gmail.com','ecom','courier','1'),
('bluedart@gmail.com','blue','courier','1'),
('liya@gmail.com','liya','staff','1'),
('express@gmail.com','express','courier','1'),
('cloudway@gmail.com','cloud','courier','0'),
('fastroute@gmail.com','fast','courier','0'),
('pigeon@gmail.com','pigeon','courier','1'),
('leo@gmail.com','leo','customer','1');

/*Table structure for table `tbl_card` */

DROP TABLE IF EXISTS `tbl_card`;

CREATE TABLE `tbl_card` (
  `card_id` int(11) NOT NULL AUTO_INCREMENT,
  `Cust_Id` int(11) NOT NULL,
  `card_no` varchar(100) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  PRIMARY KEY (`card_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_card` */

insert  into `tbl_card`(`card_id`,`Cust_Id`,`card_no`,`card_name`) values 
(1,9,'2345675456543454','anu stephen'),
(2,10,'1234567890123456','joyal'),
(3,11,'0987654321654321','diya'),
(4,12,'1234567890567891','leo');

/*Table structure for table `tbl_cassign` */

DROP TABLE IF EXISTS `tbl_cassign`;

CREATE TABLE `tbl_cassign` (
  `Cassign_Id` int(100) NOT NULL AUTO_INCREMENT,
  `Courier_Id` int(100) NOT NULL,
  `mastcart_id` int(100) NOT NULL,
  `Cassign_Date` date NOT NULL,
  PRIMARY KEY (`Cassign_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_cassign` */

insert  into `tbl_cassign`(`Cassign_Id`,`Courier_Id`,`mastcart_id`,`Cassign_Date`) values 
(1,1,13,'2023-10-25'),
(2,2,10,'2023-10-25');

/*Table structure for table `tbl_cat` */

DROP TABLE IF EXISTS `tbl_cat`;

CREATE TABLE `tbl_cat` (
  `Cat_Id` int(100) NOT NULL AUTO_INCREMENT,
  `Cat_Name` varchar(100) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Image` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`Cat_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_cat` */

insert  into `tbl_cat`(`Cat_Id`,`Cat_Name`,`Description`,`Image`) values 
(1,'vases','decor items','images/6531f6ee9b3b7.jpg'),
(2,'lamps and lighting','decor items','images/6531f70e693df.jpg');

/*Table structure for table `tbl_childcart` */

DROP TABLE IF EXISTS `tbl_childcart`;

CREATE TABLE `tbl_childcart` (
  `childcart_Id` int(100) NOT NULL AUTO_INCREMENT,
  `mastcart_Id` int(100) NOT NULL,
  `Itm_Id` int(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `added_date` varchar(100) DEFAULT NULL,
  `child_totamt` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`childcart_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_childcart` */

insert  into `tbl_childcart`(`childcart_Id`,`mastcart_Id`,`Itm_Id`,`quantity`,`added_date`,`child_totamt`) values 
(1,1,1,'1','2023-10-27','110');

/*Table structure for table `tbl_courier` */

DROP TABLE IF EXISTS `tbl_courier`;

CREATE TABLE `tbl_courier` (
  `Courier_Id` int(10) NOT NULL AUTO_INCREMENT,
  `Username` varchar(25) NOT NULL,
  `Staff_Id` int(10) DEFAULT NULL,
  `C_Name` varchar(10) NOT NULL,
  `C_City` varchar(10) NOT NULL,
  `C_Dist` varchar(10) NOT NULL,
  `C_Pin` int(6) NOT NULL,
  `C_Street` varchar(10) NOT NULL,
  `C_Phone` decimal(10,0) NOT NULL,
  `Courier_Status` varchar(8) NOT NULL,
  PRIMARY KEY (`Courier_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_courier` */

insert  into `tbl_courier`(`Courier_Id`,`Username`,`Staff_Id`,`C_Name`,`C_City`,`C_Dist`,`C_Pin`,`C_Street`,`C_Phone`,`Courier_Status`) values 
(9,'bluedart@gmail.com',0,'bluedart','vytilla','ernakulam',682313,'ammankovil',9446613284,'1'),
(13,'dhl@gmail.com',0,'dhl','kaloor','ernakulam',683513,'kaloor',9446613209,'1'),
(10,'ecom@gmail.com',10,'ecom','elamkulam','ernakulam',683512,'vytilla',9497444269,'1'),
(14,'express@gmail.com',0,'express','kakanad','thrissur',684523,'guruvayoor',9778835427,'1'),
(15,'cloudway@gmail.com',0,'cloudway','aluva','ernakulam',683524,'muttom',9663345128,'0'),
(16,'fastroute@gmail.com',0,'fastroute','paravur','kollam',684523,'edavanakad',9556678538,'0'),
(17,'pigeon@gmail.com',0,'pigeon','angamaly','ernakulam',684621,'ezhikkara',9446684983,'1');

/*Table structure for table `tbl_customer` */

DROP TABLE IF EXISTS `tbl_customer`;

CREATE TABLE `tbl_customer` (
  `Cust_Id` int(100) NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) NOT NULL,
  `Cust_Fname` varchar(100) NOT NULL,
  `Cust_Lname` varchar(100) NOT NULL,
  `Cust_address` varchar(100) NOT NULL,
  `Cust_City` varchar(100) NOT NULL,
  `Cust_Dist` varchar(100) NOT NULL,
  `Cust_Pin` int(100) NOT NULL,
  `Cust_Phone` decimal(10,0) NOT NULL,
  `Cust_Dob` varchar(100) NOT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`Cust_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_customer` */

insert  into `tbl_customer`(`Cust_Id`,`Username`,`Cust_Fname`,`Cust_Lname`,`Cust_address`,`Cust_City`,`Cust_Dist`,`Cust_Pin`,`Cust_Phone`,`Cust_Dob`,`Gender`,`Status`) values 
(11,'diya@gmail.com','diya','maria','kooran house','delhi','thrissur',683512,9446613204,'2023-10-20','Female','1'),
(10,'joyal@gmail.com','joyal','varghese','riverine villa','vytilla','ernakulam ',684536,9494444269,'2023-10-01','Male','1'),
(9,'anu@gmail.com','anu','stephen','kanezheth house','north parvur','ernakulam',683512,9667713265,'2023-10-08','Female','1'),
(12,'leo@gmail.com','leo','paul','chestnut(h)','south ernakulam','ernakulam ',683547,8943206288,'2002-12-03','Male','1');

/*Table structure for table `tbl_delivery` */

DROP TABLE IF EXISTS `tbl_delivery`;

CREATE TABLE `tbl_delivery` (
  `Delivery_Id` int(100) NOT NULL AUTO_INCREMENT,
  `Cassign_Date` varchar(100) NOT NULL,
  `mastcart_id` int(11) NOT NULL,
  `Courier_Id` int(11) NOT NULL,
  `expected_date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Delivery_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_delivery` */

insert  into `tbl_delivery`(`Delivery_Id`,`Cassign_Date`,`mastcart_id`,`Courier_Id`,`expected_date`) values 
(3,'2023-10-25',1,17,'2023-11-01');

/*Table structure for table `tbl_item` */

DROP TABLE IF EXISTS `tbl_item`;

CREATE TABLE `tbl_item` (
  `Itm_Id` int(100) NOT NULL AUTO_INCREMENT,
  `Itm_name` varchar(100) NOT NULL,
  `Subcat_Id` int(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Profit_Per` varchar(50) NOT NULL,
  `Image` varchar(2000) NOT NULL,
  `Description` longtext NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Stock` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Itm_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_item` */

insert  into `tbl_item`(`Itm_Id`,`Itm_name`,`Subcat_Id`,`Price`,`Profit_Per`,`Image`,`Description`,`Status`,`Stock`) values 
(1,'Pretty Pink Round Ball Ceramic Flower Vase',13,220,'10','images/651e36176d324.jpg','decor items','1','1'),
(2,'Inverted u shape ceramic vase',13,0,'50','images/651e36324a74a.jpg','decor items','1','0'),
(3,'candle lantern',22,0,'100','images/651e417fcefca.jpg','decor items','1','0'),
(4,'golden metal table lamp',23,0,'100','images/651e419e5d6a2.jpg','decor items','1','0'),
(5,'Iris Glass Vase - Big - Teal',16,0,'10','images/651e41ec3e340.jpg','decor items','1','0'),
(6,'Round glass vase gren',16,0,'50','images/651e4226ab38e.jpg','decor items','1','0'),
(12,'Cusp Table Lamp',23,0,'20','images/6531dbaf69f64.jpg','decor items','1','0'),
(11,'Claire Lantern Silver - Medium',22,0,'20','images/6531db5537422.jpg','decor items','1','0'),
(13,'Bohemian Smiley Face Ceramic  Vase',13,0,'10','images/6531dfc22bb0f.jpg','decor items','1','0'),
(14,'Toyu Gold Metallic  Lamp',23,0,'30','images/6531e056ac732.jpg','decor items','1','0'),
(15,'Micola Decorative Glass Vase',16,0,'10','images/6531e11a60b04.jpg','decor items','1','0'),
(16,'Wodden Lantern',22,0,'10','images/6531e28402f30.jpg','decor items','1','0'),
(17,'flower vase',13,0,'10','images/65320e13f06a9.jpg','decor items','1','0');

/*Table structure for table `tbl_mastcart` */

DROP TABLE IF EXISTS `tbl_mastcart`;

CREATE TABLE `tbl_mastcart` (
  `mastcart_id` int(5) NOT NULL AUTO_INCREMENT,
  `Cust_Id` int(5) NOT NULL,
  `tot_amount` varchar(100) NOT NULL,
  `cart_status` varchar(100) NOT NULL,
  PRIMARY KEY (`mastcart_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_mastcart` */

insert  into `tbl_mastcart`(`mastcart_id`,`Cust_Id`,`tot_amount`,`cart_status`) values 
(1,11,'110','Paid');

/*Table structure for table `tbl_order` */

DROP TABLE IF EXISTS `tbl_order`;

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `mastcart_id` int(11) DEFAULT NULL,
  `order_date` varchar(100) DEFAULT NULL,
  `reachable` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_order` */

insert  into `tbl_order`(`order_id`,`mastcart_id`,`order_date`,`reachable`) values 
(1,1,'2023-10-25','0'),
(2,2,'2023-10-25','0'),
(3,3,'2023-10-27','0'),
(4,1,'2023-10-27','0'),
(5,1,'2023-10-27','0'),
(6,1,'2023-10-27','0');

/*Table structure for table `tbl_payment` */

DROP TABLE IF EXISTS `tbl_payment`;

CREATE TABLE `tbl_payment` (
  `Paym_Id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `card_id` int(11) NOT NULL,
  `Paym_Date` varchar(100) NOT NULL,
  `Cust_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Paym_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_payment` */

insert  into `tbl_payment`(`Paym_Id`,`order_id`,`card_id`,`Paym_Date`,`Cust_id`) values 
(1,5,3,'2023-10-27',11),
(2,6,3,'2023-10-27',11);

/*Table structure for table `tbl_purchild` */

DROP TABLE IF EXISTS `tbl_purchild`;

CREATE TABLE `tbl_purchild` (
  `Pc_Id` int(100) NOT NULL AUTO_INCREMENT,
  `Pm_Id` int(100) NOT NULL,
  `Itm_Id` int(100) NOT NULL,
  `Purch_quantity` int(100) NOT NULL,
  `Cost_Price` int(100) NOT NULL,
  `Selling_price` varchar(100) DEFAULT NULL,
  `cpurch_status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Pc_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_purchild` */

insert  into `tbl_purchild`(`Pc_Id`,`Pm_Id`,`Itm_Id`,`Purch_quantity`,`Cost_Price`,`Selling_price`,`cpurch_status`) values 
(1,1,1,1,100,'110','stock added'),
(2,2,1,1,200,'220','stock added');

/*Table structure for table `tbl_purmaster` */

DROP TABLE IF EXISTS `tbl_purmaster`;

CREATE TABLE `tbl_purmaster` (
  `Pm_Id` int(100) NOT NULL AUTO_INCREMENT,
  `Staff_Id` int(100) NOT NULL,
  `Ven_Id` int(100) NOT NULL,
  `Pm_Date` date NOT NULL,
  `total_amt` decimal(8,2) NOT NULL,
  `purch_status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Pm_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_purmaster` */

insert  into `tbl_purmaster`(`Pm_Id`,`Staff_Id`,`Ven_Id`,`Pm_Date`,`total_amt`,`purch_status`) values 
(1,0,10,'2023-10-27',100.00,'Purchased'),
(2,0,10,'2023-10-27',200.00,'Purchased');

/*Table structure for table `tbl_staff` */

DROP TABLE IF EXISTS `tbl_staff`;

CREATE TABLE `tbl_staff` (
  `Staff_Id` int(100) NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) DEFAULT NULL,
  `Stf_Fname` varchar(100) NOT NULL,
  `Stf_Lname` varchar(100) NOT NULL,
  `Stf_Adrs` varchar(100) NOT NULL,
  `Stf_Phone` decimal(10,0) NOT NULL,
  `Stf_Gndr` varchar(100) NOT NULL,
  `Stf_Dob` date NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`Staff_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_staff` */

insert  into `tbl_staff`(`Staff_Id`,`Username`,`Stf_Fname`,`Stf_Lname`,`Stf_Adrs`,`Stf_Phone`,`Stf_Gndr`,`Stf_Dob`,`Status`) values 
(11,'asra@gmail.com','asra','mehrin','green valley',8943206288,'Female','2023-09-21','0'),
(10,'liya@gmail.com','liya','varghese','kannezheth house',9497280873,'Female','2023-09-30','0');

/*Table structure for table `tbl_subcat` */

DROP TABLE IF EXISTS `tbl_subcat`;

CREATE TABLE `tbl_subcat` (
  `Subcat_Id` int(100) NOT NULL AUTO_INCREMENT,
  `Cat_Id` int(100) NOT NULL,
  `Subcat_Name` varchar(100) NOT NULL,
  `Description` longtext NOT NULL,
  `Img` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`Subcat_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_subcat` */

insert  into `tbl_subcat`(`Subcat_Id`,`Cat_Id`,`Subcat_Name`,`Description`,`Img`) values 
(22,2,'lanterns','decor items','images/651e41003e11d.jpg'),
(23,2,'table lamps','decor items','images/651e41354b5c3.jpg'),
(16,1,'glass','Glass Vase - Small is a stunning and elegant piece of home decor. Crafted from high-quality crystal clear glass, this vase has a sleek and modern design, perfect for adding a touch of sophistication to any living space','images/650162407aff5.jpg'),
(13,1,'ceramic','Crafted from high-quality ceramic, this vase showcases a unique design of a pouting face, creating an endearing and eye-catching focal point.','images/6501602f7e8ac.jpg');

/*Table structure for table `tbl_vendor` */

DROP TABLE IF EXISTS `tbl_vendor`;

CREATE TABLE `tbl_vendor` (
  `Ven_Id` int(10) NOT NULL AUTO_INCREMENT,
  `Staff_Id` int(10) DEFAULT NULL,
  `Ven_Name` varchar(10) NOT NULL,
  `Ven_Email` varchar(25) NOT NULL,
  `Ven_City` varchar(10) NOT NULL,
  `Ven_Dist` varchar(10) NOT NULL,
  `Ven_Pin` decimal(6,0) NOT NULL,
  `Ven_Phone` decimal(10,0) NOT NULL,
  `Status` varchar(8) NOT NULL,
  PRIMARY KEY (`Ven_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_vendor` */

insert  into `tbl_vendor`(`Ven_Id`,`Staff_Id`,`Ven_Name`,`Ven_Email`,`Ven_City`,`Ven_Dist`,`Ven_Pin`,`Ven_Phone`,`Status`) values 
(12,0,'ebytomy','ebytomy@gmail.com','paravur','ernakulam',683513,9446613204,'1'),
(10,10,'Kiran','kiran@gmail.com','vytilla','ernakulam ',683513,9446613206,'1'),
(13,0,'sharil','sharil100@gmail.com','paravur','ernakulam ',683513,9497444269,'1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
