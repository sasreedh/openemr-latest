--liquibase formatted sql
--changeset DevOpsTeam:4
insert into users (id, username) values (120,'test7');
insert into users (id, username) values (121,'test8');