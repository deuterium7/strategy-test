<?php

namespace AlexanderZabornyi\StrategyTest;

interface SortStrategy
{
    public function sort(array $dataset): array;
}