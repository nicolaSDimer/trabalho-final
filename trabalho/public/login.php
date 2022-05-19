<?php require_once "../src/views/header.php"; ?>
<?php require_once "../src/views/header_nav.php"; ?>

    <div class="login-center">
        <h1>: LOGIN : </h1>

        <form method="post" action="receba.php">
            <div class="form group">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sn-12">
                        <label for="exampleInputEmail1">Endereço de email</label>
                        <input type="email" name="email" class="form-control" placeholder="Digite seu email" required />
                        <small id="emailHelp" class="form-text text-muted"></small>
                        <br>
                        <input type="password" name="pass" class="form-control" placeholder="Digite sua senha" required />
                        <br><br>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" class="btn btn-primary col-sm-12 col-lg-4 offset-lg-2" value="Entrar" />
                    &nbsp;
                    <input type="reset" class="btn btn-danger col-lg-4" value="Apagar" />
                    <br><br>
                </div>
            </div>
    
        </form>
    </div>

<?php require_once "../src/views/footer.php"; ?>