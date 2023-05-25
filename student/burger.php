<div class="row">

    <?php
    $result = $DB->query("SElECT * FROM burger");
    foreach ($result as $row):
    ?>
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-img">
                <img src="adminpanel/<?php echo $row['image'];?>" alt="" />
                <div class="price"><?php echo $row['price'];?></div>
                <div class="overlay"><?php echo $row['burger_insert'];?></div>
            </div>
            <div class="card-body">
                <h3><?php echo $row['title'];?></h3>
                <p>
                    <?php echo $row['texttitle'];?>
                </p>
            </div>
        </div>
    </div>
<?php endforeach;?>
