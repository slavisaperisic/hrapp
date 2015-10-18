/*
Created		10/11/2015
Modified		10/12/2015
Project		
Model		
Company		
Author		
Version		
Database		mySQL 5 
*/

















drop table IF EXISTS ProblemTypes;
drop table IF EXISTS EventStatusTypes;
drop table IF EXISTS EventStatuses;
drop table IF EXISTS Users;
drop table IF EXISTS BusEntityRoles;
drop table IF EXISTS Priorities;
drop table IF EXISTS Events;
drop table IF EXISTS EventTypes;




Create table EventTypes (
	EventTypeID Int NOT NULL,
	EventTypeName Varchar(30) NOT NULL,
	EventTypeDesc Varchar(255),
	UNIQUE (EventTypeName),
 Primary Key (EventTypeID)) ENGINE = MyISAM;

Create table Events (
	EventID Int NOT NULL,
	EventTypeID Int NOT NULL,
	EventNbr Varchar(20) NOT NULL,
	EventDate Date,
	ProblemTypeID Int,
	ProblemDesc Varchar(255),
	PriorityID Int,
	AgentID Int NOT NULL,
	DoctorID Int,
	AdvicerID Int,
	ExternalID Int,
	CallerID Int NOT NULL,
	PatientID Int,
	UNIQUE (EventNbr),
 Primary Key (EventID)) ENGINE = MyISAM;

Create table Priorities (
	PriorityID Int NOT NULL,
	PriorityName Varchar(30) NOT NULL,
	UNIQUE (PriorityName),
 Primary Key (PriorityID)) ENGINE = MyISAM;

Create table BusEntityRoles (
	BusEntRoleID Int NOT NULL,
	BusEntID Int NOT NULL,
	BusEntRoleTypeID Int NOT NULL,
	FromDate Date NOT NULL,
	ToDate Date,
 Primary Key (BusEntRoleID)) ENGINE = MyISAM;

Create table Users (
	UserID Int NOT NULL,
	StaffID Int NOT NULL,
	UserName Varchar(20) NOT NULL,
	UserPass Varchar(20) NOT NULL,
	Email Varchar(100),
	Phone1 Varchar(20),
	Active Smallint,
	CreateDate Date,
	LastLogin Date,
	UNIQUE (UserName),
 Primary Key (UserID)) ENGINE = MyISAM;

Create table EventStatuses (
	EvStatID Int NOT NULL,
	EventID Int NOT NULL,
	EvStatTypeID Int NOT NULL,
	FromDate Date NOT NULL,
	ToDate Date,
 Primary Key (EvStatID)) ENGINE = MyISAM;

Create table EventStatusTypes (
	EvStatTypeID Int NOT NULL,
	EvStatTypeName Varchar(30) NOT NULL,
	EvStatTypeDesc Varchar(255),
	UNIQUE (EvStatTypeName),
 Primary Key (EvStatTypeID)) ENGINE = MyISAM;

Create table ProblemTypes (
	ProblemTypeID Int NOT NULL,
	ProblemTypeName Varchar(100) NOT NULL,
	ProblemTypeDesc Varchar(255),
	UNIQUE (ProblemTypeName),
 Primary Key (ProblemTypeID)) ENGINE = MyISAM;












Alter table Events add Foreign Key (EventTypeID) references EventTypes (EventTypeID) on delete  restrict on update  restrict;
Alter table TransportEvents add Foreign Key (EventID) references Events (EventID) on delete  restrict on update  restrict;
Alter table EventStatuses add Foreign Key (EventID) references Events (EventID) on delete  restrict on update  restrict;
Alter table Events add Foreign Key (PriorityID) references Priorities (PriorityID) on delete  restrict on update  restrict;
Alter table Events add Foreign Key (CallerID) references BusEntityRoles (BusEntRoleID) on delete  restrict on update  restrict;
Alter table Events add Foreign Key (ExternalID) references BusEntityRoles (BusEntRoleID) on delete  restrict on update  restrict;
Alter table TransportEvents add Foreign Key (DestinID) references BusEntityRoles (BusEntRoleID) on delete  restrict on update  restrict;
Alter table Events add Foreign Key (PatientID) references BusEntityRoles (BusEntRoleID) on delete  restrict on update  restrict;
Alter table TransportEvents add Foreign Key (DispatcID) references Users (UserID) on delete  restrict on update  restrict;
Alter table Events add Foreign Key (AgentID) references Users (UserID) on delete  restrict on update  restrict;
Alter table Events add Foreign Key (AdvicerID) references Users (UserID) on delete  restrict on update  restrict;
Alter table Events add Foreign Key (DoctorID) references Users (UserID) on delete  restrict on update  restrict;
Alter table EventStatuses add Foreign Key (EvStatTypeID) references EventStatusTypes (EvStatTypeID) on delete  restrict on update  restrict;
Alter table Events add Foreign Key (ProblemTypeID) references ProblemTypes (ProblemTypeID) on delete  restrict on update  restrict;















/* Users permissions */





