<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="login_page">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">Login</h1>
                    </div>
                </div>
                
                <form method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Email Address</label>
                            <input type="text" name="email" class="form-control" value="<?php echo set_value('email'); ?>"/>
                            <div><?php echo form_error('email'); ?></div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-12">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" />
                            <div><?php echo form_error('password'); ?></div>
                        </div>
                    </div>
                    
                    <div style="margin-top: 20px;">
                        <input type="submit" name="submit" value="Login" class="btn btn-primary"/>
                    </div>
                </form>
                
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo site_url('register'); ?>">Register Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>