<?php
class OOP5 {
    private $n;

    public function __construct($n)
    {
        $this->n = $n;
    }

    public function Tinh()
    {
        if ($this->n>= 0)
        {
            return "Số fibonaci thứ ".$this->n.' = '.$this->fibonaci($this->n);
        }
        else
        {
            return 'Hãy nhập một số nguyên dương!';
        }
        if (!is_numeric($this->n))
        {
            return 'Hãy nhập một số nguyên dương!';
        }
    }

    private function fibonaci($n) {
		if($n == 0 || $n == 1) return 1;
		global $count;
		$count++;
		return $this->fibonaci($n - 1) + $this->fibonaci($n - 2);
	}
}