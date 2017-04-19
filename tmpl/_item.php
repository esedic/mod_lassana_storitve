<?php

// no direct access
defined('_JEXEC') or die;
?>

<li>
	<a href="<?php echo $item->link;?>">
		<?php echo $item->title;?>
	</a>
</li>

<?php echo $item->beforeDisplayContent; ?>