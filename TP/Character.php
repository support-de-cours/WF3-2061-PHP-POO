<?php

use Character as GlobalCharacter;

class Character 
{
    // Constants definition
    // --

    /**
     * Novice Level
     * 
     * @var int
     */

    const NOVICE = 1;
    /**
     * Medium Level
     * 
     * @var int
     */

    const MEDIUM = 2;
    /**
     * Expert Level
     * 
     * @var int
     */
    const EXPERT = 3;
    
    
    // Properties definition
    // --

    /**
     * The name of the character
     *
     * @var string|null
     */
    private ?string $name = null;

    /**
     * Health point
     *
     * @var integer
     * @default 100
     */
    private int $hp = 100;
    
    /**
     * Character experience
     *
     * @var integer
     * @default 0
     */
    private int $xp = 0;

    
    // Methods definition
    // --

    public function __construct(string $name, int $xp)
    {
        $this->name = $name;
        $this->xp = $xp;
    }

    /**
     * The character say hello to him opponent
     *
     * @param Character $opponent
     * @return string
     */
    public function sayHello(Character $opponent): string
    {
        return "{$this->name} salue {$opponent->getName()}";
    }

    /**
     * Character proceed to an Attack to him opponent
     * $coef params will be override by the SuperAttack method
     *
     * @param Character $opponent
     * @param integer $coef
     * @return self
     */
    public function attack(Character $opponent, int $coef=1): self
    {
        switch ($this->xp)
        {
            case self::NOVICE:
                $opponent->setHp( $opponent->getHp() - (10 * $coef) );
            break;

            case self::MEDIUM:
                $opponent->setHp( $opponent->getHp() - (20 * $coef) );
            break;

            case self::EXPERT:
                $opponent->setHp( $opponent->getHp() - (30 * $coef) );
            break;
        }

        return $this;
    }

    /**
     * Character proceed to a Super Attack to him opponent
     * A Super Attack is the same of a double attack
     *
     * @param Character $opponent
     * @return self
     */
    public function superAttack(Character $opponent): self
    {
        $this->attack($opponent, 2);

        return $this;
    }

    public function secretAttack(): self
    {
        return $this;
    }

    public function care(): self
    {
        return $this;
    }

    public function levelUp(): self
    {
        return $this;
    }


    /**
     * Get the name of the character
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set the name of the character
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the Health Point of the character
     *
     * @return integer
     */
    public function getHp(): int
    {
        return $this->hp;
    }

    /**
     * Set Health Point of the Character
     *
     * @param integer $hp
     * @return self
     */
    public function setHp(int $hp): self
    {
        $this->hp = $hp;

        return $this;
    }

    /**
     * Get the experience of the character
     *
     * @return integer
     */
    public function getXp(): int
    {
        return $this->xp;
    }

    // /**
    //  * Set the experience of the character
    //  *
    //  * @param integer $xp
    //  * @return self
    //  */
    // public function setXp(int $xp): self
    // {
    //     $this->xp = $xp;

    //     return $this;
    // }
}