<?php

namespace tests\unit\App\Tennis;

use App\Tennis\SecondKataAtTennis;
use App\Tennis\SecondKata\Player;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SecondKataAtTennisSpec extends ObjectBehavior
{
    const GERARLT = 'Geralt';
    const YENNIFER = 'Yennifer';

    protected $geralt;
    protected $yennifer;

    function let()
    {
        $this->geralt = new Player(self::GERARLT);

        $this->yennifer = new Player(self::YENNIFER);

        $this->beConstructedWith($this->geralt, $this->yennifer);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(SecondKataAtTennis::class);

    }

    function it_scores_a_scoreless_game()
    {
        $this->score()->shouldReturn('Love-All');
    }

    function it_scores_a_fifteen_love_game()
    {
        $this->geralt->earnsPoints(1);

        $this->score()->shouldReturn('Fifteen-Love');
    }

    function it_scores_a_love_fifteen_game()
    {
        $this->yennifer->earnsPoints(1);

        $this->score()->shouldReturn('Love-Fifteen');
    }

    function it_scores_a_thirty_love_game()
    {
        $this->geralt->earnsPoints(2);

        $this->score()->shouldReturn('Thirty-Love');
    }

    function it_scores_a_love_thirty_game()
    {
        $this->yennifer->earnsPoints(2);

        $this->score()->shouldReturn('Love-Thirty');
    }

    function it_scores_a_forty_love_game()
    {
        $this->geralt->earnsPoints(3);

        $this->score()->shouldReturn('Forty-Love');
    }

    function it_scores_a_love_forty_game()
    {
        $this->yennifer->earnsPoints(3);

        $this->score()->shouldReturn('Love-Forty');
    }

    function it_scores_a_0_4_game()
    {
        $this->geralt->earnsPoints(4);

        $this->score()->shouldReturn('Win for Geralt');
    }

    function it_scores_a_4_0_game()
    {
        $this->yennifer->earnsPoints(4);

        $this->score()->shouldReturn('Win for Yennifer');
    }

    function it_scores_a_deuce()
    {
        $this->yennifer->earnsPoints(4);

        $this->geralt->earnsPoints(4);

        $this->score()->shouldReturn('Deuce');
    }
    // throws exception of invalid score
    //
    function it_scores_thirty_all()
    {
        $this->yennifer->earnsPoints(2);

        $this->geralt->earnsPoints(2);

        $this->score()->shouldReturn('Thirty-All');
    }
}
