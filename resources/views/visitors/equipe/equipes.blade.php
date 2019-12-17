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
    <title>Nunyalab - Equipe</title>
</head>
<body style="background-color: rgb(250, 250, 250);">
    <div style="padding: 5px 0; background-color: #0f6f54;">
        <div class="uk-container uk-container-large">
            
        </div>
    </div>

	<div class="uk-container">
        @foreach($listeMembres as $listeMembre)
            <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
            	<div class="uk-animation-toggle" tabindex="0">
                    <div class="uk-card uk-card-default uk-animation-fast uk-animation-fade">
                        <div class="uk-card-header" style="padding: 10px 15px;">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="80" height="80" src="{{ URL::asset($listeMembre->photo) }}">
                                </div>
                                <div class="uk-width-expand">
                                <h3 class="uk-margin-remove-bottom rajdhani">{{$listeMembre->nom.' '.$listeMembre->prenom}}</h3>
                                    <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">{{$listeMembre->type_equipe}}</time></p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body" style="padding: 15px; height: 500px; overflow: auto;">
                            <p><?=(strlen($listeMembre->biographie) > 500) ? substr($listeMembre->biographie, 0, 500) . "..." : $listeMembre->biographie ?></p>
                            <a href="{{$listeMembre->facebook}}">
                                <span uk-icon="icon: facebook; ratio: 0.8; color: #0f6f54"></span>
                            </a>&nbsp;
                            <a href="{{$listeMembre->whatsapp}}">
                                <span uk-icon="icon: whatsapp; ratio: 0.8; color: #0f6f54"></span>
                            </a>&nbsp;
                            <a href="{{$listeMembre->mail}}">
                                <span uk-icon="icon: mail; ratio: 0.9; color: #0f6f54"></span>
                            </a>
                        </div>
                    </div>
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