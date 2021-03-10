@extends('landing/layout')
@section('body-content')
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Productos</h1>
		<a href="registro_producto.php" class="btn btn-primary">Nuevo</a>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="table">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th>PRODUCTO</th>
							<th>PRECIO</th>
							<th>STOCK</th>
							<th>ACCIONES</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Polo rojo</td>
							<td>65.00</td>
							<td>20</td>
							<td>
								<a href="#" class="btn btn-primary"><i class='fas fa-audio-description'></i></a>
								<a href="#" class="btn btn-success"><i class='fas fa-edit'></i></a>
								<form action="#" method="post" class="confirmar d-inline">
    								<button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
								</form>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
@endsection