<!DOCTYPE html>
<?php
include("connect.php");
$get = $_GET;
$temp = "";
if (isset($get["searchtxt"])) {
    $city = searchCite($get["searchtxt"]);
    $temp = "city-temp.php";
} else if (isset($get["cityId"])) {
    $city = getForcaast($get["cityId"]);
    if ($city) {
        $temp = "forcast-temp.php";
    }
}

function searchCite($searchtxt)
{
    $city = file_get_contents("https://www.metaweather.com/api/location/search/?query=" . urlencode($searchtxt));
    return json_decode($city);
}

function getForcaast($cityId)
{
    $forcast = file_get_contents("https://www.metaweather.com/api/location/" . urlencode($cityId));
    return json_decode($forcast);
}

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Weather App</title>
</head>

<body>
    <div class="row">
        <div class="col-md-6 mx-auto text-center">
            <h1>Weather Forcst</h1>
            <form method="GET">
                <div class="row">
                    <div class="form-group input-group-lg m-auto">
                        <input type="text" class="form-control" name="searchtxt">
                    </div>
                </div>
                <div class="row m-3">
                    <div class="form-group input-group-lg m-auto">
                        <input type="submit" class="btn btn-lg btn-outline-success" value="Search">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>