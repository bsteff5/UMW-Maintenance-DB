CREATE TABLE IF NOT EXISTS umwmaintdb;

USE umwmaintdb;
CREATE TABLE reports {
    id INT NOT NULL AUTO_INCREMENT,
    Description BLOB NOT NULL,
    ReportDate DATE NOT NULL,
    Priority INT,
    ResolveDate DATE,
    Building VARCHAR(50) NOT NULL,
    Floor VARCHAR(20),
    Room VARCHAR(20)
    PRIMARY KEY (id)
};
