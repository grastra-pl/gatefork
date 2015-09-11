<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-06-02
 * Time: 01:25
 */

namespace Gate\Interior\Character;


class NullCharacterProvider  extends \Gate\Common\AbstractNamedEntity implements CharacterProviderInterface
{
    public function getCharacterById($id)
    {
        // TODO: Implement getCharacterById() method.
    }

    public function getAccountCharacters($accountId)
    {
        // TODO: Implement getAccountCharacters() method.
    }

    public function putCharacter(CharacterInterface $character)
    {
        // TODO: Implement putCharacter() method.
    }

    public function deleteCharacter(CharacterInterface $character)
    {
        // TODO: Implement deleteCharacter() method.
    }

    public function createCharacter($id, $name)
    {
        // TODO: Implement createCharacter() method.
        echo("Tu powinien sie tworzyc character o zadanym id=$id i nazwie=$name <br>");
        echo("ale oczywiscie sie nie utworzy bo to NullCharacterProvider ;-) <br>");
    }


}