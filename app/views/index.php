<!doctype html>
<html lang="pt-BR" ng-app="mabApp">
<head>
	<meta charset="UTF-8">
	<title>mab</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/app.css">
</head>
<body>
	<div class="wrapper">
		<input type="text" ng-model="search">
		<div ng-view></div>
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular-route.min.js"></script>
	<script src="js/app.js"></script>
	<script src="js/controllers.js"></script>
</body>
</html>