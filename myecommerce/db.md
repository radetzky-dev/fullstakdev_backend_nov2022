TABLES
MarketPlaceMusa.sql

Customers
id PK SMALLINT UNSIGNED
Name varchar(35)
Surname varchar (45)
username varchar (16)
pwd varchar (16)
email varchar (45)
id_address FK SMALLINT

Users (backend ADMIN)
id PK
Name
Surname
username
pwd
email
id_address FK

Products
id_prod PK
Name
Price DECIMAL (10.2)
Quantity SMALLINT UNSIGNED
description
photo
cat_id FK -> id_cat Categories

Catergories (alimentar, elettrinica...)
id_cat  PK
name
description

Orders
id_order PK 
order_num Feb1-53
orderdate timestamp
payed 
payedate
customers_id FK -> id_customers

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

    3 banane a 1 euro l'una
    1 pc a 999 
    2 rastrelli a 12 uero l'uno


Adresses
id PK SMALLINT
address
city
state
phone
