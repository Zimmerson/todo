<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>template</title>
    <link href="/assets/css/reset.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>

<header>
    <div class="container">
        <h1>todo</h1>
    </div>
</header>
<nav>
    <div class="container">
        <ul>
           <li>
               <a href="/">home</a>
               <a href="/new">new</a>
           </li>
        </ul>
    </div>
</nav>
<div class="wrapper">
    <div class="content container">
        <?php include $pageFile; ?>
    </div>
</div>
<footer>
    <div class="container">
        footer
    </div>
</footer>
</body>
</html>