<form action="<?= ADMIN_URL . 'account/add-submit' ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="" placeholder="name@example.com" required autocomplete="off">
                <label for="floatingInput">Category Name</label>
            </div>
            <label for="floatingInput" class="ml-2">Icon</label>
            <input type="file" class="form-control" name="image" id="" placeholder="Password" required>
            <div class="d-flex justify-content-center mt-3">
                <a href="<?= ADMIN_URL . 'category' ?>" class="btn btn-lg btn-danger">Hủy</a>
                &nbsp;
                <button type="submit" class="btn btn-primary btn-lg">Lưu</button>
            </div>
        </div>
    </div>
</form>