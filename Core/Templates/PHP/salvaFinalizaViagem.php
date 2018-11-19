<?php

include "conexao.php";

$km = $_POST['km']?$_POST['km']:"";
$diesel = $_POST['diesel']?$_POST['diesel']:"";
$valor = $_POST['valor']?$_POST['valor']:"";
$dtpagamento = $_POST['dtpagamento']?$_POST['dtpagamento']:"";
$date = $_POST['date']?$_POST['date']:"";
$romaneio = $_POST['romaneio']?$_POST['romaneio']:"";
$cetn = $_POST['cetn']?$_POST['cetn']:"";
$cetc = $_POST['cetc']?$_POST['cetc']:"";
$fretes = $_POST['fretes']?$_POST['fretes']:"";
$fretec = $_POST['fretec']?$_POST['fretec']:"";
$comissao = $_POST['comissao']?$_POST['comissao']:"";
$pago = $_POST['pago']?$_POST['pago']:"";
$pgdate = $_POST['pgdate']?$_POST['pgdate']:"";
$percurso =  $_POST['percurso'];
$valtot = $valor * $diesel;
$valtot = str_replace(",",".",$valtot);
$valtot = number_format($valtot, 2, '.', '');
$id = $_POST['id']?$_POST['id']:"";
$idmotorista = $_POST['idmotorista'];
$placa = $_POST['placa'];

if(!empty($date)){
    $date = date('Y-m-d',strtotime($date));
}

if(!empty($pgdate)){
    $pgdate = date('Y-m-d',strtotime($pgdate));
}

if(!empty($comissao)){
    $comissao = (float) "0.$comissao";
    $comissao = (float) $fretes * $comissao;
    $comissao = number_format($comissao, 2, '.', '');
    
}

$query =  "insert into nika.relviagem ( 
                                        km_rodado
                                        ,litros
                                        ,valor_litro
                                        ,valor_total
                                        ,dt_pag_nika
                                        ,data
                                        ,romaneio
                                        ,cte_emitido_nika
                                        ,cte_emitido_cliente
                                        ,frete_c_pedagio
                                        ,frete_s_pedagio
                                        ,comissao
                                        ,pgto_efetuado
                                        ,data_pagto
                                        ,percurso
                                        ,id_motorista
                                        ,placa
                                        ) values (
                                            '$km'
                                            ,'$diesel'
                                            ,'$valor'
                                            ,'$valtot'
                                            ,'$dtpagamento'
                                            ,'$date'
                                            ,'$romaneio'
                                            ,'$cetn'
                                            ,'$cetc'
                                            ,'$fretes'
                                            ,'$fretec'
                                            ,'$comissao'
                                            ,'$pago'
                                            ,'$pgdate'
                                            ,'$percurso' 
                                            ,'$idmotorista'
                                            ,'$placa'
                                        );";
                                        
    $res_query = mysqli_query($con,$query);
   
    $query2 = "update nika.viagem set finalizada = 1 where id = '$id' ";
    $res_query2 = mysqli_query($con,$query2);

    if($res_query){
        print_r('<div class="alert alert-success"><strong>Sucesso!</strong>Viagem finalizada com sucesso.</div>');
    }else{
        
        print_r('<div class="alert alert-danger"><strong>ERRO!</strong>Inesperado ao finalizar viagem</div>');
    }
