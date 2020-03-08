@extends('layout.plantilla')

    @section('title', 'Panel de Productos')

    @section('h1', 'Panel de Productos')

    @section('main')

        <table class="table table-hover table-striped table-bordered">
            <thead class="bg-info">
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Marca</th>
                <th>Categoria</th>
                <th>Presentacion</th>
                <th>Stock</th>
                <th>Imagen</th>
                <th>
                    <a href="/formAgregarProducto" class="btn btn-success">
                        
                        <i class="material-icons">
                            add
                            </i>
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
        @foreach( $productos as $producto )
            <tr>
                <td>{{ $producto->prdNombre }}</td>
                <td>{{ $producto->prdPrecio }}</td>
                <td>{{ $producto->getMarca->mkNombre }}</td>
                <td>{{ $producto->getCategoria->catNombre }}</td>
                <td>{{ $producto->Presentacion }}</td>
                <td>{{ $producto->prdStock }}</td>
                <td><img src="{{ asset('images/productos') }}/{{ $producto->prdImagen }}" class="img-thumbnail"></td>
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
     <br>   

    @endsection
