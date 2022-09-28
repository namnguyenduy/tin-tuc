<div class="row">
    <div class="col col-sm-9">
        <div class="main-content">
            <?php
            include_once('connect.php');
            //include_once('articles_seo_friendly.php');
            include_once('seo_friendly.php');
            $query = mysqli_query($conn, "SELECT * FROM posts");

            if (mysqli_num_rows($query) == 0) {
                echo "No articles found";
            } else { 
                while ($row = mysqli_fetch_assoc($query)) {?>
                    <div class='item-post'>
                        <img src="./admin/photo/<?php echo $row['image']?>" width='100%'/>
                        <h2>
                            <a href="<?php $row['url']?>" target="_blank" rel="noopener"><?php echo $row['title']?></a>
                        </h2><br>
                        <span>
                            <?php echo substr($row['content'], 0, 200)?>
                             <a href="single.php?url='<?php $row['url'] ?>'" target="_blank" rel="noopener">
                             Đọc thêm...
                        </a>
                        </span>
                    </div>
                <?php }}; ?> 
        </div>
    </div>
    <!-- Close Col -->

    <div class="col col-sm-3">
        <?php include 'sidebar.php'; ?>
    </div>

</div>