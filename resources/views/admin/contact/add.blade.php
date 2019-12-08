@extends('admin.base')

@section('content')
<div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s" >
        <div class="admin-menu-bar rajdhani">

            <small>
                <ul class="uk-breadcrumb">
                    <li><a href="{{ route('dashboard') }}"><b>Tableau de bord</b></a></li>
                    <li><span>Ajouter contact</span></li>
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

            <h4 class="rajdhani uk-margin-remove">Contact</h4>

            <form id="the-form" action="{{ route('add', 'contact') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div uk-grid class="uk-grid-small">
                    <div  class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
                        <div class="uk-inline uk-width-1-1 uk-margin-remove">
                            <select class="uk-select uk-width-1-1" name="icone">
                            	<option>Icone</option>
                            </select>
                        </div>
                    </div>
                    <div  class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
                        <div class="uk-inline uk-width-1-1 uk-margin-remove">
                            <input class="uk-input uk-width-1-1" required name="libelle" id="libelle" placeholder="Libellé">
                        </div>
                    </div>
                    <div  class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s">
                        <div class="uk-inline uk-width-1-1">
                            <input class="uk-input uk-width-1-1" type="text" required name="contact" id="contact" placeholder="Contact">
                        </div>
                    </div>
                </div><br /><br /><br />

                <button type="submit" class="uk-button uk-button-default">
                    Ajouter
                </button>
            </form>
        </div><br /><br /><br /><br /><br /><br /><br /><br />
        <div>
            <small>Copyright &copy; 2019 | Tous droits réservés</small>
        </div><br /><br />
    </div>
    <script type="text/javascript">
        let form = document.querySelector('#the-form');
        let xhr = new XMLHttpRequest();
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            xhr.open('POST', form.action);
            xhr.onreadystatechange = function () {
                if(xhr.status === 200 && xhr.readyState === xhr.DONE){
                    try {
                        let arr = JSON.parse(xhr.responseText);
                        if(arr.errorState === 'OK') {
                            alert('Ajouté!');
                            document.location = '{{ route('pg', ['item' => 'contact', 'type' => 'list']) }}';
                        }
                    } catch(e) {}
                }
            };

            xhr.send(new FormData(form));
        });
    </script>
@endsection
