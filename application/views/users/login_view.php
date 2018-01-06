<h2>Login Form</h2>

<?php 
	if($this->session->flashdata('errors')): echo $this->session->flashdata('errors'); endif;
	$attributes = array('id'=>'login_form', 'class'=>'form_horizontal');
	echo form_open('users/login', $attributes);
?>
<div class="form-group">
	<?php
	/*$data se usa para envíar los atributos de una etiqueta form*/
	$data = array(
			'class'=> 'form-control',
			'name'=> 'username',
			'placeholder'=> 'Enter Username',);

		echo form_label('Username'); //Se crea una etiqueta label
		echo form_input($data); //Se envían los atributos del form
	?>
</div>
<div class="form-group">
	<?php
	/*$data se usa para envíar los atributos de una etiqueta form*/
	$data = array(
			'class'=> 'form-control',
			'name'=> 'password',
			'placeholder'=> 'Enter Password',);

		echo form_label('Password'); //Se crea una etiqueta label
		echo form_password($data); //Se envían los atributos del form
	?>
</div>
<div class="form-group">
	<?php
	/*$data se usa para envíar los atributos de una etiqueta form*/
	$data = array(
			'class'=> 'form-control',
			'name'=> 'confirm_password',
			'placeholder'=> 'Confirm Password',);

		echo form_label('Confirm Password'); //Se crea una etiqueta label
		echo form_password($data); //Se envían los atributos del form
	?>
</div>
<div class="form-group">
	<?php
	/*$data se usa para envíar los atributos de una etiqueta form*/
	$data = array(
			'class'=> 'btn btn-primary', //Clase para botones
			'name'=> 'submit',
			'value'=> 'Login',);

		
		echo form_submit($data);
	?>
</div>
<?php
	echo form_close();
?>