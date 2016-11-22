<?php

namespace App\InsertionSort;

class FirstAttemptAtInsertionSort
{
    public function sort(array $elements)
    {
        $totalElements = count($elements);

        while ( ! $this->arrayIsSorted($elements, $totalElements)) {
            $elements = $this->applyASortingIteration($elements, $totalElements);
        }

        return $elements;
    }

    public function arrayIsSorted(array $elements, $totalElements)
    {
        for ($index = 0; $index < $totalElements - 1; $index++) {
            if ( ! $this->elementIsSorted($elements, $index)) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param array $elements
     * @param $index
     * @return bool
     */
    private function elementIsSorted(array $elements, $index)
    {
        return $elements[$index] < $elements[$index + 1];
    }

    /**
     * @param array $elements
     * @param $totalElements
     * @return array
     */
    private function applyASortingIteration(array $elements, $totalElements)
    {
        for ($index = 0; $index < $totalElements - 1; $index++) {
            if ($this->elementIsSorted($elements, $index)) {
                continue;
            }

            $temporaryElement = $elements[$index];

            $elements[$index] = $elements[$index + 1];

            $elements[$index + 1] = $temporaryElement;
        }

        return $elements;
    }
}
