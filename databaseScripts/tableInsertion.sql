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

CREATE TABLE settingsWelcome
(
    title varchar(100) NOT NULL,
    subtitle varchar(200) NOT NULL,
    imageLink varchar(200) NOT NULL
);