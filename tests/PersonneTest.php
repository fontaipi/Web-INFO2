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
}