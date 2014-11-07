<?php

class generadorcodigos {

    public function codigos() {
        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
        $cad = "";
        for ($i = 0; $i < 9; $i++) {
            $cad .= substr($str, rand(0, 36), 1);
        }
        echo $cad;
    }

}
