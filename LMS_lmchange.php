<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/9/2
 * Time: 20:50
 */
$lm=$_POST['lm'];
//echo $lm;
$lmxh=substr($lm,0,2);//系列
//echo $lmxh;
$lmxs=substr($lm,2,1);//滑块形式
//echo $lmxs;
//mg滑块尺寸判断
if ($lmxh="mg"|| $lmxs="MG"){
    $lmcc1=substr($lm,3,1);//尺寸1

    if ($lmcc1=="5"||$lmcc1=="7"||$lmcc1=="9"){
        $lmcc=$lmcc1;
        echo $lmcc;
    }else{
        $lmcc2=substr($lm,4,1);//尺寸2
        $lmcc="$lmcc1"."$lmcc2";
        echo $lmcc;
    }
}else{//hgegwe滑块尺寸判断
    $lmcc=substr($lm,3,2);//尺寸
    echo $lmcc;
}


