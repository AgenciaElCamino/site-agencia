<!doctype html>
<html lang="pt">
    <head>
        <meta charset="UTF-8" />
        <?php $this->enqueue->enqueueStyles(['bootstrap.min', 'admin']) ?>
        <?php $this->enqueue->loadStyles() ?>
        <title>EL CAMINO | ADMIN</title>
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-12 login-form">
                    <form action="<?= site_url('admin/auth')?>" method="post">
                        <div class="form-group">
                            <label for="user">USUÁRIO</label>
                            <input class="form-control" id="user" type="text" name="user" placeholder="Seu nome de usuário" />
                        </div>
                        <div class="form-group">
                            <label for="pass">SENHA</label>
                            <input class="form-control" id="pass" type="password" name="pass" placeholder="Sua senha" />
                        </div>
                        <button class="btn btn-primary" type="submit">ENTRAR</button>
                    </form>
                </div>
            </div>
        </div>

        
        <?php $this->enqueue->enqueueScripts(['jquery.min', 'bootstrap.min']) ?>
        <?php $this->enqueue->loadScripts() ?>
    </body>
</html>