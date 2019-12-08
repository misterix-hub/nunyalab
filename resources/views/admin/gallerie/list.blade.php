@extends('admin.base')

@section('content')

    <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s" >
        <div class="admin-menu-bar rajdhani">

            <small>
                <ul class="uk-breadcrumb">
                    <li><a href="{{ route('dashboard') }}"><b>Tableau de bord</b></a></li>
                    <li><span>Gallerie</span></li>
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
        <h4 class="rajdhani uk-margin-remove">Liste des médias</h4>

        <div class="uk-overflow-auto">
            <div id="content-grid" uk-grid class="uk-grid-small" style="padding: 10px;"></div>
        </div><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

        <div>
            <small>Copyright &copy; 2019 | Tous droits réservés</small>
        </div><br /><br />
    </div>
    <script type="text/javascript">
        let xhr = new XMLHttpRequest();
        xhr.open('GET', '{{ route('read', 'gallerie')  }}');
        xhr.onreadystatechange = function () {
            if(xhr.status === 200 && xhr.readyState === xhr.DONE){
                try {
                    let arr = JSON.parse(xhr.responseText);
                    console.log(arr);
                    if(arr.errorState === 'OK'){
                        let data = JSON.parse(arr.content);
                        let str = '';
                        if(data.length === 0) str += 'Aucun média';
                        for(let i=0; i < data.length; i++){
                            str += '<div class="uk-card uk-card-default uk-width-1-2@l uk-width-1-2@m uk-width-1-1@m" style="border: 1px solid #CCC; margin: 8px; padding: 0;">\n' +
                                '                        <div class="uk-card-header" style="padding: 10px;">\n' +
                                '                            <div class="uk-grid-small uk-flex-middle" uk-grid>\n' +
                                '                                <div class="uk-width-auto">\n' +
                                '                                    <img class="" style="max-width: 100%; display: block; margin: auto;" src="{{ asset('gallerie') }}/'+data[i].fichier+'">\n' +
                                '                                </div>\n' +
                                '                                <div class="uk-width-expand">\n' +
                                '                                    <h5 class="uk-margin-remove-bottom"></h5>\n' +
                                '                                    <p class="uk-text-meta uk-margin-remove-top"><time></time></p>\n' +
                                '                                </div>\n' +
                                '                            </div>\n' +
                                '                        </div>\n' +
                                '                        <div class="uk-card-body" style="overflow: auto; padding: 15px;">\n' +
                                '                            '+data[i].description+'\n' +
                                '                        </div>\n' +
                                '                        <div class="uk-card-footer" style="padding: 5px 15px;">\n' +
                                '                            \n' +
                                '                            <a href="{{ route('delete', ['item' => 'gallerie', 'id' => '']) }}/'+data[i].id+'" uk-tooltip="title: Supprimer; pos: bottom" class="uk-text-danger uk-float-right">\n' +
                                '                                <span uk-icon="icon: trash"></span>\n' +
                                '                            </a>\n' +
                                '                            <a href="{{ route('update', ['item' => 'gallerie', 'id' => '']) }}/'+data[i].id+'" uk-tooltip="title: Modifier; pos: bottom" class="uk-float-right" style="margin-right: 10px;">\n' +
                                '                                <span uk-icon="icon: file-edit"></span>\n' +
                                '                            </a>\n' +
                                '                        </div>\n' +
                                '                    </div>';
                        }
                        document.querySelector('#content-grid').innerHTML = str;
                    }
                } catch(e){

                }
            }
        };
        xhr.send(null);
    </script>
@endsection
