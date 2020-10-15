<?php
require_once './TreeNode.php';

$d = new TreeNode('D');
$e = new TreeNode('E');
$f = new TreeNode('F');
$c = new TreeNode('C');
$b = new TreeNode('B');
$a = new TreeNode('A');

$a->createBinaryTree($b, $c);
$b->createBinaryTree($d, $e);
$c->createBinaryTree(NULL, $f);

// var_dump($a); // 不方面查看结构
// var_dump((array)$a); // 不方便查看结构
echo (json_encode($a));
// {"val":"A","left":{"val":"B","left":{"val":"D","left":null,"right":null},"right":{"val":"E","left":null,"right":null}},"right":{"val":"C","left":null,"right":{"val":"F","left":null,"right":null}}}
