<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * @author    Md Shofiul Alam
 * @copyright Copyright (c) 2015 Toolmateshire <admin@toolmateshire.com.au>. All rights reserved
 */

namespace XLite\Module\Shofi\FreshMail\Processor;


use XLite\Module\Shofi\FreshMail\FreshMailConfig;
use XLite\Module\Shofi\FreshMail\API\FreshmailRestApi;

use XLite\Core\Exception;


/**
 * ACL catalog
 */
class FreshmailProcessor extends \XLite\Base\Singleton
{

    public static function addSingleSubscriber($data) {


        $rest = new \XLite\Module\Shofi\FreshMail\API\FreshmailRestApi();
        $freshMailRestConfig = new \XLite\Module\Shofi\FreshMail\FreshMailConfig();



        $rest->setApiKey($freshMailRestConfig->getFmAPIKey());
        $rest->setApiSecret($freshMailRestConfig->getFmAPISecret());





        $firstName = $data->getFirstName();
        $lastName = $data->getLastName();


        $data = [
            'email' => $data->getLogin(),
            'list'  => $freshMailRestConfig->getFmListAPIkey(),
            'custom_fields' => [
                'firstname' => $firstName,
                'lastname'  => $lastName,
            ],

        ];

        try {
            $response = $rest->doRequest('subscriber/add', $data);


            \XLite\Core\TopMessage::addInfo(
                'Registration successful. Thank you so much for joining with Toolmateshire.'
            );

        } catch (Exception $e) {

            \XLite\Core\TopMessage::addError(

//                'Error message: ' . $e->getMessage() . ', Error code: ' . $e->getCode() . ', HTTP code: ' . $rest->getHttpCode() . PHP_EOL
                "Subscription is not completed"
            );
        }

    }

    public static function addEmailOnlySingleSubscriber($email)
    {


        $rest = new \XLite\Module\Shofi\FreshMail\API\FreshmailRestApi();
        $freshMailRestConfig = new \XLite\Module\Shofi\FreshMail\FreshMailConfig();


        $rest->setApiKey($freshMailRestConfig->getFmAPIKey());
        $rest->setApiSecret($freshMailRestConfig->getFmAPISecret());


        $data = [
            'email' => $email,
            'list' => $freshMailRestConfig->getFmListAPIkey(),
            'custom_fields' => [
                'firstname' => "",
                'lastname' => "",
            ],


        ];

        try {
            $response = $rest->doRequest('subscriber/add', $data);


            \XLite\Core\TopMessage::addInfo(
                'Subscription successful. Thank you so much.'
            );

            return $response;

        } catch (\XLite\Core\Exception $e) {

            \XLite\Core\TopMessage::addError(

                "Subscription is not completed"
            );

            return 'Error message: ' . $e->getMessage() . ', Error code: ' . $e->getCode() . ', HTTP code: ' . $rest->getHttpCode() . PHP_EOL;
        }
    }


}



