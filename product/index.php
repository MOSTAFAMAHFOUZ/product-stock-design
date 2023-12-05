<?php require_once '../inc/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center my-3 p-3 border"> Add New Product</h1>
        </div>
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Description</td>
                        <td>Image</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="<?php echo URL . "product/edit.php"; ?>" class="btn btn-primary">Edit</a>
                        <a href="<?php echo URL . "product/requests/delete.php"; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require_once '../inc/footer.php'; ?>