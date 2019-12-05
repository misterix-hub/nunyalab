@extends('admin.base')

@section('content')

    <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s" >
        <div class="admin-menu-bar rajdhani">
        
            <small>
                <ul class="uk-breadcrumb">
                    <li><a href="{{ route('dashboard') }}"><b>Tableau de bord</b></a></li>
                    <li><span>Détails membre</span></li>
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
        
            <h4 class="rajdhani uk-margin-remove">Détail membre</h4>
            <div uk-grid class="uk-grid-small">
                @foreach ($equipes as $equipe)
                    <div class="uk-width-1-1 uk-text-center"><br />
                        <div><b>Photo de profil</b></div>
                        <img src="{{ URL::asset($equipe->photo) }}" alt="photo" width="200">
                    </div>
                    <div  class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s"><br />
                        <div class="uk-inline uk-width-1-1 uk-margin-remove">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
                            <input readonly class="uk-input uk-width-1-1" type="text" required name="nom" id="nom" value="{{ $equipe->nom }}">
                        </div>
                    </div>
                    <div  class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s"><br />
                        <div class="uk-inline uk-width-1-1 uk-margin-remove">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
                            <input readonly class="uk-input uk-width-1-1" required name="prenom" id="prenom" value="{{ $equipe->prenom }}">
                        </div>
                    </div>
                    <div  class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail"></span>
                            <input readonly class="uk-input uk-width-1-1" type="text" required name="email" id="nom" value="{{ $equipe->email }}">
                        </div>
                    </div>
                    <div  class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: phone"></span>
                            <input readonly class="uk-input uk-width-1-1" required name="telephone" id="prenom" value="{{ $equipe->telephone }}">
                        </div>
                    </div>
                    <div  class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: facebook"></span>
                            <input readonly class="uk-input uk-width-1-1" type="text" required name="facebook" id="nom" value="{{ $equipe->facebook }}">
                        </div>
                    </div>
                    <div  class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: whatsapp"></span>
                            <input readonly class="uk-input uk-width-1-1" required name="whatsapp" id="prenom" value="{{ $equipe->whatsapp }}">
                        </div>
                    </div>
                    <br />
                    <div class="uk-width-1-1"><br />
                        <a href="{{ route('modifierEquipe', $equipe->id) }}" type="submit" class="uk-button uk-button-default">
                            Mettre à jour
                        </a>
                        <a href="{{ route('modifierEquipe', $equipe->id) }}" type="submit" class="uk-button uk-button-danger">
                            Supprimer
                        </a>
                    </div>
                @endforeach
            </div>
                
        </div><br />
        <div>
            <small>Copyright &copy; 2019 | Tous droits réservés</small>
        </div><br />
    </div>
    
@endsection