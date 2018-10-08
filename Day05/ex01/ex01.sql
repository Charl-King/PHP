CREATE TABLE ft_table(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(8) NOT NULL COLLATE utf8_unicode_ci DEFAULT 'toto',
    `group` ENUM('staff', 'student', 'other'),
    creation_date DATE NOT NULL
);