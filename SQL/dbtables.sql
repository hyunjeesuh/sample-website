DROP TABLE inquiry;
DROP TABLE post_cat;
DROP TABLE category;
DROP TABLE post;
DROP TABLE admin_acc;


CREATE TABLE admin_acc (
	aid INT,
	username VARCHAR(30),
	password VARCHAR(30),
	PRIMARY KEY(aid)
);

CREATE TABLE post (
	pid INT,
	ptitle VARCHAR(100),
	pimg VARCHAR(100),
	pcontent LONGTEXT,
	PRIMARY KEY(pid)
);

CREATE TABLE category (
	catid INT,
	catname VARCHAR(30),
	PRIMARY KEY(catid)
);

CREATE TABLE post_cat (
	pid INT,
	catid INT,
	PRIMARY KEY(pid, catid),
	FOREIGN KEY(pid) REFERENCES post(pid),
	FOREIGN KEY(catid) REFERENCES category(catid)
);

CREATE TABLE inquiry (
	inquiryid INT,
	email VARCHAR(30),
	inquirydate TIMESTAMP,
	message LONGTEXT,
	PRIMARY KEY(inquiryid)
);

INSERT INTO admin_acc (aid, username, password) VALUES (1, 'admin', 'password');

INSERT INTO post (pid, ptitle, pimg, pcontent) VALUES (1, 'test', NULL, 'test content test content test content test content');

INSERT INTO category (catid, catname) VALUES (1, 'Video');
INSERT INTO category (catid, catname) VALUES (2, 'Image');
INSERT INTO category (catid, catname) VALUES (3, 'Miscellaneous');

INSERT INTO post_cat (pid, catid) VALUES (1, 3);

INSERT INTO inquiry (inquiryid, email, inquirydate, message) VALUES (1, 'test@email.com', CURRENT_TIMESTAMP, 'test inquiry test inquiry test inquiry');