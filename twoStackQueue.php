<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/9/16
 * Time: 19:00
 */

/*1. 定义两个栈, push和pop
2. 入队: 只要有新数据, 就压入push栈
3. 出队:
   1. 如果push栈和pop栈都为空, 报错.
   2. 如果pop栈为空并且push栈有数据, 将push栈所有数据压入pop栈, 弹出pop栈的栈顶并返回.
   3. 如果pop栈不为空, 弹出pop栈的栈顶并返回.
4. 返回队头元素
   返回pop栈的栈顶不弹出, 其它与出队操作相同.*/

//class TwoStackQueue
//{
//    private $stackPush;
//    private $stackPop;
//
//    public function __construct()
//    {
//        $this->stackPush = new SplStack();
//        $this->stackPop = new SplStack();
//    }
//
//    //入队
//    public function enqueue($data)
//    {
//            $this->stackPush->push($data);
//    }
//
//    //出队
//    public function dequeue()
//    {
//        if($this->stackPush->isEmpty()&&$this->stackPop->isEmpty()){
//            throw new Exception('queue is empty');
//        }
//        if($this->stackPop->isEmpty()){
//            while (!$this->stackPush->isEmpty()){
//                $this->stackPop->push($this->stackPush->pop());
//            }
//        }
//        return $this->stackPop->pop();
//
//    }
//
//    //返回对头的元素
//    public function peek()
//    {
//
//        if($this->stackPush->isEmpty()&&$this->stackPop->isEmpty()){
//            throw new Exception('queue is empty');
//        }
//        if($this->stackPop->isEmpty()){
//            while (!$this->stackPush->isEmpty()){
//                $this->stackPop->push($this->stackPush->pop());
//            }
//        }
//        return $this->stackPop->top();
//    }
//}

class TwoStackQueue
{
    private $stackPush;
    private $stackPop;

    public function __construct()
    {
        $this->stackPop = new SplStack();
        $this->stackPush = new SplStack();
    }

    //入栈
    public function enqueue($data)
    {
        $this->stackPush->push($data);

    }

    //出栈
    public function dequeue()
    {
        if ($this->stackPush->isEmpty() && $this->stackPop->isEmpty()) {
            throw new Exception('stack is empty');
        }
        if ($this->stackPop->isEmpty()) {
            while (!$this->stackPush->isEmpty()) {
                $this->stackPop->push($this->stackPush->pop());
            }
        }
        return $this->stackPop->pop();
    }
    
    //返回顶部数据
    public function peek()
    {
        if ($this->stackPush->isEmpty() && $this->stackPop->isEmpty()) {
            throw new Exception('stack is empty');
        }
        if ($this->stackPop->isEmpty()) {
            while (!$this->stackPush->isEmpty()) {
                $this->stackPop->push($this->stackPush->pop());
            }
        }
        return $this->stackPop->top();
    }
}
/*
 * splStack
 * push 压栈
 * pop  出栈(弹出)
 * top  读取栈顶元素
 * */
$queue = new TwoStackQueue();
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);

echo $queue->peek();

echo $queue->dequeue();
echo $queue->dequeue();
echo $queue->dequeue();
echo $queue->dequeue();