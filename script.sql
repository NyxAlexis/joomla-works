-- Create the credential table where to store credential values from configuration files
drop table if exists db_credential;
create table db_credential (
tinyurl varchar(100) not null,
hostname varchar(100) not null,
user varchar(100) not null,
mdp varchar(100) not null,
dbschema varchar(100) not null,
PRIMARY KEY (tinyurl)
);
