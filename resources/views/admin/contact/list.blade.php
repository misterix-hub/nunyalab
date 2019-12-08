@extends('admin.base')

@section('content')

    <div class="uk-width-1-2@l uk-width-1-1@m uk-width-1-1@s" >
        <div class="admin-menu-bar rajdhani">

            <small>
                <ul class="uk-breadcrumb">
                    <li><a href="{{ route('dashboard') }}"><b>Tableau de bord</b></a></li>
                    <li><span>Liste contacts</span></li>
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
        <h4 class="rajdhani uk-margin-remove">Liste contacts</h4>

        <div class="uk-overflow-auto">
            <table id="data-table" class="uk-table uk-table-hover uk-table-middle uk-table-divider">
                <thead>
                    <tr>
                        <th class="uk-table-expand font-size-13">Icone</th>
                        <th class="uk-table-expand font-size-13">Libellé</th>
                        <th class="uk-table-expand font-size-13">Contact</th>
                        <th class="uk-table-shrink uk-text-nowrap font-size-13 uk-text-center"></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

        <div>
            <small>Copyright &copy; 2019 | Tous droits réservés</small>
        </div><br /><br />
    </div>
    <script type="text/javascript">
        let xhr = new XMLHttpRequest();
        xhr.open('GET', '{{ route('read', 'contact')  }}');
        xhr.onreadystatechange = function () {
            if(xhr.status === 200 && xhr.readyState === xhr.DONE){
                try {
                    let arr = JSON.parse(xhr.responseText);
                    console.log(arr);
                    if(arr.errorState === 'OK'){
                        let data = JSON.parse(arr.content);
                        let str = '';
                        for(let i=0; i < data.length; i++){
                            str += '<tr><td>'+data[i].icone+'</td>' +
                                '<td>'+data[i].libelle+'</td>' +
                                '<td>'+data[i].contact+'</td>' +
                                '<td class="uk-text-nowrap uk-text-center"><a href="{{ route('update', ['item' => 'contact', 'id' => '']) }}/'+data[i].id+'" uk-tooltip="title: Modifier; pos: bottom" class="uk-button uk-button-primary uk-button-small"><span uk-icon="icon: file-edit"></span></a><a href="{{ route('delete', ['item' => 'contact', 'id' => '']) }}/'+data[i].id+'" uk-tooltip="title: Supprimer; pos: bottom" class="uk-button uk-button-danger uk-button-small"><span uk-icon="icon: trash"></span></a></td>'+
                                '</tr>';
                        }
                        document.querySelector('#data-table tbody').innerHTML = str;
                    }
                } catch(e){

                }
            }
        };
        xhr.send(null);
    </script>
@endsection
