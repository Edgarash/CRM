<?php
namespace App\Traits;
/**
 * Trait Encryptable
 * @package App\Traits
 */
trait Encryptable
{
  
    /**
     * @return mixed
     */
    public function getSecretKey () {
        return env('APP_DB_KEY');
    }
    /**
     * @return mixed
     */
    public function getKeyInitVector () {
        return env('APP_KEY');
    }
    /**
     * @return \Illuminate\Config\Repository|mixed
     */
    public function getEncryptMethod () {
        return config('app.cipher');
    }
    /**
     * @param $string
     * @return bool|string
     */
    public function encrypt( $string ) {
        $key = hash( config('app.encryption'), $this->getSecretKey() );
        $iv = substr( hash( config('app.encryption'), $this->getKeyInitVector() ), 0, 16 );
        return base64_encode( openssl_encrypt( $string, $this->getEncryptMethod(), $key, 0, $iv ) );
    }
    /**
     * @param $string
     * @return bool|string
     */
    public function decrypt( $string ) {
        $key = hash( config('app.encryption'), $this->getSecretKey() );
        $iv = substr( hash( config('app.encryption'), $this->getKeyInitVector() ), 0, 16 );
        return openssl_decrypt( base64_decode( $string ), $this->getEncryptMethod(), $key, 0, $iv );
    }
    /**
     * @param $key
     * @return bool|string
     */
    public function getAttribute($key)
    {
        if (in_array($key, $this->encryptable)) {
            $value = $this->decrypt(parent::getAttribute($key));
            return $value;
        }
        return parent::getAttribute($key);
    }
    /**
     * @param $key
     * @param $value
     * @return mixed
     */
    public function setAttribute($key, $value)
    {
        if (in_array($key, $this->encryptable)) {
            $value = $this->encrypt($value);
        }
        return parent::setAttribute($key, $value);
    }
}
