<?php

namespace AlexanderZabornyi\StrategyTest;

class Sorter
{
    protected $strategy;

    /**
     * Sorter constructor.
     *
     * @param SortStrategy $strategy
     */
    public function __construct(SortStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * Отсортировать по стратегии
     *
     * @param array $dataset
     *
     * @return array
     */
    public function sort(array $dataset): array
    {
        return $this->strategy->sort($dataset);
    }
}