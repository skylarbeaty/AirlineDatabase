 create table pilot 
 	(pilot_id           char(8), 
     	 lisence_no         char(8),
     	 name               varchar(20) not null,
     	 salary             numeric(8,2) check (salary > 30000),
     	 airline_name       varchar(20),
     	 primary key        (pilot_id)
     	); 

create table seat
 	 (seat_no        char(5),
      	  class          varchar(10),
      	  cost           numeric(6,2),
      	  primary key    (seat_no)
      	 );

create table flight
	(flight_no          char(5),
 	 destination_city   varchar(15), 
 	 departure_city     varchar(15),
 	 departure_time     time,
 	 arrival_time       time,
	 flight_length      numeric(3,2),
 	 total_passenger    int(3),
	 total_seats        int(3),
 	 empty_seats        int(3),
 	 flight_type        char(2),
 	 distance           int(6),
 	 departure_date     date,
	 arrival_date       date,
	 primary key        (flight_no)
 	); 

 create table passenger
 	(passenger_id       char(8),
     	 name               varchar(20) not null,
     	 dob                date,
     	 primary key        (passenger_id)
     	);

 create index ind
	on passenger        (name);

 create table ticket
 	(ticket_no          char(8),
     	 flight_no          char(5),
     	 cost               numeric(6,2),
     	 meal_type          varchar(20),
     	 passenger_id       char(8),
     	 primary key        (ticket_no),
     	 foreign key        (passenger_id) references passenger(passenger_id),
	 foreign key        (flight_no) references flight(flight_no) on delete set null
     	);

 create table boarding_pass
 	(boarding_no      char(5),
      	 passenger_id     char(8),
      	 name             varchar(20),
      	 flight_no        char(5), 
      	 seat_no          char(5),
      	 checked_bag      int(2), 
      	 carry_on         varchar(3),
      	 primary key      (boarding_no),
      	 foreign key      (passenger_id) references passenger(passenger_id),
	 foreign key      (name) references passenger(name),
      	 foreign key      (flight_no) references flight(flight_no), 
      	 foreign key      (seat_no) references seat(seat_no)
      	 );

create table fly
 	 (pilot_id        char(8),
      	  flight_no       char(5),
      	  foreign key     (pilot_id) references pilot(pilot_id) on delete cascade, 
      	  foreign key     (flight_no) references flight(flight_no) on delete set null
      	 );

create table travels
 	(flight_no       char(5),
     	 passenger_id    char(8),
     	 foreign key     (passenger_id) references passenger(passenger_id) on delete set null,
     	 foreign key     (flight_no) references flight(flight_no) on delete set null
     	);


      


