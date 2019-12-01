/*CREATE DATABASE ShopDb; */

USE music_shopdb;

CREATE TABLE admuser(
    admin_id int AUTO_INCREMENT PRIMARY KEY,
    admin_username varchar(10),
    admin_password varchar(20));
    
CREATE TABLE product(
    product_id  int AUTO_INCREMENT PRIMARY KEY,
    product_name varchar(10),
    product_quantity int(3),
    product_price int(10));
    
CREATE TABLE client(
    client_id int AUTO_INCREMENT PRIMARY KEY,
    client_name varchar(10),
    phone_num int(10),
    email varchar(20));
    
CREATE TABLE sale(
    sale_id int AUTO_INCREMENT PRIMARY KEY,
    sale_product_id int,
    FOREIGN KEY(sale_product_id) REFERENCES product(product_id));
    
CREATE TABLE productorder(
    order_id int AUTO_INCREMENT PRIMARY KEY,
    client_order_id int,
    product_order_id int,
    pickup_date date,
    FOREIGN KEY(client_order_id) REFERENCES client(client_id),
    FOREIGN KEY(product_order_id) REFERENCES product(product_id));
    