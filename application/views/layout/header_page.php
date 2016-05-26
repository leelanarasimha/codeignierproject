<!doctype html>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo site_url('assets/css/main.css'); ?>" type="text/css"/>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script>
            console.log("script came here");
        </script>


    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Codeigniter Project</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo site_url('blog'); ?>">Blog</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if ($logged_in_id) { ?>
                        <li><a href="<?php echo site_url('logout'); ?>">Logout</a></li>
                        <?php } else { ?>
                        <li><a href="<?php echo site_url('login'); ?>">Login</a></li>
                        <?php } ?>
                    </ul>
                </div><!--/.navbar-collapse -->
            </div>
        </nav>
        <div style="margin-top: 60px;">
            
        </div>

        <?php if (isset($error_message)) { ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger"><?php echo $error_message; ?></div>
                    </div>
                </div>
            </div>

        <?php } ?>

         <?php if ($this->session->flashdata('error_message') != false) { ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger"><?php echo $this->session->flashdata('error_message'); ?></div>
                    </div>
                </div>
            </div>

        <?php } ?>

          <?php if ($this->session->flashdata('success_message') != false) { ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success"><?php echo $this->session->flashdata('success_message'); ?></div>
                    </div>
                </div>
            </div>

        <?php } ?>

        
        