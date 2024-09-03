<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/asset/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/asset/vendor/css/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/asset/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/asset/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>/public/asset/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />


    <script src="<?php echo base_url(); ?>/public/asset/vendor/libs/jquery/jquery.js"></script>

    <!-- Helpers -->
    <script src="<?php echo base_url(); ?>/public/asset/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?php echo base_url(); ?>/public/asset/js/config.js"></script>
</head>

<body>
    <table class="table" id="table-datatable">
        <thead>
            <tr>
                <th> No. </th>
                <th> Nisn </th>
                <th> Nama </th>
                <th> Kelas </th>
                <th> Alamat </th>
                <th> Aksi </th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</body>
<script>
    var tabel = null;

    $(document).ready(function () {
        tabel = $('#table-datatable').DataTable({
            "processing": true,
            "responsive": true,
            "serverSide": true,
            "ordering": true, // Set true agar bisa di sorting
            "order": [
                [0, 'asc']
            ], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
            "ajax": {
                "url": "<?= base_url('public/testabel/grid'); ?>", // URL file untuk proses select datanya
                "type": "POST",

            },
            "deferRender": true,
            "aLengthMenu": [
                [15, 25, 50],
                [15, 25, 50]
            ], // Combobox Limit
            "columns": [{
                "data": 'username',
                "sortable": false,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                "data": "username"
            },
            {
                "data": "nama",
                // "render": function(data, type, row, meta) {
                //     return '[hidden]';
                // }
            },
            {
                "data": "password",
                // "render": function(data, type, row, meta) {
                //     return data + " " + row.role;
                // }
            },
            {
                "data": "jabatan"
            },
            {
                "data": "username",
                "render": function (data, type, row, meta) {
                    var editButton = "<button class='btn btn-primary' data-username='" + data + "' data-nama='" + row.nama + "' data-password='" + row.password + "' data-role='" + row.jabatan + "' onclick='prosesEdit(this)'>EDIT</button>";
                    var deleteButton = "<button class='btn btn-danger' onclick='prosesDelete(\"" + data + "\")'>DELETE</button>";
                    return editButton + " " + deleteButton;
                }
            },
            ],
        });
    });
</script>
<script src="<?php echo base_url(); ?>/public/asset/vendor/libs/popper/popper.js"></script>
<script src="<?php echo base_url(); ?>/public/asset/vendor/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>/public/asset/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="<?php echo base_url(); ?>/public/asset/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?php echo base_url(); ?>/public/asset/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="<?php echo base_url(); ?>/public/asset/js/main.js"></script>

<!-- Page JS -->
<script src="<?php echo base_url(); ?>/public/asset/js/dashboards-analytics.js"></script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

</html>