<?php

// no direct access
defined('_JEXEC') or die;

	echo '<ul class="uk-list-icon-angle-right">';
	foreach ($list as $item) {
		require JModuleHelper::getLayoutPath('mod_lassana_storitve', '_item');
	}
	echo '</ul>';