<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="btn btn-primary mt-5 ml-5">+ Tambah data</div>
    <div class="container text-center mt-5">


        <table class="table">
            <thead class=" thead-dark">
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach($data as $a)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$a->id}}</td>
                <td>{{$a->nama}}</td>
                <td>{{$a->jurusan}}</td>
                <td>{{$a->password}}</td>
                <td>
                    <div type="submit" class="badge badge-success">Edit</div>
                    <div type="submit" class="badge badge-danger">Hapus</div>
                </td>
            </tr>
            @endforeach;
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>