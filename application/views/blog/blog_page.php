<!doctype html>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <div class="container">
            
            <?php if (isset($success_message)) { ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success"><?php echo $success_message; ?></div>
                </div>
            </div>
            <?php } ?>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header"><?php echo $title; ?></h1>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-md-12 text-right" style="margin-bottom: 20px;">
                    <a href="<?php echo site_url('blog/add'); ?>" class="btn btn-primary">Add Post</a>
                </div>
            </div>
            
            
            
            <div clas="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php foreach($posts as $post) { ?>
                            <tr>
                                <td><?php echo $post['title']; ?></th>
                                <td><?php echo $post['description']; ?></th>
                                <td><?php echo $post['added_date']; ?></th>
                                <td>
                                    <a href="<?php echo site_url('blog/view/'.$post['id']); ?>">View Post</a> | 
                                    <a href="<?php echo site_url('blog/edit/'.$post['id']); ?>">Edit Post</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </body>
</html>