
<!DOCTYPE html>
<html lang="en" ng-app="app">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{asset('bower_resources/angular-loading-bar/build/loading-bar.min.css')}}"/>

    <title>Eletrônica Franzé</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('bower_resources/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style type="text/css">
		body {
		  padding-top: 50px;
		  background: url('../../imgs/retina_wood.png') repeat;
		}
		.starter-template {
		  padding: 40px 15px;
		  text-align: center;
		}
		.panel-body{
			margin-top:10px;
			padding:10px;
			border-radius: 2px;
			background: white;
		}
    </style>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Eletrônica Franzé</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Início</a></li>
            <li><a href="/#/customers/">Clientes</a></li>
            <li><a href="/#/appliances">Aparelhos</a></li>
            <li><a href="/#/components">Peças</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      @yield('content')

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="{{asset('bower_resources/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bower_resources/angular/angular.min.js')}}"></script>
    <script src="{{asset('bower_resources/angular-route/angular-route.min.js')}}"></script>
    <script src="{{asset('bower_resources/angular-resource/angular-resource.min.js')}}"></script>
    <script src="{{asset('bower_resources/angular-loading-bar/build/loading-bar.min.js')}}"></script>
    <script src="{{asset('bower_resources/angular-animate/angular-animate.min.js')}}"></script>
    
    <script src="{{asset('js/app.js')}}"></script>
    
  </body>
</html>
