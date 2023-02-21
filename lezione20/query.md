SELECT id, name, price, description from product
  INTO OUTFILE '/tmp/products.txt'
  FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"'
  LINES TERMINATED BY '\n';