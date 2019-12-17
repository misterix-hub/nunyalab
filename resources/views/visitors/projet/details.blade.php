@extends('visitors.base')

@section('content')
    <br />
    <div class="uk-container">
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-1-1">
                <ul class="uk-breadcrumb">
                    <li><a href="{{ route('index') }}">Acceuil</a></li>
                    <li><span href="">Détails du projet</span></li>
                </ul>
            </div>
            <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
                @foreach ($projets as $projet)    
                    <img src="{{ URL::asset($projet->logo) }}" width="100%" alt="img">
                    <h4 style="font-weight: 300; margin: 0 0 10px 0;">
                        <br>
                        <label href="" style="color: #43a047;">
                            <b>{{ $projet->nom }}</b>
                        </label>
                    </h4>
                    <div style="width: 100px; border-bottom: 1px solid orange;"></div>
                    <br />
                    <div>
                        {!! $projet->description !!}
                    </div>
                @endforeach
            </div>
            <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
                <div class="uk-grid-small" uk-grid>
                    @foreach($listeProjets as $listeProjet) 
                        <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
                            <img src="{{ URL::asset($listeProjet->logo) }}" alt="">
                        </div>
                        <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                            <h4 style="font-weight: 300; margin: 0 0 10px 0;">
                                <a href="{{ route('vDetailsProjet', $listeProjet->id) }}" style="color: #43a047;">
                                    {{ $listeProjet->nom }}
                                </a>
                            </h4>
                            <div style="width: 100px; border-bottom: 1px solid orange;"></div>
                            <a href="{{ route('vDetailsProjet', $listeProjet->id) }}" class="uk-button uk-button-text uk-float-right rajdhani">
                                Ouvrir le projet
                            </a><br /><br />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div><br /><br /><br />
@endsection

