<?php
class MyCircularQueue {
    private $data = array();
    private $length = 0;
    private $i = 0;

    /**
     * Initialize your data structure here. Set the size of the queue to be k.
     * @param Integer $k
     */
    function __construct($k) {
        $this->length = $k;
    }

    function test() {
        print_r($this->data);
    }
  
    /**
     * Insert an element into the circular queue. Return true if the operation is successful.
     * 將元素插入循環佇列內，操作成功則返回true。
     * @param Integer $value
     * @return Boolean
     */
    function enQueue($value) {
        if($this->isFull()){
            return FALSE;
        }

        $this->data[$this->i] = $value;

        $this->i = (($this->i+1) == $this->length) ? 0 : $this->i + 1;
        
        return TRUE;
    }
  
    /**
     * Delete an element from the circular queue. Return true if the operation is successful.
     * 從佇列中刪除元素。操作成功則返回true。
     * @return Boolean
     */
    function deQueue() {
        if($this->isEmpty()) {
            return FALSE;
        }
        
        // 把指針移到array 的第一個位置
        $this->Front();
        // 取得當前指針位置
        $q = each($this->data);
        unset($this->data[$q['key']]);
        
        return TRUE;
    }
  
    /**
     * Get the front item from the queue.
     * 從佇列中獲取前面的項目
     * @return Integer
     */
    function Front() {
        if (! $this->isEmpty()) {
            return reset($this->data);
        }else{
            return -1;
        }
    }
  
    /**
     * Get the last item from the queue.
     * 從佇列中獲取最後的項目
     * @return Integer
     */
    function Rear() {
        if (! $this->isEmpty()) {
            return end($this->data);
        }else{
            return -1;
        }
    }
  
    /**
     * Checks whether the circular queue is empty or not.
     * 檢查佇列中是否為空
     * @return Boolean
     */
    function isEmpty() {
        return (empty($this->data)) ? TRUE : FALSE;
    }
  
    /**
     * Checks whether the circular queue is full or not.
     * 檢查佇列中是否為滿
     * @return Boolean
     */
    function isFull() {
        return (count($this->data) >= $this->length) ? TRUE : FALSE;
    }
}






/**
 * Your MyCircularQueue object will be instantiated and called as such:
 * $obj = MyCircularQueue($k);
 * $ret_1 = $obj->enQueue($value);
 * $ret_2 = $obj->deQueue();
 * $ret_3 = $obj->Front();
 * $ret_4 = $obj->Rear();
 * $ret_5 = $obj->isEmpty();
 * $ret_6 = $obj->isFull();
 */

 
$k = 3;
$obj = new MyCircularQueue($k);
$obj->enQueue(1);
$obj->enQueue(2);
$obj->enQueue(3);
$obj->enQueue(4);
// $obj->test();

var_dump( $obj->Rear() );
$obj->isFull();
$obj->deQueue();
// $obj->test();

$obj->enQueue(4);
var_dump( $obj->Rear() );
// var_dump( $obj->Front() );
// var_dump( $obj->Front() );
// $obj->deQueue();
// // $obj->test();
