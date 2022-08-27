-- FINAL COPY!!
-- FINALCOPY

drop table Resources2 cascade constraints;
drop table Address1 cascade constraints;
drop table Address2 cascade constraints;
drop table Users cascade constraints;
drop table Company cascade constraints;
drop table Position cascade constraints;
drop table Applications cascade constraints;
drop table Interview cascade constraints;
drop table Recruiter cascade constraints;
drop table Feedback1 cascade constraints;
-- drop table Feedback2 cascade constraints;
drop table Variant cascade constraints;
drop table Resources1 cascade constraints;
drop table CodingResources cascade constraints;
drop table CodingSolution cascade constraints;
drop table EmployedBy cascade constraints;
drop table Coding cascade constraints;
drop table Behavioural cascade constraints;
drop table InterviewCoding cascade constraints;
drop table InterviewBehavioural cascade constraints;
drop table FacilitatedBy cascade constraints;



Create Table Address2 (
	postalZipCode varchar2(100) primary key,
  city varchar2(100),
  provinceState varchar2(100)
);

INSERT INTO Address2 VALUES('V1L2U3', 'Vancouver', 'BC');
INSERT INTO Address2 VALUES('V1L2U5', 'Vancouver', 'BC');
INSERT INTO Address2 VALUES('V5K2U3', 'Toronto', 'ON');
INSERT INTO Address2 VALUES('V1L9P8', 'Toronto', 'ON');
INSERT INTO Address2 VALUES('V9L6T5', 'Calgary', 'AB');

Create Table Address1 (
	         houseNum number(9,0),
           street varchar2(100),
           postalZipCode varchar2(100),
           PRIMARY KEY (street, houseNum, postalZipCode),
					FOREIGN KEY (postalZipCode) references Address2(postalZipCode)
);

INSERT INTO Address1 Values(1234, 'East St', 'V1L2U3');
INSERT INTO Address1 Values(4321, 'West St', 'V1L2U5');
INSERT INTO Address1 Values(9876, 'Other St', 'V5K2U3');
INSERT INTO Address1 Values(6789, 'Some St', 'V1L9P8');
INSERT INTO Address1 Values(1234, 'Fake St', 'V9L6T5');

Create Table Users (
  userID number(9,0) DEFAULT 0, 
	username varchar2(100),
	age number(9,0),
	experience number(9, 0),
	education varchar2(100),
	about  varchar2(100),
	PRIMARY KEY (userID)
);

INSERT INTO Users VALUES (01, 'Patrick', 20, 0, 'UBC', null);
INSERT INTO Users VALUES (02, 'James', 21, 2, 'UBC', null);
INSERT INTO Users VALUES (03, 'Akriti', 22, 1, 'UBC', null);
INSERT INTO Users VALUES (04, 'Erika', 21, 4, 'UBC', 'Hello');
INSERT INTO Users VALUES (05, 'Fred', 26, 6, 'SFU', 'I am Fred');
INSERT INTO Users VALUES (06, 'Amanda', 26, 2, 'Bootcamp', 'Boo');
INSERT INTO Users VALUES (07, 'Joan', 20, 0, 'Bootcamp', null);




Create Table Company (
comID number(9,0), 
name varchar2(100),
PRIMARY KEY(comID)
);

INSERT INTO Company VALUES (01, 'Google');
INSERT INTO Company VALUES (02, 'Best Buy');
INSERT INTO Company VALUES (03, 'Microsoft');
INSERT INTO Company VALUES (04, 'Amazon');
INSERT INTO Company VALUES (05, 'Tesla');



Create Table Position(
posID number(9,0),
comID number(9,0) not null, 
salary number(9,0), 
requirements varchar2(100), 
title varchar2(100),
houseNum number(9,0) not null,
street varchar2(100) not null,
postalZipCode varchar2(100) not null,
PRIMARY KEY(posID),
FOREIGN KEY(comID) REFERENCES Company(comID),
FOREIGN KEY(houseNum, street, postalZipCode) REFERENCES 
Address1(houseNum,street, postalZipCode)
);

