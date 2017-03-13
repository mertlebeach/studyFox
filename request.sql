CREATE TABLE request(
    id_ INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(32) DEFAULT NULL,
    class VARCHAR(32) NOT NULL,
    idClass INT NOT NULL,
    availability DATE NOT NULL,
    contactinfo VARCHAR(32) NOT NULL,
    comments VARCHAR(32) DEFAULT NULL,
    postDate DATE NOT NULL

);

CREATE TABLE classes(
    idClass INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(32) NOT NULL,
    number INT NOT NULL
    
);

