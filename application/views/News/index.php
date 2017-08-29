<?php 
	foreach ($news as $news_item) { ?>
	<a href=" <?php echo base_url('news/'.$news_item['slug']); ?>">
		<h1> <?php echo $news_item['title'] ?></h1>
	</a>
	
	<p> <?php echo $news_item['text'] ?></p>

	<a href="<?php echo base_url('news/update/'.$news_item['id']); ?>"> Edit</a>
	
	<a href="<?php echo base_url('news/delete/'.$news_item['id']); ?>"> Delete</a>


	<?php } ?>