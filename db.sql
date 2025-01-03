CREATE DATABASE NeoBank;
USE  NeoBank;

CREATE TABLE account(
    accountNum INT PRIMARY KEY AUTO_INCREMENT,
    titulaire VARCHAR(50) NOT NULL,
    soldeInit DECIMAL(15,2) NOT NULL
    );
CREATE TABLE savingAccount( 
    	id INT PRIMARY KEY AUTO_INCREMENT,
      	minimumSolde DECIMAL(5, 2) NOT NULL,
       	accountNum INT,
      FOREIGN KEY(accountNum) REFERENCES account(accountNum) ON DELETE CASCADE
 );
CREATE TABLE currentAccount( 
    id INT PRIMARY KEY AUTO_INCREMENT,
    sommelimit DECIMAL(15, 2) NOT NULL,
    accountNum INT,
    FOREIGN KEY(accountNum) REFERENCES account(accountNum) ON DELETE CASCADE
    );
CREATE TABLE businessAccount( 
      id INT PRIMARY KEY AUTO_INCREMENT,
      limitCredit DECIMAL(10, 2) NOT NULL,
      accountNum INT,
      FOREIGN KEY(accountNum) REFERENCES account(accountNum) ON DELETE CASCADE
);
