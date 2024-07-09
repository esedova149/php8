<?php

$users = [
    "name" => "Ayan",
    "hobbies" => [
        "football", "domino"
    ],
];
echo "Istifadecinin adi: " . $users['name'] . " ";
echo "<br>";
echo "Istifadecinin hevesleri: " . implode(", ", $users['hobbies']) . " ";

/**********************************************************************/
echo "<br>";
echo "<br>";
$blogs = [
    [
    'title' => 'How can i learn PHP',
    'tags' => [
    'php', 'learn', 'it', 'programming'
    ],
    'creator' => [
    'name' => 'Janna',
    'surname' => 'Smith'
    ],
    'views' => [
    [
    'user' => 'Tom',
    'ip' => '192.168.1.1'
    ],
    [
    'user' => 'Bob',
    'ip' => '192.168.1.2'
    ],
    [
    'user' => 'Jon',
    'ip' => '192.168.1.3'
    ],
    ],
    ],
    [
    'title' => 'How can i learn JS',
    'tags' => [
    'js', 'learn', 'it', 'programming', 'frontend', 'backend'
    ],
    'creator' => [
    'name' => 'Huseyn',
    'surname' => 'Kerimov'
    ],
    'views' => [
    [
    'user' => 'Selim',
    'ip' => '192.168.1.1'
    ],
    [
    'user' => 'Bob',
    'ip' => '192.168.1.2'
    ],
    [
    'user' => 'Jon',
    'ip' => '192.168.1.3'
    ],
    [
    'user' => 'Elesger',
    'ip' => '192.168.1.4'
    ],
    [
    'user' => 'Elovset',
    'ip' => '192.168.1.5'
    ],
    ],
    
    ],
    
    ];

    foreach ($blogs as $blog) {
        echo "Başliq: " . $blog['title'] . "\n";
        echo "<br>";
        echo "Taglar: " . implode(", ", $blog['tags']) . " ";
        echo "<br>";
        echo $blog['creator']['name'] . " " . $blog['creator']['surname'] . " ";
        echo "<br>";
        foreach ($blog['views'] as $view) {
            echo "* İstifadeci: " . $view['user'] . " - " . "IP: " . $view['ip'] . "<br>";
        }  
        echo " ";
    }
