<!DOCTYPE html>
<html>
<head>
	<title>NIKA -transpostes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Static/CSS/estilomenu.css" type="text/css">
	<link rel="stylesheet" href="Static/CSS/estilo_novaViagem.css" type="text/css">
	<link rel="stylesheet" href="Static/CSS/estoque.css" type="text/css">
  	<link rel="stylesheet" href="Static/bootstrap/dist/css/bootstrap.min.css">
  	<link href="Static/bootstrap/dist/css/select2.min.css" rel="stylesheet">
  	<link rel="stylesheet" href="Static/bootstrap/dist/css/jquery.dataTables.css">
	<link rel="stylesheet" href="Static/bootstrap/dist/css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="Static/bootstrap/dist/css/buttons.bootstrap.min.css" >
	<link rel="stylesheet" href="Static/bootstrap/dist/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="Static/bootstrap/dist/css/dataTables.foundation.min.css">
	<link rel="stylesheet" href="Static/bootstrap/dist/css/dataTables.jqueryui.min.css">
	<link rel="stylesheet" href="Static/bootstrap/dist/css/dataTables.semanticui.min.css">
	<link rel="stylesheet" href="Static/bootstrap/dist/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="Static/bootstrap/dist/css/scroller.bootstrap.min.css" >
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<style>
        .dataTable > thead > tr > th[class*="sort"]:after{
    content: "" !important;
}
        
    </style>
<body >
<?php
    if(empty($_GET['y'])){
        header('Location: IUGuoytfayITFddOUFYAs213.php');
    }
    include_once "conexao.php";
    $qrcode = $_GET['y'];
    //$qrcode = 'asda20181024101407.png';
    $query = "select * from estoque where qrcode = '$qrcode'";
    $res = mysqli_query($con,$query);
    $num_row = mysqli_num_rows($res);
    if ($num_row > 0){
        $table = "
        <input type='hidden' id='qr' name='qr' value='$qrcode'>
        <div style='margin-top:10%'>
                <table id='tableestoqueqr' >
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbbody>";
        for($i = 0 ; $num_row >$i; $i++ ){
            $row = mysqli_fetch_array($res);
        
            $table .= "
                        <tr>
                            <td style='font-size:60px;'>$row[1]</td>
                            <th><i id='menos' class='fas fa-minus-circle' onclick='dimi()' style='font-size:60px;color:#004D80'></i></th>
                            <td style='font-size:60px;' id='qtd'><span class='caracteres'>$row[2]</span> <input type='hidden' id='custId' name='custId' value='$row[2]'></td>
                            <th><i id='mais' class='fas fa-plus-circle' onclick='aumenta()' style='font-size:60px;color:#004D80;display:none'></i>&nbsp</th>
                        </tr>   ";
        }
        $table .= "
                    </tbbody>
                </table>
                <button onclick='salva()' class='btn btn-default bot' type='button' style='margin-left:15px;font-size:60px;'>Salvar</button>
                
                </div>
                <br>
                <div id='msg'></div>";
    }
    echo $table;
    
?>
</body>
</html>
<script src="Static/js/jquery.min.js"></script>
<script src="Static/js/bootstrap.min.js"></script>
<script src="Static/js/jquery.maskMoney.min.js" type="text/javascript"></script>
<script src="Static/js/jquery.dataTables.min.js"></script>
<script src="Static/js/dataTables.bootstrap.min.js"></script>
<script src="Static/js/dataTables.buttons.min.js"></script>
<script src="Static/js/dataTables.fixedHeader.min.js"></script>
<script src="Static/js/dataTables.keyTable.min.js"></script>
<script src="Static/js/dataTables.responsive.min.js"></script>
<script src="Static/js/responsive.bootstrap.js"></script>
<script src="Static/js/dataTables.scroller.min.js"></script>
<script src="Static/js/jszip.js"></script>
<script src="Static/js/buttons.bootstrap.min.js"></script>
<script src="Static/js/buttons.flash.min.js"></script>
<script src="Static/js/buttons.html5.min.js"></script>
<script src="Static/js/buttons.print.min.js"></script>

<script>
    var quantidade = $('#custId').val();
    var qtd = $('#custId').val();
    $(document).ready(function() {
        $('#tableestoqueqr').dataTable({
            "targets": 'no-sort',
            "bSort": false,
            "order": [],
            "columnDefs": [
            { "orderable": false, 
            "targets": 0 }
            ],
            "bPaginate": false,
            "bFilter": false,
            "bInfo": false,
            "bLengthChange": false,
            
        });
    }); 

    function dimi(){
        $("#msg").html("")
        
        if(qtd > 0){
            $('#mais').show();
            qtd = qtd -1;
            $(".caracteres").text(qtd);
            if(qtd == 0){
                $('#menos').hide();
            }
        }else{
            $('#menos').hide();
        }
    }

    function aumenta(){
        $("#msg").html("")
        $('#menos').show();
        if(quantidade == qtd){
            $('#mais').hide();
        }else{
            qtd = qtd +1;
            $(".caracteres").text(qtd);
           
            if(quantidade == qtd){
                $('#mais').hide();
            }
            
        }
        
    }

    function salva(){
        $("#msg").html("")
        if(quantidade != qtd){
            $.ajax({
                type:"POST",
                url:"alteraEstoque.php",
                data:{qtd:qtd,qr:$('#qr').val()},
                success: function(html){
                    $('#msg').html(html);
                    $('#mais').hide();
                    quantidade = qtd;
                    
                },
                error:function(){
                    $("#msg").html("<div class='alert alert-danger' style='font-size:60px;'><strong>ERRO!</strong> .</div>");
                }
            
            })
        }else{
            $("#msg").html("<div class='alert alert-warning' style='font-size:60px;'><strong>OPS!</strong> Não tem alteração para salvar .</div>");
        }
    }
    function fecha(){ 
        
        window.open(location, '_self').close()
        }
</script>
        