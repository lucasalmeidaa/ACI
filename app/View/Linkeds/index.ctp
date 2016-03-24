<div class="addB">
	<a href="http://127.0.0.1/ACI/linkeds/add" title="Adicionar" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Adicionar Vinculos</a>
</div>
<h1>Vinculos</h1>
<table class="table table-striped">
  <tr>
  	<th><?php echo $this->Paginator->sort('id', '#ID') ?></th>
  	<th>Nome do curso</th>
  	<th>Nome da Maquina</th>
  	<th>Ação</th>
  </tr>
  <?php foreach ($linkeds as $linked): ?>
  	<tr>
  		<td>#<?php echo $linked['Linked']['id']; ?></td>
  		<td><?php echo $linked['Computer']['name']; ?></td>
  		<td><?php echo $linked['Course']['name']; ?></td>
  		<td><?php echo $this->Html->link('Deletar', array('controller' => 'linkeds', 'action' =>'delete', $linked['Linked']['id']),null,'Deseja excluir o vinculo #'.$linked['Linked']['id'].'?'); ?></td>
  	</tr>
  <?php endforeach ?>

</table>
<?php echo $this->Paginator->prev('Anterior'); 
    echo " | ";
      echo $this->Paginator->numbers();
    echo " | ";
      echo $this->Paginator->next('Proximo'); ?>