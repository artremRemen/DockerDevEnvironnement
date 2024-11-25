<?php /* Code */ ?>        <!-- Ouvre les balises php afin d'injecter du code sur une page contenant de l'html si on ne cree un fichier contenant uniquement du php il est préférable de ne pas fermer la balise afin d'éviter les probleme si on doit rediriger l'user sur une autre page du page -->

<?= /* Code */ ?>           <!-- Ouvre les balises php afin 'afficher une valeur dans le code html depuis une variable ou autre -->

<?php

// commentaire monoligne
/* commentaire multiligne */

declare(strict_types=1);    /* doit ce mettre au début du code et dit a PHP d'empecher les convertions de type de variables implicites */

include 'cheminVersFichierphp.php';  /* appelle un fichier pour utiliser ce qu'il contient si le fichier n'est pas trouver il nous donne un warning et continue ensuite le code Si on reappelle une deuxieme fois le meme fichier alors il renvois une erreur si son contenus ne peux pas etre appeller deux fois sinon il appelleras le fichier sans erreur */
include_once 'cheminVersFichierphp.php';  /* appelle un fichier s'il n'as jamais été inclus pour utiliser ce qu'il contient si le fichier n'est pas trouver il nous donne un warning et continue ensuite le code  */

require 'cheminVersFichierphp.php';  /* appelle un fichier pour utiliser ce qu'il contient si le fichier n'est pas trouver il arrete le code et nous met une fatal error Si on reappelle une deuxieme fois le meme fichier alors il renvois une erreur si son contenus ne peux pas etre appeller deux fois sinon il appelleras le fichier sans erreur */
require_once 'cheminVersFichierphp.php';  /* appelle un fichier s'il n'as jamais été inclus pour utiliser ce qu'il contient si le fichier n'est pas trouver il arrete le code et nous met une fatal error */

print_r($nomvar, false); /* Donne une représentation du tableau demander si le deuxieme parametre est true alors on le stock dans une variable et il ne rendras le contenus visible uniquement si on appelle cette variable */

var_dump($nomvar); /* Donne une représentation du tableau demander mais ne donne aucune valeur de retour */

exit('message'); /* va mettre un message puis arreter le script */

die('message');  /* va mettre un message puis arreter le script exactement le meme que exit*/

str_replace($motaremplacer, 'remplacementdumot', 'phrase ou le mot doit etre remplacer');   /* remplace un mot d'une phrase par un autre */

str_repeat("valeurarepeter", "nbr de repetition");

phpinfo();       /* Va donner toutes les infos sur l'environement php installer */

/* Variables */

$nomVar = 'valeur'; /* Creation d'une variable standard pour les affichés dans un echo il suffis de les mettres entre {} */ 

define('CONSTANTE', "value");    /* Definir une constante */

echo $nomvar; /* permet d'afficher la valeur de la variable ou autre a l'écrans */

echo $nomvar."\n".$nomvar2; /* permet d'afficher la valeur des variable a l'écrans une a la suite de l'autre dans le cas ou ces variables sont des chaines de caractere si besoint on peux inserer des caracteres speciaux comme des retours a la ligne,... Les guillemets doubles vont afficher le contenus des variables contrairement au guillemet simple qui vont jsute afficher le nom de la variable DANS ce cas il faudras mettre des guillemet double (la liste des caracteres se trouve sur le site officiel https://www.php.net/manual/fr/language.types.string.php) */

readline('phrase a afficher');   /* Demande a l'user d'entré une chaine de caractere (entre les parentheses on met une chaine qui serviras a aider l'user a mettre les bonnes valeurs) */

(int)readline('phrase a afficher');   /* la parenthese avec le type de variable devant va forcer la variable a etre de ce type. Demande a l'user d'entré une chaine de caractere (entre les parentheses on met une chaine qui serviras a aider l'user a mettre les bonnes valeurs) */

$nomvar += valeur; /* increment la variable de la valeur */

$_SESSION;       /* variable globale de session */

strtotime('format', $var)   /* va transformer une chaine de caractere en date */

