CREATE TABLE racialSpeed (
    raceId int,
    race varchar(30),
    groundSpeed int,
    waterSpeed int,
    airSpeed int,
);

INSERT INTO racialSpeed (race,groundSpeed,waterSpeed,airSpeed)
VALUES
('Aasimar',30,0,0),
('Dragonborn',30,0,0),
('Dwarf(Hill)',25,0,0),
('Dwarf(Mountain)',25,0,0),
('Elf(Drow)',30,0,0),
('Elf(Eladrin)',30,0,0),
('Elf(High)',30,0,0),
('Elf(Wood)',30,0,0),
('Gnome(Forest)',25,0,0),
('Gnome(Rock)',25,0,0),
('Half-Elf',30,0,0),
('Half-Orc',30,0,0),
('Halfling(Lightfoot)',25,0,0),
('Halfling(Stout)',25,0,0),
('Human',30,0,0),
('Human(Variant)',30,0,0),
('Tiefling',30,0,0);