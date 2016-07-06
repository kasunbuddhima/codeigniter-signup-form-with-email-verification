<div class="container">
    <div class="row">
        <br>
        <div class="col-xs-12 .col-md-8-centered well">
            <?php echo form_open('Signup_Controller/signup') ?>
            <fieldset>
                <legend class="text-center">Employee Registration</legend>
                <!-- employee name -->
                <?php echo $this->session->flashdata('msg'); ?>
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="txt_empname" class="control-label">Employee Name</label>
                            <input class="form-control" id="txt_empname" name="txt_empname" placeholder="Name" type="text" value="<?php echo set_value('txt_empname'); ?>" /> 
                            <span class="text-danger"><?php echo form_error('txt_empname'); ?></span>
                        </div>
                    </div>
                </div>
                <!-- employee address -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="txt_emp_addr" class="control-label">Employee Address</label>
                            <input class="form-control" id="txt_emp_addr" name="txt_emp_addr" placeholder="Address" type="text" value="<?php echo set_value('txt_emp_addr'); ?>" />  
                            <span class="text-danger"><?php echo form_error('txt_emp_addr'); ?></span>
                        </div>
                    </div>
                </div>
                <!-- employee email -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="txt_email" class="control-label">Employee Email</label>
                            <input class="form-control" id="txt_email" name="txt_email" placeholder="Email" value="<?php echo set_value('txt_email'); ?>" type="email" />  
                            <span class="text-danger"><?php echo form_error('txt_email'); ?></span>
                        </div>
                    </div>
                </div>
                <!-- employee username -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="txt_username" class="control-label">Employee username</label>
                            <input class="form-control" id="txt_username" name="txt_username" placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>" />  
                            <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
                        </div>
                    </div>
                </div>
                <!-- employee password -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="txt_password" class="control-label">Employee Password</label>
                            <input class="form-control" id="txt_password" name="txt_password" placeholder="Password" type="password" value="<?php echo set_value('txt_password'); ?>"/>  
                            <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
                        </div>
                    </div>
                </div>
                
                <!-- employee confirm password -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="txt_confirm_password" class="control-label">Confirm Password</label>
                            <input class="form-control" id="txt_confirm_password" name="txt_confirm_password" placeholder="Confirm Password" type="password" value="<?php echo set_value('txt_confirm_password'); ?>"/> 
                            <span class="text-danger"><?php echo form_error('txt_confirm_password'); ?></span>
                        </div>
                    </div>
                </div>
                <br>
                <!-- sigup button -->
                <div class="form-gruop">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <input id="btn_signup" name="btn_signup" type="submit" class="btn btn-primary col-xs-12 .col-md-8" value="Signup" />
                            <br><br>
                            <input type="reset" id="btn_reset" name="btn_reset" class="btn btn-default col-xs-12 .col-md-8" value="Cancel"/>
                        </div>
                    </div>
                </div>
            </fieldset>
            <?php echo form_close(); ?>
             <div class="text-center">
                 <br>
                <a href="<?php echo site_url(); ?>/Login_Controller/" >Already signed up, Login</a>
            </div>
            
        </div>
    </div>

</div>