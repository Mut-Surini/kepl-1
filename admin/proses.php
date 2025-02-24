<?php 

    include '../koneksi.php';
    session_start();

    if($_GET['page'] == 'tambahMahasiswa') {
        if(isset($_POST['submit'])){

            $tgl = $_POST['tahunLahir'] . "-" . $_POST['bulanLahir'] . "-" . $_POST['tanggalLahir'];
            $hobi = implode(',', $_POST['hobi']);

            $query = "INSERT INTO mahasiswa VALUES('$_POST[nim]','$_POST[nama]','$_POST[jenisKelamin]','$_POST[prodi]','$_POST[email]','$hobi','$tgl','$_POST[alamat]')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                echo "<script>window.location.href = 'index.php?page=mahasiswa'</script>";
            }
        }   
    }

    if($_GET['page'] == 'editMahasiswa') {
        if(isset($_POST['submit'])){

            $tgl = $_POST['tahunLahir'] . "-" . $_POST['bulanLahir'] . "-" . $_POST['tanggalLahir'];
            $hobi = implode(',', $_POST['hobi']);

            $query = "UPDATE mahasiswa set
                nama = '$_POST[nama]',
                jenisKelamin = '$_POST[jenisKelamin]',
                prodiId = '$_POST[prodi]',
                email = '$_POST[email]',
                hobi = '$hobi',
                tanggalLahir = '$tgl',
                alamat = '$_POST[alamat]'
                WHERE nim = '$_GET[nim]'
            ";

            $sql = mysqli_query($conn, $query);

            if($sql){
                echo "<script>window.location.href = 'index.php?page=mahasiswa'</script>";
            }
        }       
    }

    if($_GET['page'] == 'hapusMahasiswa') {
        $sql = "DELETE FROM mahasiswa WHERE nim = '$_GET[nim]'";
        $hapus = mysqli_query($conn, $sql);

        if($hapus){
            header("location:index.php?page=mahasiswa");
        }else{
            header("location:index.php?page=mahasiswa");
        }
    }

    if($_GET['page'] == 'tambahDosen') {
        if(isset($_POST['submit'])){

            $query = "INSERT INTO dosen VALUES('', '$_POST[nip]','$_POST[namaDosen]','$_POST[email]','$_POST[prodi]','$_POST[noTelp]','$_POST[alamat]')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                echo "<script>window.location.href = 'index.php?page=dosen'</script>";
            }
        } 
    }

    if($_GET['page'] == 'editDosen') {
        if(isset($_POST['submit'])){

            $query = "UPDATE dosen set
                namaDosen = '$_POST[namaDosen]',
                prodiId = '$_POST[prodi]',
                email = '$_POST[email]',
                notelp = '$_POST[noTelp]',
                alamat = '$_POST[alamat]'
                WHERE nip = '$_GET[nip]'";
            $sql = mysqli_query($conn, $query);

            if($sql){
                echo "<script>window.location.href = 'index.php?page=dosen'</script>";
            }
        }   
    }

    if($_GET['page'] == 'hapusDosen') {
        $sql = "DELETE FROM dosen WHERE nip = '$_GET[nip]'";
        $hapus = mysqli_query($conn, $sql);

        if($hapus){
            header("location:index.php?page=dosen");
        }else{
            header("location:index.php?page=dosen");
        }
    }

    if($_GET['page'] == 'tambahProdi') {
        if (isset($_POST['submit'])) { 
            
            $query = "INSERT INTO prodi VALUES('','$_POST[namaProdi]','$_POST[jenjangStudi]','$_POST[keterangan]')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                echo "<script>window.location.href = 'index.php?page=prodi'</script>";
            }
        }
    }

    if($_GET['page'] == 'editProdi') {
        if (isset($_POST['submit'])) { 
            
            $query = "UPDATE prodi SET namaProdi = '$_POST[namaProdi]', jenjangStudi = '$_POST[jenjangStudi]', keterangan = '$_POST[keterangan]' WHERE prodiId = '$_GET[id]'";
            $sql = mysqli_query($conn, $query);

            if($sql){
                echo "<script>window.location.href = 'index.php?page=prodi'</script>";
            }
        }
    }

    if($_GET['page'] == 'hapusProdi') {
        $query = "DELETE FROM prodi WHERE prodiId = '$_GET[id]'";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header('location:index.php?page=prodi');
        }   
    }

    if($_GET['page'] == 'tambahKategori') {
        if(isset($_POST['submit'])){

            $query = "INSERT INTO kategori VALUES('', '$_POST[namaKategori]')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                echo "<script>window.location.href = 'index.php?page=kategori'</script>";
            }
        }     
    }

    if($_GET['page'] == 'editKategori') {
        if(isset($_POST['submit'])){

            $query = "UPDATE kategori set
                nama_kategori = '$_POST[namaKategori]'
                WHERE id = '$_GET[id]'";
            $sql = mysqli_query($conn, $query);

            if($sql){
                echo "<script>window.location.href = 'index.php?page=kategori'</script>";
            }
        }  
    }

    if($_GET['page'] == 'hapusKategori') {
        $sql = "DELETE FROM kategori WHERE id = '$_GET[id]'";
        $hapus = mysqli_query($conn, $sql);

        if($hapus){
            header("location:index.php?page=kategori");
        }else{
            header("location:index.php?page=kategori");
        }
    }

    if($_GET['page'] == 'tambahBerita') {
        if(isset($_POST['submit'])){

            $nama_file = $_FILES['file_upload']['name'];
            $nama_file_tmp = $_FILES['file_upload']['tmp_name'];

            $randomFileName = rand(0,9999999) . "-" . $_FILES['file_upload']['name']; 

            $query = "INSERT INTO berita VALUES('', '$_SESSION[id]', '$_POST[kategori]','$_POST[judulBerita]', '$randomFileName', '$_POST[isiBerita]', now())";
            $sql = mysqli_query($conn, $query);
            $target_file = "uploads/" . $randomFileName;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                echo "<script>window.location.href = 'index.php?page=berita'</script>";
                return false;
            }

            if($sql){
                move_uploaded_file($nama_file_tmp, $target_file);
                echo "<script>window.location.href = 'index.php?page=berita'</script>";
            }
        }
    }

    if($_GET['page'] == 'editBerita') {
        if(isset($_POST['submit'])){

            $nama_file = $_FILES['file_upload']['name'];

            if($nama_file == "") {
                $query = "UPDATE berita set
                kategori_id = '$_POST[kategori]',
                judul_berita = '$_POST[judulBerita]',
                isi_berita = '$_POST[isiBerita]'
                WHERE id = '$_GET[id]'";
                $sql = mysqli_query($conn, $query);

                if($sql){
                    echo "<script>window.location.href = 'index.php?page=berita'</script>";
                }
            }else{

                $oldSql = mysqli_query($conn, "SELECT * FROM berita WHERE id = '$_GET[id]'");
                $data = mysqli_fetch_array($oldSql);

                $oldFile = $data['file_upload'];

                $nama_file_tmp = $_FILES['file_upload']['tmp_name'];
                $randomFileName = rand(0,9999999) . "-" . $_FILES['file_upload']['name'];

                $target_file = "uploads/" . $randomFileName;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                $query = "UPDATE berita set
                kategori_id = '$_POST[kategori]',
                judul_berita = '$_POST[judulBerita]',
                file_upload = '$randomFileName',
                isi_berita = '$_POST[isiBerita]'
                WHERE id = '$_GET[id]'";
                $sql = mysqli_query($conn, $query);

                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                    echo "<script>window.location.href = 'index.php?page=berita'</script>";
                    return false;
                }

                if($sql){
                    unlink("uploads/" . $oldFile);
                    move_uploaded_file($nama_file_tmp, $target_file);
                    echo "<script>window.location.href = 'index.php?page=berita'</script>";
                }

            }
        }
    }

    if($_GET['page'] == 'hapusBerita') {
        $sql = "DELETE FROM berita WHERE id = '$_GET[id]'";
        $hapus = mysqli_query($conn, $sql);

        if($hapus){
            header("location:index.php?page=berita");
        }else{
            header("location:index.php?page=berita");
        }
    }

    if($_GET['page'] == 'tambahUser') {
        if(isset($_POST['submit'])){

            if($_POST['password'] != $_POST['rePassword']) {
                echo "<script>window.location.href = 'index.php?page=tambahUser'</script>";
            }

            $password = md5($_POST['password']);

            $sql = mysqli_query($conn, "INSERT INTO user VALUES('','$_POST[namaUser]','$_POST[email]','$password','$_POST[level]')");

            if($sql){
                echo "<script>window.location.href = 'index.php?page=user'</script>";
            }
        }
    }

    if($_GET['page'] == 'editUser') {
        if(isset($_POST['submit'])){

            if($_POST['password'] != $_POST['rePassword']) {
                echo "<script>window.location.href = 'index.php?page=editUser'</script>";
            }

            if($_POST['password'] == "") {
                $query = "UPDATE user set
                fullName = '$_POST[namaUser]',
                email = '$_POST[email]',
                level = '$_POST[level]'
                WHERE id = '$_GET[id]'";
                $sql = mysqli_query($conn, $query);

                if($sql){
                    echo "<script>window.location.href = 'index.php?page=user'</script>";
                }
            }else{
                $password = md5($_POST['password']);

                $query = "UPDATE user set
                fullName = '$_POST[namaUser]',
                email = '$_POST[email]',
                password = '$password',
                level = '$_POST[level]'
                WHERE id = '$_GET[id]'";
                $sql = mysqli_query($conn, $query);

                if($sql){
                    echo "<script>window.location.href = 'index.php?page=user'</script>";
                }
            }

        }
    }

    if($_GET['page'] == 'hapusUser') {
        $sql = "DELETE FROM user WHERE id = '$_GET[id]'";
        $hapus = mysqli_query($conn, $sql);

        if($hapus){
            header("location:index.php?page=user");
        }else{
            header("location:index.php?page=user");
        }
    }

    if($_GET['page'] == 'tambahMataKuliah') {

        if($_POST['prodi_id'] == ''){
            $error = "Prodi Tidak Boleh Kosong !";
            header("location:index.php?page=tambahMataKuliah&error=$error");
        }

        if($_POST['semester'] == ''){
            $error = "Semester Tidak Boleh Kosong !";
            header("location:index.php?page=mataKuliah&error=sms");
        }

        $query = "SELECT * FROM mata_kuliah WHERE kode_mk = '$_POST[kode_mk]'";
        $sql = mysqli_query($conn,$query);
        $cek = mysqli_num_rows($sql);

        if($cek > 0){
            $error = "Kode Mata Kuliah Sudah Ada !";
            header("location:index.php?page=tambahMataKuliah&error=$error");
        }

        $query = "INSERT INTO mata_kuliah VALUES('$_POST[kode_mk]', '$_POST[nama_mk]', '$_POST[sks]', '$_POST[prodi_id]', '$_POST[semester]')";
        $sql = mysqli_query($conn,$query);



        if($sql){
            header("location:index.php?page=mataKuliah");
        }else{
            header("location:index.php?page=mataKuliah");
        }
    }

    if($_GET['page'] == 'editMataKuliah') {
        
        $kode_mk = $_GET['id'];

        $query = "UPDATE mata_kuliah set
            kode_mk = '$_POST[kode_mk]',
            nama_mk = '$_POST[nama_mk]',
            sks = '$_POST[sks]',
            prodi_id = '$_POST[prodi_id]',
            semester = '$_POST[semester]' WHERE kode_mk = '$kode_mk' ";
        
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location:index.php?page=mataKuliah");
        }else{
            header("location:index.php?page=mataKuliah");
        }
    }

    if($_GET['page'] == 'hapusMataKuliah') {
        $sql = "DELETE FROM mata_kuliah WHERE kode_mk = '$_GET[id]'";
        $hapus = mysqli_query($conn, $sql);

        if($hapus){
            header("location:index.php?page=mataKuliah");
        }else{
            header("location:index.php?page=mataKuliah");
        }
    }

    
?>