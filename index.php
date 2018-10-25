<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Maker</title>
</head>
<body>
    <h1>My Portfolio</h1>
    <h2>課題一覧</h2>
    <main>
        <ul>
            <?php 
            $exceptPathList = [".","..",".DS_Store","index.php"];
            $path = dirname( __FILE__);
            foreach ( scandir($path) as $num => $dir) {
                $exceptFlag = false;
                foreach($exceptPathList as $exceptPath){
                    if($dir == $exceptPath){
                        $exceptFlag = true;
                        break;
                    }
                }
                if(!$exceptFlag){
                    echo '<li><a href="./'.$dir.'">'.$dir.'</a></li>';
                }
            }
            ?>
        </ul>
    </main>
    <footer></footer>
</body>
</html>