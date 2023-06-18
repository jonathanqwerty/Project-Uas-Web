<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
        <title>Create Mahasiswa</title>
    </head>
    <body>
        <div class="container">
        <h1>Create Mahasiswa</h1>

        <form action="/mahasiswa/store" method="POST" class="form-label">
            @csrf
            <input type="text" name="nama" placeholder="Nama"><br>
            <input type="text" name="nim" placeholder="NIM"><br>
            <input type="text" name="jurusan" placeholder="Jurusan"><br>
            <input type="text" name="ipk" placeholder="IPK"><br>
            <select name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>

            <input type="submit" name="submit" value="Save">
        </form>
        </div>
    </body>
</html>
