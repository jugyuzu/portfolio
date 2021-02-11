<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>出勤確認アプリ</title>
    <style type="text/css">
        .none{
            display:none;
        }
    </style>
</head>
<body>
    <div id="app">
        <div>
            会社の住所: 
            <input type="text" id="address">
            <button id="exec">設定</button>
        </div>
        <div>
            <button v-on:click="arraive_work" >出社する</button>
            <!-- <button onclick="test()">出社する</button> -->
        </div>
        <div>
            <p>出社時間:{{ arraive }}</p>
            <p>出社場所:{{ lat }} {{ long }}</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdn.geolonia.com/community-geocoder.js"></script>
    <script>
        let get_arraive='';
        let lat        ='';
        let long       ='';

        let app = new Vue({
                el: '#app',
                data: {
                    arraive: get_arraive,
                    lat: lat,
                    long: long
                },
                methods: {
                    append: function(arraive, lat ,long){
                        arraive: arraive,
                        lat: lat,
                        long: long
                    },
                    arraive_work: function(){
                        navigator.geolocation.getCurrentPosition(succces, error);
                    },
                    succces: function(position){
                        let date        = new Date();
                        get_arraive = date.getFullYear() + '/' + (date.getMonth()+1) + '/' + date.getDate() + '/' + date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds();
                        lat         = '緯度:'+ position.coords.latitude + ',';
                        long        = '経度:'+ position.coords.longitude;
                        this.append(get_arraive, lat, long);
                    }
                }
                
                
            })
        document.getElementById('exec').addEventListener('click', () => {
            //let log = document.getElementById('address').value;
            if (document.getElementById('address').value) {
                getLatLng(document.getElementById('address').value, latlng);
                
            }
            function latlng(address) {
                console.log(address);
            }
        })
        /*
        document.getElementById('arrive_work').addEventListener('click', ()=>{
            navigator.geolocation.getCurrentPosition(succces, error);
        });
        
        function test() {
            //alert('成功');
            navigator.geolocation.getCurrentPosition(succces);
        }
        
        function succces(position){
            let date        = new Date();
            get_arraive = date.getFullYear() + '/' + (date.getMonth()+1) + '/' + date.getDate() + '/' + date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds();
            lat         = '緯度:'+ position.coords.latitude + ',';
            long        = '経度:'+ position.coords.longitude;
            append(get_arraive, lat, long);
            /*
            let app = new Vue({
                el: '#app',
                data: {
                    arraive: get_arraive,
                    lat: lat,
                    long: long
                }
            })
            */
            /*
            Vue.component('diplay', {
                template: `<div>
                            <p>出社時間:{{ arraive }}</p>
                            <p>出社場所:{{ lat }}, {{ long }}</p>
                            </div>`
            })
            */
            
        }

        function error(){
            window.alert('失敗');
        }
        
    </script>
</body>
</html>