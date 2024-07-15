<?php include __DIR__.'/../Admin/adminsidebar.php'; ?>

<?php
// Detect if URL contains '/edit-menu/1'
$showForm = false;
$current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (strpos($current_url, 'edit-menu') !== false) {
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
                        <a id="viewCreateMenuBtn" class="btn btn-info mt-2" href="<?=base_url(); ?>menu-list">Menu List</a>

                    <?php }else{ ?>
                        <button id="viewCreateMenuBtn" class="btn btn-info mt-2">Add Menu</button>

                        <?php } ?>

                    
                    <!-- Menu List Card -->
                    <div id="viewMenuListCard" class="card mt-2" <?php if ($showForm) echo 'style="display: none;"'; ?>>
                        <div class="card-header">
                            <h3 class="card-title viewApplicationsBtn">Menu List</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Menu Name</th>
                                        <th>URL Location</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($menu_data)) {
                                        $i = 1; ?>
                                        <?php foreach ($menu_data as $data) { ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $data->menu_name; ?></td>
                                                <td><?= $data->url_location; ?></td>
                                                <td>
                                                    <a href="edit-menu/<?= $data->id; ?>"><i class="far fa-edit me-2"></i></a>
                                                    <a href="<?= base_url(); ?>delete/<?= $data->id; ?>/tbl_menu" onclick="return confirm('Are You Sure You Want To Delete This Record?')"><i class="far fa-trash-alt me-2"></i></a>
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
                    <div id="addMenuFormCard" class="card card-primary mt-2" <?php if (!$showForm) echo 'style="display: none;"'; ?>>
                        <div class="card-header">
                            <h3 class="card-title">Add Menu</h3>
                        </div>
                        <form action="<?php echo base_url(); ?>set_menu" method="post" id="add_menu_form">
                            <div class="row card-body">
                                <input type="hidden" name="id" class="form-control" id="id" value="<?php if(!empty($single_data)){ echo $single_data->id;} ?>">
                                <div class="col-lg-12 col-md-12 col-12 form-group">
                                    <label for="menu_name">Enter Menu Name</label>
                                    <input type="text" name="menu_name" class="form-control" id="menu_name" placeholder="Enter menu name" value="<?php if(!empty($single_data)){ echo $single_data->menu_name; } ?>">
                                </div>
                                <div class="col-lg-12 col-md-12 col-12 form-group">
                                    <label for="url_location">URL Location</label>
                                    <input type="text" name="url_location" class="form-control" id="url_location" placeholder="Enter url location" value="<?php if(!empty($single_data)){ echo $single_data->url_location; } ?>">
                                    <span id="menu_nameError" style="color: red;"></span>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" name="submit" id="submit" class="btn btn-primary submitButton"><?php if(!empty($single_data)){ echo 'Update'; }else{ echo 'Submit';} ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include __DIR__.'/../Admin/adminfooter.php'; ?>

<script>
    $(document).ready(function() {
        $('#viewCreateMenuBtn').on('click', function() {
            var $viewMenuListCard = $('#viewMenuListCard');
            var $addMenuFormCard = $('#addMenuFormCard');
            var $button = $('#viewCreateMenuBtn');

            if ($viewMenuListCard.is(':visible')) {
                $viewMenuListCard.hide();
                $addMenuFormCard.show();
                $button.text('Menu List');
            } else {
                $viewMenuListCard.show();
                $addMenuFormCard.hide();
                $button.text('Add Menu');
            }
        });
    });
</script>
