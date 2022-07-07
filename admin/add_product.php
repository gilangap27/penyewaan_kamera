<?php require './templates/header.php' ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h1 class="h3 mb-0 text-gray-800">Add Product</h1>
</div>

<div class="card shadow mb-4 text-dark">
    <div class="card-body">

        <form action="" method="POST">
            <!-- Image Product -->
            <label class="form-label">Image Product</label>
            <div class="input-group mb-3">
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>

            <!-- Name Product -->
            <label class="form-label">Name Product</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control">
            </div>

            <!-- Description Product -->
            <label class="form-label">Description Product</label>
            <div class="input-group mb-3">
                <textarea class="form-control" rows="5"></textarea>
            </div>

            <div class="row">
                <div class="col">
                    <!-- Price Product -->
                    <label class="form-label">Price Product</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <!-- Stock Product -->
                    <label class="form-label">Stock Product</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <a href="./product.php" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>

    </div>
</div>

<?php require './templates/footer.php' ?>