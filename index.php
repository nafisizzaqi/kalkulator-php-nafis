<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="calculator">
        <h1>Kalkulator</h1>
        <form method="post" >
            <input type="text" name="angka1" placeholder="Masukkan angka1" required><br>
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="x">x</option>
                <option value="/">/</option>
            </select><br>
            <input type="text" name="angka2" placeholder="Masukkan angka2" required><br>
            <button type="submit" name="hitung">Hitung</button>
        </form>

        <?php 
            if (isset($_POST['hitung'])) {
                $angka1 = $_POST['angka1'];
                $angka2 = $_POST['angka2'];
                $operator = $_POST['operator'];

                if($operator == "+"){
                    $hasil = $angka1 + $angka2;
                }

                else if($operator == "-"){
                    $hasil = $angka1 - $angka2;
                }

                else if($operator == "x"){
                    $hasil = $angka1 * $angka2;
                }

                else if($operator == "/"){
                    $hasil = $angka1 / $angka2;
                }

                echo "<br>";
                echo "hasilnya adalah = $hasil";
            }
        ?>
    </div>

</body>
</html>