<?php
class OOP8 {
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function Tinh()
    {
        return 'Tổ hợp chập '.$this->b.' của '.$this->a.' phần tử : '.$this->ToHop($this->a, $this->b);
    }

    private function GiaiThua($n)
    {
        if ($n == 0) return 1;
        return $n * $this->GiaiThua($n - 1);
    }
    private function ToHop($n, $k)
    {
        return $this->GiaiThua($n)/($this->GiaiThua($k)*$this->GiaiThua($n - $k));
    }
}