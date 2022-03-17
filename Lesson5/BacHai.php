<?php
class BacHai
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function giaiPhuongTrinh()
    {
        $delta = pow($this->b, 2) - 4 * $this->a * $this->c;

        if ($delta < 0) {
            return 'Phương trình có nghiệm phức';
        } elseif ($delta == 0) {
            return 'Phương trình có nghiệm kép x1 = x2 = ' . (-$this->b / (2 * $this->a));
        } elseif ($delta > 0) {
            $x1 = (-$this->b + sqrt($delta)) / (2 * $this->a);
            $x2 = (-$this->b - sqrt($delta)) / (2 * $this->a);
            return 'Phương trình có 2 nghiệm x1= ' . $x1 . ', x2 = ' . $x2;
        }
    }
}
