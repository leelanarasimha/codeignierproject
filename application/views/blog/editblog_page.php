
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Edit Post</h1>
        </div>

    </div>

    <form method="post" action="<?php echo site_url('blog/updatepost/' . $post_details['id']); ?>">
        <div class="form-group">
            <label for="title">Post Title</label>
            <input type="text" name="title" id="title" class="form-control" value="<?php echo $post_details['title']; ?>"/>
        </div>
        <div class="form-group">
            <label for="description">Post Description</label>
            <textarea class="form-control" name="description"><?php echo $post_details['description']; ?></textarea>
        </div>

        <div><input type="submit" name="submit" value="Edit Post"/></div>
    </form>
</div>