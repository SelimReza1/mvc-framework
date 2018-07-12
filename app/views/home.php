<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view load</title>
    <style>
        .postcontent{width: 800px;border-right: 1px dotted #dddddd;float:left;margin-left:20px;padding-right: 20px;overflow: hidden}
        .post{ margin-bottom: 40px}
        .post h2{border-bottom: 1px dashed #dddddd;margin: 0px;padding-bottom: 10px}
        .post h2 a{text-decoration: none;color: black}
        .readmore{float: right}

        .sidebar{ width: 30%;float: right;overflow: scroll}
        .widget{margin-bottom: 20px}
        .widget h2{border: 1px solid #ddd;margin: 0 0 10px;padding: 4px 10px}
        .widget ul{margin: 0;padding: 0; list-style: none}
        .widget ul li{}
        .widget ul li a{background: #3399ff none repeat scroll 0 0;color: #fff;display: block;margin-bottom: 2px;padding: 8px;text-decoration: none}
        .widget ul li a:hover{background: #5ec4ff}
    </style>
</head>
<body>

<div class="content">
    Home<hr/>
    <article class="postcontent">
        <?php foreach ($allpost as $key => $value){

        ?>
    <div class="post">
        <h2><a href="BASE_URL/Index/postDetails/<?php echo $value['id']; ?>"><?php echo $value['title']; ?></a></h2>
        <p><?php
            $text = $value['content'];
        if(strlen($text)>300){
            $text =substr($text,0,300);
            echo $text;
        };
        ?></p>
        <div class="readmore"><a href="BASE_URL/Index/postDetails/<?php echo $value['id']; ?>">Read More.....</a></div>
    </div>
        <?php } ?>
    </article>
    <aside class="sidebar">
        <div class="widget">
            <h2>Category</h2>
            <ul>
                <li><a href="#">Category One</a></li>
                <li><a href="#">Category One</a></li>
                <li><a href="#">Category One</a></li>
                <li><a href="#">Category One</a></li>
                <li><a href="#">Category One</a></li>
            </ul>
        </div>
        <div class="widget">
            <h2>Latest Post</h2>
            <ul>
                <li><a href="#">Title of the Post Content</a></li>
                <li><a href="#">Title of the Post Content</a></li>
                <li><a href="#">Title of the Post Content</a></li>
                <li><a href="#">Title of the Post Content</a></li>
                <li><a href="#">Title of the Post Content</a></li>

            </ul>
        </div>
    </aside>
</div>
</body>
</html>