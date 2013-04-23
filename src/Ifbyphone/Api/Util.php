<?php
/**
 *
 * Basic Util class
 */
namespace Ifbyphone\Api;

class Util
{
    
    /**
     *
     * Ensure any phone number is numeric and 10 digits in length
     *
     * @param int $number
     * @erturn int $cleanNumber
     */
    public static function cleanNumber($number)
    {
        $cleanNumber = preg_replace('/[^0-9,.]/', '', $number);
        if (strlen((int)$cleanNumber) == 10) {
            return $cleanNumber;
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Invalid number: [%d] provided', $number
            ));
        }
    }
    
    /**
     *
     * Validate Email address
     *
     * @param string $email
     * @return string $email
     */
    public static function validEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $email;
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Invalid email address [%s] provided', $email
            ));
        }
    }
    
    /**
     *
     * Validate Url
     *
     * @param string $url
     * @return string $url
     */
    public static function validUrl($url)
    {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            return $url;
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Invalide URL [%s] provided', $url
            ));
        }
    }
}