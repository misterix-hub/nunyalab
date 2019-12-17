@extends('admin.base')

@section('content')

    <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s" >
        <div class="admin-menu-bar rajdhani">
        
            <small>
                <ul class="uk-breadcrumb">
                    <li><a href="{{ route('dashboard') }}"><b>Tableau de bord</b></a></li>
                    <li><span>Ajouter un projet</span></li>
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
        <h4 class="rajdhani uk-margin-remove">Ajouter un projet</h4>
       
        <form action="{{ route('ajouterProjetForm') }}" method="post" enctype="multipart/form-data" class="rajdhani">
            @csrf
            <div uk-grid class="uk-grid-small">
                <div  class="uk-width-1-1@l uk-width-1-1@m uk-width-1-1@s">
                    <div class="uk-inline uk-width-1-1 uk-margin-remove">
                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: list"></span>
                        <input class="uk-input uk-width-1-1" type="text" required name="nom" id="nom" placeholder="Nom du projet">
                    </div>
                    <div class="uk-inline uk-width-1-1 uk-margin-remove"><br />
                        <label for="logo">Image ou logo du projet</label><br />
                        <input type="file" required name="logo" id="logo"><br /><br />
                    </div>
                </div>
            </div>
            <textarea name="description" required id="editor" cols="30" rows="10"></textarea><br />
            <button type="submit" class="uk-button uk-button-default">
                Ajouter
            </button>
        </form><br /><br /><br />

        <div>
            <small>Copyright &copy; 2019 | Tous droits réservés</small>
        </div><br />
    </div>
@endsection

@section('scriptJs')
    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection