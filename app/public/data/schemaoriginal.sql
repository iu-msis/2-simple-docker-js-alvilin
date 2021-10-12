CREATE DATABASE IF NOT EXISTS msisdb;
USE msisdb;

DROP TABLE IF EXISTS student;
CREATE TABLE student (
	id int PRIMARY KEY AUTO_INCREMENT ,
    bookGenre varchar(24) UNIQUE NOT NULL,
    name varchar(48)
);

INSERT INTO student (id, bookGenre, name) VALUES 
(1, 'SCIFI', 'Aliens'),
(2, 'THRILLER', 'Mystery'),
(3, 'MILITARY', 'Revolutionary War');

-- SELECT * FROM students;

DROP TABLE IF EXISTS offer;
CREATE TABLE offer (
	id int PRIMARY KEY AUTO_INCREMENT,
    studentId int NOT NULL REFERENCES student(id) 
        ON DELETE CASCADE ON UPDATE CASCADE,
	bookTitle VARCHAR(50) NOT NULL DEFAULT '',
    msrp int NOT NULL DEFAULT 0,
    usedPrice int NOT NULL DEFAULT 0,
	publishedDate date NOT NULL DEFAULT(CURRENT_DATE),
    rating int NOT NULL DEFAULT 0
);

INSERT INTO offer(id, studentId, bookTitle, msrp, usedPrice, publishedDate, rating) VALUES
  (1, 1, 'Ancient Aliens', 27, 11, '2019-11-01', 7),
  (2, 1, 'Alien 3', 23, 18, '2016-01-29', 8),
  (3, 2, 'Master Mind', 12, 8, '2007-10-05', 5),
  (4, 2, 'Veritas', 9, 8, '2021-10-15', 6),
  (5, 3, 'Rise to Rebellion', 18, 2, '1991-04-17', 10),
  (6, 3, 'Glorious Cause', 9, 1, '2017-07-23', 8)
;

-- COMMIT;

-- CREATE USER 'msisreader'@'%' IDENTIFIED BY 'msisreadonly';
-- GRANT SELECT ON * . * TO 'msisreader'@'%';
