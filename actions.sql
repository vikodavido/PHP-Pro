ALTER TABLE parks
CHANGE address location VARCHAR(255) NOT NULL;

ALTER TABLE cars ADD class ENUM('Economy', 'Standard', 'Premium') NOT NULL;


INSERT INTO parks (location) VALUES 
('Bolotnikova 49a'), 
('Krasnoarmeyskaya 12'), 
('Sobornaya 19'), 
('Kievskaya 24'), 
('Rachivska 38');

INSERT INTO cars (park_id, model, price, class) VALUES 
(1, 'Hyundai Accent' , 40, 'Economy'), 
(2, 'Toyota Corolla', 60, 'Standard'), 
(3, 'Lexus RX 350', 80, 'Premium');

INSERT INTO drivers (car_id, name, phone) VALUES 
(1, 'Nikolay Vod', '555-1234'), 
(2, 'Oleg Dubina', '555-5678'), 
(3, 'Pavel Veseluy', '555-9012');

INSERT INTO customers (name, phone) VALUES 
('Viko Davido', '555-1234'), 
('Anely Angel', '555-5678'), 
('Kamila Vikovski', '555-9012');

INSERT INTO orders (driver_id, customer_id, start, finish, total) VALUES 
(1, 1, 'Bolotnikova 49a', 'Krasnoarmeyskaya 12', 15), 
(2, 2, 'Sobornaya 19', 'Kievskaya 24', 24), 
(3, 3, 'Rachivska 38', 'Bolotnikova 49a', 10);


UPDATE cars
SET price = 45
WHERE model = 'Toyota Corolla';


DELETE FROM orders
WHERE id = 2;

SELECT * 
FROM cars
WHERE park_id = 1;

SELECT drivers.name, cars.model, cars.price
FROM drivers
JOIN cars ON drivers.car_id = cars.id
WHERE cars.price > 50;

SELECT orders.id AS order_id, drivers.name AS driver_name, customers.name AS customer_name, orders.total
FROM orders
JOIN drivers ON orders.driver_id = drivers.id
JOIN customers ON orders.customer_id = customers.id;

SELECT parks.location, COUNT(cars.id) AS car_count
FROM parks
LEFT JOIN cars ON parks.id = cars.park_id
GROUP BY parks.id;

ALTER TABLE cars
ADD year_of_manufacture YEAR;

ALTER TABLE drivers
MODIFY phone VARCHAR(15) NOT NULL;




