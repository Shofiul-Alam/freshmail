<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * @author    Md Shofiul Alam
 * @copyright Copyright (c) 2015 Toolmateshire <admin@toolmateshire.com.au>. All rights reserved
 */

namespace XLite\Module\Shofi\FreshMail\Controller\Admin;


use XLite\Module\Shofi\FreshMail\FreshMailConfig;
use XLite\Module\Shofi\FreshMail\API\FreshmailRestApi;

use XLite\Core\Exception;


/**
 * ACL catalog
 */
class FreshmailController extends \XLite\Controller\Admin\AAdmin implements \XLite\Base\IDecorator
{

//    /**
//     * Backward compatibility
//     *
//     * @var array
//     */
//    protected $params = array('target');
//
//
//
//
//
//    protected function doActionSubscribeAll() {
//
//
//        if($this->checkACL()) {
//            $rest = new \XLite\Module\Shofi\FreshMail\API\FreshmailRestApi();
//            $freshMailRestConfig = new \XLite\Module\Shofi\FreshMail\FreshMailConfig();
//
//            $rest->setApiKey($freshMailRestConfig->getFmAPIKey());
//            $rest->setApiSecret($freshMailRestConfig->getFmAPISecret());
//
//
//            $data = [
//                'email' => "shos@gmail.com",
//                'list'  => $freshMailRestConfig->getFmListAPIkey(),
//                'custom_fields' => [
//                    'firstname' => "Alam",
//                    'lastname'  => "kal",
//                ],
//
//                //'state'   => 2
//                //'confirm' => 1
//            ];
//
//            try {
//                $response = $rest->doRequest('subscriber/add', $data);
//
//
//                \XLite\Core\TopMessage::addInfo(
//                    'Subscriber added to Freshmail successfully'
//                );
//
//            } catch (\XLite\Core\Exception $e) {
//
//                \XLite\Core\TopMessage::addError(
//                    'Error message: ' . $e->getMessage() . ', Error code: ' . $e->getCode() . ', HTTP code: ' . $rest->getHttpCode() . PHP_EOL
//                );
//            }
//        }
//
//    }


}



