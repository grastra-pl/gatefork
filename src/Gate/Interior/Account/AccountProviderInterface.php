<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-06-02
 * Time: 00:56
 */

namespace Gate\Interior\Account;


interface AccountProviderInterface  extends \Gate\Common\NamedEntityInterface
{
    public function getAccountById($id); // pobiera konto o zadanym id lub null jeśli takiego nie ma
    public function putAccount(\Gate\Interior\Account\AccountInterface $account);
    public function deleteAccount(\Gate\Interior\Account\AccountInterface $account);
    public function createAccount($id,$name); // tworzy konto

    public function addCharacter2Account($characterId,$accountId);
}