<a href="/ACI/courses/" title="Voltar"> <span class="glyphicon glyphicon-arrow-left"></span> Voltar</a>
<hr>
<h1>Adicionar Curso</h1>


<?php 
    echo $this->Form->create('Course',array('action' => 'add')),
    $this->Form->input('name', array('class' => 'form-control', 'label' => 'Nome' )),
    $this->Form->input('program', array('class' => 'form-control', 'label' => 'Programa' )),	
    $this->Form->input('obs', array('class' => 'form-control', 'label' => 'Observação' )),	
    $this->Form->end('Cadastrar', array('class' => 'form-control btn btn-primary'));
?>