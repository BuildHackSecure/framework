<?php View::page('header',$data["header"]); ?>
<div class="container" style="padding-top:60px">
    <h1 class="text-center"><?php echo $data["h1"]; ?></h1>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <?php echo $data["message"]; ?>
        </div>
    </div>
</div>
<?php View::page('footer'); ?>