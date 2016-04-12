<a href="/ACI/computers/" title="Voltar"> <span class="glyphicon glyphicon-arrow-left"></span> Voltar</a>
<hr>
<h1>Adicionar Computador</h1>


<?php 
    echo $this->Form->create('Computer',array('action' => 'add')),
    $this->Form->input('name', array('class' => 'form-control' )),
    $this->Form->input('ram', array('class' => 'form-control' )),
    $this->Form->input('hd', array('class' => 'form-control' )),
    $this->Form->input('ip', array('class' => 'form-control', 'label' => 'IP 1' )),
    $this->Form->input('ip2', array('class' => 'form-control', 'label' => 'IP 2' )),
    $this->Form->input('room', array('class' => 'form-control', 'value' => 'Sala Vip 1' )),
    $this->Form->input('status', array('type' => 'radio', 'options' => array('Y' => 'Funcionando &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', 'n' => 'Quebrado ou Desativado'))),  
    $this->Form->end('Cadastrar', array('class' => 'form-control btn btn-primary'));
?>