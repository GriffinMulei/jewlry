<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts | Jewelry for You</title>
    <link href="css/css.css" rel="stylesheet" type="text/css">
    <?php include_once("head.php"); ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script>
    function initialize() {
      var mapProp = {
        center: new google.maps.LatLng(51.508742, -0.120850),
        zoom: 5,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body>
<div id="googleMap" style="width:100%;height:400px;"></div>
<div id="cont">
    <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
        <div class="row">
            <label for="name">Your name:</label><br>
            <input id="name" class="input" name="name" type="text" value="" size="30"><br>
        </div>
        <div class="row">
            <label for="email">Your email:</label><br>
            <input id="email" class="input" name="email" type="email" value="" size="30"><br>
        </div>
        <div class="row">
            <label for="message">Your message:</label><br>
            <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br>
        </div>
        <input id="submit_button" type="submit" value="Send email">
    </form>	
    <p class="cont">JewelryForU@info.com</p>
    <p class="cont">4536 London</p>
    <p class="cont">(45) 323546</p>
</div>
<footer>
    <?php include_once("footer.php"); ?>
</footer>
</body>
</html>
