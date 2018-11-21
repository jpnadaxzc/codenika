<!DOCTYPE html>
<html>
<head>
	<title>NIKA -transpostes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Static/CSS/estilomenu.css" type="text/css">
	<link rel="stylesheet" href="Static/CSS/estilo_novaViagem.css" type="text/css">
  <link rel="stylesheet" href="Static/bootstrap/dist/css/bootstrap.min.css">
  <link href="Static/bootstrap/dist/css/select2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="Static/bootstrap/dist/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="Static/CSS/cssPadrao.css" type="text/css">
 
</head>
<body >
	<!-- 
		=================
		INICIO DO MENU
		=================
	-->
		<?php include 'menu.php' ?>
	<!-- 
		=================
		FIM DO MENU
		=================
    -->
    <div class='x_painel'>
        <form>
            <div class="row">
                <div class="col-md-4">
                    <label for="fullname">Nome:</label><span style="color:red;">*</span><span id="msgmarca" class="esconde color">&nbsp Campo Obrigatorio</span>
                    <input type="text" id="nome" class="form-control"/>
                </div>
                <div class="col-md-4">
                    <label for="CadFunc-cpf">CPF:</label><br>
                    <input type="text" class="form-control"  name="cpf" id="cpf" size="11" maxlength="11" />
                </div>
                <div class="col-md-4">
                    <label for="CadFunc-rg">RG: </label><br>
                    <input type="text"  class="form-control" name="rg" id="rg" size="8" maxlength="8" />
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <label for="CadFunc-nasc">Data de Nascimento: </label><br>
                    <div class="input-group date col-md-12 col-sm-12 col-xs-12" id="datepicker"data-provide="datepicker">
                        <input type="text" name="tnasc" id="tnasc" class="form-control">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="cest">CEP:</label><br>
                    <input type="text" class="form-control" name="tcep" id="tcep" size="9" maxlength="9" placeholder="xxxxx-xxx"/>
                </div>
                <div class="col-md-4">
                    <label for="CadFunc-rua">Logradouro:</label><br>
                    <input type="text" class="form-control" name="trua" id="trua" size="37" maxlength="40" placeholder="Rua, Av..."/>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <label for="CadFunc-num">Numero:</label><span style="color:red;">*</span><span id="msgNum" class="esconde color">&nbsp Campo Obrigatorio</span><br>
                    <input type="text" class="form-control" name="tnum" id="tnum" size="5" maxlength="5" min="0" placeholder="xxx"/>
                </div>
                <div class="col-md-4">
                    <label for="CadFunc-complemnto">Complemnto:</label><br>
                    <input type="text" class="form-control" name="tcomplemento" id="tcomplemento" size="41" maxlength="40" placeholder="Ex: Fundos"/>
                </div>
                <div class="col-md-4">
                    <label for="CadFunc-bairro">Bairro:</label><br>
                    <input type="text" class="form-control" name="tbairro" id="tbairro" size="41" maxlength="40" placeholder="Ex: Itaim"/>
                </div>
                
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <label for="CadFunc-cidade">Cidade: </label><br>
                    <input type="text" class="form-control" name="tcidade" id="tcidade" size="41" maxlength="40" placeholder="Ex: São Paulo"/>
                </div>
                <div class="col-md-4">
                    <label for="CadFunc-est">Estado:</label><br>
                    <select class="form-control" name="test" id="test">
                        <option value="ac">Acre</option> 
                        <option value="al">Alagoas</option> 
                        <option value="am">Amazonas</option> 
                        <option value="ap">Amapa</option> 
                        <option value="ba">Bahia</option> 
                        <option value="ce">Ceara</option> 
                        <option value="df">Distrito Federal</option> 
                        <option value="es">Espirito Santo</option> 
                        <option value="go">Goias</option> 
                        <option value="ma">Maranhao</option> 
                        <option value="mt">Mato Grosso</option> 
                        <option value="ms">Mato Grosso do Sul</option> 
                        <option value="mg">Minas Gerais</option> 
                        <option value="pa">Para</option> 
                        <option value="pb">Paraiba</option> 
                        <option value="pr">Parana</option> 
                        <option value="pe">Pernambuco</option> 
                        <option value="pi">Piaui</option> 
                        <option value="rj">Rio de Janeiro</option> 
                        <option value="rn">Rio Grande do Norte</option> 
                        <option value="ro">Rondonia</option> 
                        <option value="rs">Rio Grande do Sul</option> 
                        <option value="rr">Roraima</option> 
                        <option value="sc">Santa Catarina</option> 
                        <option value="se">Sergipe</option> 
                        <option selected value="sp">Sao Paulo</option> 
                        <option value="to">Tocantins</option> 
                    </select>
                </div>
            </div><br>
            <div class="x_title">
					<div class="row">
						<div class="col-md-12">
							<h2>Dados da Carteira de Motorista</h2>
						</div>
					</div>	
				</div>	
				 
                <div class="row">
                    <div class="col-md-4">
                        <label for="CadFunc-reg">N do Registro:</label><br>
                        <input type="text" class="form-control" name="treg" id="treg" size="11" maxlength="11" placeholder="xxxxxxxxxx"/>
                    </div>
                    <div class="col-md-1">
                        <label for="CadFunc-cat">Categoria:</label>
                        <select class="form-control" name="cat" id="cat1">
                            <option value="a"> A </option> 
                            <option value="b"> B </option>
                            <option value="c"> C </option>
                            <option value="d"> D </option> 
                            <option value="e"> E </option> 
                        </select>
                    </div>
                    <div class="col-md-1" style="font-size: 35px;margin-top: 19px;text-align: center;">/</div>
                    <div class="col-md-1">
                        <label for="CadFunc-cat">Categoria:</label>
                        <select class="form-control" name="cat" id="cat2">
                            <option value=""></option> 
                            <option value="a"> A </option> 
                            <option value="b"> B </option>
                            <option value="c"> C </option>
                            <option value="d"> D </option> 
                            <option value="e"> E </option> 
                        </select>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-4">
                        <label for="CadFunc-emis">Data de Emissao: </label><br>
                        <div class="input-group date col-md-12 col-sm-12 col-xs-12" id="datepicker2"data-provide="datepicker">
                        <input type="text" id="temis" class="form-control">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                    </div>
                </div>
				 
        </form>
        <button type="button" name="fenviar" value="enviar" class="btn btn-default bot" onclick="gravar()" >Cadastrar</button>
        <button type="button" name="fcancelar" value="cancelar" class="btn btn-default bot3" onclick="limpa()" >limpar</button><br><br>
        <div id="msg"></div>
    </div>
