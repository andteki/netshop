create database if not exists netshop
character set utf8
collate utf8_hungarian_ci;

grant all privileges
on netshop.*
to netshop@localhost
identified by 'titok';

