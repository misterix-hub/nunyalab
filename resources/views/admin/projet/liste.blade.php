@extends('admin.base')

@section('content')

    <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s" >
        <div class="admin-menu-bar rajdhani">
        
            <small>
                <ul class="uk-breadcrumb">
                    <li><a href="{{ route('dashboard') }}"><b>Tableau de bord</b></a></li>
                    <li><span>Liste évènements</span></li>
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
        <h4 class="rajdhani uk-margin-remove">Liste évènements</h4>
       
        <div class="uk-overflow-auto">
            <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
                <thead>
                    <tr>
                        <th class="uk-table-expand font-size-13">Titre</th>
                        <th class="uk-table-shrink uk-text-nowrap font-size-13 uk-text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projets as $projet)
                        <tr>
                            <td class="uk-table-link" width="300">
                                <a class="uk-link-reset" href="">{{ $projet->nom }}</a>
                            </td>
                            <td class="uk-text-nowrap uk-text-center">
                                <a href="{{ route('detailsProjet', $projet->id) }}" uk-tooltip="title: Détails; pos: bottom" class="uk-button uk-button-secondary uk-button-small">
                                    <span uk-icon="icon: list"></span>
                                </a>
                                <a href="{{ route('modifierProjet', $projet->id) }}" uk-tooltip="title: Modifier; pos: bottom" class="uk-button uk-button-primary uk-button-small">
                                    <span uk-icon="icon: file-edit"></span>
                                </a>
                                <a href="{{ route('supprimerProjet', $projet->id) }}" uk-tooltip="title: Supprimer; pos: bottom" class="uk-button uk-button-danger uk-button-small">
                                    <span uk-icon="icon: trash"></span>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="uk-text-center">
                                <b>Auncun évènement !</b>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

        <div>
            <small>Copyright &copy; 2019 | Tous droits réservés</small>
        </div><br /><br />
    </div>

@endsection