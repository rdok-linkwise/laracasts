<?php

namespace tests\unit\App\Tennis;

use App\Tennis\FirstAttemptAtTennis;
use App\Tennis\Player;
use PhpSpec\ObjectBehavior;

class FirstAttemptAtTennisSpec extends ObjectBehavior
{
    const JOHN_DOE = 'John Doe';
    const JANE = 'Jane';
    /**
     * @var Player
     */
    protected $john;
    /**
     * @var Player
     */
    protected $jane;

    function let()
    {
        $this->john = new Player(self::JOHN_DOE);
        $this->jane = new Player(self::JANE);
        $this->beConstructedWith($this->john, $this->jane);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(FirstAttemptAtTennis::class);
    }

    function it_scores_a_scoreless_game()
    {
        $this->score()->shouldReturn('Love-All');
    }

    function it_scores_a_fifteen_all_game()
    {
        $this->john->earnPoints(1);
        $this->jane->earnPoints(1);

        $this->score()->shouldReturn('Fifteen-All');
    }

    function it_scores_a_thirty_all_game()
    {
        $this->john->earnPoints(2);
        $this->jane->earnPoints(2);

        $this->score()->shouldReturn('Thirty-All');
    }

    function it_scores_a_1_to_0_game()
    {
        $this->john->earnPoints(1);

        $this->score()->shouldReturn('Fifteen-Love');
    }

    function it_scores_a_2_to_0_game()
    {
        $this->john->earnPoints(2);

        $this->score()->shouldReturn('Thirty-Love');
    }

    function it_scores_a_3_to_0_game()
    {
        $this->john->earnPoints(3);

        $this->score()->shouldReturn('Forty-Love');
    }

    function it_scores_a_0_to_1_game()
    {
        $this->jane->earnPoints(1);

        $this->score()->shouldReturn('Love-Fifteen');
    }

    function it_scores_a_0_to_2_game()
    {
        $this->jane->earnPoints(2);

        $this->score()->shouldReturn('Love-Thirty');
    }

    function it_scores_a_0_to_3_game()
    {
        $this->jane->earnPoints(3);

        $this->score()->shouldReturn('Love-Forty');
    }

    function it_scores_a_4_to_0_game()
    {
        $this->john->earnPoints(4);

        $this->score()->shouldReturn('Win for ' . self::JOHN_DOE);
    }

    function it_scores_a_0_to_4_game()
    {
        $this->jane->earnPoints(4);

        $this->score()->shouldReturn('Win for ' . self::JANE);
    }

    function it_scores_a_4_to_3_game()
    {
        $this->john->earnPoints(4);
        $this->jane->earnPoints(3);

        $this->score()->shouldReturn('Advantage for ' . self::JOHN_DOE);
    }

    function it_scores_a_deuce_game()
    {
        $this->john->earnPoints(3);
        $this->jane->earnPoints(3);

        $this->score()->shouldReturn('Deuce');
    }
}
