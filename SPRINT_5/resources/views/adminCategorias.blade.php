@extends('layout.plantilla')

    @section('title', 'Panel de Categorías')

    @section('h1', 'Panel de Categorías')

    @section('main')

        <table class="table table-bordered table-hover table-striped">
            <thead class="bg-info">
            <tr>
                <th>id</th>
                <th>Categoria</th>
                <th colspan="2">
                    <a href="/formAgregarCategoria" class="btn btn-success">Agregar</a>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach( $categorias as $categoria )
                <tr>
                    <td>{{$categoria->idCategoria}}</td>
                    <td>{{$categoria->catNombre}}</td>
                    <td>
                        <a href="" class="btn btn-primary">
                            Modificar
                        </a>
                        <a href="" class="btn btn-danger">
                            Eliminar
                        </a>
                    </td>
                  
                </tr>
            @endforeach
            </tbody>
        </table>

       
        <div class="center">{{ $categorias->links() }}</div>

        <br>
    @endsection
