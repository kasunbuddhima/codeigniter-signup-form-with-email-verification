<div class="container">
    <div class="row">
        <br>
        <div class="col-md-3">
        <!-- left col -->
        </div>
        <div class="col-xs-6  well"> 
            <?php echo $this->session->flashdata('login_msg'); ?>
            <?php echo form_open('Login_Controller/login'); ?>
            <fieldset>
                <legend class="text-center">Login Form</legend>
                <!-- username -->
                <div class="form-group">
                    <div class="row colbox">     
                            <label for="txt_username" class="control-label">Username</label>
                            <input type="text" id="txt_username" class="form-control" name="txt_username" placeholder="username" value="<?php echo set_value('txt_username') ?>"/>  
                            <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
                    </div>
                </div>
                
                 <!-- password -->
                <div class="form-group">
                    <div class="row colbox ">     
                        <label for="txt_password" class="control-label">Password</label>
                        <input type="password" id="txt_password" class="form-control" name="txt_password" placeholder="password"/>   
                        <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
                    </div>
                </div>
                <br>
                <!-- signin button -->
                <div class="form-gruop">
                    <div class="row colbox text-center">
                        <input type="submit" id="btn_login" name="btn_login" value="Login" class="btn btn-primary btn-block"/>
                    </div>
                </div>
            </fieldset>
            <?php echo form_close(); ?>
            <div class="text-center">
                <br>
                <a href="<?php echo site_url(); ?>/Signup_Controller/index" >don't have an account, signup here</a>
            </div>
            
        </div>
        <div class="col-md-3">
             <!-- right col -->
        </div>
    </div>
</div>


     
  