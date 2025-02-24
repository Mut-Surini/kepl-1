
<?php
    
    if($_GET['page'] == 'mahasiswa') {
?>
    <a href="index.php?page=tambahMahasiswa">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v6m3-3H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
        </svg>
         Tambah Mahasiswa
        </button>
    </a>

    <p class="text-3xl text-center mt-2 mb-6 font-bold">Tabel Mahasiswa</p>

    <div class="container mx-auto px-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4">
            <table id="example" class="w-full py-3 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nim
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Mahasiswa
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Prodi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Kelamin
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alamat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 

                        $sql = "SELECT * FROM mahasiswa join prodi on mahasiswa.prodiId = prodi.prodiId";
                        $query = mysqli_query($conn, $sql);
                        $no = 1;
                        while($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?= $no ?>
                        </th>
                        <td class="px-6 py-4">
                            <?= $data['nim'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $data['nama'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $data['namaProdi'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $data['email'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php if($data['jenisKelamin'] == 'L') { echo "Laki-laki"; } else { echo "Perempuan"; } ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $data['alamat'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <a href="index.php?page=editMahasiswa&nim=<?= $data['nim'] ?>"><button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-7 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button></a>
                            <a href="proses.php?page=hapusMahasiswa&nim=<?= $data['nim'] ?>"><button onclick="return confirm('Apakah Yakin ingin Menghapus Data ?');" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Delete</button></a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                    <?php } ?>       
                </tbody>
            </table>
        </div>

    </div>

<?php
    }

    if($_GET['page'] == 'dosen') {
?>
    <a href="index.php?page=tambahDosen">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v6m3-3H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
        </svg>
         Tambah Dosen
        </button>
    </a>

    <p class="text-3xl text-center mb-10 font-bold">Tabel Dosen</p>

    <div class="container mx-auto px-8">
        <div class="relative overflow-x-auto p-4 shadow-md sm:rounded-lg">
            <table id="example" class="w-full py-3 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nip
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Dosen
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Prodi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nomor Telepon
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alamat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $sql = "SELECT * FROM dosen join prodi on dosen.prodiId = prodi.prodiId";
                        $query = mysqli_query($conn, $sql);
                        $no = 1;
                        while($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?= $no ?>
                        </th>
                        <td class="px-6 py-4">
                            <?= $data['nip'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $data['namaDosen'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $data['namaProdi'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $data['email'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $data['notelp'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $data['alamat'] ?>
                        </td>
                        <td class="px-6 py-4 flex justify-center">
                            <a href="index.php?page=editDosen&nip=<?= $data['nip'] ?>"><button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-7 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button></a>
                            <a href="proses.php?page=hapusDosen&nip=<?= $data['nip'] ?>"><button onclick="return confirm('Apakah Yakin ingin Menghapus Data ?');" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Delete</button></a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                    <?php } ?>       
                </tbody>
            </table>
        </div>

    </div>

<?php
    }

    if($_GET['page'] == 'prodi') {
?>
    <a href="index.php?page=tambahProdi">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v6m3-3H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
        </svg>
         Tambah Prodi
        </button>
    </a>

    <p class="text-3xl text-center mb-10 font-bold">Tabel Prodi</p>

    <div class="container mx-auto px-8">
        <div class="relative overflow-x-auto p-4 shadow-md sm:rounded-lg">
            <table id="example" class="w-full py-3 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Prodi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenjang Studi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Keterangan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $sql = "SELECT * FROM prodi";
                        $query = mysqli_query($conn, $sql);
                        $no = 1;
                        while($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?= $no ?>
                        </th>
                        <td class="px-6 py-4">
                            <?= $data['namaProdi'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $data['jenjangStudi'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $data['keterangan'] ?>
                        </td>
                        <td class="px-6 py-4 flex justify-center">
                            <a href="index.php?page=editProdi&id=<?= $data['prodiId'] ?>"><button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-7 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button></a>
                            <a href="proses.php?page=hapusProdi&id=<?= $data['prodiId'] ?>"><button onclick="return confirm('Apakah Yakin ingin Menghapus Data ?');" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Delete</button></a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                    <?php } ?>       
                </tbody>
            </table>
        </div>

    </div>
<?php
    }

    if($_GET['page'] == "kategori"){

?>
    <a href="index.php?page=tambahKategori">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v6m3-3H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
        </svg>
         Tambah Kategori
        </button>
    </a>

<p class="text-3xl text-center mb-10 font-bold">Tabel Kategori</p>

<div class="container mx-auto px-8">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4">
        <table id="example" class="w-full py-3 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Kategori
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = "SELECT * FROM kategori";
                    $query = mysqli_query($conn, $sql);
                    $no = 1;
                    while($data = mysqli_fetch_array($query)) {
                ?>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= $no ?>
                    </th>
                    <td class="px-6 py-4">
                        <?= $data['nama_kategori'] ?>
                    </td>
                    <td class="px-6 py-4 flex justify-center">
                        <a href="index.php?page=editKategori&id=<?= $data['id'] ?>"><button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-7 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button></a>
                        <a href="proses.php?page=hapusKategori&id=<?= $data['id'] ?>"><button onclick="return confirm('Apakah Yakin ingin Menghapus Data ?');" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Delete</button></a>
                    </td>
                </tr>
                <?php $no++; ?>
                <?php } ?>       
            </tbody>
        </table>
    </div>

</div>

<?php
    }

    if($_GET['page'] == "berita"){
?>
    <a href="index.php?page=tambahBerita">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v6m3-3H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
        </svg>
         Tambah Berita
        </button>
    </a>


<p class="text-3xl text-center mb-10 font-bold">Tabel Berita</p>

<div class="container mx-auto px-8">
    <div class="relative overflow-x-auto p-4 shadow-md sm:rounded-lg">
        <table id="example" class="w-full py-3 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        User
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kategori
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Judul Berita
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Gambar 
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Isi Berita
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = "SELECT *, berita.id as 'beritaId' from user join berita on user.id = user_id join kategori on berita.kategori_id = kategori.id";
                    $query = mysqli_query($conn, $sql);
                    $no = 1;

                    while($data = mysqli_fetch_array($query)) {
                    $limitedIsiBerita = substr($data['isi_berita'], 0, 40) . '...';
                ?>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= $no ?>
                    </th>
                    <td class="px-6 py-4">
                        <?= $data['fullName'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data['nama_kategori'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data['judul_berita'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <img src="uploads/<?= $data['file_upload'] ?>" alt="">
                    </td>
                    <td class="px-6 py-4">
                        <?= $limitedIsiBerita ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data['data_created'] ?>
                    </td>
                    <td class="px-6 py-4 flex justify-center">
                        <a href="index.php?page=editBerita&id=<?= $data['beritaId'] ?>"><button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-7 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button></a>
                        <a href="proses.php?page=hapusBerita&id=<?= $data['beritaId'] ?>"><button onclick="return confirm('Apakah Yakin ingin Menghapus Data ?');" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Delete</button></a>
                    </td>
                </tr>
                <?php $no++; ?>
                <?php } ?>       
            </tbody>
        </table>
    </div>

</div>

<?php } ?>

<?php if($_GET['page'] == "tambahMahasiswa"){?>

    <a href="index.php?page=mahasiswa">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
        </svg>
         Kembali Ke Tabel Mahasiswa
        </button>
    </a>

    <p class="text-3xl text-center mt-2 font-bold">Tambah Mahasiswa</p>

    <div class="container mx-auto px-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        
            <form class="max-w-md mx-auto mt-4 py-6" method="POST" action="proses.php?page=tambahMahasiswa">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="nama" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="nim" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nim</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="L" name="jenisKelamin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki Laki</label>
                            </div>
                        </li>
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-id" type="radio" value="P" name="jenisKelamin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="horizontal-list-radio-id" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select" name="prodi" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option selected>Pilih Program Studi</option>
                        <?php 
                            $sql = mysqli_query($conn, "SELECT * FROM prodi");
                            while ($data = mysqli_fetch_array($sql)) {
                        ?>
                            <option value="<?= $data['prodiId']?>"><?= $data['namaProdi']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="email" name="email" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <h3 class="mb-4 font-semibold text-center text-gray-900 dark:text-white">Pilih Hobi</h3>
                    <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center ps-3">
                                <input id="vue-checkbox-list" type="checkbox" name="hobi[]" value="menyanyi" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="vue-checkbox-list" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Menyanyi</label>
                            </div>
                        </li>
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center ps-3">
                                <input id="react-checkbox-list" type="checkbox" name="hobi[]" value="mengambar" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="react-checkbox-list" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mengambar</label>
                            </div>
                        </li>
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center ps-3">
                                <input id="angular-checkbox-list" type="checkbox" name="hobi[]" value="menari" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="angular-checkbox-list" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Menari</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="grid md:grid-cols-3 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="underline_select" class="sr-only">Underline select</label>
                        <select name="tanggalLahir" id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option selected>Tanggal Lahir</option>
                            <?php for ($i = 1; $i <= 31; $i++) { ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="underline_select" class="sr-only">Underline select</label>
                        <select name="bulanLahir" id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option selected>Bulan Lahir</option>
                            <?php $daftarBulan = [1=>"Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"]; ?>
                            <?php for ($i = 1; $i <= count($daftarBulan); $i++) { ?>
                                <option value="<?= $i ?>"><?= $daftarBulan[$i] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="underline_select" class="sr-only">Underline select</label>
                        <select name="tahunLahir" id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option selected>Tahun Lahir</option>
                            <?php for ($i = 2024; $i >= 1900; $i--) { ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="alamat" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat</label>
                </div>
                <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-12 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambahkan Data</button>
            </form>
        </div>
    </div>


<?php } ?>

<?php if($_GET['page'] == "editMahasiswa"){?>

    <a href="index.php?page=mahasiswa">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
        </svg>
         Kembali Ke Tabel Mahasiswa
        </button>
    </a>

    <p class="text-3xl text-center mt-2 font-bold">Edit Mahasiswa</p>

    <?php
        $sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = '$_GET[nim]'");
        $data = mysqli_fetch_array($sql);
    ?>

    <div class="container mx-auto px-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        
            <form class="max-w-md mx-auto mt-4 py-6" method="POST" action="proses.php?page=editMahasiswa&nim=<?= $data['nim'] ?>">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" value="<?= $data['nama'] ?>" name="nama" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" value="<?= $data['nim'] ?>" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nim</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" <?php if($data['jenisKelamin'] == 'L') echo "checked"; ?> type="radio" value="L" name="jenisKelamin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki Laki</label>
                            </div>
                        </li>
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-id" <?php if($data['jenisKelamin'] == 'P') echo "checked"; ?> type="radio" value="P" name="jenisKelamin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="horizontal-list-radio-id" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select" name="prodi" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option>Pilih Program Studi</option>
                        <?php 
                            $sql2 = mysqli_query($conn, "SELECT * FROM prodi");
                            $hobi = explode(',', $data['hobi']);
                            $tanggal = explode('-', $data['tanggalLahir']);
                            while ($data2 = mysqli_fetch_array($sql2)) {
                        ?>
                            <option <?php if($data['prodiId'] == $data2['prodiId']) echo "selected";?> value="<?= $data2['prodiId']?>"><?= $data2['namaProdi']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="email" value="<?= $data['email'] ?>" name="email" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <h3 class="mb-4 font-semibold text-center text-gray-900 dark:text-white">Pilih Hobi</h3>
                    <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center ps-3">
                                <input id="vue-checkbox-list" <?php if(in_array('Menyanyi', $hobi)) echo "checked"; ?> type="checkbox" name="hobi[]" value="Menyanyi" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="vue-checkbox-list" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Menyanyi</label>
                            </div>
                        </li>
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center ps-3">
                                <input id="react-checkbox-list" <?php if(in_array('Mengambar', $hobi)) echo "checked"; ?> type="checkbox" name="hobi[]" value="Mengambar" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="react-checkbox-list" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mengambar</label>
                            </div>
                        </li>
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center ps-3">
                                <input id="angular-checkbox-list" <?php if(in_array('Menari', $hobi)) echo "checked"; ?> type="checkbox" name="hobi[]" value="Menari" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="angular-checkbox-list" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Menari</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="grid md:grid-cols-3 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="underline_select" class="sr-only">Underline select</label>
                        <select name="tanggalLahir" id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option>Tanggal Lahir</option>
                            <?php for ($i = 1; $i <= 31; $i++) { ?>
                                <option <?php if($tanggal[2] == $i) echo ("selected") ?> value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="underline_select" class="sr-only">Underline select</label>
                        <select name="bulanLahir" id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option>Bulan Lahir</option>
                            <?php $daftarBulan = [1=>"Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"]; ?>
                            <?php for ($i = 1; $i <= count($daftarBulan); $i++) { ?>
                                <option <?php if($tanggal[1] == $i) echo ("selected") ?> value="<?= $i ?>"><?= $daftarBulan[$i] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="underline_select" class="sr-only">Underline select</label>
                        <select name="tahunLahir" id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option>Tahun Lahir</option>
                            <?php for ($i = 2024; $i >= 1900; $i--) { ?>
                                <option <?php if($tanggal[0] == $i) echo ("selected") ?> value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" value="<?= $data['alamat'] ?>" name="alamat" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat</label>
                </div>
                <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-12 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Perbaharui Data</button>
            </form>

        </div>

    </div>

<?php } ?>

<?php if($_GET['page'] == "tambahDosen"){?>
    <a href="index.php?page=dosen">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
        </svg>
         Kembali Ke Tabel Dosen
        </button>
    </a>

    <p class="text-3xl text-center mt-2 font-bold">Tambah Dosen</p>

    <div class="container mx-auto px-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        
            <form class="max-w-md mx-auto mt-4 py-6" method="POST" action="proses.php?page=tambahDosen">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="nip" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nip</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="namaDosen" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Dosen</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="email" name="email" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select" name="prodi" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option selected>Pilih Program Studi</option>
                        <?php 
                            $sql = mysqli_query($conn, "SELECT * FROM prodi");
                            while ($data = mysqli_fetch_array($sql)) {
                        ?>
                            <option value="<?= $data['prodiId']?>"><?= $data['namaProdi']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="number" name="noTelp" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor Telepon</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="alamat" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat</label>
                </div>
                <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-12 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambahkan Data</button>
            </form>
        </div>
    </div>

<?php } ?>

<?php if($_GET['page'] == "editDosen"){?>
    <a href="index.php?page=dosen">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
        </svg>
         Kembali Ke Tabel Dosen
        </button>
    </a>

    <p class="text-3xl text-center mt-2 font-bold">Edit Dosen</p>

    <?php 
    
        $sql = mysqli_query($conn, "SELECT * FROM dosen WHERE nip = '$_GET[nip]'");
        $data = mysqli_fetch_array($sql);
    ?>

    <div class="container mx-auto px-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        
            <form class="max-w-md mx-auto mt-4 py-6" method="POST" action="proses.php?page=editDosen&nip=<?= $data['nip']?>">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" value="<?= $data['nip'] ?>" name="nip" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nip</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" value="<?= $data['namaDosen'] ?>" name="namaDosen" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required/>
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Dosen</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="email" value="<?= $data['email'] ?>" name="email" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select" name="prodi" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option>Pilih Program Studi</option>
                        <?php 
                            $sql2 = mysqli_query($conn, "SELECT * FROM prodi");
                            while ($data2 = mysqli_fetch_array($sql2)) {
                        ?>
                            <option <?php if($data['prodiId'] == $data2['prodiId']) echo "selected"; ?> value="<?= $data2['prodiId']?>"><?= $data2['namaProdi']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="number" value="<?= $data['notelp'] ?>" name="noTelp" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor Telepon</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" value="<?= $data['alamat'] ?>" name="alamat" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat</label>
                </div>
                <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-12 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Perbaharui Data</button>
            </form>
        </div>
    </div>
<?php } ?>

<?php if($_GET['page'] == "tambahProdi"){?>
    <a href="index.php?page=prodi">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
        </svg>
         Kembali Ke Tabel Prodi
        </button>
    </a>

    <p class="text-3xl text-center mt-2 font-bold">Tambah Prodi</p>

    <div class="container mx-auto px-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        
            <form class="max-w-md mx-auto mt-4 py-6" method="POST" action="proses.php?page=tambahProdi">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="namaProdi" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Prodi</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select" name="jenjangStudi" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option selected>Pilih Jenjang Studi</option>
                        <?php 
                            $jenjangStudi = ['D3', 'D4', 'S1', 'S2', 'S3'];
                            foreach($jenjangStudi as $js){
                        ?>
                            <option value="<?= $js ?>"><?= $js ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="keterangan" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Keterangan</label>
                </div>
                <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-12 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambahkan Data</button>
            </form>
        </div>
    </div>
<?php } ?>

<?php if($_GET['page'] == "editProdi"){?>
    <a href="index.php?page=prodi">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
        </svg>
         Kembali Ke Tabel Prodi
        </button>
    </a>

    <p class="text-3xl text-center mt-2 font-bold">Edit Prodi</p>

    <?php
    
        $sql = mysqli_query($conn, "SELECT * FROM prodi WHERE prodiId = '$_GET[id]'");
        $data = mysqli_fetch_array($sql);
    ?>

    <div class="container mx-auto px-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        
            <form class="max-w-md mx-auto mt-4 py-6" method="POST" action="proses.php?page=editProdi&id=<?= $_GET['id'] ?>">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" value="<?= $data['namaProdi']?>" name="namaProdi" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Prodi</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select" name="jenjangStudi" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option>Pilih Jenjang Studi</option>
                        <?php 
                            $jenjangStudi = ['D3', 'D4', 'S1', 'S2', 'S3'];
                            foreach($jenjangStudi as $js){
                        ?>
                            <option <?php if($data['jenjangStudi'] == $js) echo "selected"; ?> value="<?= $js ?>"><?= $js ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" value="<?= $data['keterangan']?>" name="keterangan" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Keterangan</label>
                </div>
                <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-12 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Perbaharui Data</button>
            </form>
        </div>
    </div>
<?php } ?>

<?php if($_GET['page'] == "tambahBerita"){?>
    <a href="index.php?page=berita">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
        </svg>
         Kembali Ke Tabel Berita
        </button>
    </a>

    <p class="text-3xl text-center mt-2 font-bold">Tambah Berita</p>

    <div class="container mx-auto px-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        
            <form class="max-w-md mx-auto mt-4 py-6" method="POST" action="proses.php?page=tambahBerita" enctype="multipart/form-data">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="judulBerita" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Judul Berita</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select" name="kategori" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option selected>Pilih Kategori</option>
                        <?php 
                            $sql = mysqli_query($conn, "SELECT * FROM kategori");
                            while ($data = mysqli_fetch_array($sql)) {
                        ?>
                            <option value="<?= $data['id']?>"><?= $data['nama_kategori']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Pilih Gambar Untuk Diupload (SVG,PNG,JPEG)</p>
                            </div>
                            <input id="dropzone-file" name="file_upload" type="file" class="hidden" onchange="previewImage()"/>
                        </label>
                    </div> 
                </div>
                <div class="relative z-0 w-full mb-5 group text-center" id="tittlePreview">
                   
                </div>
                <div class="relative z-0 w-full mb-5 group" id="blockPreview">
                   
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <textarea id="message" name="isiBerita" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tambahkan Isi Berita..."></textarea>
                </div>
                <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-12 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambahkan Data</button>
            </form>
        </div>
    </div>

    <script>
        function previewImage() {
            const blockPreview = document.getElementById('blockPreview');
            const fileInput = document.getElementById('dropzone-file');
            const tittlePreview = document.getElementById('tittlePreview');

            tittlePreview.innerHTML = "<p>Preview Gambar</p>"
            blockPreview.innerHTML = `<img src="${URL.createObjectURL(fileInput.files[0])}" alt="" class="w-full border-blue-100 border-2 rounded" width="200px">`;
        }

    </script>

<?php } ?>

<?php if($_GET['page'] == "editBerita"){?>
    <a href="index.php?page=berita">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
        </svg>
         Kembali Ke Tabel Berita
        </button>
    </a>

    <p class="text-3xl text-center mt-2 font-bold">Edit Berita</p>

    <div class="container mx-auto px-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            <?php 
                $sql = mysqli_query($conn, "SELECT * FROM berita WHERE id = '$_GET[id]'");
                $data = mysqli_fetch_array($sql);
            ?>
        
            <form class="max-w-md mx-auto mt-4 py-6" method="POST" action="proses.php?page=editBerita&id=<?=$data['id']?>" enctype="multipart/form-data">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" value="<?= $data['judul_berita'] ?>" name="judulBerita" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Judul Berita</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select" name="kategori" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option>Pilih Kategori</option>
                        <?php 
                            $sql2 = mysqli_query($conn, "SELECT * FROM kategori");
                            while ($data2 = mysqli_fetch_array($sql2)) {
                        ?>
                            <option <?php if($data['kategori_id'] == $data2['id']) echo "selected"?> <?php if($data['kategori_id'] == $data2['id']) ?> value="<?= $data2['id']?>"><?= $data2['nama_kategori']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Pilih Gambar Untuk Diupload (SVG,PNG,JPEG)</p>
                            </div>
                            <input id="dropzone-file" name="file_upload" type="file" class="hidden" onchange="previewImage()"/>
                        </label>
                    </div> 
                </div>
                <div class="relative z-0 w-full mb-5 group text-center" id="tittlePreview">
                   <p>Preview Gambar</p>
                </div>
                <div class="relative z-0 w-full mb-5 group" id="blockPreview">
                   <img src="uploads/<?= $data['file_upload']?>" class="w-full border-blue-100 border-2 rounded" alt="">
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <textarea id="message" name="isiBerita" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tambahkan Isi Berita..."><?= $data['isi_berita']?></textarea>
                </div>
                <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-12 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Perbaharui Data</button>
            </form>
        </div>
    </div>

    <script>
        function previewImage() {
            const blockPreview = document.getElementById('blockPreview');
            const fileInput = document.getElementById('dropzone-file');
            const tittlePreview = document.getElementById('tittlePreview');

            tittlePreview.innerHTML = "<p>Preview Gambar</p>"
            blockPreview.innerHTML = `<img src="${URL.createObjectURL(fileInput.files[0])}" alt="" class="w-full border-blue-100 border-2 rounded" width="200px">`;
        }

    </script>
<?php } ?>

<?php if($_GET['page'] == "editKategori"){?>
    <a href="index.php?page=kategori">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
        </svg>
         Kembali Ke Tabel Kategori
        </button>
    </a>

    <p class="text-3xl text-center mt-2 font-bold">Edit Kategori</p>

    <?php 

        $sql = mysqli_query($conn, "SELECT * FROM kategori WHERE id = '$_GET[id]'");
        $data = mysqli_fetch_array($sql);
    ?>

    <div class="container mx-auto px-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        
            <form class="max-w-md mx-auto mt-4 py-6" method="POST" action="proses.php?page=editKategori&id=<?= $data['id'] ?>">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" value="<?= $data['nama_kategori']?>" name="namaKategori" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Kategori</label>
                </div>
                <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-12 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Perbaharui Data</button>
            </form>
        </div>
    </div>
<?php } ?>

<?php if($_GET['page'] == "tambahKategori"){?>
    <a href="index.php?page=kategori">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
        </svg>
         Kembali Ke Tabel Kategori
        </button>
    </a>

    <p class="text-3xl text-center mt-2 font-bold">Tambah Kategori</p>

    <div class="container mx-auto px-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        
            <form class="max-w-md mx-auto mt-4 py-6" method="POST" action="proses.php?page=tambahKategori">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="namaKategori" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Kategori</label>
                </div>
                <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-12 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambahkan Kategori</button>
            </form>
        </div>
    </div>
<?php } ?>

<?php if($_GET['page'] == "user"){?>
    <a href="index.php?page=tambahUser">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v6m3-3H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
        </svg>
         Tambah User
        </button>
    </a>

<p class="text-3xl text-center mb-10 font-bold">Tabel User</p>

<div class="container mx-auto px-8">
    <div class="relative overflow-x-auto p-4 shadow-md sm:rounded-lg">
        <table id="example" class="w-full py-3 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama User
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Level User
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = "SELECT * FROM user";
                    $query = mysqli_query($conn, $sql);
                    $no = 1;
                    while($data = mysqli_fetch_array($query)) {
                ?>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= $no ?>
                    </th>
                    <td class="px-6 py-4">
                        <?= $data['fullName'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data['email'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data['level'] ?>
                    </td>
                    <td class="px-6 py-4 flex justify-center">
                        <a href="index.php?page=editUser&id=<?= $data['id'] ?>"><button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-7 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button></a>
                        <a href="proses.php?page=hapusUser&id=<?= $data['id'] ?>"><button onclick="return confirm('Apakah Yakin ingin Menghapus Data ?');" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Delete</button></a>
                    </td>
                </tr>
                <?php $no++; ?>
                <?php } ?>       
            </tbody>
        </table>
    </div>

</div>
<?php } ?>

<?php if($_GET['page'] == "tambahUser"){?>
    <a href="index.php?page=user">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
        </svg>
         Kembali Ke Tabel User
        </button>
    </a>

    <p class="text-3xl text-center mt-2 font-bold">Tambah User</p>

    <div class="container mx-auto px-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        
            <form class="max-w-md mx-auto mt-4 py-6" method="POST" action="proses.php?page=tambahUser">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="namaUser" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama User</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="email" name="email" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select" name="level" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option selected>Pilih Level User</option>
                        <?php 
                            $listLevel = ['User', 'Admin', 'Root'];
                            foreach ($listLevel as $level) {
                        ?>
                            <option value="<?= $level ?>"><?= $level ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="password" name="password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="password" name="rePassword" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Konfirmasi Password</label>
                    </div>
                </div>
                <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-12 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambahkan Data</button>
            </form>
        </div>
    </div>
<?php } ?>

<?php if($_GET['page'] == "editUser"){?>
    <a href="index.php?page=user">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
        </svg>
         Kembali Ke Tabel User
        </button>
    </a>

    <p class="text-3xl text-center mt-2 font-bold">Edit User</p>

    <div class="container mx-auto px-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            <?php 
                $sql = mysqli_query($conn, "SELECT * FROM user WHERE id = '$_GET[id]'");
                $data = mysqli_fetch_array($sql);
            ?>
        
            <form class="max-w-md mx-auto mt-4 py-6" method="POST" action="proses.php?page=editUser&id=<?= $data['id'] ?>">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" value="<?= $data['fullName']?>" name="namaUser" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama User</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="email" value="<?= $data['email']?>" name="email" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select" name="level" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option>Pilih Level User</option>
                        <?php 
                            $listLevel = ['User', 'Admin', 'Root'];
                            foreach ($listLevel as $level) {
                        ?>
                            <option <?php if($data['level'] == $level) echo "selected"; ?> value="<?= $level ?>"><?= $level ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="password" name="password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "/>
                        <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password Baru</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="password" name="rePassword" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "/>
                        <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Konfirmasi Password</label>
                    </div>
                </div>
                <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-12 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Perbaharui Data</button>
            </form>
        </div>
    </div>
<?php } ?>

<?php if($_GET['page'] == "mataKuliah"){?>
    <a href="index.php?page=tambahMataKuliah">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v6m3-3H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
        </svg>
         Tambah Mata Kuliah
        </button>
    </a>

<p class="text-3xl text-center mb-10 font-bold">Tabel Mata Kuliah</p>

<div class="container mx-auto px-8">
    <div class="relative overflow-x-auto p-4 shadow-md sm:rounded-lg">
        <table id="example" class="w-full py-3 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Mata Kuliah
                    </th>
                    <th scope="col" class="px-6 py-3">
                        SKS
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Program Studi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Semester
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = "SELECT * FROM mata_kuliah join prodi on mata_kuliah.prodi_id = prodi.prodiId";
                    $query = mysqli_query($conn, $sql);
                    $no = 1;
                    while($data = mysqli_fetch_array($query)) {
                ?>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= $no ?>
                    </th>
                    <td class="px-6 py-4">
                        <?= $data['nama_mk'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data['sks'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data['namaProdi'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data['semester'] ?>
                    </td>
                    <td class="px-6 py-4 flex justify-center">
                        <a href="index.php?page=editMataKuliah&id=<?= $data['kode_mk'] ?>"><button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-7 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button></a>
                        <a href="proses.php?page=hapusMataKuliah&id=<?= $data['kode_mk'] ?>"><button onclick="return confirm('Apakah Yakin ingin Menghapus Data ?');" onclick="return confirm('Apakah Yakin ingin Menghapus Data ?');" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Delete</button></a>
                    </td>
                </tr>
                <?php $no++; ?>
                <?php } ?>       
            </tbody>
        </table>
    </div>

</div>
<?php } ?>

<?php if($_GET['page'] == "tambahMataKuliah"){?>
    <a href="index.php?page=mataKuliah">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
        </svg>
         Kembali Ke Tabel Mata Kuliah
        </button>
    </a>

    <p class="text-3xl text-center mt-2 font-bold">Tambah Mata Kuliah</p>
    <?php if(isset($_GET['error'])){?>
        <p class="text-xl text-center mt-2 font-bold text-red-500"><?= $_GET['error']?></p>
    <?php } ?>

    <div class="container mx-auto px-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        
            <form class="max-w-md mx-auto mt-4 py-6" method="POST" action="proses.php?page=tambahMataKuliah">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="kode_mk" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kode Mata Kuliah</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="nama_mk" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Matakuliah</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="number" name="sks" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Jumlah SKS</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select required id="underline_select" name="prodi_id" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option>Pilih Program Studi</option>
                        <?php 
                            $sql2 = mysqli_query($conn, "SELECT * FROM prodi");
                            while ($data2 = mysqli_fetch_array($sql2)) {
                        ?>
                            <option value="<?= $data2['prodiId']?>"><?= $data2['namaProdi']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select required id="underline_select" name="semester" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option>Pilih Semester</option>
                        <?php 
                            for ($i = 1; $i <= 8; $i++) {
                        ?>
                            <option value="<?= $i?>"><?= $i?></option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-12 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambahkan Data</button>
            </form>
        </div>
    </div>
<?php } ?>

<?php if($_GET['page'] == "editMataKuliah"){?>
    <a href="index.php?page=mataKuliah">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
        </svg>
         Kembali Ke Tabel Mata Kuliah
        </button>
    </a>

    <p class="text-3xl text-center mt-2 font-bold">Edit Mata Kuliah</p>

    <?php
        $query = "SELECT * from mata_kuliah WHERE kode_mk = '$_GET[id]'";
        $sql = mysqli_query($conn,$query);

        $data = mysqli_fetch_array($sql);
    
    ?>

    <div class="container mx-auto px-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        
            <form class="max-w-md mx-auto mt-4 py-6" method="POST" action="proses.php?page=editMataKuliah&id=<?= $_GET['id']?>">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="kode_mk" value="<?= $data['kode_mk']?>" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kode Mata Kuliah</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="nama_mk" value="<?= $data['nama_mk']?>" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Matakuliah</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="number" value="<?= $data['sks']?>" name="sks" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Jumlah SKS</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select" name="prodi_id" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option>Pilih Program Studi</option>
                        <?php 
                            $sql2 = mysqli_query($conn, "SELECT * FROM prodi");
                            while ($data2 = mysqli_fetch_array($sql2)) {
                        ?>
                            <option <?php if($data['prodi_id'] == $data2['prodiId']) echo 'selected'; ?> value="<?= $data2['prodiId']?>"><?= $data2['namaProdi']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select" name="semester" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option selected>Pilih Semester</option>
                        <?php 
                            for ($i = 1; $i <= 8; $i++) {
                        ?>
                            <option <?php if($data['semester'] == $i) echo 'selected'; ?> value="<?= $i?>"><?= $i?></option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-12 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Perbaharui Data</button>
            </form>
        </div>
    </div>
<?php } ?>
