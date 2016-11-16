<!DOCTYPE>
<html lang="html">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>jQuery Filer</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <!-- Styles -->
    <link href="css/jquery.filer.css" rel="stylesheet">

    <!-- Jvascript -->
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/jquery.filer.min.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>

    <style>
        body {
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 14px;
            line-height: 1.42857143;
            color: #47525d;
            background-color: #fff;

            margin: 0;
            padding: 20px;
        }

        hr {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 0;
            border-top: 1px solid #eee;
        }
    </style>
</head>

<body>
    <div id="content">
        <form id="formPost" action="./php/form_upload.php" method="post" enctype="multipart/form-data">
            姓名: <input type="input" name="name">
            <hr>
            祝福的話: <input type="input" name="content">
            <hr>
            照片: <input type="file" name="files[]" id="filer_input" multiple="multiple">
            <button id="button" type=button>submit</button>
        </form>
    </div>

    <script type="text/javascript">
    $("#button").click(function(){
        var name = $('input[name=name]').val();
        var file = $('#filer_input').val();

        if (name != '' && file != '') {
            $('#formPost').submit();
        } else {
            alert('必填欄位未輸入');
        }
    });
    </script>
</body>
</html>
