<?php 
mb_internal_encoding('UTF-8');
function connect(){
	$bdd = new PDO('mysql:host=localhost;dbname=dicoapi', 'root', 'root');
	return $bdd;
}

function executer($requete){
	$bdd = connect();
	$stmt = $dbh->exec($requete);
	$bdd = null;
}

function select($requete){
	$bdd = connect();
	$select = $bdd->query($requete);
  $obj=$select->fetchAll(PDO::FETCH_OBJ);
	$bdd = null;
	return $obj;
}

function affPointArticulation($id){
    $pointArticulation = select('SELECT point FROM pointArticulation WHERE id='.$id);
  if ($pointArticulation==NULL) {
    echo("NULL");
  }
  else {
    echo ($pointArticulation[0]->point);
  }
}

function affAperture($id){
  $aperture = select('SELECT aperture FROM aperture WHERE id='.$id);
  if ($aperture==NULL) {
    echo("NULL");
  }
  else {
    echo ($aperture[0]->aperture);
  }
}

function affArrondie($arr){
  if ($arr==0) {
    echo "Non-arrondie";
  }
  else{
    echo "Arrondie";
  }
}

function creerModal($voyelle){
?>
<div class="modal fade" id=<?php echo($voyelle->id);?> tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title"><?php echo($voyelle->phoneme); ?>
          <audio src=<?php echo("audio/".$voyelle->id.".mp3");?> id=<?php echo("listen".$voyelle->id);?>></audio>
          <button class="btn btn-default" onclick=<?php echo("document.getElementById('listen".$voyelle->id."').play()"); ?>>
            <span class="glyphicon glyphicon-volume-up"></span>
          </button>  
        </h3>
      </div>
      <div class="modal-body">
        <table class="table table-striped table-bordered">

          <tr>
            <th>Arrondi</th>
            <th>Aperture</th>
            <th>Point d'articulation</th>
          </tr>
          <tr>
            <td><?php affArrondie($voyelle->arrondie); ?></td>
            <td><?php affAperture($voyelle->aperture); ?></td>
            <td><?php affPointArticulation($voyelle->pointArticulation); ?></td>
          </tr>
          
        </table>

        <div>
          <h3>Plus d'infos...
            <?php echo("<button class=\"btn btn-default pull-right btn-sm see-more\" data-target-id=\"".$voyelle->id."\">"); ?>
              <span class="glyphicon glyphicon-chevron-down"></span>
            </button> 
          </h3>
          <?php echo("<div class=\"more-info ".$voyelle->id."\">"); ?>
            <table class="table table-striped table-bordered">
              <tr>
                <th>Received Pronunciation</th>
                <th>General American</th>
              </tr>
              <tr>
                <td>
                  <?php echo($voyelle->motRP); ?>
                   <audio src=<?php echo("audio/".$voyelle->id."motRP.mp3");?> id=<?php echo("listen".$voyelle->id."motRP");?>></audio>
                  <button class="btn btn-default pull-right btn-sm" 
                          onclick=<?php echo("document.getElementById('listen".$voyelle->id."motRP').play()"); ?>>
                    <span class="glyphicon glyphicon-volume-up"></span>
                  </button>          
                </td>
                <td>
                  <?php echo($voyelle->motGA); ?>
                  <audio src=<?php echo("audio/".$voyelle->id."motGA.mp3");?> id=<?php echo("listen".$voyelle->id."motGA");?>></audio>
                  <button class="btn btn-default pull-right btn-sm"
                          onclick=<?php echo("document.getElementById('listen".$voyelle->id."motGA').play()"); ?>>
                    <span class="glyphicon glyphicon-volume-up"></span>
                  </button>  
                </td>
              </tr>
              <tr>
                <td><?php echo($voyelle->phraseRP); ?></td>
                <td><?php echo($voyelle->phraseGA); ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --><?php 

}
?>