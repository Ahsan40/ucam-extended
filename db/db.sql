
CREATE TABLE users (
       f_name varchar(30),
       l_name varchar(30),
       profile_pic_url varchar(300),
       user_name varchar(100) NOT NULL UNIQUE,
       user_type varchar(100) NOT NULL DEFAULT 'user',
       department varchar(100),
       email varchar(50),
       u_id INT NOT NULL UNIQUE AUTO_INCREMENT,
       password varchar(100) NOT NULL,
       date timestamp NOT NULL DEFAULT current_timestamp(),
       CONSTRAINT pk_users PRIMARY KEY(user_name)
);

CREATE TABLE bus (
     b_id INT NOT NULL AUTO_INCREMENT,
     name varchar(50),
     driver varchar(50),
     CONSTRAINT pk_bus PRIMARY KEY(b_id)
);

CREATE TABLE s_shift (
    s_id INT NOT NULL AUTO_INCREMENT,
    time time NOT NULL,
    CONSTRAINT pk_shift PRIMARY KEY(s_id)
);

CREATE TABLE ticket (
     t_id INT NOT NULL AUTO_INCREMENT,
     u_id INT NOT NULL,
     b_id INT NOT NULL,
     s_id INT NOT NULL,
     round INT NOT NULL,
     seat varchar(3),
     d timestamp NOT NULL DEFAULT current_timestamp(),
     CONSTRAINT pk_ticket PRIMARY KEY(t_id),
     CONSTRAINT fk_users FOREIGN KEY (u_id) REFERENCES users(u_id),
     CONSTRAINT fk_bus FOREIGN KEY (b_id) REFERENCES bus(b_id),
     CONSTRAINT fk_shift FOREIGN KEY (s_id) REFERENCES s_shift(s_id)
);

CREATE TABLE courses (
     c_id INT AUTO_INCREMENT PRIMARY KEY,
     name varchar(255) NOT NULL,
     code varchar(255) UNIQUE NOT NULL,
     credit INT NOT NULL
);

CREATE TABLE section (
     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
     name varchar(255) NOT NULL,
     faculty varchar(255) NOT NULL
);

CREATE TABLE p_time (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    time time NOT NULL
);