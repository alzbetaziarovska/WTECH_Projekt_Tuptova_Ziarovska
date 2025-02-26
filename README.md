# **Semestrálny projekt z predmetu Základy webových technológií**
Letný semester 2024/2025
Ema Tuptová a Alžbeta Žiarovská

## Dôležité linky
WTECH github: https://github.com/kurice/wtech25 

Color schemes: https://gogh-co.github.io/Gogh/ <br>
Figma project: https://www.figma.com/design/RrKiMvxYwzRUpOLyDwCQfA/WTECH_eshop?node-id=0-1&p=f&t=HNbDTPcgFPdwrjqO-0

# Termíny
- **Odovzdanie 1. fázy projektu: koniec 6. týždňa - 30.3. do 23:59 v AIS, 24 bodov,**
  - vytvorenie skíc jednotlivých stránok pre zariadenia extra large (desktop), odporúčaný nástroj Figma (max. 6 bodov)
  - vytvorenie responzívnych šablón (max. 15 bodov)
  - návrh fyzického dátového modelu reprezentovaný UML class diagramom (3 body)
- **Prezentovanie 1. fázy projektu, na cvičení: 7. týždeň**
- **Priebežný test: 8. týždeň na cvicení (8 bodov, 3,5 minimum)**
- **Kontrolný bod: 9. týždeň, na cvičení - 15.4. a 16.4, binárne hodnotenie 0/4 body**
- **Odovzdanie 2. fázy projektu: koniec 12. týždňa - 11.5. do 23:59 v AIS, 24 bodov**
  - implementácia klientskej časti eshopu so zostavením na serveri (server-side rendering) s využitím PHP rámca (odporúčaný Laravel) (max. 14 bodov)
  - implementácia administrátorského panela/admin zóny so zostavením na serveri (server-side rendering) s využitím PHP rámca (odporúčaný Laravel) (max. 7 bodov)
  - finálna dokumentácia (max. 3 body) 
- **Prezentovanie 2. fázy projektu, na cvičení: 13. týždeň**

# Zadanie
## Aplikácia - eshop

**Aplikácia musí realizovať tieto prípady použitia:**

**Klientská časť**

- zobrazenie prehľadu všetkých produktov z vybratej kategórie používateľom
  - základné filtrovanie (aspoň podľa 3 atribútov, napr. rozsah cena od-do, značka, farba)
  - stránkovanie
  - preusporiadanie produktov (napr. podľa ceny vzostupne/zostupne)
- zobrazenie konkrétneho produktu - detail produktu
  - pridanie produktu do košíka (ľubovolné množstvo)
- plnotextové vyhľadávanie nad katalógom produktov
- zobrazenie nákupného košíka
  - zmena množstva pre daný produkt
  - odobratie produktu
  - výber dopravy
  - výber platby
  - zadanie dodacích údajov
  - dokončenie objednávky
  - umožnenie nákupu bez prihlásenia
  - prenositeľnosť nákupného košíka v prípade prihláseného používateľa
- registrácia používateľa/zákazníka
- prihlásenie používateľa/zákazníka
- odhlásenie zákazníka

**Administrátorská časť**

- prihlásenie administrátora do administrátorského rozhrania eshopu
- odhlásenie administrátora z administrátorského rozhrania
- vytvorenie nového produktu administrátorom cez administrátorské rozhranie
  - produkt musí obsahovať minimálne názov, opis, aspoň 2 fotografie
- upravenie/vymazanie existujúceho produktu administrátorom cez administrátorské rozhranie


