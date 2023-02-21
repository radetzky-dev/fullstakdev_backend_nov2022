SELECT id, name, price, description from product
  INTO OUTFILE '/Users/radeschi/Downloads/products.txt'
  FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"'
  LINES TERMINATED BY '\n';