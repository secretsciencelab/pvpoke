<select class="cup-select">
	<option value="all" cup="all" meta-group500="littlegeneral" meta-group1500="great" meta-group2500="ultra" meta-group10000="master">Open League</option>
	<option value="premierclassic" meta-group2500="ultrapremierclassic" meta-group10000="masterpremierclassic">Premier Classic</option>
	<option value="love" meta-group1500="love">Love Cup</option>
	<option value="johto" meta-group1500="johto">Johto Cup</option>
	<option value="guardian" meta-group1500="guardian">Silph Guardian Cup</option>
	<option value="fusionfactions" meta-group1500="fusion">Silph Factions (Fusion)</option>
	<option value="factions" meta-group1500="factions">Silph Factions (Cave)</option>

	<?php if(strpos($_SERVER['REQUEST_URI'], 'team-builder') !== false): ?>
		<option value="community" cup="cliffhanger">GO Stadium Cliffhanger</option>
	<?php endif; ?>

	<?php if((strpos($_SERVER['REQUEST_URI'], 'battle') !== false)||(strpos($_SERVER['REQUEST_URI'], 'rankings') !== false)): ?>
		<option value="custom" cup="custom">Custom</option>
	<?php endif; ?>

</select>
