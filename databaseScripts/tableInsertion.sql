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
  description text null,
  body text not null,
  created datetime not null,
  modified datetime null,
  category_id int null,
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
	value text not null,
	constraint settings_settingsKey_uindex
		unique (settingsKey)
)
;

