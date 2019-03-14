
 <form action="?" method="post"> <input type="" name="num"><input type="submit" name=""></form>
<?php
 
 function winter($num)
 {

  @$num = $_POST['num'];

  if($num<1000){
       //定义个位
    $ge=$num%10;
       //定义十位
    $ten=(($num%100)-$ge) /10;
       //定义百位
       /*floor取整，忽略小数点后面的所有数*/
    $hundred=floor($num/100);
    $sum1=$ge*$ge*$ge+$ten*$ten*$ten+$hundred*$hundred*$hundred;
       if($sum1==$num){
               return 1;
                } else{
                     return 0;
                        }
               } else{
                       return -1;
                       }
         }
  if(winter(371)==-1) {
       echo "不能大于1000的数";
      }else{
      if(@winter($num)) {
          echo "是水仙花数";
         }else{
          echo "不是水仙花数";
          }
    }
 
?>
 
