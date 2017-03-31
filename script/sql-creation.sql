-- CREATING TABLES

CREATE TABLE Resident (
  id         int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  givenName  VARCHAR(32),
  familyName VARCHAR(32),
  socialName VARCHAR(32)
);

CREATE TABLE Room (
  id     int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  wing   CHARACTER(1) NOT NULL,
  number tinyint UNSIGNED NOT NULL,
  residentId int,
  FOREIGN KEY (residentId) REFERENCES Resident(id)
);


-- POPULATING TABLES

INSERT INTO Room(wing, number) VALUES

('E', 01),
('E', 05),
('E', 06),
('E', 07),
('E', 08),
('E', 09),
('E', 10),
('E', 11),
('E', 12),
('E', 14),
('E', 15),
('E', 16),
('E', 17),
('E', 18),
('E', 19),
('E', 20),
('E', 21),

('W', 01),
('W', 02),
('W', 03),
('W', 05),
('W', 06),
('W', 07),
('W', 08),
('W', 09),
('W', 10),
('W', 11),
('W', 12),
('W', 14),
('W', 15),
('W', 16),
('W', 18),
('W', 20),

('S', 03),
('S', 04),
('S', 05),
('S', 06),
('S', 07),
('S', 08),
('S', 09),
('S', 10),
('S', 11),
('S', 12),

('S', 22),
('S', 23),
('S', 24),
('S', 25),
('S', 26),
('S', 27),
('S', 28),
('S', 29),
('S', 30),
('S', 31),
('S', 32)
;

-- INSERT INTO Resident(givenName, FamilyName) VALUES
-- ('Ivens', 'Portugal')
-- ;


-- ASSIGNMENTS

-- UPDATE Room
-- SET residentId = (SELECT id FROM Resident WHERE familyName = 'Portugal')
-- WHERE wing='S' AND number=11;
