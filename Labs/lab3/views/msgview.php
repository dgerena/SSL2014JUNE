<!doctype html>
<html>

<head>
    <title>Im here!</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>
    <header class='col-md-12'>
        <h1 class="col-md-4">Welcome </h1>
        <a class="col-md-offset-7 col-md-1" href="./?signout=true">
            <button>Log-out</button>
        </a>
    </header>
    <form class="col-md-offset-3 col-md-6 text-right" action="./" method="get">
        <input name="title" class="form-control" type="text" placeholder="Title">
        <textarea name="message" class="form-control" type="text" col='30' rows="10" placeholder="Your message here."></textarea>
        <button>Submit</button>
    </form>
    <section class="col-md-12">
        <? foreach($messages as $obj){ ?>
        <article class="col-md-offset-3 col-md-6">
            <form action="./" method="get">
                <input class='editors form-control' name="title" value="<?=$obj['title']?>" />
                <textarea class='editors form-control' name="message"><?=$obj[ 'message']?></textarea>
                <input type="hidden" name="update" value="true" />
                <input type="hidden" name="id" value="<?=$obj['id']?>" />
                <a class="col-md-1" href="./?delete=true&id=<?=$obj['id']?>">Delete</a>
                <button class="col-md-offset-10">Save</button>
            </form>
        </article>
        <? } ?>
    </section>
</body>

</html>