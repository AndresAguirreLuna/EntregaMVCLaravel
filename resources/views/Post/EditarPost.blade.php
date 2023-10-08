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
    <h3>Modificar Post</h3>
</div>
<br>
<form action="{{ route('postUpdate')}}" method="post">
    <main> 
        <div class="row" style="width: 90%; margin: 0px auto; text-align: left">
            <div class="from-group">
            <input type="hidden" name="id" id="id" value='{{ $postEdit->id}}'>
                <label for="name">Id</label>
                <br>
                <input type="text" class="form-control" name="id" id="id" value='{{ $postEdit->id}}'>
                </div>
                <div class="from-group">
                <br>
                <label for="name">Nombre</label>
                <br>
                <input type="text" class="form-control" name="name" id="name" value='{{ $postEdit->name}}'>
                <div class="from-group">
                <br>
                <label for="name">Description</label>
                <br>
                <input type="text" class="form-control" name="description" id="description" value='{{ $postEdit->description}}'>
                </div>
                <div class="from-group">
                <br>
                <label for="name">Status</label>
                <br>
                <input type="text" class="form-control" name="status" id="status" value='{{ $postEdit->status}}'>
                <div class="col s6">
                <br>
                    <button class="btn btn-success btn-sm" type="submit">Modificar</button>
                    </div>
            </div>
            </div>
    </main>
</form>