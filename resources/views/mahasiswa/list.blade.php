<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12">
    <table class="table">
      <tr>
          <td>Nama</td>
          <td>NIM</td>
          <td>Jurusan</td>
          <td>IPK</td>
          <td>Jenis Kelamin</td>
          <td>Kehadiran</td>
          <td>AKSI</td>
      </tr>
      @foreach ($mahasiswa as $m)
          <tr>
              <td>{{ $m->nama }}</td>
              <td>{{ $m->nim }}</td>
              <td>{{ $m->jurusan }}</td>
              <td>{{ $m->ipk }}</td>
              <td>{{ $m->jenis_kelamin }}</td>
              <td>{{ $m->absensi }}</td>
              <td><a href="/mahasiswa/{{ $m->id }}/edit" class="btn btn-warning">Edit</a></td>
          </tr>
      @endforeach

  </table>
  <a href="/mahasiswa/create" class="btn btn-primary">Tambahkan Mahasiswa</a>
  </div>
</x-app-layout>