<?php
    function base64(file, callback){
        var coolFile = {};
        function readerOnload(e){
            var base64 = btoa(e.target.result);
            coolFile.base64 = base64;
            callback(coolFile)
        };

        var reader = new FileReader();
        reader.onload = readerOnload;

        var file = file[0].files[0];
        coolFile.filetype = file.type;
        coolFile.size = file.size;
        coolFile.filename = file.name;
        reader.readAsBinaryString(file);
    }

    base64( $('#filer_input'), function(data){
        var imgUrl = 'data:image/png;base64,' + data.base64;
    });
?>