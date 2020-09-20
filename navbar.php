<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <?php
        if (!isset($_SESSION['authentication']) || !$_SESSION['authentication']) {
        ?>
            <a class="navbar-brand" href="./index.php" style="flex-grow: 0.1">
                <img class="logo" src="./img/logo2.png" />
            </a>
        <?php
        } else {
        ?>
            <a class="navbar-brand" href="./catalogo.php" style="flex-grow: 0.1">
                <img class="logo" src="./img/logo2.png" />
            </a>
        <?php
        }
        ?>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="navbar-collapse collapse div-nav" id="navbar">
            <form class="my-2 ml-2 my-lg-0 d-flex" style="flex-grow: 3">
                <input class="search-input" type="search" placeholder="O que procura?" aria-label="Pesquisar" results="5" name="s" id="search" />

                <button class="btn-search" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>

            <?php
            if (!isset($_SESSION['authentication']) || !$_SESSION['authentication']) {
            ?>

                <a href="./login.php" style="flex-grow: 0.5">
                    <div class="login ml-5">
                        <div class="icon mr-2">
                            <i class="fas fa-user"></i>
                        </div>
                        <span>
                            Entre ou<br />
                            cadastre-se</span>
                    </div>
                </a>

            <?php
            } else if ($_SESSION['authentication']) {
            ?>
                <?php
                if (!$_SESSION['ponto']) {
                ?>
                    <a href="./perfil.php">
                        <div class="login ml-5">
                            <div class="icon mr-2">
                                <i class="fas fa-user"></i>
                            </div>
                            <span>
                                <?= "João Lucas" ?>
                            </span>
                        </div>
                    </a>
                <?php
                } else {
                ?>
                    <a href="./admin/admin.php">
                        <div class="login ml-5">
                            <div class="icon mr-2">
                                <i class="fas fa-user"></i>
                            </div>
                            <span>
                                <?= "ADEFAL" ?>
                            </span>
                        </div>
                    </a>
                <?php
                }
                ?>


            <?php
            }
            ?>
        </div>
    </div>
</nav>