@extends('tema.admin_template')

@section('titulo', 'Portal do TSI - Usuários')

@section('titulo_conteudo', 'Notícias Cadastradas')


@section('conteudo')

 <div class="row"> 
      <div class="col-md-12">
        <a href="{{ route('noticias.create') }}" class="btn btn-flat btn-sm btn-primary pull-right" data-toggle="tooltip" title="Nova Categoria">
            <i class="fa fa-plus"></i> Nova Notícia
        </a>
      </div>
 </div>


 <div class="row">
    <div class="col-md-12">
    @include('tema.mensagem')
        <div class="box box-solid">   
            <div class="box-body">
                <table id="tnoticias" class="table table-bordered table-hover dataTable dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Texto</th>
                            <th>Data</th>
                            <th>Categoria</th>
                            <th>Situação</th>

                            <th class="text-right no-print">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($noticias  as $noticia)
                            <tr>
                                <td>{{ $noticia->id }}</td>
                                <td>{{ $noticia->texto }}</td>
                                <td>{{ $noticia->data }}</td>
                                <td>{{ $noticia->categoria->descricao }}</td>
                                <td>{{ $noticia->situacao}}</td>

                                <td class="text-right">

                                {!! Form::open(['route' => ['noticias.destroy', $noticia->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Excluir o Registro ?")' ]) !!}

                                <a href="{{ route('noticias.edit', $noticia->id) }}" class="btn btn-flat btn-sm btn-primary" data-toggle="tooltip" title="Editar">
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
        $('#tnoticias').DataTable({
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
