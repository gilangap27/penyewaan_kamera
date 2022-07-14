<?php
session_start();

if (!isset($_SESSION['id_admin'])) {
    header("Location: ./index.php");
}

?>

<?php include './templates/header.php' ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Message</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead class="table-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Adi Setiawan</td>
                        <td>adi@gmail.com</td>
                        <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, recusandae.</td>
                    </tr>
                    <tr>
                        <td>Dodi Maulana</td>
                        <td>dodi@gmail.com</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus alias totam eius aliquam dignissimos quo corrupti porro nobis consectetur nulla?</td>
                    </tr>
                    <tr>
                        <td>Fani Ihma</td>
                        <td>fani@gmail.com</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quod veniam sunt? Fugiat dicta illo exercitationem quidem! Inventore, perferendis rem! Voluptatibus velit ratione dolor in?</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include './templates/footer.php' ?>