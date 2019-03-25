CREATE TABLE languages (
    id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(11),
    script VARCHAR(9),
    type VARCHAR(8),
    typicalSpeakers VARCHAR(17)
);

INSERT INTO languages VALUES (id,name,script,type,typicalSpeakers)
(1,"Common","Common","Standard","Humans"),
(2,"Dwarvish","Dwarvish","Standard","Dwarves"),
(3,"Elvish","Elvish","Standard","Elves"),
(4,"Giant","Dwarvish","Standard","Ogres & Giants"),
(5,"Gnomish","Dwarvish","Standard","Gnomes"),
(6,"Goblin","Dwarvish","Standard","Goblinoids"),
(7,"Halfling","Common","Standard","Halflings"),
(8,"Orc","Dwarvish","Standard","Orcs"),
(9,"Abyssal","Infernal","Exotic","Demons"),
(10,"Celestial","Celestial","Exotic","Celestials"),
(11,"Draconic","Draconic","Exotic","Dragons & Dragonborn"),
(12,"Deep Speech","none","Exotic","Mindflayers & Beholders"),
(13,"Infernal","Infernal","Exotic","Devils & Tieflings"),
(14,"Primordial","Dwarvish","Exotic","Elementals"),
(15,"Sylvan","Elvish","Exotic","Fey Creatures"),
(16,"Undercommon","Elvish","Exotic","Underdark Traders");