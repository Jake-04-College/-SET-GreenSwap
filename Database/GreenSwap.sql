DROP DATABASE IF EXISTS GreenSwap;
CREATE DATABASE GreenSwap;
use GreenSwap;

CREATE TABLE Customers (
account_id int NOT NULL,
customer_fname char(50) NOT NULL,
customer_lname char(50) NOT NULL,
username char(20) NOT NULL,
user_email char(50) NOT NULL,
user_phone_number char(15) NOT NULL,
user_age int NOT NULL,
user_account_create_date date NOT NULL,
CONSTRAINT account_id PRIMARY KEY (account_id)
);

INSERT INTO Customers VALUES 
(1, "Brevin", "Monks", "B00162915", "B00162915@mytudublin.ie", "081 234 5678", 20, "2025-02-26"),
(2, "Jake", "Howe", "B00164837", "B00164837@mytudublin.ie", "082 345 6789", 20, "2025-02-21"),
(3, "King", "Kiaku", "B00160936", "B001609936@mytudublin.ie", "083 456 7890", 19, "2025-01-31");

CREATE TABLE Products (
product_id int NOT NULL,
account_id int NOT NULL,
product_name char(50) NOT NULL,
cash_or_exchange char(8) NOT NULL,
price double NOT NULL,
product_category char(50) NOT NULL,
product_condition char(50) NOT NULL,
product_stock int NOT NULL,
product_commission double NOT NULL,
CONSTRAINT product_id PRIMARY KEY (product_id),
CONSTRAINT account_id_products FOREIGN KEY (account_id) REFERENCES Customers(account_id)
);

INSERT INTO Products VALUES
(10, 1, "fish", "cash", 8.99, "deli", "fresh", 12, 3.50),
(20, 1, "chicken", "cash", 5.50, "poultry", "out of date", 3, 2.00),
(40, 2, "flowers", "exchange", 2.00, "gardening", "in bloom", 32, 0.99);

CREATE TABLE Orders (
order_id int NOT NULL,
account_id int NOT NULL,
product_quantity int NOT NULL,
order_total double NOT NULL,
order_shipping_cost double NOT NULL,
order_date_finalised date NOT NULL,
CONSTRAINT order_id PRIMARY KEY (order_id),
CONSTRAINT account_id_orders FOREIGN KEY (account_id) REFERENCES Customers(account_id)
);

INSERT INTO Orders VALUES
(100, 3, 3, 9.50, 0.78, "2025-02-01"),
(200, 2, 10, 33.99, 0.00, "2025-02-22"),
(300, 1, 1, 2.00, 0.46, "2025-02-26")