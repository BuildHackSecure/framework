<?php
header("HTTP/1.0 404 Not Found");
View::page('header',array(
    'title' =>  'Page Not Found'
)); ?>
    <div class="container" style="padding-top:60px">
        <h1 class="text-center">Page Not Found</h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                We could not find that page!
            </div>
        </div>
    </div>
<?php View::page('footer'); ?>