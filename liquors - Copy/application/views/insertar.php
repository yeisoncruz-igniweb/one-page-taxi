<html>
<head>
<title>Calcular</title>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-xs-12" style="margin-top:50px">
			<?php echo validation_errors(); ?>

			<form class="form-inline" role="form" id="form_add">
			 
			  <div class="form-group">
			    <label  >fecha</label><br>
			    <input name="date" type="date" class="form-control" >
			  </div>
			  <br><br><br>
			  <div class="col-xs-11">
				  <div id="row_1">
				  	<div class="col-xs-12">
					  <div class="form-group">
					    <label  >Producto</label><br>
					    <input type="text" name="producto_1" id="producto_1" class="form-control" placeholder="Producto">
					  </div>
					  <div class="form-group">
					    <label  >Cantidad</label><br>
					    <input type="number" name="cantidad_1" id="cantidad_1"class="form-control" placeholder="Cantidad">
					  </div>

					  <div class="form-group">
					    <label  >Precio Entrada</label><br>
					    <input type="number" name="precio_entrada_1"  id="precio_entrada_1" class="form-control" placeholder="Entrada">
					  </div>

					  <div class="form-group">
					    <label  >Precio Salida</label><br>
					    <input type="number" name="precio_salida_1"  id="precio_salida_1" class="form-control" placeholder="Salida">
					  </div>
					 </div>
					</div>
					

					<div id="content_other_rows">

					</div>
				</div>
				<div class="col-xs-1">
				  <div class="form-group">
				   <span class="glyphicon glyphicon-plus plus" style="" aria-hidden="true" id="plus"></span>
				  </div>
				</div>


			  <br>
			  <button type="submit" class="btn btn-default" style="margin-top:50px">Guardar</button>
			</form>
		</div>
	</div>
</div>
</body>

<script type="text/javascript">
$(document).ready(function(){

	$( ":input" ).focusout(function( event ){
		$(this).attr('value', $(this).val() );
	});

	var count_rows = 1;

	$('#plus').click(function(){
		count_rows ++;
		var one_more = $('#row_1').html(),

			other = $('#content_other_rows').html();

			new_row = '<div class="col-xs-12">'+

							'<div class="form-group">'+
							'<input type="text" name="producto_'+count_rows+'" id="producto_'+count_rows+'" class="form-control" placeholder="Producto">'+
							'</div>'+

							'<div class="form-group">'+
							'<input type="number" name="cantidad_'+count_rows+'" id="cantidad_'+count_rows+'" class="form-control" placeholder="Cantidad">'+
							'</div>'+

							'<div class="form-group">'+
							'<input type="number" name="precio_entrada_'+count_rows+'" id="precio_entrada_'+count_rows+'" class="form-control" placeholder="Entrada">'+
							'</div>'+

							'<div class="form-group">'+
							'<input type="number" name="precio_salida_'+count_rows+'" id="precio_salida_'+count_rows+'" class="form-control" placeholder="Salida">'+
							'</div>'+

						'</div>';
			$('#content_other_rows').html( other +  new_row );		
		
	});

});
</script>
<style type="text/css">
.other_row{
	border: solid 1px #000;
	overflow: hidden;
}
#content_other_rows .col-xs-12 label{
	display: none;
}
#content_other_rows .col-xs-12{
	margin-top: 10px;
}
#row_1{
	width: 100%;
	float: left;
}
.plus{
	float: left;
    margin-top: 20px;
    font-size: 20px;
    cursor: pointer;
    padding: 5px;
}
</style>
</html>