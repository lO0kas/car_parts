## Spustenie projektu
- stiahnut projekt z gitu
- presunut sa do root priecinka projektu
- spustit "docker compose up -d"
- pockat par sekund, aj ked kontainer bezi este bezia prikazy ako "composer install", "npm run build" a dalsie, trva to par sekund, po spracovani sa na "localhost" namiesto nginx chyby zobrazi prihlasovacia stranka
- http://localhost

## Linky
- http://localhost:8080 UI pre databazu
- http://localhost, http://localhost:80 projekt
- http://localhost:3000 vite server, nie je spustany automaticky po spusteni kontainerov

## Prihlasovacie udaje
- databaza
    - host: mysql
    - username: root
    - password: root
- projekt
    - e-mail: root@root.com
    - password: root

## Dobre vediet
- docker je nastaveny tak, ze po spusteni kontainerov sa automaticky spustia prikazy potrebne pre fungovanie projektu, pozri "docker/php/entrypoint.sh", sucastou tychto prikazov je aj vytvorenie zakladneho uzivatela pre prihlasenie do aplikacie
- pre nedostatok casu som sa nezaoberal s drobnostami, ktore niesu potrebne pre beh projektu ako su testy, preklady, dokumentacia a podobne
- pri spusteni dockeru si treba davat pozov na porty, nieco na nich moze uz bezat napr. iny kontainer alebo aplikacia
- php je hlavny kontainer pre pracu v docker prostredi