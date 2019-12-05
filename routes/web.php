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

/* ÉVÈNEMENTS - PROJET */

Route::get('admin/projets/ajouter', 'Admin\ProjetController@create')->name('ajouterProjet');
Route::get('admin/projets/liste', 'Admin\ProjetController@index')->name('listeProjet');
Route::get('admin/projets/{id}/details', 'Admin\ProjetController@show')->name('detailsProjet');
Route::get('admin/projets/{id}/modifier', 'Admin\ProjetController@edit')->name('modifierProjet');
Route::get('admin/projets/{id}/supprimer', 'Admin\ProjetController@destroy')->name('supprimerProjet');
Route::post('admin/projets/ajouter', 'Admin\ProjetController@store')->name('ajouterProjetForm');
Route::post('admin/projets/{id}/update', 'Admin\ProjetController@update')->name('updateProjetForm');

//Routes pour l'api contacts, partenaires, gallerie

Route::post('/search/{query}', 'SCRUD@search')->where('query', '.+')->name('search');

Route::match(['get', 'post'], '/add/{item}', 'SCRUD@create')->name('add');

Route::get('/list/{item}/{id?}', 'SCRUD@read')->name('read');

Route::post('/update/{item}/{id}', 'SCRUD@update')->name('update');

Route::any('/delete/{item}/{id}', 'SCRUD@delete')->name('delete');