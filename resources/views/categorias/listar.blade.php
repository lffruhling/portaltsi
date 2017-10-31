@extends('tema.admin_template')

@section('titulo', 'Portal do TSI - Usuários')

@section('titulo_conteudo', 'Categorias Registradas')


@section('conteudo')

 <div class="row"> 
      <div class="col-md-12">
        <a href="{{ route('categorias.create') }}" class="btn btn-flat btn-sm btn-primary pull-right" data-toggle="tooltip" title="Nova Categoria">
            <i class="fa fa-plus"></i> Nova Categoria
        </a>
      </div>
 </div>


 <div class="row">
    <div class="col-md-12">
    @include('tema.mensagem')
        <div class="box box-solid">   
            <div class="box-body">
                <table id="tcategorias" class="table table-bordered table-hover dataTable dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Descrição</th>
                            <th class="text-right no-print">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categorias  as $categoria)
                            <tr>
                                <td>{{ $categoria->id }}</td>
                                <td>{{ $categoria->descricao }}</td>
                                <td class="text-right">

                                {!! Form::open(['route' => ['categorias.destroy', $categoria->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Excluir o Registro ?")' ]) !!}

                                <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-flat btn-sm btn-primary" data-toggle="tooltip" title="Editar">
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
        $('#tcategorias').DataTable({
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
