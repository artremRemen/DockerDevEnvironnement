BIBLIOTHEQUE
#include <iostream>		bibliotheque de base
#include <Qt>			bibliotheque graphique
#include <string>		pour utiliser le type de variable string
#include <cmath>		ajoute des fonctions de math
#include <fstream>		lire et ecrir dans un fichier




//début de code est générer automatiquement
		#include <iostream>

		using namespace std;

		int main()
		{
		    code
		    return 0;
		}

//expliquation

	using namespace std;	//indique dans quel lot de fonctionnalit�s notre fichier source va aller piocher

	int main(){}

	//text		commentaire en une ligne

	/*text*/	//commentaire long


	//INSTRUCTION IOSTREAM

	cout <<"text"<<endl;		//affiche un message(endl signifie un retour de ligne sur la console)

	cout << "text" << endl << "text" << endl;
	cout << "Votre age est : " << ageUtilisateur << endl;	text + variable


	return 0;	fin de code
	
	pour écrire\    il faut mettre\\
	pour écrir "	il faut mettre\"

	cin>>     //permet d'écrire une information dans la console

//VARIABLE

//truc et astuce:


/*les noms de variables commencent par une minuscule;
si le nom se d�compose en plusieurs mots, ceux-ci sont coll�s les uns aux autres ;
chaque nouveau mot (except� le premier) commence par une majuscule.*/

//type de variable:


bool		true ou false
char 		caractere (une lettre)  s'�crit('lettre')
int 		nombre entier
unsigned int 		nombre entier positif ou nul
double		nombre a virgule
string		chaine de caractere, c'est-a-dire un mot ou une phrase.    s'écrit("texte")   il faut ajouter  #include <string>     au 
		debut

d�clarer variable

type nom (valeur);    declaration de la variable (premiere conselli�e)
ou
type nom = valeur;

cin.ignore()		a placer avant le getline si une variable a �t� d�clarer plus haut  

cin<< nomVar 		affecter une variable par utilisateur



int nomVariable(...);		d�clare la variable de type int

string prenom("Albert"), nom("Einstein");	    2 variable du meme type s�parer par une virgule

 DECLARER VARIABLE SANS INITIALISATION

int nomVariable;	variable sans numeros	

int const var;		declarer une variable constante	(on met const)

++nombreJoueur;	ajouter 1 uniter a une variable

--nombreJoueur;	soustraire 1 uniter a une variable

nombre = nombre / 3;	diviser un nombre par 3

double nombre(5.3);		ajouter diviser... a une variable
   nombre += 4.2;       //'nombre' vaut maintenant 9.5
   nombre *= 2.;        //'nombre' vaut maintenant 19
   nombre -= 1.;        //'nombre' vaut maintenant 18
   nombre /= 3.; 

var = var + 1; 			on ajoute 1 a la variable

r�f�rence 
	

int& maVariable(ageUtilisateur);	maVariable est une r�f�rence cest a dire un surnom a la variable( il peut y en avaoir plusieurs)

AFFECTER UNE VARIABLE
	var = var + 1;			ajouter 1 a la valeur d'une variable
	++var;					ajouter 1 a la valeur d'une variable
	var = var - 1;			enlever 1 a la valeur d'une variable
	--var;					enlever 1 a la valeur d'une variable
	var /= 3;				diviser la variable par 3

   double nombre(5.3);
   nombre += 4.2;       //'nombre' vaut maintenant 9.5
   nombre *= 2.;        //'nombre' vaut maintenant 19
   nombre -= 1.;        //'nombre' vaut maintenant 18
   nombre /= 3.;        //'nombre' vaut maintenant 6


	CALCULER QUELQUE CHOSE
	var = var1 + var2;

	+	addition
	-	soustraction
	*	multiplication
	/	division
	%	modulo

	MATH AVANCER
	utilise la bibliotheque cmath

	var = fonction(valeur);
	var = pow(var,var);		pour calculer les exp

	FONCTION

	sqrt()			racine carre
	sin()			sinus
	cos()			cosinus
	tan()			tangeante
	exp()			exposant
	log()			logaritme
	log10()			logarithme en base 10
	fabs()			valeur absolue
	ceil()			arrondis vers le haut


FONCTION
	getline()	sertt a pouvoir entrer une chaine de caractere avec espace dans une variable
	getline(string, var);

FONCTION

	==			est egale a 
	<			est inferieur a 
	>			est superieur a
	<= 			est inferieur ou egale a 
	>=			est superieur ou egale a
	!= 			est different de

	CONDITION

	if 			si
	else		sinon
	else if 	sinon si

	switch		if else simplifier exp en dessosu il ne peut pas lire les nombres

	    switch (nbEnfants)
    {
        case 0:
            cout << "Eh bien alors, vous n'avez pas d'enfant ?" << endl;
            break;

        case 1:
            cout << "Alors, c'est pour quand le deuxieme ?" << endl;
            break;

        case 2:
            cout << "Quels beaux enfants vous avez la !" << endl;
            break;

        default:								correspond au else
            cout << "Bon, il faut arreter de faire des gosses maintenant !" << endl;
            break;
    }


    if (adulte == true) ou if (adulte)		revient au meme(adulte est boolean)

    &&		signifie et exp if(var1 condition &&var2 condition)
    ||		signifie ou
    !		signifie non

    BOUCLE

    while (condition)		le liras ci la condition n'est pas remplie
{
    Instructions � r�p�ter
}

do 							le lira au moins une fois
{
    Instructions
} while (condition);

    for (compteur = 0 ; compteur < 10 ; compteur++)	affiche de 0 a 9
    {
        cout << compteur << endl;
    }

    FONCTION CLASS

    type nomFonction(arguments)			type = se que la fonction renvoiera
{
    //Instructions effectu�es par la fonction
}

TABLEAU

type nom [taille];		D�claration d'un tableau statique(type = int...)(pour remplacer une taille par une var il faut que se soit une constante)
int const tailleTableau(20); 		constante
nomtableau[case designee] = dans tableau;		afficher le tableau

LIRE ET ECRIR DNAS FICHIER

ofstream nom("chemin daccess");		ouvrir un fichier

string const nomFichier("chemin");
ofstream monFlux(nomFichier.c_str());		D�claration d'un flux permettant d'�crire dans un fichier.

getline(monFlux, ligne);		On lit une ligne compl�te

char a;
monFlux.get(a);			lettre par lettre

LIRE ECRIR DANS FICHIER

 	POINTEUR

 

	POO







BIBLIOTHEQUE

iostream 	affiche le message a l'ecrant

qt 		programme graphique

