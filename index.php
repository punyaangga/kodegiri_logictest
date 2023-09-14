<?php

function lexicograph($array) {
    $result = [];
    
    foreach ($array as $item) {
        if (ctype_alpha($item)) {
            $substrings = [];
            $len = strlen($item);
            
            for ($i = 0; $i < $len; $i++) {
                $substring = '';
                for ($j = $i; $j < $len; $j++) {
                    $substring .= $item[$j];
                    $substrings[] = $substring;
                }
            }
            
            $result[$item] = $substrings;
        }
    }
    
    return $result;
}

$data = ['11', '12', 'cii', '001', '2', '1998', '7', '89', 'iia', 'fii'];
$result = lexicograph($data);


foreach ($result as $key => $value) {
    echo "$key = {" . implode(", ", $value) . "}\n";
}

$combined = [];
foreach ($result as $substrings) {
    $combined = array_merge($combined, $substrings);
}

// Print the combined array
echo "S = {" . implode(", ", $combined) . "}\n";