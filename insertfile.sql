delete from pilot;
delete from seat;
delete from flight;
delete from passenger;
delete from ticket;
delete from boarding_pass;
delete from fly;
delete from travels;

insert into pilot values ('80577147','6ig5octt','Scott Dixon','90000','Spirit');
insert into pilot values ('57650592','u0554hn9','Alesha Dixon','90000','Spirit');
insert into pilot values ('23521749','sge222th','Will Beaty','120000','Jetblue');
insert into pilot values ('14318710','zoii1ssw','Sam C Sims','100000','American');
insert into pilot values ('84510568','3ctlmmas','Luke Sabo','90000','Delta');
insert into pilot values ('41100524','e1928g2q','Eucalyptus Sage','80000','Spirit');
insert into pilot values ('89050030','mq4y3764','Dylan Seifer','75000','Delta');
insert into pilot values ('16759520','a6qlka3e','Ifrah Mansur','80000','Jetblue');
insert into pilot values ('35874289','9iscr5hg','Doja Cat','130000','Jetblue');
insert into pilot values ('46130817','bi75gqsq','Brandon Lee','55000','Spirit');

insert into seat values ('0001A','Bussiness','7000.00');
insert into seat values ('0014A','Business','3000.00');
insert into seat values ('0045D','Economy','1200.00');
insert into seat values ('0005A','First','19000.00');
insert into seat values ('00019F','Economy','2500.00');
insert into seat values ('0010B','First','16000.00');
insert into seat values ('0030E','Economy','1300.00');
insert into seat values ('0002A','Bussiness','7000.00');
insert into seat values ('0032F','Economy','1300.00');
insert into seat values ('0007B','First','16000.00');  

insert into flight values ('D1D7V','Cleveland','New York','09:30:00','11:00:00','1.5','40','65','15','DO','406','2020-06-23','2020-06-23');
insert into flight values ('2W2Q8','New York','Cleveland','12:30:00','14:00:00','1.5','12','65','53','DO','406','2020-06-23','2020-06-23');
insert into flight values ('I0CJZ','Cleveland','Columbus','16:00:00','17:00:00','1.0','35','65','30','DO','126','2020-06-25','2020-06-25');
insert into flight values ('B1TFE','Columbus','Cleveland','19:00:00','20:00:00','1.0','45','65','20','DO','126','2020-06-25','2020-06-25');
insert into flight values ('PL0XY','Cleveland','Los Angels','12:00:00','17:00:00','5.0','62','95','33','DO','2343','2020-06-23','2020-06-23');
insert into flight values ('WLP8K','Los Angels','Cleveland','20:00:00','01:00:00','5.0','46','95','49','DO','2343','2020-06-23','2020-06-24');
insert into flight values ('HUPS5','Cleveland','Miami','11:45:00','14:45:00','3.0','37','65','28','DO','1242','2020-06-23','2020-06-23');
insert into flight values ('MIX1Q','Miami','Cleveland','16:00:00','19:00:00','3.0','33','65','32','DO','1242','2020-06-23','2020-06-23');
insert into flight values ('S4QKM','Cleveland','Chicago','18:00:00','19:45:00','1.75','46','65','19','DO','344','2020-06-23','2020-06-23');
insert into flight values ('655OP','Chicago','Cleveland','22:00:00','23:45:00','1.75','12','65','53','DO','344','2020-06-23','2020-06-23');


insert into passenger values ('95371210','Danny Callahan','2000-05-05');
insert into passenger values ('45516147','Dillon Fin','1997-06-13');
insert into passenger values ('14336880','Jam n Jelly','1998-07-23');
insert into passenger values ('14047690','Patricia Battle','1997-08-31');
insert into passenger values ('67804581','Greg Torch','1993-09-24');
insert into passenger values ('62080280','Sheldon Cooper','1989-03-21');
insert into passenger values ('44795286','Missy Jordan','1986-12-17');
insert into passenger values ('54079773','Connie Tucker','1977-10-03');
insert into passenger values ('13910869','Billie Eilish','2000-09-16');
insert into passenger values ('28289005','Lana Ray','1988-06-21');

insert into ticket values ('63858474','D1D7V','1200.00','Vegan','28289005');
insert into ticket values ('74671231','D1D7V','1200.00','Regular','45516147');
insert into ticket values ('70982188','I0CJZ','800.00','Halal','62080280');
insert into ticket values ('31352161','I0CJZ','850.00','Kosher','54079773');
insert into ticket values ('52335544','S4QKM','550.00','Vegan','28289005');
insert into ticket values ('59618949','S4QKM','675.00','Vegan','28289005');
insert into ticket values ('16561215','S4QKM','500.00','Regular','45516147');
insert into ticket values ('71004275','MIX1Q','777.00','Regular','14047690');
insert into ticket values ('90954012','MIX1Q','567.00','Kosher','14336880');
insert into ticket values ('36442479','655OP','900.00','Halal','95371210');

insert into fly values ('80577147','D1D7V');
insert into fly values ('80577147','2W2Q8');
insert into fly values ('46130817','I0CJZ');
insert into fly values ('46130817','B1TFE');
insert into fly values ('35874289','PL0XY');
insert into fly values ('35874289','WLP8K');
insert into fly values ('16759520','HUPS5');
insert into fly values ('16759520','MIX1Q');
insert into fly values ('89050030','S4QKM');
insert into fly values ('89050030','655OP');

insert into travels values ('D1D7V','28289005');
insert into travels values ('D1D7V','45516147');
insert into travels values ('I0CJZ','62080280');
insert into travels values ('I0CJZ','54079773');
insert into travels values ('S4QKM','28289005');
insert into travels values ('S4QKM','45516147');
insert into travels values ('MIX1Q','14047690');
insert into travels values ('MIX1Q','14336880');
insert into travels values ('655OP','95371210');
insert into travels values ('655OP','62080280');


