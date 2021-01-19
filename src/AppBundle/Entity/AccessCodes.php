<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccessCodes
 *
 * @ORM\Table(name="access_codes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AccessCodesRepository")
 */
class AccessCodes
{
    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=64)
     */
    private $code;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $expiration_datetime;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code.
     *
     * @param string $code
     *
     * @return AccessCodes
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set expirationDatetime.
     *
     * @param \DateTime $expirationDatetime
     *
     * @return AccessCodes
     */
    public function setExpirationDatetime($expirationDatetime)
    {
        $this->expiration_datetime = $expirationDatetime;

        return $this;
    }

    /**
     * Get expirationDatetime.
     *
     * @return \DateTime
     */
    public function getExpirationDatetime()
    {
        return $this->expiration_datetime;
    }
}
