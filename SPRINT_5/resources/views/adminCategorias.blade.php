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
                    <a href="/formAgregarCategoria" class="btn btn-success"> <i class="material-icons">
                        add
                        </i></a>
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
                            <i class="material-icons">
                                create   </i>
                        </a>
                        <a href="" class="btn btn-danger">
                            <i class="material-icons">
                                delete_sweep
                                </i>
                        </a>
                    </td>
                  
                </tr>
            @endforeach
            </tbody>
        </table>

       
        <div class="center">{{ $categorias->links() }}</div>

        <br>
    @endsection
