<?php include './templates/header.php' ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Transaction</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Product</th>
                        <th>Harga</th>
                        <th>Tanggal Sewa</th>
                        <th>Tanggal Kembali</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>adi@gmail.com</td>
                        <td>Kamera DLRS</td>
                        <td>Rp.500.000</td>
                        <td>2022/05/28</td>
                        <td>2022/05/29</td>
                        <td>
                            <span class="badge bg-secondary"><a href="">Pending</a></span>
                        </td>
                    </tr>
                    <tr>
                        <td>dodi@gmail.com</td>
                        <td>Kamera Action</td>
                        <td>Rp.300.000</td>
                        <td>2022/06/12</td>
                        <td>2022/06/15</td>
                        <td>
                            <span class="badge bg-secondary"><a href="">Canceled</a></span>
                        </td>
                    </tr>
                    <tr>
                        <td>fani@gmail.com</td>
                        <td>Kamera Mirroless</td>
                        <td>Rp.600.000/hari</td>
                        <td>2022/04/20</td>
                        <td>2022/04/22</td>
                        <td>
                            <span class="badge bg-secondary"><a href="">Complete</a></span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include './templates/footer.php' ?>