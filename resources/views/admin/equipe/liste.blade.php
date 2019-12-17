@extends('admin.base')

@section('content')
    <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s" >
        <div class="admin-menu-bar rajdhani">
        
            <small>
                <ul class="uk-breadcrumb">
                    <li><a href="{{ route('dashboard') }}"><b>Tableau de bord</b></a></li>
                    <li><span>Liste membre</span></li>
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
        
            <h4 class="rajdhani uk-margin-remove">Liste des membres</h4>
            <div uk-grid class="uk-grid-small" style="padding: 15px;"> 
                @forelse ($equipes as $equipe)
                    
                    <div class="uk-card uk-card-default uk-width-1-2@l uk-width-1-2@m uk-width-1-1@m" style="border: 1px solid #CCC;">
                        <div class="uk-card-header" style="padding: 10px;">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="60" height="60" src="{{ URL::asset($equipe->photo) }}">
                                </div>
                                <div class="uk-width-expand">
                                    <h5 class="uk-margin-remove-bottom">{{ $equipe->nom . " " .$equipe->prenom.", ".$equipe->type_equipe }}</h5>
                                    <p class="uk-text-meta uk-margin-remove-top"><time>{{ $equipe->created_at }}</time></p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body" style="height: 100px; overflow: auto; padding: 15px;">
                            <?=(strlen($equipe->biographie) > 100) ? substr($equipe->biographie, 0, 100) . "..." : $equipe->biographie ?>
                        </div>
                        <div class="uk-card-footer" style="padding: 15px;">
                            <a href="{{ $equipe->facebook }}" class="uk-button uk-button-text">
                                <i class="icofont-facebook"></i>
                            </a>&nbsp;
                            <a href="mailto: {{ $equipe->email }}" class="uk-button uk-button-text">
                                <i class="icofont-envelope"></i>
                            </a>&nbsp;
                            <a href="{{ $equipe->whatsapp }}" class="uk-button uk-button-text">
                                <i class="icofont-whatsapp"></i>
                            </a>

                            
                            <a href="{{ route('supprimerEquipe', $equipe->id) }}" uk-tooltip="title: Supprimer {{ $equipe->prenom }}; pos: bottom" class="uk-text-danger uk-float-right">
                                <span uk-icon="icon: trash"></span>
                            </a>
                            <a href="{{ route('detailsEquipe', $equipe->id) }}" uk-tooltip="title: Détails {{ $equipe->prenom }}; pos: bottom" class="uk-float-right" style="margin-right: 10px;">
                                <span uk-icon="icon: plus"></span>
                            </a>
                        </div>
                    </div>
                    
                @empty
                    <div class="uk-text-center">
                        Aucun membre
                    </div>
                @endforelse
            </div>

        </div><br /><br /><br /><br /><br /><br /><br /><br />
        <div>
            <small>Copyright &copy; 2019 | Tous droits réservés</small>
        </div><br />
    </div>
    <div class="uk-width-1-4@l uk-width-1-1@m uk-width-1-1@s">
        <br /><br /><br /><br /><br /><br /><br />
        <h3 class="uk-margin-remove">Membres</h3>
        <span style="font-size: 36px;">{{ count($equipes) }}</span> membres
    </div>

@endsection