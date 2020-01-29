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

    public function testIdPersonneConcatenationParameters(): void
    {
        $personne = new Personne('dupont','heliot',new DateTime('2010-02-21'));
        $this->assertEquals(
            "dupontheliot2010-02-21",
            $personne->getId()
        );
    }

    public function testIdPersonneCapitalizeParameters(): void
    {
        $personne = new Personne('Dupont','Heliot',new DateTime('2010-02-21'));
        $this->assertEquals(
            "DupontHeliot2010-02-21",
            $personne->getId()
        );
    }

}