<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-06-02
 * Time: 00:56
 */

namespace Gate\Interior\Character;


interface CharacterProviderInterface  extends \Gate\Common\NamedEntityInterface
{
    public function getCharacterById($id); // pobiera konto o zadanym id
    public function putCharacter(CharacterInterface $character);
    public function deleteCharacter(CharacterInterface $character);
    public function createCharacter($id,$name);
}