<from action="{{ route('rasyad.store') }}"method="post">
    @csrf
    NBI: <input type="text" name="nbi">
    NAMA: <input type="text" name="nama_mhs">
    <button type="submit">simpan</button>
</from>