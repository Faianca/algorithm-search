<?php
/**
 * @package    algorithm
 * @category   algorithm
 * @author     Jorge Meireles
 * @copyright  (c) 2015 JM
 */

/**
 * Class InterpolationSearch
 */
class InterpolationSearch
{
    /**
     * @param $x
     * @param $list
     * @return float|int
     */
    public static function search($x, $list)
    {
        $left = 0;
        $right = count($list) - 1;

        while ($left <= $right) {
            if ($list[$left] == $list[$right]) {
                if ($list[$left] == $x) {
                    return $left;
                } else {
                    return -1;
                }
            }

            // Find the interval Bound
            $k = ($x - $list[$left]) / ($list[$right] - $list[$left]);

            if ($k < 0 || $k > 1) {
                return -1;
            }

            $mid = round($left + $k * ($right - $left));

            if ($x > $list[$mid]) {
                $left = $mid + 1;
            } elseif ($x < $list[$mid]) {
                $right = $mid - 1;
            } else {
                return $mid;
            }
        }

        return -1;
    }
}