<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>CALCULADORA</title>
    </head>

    <body>
        <form action="proc.php" method="post" name="calc">
            <label> Inserte los valores</label><br><br>
            <input type="text" name="c1" /><br /><br />
            <input type="text" name="c2" /><br /><br />
            
            <label>Selecciona la operación: <br> 
            
            <select name="lista">
                <option value="sumar">SUMAR</option>
                <option value="restar">RESTAR</option>
                <option value="multiplicar">MULTIPLICAR</option>
                <option value="dividir">DIVIDIR</option>
            </select><br /><br />
            <input type="submit" value="Ver resultado">


        </form>
    </body>
</html>