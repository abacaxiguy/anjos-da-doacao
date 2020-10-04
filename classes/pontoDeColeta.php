<?php

class PontoDeColeta
{
    public function __set($atr, $val)
    {
        $this->$atr = $val;
    }

    public function __get($atr)
    {
        return $atr;
    }
}
