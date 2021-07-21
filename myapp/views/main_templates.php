<html>
    <head>
        <title><?= $title ?> - YouLife</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        
        <!-- CDN hosted by Cachefly -->
        <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
        <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            toolbar2: "print preview media | forecolor backcolor emoticons"
        });
        </script>
    </head>
    <body style="background: #E6E6FA; margin-top: 20px;">
        <div class="container"> 
            <div class="row">
                <a href="<?= base_url() ?>"><img class="center-block" src="<?=base_url()?>images/logo.png" /></a>
            </div>
            <div class="row">
                <?= $content ?>
            </div>
            <div class="row">
                <p class="text-center">YouLife - Universidad de Jaén (2015)</p>
            </div>
        </div>
    </body>
</html>