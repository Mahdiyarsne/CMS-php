<?php include "includes/header.php"; ?>
<!-- Navigation -->
<?php include "includes/navgation.php"; ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <?php
            $query = "SELECT * FROM posts";
            $select_post = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($select_post)) {

                $post_id = $row["post_id"];

                $post_title = $row["post_title"];
                $post_author = $row["post_author"];
                $post_date = $row["post_date"];
                $post_content = substr($row["post_content"],0,100);
                $post_image = $row["post_image"];
            ?>



                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="post.php?p_id=<?php echo $post_id ?>"><?php echo $post_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date; ?> </p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                <hr>
                <p><?php echo $post_content; ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>





            <?php
            }
            ?>



        </div>

        <!-- Blog Sidebar Widgets Column -->

        <?php include "includes/sidebar.php"; ?>



    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <?php include "includes/footer.php"; ?>
</div>