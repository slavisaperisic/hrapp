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
drop table IF EXISTS StaffSkills;
drop table IF EXISTS SkillTypes;
drop table IF EXISTS StaffRoleTypes;
drop table IF EXISTS StaffRoles;
drop table IF EXISTS Users;
drop table IF EXISTS CityZones;
drop table IF EXISTS QualificationTypes;
drop table IF EXISTS StaffQualifications;
drop table IF EXISTS AbsentStaff;
drop table IF EXISTS AbsenseTypes;
drop table IF EXISTS StaffInCrew;
drop table IF EXISTS Crew;
drop table IF EXISTS StaffInShifts;
drop table IF EXISTS Stations;
drop table IF EXISTS Shifts;
drop table IF EXISTS Staff;




Create table Staff (
	StaffID Int NOT NULL,
	FirstName Varchar(50),
	MidName Varchar(50),
	LastName Varchar(50),
	StationID Int NOT NULL,
 Primary Key (StaffID)) ENGINE = MyISAM;

Create table Shifts (
	ShiftID Int NOT NULL,
	ShiftName Varchar(30) NOT NULL,
	ShiftDesc Varchar(100),
	DayOrNight Char(1) NOT NULL,
	StartTime Time NOT NULL,
	EndTime Time NOT NULL,
	UNIQUE (ShiftName),
 Primary Key (ShiftID)) ENGINE = MyISAM;

Create table Stations (
	StationID Int NOT NULL,
	StationName Varchar(30) NOT NULL,
	CityZoneID Int NOT NULL,
	UNIQUE (StationName),
 Primary Key (StationID)) ENGINE = MyISAM;

Create table StaffInShifts (
	StShiftID Int NOT NULL,
	StaffID Int NOT NULL,
	ShiftID Int NOT NULL,
	StartDate Date NOT NULL,
	EndDate Date,
 Primary Key (StShiftID)) ENGINE = MyISAM;

Create table Crew (
	CrewID Int NOT NULL,
	CrewNbr Smallint NOT NULL,
	CrewName Varchar(50) NOT NULL,
	CrewDesc Varchar(100),
	UNIQUE (CrewName),
 Primary Key (CrewID)) ENGINE = MyISAM;

Create table StaffInCrew (
	StaffCrewID Int NOT NULL,
	CrewID Int NOT NULL,
	StaffRoleID Int NOT NULL,
	PlanedTrUnRoleID Int NOT NULL,
	Leader Char(1) NOT NULL,
	FromDate Date NOT NULL,
	ToDate Date,
 Primary Key (StaffCrewID)) ENGINE = MyISAM;

Create table AbsenseTypes (
	AbsTypeID Int NOT NULL,
	AbsTypeName Varchar(30) NOT NULL,
	UNIQUE (AbsTypeName),
 Primary Key (AbsTypeID)) ENGINE = MyISAM;

Create table AbsentStaff (
	AbsStaffID Int NOT NULL,
	StaffID Int NOT NULL,
	AbsTypeID Int NOT NULL,
	FromTime Date NOT NULL,
	ToTime Date,
 Primary Key (AbsStaffID)) ENGINE = MyISAM;

Create table StaffQualifications (
	StaffQualID Int NOT NULL,
	QualTypeID Int NOT NULL,
	StaffID Int NOT NULL,
	DegreeCertification Char(1) NOT NULL,
	FromDate Date,
	ToDate Date,
 Primary Key (StaffQualID)) ENGINE = MyISAM;

Create table QualificationTypes (
	QualTypeID Int NOT NULL,
	QualTypeName Varchar(30) NOT NULL,
	UNIQUE (QualTypeName),
 Primary Key (QualTypeID)) ENGINE = MyISAM;

Create table CityZones (
	CityZoneID Int NOT NULL,
	CityZoneNbr Smallint NOT NULL,
	CityZoneName Varchar(30) NOT NULL,
	UNIQUE (CityZoneNbr),
	UNIQUE (CityZoneName),
 Primary Key (CityZoneID)) ENGINE = MyISAM;

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

Create table StaffRoles (
	StaffRoleID Int NOT NULL,
	StaffID Int NOT NULL,
	StaffRoleTypeID Int NOT NULL,
	FromDate Date NOT NULL,
	ToDate Date,
 Primary Key (StaffRoleID)) ENGINE = MyISAM;

