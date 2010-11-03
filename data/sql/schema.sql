CREATE TABLE sp_album (id_album INT, description TEXT, name CHAR(255) NOT NULL, user_id INT NOT NULL, category_id INT NOT NULL, PRIMARY KEY(id_album));
CREATE TABLE sp_category (id_category INT, name CHAR(255) NOT NULL, description TEXT, date DATE NOT NULL, PRIMARY KEY(id_category));
CREATE TABLE sp_level (id_level INT, role CHAR(255) NOT NULL, PRIMARY KEY(id_level));
CREATE TABLE sp_user (id_user INT, username CHAR(255) NOT NULL, password TEXT NOT NULL, first_name TEXT NOT NULL, last_name TEXT NOT NULL, date DATE NOT NULL, email TEXT NOT NULL, web TEXT, level_id INT NOT NULL, status INT NOT NULL, activation_key TEXT NOT NULL, PRIMARY KEY(id_user));
CREATE TABLE sf_guard_forgot_password (id BIGSERIAL, user_id BIGINT NOT NULL, unique_key VARCHAR(255), expires_at TIMESTAMP NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE sf_guard_group (id BIGSERIAL, name VARCHAR(255) UNIQUE, description VARCHAR(1000), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE sf_guard_group_permission (group_id BIGINT, permission_id BIGINT, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(group_id, permission_id));
CREATE TABLE sf_guard_permission (id BIGSERIAL, name VARCHAR(255) UNIQUE, description VARCHAR(1000), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE sf_guard_remember_key (id BIGSERIAL, user_id BIGINT, remember_key VARCHAR(32), ip_address VARCHAR(50), created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE sf_guard_user (id BIGSERIAL, first_name VARCHAR(255), last_name VARCHAR(255), email_address VARCHAR(255) NOT NULL UNIQUE, username VARCHAR(128) NOT NULL UNIQUE, algorithm VARCHAR(128) DEFAULT 'sha1' NOT NULL, salt VARCHAR(128), password VARCHAR(128), is_active BOOLEAN DEFAULT 'true', is_super_admin BOOLEAN DEFAULT 'false', last_login TIMESTAMP, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE sf_guard_user_group (user_id BIGINT, group_id BIGINT, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(user_id, group_id));
CREATE TABLE sf_guard_user_permission (user_id BIGINT, permission_id BIGINT, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(user_id, permission_id));
CREATE SEQUENCE sp_album_id_album_seq INCREMENT 1 START 1;
CREATE SEQUENCE sp_category_id_category_seq INCREMENT 1 START 1;
CREATE SEQUENCE sp_level_id_level_seq INCREMENT 1 START 1;
CREATE SEQUENCE sp_user_id_user_seq INCREMENT 1 START 1;
CREATE INDEX is_active_idx ON sf_guard_user (is_active);
ALTER TABLE sp_album ADD CONSTRAINT sp_album_user_id_sp_user_id_user FOREIGN KEY (user_id) REFERENCES sp_user(id_user) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sp_album ADD CONSTRAINT sp_album_category_id_sp_category_id_category FOREIGN KEY (category_id) REFERENCES sp_category(id_category) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sp_user ADD CONSTRAINT sp_user_level_id_sp_level_id_level FOREIGN KEY (level_id) REFERENCES sp_level(id_level) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_forgot_password ADD CONSTRAINT sf_guard_forgot_password_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_remember_key ADD CONSTRAINT sf_guard_remember_key_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE;
