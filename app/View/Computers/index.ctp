<div class="addB">
	<a href="http://127.0.0.1/ACI/computers/add" title="Adicionar" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Adicionar Computador</a>
</div>
<h1>Computadores</h1>
<table class="table table-striped">
  <tr>
  	<th><?php echo $this->Paginator->sort('id', '#ID') ?></th>
  	<th><?php echo $this->Paginator->sort('name', 'Nome da Maquina') ?></th>
  	<th><?php echo $this->Paginator->sort('ram', 'RAM') ?></th>
  	<th><?php echo $this->Paginator->sort('hd', 'HDD') ?></th>
  	<th><?php echo $this->Paginator->sort('room', 'Sala') ?></th>
  	<th><?php echo $this->Paginator->sort('ip', 'IP 1') ?></th>
  	<th><?php echo $this->Paginator->sort('status', 'Status') ?></th>
  	<th>Ação</th>
  </tr>
  <?php foreach ($computers as $computer): ?>
  	<tr <?php if ($computer['Computer']['status'] == "Y") {
      echo 'class="success"';
    } elseif ($computer['Computer']['status'] == 'n') {
      echo 'class="danger"';
    } ?>>
  		<td>#<?php echo $computer['Computer']['id']; ?></td>
  		<td><?php echo $computer['Computer']['name']; ?></td>
  		<td><?php echo $computer['Computer']['ram']; ?></td>
  		<td><?php echo $computer['Computer']['hd']; ?></td>
  		<td><?php echo $computer['Computer']['room']; ?></td>
  		<td><?php echo $computer['Computer']['ip']; ?></td>
  		<td><?php 
  				if ($computer['Computer']['status'] == "Y") {
  					echo "Funcionando";
  				} elseif ($computer['Computer']['status'] == 'n') {
  					echo "Quebrado ou Desativado";
  				}?></td>
  		<td><?php echo $this->Html->link('Editar', array('controller' => 'computers', 'action' =>'edit', $computer['Computer']['id'])); ?> | <?php echo $this->Html->link('Observação', array('controller' => 'computers', 'action' =>'obs', $computer['Computer']['id'])); ?> |  <?php echo $this->Html->link('Deletar', array('controller' => 'computers', 'action' =>'delete', $computer['Computer']['id']),null,'Deseja excluir o computador #'.$computer['Computer']['name'].'?'); ?></td>
  	</tr>
  <?php endforeach ?>

</table>
<?php echo $this->Paginator->prev('Anterior'); 
    echo " | ";
      echo $this->Paginator->numbers();
    echo " | ";
      echo $this->Paginator->next('Proximo'); ?>