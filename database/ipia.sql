DROP DATABASE ipia;
CREATE DATABASE ipia;

CREATE TABLE users (
user_id             INT NOT NULL AUTO_INCREMENT,
firstname           VARCHAR(20) NOT NULL,  
lastname            VARCHAR(20) NOT NULL,
username            VARCHAR(20) NOT NULL,
email               VARCHAR(255) NOT NULL,  
pass                VARCHAR(255) NOT NULL,  
user_type           TINYINT(1) NOT NULL DEFAULT 0,
user_about          TEXT,

signup_time         TIMESTAMP NOT NULL, 
PRIMARY KEY (user_id)
);


INSERT INTO users(firstname, lastname, username,  pass, email, user_type, user_about)
       VALUES ("Mirnes", "Halilovic", "mirke_ha", "e10adc3949ba59abbe56e057f20f883e", "mirke.ha@outlook.com", "0", "About me" "2001-02-05");
INSERT INTO users(firstname, lastname, username,  pass, email, user_type, user_about)
       VALUES ("Admin", "Admin", "admin", "e10adc3949ba59abbe56e057f20f883e", "admin@gmail.com", "0", "About me" "2001-02-05");
INSERT INTO users(firstname, lastname, username,  pass, email, user_type, user_about)
       VALUES ("Korisnik", "Korisnik", "korisnik", "e10adc3949ba59abbe56e057f20f883e", "korisnik@gmail.com", "1", "About meni" "2001-02-05");
INSERT INTO users(firstname, lastname, username,  pass, email, user_type, user_about)
       VALUES ("Korisnik 2", "KOrisnik 2", "korisnik2", "e10adc3949ba59abbe56e057f20f883e", "korisnik2@gmail.com", "1", "About meni" "2001-02-05");
INSERT INTO users(firstname, lastname, username,  pass, email, user_type, user_about)
       VALUES ("Korsnik3", "Korisnik3", "korisnik3", "e10adc3949ba59abbe56e057f20f883e", "korisnik3@gmail.com", "1", "About meni" "2001-02-05");
INSERT INTO users(firstname, lastname, username,  pass, email, user_type, user_about)
       VALUES ("Korsnik4", "Korisnik4", "korisnik4", "e10adc3949ba59abbe56e057f20f883e", "korisnik4@gmail.com", "1", "About meni" "2001-02-05");