INSERT INTO Position VALUES (01, 01, 70000, null, 'Junior Software Developer', 1234, 'East St', 'V1L2U3');
INSERT INTO Position VALUES (02, 01, 75000, null, 'Software Developer', 1234, 'East St', 'V1L2U3');
INSERT INTO Position VALUES (03, 03, 100000, null, 'Software Developer', 4321, 'West St', 'V1L2U5');
INSERT INTO Position VALUES (04, 03, 120000, null, 'Senior Software Developer', 9876, 'Other St', 'V5K2U3');
INSERT INTO Position VALUES (05, 02, 80000, null, 'Software Developer', 4321, 'West St', 'V1L2U5');
INSERT INTO Position VALUES (06, 02, 85000, null, 'Software Developer', 4321, 'West St', 'V1L2U5');
INSERT INTO Position VALUES (07, 02, 150000, null, 'Senior Software Developer', 4321, 'West St', 'V1L2U5');
INSERT INTO Position VALUES (08, 04, 65000, null, 'Junior Software Developer', 6789, 'Some St', 'V1L9P8');
INSERT INTO Position VALUES (09, 05, 90000, null, 'Software Developer', 1234, 'Fake St', 'V9L6T5');


Create Table Applications(
  appID number(9,0),
  posID	number(9,0) not null, 
  userID	number(9,0),
	app_resume varchar2(100),
	coverLetter varchar2(100),
	success  number(1, 0),
	app_date DATE,
	PRIMARY KEY (appID),
	FOREIGN KEY (userID) REFERENCES Users(userID) ON DELETE SET null,
	FOREIGN KEY (posID) REFERENCES Position(posID)
);

INSERT INTO Applications VALUES (01, 01, 01, 'Resume...', 'Cover letter...', 0, TO_DATE('20-JUL-2022','DD-MM-YYYY'));
INSERT INTO Applications VALUES (02, 01, 02, 'Resume...', 'Cover letter...', 0, TO_DATE('20-JUL-2022','DD-MM-YYYY'));
INSERT INTO Applications VALUES (03, 02, 01, 'Resume...', 'Cover letter...', 1, TO_DATE('20-JUL-2022','DD-MM-YYYY'));
INSERT INTO Applications VALUES (04, 04, 03, 'Resume...', 'Cover letter...', 0, TO_DATE('20-JUL-2022','DD-MM-YYYY'));
INSERT INTO Applications VALUES (05, 04, 03, 'Resume...', 'Cover letter...', 0, TO_DATE('20-JUL-2022','DD-MM-YYYY'));
INSERT INTO Applications VALUES (06, 05, 01, 'Resume...', 'Cover letter...', 0, TO_DATE('20-JUL-2022','DD-MM-YYYY'));
INSERT INTO Applications VALUES (07, 04, 01, 'Resume...', 'Cover letter...', 0, TO_DATE('20-JUL-2022','DD-MM-YYYY'));
INSERT INTO Applications VALUES (08, 02, 01, 'Resume...', 'Cover letter...', 0, TO_DATE('20-JUL-2022','DD-MM-YYYY'));
INSERT INTO Applications VALUES (09, 03, 01, 'Resume...', 'Cover letter...', 0, TO_DATE('20-JUL-2022','DD-MM-YYYY'));
INSERT INTO Applications VALUES (10, 09, 01, 'Resume...', 'Cover letter...', 0, TO_DATE('20-JUL-2022','DD-MM-YYYY'));
INSERT INTO Applications VALUES (11, 08, 01, 'Resume...', 'Cover letter...', 0, TO_DATE('20-JUL-2022','DD-MM-YYYY'));
INSERT INTO Applications VALUES (12, 07, 01, 'Resume...', 'Cover letter...', 0, TO_DATE('20-JUL-2022','DD-MM-YYYY'));
INSERT INTO Applications VALUES (13, 06, 01, 'Resume...', 'Cover letter...', 0, TO_DATE('20-JUL-2022','DD-MM-YYYY'));




Create Table Interview(
  intID number(9,0),
  appID number(9,0) not null,
	int_date DATE,
  int_length number(9, 0),
  notes varchar2(100),
  inPerson number(1, 0),
  numInterviewers number(9, 0),
	PRIMARY KEY (intID),
  FOREIGN KEY (appID) REFERENCES Applications(appID) ON DELETE SET NULL
);

