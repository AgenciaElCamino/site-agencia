    <?php $this->enqueue->enqueueScripts([
        'jquery/jquery.min.js',
        'jquery/jquery-migrate.min.js',
        'popper.js/dist/esm/popper.min.js',
        'bootstrap/dist/js/bootstrap.min.js',
        'jquery-cycle2/build/jquery.cycle2.min.js',
        'jquery-cycle2/build/plugin/jquery.cycle2.center.min.js',
        'aos/dist/aos.js'], true) ?>
    <?php $this->enqueue->enqueueScripts(['scripts.min.js']) ?>
    <?php $this->enqueue->loadScripts() ?>
    </body>
</html>