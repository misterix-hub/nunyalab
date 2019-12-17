@extends('admin.base')

@section('content')

    <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s" >
        <div class="admin-menu-bar rajdhani">
        
            <small>
                <ul class="uk-breadcrumb">
                    <li><a href="{{ route('dashboard') }}"><b>Tableau de bord</b></a></li>
                    <li><span>A propos des images</span></li>
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
        <h4 class="rajdhani uk-margin-remove">A propos des images</h4>

        @foreach ($galerie as $galerie_item)    
            <div class="uk-grid-small" uk-grid>
                <div class="uk-width-1-1">
                    <img src="{{ URL::asset($galerie_item->photo) }}" width="100%" alt="">
                    <h3 class="uk-margin-remove" style="padding-top: 10px;">{{ $galerie_item->titre }}</h3>
                    {!! $galerie_item->description !!}
                    <a href="{{ route('modifierImage', $galerie_item->id) }}" class="uk-button uk-button-default rajdhani">
                        Mettre à jour
                    </a>
                    <a href="{{ route('supprimerImage', $galerie_item->id) }}" class="uk-button uk-button-danger rajdhani">
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