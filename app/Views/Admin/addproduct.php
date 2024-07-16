<?php include __DIR__.'/../Admin/adminsidebar.php'; ?>

<?php
// Detect if URL contains '/editmenu/1'
$showForm = false;
$current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (strpos($current_url, 'editproduct') !== false) {
    $showForm = true;
}
?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <?php if($showForm) { ?>
                    <a id="viewCreateMenuBtn" class="btn btn-info mt-2" href="<?=base_url(); ?>addproduct">Product List
                    </a>

                    <?php }else{ ?>
                    <button id="viewCreateMenuBtn" class="btn btn-info mt-2">Add Product</button>

                    <?php } ?>

                    <!-- Menu List Card -->
                    <div id="viewMenuListCard" class="card mt-2" <?php if ($showForm) echo 'style="display: none;"'; ?>>
                        <div class="card-header">
                            <h3 class="card-title viewApplicationsBtn">Product</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Product Name</th>
                                        <th>Brand Name</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($menu_data)) {
                                        $i = 1; ?>
                                    <?php foreach ($menu_data as $data) { ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $data->productname; ?></td>
                                        <td><?= $data->brand_name; ?></td>
                                        <td><?= $data->price; ?></td>
                                        <td>
                                            <a href="editproduct/<?= $data->id; ?>"><i class="far fa-edit me-2"></i></a>
                                            <a href="<?= base_url(); ?>delete/<?= $data->id; ?>/tbl_menu"
                                                onclick="return confirm('Are You Sure You Want To Delete This Record?')"><i
                                                    class="far fa-trash-alt me-2"></i></a>
                                        </td>
                                    </tr>
                                    <?php $i++;
                                        } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Add Menu Form -->
                    <div id="addMenuFormCard" class="card card-primary mt-2"
                        <?php if (!$showForm) echo 'style="display: none;"'; ?>>
                        <div class="card-header">
                            <h3 class="card-title">
                                <?php if (!empty($single_data)) { echo 'Product List'; } else { echo 'Add Product'; } ?>
                            </h3>
                        </div>
                        <form action="<?php echo base_url(); ?>setproduct" method="post" id="add_product"
                            enctype="multipart/form-data">
                            <div class="row card-body">
                                <input type="hidden" name="id" class="form-control" id="id"
                                    value="<?php if(!empty($single_data)){ echo $single_data->id;} ?>">

                                <div class="col-lg-4 col-md-6 col-12 form-group">
                                    <label for="productname">Enter Product Name</label>
                                    <input type="text" name="productname" class="form-control" id="productname"
                                        placeholder="Enter product name"
                                        value="<?php if(!empty($single_data)){ echo $single_data->productname; } ?>">
                                </div>

                                <div class="col-lg-4 col-md-6 col-12 form-group">
                                    <label for="brand_name">Brand Name</label>
                                    <input type="text" name="brand_name" class="form-control" id="brand_name"
                                        placeholder="Enter brand name"
                                        value="<?php if(!empty($single_data)){ echo $single_data->brand_name; } ?>">
                                </div>

                                <div class="col-lg-4 col-md-6 col-12 form-group">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" class="form-control" id="price"
                                        placeholder="Enter price"
                                        value="<?php if(!empty($single_data)){ echo $single_data->price; } ?>">
                                </div>

                                <div class="col-lg-4 col-md-6 col-12 form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control" id="description"
                                        placeholder="Enter description"><?php if(!empty($single_data)){ echo $single_data->description; } ?></textarea>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 form-group">
                                    <label for="Ingredients">Ingredients</label>
                                    <textarea name="Ingredients" class="form-control" id="Ingredients"
                                        placeholder="Enter Ingredients"><?php if(!empty($single_data)){ echo $single_data->Ingredients; } ?></textarea>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 form-group">
                                    <label for="howtouse">How To Use</label>
                                    <textarea name="howtouse" class="form-control" id="howtouse"
                                        placeholder="How To Use"><?php if(!empty($single_data)){ echo $single_data->howtouse; } ?></textarea>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 form-group">
                                    <label for="product_image1">Product Image 1</label>
                                    <input type="file" name="product_image1" class="form-control" id="product_image1">
                                </div>

                                <div class="col-lg-4 col-md-6 col-12 form-group">
                                    <label for="product_image2">Product Image 2</label>
                                    <input type="file" name="product_image2" class="form-control" id="product_image2">
                                </div>

                                <div class="col-lg-4 col-md-6 col-12 form-group">
                                    <label for="product_image3">Product Image 3</label>
                                    <input type="file" name="product_image3" class="form-control" id="product_image3">
                                </div>

                                <div class="col-lg-4 col-md-6 col-12 form-group">
                                    <label for="product_image4">Product Image 4</label>
                                    <input type="file" name="product_image4" class="form-control" id="product_image4">
                                </div>
                            </div>

                            <div class="card-footer text-right">
                                <button type="submit" name="submit" id="submit"
                                    class="btn btn-primary submitButton"><?php if(!empty($single_data)){ echo 'Update'; }else{ echo 'Submit';} ?></button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

<?php include __DIR__.'/../Admin/adminfooter.php'; ?>
<script>$('#viewCreateMenuBtn').on('click', function() {
        var $viewMenuListCard = $('#viewMenuListCard');
        var $addMenuFormCard = $('#addMenuFormCard');
        var $button = $('#viewCreateMenuBtn');

        if ($viewMenuListCard.is(':visible')) {
            $viewMenuListCard.hide();
            $addMenuFormCard.show();
            $button.text('Product List');
        } else {
            $viewMenuListCard.show();
            $addMenuFormCard.hide();
            $button.text('Add Product');
        }
    });</script>