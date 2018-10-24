<?php 
   echo '<div style="display: flex;">
   <div style="display: flex; background-color:black; text-align: center;  width: 100%; ">
       <div>
       <a href="inicial.php"><img class="logo1" src="img/logo2.png" alt="logo_nika"/></a>
           <!--<img src="imagem/logo2.png"" alt="logo_nika"/>-->
       </div>
       <div class="row">
           <div class="intcont">
               <span class="bem" >Bem vindo!  '.$logado.'</span>
           </div>
           <div class="menu-container">
                   <ul class="menu clearfix">
                        <li>
                            <a href="#">Viagem</a>
                            <ul class="sub-menu clearfix">
                                <li><a href="novaViagem.php">Nova Viagem</a></li>
                                <li><a href="construcao.php">Finaliza Viagem</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Administração</a>
                            <ul class="sub-menu clearfix">
                                <li>
                                    <a href="#">Cadastro</a>
                                    <ul class="sub-menu">
                                        <li><a href="cadastroFuncionario.php">Usuario</a></li>
                                        <li><a href="Cadastro_cliente.php">Clientes</a></li>
                                        <li><a href="Cadastro_caminhao.php">Caminhão</a></li>
                                        <li><a href="construcao.php">Carreta</a></li>
                                        <li><a href="construcao.php">Motorista</a></li>
                                    </ul>
                                <li>
                                    <a href="#">Relatorios</a>
                                    <ul class="sub-menu">
                                        <li><a href="relatorio_viagem.php">Viagem</a></li>
                                        <li><a href="relatorioMotorista.php">Motorista</a></li>
                                        <li><a href="relatorioCliente.php">Cliente</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="estoque.php">Estoque</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="construcao.php">Financeiro</a>
                        <li><a href="construcao.php">Entregas</a>
                        <li><a href="construcao.php">Gestão</a>
                   </ul>
           </div>
       </div>
   </div>
</div>';
?>