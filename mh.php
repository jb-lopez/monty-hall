<?php

$Runs         = 10000000;
$PrintDivisor = 1000000;
$Options      = ["Door 1", "Door 2", "Door 3",];
$Correct      = 0;
srand(time());

for ($iteratorRun = 1; $iteratorRun < $Runs; $iteratorRun++) {
    $Chosen = $Options[array_rand($Options)];
    $Winner = $Options[array_rand($Options)];
    // Reveal a worthless door.
    $rDiff = array_diff($Options, [$Winner, $Chosen]);
    $Reveal = $rDiff[array_rand($rDiff)];
    // Switch to a remaining door.
    $sDiff= array_diff($Options, [$Reveal, $Chosen]);
    $Switch = $sDiff[array_rand($sDiff)];
    if ($Switch === $Winner) {
        $Correct++;
    }
    if ($iteratorRun % $PrintDivisor === 0) {
        echo "After $iteratorRun rounds we won $Correct times! (" . round($Correct / $iteratorRun * 100, 5) . "%)" . PHP_EOL;
    }
}
echo "After $Runs rounds we won $Correct times! (" . round($Correct / $Runs * 100, 5) . "%)" . PHP_EOL;
