//Librairies
#include <iostream> //directive de préprocesseur  iostream est une bibliotheque qui permet d'afficher un message a l'écrans mais aussi que récuperer des infos donner par l'user dans la console
#include <string> //directive de préprocesseur  string est une bibliotheque qui permet d'instancier les variables de type string
#include <cmath>	//Ajouts de fonctionnalité math
#include <vector>	//permet d'utiliser les tableaux dynamiques
#include <fstream>	//permet de créer des flux d'interactions avec les fichiers
#include <filesystem>	//permetde gerer les dossiers
#include <ctime>
#include <cstdlib>

using namespace std;        //permet de creer un 'dossier' nomer afin de pouvoir différentier les librairies ayant les meme fonctions

int main()      //Point de départ et de fin du programme tous ce passe a l'interieur de ces accolades
{
	//Code

	return 0;       //valeur de renvois par la fonction
}

cout << "Hello world!" << endl;     //cout permet d'envoyer des message a l'user (C out) (est fournis grace a ioStream) ensuite on écris notre message et one termine par endl qui renvois a la ligne suivante
std::cout << "Hello world!" << std::endl;     //cout permet d'envoyer des message a l'user (C out) (est fournis grace a ioStream) ensuite on écris notre message et one termine par endl qui renvois a la ligne suivante  (le strd est mis devant uniquement si le usingnamlespace n'est pas appeler)

cin >> testVar; //Le cin va permettre a l'user d'entrer une valeur dans la console et la stocker dans la variable afin de la rendre utilisable

cin.ignore();	//TJRS placer avant le getline sans quoi il va ignorer la dmande d'entrée a l'user
getline(cin, nomUtilisateur);	//le cin pour les strings

//Variables

//Type de variable

/*
	Bool: Vrais ou faux 
	char: 1 seul caractere	TJRS DES GUILLEMETS SIMPLE
	int: nombre entier
	unsigned int: Un nombre entier positif ou nul.
	double: un nombre a virgule
	string: une chaine de caractere		TJRS DES GUILLEMETS DOUBLES
*/

int testVar(10);		//Declaration d'une variable de type int 
int testVar= 10;		//Declaration d'une variable de type int 
char testVar('a');		//Declaration d'une variable de type char  TJRS DES GUILLEMETS SIMPLE

int const var;			//declarer une variable constante(on met const)

string testVar1("Val1"), testVar2("val2");		//Deux variables de meme types déclarer au meme moment

int& testVarRef(testVar);		//On assigne un deuxieme nom a la variable en ajoutant une & apres le type et en mettant la variable de base en "valeur" de la deuxieme


/*+addition
- soustraction
* multiplication
/ division
% modulo */

var = var1 + var2;

++testVar;	//Ajouter 1 a la variable

testVar++;	//Ajouter 1 a la variable

--testVar	//Elever 1 a la valeur

testVar /= 3;		//On divise la valeur par 3	(fonctione avec tous les operateurs)


//fcts Math	(utilise la librairie cmath)

testVar = sqrt(valeur);	//fait la racine carrer de la valeur utilise le radiant

testVar = sin(valeur);	//fait le sinus de la valeur utilise le radiant

testVar = cos(valeur);	//fait le cosinus de la valeur

testVar = tan(valeur);	//fait la tangeant de la valeur

testVar = exp(valeur);	//fait l'exponentiel de la valeur

testVar = log(valeur);	//fait le logarithm de la valeur

testVar = log10(valeur);	//fait le logarithm en base 10 de la valeur

testVar = fabs(valeur);		//donne la valeur absolue

testVar = floor(valeur);		//arrondis la valeur vers le bas

testVar = cell(valeur);		//arrondis la valeur vers le haut

testVar = pow(varValue, varExp);	//faire un exposant d'une valeur


//CONDITIONS

/*
	==			est egale a
	<			est inferieur a
	>			est superieur a
	<= 			est inferieur ou egale a
	>=			est superieur ou egale a
	!= 			est different de

	and &&	Condition et
	or ||	condition ou
	not !	condition inverse
*/

if (condition)				//Si la condition est remplie alors tu execute le code Sinon tu fait le else ou le esle if
{
	//code
}
else if (condition) {		//Si la condition est remplie tu execute le code sinon tu passe au else ou au else if suivant
	//cpde
}
else	//Si aucune des conditions ne sont remplies alors tu execute le code
{
	//code
}

switch (varAtester)				//Declaration du switch avec la variable a tester cette partie peut etre dupliquer autant de fois que necessaire 
{
case "valeurAvoir1":			//Definition des case (equivalent des if ou else if)
	//code
	break;	//fin de la case (si pas de break lors que la case seras executé il le sortiras pas du switch une fois finis (il continueras a passer par chaque case jusqu'a défault)


default:		// case par défault si aucun break na été activer plus haut alors il passeras obligatoirement par cette case
	cout << "Votre budget croquettes doit etre important" << endl;
	break;
}


//BOUCLES

while (condition)		//Tant que la condition est true alors t uexecute la boucle
{
	//code
}

