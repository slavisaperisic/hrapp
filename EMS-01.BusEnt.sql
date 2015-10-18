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

















drop table IF EXISTS BusEntityRoles;
drop table IF EXISTS BusEntRoleTypes;
drop table IF EXISTS ContDataForBusEnt;
drop table IF EXISTS ContDataTypes;
drop table IF EXISTS ContactData;
drop table IF EXISTS BusinessEntities;




Create table BusinessEntities (
	BusEntID Int NOT NULL,
	BusEntType Char(1) NOT NULL,
	BusEntName Varchar(100) NOT NULL,
	Gender Char(1),
	Age Smallint,
	FirstName Varchar(50),
	MidName Varchar(50),
	LastName Varchar(50),
	OrgName Varchar(100),
 Primary Key (BusEntID)) ENGINE = MyISAM;

Create table ContactData (
	ContDataID Int NOT NULL,
	ContDataTypeID Int NOT NULL,
	CountryCode Varchar(4),
	NetNum Varchar(6),
	PhoneNbr Varchar(20),
	ElecAddrStr Varchar(100),
	Address Varchar(100),
	Street Varchar(60),
	StreetNum Varchar(10),
	EntryNum Varchar(10),
	FloorNum Varchar(10),
	ApartmentNum Varchar(10),
	AddressDesc Varchar(255),
	Country Varchar(50),
	City Varchar(50),
	PostalCode Varchar(10),
 Primary Key (ContDataID)) ENGINE = MyISAM;

Create table ContDataTypes (
	ContDataTypeID Int NOT NULL,
	ContDataTypeName Varchar(30) NOT NULL,
	UNIQUE (ContDataTypeName),
 Primary Key (ContDataTypeID)) ENGINE = MyISAM;

Create table ContDataForBusEnt (
	CDforBEID Int NOT NULL,
	BusEntID Int NOT NULL,
	ContDataID Int NOT NULL,
	FromDate Date NOT NULL,
	ToDate Date,
 Primary Key (CDforBEID)) ENGINE = MyISAM;

Create table BusEntRoleTypes (
	BusEntRoleTypeID Int NOT NULL,
	BusEntRoleTypeName Varchar(30) NOT NULL,
	UNIQUE (BusEntRoleTypeName),
 Primary Key (BusEntRoleTypeID)) ENGINE = MyISAM;

Create table BusEntityRoles (
	BusEntRoleID Int NOT NULL,
	BusEntID Int NOT NULL,
	BusEntRoleTypeID Int NOT NULL,
	FromDate Date NOT NULL,
	ToDate Date,
 Primary Key (BusEntRoleID)) ENGINE = MyISAM;












Alter table ContDataForBusEnt add Foreign Key (BusEntID) references BusinessEntities (BusEntID) on delete  restrict on update  restrict;
Alter table BusEntityRoles add Foreign Key (BusEntID) references BusinessEntities (BusEntID) on delete  restrict on update  restrict;
Alter table ContDataForBusEnt add Foreign Key (ContDataID) references ContactData (ContDataID) on delete  restrict on update  restrict;
Alter table ContactData add Foreign Key (ContDataTypeID) references ContDataTypes (ContDataTypeID) on delete  restrict on update  restrict;
Alter table BusEntityRoles add Foreign Key (BusEntRoleTypeID) references BusEntRoleTypes (BusEntRoleTypeID) on delete  restrict on update  restrict;
Alter table Events add Foreign Key (CallerID) references BusEntityRoles (BusEntRoleID) on delete  restrict on update  restrict;
Alter table Events add Foreign Key (ExternalID) references BusEntityRoles (BusEntRoleID) on delete  restrict on update  restrict;
Alter table TransportEvents add Foreign Key (DestinID) references BusEntityRoles (BusEntRoleID) on delete  restrict on update  restrict;
Alter table Events add Foreign Key (PatientID) references BusEntityRoles (BusEntRoleID) on delete  restrict on update  restrict;















/* Users permissions */





