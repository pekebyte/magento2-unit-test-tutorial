<?
namespace Pekebyte\UnitTests\Model;
 
class TestModel
{
    /**
     * this function returns the result of the addition of two numbers
     *
     * @param float $a
     * @param float $b
     * @return float
     */
    public function add($a, $b)
    {
        return $a + $b;
    }

    /**
     * this function returns the result of the substraction of two numbers
     *
     * @param float $a
     * @param float $b
     * @return float
     */
    public function substract($a, $b)
    {
        return $a - $b;
    }

    /**
     * this function returns the result of the multiplication of two numbers
     *
     * @param float $a
     * @param float $b
     * @return float
     */
    public function multiply($a, $b)
    {
        return $a * $b;
    }

    /**
     * this function returns the result of the division of two numbers
     *
     * @param float $a
     * @param float $b
     * @return float
     */
    public function divide($a, $b)
    {
        return $a / $b;
    }
}
