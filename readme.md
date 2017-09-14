# Rallye Lecture

Il s'agit de la situation initiale du ppe. comportant d'une part le  
Site web rallye lecture ainsi que la librairie de gestion des droits d'accès


Mettez en place la base de données liée au rallye lecture
[schéma bd rallye](/sql/schemaDbRallyeLecture.PNG)

Mettez en place les tables liées à la gestion des autorisations.
[schéma bd aauth](/sql/schemaDbAauth.PNG)

grace au script de création des tables est présent dans le répertoire :

Vous pouvez consulter la documentation liée à l'utilisation de la classe AAuth ici :
[documentation du Wiki](https://github.com/emreakay/CodeIgniter-Aauth/wiki/_pages)
[documentation git hub](https://github.com/emreakay/CodeIgniter-Aauth)
Le code de cette bibliothèque est déjà présent dans le dépot.
dans le répertoire rallyeLecture\

Une fois la base mise en place, 
> pensez à insérez les données exemples : un script est présent dans le répertoire : rallyeLecture/sql/rl
> donnez les droits à un compte administrateur de la base de données.

Vous pouvez alors accéder au site web et consulter les différentes tables en 
utilisant le compte qui est créé automatiquement au lancement du site web : 
* user admin@sio.jjr
* pwd siojjr

les groupes d'utilisateurs "Enseignant" et "Elève" sont égalements créés lors du premier
lancement du site. 