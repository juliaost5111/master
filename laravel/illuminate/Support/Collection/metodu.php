<?php
collect([1, 2, 3])->all();
// [1, 2, 3]

$average = collect([
    ['foo' => 10],
    ['foo' => 10],
    ['foo' => 20],
    ['foo' => 40]
])->avg('foo');
// 20

$average = collect([1, 1, 2, 4])->avg();
// 2

$collection = collect([1, 2, 3, 4, 5, 6, 7]);
$chunks = $collection->chunk(4);
$chunks->all();
// [[1, 2, 3, 4], [5, 6, 7]]

$collection = collect(str_split('AABBCCCD'));
$chunks = $collection->chunkWhile(function ($value, $key, $chunk) {
    return $value === $chunk->last();
});
$chunks->all();
// [['A', 'A'], ['B', 'B'], ['C', 'C', 'C'], ['D']]

$collection = collect([
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
]);
$collapsed = $collection->collapse();
$collapsed->all();
// [1, 2, 3, 4, 5, 6, 7, 8, 9]

$collection = collect(['name', 'age']);
$combined = $collection->combine(['George', 29]);
$combined->all();
// ['name' => 'George', 'age' => 29]

$collection = collect(['John Doe']);
$concatenated = $collection->concat(['Jane Doe'])->concat(['name' => 'Johnny Doe']);
$concatenated->all();
// ['John Doe', 'Jane Doe', 'Johnny Doe']

$collection = collect([1, 2, 2, 2, 3]);
$counted = $collection->countBy();
$counted->all();
// [1 => 1, 2 => 3, 3 => 1]

$collection = collect(['alice@gmail.com', 'bob@yahoo.com', 'carlos@gmail.com']);
$counted = $collection->countBy(function ($email) {
    return substr(strrchr($email, "@"), 1);
});
$counted->all();
// ['gmail.com' => 2, 'yahoo.com' => 1]

$collection = collect([1, 2]);
$matrix = $collection->crossJoin(['a', 'b']);
$matrix->all();
/*
    [
        [1, 'a'],
        [1, 'b'],
        [2, 'a'],
        [2, 'b'],
    ]
*/

$collection = collect([1, 2]);
$matrix = $collection->crossJoin(['a', 'b'], ['I', 'II']);
$matrix->all();
/*
    [
        [1, 'a', 'I'],
        [1, 'a', 'II'],
        [1, 'b', 'I'],
        [1, 'b', 'II'],
        [2, 'a', 'I'],
        [2, 'a', 'II'],
        [2, 'b', 'I'],
        [2, 'b', 'II'],
    ]
*/

$collection = collect([1, 2, 3, 4, 5]);
$collection->doesntContain(function ($value, $key) {
    return $value < 5;
});
// false

$collection = collect([
    ['name' => 'Regena', 'age' => null],
    ['name' => 'Linda', 'age' => 14],
    ['name' => 'Diego', 'age' => 23],
    ['name' => 'Linda', 'age' => 84],
]);
$collection->firstWhere('name', 'Linda');
// ['name' => 'Linda', 'age' => 14]

$collection = collect(['Desk', 'Sofa', 'Chair']);
$intersect = $collection->intersect(['Desk', 'Chair', 'Bookcase']);
$intersect->all();
// [0 => 'Desk', 2 => 'Chair']


?>