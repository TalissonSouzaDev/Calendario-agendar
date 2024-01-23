  <!-- The Modal -->
  
  <?php 
@$_POST['mes'];
@$_POST['agendamento']
  
  
  ?>
  <div class="modal" id="myModal<?=$modal?>">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <?php
          $dataget = explode("-",$_GET['month']);
          $formt = $dataget[0]."-".$dataget[1]."-".$modal;
          $data = date("d M Y",strtotime($formt));
          ?>
          <h4 class="modal-title"><?=$data?>  <?=$formt?></h4><br>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        
        <!-- Modal body -->
        <form method="post">
        <div class="modal-body">
        <span>Marque um horario para o agendamento</span> <br>
          <?php include('horario.php') ?>
         <input type="hidden" name="mesfot" value="<?= $formt?>">
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-dark">Enviar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fecha</button>
        </div>

        </form>
        
      </div>
    </div>
  </div>