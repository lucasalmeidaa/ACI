<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'ACI - Ambiente de Controle do Instrutor');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
<?php echo $this->Html->css('bootstrap.min.css');?>
<?php echo $this->Html->css('dashboard.css');?>
<?php echo $this->Html->css('jquery-te-1.4.0.css');?>
<?php echo $this->Html->script('jquery.js');?>
<?php echo $this->Html->script('jquery-te-1.4.0.min.js');?>
<?php echo $this->Html->script('sc.js');?>
<?php echo $this->Html->script('bootstrap.min.js');?>
<script type="text/javascript">
  $(function(){
    $("textarea").jqte();
  });
</script>

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://novamicroway.com.br" target="blank"><?php echo $cakeDescription ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <!-- <ul class="nav navbar-nav navbar-right">
            <li><a href="#"> <span class="glyphicon glyphicon-cog"></span> &nbsp; Configurações</a></li>
            <li><a href="#"> <span class="glyphicon glyphicon-user"></span> &nbsp; Sobre</a></li>
            <li><a href="#"> <span class="glyphicon glyphicon-question-sign"></span> &nbsp; Ajuda</a></li>
          </ul> -->
          <form class="navbar-form navbar-right">
            <div class="col-lg-12">

  <a href="/ACI/reports/add" title="Adicionar" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Gerar Relatório do dia</a>
    <div class="input-group">

      <input type="text" class="form-control" placeholder="Buscar curso">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
          </form>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li  <?php if ($this->fetch('title') == "Home") { echo "class='active'"; } ?> ><a href="/ACI/"> <span class="glyphicon glyphicon-home"></span> &nbsp; Inicio</a></li>
            <li <?php if ($this->fetch('title') == "Computers" ) { echo "class='active'"; } ?>><a href="/ACI/computers/"> <span class="glyphicon glyphicon-hdd"></span> &nbsp; Computadores</a></li>
            <li <?php if ($this->fetch('title') == "Courses") { echo "class='active'"; } ?>><a href="/ACI/courses"> <span class="glyphicon glyphicon-book"></span> &nbsp; Cursos</a></li>
            <li <?php if ($this->fetch('title') == "Linkeds") { echo "class='active'"; } ?>><a href="/ACI/linkeds"> <span class="glyphicon glyphicon-link"></span> &nbsp; Vincular</a></li>
          </ul>
          <hr>
          <ul class="nav nav-sidebar">
            <li <?php if ($this->fetch('title') == "Notes") { echo "class='active'"; } ?>><a href="/ACI/notes"> <span class="glyphicon glyphicon-console"></span> &nbsp; Notas</a></li>
            <li <?php if ($this->fetch('title') == "Reports") { echo "class='active'"; } ?>><a href="/relatorio.aci/"> <span class="glyphicon glyphicon-open-file"></span> &nbsp; Relatórios</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			   <?php echo $this->fetch('content'); ?>
	       <?php echo $this->element('sql_dump'); ?>
          
        </div>
      </div>
    </div>
</body>
</html>
