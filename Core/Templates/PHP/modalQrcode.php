<?php
$filename = $_POST['fileNema'];
$img = "<img src='qrcode/$filename' style='width: 100%;'/>";
?>
<div class="modal fade" id="modalqrode" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content" style="width: 60%;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">QRCode</h4>
            </div>
            <div class="modal-body">
                <?php echo $img; ?> 
                <br>
                <br>
                <br>
                <button class="btn-default btn" onclick="print('<?php echo $filename ?>')" >Imprimir</button>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
<script>
function print(img){
	window.open("qrcodeprint.php?img="+img ,'_blank');
    target = "_blank"
    done = 1;
}
</script>
