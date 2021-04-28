<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $this->siteTitle(); ?></title>

    <link href="<?= PROOT?>css/bootstrap.min.css" rel="stylesheet" >
    <link href="<?= PROOT?>css/custom.css" rel="stylesheet" >

    <script src="<?= PROOT?>js/jquery.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?= PROOT?>js/bootstrap.min.js"></script>

    <?= $this->content('head');?>

  </head>
  <body>
    <?php include 'main_menu.php'; ?>
    <div class="container-fluid" style="min-height: (100%-125px);">
      <?= $this->content('body'); ?>
    </div>

  </body>
</html>
