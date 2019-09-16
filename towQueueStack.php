<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/9/16
 * Time: 16:03
 */

/**
 * Class twoQueueStack 两个队列实现一个栈
 * 1. 定义两个队列, queue和help
 * 2. 压栈: 只要有新数据, 就放入queue队列.
 * 3. 出栈:
 *  1. 如果queue队列为空, 报错.
 *  2. 如果queue队列元素数量>1, 将queue队列中数据除了队尾元素, 其它全部放入help队列.
 *  3. 将queue队列剩下的最后一个元素(原队尾元素)出队并返回, 交换queue队列和help队列的指向.
 * 4. 返回栈顶元素
 * 除了出栈操作中的3, 将queue队列剩下的最后一个元素出队并返回同时放入help队列, 其它和出栈操作相同.
 */
class TwoQueueStack
{
    private $queue;
    private $help;

    public function __construct()
    {
        $this->queue = new SplQueue();
        $this->help = new SplQueue();
    }

    public function push($data)
    {
        $this->queue->enqueue($data);
    }

    public function pop()
    {
        if ($this->queue->isEmpty()) {
            throw new Exception('stack is empty');
        }
        while ($this->queue->count() > 1) {
            $this->help->enqueue($this->queue->dequeue());
        }
        $res = $this->queue->dequeue();
        $this->swap();
        return $res;

    }

    public function peek()
    {
        if ($this->queue->isEmpty()) {
            throw new Exception('stack is empty');
        }
        while ($this->queue->count() > 1) {
            $this->help->enqueue($this->queue->dequeue());
        }
        $res = $this->queue->dequeue();
        $this->help->enqueue($res);
        $this->swap();
        return $res;
    }

    public function swap()
    {
        $temp = $this->help;
        $this->help = $this->queue;
        $this->queue = $temp;

    }
}

$stack = new TwoQueueStack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);

echo $stack->peek();
echo $stack->pop();
echo $stack->pop();
echo $stack->pop();
echo $stack->pop();
