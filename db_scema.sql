CREATE TABLE users (
  id            int,
  username      varchar(30),
  password      varchar(30),
  name          varchar(40),
  phone         varchar(12),
  email         varchar(30),
  type          varchar(15),
  credit        int,
  auth_crypt    varchar(70)
);

CREATE TABLE foods (
  id            int,
  name          varchar(30),
  category_id   varchar(20),
  image         varchar(30),
  description   text,
  stock         int,
  price         int
);

CREATE TABLE categories(
  id            int,
  name          varchar(20),
  description   text
);

CREATE TABLE food_reviews (
  foods_id      int,
  users_id      int,
  rating        int,
  review        text
);

CREATE TABLE carts (
  id            int,  
  users_id      int,
  foods_id      int,
  quantity      int,
  price         int,
  status        varchar(15)
);

CREATE TABLE orders (
  id            int,
  users_id      int,
  payment_date  date,
  total_price   int
);

CREATE TABLE posts (
  id            int,
  title         varchar(40),
  content       text,
  created_date  date,
  author        varchar(30)
);

CREATE TABLE comments (
  id            int,
  posts_id      int,
  content       text,
  users_id      int
);