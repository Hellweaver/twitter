<!DOCTYPE html>
<html>
<head>
 	<title></title>
 	<meta charset="utf-8">
</head>
<body>
 	<form method="POST" action="update.php">
        <?php echo '<input type="" name="text" value="'. $_POST['text'] .'">'?>
        <?php echo '<input type="" name="id" value="'. $_POST['id'] .'">'?>
        <button>твитнуть</button>
    </form>
</body>
</html>