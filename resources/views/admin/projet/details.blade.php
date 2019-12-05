@extends('admin.base')

@section('content')

    <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s" >
        <div class="admin-menu-bar rajdhani">
        
            <small>
                <ul class="uk-breadcrumb">
                    <li><a href="{{ route('dashboard') }}"><b>Tableau de bord</b></a></li>
                    <li><span>Détails projet</span></li>
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
        </div>
        <h4 class="rajdhani uk-margin-remove">Détails projet</h4>

        @foreach ($projets as $projet)
            <div class="uk-grid-small" uk-grid>
                <div class="uk-width-1-1">
                    <img src="{{ URL::asset($projet->logo) }}" width="100%" alt="">
                    <h3 class="uk-margin-remove" style="padding-top: 10px;">{{ $projet->nom }}</h3>
                    {!! $projet->description !!}
                    <b><small>Date de publication : {{ $projet->created_at }}</small></b><br /><br />
                    <a href="{{ route('modifierProjet', $projet->id) }}" class="uk-button uk-button-default rajdhani">
                        Mettre à jour
                    </a>
                    <a href="{{ route('supprimerProjet', $projet->id) }}" class="uk-button uk-button-danger rajdhani">
                        Supprimer
                    </a>
                </div>
            </div>
        @endforeach

       
        <br /><br /><br /><br />
        <div>
            <small>Copyright &copy; 2019 | Tous droits réservés</small>
        </div><br /><br />
    </div>

@endsection