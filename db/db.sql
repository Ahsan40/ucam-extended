
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
       date timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
       CONSTRAINT pk_users PRIMARY KEY(user_name)
);
