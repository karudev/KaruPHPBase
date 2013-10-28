  <form action="../establishment/addEdit" method="post">

  <div class="modal fade" id="modal_establishment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Modification de l'établissement</h4>
        </div>
        <div class="modal-body">
       
<div class="form-group">
    <input class="form-control" required name="establishment[label]" placeholder="Nom" type="text" />
</div>
 <div class="form-group">
<textarea class="form-control" name="establishment[description]" placeholder="Description"></textarea>
</div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-success">Enregistrer</button>
        </div>
      </div>
    </div>
  </div> 
  </form>