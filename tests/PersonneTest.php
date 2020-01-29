<?php


use PHPUnit\Framework\TestCase;

class PersonneTest extends TestCase
{
    public function testCanBeCreatedFromValidPersonParameters(): void
    {
        $this->assertInstanceOf(
            Personne::class,
            new Personne('dupont','heliot',new DateTime('2010-02-21'))
        );
    }

    public function testCanBeCreatedFromConcatenationParameters(): void
    {
        $personne = new Personne('dupont','heliot',new DateTime('2010-02-21'));
        $this->assertEquals(
            "dupontheliot2010-02-21",
            $personne->getId()
        );
    }

}