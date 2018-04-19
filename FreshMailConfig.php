<?php

namespace  XLite\Module\Shofi\FreshMail;

class FreshMailConfig extends \XLite\Base\Singleton {
    private $fmAPIKey;
    private $fmAPISecret;
    private $fmListAPIkey;

    /**
     * @return mixed
     */
    public function getFmListAPIkey()
    {
        $config = \XLite\Core\Config::getInstance();
        $key = $config->Shofi->FreshMail->freshMailListAPIKey;
        return $this->fmListAPIkey = $key;
    }

    /**
     * @return mixed
     */
    public function getFmAPIKey()
    {
        $config = \XLite\Core\Config::getInstance();
        $key = $config->Shofi->FreshMail->freshMailAPIKey;
        return $this->fmAPIKey = $key;
    }


    /**
     * @return mixed
     */
    public function getFmAPISecret()
    {
        $config = \XLite\Core\Config::getInstance();
        $secret = $config->Shofi->FreshMail->freshMailAPISecret;
        return $this->fmAPISecret = $secret;
    }


}
