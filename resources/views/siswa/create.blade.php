<h2>Tambah Data Siswa</h2>

<form action="/siswa" method="POST">
    @csrf

    Nama :
    <input type="text" name="nama"><br><br>

    Kelas :
    <input type="text" name="kelas"><br><br>

    <button type="submit">Simpan</button>

</form>