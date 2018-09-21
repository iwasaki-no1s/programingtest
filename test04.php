<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <script>
            var x =0;
            var pv = 10;
            var left = 0;

            document.onkeydown = function(e) {
                var keyCode = false;

                if (e) event = e;

                if (event) {
                    if (event.keyCode) {
                        keyCode = event.keyCode;
                    } else if (event.which) {
                        keyCode = event.which;
                    }
                }

                if (keyCode == 39){
                    document.getElementById("mario").innerHTML = '<img src="http://localhost/PhpPrograminTests/images/mario_3.png"/>';
                    left = 1;
                }    
                if (keyCode == 37){
                    document.getElementById("mario").innerHTML = '<img src="http://localhost/PhpPrograminTests/images/mario_6.png"/>';
                    right = 1;
                }
                move()
            };
            document.onkeyup = function(e) {
                var keyCode = false;

                if (e) event = e;

                if (event) {
                    if (event.keyCode) {
                        keyCode = event.keyCode;
                    } else if (event.which) {
                        keyCode = event.which;
                    }
                }

                if (keyCode == 39){
                    document.getElementById("mario").innerHTML = '<img src="http://localhost/PhpPrograminTests/images/mario_2.png"/>';
                    left = 0
                    setTimeout("rest('right')", 300);
                }
                if (keyCode == 37){
                    document.getElementById("mario").innerHTML = '<img src="http://localhost/PhpPrograminTests/images/mario_5.png"/>';
                    right = 0;
                    setTimeout("rest('left')", 300);
                }
                move()
            };
            function move()
            {
                if(left == 1){
                    x -= pv;
                }
                if(right == 1){
                    x += pv;
                }
                document.getElementById("mm").style.left = x+'px';
            }
            function rest(direction){
                if(direction == "right"){
                    document.getElementById("mario").innerHTML = '<img src="http://localhost/PhpPrograminTests/images/mario_1.png"/>';
                }else{
                    document.getElementById("mario").innerHTML = '<img src="http://localhost/PhpPrograminTests/images/mario_4.png"/>';
                }
            }
        </script>
        <style type="text/css">
        div{
            width:800px;
            height:80px;
        }
        #mm{
            z-index: 1;
            position: absolute;
            height:80px;
            width:80px;
        }
        </style>
    </head>
    <body>
        <div id="mario"><img id="mm" src="http://localhost/PhpPrograminTests/images/mario_1.png"/></div>
    </body>
</html>
