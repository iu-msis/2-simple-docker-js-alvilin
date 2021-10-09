CREATE DATABASE IF NOT EXISTS msisdb;
USE msisdb;

DROP TABLE IF EXISTS student;
CREATE TABLE student (
	id int PRIMARY KEY AUTO_INCREMENT ,
    bookId varchar(24) UNIQUE NOT NULL,
    name varchar(48)
);

INSERT INTO student (id, bookId, name) VALUES 
(1, 'SCIFI', 'Aliens'),
(2, 'beth1', 'Beth Barnhart'),
(3, 'bipin', 'Prof. Prabhakar');

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
  (1, 2, 'KPMG', 95000, 7000, '2021-09-30', 3),
  (2, 2, 'Deloitte Digital', 94000, 12000, '2021-10-03', 3),
  (3, 2, 'IU, ISGP', 54000, 10, '2021-10-05', 5),
  (4, 3, 'Amazon', 122000, 11000, '2021-10-15', 1),
  (5, 1, 'Close Encounters of the Third Kind', 10000, 1222, '2021-01-01', 10)
;

-- COMMIT;

-- CREATE USER 'msisreader'@'%' IDENTIFIED BY 'msisreadonly';
-- GRANT SELECT ON * . * TO 'msisreader'@'%';