INSERT INTO Interview VALUES (01, 01, TO_DATE('20-JUL-2022','DD-MM-YYYY'), 2, null, 1, 1);
INSERT INTO Interview VALUES (02, 01,  TO_DATE('20-JUL-2022','DD-MM-YYYY'), 2, null, 1, 1);
INSERT INTO Interview VALUES (03, 02,  TO_DATE('20-JUL-2022','DD-MM-YYYY'), 2, null, 0, 2);
INSERT INTO Interview VALUES (04, 04,  TO_DATE('20-JUL-2022','DD-MM-YYYY'), 2, null, 0, 1);
INSERT INTO Interview VALUES (05, 05,  TO_DATE('20-JUL-2022','DD-MM-YYYY'), 2, null, 0, 1);



Create Table Recruiter(
  recID number(9,0), 
  rec_name varchar2(100), 
  email varchar2(100),
  phoneNum varchar2(20),
  PRIMARY KEY(recID)
);

INSERT INTO Recruiter VALUES (01, 'Bill', 'bill@gmail.com', '456-543-4321');
INSERT INTO Recruiter VALUES (02, 'Bob', 'bob@gmail.com', '456-543-4322');
INSERT INTO Recruiter VALUES (03, 'Billy', 'billy@gmail.com', '456-543-4323');
INSERT INTO Recruiter VALUES (04, 'Phill', 'phill@gmail.com', '456-543-4351');
INSERT INTO Recruiter VALUES (05, 'Philly', 'philyl@gmail.com', '456-533-4321');



Create Table Feedback1(
  userID number(9,0),
  feedID	number(9,0), 
	appID number(9,0),
	title varchar2(200),
	content varchar2(100),
	feedback_date  DATE,
	PRIMARY KEY (feedID),
  FOREIGN KEY (userID) REFERENCES Users(userID) ON DELETE SET NULL,
  FOREIGN KEY (appID) REFERENCES Applications(appID) ON DELETE CASCADE
);

INSERT INTO Feedback1 VALUES (01, 01, 01, 'Good job', 'Good job', TO_DATE('20-JUL-2022','DD-MM-YYYY'));
INSERT INTO Feedback1 VALUES (01, 02, 01, 'Some advice...', 'Advice here', TO_DATE('20-JUL-2022','DD-MM-YYYY'));
INSERT INTO Feedback1 VALUES (01, 03, 02, 'I like', ':)', TO_DATE('20-JUL-2022','DD-MM-YYYY'));
INSERT INTO Feedback1 VALUES (01, 04, 03, 'Pretty Bad', 'Try harder', TO_DATE('20-JUL-2022','DD-MM-YYYY'));
INSERT INTO Feedback1 VALUES (01, 05, 03, 'What', 'what', TO_DATE('20-JUL-2022','DD-MM-YYYY'));



-- Create Table Feedback2(
-- 	appID number(9,0),
-- 	userID number(9,0) not null,
-- 	PRIMARY KEY (feed2ID),
--   FOREIGN KEY (userID) REFERENCES Users(userID) ON DELETE SET NULL,
--   FOREIGN KEY (appID) REFERENCES Feedback1(appID)
-- );

-- INSERT INTO Feedback2 VALUES (01, 01);
-- INSERT INTO Feedback2 VALUES (02, 01);
-- INSERT INTO Feedback2 VALUES (03, 02);
-- INSERT INTO Feedback2 VALUES (04, 03);
-- INSERT INTO Feedback2 VALUES (05, 04);



Create Table EmployedBy(
recID number(9,0), 
comID number(9,0),
FOREIGN KEY(recID) REFERENCES Recruiter(recID),
FOREIGN KEY(comID) REFERENCES Company(comID)
);

INSERT INTO EmployedBy(recID, comID)
VALUES(01, 01);
INSERT INTO EmployedBy(recID, comID)
VALUES(02, 02);
INSERT INTO EmployedBy(recID, comID)
VALUES(03, 03);
INSERT INTO EmployedBy(recID, comID)
VALUES(04, 04);
INSERT INTO EmployedBy(recID, comID)
VALUES(05, 05);



