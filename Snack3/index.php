<?php


$posts = [

    '05/04/2021' => [
        [
            'title' => 'Post 1',
            'author' => 'Marcello Beretta',
            'text' => 'Testo random'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Giacomo Poretti',
            'text' => 'Ma ti sta tutta in garage?'
        ],
    ],
    '04/01/2020' => [
        [
            'title' => 'Post 3',
            'author' => 'Giovanni Storti',
            'text' => 'Il clacson deficita un pò'
        ]
    ],
    '11/07/2003' => [
        [
            'title' => 'Post 4',
            'author' => 'Cataldo Baglio',
            'text' => 'La roccia è franabile'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Gino',
            'text' => 'Sei scaltro come una faina'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Brambilla',
            'text' => 'Vuole un cognac ?'
        ]
    ],
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>

<body>
    <?php


    $post_keys = array_keys($posts);
    for ($i = 0; $i < count($post_keys); $i++) {
        $date = $post_keys[$i];
        $array = $posts[$date];
    ?>
        <h2><?php echo $date  ?></h2>

        <?php for ($j = 0; $j < count($array); $j++) {
            $post = $array[$j];
        ?>
            <h3><?php echo $post["title"] ?></h3>
            <p><strong><?php echo $post["author"] ?></strong></p>
            <p><?php echo $post["text"] ?></p>
            <br>
        <?php
        }
        ?>
    <?php
    }
    ?>
</body>

</html>