$nomvar2 = &$nomvar;    /* LEs deux noms agissents sur la meme variable creation d'un alias */

__DIR__;         /* Donne la position du fichier ou est executer le code */

DIRECTORY_SEPARATOR;     /* Va creer un separateur en fonction de l'OS utiliser (windows /) */

PHP_EOL;     /* Va creer un seaux de ligne apres une variable */

filter_var($nomVar, FILTER_VALIDATE_EMAIL);      //permet de filtrer les informations d'une variable afin de vérifier si elle correspond bien a ce que l'on recherche si la variable est correcte alors elle renverras la valeur sinon le filtre enverras false https://www.php.net/manual/en/function.filter-var

empty($nomvar);         /* Va regarder si la variable ou le tableau est vide (le 0 et le null sont compter comme vide) */

/* Tableaux */

$table = [];     /* Creation d'un tableau vide chaque valeur dans le tableau doit etre séparer par une virgule un tableau peut contenir un autre tableau */

$table = array();     /* Creation d'un tableau vide avec l'ancienne méthode chaque valeur dans le tableau doit etre séparer par une virgule un tableau peut contenir un autre tableau */

$table[nbrecase];    /* pour afficher une élément du tableau on va mettre le numeros dans le crochet */

$table[nbrecase][nbrecase];    /* pour afficher une élément du tableau dans le tableau on va mettre le numeros dans le crochet */

$tableAvecCle = ['cle'=>'valeur', 'cle2'=>'valeur2' ];     /* Creation d'un tableau contenant des cle qui facilite la visualisation du tableau */

$table['cle'];    /* pour afficher une élément du tableau on va mettre le nom(cle) qui lui corespand */

$tableAvecCle['cle'] = 'nouvel valeur'; /* change la valeur de la cle selectionner si on laisse la la cle vide alors il commenceras a 0 comme pour le tableaux classique */

$tableAvecCle['cle'][nbrecase] = 'valeur';   /* on met une nouvelle valeur dans le tableu sur la cle donner a l'emplacement donner dans le tableu qui est la cle si on laisse le deuxiement tableu vide alors il mettras tous seul la valeur a la fin */

array_push($nomtableau, val1, val2);    /* ajoute une ou plusieurs valeurs dans le tableau modifie directement la variable (pas besoin d'en recreer une nouvelle) */

array_reverse($table);   /* va retourner le taleau mais la fin au début  */

in_array($var, $array);      /* va vérifier si la valeur de la variable est contenue dans le tableau (le tableau peut etre créer directement dans le param de la fonction) */

count($table);   /* Va compter le nbre d'entrée dans la tableau */

unset($table['']);   //Va suprimer la clé du tableau
serialize($table);       /* Va serializer le tableau, le transformer en 1 string */
unserialize($table);       /* Va retransformer la string serializer en tableau */

session_status();        /* va regarder si la session est démarrer afin de la pas la redémarrer une deuxieme fois car php renverrais une erreur */

session_destroy();       /* permet de détruire la session une fois que l'utilisateur veux ce déconnecter */ 


/* Fonctions predefinies */

isset($nomvar);      /* Verifie si la variable existe */

htmlentities($variable);         /* Va convertir les entités html texte lisible pour html */

htmlspecialchars($variable);

isset($var["key"]);      /* Si la clé ou la variable est définie alors elle renvois true */

empty($var); /* si la variable est vide alors elle renvois true */

implode($namvar, $table);    /* va mettre une chaine de liaison (nomvar) entre chaque éléments du tableau ($table) (element1 et element2 et element3 et element 4) (element1 / element2/ element3/ element4) */ 

is_array($nomVar);       /* Verifie si la variable est un tableau  */

dirname($chemindossier, 4); /* Va donner le chemin du dossier parent a celui selectionner s'il y a un deuxieme attribut alors il iras autant de fois en arriere que le chiffre le diras !!! a ne pas sortir du server web pour ecrir le contenus */

