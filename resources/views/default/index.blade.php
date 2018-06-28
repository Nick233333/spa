<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel SPA</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="author" content="Nick">
    <meta name="Keywords" content="php,laravel,vue,js,mysql,css,html5" />
    <meta name="Description" content="php,laravel,vue,js,mysql,css,html5信息。" />
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <router-link to="/" class="navbar-brand">Laravel SPA</router-link>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <router-link to="/about" tag="li">
                            <a>about</a>
                        </router-link>
                    </ul>
                </div>
            </div>
        </nav>
        <router-view></router-view>
    </div>
<script src="/js/app.js"></script>
</body>
</html>
