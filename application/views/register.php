<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title;?></title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<form action="" method="post">

	Team Name:<br>
	<?php echo form_error('teamname', '<font color="red">', '</font><br>');?>
	<input type="text" name="teamname" value="<?php echo set_value('teamname');?>"><br>

	Division:<br>
	<?php echo form_error('division', '<font color="red">', '</font><br>');?>
	<select name="division">
		<option value="men" <?php if(isset($_POST['division'])) echo $_POST['division'] == 'men' ? 'selected' : '';?>>Men</option>
		<option value="women" <?php if(isset($_POST['division'])) echo $_POST['division'] == 'women' ? 'selected' : '';?>>Women</option>
		<option value="coed" <?php if(isset($_POST['division'])) echo $_POST['division'] == 'coed' ? 'selected' : '';?>>Co-Ed</option>
	</select><br>

	Address:<br>
	<?php echo form_error('address', '<font color="red">', '</font><br>');?>
	<textarea name="address" rows="3"><?php echo set_value('address');?></textarea><br>

	Landline:<br>
	<?php echo form_error('landline', '<font color="red">', '</font><br>');?>
	<input type="text" name="landline" value="<?php echo set_value('landline');?>"><br>

	Mobile:<br>
	<?php echo form_error('mobile', '<font color="red">', '</font><br>');?>
	<input type="text" name="mobile" value="<?php echo set_value('mobile');?>"><br>

	Email:<br>
	<?php echo form_error('email', '<font color="red">', '</font><br>');?>
	<input type="email" name="email" value="<?php echo set_value('email');?>"><br><br><br>

	Coach Name:<br>
	<?php echo form_error('teamcoach', '<font color="red">', '</font><br>');?>
	<input type="text" name="teamcoach" value="<?php echo set_value('teamcoach');?>"><br>

	Coach Email:<br>
	<?php echo form_error('coachemail', '<font color="red">', '</font><br>');?>
	<input type="email" name="coachemail" value="<?php echo set_value('coachemail');?>"><br>

	Coach Contact Number:<br>
	<?php echo form_error('coachcontact', '<font color="red">', '</font><br>');?>
	<input type="text" name="coachcontact" value="<?php echo set_value('coachcontact');?>"><br><br><br>

	Team Captain #1:<br>
	<?php
	for ($h=0; $h < 2; $h++) { 
		echo form_error('teamcaptain['.$h.']', '<font color="red">', '</font><br>');
		?>
		<input type="text" name="teamcaptain[]" value="<?php if(isset($_POST['teamcaptain'][$h])) echo $_POST['teamcaptain'][$h];?>">
		<input type="text" name="teamcaptaincontact[]" value="<?php if(isset($_POST['teamcaptaincontact'][$h])) echo $_POST['teamcaptaincontact'][$h];?>">
		<input type="email" name="teamcaptainemail[]" value="<?php if(isset($_POST['teamcaptainemail'][$h])) echo $_POST['teamcaptainemail'][$h];?>"><br>
		<?php
	}
	?>
	<br><br>
	
	Players(9-14)<br><br>
	<?php
	for ($i=0; $i < 14; $i++) { 
		echo form_error('playername['.$i.']', '<font color="red">', '</font><br>');
		echo form_error('contact['.$i.']', '<font color="red">', '</font><br>');
		echo form_error('playeremail['.$i.']', '<font color="red">', '</font><br>');
		?>
		<input type="text" name="playername[]" value="<?php if(isset($_POST['playername'][$i])) echo $_POST['playername'][$i];?>">
		<input type="text" name="contact[]" value="<?php if(isset($_POST['contact'][$i])) echo $_POST['contact'][$i];?>">
		<input type="email" name="playeremail[]" value="<?php if(isset($_POST['playeremail'][$i])) echo $_POST['playeremail'][$i];?>"><br><br>
		<?php
	}
	?>
	<?php if(isset($error)) echo "<font color='red'>".$error."</font>";?>
	<div class="g-recaptcha" data-sitekey="6LdJjBoTAAAAAIn_TXawLDoU-aeJ490ANwTqu0zG"></div>
	<input type="submit" name="Register Now">
</form>

<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/js/jqueryui.js"></script>
<script src="<?php echo base_url();?>assets/js/script.js"></script>
</body>
</html>