<h2>Data Siswa</h2>

<a href="/siswa/create">Tambah Data</a>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>

    @foreach($siswa as $s)
    <tr>
        <td>{{ $s->nama }}</td>
        <td>{{ $s->kelas }}</td>
        <td>
            <a href="/siswa/{{ $s->id }}/edit">Edit</a>

            <form action="/siswa/{{ $s->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>