str_pad($var, 2, "0", STR_PAD_LEFT);      /* va ajouter des caractere si la chaine passé en premier parametre est plus petite que ce que le deuxieme parametre indique Si c'ets le cas alors qui ajoute le caractere passer en troisieme parametre il l'ajoute par défault a la fin  le quatrieme parametre définit la position du caractere a ajouter n'est pas obligatoire*/

glob("motif");   /* va prendre un motif et rechercher tous les fichiers ayant ce motifs  */

header('location: cheminaccess');    /* va rediriger l'user vers la page donner */

password_hash($pass, "typedehash", ['cost'=> 12]);    /* Va hasher le mot de passe que l'on lui met dans le premier champs, le deuxieme champs correspond au type de hash que l'on veux (password_default), la derniere ligne ajoute des options que l'on peux mettre en plus */

password_verify($passverif, $pass);  /* va hasher le premier motdepasse afin de la comparer au deuxieme */

strlen($string);     /* donne la taille de la chaine de caractere */

json_encode($table); /* va transformer un tableau en string(json) le json est considérer comme une string */

json_decode($string); /* va transformer une string(json) en un tableau */

nl2br($string);      /* va ajouter des br a la variable pour les rendre visibles dans l'html */

explode('explode',$file);  /* va exploser le fichier a l'endroit du signe mis en premiere propriete */

substr(variable, 0, 150);    /* va récuperer les les caracteres compris entre les deux valeurs de la méhode  */

number_format($nubertoformat, 0, ""," " )/* Va formater le nombre afin de le rendre plus lisible (premier param =>nbre a formater, dexieme param => nbre de décimal, troisieme param=> symbole de separation des decimal, quatrieme param => symbole separateru des chiffres) */

ceil(value);     /* va arrondir la valeur a la virgule supérieur */

floor(value);     /* va arrondir la valeur a la virgule inferieur */

http_build_query($array);    /* va transformer un tableau en requete a integrer dans les liens html */

$isMobile = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));  /* renvois true si le navigateur est un mobile et false si c'est un pc ou tablette */

session_start()             /* permet de démarrer la session et d'utiliser la variable du meme nom (cette variable sert a trnasferer des informations d'une page a l'autre du moment que l'user ne quitte pas le site)  */

    <<<motarbitraire        /* délimiter une chaine de caractere (peut etre mis dans une variable comme les autres) le mot utiliser au début est completement arbitraire (heredoc) les variables sont Imediatement interpreté  !!! il ne doit surtout pas y avoir d'espace avant la fermeture de la "balise" (elle doit etre coller a gauche de la fenetre)*/
        texte 
motarbitraire;

    <<<'motarbitraire'        /* délimiter une chaine de caractere (peut etre mis dans une variable comme les autres) le mot utiliser au début est completement arbitraire (nodoc) les variables ne sont pas interpreté  !!! il ne doit surtout pas y avoir d'espace avant la fermeture de la "balise" (elle doit etre coller a gauche de la fenetre)*/
        texte 
motarbitraire;

    /* VariableSuperglobal */

    $_SERVER;        /* donne les information actuele sur le server (page ou l'on ce trouve, port, version php, ...) */

    $_GET['nomObject'];      /* donne toutes les informations envoyer par l'uRL */

    $_POST['nomObject'];      /* donne toutes les informations envoyer par par le serveur hors de l'url */
    
    $_SESSION['key'];   /* access au informations stocker dans la session pour suprimer une entrée il souffit de faire un unset */
    
    $_COOKIE['key'];   /* Varecuperer tous les cookies dans le navigateurs doit tjrs etre appeller apres l'envois de l'entete donc de cookies au navigateur */


/* Conditions */

if (condition) {        /* permet de tester une variable  */
    # code...
} elseif (condition) { /* si le premier test a echouer alors on execute ce test */
    # code...
} 
else {                /* Si la condition n'est pas remplie alors on execute ce code */
    # code...
}

$nomvar = "condition" ? "true": "false";    /* Autre facon d'écrir les if */

$nomvar = "condition" ?? "true";    /* remplace le isset */

if(condition):          /* Autre facon de faire des conditions */

else:

endif;

