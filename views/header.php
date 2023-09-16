<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->title; ?></title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="public/assets/favicon.ico" />

    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/main.css" rel="stylesheet" />

    <!-- W3 -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap -->

    <link rel="stylesheet" href="<?= URL; ?>public/MDB/css/mdb.min.css" />
    <link rel="stylesheet" href="<?= URL; ?>public/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <link rel="stylesheet" href="<?= URL; ?>public/css/main.css" />
    <style>
        .dropdown-menu.show {
            display: block;
            margin-top: 0.6em !important;
        }

        .dropdown-menu-dark.show {
            display: block;
            margin-top: 1.1em !important;
        }

        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }
    </style>

</head>

<body>
    <!--========== HEADER ==========-->
    <header class="header" style="background: #005BAA;">
        <div class="header__container">
            <div class="d-flex align-items-center">
                <a href="index" class="header__logo">Estrutura MVC</a>
                <?php
                Session::init();
                // var_dump($_SESSION);
                // die;
                if (isset($_SESSION) && $_SESSION != null) { ?>
                    <li class="nav-item dropdown header__container">
                        <a class="nav-link dropdown-toggle" style="color: white;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Funções
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="lancamento">Lançamento</a></li>
                            <?php
                            if ($_SESSION["nivel"] == 1 || $_SESSION["nivel"] == 2) { ?>
                                <li><a class="dropdown-item" href="relatorio">Vizualizar relatório</a></li>
                            <?php } ?>
                            <?php
                            if ($_SESSION["nivel"] == 1) { ?>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="cadastrar">Cadastrar novo usuário</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php } ?>
            </div>
            <?php
            if (!isset($_SESSION) || $_SESSION == null) { ?>
                <div class="btn-group">
                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Login
                    </button>
                    <ul class="dropdown-menu">
                        <form action="" style="padding: 20px;width: 18rem;">
                            <p style="text-align: center;">Faça Login</p>
                            <div class="input-group flex-nowrap mb-2">
                                <input id="email" type="email" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-2">
                                <input id="pwd" type="password" class="form-control" placeholder="Senha" aria-label="Senha" aria-describedby="addon-wrapping">
                            </div>
                            <div class="d-flex justify-content-center" style="gap: 1rem;">
                                <button onclick="login()" type="button" class="btn btn-primary">Entrar</button>
                            </div>
                        </form>
                    </ul>
                </div>
            <?php } else { ?>
                <div class="dropdown">
                    <a class="dropdown-toggle" style="color: white;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Bem-vindo, <?php echo ($_SESSION["firstname"]); ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item d-flex align-items-center justify-content-center" id="logout" name="1" onclick="logout(this)" style="cursor:pointer;">
                                <i class='bx bx-log-out nav__icon' style="color: white;"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            <?php } ?>
        </div>

        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
        </div>
    </header>
    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>
</body>