<div class="container">
    <div class="row">
        <div class="col-xs-12 .col-md-8-centered well">
            <?php echo $this->session->flashdata('login_msg'); ?>
            <table class="table">
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <?php echo form_open('Task_Controller/logout'); ?>
                        <input type="submit" class="btn btn-primary" id="btn_logout" name="btn_logout" value="LOGOUT"/>
                        <?php echo form_close(); ?>
                    </td>
                </tr>
            </table>
            
            <legend class="text-center">Your Tasks</legend>
            <table class="table table-striped">
                <thead class="thead">
                    <th>#No</th>
                    <th>Task Title</th>
                    <th>Description</th>
                    <th>Assigned Employees</th>
                </thead>
                <tbody class="tbody">
                    <tr>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>