switch ($variable) {    /* il va effectuer le code de la case selemeent si la variable contient la valeur de la case le default sert si aucune autre valeur ne correspond */
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}

>   /* Doit etre supérieur a la valeur a droite */
>=   /* Doit etre supérieur ou egale a la valeur a droite */
<=   /* Doit etre inferieur ou egale a la valeur a droite */
<=   /* Doit etre inferieur ou egale a la valeur a droite */
==   /* Doit etre egale a la valeur a droite */
===   /* Doit etre egale a la valeur a droite et doit avoir LE MEME TYPE DE VARIABLE (une string ne peux pas aller avec une number) */

&&      /* deux condition doivent obligatoirement etre remplie */

||      /* Condition 1 ou condition 2 */

!(condition)    /* Prendras l'inverse de la valeur */


/* BOUCLES */

while ($a <= 10) {      /* t'en que la condition est remplie alors il execute le code a l'interieur */
    # code...
    break;         /* permet de sortir de la boucle meme sans que la condition soit remplie */
}

for ($i=0; $i < 1; $i++) {   /* tent que i ne vaut pas la valeur alors il continue la boucle en incrementant i a chaque fois */ 
    # code...
}
for ($i=0; $i < 1; $i++) : /* Autre facon de faire la boucle for */
    # code...
endfor;

foreach ($variable as $key => $value) {     /* varialbe= tableau que l'on veut parcourir key= la clé de la case du tableau(le nom de la case)  value= variable qui contiendras chauqe valeur du tableau  */
    # code...
}

foreach($var as $key =>$value):     /* autre facon de faire un foreach */

endforeach;


/* Fonctions */

FunctionName(param1, param2);     /* appelle d'une fonction avec un ou plusieur marametres*/

$myFunction = FunctionName(param1, param2);      /* appelle d'une fonction dans une variable avec un ou plusieur marametres*/

function nameFunction(string $param1, ?array $param2, $param = 'val par default'): string {          /* Creation d'une fonction avec 3 parametres le troisieme n'est pas obligatoir car a une valeur par default le type du premier param a été forcer les: a la fin de la déclaration de la fonction force de type variable que l'on renvois le deuxieme parametre peux etre de type null ou array */
    global $nomvar;                              /* Va entrer la variable dans le scope de la fonction si celle si a été créer en dehors (est fortement déconseiller) */
   
    return 'valeur a renvoyer';                 /* Une fois la fonction executer elle va renvoyer la valeur ou et la variable derriere de return (il arrete la fonction et en sort) */
}

function_exists('functionname');                /* Va vérifier si la fonction a deja été définie si c'est le cas alors il la trouveras et renverras true */


/* Fonctions anonymes */

$variable = function ($value) use($exteriorVar): string {          /* Creation d'une fonction anonyme que l'on met dans une variable afin de pouvoir utiliser la valeur retournée use() permet d'utiliser une variable venant de l'exterieur de la focntion */
    global $nomvar;                              /* Va entrer la variable dans le scope de la fonction si celle si a été créer en dehors (est fortement déconseiller) */
   
    return 'valeur a renvoyer';                 /* Une fois la fonction executer elle va renvoyer la valeur ou et la variable derriere de return (il arrete la fonction et en sort) */
}

$variable("valeur")     /* appelle de la fonction anonyme avec affectation de la valeur */

array_filter($this->array, [$this, 'methodeName'])      /* pour appeller une méthode dans une classe dans une fonction qui demande un callable il faut mettre un tableau dont la premiere valeur est l'objet et la deuxieme la méthode a appeller sous former de string */
/* ATTENTION si par exemple lors qu'on utilise des checkbox, radio,...  on peux avoir plusieurs valeur pour le meme nom alors il faudras mettre [] derriere le nom (name='competences[]') ce systeme fonctionne aussi avec les type texts et autres*/


/* Dates */

date($format, $timestamp);   /* Si timestamp n'est pas mis alors il prend la date actuel    (lien vers lettre pour formater date https://www.php.net/manual/fr/datetime.format.php) */

