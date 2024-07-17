<?php include __DIR__.'/../Admin/adminsidebar.php'; ?>

<?php
// Detect if URL contains '/edituser/1'
$showForm = false;
$current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (strpos($current_url, 'edituser') !== false) {
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
                        <a id="viewCreateuserBtn" class="btn btn-info mt-2" href="<?=base_url(); ?>userlist">User List</a>

                    <?php }else{ ?>
                        <button id="viewCreateuserBtn" class="btn btn-info mt-2">Add User</button>

                        <?php } ?>

                    
                    <!-- user List Card -->
                    <div id="viewuserListCard" class="card mt-2" <?php if ($showForm) echo 'style="display: none;"'; ?>>
                        <div class="card-header">
                            <h3 class="card-title viewApplicationsBtn">User List</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Name</th>
                                        <th>Email Id</th>
                                        <th>Mobile No.</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($user_data)) {
                                        $i = 1; ?>
                                        <?php foreach ($user_data as $data) { ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $data->name; ?></td>
                                                <td><?= $data->email_id; ?></td>
                                                <td><?= $data->mobile_no; ?></td>

                                                <td>
                                                    <a href="edituser/<?= $data->id; ?>"><i class="far fa-edit me-2"></i></a>
                                                    <a href="<?= base_url(); ?>delete/<?= $data->id; ?>/tbl_user" onclick="return confirm('Are You Sure You Want To Delete This Record?')"><i class="far fa-trash-alt me-2"></i></a>
                                                </td>
                                            </tr>
                                            <?php $i++;
                                        } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- Add user Form -->
                    <div id="adduserFormCard" class="card card-primary mt-2" <?php if (!$showForm) echo 'style="display: none;"'; ?>>
                        <div class="card-header">
                            <h3 class="card-title">Add User</h3>
                        </div>
                        <form action="<?php echo base_url(); ?>setuser" method="post" id="user_form">
                            <div class="row card-body">
                                <input type="hidden" name="id" class="form-control" id="id" value="<?php if(!empty($single_data)){ echo $single_data->id;} ?>">
                                <div class="col-lg-4 col-md-4 col-12 form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="<?php if(!empty($single_data)){ echo $single_data->name; } ?>">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 form-group">
                                    <label for="email_id">Email ID</label>
                                    <input type="email" name="email_id" class="form-control" id="email_id" placeholder="Enter email id" value="<?php if(!empty($single_data)){ echo $single_data->email_id; } ?>">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 form-group">
                                    <label for="mobile_no">Mobile No.</label>
                                    <input type="text" name="mobile_no" class="form-control" id="mobile_no" placeholder="Enter mobile no." value="<?php if(!empty($single_data)){ echo $single_data->mobile_no; } ?>">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" value="<?php if(!empty($single_data)){ echo $single_data->password; } ?>">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 form-group">
                                    <label for="cpassword">Confirm Password</label>
                                    <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Enter confirm password" value="<?php if(!empty($single_data)){ echo $single_data->password; } ?>">
                                </div>

                                <div class="form-group col-12">
                              <label >Access Level</label>
                                <br>
                                <label id="access_level[]-error" class="error" for="access_level[]"></label>
                              
                                <div class="row">
                                    <?php if(!empty($menu_data)): ?>
                                        <div class="col-md-12">
                                            <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="selectAllCheckbox" name="selectAllCheckbox" value="All" <?php if(!empty($single_data) && $single_data->selectAllCheckbox == 'All'){ echo 'checked'; }?>>
                                                <label class="custom-control-label" for="selectAllCheckbox">Select All</label>
                                            </div>
                                        </div>
                                        <?php foreach($menu_data as $data): ?>
                                            <div class="col-md-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input access-level-checkbox" name="access_level[]" id="customCheck<?=$data->id; ?>" value="<?= $data->url_location; ?>" <?php 
                                                                if (isset($single_data) && is_object($single_data) && property_exists($single_data, 'access_level') && in_array($data->url_location, explode(',', $single_data->access_level))) {
                                                                    echo 'checked';
                                                                } 
                                                                ?>>
                                                    <label class="custom-control-label" for="customCheck<?=$data->id; ?>"><?=$data->menu_name; ?></label>
                                                </div>
                                            </div>
                                        <?php endforeach; ?> 
                                    <?php endif; ?> 
                                </div>
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
        $('#viewCreateuserBtn').on('click', function() {
            var $viewuserListCard = $('#viewuserListCard');
            var $adduserFormCard = $('#adduserFormCard');
            var $button = $('#viewCreateuserBtn');

            if ($viewuserListCard.is(':visible')) {
                $viewuserListCard.hide();
                $adduserFormCard.show();
                $button.text('User List');
            } else {
                $viewuserListCard.show();
                $adduserFormCard.hide();
                $button.text('Add User');
            }
        });
    });
</script>
<script>
    $(document).ready(function(){
        // Event listener for individual checkboxes
        $('.access-level-checkbox').change(function(){
            if($('.access-level-checkbox:checked').length === $('.access-level-checkbox').length) {
              if(confirm("You are giving all entry system access to this user. Proceed?")) {
                    $('.access-level-checkbox').prop('checked', true);
                    $('#selectAllCheckbox').prop('checked', true);

                    
                } else {
                    $(this).prop('checked', false);
                }
            } else {
                $('#selectAllCheckbox').prop('checked', false);
            }
        });

        // Event listener for the "Select All" checkbox
        $('#selectAllCheckbox').change(function(){
            if($(this).is(':checked')) {
                // Show confirmation popup
                if(confirm("You are giving all entry system access to this user. Proceed?")) {
                    $('.access-level-checkbox').prop('checked', true);
                } else {
                    $(this).prop('checked', false);
                }
            } else {
                $('.access-level-checkbox').prop('checked', false);
            }
        });

        // Event listener for the Refresh button
       
    });
</script>

