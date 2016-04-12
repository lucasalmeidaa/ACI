<div class="addB">
  <a href="/ACI/courses/add" title="Adicionar" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Adicionar Curso</a>
</div>
<h1>Cursos</h1>
<table class="table table-striped">
  <tr>
    <th><?php echo $this->Paginator->sort('id', '#ID') ?></th>
    <th><?php echo $this->Paginator->sort('name', 'Nome do Curso') ?></th>
    <th><?php echo $this->Paginator->sort('program', 'Programa') ?></th>
    <th>Ação</th>
  </tr>
  <?php foreach ($courses as $course): ?>
    <tr>
      <td>#<?php echo $course['Course']['id']; ?></td>
      <td><?php echo $course['Course']['name']; ?></td>
      <td><?php echo $course['Course']['program']; ?></td>
      <td><?php echo $this->Html->link('Editar', array('controller' => 'courses', 'action' =>'edit', $course['Course']['id'])); ?> | <?php echo $this->Html->link('Observação', array('controller' => 'courses', 'action' =>'obs', $course['Course']['id'])); ?> | <?php echo $this->Html->link('Deletar', array('controller' => 'courses', 'action' =>'delete', $course['Course']['id']),null,'Deseja excluir o curso #'.$course['Course']['name'].'?'); ?></td>
    </tr>
  <?php endforeach ?>

</table>
<?php echo $this->Paginator->prev('Anterior'); 
    echo " | ";
      echo $this->Paginator->numbers();
    echo " | ";
      echo $this->Paginator->next('Proximo'); ?>