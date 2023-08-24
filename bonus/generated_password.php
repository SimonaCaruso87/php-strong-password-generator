<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style/style.css">

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
         <!-- CDN CSS -->
        <link rel="stylesheet" href="./style.css">
        <!-- TITLE -->
        <title>Password Generator</title>
    </head>

    <body>
    <header>
            <nav class="d-flex align-items-center">
                <div class="container-fluid">
                    <div class="d-flex flex-column align-items-center">
                        <h1 class="mb-0">Password Generator</h1>
                        <h5>Genera una password sicura</h5>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div class="container">
                <div class="wrapper">
                    <div class="form-container">
                        <form method="POST">
                            <div class="mb-3 d-flex">
                                <div>
                                    <p class="text-success fw-bold">La tua password è:</p>
                                </div>
                                <div class="input-container">
                                    <textarea name="password" id="password" cols="30" rows="1"><?php echo $_SESSION['password']; ?></textarea>
                                </div>
                            </div>
                            <a class="d-flex justify-content-center" href="./index.php">
                                <button class="btn btn-primary">Torna alla pagina principale</button>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>