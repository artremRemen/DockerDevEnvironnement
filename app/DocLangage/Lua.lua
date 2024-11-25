--[[ == egale a 

~= différent de

< plus grad que 

> plus petit que 

<= plus grans ou egale que 

>= plus petit ou egale a ]]


--[[ Bloc de commentaire ]]

--commentaire

do
    --cree u nbloc de code avec son propre scope
end

--[[ Variables ]]

type(nomVar)  --indique le type de variable 

'Les ' .. 3 .. ' mousquetaires' --combine plusieurs type d'expressions différentes pour ne faire q'une seul chaine de caractere

var = 'string' -- est définie en temps que variable globale

x, y = 25, "banane";    --affectation multiple on affecte deux variable avec chacune une valeurs

local var = 'string' --est déffinie en tant que variable local et est uniquement visible dans le scope dans lequel elle ce trouve

#var  --donne la longeur de la variable

local var = {}      --tableau

tostring(var1)      --[[ va changer la valeur de la variable en string ]]
tonumber(var1)      --[[ va changer la valeur de la variable en number ]]

string.format("%.3f", 5.0) --> 5.000

string.find(s, "bonjour")       --[[ trouver le mot ou la chaine contenus dasn la variable  renvois l'emplace du cursuer au debut et a la fin     on peux creer nos propres paterne de recherche ]]


--[[ %a N'importe quelle lettre.

%c N'importe quel caractère de contrôle.

%d N'importe quel chiffre.

%l N'importe quelle lettre minuscule.

%p N'importe quel caractère de ponctuation.

%s N'importe quel caractère d'espace.

%u N'importe quelle lettre majuscule.

%w N'importe quel caractère alphanumérique.

%x N'importe quel chiffre hexadécimal.

%z N'importe quel caractère avec une représentation "\0".


()

Pour former un groupe ou une sous-expression qui sera souvent appelé.

. (le point) Représente n'importe quel caractère.

% Sert d'échappement pour les caractères magiques.

+ Une ou plusieurs répétitions du pattern.

- Zéro ou plusieurs répétitions du pattern pour les petites séquences.

* Zéro ou plusieurs répétitions du pattern pour les grandes séquences.

? Zéro ou plusieurs répétions du pattern. Rends facultatif le pattern suivant.

[ Démarre une séquence : [a-z].

^ Recherche de chaîne de caractères commençant par …

$ Recherche de chaîne de caractères se terminant par …
]]

string.gsub(string, pattern, rempl)     --[[ trouver le mot ou la chaine contenus dasn la variable et les remplace par le pattern ]]

string.match(string, pattern,1)             --[[ trouver le mot ou la chaine contenus dasn la variable  renvois l'emplace du cursuer au debut et a la fin  le deuxieme argument dit d'ou la recherche doit commencer ]]

--[[ Structures de controles ]]

if condition then       --structure de controle SI 
    --action
    break               --arrete la condition qu'oi qu'il arrive
end
if condition then       --structure de controle SI sinon
    --action
else
    --action
end

if consition then       --structure de controle SI Sinon si rien 
    --action
elseif consition then
    --action
else
    --action
end


--[[ Boucles ]]

while condition do      --Boucle while tant que la condition est active alors on fait l'action
    --action
    break               --arrete la boucle qu'oi qu'il arrive
end

repeat                  --la boucle repeat
    --action
  until --condition

for i = 1, 10, 1 do       --[[ boucle for ]]
--[[ action ]]
end


--[[ Fonctions ]]

function name (--[[ params ]])      --déclaration de la function (peut avoir des parametres siu besion) une fonction peut avoir comme parametre une autre focntion si besoin et peux avoir le mot clé local devant ce qui veux dire qu'elle ne peux pas etre appeller hors du scope. une fonction peut s'auto appeller (etre récurcive) 
    //action
    ipairs({...})                   --???
    self                                --définit l'objet actuele sur lequel nous travaillons (cette variable est tjrs local)
    return   _                       --renvois la valeur donner derriere l'underscore signifie que l'on renvois un parametre (afin de ne pas créer d'erreur) qui va devoir etre oublier de suite
end


name(--[[ params ]])        --appelle de la fonction des avoir le meme nbres de parametres que la déclarations de la fonction

var1, var2 = NomFonction(param1, param2)    --[[ Retour de deux parametres de la fonctions chacun deux doit etre mis dans une variable propre s'il y a moins de variable que de valeur dans le return alors il oublieras les dernieres valeurs ]]

tableA = {Fonction3()}    --> tableA = {R1, R2}     --[[ Une table peut aussi recevoir les return d'une fonction ]]

local _, x, _, _, y, z = NomDeVotreFonction()       --[[ Les underscores déclare ce que l'on appelle des fausses variables ce qui veux dire quelle remplace les variables mais ne stockes aucune informations  ]]

unpack(tableA)      --[[ il retourne tous les valeurs du tableau qu'il a en parametres ]]


--[[ Tables ]]

maTable = { }       --[[ Creation d'une table vide (tableau) ]]

matable[var1] = 'valeur'    --[[ on ajoute une clé a la table en lui et lui met cette valeur exemple en dessous !!!la variable doit tjrs etre une string pour servir de clé!!! ]]

k = "x" -- affectation de la chaîne "x" à la variable k

maTable[k] = 10 -- nouvelle entrée, avec la clé = "x" de valeur = 10

maTable[k]      --affichage de la valeur dont le nom de la clé est contenus dans la variable k 

--[[ -------------------------------------------------------------------- ]]

maTable["cle"] = 10     --[[ ajout de la valeur 10 contenus dans la clé cle ]]
maTable.cle = 10     --[[ ajout de la valeur 10 contenus dans la clé cle ]]     --[[ ces deux facon d'ecrire font la meme chose ]]

maTable["cle"]  --affichage de la valeur dont le nom de la clé est cle 
maTable.cle     --affichage de la valeur dont le nom de la clé est cle  --[[ ces deux facon d'ecrire font la meme chose ]]

maTable.last        --[[ donne la derniere valeur de la table ]]

matable.first       --[[ donne la premiere valeur de la table ]]

table.insert()

table.remove()

ipairs(matable)        --[[ affiche le contenus de la table avec des cle numeriques il doit etre mis dans une boucle ]]

pairs(matable)        --[[ affiche le contenus de la table avec des cle alphabétiques ou mélangées il doit etre mis dans une boucle ]]

maTable={val1, val2, val3}   --[[  Creation d'une table avec des valeurs dans la table (on peux aussi ajouter d'autre tables) (la numerotation ne commence pas par 0 mais par 1 !!!) ]]

table.sort(maTable)     --[[ va ranger la table dans l'ordre croisant et remettre le contenus dans cette meme table ]]

table.concat(maTable)       --[[ Va mettre toutes les valeurs de la table les un derrieres les autres et les renvoyer en tant que strings ]]

table.concat(maTable, ", ")       --[[ Va mettre toutes les valeurs de la table les un derrieres les autres et les renvoyer en tant que strings mais en mettant un symbole choisis (,) entre chaque case de la table ]]

table.tostring(maTable)       --[[ permet de transformer la table en chaine de caractere ]]

table.call(maTable)       --[[ permet d'appeller la table comme une fonction ]]

table.metatable(maTable)    --[[ va bloquer l'access de la table a un utilisateur ]]

setmetatable(table, mt)     --[[ permet de lier une tablle et une metatable ]]

mt.__index(table)           --[[ permet de rechercher si l'index de la table existe s'il n'existe pas alors il envois nil ]]

--[[ Strings ]]

"chaine de caractere"

'chaine de caractere'
[[ chaine de caractere ]]

\a --[[ alerte ]]

\b --[[ espace ]]

\f --[[ saut de page ]]

\n --[[ nouvelle ligne ]]

\r --[[ retour à la ligne ]]

\t --[[ tabulation horizontale ]]

\v --[[ tabulation verticale ]]

\\ --[[ contre-slash ]]

\" --[[ guillemet anglais ]]

\' --[[ apostrophe ]]

\[ --[[ crochet gauche ]]

\] --[[ crochet droit ]]

\? --[[ point d'interrogation ]]

\000 --[[ notation octale ]]

\xhh --[[ notation hexadécimale ]]

var1 .. var2    --[[ permet de mettre les deux variables une a coter de l'autres (en cas de concaténation avec un nombre ou autre il va convertir cette autre type de variable en string) ]]

string.find(s, "bonjour")   --[[ permet de trouver le patterne (premier parametre) dans la variable ]]


--[[ description class de caractere ]]
%a --[[ "N'importe quelle lettre." ]]

%c --[[ "N'importe quel caractère de contrôle." ]]

%d --[[ "N'importe quel chiffre." ]]

%l --[[ "N'importe quelle lettre minuscule." ]]

%p --[[ "N'importe quel caractère de ponctuation." ]]

%s --[[ "N'importe quel caractère d'espace." ]]

%u --[[ "N'importe quelle lettre majuscule." ]]

%w --[[ "N'importe quel caractère alphanumérique." ]]

%x --[[ "N'importe quel chiffre hexadécimal." ]]

%z --[[ "N'importe quel caractère avec une représentation \"\0\"." ]]

--[[ mettre la lettre en capitale va donenr l'inverse  ]]



--[[ expression réguliere (regex) ]]

%a --[[ N'importe quelle lettre. ]]

%c --[[ N'importe quel caractère de contrôle. ]]

%d --[[ N'importe quel chiffre. ]]

%l --[[ N'importe quelle lettre minuscule. ]]

%p --[[ N'importe quel caractère de ponctuation. ]]

%s --[[ N'importe quel caractère d'espace. ]]

%u --[[ N'importe quelle lettre majuscule. ]]

%w --[[ N'importe quel caractère alphanumérique. ]]

%x --[[ N'importe quel chiffre hexadécimal. ]]

%z --[[ N'importe quel caractère avec une représentation "\0". ]]


--[[ Capteurs ]]

string.find(var, "pattern") --[[ permet de définir un patterne, une facon de formater le text ]]

--[[ coroutines ]]

co = coroutine.create(function(param, param)        --[[ creation de la coroutine et affectation de celle ci a un thread, ce qui permet de la faire tourner en fond sans affecter la vitesse du script principal ]]
    --[[ code ]]
    coroutine.yield()                   --[[ permet une reprise de celle si ultérieurement ]]
end)

print(co)    --> thread: 0x8071d98          affichage di thread sur lequel la co routine a été affectée

coroutine.status(co)        --[[ va nous donner l'état de la coroutine ]]

coroutine.resume(co, "param", "param")        --[[ va démarrer la coroutine ]]

--[[ une coroutine a 3 états 
    -suspend    en attente  par défault
    -running    en cours
    -dead       morte]]

    --[[ systeme de gestion de fichier ]]

file = io.open (filename , "mode")

"r": --[[ mode lecture ]]
"w": --[[ mode écriture ]]
"a": --[[ mode ajout ]]
"r+": --[[ mode mise a jours en sauvegardant toutes les données précédentes ]]
"w+": --[[ mode mise a jours en écrasant toutes les données précédentes ]]
"a+": --[[ mode de mise à jour par ajout, les données précédentes sont préservées, l'écriture n'est autorisée qu'à la fin du fichier. ]]

io.input(file)  --[[ définit comme fichier d'entrer par défault ]]

io.read()       --[[ lis la premiere ligne du fichier ]]

io.close(file)  --[[ ferme le fichier ]]

file = io.open("file", "a") --[[ ouverture du fichier en mode ajout ]]

io.output(file) --[[ set le fichier de sortie par défault ]]

io.write("text")    --[[ écris le text a la fin du fichier ]]

io.tmpfile()    --[[ envois un fichier temporaire ]]

io.type(file)   --[[ envois le type de fichier ]]

io.flush()      --[[ vide le buffer du fichier de sortie ]]

io.lines(filename) --[[ Fournit un itérateur générique de boucle for qui parcourt le fichier et le ferme à la fin, au cas où le nom du fichier est fourni ou que le fichier par défaut est utilisé et n'est pas fermé à la fin de la boucle. ]]

file:seek("end",-25)    --[[ Lorsque le paramètre est « set », « cur » ou « end ». Définit le nouveau pointeur de fichier avec la position actualisée du fichier à partir du début du fichier. Les décalages sont basés sur zéro dans cette fonction. Le décalage est mesuré à partir du début du fichier si le premier argument est « set » ; à partir de la position actuelle dans le fichier si c'est « cur » ; ou à partir de la fin du fichier si c'est « end ». Les valeurs par défaut des arguments sont « cur » et 0, de sorte que la position actuelle du fichier peut être obtenue en appelant cette fonction sans arguments. ]]

file:flush()    --[[ vide le buffer du fichier de sortie ]]


--[[ gestion erreures ]]

function myfunction ()  --[[ fonction que l'on regarde ]]

 end
 
 function myerrorhandler( err ) --[[ fonction qui va prendre l'erreur ]]
    print( "ERROR:", err )
 end
 
 status = xpcall( myfunction, myerrorhandler )  --[[ focntion qui va lier les deux et générer l'erreur ]]
 print( status) --[[ envois de l'erreur ]]

--[[ multitrheading ]]

require "luasocket" --[[ appelle la bibliotheque de socket ]]

c = assert(socket.connect(host, 80))    --[[ connexion a l'hote par le port 80 ]]

c:send("GET "..file.." HTTP/1.0\r\n\r\n")   --[[ demande de fichier a l'hote ]]

c:close()   --[[ arret de la connexion ]]


--[[ table d'envirionnement ]]

for n in pairs (_G) do print(n) end --[[ envois toutes les variables comprise dans l'environnement ]]

varname = _G[varname]   --[[ lecture d'une variable globale ]]

