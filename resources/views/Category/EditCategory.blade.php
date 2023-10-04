<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autor</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
    
<div class="row" style="width: 90%; margin: 0px auto; text-align: left" >
    <h1>Modificar Categoria</h1>
</div>
<form action="{{ route('categoriasUpdate')}}" method="post">
    <main> 
        <div class="row" style="width: 90%; margin: 0px auto; text-align: left">
            <div class="from-group">
            <input type="hidden" name="id" id="id" value='{{ $categoriaEdit->id}}'>
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name" id="name" value='{{ $categoriaEdit->name}}'>
                </div>
                <div class="from-group">
                <label for="name">Description</label>
                <input type="text" class="form-control" name="description" id="description" value='{{ $categoriaEdit->description}}'>
                </div>
            <br>
                <div class="col s6">
                    <button class="btn btn-success btn-sm" type="submit">Publicar</button>
                    </div>
            </div>
            </div>
    </main>
</form>
