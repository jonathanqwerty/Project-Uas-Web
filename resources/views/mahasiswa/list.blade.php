<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="flex flex-col items-center mt-5 px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="container justify-center items-center">
            <div class="relative overflow-x-auto shadow-md sm:rounded-md">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <td>Nama</td>
                            <td>NIM</td>
                            <td>Jurusan</td>
                            <td>IPK</td>
                            <td>Jenis Kelamin</td>
                            <td>Kehadiran</td>
                            <td>AKSI</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($_m__mahasiswa as $m)
                            <tr>
                                <td>{{ $m->Nama }}</td>
                                <td>{{ $m->NIM }}</td>
                                <td>{{ $m->Jurusan }}</td>
                                <td>{{ $m->IPK }}</td>
                                <td>{{ $m->jenis_kelamin }}</td>
                                <td>{{ $m->absensi }}</td>
                                <td><a href="/mahasiswa/{{ $m->id }}/edit">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <button type="button"
                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 mt-5"><a
                    href="/mahasiswa/create">Tambahkan Mahasiswa</a></button>
        </div>
    </div>
</x-app-layout>