do						//tant que le code est true alors tu execute la boucle (la seul exeption avec celle juste au dessus est que ici la boucle seras executé au moins une fois car le test ce fait a la fin)
{
	//code
} while (condition);

for (i = 0; condition; i++)
{
	//code
}


//Functrions 

type Functionname(type argument, type& argument, type const& argument2) {				//type de valeur a returner (int double string ...) plusieurs fonctions peuvent avoir le meme nom SI et seulement si le type est différent elle doit tjrs etre définie avant l'endroit ou on l'appelle si la fonction ne renvois rien alors le type est void
		//grace au & l'argument 2 est un alias de la variable qui est lier ce qui évite de recréer une variable innutilement (il passe en référence) attention en faisant ca on modifie aussi la variable d'origine ce qui veux dire que toutes manipulation dans la fonction perdureras hors du scope
		//grace au const& l'argument 3 est un alias de la variable qui lui est lier pour évité une copie de celle si Cependant elle ne peux etre modifier dans la fonction car elle est passer en constante dans le scope
		//code
	return var;			//la valeur que l'on return doit TJRS etre du meme type que la fonction
}

testVar = functionname(argument);		//appelle de la fonction

void fonctionName(double tableau[])		//La focntion va recevoir un tableau en reference (les tableaux ce mettent automatiquement en referecne) ce qui veux dire que l'on modifie directement la variable passée en parametre donc que l'on ne doit rien return (on ne peux pas return un tableau)
{
	//code
}

vector<int> fonction(vector<int> const& a)		//La focntion va recevoir un tableau dynamique (les tableaux dynamiques ne sont pas automatiquement en referecne) il est preferable de le passer en reference afin de ne pas copier a nouveau l'entiereté du tableau (la constante n'est pas obligatoire) (on peux return un tableau dynamique)
{
	//…
}

//Utiliser plusieurs fichiers

//!!!! il faut créer un fichier ou l'on déclare la fonction et un autre ou l'on met l'entete de la fonction (le prototype)

// .cpp declaration
// .hpp entete

#include "file.hpp";	//ce met a la premiere ligne du fichier cpp il permet de lier le fichier a son entete il doit également etre ajouter dans le fichier ou la fonction va etre apeller afin de la rendre visible


//TABLEAUX STATIQUES

type ArrayName[3];	//déclaration d'un tableau static (le 3 entre les crochets est le nbr de case que va contenir ce tableau) le nbr de case peux etre une constante de type int ou unsigned int (il est tjrs preferable de passer la taille par une constante)

ArrayName[case] = "value";		//on affecte une valeur a une case du tableau

ArrayName;	//donne le taille du tableau


//TABLEAUX DYNAMIQUES

vector<type> tableau(5, "default value")		//le 5 définis la taille du tableau le deuxieme argument est une valeur par défault que l'on peux mettre dans toutes les cases (on peux déclarer le tableau sans case en ne mettant pas de parentheses)

tableau[case] = "value";		//on affecte une valeur a une case du tableau

tableau.push_back("value");		// on ajoute une case a la fin du tableau avec la valeur qui doit aller dedans

tableau.pop_back()	//on enleve la derniere case du tableau

tableau.size()		//donne la taille du tableau

int tableau[5][4];	//tableau multidimensionnel (la valeur -1 correcspond tjrs a la derniere case du tableau


//Les strings 

//les strings sont des tableaux on peux donc acceder a chaques lettre separement et les modifiers si necessaires

//on peux avoir le nbr de lettre grace a la fonction size

//on peux ajouter une lettre a la fin grace a la focntion .push_back()

varstring += varstring2		//on peux ajouter un var string directement a un autre variable (mettre le nom et le prenom directement dans la meme var

varstring += varstring3


//MANIPULER LES FICHIERS

ofstream Flux("path", ios::app);		//ouvre le flux sur le fichier selectionner afin de pouvoir l'editer le deuxieme parametre permet de ne pas écraser le fichier s'il existe au moment de la creation du flux		le flux est fermer une fois sortis du scope ou il a été ouvert

ofstream Flux(filePath.c_str(), ios::app);		//donne le chemin d'access au fichier par une variable le deuxieme parametre permet de ne pas écraser le fichier s'il existe au moment de la creation du flux		le flux est fermer une fois sortis du scope ou il a été ouvert

//!!tjrs tester si le fichier a bien pus etre ouvert en passant le flux dasn un if

Flux << "value" << endl;		//envois d'une valeur dans le flux

ifstream Flux(filePath.c_str());		//permet de lire un fichier		le flux est fermer une fois sortis du scope ou il a été ouvert

getline(Flux, ligne); //On lit une ligne complète		cette fonction renvois true tant que l'on peux lire la ligne et false une fois arriver a la fin
Flux >> mot;    //Lit un mot depuis le fichier	il faut utiliser le .getingnore() avant de lire ligne par ligne si on change le mode de lecture
Flux.get(a);	//lit caractere par caractere

Flux.close()	//permet de forcer la fermeture du flux

flux.open("C:/Nanoc/data.txt");  //On retarde l'ouverture du fichier en mettant le chemin d'access dans cette fonction et plus dans l'ofstream ou ifstream

