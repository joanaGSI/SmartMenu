<!DOCTYPE html>

<html data-ng-app="menuApp">
<head>
	<title>SmartMenu</title>
	<meta charset="utf-8">

	<!--Favicon para todas as plataformas-->
	<link rel="apple-touch-icon" sizes="57x57" href="icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
    <link rel="manifest" href="icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

	<link data-require="bootstrap@*" data-semver="4.0.0-alpha.2" rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css" />
    <script data-require="jquery@*" data-semver="3.0.0" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.js"></script>
    <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script><!-- Tether for Bootstrap --> 
    <script data-require="bootstrap@*" data-semver="4.0.0-alpha.2" src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
    <script data-require="angular.js@*" data-semver="2.0.0" src="https://code.angularjs.org/2.0.0-snapshot/angular2.js"></script>
    <script data-require="angular-route@*" data-semver="1.5.8" src="https://code.angularjs.org/1.5.8/angular-route.js"></script>
    <script data-require="jquery@*" data-semver="3.0.0" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
    <link rel="stylesheet" href="https://bootswatch.com/slate/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.24/angular.min.js"></script>
	<script src="http://bootstrapdocs.com/v3.1.1/docs/dist/js/bootstrap.min.js"></script>
	<script src="http://rawgit.com/obogo/angular-focus-manager/master/build/angular-focusmanager.js"></script>
    <!--<script src= "angular.min.js"></script>-->
    <script src= "script.js"></script>	


</head>

<body data-ng-controller="menuController" data-ng-init="displayData()">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				
				<h1><span class="glyphicon glyphicon-cutlery"></span>SmartMenu</h1>

				<div class="form-group">
			       <input type="text" class="form-control" id="search" placeholder="Pesquisar Entradas" data-ng-model="search"/>
			     </div>

				<table id="myTable" class="table table-striped table-hover">
					 <tr>
			       		<th>Nome</th>
			       		<th>Preço por Dose</th>
			       		<th>Descrição</th>
			     	 </tr>
			     	    <tr data-ng-repeat= "item in entradas | filter: search" >
			            	<td>{{item.nome}}</td>
			           		<td>{{item.preco}}</td>
			            	<td>
			            		<button name="viewdetails" ng-click="ler(item.ref_prato)" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Ler mais</button>
								</div>
			            	</td>
					    </tr>
				</table>

						
						<!--Para aparecer o modal-->
						
						<div class="modal fade bs-example-modal-lg"  focus-group focus-group-head="loop" focus-group-tail="loop" focus-stacktabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
								<div class="modal-content">

								
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h3 class="modal-title" id="modal_title">PRATO</h3>
								  </div>

								  <div class="modal-body" id="modal_body" style="display: flex;" >

								  	  <!--Para a foto-->
									  <div class="modal_foto" id="modal_foto" style="flex: 1; padding: 1em; border: solid;">
										<input type="image" src="imagens/semimg.png">
									  </div>
						    		

						    		  <div class="modal_dados" id="modal_dados" style="flex: 1; padding: 1em; border: solid;">
						    		    <!--Titulo-->
						    			<div class="modal_dadosT" id="modal_dadosT">
						    				<h4>Valores Nutricionais</h4>
						    			</div>
										
						    			<!--Dados Nutricuinais-->
										<div class="modal_dadosVN" id="modal_dadosVN"></div>
									</div>		

								  </div>

								  <div class="modal_mural" id="modal_mural" style="display: flex; border:solid; width: 95%; margin-left: 2.5%; ">
								  		<h3>Comentários</h3>
								  </div>

								  <div class="modal-footer" id="modal_footer">
								    <textarea rows="1" cols="60" style="margin-right: 50%;" placeholder="Digite o seu comentário..."></textarea>
									<button id="textarea" type="button" ng-click="comentar()" class="btn btn-default" focus-element="autofocus" data-dismiss="modal" style="margin-right: -1%; margin-top:-11%;">Comentar</button>
								  </div>

								</div>
							  </div>
						</div>
			</div>
		</div>
	</div>

	

</body>
</html>
