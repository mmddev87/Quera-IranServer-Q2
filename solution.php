<?php

function hasConnection(int $item1, int $item2, array $connections)
{
    return in_array([$item1, $item2], $connections) || in_array([$item2, $item1], $connections);
}

function hasConnectionWithItems(int $item1, array $items, array $connections)
{
    foreach ($items as $item) {
        if (hasConnection($item1, $item, $connections)) {
            return true;
        }
    }

    return false;
}

function iranServerRoundTable(int $n, int $m, array $connections): string
{
    $people = range(1, $n);
    $table1 = [];
    $table2 = [];

    // Loop on people and access items as person
    foreach ($people as $person) {
        // If doesn't have connection
        if (!hasConnectionWithItems($person, $table1, $connections)) {
            // Add person to table1
            $table1[] = $person;
        } elseif (!hasConnectionWithItems($person, $table2, $connections)) {
            // Add person to table2
            $table2[] = $person;
        } else {
            // Exit app with NO
            return json_encode(['possible' => 'NO']);
        }
    }

    // Balancing table sizes
    $previousTable2 = null;
    while (sizeof($table1) - sizeof($table2) > 1 && $previousTable2 !== $table2) {
        $lastItemOfTable1 = $table1[sizeof($table1) - 1];
        $previousTable2 = $table2;

        if (!hasConnectionWithItems($lastItemOfTable1, $table2, $connections)) {
            array_pop($table1);
            $table2[] = $lastItemOfTable1;
        }
    }

    return json_encode([
        'possible' => 'YES',
        'table_1' => $table1,
        'table_2' => $table2
    ]);
}