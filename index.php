<!DOCTYPE html>
<html>
<head>
    <title>scratchcard</title>
     <link rel="stylesheet" href="css/style.css">
     <script src="js/jquery-1.11.3.js"></script>
     <script>
        $.ajax({
            url: './php/getRankImage.php',
            type:"post",

            success: function(res){
                $('#openImg').attr('src', 'uploads/' + res);
            },

             error:function(xhr, ajaxOptions, thrownError){
                console.log(xhr.status);
                console.log(thrownError);
             }
        });
     </script>
</head>
<body>
<div class="container" id="js-container">
    <canvas class="canvas" id="js-canvas" width="600" height="450"></canvas>
    <form class="form" style="visibility: hidden;">
        <img width="600px" id="openImg" src="" alt="" />
    </form>
</div>

</body>
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/scratchcard.js"></script>
</html>