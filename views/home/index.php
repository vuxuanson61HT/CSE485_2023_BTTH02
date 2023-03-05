<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="./index.php">Trang chủ</a></li>
        <li><a href="./index.php?controller=article">Bài viết</a></li>
        
    </ul>
    <h1>Tôi là TRANG CHỦ</h1>
    <?php
        foreach($articles as $article){
           
            
    ?>
    <div class="col-sm-3">
    <div class="card mb-2" style="width: 100%;">
        <img src="images/songs/cayvagio.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-center">
                <a href="detail.php" class="text-decoration-none"><?= $article['title']?></a>
            </h5>
        </div>
    </div>
    <?php }
    ?>
 
</body>
</html>