<h3>Forcast for <?php echo $city->title . "," . $city->parent->title; ?> </h3>

<div class="row">
    <?php  foreach($city->consolidated_weather as $forcast) { ?>
        <div class="col-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5><?php echo $forcast->applicable_date;?></h5>
                    <img class="card-img-top" src="https://www.metaweather.com/static/img/weather/png/<?php echo $forcast->weather_state_abbr;?>.png">
                    <p><?php echo $forcast->weather_state_name;?></p>
                    <hr>
                    <h5>Low: <?php echo round($forcast->min_temp);?>&#8451;</h5>
                    <h5>Max: <?php echo round($forcast->max_temp);?>&#8451;</h5>

                </div>
            </div>
        </div>
    <?php } ?>
</div>