<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>
    {{HTML::style('http://fonts.googleapis.com/css?family=Lato:300,400,700')}}
    {{basset_stylesheets('application')}}
</head>
<body>
    <div class="welcome">
        <a href="http://laravel.com" title="Laravel PHP Framework">
            <?php echo HTML::image('assets/img/laravel.png') ?>
        </a>
        <h1>You have arrived.</h1>
    <div>
        {{File::get(app_path() . '/storage/logs/basset-2013-06-05.txt')}}
</body>
</html>
