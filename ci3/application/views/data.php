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
    <section class="content">
        <button class="btn btn-primary mt-5 ml-5" data-toggle="modal" data-target="#staticBackdrop">Tambah data</button>
        <div class="container mt-5 text-center">

            <h2 class="mb-5" style="font-weight:600;">Database Group</h2>

            <table class="table">
                <thead class="thead-dark">

                    <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $no = 0;
                foreach ($base as $row) : $no++;
                ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row->id ?></td>
                        <td><?= $row->nama ?></td>
                        <td><?= $row->jurusan ?></td>
                        <td><?= $row->password ?></td>
                        <td><?= anchor('pages/hapus/' . $row->id, '<div class="btn btn-danger">Delete</div>'); ?>
                            <?= anchor('pages/edit/' . $row->id, '<div class="btn btn-primary">Edit</div>'); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- form tambah data -->
                    <form action="<?= base_url() . 'pages/tambah'; ?>" method="POST">
                        <div class="form-group">
                            <b>Username</b>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <b>jurusan</b>
                            <input type="text" name="jurusan" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <b>password</b>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>