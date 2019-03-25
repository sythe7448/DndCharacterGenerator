CREATE TABLE raceStats (
  id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name varchar(30),
  strength INT,
  dexterity INT,
  constitution INT,
  intelligence INT,
  wisdom INT,
  charisma INT
);

INSERT INTO raceStats (name, strength, dexterity, constitution, intelligence, wisdom, charisma)
VALUES
('Aasimar',0,0,0,0,1,2),
('Dragonborn',2,0,0,0,0,1),
('Dwarf(Hill)',2,0,0,0,0,1),
('Dwarf(Mountain)',2,0,2,0,0,0),
('Elf(Drow)',0,2,0,0,0,1),
('Elf(Eladrin)',0,2,0,1,0,0),
('Elf(High)',0,2,0,1,0,0),
('Elf(Wood)',0,2,0,0,1,0),
('Gnome(Forest)',0,1,0,2,0,0),
('Gnome(Rock)',0,0,1,2,0,0),
('Half-Elf',0,0,0,0,0,2),
('Half-Orc',2,0,1,0,0,0),
('Halfling(Lightfoot)',0,2,0,0,0,1),
('Halfling(Stout)',0,2,0,1,0,0),
('Human',1,1,1,1,1,1),
('Human(Variant)',0,0,0,0,0,0),
('Tiefling',0,0,0,1,0,2);
