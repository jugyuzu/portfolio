<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>出勤確認アプリ</title>
</head>
<body>
    <div>
        <p>会社の住所</p>
        <form action="">
        <!--
            <p>郵便番号: <input type="text" name="adress" autocomplete="postal-code"></p>
            <p>都道府県: <input type="text" name="adress" autocomplete="address-level1"></p>
            <p>市区町村: <input type="text" name="adress" autocomplete="address-level2"></p>
            <p>番地・マンション名: <input type="text" name="adress" autocomplete="address-line1"></p>
            <p>会社名: <input type="text" name="adress" autocomplete="organization"></p> -->
        </form>
        住所
        <input type="text" id="address">
        <button id="exec">お試し</button>
        <button onclick="address2latlng()">住所をプロンプトで入力して緯度経度を求める</button>
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