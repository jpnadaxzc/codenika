<?php
include "conexao.php";
$id = $_POST['id'];
$query = "SELECT * FROM nika.clientes
                inner join nika.viagem on clientes.id = viagem.cliente
                inner join nika.relviagem on relviagem.os	= viagem.id 
                where clientes.id = '$id'";
$res = mysqli_query($con,$query);

if($res){
    
    //print_r($res);
}else{
    
   // print_r('<div class="alert alert-danger"><strong>ERRO!</strong> Inesperado ao cadastrar usuario</div>');
}
?>
<div class="x_painel">
			<div id="esconde" >	
				<div class="cabecalho">
					<br/>
					<h1>Relatório Cliente</h1>
					<br/>
				</div>
				
				<div class="formulario">
					<br/>
					<h2 id="subsubtit">Dados Clientes</h2>
					<form method="post" id="RelClient-FormDadosClientes">
						<div class="row">
							<div class="col-md-4">
								<label for="RelClientnome"> Nome: </label>  
								<input type="text" class="form-control" name="tname" id="tname" disabled />
							</div>
							<div class="col-md-4">
								<label for="RelClient-cpf/cnpj"> CPF/CNPJ: </label>
								<input type="text"  name="tcpf" class="form-control" id="tcpf" disabled/>
							</div>
							<div class="col-md-4">
								<label for="RelClient-telefone1"> Telefone:</label>
								<input type="text"  name="ttel1" class="form-control" id="ttel1"  disabled/>
							</div>
						</div><br>	
						<div class="row">
							<div class="col-md-4">
								<label for="RelClient-telefone2"> Ramal:  </label>
								<input type="text"  name="ttel2" id="ttel2" class="form-control"  disabled/>
							</div>
							<div class="col-md-4">
								<label for="RelClient-telefone3"> Celular: </label>
								<input type="text"  name="ttel3" id="ttel3" class="form-control" disabled/>
							</div>
							<div class="col-md-4">
								<label for="RelClient-email"> Email: </label>
								<input type="text"  name="temail" id="temail" class="form-control" disabled/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<label for="site"> Site:  </label>
								<input type="text"  name="tsite" id="tsite" class="form-control" disabled/>	
							</div>
						</div>
						<br/>
					</form>
				</div>
				
				<div class="RelClient-pendencias">
					<br/>
					<h2 id="subsubtit">Pendencias aparecerão aqui </h2>
					<h3>Não ha pendencias </h3>
					<p><input type="checkbox" name="RelClient-divi" value="Divida" checked /> O Cliente quitou sua divida </p>
					<br/>
					<br/>
					
				</div>
				
				<div class="RelClient-ultimosservicos">
					<br/>
					<h2 id="subsubtit"> Ultimos Serviços</h2>
					<fieldset id="RelClient-fultimosservicos">
										
						<p><input type="text" name="atext1" id="RelClient-text1" size="40" maxlength="40" value="Entrega realizada em Manaus 12/05/2018"/> <input type="submit" value="Veja Mais"></p>
						<p><input type="text" name="atext2" id="RelClient-text2" size="40" maxlength="40" value="Entrega realizada em Osasco 11/05/2018"/> <input type="submit" value="Veja Mais"></p>
						<p><input type="text" name="atext3" id="RelClient-text3" size="40" maxlength="40" value="Entrega realizada em Vitoria 12/05/2018"/> <input type="submit" value="Veja Mais"></p>

					</fieldset>	
					<br/>
				</div>
			</div>
		</div>