@extends('admin.base')

@section('content')
    
    <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s" >
        <div class="admin-menu-bar rajdhani">
            <small><a href=""><b>Tableau de bord</b></a></small><br /><br />

            <h1 class="rajdhani">Bienvenu(e) administrateur</h1>

            <div class="uk-alert-danger" style="color: #d20f34;" uk-alert>
                ESPACE RESERVE ADMINISTRATEUR !<br />
                Si vous êtes arrivé sur cette page par erreur, veuillez la quitter immédiatement
                puis signalez-nous ce fait dans un message s'il vous plaît ! Merci.
            </div>
            <div class="uk-te

            xt-right">
                <a href="" class="uk-button uk-button-primary" style="background-color: #0f6f54;">
                    Compte personnel
                </a>
                <a href="" class="uk-button uk-button-danger" style="background-color: #d20f34;">
                    Déconnexion
                </a>
            </div>
        </div>
        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
        <div>
            <small>Copyright &copy; 2019 | Tous droits réservés</small>
        </div><br />
    </div>
    <div class="uk-width-1-4@l uk-width-1-1@m uk-width-1-1@s" >
        
    </div>

@endsection