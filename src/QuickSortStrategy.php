<?php

namespace AlexanderZabornyi\StrategyTest;

class QuickSortStrategy implements SortStrategy
{
    /**
     * Провести быструю сортировку
     *
     * @param array $dataset
     *
     * @return array
     */
    public function sort(array $dataset): array
    {
        self::quicksort($dataset);
        return $dataset;
    }

    /**
     * Алгоритм быстрой сортировки
     *
     * @param $array
     * @param int $l
     * @param int $r
     */
    public static function quicksort (&$array, $l = 0, $r = 0) {
        if ($r === 0) {
            $r = count($array)-1;
        }

        $i = $l;
        $j = $r;
        $x = $array[($l + $r) / 2];

        do {
            while ($array[$i] < $x) {
                $i++;
            }

            while ($array[$j] > $x) {
                $j--;
            }

            if ($i <= $j) {
                if ($array[$i] > $array[$j]) {
                    list($array[$i], $array[$j]) = array($array[$j], $array[$i]);
                }

                $i++;
                $j--;
            }
        } while ($i <= $j);

        if ($i < $r) {
            self::quicksort($array, $i, $r);
        }

        if ($j > $l) {
            self::quicksort($array, $l, $j);
        }
    }
}