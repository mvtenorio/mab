<!doctype html>
<html lang="pt-BR" ng-app="mabApp">
<head>
	<meta charset="UTF-8">
	<title>mab</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="wrapper">
		<div class="row">
			<div class="col-md-4 pull-right">
				<input type="text" ng-model="search" class="form-control" placeholder="Filtrar">
			</div>
		</div>
		<div ng-view></div>
	</div>

	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular-route.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.10.0/ui-bootstrap-tpls.min.js"></script>
	<script src="js/app.js"></script>
	<script src="js/controllers.js"></script>
</body>
</html>