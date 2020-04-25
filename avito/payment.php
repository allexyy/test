<?php
$file = fopen('pay.json','r');
$content = fread($file,filesize('pay.json'));
$json=[];
foreach(json_decode($content) as $k=>$v){
    $json[$k] = $v;
}


?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css" />
    <meta charset="UTF-8">
    <title>Payment</title>
</head>
<body>
<style>
.credit-card-div span {
 padding-top:10px;
 }
.credit-card-div img {
 padding-top:30px;
}
.credit-card-div .small-font {
 font-size:9px;
}
.credit-card-div .pad-adjust {
 padding-top:10px;
}
</style>

 <div class="container">
 <div class="row ">
 <div class="col-md-4 col-md-offset-4">

<div class='pay-info'>
<span>Оплата:<?=$json['pay']?> На сумму: <?=$json['sum']?></span>
</div>

 <div class="credit-card-div">
<div class="panel panel-default" >
 <div class="panel-heading">
 
 <form action="../check.php" method="post">
 <div class="row ">
 <div class="col-md-12">
 <input type="text" required  class="form-control" name='CardNumber' placeholder="Enter Card Number" />
 </div>
 </div>

 <div class="row ">
 <div class="col-md-3 col-sm-3 col-xs-3">
 <span class="help-block text-muted small-font" > Expiry Month</span>
 <input type="text" required  class="form-control" name='ExpiryMonth' placeholder="MM" />
 </div>
 <div class="col-md-3 col-sm-3 col-xs-3">
 <span class="help-block text-muted small-font" > Expiry Year</span>
 <input type="text" required  class="form-control" name = 'ExpiryYear' placeholder="YY" />
 </div>
 <div class="col-md-3 col-sm-3 col-xs-3">
 <span class="help-block text-muted small-font" > CCV</span>
 <input type="text" required  class="form-control" name = 'CCV' placeholder="CCV" />
 </div>
 <div class="col-md-3 col-sm-3 col-xs-3">
<img src="https://bootstraptema.ru/snippets/form/2016/form-card/card.png" class="img-rounded" />
 </div>
 </div>

 <div class="row ">
 <div class="col-md-12 pad-adjust">

 <input type="text" required  class="form-control" name='Name' placeholder="Name On The Card" />
 </div>
 </div>



 <div class="row ">
 <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
 <input type="submit" class="btn btn-danger" value="CANCEL" />
 </div>
 <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
 <input type="submit" class="btn btn-warning btn-block" value="PAY NOW" />
 </form>
 </div>
 </div>
 
 </div>
 </div>
 </div><!-- ./credit-card-div -->

 </div> 
 </div>
</div><!-- /.container -->
</body>
</html>