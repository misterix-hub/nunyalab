<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('uikit/css/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('icofont/icofont.css') }}">
    <title>Nunuyalab - Admin</title>
</head>
    <body>
        <div style="padding: 5px; background-color: #166A51;">
            <div class="uk-container uk-container-large">
                <table width="100%">
                    <tr>
                        <td width="50">
                            <img src="{{ URL::asset('assets/images/logo.png') }}" style="border-radius: 3px;"lt="logo" width="100%">
                        </td>
                        <td style="padding-left: 5px;" width="150">
                            <h3 class="rajdhani" style="margin-bottom: -7px;"><b class="white-text">NUNYA<span class="yellow-text">LAB</span></b></h3>
                            <span class="rajdhani" style="color: #f8bbd0; font-size: 14px;">Hub de créativtés</span>
                        </td>
                        <td class="rajdhani menu-item" width="65">
                            <a href="" class="white-text">
                                Accueil
                            </a>
                        </td>
                        <td class="rajdhani menu-item" width="138">
                            <a href="" class="white-text">
                                Qui-sommes nous
                            </a>
                        </td>
                        <td class="rajdhani menu-item" width="65">
                            <a href="" class="white-text">
                                Équipe
                            </a>
                        </td>
                        <td class="rajdhani menu-item" width="100">
                            <a href="" class="white-text">
                                Évènements
                            </a>
                        </td>
                        <td class="rajdhani menu-item" width="65">
                            <a href="" class="white-text">
                                Projets
                            </a>
                        </td>
                        <td class="rajdhani menu-item" width="70">
                            <a href="" class="white-text">
                                Gallerie
                            </a>
                        </td>
                        <td class="uk-text-right rajdhani menu-item">
                            <a href="" class="white-text">
                                <span uk-icon="icon: receiver"></span>
                                Contactez-nous
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        
        @yield('content')

        <script src="{{ URL::asset('uikit/js/uikit.min.js') }}"></script>
        <script src="{{ URL::asset('uikit/js/uikit-icons.min.js') }}"></script>
        <script src="{{ URL::asset('ckeditor/ckeditor.js') }}"></script>
        @yield('scriptJs')
    </body>
</html>