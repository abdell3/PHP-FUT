CREATE DATABASE shiMatch;

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


CREATE TABLE Nationalites(
   id_nationalite INT AUTO_INCREMENT,
   nom VARCHAR(100),
   continent VARCHAR(100)
   PRIMARY KEY(id_nationalite)
);
INSERT INTO Nationality (nom, continent) VALUES
('Argentina','Amerique-sud'),
('Portugal', 'Europ'),
('Belgium', 'Europ'),
('Slovenia', 'Europ'),
('Morocco', 'Afrique'),
('Italy', 'Europ');





CREATE TABLE Player(
   id_player INT AUTO_INCREMENT,
   nom VARCHAR(100),
   img VARCHAR(100),
   positions VARCHAR(100)
   id_club INT,
   id_natio INT,
   rating CHECK(rating >=1 AND rating <100) INT,
   diving CHECK(diving >=1 AND diving <100) INT, 
   handling CHECK(handling >=1 AND handling <100) INT, 
   kicking CHECK(kicking >=1 AND kicking <100) INT, 
   reflexes CHECK(reflexes >=1 AND reflexes <100) INT, 
   speed CHECK(speed >=1 AND speed <100) INT, 
   positioning CHECK(positioning >=1 AND positioning <100) INT,
   pace CHECK(pace >=1 AND pace <100) INT, 
   shooting CHECK(shooting >=1 AND shooting <100) INT, 
   passings CHECK(passings >=1 AND passings <100) INT, 
   dribbling CHECK(dribbling >=1 AND dribbling <100) INT, 
   defending CHECK(defending >=1 AND defending <100) INT, 
   physical CHECK(physical >=1 AND physical <100) INT,
   PRIMARY KEY(id_player),
   FOREIGN KEY(id_club) REFERENCES Club(id_club),
   FOREIGN KEY(id_natio) REFERENCES Nationalites(id_nationalite)
);

INSERT INTO Player (nom, img, positio) VALUES
('Lionel Messi', 'https://cdn.sofifa.net/players/158/023/25_120.png', 'RW'),
('Cristiano Ronaldo', 'https://cdn.sofifa.net/players/020/801/25_120.png', 'ST'),
('Kevin De Bruyne' 'https://cdn.sofifa.net/players/192/985/25_120.png', 'CM'),
('Jan Oblak' 'https://cdn.sofifa.net/players/200/389/25_120.png', 'GK'),
('Yassine Bounou' 'https://cdn.sofifa.net/players/209/981/25_120.png', 'GK'),
('Gianluigi Donnarumma' 'https://cdn.sofifa.net/players/230/621/25_120.png', 'GK');

