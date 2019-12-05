@extends('admin.base')

@section('content')
    <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s" >
        <div class="admin-menu-bar rajdhani">
        
            <small>
                <ul class="uk-breadcrumb">
                    <li><a href="{{ route('dashboard') }}"><b>Tableau de bord</b></a></li>
                    <li><span>Ajouter membre</span></li>
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
        
            <h4 class="rajdhani uk-margin-remove">Membres équipe</h4>
        
            <form action="{{ route('ajouterEquipeForm') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div uk-grid class="uk-grid-small">
                    <div  class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
                        <div class="uk-inline uk-width-1-1 uk-margin-remove">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
                            <input class="uk-input uk-width-1-1" type="text" required name="nom" id="nom" placeholder="Nom de famille">
                        </div>
                    </div>
                    <div  class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
                        <div class="uk-inline uk-width-1-1 uk-margin-remove">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
                            <input class="uk-input uk-width-1-1" required name="prenom" id="prenom" placeholder="Prénom">
                        </div>
                    </div>
                    <div  class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail"></span>
                            <input class="uk-input uk-width-1-1" type="text" required name="email" id="nom" placeholder="Email">
                        </div>
                    </div>
                    <div  class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: phone"></span>
                            <input class="uk-input uk-width-1-1" required name="telephone" id="prenom" placeholder="Téléphone">
                        </div>
                    </div>
                    <div  class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: facebook"></span>
                            <input class="uk-input uk-width-1-1" type="text" required name="facebook" id="nom" placeholder="Facebook">
                        </div>
                    </div>
                    <div  class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: whatsapp"></span>
                            <input class="uk-input uk-width-1-1" required name="whatsapp" id="prenom" placeholder="Whatsapp">
                        </div>
                    </div>
                </div><br />

                <b>Photo de profil ou image</b><br />
                <input type="file" name="photo" id="photo"><br /><br />
        
                <label for="bio">Biographie</label>
                <textarea name="bio" id="bio" cols="30" rows="7" class="uk-textarea" placeholder="Biographie ..."></textarea><br />
                <br />
                <button type="submit" class="uk-button uk-button-default">
                    Ajouter
                </button>
            </form>
        </div><br />
        <div>
            <small>Copyright &copy; 2019 | Tous droits réservés</small>
        </div><br />
    </div>

@endsection