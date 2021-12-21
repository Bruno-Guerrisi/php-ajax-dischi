<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
    <?php
        include_once __DIR__ .  '../../datab/database.php';
        // var_dump($database);

    ?>

    <header>
        <div class="container container-header">

            <a href="#">
    
                <img src="../img/logo.png" alt="logo">
            </a>
        </div>
    </header>

    <main>
        <div>

            <div class="container container-main-card">
                
                <?php foreach ($database as $value) { ?>
                    
                    <div class="container-card">

                        <div class="card">

                            <img src=" <?php echo $value['poster'] ?> " alt="">

                            <span class="title block">
                                <?php echo $value['title']; ?>
                            </span>

                            <span class="author block">
                                <?php echo $value['author']; ?>
                            </span>

                            <span class="year block">
                                <?php echo $value['year']; ?>
                            </span>

                            <span class="genre block">
                                <?php echo $value['genre']; ?>
                            </span>

                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>