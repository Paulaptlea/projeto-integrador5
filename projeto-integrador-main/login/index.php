<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Mural 33 | Galeria Online</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./../css/styles.css" rel="stylesheet" />
        <style> @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap'); </style>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="./../index.html">Mural 33</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" href="./../index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="./../sobre.html">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="./../projeto4rafaela/cadastrar.php">Cadastro</a></li>
                        <li class="direita" class="nav-item"><a class="nav-link" href="./login/index.php">Login</a></li>
                        
                        
                    </ul>
                    
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder" >Mural 33</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Galeria de Artes Online</p>
                </div>
            </div>
        </header>
        <section class="sobre">
        <h1>Logar:</h1>
        <form action="verificarlogin.php"method="post">
        Login:<br/>
        <input type="text" name="login" /><br/> 
        <br/><br/>
        Senha:<br/>
        <input type="password" name="senha" /><br/> 
        <br/><br/>
        <input type="submit" value="Logar" /><br/> 
     </form>
     </section>

</body>
</html>