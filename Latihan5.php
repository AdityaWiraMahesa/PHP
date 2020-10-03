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
    <link rel="stylesheet" href="PHP/New folder/style.css"/>
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
            <h2>Perhitungan Deret Fibonacci</h2>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="bil1">Bilangan Ke-1 :</label>
                    <input type="number" class="form-control" id="bil1" name="bil1" value="<?= isset($_POST['bil1']) ? $_POST['bil1'] : '' ?>">
                </div>
                <div class="form-group">
                    <label for="bil2">Bilangan Ke-2 :</label>
                    <input type="number" class="form-control" id="bil2" name="bil2" value="<?= isset($_POST['bil2']) ? $_POST['bil2'] : '' ?>">
                </div>
                <div class="form-group">
                    <label for="deret">Jumlah Deret :</label>
                    <input type="number" class="form-control" id="deret" name="deret" value="<?= isset($_POST['deret']) ? $_POST['deret'] : '' ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Hasil</button>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $angka_sebelumnya = $_POST['bil1'];
                $angka_sekarang = $_POST['bil2'];
                $deret = $_POST['deret'];

                echo '<br>';
                echo "Hasilnya Adalah : $angka_sebelumnya $angka_sekarang";

                for ($i = 1; $i <= $deret; $i++) {
                    $output = $angka_sekarang + $angka_sebelumnya;
                    echo " $output";

                    $angka_sebelumnya = $angka_sekarang;
                    $angka_sekarang = $output;
                }
            }

            ?>
        </div>

    </section>

</body>

</html>