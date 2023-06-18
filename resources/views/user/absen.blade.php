<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script>
    <section class="bg-white-50 dark:bg-white-900 ">
        <div class="flex flex-col items-center mt-5 px-6 py-8 mx-auto md:h-screen lg:py-0">


            <a href="/user/absen/NIM"
                class="block max-w-sm p-6 bg-green border border-green-200 rounded-lg shadow hover:bg-green-100 dark:bg-green-800 dark:border-green-700 dark:hover:bg-green-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-green-900 dark:text-white">Absen Masuk</h5>
            </a>

            <div class="container justify-center items-center ">
                <div class="relative overflow-x-auto mt-4">
                    <h1 class="text-center font-bold mb-5 text-4xl">Riwayat Kehadiran</h1>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-md">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        id
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        NIM
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jam
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    @foreach ($_tabsen as $a)
                                <tr>
                                    <td>{{ $a->id }}</td>
                                    <td>{{ $a->NIM }}</td>
                                    <td>{{ $a->jam }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-app-layout>
