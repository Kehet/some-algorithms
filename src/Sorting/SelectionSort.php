<?php

declare(strict_types=1);

namespace Kehet\SomeAlgorithms\Sorting;

/**
 * Selection sort is a simple sorting algorithm that organizes an unsorted list by repeatedly finding the smallest
 * (or largest) element and moving it to its correct position.
 *
 * 1. Start with the entire stack, pick out the smallest card, and place it on the left side (the start of the sorted
 * section).
 *
 * 2. Go through the rest of the cards, find the next smallest card, and move it next to the sorted section. Each time,
 * the sorted section on the left grows by one card.
 *
 * 3. Keep doing this until there are no cards left in the unsorted pile.
 *
 * Selection sort is straightforward but can be slow on large lists because it goes through the list repeatedly to
 * find the next smallest item. It’s best for small or nearly sorted datasets since its time complexity is O(n^2).
 */
class SelectionSort
{

    public function sort(array $input): array
    {
        $output = [];

        $count = count($input);

        for ($i = 0; $i < $count; $i++) {
            $smallestKey = $this->findSmallestKey($input);
            $output[] = $input[$smallestKey];
            array_splice($input, $smallestKey, 1);
        }

        return $output;
    }

    private function findSmallestKey(array $input): int
    {
        $smallestIndex = null;
        $smallestValue = PHP_FLOAT_MAX;

        foreach ($input as $currentIndex => $currentValue) {
            if ($currentValue < $smallestValue) {
                $smallestIndex = $currentIndex;
                $smallestValue = $currentValue;
            }
        }

        return $smallestIndex;
    }

}
