<?php
if(isset($_POST['stylescode']) && !empty($_POST['stylescode']))
{
	global $codes;
	$codes = $_POST['stylescode'];
    include('./converter.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Easily toggle direction of your css file by this tiny script</title>
    <link rel="stylesheet" type="text/css" href="./style.css"/>
</head>
<body>

    <div class="container">
        <h2>Toggle CSS Direction</h2>
        <p>A tiny tools for changing full direction of a css file</p>
        <form method="post" action="index.php">
            <textarea name="stylescode"></textarea>
            <button type="submit">Toggle</button>
            Result :
            <textarea><?php echo (!empty($codes))?$codes:''; ?></textarea>
        </form>
    </div>

</body>
</html>