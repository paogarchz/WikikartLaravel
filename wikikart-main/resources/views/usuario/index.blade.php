@extends('layouts.app')
@section('content')

<div class="container">

@if(Session::has('mensaje'))
{{ Session::get('mensaje')}}


@endif
<a href="{{ url('usuario/create') }}" class="btn btn-danger" >Registrar nuevo miembro</a>
<p>ㅤ</p>
<table class="table table-dark">

    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Usuario en Mario Kart</th>
            <th>Personaje favorito</th>
            <th>Codigo amigo switch</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->usuario }}</td>
            <td>{{ $usuario->personaje }}</td>
            <td>{{ $usuario->codigo }}</td>
            <td>

            <a href="{{ url('/usuario/'.$usuario->id.'/edit') }}" class="btn btn-info" >
                    Editar
            </a>
          |

            <form action="{{ url('/usuario/'.$usuario->id) }}" class="d-inline" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input class="btn btn-success" type="submit" onclick="return confirm('¿Quieres borrar?')"
             value="Borrar">

            </form>



            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{!! $usuarios->links() !!}
</div>
@endsection
