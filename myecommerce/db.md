TABLES
MarketPlaceMusa.sql

Customer
des
Name varchar(35)
Surname varchar (45)
username varchar (16)
pwd varchar (16)
email varchar (45)


Users (backend ADMIN)
id PK
Name
Surname
username
pwd
email


Products
id_prod PK
Name
Price DECIMAL (10.2)
Quantity tin UNSIGNED
description
photo
cat_id FK -> id_cat Categories tinyint

ALTER TABLE product
  ADD CONSTRAINT fk_product_category
    FOREIGN KEY (category_id) REFERENCES category (id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT;

    ALTER TABLE Orders
ADD FOREIGN KEY (PersonID) REFERENCES Persons(PersonID);


Category (alimentar, elettrinica...)
id_cat  PK
name
description

Order
id PK 
order_num Feb1-53
payed 
payedatedes
customers_id FK -> id_customers smallint

orderdate timestamp
last_update

ALTER TABLE orders
  ADD CONSTRAINT fk_orders_customers
    FOREIGN KEY (customer_id) REFERENCES customer (id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT;

Esempio:
4
feb1.54
2/2/2023
yes
2/2/2023
Mario Rossi via verdi,5  Milano
->

    OrderDetails (tabella di raccordo)
    id PK
    product_id FK -> id product
    order_id FK -> id order
    sellprice
    quantity
    creation_date
    last_update

    ALTER TABLE order_details
  ADD CONSTRAINT fk_orderdetails_order
    FOREIGN KEY (order_id) REFERENCES orders (id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT;

    3 banane a 1 euro l'una
    1 pc a 999 
    2 rastrelli a 12 uero l'uno


Adresses
id PK SMALLINT
address
city
state
phone


QUERY DI ESEMPIO
select title, release_year, rental_rate, length, rating  from film where language_id="1" and rental_rate >=0.99 and rental_rate <=2.99 and length>180 and length <= 183 and rating="G";