<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Edit Mahasiswa</h1>
    
        <form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST">
            @method('put')
            @csrf
            <input type="text" name="nama" placeholder="Nama" value="{{ $mahasiswa->nama }}"><br>
            <input type="text" name="nim" placeholder="NIM" value="{{ $mahasiswa->nim }}"><br>
            <input type="text" name="jurusan" placeholder="Jurusan" value="{{ $mahasiswa->jurusan }}"><br>
            <input type="text" name="ipk" placeholder="IPK" value="{{ $mahasiswa->ipk }}"><br>
            <select name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L" @if ($mahasiswa->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                <option value="P" @if ($mahasiswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
            </select><br>
            <select name="absensi">
                <option value="Hadir" @if ($mahasiswa->absensi == 'Hadir') selected @endif>Hadir</option>
                <option value="Tidak Hadir" @if ($mahasiswa->absensi == 'Tidak Hadir') selected @endif>Tidak Hadir</option>
            </select><br>
    
            <input type="submit" name="submit" value="Save">
        </form>
    </div>
</body>

</html>

