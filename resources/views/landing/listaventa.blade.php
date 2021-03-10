@extends('landing/layout')
@section('body-content')
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Lista de las ventas</h1>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="table">
					<thead class="thead-dark">
						<tr>
							<th>Id</th>
							<th>Fecha</th>
							<th>Total</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>21-01-2021 14:25:36</td>
							<td>165.50</td>
							<td>
								<button type="button" class="btn btn-primary view_factura" cl="" f="?>">Ver</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>



</div>
<!-- /.container-fluid -->

</div>
@endsection