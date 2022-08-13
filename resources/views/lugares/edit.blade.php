<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit lugar Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit lugar</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('lugares.index') }}" enctype="multipart/form-data"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('lugares.update',  ['lugar'=> $lugar->id]) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name:</strong>
<input type="text" name="nombre" value="{{ $lugar->nombre }}" class="form-control" placeholder="nombre">
@error('nombre')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

<strong>Descripcion:</strong>
<input type="text" name="descripcion" value="{{ $lugar->descripcion }}" class="form-control" placeholder="descripcion">
@error('descripcion')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

<strong>Como llegar:</strong>
<input type="text" name="como_llegar" value="{{ $lugar->como_llegar }}" class="form-control" placeholder="">
@error('como_llegar')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

<strong>Recomendaciones:</strong>
<input type="text" name="recomendaciones" value="{{ $lugar->recomendaciones }}" class="form-control" placeholder="">
@error('recomendaciones')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

<strong>Horario:</strong>
<input type="text" name="horario" value="{{ $lugar->horario }}" class="form-control" placeholder="">
@error('horario')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

<strong>Restricciones:</strong>
<input type="text" name="restricciones" value="{{ $lugar->restricciones }}" class="form-control" placeholder="">
@error('restricciones')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

<strong>Costo:</strong>
<input type="text" name="costo" value="{{ $lugar->costo }}" class="form-control" placeholder="">
@error('costo')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

<strong>Video:</strong>
<input type="text" name="video" value="{{ $lugar->video }}" class="form-control" placeholder="">
@error('video')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

<strong>imagen_principal:</strong>
<input type="text" name="imagen_principal" value="{{ $lugar->imagen_principal }}" class="form-control" placeholder="">
@error('imagen_principal')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

<strong>imagen_extra:</strong>
<input type="text" name="imagen_extra" value="{{ $lugar->imagen_extra }}" class="form-control" placeholder="">
@error('imagen_extra')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

<strong>Categorias:</strong>
<input type="text" name="categoria" value="{{ $lugar->categoria }}" class="form-control" placeholder="">
@error('categoria')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

</div>
</div>
<button type="submit" class="btn btn-primary ml-3">Submit</button>
</div>
</form>
</div>
</body>
</html>