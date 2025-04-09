CREATE TABLE "users"
(
id bigserial NOT NULL,
f_name char varying(512) NOT NULL,
l_name char varying(512) NOT NULL,
email text NOT NULL UNIQUE,
password char varying(128) NOT NULL,
is_admin boolean NOT NULL,
newsletter boolean NOT NULL,
CONSTRAINT users_pkey PRIMARY KEY (id)
);

INSERT INTO users (f_name, l_name, email, password, is_admin, newsletter)
values ('Alžbeta', 'Žiarovská', 'alzbetaziarovska@gmail.com', '$2y$10$qF/oQAuJ6V8OPwBKBvgUS.HT.GMOeAWPp.923mMQALKOk8DhUQatK', true, false);

INSERT INTO users (f_name, l_name, email, password, is_admin, newsletter)
values ('Ema', 'Tuptová', 'ema.tuptova@gmail.com', '$2y$10$qF/oQAuJ6V8OPwBKBvgUS.HT.GMOeAWPp.923mMQALKOk8DhUQatK', true, false);

INSERT INTO users (f_name, l_name, email, password, is_admin, newsletter)
values ('Janko', 'Hraško', 'janko.hrasko@gmail.com', '$2y$10$qF/oQAuJ6V8OPwBKBvgUS.HT.GMOeAWPp.923mMQALKOk8DhUQatK', false, false);

CREATE TYPE order_state AS ENUM ('processing', 'shipped', 'delivered', 'canceled');
CREATE TYPE country_enum AS ENUM ('SK', 'CZ', 'PL', 'HU', 'AU'); -- Add relevant countries
CREATE TYPE payment_enum AS ENUM ('credit_card', 'bank_transfer', 'cash_on_delivery');
CREATE TYPE shipment_enum AS ENUM ('courier', 'slovak_post', 'pickup');

CREATE TABLE orders (
    id BIGSERIAL PRIMARY KEY,
    user_id BIGINT NOT NULL,
    state order_state NOT NULL,
    f_name VARCHAR(50) NOT NULL,
    l_name VARCHAR(50) NOT NULL,
    street VARCHAR(50) NOT NULL,
    house_num INT NOT NULL,
    city VARCHAR(50) NOT NULL,
    country country_enum NOT NULL,
    zip_code VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone_num VARCHAR(50) NOT NULL,
    payment payment_enum NOT NULL,
    shipment shipment_enum NOT NULL,
    notes VARCHAR(500),
    CONSTRAINT fk_orders_user FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE "carts" (
id BIGSERIAL PRIMARY KEY,
user_id BIGINT NOT NULL,
CONSTRAINT fk_carts_user FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE "categories" (
id BIGSERIAL PRIMARY KEY,
name VARCHAR(50) NOT NULL
);

INSERT INTO categories (name) values ('Vybavenie'), ('Krmivo a doplnky'), ('Zdravie včiel'), ('Výrobky');

CREATE TABLE "products" (
id BIGSERIAL PRIMARY KEY,
category_id BIGINT NOT NULL,
name VARCHAR(50) NOT NULL,
description VARCHAR(500) NOT NULL,
make VARCHAR(50) NOT NULL,
stars DECIMAL(2,1) CHECK (stars BETWEEN 0 AND 5),
on_sale boolean DEFAULT false,
in_stock boolean DEFAULT false,
new_in boolean DEFAULT false,
recommend boolean DEFAULT false,
favorite boolean DEFAULT false,
in_storage INT NOT NULL CHECK (in_storage >= 0), -- Ensures non-negative stock values
price DECIMAL(10,2) NOT NULL CHECK (price >= 0),
CONSTRAINT fk_category_products FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE
);

INSERT into products (category_id, name, description, maker, in_storage, price) values (1, 'test1', 'toto je testovaci produkt chichi', 'test', 10, 10.99);

CREATE TABLE product_photos (
    id BIGSERIAL PRIMARY KEY,
    product_id BIGINT NOT NULL,
    file VARCHAR(255) NOT NULL,
    CONSTRAINT fk_product_photos FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE,
    CONSTRAINT unique_product_photo UNIQUE (product_id, file)
);

CREATE TABLE reviews (
    id BIGSERIAL PRIMARY KEY,
    product_id BIGINT NOT NULL,
    user_id BIGINT NOT NULL,
    text VARCHAR(500),
    stars INT NOT NULL CHECK (stars BETWEEN 1 AND 5),
    date DATE NOT NULL DEFAULT CURRENT_DATE,
    CONSTRAINT fk_reviews_product FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE,
    CONSTRAINT fk_reviews_user FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE products_in_cart (
    cart_id BIGINT NOT NULL,
    product_id BIGINT NOT NULL,
    pcs INT NOT NULL CHECK (pcs >= 0),  -- Ensures pcs (pieces) are non-negative
    CONSTRAINT fk_products_in_cart_cart FOREIGN KEY (cart_id) REFERENCES carts(id) ON DELETE CASCADE,
    CONSTRAINT fk_products_in_cart_product FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE,
    PRIMARY KEY (cart_id, product_id) -- Ensures each cart can have only one of each product
);

CREATE TABLE products_in_order (
    order_id BIGINT NOT NULL,
    product_id BIGINT NOT NULL,
    pcs INT NOT NULL CHECK (pcs >= 0),  -- Ensures pcs (pieces) are non-negative
    CONSTRAINT fk_products_in_order_order FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE,
    CONSTRAINT fk_products_in_order_product FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE,
    PRIMARY KEY (order_id, product_id) -- Ensures each order can have only one of each product
);
