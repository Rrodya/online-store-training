<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/dist/style.css">
    <title>Document</title>
</head>
<body>
        <nav class="py-2 bg-light border-bottom">
            <div class="container d-flex flex-wrap">
              <ul class="nav me-auto">
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2 active" aria-current="page">Главная</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Цены</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Каталог</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Контакты</a></li>
              </ul>
              <ul class="nav">
                <li class="nav-item"><a href="./login.php" class="nav-link link-dark px-2">Войти</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Регистрация</a></li>
              </ul>
            </div>
        </nav>
        <header class="py-3 mb-4 border-bottom">
            <div class="container d-flex flex-wrap justify-content-center">
              <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                <img class="bi me-3" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo-black.svg" alt="" width="40px">
                <span class="fs-4">Double header</span>
              </a>
              <form class="col-12 col-lg-auto mb-3 mb-lg-0">
                <input type="search" class="form-control" placeholder="Искать..." aria-label="Search">
              </form>
            </div>
          </header>
          <div class="main mt-5">
            <div class="container">
            <h1 class="mb-5">Товары</h1>
            <div class="d-flex flex-wrap">
                <?php
                    for($i = 0; $i < 10; $i++):
                ?>
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Просто текст</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/<?echo ($i + 1)?>.jpg" alt="" class="img-thumbnail">
                        <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подбробнее</button>
                    </div>
                </div>
            <?php
                endfor;
            ?>
        </div>
            </div>
        </div>
        <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">

    <p class="col-md-4 mb-0 text-muted">© 2021 Company, Inc</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
    <img  src="./images/bootstrapIcon.png" alt="" width="50">
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>

  </footer>
  </div>
</body>
</html>