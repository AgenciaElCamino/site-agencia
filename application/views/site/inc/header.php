<?= doctype('html5') ?>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <?php $this->enqueue->enqueueStyles([
            'bootstrap/dist/css/bootstrap.min.css',
            'aos/dist/aos.css'
        ], true) ?>
        <?php $this->enqueue->enqueueStyles(['styles.css']) ?>
        <?php $this->enqueue->loadStyles() ?>
        <meta name="description" content="<?= $this->lang->line('meta_description')?>" />
        <title><?= $this->lang->line('title')?> | <?= $this->lang->line('img_logo_title') ?></title>
    </head>
    <body>
        <section class="header" data-aos="zoom-in-up" data-aos-duration="1000">
            <a class="logo"
               href="<?= site_url($this->session->userdata('lang')) ?>">
                   <?= img(site_url('public/img/logo-el-camino.png'), false, ['border' => 0, 'title' => $this->lang->line('img_logo_title')]) ?>
            </a>
        </section>
