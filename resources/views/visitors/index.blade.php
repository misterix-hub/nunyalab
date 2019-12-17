@extends('visitors.base', ['title'=>'Hub de créativité'])

@section('content')

    <div>

        <div class="uk-position-extended uk-visible-toggle" tabindex="-1" uk-slideshow="animation: push; max-height: 500; min-height: 400; autoplay: true;">

            <ul class="uk-slideshow-items">
                <li>
                    <img src="{{ URL::asset('assets/images/1575729435.png') }}" alt="" uk-cover>
                    <div class="rajdhani carousel-text"><br /><br /><br /><br />
                        <div class="uk-grid" uk-grid>
                            <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
                                <h1 uk-slideshow-parallax="x: 100,-100" class="rajdhani sloganI uk-margin-remove"><b>NUNYA<span class="yellow-text">LAB</span></b></h1>
                                <div uk-slideshow-parallax="x: 200,-200" class="slogan">
                                    <div style="margin-bottom: 50px;">
                                        Fédérer les génies pour innover
                                        <div style="border: 1px solid yellow; width: 150px;"></div>
                                    </div>
                                    <div class="sm-hide">
                                        <a href="#aProposScroll" uk-scroll class="uk-button uk-button-default uk-button-large white" style="border-radius: 25px;">
                                            <span class="red-text">En savoir plus</span>
                                        </a>
                                        <a href="#target" uk-scroll class="uk-button uk-button-default uk-button-large white" style="border-radius: 25px;">
                                            <span class="green-text">Contactez-nous</span>
                                        </a>
                                    </div>
                                    <div class="sm-show uk-text-center">
                                        <a href="#aProposScroll" uk-scroll class="uk-button uk-button-large uk-button-default white" style="border-radius: 25px; padding-right: 20px; padding-left: 20px;">
                                            <span class="red-text">En savoir plus</span>
                                        </a>
                                        <a href="#target" uk-scroll class="uk-button uk-button-large uk-button-default white" style="border-radius: 25px; padding-right: 20px; padding-left: 20px;">
                                            <span class="green-text">Contactez-nous</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-6@l uk-width-1-1@m uk-width-1-1@s"></div>
                            <div class="uk-width-1-4@l uk-width-1-1@m uk-width-1-1@s">
                                <div class="uk-card md-hide" uk-card-default style="background-color: white; border-radius: 10px;">
                                    <div class="uk-card-header">
                                        <h3 class="uk-card-title uk-padding-remove rajdhani red-text">
                                            <i class="icofont-calendar"></i>
                                            ÉVÈNEMENTS
                                        </h3>
                                    </div>
                                    <div class="uk-card-body uk-text-justify" style="padding-top: 0; padding-bottom: 0;">
                                        Visitez la liste de nos évènements déjà réalisés, en cours de réalisation et des évènement à réaliser.
                                    </div>
                                    <div class="uk-card-footer uk-text-right">
                                        <a class="uk-button uk-button-text" href="#evenementScroll" uk-scroll>
                                            Lire plus
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-6@l uk-width-1-1@m uk-width-1-1@s"></div>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="{{ URL::asset('assets/images/ban2.JPG') }}" alt="" uk-cover>
                    <div class="rajdhani carousel-text"><br /><br /><br /><br />
                        <div class="uk-grid" uk-grid>
                            <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
                                <h1 uk-slideshow-parallax="x: 100,-100" class="rajdhani sloganI uk-margin-remove"><b>NOTRE <span class="yellow-text">MISSION</span></b></h1>
                                <div uk-slideshow-parallax="x: 200,-200" class="slogan">
                                    <div style="margin-bottom: 50px;">
                                        Fédérer les génies pour innover
                                        <div style="border: 1px solid yellow; width: 150px;"></div>
                                    </div>
                                    <div class="sm-hide">
                                        <a href="#aProposScroll" uk-scroll class="uk-button uk-button-default uk-button-large white" style="border-radius: 25px;">
                                            <span class="red-text">En savoir plus</span>
                                        </a>
                                        <a href="#target" uk-scroll class="uk-button uk-button-default uk-button-large white" style="border-radius: 25px;">
                                            <span href="#target" uk-scroll class="green-text">Contactez-nous</span>
                                        </a>
                                    </div>
                                    <div class="sm-show uk-text-center">
                                        <a href="#aProposScroll" uk-scroll class="uk-button uk-button-large uk-button-default white" style="border-radius: 25px; padding-right: 20px; padding-left: 20px;">
                                            <span class="red-text">En savoir plus</span>
                                        </a>
                                        <a href="#target" uk-scroll class="uk-button uk-button-large uk-button-default white" style="border-radius: 25px; padding-right: 20px; padding-left: 20px;">
                                            <span class="green-text">Contactez-nous</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-6@l uk-width-1-1@m uk-width-1-1@s"></div>
                            <div class="uk-width-1-4@l uk-width-1-1@m uk-width-1-1@s">
                                <div class="uk-card md-hide" uk-card-default style="background-color: white; border-radius: 10px;">
                                    <div class="uk-card-header">
                                        <h3 class="uk-card-title uk-padding-remove rajdhani red-text">
                                            <i class="icofont-folder"></i>
                                            NOS PROJETS
                                        </h3>
                                    </div>
                                    <div class="uk-card-body uk-text-justify" style="padding-top: 0; padding-bottom: 0;">
                                        Consultez tous les projets incubés selon les différentes classes
                                        (pré-incubation, incubation, accélération).
                                    </div>
                                    <div class="uk-card-footer uk-text-right">
                                        <a class="uk-button uk-button-text" href="#projetScroll" uk-scroll>
                                            Lire plus
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-6@l uk-width-1-1@m uk-width-1-1@s"></div>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="uk-light">
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
            </div>

        </div>
    </div>
    <br /><br />
    <div class="uk-container">
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-1-2@l uk-width-1-1@m3 uk-width-1-1@s">
                <h2 class="rajdhani uk-margin-remove red-text" id="aProposScroll">
                    <i class="icofont-question-circle"></i>
                    Qui sommes-nous?
                </h2><br />
                <div style="width: 150px; border-bottom: 1px solid orange;"></div><br />
                <div class="uk-text-justify">
                    @foreach ($errors as $aPropo)
                        @if (strlen($aPropo->texte) > 400)
                            <?=substr($aPropo->texte, 0, 400) ?> ...
                        @else
                            {!! $aPropo->texte !!}
                        @endif
                    @endforeach
                    <br />
                </div>
            </div>
            <div class="uk-width-1-2@l uk-width-1-1@m3 uk-width-1-1@s">
                <img src="{{ URL::asset('assets/images/ban2.JPG') }}" alt="" width="100%">
            </div>
            <div class="uk-width-1-1 uk-text-center"><hr />
                <h2 class="rajdhani uk-margin-remove red-text" id="evenementScroll">
                    <i class="icofont-calendar"></i>
                    Quelques évènements
                </h2>
                <br />
            </div>

            @foreach ($evenements as $evenement)
                <div class="uk-width-1-4@l uk-width-1-2@m uk-width-1-1@s" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: false">
                    <img src="{{ URL::asset($evenement->banniere) }}" width="100%" alt="img">
                </div>
                <div class="uk-width-1-4@l uk-width-1-2@m uk-width-1-1@s" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: false">
                    <h4 style="font-weight: 300; margin: 0 0 10px 0;">
                        <a href="{{ route('vDetailsEvenement', $evenement->id) }}" style="color: #43a047;">
                            {{$evenement->titre}}
                        </a>
                    </h4>
                    <div style="width: 100px; border-bottom: 1px solid orange;"></div>
                    <small class="rajdhani">{{$evenement->created_at}}</small><br />
                    <a href="{{ route('vDetailsEvenement', $evenement->id) }}" class="uk-button uk-button-text uk-float-right rajdhani">
                        Ouvrir
                    </a><br />
                </div>
            @endforeach
            
            <div class="uk-width-1-1 uk-text-center"><br />
                <h2 class="rajdhani uk-margin-remove red-text" id="projetScroll">
                    <i class="icofont-folder"></i>
                    Quelques projets
                </h2>
            </div>
            <div uk-slider="center: true; autoplay: true">
                <div class="uk-text-right">
                    <small>
                        <b>Glissez l'image</b>
                        &raquo;
                    </small>
                </div>
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                    <ul class="uk-slider-items uk-child-width-1-3@s uk-grid">
                        @foreach ($projets as $projet)
                            <li>
                                <div class="uk-card uk-card-default" uk-scrollspy="cls: uk-animation-fade; repeat: false; delay: 0">
                                    <div class="uk-card-media-top">
                                        <img src="{{ URL::asset($projet->logo) }}" alt="">
                                    </div>
                                    <div class="uk-card-body " style="height: 130px; overflow: auto; padding: 25px;">
                                        <h4 style="font-weight: 300;">
                                            <a href="{{ route('vDetailsProjet', $projet->id) }}" style="color: #0f6f54;">
                                                {{$projet->nom}}
                                            </a>
                                        </h4>
                                        <div style="width: 100px; border-bottom: 1px solid orange;"></div><br />
                                        <a href="{{ route('vDetailsProjet', $projet->id) }}" class="uk-button uk-button-text rajdhani" style="color: #000;">
                                            Ouvrir le projet
                                        </a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
            
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
            
                </div>
            
            </div>

            <div class="uk-width-1-1 uk-text-center"><br /><br />
                <h2 class="rajdhani uk-margin-remove red-text" id="equipeScroll">
                    <i class="icofont-handshake-deal"></i>
                    Notre équipe
                </h2>
                <br />
            </div>

            @foreach($equipes as $equipe)
                <div class="uk-width-1-3@l uk-width-1-2@m uk-width-1-1@s">
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-header" style="padding: 10px 15px;">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="60" height="60" src="{{ URL::asset($equipe->photo) }}">
                                </div>
                                <div class="uk-width-expand">
                                <h3 class="uk-margin-remove-bottom rajdhani">{{$equipe->nom.' '.$equipe->prenom}}</h3>
                                    <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">{{$equipe->type_equipe}}</time></p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body" style="padding: 15px; height: 150px; overflow: auto;">
                            <p><?=(strlen($equipe->biographie) > 150) ? substr($equipe->biographie, 0, 150) . "..." : $equipe->biographie ?></p>
                            <a href="{{$equipe->facebook}}">
                                <span uk-icon="icon: facebook; ratio: 0.8; color: #0f6f54"></span>
                            </a>&nbsp;
                            <a href="{{$equipe->whatsapp}}">
                                <span uk-icon="icon: whatsapp; ratio: 0.8; color: #0f6f54"></span>
                            </a>&nbsp;
                            <a href="{{$equipe->mail}}">
                                <span uk-icon="icon: mail; ratio: 0.9; color: #0f6f54"></span>
                            </a>
                        </div>
                        <div class="uk-card-footer" style="padding: 15px;">
                            <a href="#" class="uk-button uk-button-text rajdhani">Lire plus</a>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="uk-width-1-1 uk-text-right"><br />
                <a class="equipe_link" href="{{route('membrequipe')}}">
                    <span uk-icon="icon: list; ratio: 1"></span>
                    Voir toute l'équipe
                </a><hr />
            </div>

            <div class="uk-width-1-1 uk-text-center"><br /><br />
                <h2 class="rajdhani uk-margin-remove red-text">
                    <i class="icofont-handshake-deal"></i>
                    Nos partenaires
                </h2><br />
            </div>
            <div uk-slider="center: true; autoplay: true;">

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
            
                    <ul class="uk-slider-items uk-child-width-1-4@s uk-grid">
                        @for ($i = 0; $i < 6; $i++)
                            <li>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top">
                                        <img src="{{ URL::asset('assets/images/faiej.jpg') }}" alt="">
                                    </div>
                                </div>
                            </li>
                        @endfor
                    </ul>
            
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
            
                </div>
            
            </div>
            <div id="location" class="uk-width-1-1 uk-text-center"><br /><br />
                <h2 class="rajdhani uk-margin-remove red-text">
                    <i class="icofont-location-pin"></i>
                    Où nous trouver ?
                </h2>
            </div>
        </div>    
    </div>
    <br />
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.418079711547!2d1.1562805141600498!3d6.208457628469413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102159bbaf5a03fb%3A0x198f23f427e4ad81!2sMaison%20des%20Jeunes%20de%20Lom%C3%A9!5e0!3m2!1sfr!2stg!4v1575620242745!5m2!1sfr!2stg" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>

@endsection