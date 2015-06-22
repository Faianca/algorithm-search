<?php
/**
 * @package    algorithm
 * @category   algorithm
 * @author     Jorge Meireles
 * @copyright  (c) 2015
 */

/**
 * Class JumpSearch
 */
class JumpSearch
{
    /**
     * @param $x
     * @param $list
     * @return int
     */
    public static function search($x, $list)
    {
        // calculate the step
        $len = count($list);
        $step = floor(sqrt($len));
        $prev = 0;

        while ($list[($step < $len ? $step : $len)] < $x) {
            $prev = $step;
            $step += floor(sqrt($len));

            if ($step >= $len) {
                return false;
            }
        }

        while ($list[$prev] < $x) {
            $prev++;
            if ($prev == ($step < $len ? $step : $len)) {
                return false;
            }
        }

        if ($list[$prev] == $x) {
            return $prev;
        }

        return false;
    }
}

