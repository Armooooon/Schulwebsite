<?php

class Faq
{
    private $idfaq;
    private $question;
    private $answer;

    public function getIdfaq(): int
    {
        return $this->idfaq;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getQuestion(): string
    {
        return $this->question;
    }

    public function setAnswer(string $answer): self
    {
        $this->answer = $answer;

        return $this;
    }

    public function getAnswer(): string
    {
        return $this->answer;
    }
}