</body>
</html>
<script src="Static/js/jquery.min.js"></script>
<script src="Static/js/jquery.mask.min.js"></script>
<script src="Static/js/bootstrap-datepicker.min.js"></script>
<script src="Static/js/datepicker-pt-BR.js"></script>
<script>
function gravar(){
    var categoria1 = $('#cat1').val();
    var categoria2 = $('#cat2').val();
    if (categoria1 == categoria2){
        $("#msg").html('<div class="alert alert-warning"><strong>OPS!</strong> As categorias não podem ser iguais.</div>');
        $("#categoria2").focus();
        return
    }
    
    var nome = $("#nome").val();
    var cpf = $("#cpf").val();
    var rg = $("#rg").val();
    var dat = $('#tnasc').val();
    var cep = $('#tcep').val();
    var rua = $('#trua').val();
    var numero = $('#tnum').val();
    var comp = $('#tcomplemento').val();
    var bairro = $('#tbairro').val();
    var cidade = $('#tcidade').val();
    var uf = $('#test').val();
    var reg = $('#treg').val();
    var dtemis = $('#temis').val();
    $.ajax({
        type:"POST",
        url:"salvaMotorista.php",
        data:{nome:nome,cpf:cpf,rg:rg,dat:dat,cep:cep,rua:rua,numero:numero,comp:comp,bairro:bairro,cidade:cidade,uf:uf,reg:reg,dtemis:dtemis,categoria1:categoria1,categoria2:categoria2},
        success:function(html){
            $("#msg").html(html);
        },
        error:function(){

        }
    })
}
jQuery(function () {
    $('#datepicker').datepicker({
        format: 'dd/mm/yyyy',
        language: 'pt-BR'
    });
    $('#datepicker2').datepicker({
        format: 'dd/mm/yyyy',
        language: 'pt-BR'
    });
});
$( "#tcep" ).change(function() {
    var caracteresDigitados = parseInt($(this).val().length);
    
    if (caracteresDigitados == 8){
        cep()
    }else{

    }
})

function cep(){ 
    
    var cep = $('#tcep').val();
    
    $.ajax({
        
        url: 'http://api.postmon.com.br/v1/cep/'+cep,
        dataType: 'jsonp',
        crossDomain: true,
        contentType: "application/json",
        statusCode: {
            200: function(data) { 
                //console.log(data);
                $('#trua').val(data['logradouro'])
                $('#trua').prop("disabled", true);
                $('#tbairro').val(data['bairro'])
                $('#tbairro').prop("disabled", true);
                $('#test').val(data['estado'].toLowerCase())
                $('#test').prop("disabled", true);
                $('#tcidade').val(data['cidade'])
                $('#tcidade').prop("disabled", true);
            } 
            ,400: function(msg) { console.log(msg);  } // Bad Request
            ,404: function(msg) { console.log("CEP não encontrado"); } // Not Found
        }
    });
}

function limpa(){
    location.reload();
}
</script>