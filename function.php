<?php

function prevMonth($time){
    return date('Y-m-d',strtotime("-1 month",$time));
}

function nextMonth($time){
    return date('Y-m-d',strtotime("+1 month",$time));
}

function get($x)
{
    return stripslashes(htmlentities(($_GET[$x])));
}

function getMonthTime()
{
    $monthTime = strtotime(date("Y-m-1"));
  
    if(isset($_GET['month']))
    {
        
        //extract(date_parse_from_format("Y-d",$_GET['month']));
        $date = explode("-",$_GET['month']);
        //print_r($date);exit;

        

        $monthTime = strtotime("{$date[0]}-{$date[1]}-1");

    }
    
    return $monthTime;
}
