<?php

namespace League\OAuth2\Server\Entities\Traits;

use DateTime;
use League\OAuth2\Server\Entities\AccessTokenEntityInterface;

trait RefreshTokenTrait
{
    /**
     * @var AccessTokenEntityInterface
     */
    protected $accessToken;

    /**
     * @var DateTime
     */
    protected $expiryDateTime;

    /**
     * {@inheritdoc}
     */
    public function setAccessToken(AccessTokenEntityInterface $accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * {@inheritdoc}
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Get the token's expiry date time.
     *
     * @return DateTime
     */
    public function getExpiryDateTime()
    {
        return $this->expiryDateTime;
    }

    /**
     * Set the date time when the token expires.
     *
     * @param DateTime $dateTime
     */
    public function setExpiryDateTime(DateTime $dateTime)
    {
        $this->expiryDateTime = $dateTime;
    }

    /**
     * Has the token expired?
     *
     * @return bool
     */
    public function isExpired()
    {
        return (new DateTime()) > $this->getExpiryDateTime();
    }
}
