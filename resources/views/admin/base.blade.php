<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('uikit/css/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('icofont/icofont.css') }}">
    <title>Nunyalab - Admin</title>
</head>
    <body>

        <div uk-grid>
            <div class="side-bar uk-width-1-4@l uk-width-1-4@l uk-width-1-1@s">
                <div>
                    <a href="{{ route('dashboard') }}">
                        <div class="logo-cover">
                            <table>
                                <tr>
                                    <td width="50">
                                        <img src="{{ URL::asset('assets/images/logo.png') }}" alt="logo" style="border-radius: 3px;" width="100%">
                                    </td>
                                    <td style="padding-left: 5px;">
                                        <h3 class="uk-margin-remove"><b class="white-text">NUNYA<span class="yellow-text">LAB</span></b></h3>
                                        <span class="white-text rajdhani">Hub de créativté</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </a>
                </div>
                <div class="menu-item-cover rajdhani">
                    <ul uk-accordion class="uk-padding-small">
                        <li>
                            <a class="uk-accordion-title" href="#">Membres équipe</a>
                            <div class="uk-accordion-content">
                                <ul style="line-height: 35px;" type="disc">
                                    <li>
                                        <a href="{{ route('ajouterEquipe') }}" class="white-text">
                                            <i class="icofont-edit"></i>
                                            Ajouter un membre
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('listeEquipe') }}" class="white-text">
                                            <i class="icofont-list"></i>
                                            Liste des membres
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="uk-accordion-title" href="#">Projets incubés</a>
                            <div class="uk-accordion-content">
                                <ul style="line-height: 35px;" type="disc">
                                    <li>
                                        <a href="{{ route('ajouterProjet') }}" class="white-text">
                                            <i class="icofont-edit"></i>
                                            Ajouter un projet
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('listeProjet') }}" class="white-text">
                                            <i class="icofont-list"></i>
                                            Liste des projets
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="uk-accordion-title" href="#">Évènements et actualités</a>
                            <div class="uk-accordion-content">
                                <ul type="disc" style="line-height: 35px;">
                                    <li>
                                        <a href="{{ route('ajouterEvenement') }}" class="white-text">
                                            <i class="icofont-edit"></i>
                                            Ajouter un évènement
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('listeEvenement') }}" class="white-text">
                                            <i class="icofont-list"></i>
                                            Liste des évènements
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="uk-accordion-title" href="#">Classes d'incubation</a>
                            <div class="uk-accordion-content">
                                <ul type="disc" style="line-height: 35px;">
                                    <li>
                                        <a href="{{ route('ajouterEvenement') }}" class="white-text">
                                            <i class="icofont-edit"></i>
                                            Ajouter une classe
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('listeEvenement') }}" class="white-text">
                                            <i class="icofont-list"></i>
                                            Liste des classes
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="uk-accordion-title" href="#">Galerie</a>
                            <div class="uk-accordion-content">
                                <ul type="disc" style="line-height: 35px;">
                                    <li>
                                        <a href="{{ route('ajouterImage') }}" class="white-text">
                                            <i class="icofont-edit"></i>
                                            Ajouter une image / vidéo
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('listeImage') }}" class="white-text">
                                            <i class="icofont-list"></i>
                                            Toutes les images
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="uk-accordion-title" href="#">Partenaires</a>
                            <div class="uk-accordion-content">
                                <ul type="disc" style="line-height: 35px;">
                                    <li>
                                        <a href="{{ route('ajouterEvenement') }}" class="white-text">
                                            <i class="icofont-edit"></i>
                                            Ajouter un partenaire
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('listeEvenement') }}" class="white-text">
                                            <i class="icofont-list"></i>
                                            Liste des partenaires
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="uk-accordion-title" href="#">Contacts</a>
                            <div class="uk-accordion-content">
                                <ul type="disc" style="line-height: 35px;">
                                    <li>
                                        <a href="{{ route('ajouterEvenement') }}" class="white-text">
                                            <i class="icofont-edit"></i>
                                            Ajouter un contact
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('listeEvenement') }}" class="white-text">
                                            <i class="icofont-list"></i>
                                            Liste des contacts
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="uk-accordion-title" href="#">Qui sommes-nous ?</a>
                            <div class="uk-accordion-content">
                                <ul type="disc">
                                    <li>
                                        <a href="{{ route('aPropos') }}" class="white-text">
                                            <i class="icofont-edit"></i>
                                            Ajouter
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sized-menu">
                <table width="100%">
                    <tr>
                        <td>
                            <a href="" uk-tooltip="title: Prodil; pos: bottom">
                                <span class="rajdhani uk-text-secondary"><b>Nom Adminstrateur</b></span>
                            </a>
                        </td>
                        <td class="uk-text-right" style="padding-right: 15px;">
                            <a uk-tooltip="title: Déconnexion; pos: bottom"  class="uk-button uk-button-default uk-border-circle uk-padding-remove"
                            style="width: 40px; height; 40px; border: 1px solid #d20f34;">
                                <i class="icofont-power red-text"></i>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            @yield('content')
        </div>



        <script src="{{ URL::asset('uikit/js/uikit.min.js') }}"></script>
        <script src="{{ URL::asset('uikit/js/uikit-icons.min.js') }}"></script>
        <script src="{{ URL::asset('ckeditor/ckeditor.js') }}"></script>
        @yield('scriptJs')
    </body>
</html>