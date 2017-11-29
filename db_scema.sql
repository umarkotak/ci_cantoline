create table users (
  id            int primary key auto_increment,
  username      varchar(30) unique,
  password      varchar(30),
  name          varchar(40),
  phone         varchar(12),
  email         varchar(30),
  type          varchar(15),
  credit        int,
  auth_crypt    varchar(70)
);

create table foods (
  id            int,
  name          varchar(30),
  category_id   varchar(20),
  image         varchar(30),
  description   text,
  stock         int,
  price         int
);

create table categories(
  id            int,
  name          varchar(20),
  description   text
);

create table food_reviews (
  foods_id      int,
  users_id      int,
  rating        int,
  review        text
);

create table carts (
  id            int,  
  users_id      int,
  foods_id      int,
  quantity      int,
  price         int,
  status        varchar(15)
);

create table orders (
  id            int,
  users_id      int,
  payment_date  date,
  total_price   int
);

create table query (

);

create table posts (
  id            int,
  title         varchar(40),
  content       text,
  created_date  date,
  author        varchar(30)
);

create table comments (
  id            int,
  posts_id      int,
  content       text,
  users_id      int
);