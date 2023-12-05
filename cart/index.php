<?php require_once '../inc/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center my-3 p-3 border"> Cart Items</h1>
        </div>
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Qty</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <tbody>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="<?php echo URL . "cart/remove-from-cart.php"; ?>" class="btn btn-danger">Remove</a>
                    </td>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require_once '../inc/footer.php'; ?>