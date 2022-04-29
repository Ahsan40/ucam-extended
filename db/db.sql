
CREATE TABLE users (
       f_name varchar(30),
       l_name varchar(30),
       profile_pic_url varchar(300),
       student_id varchar(100) NOT NULL UNIQUE,
       department varchar(100),
       email varchar(50),
       u_id INT NOT NULL UNIQUE AUTO_INCREMENT,
       password varchar(100) NOT NULL,
       date timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
       CONSTRAINT pk_users PRIMARY KEY(student_id)
);