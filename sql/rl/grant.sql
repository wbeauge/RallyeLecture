 -- exemple de création d'un compte admin
 -- pour la base de données
 GRANT ALL PRIVILEGES 
 ON rallyeLecture.* 
 TO adminRallyeLecture@localhost
 IDENTIFIED BY 'siojjr' 
 WITH GRANT OPTION;