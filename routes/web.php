<?php

Route::get('/', 'Visitors\MainController@index')->name('index');
Route::get('admin', 'Admin\MainController@dashboard')->name('dashboard');
Route::get('admin/a_propos/', 'Admin\MainController@aPropos')->name('aPropos');
Route::post('admin/a_propos/{id}/enregistrer', 'Admin\MainController@aProposForm')->name('ajouterAproposForm');

/* EQUIPES - ADMINISTRATEUR */

Route::get('admin/equipes/ajouter', 'Admin\EquipeController@create')->name('ajouterEquipe');
Route::get('admin/equipes/liste', 'Admin\EquipeController@index')->name('listeEquipe');
Route::get('admin/equipes/{id}/details', 'Admin\EquipeController@show')->name('detailsEquipe');
Route::get('admin/equipes/{id}/modifier', 'Admin\EquipeController@edit')->name('modifierEquipe');
Route::get('admin/equipes/{id}/supprimer', 'Admin\EquipeController@destroy')->name('supprimerEquipe');
Route::post('admin/equipes/ajouter', 'Admin\EquipeController@store')->name('ajouterEquipeForm');
Route::post('admin/equipes/{id}/update', 'Admin\EquipeController@update')->name('updateEquipeForm');

/* ÉVÈNEMENTS - ADMINISTRATEUR */

Route::get('admin/evenements/ajouter', 'Admin\EvenementController@create')->name('ajouterEvenement');
Route::get('admin/evenements/liste', 'Admin\EvenementController@index')->name('listeEvenement');
Route::get('admin/evenements/{id}/details', 'Admin\EvenementController@show')->name('detailsEvenement');
Route::get('admin/evenements/{id}/modifier', 'Admin\EvenementController@edit')->name('modifierEvenement');
Route::get('admin/evenements/{id}/supprimer', 'Admin\EvenementController@destroy')->name('supprimerEvenement');
Route::post('admin/evenements/ajouter', 'Admin\EvenementController@store')->name('ajouterEvenementForm');
Route::post('admin/evenements/{id}/update', 'Admin\EvenementController@update')->name('updateEvenementForm');

/*GALERIE - ADMINISTRATEUR*/

Route::get('admin/galerie/ajouter', 'Admin\GalerieController@create')->name('ajouterImage');
Route::get('admin/galerie/liste', 'Admin\GalerieController@index')->name('listeImage');
Route::get('admin/galerie/{id}/details', 'Admin\GalerieController@show')->name('detailsImage');
Route::get('admin/galerie/{id}/modifier', 'Admin\GalerieController@edit')->name('modifierImage');
Route::get('admin/galerie/{id}/supprimer', 'Admin\GalerieController@destroy')->name('supprimerImage');
Route::post('admin/galerie/ajouter', 'Admin\GalerieController@store')->name('ajouterImageForm');
Route::post('admin/galerie/{id}/update', 'Admin\GalerieController@update')->name('updateImageForm');

/* ÉVÈNEMENTS - PROJET */

Route::get('admin/projets/ajouter', 'Admin\ProjetController@create')->name('ajouterProjet');
Route::get('admin/projets/liste', 'Admin\ProjetController@index')->name('listeProjet');
Route::get('admin/projets/{id}/details', 'Admin\ProjetController@show')->name('detailsProjet');
Route::get('admin/projets/{id}/modifier', 'Admin\ProjetController@edit')->name('modifierProjet');
Route::get('admin/projets/{id}/supprimer', 'Admin\ProjetController@destroy')->name('supprimerProjet');
Route::post('admin/projets/ajouter', 'Admin\ProjetController@store')->name('ajouterProjetForm');
Route::post('admin/projets/{id}/update', 'Admin\ProjetController@update')->name('updateProjetForm');

/* VISITORS - EVENEMENT - PROJETS */

Route::get('evenement/{id}/details', 'Visitors\MainController@evenement')->name('vDetailsEvenement');
Route::get('projet/{id}/details', 'Visitors\MainController@projet')->name('vDetailsProjet');

/* VISITORS - EQUIPES*/

Route::get('equipe/equipes', 'Visitors\MainController@membrequipe')->name('membrequipe');

/*GALERIE*/

Route::get('galerie/galerie', 'Visitors\MainController@galerie')->name('galerie');

/* EMAIL*/

Route::get('/', 'Email\EmailController@index');

Route::get('/send', 'Email\EmailController@send');