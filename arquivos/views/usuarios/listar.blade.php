@extends('tema.admin_template')

@section('titulo', 'Portal do TSI - Usuários')

@section('titulo_conteudo', 'Usuários Registrados')


@section('conteudo')

 <div class="row">
    <div class="col-md-12">
  
    @include('tema.mensagem')
        <div class="box box-solid">   
            <div class="box-body table-responsive">                
                <table class="table table-bordered table-hover dataTable dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Data de Registro</th>
                            <th class="text-right no-print">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios  as $usuario)
                            <tr>
                                <td>{{ $usuario->id }}</td>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->created_at }}</td>
                                <td class="text-right">

                                {!! Form::open(['route' => ['usuarios.destroy', $usuario->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Excluir o Registro ?")' ]) !!}

                                <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-flat btn-sm btn-primary" data-toggle="tooltip" title="Editar">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                @if(Auth::id() != $usuario->id)
                                <button type="submit" class="delete btn btn-sm btn-flat btn-danger" data-toggle="tooltip" title="Excluir">
                                    <i class="fa fa-trash"></i>
                                </button>  
                                @endif 

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