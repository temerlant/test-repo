<nav class="site-header sticky-top py-1" >
      <div class="container d-flex  flex-md-row justify-content-evenly">
        <a class="py-2 ml-mr-2" href="../index.php">Главная</a>
        <a class="py-2 ml-mr-2" href="../Otvz.php">Отзывы</a>
        <a class="py-2 ml-mr-2" href="../MyOtzv.php">Мои отзывы</a>

          <?php
          //<label style="cursor:pointer;">###
        //  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart2" viewBox="0 2 16 16">
        //    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
        //  </svg>
        //  </label >
        if ($_COOKIE['user'] == ''):  ?>

        <a class="py-2 ml-mr-2" href="User_Page/signin.php"  style="color: yellow;">Войти

      <?php else : ?>

            <a class="py-2 ml-mr-2" href="User_Page/signin.php">пользователь: <?php print_r($_COOKIE['user'])?></a>
            <a class="btn btn-outline-primary" href="check/exit.php">Exit</a>

      <?php endif?>



        </a>
      </div>
</nav>
