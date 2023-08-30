CREATE USER 'laeti.t'@'localhost' IDENTIFIED BY 'laeti2501!'

GRANT ALL PRIVILIGES ON bye_buy_car_lille.*
TO 'laeti.t'@'localhost'
IDENTIFIED BY 'laeti2501!'

CREATE USER 'morgan.c'@'localhost' IDENTIFIED BY 'morgan.gerant!';

GRANT select
ON bye_buy_car_lille.*
TO 'morgan.c'@'localhost';


