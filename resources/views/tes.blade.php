<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript">
        var map = null;

        function showlocation() {
            // One-shot position request.
            navigator.geolocation.getCurrentPosition(callback);
        }

        function callback(position) {

            var lat = position.coords.latitude;
            var lon = position.coords.longitude;

            document.getElementById('latitude').innerHTML = lat;
            document.getElementById('longitude').innerHTML = lon;

        }
    </script>
</head>

<body>
    <center>
        <input type="button" value="Show my location on Map" onclick="javascript:showlocation()" /> <br />
    </center>

    Latitude: <span id="latitude"></span> <br />
    Longitude: <span id="longitude"></span>

</body>

</html>
