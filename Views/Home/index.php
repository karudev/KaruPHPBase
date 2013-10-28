
<div class="row"><button data-toggle="modal" data-target="#modal_establishment" href="javascript:void(0)" class="btn btn-primary">Nouvel Etablissement</button></div>
<div id="list_establishment"><?php echo  file_get_contents(URL_BASE.'/establishment/showAll'); ?></div>
<?php echo file_get_contents(URL_BASE.'/establishment/addEdit'); ?>