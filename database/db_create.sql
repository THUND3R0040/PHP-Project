create database ecommerce;
use ecommerce;



create table product(
    p_name varchar(255) not null PRIMARY KEY,
    p_doc varchar(255) not null,
    p_type varchar(255) not null,
    p_price varchar(255) not null,
    p_img varchar(255) not null,
    p_overlay varchar(255) not null,
    p_ft varchar(255) not null,
    p_bs varchar(255) not null
);


INSERT INTO product (p_name, p_doc, p_type, p_price, p_img, p_overlay, p_ft, p_bs)
VALUES
    ('Sneakers Shoes', 'Orange Chese Casual Shoes for kids', 'kids', '30$', 'products imgs/p1.jpg', 'p2.jpg', 'true', 'true'),
    ('Brown Leather Shoes Boots', 'Brown leather boots for women', 'women', '20$', 'products imgs/p3.jpg', 'p4.jpg', 'true', 'false'),
    ('Formel Shoes', 'Black Formel Shoes for Men', 'men', '30$', 'products imgs/p5.jpg', 'p6.jpg', 'false', 'false'),
    ('Air Max 97 undefeated - Black Volt', 'Nike Air Max for kids', 'kids', '30$', 'products imgs/p7.jpg', 'p8.jpg', 'true', 'false'),
    ('High Heels', 'Pink High Heels for women', 'women', '100$', 'products imgs/p9.jpg', 'p10.jpg', 'true', 'true'),
    ('Brown Leather Shoes', 'Brown Leather Shoes for Men', 'men', '50$', 'products imgs/p11.jpg', 'p12.jpg', 'true', 'false'),
    ('Nike Air Jordan 1', 'Red Air Jordan 1 for Men', 'men', '149$', 'products imgs/p13.jpg', 'p14.jpg', 'false', 'true'),
    ('Nike Air Max 2021', 'Nike Black Sneakers for Kids', 'kids', '10000$', 'products imgs/p15.jpg', 'p16.jpg', 'true', 'true'),
    ('Chuck 70 Classic montante', 'Converse Sneakers for kids', 'kids', '30$', 'products imgs/p17.jpg', 'p18.jpg', 'false', 'false'),
    ('White High Heeles', 'White High Heeled Shoes for Women', 'women', '47$', 'products imgs/p19.jpg', 'p20.jpg', 'true', 'false'),
    ('Red High Sandals', 'Red Leather Peep Toe Heeled Sandals for Women', 'women', '97$', 'products imgs/p21.jpg', 'p22.jpg', 'true', 'false'),
    ('White Adidas Sneakers', 'White Adidas Sneakers for Kids', 'kids', '50$', 'products imgs/p23.jpg', 'p24.jpg', 'false', 'true'),
    ('Black Adidas Sneakers', 'Black Adidas Sneakers for Kids', 'kids', '49$', 'products imgs/p25.jpg', 'p26.jpg', 'false', 'false'),
    ('Black leather Boots', 'Black leather Boots for Men', 'men', '63$', 'products imgs/p27.jpg', 'p28.jpg', 'true', 'true'),
    ('Red leather Formel shoes', 'Red leather Formel shoes for Men', 'men', '29$', 'products imgs/p29.jpg', 'p30.jpg', 'true', 'true');



create table users(
    u_name varchar(255) not null,
    u_email varchar(255) not null PRIMARY key,
    u_password varchar(255) not null,
    isAdmin TINYINT(1) not null DEFAULT 0,
    isActive TINYINT not NULL DEFAULT 0,
    regDate DATE not null
);



CREATE Table orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    total int NOT NULL,
    nbItems int NOT NULL,
    orderDate DATE NOT NULL
)


CREATE Table months (
    month Date not NULL
)

INSERT INTO months (month) VALUES("2024-01-01", "2024-02-01", "2024-03-01", "2024-04-01", "2024-05-01", "2024-06-01", "2024-07-01", "2024-08-01", "2024-09-01", "2024-10-01", "2024-11-01", "2024-12-01");


CREATE table comments (
    c_id INT AUTO_INCREMENT PRIMARY KEY,
    c_email VARCHAR(255) NOT NULL,
    c_content VARCHAR(255) NOT NULL,
    isAnswered TINYINT(1) NOT NULL DEFAULT 0,
)


CREATE table cart (
    comm_id INT AUTO_INCREMENT PRIMARY KEY,
    u_email VARCHAR(255) NOT NULL,
    p_name VARCHAR(255) NOT NULL,
    addDate DATE NOT NULL,
    FOREIGN key u_email REFERENCES users(u_email),
    FOREIGN key p_name REFERENCES product(p_name)
)

