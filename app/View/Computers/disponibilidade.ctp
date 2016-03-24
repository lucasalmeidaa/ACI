<table class="table table-hover">
  <tr>
  	<th><?php echo $this->Paginator->sort('id', '#ID') ?></th>
  	<th><?php echo $this->Paginator->sort('name', 'Nome da Maquina') ?></th>
  	<th>Disponibilidade</th>
  	<th>Ação</th>
  </tr>
  <?php foreach ($computers as $computer): ?>
  	<?php if ($computer['Computer']['status'] == 'Y'): ?>
  		<?php if ($computer['Computer']['name'] != 'Secretaria' && $computer['Computer']['name'] != 'Gerencia') : ?>
  			
  		
  	<tr <?php if ($computer['Computer']['disponivel'] == "S") {
      echo 'class="success"';
    } elseif ($computer['Computer']['disponivel'] == 'n') {
      echo 'class="danger"';
    } ?>>
  		<td>#<?php echo $computer['Computer']['id']; ?></td>
  		<td><?php echo $computer['Computer']['name']; ?></td>
  		<td><?php  if ($computer['Computer']['disponivel'] == 'S') {
  			echo("Disponivel");
  			$btn = "Marcar como Ocupado";
  		} else { 
  			echo "Ocupado";
  			$btn = "Marcar como Livre";
  		} ?></td>
  		<td><?php echo $this->Html->link($btn, array('controller' => 'computers', 'action' =>'toggle', $computer['Computer']['id'])); ?></td>
  	</tr>
  		<?php endif ?>
  	<?php endif ?>
  <?php endforeach ?>

</table>
<?php echo $this->Paginator->prev('Anterior'); 
	  echo " | ";
      echo $this->Paginator->numbers();
	  echo " | ";
      echo $this->Paginator->next('Proximo'); ?>