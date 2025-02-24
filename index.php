<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

  <title>Halaman Utama</title>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
</head>
<body>

<?php $_GET['page'] = isset($_GET['page']) ? $_GET['page'] : 'home'; ?>
  
<nav class="bg-blue-800 border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap text-white justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
        </svg>
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Data-In</span>
        </a>
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
            <a href="login.php" class="text-sm text-blue-800 bg-white  focus:ring-4 focus:ring-blue-300 font-bold rounded-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hover:underline">Login Admin</a>
        </div>
    </div>
</nav>
<nav class="bg-blue-100 dark:bg-gray-700">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                <li>
                    <a href="index.php" class="<?php if($_GET['page'] == 'home') { echo 'text-blue-600 font-bold s';} ?>text-gray-900 dark:text-white hover:underline" aria-current="page">Halaman Utama</a>
                </li>
                <li>
                    <a href="index.php?page=mahasiswa" class="<?php if($_GET['page'] == 'mahasiswa') { echo 'text-blue-600 font-bold s';} ?>text-gray-900 dark:text-white hover:underline">Mahasiswa</a>
                </li>
                <li>
                    <a href="index.php?page=prodi" class="<?php if($_GET['page'] == 'prodi') { echo 'text-blue-600 font-bold s';} ?>text-gray-900 dark:text-white hover:underline">Prodi</a>
                </li>
                <li>
                    <a href="index.php?page=dosen" class="<?php if($_GET['page'] == 'dosen') { echo 'text-blue-600 font-bold s';} ?>text-gray-900 dark:text-white hover:underline">Dosen</a>
                </li>
                <li>
                    <a href="index.php?page=mataKuliah" class="<?php if($_GET['page'] == 'mataKuliah') { echo 'text-blue-600 font-bold s';} ?>text-gray-900 dark:text-white hover:underline">Mata Kuliah</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php

    include 'koneksi.php';

    include 'ui.php';

?>

<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <!-- DataTables JavaScript -->
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

<script>
  $(document).ready(function () {
    $('#example').DataTable({
      dom: '<"flex justify-between items-center mb-4"<"flex items-center space-x-4"l><"w-1/3"f>><t><"flex justify-between items-center mt-4"ip>',
        language: {
          search: '', // Removes the default "Search:" label
          searchPlaceholder: 'Search...', // Adds a placeholder to the search input
          lengthMenu: 'Show _MENU_ entries', // Custom text for the dropdown
          paginate: {
            first: '<<',
            last: '>>',
            next: '>',
            previous: '<'
          }
      }
    }); // Initialize DataTables
  });

</script>

</body>
</html>