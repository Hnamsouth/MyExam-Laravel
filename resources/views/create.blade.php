<?php
    $gender=['Nam','Nu','Khac'];
?>
<h1 class="text-center mt-3">Create Student</h1>
<div class="row">
    <div class="col-3"></div>
    <div class=" col-6  text-center">
        <form method="post" action="?module=student&std=save">
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name"
                           class="form-control" id="name" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="email" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="age" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-10">
                    <input type="number" name="age" class="form-control" id="age" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="mark" class="col-sm-2 col-form-label">Mark</label>
                <div class="col-sm-10">
                    <input type="number" name="mark" class="form-control" id="mark" required>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="gender">Gender</label>
                <select class="custom-select " name="gender" id="gender">
                    <?php foreach ($gender as $item): ?>
                        <option value="<?php echo $item; ?>" > <?php echo $item ?></option>
                    <?php endforeach; ?>

                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>

