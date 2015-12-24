<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Crop Box</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <style>
        .container
        {
            position: absolute;
            top: 10%; left: 10%; right: 0; bottom: 0;
        }
        .action
        {
            width: 400px;
            height: 30px;
            margin: 10px 0;
        }
        .cropped>img
        {
            margin-right: 10px;
        }
    </style>
</head>
<body>

<script src="http://yui.yahooapis.com/3.17.2/build/yui/yui-min.js"></script>
<script src="cropbox.js"></script>
<div class="container">
    <div class="imageBox">
        <div class="thumbBox"></div>
        <div class="spinner" style="display: none">Loading...</div>
    </div>
    <form class="action" action="upload.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <label>
                Name in English :
            </label>
            <input type="text" name="ename" required/>
        </fieldset>
        <fieldset>
            <label>
                Name in Arabic :
            </label>
            <input type="text" name="aname" required/>
        </fieldset>
        <fieldset>
            <input type="file" id="file" style="float:left; width: 250px">
            <input type="button" id="btnCrop" value="Crop" style="float: right">
            <input type="button" id="btnZoomIn" value="+" style="float: right">
            <input type="button" id="btnZoomOut" value="-" style="float: right">
            <div class="cropped">

            </div>
        </fieldset>
        <fieldset>
            <button>Submit</button>
            <a href="index.php">Cancel</a>
        </fieldset>
    </form>
    
</div>
<script type="text/javascript">
    YUI().use('node', 'crop-box', function(Y){
        var options =
        {
            imageBox: '.imageBox',
            thumbBox: '.thumbBox',
            spinner: '.spinner',
            imgSrc: 'avatar.png'
        }
        var cropper = new Y.cropbox(options);
        Y.one('#file').on('change', function(){
            var reader = new FileReader();
            reader.onload = function(e) {
                options.imgSrc = e.target.result;
                cropper = new Y.cropbox(options);
            }
            reader.readAsDataURL(this.get('files')._nodes[0]);
            this.get('files')._nodes = [];
        })
        Y.one('#btnCrop').on('click', function(){
            var img = cropper.getDataURL()
            Y.one('.cropped').append('<img src="'+img+'">');
            Y.one('.cropped').append('<input type="text" name="image" value="'+img+'" required/>');
        })
        Y.one('#btnZoomIn').on('click', function(){
            cropper.zoomIn();
        })
        Y.one('#btnZoomOut').on('click', function(){
            cropper.zoomOut();
        })
    })
</script>

</body>
</html>