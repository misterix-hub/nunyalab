@extends('visitors.base')

@section('content')
    <br />
    <div class="uk-container">
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-1-1">
                <ul class="uk-breadcrumb">
                    <li><a href="{{ route('index') }}">Acceuil</a></li>
                    <li><span href="">Détails de l\'évènement</span></li>
                </ul>
            </div>
            <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
                @foreach ($evenements as $evenement)    
                    <img src="{{ URL::asset($evenement->banniere) }}" width="100%" alt="img">
                    <h4 style="font-weight: 300; margin: 0 0 10px 0;">
                        <br>
                        <label href="" style="color: #43a047;">
                            <b>{{ $evenement->titre }}</b>
                        </label>
                    </h4>
                    <div style="width: 100px; border-bottom: 1px solid orange;"></div>
                    <small style="padding-top: 3px;" class="rajdhani">{{ $evenement->created_at }}</small><br />
                    <br />
                    <div>
                        {!! $evenement->description !!}
                    </div>
                @endforeach
            </div>
            <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
                <div class="uk-grid-small" uk-grid>
                    @foreach($listeEvenements as $listeEvenement) 
                        <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
                                <img src="{{ URL::asset($listeEvenement->baniere) }}" width="100%" alt="img">
                        </div>
                        <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                            <h4 style="font-weight: 300; margin: 0 0 10px 0;">
                                <a href="{{ route('vDetailsEvenement', $listeEvenement->id) }}" style="color: #43a047;">
                                    {{ $listeEvenement->titre }}
                                </a>
                            </h4>
                            <div style="width: 100px; border-bottom: 1px solid orange;"></div>
                            <small class="rajdhani">{{ $listeEvenement->created_at }}</small><br />
                            <a href="{{ route('vDetailsEvenement', $listeEvenement->id) }}" class="uk-button uk-button-text uk-float-right rajdhani">
                                Ouvrir
                            </a><br /><br />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div><br /><br /><br />
@endsection

