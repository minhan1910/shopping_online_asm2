CREATE DATABASE shopping_online;
USE shopping_online;

CREATE TABLE IF NOT EXISTS account (
	id 				INT NOT NULL AUTO_INCREMENT,
    user			VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    pass 			VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    email 			VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    address			VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    tel 			INT(11),
    role			TINYINT(1) DEFAULT 0,
    PRIMARY KEY (id)
) Engine = InnoDB;

CREATE TABLE IF NOT EXISTS profileAccount (
	id 				INT NOT NULL AUTO_INCREMENT,
	firstname		VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci,
    surname			VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci,
    country 		VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci,
    region			VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci,
    account_id		INT NOT NULL, 
    PRIMARY KEY (id),
    FOREIGN KEY (account_id) REFERENCES account(id)
) Engine = InnoDB;

ALTER TABLE profileAccount
ADD gender TINYINT(1) DEFAULT 0;

CREATE TABLE IF NOT EXISTS bill (
	id 				INT NOT NULL AUTO_INCREMENT,
    idUSer			INT NOT NULL,
    bill_name		VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    bill_email		VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    bill_address	VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    bill_tel		INT(11),
    bilt_pttt		TINYINT(1),
    dateOfOrder		VARCHAR(50),
    receive_name    VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    receive_address VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    receive_tel		VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (idUser) REFERENCES account(id) 
) Engine = InnoDB;

CREATE TABLE IF NOT EXISTS cart (
	id 				INT NOT NULL AUTO_INCREMENT,
    idUser			INT NOT NULL,
    idPro			INT NOT NULL,
    img 			VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    name			VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    price			INT DEFAULT 0,
    quantity		INT DEFAULT 0,
    thanhTien	    INT DEFAULT 0,
    idBill			INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (idBill) REFERENCES bill(id)
) Engine = InnoDB;

CREATE TABLE IF NOT EXISTS category (
	id 				INT NOT NULL AUTO_INCREMENT,
    name			VARCHAR(255),
    PRIMARY KEY (id)
) Engine = InnoDB;

CREATE TABLE IF NOT EXISTS items (	
	id 				INT NOT NULL AUTO_INCREMENT,
    name			VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    price			DOUBLE(10, 2) DEFAULT 0,
    img				VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    description		TEXT,
    view 			INT DEFAULT 0,
    category_id 	INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (category_id) REFERENCES category(id)
) Engine = InnoDB;


	
SELECT * FROM bill;
SELECT * FROM cart;
SELECT * FROM category;
SELECT * FROM items;
SELECT * FROM profileAccount;


SELECT 
	a.id, 
    a.email,
    a.address,
    a.tel,
    pro.firstname,
    pro.surname,
    pro.country,
    pro.region,
    pro.gender	
FROM 
	account as a INNER JOIN profileAccount as pro 
	ON a.id = pro.account_id
WHERE
	a.id = 1;
    
UPDATE account SET address = 'minhan', tel = '1233' WHERE id = '2'; 		
			
SELECT a.id, a.email, a.address, a.tel, pro.firstname, pro.surname, pro.country, pro.region, pro.gender
 FROM account as a INNER JOIN profileAccount as pro ON a.id = pro.account_id WHERE a.id = '3';

TRUNCATE CATEGORY;
DELETE FROM CATEGORY;
DELETE FROM items;
DELETE FROM profileAccount;

SET SQL_SAFE_UPDATES = 0;

INSERT INTO account(user, pass, email, address, tel, role) VALUES('minhan', '2002', 'annogo123@gmail.com', '154/ ABC', '0916849011', '0');
INSERT INTO account(user, pass, email, address, tel, role) VALUES('admin', 'admin', 'annogo123@gmail.com', '154/ ABC', '0916849011', '1');










