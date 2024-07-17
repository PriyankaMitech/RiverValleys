<?php include __DIR__.'/../Admin/adminsidebar.php'; ?>

<?php
// Detect if URL contains '/editlocalbrand/1'
$showForm = false;
$current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (strpos($current_url, 'editlocalbrand') !== false) {
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
                        <a id="viewCreateLocalBrandBtn" class="btn btn-info mt-2" href="<?=base_url(); ?>localbrandlist">Local Brand List</a>

                    <?php }else{ ?>
                        <button id="viewCreateLocalBrandBtn" class="btn btn-info mt-2">Add Local Brand</button>

                        <?php } ?>

                    
                    <!-- Local Brand List Card -->
                    <div id="viewlocalbrandlistCard" class="card mt-2" <?php if ($showForm) echo 'style="display: none;"'; ?>>
                        <div class="card-header">
                            <h3 class="card-title viewApplicationsBtn">Local Brand List</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Local Brand Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($localbrand_data)) {
                                        $i = 1; ?>
                                        <?php foreach ($localbrand_data as $data) { ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $data->localbrand_name; ?></td>
                                                <td>
                                                    <a href="editlocalbrand/<?= $data->id; ?>"><i class="far fa-edit me-2"></i></a>
                                                    <a href="<?= base_url(); ?>delete/<?= $data->id; ?>/tbl_localbrand" onclick="return confirm('Are You Sure You Want To Delete This Record?')"><i class="far fa-trash-alt me-2"></i></a>
                                                </td>
                                            </tr>
                                            <?php $i++;
                                        } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- Add Local Brand Form -->
                    <div id="addLocalBrandFormCard" class="card card-primary mt-2" <?php if (!$showForm) echo 'style="display: none;"'; ?>>
                        <div class="card-header">
                            <h3 class="card-title">Add Local Brand</h3>
                        </div>
                        <form action="<?php echo base_url(); ?>setlocalbrand" method="post" id="add_localbrand_form">
                            <div class="row card-body">
                                <input type="hidden" name="id" class="form-control" id="id" value="<?php if(!empty($single_data)){ echo $single_data->id;} ?>">
                                <div class="col-lg-12 col-md-12 col-12 form-group">
                                    <label for="localbrand_name">Local Brand Name</label>
                                    <input type="text" name="localbrand_name" class="form-control" id="localbrand_name" placeholder="Enter Local Brand Name" value="<?php if(!empty($single_data)){ echo $single_data->localbrand_name; } ?>">
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
        $('#viewCreateLocalBrandBtn').on('click', function() {
            var $viewlocalbrandlistCard = $('#viewlocalbrandlistCard');
            var $addLocalBrandFormCard = $('#addLocalBrandFormCard');
            var $button = $('#viewCreateLocalBrandBtn');

            if ($viewlocalbrandlistCard.is(':visible')) {
                $viewlocalbrandlistCard.hide();
                $addLocalBrandFormCard.show();
                $button.text('Local Brand List');
            } else {
                $viewlocalbrandlistCard.show();
                $addLocalBrandFormCard.hide();
                $button.text('Add Local Brand');
            }
        });
    });
</script>
