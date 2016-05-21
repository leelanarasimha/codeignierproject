
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Add Post</h1>
        </div>

    </div>

    <form method="post" action="<?php echo site_url('blog/storepost'); ?>">
        <div class="form-group">
            <label for="title">Post Title</label>
            <input type="text" name="title" id="title" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="description">Post Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>

        <div><input type="submit" name="submit" value="Add Post" class="btn btn-warning"/></div>
</div>
</form>
</div>

