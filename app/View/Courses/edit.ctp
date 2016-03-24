<a href="http://127.0.0.1/ACI/computers/" title="Voltar"> <span class="glyphicon glyphicon-arrow-left"></span> Voltar</a>
<hr>
<h1>Editar Curso</h1>


<?php 
    echo $this->Form->create('Course',array('action' => 'edit')),    
    $this->Form->input('id',array('type' => 'hidden')),
    $this->Form->input('name', array('class' => 'form-control', 'label' => 'Nome' )),
    $this->Form->input('program', array('class' => 'form-control', 'label' => 'Programa' )),  
    $this->Form->end('Atualizar', array('class' => 'form-control btn btn-primary'));
?>