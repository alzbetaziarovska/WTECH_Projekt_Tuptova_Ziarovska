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
)

INSERT INTO users (f_name, l_name, email, password, is_admin, newsletter)
values ('Alžbeta', 'Žiarovská', 'alzbetaziarovska@gmail.com', md5('12345'), true, false);

INSERT INTO users (f_name, l_name, email, password, is_admin, newsletter)
values ('Ema', 'Tuptová', 'ema.tuptova@gmail.com', md5('12345'), true, false);

INSERT INTO users (f_name, l_name, email, password, is_admin, newsletter)
values ('Janko', 'Hraško', 'janko.hrasko@gmail.com', md5('12345'), false, false);

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

INSERT into categories (name) values ('Krmivo a doplnky');
INSERT into categories (name) values ('Vybavenie');
INSERT into categories (name) values ('Výrobky');
INSERT into categories (name) values ('Zdravie včiel');

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
CONSTRAINT fk_category_products FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE
);

INSERT into products (category_id, name, description, make) values (1, 'test1', 'toto je testovaci produkt chichi', 'test');

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

CREATE TYPE variant_type_enum AS ENUM ('size', 'color', 'weight');
CREATE TYPE variant_enum AS ENUM ('XS', 'S', 'M', 'L', 'XL', 'small', 'big');

CREATE TABLE variants (
    id BIGSERIAL PRIMARY KEY,
    product_id BIGINT NOT NULL,
    variant_type variant_type_enum NOT NULL, -- Uses the ENUM type
    variant variant_enum NOT NULL, -- Uses the ENUM type
    in_storage INT NOT NULL CHECK (in_storage >= 0), -- Ensures non-negative stock values
    price DECIMAL(10,2) NOT NULL CHECK (price >= 0), -- More precise than FLOAT
    CONSTRAINT fk_variants_product FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
);

CREATE TABLE products_in_cart (
    cart_id BIGINT NOT NULL,
    variant_id BIGINT NOT NULL,
    pcs INT NOT NULL CHECK (pcs >= 0),  -- Ensures pcs (pieces) are non-negative
    CONSTRAINT fk_products_in_cart_cart FOREIGN KEY (cart_id) REFERENCES carts(id) ON DELETE CASCADE,
    CONSTRAINT fk_products_in_cart_variant FOREIGN KEY (variant_id) REFERENCES variants(id) ON DELETE CASCADE,
    PRIMARY KEY (cart_id, variant_id) -- Ensures each cart can have only one of each variant
);

CREATE TABLE products_in_order (
    order_id BIGINT NOT NULL,
    variant_id BIGINT NOT NULL,
    pcs INT NOT NULL CHECK (pcs >= 0),  -- Ensures pcs (pieces) are non-negative
    CONSTRAINT fk_products_in_order_order FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE,
    CONSTRAINT fk_products_in_order_variant FOREIGN KEY (variant_id) REFERENCES variants(id) ON DELETE CASCADE,
    PRIMARY KEY (order_id, variant_id) -- Ensures each order can have only one of each variant
);

