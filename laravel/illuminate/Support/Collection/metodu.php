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
?>