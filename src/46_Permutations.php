<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permute($nums) {
        $out=[];
        $res=[];
        $visited=[];
        $this->helper($nums,0,$visited,$out,$res);
        return $res;
    }
    
    function helper($nums,$index,&$visited,&$out,&$res)
    {
        if($index==count($nums)){
            array_push($res,$out);
            return;
        } 
        
        for($j=0;$j<count($nums);$j++){
            print_r("=========");
            print_r($visited);
            print_r("---------");
            print_r($out);
            // print_r("=========");
            if($visited[$j]==1) continue;
            $visited[$j]=1;
            array_push($out,$nums[$j]);
            $this->helper($nums,$index+1,$visited,$out,$res);
            array_pop($out);
            $visited[$j]=0;
        }
        
    }
}

$nums = [1, 2, 3];

$s = new Solution();
$s->permute($nums);
