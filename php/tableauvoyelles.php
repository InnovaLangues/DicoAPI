<div class="row">
	<button class="btn btn-default" id="selectRP">RP</button>
	<button class="btn btn-default" id="selectGA">GA</button>
	<button class="btn btn-default">Ecouter tout</button>
</div>

<div class="panel panel-default row">
	<div class="panel-heading">
		<h3 class="panel-title">Les voyelles</h3>
	</div>
	<div class="panel-body phonemes-bloc">
		<ul class="phonemes-list">
			
		<?php 
		$phonemes = select('SELECT * FROM voyelle');
		foreach  ($phonemes as $phonemeCourrant) {
			?>
		       <li data-toggle="modal" 
		       	data-target=<?php echo("#".$phonemeCourrant->id); ?> 
		       	id=<?php echo($phonemeCourrant->phoneme); ?>
		       	> 
		       	<?php echo($phonemeCourrant->phoneme); ?>
		       </li> 
	       <?php
				//creerModal($phonemeCourrant);
				}?>
		</ul>
	</div>
</div>
