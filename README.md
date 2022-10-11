<h3>Pasos para clonar</h3>

1. $ git clone https://github.com/wochoa/oficial.git nombrecarpeta

2. composer install
3. <h4>para copar.env</h4>
   cp .env.example .env
4. generacion de key

    php artisan key:generate
 <br>
ALGUNAS AYUDAS PARA INSTALAR EN COMPOSER
1. Para resolver este problema, debe instalar php-curl

Para php5: sudo apt-get install php5-curl

Para php7.0: sudo apt-get install php7.0-curl

Para php7.1: sudo apt-get install php7.1-curl
<br>
2.
sudo apt-get update
sudo apt install php-xml
sudo apt-get install php-mbstring

Then run:

composer update
