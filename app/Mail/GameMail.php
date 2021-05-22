<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GameMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $aluno;
    public $question1;
    public $question2;
    public $question3;
    public $question4;
    public $question5;
    public $question6;
    public $question7;
    public function __construct($aluno,$question1, $question2, $question3, $question4, $question5, $question6, $question7)
    {
        //
        $this->aluno = $aluno;
        $this->question1 = $question1;
        $this->question2 = $question2;
        $this->question3 = $question3;
        $this->question4 = $question4;
        $this->question5 = $question5;
        $this->question6 = $question6;
        $this->question7 = $question7;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.game')->with(["aluno" => $this->aluno,"question1" => $this->question1, "question2" => $this->question2, "question3" => $this->question3, "question4" => $this->question4, "question5" => $this->question5, "question6" => $this->question6, "question7" => $this->question7]);
    }
}
