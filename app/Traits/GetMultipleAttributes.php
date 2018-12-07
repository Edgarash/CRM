<?php
namespace App\Traits;

use App\Cliente;

/**
 * Trait GetMulipleAttributes
 * @package App\Traits
 */
trait GetMulipleAttributes {

    public function getAttr($Attribs = []) {
        $x = new Cliente();
        $x->n = 'hola';
        return $x;
        foreach($Attribs as $key) {
            if (in_array($key, $this->encryptable)) {
            $x->key = $this->decrypt(parent::getAttribute($key));
        }
        return parent::getAttribute($key);
        }
        return $x;
    }
    
}
