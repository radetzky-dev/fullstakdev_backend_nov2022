SELECT id, name, price, description from product
  INTO OUTFILE '/tmp/products.txt'
  FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"'
  LINES TERMINATED BY '\n';

CREATE VIEW actor_description_category_list AS
SELECT first_name as NOME, last_name AS COGNOME, title AS TITOLO, description AS DESCRIZIONE, catTbl.name as CATEGORIA  from actor as actorTbl 
INNER JOIN film_actor as filmactorTbl ON actorTbl.actor_id = filmactorTbl.actor_id 
INNER JOIN film as filmTbl ON filmactorTbl.film_id= filmTbl.film_id
INNER JOIN film_category as filmCatTbl ON filmTbl.film_id= filmCatTbl.film_id
INNER JOIN category as catTbl ON filmCatTbl.category_id = catTbl.category_id;

select * from actor_description_category_list where cognome like "%cruz%" and CATEGORIA = "Sci-fi";