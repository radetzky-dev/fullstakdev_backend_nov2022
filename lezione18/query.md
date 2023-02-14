SELECT film.title as TITOLO, film.description as DESCRIZIONE, language.name AS LINGUA, film.length as DURATA from film 
INNER JOIN language ON film.language_id = language.language_id
where length > 100 
limit 10;

