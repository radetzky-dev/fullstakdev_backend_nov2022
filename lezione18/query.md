SELECT film.title as TITOLO, film.description as DESCRIZIONE, language.name AS LINGUA, film.length as DURATA from film 
INNER JOIN language ON film.language_id = language.language_id
where length > 100 
limit 10;

SELECT first_name as NOME, last_name AS COGNOME, title AS TITOLO, description AS DESCRIZIONE from actor as actorTbl 
INNER JOIN film_actor as filmactorTbl ON actorTbl.actor_id = filmactorTbl.actor_id 
INNER JOIN film as filmTbl ON filmactorTbl.film_id= filmTbl.film_id
where title like "%ANAC%" and last_name like "%M%"
limit 20;

SELECT first_name as NOME, last_name AS COGNOME, title AS TITOLO, description AS DESCRIZIONE, catTbl.name as CATEGORIA  from actor as actorTbl 
INNER JOIN film_actor as filmactorTbl ON actorTbl.actor_id = filmactorTbl.actor_id 
INNER JOIN film as filmTbl ON filmactorTbl.film_id= filmTbl.film_id
INNER JOIN film_category as filmCatTbl ON filmTbl.film_id= filmCatTbl.film_id
INNER JOIN category as catTbl ON filmCatTbl.category_id = catTbl.category_id
where catTbl.name != "Action"
limit 20;


(SELECT first_name as NAME ,last_name, email FROM staff) UNION (SELECT first_name,last_name, email FROM customer);

SELECT first_name as NOME, last_name AS COGNOME, city as CITTA, country as PAESE from customer as custTBL INNER JOIN address as custaddress ON custTBL.address_id = custaddress.address_id INNER JOIN city as cityTBL ON custaddress.city_id = cityTBL.city_id INNER JOIN country as countryTBL ON cityTBL.country_id= countryTBL.country_id limit 20;

OTTIMIzzazione
EXPLAIN
SELECT first_name as NOME, last_name AS COGNOME, city as CITTA, country as PAESE from customer as custTBL INNER JOIN address as custaddress ON custTBL.address_id = custaddress.address_id INNER JOIN city as cityTBL ON custaddress.city_id = cityTBL.city_id INNER JOIN country as countryTBL ON cityTBL.country_id= countryTBL.country_id where countryTBL.country_id = 34;

insert into actor (first_name, last_name) VALUES ("Robert", "De Niro");
LAST_INSERT_ID();

INSERT INTO `film`( `title`, `description`, `release_year`, `language_id`, `original_language_id`, `rental_duration`, `rental_rate`, `length`, `replacement_cost`, `rating`, `special_features`) VALUES('TOP GUN',"As student at the United States Navy's","1986","1","1","6","4.9","110",20.99,"G","Trailers,Commentaries");

INSERT INTO `film_category`(
`film_id`,
`category_id`
)
VALUES(1001,7)

INSERT into `category` (`name`,`description`, `creation_date`) values (`Utensili`, `ferramenta e bricolage`,CURRENT_DATE());

INSERT INTO category (name, description, creation_date) VALUES ("utensili","ferramenta e brico", CURRENT_DATE());

INSERT INTO product (name, price, quantity, description, category_id, creation_date) VALUES ("laptop", 182.99, 7, "HP con 2,5ghz", 2, CURRENT_DATE());

INSERT INTO product (name, price, quantity, description, category_id, creation_date) VALUES ("pane", 0.86, 4, "pagnotte", 3, CURRENT_DATE());

INSERT INTO user (name, surname, username, password, email, creation_date) VALUES ("mark", "red", "admin", "admin", "mark.red@guest.it", CURRENT_DATE());

INSERT INTO customer (name, surname, username, password, email, creation_date) VALUES ("mario", "rossi", "guest", "guest", "mario.red@guest.it", CURRENT_DATE());

INSERT INTO orders (order_num, payed, pay_date, customer_id, order_date) VALUES ("CUST1-a", 1, CURRENT_DATE(), 1, CURRENT_DATE());

INSERT INTO order_details (product_id, order_id, sell_price, quantity, creation_date) VALUES (1,2,7.99,2,CURRENT_DATE());