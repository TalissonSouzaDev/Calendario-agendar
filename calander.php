
<?php
include("function.php");
date_default_timezone_set("America/Sao_Paulo");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php $monthTime = getMonthTime(); ?>
<header>
    <a href="?month=<?=prevMonth($monthTime) ?>">Anterior</a>
    <h1><?= date(' F Y ',$monthTime)?></h1>
    <a href="?month=<?=nextMonth($monthTime) ?>">Proximo</a>
</header>

<main>
<table class="table table-responsive">
    <thead>
        <tr>
            <th>DOM</th>
            <th>SEG</th>
            <th>TER</th>
            <th>QUA</th>
            <th>QUI</th>
            <th>SEX</th>
            <th>SAB</th>
        </tr>
    </thead>
<?php
$startDate = strtotime('last sunday',$monthTime);


?>
   <form method="post">
   <tbody>

<?php for($row =0; $row < 6; $row++): ?>
    <tr>
    <?php for($column =0; $column < 7; $column++): ?>
        <?php
         $modal = date('j',$startDate);
         if(date('Y-m',$startDate) !== date("Y-m",$monthTime))
        {
            echo "<td>
            <a href='#' class='btn btn-ligth disabled' data-toggle='modal' data-target='#myModal$modal'>
            ";
        }
        else
        {
            echo "<td>
            <a href='#' class='btn btn-secondary' data-toggle='modal' data-target='#myModal$modal'>
            ";
        }
       
        ?>
       
        <?= $modal ?>
      </a> 
    </td>

  <?php include('modal.php'); ?>

        
        <?php $startDate = strtotime("+1 day",$startDate); ?>
    <?php endfor; ?>
    
    </tr>
<?php endfor; ?>
</tbody>
   </form>
</table>
</main>




















    
</body>

</html>