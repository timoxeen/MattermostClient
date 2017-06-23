<?php

declare(strict_types=1);

namespace Pnz\MattermostClient\Model\User;

use Pnz\MattermostClient\Model\Model;

final class User extends Model
{
    /**
     * @return string
     */
    public function getId()
    {
        return $this->data['id'];
    }

    /**
     * @return string
     */
    public function getCreate_at()
    {
        return $this->data['create_at'];
    }

    /**
     * @return string
     */
    public function getUpdate_at()
    {
        return $this->data['update_at'];
    }

    /**
     * @return mixed
     */
    public function getRoles()
    {
        return $this->data['roles'];
    }

    /**
     * @return bool
     */
    public function getAllowMarketing()
    {
        return $this->data['allow_marketing'];
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->data['locale'];
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->data['username'];
    }

    /**
     * @return string
     */
    public function getAuthData()
    {
        return $this->data['auth_data'];
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->data['email'];
    }

    /**
     * @return bool
     */
    public function getEmailVerified()
    {
        return $this->data['email_verified'];
    }

    /**
     * @return array
     */
    protected static function getFields()
    {
        return [
           'id',
           'create_at',
           'update_at',
           'roles',
           'allow_marketing',
           'locale',
           'username',
           'auth_data',
           'email',
           'email_verified',
           'notify_props',
           'last_password_update',
           'last_name',
           'nickname',
           'first_name',
       ];
    }
}