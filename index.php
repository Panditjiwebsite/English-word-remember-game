<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
  <br>
  <h1 class="text-center">Brain Memory Score Checker</h1>

<?php
$a=array("PENCIL","STAMP","RAINBOW","CARPET","APPLE","PLANET","MAGAZINE","GOLD","WATCH","SACHIN","MIC","MOTHER","BOOK","LAPTOP","AC","LANGUAGE","mobile","Next","learning","lessons","accept","chair","stool","car", "cat","wheelchair","bench","t-shirt","cap","dress","shirt","belt","sofa","yellow","red","pink","black","bolt","axe","bucket","calculator","cut","boy","girl","nut","pump","ruler","eye","ear","skin","cheek","hair","mouth","nose","foot","father","BOY","INDIA","TV","wifi","parrot","window","airplane","ant","jeep","juice","ball","bee","banana","baby","butterfly","basket","cake","clock","house","hat","sunday","monday","tuesday","wednesday","thursday","friday","saturday","GOOD","NEWS","family","idea","photo","tea");
$random_keys=array_rand($a,10);
?>

<br>
<br>
<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 border ml-4 mb-3" style="text-align:center; height:90px;padding:20px;background-color: #ffc0cb30;border-top-left-radius: 45px;border-bottom-right-radius: 45px;"> <?php echo strtoupper("<H1>" . $a[$random_keys[0]]."</H1>"); ?> </div>
        <div class="col-md-4 border ml-4 mb-3" style="text-align:center; height:90px;padding:20px;background-color: #ffc0cb30;border-top-right-radius: 45px;border-bottom-left-radius: 45px;"> <?php echo strtoupper("<H1>" . $a[$random_keys[1]]."</H1>"); ?> </div>
        <div class="col-md-4 border ml-4 mb-3" style="text-align:center; height:90px;padding:20px;background-color: #ffc0cb30;border-top-left-radius: 45px;border-bottom-right-radius: 45px;"> <?php echo strtoupper("<H1>" . $a[$random_keys[2]]."</H1>"); ?> </div>
        <div class="col-md-4 border ml-4 mb-3" style="text-align:center; height:90px;padding:20px;background-color: #ffc0cb30;border-top-right-radius: 45px;border-bottom-left-radius: 45px;"> <?php echo strtoupper("<H1>" . $a[$random_keys[3]]."</H1>"); ?> </div>
        <div class="col-md-4 border ml-4 mb-3" style="text-align:center; height:90px;padding:20px;background-color: #ffc0cb30;border-top-left-radius: 45px;border-bottom-right-radius: 45px;"> <?php echo strtoupper("<H1>" . $a[$random_keys[4]]."</H1>"); ?> </div>
        <div class="col-md-4 border ml-4 mb-3" style="text-align:center; height:90px;padding:20px;background-color: #ffc0cb30;border-top-right-radius: 45px;border-bottom-left-radius: 45px;"> <?php echo strtoupper("<H1>" . $a[$random_keys[5]]."</H1>"); ?> </div>
        <div class="col-md-4 border ml-4 mb-3" style="text-align:center; height:90px;padding:20px;background-color: #ffc0cb30;border-top-left-radius: 45px;border-bottom-right-radius: 45px;"> <?php echo strtoupper("<H1>" . $a[$random_keys[6]]."</H1>"); ?> </div>
        <div class="col-md-4 border ml-4 mb-3" style="text-align:center; height:90px;padding:20px;background-color: #ffc0cb30;border-top-right-radius: 45px;border-bottom-left-radius: 45px;"> <?php echo strtoupper("<H1>" . $a[$random_keys[7]]."</H1>"); ?> </div>
        <div class="col-md-4 border ml-4 mb-3" style="text-align:center; height:90px;padding:20px;background-color: #ffc0cb30;border-top-left-radius: 45px;border-bottom-right-radius: 45px;"> <?php echo strtoupper("<H1>" . $a[$random_keys[8]]."</H1>"); ?> </div>
        <div class="col-md-4 border ml-4 mb-3" style="text-align:center; height:90px;padding:20px;background-color: #ffc0cb30;border-top-right-radius: 45px;border-bottom-left-radius: 45px;"> <?php echo strtoupper("<H1>" . $a[$random_keys[9]]."</H1>"); ?> </div>
    </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>