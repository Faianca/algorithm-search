<?php
/**
 * @package    algorithm
 * @category   algorithm
 * @author     Jorge Meireles
 * @copyright  (c) 2015
 */

 /**
 * Class BinarySearch
 */
class BinarySearch
{
    /**
     * @param $x
     * @param $list
     * @return int
     */
    public static function search($x, $list)
    {
        $left = 0;
        $right = count($list) - 1;

        while ($left <= $right) {
            $mid = ($left + $right) >> 1;

            if ($list[$mid] == $x) {
                return $x;
            } elseif ($list[$mid] < $x) {
                $left = $mid + 1;
            } elseif ($list[$mid] > $x) {
                $right = $mid - 1;
            }
        }

        return -1;
    }
}
