create database wordpress;
create user wpadmin@localhost identified by 'password';
grant all on wordpress.* to wpadmin@localhost;