Create table StaffRoleTypes (
	StaffRoleTypeID Int NOT NULL,
	StaffRoleTypeName Varchar(50) NOT NULL,
	UNIQUE (StaffRoleTypeName),
 Primary Key (StaffRoleTypeID)) ENGINE = MyISAM;

Create table SkillTypes (
	SkillTypeID Int NOT NULL,
	SkillTypeName Varchar(50) NOT NULL,
	UNIQUE (SkillTypeName),
 Primary Key (SkillTypeID)) ENGINE = MyISAM;

Create table StaffSkills (
	StaffSkillID Int NOT NULL,
	StaffID Int NOT NULL,
	SkillTypeID Int NOT NULL,
	StartDate Date,
	SkillLevel Varchar(20),
	YearsExperience Smallint,
 Primary Key (StaffSkillID)) ENGINE = MyISAM;

Create table TransUnitRoles (
	TrUnRoleID Int NOT NULL,
	TransUnitID Int NOT NULL,
	TransUnitTypeID Int NOT NULL,
	FromDate Date NOT NULL,
	ToDate Date,
 Primary Key (TrUnRoleID)) ENGINE = MyISAM;












Alter table StaffInShifts add Foreign Key (StaffID) references Staff (StaffID) on delete  restrict on update  restrict;
Alter table AbsentStaff add Foreign Key (StaffID) references Staff (StaffID) on delete  restrict on update  restrict;
Alter table StaffQualifications add Foreign Key (StaffID) references Staff (StaffID) on delete  restrict on update  restrict;
Alter table Users add Foreign Key (StaffID) references Staff (StaffID) on delete  restrict on update  restrict;
Alter table StaffRoles add Foreign Key (StaffID) references Staff (StaffID) on delete  restrict on update  restrict;
Alter table StaffSkills add Foreign Key (StaffID) references Staff (StaffID) on delete  restrict on update  restrict;
Alter table StaffInShifts add Foreign Key (ShiftID) references Shifts (ShiftID) on delete  restrict on update  restrict;
Alter table Staff add Foreign Key (StationID) references Stations (StationID) on delete  restrict on update  restrict;
Alter table StaffInCrew add Foreign Key (CrewID) references Crew (CrewID) on delete  restrict on update  restrict;
Alter table TransportEvents add Foreign Key (StaffCrewID) references StaffInCrew (StaffCrewID) on delete  restrict on update  restrict;
Alter table AbsentStaff add Foreign Key (AbsTypeID) references AbsenseTypes (AbsTypeID) on delete  restrict on update  restrict;
Alter table StaffQualifications add Foreign Key (QualTypeID) references QualificationTypes (QualTypeID) on delete  restrict on update  restrict;
Alter table Stations add Foreign Key (CityZoneID) references CityZones (CityZoneID) on delete  restrict on update  restrict;
Alter table TransportEvents add Foreign Key (DispatcID) references Users (UserID) on delete  restrict on update  restrict;
Alter table Events add Foreign Key (AgentID) references Users (UserID) on delete  restrict on update  restrict;
Alter table Events add Foreign Key (AdvicerID) references Users (UserID) on delete  restrict on update  restrict;
Alter table Events add Foreign Key (DoctorID) references Users (UserID) on delete  restrict on update  restrict;
Alter table StaffInCrew add Foreign Key (StaffRoleID) references StaffRoles (StaffRoleID) on delete  restrict on update  restrict;
Alter table StaffRoles add Foreign Key (StaffRoleTypeID) references StaffRoleTypes (StaffRoleTypeID) on delete  restrict on update  restrict;
Alter table StaffSkills add Foreign Key (SkillTypeID) references SkillTypes (SkillTypeID) on delete  restrict on update  restrict;
Alter table TransportEvents add Foreign Key (TrUnRoleID) references TransUnitRoles (TrUnRoleID) on delete  restrict on update  restrict;
Alter table StaffInCrew add Foreign Key (PlanedTrUnRoleID) references TransUnitRoles (TrUnRoleID) on delete  restrict on update  restrict;















/* Users permissions */





