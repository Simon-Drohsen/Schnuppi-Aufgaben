<?php
/**
 * Returns a list of random names
 *
 * @param int $count the number of random names to generate
 * @return array list of random names with ages
 */
function generateRandomNames(int $count): array {
    $names = ['Alice', 'Bob', 'Charlie', 'David', 'Eve', 'Frank', 'Grace', 'Hannah', 'Ivy', 'Jack'];
    $result = [];

    for ($i = 0; $i < $count; $i++) {
        $name = $names[array_rand($names)];
        $age = rand(18, 80);
        $result = [['name' => $name, 'age' => $age]];
    }

    return $result;
}

/**
 * Returns a built-up HTML table structure
 *
 * @param array $data array of names and ages
 * @return string HTML table structure
 */
function getHtmlTable(array $data): string {
    $html = '<table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">';
    $html .= '<tr><th>Age</th><th>Name</th></tr>';

    foreach ($data as $index => $person) {
        if ($index % 2 == 0) {
            $backgroundColor = '#f2f2f2';
        } else {
            $backgroundColor = '#ffffff';
        }

        if ($person['age'] < 50) {
            $fontWeight = 'bold';
        } else {
            $fontWeight = 'normal';
        }

        $html .= sprintf(
            '<tr style="background-color: %s;"><td style="font-weight: %s;">%s</td><td>%d</td></tr>',
            $backgroundColor,
            $fontWeight,
            $person['name'],
            $person['age']
        );
    }

    $html .= '</table>';
    return $html;
}

// Generate random names and display them in a table
$randomNames = generateRandomNames(20);
echo getHtmlTable($randomNames);
