<html>
<head>

</head>
<body>
    <form method="post">
        <label for="height">Tinggi :</label> 
        <input type="number" name="height" id="height"> <br>
        <label for="image">Alamat Gambar :</label> 
        <input type="text" name="image" id="image"> <br>
        <input type="submit" name="submit" value="Cetak"> <br>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $height = $_POST['height'];
            $image = $_POST['image'];

            while ($height > 0) {
                for ($j = 0; $j < 2 * (5 - $height); $j++) {
                    echo "&nbsp;&nbsp; ";
                }
                for ($k = 0; $k < $height; $k++) {
                    echo "<img src='$image' width='20' height='20'> ";
                }
                echo "<br>";
                $height--;
            }
        }
    ?>
</body>
</html>