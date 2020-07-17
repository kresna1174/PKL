<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php foreach ($tabel as $a) : ?>
        <form action="<?= base_url() . 'pages/update/'; ?>" method="post">
            <div class="container text-center">
                <div class="form-group">
                    Username
                    <input type="hidden" name="id" class="form-control" value="<?= $a->id; ?>">
                    <input type="text" name="nama" class="form-control" value="<?= $a->nama; ?>" required>
                </div>
                <div class="form-group">
                    Jurusan
                    <input type="text" name="jurusan" class="form-control" value="<?= $a->jurusan; ?>" required>
                </div>
                <div class="form-group">
                    Password
                    <input type="password" name="password" class="form-control" value="<?= $a->password; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    <?php endforeach; ?>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>