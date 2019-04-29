<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!--重要meta, 必须!-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,shrink-to-fit=no"/>
    <title>myfeiyou--地铁图</title>
    <style type="text/css">
        #search{
            position:fixed;
            width:80%;
            height:50px;
            z-index:100000;
            background:white;
            opacity:0.7;
            text-align: center;
        }
        #search select{
            appearance:none;
            -moz-appearance:none;
            -webkit-appearance:none;
            height:50px;
            width:100px;
            font-size:28px;
            border:0px;
            /*为下拉小箭头留出一点位置，避免被文字覆盖*/
            padding-right: 14px;
        }
    </style>
</head>
<body>
    <div id="search">
        <select name="city" id="city">
            
        </select>
    </div>
    <div id="mysubway"></div>

    <script src="{{ URL::asset('home/js/jquery-1.11.1.min.js') }}"></script>
    <script src="http://webapi.amap.com/subway?v=1.0&key={{ $gaode_key }}&callback=cbk"></script>
    <script type="text/javascript">
        var mysubway;
        window.cbk = function(){
            mysubway = subway("mysubway", {
                easy: 1
            });
            mysubway.getCityList(getCity);
        };

        function getCity(data){
            var html = '';
            $.each(data,function(i,index){
                html += '<option value="'+i+'">'+index.name+'</option>';
            })
            $('#city').html(html);
        }

        $('#city').change(function(){
            var val=$(this).children('option:selected').val();
            console.log(val);
            mysubway.setAdcode(val);
        });

        //点击线路名，高亮此线路
        mysubway.event.on("lineName.touch", function(ev, info) {
            mysubway.showLine(info.id);
            var select_obj = qs('#g-select');
            mysubway.setFitView(select_obj);
            var center = mysubway.getSelectedLineCenter();
            mysubway.setCenter(center);
        });


    </script>
</body>
</html>
