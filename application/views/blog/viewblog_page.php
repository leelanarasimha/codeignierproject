
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header"><?php echo $post_details['title']; ?></h1>
                    <div class="text-right">
                        <small>Added Date: <?php echo date('d M, Y', strtotime($post_details['added_date'])); ?></small>
                    </div>
                </div>
            </div>
            
            
            <div clas="row">
                <div class="col-md-12">
                    <p><?php echo $post_details['description']; ?></p>
                </div>
            </div>
        </div>