date_default_timezone_get(); /* Va donner la time zone utiliser pour avoir la date  */

date_default_timezone_set('crenaux'); /* Va changer  la time zone utiliser pour avoir la date (liste des fuseaux horaires https://www.php.net/manual/fr/timezones.php) */


/* Files */

file_put_contents('fileName', 'content', FILE_APPEND);   /* ajoute le contenus au fichier selectionner par défault il a écraser le contenus (s'il n'existe pas il le créeras ) (le troisieme attribut varie en fonction de ce que l'on veux (le FILE_APPEND place le texte en dessous du contenus existant)) renvois le nbre d'octet envoyer si @ mis devant alors il n'afficheras pas les erreurs */

file_get_contents($filePath);    /* permet de lire le contenus des fichiers peux prendre en parametre des url si activer dans php (tres souvent desactiver et ne donne pas vraiment de controle) */

fopen($filePath, "r");    /* Va ouvrir le fichier sans lire son contenus le deuxieme attribut va définir ce que l'on va faire (r lecture seul) */

fread($file, 2);        /* Va lire le fichier (le second attribut donne le longeur de lettre a lire dans le fichier) */

file_exists("path"); /* verifie si un fichier ou dossier existe */

dirname($var);

file_exists($file)  /* si le fichier existe */

touch($file)    /* va creer un fishier */

is_dir($dir);    /* est que c'ets un dossier est ce qu'il existe */

mkdir($dir, 0777, true); /* creation dun dossier ajout des permissions  */

/* COOKIES */

setcookie('key', 'value', 'expirationDate', 'path', 'domaine'); //définis les cookies a envoyer dans le navigateur (key est la clé qui va permettre de trouver la valeur)(value est la valeur a transmettre)(expirateDate est la date a laquel la valeur doit etre supprimer du navigatuer Si on veux supprimer le cookie alors il faut mettre la date dans le passer !!! ne pas oublier de unset la clé dans la variable Cookie)(path est le dossier dans lequel le cookie est actif (n'est pas obligatoir si c'est sur tous le site ou peut etre remplacer par /))(domaine le domaine sur lequel il doit agir, il ne peux agir uniquement sur le domaine qui nous appartient(si on ne met rien alors il prend le domaine actif)) 


/* SESSIONS */

session_start(); /* doit tjrs etre mis en début de fichier car il va modifier le header */

session_destroy();   /* detrui la session (oublie les informations mise dedans) */ 

session_status();   /* va nous donner l'état de la session (demarrer désactiver, ...) grace a cela on peux vérifier si elle existe et ne pas l'activer si elle est deja */


/* Objects */

$date = new DateTime(); /* appelle de la classe datetime */

$date->format('d/m/Y');    /* pemet de formater la date */

$date->modify('val');        /* permet de modifier la date en fonction des arguments entrer */

$date->diff($date2, true);  /* permet de différencier deux dates */


/* Class */

class NomClass {        /* Creation d'une class par convention le nom commence tjrs par une capitale */
    //Code
    const CONSTANTE = 1;    /* declaration d'une constante */
    public $propertie1;     /* Creation d'une propriété par défault la valeur est null */
    private $propertie2;        /* Cette propriete est visible uniquement dans la class ou elle ce trouve une fois sortis on ne peux plus l'appeller (fonctionne avec les methodes) les heritiers ne peuvent pas avoir access a la propriété */
    protected $propertie3;        /* Cette propriete est visible uniquement dans la class ou elle ce trouve une fois sortis on ne peux plus l'appeller (fonctionne avec les methodes) les heritiers peuvent avoir access a la propriété */

    public static $PropertieStatic;     /* creation d'une propriete static */

    public function __construct( int $propertie1, string ...$propertie2){     //Creation du constructeur de classe doit tjrs etre en public (le parametre ayant les ... devant lui signifie que l'on peux envoyer autant de parametre que l'on veux du moment que ceux si sont du type mis devant)
        //Code
        $this->propertie1 = $propertie1;        /* Assignation de la variable déclarée dans la class avec la propriete  */
        self::$PropertieStatic;  /* Appelle de la propriete static dans la class !!! il n'interpol pas lors qu'il va le transformer en html (il l'ecrira tel quel) */
    }

