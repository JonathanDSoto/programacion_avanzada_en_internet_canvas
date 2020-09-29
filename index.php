<!DOCTYPE html>
<html>
<head>
	<title>
		Bootstrap
	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
	<style type="text/css">
		/* Footer */
		@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		section {
		    padding: 60px 0;
		}

		section .section-title {
		    text-align: center;
		    color: #007b5e;
		    margin-bottom: 50px;
		    text-transform: uppercase;
		}
		#footer {
		    background: #007b5e !important;
		}
		#footer h5{
			padding-left: 10px;
		    border-left: 3px solid #eeeeee;
		    padding-bottom: 6px;
		    margin-bottom: 20px;
		    color:#ffffff;
		}
		#footer a {
		    color: #ffffff;
		    text-decoration: none !important;
		    background-color: transparent;
		    -webkit-text-decoration-skip: objects;
		}
		#footer ul.social li{
			padding: 3px 0;
		}
		#footer ul.social li a i {
		    margin-right: 5px;
			font-size:25px;
			-webkit-transition: .5s all ease;
			-moz-transition: .5s all ease;
			transition: .5s all ease;
		}
		#footer ul.social li:hover a i {
			font-size:30px;
			margin-top:-10px;
		}
		#footer ul.social li a,
		#footer ul.quick-links li a{
			color:#ffffff;
		}
		#footer ul.social li a:hover{
			color:#eeeeee;
		}
		#footer ul.quick-links li{
			padding: 3px 0;
			-webkit-transition: .5s all ease;
			-moz-transition: .5s all ease;
			transition: .5s all ease;
		}
		#footer ul.quick-links li:hover{
			padding: 3px 0;
			margin-left:5px;
			font-weight:700;
		}
		#footer ul.quick-links li a i{
			margin-right: 5px;
		}
		#footer ul.quick-links li:hover a i {
		    font-weight: 700;
		}

		@media (max-width:767px){
			#footer h5 {
		    padding-left: 0;
		    border-left: transparent;
		    padding-bottom: 0px;
		    margin-bottom: 10px;
		}
		}

	</style>