Create Table FacilitatedBy(
  intID number(9,0), 
  recID number(9,0), 
  platform varchar2(100),
  PRIMARY KEY(intID, recID),
  FOREIGN KEY(intID) REFERENCES Interview(intID),
  FOREIGN KEY(recID) REFERENCES Recruiter(recID)
);

INSERT INTO FacilitatedBy VALUES(01, 01, 'LinkedIn');
INSERT INTO FacilitatedBy VALUES(02, 02, 'LinkedIn');
INSERT INTO FacilitatedBy VALUES(03, 03, 'LinkedIn');
INSERT INTO FacilitatedBy VALUES(04, 04, 'LinkedIn');
INSERT INTO FacilitatedBy VALUES(05, 05, 'LinkedIn');



Create Table Coding(
  codingQID number(9,0),
 	qTitle varchar2(100) UNIQUE NOT NULL, 
  qtype varchar2(100), 
  difficulty varchar2(100), 
  content varchar2(100), 
  approvedByAdmin number(1, 0),
  PRIMARY KEY (codingQID)
);

INSERT INTO Coding VALUES(01, 'sort a list','sorting','easy',null,1);
INSERT INTO Coding VALUES(02, 'find the lowest common ancestor','binary search','medium',null,1);
INSERT INTO Coding VALUES(03, 'rotting oranges','bfs','medium',null,1);
INSERT INTO Coding VALUES(04, 'reverse a linked list','linked list','easy',null,1);
INSERT INTO Coding VALUES(05, 'Maximum Subarray','dynamic programming','easy',null,1);



Create Table Behavioural(
  behaviouralQID number(9,0),
 	qTitle varchar2(100) UNIQUE NOT NULL, 
  content varchar2(100), 
  approvedByAdmin number(1, 0),
  PRIMARY KEY (behaviouralQID)
);

INSERT INTO Behavioural VALUES (01,'tell us about yourself', null, 0);
INSERT INTO Behavioural VALUES (02,'what was your most challenging project', null, 0);
INSERT INTO Behavioural VALUES (03,'tell me about a time you made a mistake', null, 0);
INSERT INTO Behavioural VALUES (04,'what are your strengths', null, 0);
INSERT INTO Behavioural VALUES (05,'what is something you would like to improve on in this project', null, 0);



Create Table InterviewCoding(
  intID number(9, 0), 
  codingQID number(9, 0),
  PRIMARY KEY (intID, codingQID),
  FOREIGN KEY(intID) references Interview(intID),
	FOREIGN KEY(codingQID) references Coding(codingQID)
);

INSERT INTO InterviewCoding VALUES (01,02);
INSERT INTO InterviewCoding VALUES (01,03);
INSERT INTO InterviewCoding VALUES (02,03);
INSERT INTO InterviewCoding VALUES (03,04);
INSERT INTO InterviewCoding VALUES (03,05);
INSERT INTO InterviewCoding VALUES (04,04);
INSERT INTO InterviewCoding VALUES (05,05);
INSERT INTO InterviewCoding VALUES (05,04);



Create Table InterviewBehavioural(
intID number(9,0), 
behaviouralQID number(9,0),
PRIMARY KEY (intID),
FOREIGN KEY(intID) REFERENCES Interview(intID),
FOREIGN KEY(behaviouralQID) references Behavioural(behaviouralQID)
);

INSERT INTO InterviewBehavioural VALUES (01, 01);
INSERT INTO InterviewBehavioural VALUES (02,  02);
INSERT INTO InterviewBehavioural VALUES (03, 03);
INSERT INTO InterviewBehavioural VALUES (04,  04);
INSERT INTO InterviewBehavioural VALUES (05,  05);



Create Table Variant(
	codingQID number(9,0),
  vTitle varchar2(100),
  question varchar2(800), 
  solution varchar2(800),
  PRIMARY KEY (codingQID, vTitle),
  FOREIGN KEY(codingQID) REFERENCES Coding(codingQID)
);

INSERT INTO Variant VALUES(01, 'variant on peak element', 'find the peak element in a rotated array','used binary search n rotate array as follows- please leave feedback');

