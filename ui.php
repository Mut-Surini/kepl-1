<?php 

    if($_GET['page'] == 'home') {
?>
    <p class="text-3xl text-center my-10 font-bold">Halaman Utama</p>

    <div class="container mx-auto px-8 mb-10">
        <div class="grid grid-cols-3 gap-4 flex justify-center">
            <?php 
                include "koneksi.php";

                $query = "SELECT * from berita";
                $sql = mysqli_query($conn,$query);

                while($data = mysqli_fetch_array($sql)){

                $limitedIsiBerita = substr($data['isi_berita'], 0, 100) . '...';
            
            ?>
            <div class="max-w-sm mx-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col min-h-[400px]">
    <a href="#">
        <img class="rounded-t-lg w-fill" height="100px" src="admin/uploads/<?= $data['file_upload']?>" alt="" />
    </a>
    <div class="p-5 flex flex-col flex-grow">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $data['judul_berita']?></h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 flex-grow"><?= $limitedIsiBerita ?></p>
        <a href="index.php?page=berita&id=<?= $data['id']?>" 
           class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-auto">
            Read more
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>

            <?php } ?>
        </div>
    </div>

<?php
    }
    
    if($_GET['page'] == 'mahasiswa') {
?>
    <p class="text-3xl text-center my-10 font-bold">Tabel Mahasiswa</p>

    <div class="container mx-auto px-8">
        <div class="relative overflow-x-auto p-4 shadow-md sm:rounded-lg">
            <table id="example" class="w-full py-3 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
    <p class="text-3xl text-center mt-10 font-bold">Tabel Dosen</p>

    <div class="container mx-auto px-8">
        <div class="relative overflow-x-auto p-4 shadow-md sm:rounded-lg">
            <table id="example" class="w-full py-3 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
    <p class="text-3xl text-center my-10 font-bold">Tabel Prodi</p>

    <div class="container mx-auto px-8">
        <div class="relative overflow-x-auto p-4 shadow-md sm:rounded-lg">
            <table id="example" class="w-full py-3 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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

    include "koneksi.php";

    $query = "SELECT * from berita where id = ". $_GET['id'];
    $sql = mysqli_query($conn,$query);
    $data = mysqli_fetch_array($sql);

    $kategori = mysqli_query($conn, "SELECT * from kategori where id = ". $data['kategori_id']);
    $dataKategori = mysqli_fetch_array($kategori);
    
    $user = mysqli_query($conn, "SELECT * from user where id = ". $data['user_id']);
    $dataUser = mysqli_fetch_array($user);

    $dataTanggal = date('d F Y', strtotime($data['data_created']));
?>

    <p class="text-3xl text-center mt-10 mb-4 font-bold"><?= $data['judul_berita'] ?></p>
    <div class="inline-flex items-center justify-center w-full -mt-12">
        <hr class="w-64 h-1 my-8 bg-gray-200 border-0 rounded dark:bg-gray-700">
        <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
            <svg class="w-4 h-4 text-gray-700 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
            <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
            </svg>
        </div>
    </div>
    <p class="text-center -mt-4 mb-4 font-medium">Oleh : <?= $dataUser['fullName'] ?> , <?= $dataTanggal ?></p>
    <div class="container mx-auto px-20 mb-10">
        <img class="rounded-lg h-auto max-w-full border-4 border-blue-800 m-2" src="admin/uploads/<?= $data['file_upload']?>" alt="image description">
        <div class="container grid grid-cols-4 gap-4">
            <p type="p" class="ml-2 font-bold -mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><?= $dataKategori['nama_kategori'] ?></p>
        </div>
        <p class="text-center my-5" ><?= $data['isi_berita'] ?></p>
    </div>

<?php
    }

    if($_GET['page'] == "mataKuliah"){

        include "koneksi.php";
?>
    <p class="text-3xl text-center my-10 font-bold">Tabel Mata Kuliah</p>

<div class="container mx-auto px-8">
    <div class="relative overflow-x-auto p-4 shadow-md sm:rounded-lg">
        <table id="example" class="w-full py-3 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kode Matakuliah
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Matakuliah
                    </th>
                    <th scope="col" class="px-6 py-3">
                        SKS
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Prodi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Semester
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
                        <?= $data['kode_mk'] ?>
                    </td>
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
                </tr>
                <?php $no++; ?>
                <?php } ?>       
            </tbody>
        </table>
    </div>
</div>
<?php 
    }
?>