    public function nomMethode(int $propertie): int{ /* Declaration d'une méthode */
        //Code
        self :: constante;   /* appelle d'une constante uniquement dans la class dans laquel elle ce trouve */
        static :: constante;   /* appelle d'une constante en fonction du contexte (si declarer dans la classe enfant et utiliser dans la class parent alors il prendras celle de la class enfant pour executer le code contrairement au self qui ne prendras que celle de la class dans lequel est la méthode) */
        return 10;  /* Reponse a renvoyer une fois la fonction completer */
    }

    public static function methode(){   /* Generation d'une methode static  */
        //Code
    }

}   

class Nomclass2 extends Nomclass{       /* Cette class est un enfant de la class apres le extends (elle auras toutes les methode de la class !!! bien faire le require du fichier de la class) */
    public function nomMethode(){
        parent::nomMethode();    /* instancie une méthode parent de cette class */
        //code a ajouter dans la méthode en plus de celui qui est deja dans la methode parentdu parent
    }
    public function nomMethode3(){        /* methode utiliser uniquement par cettte class */
        //code
    }
}

NomClass::methode();         /* instanciation de la methode static (on instancie la class et appelle la méthode en meme temps car ici la class ne doit rien avoir en parametre ) */
NomClass::$PropertieStatic();         /* instanciation de la propriete static (on instancie la class et appelle la propriete en meme temps car ici la class ne doit rien avoir en parametre ) */

$classVar = new NomClass();   /* instanciation de la class creation d'une instance de la class*/

$classVar->methode();       /* appelle d'une methode de la classe */

/* namespace        peux s'appliquer au class comme au fonction un fichier peux avoir plusieurs naespace mais c'est rare (chaque namespace prendras en compte se qu'il a sous lui jusqu'au suivant) */
namespace Nom_De_Namespace\class;    /* va creer un namespace de class permettant de separer plusieurs class de meme nom (doit ce mettre au dessus du fichier) a chaque utilisation de class venant directement de php il faudras mettre un entislash devant afin de dire au langage de sortir du namespace */
namespace Nom_De_Namespace\{        /* permet d'importé plusieurs class d'un meme namespace en meme temps sans devoir retaper tous le chemin */
    class,
    class2};


use \class;     /* va permettre de rechercher les classe hors du namespace en metant le namespace suivis de la class ici pour ensuite ne mettre que la class dans le code (dit au langage ou aller chercher les class dont on a besoin) il peux aussi aller chercher nos namespaces */
/* Si la class est dans le namespace toutes autre classe étant dans ce meme namespace est visible par celle ci donc on ne doit pas lui redonner le chemin complet le require du fichier doit tjrs etre appeller en dessous  */

use \class as alias;    /* permet de donner un alias au nom de notre class en cas de besoin( deux class de meme nom dans deux namespace différents) */ 

/* pour autoloader les namespaces il faut que le chemin d'access mis dans les uses/namespaces soit identique au dossier dans lesquels il faut aller */ 


/* Pour appeler la class dans le namespace il faut mettre celui ci devant le nom de la class */

namespace::class    /* va renvoyer le nom de la class sous forme de chaine de caractere */

\Nom_De_Namespace\ new class();     /* appelle de class si on utilise pas le use */

