<?php
/**
 * Created by PhpStorm.
 * User: Andriy
 * Date: 08.04.2020
 * Time: 14:20
 * Made with <3 by West from TechGate Studio
 */

namespace West\MemberNotFoundRedirect;


class Listener
{
    public static function memberPostDispatch(
        \XF\Mvc\Controller $controller,
        $action,
        \XF\Mvc\ParameterBag $params,
        \XF\Mvc\Reply\AbstractReply &$reply
    )
    {
        if ($reply->getResponseCode() == 404)
        {
            $reply = $controller->redirect($controller->buildLink('members'));
        }
    }
}