/*----- Robbert Van der Grift:  
		Student#:200326832
        Assignment#1
--------------------------------------------------------------------------------*/
USE gc200326832;

/*--------- Clients table --------------*/

CREATE TABLE clients (

	client_number	INT(50),
    client_name		VARCHAR(50),
    address			VARCHAR(50),
    phone			INT(50),
    birthday		VARCHAR(50),
    email			VARCHAR(50)
	
);

select * from clients; 

CREATE TABLE appointments (

	clients 			VARCHAR(100),
    appointment_date	date,
    appointment_time	time
);

ALTER TABLE appointments 
ADD COLUMN appointment_time time;
select * from appointments;
