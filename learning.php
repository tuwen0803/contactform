<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    // 連想配列　複合型
       //keyはint, stringのみ指定できる。
       //keyの型は同一する。混在しないよう。
       /*
       $x =[
            'key' => 'value'
       ];
       
       */
     $l = [
            '林' => 'to'
            ];
            echo $l['林'];
    // キャスト演算
        //var_dumpは型の情報,このあだ名はどれかを教えてくれる
            
          
            var_dump(1);    
            echo '<br>';
            var_dump('1');
            echo 1;
            echo '<br>';
            echo '1';
            
            $x = TURE;
            var_dump($x); 
            
    // if文 スカラ型
        //if (ture or false ) {命令}
           //比較演算
            var_dump(1 <= 2);
            var_dump(1 >= 2);
            var_dump(1 <= 1);
            var_dump(1 == 1);//等于
            var_dump(1 != 1);//不等于
            var_dump(1 === '1');
            
            $x = -5;
            if ($x >= 0) {
            echo 'Plus';
            }
            if ($x < 0) {
            echo 'Minus';
            };
            
            echo '<br>';
        
        //if else構文
            //1
            $y = -8;
            if ($y >= 0) {
                echo 'PLUS';
            } else {
                echo 'Minus';
            };
            echo '<br>';
            //2
            $z = 0;
            if ($z > 0){
                echo 'Plus';
            } else if ($z < 0) {
                echo 'Minus';
            } else {
                echo 'Zero';
            };
          　
            
            
           //
           
           
    // for文
    
    
    // 関数
    
    //クラス
    
    // オブジェクト
            
            
            
            
    ?>
</body>
</html>