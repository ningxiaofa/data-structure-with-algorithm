<?php
require_once './TreeNode.php';

// 104. 二叉树的最大深度
// 给定一个二叉树，找出其最大深度。

// 二叉树的深度为根节点到最远叶子节点的最长路径上的节点数。

// 说明: 叶子节点是指没有子节点的节点。

// 示例：
// 给定二叉树 [3,9,20,null,null,15,7]，

//     3
//    / \
//   9  20
//     /  \
//    15   7
// 返回它的最大深度 3 。

/**
 * Definition for a binary tree node.  使用PHP如何实现二叉树结构？ TBD //20201014
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */

class Solution {
    // static public $root;
    
    // public function __construct($root){
    //     static::$root = $root;
    // }

    /**
     * @param TreeNode $root
     * @return Integer
     */
    public function maxDepth($root) {
        if($root == null){
            return 0;
        }
        
        $queue = new SplQueue();
        $queue->enqueue($root);
        $ans = 0;
        while(!$queue->isEmpty()){
            
            (int) $size = $queue->count();
            while($size > 0){
                $node = $queue->dequeue();
                if($node->left != null)
                    $queue->enqueue($node->left);
                
                if($node->right != null)
                    $queue->enqueue($node->right);
                
                $size--;
            }
            $ans++;
        }

        return $ans;
    }
}

// $root = [3,9,20,null,null,15,7];

$a = new TreeNode(3);
$b = new TreeNode(9);
$c = new TreeNode(20);
$d = new TreeNode(15);
$e = new TreeNode(7);

$a->createBinaryTree($b, $c);
$b->createBinaryTree(NULL, NULL);
$c->createBinaryTree($d, $e);

$solution = new Solution();
$ret = $solution->maxDepth($a);
var_dump($ret); // int(1) 应该是3

//即执行失败~  解决问题的关键在于如何使用PHP定义实现二叉树结构 ？
// 如上所示: 定义完二叉树之后
// 输出结果就是
// int(3)