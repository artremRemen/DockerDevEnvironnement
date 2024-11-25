CREER TABLE

CREATE TABLE [IF NOT EXISTS] tableName (columnName TYPE modificateur, columnName TYPE modificateur, CONSTRAINTE ); /* va permettre de céer une nouvelle table (si elle n'existe pas) */

ALTER TABLE tableName columnName ACTION /* permet de modifier ou suprimer une table */

DROP TABLE IF EXISTS tableName /* permetde suprimer la table si elle existe*/

EXPLAIN QUERY PLAN requete	/* va afficher ce qu'il fait */

/* dataTypes */
/* numerique */
INT
FLOAT
DOUBLE
DECIMAL
BIT
TINYINT
SMALLINT
BIGINT

/* date */
DATETIME
TIMESTAMP
DATABASETIME
YEAR
TIME
DATE


/* string */
CHAR
BINARY
VARCHAR
VARBINARY
BLOB
TEXT
MEDIUMTEXT
LONGTEXT
TINYTEXT

/* geometry */
GEOMETRY
POINT
LINESTRING
POLYGON

/* Json */
JSON

/* Modificateurs */
PRIMARY KEY	/* clé primaire */
AUTOINCREMENT	/* va automatiquement incrémenter le champs */
NOT NULL /* doit obligatoirement avoir une valeur */
DEFAULT	/* va avoir une valeur par défault */
UNIQUE /* la valeur ne peux pas ce trouver ailleur dans la colone */

/* Agregation */
	/* Select */
	COUNT(columnName)	/* va compter le nbre d'élément selectionner dans la colone */
	SUM(columnName)	/* va additionner tous les nbrs de la colone */
	GROUP_CONCAT(columnName, 'separator')	/* va mettre l'ensemble des elements les un derrieres les autres */
	AVG(columnName)
	MIN(columnName)
	MAX(columnName)
	DISTINCT	/* ne donneras qu'une seul fois la valeur si elle ce trouve plusieurs fois dans la table !!!! s'effectue au début */


/* Actions */
DROP	/* suprime la colone */
ADD	/* ajoute la colone */
RENAME /* permetde renomer la colone */
RENAME TO /* permet de renomer la table */

/* CONSTRAINTE */
FOREIGN KEY (columnToTest) REFERENCES tableName(columnToVerify) [ON DELETE value] /* va créer une clé etrangere (si on la suprime elle devras avoir le comportement définis) */
	/* ON DELETE */
		NO ACTION	/* ne changeras pas les autres tables (par défault) */
		RESTRICT	/* empecheras la supression */
		SET NULL 	/* va mettre tous ce qui y est associer a null */
		SET DEFAULT 	/* va mettre tous ce qui y est associer a leurs valeurs par défault */
		CASCADE		/* va suprimer toutes les valeurs en cascade */


SELECT /* permet de selectionner un ou plusieurs éléments dans la Db */
INSERT /* permet d'inserer des donnée dans la table */
UPDATE	/* va actualisé les données */
DELETE /* suprime les données */

/* JOIN */
LEFT 	/* part de la table mise en premier et va vers l'autre ne prend pas ceux qui n'ont pas de  */
RIGHT 	/* part de la table mise en deuxieme et va vers l'autre ne prend pas ceux qui n'ont pas de inverser par rapport au left */
INNER 	/* part de la table mise en premier et va vers l'autre (utiliser par défault)  */
CROSS 
OUTER	/* part de la table mise en premier et va vers l'autre ne prend pas ceux qui n'ont pas de  */
JOIN	/* part de la table mise en premier et va vers l'autre (utiliser par défault)  */


CREATE UNIQUE INDEX indexName ON tableName (columnName)	/* permet de créer un index personnalisé pour la colone selectionner ce qui optimise la recherche pour la requete*/ 
DROP INDEX indexName	/* permet de suprimer un index */
PRAGMA index_list('tableName')	/* permet de récuperer la list des index sqLite a vérifier pour My sql */


/* test requet */
SELECT columnName FROM tableName () [WHERE columnName = 'value'(IS NOT NULL ) AND (columnName = value OR columnName = value) ] [BETWEEN value AND value] [IN ('value', 'value') [NOT IN ('value', 'value')]] [LIKE 'expression'] [GROUP BY collumn] [HAVING condition] [ORDER BY columnName ASC, columnName DESC DESC NULL FIRST NULL LAST] [LIMIT nbr OFFSET nbr] [LIMIT nbrOffset, nbrLimit] /* va selectionner la valeurs des colones selctionner dans la table (* va tous prendre) (lors que la valeur correspond (!= différent) (mettre des parenthese pour donner des priorité car le AND passeras tjrs devant le OR) !!!l'ordre de placement des conditions est important et doit tjrs ce faire dans ce sens ) (entre les deux valeurs) (doit contenir une des valeurs) (va regarder si ca contient l'expression) (va grouper les éléments par rapport a la colone selectionner !!! ne peux afficher que les colones dans le groupe by OU les aggregation) (va eefectuer les conditions une fois les autres actions effectuer)(va organiser dans l'ordre croissant ou décroissant) (va limiter le nbr d'élément a r'envoyer dans la requete)*/ 

SELECT * FROM tableName JOIN refTableName ON tableName.columnName = refTableName.columnName		/* permet de créer une jointure qui va lier les deux tables afin de les "manipuler" ensembles */

SELECT * FROM tableName tn(alias) JOIN refTableName rtn(alias) ON tn.columnName = rtn.columnName WHERE columnName = 'value'		/* permet de créer une jointure qui va lier les deux tables afin de les "manipuler" ensembles en utilisant les alias */
SELECT * FROM tableName tn(alias) LEFT JOIN refTableName rtn(alias) ON tn.columnName = rtn.columnName		/* permet de créer une jointure qui va lier les deux tables afin de les "manipuler" ensembles en utilisant les alias */