flux.tellg()	//donne la position du curseur pour les ifstream
flux.tellp()	//donne la position du curseur pour les ofstream

flux.seekg(deplacement, position)	//ce déplace dans le fichier pour les ifstream      ios::beg debut du fichier	ios::end fin du fichier		ios::cur position actuel du curseur

flux.seekp(deplacement, position)	//ce déplace dans le fichier pour les ofstream      ios::beg debut du fichier	ios::end fin du fichier		ios::cur position actuel du curseur

//pour trouver la taille du fichier on va ce placer a la fin et on demande ou ce trouve la conrseur


//POINTEURS

& nomVariable;	//donne l'adresse d'une variable		&addresse de

int* pointeur(0);		//declaration d'une variable pointeur !!!    le * définis que c'est une pointeur on peux faire cela pour tous les types  !!! on doit utiliser le meme type que la variable dont on veux l'adresse (ladrese 0 n'existe pas donc en faisant ca on lui dit de ne selectionner aucune variable donc ne pas risquer de modifier par exemple une variable environement)

type *pointeur{nullptr}		//déclare un pointeur sans adresse				!!! tjrs vérifier que l'affectation a fonctionner en faisant un test sur le poiteur

pointeur = &testVar		// on affecte l'adresse de la variable dans le pointeur

*pointeur		//donne la valeur de la variable dont l'adresse est stockée dans la pointeur

pointeur = new int;		//on demande une addresse vide a l'ordinateur afin de lui affecter a l'avenir une variable le type est tjrs celui de la variable que l'on va utiliser   !!! si on change l'adresse dans le pointeur sans la liberer avant alors la valeur seras perdue car plus accessible due au fait qu'elle na pas de nom (fuite de mémoire)

*pointeur = "value"		//on affecte la valeur a l'adresse stockée dans le pointeur

delete pointeur			// va suprimer la valeuer a l'adresse stockée et rendre celle ci   !!! une fois la supretion faite il faut absolument changer l'adresse stockée dans le pointeur sous risque de modifier la variable d'un autre programme en lui mettant a 0 ou en redemandant une autre adresse


//POO

//Classe

//si une classe a besoin d'une autre class (encapsulation de class alors il faut l'appeller dans le .hpp)

ClassName obj1, obj2;		//appelle de la classe et affectation de 2 objects distincts

ClassName obj1, obj2("var 3", var4);	//appelle de la classe et affectation de 2 objects distint un qui appelle le contructeur par default et l'autre qui apelle un constructeur avec d'autre valeurs	(constructeur surcharger)

ClassName obj1, obj2(obj1);	//appelle de la classe et affectation de 2 objects distint le deuxieme seras la copie conforme du premier ce qui veux dire que si le premier n'a pas le constructeur par default le deuxieme auras le meme que le premier

obj1.methode1(attribut);	//appelle de la methode d'un des deux objects

class ClassName              //Creation de la class il est preferable de la commencer par une capital		le class peut etre remplacer par struct (la seul différence est que par défault tous est public)
{
	
public:		//tous ce qui seras instancier sous cette ligne seras public donc accessible hors de la class	
	void Methode1(int var3)		//creation d'une methode
	{

	}

private:				//tous ce qui seras instancier sous cette ligne seras priver donc pas accessible hors de la class
	int m_Var1;				//déclaration des attributs de la classe (des variables) le m_ n'est pas obligatoire mais il permet de différentier les attributs des variables		!!! tous les attributs doivent rester priver 
	int m_Var2;
	string m_var3;

};


//Si on le met dans un fichier a part on peux ecrir la classe comme ce ci car la classe a déja été creer dans le hpp ce qui fait que les private et publics on deja été definis :

void ClassName::methodeName(int var)
{
	//code
}

ClassName::ClassName() {		//creation du constructeur

	m_Var1 = 0;	//declaration de variable avec affectation par default
	m_Var2 = 0;	//declaration de variable avec affectation par default
}

ClassName::ClassName() : m_var1(100), m_var2(100), m_var3("Epee rouillee"), m_var4(10)		//creation du constructeur de la class en creent derictement les variables et en les affectans directement Variante 2
{
	//Rien à mettre dans le corps du constructeur, tout a déjà été fait !
}

ClassName::ClassName(string var3, int var4) : m_Var1(100), m_var2(100), m_var3(var3), m_var4(var4)		//creation d'un deuxieme constructeur avec des affectations differente pour les attributs var3 et var4 que l'on envois en paremetre a la class depuis le main cette classe est appeller uniquement si on envois les parametre sinon c'est le constructeur par default qui prend le dessus
{

}

ClassName::~ClassName()		//creation du destructeur
{
	/* Rien à mettre ici car on ne fait pas d'allocation dynamique
	dans la classe Personnage. Le destructeur est donc inutile mais
	je le mets pour montrer à quoi cela ressemble.
	En temps normal, un destructeur fait souvent des delete et quelques
	autres vérifications si nécessaire avant la destruction de l'objet. */
}

void ClassName::maMethode(int parametre) const;        //cette methode ne peux modifier aucun object elle ne peux que lire les attributs et non les modifiers ce qui est pratique pour afficher a l'écrans
{
	//code
}