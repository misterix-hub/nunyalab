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
            <div class="side-bar uk-width-1-4@l uk-width-1-4@l uk-width-1-1@s" style="padding: 5px;">
                <div class="uk-container uk-container-large">
                    <table width="100%">
                        <tr>
                            <td width="50">
                                <img src="{{ URL::asset('assets/images/logo.png') }}" alt="logo" width="100%">
                            </td>
                            <td>

                            </td>
                            <td></td>
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