SELECT * ( SELECT columnName FROM tableName) FROM tableName	/* il effectue une requete dans la requete peut utiliser la requete principal dans la sous requete !!! lourd en perfomance */

SELECT collumn AS alias FROM tableName		/* permet de donner un nom autre que celui de la colone afin de différencier les valeurs au moment de l'envois de la requete au site (le AS n'est pas obligatoire) */

INSERT INTO tableName (columnName, columnName, columnName) VALUE('valueName','valueName','valueName') /* va inserer les valeurs dans la table */

DELETE FROM tableName WHERE columnName = 'value' /* va suprimer les éléments de la table qui corresponde a la condition !!! si la condition n'est pas mise il suprimeras toute la table */

UPDATE tableName SET columnName = 'value'/* va mettre a jours la valeur de toutes les colones sauf si on met une condition */

/* Transactions */
BEGIN TRANSACTION		/* début de la transaction */
	/* optionnel */
	DEFERRED			/* s'effectue de facon différée */
	IMMEDIATE
	EXCLUSIVE
	
ROLLBACK TRANSACTION	/* revient avant d'avoir fait la trasaction en cas d'erreur il va effectuer du lui meme un roolback */

COMMIT					/* sauvegarde tous les chagements effectuer dans la Db */
END						/* fin de la transaction */

/* systeme de vue */
/* va créer une table virtuel (peut engendrer des pertes de performances */

CREATE VIEW IF NOT EXIST viewName 	/* permet de créer la vue */

/* requete standard */

DROP VIEW viewName	/* va suprimer la vue */

/* triggers */
/* va ralentire le fonctionnement de la Db */
CREATE TRIGGER triggerName /* va creer un trgger */

AFTER INSERT ON tableName

WHERE NEW.columnName != OLD columnName /* condition qui va regarder si les deux valeurs sont différentes */

NEW 	/* insert et update va définir la nouvelle valeur */

OLD 	/* dans update et delete va définir les anciennes valeurs */

BEGIN 

/* définis le comportement du trigger  */
UPDATE tableName
SET columnName = columnName + 1
WHERE columnName = NEW.columnName

END /* pour fermer la requete */

/* requete standard */

DROP TRIGGER triggerName /* va suprimer un trgger */

/* recursives */
/* permet de faire une requet dans un autre requete */

/* fonction fenetrages */

SELECT *.SUM(columnName) OVER() FROM tableName	/* va créer une colone avec l'agregation */
SELECT *.SUM(columnName) OVER(PARTITION BY columnName) AS columnalias	/* va créer une colone avec l'agregation en fonction des valeurs de la colone selectionnée */
SELECT *.SUM(columnName) OVER(PARTITION BY columnName) AS columnalias, ROW_NUMBER() FROM tableName	/* va donner la ligne de chaque elemnents dans l'agregation */
SELECT *.SUM(columnName) OVER(PARTITION BY columnName) AS columnalias, ROW_NUMBER() OVER(PARTITION BY columnName ORDER BY columnName ASC) FROM tableName	/* va donner la ligne de chaque elemnents dans l'agregation et les mettre dans l'ordre de la colone selectionner */
SELECT *.SUM(columnName) OVER(PARTITION BY columnName) AS columnalias, RANK() OVER(PARTITION BY columnName) FROM tableName	/* va donner la ligne de chaque elemnents dans l'agregation en prennant en compte les égalités (il va les placer au meme niveaux) */
SELECT *.SUM(columnName) OVER(PARTITION BY columnName) AS columnalias, DENSE_RANK() OVER(PARTITION BY columnName) FROM tableName	/* va donner la ligne de chaque elemnents dans l'agregation en prennant en compte les égalités (il va les placer au meme niveaux) et ne sauteras pas de valeurs */
/* Dautre fonctions sont disponibles */
SELECT *.SUM(columnName) OVER(PARTITION BY columnName), DENSE_RANK() OVER partitionName FROM tableName WINDOW partitionName as (PARTITION BY columnName ORDER BY columnName ASC)	/* donne un nom a la partition pour éviter de la réecrire 10 fois si on doit l'utiliser a plusieurs endroits */










JOINTURE SQL
	a l'aide du mot cle WHERE ou JOIN(recommander)
	SELECT table2.var, table1.var FROM table1, table2 WHERE table2.ID_var = table1.ID_var	joiture avec where

	SELECT jeux_video.nom AS nom_jeu, proprietaires.prenom AS prenom_proprietaire		alias
FROM proprietaires AS p, jeux_video AS j
WHERE jeux_video.ID_proprietaire = proprietaires.ID


SELECT j.nom nom_jeu, p.prenom prenom_proprietaire		selection des tables
FROM proprietaires p 									table PRINCIPALE
INNER JOIN jeux_video j 								table de jointure interne
ON j.ID_proprietaire = p.ID 							zone d'action

WHERE j.console = 'PC'									prendre que les jeux PC
ORDER BY prix DESC										par prix d�croissant
LIMIT 0, 10												de 0 a 10

LEFT JOIN 												r�cup�rer toute la table de gauche

RIGHT JOIN 												r�cup�rer toute la table de droite
SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p
RIGHT JOIN jeux_video j
ON j.ID_proprietaire = p.ID
	

MOTCLE
	SELECT	champ
	FROM	table
	WHERE	motcle
	OR	ou
	ORDER BY	ordonner
	DESC	decroissent
	LIMIT	limiter 