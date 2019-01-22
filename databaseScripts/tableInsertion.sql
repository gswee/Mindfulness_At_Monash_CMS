create table category
(
	id int auto_increment
		primary key,
	category varchar(50) not null
)
;

create table article
(
	id int auto_increment
		primary key,
	title varchar(50) not null,
	description varchar(200) null,
	body text not null,
	created datetime not null,
	modified datetime null,
	category_id int null,
	status enum('published', 'draft', 'archived') default 'draft' not null,
	constraint article_category_id_fk
		foreign key (category_id) references category (id)
)
;

create index article_category_id_fk
	on article (category_id)
;

create table settings
(
	id int auto_increment
		primary key,
	settingsKey varchar(50) not null,
	settingsValue text not null,
	constraint settings_settingsKey_uindex
		unique (settingsKey)
)
;

create table users
(
	id int auto_increment
		primary key,
	username varchar(30) not null,
	password text not null,
	email varchar(50) not null,
	passkey varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
	timeout timestamp NULL DEFAULT NULL,
	constraint users_username_uindex
		unique (username)
)
;

