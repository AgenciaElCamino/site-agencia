<!doctype html>
<html lang="pt">
    <head>
        <meta charset="UTF-8" />
        <?php $this->enqueue->enqueueStyles(['bootstrap.min', 'admin']) ?>
        <?php $this->enqueue->loadStyles() ?>
        <title>EL CAMINO | ADMIN</title>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?= site_url('admin/painel') ?>">GERENCIADOR DE CONTEÚDO | EL CAMINO</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Textos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= site_url('admin/textos/listar/seo') ?>">SEO</a></li>
                            <li><a href="<?= site_url('admin/textos/listar/menu') ?>">Menu</a></li>
                            <li><a href="<?= site_url('admin/textos/listar/geral') ?>">Geral</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= site_url('admin/cases') ?>">Cases</a>
                    </li>
                </ul>
            </div>
        </nav>
