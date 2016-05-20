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
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">Edit Post</h1>
                </div>
                
            </div>
            
            <form method="post" action="<?php echo site_url('blog/updatepost/'.$post_details['id']); ?>">
                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?php echo $post_details['title']; ?>"/>
                </div>
                 <div class="form-group">
                    <label for="description">Post Description</label>
                    <textarea class="form-control" name="description"><?php echo $post_details['description']; ?></textarea>
                </div>
                
                <div><input type="submit" name="submit" value="Edit Post"/></div>
                </div>
            </form>
        </div>
        
    </body>
</html>