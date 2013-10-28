<?php foreach ($data['establishments'] as $key => $value): ?>
<article>
    <h3><?php echo utf8_encode($value['label']) ?></h3>
    <p><?php 
    if($value['postal_code']!=null or $value['city']!=null  or $value['country']!=null )
            echo $value['postal_code'].', '.$value['city'].' '.$value['country']; 
     ?></p>
    <p><?php echo utf8_encode($value['description']) ?></p>
    <p><a data-toggle="modal" data-target="#modal_establishment" href="javascript:void(0)">Modifier</a> | <a href="">Supprimer</a> </p>
</article>
<?php endforeach; ?>
