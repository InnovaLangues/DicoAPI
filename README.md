Dictionnaire API
================
Installation
------------
Clone this repository
```
git clone https://github.com/InnovaLangues/DicoAPI.git
```
Rename the parameters.yml.dist file
```
mv app/parameters.yml.dist app/parameters.yml
```
Edit this new file with your database's infos
```
vi app/parameters.yml
```
Create the database
```
php app/console doctrine:database:create
```
Update the database's schema
```
php app/console doctrine:schema:update --force
```
Finally, load the fixtures
```
php app/console doctrine:fixtures:load --fixtures=src/Innova/DicoAPIBundle/DataFixtures/ORM
```
