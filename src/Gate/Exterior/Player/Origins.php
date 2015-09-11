<?php
/**
 * Created by PhpStorm.
 * User: Grastra
 * Date: 2015-05-31
 * Time: 21:41
 */

namespace Gate\Exterior\Player;


abstract class Origins {
    const GUEST=0;
    const INNER_BOT=1;
    const BOT=2;
    const BASIC=3; // HTTP basic authentication
    const STANDARD=4; // nasz formularz z hasłem
    const FACE=5; // Facebook User
    const KONG=6; // Kongregate User
    const NADMIAR=7; // Ukłon w stronę moreli ;-)
    const OPEN=8; // OpenID
}