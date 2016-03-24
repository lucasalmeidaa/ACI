<a href="http://127.0.0.1/ACI/computers/" title="Voltar"> <span class="glyphicon glyphicon-arrow-left"></span> Voltar</a>
<hr>
<h1>Observação do Curso</h1>


<?php 
    echo $this->Form->create('Course',array('action' => 'edit')),    
    $this->Form->input('id',array('type' => 'hidden')),
    $this->Form->input('obs', array('label' => '' ,'class' => 'form-control', 'rows' => '20' )),
    $this->Form->end('Atualizar', array('class' => 'form-control btn btn-primary'));
?>