</head>
<body>

	<div class="container">

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="#">
		  	Guacamole
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">
		        	Dashboard 
		        	<span class="sm-only">(current)</span>
		        </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">
		        	Usuarios
		        </a>
		      </li> 
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Escribe aquí" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
		      	Buscar
		      </button>
		    </form>
		  </div>
		</nav>

		<nav aria-label="breadcrumb ">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item active" aria-current="page">Home</li>
		  </ol>
		</nav>

		<?php if (isset($_POST['name'])): ?>
		<div class="alert alert-danger" role="alert">
		  A simple danger alert—check it out!
		</div>
		<?php endif ?> 

		<div class="row mt-5 ">
			
			<div class="col"> 
			
				<div class="card">
				  <div class="card-header">
				    
				    Tabla de usuarios registrados

				    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
				    	Añadir usuario
				    </button>

				  </div>
				  <div class="card-body"> 
				  	<table class="table table-bordered table-striped">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">First</th>
					      <th scope="col">Last</th>
					      <th scope="col">Last</th>
					      <th scope="col">Handle</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>Mark</td>
					      <td>Otto</td>
					      <td>
					      	<span class="badge badge-success">
					      		ACTIVO
					      	</span>
					      </td>
					      <td>
					      	<div class="btn-group" role="group">
							    <button id="btnGroupDrop1" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							      Acciones
							    </button>
							    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
							      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">
							      	<i class="fa fa-pencil"></i> Editar
							      </a>
							      <a class="dropdown-item" onclick="remove(1)" >
							      	<i class="fa fa-trash"></i> Eliminar
							      </a>
							    </div>
							  </div>
					      </td>
					    </tr> 
					  </tbody>
					</table> 
				  </div>
				</div>

			</div>

		</div> 

		<section id="footer" class="mt-5">
			<div class="container"> 
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white"> 
						<p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
					</div>
					<hr>
				</div>	
			</div>
		</section>
		<!-- ./Footer -->


	</div>

	<div class="container">
		
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">

	      	<div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">
		        	Agregar usuario
		        </h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        	<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>

	      	<form action="" method="POST" onsubmit="return validateForm(this)">

			    <div class="modal-body">
			    	<div class="container"> 
			        
				        <!-- NOMBRE -->
						<div class="form-group row">
						    <label for="name" class="col-sm-3 col-form-label">
						    	Nombre
						    </label>
						    <div class="col-sm-9">
						    	<div class="input-group mb-3">
								  <div class="input-group-prepend">
								    <span class="input-group-text" id="basic-addon1">
								    	<i class="fa fa-user"></i>
								    </span>
								  </div>
								  <input type="text" class="form-control" id="name" required="" placeholder="Jhon">
								</div> 
						    </div>
						</div>

						<!-- APELLIDO -->
						<div class="form-group row">
						    <label for="lastname" class="col-sm-3 col-form-label">
						    	Apellidos
						    </label>
						    <div class="col-sm-9">
						    	<div class="input-group mb-3">
								  <div class="input-group-prepend">
								    <span class="input-group-text" id="basic-addon1">
								    	<i class="fa fa-user"></i>
								    </span>
								  </div>
								  <input type="text" class="form-control" id="lastname" required="" placeholder="Doe">
								</div> 
						    </div>
						</div>

						<!-- EMAIL -->
						<div class="form-group row">
						    <label for="email" class="col-sm-3 col-form-label">
						    	Correo electrónico
						    </label>
						    <div class="col-sm-9">
						    	<div class="input-group mb-3">
								  <div class="input-group-prepend">
								    <span class="input-group-text" id="basic-addon1">
								    	<i class="fa fa-envelope"></i>
								    </span>
								  </div>
								  <input type="email" class="form-control" id="email" required="" placeholder="Doe">
								</div> 
						    </div>
						</div>

						<!-- CONTRASEÑA -->
						<div class="form-group row">
						    <label for="password" class="col-sm-3 col-form-label">
						    	Contraseña
						    </label>
						    <div class="col-sm-9">
						    	<div class="input-group mb-3">
								  <div class="input-group-prepend">
								    <span class="input-group-text" id="basic-addon1">
								    	<i class="fa fa-lock"></i>
								    </span>
								  </div>
								  <input type="password" class="form-control" id="password" required="" placeholder="Doe">
								</div> 
						    </div>
						</div>

						<!-- C CONTRASEÑA -->
						<div class="form-group row">
						    <label for="password2" class="col-sm-3 col-form-label">
						    	Repetir contraseña
						    </label>
						    <div class="col-sm-9">
						    	<div class="input-group mb-3">
								  <div class="input-group-prepend">
								    <span class="input-group-text" id="basic-addon1">
								    	<i class="fa fa-lock"></i>
								    </span>
								  </div>
								  <input type="password" class="form-control" id="password2" required="" placeholder="Doe">
								</div> 
						    </div>
						</div>

					</div>
			    </div>

		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-secondary" data-dismiss="modal">
		        		Cerrar
		        	</button>
		        	<button type="submit" class="btn btn-primary">
		        		Guardar
		        	</button>
		      	</div>

	      	</form>

	    </div>
	  </div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
	<script type="text/javascript">
		function validateForm(target) { 
			if ($("#password").val() == $("#password2").val()) {
				return true;
			}
			return false;
		}
		function remove(id)
		{
			swal({
			  title: "",
			  text: "¿Desea eliminar el usuario?",
			  icon: "warning",
			  buttons: true,
			  dangerMode: true,
			})
			.then((willDelete) => {
			  if (willDelete) {
			    swal("Poof! Your imaginary file has been deleted!", {
			      icon: "success",
			    });
			  } else {
			    swal("Your imaginary file is safe!");
			  }
			});
		}
	</script>
</body>
</html>