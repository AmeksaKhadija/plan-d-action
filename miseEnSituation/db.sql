create DATABASE miseEnSituation;

CREATE TABLE users(
    id INT PRIMARY KEY auto_increment,
    firstname VARCHAR(50),
    lastname VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
);



