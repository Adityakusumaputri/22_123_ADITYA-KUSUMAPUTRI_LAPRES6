<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>

    <form  action="" method="post">
    <div class="kotak">
		<h1 class="judul"> <b> KALKULATOR </b> </h1>
        Angka 1 <input type="text" name="angka1"> <br>
        Angka 2 <input type="text" name="angka2"> <br>
        Operator <select name="operator" id="">
            <option  value="+">+</option>
            <option  value="-">-</option>
            <option  value="x">x</option>
            <option  value="/">/</option>
            <option  value="%">%</option>
            <option  value="v">v</option>
        </select>
        <button type="submit" name="jalankan" class="tombol" >Jalankan</button>
    </form>
    
    <?php
        if(isset($_POST['jalankan'])){
           
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operator = $_POST['operator'];
          

            //pejumlahan
            if ($operator == "+"){
                $hasil = $angka1 + $angka2;
            }

            //pengurangan
            else if ($operator == "-"){
                $hasil = $angka1 - $angka2;
            }

            //perkalian
            else if ($operator == "x"){
                $hasil = $angka1 * $angka2;
            }


            //pembagian 
            else if ($operator == "/"){
                if ($angka2 == 0) {
                    echo "tidak bisa dibagi nol";
                }
        
                $hasil = $angka1 / $angka2;
            }

            //modulus
             else if ($operator == "%"){
                $hasil = $angka1 % $angka2;
            }
             //modulus
             else if ($operator == "v"){
                $hasil = sqrt ($angka1);
            }
            
           
            echo "<br>";
            echo "$angka1 $operator $angka2 <br>";

       
        }
        
    ?>
    Hasil   = <input type="text" value="<?php echo $hasil; ?>" class="hasil"/>


   
</body>
</html>

