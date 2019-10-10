<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php // "PHP $ _GET" dapat digunakan untuk mengumpulkan data formulir setelah mengirimkan formulir HTML dengan metode = "mendapatkan".// 
//$ _GET juga dapat mengumpulkan data yang dikirim dalam URL.//
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

</body>
</html> 