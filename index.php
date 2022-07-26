<?php include __DIR__ . '/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dischi</title>
</head>
<body>
    <div id="root">
    <header>
        <img class="logo" src="./img/logo-small.svg" alt="Spotify">
    </header>

    <main>
        <div class="container">

        <?php foreach($albums as $album) { ?>
            <div class="card">
                <img src="<?php echo $album['poster']; ?>" alt="<?php echo $album['poster']; ?>">
                <h3><?php echo $album['title'];?></h3>
                <div><?php echo $album['author']; ?></div>
                <div><?php echo $album['year'];  ?></div>
            </div>
        <?php } ?>
        </div>
    </main>

    </div>
   
</body>
</html>