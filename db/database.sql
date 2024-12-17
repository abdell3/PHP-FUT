CREATE DATABASE mydb;

CREATE TABLE Club(
   id_club INT AUTO_INCREMENT,
   nom VARCHAR(100),
   logo VARCHAR(100),
   PRIMARY KEY(id_club)
);
INSERT INTO Club (nom, logo) VALUES
('Inter Miami', 'https://cdn.sofifa.net/meta/team/239235/120.png'),
('Al Nassr', 'https://cdn.sofifa.net/meta/team/2506/120.png'),
('Manchester City', 'https://cdn.sofifa.net/players/239/085/25_120.png'),
('Atletico Madrid', 'https://cdn.sofifa.net/meta/team/7980/120.png'),
('Al-Hilal', 'https://cdn.sofifa.net/meta/team/7011/120.png'),
('Paris Saint-Germain', 'https://cdn.sofifa.net/meta/team/591/120.png');


CREATE TABLE Nationality(
   id_natio INT AUTO_INCREMENT,
   nom VARCHAR(100),
   continent VARCHAR(100)
);
INSERT INTO Nationality (nom, continent) VALUES
('Argentina','Amerique-sud'),
('Portugal', 'Europ'),
('Belgium', 'Europ'),
('Slovenia', 'Europ'),
('Morocco', 'Afrique'),
('Italy', 'Europ');

-- CREATE TABLE Normal_player(
--    id_normal INT AUTO_INCREMENT,,
--    positio VARCHAR(50),
--    id_statN INT,
--    PRIMARY KEY(id_normal),
--    Foreign Key (id_statN) REFERENCES (id_statN)

-- );
-- INSERT INTO Normal_player (positio) VALUES
-- ('RW'),
-- ('ST'),
-- ('CM');

-- CREATE TABLE GK_player(
--    id_GK INT AUTO_INCREMENT,,
--    position VARCHAR(100),
--    id_statG INT,
--    PRIMARY KEY(id_GK),
--    Foreign Key (id_statG) REFERENCES StatiqG(id_statG)

-- );
-- INSERT INTO GK_player () VALUES
-- ('GK'),
-- ('GK'),
-- ('GK');

CREATE TABLE StatiqG(
   id_statG INT AUTO_INCREMENT,
   rating INT,
   diving INT, 
   handling INT, 
   kicking INT, 
   reflexes INT, 
   speed INT, 
   positioning INT,
   PRIMARY KEY(id_statG)
);
INSERT INTO StatiqG (rating, diving, handling, kicking, reflexes, speed, positioning) VALUES
(91, 89, 90, 78, 92, 50, 88),
(84, 81, 82, 77, 86, 38, 83),
(89, 88, 84, 75, 90, 50, 85);

CREATE TABLE StatiqN(
   id_statN INT AUTO_INCREMENT,
   rating INT, 
   pace INT, 
   shooting INT, 
   passing INT, 
   dribbling INT, 
   defending INT, 
   physical INT,
   PRIMARY KEY(id_statN)
);

INSERT INTO StatiqN (rating, pace, shooting, passing, dribbling, defending, physical) VALUES
(93, 85, 92, 91, 95, 35, 65),
(91, 84, 94, 82, 87, 34, 77),
(91, 74, 86, 93, 88, 64, 78);

CREATE TABLE Player(
   id_player INT AUTO_INCREMENT,
   nom VARCHAR(100),
   img VARCHAR(100),
   id_club INT,
   id_natio INT,
   id_statG INT,
   id_statN INT,
   PRIMARY KEY(id_player),
   FOREIGN KEY(id_club) REFERENCES Club(id_club),
   FOREIGN KEY(id_natio) REFERENCES Nationality(id_natio),
   FOREIGN KEY(id_statG) REFERENCES StatiqG(id_statG),
   FOREIGN KEY(id_statN) REFERENCES StatiqN(id_statN)
)

INSERT INTO Player (nom, img, positio) VALUES
('Lionel Messi', 'https://cdn.sofifa.net/players/158/023/25_120.png', 'RW'),
('Cristiano Ronaldo', 'https://cdn.sofifa.net/players/020/801/25_120.png', 'ST'),
('Kevin De Bruyne' 'https://cdn.sofifa.net/players/192/985/25_120.png', 'CM'),
('Jan Oblak' 'https://cdn.sofifa.net/players/200/389/25_120.png', 'GK'),
('Yassine Bounou' 'https://cdn.sofifa.net/players/209/981/25_120.png', 'GK'),
('Gianluigi Donnarumma' 'https://cdn.sofifa.net/players/230/621/25_120.png', 'GK');