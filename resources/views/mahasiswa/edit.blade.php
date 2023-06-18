<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script>
    <section class="bg-white-50 dark:bg-white-900 ">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Edit Mahasiswa
                    </h1>
                    <form action="/mahasiswa/{{ $_m__mahasiswa->id }}" method="POST" class="space-y-4 md:space-y-6">
                        @method('put')
                        @csrf
                        <div>
                            <label for="text"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" name="nama" placeholder="Nama" value="{{ $_m__mahasiswa->Nama }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Nama Lengkap">
                        </div>
                        <div>
                            <label for="text"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                            <input type="text" name="nim" placeholder="NIM" value="{{ $_m__mahasiswa->NIM }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="text"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan</label>
                            <input type="text" name="jurusan" placeholder="Jurusan" value="{{ $_m__mahasiswa->Jurusan }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="text"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">IPK</label>
                            <input type="text" name="ipk" placeholder="IPK" value="{{ $_m__mahasiswa->IPK }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>

                        <label for="countries"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                            Kelamin</label>
                        <select name="jenis_kelamin"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="L" @if ($_m__mahasiswa->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                            <option value="P" @if ($_m__mahasiswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                        </select>
                        <label for="countries"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Absensi</label>
                        <select name="absensi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="Hadir" @if ($_m__mahasiswa->absensi == 'Hadir') selected @endif>Hadir</option>
                            <option value="Tidak Hadir" @if ($_m__mahasiswa->absensi == 'Tidak Hadir') selected @endif>Tidak Hadir
                            </option>
                        </select>
                        <button type="button"
                            class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><input
                            type="submit"  name="submit" value="Save"></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
