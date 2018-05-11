<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Enqueue Scripts and Styles.
 * Author: Fernando Soares <fernandosoares.dev@gmail.com>
 * Version: 1.0
 */
class Enqueue {

    protected $scripts;
    protected $styles;
    protected $path_js;
    protected $path_css;

    public function __construct($path_js = 'public/js/', $path_css = 'public/css/') {
        $this->scripts = array();
        $this->styles = array();
        $this->path_js = $path_js;
        $this->path_css = $path_css;
    }

    public function enqueueScripts(array $scripts) {
        foreach ($scripts as $script) {
            array_push($this->scripts, $script);
        }
    }

    public function enqueueStyles(array $styles) {
        foreach ($styles as $style) {
            array_push($this->styles, $style);
        }
    }

    public function loadScripts($async = null) {
        foreach ($this->scripts as $script) {
            echo '<script src="' . base_url() . $this->path_js . $script . '.js"'. ($async != null ? ' async' : null) .'></script>' . PHP_EOL;
        }
    }

    public function loadStyles() {
        foreach ($this->styles as $style) {
            echo '<link rel="stylesheet" href="' . base_url() . $this->path_css . $style . '.css" />' . PHP_EOL;
        }
    }

}
