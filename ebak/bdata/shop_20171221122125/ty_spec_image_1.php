<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_spec_image`;");
E_C("CREATE TABLE `ty_spec_image` (
  `goods_id` int(11) DEFAULT '0' COMMENT '商品规格图片表id',
  `spec_image_id` int(11) DEFAULT '0' COMMENT '规格项id',
  `src` varchar(512) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '' COMMENT '商品规格图片路径',
  `store_id` int(11) DEFAULT '0' COMMENT '商家id',
  KEY `goods_id` (`goods_id`),
  KEY `spec_img_id` (`spec_image_id`),
  KEY `store_id` (`store_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1");
E_D("replace into `ty_spec_image` values('33','11','','2');");
E_D("replace into `ty_spec_image` values('33','12','','2');");
E_D("replace into `ty_spec_image` values('33','13','','2');");
E_D("replace into `ty_spec_image` values('33','14','','2');");
E_D("replace into `ty_spec_image` values('33','28','','2');");
E_D("replace into `ty_spec_image` values('33','21','','2');");
E_D("replace into `ty_spec_image` values('33','23','','2');");
E_D("replace into `ty_spec_image` values('4','36','/Public/upload/goods/2015/11-18/564c818c3a888.jpg','2');");
E_D("replace into `ty_spec_image` values('4','35','/Public/upload/goods/2015/11-18/564c8c1c0a916.jpg','2');");
E_D("replace into `ty_spec_image` values('4','37','','2');");
E_D("replace into `ty_spec_image` values('4','38','','2');");
E_D("replace into `ty_spec_image` values('4','39','','2');");
E_D("replace into `ty_spec_image` values('4','40','','2');");
E_D("replace into `ty_spec_image` values('39','41','','2');");
E_D("replace into `ty_spec_image` values('39','42','','2');");
E_D("replace into `ty_spec_image` values('39','43','','2');");
E_D("replace into `ty_spec_image` values('39','44','','2');");
E_D("replace into `ty_spec_image` values('39','45','','2');");
E_D("replace into `ty_spec_image` values('39','46','','2');");
E_D("replace into `ty_spec_image` values('39','47','','2');");
E_D("replace into `ty_spec_image` values('39','48','','2');");
E_D("replace into `ty_spec_image` values('39','49','','2');");
E_D("replace into `ty_spec_image` values('39','50','','2');");
E_D("replace into `ty_spec_image` values('39','51','/Public/upload/goods/2016/01-13/5695b6924f647.jpg','2');");
E_D("replace into `ty_spec_image` values('39','52','/Public/upload/goods/2016/01-13/5695b69d3a186.jpg','2');");
E_D("replace into `ty_spec_image` values('41','41','','2');");
E_D("replace into `ty_spec_image` values('41','42','','2');");
E_D("replace into `ty_spec_image` values('41','43','','2');");
E_D("replace into `ty_spec_image` values('41','44','','2');");
E_D("replace into `ty_spec_image` values('41','45','','2');");
E_D("replace into `ty_spec_image` values('41','46','','2');");
E_D("replace into `ty_spec_image` values('41','47','','2');");
E_D("replace into `ty_spec_image` values('41','48','','2');");
E_D("replace into `ty_spec_image` values('41','49','','2');");
E_D("replace into `ty_spec_image` values('41','50','','2');");
E_D("replace into `ty_spec_image` values('41','51','','2');");
E_D("replace into `ty_spec_image` values('41','52','','2');");
E_D("replace into `ty_spec_image` values('43','41','','2');");
E_D("replace into `ty_spec_image` values('43','42','','2');");
E_D("replace into `ty_spec_image` values('43','43','','2');");
E_D("replace into `ty_spec_image` values('43','44','','2');");
E_D("replace into `ty_spec_image` values('43','45','','2');");
E_D("replace into `ty_spec_image` values('43','46','','2');");
E_D("replace into `ty_spec_image` values('43','47','','2');");
E_D("replace into `ty_spec_image` values('43','48','','2');");
E_D("replace into `ty_spec_image` values('43','49','','2');");
E_D("replace into `ty_spec_image` values('43','50','','2');");
E_D("replace into `ty_spec_image` values('43','51','','2');");
E_D("replace into `ty_spec_image` values('43','52','','2');");
E_D("replace into `ty_spec_image` values('40','41','','2');");
E_D("replace into `ty_spec_image` values('40','42','','2');");
E_D("replace into `ty_spec_image` values('40','43','','2');");
E_D("replace into `ty_spec_image` values('40','44','','2');");
E_D("replace into `ty_spec_image` values('40','45','','2');");
E_D("replace into `ty_spec_image` values('40','46','','2');");
E_D("replace into `ty_spec_image` values('40','47','','2');");
E_D("replace into `ty_spec_image` values('40','48','','2');");
E_D("replace into `ty_spec_image` values('40','49','','2');");
E_D("replace into `ty_spec_image` values('40','50','','2');");
E_D("replace into `ty_spec_image` values('40','51','/Public/upload/goods/2016/01-13/5695e662883fd.jpg','2');");
E_D("replace into `ty_spec_image` values('40','52','/Public/upload/goods/2016/01-13/5695e66b2163f.jpg','2');");
E_D("replace into `ty_spec_image` values('44','41','','2');");
E_D("replace into `ty_spec_image` values('44','42','','2');");
E_D("replace into `ty_spec_image` values('44','43','','2');");
E_D("replace into `ty_spec_image` values('44','44','','2');");
E_D("replace into `ty_spec_image` values('44','45','','2');");
E_D("replace into `ty_spec_image` values('44','46','','2');");
E_D("replace into `ty_spec_image` values('44','47','','2');");
E_D("replace into `ty_spec_image` values('44','48','','2');");
E_D("replace into `ty_spec_image` values('44','49','','2');");
E_D("replace into `ty_spec_image` values('44','50','','2');");
E_D("replace into `ty_spec_image` values('44','51','/Public/upload/goods/2016/01-13/5695e7a14b06c.jpg','2');");
E_D("replace into `ty_spec_image` values('44','52','/Public/upload/goods/2016/01-13/5695e7a660f5b.jpg','2');");
E_D("replace into `ty_spec_image` values('45','11','','2');");
E_D("replace into `ty_spec_image` values('45','12','','2');");
E_D("replace into `ty_spec_image` values('45','13','','2');");
E_D("replace into `ty_spec_image` values('45','14','','2');");
E_D("replace into `ty_spec_image` values('45','28','','2');");
E_D("replace into `ty_spec_image` values('45','21','','2');");
E_D("replace into `ty_spec_image` values('45','23','','2');");
E_D("replace into `ty_spec_image` values('46','11','','2');");
E_D("replace into `ty_spec_image` values('46','12','','2');");
E_D("replace into `ty_spec_image` values('46','13','','2');");
E_D("replace into `ty_spec_image` values('46','14','','2');");
E_D("replace into `ty_spec_image` values('46','28','','2');");
E_D("replace into `ty_spec_image` values('46','21','','2');");
E_D("replace into `ty_spec_image` values('46','23','','2');");
E_D("replace into `ty_spec_image` values('47','11','','2');");
E_D("replace into `ty_spec_image` values('47','12','','2');");
E_D("replace into `ty_spec_image` values('47','13','','2');");
E_D("replace into `ty_spec_image` values('47','14','','2');");
E_D("replace into `ty_spec_image` values('47','28','','2');");
E_D("replace into `ty_spec_image` values('47','21','','2');");
E_D("replace into `ty_spec_image` values('47','23','','2');");
E_D("replace into `ty_spec_image` values('48','11','','2');");
E_D("replace into `ty_spec_image` values('48','12','','2');");
E_D("replace into `ty_spec_image` values('48','13','','2');");
E_D("replace into `ty_spec_image` values('48','14','','2');");
E_D("replace into `ty_spec_image` values('48','28','','2');");
E_D("replace into `ty_spec_image` values('48','21','/Public/upload/goods/2016/01-13/5695f9c356aa9.jpg','2');");
E_D("replace into `ty_spec_image` values('48','23','','2');");
E_D("replace into `ty_spec_image` values('49','11','','2');");
E_D("replace into `ty_spec_image` values('49','12','','2');");
E_D("replace into `ty_spec_image` values('49','13','','2');");
E_D("replace into `ty_spec_image` values('49','14','','2');");
E_D("replace into `ty_spec_image` values('49','28','','2');");
E_D("replace into `ty_spec_image` values('49','21','','2');");
E_D("replace into `ty_spec_image` values('49','23','','2');");
E_D("replace into `ty_spec_image` values('51','11','','2');");
E_D("replace into `ty_spec_image` values('51','12','','2');");
E_D("replace into `ty_spec_image` values('51','13','','2');");
E_D("replace into `ty_spec_image` values('51','14','','2');");
E_D("replace into `ty_spec_image` values('51','28','','2');");
E_D("replace into `ty_spec_image` values('51','21','','2');");
E_D("replace into `ty_spec_image` values('51','23','','2');");
E_D("replace into `ty_spec_image` values('51','55','','2');");
E_D("replace into `ty_spec_image` values('51','56','','2');");
E_D("replace into `ty_spec_image` values('51','57','/Public/upload/goods/2016/01-13/56960958181f4.jpg','2');");
E_D("replace into `ty_spec_image` values('52','58','/Public/upload/goods/2016/01-13/56960da5e03ab.jpg','2');");
E_D("replace into `ty_spec_image` values('52','59','','2');");
E_D("replace into `ty_spec_image` values('54','60','','2');");
E_D("replace into `ty_spec_image` values('54','61','','2');");
E_D("replace into `ty_spec_image` values('55','58','','2');");
E_D("replace into `ty_spec_image` values('55','59','','2');");
E_D("replace into `ty_spec_image` values('57','62','','2');");
E_D("replace into `ty_spec_image` values('57','63','','2');");
E_D("replace into `ty_spec_image` values('57','64','','2');");
E_D("replace into `ty_spec_image` values('57','65','','2');");
E_D("replace into `ty_spec_image` values('57','66','','2');");
E_D("replace into `ty_spec_image` values('57','67','','2');");
E_D("replace into `ty_spec_image` values('57','68','','2');");
E_D("replace into `ty_spec_image` values('58','62','','2');");
E_D("replace into `ty_spec_image` values('58','63','','2');");
E_D("replace into `ty_spec_image` values('58','64','','2');");
E_D("replace into `ty_spec_image` values('58','65','','2');");
E_D("replace into `ty_spec_image` values('58','66','','2');");
E_D("replace into `ty_spec_image` values('58','67','','2');");
E_D("replace into `ty_spec_image` values('58','68','','2');");
E_D("replace into `ty_spec_image` values('60','62','','2');");
E_D("replace into `ty_spec_image` values('60','63','','2');");
E_D("replace into `ty_spec_image` values('60','64','','2');");
E_D("replace into `ty_spec_image` values('60','65','','2');");
E_D("replace into `ty_spec_image` values('60','66','','2');");
E_D("replace into `ty_spec_image` values('60','67','','2');");
E_D("replace into `ty_spec_image` values('60','68','','2');");
E_D("replace into `ty_spec_image` values('61','62','','2');");
E_D("replace into `ty_spec_image` values('61','63','','2');");
E_D("replace into `ty_spec_image` values('61','64','','2');");
E_D("replace into `ty_spec_image` values('61','65','','2');");
E_D("replace into `ty_spec_image` values('61','66','','2');");
E_D("replace into `ty_spec_image` values('61','67','','2');");
E_D("replace into `ty_spec_image` values('61','68','','2');");
E_D("replace into `ty_spec_image` values('62','62','','2');");
E_D("replace into `ty_spec_image` values('62','63','','2');");
E_D("replace into `ty_spec_image` values('62','64','','2');");
E_D("replace into `ty_spec_image` values('62','65','','2');");
E_D("replace into `ty_spec_image` values('62','66','','2');");
E_D("replace into `ty_spec_image` values('62','67','','2');");
E_D("replace into `ty_spec_image` values('62','68','','2');");
E_D("replace into `ty_spec_image` values('63','62','','2');");
E_D("replace into `ty_spec_image` values('63','63','','2');");
E_D("replace into `ty_spec_image` values('63','64','','2');");
E_D("replace into `ty_spec_image` values('63','65','','2');");
E_D("replace into `ty_spec_image` values('63','66','','2');");
E_D("replace into `ty_spec_image` values('63','67','','2');");
E_D("replace into `ty_spec_image` values('63','68','','2');");
E_D("replace into `ty_spec_image` values('64','62','','2');");
E_D("replace into `ty_spec_image` values('64','63','','2');");
E_D("replace into `ty_spec_image` values('64','64','','2');");
E_D("replace into `ty_spec_image` values('64','65','','2');");
E_D("replace into `ty_spec_image` values('64','66','','2');");
E_D("replace into `ty_spec_image` values('64','67','','2');");
E_D("replace into `ty_spec_image` values('64','68','','2');");
E_D("replace into `ty_spec_image` values('68','69','','2');");
E_D("replace into `ty_spec_image` values('68','70','','2');");
E_D("replace into `ty_spec_image` values('68','71','','2');");
E_D("replace into `ty_spec_image` values('68','72','','2');");
E_D("replace into `ty_spec_image` values('68','73','','2');");
E_D("replace into `ty_spec_image` values('68','74','','2');");
E_D("replace into `ty_spec_image` values('68','75','','2');");
E_D("replace into `ty_spec_image` values('68','76','','2');");
E_D("replace into `ty_spec_image` values('78','82','','2');");
E_D("replace into `ty_spec_image` values('78','83','','2');");
E_D("replace into `ty_spec_image` values('78','84','','2');");
E_D("replace into `ty_spec_image` values('78','85','','2');");
E_D("replace into `ty_spec_image` values('78','86','','2');");
E_D("replace into `ty_spec_image` values('79','82','','2');");
E_D("replace into `ty_spec_image` values('79','83','','2');");
E_D("replace into `ty_spec_image` values('79','84','','2');");
E_D("replace into `ty_spec_image` values('79','85','','2');");
E_D("replace into `ty_spec_image` values('79','86','','2');");
E_D("replace into `ty_spec_image` values('80','87','','2');");
E_D("replace into `ty_spec_image` values('80','88','','2');");
E_D("replace into `ty_spec_image` values('80','89','','2');");
E_D("replace into `ty_spec_image` values('80','90','','2');");
E_D("replace into `ty_spec_image` values('80','91','','2');");
E_D("replace into `ty_spec_image` values('80','92','','2');");
E_D("replace into `ty_spec_image` values('80','93','','2');");
E_D("replace into `ty_spec_image` values('80','94','','2');");
E_D("replace into `ty_spec_image` values('80','95','','2');");
E_D("replace into `ty_spec_image` values('80','96','','2');");
E_D("replace into `ty_spec_image` values('80','97','','2');");
E_D("replace into `ty_spec_image` values('80','98','','2');");
E_D("replace into `ty_spec_image` values('81','87','','2');");
E_D("replace into `ty_spec_image` values('81','88','','2');");
E_D("replace into `ty_spec_image` values('81','89','','2');");
E_D("replace into `ty_spec_image` values('81','90','','2');");
E_D("replace into `ty_spec_image` values('81','91','','2');");
E_D("replace into `ty_spec_image` values('81','92','','2');");
E_D("replace into `ty_spec_image` values('81','93','','2');");
E_D("replace into `ty_spec_image` values('81','94','','2');");
E_D("replace into `ty_spec_image` values('81','95','','2');");
E_D("replace into `ty_spec_image` values('81','96','','2');");
E_D("replace into `ty_spec_image` values('81','97','','2');");
E_D("replace into `ty_spec_image` values('81','98','','2');");
E_D("replace into `ty_spec_image` values('84','77','','2');");
E_D("replace into `ty_spec_image` values('84','78','','2');");
E_D("replace into `ty_spec_image` values('84','79','','2');");
E_D("replace into `ty_spec_image` values('84','80','','2');");
E_D("replace into `ty_spec_image` values('84','81','','2');");
E_D("replace into `ty_spec_image` values('85','77','','2');");
E_D("replace into `ty_spec_image` values('85','78','','2');");
E_D("replace into `ty_spec_image` values('85','79','','2');");
E_D("replace into `ty_spec_image` values('85','80','','2');");
E_D("replace into `ty_spec_image` values('85','81','','2');");
E_D("replace into `ty_spec_image` values('86','77','','2');");
E_D("replace into `ty_spec_image` values('86','78','','2');");
E_D("replace into `ty_spec_image` values('86','79','','2');");
E_D("replace into `ty_spec_image` values('86','80','','2');");
E_D("replace into `ty_spec_image` values('86','81','','2');");
E_D("replace into `ty_spec_image` values('77','77','','2');");
E_D("replace into `ty_spec_image` values('77','78','','2');");
E_D("replace into `ty_spec_image` values('77','79','','2');");
E_D("replace into `ty_spec_image` values('77','80','','2');");
E_D("replace into `ty_spec_image` values('77','81','','2');");
E_D("replace into `ty_spec_image` values('59','62','','2');");
E_D("replace into `ty_spec_image` values('59','63','','2');");
E_D("replace into `ty_spec_image` values('59','64','','2');");
E_D("replace into `ty_spec_image` values('59','65','','2');");
E_D("replace into `ty_spec_image` values('59','66','','2');");
E_D("replace into `ty_spec_image` values('59','67','','2');");
E_D("replace into `ty_spec_image` values('59','68','','2');");
E_D("replace into `ty_spec_image` values('53','60','','2');");
E_D("replace into `ty_spec_image` values('53','61','','2');");
E_D("replace into `ty_spec_image` values('1','11','','2');");
E_D("replace into `ty_spec_image` values('1','12','','2');");
E_D("replace into `ty_spec_image` values('1','13','','2');");
E_D("replace into `ty_spec_image` values('1','14','','2');");
E_D("replace into `ty_spec_image` values('1','28','','2');");
E_D("replace into `ty_spec_image` values('1','101','','2');");
E_D("replace into `ty_spec_image` values('1','102','','2');");
E_D("replace into `ty_spec_image` values('1','21','','2');");
E_D("replace into `ty_spec_image` values('1','23','','2');");
E_D("replace into `ty_spec_image` values('1','55','/Public/upload/goods/2016/03-09/56e01cdaf3fc7.jpg','2');");
E_D("replace into `ty_spec_image` values('1','56','','2');");
E_D("replace into `ty_spec_image` values('1','57','','2');");
E_D("replace into `ty_spec_image` values('1','99','/Public/upload/goods/2016/03-09/56e01ccaa98c4.jpg','2');");
E_D("replace into `ty_spec_image` values('1','100','/Public/upload/goods/2016/03-09/56e01cc3550b3.jpg','2');");
E_D("replace into `ty_spec_image` values('76','77','','2');");
E_D("replace into `ty_spec_image` values('76','78','','2');");
E_D("replace into `ty_spec_image` values('76','79','','2');");
E_D("replace into `ty_spec_image` values('76','80','','2');");
E_D("replace into `ty_spec_image` values('76','81','','2');");
E_D("replace into `ty_spec_image` values('56','62','','2');");
E_D("replace into `ty_spec_image` values('56','63','','2');");
E_D("replace into `ty_spec_image` values('56','64','','2');");
E_D("replace into `ty_spec_image` values('56','65','','2');");
E_D("replace into `ty_spec_image` values('56','66','','2');");
E_D("replace into `ty_spec_image` values('56','67','','2');");
E_D("replace into `ty_spec_image` values('56','68','','2');");
E_D("replace into `ty_spec_image` values('105','11','','2');");
E_D("replace into `ty_spec_image` values('105','12','','2');");
E_D("replace into `ty_spec_image` values('105','13','','2');");
E_D("replace into `ty_spec_image` values('105','14','','2');");
E_D("replace into `ty_spec_image` values('105','28','','2');");
E_D("replace into `ty_spec_image` values('105','101','','2');");
E_D("replace into `ty_spec_image` values('105','102','','2');");
E_D("replace into `ty_spec_image` values('105','21','','2');");
E_D("replace into `ty_spec_image` values('105','23','','2');");
E_D("replace into `ty_spec_image` values('105','55','','2');");
E_D("replace into `ty_spec_image` values('105','56','','2');");
E_D("replace into `ty_spec_image` values('105','57','','2');");
E_D("replace into `ty_spec_image` values('105','99','','2');");
E_D("replace into `ty_spec_image` values('105','100','','2');");
E_D("replace into `ty_spec_image` values('121','103','','2');");
E_D("replace into `ty_spec_image` values('121','104','','2');");
E_D("replace into `ty_spec_image` values('121','105','','2');");
E_D("replace into `ty_spec_image` values('122','103','','2');");
E_D("replace into `ty_spec_image` values('122','104','','2');");
E_D("replace into `ty_spec_image` values('122','105','','2');");
E_D("replace into `ty_spec_image` values('132','106','','2');");
E_D("replace into `ty_spec_image` values('132','107','','2');");
E_D("replace into `ty_spec_image` values('132','108','','2');");
E_D("replace into `ty_spec_image` values('132','109','','2');");
E_D("replace into `ty_spec_image` values('132','110','','2');");
E_D("replace into `ty_spec_image` values('132','111','','2');");
E_D("replace into `ty_spec_image` values('133','106','','2');");
E_D("replace into `ty_spec_image` values('133','107','','2');");
E_D("replace into `ty_spec_image` values('133','108','','2');");
E_D("replace into `ty_spec_image` values('133','109','','2');");
E_D("replace into `ty_spec_image` values('133','110','','2');");
E_D("replace into `ty_spec_image` values('133','111','','2');");
E_D("replace into `ty_spec_image` values('134','106','','2');");
E_D("replace into `ty_spec_image` values('134','107','','2');");
E_D("replace into `ty_spec_image` values('134','108','','2');");
E_D("replace into `ty_spec_image` values('134','109','','2');");
E_D("replace into `ty_spec_image` values('134','110','','2');");
E_D("replace into `ty_spec_image` values('134','111','','2');");
E_D("replace into `ty_spec_image` values('137','106','','2');");
E_D("replace into `ty_spec_image` values('137','107','','2');");
E_D("replace into `ty_spec_image` values('137','108','','2');");
E_D("replace into `ty_spec_image` values('137','109','','2');");
E_D("replace into `ty_spec_image` values('137','110','','2');");
E_D("replace into `ty_spec_image` values('137','111','','2');");
E_D("replace into `ty_spec_image` values('137','112','','2');");
E_D("replace into `ty_spec_image` values('137','113','','2');");
E_D("replace into `ty_spec_image` values('138','106','','2');");
E_D("replace into `ty_spec_image` values('138','107','','2');");
E_D("replace into `ty_spec_image` values('138','108','','2');");
E_D("replace into `ty_spec_image` values('138','109','','2');");
E_D("replace into `ty_spec_image` values('138','110','','2');");
E_D("replace into `ty_spec_image` values('138','111','','2');");
E_D("replace into `ty_spec_image` values('138','112','','2');");
E_D("replace into `ty_spec_image` values('138','113','','2');");
E_D("replace into `ty_spec_image` values('139','106','','2');");
E_D("replace into `ty_spec_image` values('139','107','','2');");
E_D("replace into `ty_spec_image` values('139','108','','2');");
E_D("replace into `ty_spec_image` values('139','109','','2');");
E_D("replace into `ty_spec_image` values('139','110','','2');");
E_D("replace into `ty_spec_image` values('139','111','','2');");
E_D("replace into `ty_spec_image` values('139','112','','2');");
E_D("replace into `ty_spec_image` values('139','113','','2');");
E_D("replace into `ty_spec_image` values('140','11','','2');");
E_D("replace into `ty_spec_image` values('140','12','','2');");
E_D("replace into `ty_spec_image` values('140','13','','2');");
E_D("replace into `ty_spec_image` values('140','14','','2');");
E_D("replace into `ty_spec_image` values('140','28','','2');");
E_D("replace into `ty_spec_image` values('140','101','','2');");
E_D("replace into `ty_spec_image` values('140','102','','2');");
E_D("replace into `ty_spec_image` values('140','21','','2');");
E_D("replace into `ty_spec_image` values('140','23','','2');");
E_D("replace into `ty_spec_image` values('140','55','','2');");
E_D("replace into `ty_spec_image` values('140','56','','2');");
E_D("replace into `ty_spec_image` values('140','57','','2');");
E_D("replace into `ty_spec_image` values('140','99','','2');");
E_D("replace into `ty_spec_image` values('140','100','','2');");
E_D("replace into `ty_spec_image` values('141','11','','2');");
E_D("replace into `ty_spec_image` values('141','12','','2');");
E_D("replace into `ty_spec_image` values('141','13','','2');");
E_D("replace into `ty_spec_image` values('141','14','','2');");
E_D("replace into `ty_spec_image` values('141','28','','2');");
E_D("replace into `ty_spec_image` values('141','101','','2');");
E_D("replace into `ty_spec_image` values('141','102','','2');");
E_D("replace into `ty_spec_image` values('141','21','','2');");
E_D("replace into `ty_spec_image` values('141','23','','2');");
E_D("replace into `ty_spec_image` values('141','55','','2');");
E_D("replace into `ty_spec_image` values('141','56','','2');");
E_D("replace into `ty_spec_image` values('141','57','','2');");
E_D("replace into `ty_spec_image` values('141','99','','2');");
E_D("replace into `ty_spec_image` values('141','100','','2');");
E_D("replace into `ty_spec_image` values('50','11','','2');");
E_D("replace into `ty_spec_image` values('50','12','','2');");
E_D("replace into `ty_spec_image` values('50','13','','2');");
E_D("replace into `ty_spec_image` values('50','14','','2');");
E_D("replace into `ty_spec_image` values('50','28','','2');");
E_D("replace into `ty_spec_image` values('50','101','','2');");
E_D("replace into `ty_spec_image` values('50','102','','2');");
E_D("replace into `ty_spec_image` values('50','21','','2');");
E_D("replace into `ty_spec_image` values('50','23','','2');");
E_D("replace into `ty_spec_image` values('50','55','/Public/upload/goods/2016/01-13/56960719d2510.jpg','2');");
E_D("replace into `ty_spec_image` values('50','56','/Public/upload/goods/2016/01-13/5696072174fbf.jpg','2');");
E_D("replace into `ty_spec_image` values('50','57','/Public/upload/goods/2016/01-13/569607272b113.jpg','2');");
E_D("replace into `ty_spec_image` values('50','99','','2');");
E_D("replace into `ty_spec_image` values('50','100','','2');");
E_D("replace into `ty_spec_image` values('149','1','','2');");
E_D("replace into `ty_spec_image` values('149','18','','2');");
E_D("replace into `ty_spec_image` values('149','3','','2');");
E_D("replace into `ty_spec_image` values('149','17','','2');");
E_D("replace into `ty_spec_image` values('149','55','','2');");
E_D("replace into `ty_spec_image` values('149','56','','2');");
E_D("replace into `ty_spec_image` values('149','57','','2');");
E_D("replace into `ty_spec_image` values('149','99','','2');");
E_D("replace into `ty_spec_image` values('149','100','','2');");
E_D("replace into `ty_spec_image` values('115','55','','2');");
E_D("replace into `ty_spec_image` values('115','56','','2');");
E_D("replace into `ty_spec_image` values('115','57','','2');");
E_D("replace into `ty_spec_image` values('115','99','','2');");
E_D("replace into `ty_spec_image` values('115','100','','2');");
E_D("replace into `ty_spec_image` values('157','164','','3');");
E_D("replace into `ty_spec_image` values('116','55','','2');");
E_D("replace into `ty_spec_image` values('116','56','','2');");
E_D("replace into `ty_spec_image` values('116','57','','2');");
E_D("replace into `ty_spec_image` values('116','99','','2');");
E_D("replace into `ty_spec_image` values('116','100','','2');");
E_D("replace into `ty_spec_image` values('117','55','','2');");
E_D("replace into `ty_spec_image` values('117','56','','2');");
E_D("replace into `ty_spec_image` values('117','57','','2');");
E_D("replace into `ty_spec_image` values('117','99','','2');");
E_D("replace into `ty_spec_image` values('117','100','','2');");
E_D("replace into `ty_spec_image` values('118','55','','2');");
E_D("replace into `ty_spec_image` values('118','56','','2');");
E_D("replace into `ty_spec_image` values('118','57','','2');");
E_D("replace into `ty_spec_image` values('118','99','','2');");
E_D("replace into `ty_spec_image` values('118','100','','2');");
E_D("replace into `ty_spec_image` values('120','55','','2');");
E_D("replace into `ty_spec_image` values('120','56','','2');");
E_D("replace into `ty_spec_image` values('120','57','','2');");
E_D("replace into `ty_spec_image` values('120','99','','2');");
E_D("replace into `ty_spec_image` values('120','100','','2');");
E_D("replace into `ty_spec_image` values('119','55','','2');");
E_D("replace into `ty_spec_image` values('119','56','','2');");
E_D("replace into `ty_spec_image` values('119','57','','2');");
E_D("replace into `ty_spec_image` values('119','99','','2');");
E_D("replace into `ty_spec_image` values('119','100','','2');");
E_D("replace into `ty_spec_image` values('65','55','','2');");
E_D("replace into `ty_spec_image` values('65','56','','2');");
E_D("replace into `ty_spec_image` values('65','57','','2');");
E_D("replace into `ty_spec_image` values('65','99','','2');");
E_D("replace into `ty_spec_image` values('65','100','','2');");
E_D("replace into `ty_spec_image` values('104','55','/Public/upload/goods/2016/03-12/56e3e6ce7efcb.jpg','2');");
E_D("replace into `ty_spec_image` values('104','56','/Public/upload/goods/2016/03-12/56e3e6dae9b86.jpg','2');");
E_D("replace into `ty_spec_image` values('104','57','/Public/upload/goods/2016/03-12/56e3e6e13859a.jpg','2');");
E_D("replace into `ty_spec_image` values('104','99','','2');");
E_D("replace into `ty_spec_image` values('104','100','','2');");
E_D("replace into `ty_spec_image` values('97','55','','2');");
E_D("replace into `ty_spec_image` values('97','56','','2');");
E_D("replace into `ty_spec_image` values('97','57','','2');");
E_D("replace into `ty_spec_image` values('97','99','','2');");
E_D("replace into `ty_spec_image` values('97','100','','2');");
E_D("replace into `ty_spec_image` values('142','55','','2');");
E_D("replace into `ty_spec_image` values('142','56','','2');");
E_D("replace into `ty_spec_image` values('142','57','','2');");
E_D("replace into `ty_spec_image` values('142','99','','2');");
E_D("replace into `ty_spec_image` values('142','100','','2');");
E_D("replace into `ty_spec_image` values('142','58','','2');");
E_D("replace into `ty_spec_image` values('142','59','','2');");
E_D("replace into `ty_spec_image` values('143','55','','2');");
E_D("replace into `ty_spec_image` values('143','56','','2');");
E_D("replace into `ty_spec_image` values('143','57','','2');");
E_D("replace into `ty_spec_image` values('143','99','','2');");
E_D("replace into `ty_spec_image` values('143','100','','2');");
E_D("replace into `ty_spec_image` values('156','55','','2');");
E_D("replace into `ty_spec_image` values('156','56','','2');");
E_D("replace into `ty_spec_image` values('156','57','','2');");
E_D("replace into `ty_spec_image` values('156','99','','2');");
E_D("replace into `ty_spec_image` values('156','100','','2');");
E_D("replace into `ty_spec_image` values('156','58','','2');");
E_D("replace into `ty_spec_image` values('156','59','','2');");
E_D("replace into `ty_spec_image` values('136','55','','2');");
E_D("replace into `ty_spec_image` values('136','56','','2');");
E_D("replace into `ty_spec_image` values('136','57','','2');");
E_D("replace into `ty_spec_image` values('136','99','','2');");
E_D("replace into `ty_spec_image` values('136','100','','2');");
E_D("replace into `ty_spec_image` values('135','55','','2');");
E_D("replace into `ty_spec_image` values('135','56','','2');");
E_D("replace into `ty_spec_image` values('135','57','','2');");
E_D("replace into `ty_spec_image` values('135','99','','2');");
E_D("replace into `ty_spec_image` values('135','100','','2');");
E_D("replace into `ty_spec_image` values('159','55','','2');");
E_D("replace into `ty_spec_image` values('159','56','','2');");
E_D("replace into `ty_spec_image` values('159','57','','2');");
E_D("replace into `ty_spec_image` values('159','99','','2');");
E_D("replace into `ty_spec_image` values('159','100','','2');");

require("../../inc/footer.php");
?>