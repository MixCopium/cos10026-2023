create table if not exists cars (
  car_id int not null auto_increment primary key,
  make  varchar(25) not null,
  model varchar(40) not null, 
  price float not null,
  yom int not null
);

insert into cars values (NULL, 'Yamaha', 'FG7205', 35000, 2015);
