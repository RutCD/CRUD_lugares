<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Company Form - Laravel 8 CRUD</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h2>Add Company</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('lugares.index') }}"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('lugares.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name:</strong>
<input type="text" name="nombre" class="form-control" placeholder="lugar">
@error('nombre')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

<strong>descripcion:</strong>
<input type="text" name="descripcion" class="form-control" placeholder="descripcion">
@error('descripcion')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

<strong>Como llegar:</strong>
<input type="text" name="como_llegar" class="form-control" placeholder="">
@error('como_llegar')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

<strong>Recomendaciones:</strong>
<input type="text" name="recomendaciones" class="form-control" placeholder="">
@error('recomendaciones')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

<strong>Horario:</strong>
<input type="text" name="horario" class="form-control" placeholder="">
@error('horario')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

<strong>Restricciones:</strong>
<input type="text" name="restricciones" class="form-control" placeholder="">
@error('restricciones')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

<strong>Costo:</strong>
<input type="text" name="costo" class="form-control" placeholder="">
@error('costo')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

<strong>Video:</strong>
<input type="text" name="video" class="form-control" placeholder="">
@error('video')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

<strong>Imagen principal:</strong>
<input type="text" name="imagen_principal" class="form-control" placeholder="">
@error('imagen_principal')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

<strong>Imagen extra:</strong>
<input type="text" name="imagen_extra" class="form-control" placeholder="">
@error('imagen_extra')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

<strong>Cotegorias:</strong>
<input type="text" name="categoria" class="form-control" placeholder="">
@error('categoria')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<button type="submit" class="btn btn-primary ml-3">Submit</button>
</div>
</form>
</body>
</html>