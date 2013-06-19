DROP DATABASE IF EXISTS ribbit;
CREATE DATABASE ribbit;
USE ribbit;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(20) NOT NULL,
    name VARCHAR(50),
    password VARCHAR(60),
    create_at int,
    email TEXT,
    gravatar_hash VARCHAR(30),
    PRIMARY KEY (id , username)
);

DROP TABLE IF EXISTS ribbits;
CREATE TABLE ribbits (
    id INT NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    ribbit VARCHAR(140),
    create_at INT,
    PRIMARY KEY (id , user_id)
);

DROP TABLE IF EXISTS follows;
CREATE TABLE follows (
    id INT NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    follower_id INT,
    PRIMARY KEY (id , user_id)
);

DROP TABLE IF EXISTS user_auth;
CREATE TABLE user_auth (
    id INT NOT NULL AUTO_INCREMENT,
    hash VARCHAR(50) NOT NULL,
    username VARCHAR(20),
    PRIMARY KEY (id , hash)
);