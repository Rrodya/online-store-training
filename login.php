<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/login/style.css">
    <title>Login</title>
</head>
<body class="text-center">
    <main class="form-signin d-flex justify-content-center align-items-center">
    <form class="login-form">
        <img class="mb-4" src="./images/bootstrapIcon.png" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Введите данные</h1>

        <div class="form-floating mt-4">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Запомнить меня
        </label>
        </div>
        <a href="./index.php"
        <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button></a>
        <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
    </form>
    </main>
</body>
</html>