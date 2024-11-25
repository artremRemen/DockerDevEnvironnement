#ifndef MATH_HPP_INCLUDED		//ce groupe de ligne sert a empecher le compileur de recompiler l'entete s'il n'y a pas besoin elles sont donc essentiels le code ce met entre la ligne 2 et la derniere. les mots 'MATH_HPP_INCLUDED' doivent etre différents pour chaques fichiers
#define MATH_HPP_INCLUDED
	//code

	#include <string>		//a mettre si on utilise des strings	!!! si on en utilise alors il faudras mettre stdr:: devant le type et devant les vector(comme dans le fichier cpp si on ne met pas de namespace)

	/*
	 * \brief explique le fonctionnement de la fonction
	 * \param explique les arguments recus par la fonction (preciser le type est mieux)
	 * \return expliquer la valeur de retour
	 */

	type Functionname(type argument = valeur, type& argument, type const& argument2);		//on définis la foinction en prennant la premiere ligne de celle ci avant les accolades (on peux rendre un argument facultatif affectant une valeur DANS CE FICHIER (tjrs mettre les facultatifs a la fin)
#endif // MATH_HPP_INCLUDED

#define DEF_Class       //Definir une class dans le fichier hpp

#include <string>

    class Myclass
    {
    public:         //declaration de ce qui est dans le public
                       
        Myclass();		//creation du constructeur de class !!! il doit avoir le meme nom que la class dans laquel il est
        Myclass(std::string var1, int var2);      //creation d'un deuxieme constructeur qui utilise les meme attributs mais avec des valeurs par défault differente 
        ~Myclass();     //creation du destructeur !!! le tild est obligatoire 

        void methode1(int attr1);       //declaration des methodes
        void methode2(attr1& attr2);
        void methode3(int attr1);
        void methode4(std::string attr1, int attr2);
        bool methode5();
        void maMethode(int parametre) const;        //cette methode ne peux modifier aucun object elle ne peux que lire les attributs et non les modifiers ce qui est pratique pour afficher a l'écrans

    private:    //declaration de ce qui est dans le private

        int m_Attr1;        //declaratrion des attributs
        int m_Attr2;
        std::string m_Attr3; //Pas de using namespace std, il faut donc mettre std:: devant string
        int m_Attr4;

        class2 = m_class2;      //appelle d'une autre class afdin de la reutiliser dans cette class (doit etre inclue en haut avec le reste)
    };

#endif