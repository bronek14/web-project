CREATE DATABASE project;

Use project;

CREATE TABLE IF NOT EXISTS `registration` (
 `user_id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `create_datetime` datetime NOT NULL,
 PRIMARY KEY (`user_id`)
);
INSERT INTO registration (user_id, username, password,email,create_datetime)
VALUES (1, 'admin', 'admin','admin','2022-12-10 01:01:01');

CREATE TABLE `General` ( 
  `topic_id` varchar(250) NOT NULL,
  `post_content` varchar(250) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `Announcements` (
  `topic_id` varchar(250) NOT NULL,
  `post_content` varchar(250) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT into Announcements (topic_id, post_content,username, email) 
                     VALUES ("Sports", 'My favorite sport it soccer','Bronek14','$bronek14@yahoo.com');



