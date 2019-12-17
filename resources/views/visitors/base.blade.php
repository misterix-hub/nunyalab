<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('uikit/css/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('icofont/icofont.css') }}">
    <link rel="icon" href="{{ URL::asset('assets/images/logo.png') }}" style="
        border-radius: 3px;">
    <title>{{page_title($title ?? '')}}</title>
</head>
    <body style="background-color: rgb(250, 250, 250);">
        <div style="padding: 5px 0; background-color: #0f6f54;">
            <div class="uk-container uk-container-large">
                <table width="100%">
                    <tr class="uk-nav">
                        <td class="logo-td">
                            <a href="{{ route('index') }}">
                                <img src="{{ URL::asset('assets/images/logo.png') }}" style="border-radius: 3px;"lt="logo" width="100%">
                            </a>
                        </td>
                        <td style="padding-left: 5px;" width="150" class="logo-text-td">
                            <a href="{{ route('index') }}">
                                <h3 class="rajdhani" style="margin-bottom: -7px;"><b class="white-text">NUNYA<span class="yellow-text">LAB</span></b></h3>
                                <span class="rajdhani" style="color: #fff">Hub de créativté</span>
                            </a>
                        </td>
                        <td class="sm-menu-hide rajdhani menu-item" width="65">
                            <a class="custom" href="{{ route('index') }}">
                                Accueil
                            </a>
                        </td>
                        <td class="sm-menu-hide rajdhani menu-item" width="138">
                            <a class="custom" href="#aProposScroll" uk-scroll>
                                Qui-sommes-nous?
                            </a>
                        </td>
                        <td class="sm-menu-hide rajdhani menu-item" width="100">
                            <a class="custom" href="#evenementScroll" uk-scroll>
                                Évènements
                            </a>
                        </td>
                        <td class="sm-menu-hide rajdhani menu-item" width="65">
                            <a class="custom" href="#projetScroll" uk-scroll>
                                Projets
                            </a>
                        </td>
                        <td class="sm-menu-hide rajdhani menu-item" width="70">
                            <a class="custom" href="{{route('galerie')}}">
                                Galerie
                            </a>
                        </td>
                        <td class="sm-menu-hide rajdhani menu-item" width="65">
                            <a class="custom" href="{{route('membrequipe')}}">
                                Équipe
                            </a>
                        </td>
                        <td class="sm-menu-hide uk-text-right rajdhani menu-item">
                            <a class="custom" href="#location" uk-scroll>
                                <i class="icofont-location-pin"></i>
                                Où nous trouver?
                            </a>&nbsp;&nbsp;
                            <a class="custom" href="#target" uk-scroll style="border-radius: 15px; border: 1px solid !important; padding: 4px 13px 4px 13px;">
                                Contacts
                            </a>
                        </td>
                        <td class="uk-text-right">
                            <div class="sm-menu-show">
                                <a href="" uk-toggle="target: #offcanvas-nav" class="white-text"><span uk-icon="icon: menu; ratio: 1.3"></span></a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <style>
             a.custom{
                color: #fff;
            }

            a.custom:hover{
                color: #f1f517;;
            }
        </style>
        @yield('content')

        <div id="offcanvas-nav" uk-offcanvas="overlay: true">
            <div class="uk-offcanvas-bar">
        
                <ul class="uk-nav uk-nav-default">
                    <li class="uk-active"><a href="#"><b>MENU</b></a></li>
                    <li style="margin: 3px 0;">
                        <a href="#aProposScroll" class="white-text">
                            Qui sommes-nous?
                        </a>
                    </li>
                    <li style="margin: 3px 0;">
                        <a href="#evenementScroll" class="white-text">
                            Evenements
                        </a>
                    </li>
                    <li style="margin: 3px 0;">
                        <a href="#projetScroll" class="white-text">
                            Projets
                        </a>
                    </li>
                    <li style="margin: 3px 0;">
                        <a href="{{route('galerie')}}" class="white-text">
                            Galerie
                        </a>
                    </li>
                    <li style="margin: 3px 0;">
                        <a href="{{route('membrequipe')}}" class="white-text">
                            Équipe
                        </a>
                    </li>
                    <br />
                    <li class="uk-nav-divider"></li>
                    <li style="margin: 3px 0;">
                        <a href="#location" class="white-text">
                            <i class="icofont-location-pin"></i>
                            Où nous trouver?
                        </a>
                    </li>
                    <li style="margin: 3px 0;">
                        <a href="#target" class="white-text">
                            <i class="icofont-phone"></i>
                            Contactez-nous
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <footer style="background-color: #222;">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s rajdhani white-text">
                        <br />
                        <h4 class="rajdhani uk-margin-remove white-text">
                            <i class="icofont-envelope"></i>
                            Envoyez-nous un message
                        </h4><br />

                        <form method="post" action="{{url('/send')}}" class="uk-grid-small" uk-grid>
                            {{csrf_field()}}
                            <div class="uk-width-1-1">
                                <input class="uk-input" type="text" name="nom" placeholder="Nom et prénoms">
                            </div>
                            <div class="uk-width-1-1">
                                <input class="uk-input" type="text" name="sujet" placeholder="Sujet">
                            </div>
                            <div class="uk-width-1-1@s">
                                <textarea class="uk-textarea" rows="5" name="msg" placeholder="Saisir votre message ici"></textarea><br /><br />
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
                            Whatsapp :  0022891985311<br />
                            Email :  contactnunyalab@gmail.com<br />
                            Téléphone :  0022891985311<br />
                        </div>


                        <h4 class="rajdhani green-text">Suivez-nous sur</h4>

                        <a href="https://twitter.com/NunyaLab?s=08" class="uk-icon-button uk-margin-small-right" style="color: #2196f3;" uk-icon="twitter"></a>
                        <a href="https://www.facebook.com/NunyaLab/" class="uk-icon-button  uk-margin-small-right" style="color: #3f51b5;" uk-icon="facebook"></a>
                        <a href="https://instagram.com/nunyalabhub?igshid=zx1y0te630j4" class="uk-icon-button uk-margin-small-right" style="color: #b71c1c;" uk-icon="instagram"></a>
                        <a href="https://www.linkedin.com/company/nunyalab" class="uk-icon-button uk-margin-small-right" style="color: #1565c0;" uk-icon="linkedin"></a>
                        <br /><br /><br />

                        NUNYALAB &copy; 2019 | Tous droits réservés<br />
                        Powered by <a href="" style="color: #0f6f54;">NUNYLAB TECH</a>

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