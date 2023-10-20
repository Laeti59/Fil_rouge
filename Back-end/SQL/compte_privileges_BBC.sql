CREATE USER 'laeti.t'@'localhost' IDENTIFIED BY 'laeti2501!'

GRANT ALL PRIVILEGES ON bye_buy_car_lille.*
TO 'laeti.t'@'localhost'
IDENTIFIED BY 'laeti2501!'

CREATE USER 'morgan.c'@'localhost' IDENTIFIED BY 'morgan.gerant!';

GRANT select, CREATE, delete, update
ON bye_buy_car_lille.*
TO 'morgan.c'@'localhost';

CREATE USER 'benjamin.s'@'localhost' IDENTIFIED BY 'surinBen!';


