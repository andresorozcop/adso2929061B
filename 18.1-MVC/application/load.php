<?php
class load {
    public function view($nameView, $data = null) {
        // paso los datos a una variable global para que la vista pueda acceder
        if ($data !== null) {
            $GLOBALS['data'] = $data;
        }
        include 'views/' . $nameView;
    }
}