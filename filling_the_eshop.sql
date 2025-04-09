insert into photos (product_id, file) values (1, '../images/product_detail1.png');
insert into photos (product_id, file) values (1, '../images/product_detail4.webp');
insert into photos (product_id, file) values (1, '../images/product_detail5.jpg');

insert into reviews (product_id, user_id, text, stars, date) values (1, 1, 'Toto je testovaci recenzia', 5, '2023-10-01');
insert into reviews (product_id, user_id, text, stars, date) values (1, 1, 'Toto je testovaci recenzia', 4, '2023-10-02');
insert into reviews (product_id, user_id, text, stars, date) values (1, 1, 'Toto je testovaci recenzia', 3, current_date);
insert into reviews (product_id, user_id, text, stars, date) values (1, 1, 'Toto je testovaci recenzia', 5, '2024-10-01');
insert into reviews (product_id, user_id, text, stars, date) values (1, 2, 'Dalsi testik (ci nam ide grid)', 4, '2024-10-02');

insert into products (category_id, name, description, maker, price, new_in, sale, in_storage) values (4, 'Sviečka z včelieho vosku',
'Doprajte si kúzlo prírody s ručne vyrábanou sviečkou z čistého včelieho vosku.
                        Táto sviečka je 100 % prírodná, bez pridaných chemikálií a umelých vôní, vďaka čomu je
                        ideálnou voľbou pre zdravé a harmonické prostredie.<br><br>
                        ✔ Prírodná vôňa medu – Jemná, sladká aróma včelieho vosku navodí pocit tepla a útulnosti.<br>
                        ✔ Čisté horenie – Nevypúšťa škodlivé látky a horí dlhšie než bežné parafínové sviečky.<br>
                        ✔ Ionizuje vzduch – Pomáha čistiť vzduch od nečistôt a alergénov.<br>
                        ✔ Ekologická a udržateľná – Vyrobená zo včelieho vosku pochádzajúceho od lokálnych včelárov.<br><br>
                        ✨ Vhodná na relaxáciu, meditáciu alebo ako krásny prírodný doplnok do vášho domova.<br>
                        🕯️ Doba horenia: závisí od veľkosti sviečky <br>
                        🌿 Zloženie: 100 % prírodný včelí vosk, bavlnený knôt <br>
                        💛 Prinesie do vášho domova harmóniu a prírodnú vôňu včelieho úľa!', 'beeplus', 12.99, true, 3.50, 5);

insert into photos (product_id, file) values (2, '../images/product_detail1.png');
insert into photos (product_id, file) values (2, '../images/product_detail4.webp');
insert into photos (product_id, file) values (2, '../images/product_detail5.jpg');

insert into reviews (product_id, user_id, text, stars, date) values (2, 1, 'skvely produkt!!!', 5, '2023-10-01');
insert into reviews (product_id, user_id, text, stars, date) values (2, 3, 'Vždy sa vďaka tejto sviečke zrelaxujem do pohody', 4, '2023-10-02');

insert into products (category_id, name, description, maker, price, recommend, in_storage) values (4, 'Med z včelieho úľa',
'Med z včelieho úľa je prírodný produkt, ktorý je známy svojimi blahodarnými účinkami na zdravie a chuťové vlastnosti. Tento med je zbieraný z kvetov rôznych rastlín a je bohatý na vitamíny, minerály a antioxidanty. Jeho sladká chuť a aróma sú výsledkom starostlivej práce včiel, ktoré ho vytvárajú z nektáru kvetov.', 'vcielka', 5.99, true,  9);

insert into photos (product_id, file) values (3, '../images/honey1.jpg');
insert into photos (product_id, file) values (3, '../images/honey2.jpg');
