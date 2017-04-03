<!DOCTYPE html>
<html class="first">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="shortcut icon" href="image/favicon.ico?0.1">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background: #d8d8d8;
        }
        .first {
            width: 100%;
        }
        #js-container {
            position: relative;
            margin: 0 auto;
        }
        #js-canvas, .form {
            position: absolute;
            left:        50%;
            margin-left: -325px;
        }
        .form {
            width: 650px;
            height: 650px;
            overflow: hidden;
            line-height: 650px;
        }
        .form img {
            vertical-align: middle;
        }
        #js-canvas {
            z-index: 2;
        }
        .form {
            z-index: 1;
        }
        .bot {
            position: absolute;
            top: 650px;
            left: 50%;
            margin-left: -325px;
            text-align: center;
            width: 650px;
        }
        #reset {
            margin-top: 30px;
        }
        #in {
            display: none;
        }
        #cursor {
          display: block;
          position: absolute;
          margin-top: -40px;
          margin-left: -40px;
          width: 80px;
          height: 80px;
          z-index: 5;
          text-align: center;
          pointer-events: none;
        }

        #circle {
          display: block;
          position: relative;
          margin: auto;
          margin-top: 10px;
          width: 80px;
          height: 80px;
          background: url('image/money.png');
          pointer-events: none;
        }
    </style>
    <script src="js/jquery-1.11.3.js"></script>
    <!-- loading -->
    <link rel="stylesheet" href="css/loader.css">
    <script>
    $.ajax({
        url: './php/getRankImage.php',
        type: "post",

        success: function(res) {
            var decodeRes = $.parseJSON(res);
            $('#openImg').attr('src', 'uploads/' + decodeRes.image);
            $('#name').text(decodeRes.name);
            $('#content').text(decodeRes.content);
        },

        error: function(xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
        }
    });
    </script>
    <script type="text/javascript">

    /***********************************************
    * Disable select-text script- © Dynamic Drive (www.dynamicdrive.com)
    * This notice MUST stay intact for legal use
    * Visit http://www.dynamicdrive.com/ for full source code
    ***********************************************/

    //form tags to omit in NS6+:
    var omitformtags=["input", "textarea", "select"]

    omitformtags=omitformtags.join("|")

    function disableselect(e){
    if (omitformtags.indexOf(e.target.tagName.toLowerCase())==-1)
    return false
    }

    function reEnable(){
    return true
    }

    if (typeof document.onselectstart!="undefined")
    document.onselectstart=new Function ("return false")
    else{
    document.onmousedown=disableselect
    document.onmouseup=reEnable
    }

    </script>
</head>

<body>
    <div id="cursor">
        <div id="circle"></div>
    </div>
    <div class="container" id="js-container">
        <canvas class="canvas" id="js-canvas" width="650" height="650"></canvas>
        <form class="form" style="visibility: hidden;">
            <img width="650px" id="openImg" src="" alt="" />
        </form>

        <div class="bot">
            <div id="in">
                <h3 id="name"></h3>
                <div id="content"></div>
            </div>
            <button id="reset" type="button">重置</button>
        </div>
    </div>
</body>
<script src="js/scratchcard.js?v=20161223"></script>
<script type="text/javascript">
$("#reset").click(function() {
    $.ajax({
        url: './php/reset.php',
        type: "post",

        success: function() {
            console.log('success');
            location.reload();
        },

        error: function(xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
        }
    });
});
</script>
<script>
    $('body').mouseover(function(){
      $(this).css({cursor: 'none'});
    });

    $(document).on('mousemove', function(e){
      $('#cursor').css({
        left:  e.pageX,
        top:   e.pageY
      });
    });
</script>
</html>
