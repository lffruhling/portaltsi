@extends('tema.admin_template')

@section('titulo', 'Portal do TSI - Eventos')

@section('titulo_conteudo', 'Eventos Cadastrados')


@section('conteudo')

 <div class="row"> 
      <div class="col-md-12">
        <a href="{{ route('eventos.create') }}" class="btn btn-flat btn-sm btn-primary pull-right" data-toggle="tooltip" title="Novo Evento">
            <i class="fa fa-plus"></i> Novo Evento
        </a>
      </div>
 </div>


 <div class="row">
    <div class="col-md-12">
    @include('tema.mensagem')
        <div class="box box-solid">   
            <div class="box-body">
                <table id="teventos" class="table table-bordered table-hover dataTable dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Título</th>
                            <th>Data</th>
                            <th>Local</th>
                            <th>Descrição</th>

                            <th class="text-right no-print">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($eventos  as $evento)
                            <tr>
                                <td>{{ $evento->id }}</td>
                                <td>{{ $evento->titulo }}</td>
                                <td>{{ $evento->data_evento }}</td>
                                <td>{{ $evento->local }}</td>
                                <td>{{ $evento->descricao}}</td>

                                <td class="text-right">

                                {!! Form::open(['route' => ['eventos.destroy', $evento->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Excluir o Registro ?")' ]) !!}

                                <a href="{{ route('eventos.edit', $evento->id) }}" class="btn btn-flat btn-sm btn-primary" data-toggle="tooltip" title="Editar">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <button type="submit" class="delete btn btn-sm btn-flat btn-danger" data-toggle="tooltip" title="Excluir">
                                    <i class="fa fa-trash"></i>
                                </button>  

                                {!! Form::close() !!}
                                </td> 
                                    

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
      $(function () {
        $('#teventos').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"
            }
        })
      })
    </script>
@endsection
