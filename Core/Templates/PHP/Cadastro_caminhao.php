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
                            $query = 'select * from marcaCaminhao';
                            $res_query = mysqli_query($con,$query);
                            $num_row_query = mysqli_num_rows($res_query);

                            if ($num_row_query > 0){
                            $row = mysqli_fetch_array($res_query);
                                echo "<option value='{$row[0]}'>{$row[1]}</option>";
                            };
                        ?>
                    </select>
                </div>
                <div class="col-md-1">
                    <i class="fas fa-plus-circle" style="margin-top: 30%;font-size: 20px;"></i> 
                </div>
                <div class="col-md-4">
                    <label for="fullname">Modelos:</label><span style="color:red;">*</span><span id="msgmodelo" class="esconde color">&nbsp Campo Obrigatorio</span>
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
        <button  class="btn btn-default bot" onclick="salvaviagem()" type="button">Salvar</button>
    </div>
</body>
</html>