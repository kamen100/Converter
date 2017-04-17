<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="conten-type" content="text/html" charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Excel</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script type="text/javascript" src="myscript.js"></script>
        <script type="text/javascript" src="checks.js"></script>
    </head>
    <body>
        <h1>Конвертор на имената на колоните към техните индекси и обратно </h1>
        <div id="staticParent">
            <input type="number" id="IN" placeholder="Въведете Индекс на колона" max="20" class="input" oninput="if(this.value.length>20) value=value.slice(20);">
            <div id="content" class="aj">  
            </div>  
        </div>
        <div id="wrap">
            <input type="text" id="NC" placeholder="Въведете Име на колона" max="20" class="input" maxlength="20">
            <div id="content2" class="aj">
            </div>  
        </div>
    </body>
</html>