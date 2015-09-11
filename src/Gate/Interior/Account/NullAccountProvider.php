<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-06-02
 * Time: 01:22
 */

namespace Gate\Interior\Account;


class NullAccountProvider extends \Gate\Common\AbstractNamedEntity implements AccountProviderInterface
{
    public function getAccountById($id)
    {
        return new NullAccount();
    }

    public function putAccount(\Gate\Interior\Account\AccountInterface $account)
    {
        // TODO: Implement putAccount() method.
    }

    public function deleteAccount(\Gate\Interior\Account\AccountInterface $account)
    {
        // TODO: Implement deleteAccount() method.
    }

    public function createAccount($id, $name)
    {
        // TODO: Implement createAccount() method.
        echo("Tu powinno sie tworzyc konto o zadanym id=$id i nazwie=$name <br>");
        echo("ale oczywiscie sie nie utworzy bo to NullAccountProvider ;-) <br>");
    }

    public function addCharacter2Account($characterId,$accountId)
    {
        echo("Tu powinien zostac dodany character o id=$characterId <br>");
        echo("do konta o id=$accountId <br>");
        echo("ale oczywiscie sie nie doda bo to NullAccountProvider ;-) <br>");
    }

}