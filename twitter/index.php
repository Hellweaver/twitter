<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'damir_pn_10'); ?>
    <div class="header">
        <div class="container-fluid bg-primary">
           TWITTER
        </div>
    </div>

    <div class="content">
        <div class="container bg-secondary">
            <div class="row">
                <!--левая колонка-->
            	<div class="col-3 bg-success pl-1">
            		
            	</div>


                <!--средняя колонка-->
                <?php
                $query = mysqli_query($connect, 'SELECT * FROM tweet');
                 ?>
                <div class="col-5 bg-danger pl-1">
                    <form method="POST" action="baz.php">
                        <input type="" name="damir">
                        <button class="btn btn-primary">твитнуть</button>
                    </form>
                    <?php  for ($i = 0; $i < $query->num_rows; $i++) { ?>
                    <div class="row">
                <div class="col-2">
                   <a href=""><?php $logo = $query->fetch_assoc();echo '<img src="'. $logo['logo'] . '">'; ?></a>
                  
                </div>
                
                <div class="col-10">
                    <div>
                        <p><?php echo $logo['title']; ?></p>
                        <p><?php echo $logo['text']; ?></p>
                        <?php echo '<img src="' . $logo['img'] . '" class="w-100">'; ?>
                    </div>
                    <div class="d-flex">
                        <div class="col-3"><img src="comment.png"></div>
                        <div class="col-3"><img src="retweet.png"></div>
                        <div class="col-3"><img src="like.png"></div>
                        <div class="col-3"><img src="envelope.png"></div>
                    </div>
                    <form action="delete.php" method="POST">
                        <?php echo '<input type="hidden" name="id" value="' . $logo['id'] . '" >'; ?>
                        <button class="btn btn-primary">удалить</button>
                    </form>
                    <form action="redactor.php" method="POST">   
                        <?php  echo '<input type="hidden" name="text" value="'  . $logo['text'] . '">'?> 
                        <?php echo '<input type="hidden" name="id" value="' . $logo['id'] . '">'?>  
                        <button class="btn btn-primary">редактировать</button>
                    </form> 
                </div>
                </div>
                <?php } ?>
                </div>
        </div>
     	 </div>
    </div>
</body>
</html>