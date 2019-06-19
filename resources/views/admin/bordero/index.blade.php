@extends ('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="row">
        <h1>Antecipação de Recebiveis</h1>
        <a href="{{ route('bordero.create') }}" class="btn btn-primary">Criar Bordero</a>
    </div>
@endsection

@section('content')
    @if (count($borderos) > 0)
        <table class="table table-hover table-striped">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">PROJETO</th>
                <th scope="col">PORTADOR</th>
                <th scope="col">DATA</th>
                <th scope="col">VALOR BRUTO</th>
                <th scope="col">VALOR LIQUIDO</th>
            </tr>
            </thead>
            <tbody>
            <div>
                @foreach ($borderos as $bordero)

                    <tr>
                        <td>{{$bordero->bor_id}}</td>
                        <td>{{$bordero->dprojeto->pro_nome }}</td>

                        <td>{{$bordero->dbanco->bco_nome}}</td>

                        <td>{{$bordero->bor_dataope}}</td>
                        <td>{{$bordero->bor_vlr_bruto}}</td>
                        <td>{{$bordero->bor_vlr_liquido}}</td>
                        <td>
                            <a href={{route('bordero.edit',$bordero->bor_id)}} class="btn btn-info">EDIT</a>
                            <a href={{route('bordero.destroy',$bordero->bor_id)}} class="btn btn-danger">DELETE</a>
                        </td>
                    </tr>
                @endforeach
            </div>
            </tbody>

        </table>
        <div class="text-center">
            {{$borderos->links()}}
        </div>
    @else
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Não existem titulos cadastrados
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
@endsection


