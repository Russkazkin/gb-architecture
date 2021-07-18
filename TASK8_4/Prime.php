<?php


namespace TASK8_4;


class Prime
{
    public array $primes = [];
    private int $num;
    private array $numArray = [];

    public function setNum(int $num): Prime
    {
        $this->num = $num;
        return $this;
    }

    public function setNumArray(): Prime
    {
        for ($i=2; $i<=$this->num; $i++) {
            $this->numArray[] = $i;
        }
        return $this;
    }

    public function setPrimes(): Prime
    {
        if (count($this->numArray) === 0) {
            return $this;
        }
        $this->primes[] = $this->numArray[0];
        $divider = $this->numArray[0];
        foreach ($this->numArray as $index => $item) {
            if ($item % $divider === 0) {
                unset($this->numArray[$index]);
            }
        }
        $this->numArray = array_values($this->numArray);
        $this->setPrimes();
        return $this;
    }
    public function getMaxPrime(): ?int
    {
        $array = array_reverse($this->primes);
        foreach ($array as $divider) {
            if ($this->num % $divider === 0) {
                return $divider;
            }
        }
        return null;
    }
}