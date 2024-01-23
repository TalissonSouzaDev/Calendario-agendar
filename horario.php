
    <?php
    $agendamento = array();
    // horas
    for($i= 8; $i <= 15; $i++){
        $hora = $i;
        if($i<10)
        {
            $hora = '0'.$hora;
        }
        // minutos
        for ($y=0; $y <60; $y++) { 
            $horaminutos = $hora.':'.$y;
           
                if($y < 10)
                {
                    $horaminutos = $hora.':0'.$y;
                }  
                $agendamento[] = $horaminutos;                  
        }
          
    }
       ?>
  <?php foreach($agendamento as $agn): ?>
    <div id="agendamento-card">
    <label for=""><?=$agn?></label>
    <input type="radio" name="agendamento" value="<?= $agn ?>">
    </div>
    <?php endforeach; ?>
  <br>




