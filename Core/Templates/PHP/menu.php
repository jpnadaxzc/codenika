<?php 
   echo '<div style="display: flex;">
   <div style="display: flex; background-color:black; text-align: center;z-index:999;  width: 100%; ">
       <div>
       <a href="#"><img class="logo1" src="img/logo2.png" alt="logo_nika"/></a>
           <!--<img src="imagem/logo2.png"" alt="logo_nika"/>-->
       </div>
       <div class="row">
           <div class="intcont">
               <span class="bem" >Bem vindo!  </span>
           </div>
           <div class="menu-container">
                <ul class="menu clearfix">
                    <li>
                        <a href="#">Administração</a>
                        <ul class="sub-menu clearfix">
                            <li>
                                <a href="#">Cadastro</a>
                                <ul class="sub-menu">
                                    <li><a href="cadastroFuncionario.php">Usuario</a></li>
                                    <li><a href="Cadastro_cliente.php">Clientes</a></li>
                                    <li><a href="Cadastro_caminhao.php">Caminhão</a></li>
                                    <li><a href="cadastroMotorista.php">Motorista</a></li>
                                </ul>
                            <li>
                                <a href="#">Relatorios</a>
                                <ul class="sub-menu">
                                    <li><a href="relatorio_viagem.php">Viagem</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Entregas</a>
                        <ul class="sub-menu clearfix">
                            <li><a href="novaViagem.php">Nova Entregas</a></li>
                            <li><a href="finalizaEntrega.php">Finaliza Entregas</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Gestão</a>
                        <ul class="sub-menu">
                            <li> <a href="estoque.php">Estoque</a></li>
                        </ul>
                    </li>
                </ul>
           </div>
       </div>
   </div>
</div>';
?>