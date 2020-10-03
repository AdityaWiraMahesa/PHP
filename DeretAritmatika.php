<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Belajar Matematika |</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="Latihan5.php">FIBONACCI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="DeretAritmatika.php">ARITMATIKA</a>
                </li>
            </ul>
        </div>
    </nav>
    <section>
        <div class="container">
            <br>
            <h2>Perhitungan Deret Aritmatika</h2>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="a">Suku Ke-1 (a) :</label>
                    <input type="number" class="form-control" id="a" name="a" value="<?= isset($_POST['a']) ? $_POST['a'] : '' ?>">
                </div>
                <div class="form-group">
                    <label for="b">Beda (b) :</label>
                    <input type="number" class="form-control" id="b" name="b" value="<?= isset($_POST['b']) ? $_POST['b'] : '' ?>">
                </div>
                <div class="form-group">
                    <label for="sukun">Suku Ke-n :</label>
                    <input type="number" class="form-control" id="sukun" name="sukun" value="<?= isset($_POST['sukun']) ? $_POST['sukun'] : '' ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Hasil</button>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $a = $_POST['a'];
                $b = $_POST['b'];
                $un = $_POST['sukun'];

                $sukucari = $a + (($un - 1) * $b);

                echo '<br>';
                echo "Suku Ke-$un Adalah : $sukucari";
            }
            ?>
    </section>
</body>
</html>