/* Composer */
    /* getcomposer.org */
    /* sert a l'origine a télécherger des librairies */

    /* php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" */       /* Va telecharger composer en créant un dossier composer-setup.php dans la racine du site */
    /* php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" */      /* VCa effectuer des verifications sur l'installation et verifier que le site est fiable */
    /* php composer-setup.php */          /* va installer composer */
    /* php -r "unlink('composer-setup.php');" */        /* va suprimer le composer setup */

    require 'vendor/autoload.php';   /* va aller chercher une class qui permettra de charger tous les namespaces */

    /* dans la console */

    composer.phar       /* va initialiser composer */
    composer int        /* va permetre de créer le projet pour composer  (le nom devras tjrs etre nomauteur/nomprojet)    lors qu'il demanderas de définir les dependance il faut mettre non*/
    dump-autoload       /* va generer l'autoloader et créer un fichier avec ce qu'il y a a charger */


    dans composer.json
    ajouter une case    autoload: {
        psr-4:{"namespace\\":"dossieroucetrouvelesnamespaces"}
    };

    /* librairie tierces   packagist.org */
    /* Afin de recharger les instance dependantes lors que l'on est sur un autre ordinateur il suffit de faire composer install */
    /* Afin de recharger les instance dependantes lors que l'on est sur un autre ordinateur il suffit de faire composer i */
    /* Afin de reinstaller les instance dependantes qui ne sont pas utiliser unquement pour le devellopement lors que l'on est sur un autre ordinateur il suffit de faire composer i --no-dev */

    /* composer update composer u       permet de mettre a jours les dépendances */

    /* composer require librairyname */     /* permet de charger la libraire venant d'internet */
    /* composer require --dev librairyname */     /* permet de charger la libraire venant d'internet uniquement durant le dévellopement lors de al production elle ne seras pas appeller */
    /* Afin de l'utiliser on fait comme nos propres librairies pour charger les methodes */

    /* parsedown (permet de formater le text (commentaires) grace au markdown) */
    /* Var-dumper permet de faire des var dumps plus jolis pratique pour debuger */



/* CURL */

/* !!!! pour que cela fonctionne il faut qu'il soit activer dans Php !!!  */

/* php.ini  fichier de config php 
    display_error = on  va afficher les display error 
    extension_dir = ./  va donner le dossier qui va charger les extensions
    extionson=curl      extension a activer
    extension=openssl   /* va permettre de gérer les https */

    $curl = curl_init('url');    /* va recuperer l'url de la requete */

curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);        /* !!! a mettre tjrs avant l'execution     permet de donner des options a curl ici on lui dit de ne pas vérifier la config ssl (verif https) (a ne jamais faire) permet de creer le cerificat de facon propre:https://youtu.be/vq7yJDuf42E?si=1wrwYWOAwDs71K6Q&t=682  */

curl_setopt($curl, CURLOPT_SAINFO, "chemin vers certifica");        /* permet de creer le cerificat de facon propre:https://youtu.be/vq7yJDuf42E?si=1wrwYWOAwDs71K6Q&t=682  */

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);        /* permet de ne pas afficher le résultat mais de le concerver dans la variable */

curl_setopt($curl, CURLOPT_TIMEOUT, 1);        /* permet tuer la connection au serveur aprs un temps donner en seconde */

curl_setopt($curl, CURLOPT_TIMEOUT_MS, 1);        /* permet tuer la connection au serveur aprs un temps donner en milliseconde */

curl_getinfo($curl, CURLINFO_HTTPCODE);      /* permet de recuperer le code envoyer par le serveur */

curl_setopt_array($curl, [CURLOPT_SAINFO=> "chemin vers certifica"]);    /* pemetde faire plusieurs options en une seul foisgrace au tableau */

curl_exec($curl);       /* va executer curl */

curl_error($curl);       /* va renvoyer l'erreur s'il en a */

curl_close($curl);       /* va fermer le processuce curl afin de liberer la mémoire */


/* Exceptions */

throw new Exception("Message a passer", 1);     /* Appelle de la class exception */

try {                   /* code a tester  */
    //code a tester     
} catch (Exception | Error $e) {        /* code a executer si l'essais rate    on peux empiler differents type derreur grace au |           !!!! certaines exceptions existe deja autant les reutiliser (longeur,...) */
    //code a executer
} catch (Error $e) {        /* Permet de capturer les erreurs internes a php */  
    $e->getMessage()       /* recupere le message */
}finally {      /* quoi qu'il arrive execute ce code */
    //Code a executer
}

class classname extends Exception {     //creation d'une class qui est etendue d'exception afin de la customiser si besoin

}


/* COMMENTER CORRECTEMENT */

