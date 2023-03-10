-- SQL INSTRCUCTIONS
CREATE DATABASE IF NOT EXISTS game_oop;

USE game_oop;

CREATE TABLE warrior (
	id TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
    strentgh INT NOT NULL DEFAULT 100,
    defense INT NOT NULL DEFAULT 100,
    stamina INT NOT NULL DEFAULT 100,
name VARCHAR(100) DEFAULT 'bott',
    
    PRIMARY KEY(id)
);

INSERT INTO warrior (name) 
VALUES('Frederick'),
('Edward'),
('Jeremy')
;