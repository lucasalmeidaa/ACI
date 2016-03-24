<a href="http://127.0.0.1/ACI/computers/" title="Voltar"> <span class="glyphicon glyphicon-arrow-left"></span> Voltar</a>
<hr>
<h1>Adicionar Computador</h1>


<?php 
    echo $this->Form->create('Report',array('action' => 'add')),
    $this->Form->input('type', array('class' => 'form-control', 'type' => 'select', 'options' => array(
        Null => 'Escolha uma opção de relatório',
        'maquinas' => 'Relatório de Maquinas',
        'adicionados' => 'Relatório de Adicionados',
        'sistema' => 'Relatório de sistema'
    ) )),
    $this->Form->end('Cadastrar', array('class' => 'form-control btn btn-primary'));
?>