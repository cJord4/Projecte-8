Projecte 8 - Entorn LAMP amb Docker
Descripció

Aquest projecte implementa un entorn de desenvolupament LAMP (Linux, Apache, MySQL, PHP) utilitzant Docker i Docker Compose.
Tecnologies

    Linux: Ubuntu (dins del contenidor)
    Apache: 2.4
    MySQL: 8.0
    PHP: 8.1 amb extensió mysqli
    phpMyAdmin: Última versió

Estructura del Projecte

Projecte8/

├── docker-compose.yml      # Configuració dels serveis Docker

├── Dockerfile              # Imatge personalitzada PHP+Apache

├── README.md               # Aquest fitxer

└── html/

    └── index.php           # Pàgina principal

Com executar el projecte
Requisits previs

    Docker
    Docker Compose

Instal·lació

    Clona o descarrega el repositori

bash

git clone https://github.com/cJord4/Projecte-8

cd Projecte8

    Construeix i inicia els contenidors

bash

docker compose up -d --build

    Accedeix a les aplicacions
        Aplicació web: http://localhost:8080
        phpMyAdmin: http://localhost:8081

Credencials de la base de dades

    Nom de la BD: exemple
    Usuari: usuari
    Contrasenya: contrasenya
    Root password: root

Autor

Cristian Jorda Matei

Institut Julio Antonio - ASIX
