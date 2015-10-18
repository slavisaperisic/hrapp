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

















drop table IF EXISTS TransUnitRoles;
drop table IF EXISTS MedicalReports;
drop table IF EXISTS Users;
drop table IF EXISTS TransUnitTypes;
drop table IF EXISTS TransportUnits;
drop table IF EXISTS BusEntityRoles;
drop table IF EXISTS StaffInCrew;
drop table IF EXISTS TransportStatuses;
drop table IF EXISTS TransportStatusTypes;
drop table IF EXISTS Events;
drop table IF EXISTS TransportEvents;




Create table TransportEvents (
	TransEvID Int NOT NULL,
	TransEvNbr Varchar(20) NOT NULL,
	DispatcID Int NOT NULL,
	EventID Int NOT NULL,
	StaffCrewID Int NOT NULL,
	TrUnRoleID Int NOT NULL,
	DestinID Int,
	ScheduledStart Date NOT NULL,
	ScheduledEnd Date,
	ActualStart Date NOT NULL,
	ActualEnd Date,
	UNIQUE (TransEvNbr),
 Primary Key (TransEvID)) ENGINE = MyISAM;

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

Create table TransportStatusTypes (
	TSTypeID Int NOT NULL,
	TSTypeName Varchar(30) NOT NULL,
	TSTypeDesc Varchar(255),
	UNIQUE (TSTypeName),
 Primary Key (TSTypeID)) ENGINE = MyISAM;

Create table TransportStatuses (
	TransStatID Int NOT NULL,
	TransEvID Int NOT NULL,
	TSTypeID Int NOT NULL,
	FromDate Date NOT NULL,
	ToDate Date,
 Primary Key (TransStatID)) ENGINE = MyISAM;

Create table StaffInCrew (
	StaffCrewID Int NOT NULL,
	CrewID Int NOT NULL,
	StaffRoleID Int NOT NULL,
	PlanedTrUnRoleID Int NOT NULL,
	Leader Char(1) NOT NULL,
	FromDate Date NOT NULL,
	ToDate Date,
 Primary Key (StaffCrewID)) ENGINE = MyISAM;

Create table BusEntityRoles (
	BusEntRoleID Int NOT NULL,
	BusEntID Int NOT NULL,
	BusEntRoleTypeID Int NOT NULL,
	FromDate Date NOT NULL,
	ToDate Date,
 Primary Key (BusEntRoleID)) ENGINE = MyISAM;

Create table TransportUnits (
	TransUnitID Int NOT NULL,
	RegNbr Varchar(20) NOT NULL,
	TransUnitNbr Varchar(20),
 Primary Key (TransUnitID)) ENGINE = MyISAM;

Create table TransUnitTypes (
	TransUnitTypeID Int NOT NULL,
	TransUnitTypeName Varchar(30) NOT NULL,
	UNIQUE (TransUnitTypeName),
 Primary Key (TransUnitTypeID)) ENGINE = MyISAM;

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

Create table MedicalReports (
	MedRepID Int NOT NULL,
	TransEvID Int NOT NULL,
 Primary Key (MedRepID)) ENGINE = MyISAM;

Create table TransUnitRoles (
	TrUnRoleID Int NOT NULL,
	TransUnitID Int NOT NULL,
	TransUnitTypeID Int NOT NULL,
	FromDate Date NOT NULL,
	ToDate Date,
 Primary Key (TrUnRoleID)) ENGINE = MyISAM;












Alter table TransportStatuses add Foreign Key (TransEvID) references TransportEvents (TransEvID) on delete  restrict on update  restrict;
Alter table MedicalReports add Foreign Key (TransEvID) references TransportEvents (TransEvID) on delete  restrict on update  restrict;
Alter table TransportEvents add Foreign Key (EventID) references Events (EventID) on delete  restrict on update  restrict;
Alter table EventStatuses add Foreign Key (EventID) references Events (EventID) on delete  restrict on update  restrict;
Alter table TransportStatuses add Foreign Key (TSTypeID) references TransportStatusTypes (TSTypeID) on delete  restrict on update  restrict;
Alter table TransportEvents add Foreign Key (StaffCrewID) references StaffInCrew (StaffCrewID) on delete  restrict on update  restrict;
Alter table Events add Foreign Key (CallerID) references BusEntityRoles (BusEntRoleID) on delete  restrict on update  restrict;
Alter table Events add Foreign Key (ExternalID) references BusEntityRoles (BusEntRoleID) on delete  restrict on update  restrict;
Alter table TransportEvents add Foreign Key (DestinID) references BusEntityRoles (BusEntRoleID) on delete  restrict on update  restrict;
Alter table Events add Foreign Key (PatientID) references BusEntityRoles (BusEntRoleID) on delete  restrict on update  restrict;
Alter table TransUnitRoles add Foreign Key (TransUnitID) references TransportUnits (TransUnitID) on delete  restrict on update  restrict;
Alter table TransUnitRoles add Foreign Key (TransUnitTypeID) references TransUnitTypes (TransUnitTypeID) on delete  restrict on update  restrict;
Alter table TransportEvents add Foreign Key (DispatcID) references Users (UserID) on delete  restrict on update  restrict;
Alter table Events add Foreign Key (AgentID) references Users (UserID) on delete  restrict on update  restrict;
Alter table Events add Foreign Key (AdvicerID) references Users (UserID) on delete  restrict on update  restrict;
Alter table Events add Foreign Key (DoctorID) references Users (UserID) on delete  restrict on update  restrict;
Alter table TransportEvents add Foreign Key (TrUnRoleID) references TransUnitRoles (TrUnRoleID) on delete  restrict on update  restrict;
Alter table StaffInCrew add Foreign Key (PlanedTrUnRoleID) references TransUnitRoles (TrUnRoleID) on delete  restrict on update  restrict;















/* Users permissions */





