<h2>Edit Data Siswa</h2>

<form action="/siswa/{{ $siswa->id }}" method="POST">
    @csrf
    @method('PUT')

    Nama :
    <input type="text" name="nama" value="{{ $siswa->nama }}"><br><br>

    Kelas :
    <input type="text" name="kelas" value="{{ $siswa->kelas }}"><br><br>

    <button type="submit">Update</button>

</form>