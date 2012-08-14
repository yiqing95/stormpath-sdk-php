<?php


class Services_Stormpath_Resource_PasswordResetToken extends Services_Stormpath_Resource_Resource
{
    const EMAIL = "email";
    const ACCOUNT = "account";

    public function getEmail()
    {
        return $this->getProperty(self::EMAIL);
    }

    public function setEmail($email)
    {
        $this->setProperty(self::EMAIL, $email);
    }

    public function getAccount()
    {
        return $this->getResourceProperty(self::ACCOUNT, Services_Stormpath::ACCOUNT);
    }
}
