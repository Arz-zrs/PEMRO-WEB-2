<html>

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

        $i = 1;
        while ($i <= $height) {
            $j = 1;
            while ($j < $i) {
                echo "<img src='$image' width='20' height='20' style='visibility:hidden;'>";
                $j++;
            }

            $k = 1;
            while ($k <= ($height - $i + 1)) {
                echo "<img src='$image' width='20' height='20'>";
                $k++;
            }

            echo "<br>";
            $i++;
        }
    }
    ?>
</body>

</html>