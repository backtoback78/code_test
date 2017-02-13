
DROP DATABASE IF EXISTS `codetest`; -- la 1ere ligne supprime la base de donnée si elle existe

-- supression de l'utilisateur admin si il existe. Si la ligne n'existe pas, elle n'existe pas.
DELETE FROM mysql.user WHERE user='admin' and host='admin'; 

-- Les deux précédentes lignes remettent a jour la base de donnée. On remet a plat. Un refresh.
-- On ne travaille pas en root. On crée notre propre utilisateur.On travaillera sur un champ en particulier

-- Création de la base de donnée
CREATE DATABASE `codetest`
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_unicode_ci;

-- création d'un utilisateur spécifique qui n'aura que des droits sur une base de données déterminée
GRANT ALL PRIVILEGES ON `codetest`.* to 'admin'@'localhost' IDENTIFIED BY 'admin' WITH GRANT OPTION;
-- creation d'un utisateur spécifique qui travaillera que sur cette base de donnée with grant
-- donne des privilgèfes a un utilsiateur sur une base de donnée.

-- Grant all privilège ajoutent tous les drotis d'adminsitartion sur la base de donnée db robot pour un utilsateur spécifique
-- With grant :  Il a le droit de crée d'autre utilisateur unuqement pour cette base de donnée.
-- 
-- on décrit et on le droit 

