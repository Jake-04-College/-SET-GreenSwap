DROP DATABASE IF EXISTS GreenSwap;
CREATE DATABASE GreenSwap;
use GreenSwap;

CREATE TABLE Users (
account_id int NOT NULL,
username char(20) NOT NULL,
user_password char(30) NOT NULL,
user_profile_picture_link char(100) NOT NULL,
user_account_create_date date NOT NULL,
user_bio char(255),
user_firstname char(20) NOT NULL,
user_lastname char(20) NOT NULL,
user_email char(50) NOT NULL,
user_phone_number char(15),
user_age int NOT NULL,
CONSTRAINT account_id PRIMARY KEY (account_id)
);

INSERT INTO Users VALUES
(1, "John123", "12345678", "profile_pics/johnhpfp", "2024-2-10", "bio1", "john", "hills", "jhills@gmail.com", "01 678 9342", 21),
(2, "James765", "6524642", "profile_pics/jamespfp", "2024-4-1", "bio2", "james", "white", "jwhite@gmail.com", "01 932 9274", 35),
(3, "Sean71", "hfgdtsr", "profile_pics/seanpfp.png", "2024-5-19", "bio3", "sean", "mcmahon", "smahon@gmail.com", "01 142 5246", 42),
(4, "David9781", "vfrsv3543", "profile_pics/davidpfp.png", "2024-1-9", "bio4", "david", "hills", "dhills@gmail.com", "01 135 8731", 30),
(5, "User1789", "GEghrt4", "profile_pics/jackpfp.png", "2024-3-10", "bio5", "jack", "oconnor", "jconnor@gmail.com", "01 173 4731", 19),
(6, "RealPerson", "bgfgGBVH3", "profile_pics/tompfp.png", "2024-6-29", "bio6", "tom", "mullins", "tmullins@gmail.com", "01 735 1331", 25),
(7, "FredS21", "vdf@235", "profile_pics/michaelpfp.png", "2024-2-18", "bio7", "michael", "jackson", "mj@gmail.com", "01 667 7764", 39),
(8, "John124", "gsdiuj23", "profile_pics/johndpfp.png", "2025-1-31", "bio8", "john", "down", "jdown@gmail.com", "01 555 2222", 62);

CREATE TABLE Products (
product_id int NOT NULL,
product_name char(50) NOT NULL,
product_desc char(150) NOT NULL,
product_category char(50) NOT NULL,
price double NOT NULL,
product_image_link char(100) NOT NULL,
product_condition char(50) NOT NULL,
product_stock int,
CONSTRAINT product_id PRIMARY KEY (product_id)
);

INSERT INTO Products VALUES
(10, "whole bread", "its made of wheat", "bread", 2.30, "product_imgs/wholebread.png", "good", 4),
(20, "oranges", "its an orange fruit", "fruit", 0.30, "product_imgs/orange.png", "ripe", 2),
(30, "oat milk", "its made with oats", "milk", 3.70, "product_imgs/oatmilk.png", "old", 1),
(40, "half bread", "its made of half wheat", "bread", 1.15, "product_imgs/halfbread.png", "half good", 2),
(50, "veg soup", "its made of veg", "soup", 9.90, "product_imgs/vegsoup.png", "great", 1),
(60, "spoon", "its made of stainless steel", "silverware", 4.00, "product_imgs/spoon.png", "perfect condition", 3),
(70, "garden hose", "its made of rubber", "gardening", 4.05, "product_imgs/gardenhose.png", "minor leak", 1),
(80, "fork", "its made of stained steel", "silverware", 4.00, "product_imgs/fork.png", "slight defects", NULL);

CREATE TABLE Orders (
order_id int NOT NULL,
account_id int NOT NULL,
product_quantity int NOT NULL,
order_total double NOT NULL,
order_shipping_cost double NOT NULL,
order_date_finalised date NOT NULL,
CONSTRAINT order_id PRIMARY KEY (order_id),
CONSTRAINT account_id_orders FOREIGN KEY (account_id) REFERENCES Users(account_id)
);

CREATE TABLE HowitWorks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    photo_link VARCHAR(100) NOT NULL,
    item_name VARCHAR(30) NOT NULL,
    item_desc VARCHAR(150) NOT NULL
);

INSERT INTO HowitWorks VALUES
('Website/public/images/circleplaceholder.png', 'Placeholder 1', 'Placeholder Desc'),
('Website/public/images/circleplaceholder.png', 'Placeholder 2', 'Placeholder Desc'),
('Website/public/images/circleplaceholder.png', 'Placeholder 3', 'Placeholder Desc');

