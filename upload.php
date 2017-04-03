<!DOCTYPE html>
<html class="upload">

<head>
    <meta charset="UTF-8">
    <title>Chiuko ♥ Quni   HAPPY WEDDING</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="shortcut icon" href="image/favicon.ico?0.1">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <!-- <link rel="stylesheet" href="css/jquery.filer.css"> -->
    <link rel="stylesheet" href="css/upload.css">
    <!-- loading -->
    <link rel="stylesheet" href="css/loader.css">
    <!-- Share core Javascript -->
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/jquery.filer.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/exif.js"></script>
    <script type='text/javascript' src='js/resizeExif.js?v=20161224'></script>
    <script type='text/javascript' src='js/mobileBUGFix.mini.js'></script>
    <style>
        input[type="file"] {
          cursor: pointer !Important;
          padding-left: 20px;
          color: transparent;
        }
        input[type="file"]::-webkit-file-upload-button {
          background: #57a29e;
          border: 0;
          padding: 0.5em 1.5em;
          cursor: pointer;
          color: #fff;
          border-radius: .2em;
        }
        input[type="file"]::-ms-browse {
          background: #57a29e;
          border: 0;
          padding: 0.5em 1.5em;
          cursor: pointer;
          color: #fff;
          border-radius: .2em;
        }
        #uploadMsg {
            position: absolute;
            left: 200px;
            overflow: hidden;
            width: 150px;
            white-space: nowrap;
        }
    </style>
</head>

<body>
    <div class="page-loading-overlay">
       <div class="loader"></div>
    </div>
    <div id="mainBody">
        <div id="header">
            <div class="btn-left">
                <a href="photo.php"><img src="image/icon_gallery.svg" /></a>
            </div>
            <div class="btn-right">
                <a href="#"><img src="image/icon_diamond.svg" /></a>
            </div>
        </div>
        <div id="content">
            <div class="title"><img src="image/title.svg" /></div>
            <div class="form">
                <form id="formPost" action="./php/form_upload.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="input" name="name" class="form-input" placeholder="姓名">
                    </div>
                    <div class="form-group">
                        <input type="input" name="content" class="form-input" placeholder="祝福話語">
                    </div>
                    <div class="form-group form-upload">
                        <label class="form-label">照片上傳</label>
                        <input type="file" accept="image/*" id="uploadImage" onchange="selectFileImage(this);" />
                        <span id="uploadMsg"></span>
                    </div>
                    <input id="myImage" type="hidden" />
                    <div class="form-btn">
                        <button id="button" type=button>
                            送出我的祝福
                            <img src="image/icon_arrow.svg" />
                        </button>
                    </div>
                    <input type="hidden" id="fileName" name="fileName"/>
                </form>
            </div>
        </div>
        <div class="mask"></div>
    </div>
    <script type="text/javascript">

    function getExtension(filename) {
        var parts = filename.split('.');
        return parts[parts.length - 1];
    }

    function isImage(filename) {
        var ext = getExtension(filename);
        switch (ext.toLowerCase()) {
        case 'jpg':
        case 'jpeg':
        case 'png':
            //etc
            return true;
        }
        return false;
    }

    $(document).ready(function() {
        $('#uploadImage').on('change', function(element) {
            $('.page-loading-overlay').show();
            $('#uploadMsg').text(element.target.value.split('\\').pop());
        });

        $("#button").click(function(){
            var name = $('input[name=name]').val();
            var fileName = $('#fileName').val();

            if (name == '') {
                alert('姓名未輸入');
            } else if (fileName == '') {
                alert('圖片未上傳');
            } else {
                $('#formPost').submit();
            }
        });
    });
    </script>
</body>
</html>
