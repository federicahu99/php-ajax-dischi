<?php include 'includes/discs.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Discs</title>
</head>
<body>
    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="Spotify logo"/>
    </header>

    <main>
        <div class="flex container">
            <?php foreach($discs as $disc) :?>
                <div class="single-card">
                    <div class="card">
                        <img src="<?php echo $disc['poster'] ?>" alt="<?php $disc['title'] ?>">
                        <h2> <?php echo $disc['title'] ?> </h2>
                        <h4> <?php echo $disc['author'] ?> </h4>
                        <h4> <?php echo $disc['year'] ?> </h4>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </main>

</body>
</html>