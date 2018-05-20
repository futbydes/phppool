CREATE table ft_table (id int AUTO_INCREMENT PRIMARY KEY not null,
	login VARCHAR(8) NOT NULL,
	`group` ENUM('staff', 'student', 'other') not null,
	creation_date date not null);
