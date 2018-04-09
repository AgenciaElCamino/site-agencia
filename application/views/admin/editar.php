<?php $this->load->view('admin/inc/header'); ?>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Editando <?= $text[0]->title ?></h3>
        </div>
        <div class="panel-body">

            <form method="post" action="">
                <input type="hidden" name="text_key" value="<?= $text[0]->text_key ?>" />
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Português</label>
                            <input name="value" type="text" class="form-control" value="<?= $text[0]->value ?>" />
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <label>English</label>
                        <input name="value" type="text" class="form-control" value="<?= $text[1]->value ?>" />
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">SALVAR</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
$this->load->view('admin/inc/footer');
