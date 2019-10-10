<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php //PHP $ _POST secara luas digunakan untuk mengumpulkan data formulir setelah mengirimkan formulir HTML dengan metode = "post". $ _POST juga banyak digunakan untuk lulus variabel.//
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

</body>
</html> 