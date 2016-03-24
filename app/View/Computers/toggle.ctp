<h1>Deseja realmente mudar a disponibilidade dessa maquina?</h1>


<?php 
    echo $this->Form->create('Computer',array('action' => 'toggle')),    
    $this->Form->input('id',array('type' => 'hidden')),
    $this->Form->input('disponivel', array('type' => 'radio', 'options' => array('S' => 'Disponivel'))),  
    $this->Form->input('disponivel', array('type' => 'radio', 'options' => array('n' => 'Indisponivel'))),	
    $this->Form->end('Atualizar', array('class' => 'form-control btn btn-primary'));
?>