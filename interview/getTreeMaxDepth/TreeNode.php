<?php

//树节点类
// 1、var在类外用报错：如果不是在类中，用var定义变量是错的。
// 2、类属性必须带限定词：php中类属性必须定义为公有，受保护，私有之一。所以如果没有那三个修饰符，必须用var，var是public的别名。
class TreeNode{
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
