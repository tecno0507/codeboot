<div class="modal-header">
	<h3>Log in</h3>
	<p>Por Favor introduzca sus credenciales</p>
</div>
<div class="modal-body">
<?php echo validation_errors(); ?>
<?php echo form_open();?>
<table class="table">
	<tr>
		<td>Correo</td>
		<td><?php echo form_input('email'); ?></td>
	</tr>
	<tr>
		<td>Contraseña</td>
		<td><?php echo form_password('password'); ?></td>
	</tr>
	<tr>
		<td></td>
		<td><?php echo form_submit('submit', 'Ingresar', 'class="btn btn-primary"'); ?></td>
	</tr>
</table>
<?php echo form_close();?>
</div>