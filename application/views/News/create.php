<?php 
	echo validation_errors();
 ?>

 <?php echo form_open('news/create'); ?>

 	<label for="title">Judul</label>
 	<input type="text" name="title"><br>


 	<label for="title">Text</label>
 	<textarea type="text" name="text" row="8" cols="40"></textarea><br>

 	<input type="submit" name="submit" value="submit">


 <?php echo form_close(); ?>