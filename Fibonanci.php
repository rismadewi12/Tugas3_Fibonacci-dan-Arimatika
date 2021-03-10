<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>BilanganFibonacci</title>
    <link rel="stylesheet" href="Fibonanci.css" media="screen" title="Container">

    <body>
    <div class="Container">
    <h2> Bilangan Fibonacci</h2>
    <form action="Fibonanci.php" method="POST">

      <div class="Bilangan">
      <label >Bilangan 1 : </label> 
      <input type="number" placeholder="Masukkan Bilangan1" name="input1">
      </div>

    <div class="Bilangan">
    <label >Bilangan 2 : </label> 
    <input type="number" placeholder="Masukkan Bilangan2" name="input2">
    </div>

    <div class="Bilangan">
    <label >Tampilan Deret: </label> 
    <input type="number" placeholder="Masukkan Banyak Deret "name="jumlah">
    </div>

    

	<input type="Submit" name="Perhitungan" class ="Tombol"></input >


    <div class="Bilangan">
    <label >  </label> 
<?php 

		if (isset($_POST['Perhitungan'])){
			$a1 = $_POST['input1'];
			$a2 = $_POST['input2'];
			$jumlah = $_POST['jumlah'];
			
			echo "<h4>HASIL PERHITUNGAN:</h4> $a1 $a2"; 

            for ($i=0; $i<$jumlah-2; $i++)
			{

			$output = $a2 + $a1;
			echo " $output";
			
			$a1 = $a2;  
			$a2 = $output; 
			}
		} 
	?>
    </form>
    </body>
      
  </head>
  </html>
