CREATE TABLE wp_solar_data(
   id            INTEGER  NOT NULL PRIMARY KEY 
  ,type          VARCHAR(27) NOT NULL
  ,quantity      INTEGER  NOT NULL
  ,size          INTEGER  NOT NULL
  ,fixed_cost    VARCHAR(8) NOT NULL
  ,sys_size      INTEGER  NOT NULL
  ,g_available   VARCHAR(7) NOT NULL
  ,total         VARCHAR(7) NOT NULL
  ,extra         VARCHAR(30)
  ,additional    VARCHAR(30)
  ,discount      VARCHAR(30)
  ,base_cost     VARCHAR(8) NOT NULL
  ,gross_cost    VARCHAR(8) NOT NULL
  ,net_cost      VARCHAR(8) NOT NULL
  ,year          INTEGER  NOT NULL
  ,months        INTEGER  NOT NULL
  ,m_payment     NUMERIC(6,2) NOT NULL
  ,intro         VARCHAR(8) NOT NULL
  ,upfront       VARCHAR(8) NOT NULL
  ,total_upfront VARCHAR(8) NOT NULL
  ,net_upfront   VARCHAR(8) NOT NULL
);
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (1,'Just Energy - Residential',4,400,'3,540',1600,'1,440','1,440',NULL,NULL,NULL,'3,540','4,980','3,540',10,120,29.5,'29.50','4,980','4,582','3,142');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (2,'Just Energy - Residential',5,400,'4,740',2000,'1,800','1,800',NULL,NULL,NULL,'4,740','6,540','4,740',10,120,39.5,'39.50','6,540','6,017','4,217');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (3,'Just Energy - Residential',6,400,'4,860',2400,'1,920','1,920',NULL,NULL,NULL,'4,860','6,780','4,860',10,120,40.5,'40.50','6,780','6,238','4,318');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (4,'Just Energy - Residential',7,400,'6,715',2800,'2,040','2,040',NULL,NULL,NULL,'6,715','8,755','6,715',10,120,55.96,'55.96','8,755','8,055','6,015');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (5,'Just Energy - Residential',8,400,'6,595',3200,'2,160','2,160',NULL,NULL,NULL,'6,595','8,755','6,595',10,120,54.96,'54.96','8,755','8,055','5,895');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (6,'Just Energy - Residential',9,400,'7,296',3600,'2,280','2,280',NULL,NULL,NULL,'7,296','9,576','7,296',10,120,60.8,'60.80','9,576','8,810','6,530');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (7,'Just Energy - Residential',10,400,'7,997',4000,'2,400','2,400',NULL,NULL,NULL,'7,997','10,397','7,997',10,120,66.64,'66.64','10,397','9,565','7,165');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (8,'Just Energy - Residential',11,400,'8,818',4400,'2,515','2,515',NULL,NULL,NULL,'8,818','11,333','8,818',10,120,73.48,'73.48','11,333','10,426','7,911');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (9,'Just Energy - Residential',12,400,'9,638',4800,'2,400','2,400',NULL,NULL,NULL,'9,638','12,038','9,638',10,120,80.32,'80.32','12,038','11,075','8,675');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (10,'Just Energy - Residential',13,400,'10,459',5200,'2,400','2,400',NULL,NULL,NULL,'10,459','12,859','10,459',10,120,87.16,'87.16','12,859','11,830','9,430');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (11,'Just Energy - Residential',14,400,'11,280',5600,'2,400','2,400',NULL,NULL,NULL,'11,280','13,680','11,280',10,120,94,'94.00','13,680','12,586','10,186');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (12,'Just Energy - Residential',15,400,'12,101',6000,'2,400','2,400',NULL,NULL,NULL,'12,101','14,501','12,101',10,120,100.84,'100.84','14,501','13,341','10,941');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (13,'Just Energy - Residential',16,400,'12,922',6400,'2,400','2,400',NULL,NULL,NULL,'12,922','15,322','12,922',10,120,107.68,'107.68','15,322','14,096','11,696');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (14,'Just Energy - Residential',17,400,'13,742',6800,'2,400','2,400',NULL,NULL,NULL,'13,742','16,142','13,742',10,120,114.52,'114.52','16,142','14,851','12,451');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (15,'Just Energy - Residential',18,400,'14,563',7200,'2,400','2,400',NULL,NULL,NULL,'14,563','16,963','14,563',10,120,121.36,'121.36','16,963','15,606','13,206');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (16,'Just Energy - Residential',19,400,'15,384',7600,'2,400','2,400',NULL,NULL,NULL,'15,384','17,784','15,384',10,120,128.2,'128.20','17,784','16,361','13,961');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (17,'Just Energy - Residential',20,400,'16,205',8000,'2,400','2,400',NULL,NULL,NULL,'16,205','18,605','16,205',10,120,135.04,'135.04','18,605','17,117','14,717');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (18,'Energy & Hot Water Diverter',4,400,'5,460',1600,'1,680','1,680',NULL,NULL,NULL,'5,460','7,140','5,460',10,120,45.5,'45.50','7,140','6,569','4,889');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (19,'Energy & Hot Water Diverter',5,400,'6,180',2000,'1,800','1,800',NULL,NULL,NULL,'6,180','7,980','6,180',10,120,51.5,'51.50','7,980','7,342','5,542');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (20,'Energy & Hot Water Diverter',6,400,'6,780',2400,'1,920','1,920',NULL,NULL,NULL,'6,780','8,700','6,780',10,120,56.5,'56.50','8,700','8,004','6,084');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (21,'Energy & Hot Water Diverter',7,400,'7,380',2800,'2,040','2,040',NULL,NULL,NULL,'7,380','9,420','7,380',10,120,61.5,'61.50','9,420','8,666','6,626');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (22,'Energy & Hot Water Diverter',8,400,'7,931',3200,'2,160','2,160',NULL,NULL,NULL,'7,931','10,091','7,931',10,120,66.09,'66.09','10,091','9,284','7,124');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (23,'Energy & Hot Water Diverter',9,400,'8,632',3600,'2,280','2,280',NULL,NULL,NULL,'8,632','10,912','8,632',10,120,71.93,'71.93','10,912','10,039','7,759');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (24,'Energy & Hot Water Diverter',10,400,'9,333',4000,'2,400','2,400',NULL,NULL,NULL,'9,333','11,733','9,333',10,120,77.78,'77.78','11,733','10,794','8,394');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (25,'Energy & Hot Water Diverter',11,400,'10,039',4400,'2,515','2,515',NULL,NULL,NULL,'10,039','12,554','10,039',10,120,83.66,'83.66','12,554','11,550','9,035');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (26,'Energy & Hot Water Diverter',12,400,'10,974',4800,'2,400','2,400',NULL,NULL,NULL,'10,974','13,374','10,974',10,120,91.45,'91.45','13,374','12,304','9,904');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (27,'Energy & Hot Water Diverter',13,400,'11,795',5200,'2,400','2,400',NULL,NULL,NULL,'11,795','14,195','11,795',10,120,98.29,'98.29','14,195','13,059','10,659');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (28,'Energy & Hot Water Diverter',14,400,'12,616',5600,'2,400','2,400',NULL,NULL,NULL,'12,616','15,016','12,616',10,120,105.13,'105.13','15,016','13,815','11,415');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (29,'Energy & Hot Water Diverter',15,400,'13,437',6000,'2,400','2,400',NULL,NULL,NULL,'13,437','15,837','13,437',10,120,111.98,'111.98','15,837','14,570','12,170');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (30,'Energy & Hot Water Diverter',16,400,'14,258',6400,'2,400','2,400',NULL,NULL,NULL,'14,258','16,658','14,258',10,120,118.82,'118.82','16,658','15,325','12,925');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (31,'Energy & Hot Water Diverter',17,400,'15,078',6800,'2,400','2,400',NULL,NULL,NULL,'15,078','17,478','15,078',10,120,125.65,'125.65','17,478','16,080','13,680');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (32,'Energy & Hot Water Diverter',18,400,'15,899',7200,'2,400','2,400',NULL,NULL,NULL,'15,899','18,299','15,899',10,120,132.49,'132.49','18,299','16,835','14,435');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (33,'Energy & Hot Water Diverter',19,400,'16,720',7600,'2,400','2,400',NULL,NULL,NULL,'16,720','19,120','16,720',10,120,139.33,'139.33','19,120','17,590','15,190');
INSERT INTO wp_solar_data(id,type,quantity,size,fixed_cost,sys_size,g_available,total,extra,additional,discount,base_cost,gross_cost,net_cost,year,months,m_payment,intro,upfront,total_upfront,net_upfront) VALUES (34,'Energy & Hot Water Diverter',20,400,'17,541',8000,'2,400','2,400',NULL,NULL,NULL,'17,541','19,941','17,541',10,120,146.18,'146.18','19,941','18,346','15,946');
