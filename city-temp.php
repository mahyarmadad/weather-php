<?php

if ($city) {
    echo ` <div class="container m-3">
    <h3 class="text-center"> <?php echo sizeof($city); ?> Cities Found.. </h3>
    </div>`;
} else {
    echo '<h3 class="text-center"> No Cities Found!</h3>';
}
?>

<div class="row">
    <?php foreach ($city as $cities) { ?>
        <div class="col-md-4 mb-3 text-center">
            <div class="card">
                <div class="card-body">
                    <h5> <?php echo $cities->title; ?> </h5>
                    <a href="?cityId=<?php echo $cities->woeid; ?>" class="btn btn-info">See Forcast</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>