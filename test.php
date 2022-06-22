<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
//  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action=" <?php echo $_SERVER["PHP_SELF"];?> ">
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
<input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "<br>";
echo $comment;
?>

<script type="text/javascript">
    var data=<?php echo json_encode($comment); ?>;
    console.log(data);
    var data_object = JSON.parse(data);
    console.log(data_object);

</script>

</body>
</html>