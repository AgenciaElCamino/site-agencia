<?= doctype('html5') ?>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <?php $this->enqueue->enqueueStyles(['bootstrap.min', 'styles']) ?>
        <?php $this->enqueue->loadStyles() ?>
        <meta name="description" content="<?= $this->lang->line('meta_description')?>" />
        <title><?= $this->lang->line('title')?></title>
    </head>
    <body>
        <section class="header">
            <a class="logo"
               href="<?= site_url($this->session->userdata('lang')) ?>">
                   <?= img(site_url('public/img/logo-el-camino.png'), false, ['border' => 0, 'title' => $this->lang->line('logo_image_title')]) ?>
            </a>
        </section>
