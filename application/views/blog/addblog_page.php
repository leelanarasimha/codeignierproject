
<div class="container">
    
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger"><?php echo validation_errors(); ?></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Add Post</h1>
        </div>

    </div>

    <form method="post">
        <div class="form-group">
            <label for="title">Post Title</label>
            <input type="text" name="title" id="title" class="form-control"/>
            <div style="color: red;"><?php echo form_error('title'); ?></div>
        </div>
        <div class="form-group">
            <label for="description">Post Description</label>
            <textarea class="form-control" name="description"></textarea>
            <?php echo form_error('description'); ?>
        </div>

        <div><input type="submit" name="submit" value="Add Post" class="btn btn-warning"/></div>
        </form>
</div>

</div>

