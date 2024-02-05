<?php

function getCoinBalances(array $firstSolutions, array $secondSolutions): array
{
    $firstSolutionCounts  = array_count_values($firstSolutions);
    $secondSolutionCounts = array_count_values($secondSolutions);


    $balance1 = 3 + ($secondSolutionCounts['share'] ?? 0) * 3;
    $balance2 = 3 + ($firstSolutionCounts['share'] ?? 0) * 3;


    $balance1 -= $firstSolutionCounts['share'] ?? 0;
    $balance2 -= $secondSolutionCounts['share'] ?? 0;


    return [$balance1, $balance2];
}
