<?php

namespace AlexanderZabornyi\StrategyTest;

class BublSortStrategy implements SortStrategy
{
    /**
     * Провести пузырьковую сортировку
     *
     * @param array $dataset
     *
     * @return array
     */
    public function sort(array $dataset): array
    {
        $size = count($dataset) - 1;

        for ($i = $size; $i >= 0; $i--) {
            for ($j = 0; $j <= ($i-1); $j++) {
                if ($dataset[$j] > $dataset[$j+1]) {
                    $swap = $dataset[$j];
                    $dataset[$j] = $dataset[$j+1];
                    $dataset[$j+1] = $swap;
                }
            }
        }

        return $dataset;
    }
}