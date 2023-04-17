<x-app-layout>
    <x-slot name="header">
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
            <title>Daftar Kehadiran</title>
        </head>

        <body>
            <div class="py-12">
                <table class="table">
                    <tr>
                        <td>Nama</td>
                        <td>NIM</td>
                        <td>Jurusan</td>
                        <td>IPK</td>
                        <td>Jenis Kelamin</td>
                        <td>Kehadiran</td>
                    </tr>
                    @foreach ($mahasiswa as $m)
                        <tr>
                            <td>{{ $m->nama }}</td>
                            <td>{{ $m->nim }}</td>
                            <td>{{ $m->jurusan }}</td>
                            <td>{{ $m->ipk }}</td>
                            <td>{{ $m->jenis_kelamin }}</td>
                            <td>{{ $m->absensi }}</td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </body>

        </html>
    </x-slot>
</x-app-layout>
