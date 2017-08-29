<?php 
	echo validation_errors();
 ?>

 <?php echo form_open('news/update/'.$news_item['id']); ?>

 	<label for="title">Judul</label>
 	<input type="text" name="title" value=" <?php echo $news_item['title']; ?>"  ><br>


 	<label for="title">Text</label>
 	<textarea type="text" name="text" row="8" cols="40"><?php echo $news_item['text']; ?></textarea><br>

 	<input type="submit" name="submit" value="submit">


 <?php echo form_close(); ?>