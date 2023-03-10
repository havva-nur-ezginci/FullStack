-- ctrl + e

drop DATABASE Eticaret;

CREATE DATABASE eticaret character set utf8 collate utf8_general_ci;

use eticaret;

create table brands(
    id int not null primary key auto_increment,
    name varchar(50) not null unique
)default CHARSET=utf8 default collate utf8_general_ci engine=InnoDB;


INSERT INTO brands (name) values("Apple");,("Samsung"),("Huawei"),("Vivo"),("Oppo");


alter table shipment add column status boolean default true;



create table shipment(
    id int not null primary key auto_increment,
    name varchar(50) not null unique,
    shipping_fee decimal(5,3)  default 0.00
)default CHARSET=utf8 default collate utf8_general_ci engine=InnoDB;

INSERT INTO shipment (name) values("Yurtiçi Kargo"),("Aras Kargo"),("Sürat Kargo");

alter table shipment rename to shipments;


create table order_status(
    id int not null primary key auto_increment,
    name varchar(40) not null unique
)default CHARSET=utf8 default collate utf8_general_ci engine=InnoDB;

INSERT INTO order_status (name) values 
("Onaylandı"),("Hazırlanıyor"),("Kargoya Verildi"),("Teslim Edildi"),("İptal Edildi");


create table payment_type(
    id int not null primary key auto_increment,
    name varchar(20) not null,
    status boolean default 1
)default CHARSET=utf8 default collate utf8_general_ci engine=InnoDB;

INSERT INTO payment_type (name) values 
("Kapıda Ödeme"),("Kredi Kartı"),("Havale");


create table categories(
    id int not null primary key auto_increment,
    name varchar(50) not null,
    slug_name varchar(60) not null unique,
    parent_id int,
    status boolean default false,
    foreign key(parent_id) references categories(id)
)default CHARSET=utf8 default collate utf8_general_ci engine=InnoDB;


INSERT INTO categories (name,slug_name,parent_id) values 
("Telefon","telefon",null),("Cep Telefonu","cep-telefonu",1),
("Bilgisayar","bilgisayar",null),("Notebook","notebook",3);


INSERT INTO categories (name,slug_name,parent_id) values ()
("Masaüstü Bilgisayar","masaustu-bilgisayar",3),("Tablet","tablet",3),
("Akıllı Saat","akilli-saat",1),("Hafıza Kartı","hafiza-karti",1);


