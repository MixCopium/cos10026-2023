## Non-numeric 
-- correct SQL
SELECT * FROM mysql.user
  WHERE login = 'victor' AND password = '123'; 

=> 
-- SQL injection
SELECT * FROM mysql.user
  WHERE login = '' or 1=1 --AND password = '123'; 

## Numeric 
SELECT * FROM clients
  WHERE account = 1 or 1=1
  -- AND pin = 1111