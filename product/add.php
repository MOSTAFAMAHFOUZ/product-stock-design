<?php require_once '../inc/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center my-3 p-3 border"> Add New Product</h1>
        </div>
        <div class="col-12 ">
            <form action="" method="POST" enctype="multipart/form-data" class="border p-3">
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="" id="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="description">Description</label>
                    <input type="text" name="" id="description" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="price">Price</label>
                    <input type="number" name="" id="price" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="image">Image</label>
                    <input type="file" name="" id="image" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="submit" class="form-control border bg-primary text-white ">
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once '../inc/footer.php'; ?>