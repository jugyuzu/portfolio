<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>出勤確認アプリ</title>
</head>
<body>
    <div>
        会社の住所: 
        <input type="text" id="address">
        <button id="exec"></button>
    </div>
    <div>
        
    </div>
    <script src="https://cdn.geolonia.com/community-geocoder.js"></script>
    <script>
        document.getElementById('exec').addEventListener('click', () => {
            //let log = document.getElementById('address').value;
            if (document.getElementById('address').value) {
                getLatLng(document.getElementById('address').value, latlng);
                
            }
            function latlng(address) {
                console.log(address);
            }
        })
    </script>
</body>
</html>