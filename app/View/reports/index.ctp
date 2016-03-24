<div class="addB">
</div>
<h1>Computadores</h1>
<table class="table table-striped">
  <tr>
  	<th><?php echo $this->Paginator->sort('id', '#ID') ?></th>
  	<th><?php echo $this->Paginator->sort('created', 'Relatório do dia') ?></th>
  	<th><?php echo $this->Paginator->sort('type', 'Tipo') ?></th>
  	<th>Ação</th>
  </tr>
  <?php foreach ($reports as $report): ?>
  	<tr>
  		<td>#<?php echo $report['Report']['id']; ?></td>
  		<td><?php echo $report['Report']['created']; ?></td>
  		<td><?php echo $report['Report']['type']; ?></td>
  	</tr>
  <?php endforeach ?>

</table>
<?php echo $this->Paginator->prev('Anterior'); 
    echo " | ";
      echo $this->Paginator->numbers();
    echo " | ";
      echo $this->Paginator->next('Proximo'); ?>