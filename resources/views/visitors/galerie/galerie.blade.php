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
    <title>Nunyalab - Galerie</title>
</head>
<body style="background-color: rgb(250, 250, 250);">
    <div style="padding: 5px 0; background-color: #0f6f54;">
        <div class="uk-container uk-container-large">
            
        </div>
    </div>

    <div class="uk-container">
        @foreach($galerie as $galerie_item)
            <div class="uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-2@s" uk-grid uk-lightbox="animation: slide">
                <div>
                    <a class="uk-inline rajdhani" href="{{ URL::asset($galerie_item->photo) }}" data-caption="{{$galerie_item->description}}">
                        <img src="{{ URL::asset($galerie_item->photo) }}">
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <br />
    <br />
    <footer style="background-color: #222;">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s rajdhani white-text">
                    <br /><br />
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