INSERT INTO Variant VALUES(01, 'find all peak elements', 'find all the peak elements in an array','used linear search …..');

INSERT INTO Variant VALUES(02, ' merge k sorted lists', 'given k sorted lists, merge into one list','used merge sort variant…..');

INSERT INTO Variant VALUES(02, 'merge intervals', 'Given an array of intervals where intervals[i] = [starti, endi], merge all overlapping intervals','public int[][] merge(int[][] intervals),Arrays.sort(intervals, (a, b) -> a[0] - b[0]);');

INSERT INTO Variant VALUES(02, 'merge accounts', 'Given a list of accounts where each element accounts[i] is a list of strings, where the first element accounts[i][0] is a name……..','public List<List<String>> accountsMerge(List<List<String>> accounts).......');


Create Table Resources2(
      link varchar2(100),
      website varchar2(100),
      PRIMARY KEY (link)
          -- FOREIGN KEY (link) references Resources1(link)
);

INSERT INTO Resources2 VALUES ('https://www.geeksforgeeks.org/reverse-a-linked-list/', 'www.geeksforgeeks.org');

INSERT 
INTO Resources2 VALUES  ('https://www.geeksforgeeks.org/check-if-a-number-is-palindrome/',
'www.geeksforgeeks.org');

INSERT 
INTO Resources2 VALUES ('https://leetcode.com/problems/merge-intervals/', 'www.leetcode.com');

INSERT 
INTO Resources2 VALUES ('https://leetcode.com/problems/accounts-merge/', 'www.leetcode.com');

INSERT 
INTO Resources2 VALUES ('https://leetcode.com/problems/time-based-key-value-store/','www.leetcode.com');



Create Table Resources1(
  resID number(9, 0) PRIMARY KEY,
  codingQID number(9, 0),
  link varchar2(100),
  title varchar2(100),
  description varchar2(100),
  FOREIGN KEY (codingQID) references Coding(codingQID),
  FOREIGN KEY (link) references Resources2(link)
);

INSERT INTO Resources1 VALUES (1,1,'https://leetcode.com/problems/merge-intervals/', 'merge intervals', null);

INSERT INTO Resources1 VALUES (2,2,'https://www.geeksforgeeks.org/check-if-a-number-is-palindrome/', 'palindrom', null);

INSERT INTO Resources1 VALUES (3,4,'https://leetcode.com/problems/merge-intervals/', 'merge intervals', null);

INSERT INTO Resources1 VALUES (4,1,'https://leetcode.com/problems/merge-intervals/', 'merge intervals', null);

INSERT INTO Resources1 VALUES (5,2,'https://www.geeksforgeeks.org/check-if-a-number-is-palindrome/', 'palindrom', null);




CREATE TABLE CodingResources(
           resID number(9,0),
           codingQID number(9,0),
           PRIMARY KEY (resID, codingQID),
           FOREIGN KEY(resID) REFERENCES Resources1,
           FOREIGN KEY(codingQID) REFERENCES Coding(codingQID)
);

INSERT INTO codingResources VALUES (01, 01);
INSERT INTO codingResources VALUES (02, 01);
INSERT INTO codingResources VALUES (01, 03);
INSERT INTO codingResources VALUES (04, 05);
INSERT INTO codingResources VALUES (05, 05);



Create Table codingSolution(
  solID number(9,0),
	codingQID number(9,0),
  title varchar2(100),
  content varchar2(100),
  rating number(9, 0),
	PRIMARY KEY (solID, codingQID),
	FOREIGN KEY (codingQID) REFERENCES Coding(codingQID) ON DELETE CASCADE
);

INSERT INTO CodingSolution VALUES (01, 02,'bfs approach','used a bfs approach as shown in code below….' ,3);
INSERT INTO CodingSolution VALUES (02,03, 'dfs approach','used a dfs approach as shown in code below….', 5);
INSERT INTO CodingSolution VALUES (03, 03,'reversing a linked list', 'public void reverseLL()............', 1);
INSERT INTO CodingSolution VALUES (04, 03, 'isPalindrome','public boolean isPalindrome().......', 3);
INSERT INTO CodingSolution VALUES (05,02, 'binary search for peak element', 'performed binary search as shown in code below….', 2);
