<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ti + eu</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="fluid-gallery.css">


</head>
<body>

<div class="container gallery-container">

    <h1>Ti + eu</h1>

    <p class="page-description text-center">NÓS</p>
    
    <div class="tz-gallery">

        <div class="row">
        <?php
        $files = array_slice(scandir('images'),2);
            foreach($files as $image){
                if (exif_imagetype('images/'.$image)){
                    ?>
                    <div class="col-sm-12 col-md-4">
                        <div class="box">
                        <a class="lightbox" href="images/<?= $image; ?>">
                            <img src="images/<?= $image; ?>" alt="NOS" width="300">
                        </a>
                        </div>
                    </div>
                    <?php
                }
            }
        ?>
        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>