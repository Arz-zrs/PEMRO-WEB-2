<form method="post">
    <input type="text" name="text" id="text">
    <input type="submit" name="submit" value="Submit"> <br>
</form>

<?php
    if (isset($_POST['submit'])) {
        $text = $_POST['text'];
        $length = strlen($text);
        for ($i = 0; $i < $length; $i++) {
            $char = $text[$i];
            $repeat = str_repeat($char, $length);
            echo ucfirst($repeat);
        }
    }
?>