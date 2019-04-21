CREATE TABLE features (
    id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(40),
    effect TEXT,
    requirementsID INT;
)

INSERT INTO features (name, effect, requirementsID)
VALUES