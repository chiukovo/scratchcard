<?php
    include('php/mysql_connect.php');
    $user = array();
    $sql = "SELECT name, content, image FROM user order by id desc;";
    $result=$mysqli->query($sql);

    while($row = $result->fetch_assoc()) {
        $user[] = $row;
    }
?>
<!DOCTYPE html>
<html class="gallery">

<head>
    <meta charset="UTF-8" />
    <title>Chiuko ♥ Quni   HAPPY WEDDING</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" /> -->
    <link rel="shortcut icon" href="images/favicon.ico?0.1">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 14px;
            line-height: 1.42857143;
            color: #47525d;
            background-color: #fff;

            margin: 0;
            padding: 0;
        }
        #photos {
            opacity: .88;
        }

        #photos img {
            width: 33.33%;
            float: left;
            display: block;
        }

        ul {
            list-style: none;
            margin: 0 auto;
            display: block;
            text-align: center;
        }

        #overlay {
            background: rgba(0, 0, 0, .8);
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            display: none;
            text-align: center;
        }

        #overlay img {
            margin: 10% auto 0;
            max-width: 100%;
            border-radius: 5px;
        }

        #photos {
            width: 100%;
        }

        #photo-gallery {
            width: 100%;
        }
    </style>
</head>

<body>
    <div id="photos">
        <ul id="photo-gallery">
            <!--
                姓名 = $infor['name']
                祝福的話 = $infor['content']
                url = $infor['image']
            -->
            <?php foreach ($user as $infor) {?>
            <li>
                <a href="uploads/<?php echo $infor['image'];?>">
                    <img src="uploads/<?php echo $infor['image'];?>">
                </a>
            </li>
            <?php } ?>

        </ul>
    </div>
    <!-- <script src="js/jquery-1.11.3.js"></script> -->
<!--     <script>
    var $overlay = $('<div id="overlay"></div>');
    var $image = $("<img>");

    //An image to overlay
    $overlay.append($image);

    //Add overlay
    $("body").append($overlay);

    //click the image and a scaled version of the full size image will appear
    $("#photo-gallery a").click(function(event) {
        event.preventDefault();
        var imageLocation = $(this).attr("href");

        //update overlay with the image linked in the link
        $image.attr("src", imageLocation);

        //show the overlay
        $overlay.show();
    });

    $("#overlay").click(function() {
        $("#overlay").hide();
    });
    </script> -->
</body>

</html>
