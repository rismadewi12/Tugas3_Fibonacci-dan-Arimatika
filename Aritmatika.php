<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>Aritmatika</title>
    <link rel="stylesheet" href="Fibonanci.css" media="screen" title="Container">

    <body>
    <div class="Container">
    <h2> Deret Arimatika</h2>
    <form action="Aritmatika.php" method="POST">

      <div class="Bilangan">
      <label >Bilangan 1 : </label> 
      <input type="number" placeholder="Masukkan Bilangan1" name="input1">
      </div>

    <div class="Bilangan">
    <label >Bilangan 2 : </label> 
    <input type="number" placeholder="Masukkan Bilangan2" name="input2">
    </div>

    <div class="Bilangan">
    <label >Suku Ke-: </label> 
    <input type="number" placeholder="Masukkan Banyak Deret "name="ke">
    </div>


	<input type="Submit" name="Perhitungan" class ="Tombol"></input >


    <div class="Bilangan">
    <label >  </label> 
    <?php
		if(isset($_POST['Perhitungan'])){
			$c = $_POST['input1'];
			$d = $_POST['input2'];
			$n = $_POST['ke'];

			$beda = $d - $c;
			$output = $c+ ($n - 1)* $beda;
			echo "suku ke- $n bilangan tersebut adalah $output  <br></b" ;

			echo "Barisan Angka : $c $d"; 
			
			for ($i=$c; $i<=$n-1; $i++)
			{

			$output = $c + $beda;
			echo " $output";
			
			$c = $d;  
			$d = $output; 
			}
		}
		?>
    </form>
    </body>
      
  </head>
  </html>
