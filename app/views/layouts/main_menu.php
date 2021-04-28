<?php
  $menu = Route::getMenu('menu');
  $currentPage = currentPage();

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?= MENU_BRAND?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php foreach ($menu as $key => $val) :
          $active = '';?>

          <?php if(is_array($val)) : ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $key; ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php foreach ($val as $k => $v) :
                  $active = ($v == $currentPage) ? 'active' : '';?>

                  <?php if($k == "separator") : ?>
                    <li><hr class="dropdown-divider"></li>
                  <?php else: ?>
                    <li><a class="dropdown-item <?= $active; ?>" href="<?=$v?>"><?=$k?></a></li>
                  <?php endif; ?>
                <?php endforeach; ?>

              </ul>
            </li>

          <?php else: ?>
            <?php $active = ($val == $currentPage) ? 'active' : '';?>

            <li class="nav-item">
              <a class="nav-link <?= $active; ?>" aria-current="page" href="<?= $val;?>"><?= $key;?></a>
            </li>

          <?php endif; ?>

        <?php endforeach; ?>

      </ul>

      <form class="d-flex">
        <?php if(currentUser()) :?>
          <label for="">Hello <?= currentUser()->fname; ?></label>
        <?php endif; ?>
        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
      </form>
    </div>
  </div>
</nav>
