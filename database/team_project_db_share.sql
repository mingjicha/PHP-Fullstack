USE mysql;

SELECT * FROM USER;

CREATE USER 'team1'@'192.168.0.%' IDENTIFIED BY 'team1';

GRANT ALL PRIVILEGES ON *.* TO 'team1'@'192.168.0.%' IDENTIFIED BY 'team1';

COMMIT;

FLUSH PRIVILEGES;