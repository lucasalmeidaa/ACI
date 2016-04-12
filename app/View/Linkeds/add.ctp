<a href="/ACI/linkeds/" title="Voltar"> <span class="glyphicon glyphicon-arrow-left"></span> Voltar</a>
<hr>


<?php 
    echo $this->Form->create('Linked',array('action' => 'add')),

    $this->Form->input('computer_id', array('options' => $computers, 'empty' => 'Selecione um Computador', 'class' => 'form-control', 'label' => 'Computador' )),
    $this->Form->input('course_id', array('options' => $courses, 'empty' => 'Selecione um Curso', 'class' => 'form-control', 'label' => 'Curso' )),
    $this->Form->end('Cadastrar', array('class' => 'form-control btn btn-primary'));
?>