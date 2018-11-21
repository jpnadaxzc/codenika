<?php include "conexao.php"; ?>
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
 
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
                <div class="col-md-3">
                    <label for="fullname">Marca:</label><span style="color:red;">*</span><span id="msgmarca" class="esconde color">&nbsp Campo Obrigatorio</span>
                    <select class="select2_single js-example-basic-single form-control" name="marca" id="marca" >
                        <option></option>
                        <?php 
                            $query = 'select * from nika.marcaCaminhao';
                            $res_query = mysqli_query($con,$query);
                            $num_row_query = mysqli_num_rows($res_query);

                            if ($num_row_query > 0){
                                for($i =0; $num_row_query > $i; $i++){
                                    $row = mysqli_fetch_array($res_query);
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                }
                            };
                        ?>
                    </select>
                </div>
                <div class="col-md-1">
                    <i onclick="addMarca()" class="fas fa-plus-circle" style="margin-top: 30%;font-size: 20px; cursor:pointer;"></i> 
                </div>
                <div class="col-md-4">
                    <label for="fullname">Modelo:</label><span style="color:red;">*</span><span id="msgmodelo" class="esconde color">&nbsp Campo Obrigatorio</span>
                    <input class="form-control" type="text" id="modelo"/>
                </div>
                <div class="col-md-4">
                    <label for="fullname">Cor:</label><span style="color:red;">*</span><span id="msgmodelo" class="esconde color">&nbsp Campo Obrigatorio</span>
                    <input class="form-control" type="text" id="cor"/>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label for="fullname">Placa:</label><span style="color:red;">*</span><span id="msgmodelo" class="esconde color">&nbsp Campo Obrigatorio</span>
                    <input class="form-control" type="text" id="placa"/>
                </div>    
                <div class="col-md-4">
                    <label for="fullname">Chassis:</label><span style="color:red;">*</span><span id="msgmodelo" class="esconde color">&nbsp Campo Obrigatorio</span>
                    <input class="form-control" type="text" id="chassis"/>
                </div>      
            </div>
        </form>
        <br/>
        <button  class="btn btn-default bot" onclick="salvacaminhao()" type="button">Salvar</button>
    </div><br>
    <div id="msg"></div>
<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adiciona Marca</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <label>Marca</label>
                <input type="text" class="form-control" id="addmarca">
            </div>
        </div>
      </div><br>
      <div class="row">
            <div class="col-md-12">
                <div id="msg2"></div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">fecha</button>
        <button type="button" class="btn btn-primary" onclick="salvamarca()">Salva</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>

<script src="Static/js/jquery.min.js"></script>
<script src="Static/js/bootstrap.min.js"></script>
<script>
function addMarca(){
    $('#exampleModal').modal("show")
}
function salvamarca(){
    var novamarca = $("#addmarca").val();
    $.ajax({
        type:"POST",
        url:"salvamarca.php",
        data:{novamarca:novamarca},
        success:function(html){
            $("#msg2").html(html);
        },
        error:function(){

        }
    })
}

function salvacaminhao(){
    var marca = $("#marca").val();
    var modelo = $("#modelo").val();
    var cor = $("#cor").val();
    var chass = $("#chassis").val();
    var placa = $("#placa").val();
    $.ajax({
        type:"POST",
        url:"salvacaminhao.php",
        data:{marca:marca,modelo:modelo,cor:cor,chass:chass,placa:placa},
        success:function(html){
            $('#msg').html(html);
        },
        error:function(){

        }
    })
}
</script>