<a href="/ACI/notes/" title="Voltar"> <span class="glyphicon glyphicon-arrow-left"></span> Voltar</a>
<hr>
<h1>Notas</h1>

<?php 
    echo $this->Form->create('Note',array('action' => 'edit')),    
    $this->Form->input('id',array('type' => 'hidden')),
    $this->Form->input('note', array('label' => '' ,'class' => 'form-control', 'rows' => '20' )),
    $this->Form->end('Atualizar', array('class' => 'form-control btn btn-primary'));
?>