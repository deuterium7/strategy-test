<?php

namespace AlexanderZabornyi\StrategyTest\Tests;

use AlexanderZabornyi\StrategyTest\BublSortStrategy;
use AlexanderZabornyi\StrategyTest\QuickSortStrategy;
use AlexanderZabornyi\StrategyTest\Sorter;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    public function testBublSort()
    {
        $dataset = [1, 5, 4, 2, 3];

        $sorter = new Sorter(new BublSortStrategy());
        $this->assertEquals([1, 2, 3, 4, 5], $sorter->sort($dataset));
    }

    public function testQuickSort()
    {
        $dataset = [1, 5, 4, 2, 3, 15, 97, 25, 4, 3, 46, 78];

        $sorter = new Sorter(new QuickSortStrategy());
        $this->assertEquals([1, 2, 3, 3, 4, 4, 5, 15, 25, 46, 78, 97], $sorter->sort($dataset));
    }
}