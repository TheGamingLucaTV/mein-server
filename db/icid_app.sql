CREATE DATABASE IF NOT EXISTS icid_app;
USE icid_app;

CREATE TABLE IF NOT EXISTS icid (
    id INT AUTO_INCREMENT PRIMARY KEY,
    icid_number VARCHAR(10) NOT NULL,
    name VARCHAR(255),
    description TEXT
);

INSERT INTO icid (icid_number, name, description) VALUES 
('123456789', 'Beispielname1', 'Beispielbeschreibung1'),
('987654321', 'Beispielname2', 'Beispielbeschreibung2');
