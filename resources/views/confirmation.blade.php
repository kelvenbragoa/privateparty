<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Inogest MassMeters, sistema de gestão">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="gestão, management, erp, human resource, inogest, inovatis, tecnologia, mozambique">

	<link rel="shortcut icon" href="storage/img/sys/logoinogesticon.png" />

	<title>Inogest</title>

	<link href="{{asset('template2/css/app.css')}}" rel="stylesheet">
</head>
<body style="background-image: url('storage/img/sys/party.jpg'); height: 100%; 
background-position: center;
background-repeat: no-repeat;
background-size: cover;">

	

	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
						<div class="card">
							@if ($guest != null)
							<div class="text-center mt-4">
								<h1 class="h2">Abaixo seus dados para</h1>
								<h1 class="h2">Festa privada</h1>
								<p class="lead">
									Códgio: {{$guest->code}}
								</p>
								<p class="lead">
									Nome: {{$guest->name}}
								</p>
								<p class="lead">
									Mobile: {{$guest->mobile}}
								</p>
							</div>
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<div class="visible-print text-center">
											{!! QrCode::style('round')->eye('circle')->eyeColor(0, 200, 100, 255, 0, 0, 0)->size(200)->generate('guest/'.$guest->code); !!}
											<p>Scan me please &#x1F60E; .</p>
										</div>
									</div>
									
								</div>
								<div class="text-center">
									<small>Grave a imagem para apresentar na entrada.</small>
								</div>
							</div>
							@else
							<div class="text-center mt-4">
								<h1 class="h2">O seu código não é válido para esta festa. Verifique e tente novamente.</h1>
								<span style='font-size:100px;'>&#129298;</span>

							</div>
							@endif
							
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="{{asset('template2/js/app.js')}}"></script>

</body>

</html>


