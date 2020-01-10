<?php
include 'read.php';

$out = json_decode($data, true);

	// echo $out['data'][0]['category_name'];
?>
<ul>
	<?php 

		foreach ($out['data'] as $data_tab) { ?>
			<li>ID: <?php echo $data_tab['id']; ?></li>
			<li>TITLE: <?php echo $data_tab['title']; ?></li>
			<li>BODY: <?php echo $data_tab['body']; ?></li>
			<li>AUTHOR: <?php echo $data_tab['author']; ?></li>
			<li>CATEGORY_ID: <?php echo $data_tab['category_id']; ?></li>
			<li>CATEGORY_NAME: <?php echo $data_tab['category_name']; ?></li>

	<?php } ?>
</ul>


