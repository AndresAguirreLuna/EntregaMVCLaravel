<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
       
    
<div class="container" style="width: 100%;">
                <object data="Layout.html" type="text/html" style="width: 100%;"></object>
        <h3>
            <small class="text-muted">Consulta Categorias</small>
        </h3>
        <a href="{{url('Category/CreateCategory')}}" class="btn btn-success">Nueva Categoria</a>
        <div class="row">
            <div class="col-12 col-sm-12" id="menu">
                    <table class="table table-striped" style="width: 80%; margin: 0px auto; text-align: center">
                    <thead>
                        <tr>
                            <td>
                                <b>Id</b> 
                            </td>
                            <td>
                                <b>Nombre</b> 
                            </td>
                            <td>
                                <b>Descripción</b> 
                            </td>
                            <td>
                                <b>Creación</b> 
                            </td>
                            <td>
                                <b>Actualización</b> 
                            </td> 
                            <td>
                                <b>Editar</b> 
                            </td> 
                            <td>
                                <b>Eliminar</b> 
                            </td> 
                        </tr>
                    </thead>
                <tbody>
                    @foreach ($categories    as $item)
                    <tr>
                        <td>
                            {{ $item->id }}
                        </td>
                        <td>
                            {{ $item->name }}
                        </td>
                        <td>
                            {{ $item->description }}
                        </td>
                        <td>
                            {{ $item->created_at}}
                        </td>
                        <td>
                            {{ $item->updated_at}}
                        </td>
                        <td>
                        <a href="{{url('Category/'.$item->id.'/EditCategory')}}" class="btn btn-warning"><i class="bi bi-pencil-square">...</i></a>
                        </td>
                        <td>
                        <form action="{{ route("categoriasDelete",$item->id)}}" method="post">
                            @method("DELETE")
                            @csrf
                            <button class="btn btn-danger" type="submit"><i class="bi bi-file-earmark-x-fill">...</i></button>
                        </form></td>
                    @endforeach
                
                </tbody>
                </table>
                </div>

                
            </div>
            
        </div>
</body>