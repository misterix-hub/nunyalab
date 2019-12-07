<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('uikit/css/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('icofont/icofont.css') }}">
    <title>Nunuyalab - Acceuil</title>
</head>
    <body style="background-color: rgb(250, 250, 250);">
        <div style="padding: 5px 0; background-color: #166A51;">
            <div class="uk-container uk-container-large">
                <table width="100%">
                    <tr>
                        <td class="logo-td">
                            <a href="{{ route('index') }}">
                                <img src="{{ URL::asset('assets/images/logo.png') }}" style="border-radius: 3px;"lt="logo" width="100%">
                            </a>
                        </td>
                        <td style="padding-left: 5px;" width="150" class="logo-text-td">
                            <a href="{{ route('index') }}">
                                <h3 class="rajdhani" style="margin-bottom: -7px;"><b class="white-text">NUNYA<span class="yellow-text">LAB</span></b></h3>
                                <span class="rajdhani" style="color: #f8bbd0; font-size: 13px;">Hub de créativtés</span>
                            </a>
                        </td>
                        <td class="sm-menu-hide rajdhani menu-item" width="65">
                            <a href="{{ route('index') }}" class="white-text">
                                Accueil
                            </a>
                        </td>
                        <td class="sm-menu-hide rajdhani menu-item" width="138">
                            <a href="#aProposScroll" uk-scroll class="white-text">
                                Qui-sommes-nous ?
                            </a>
                        </td>
                        <td class="sm-menu-hide rajdhani menu-item" width="100">
                            <a href="#evenementScroll" uk-scroll class="white-text">
                                Évènements
                            </a>
                        </td>
                        <td class="sm-menu-hide rajdhani menu-item" width="65">
                            <a href="#projetScroll" uk-scroll class="white-text">
                                Projets
                            </a>
                        </td>
                        <td class="sm-menu-hide rajdhani menu-item" width="70">
                            <a href="" class="white-text">
                                Galerie
                            </a>
                        </td>
                        <td class="sm-menu-hide rajdhani menu-item" width="65">
                            <a href="#equipeScroll" uk-scroll class="white-text">
                                Équipe
                            </a>
                        </td>
                        <td class="sm-menu-hide uk-text-right rajdhani menu-item">
                            <a href="#location" uk-scroll class="white-text">
                                <i class="icofont-location-pin"></i>
                                Où nous trouver
                            </a>&nbsp;&nbsp;
                            <a href="#target" uk-scroll class="uk-button uk-button-small uk-button-default white-text" style="border-radius: 20px;">
                                Contacts
                            </a>
                        </td>
                        <td class="uk-text-right">
                            <div class="sm-menu-show">
                                <a href="" uk-toggle="target: #offcanvas-nav" class="white-text "><span uk-icon="icon: menu; ratio: 1.3"></span></a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        
        @yield('content')

        <div id="offcanvas-nav" uk-offcanvas="overlay: true">
            <div class="uk-offcanvas-bar">
        
                <ul class="uk-nav uk-nav-default">
                    <li class="uk-active"><a href="#"><b>MENU</b></a></li>
                    <li style="margin: 3px 0;">
                        <a href="" class="white-text">
                            Qui sommes-nous?
                        </a>
                    </li>
                    <li style="margin: 3px 0;">
                        <a href="" class="white-text">
                            Evenements
                        </a>
                    </li>
                    <li style="margin: 3px 0;">
                        <a href="" class="white-text">
                            Projets
                        </a>
                    </li>
                    <li style="margin: 3px 0;">
                        <a href="" class="white-text">
                            Galerie
                        </a>
                    </li>
                    <br />
                    <li class="uk-nav-divider"></li>
                    <li style="margin: 3px 0;">
                        <a href="" class="white-text">
                            <i class="icofont-location-pin"></i>
                            Où nous trouver ?
                        </a>
                    </li>
                    <li style="margin: 3px 0;">
                        <a href="" class="white-text">
                            <i class="icofont-phone"></i>
                            Contactez-nous
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <footer style="background-color: #222;">
            .<div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s rajdhani white-text">
                        <br />
                        <h4 class="rajdhani uk-margin-remove white-text">
                            <i class="icofont-envelope"></i>
                            Envoyez-nous un message
                        </h4><br />

                        <form class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-1">
                                <input class="uk-input" type="text" placeholder="Emai ou Téléphone">
                            </div>
                            <div class="uk-width-1-1">
                                <input class="uk-input" type="text" placeholder="Sujet">
                            </div>
                            <div class="uk-width-1-1@s">
                                <textarea class="uk-textarea" rows="5" placeholder="Saisir le message ici"></textarea><br /><br />
                                <button type="submit" class="uk-button uk-button-white">
                                    <span style="color: #000;">Envoyer</span>
                                </button>
                            </div>
                        </form>

                    </div>
                    <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s rajdhani white-text">
                        <br />
                        <h4 id="target" class="uk-margin-remove rajdhani white-text">
                            <i class="icofont-phone"></i>
                            Nos contacts
                        </h4><br />

                        <div>
                            Whatsapp : 0022891985311<br />
                            Email : nunyalab@gmail.com<br />
                            Téléphone : 0022891985311<br />
                        </div>


                        <h4 class="rajdhani white-text">Suivez-nous sur</h4>

                        <a href="" class="uk-icon-button uk-margin-small-right" style="color: #2196f3;" uk-icon="twitter"></a>
                        <a href="" class="uk-icon-button  uk-margin-small-right" style="color: #3f51b5;" uk-icon="facebook"></a>
                        <a href="" class="uk-icon-button uk-margin-small-right" style="color: #e53935;" uk-icon="google-plus"></a>
                        <a href="" class="uk-icon-button uk-margin-small-right" style="color: #b71c1c;" uk-icon="instagram"></a>
                        <a href="" class="uk-icon-button uk-margin-small-right" style="color: #1565c0;" uk-icon="linkedin"></a>
                        <br /><br /><br />

                        NUNYALAB &copy; 2019 | Tous droit réservés<br />
                        Powered by <a href="">NUNYLAB TECH</a>

                    </div>
                </div>
            </div><br />
        </footer>

        <script src="{{ URL::asset('uikit/js/uikit.min.js') }}"></script>
        <script src="{{ URL::asset('uikit/js/uikit-icons.min.js') }}"></script>
        <script src="{{ URL::asset('ckeditor/ckeditor.js') }}"></script>
        @yield('scriptJs')
    </body>
</html>