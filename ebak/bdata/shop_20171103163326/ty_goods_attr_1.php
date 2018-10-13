<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ty_goods_attr`;");
E_C("CREATE TABLE `ty_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品属性id自增',
  `goods_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商品id',
  `attr_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '属性id',
  `attr_value` text NOT NULL COMMENT '属性值',
  `attr_price` varchar(255) NOT NULL DEFAULT '' COMMENT '属性价格',
  PRIMARY KEY (`goods_attr_id`),
  KEY `goods_id` (`goods_id`) USING BTREE,
  KEY `attr_id` (`attr_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1033 DEFAULT CHARSET=utf8");
E_D("replace into `ty_goods_attr` values('807','59','254','支持\r\n','0');");
E_D("replace into `ty_goods_attr` values('824','56','252','30','0');");
E_D("replace into `ty_goods_attr` values('410','40','224','四核','0');");
E_D("replace into `ty_goods_attr` values('409','40','223','Android ','0');");
E_D("replace into `ty_goods_attr` values('351','33','172','2008年01月','0');");
E_D("replace into `ty_goods_attr` values('352','33','173','CDMA','0');");
E_D("replace into `ty_goods_attr` values('353','33','174','3re','0');");
E_D("replace into `ty_goods_attr` values('354','33','175','3ew','0');");
E_D("replace into `ty_goods_attr` values('355','33','176','3e','0');");
E_D("replace into `ty_goods_attr` values('356','33','177','543','0');");
E_D("replace into `ty_goods_attr` values('357','33','178','滑盖','0');");
E_D("replace into `ty_goods_attr` values('358','33','179','342','0');");
E_D("replace into `ty_goods_attr` values('359','33','180','2e','0');");
E_D("replace into `ty_goods_attr` values('360','33','180','3432t','0');");
E_D("replace into `ty_goods_attr` values('361','33','180','wedfsce','0');");
E_D("replace into `ty_goods_attr` values('362','33','181','g','0');");
E_D("replace into `ty_goods_attr` values('363','33','181','3rew','0');");
E_D("replace into `ty_goods_attr` values('364','33','182','qw','0');");
E_D("replace into `ty_goods_attr` values('365','33','183','f','0');");
E_D("replace into `ty_goods_attr` values('366','33','184','d','0');");
E_D("replace into `ty_goods_attr` values('367','33','185','蓝色','0');");
E_D("replace into `ty_goods_attr` values('368','33','185','深李色','0');");
E_D("replace into `ty_goods_attr` values('369','33','186','262144万','0');");
E_D("replace into `ty_goods_attr` values('370','33','187','TFT','0');");
E_D("replace into `ty_goods_attr` values('371','33','188','240×320 像素','0');");
E_D("replace into `ty_goods_attr` values('372','33','189','fcd','0');");
E_D("replace into `ty_goods_attr` values('373','33','190','gdsc','0');");
E_D("replace into `ty_goods_attr` values('374','33','191','gfdv','0');");
E_D("replace into `ty_goods_attr` values('375','33','192','gdfc','0');");
E_D("replace into `ty_goods_attr` values('376','33','193','rfgv','0');");
E_D("replace into `ty_goods_attr` values('377','33','194','vgrf','0');");
E_D("replace into `ty_goods_attr` values('378','33','195','gr','0');");
E_D("replace into `ty_goods_attr` values('379','33','196','grevg','0');");
E_D("replace into `ty_goods_attr` values('380','33','197','dfv','0');");
E_D("replace into `ty_goods_attr` values('381','33','198','fv','0');");
E_D("replace into `ty_goods_attr` values('382','33','199','rgre','0');");
E_D("replace into `ty_goods_attr` values('383','33','200','vferg','0');");
E_D("replace into `ty_goods_attr` values('384','33','201','rg','0');");
E_D("replace into `ty_goods_attr` values('385','33','202','rg','0');");
E_D("replace into `ty_goods_attr` values('386','33','203','rvrf','0');");
E_D("replace into `ty_goods_attr` values('387','33','204','gr','0');");
E_D("replace into `ty_goods_attr` values('388','33','205','vgr','0');");
E_D("replace into `ty_goods_attr` values('389','33','206','vgfdg','0');");
E_D("replace into `ty_goods_attr` values('390','33','207','rgr','0');");
E_D("replace into `ty_goods_attr` values('391','33','208','gr','0');");
E_D("replace into `ty_goods_attr` values('392','33','209','vgr','0');");
E_D("replace into `ty_goods_attr` values('393','33','210','数据线','0');");
E_D("replace into `ty_goods_attr` values('447','46','68','16G','0');");
E_D("replace into `ty_goods_attr` values('448','46','69','EMUI 3.1（兼容Android 5.1）','0');");
E_D("replace into `ty_goods_attr` values('451','46','75','内置','0');");
E_D("replace into `ty_goods_attr` values('454','46','80','BT4.1','0');");
E_D("replace into `ty_goods_attr` values('455','46','81','低价机','0');");
E_D("replace into `ty_goods_attr` values('479','48','68','16G','0');");
E_D("replace into `ty_goods_attr` values('480','48','69','华为 EMUI 3.1（兼容 Android 5.0）','0');");
E_D("replace into `ty_goods_attr` values('481','48','75','内置','0');");
E_D("replace into `ty_goods_attr` values('484','48','80','BT4.1，支持BT4.1+LE','0');");
E_D("replace into `ty_goods_attr` values('485','48','81','高价机','0');");
E_D("replace into `ty_goods_attr` values('493','49','68','16G','0');");
E_D("replace into `ty_goods_attr` values('494','49','69','EMUI 3.1（兼容Android 5.1）','0');");
E_D("replace into `ty_goods_attr` values('497','49','75','内置','0');");
E_D("replace into `ty_goods_attr` values('500','49','80','BT4.1','0');");
E_D("replace into `ty_goods_attr` values('501','49','81','低价机','0');");
E_D("replace into `ty_goods_attr` values('502','50','172','2008年06月','0');");
E_D("replace into `ty_goods_attr` values('504','50','174','通话时间上限420分钟（2G，取决实际网络环境）','0');");
E_D("replace into `ty_goods_attr` values('505','50','175','待机时间上限200小时（4G，取决实际网络环境）','0');");
E_D("replace into `ty_goods_attr` values('987','50','185','黑色','0');");
E_D("replace into `ty_goods_attr` values('986','50','185','黑色','0');");
E_D("replace into `ty_goods_attr` values('508','50','180','microSD 卡','0');");
E_D("replace into `ty_goods_attr` values('509','50','181','16G','0');");
E_D("replace into `ty_goods_attr` values('510','50','182','Android 5.1','0');");
E_D("replace into `ty_goods_attr` values('511','50','184','143.5mm×71.0mm×7.6mm','0');");
E_D("replace into `ty_goods_attr` values('512','50','185','黑色','0');");
E_D("replace into `ty_goods_attr` values('985','50','185','黑色','0');");
E_D("replace into `ty_goods_attr` values('514','50','186','1600万','0');");
E_D("replace into `ty_goods_attr` values('515','50','187','TFT','0');");
E_D("replace into `ty_goods_attr` values('516','50','188','176x220 像素','0');");
E_D("replace into `ty_goods_attr` values('517','50','189','5英寸','0');");
E_D("replace into `ty_goods_attr` values('518','50','190','华为输入法','0');");
E_D("replace into `ty_goods_attr` values('519','50','195','POP3/IMAP/Exchange','0');");
E_D("replace into `ty_goods_attr` values('520','50','199','1300','0');");
E_D("replace into `ty_goods_attr` values('521','50','205','1.5GHz','0');");
E_D("replace into `ty_goods_attr` values('522','50','206','支持','0');");
E_D("replace into `ty_goods_attr` values('523','50','207','3.5mm标准耳机孔','0');");
E_D("replace into `ty_goods_attr` values('524','50','208','支持','0');");
E_D("replace into `ty_goods_attr` values('525','50','209','EMUI浏览器','0');");
E_D("replace into `ty_goods_attr` values('526','50','210','线控耳机','0');");
E_D("replace into `ty_goods_attr` values('534','51','68','16G','0');");
E_D("replace into `ty_goods_attr` values('535','51','69','	华为 EMUI 4.0（兼容Android 6.0）','0');");
E_D("replace into `ty_goods_attr` values('538','51','75','内置','0');");
E_D("replace into `ty_goods_attr` values('540','51','80','BT4.2 支持BLE','0');");
E_D("replace into `ty_goods_attr` values('541','51','81','高价机','0');");
E_D("replace into `ty_goods_attr` values('542','52','225','荣耀 HONOR','0');");
E_D("replace into `ty_goods_attr` values('543','52','226','WS851','0');");
E_D("replace into `ty_goods_attr` values('544','52','227','海思Hi5650T ARM Cortex-A9双核1GHz','0');");
E_D("replace into `ty_goods_attr` values('545','52','228','256MB DDR3','0');");
E_D("replace into `ty_goods_attr` values('546','52','229','高性能双频巴伦天线','0');");
E_D("replace into `ty_goods_attr` values('547','52','230','支持','0');");
E_D("replace into `ty_goods_attr` values('548','52','231','2.4G 300Mbps和5G 867Mbps（内置4个信号放大器）','0');");
E_D("replace into `ty_goods_attr` values('549','52','232','IEEE 802.11b/g/n+IEEE 802.11a/n/ac','0');");
E_D("replace into `ty_goods_attr` values('550','52','233','2.4GHz+5GHz','0');");
E_D("replace into `ty_goods_attr` values('551','53','234','华为（HUAWEI）','0');");
E_D("replace into `ty_goods_attr` values('552','53','235','MediaQ M330','0');");
E_D("replace into `ty_goods_attr` values('553','53','236','海思 Hi3798M','0');");
E_D("replace into `ty_goods_attr` values('554','53','237','1 GB DDR3','0');");
E_D("replace into `ty_goods_attr` values('555','53','238','4GB','0');");
E_D("replace into `ty_goods_attr` values('556','53','239','Bluetooth 4.0','0');");
E_D("replace into `ty_goods_attr` values('557','53','240','	Micro SD（TF）存储卡，最高支持64G拓展','0');");
E_D("replace into `ty_goods_attr` values('558','53','241','	Android 4.4','0');");
E_D("replace into `ty_goods_attr` values('559','53','242','H.265及主流视频','0');");
E_D("replace into `ty_goods_attr` values('560','53','243','支持通过无线方式接入因特网，Wi-Fi 300Mbps 802.11b/g/n 2.4G, 华为专利天线','0');");
E_D("replace into `ty_goods_attr` values('561','53','244','1个，RJ45，10/100M','0');");
E_D("replace into `ty_goods_attr` values('562','53','245','1个，microSD 卡槽，支持64GByte','0');");
E_D("replace into `ty_goods_attr` values('563','53','246','1个，USB 2.0 接口，限流1A，支持热插拔 支持键盘、鼠标、U 盘、移动硬盘。支持有源 USB Hub。通过有源 USB Hub 支持至少5个 USB 设备工作','0');");
E_D("replace into `ty_goods_attr` values('564','53','247','红外遥控器','0');");
E_D("replace into `ty_goods_attr` values('565','53','248','88.5mm × 88.5mm × 15.5mm','0');");
E_D("replace into `ty_goods_attr` values('566','54','234','	荣耀','0');");
E_D("replace into `ty_goods_attr` values('567','54','235','MediaQ M321','0');");
E_D("replace into `ty_goods_attr` values('568','54','236','4核','0');");
E_D("replace into `ty_goods_attr` values('569','54','237','1GB','0');");
E_D("replace into `ty_goods_attr` values('570','54','238','4GB','0');");
E_D("replace into `ty_goods_attr` values('571','54','240','Micro SD（TF）存储卡，最高支持64G拓展','0');");
E_D("replace into `ty_goods_attr` values('572','54','241','Android4.4（通过Google CTS认证）','0');");
E_D("replace into `ty_goods_attr` values('573','54','242','支持H.265及常见主流格式','0');");
E_D("replace into `ty_goods_attr` values('574','54','244','	以太网口、AV复合视频输出接口 & SPDIF输出接口（二合一）','0');");
E_D("replace into `ty_goods_attr` values('575','54','245','支持','0');");
E_D("replace into `ty_goods_attr` values('576','54','246','USB2.0接口','0');");
E_D("replace into `ty_goods_attr` values('577','54','247','11键红外遥控器（超大角度遥控）+手机遥控','0');");
E_D("replace into `ty_goods_attr` values('578','54','248','85mm x 85mm x 15.5mm','0');");
E_D("replace into `ty_goods_attr` values('579','55','225','华为（HUAWEI）','0');");
E_D("replace into `ty_goods_attr` values('580','55','226','WS832','0');");
E_D("replace into `ty_goods_attr` values('581','55','229','2.4GHz、5GHz天线4根（单频专用磷铜材质、低损耗、5dBi高增益天线）','0');");
E_D("replace into `ty_goods_attr` values('582','55','230','不支持','0');");
E_D("replace into `ty_goods_attr` values('583','55','231','支持WiFi中继、2.4G WiFi/5G WiFi SSID独立配置、SSID隐藏、信道自动优选、发射功率按需调节、访客WiFi、WiFi定时关闭','0');");
E_D("replace into `ty_goods_attr` values('584','55','233','2.4G WiFi/5G WiFi','0');");
E_D("replace into `ty_goods_attr` values('585','56','249','创维(Skyworth)','0');");
E_D("replace into `ty_goods_attr` values('586','56','250','49M6','0');");
E_D("replace into `ty_goods_attr` values('587','56','251','3840×2160','0');");
E_D("replace into `ty_goods_attr` values('589','56','253','16:9','0');");
E_D("replace into `ty_goods_attr` values('590','56','254','支持','0');");
E_D("replace into `ty_goods_attr` values('591','56','255','一年','0');");
E_D("replace into `ty_goods_attr` values('592','57','249','TCL','0');");
E_D("replace into `ty_goods_attr` values('593','57','250','D50A710','0');");
E_D("replace into `ty_goods_attr` values('594','57','251','1920×1080','0');");
E_D("replace into `ty_goods_attr` values('595','57','252','50','0');");
E_D("replace into `ty_goods_attr` values('596','57','253','16:9','0');");
E_D("replace into `ty_goods_attr` values('597','57','254','不支持','0');");
E_D("replace into `ty_goods_attr` values('598','57','255','一年','0');");
E_D("replace into `ty_goods_attr` values('599','58','249','海信(Hisense)','0');");
E_D("replace into `ty_goods_attr` values('600','58','250','LED32EC290N	','0');");
E_D("replace into `ty_goods_attr` values('601','58','251','1366×768','0');");
E_D("replace into `ty_goods_attr` values('602','58','252','55','0');");
E_D("replace into `ty_goods_attr` values('603','58','253','16:9','0');");
E_D("replace into `ty_goods_attr` values('604','58','254','不支持','0');");
E_D("replace into `ty_goods_attr` values('605','58','255','一年','0');");
E_D("replace into `ty_goods_attr` values('606','59','249','酷开(Coocaa)','0');");
E_D("replace into `ty_goods_attr` values('607','59','250','K55','0');");
E_D("replace into `ty_goods_attr` values('608','59','251','1920×1080','0');");
E_D("replace into `ty_goods_attr` values('610','59','253','16:9','0');");
E_D("replace into `ty_goods_attr` values('613','60','249','创维彩电 55S9','0');");
E_D("replace into `ty_goods_attr` values('614','60','250','55S9','0');");
E_D("replace into `ty_goods_attr` values('615','60','251','1920×1080','0');");
E_D("replace into `ty_goods_attr` values('616','60','252','55','0');");
E_D("replace into `ty_goods_attr` values('617','60','253','16:9','0');");
E_D("replace into `ty_goods_attr` values('618','60','254','不支持','0');");
E_D("replace into `ty_goods_attr` values('619','60','255','一年','0');");
E_D("replace into `ty_goods_attr` values('620','61','249','海信(Hisense)','0');");
E_D("replace into `ty_goods_attr` values('621','61','250','LED55EC520UA','0');");
E_D("replace into `ty_goods_attr` values('622','61','251','3840×2160','0');");
E_D("replace into `ty_goods_attr` values('623','61','252','55','0');");
E_D("replace into `ty_goods_attr` values('624','61','253','16:9','0');");
E_D("replace into `ty_goods_attr` values('625','61','254','不支持','0');");
E_D("replace into `ty_goods_attr` values('626','61','255','一年','0');");
E_D("replace into `ty_goods_attr` values('627','62','249','夏普(sharp)','0');");
E_D("replace into `ty_goods_attr` values('628','62','250','LCD-55S3A','0');");
E_D("replace into `ty_goods_attr` values('629','62','251','3840×2160','0');");
E_D("replace into `ty_goods_attr` values('630','62','252','55','0');");
E_D("replace into `ty_goods_attr` values('631','62','253','16:9','0');");
E_D("replace into `ty_goods_attr` values('632','62','254','不支持','0');");
E_D("replace into `ty_goods_attr` values('633','62','255','三年','0');");
E_D("replace into `ty_goods_attr` values('634','63','249','海力(Horion)','0');");
E_D("replace into `ty_goods_attr` values('635','63','250','55A1华数TV版','0');");
E_D("replace into `ty_goods_attr` values('636','63','251','3840×2160','0');");
E_D("replace into `ty_goods_attr` values('637','63','252','55','0');");
E_D("replace into `ty_goods_attr` values('638','63','253','16:9','0');");
E_D("replace into `ty_goods_attr` values('639','63','254','不支持','0');");
E_D("replace into `ty_goods_attr` values('640','63','255','一年','0');");
E_D("replace into `ty_goods_attr` values('641','64','249','微鲸(WHALEY)','0');");
E_D("replace into `ty_goods_attr` values('642','64','250','WTV43K1','0');");
E_D("replace into `ty_goods_attr` values('643','64','251','3840×2160','0');");
E_D("replace into `ty_goods_attr` values('644','64','252','40','0');");
E_D("replace into `ty_goods_attr` values('645','64','253','16:9','0');");
E_D("replace into `ty_goods_attr` values('646','64','254','不支持','0');");
E_D("replace into `ty_goods_attr` values('647','64','255','一年','0');");
E_D("replace into `ty_goods_attr` values('1032','159','81','中价机','0');");
E_D("replace into `ty_goods_attr` values('655','66','256','迎馨家纺','0');");
E_D("replace into `ty_goods_attr` values('656','66','257','四件套','0');");
E_D("replace into `ty_goods_attr` values('657','66','258','200×230cm','0');");
E_D("replace into `ty_goods_attr` values('658','66','259','1.5m床','0');");
E_D("replace into `ty_goods_attr` values('659','66','260','全棉','0');");
E_D("replace into `ty_goods_attr` values('660','66','261','床单x1，被套x1，枕套x2','0');");
E_D("replace into `ty_goods_attr` values('661','67','256','迎馨','0');");
E_D("replace into `ty_goods_attr` values('662','67','257','四件套','0');");
E_D("replace into `ty_goods_attr` values('663','67','258','200×230cm,其他','0');");
E_D("replace into `ty_goods_attr` values('664','67','259','1.5m床','0');");
E_D("replace into `ty_goods_attr` values('665','67','260','全棉','0');");
E_D("replace into `ty_goods_attr` values('666','67','261','被套x1、床单x1、枕套x2','0');");
E_D("replace into `ty_goods_attr` values('667','68','262','东联','0');");
E_D("replace into `ty_goods_attr` values('668','68','263','	x109','0');");
E_D("replace into `ty_goods_attr` values('669','68','264','简约现代','0');");
E_D("replace into `ty_goods_attr` values('670','68','265','亚克力','0');");
E_D("replace into `ty_goods_attr` values('671','68','266','LED光源','0');");
E_D("replace into `ty_goods_attr` values('672','68','267','客厅','0');");
E_D("replace into `ty_goods_attr` values('673','68','268','10W-10W以上','0');");
E_D("replace into `ty_goods_attr` values('674','68','269','8个','0');");
E_D("replace into `ty_goods_attr` values('675','69','262','VNC','0');");
E_D("replace into `ty_goods_attr` values('676','69','264','简约现代','0');");
E_D("replace into `ty_goods_attr` values('677','69','265','亚克力','0');");
E_D("replace into `ty_goods_attr` values('678','69','266','节能灯','0');");
E_D("replace into `ty_goods_attr` values('679','69','267','客厅','0');");
E_D("replace into `ty_goods_attr` values('680','69','268','10W-10W以上','0');");
E_D("replace into `ty_goods_attr` values('681','69','269','1个','0');");
E_D("replace into `ty_goods_attr` values('682','70','270','布雷尔(BULEIER)','0');");
E_D("replace into `ty_goods_attr` values('683','70','271','木质,皮质','0');");
E_D("replace into `ty_goods_attr` values('684','70','273','否','0');");
E_D("replace into `ty_goods_attr` values('685','70','272','是','0');");
E_D("replace into `ty_goods_attr` values('686','70','274','K082','0');");
E_D("replace into `ty_goods_attr` values('687','70','275','300千克','0');");
E_D("replace into `ty_goods_attr` values('688','70','276','90千克','0');");
E_D("replace into `ty_goods_attr` values('689','70','277','1.3立方米','0');");
E_D("replace into `ty_goods_attr` values('690','70','278','180×200','0');");
E_D("replace into `ty_goods_attr` values('691','71','270','布雷尔(BULEIER)','0');");
E_D("replace into `ty_goods_attr` values('692','71','271','木质,皮质','0');");
E_D("replace into `ty_goods_attr` values('693','71','272','是','0');");
E_D("replace into `ty_goods_attr` values('694','71','273','否','0');");
E_D("replace into `ty_goods_attr` values('695','71','274','K035','0');");
E_D("replace into `ty_goods_attr` values('696','71','275','200千克','0');");
E_D("replace into `ty_goods_attr` values('697','71','276','60千克','0');");
E_D("replace into `ty_goods_attr` values('698','71','277','1.3立方米','0');");
E_D("replace into `ty_goods_attr` values('699','71','278','180×200','0');");
E_D("replace into `ty_goods_attr` values('700','72','279','天堂','0');");
E_D("replace into `ty_goods_attr` values('701','72','280','手动','0');");
E_D("replace into `ty_goods_attr` values('702','72','281','聚酯纤维100%','0');");
E_D("replace into `ty_goods_attr` values('703','72','282','不锈钢','0');");
E_D("replace into `ty_goods_attr` values('704','72','283','晴雨伞','0');");
E_D("replace into `ty_goods_attr` values('705','73','279','天堂','0');");
E_D("replace into `ty_goods_attr` values('706','73','280','手动	','0');");
E_D("replace into `ty_goods_attr` values('707','73','281','聚酯纤维100%','0');");
E_D("replace into `ty_goods_attr` values('708','73','282','不锈钢','0');");
E_D("replace into `ty_goods_attr` values('709','73','283','晴雨两用	','0');");
E_D("replace into `ty_goods_attr` values('710','74','284','利林	','0');");
E_D("replace into `ty_goods_attr` values('711','74','285','陶瓷','0');");
E_D("replace into `ty_goods_attr` values('712','74','286','11112','0');");
E_D("replace into `ty_goods_attr` values('713','74','287','景德镇','0');");
E_D("replace into `ty_goods_attr` values('714','74','288','6000克','0');");
E_D("replace into `ty_goods_attr` values('715','75','284','利林	','0');");
E_D("replace into `ty_goods_attr` values('716','75','286','L811','0');");
E_D("replace into `ty_goods_attr` values('717','75','287','景德镇','0');");
E_D("replace into `ty_goods_attr` values('718','75','288','6500克','0');");
E_D("replace into `ty_goods_attr` values('719','76','289','聚酯纤维','0');");
E_D("replace into `ty_goods_attr` values('720','76','290','修身','0');");
E_D("replace into `ty_goods_attr` values('806','59','252','30\r\n','0');");
E_D("replace into `ty_goods_attr` values('725','80','292','法·娇兰','0');");
E_D("replace into `ty_goods_attr` values('726','80','293','F15DW11019','0');");
E_D("replace into `ty_goods_attr` values('727','80','294','上薄下厚模杯','0');");
E_D("replace into `ty_goods_attr` values('728','80','295','锦纶','0');");
E_D("replace into `ty_goods_attr` values('729','80','296','无插片','0');");
E_D("replace into `ty_goods_attr` values('730','80','297','三排搭扣','0');");
E_D("replace into `ty_goods_attr` values('731','80','298','可拆卸双肩带','0');");
E_D("replace into `ty_goods_attr` values('732','80','299','锦纶','0');");
E_D("replace into `ty_goods_attr` values('733','80','300','U型','0');");
E_D("replace into `ty_goods_attr` values('734','80','301','3/4罩杯','0');");
E_D("replace into `ty_goods_attr` values('735','80','302','无钢圈','0');");
E_D("replace into `ty_goods_attr` values('753','86','289','羊毛','0');");
E_D("replace into `ty_goods_attr` values('754','86','290','修身','0');");
E_D("replace into `ty_goods_attr` values('755','86','291','女士','0');");
E_D("replace into `ty_goods_attr` values('757','88','303','香奈儿','0');");
E_D("replace into `ty_goods_attr` values('758','88','304','女士香水','0');");
E_D("replace into `ty_goods_attr` values('759','88','305','3年','0');");
E_D("replace into `ty_goods_attr` values('760','88','306','法国','0');");
E_D("replace into `ty_goods_attr` values('761','88','307','花果香调','0');");
E_D("replace into `ty_goods_attr` values('762','88','308','通用','0');");
E_D("replace into `ty_goods_attr` values('763','88','309','其他','0');");
E_D("replace into `ty_goods_attr` values('764','88','310','35毫升','0');");
E_D("replace into `ty_goods_attr` values('765','89','303','VERSACE','0');");
E_D("replace into `ty_goods_attr` values('766','89','304','女士香水','0');");
E_D("replace into `ty_goods_attr` values('767','89','305','5年数','0');");
E_D("replace into `ty_goods_attr` values('768','89','306','意大利','0');");
E_D("replace into `ty_goods_attr` values('769','89','307','花果香调','0');");
E_D("replace into `ty_goods_attr` values('770','89','308','女士','0');");
E_D("replace into `ty_goods_attr` values('771','89','309','其他','0');");
E_D("replace into `ty_goods_attr` values('772','89','310','30ml','0');");
E_D("replace into `ty_goods_attr` values('773','90','303','迪奥','0');");
E_D("replace into `ty_goods_attr` values('774','90','304','迷你香水','0');");
E_D("replace into `ty_goods_attr` values('775','90','305','5年数','0');");
E_D("replace into `ty_goods_attr` values('776','90','306','法国','0');");
E_D("replace into `ty_goods_attr` values('777','90','307','花果香调	','0');");
E_D("replace into `ty_goods_attr` values('778','90','308','女士','0');");
E_D("replace into `ty_goods_attr` values('779','90','309','其他','0');");
E_D("replace into `ty_goods_attr` values('780','90','310','5毫升','0');");
E_D("replace into `ty_goods_attr` values('808','59','255','一年\r\n','0');");
E_D("replace into `ty_goods_attr` values('813','104','68','64G','0');");
E_D("replace into `ty_goods_attr` values('823','76','291','女士','0');");
E_D("replace into `ty_goods_attr` values('838','106','311','823x980x1891mm','0');");
E_D("replace into `ty_goods_attr` values('831','105','68','8G','0');");
E_D("replace into `ty_goods_attr` values('832','105','69','IOS','0');");
E_D("replace into `ty_goods_attr` values('833','105','75','内置','0');");
E_D("replace into `ty_goods_attr` values('836','105','81','高价机','0');");
E_D("replace into `ty_goods_attr` values('839','106','312','121kg','0');");
E_D("replace into `ty_goods_attr` values('840','106','313','海尔','0');");
E_D("replace into `ty_goods_attr` values('841','106','314','风冷','0');");
E_D("replace into `ty_goods_attr` values('843','107','316','680x590x910mm','0');");
E_D("replace into `ty_goods_attr` values('844','107','317','68kg','0');");
E_D("replace into `ty_goods_attr` values('845','107','318','Littleswan/小天鹅','0');");
E_D("replace into `ty_goods_attr` values('846','107','319','TG70-VT1263ED','0');");
E_D("replace into `ty_goods_attr` values('847','107','320','一级','0');");
E_D("replace into `ty_goods_attr` values('848','108','316','672x672x920mm','0');");
E_D("replace into `ty_goods_attr` values('849','108','317','76kg','0');");
E_D("replace into `ty_goods_attr` values('850','108','318','Haier/海尔','0');");
E_D("replace into `ty_goods_attr` values('851','108','319','EG8012B29WI','0');");
E_D("replace into `ty_goods_attr` values('852','108','320','一级','0');");
E_D("replace into `ty_goods_attr` values('853','109','311','950x778x1870mm','0');");
E_D("replace into `ty_goods_attr` values('854','109','312','109kg','0');");
E_D("replace into `ty_goods_attr` values('855','109','313','Midea/美的','0');");
E_D("replace into `ty_goods_attr` values('856','109','314','风冷','0');");
E_D("replace into `ty_goods_attr` values('857','109','315','一级','0');");
E_D("replace into `ty_goods_attr` values('858','110','311','633x651x1871mm','0');");
E_D("replace into `ty_goods_attr` values('859','110','312','74kg','0');");
E_D("replace into `ty_goods_attr` values('860','110','313','Ronshen/容声','0');");
E_D("replace into `ty_goods_attr` values('861','110','314','直冷','0');");
E_D("replace into `ty_goods_attr` values('862','110','315','一级','0');");
E_D("replace into `ty_goods_attr` values('863','111','316','624x553x1474mm','0');");
E_D("replace into `ty_goods_attr` values('864','111','317','47kg','0');");
E_D("replace into `ty_goods_attr` values('865','111','318','Haier/海尔','0');");
E_D("replace into `ty_goods_attr` values('866','111','319','BCD-160TMPQ','0');");
E_D("replace into `ty_goods_attr` values('867','111','320','一级','0');");
E_D("replace into `ty_goods_attr` values('868','112','311','873x980x1891mm','0');");
E_D("replace into `ty_goods_attr` values('869','112','312','130kg','0');");
E_D("replace into `ty_goods_attr` values('870','112','313','Haier/海尔','0');");
E_D("replace into `ty_goods_attr` values('871','112','314','风冷','0');");
E_D("replace into `ty_goods_attr` values('872','112','315','一级','0');");
E_D("replace into `ty_goods_attr` values('873','113','311','980x790x1840mm','0');");
E_D("replace into `ty_goods_attr` values('874','113','312','117kg','0');");
E_D("replace into `ty_goods_attr` values('875','113','313','SIEMENS/西门子','0');");
E_D("replace into `ty_goods_attr` values('876','113','314','风冷','0');");
E_D("replace into `ty_goods_attr` values('877','113','315','一级','0');");
E_D("replace into `ty_goods_attr` values('878','114','311','630x696x1862mm','0');");
E_D("replace into `ty_goods_attr` values('879','114','312','67kg','0');");
E_D("replace into `ty_goods_attr` values('880','114','313','MeiLing/美菱','0');");
E_D("replace into `ty_goods_attr` values('881','114','314','直冷','0');");
E_D("replace into `ty_goods_attr` values('882','114','315','一级','0');");
E_D("replace into `ty_goods_attr` values('901','121','321','科智 50000','0');");
E_D("replace into `ty_goods_attr` values('902','121','322','科智','0');");
E_D("replace into `ty_goods_attr` values('903','121','323','20000mAh','0');");
E_D("replace into `ty_goods_attr` values('904','123','324','佳能','0');");
E_D("replace into `ty_goods_attr` values('905','123','325','入门级','0');");
E_D("replace into `ty_goods_attr` values('906','123','326','3英寸','0');");
E_D("replace into `ty_goods_attr` values('907','123','327','SD卡','0');");
E_D("replace into `ty_goods_attr` values('908','123','328','2416万','0');");
E_D("replace into `ty_goods_attr` values('924','127','324','佳能','0');");
E_D("replace into `ty_goods_attr` values('925','127','325','中级','0');");
E_D("replace into `ty_goods_attr` values('926','127','326','3英寸','0');");
E_D("replace into `ty_goods_attr` values('927','127','327','SD卡','0');");
E_D("replace into `ty_goods_attr` values('928','127','328','2020万','0');");
E_D("replace into `ty_goods_attr` values('929','128','324','佳能','0');");
E_D("replace into `ty_goods_attr` values('930','128','325','入门级','0');");
E_D("replace into `ty_goods_attr` values('931','128','326','3英寸','0');");
E_D("replace into `ty_goods_attr` values('932','128','327','sd卡','0');");
E_D("replace into `ty_goods_attr` values('933','128','328','1600万及以上','0');");
E_D("replace into `ty_goods_attr` values('934','129','324','佳能','0');");
E_D("replace into `ty_goods_attr` values('935','129','325','入门级','0');");
E_D("replace into `ty_goods_attr` values('936','129','326','3英寸','0');");
E_D("replace into `ty_goods_attr` values('937','129','327','sd卡','0');");
E_D("replace into `ty_goods_attr` values('938','129','328','2000万','0');");
E_D("replace into `ty_goods_attr` values('1031','159','80','蓝牙4.0','0');");
E_D("replace into `ty_goods_attr` values('1030','159','75','内置','0');");
E_D("replace into `ty_goods_attr` values('1029','159','69','android4.0','0');");
E_D("replace into `ty_goods_attr` values('1028','159','68','8G','0');");
E_D("replace into `ty_goods_attr` values('981','50','173','GSM,850,900,1800,1900','0');");
E_D("replace into `ty_goods_attr` values('982','50','177','MIDI，MP3，AMR-NB，WAV，OGG，AAC','0');");
E_D("replace into `ty_goods_attr` values('983','50','178','翻盖','0');");
E_D("replace into `ty_goods_attr` values('984','50','185','黑色','0');");

require("../../inc/footer.php");
?>