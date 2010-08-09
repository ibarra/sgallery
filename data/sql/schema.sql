CREATE TABLE sp_album (id_album INT, description TEXT, name CHAR(255) NOT NULL, user_id INT NOT NULL, category_id INT NOT NULL, PRIMARY KEY(id_album));
CREATE TABLE sp_category (id_category INT, name CHAR(255) NOT NULL, description TEXT, date DATE NOT NULL, PRIMARY KEY(id_category));
CREATE TABLE sp_user (id_user INT, username CHAR(255) NOT NULL, password TEXT NOT NULL, first_name TEXT NOT NULL, last_name TEXT NOT NULL, date DATE NOT NULL, email TEXT NOT NULL, PRIMARY KEY(id_user));
CREATE SEQUENCE sp_album_id_album_seq INCREMENT 1 START 1;
CREATE SEQUENCE sp_category_id_category_seq INCREMENT 1 START 1;
CREATE SEQUENCE sp_user_id_user_seq INCREMENT 1 START 1;
ALTER TABLE sp_album ADD CONSTRAINT sp_album_user_id_sp_user_id_user FOREIGN KEY (user_id) REFERENCES sp_user(id_user) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sp_album ADD CONSTRAINT sp_album_category_id_sp_category_id_category FOREIGN KEY (category_id) REFERENCES sp_category(id_category) NOT DEFERRABLE INITIALLY IMMEDIATE;
