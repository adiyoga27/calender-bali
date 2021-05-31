<?php require_once('sakacalendar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
for ($i=01; $i <= 9; $i++) { 
    $tgl = '2021-06-'.$i;
    $tanggal = new SakaCalendar($tgl);

   // echo(json_encode($tanggal));
   $arr['tanggal']= $tgl;
    $arr['ekawara']= $tanggal->noEkawara;
    $arr['dwiwara']= $tanggal->noDwiwara;
    $arr['triwara']= $tanggal->noTriwara;
    $arr['caturwara']= $tanggal->noCaturwara;
    $arr['pancawara']= $tanggal->noPancawara;
    $arr['sadwara']= $tanggal->noSadwara;
    $arr['saptawara']= $tanggal->noSaptawara;
    $arr['astawara']= $tanggal->noAstawara;
    $arr['sangawara']= $tanggal->noSangawara;
    $arr['dasawara']= $tanggal->noDasawara;
    $arr['hari_baik'] = $tanggal->checkHariBaik($tanggal->noTriwara);
    $data[]=$arr;

}
$tanggal = new SakaCalendar('2021-06-09');

echo json_encode($tanggal);
   


?>
    
</body>
</html>