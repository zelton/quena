<?php
namespace App\Tests;

use App\Entity\Answer;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class ApiTester extends \Codeception\Actor
{
    use _generated\ApiTesterActions;

    public function persistAnswer(string $entry, string $content): void
    {
        $answer = new Answer();
        $answer->setEntry($entry);
        $answer->setContent($content);
        $this->persistEntity($answer);
    }

    public function seeJsonResponseEquals(array $expected): void
    {
        $this->seeResponseEquals(json_encode($expected));
    }
}