<?php 
		foreach ($notes as $note):
	?>
<div class="addB">
	<?php echo $this->Html->link(' Editar', array('controller' => 'notes', 'action' =>'edit', $note['Note']['id']) , array('class' => 'glyphicon glyphicon-pencil btn btn-primary')); ?> 
</div>
<h1>Notas</h1>


<?php 
    	echo $note['Note']['note'];
?>

<?php endforeach; ?>