<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/form.css">
	<script src="/js/form.js"></script>
	<title>WebApp</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    	<a class="navbar-brand" href="/">WebApp</a>
    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    		aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
    	</button>
    	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav mr-auto">
    			<li class="nav-item">
    				<a class="nav-link" href="/components/agenda.php">Agenda</a>
    			</li>
				<li class="nav-item dropdown">
      			  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      			    Base de Datos
      			  </a>
      			  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      			    <a class="dropdown-item" href="/components/probe.php">Probe</a>
      			    <a class="dropdown-item" href="/components/tables.php">Create/Remove Tables</a>
					<a class="dropdown-item" href="/components/search.php">Search in Database</a>
					<a class="dropdown-item" href="/components/write.php">Writing in Table</a>
      			    <div class="dropdown-divider"></div>
      			    <a class="dropdown-item" href="/components/view.php">View Tables</a>
      			  </div>
      			</li>
    		</ul>
    	</div>
    </nav>
	
	<!-- code -->
					
</body>
</html>