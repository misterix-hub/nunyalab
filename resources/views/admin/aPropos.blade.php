@extends('admin.base')

@section('content')
    <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s" >
        <div class="admin-menu-bar rajdhani">

            <small>
                <ul class="uk-breadcrumb">
                    <li><a href="{{ route('dashboard') }}"><b>Tableau de bord</b></a></li>
                    <li><span>Qui sommes-nous ?</span></li>
                </ul>
            </small>

            @if ($message = Session::get('error'))
                <div class="uk-alert-danger" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    {{ $message }}
                </div>
            @endif

            @if ($message = Session::get('success'))
                <div class="uk-alert-success" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    {{ $message }}
                </div>
            @endif


            <h4 class="rajdhani uk-margin-remove">Qui sommes-nous ?</h4>

            @foreach ($aPropos as $aPropo)    
                <form action="{{ route('ajouterAproposForm', $aPropo->id) }}" method="post">
                    @csrf

                    <textarea name="texte" id="editor" cols="30">{{ $aPropo->texte }}</textarea>

                </form>
            @endforeach
            <br /><br /><br /><br />
            <div>
                <small>Copyright &copy; 2019 | Tous droits réservés</small>
            </div><br />
            
        </div>
    </div>
    <div class="uk-width-1-4@l uk-width-1-1@m uk-width-1-1@s" style="padding-right: 35px;">
        <br /><br /><br />
        <div>
            <div class="uk-card uk-card-body rajdhani">
                <h3 class="uk-card-title rajdhani">Pas d'aperçu à afficher</h3>
                <p>Toutes les information essentielles sont dans le champs de saisie.</p>
            </div>
        </div>
    </div>

@endsection

@section('scriptJs')
    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection