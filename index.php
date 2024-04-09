<?php

function isEven($number) {
    return $number % 2 == 0;
}

function testIsEven() {
    $testCases = array(
        array(2, true),
        array(3, false),
        array(0, true),
        array(-4, true),
        array(-7, false),
    );

    foreach ($testCases as $testCase) {
        $number = $testCase[0];
        $expectedResult = $testCase[1];
        $result = isEven($number);

        echo "Testing isEven($number): ";
        if ($result === $expectedResult) {
            echo "Passed +++++ <br>";
        } else {
            echo "Failed -----. Expected: " . ($expectedResult ? 'true' : 'false') . ". Got: " . ($result ? 'true' : 'false') . "<br>";
        }
    }
}

// Run the test
testIsEven();

?>
