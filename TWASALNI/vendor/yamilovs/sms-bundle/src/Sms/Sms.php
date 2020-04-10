<?php

namespace Yamilovs\Bundle\SmsBundle\Sms;

class Sms implements SmsInterface
{
    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $message;

    /**
     * @var \DateTime
     */
    private $dateTime;

    public function __construct(string $phoneNumber = null, string $message = null, \DateTime $dateTime = null)
    {
        $this->setPhoneNumber($phoneNumber);
        $this->setMessage($message);
        $this->setDateTime(($dateTime) ?: new \DateTime());
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return Sms
     */
    public function setMessage(string $message): Sms
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     *
     * @return Sms
     */
    public function setPhoneNumber(string $phoneNumber): Sms
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTime(): \DateTime
    {
        return $this->dateTime;
    }

    /**
     * @param \DateTime $dateTime
     *
     * @return Sms
     */
    public function setDateTime(\DateTime $dateTime): Sms
    {
        $this->dateTime = $dateTime;

        return $this;
    }
}