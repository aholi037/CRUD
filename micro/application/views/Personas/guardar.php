<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>





	<?php echo form_open(); ?>
	<div class="container">


							<div id="bind-attribute">

</div>


		


		<!-- el input que recibirá el título del concepto -->
		<div class="form-group">
			<?php 
			echo form_label('Título del concepto', 'titulo');
				$input = array('name' => 'titulo', 
					'value'=>$titulo_concepto,
					'class'=>'form-control input-lg'
			);

				echo form_input($input);
			 ?>
		</div>

<!-- el input que recibirá el Concepto como tal-->
		<div class="form-group">
			<?php 
			echo form_label('Definición', 'concepto');
				$input = array('name' => 'concepto', 
					'value'=>$descripcion_concepto,
					'class'=>'form-control input-lg'
			);

				echo form_input($input);
			 ?>
		</div>

				<?php echo form_submit('submit', 'Enviar', "class='btn btn-primary'"); ?>
	</div>	
	<?php echo form_close(); ?>




<script>
	

const AttributeBinding = {
  data() {
    return {
      message: 'You loaded this page on ' + new Date().toLocaleString()
    }
  }
}

Vue.createApp(AttributeBinding).mount('#bind-attribute')

</script>

	
</body>
</html>