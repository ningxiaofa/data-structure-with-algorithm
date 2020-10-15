<?php

class TreeNode{         //树节点类
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val){
        $this->val = $val;
    }
    //构造二叉树
    function createBinaryTree(TreeNode $lchird = NULL, TreeNode $rchird = NULL){
        if(!is_null($lchird))
            $this->left = $lchird;
        if(!is_null($rchird))
            $this->right = $rchird;
    }
}

$d = new TreeNode('D');
$e = new TreeNode('E');
$f = new TreeNode('F');
$c = new TreeNode('C');
$b = new TreeNode('B');
$a = new TreeNode('A');
$a->createBinaryTree($b,$c);
$b->createBinaryTree($d,$e);
$c->createBinaryTree(NULL,$f);

// var_dump($a); // 不方面查看结构
// var_dump((array)$a); // 不方便查看结构
echo (json_encode($a)); //

// 备注：
// 构造的过程比较简单，也可以不用函数实现，将左右子树的根结点赋值给根结点对象left和right属性即可，上述过程也可以写成：
// $c->right = $f;
// $b->left = $d;
// $b->right = $e;
// $a->left = $b;
// $a->right = $c;