// https://docs.phpdoc.org/3.0/

//commentaire monoligne 

/* 
    commentaire multi ligne 
*/

/** 
*   desciption de la class
*   
*   @author Artrem
*
*   @since 1
*/


/** 
*   fonction de la méthode
*   
*   @param type $var 
*
*   @throws typeexception description type erreur
*
*   @return type 
*/


/* PDO */

/* Peut etre utiliser peux importe la base de donnée */

    /* va établir la connection a notre base de donnée (si elle n'y arrive pas alors il renverras une erreur) */
    try {
        $db = new PDO('mysql:dbname=Database;host=hostname','user','password');     /* connection a la db sans auncune preconfiguration */

        $db = new PDO('mysql:dbname=Database;host=hostname','user','password',[     /* connection a la db avec preconfiguration */
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,     /* en cas de probleme php donneras une exception et l'erreur rempalce le setAttrubute */
        PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_OBJ,       /* va définir la tableau a renvoyer comme objet */
        PDO::ATTR_DEFAULT_FETCH_MODS =>PDO::FETCH_ASSOC     /* va définir la tableau a renvoyer comme tableau associatif */
        ] );
    } catch (PDOException $e) {
        echo 'connection failed:'.$e->getMessage();
    }

    $db->quote($variable)       /* va mettre la variable entre guillemets se qui va assurer qu'elle ne contient pas d requete SQL afin de ne pas créer de faille pour modifier récuperer ou détruire la DB */

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   /* en cas de probleme php donneras une exception et l'erreur */

    /* Va executer la commande Sql dans les parentheses si une erreur sql arrive alors elle enverras false */
    $query = $db->query('SELECT * FROM product');   /* va executer la requete  */
    if (query = false) {            /* Utile si on a pas mis setAttribute */
        var_dump($pdo->errorInfo());    /* Permet de récuperer les erreurs Sql et l'affiche */
        die ('ERREUR SQL')
    }

    $query = $db->prepare('SELECT * FROM product WHERE id = :id');  /* va préparer la requete pour son execution (plus sécuriser que de l'executer avec le query) */
    $query->execute([':id' => variable]); /* va executer la requete préparer en remplacant par les valeurs et echaper les variable afin de ne pas créer de faille SQL (remplace le quote) */

    $result = $query->fetchAll(PDO:: FETCH_CLASS, 'className');       /* va récuperer tous les résultats   donne les valeurs de configuration du fetch afin de récuperer uniquement ce que l'on veux dans le format que l'on veux l'option appeller ici permet d'appeller une classe a executer directement dans le fetche apres la requete https://www.php.net/manual/fr/pdostatement.fetchall.php */
    $result = $query->fetch();       /* va récuperer un résultat sans avoir besoin de faire une boucle car on ne récupere qu'un objet */

    $db->lastInsertId()     /* Renvois la valeur de la derniere Id */

    $db->beginTransaction() /* va commencer une transaction tous ce qui ce trouve dans le bloc seras executer et permet de revenir en arriere en cas de besoin d'anulation si risque d'erreur attention prend plus de ressource et de temps*/

    $db->commit()   /* va terminer la transaction */

    $db->rollback()   /* va anulertoutes modification de la transaction */

    /* Router */
        $_SERVER['REQUEST_URI'] /* permet de recuperer l'url        permet de faire des url personalisé tout est gérer depuis mon index.php car on appelle le contenus a charger directement dans l'index(on ne bouge pas de page seul le contenus change et l'url)*/

        if ('uriName' == 'name') {
            require 'page'  /* va aller chercher la page a charger */
        }

        altorouter/altorouter  /* permet d'utiliser les url dynamiques */

/* Bufferisation de sortie */

ob_start()    /* enclanche la temporisation de sortie       met en mémoire tempon */

ob_end_clean()  /* va détruire tous ce qui ce trouve en mémoire */
ob_end_flush()  /* va afficher tous ce qui ce trouve en mémoire */
$content = ob_get_clean()  /* va récuperer dans une variable puis détruire tous ce qui ce trouve en mémoire */