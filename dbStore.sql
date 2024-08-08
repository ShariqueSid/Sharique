CREATE DATABASE my_php_project;
USE my_php_project;

CREATE TABLE registration (
    name1 VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    mobile VARCHAR(20) NOT NULL,
    day1 VARCHAR(20) NOT NULL,
    time1 VARCHAR(20) NOT NULL,
    doctor_name VARCHAR(255) NOT NULL,
    message1 TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
