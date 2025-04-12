<?php

declare(strict_types=1);

namespace Tests\Sorting;

use Kehet\SomeAlgorithms\Sorting\SelectionSort;
use PHPUnit\Framework\Attributes\DataProvider;

class SelectionSortTest extends TestCase
{

    public SelectionSort $testable;

    protected function setUp(): void
    {
        parent::setUp();

        $this->testable = new SelectionSort;
    }

    #[DataProvider('sortableDataProvider')]
    public function testSort(array $unsorted, array $sorted): void
    {
        $output = $this->testable->sort($unsorted);

        $this->assertEquals($sorted, $output);
    }

}

