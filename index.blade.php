<!Doctype html>
<html lang="en">
	<head>
		<title>Title</title>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>

		<!-- Bootstrap CSS v5.2.1 -->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
			integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

			<link rel="stylesheet" href="{{ asset('assets/styles.css')}}">


	</head>

	<body>
		<section class="vh-100 gradient-custom">
			<div class="container py-5 h-100">
			  <div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-12 col-md-8 col-lg-6 col-xl-5">
				  <div class="card bg-dark text-white" style="border-radius: 1rem;">
					<div class="card-body p-5 text-center">

						<div class="txt-center">
							<img src="https://porcinews.com/wp-content/uploads/2018/06/alltech.png"
							class="logo" style="widh: 185px;" alt="logo">
							<h4 class="titulo" class="mt-1 mb-5 pb-1">Bienvenido a Alltech Serdan</h4>
		                </div>

						<div data-mdb-input-init class="form-outline form-white mb-4">
						  <label class="usuario" class="form-label" for="typeEmailX">Usuario</label>
						  <input type="email" id="typeEmailX" class="form-control form-control-lg" />
						  
						</div>
		  
						<div data-mdb-input-init class="form-outline form-white mb-4">
						  <label class="form-label" for="typePasswordX">Contraseña</label>
						  <input type="password" id="typePasswordX" class="form-control form-control-lg" />
						  
						</div>
		  
						<p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Olvidaste tu contraseña?</a></p>
		  
						<a href="{{ route('documento') }}" class="btn btn-outline-light btn-lg px-5" type="submit">Entrar</a>
		  
					  </div>
		  
					  <div>
					  <p class="mb-0">No tienes cuenta? <a href="{{ route('registro') }}" class="btn btn-outline-light btn-lg px-1">Registrarse</a>

						</p>
					  </div>
		  
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </section>
		<!-- Bootstrap JavaScript Libraries -->
		<script
			src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
			integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
			crossorigin="anonymous"
		></script>

		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
			integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
			crossorigin="anonymous"
		></script>
	</body>
</html>
