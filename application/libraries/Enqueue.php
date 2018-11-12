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
    protected $vendor_path;

    public function __construct() {
        $this->scripts = array();
        $this->styles = array();
        $this->path_js = $path_js = '/public/js/';
        $this->path_css = $path_css = '/public/css/';
        $this->vendor_path = '/public/vendor/';
    }

    public function enqueueScripts(array $scripts, $vendor = false) {
        foreach ($scripts as $script) {
            if($vendor) {
                array_push($this->scripts, base_url($this->vendor_path . $script));
            }else{
                array_push($this->scripts,  base_url($this->path_js . $script));    
            }
        }
    }

    public function enqueueStyles(array $styles, $vendor = false) {
        foreach ($styles as $style) {

            if($vendor) {
                array_push($this->styles, base_url($this->vendor_path . $style));
            }else{
                array_push($this->styles,  base_url($this->path_css . $style));    
            }
        }
    }

    public function loadScripts($async = null) {
        foreach ($this->scripts as $script) {
            echo '<script src="'.$script.'"></script>' . PHP_EOL;
        }
    }

    public function loadStyles() {
        foreach ($this->styles as $style) {
            echo '<link rel="stylesheet" href="'.$style.'" />' . PHP_EOL;
        }
    }
}
