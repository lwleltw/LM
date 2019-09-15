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

if ($lmxh==="mg"|| $lmxh==="MG"){
    $lmcc1=substr($lm,3,1);//尺寸1
    //echo $lmcc1."!";

    if ($lmcc1=="5"||$lmcc1=="7"||$lmcc1=="9"){
        $lmcc=$lmcc1;
        //echo $lmcc."@";
    }else{
       $lmcc2=substr($lm,4,1);//尺寸2
       $lmcc="$lmcc1"."$lmcc2";
        //echo $lmcc."#";
    }
}else{//hgegwe滑块尺寸判断
   $lmcc=substr($lm,3,2);//尺寸
    //echo $lmcc."$";
}
//滑块负荷形式判断
if (isset($lmcc1)){//mg
    if ($lmcc1=="5"||$lmcc1=="7"||$lmcc1=="9"){
        $lmfh=substr($lm,4,1);
        //echo $lmfh;
    }else{
        $lmfh=substr($lm,5,1);
        //echo $lmfh;
    }
}else{//hgeg
    $lmfh=substr($lm,5,1);
    //echo $lmfh;
}
//滑块固定方式
if (isset($lmcc1)){//mg
    $lmgd=null;
}else{
    $lmgd=substr($lm,6,1);
    //echo $lmgd;
}
//滑块数
$lmr=strripos($lm,"r");//计算R位置
//echo $lmr;
if (isset($lmcc1)){//mg579
    $lmhks=substr($lm,5,$lmr-5);
    //echo $lmhks;
}else{
    $lmhks=substr($lm,7,$lmr-7);
    //echo $lmhks;
}
//导轨长度
$lmz=strripos($lm,"z");//计算z位置
$lmlength="R".substr($lm,$lmr+1,$lmz-$lmr-1);
//echo $lmlength;
//预压
$lmyy=substr($lm,$lmz,2);
//echo $lmyy;
//精度
$lmjd1=substr($lm,$lmz+2,1);
if ($lmjd1=="s"||$lmjd1=="S"||$lmjd1=="u"||$lmjd1=="U"){
    $lmjd=substr($lm,$lmz+2,2);
}else{
    $lmjd=$lmjd1;
}
//echo $lmjd;
//材质
if (isset($lmcc1)){
    $lmmgcz=substr($lm,$lmz+3,1);
    //echo $lmmgcz;
    if ($lmmgcz=='h'||$lmmgcz=='H'){
        $lmcz="HC";
        //echo $lmcz."!";
    }elseif ($lmmgcz=='n'||$lmmgcz=='N'){
        $lmcz="NC";
        //echo $lmcz."@";
    }elseif ($lmmgcz=='m'||$lmmgcz=='M'){
        $lmcz="M";
        //echo $lmcz."#";
    }
}else{
    $lmcz=null;
    //echo $lmcz."$";
}
echo $lmxh.$lmxs.$lmcc.$lmfh.$lmgd.$lmhks.$lmlength.$lmyy.$lmjd.$lmcz;
