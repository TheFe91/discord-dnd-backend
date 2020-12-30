<?php


namespace AppBundle\Services;


use AppBundle\Entity\UserProfile;
use AppBundle\Entity\Users;
use DateTime;
use Exception;
use Symfony\Component\HttpFoundation\Response;

class JWT
{
    private $_secret;
    private $_jwt;

    public function __construct(string $secret, $jwt)
    {
        $this->_secret = $secret;
        $this->_jwt = $jwt;
    }

    /**
     * @param Users $user
     * @param UserProfile $profile
     * @return string
     */
    public function generateJWT(Users $user, UserProfile $profile) {
        $header = json_encode(
            array(
                'typ' => 'JWT',
                'alg' => 'HS256'
            )
        );

        $payload = json_encode(
            array(
                'email' => $user->getEmail(),
                'name' => $profile->getName(),
                'surname' => $profile->getSurname(),
                'credits' => $profile->getCredits(),
                'exp' => date("Y-m-d H:i:s", strtotime('+5 hours'))
            )
        );

        $base64UrlHeader = Base64::base64UrlEncode($header);
        $base64UrlPayload = Base64::base64UrlEncode($payload);
        $signature = hash_hmac('sha256', "$base64UrlHeader.$base64UrlPayload", $this->_secret, true);
        $base64UrlSignature = Base64::base64UrlEncode($signature);

        return "$base64UrlHeader.$base64UrlPayload.$base64UrlSignature";
    }

    /**
     * @return array
     * @throws Exception
     */
    public function validateJWT() {
        [$header, $payload, $providedSignature] = self::splitJWT();

        $expiration = new DateTime(json_decode($payload)->exp);
        $now = new DateTime();
        $isTokenExpired = $now > $expiration;

        if ($isTokenExpired) {
            return array(
                Response::HTTP_UNAUTHORIZED,
                'The token is expired',
            );
        }

        $base64UrlHeader = Base64::base64UrlEncode($header);
        $base64UrlPayload = Base64::base64UrlEncode($payload);
        $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, $this->_secret, true);
        $base64UrlSignature = Base64::base64UrlEncode($signature);

        $isValidSignature = $base64UrlSignature === $providedSignature;

        if (!$isValidSignature) {
            return array(
                Response::HTTP_NOT_ACCEPTABLE,
                'Invalid JWT signature',
            );
        }

        return array(
            Response::HTTP_OK,
            'OK',
        );
    }

    public function getPayload() {
        [, $payload] = self::splitJWT();
        return json_decode($payload);
    }

    private function splitJWT() {
        $tokenParts = explode('.', $this->_jwt);
        $header = base64_decode($tokenParts[0]);
        $payload = base64_decode($tokenParts[1]);
        $providedSignature = $tokenParts[2];
        return array($header, $payload, $providedSignature);
    }
}