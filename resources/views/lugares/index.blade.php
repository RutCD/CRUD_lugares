<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Lista de lugares</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Lista de lugares</h2>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>lugares</th>
<th>Nombre</th>
<th>Costo</th>
<th>Horario</th>
<th>Categoria</th>
</tr>
@foreach ($lugares as $lugar)
<tr>
<td>{{ $lugar->id }}</td>
<td>{{ $lugar->nombre }}</td>
<td>{{ $lugar->costo }}</td>
<td>{{ $lugar->horario }}</td>
<td>{{ $lugar->categoria }}</td>

<td>
<form action="{{ route('lugares.destroy',$lugar->id) }}" method="Post">
<a class="btn btn-primary mb-2" href="{{ route('lugares.edit',$lugar->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger mb-2">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
<div class="pull-right mb-2">
    <a class="btn btn-success" href="{{ route('lugares.create') }}"> Create lugares</a>
    </div>
</body>
</html>