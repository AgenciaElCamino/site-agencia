<?php $this->load->view('admin/inc/header'); ?>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3><?= $page_name ?></h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Key</th>
                        <th>Texto</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($content as $data) : ?>
                    <tr>
                        <td><?=$data->title?></td>
                        <td><?=$data->text_key?></td>
                        <td><?= word_limiter($data->value, 50)?></td>
                        <td align="right">
                            <a href="<?=site_url('admin/textos/editar/') . $data->text_key?>" class="btn btn-primary btn-xs">Editar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
$this->load->view('admin/inc/footer');
