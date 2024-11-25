<?php

/* installationLaravel fraeworkPhp */
use Illuminate\Support\Facades\Route;

/* Routes */

Route::get("chemin d'access a la page du site", function (Request $request) {    /* Le parametre request permet de récupérer les valeurs mis dans l'url afin de pouvoir s'en servir dans notre page (il doit etre intégrer en haut en tant que librairie) */
    $request->input('value', 'default value');               /* permet de récuperer une valeur d'un attribut spécifique dans l'url (si l'atribut n'existe pas alors il renverras nul) */
    $request->path();               /* permet de récuperer le chemin d'access */
    $request->url();                /* permet de récuperer l'url */
    $request->all();                /* va récuperer tous les parametres et les afficher sous forme de tableau */
    return view('vue(page a retourner)');   /* Cette fonction permet de créer des url personalisés tout en utilisant plusieurs pages et fichiers pour le site (systeme de router en phph vanilla) */
});

Route::get("chemin d'access a la page du site/{parametre}", function (string $parametre,Request $request) {    /* la variable parametre est une variable permettant d'avoir des url personalisés avec le nom de l'article par exemple */
    return view('vue(page a retourner)');   /* Cette fonction permet de créer des url personalisés tout en utilisant plusieurs pages et fichiers pour le site (systeme de router en phph vanilla) */
})->where([$parametre => '[0-9]'])->name('nom du lien');     /* grace a des expresions régulieres on peux spécifier ce que l'on veux dans le parametre d'url */