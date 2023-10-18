<html>
    <head>
        <title>Ajax second example</title>
    </head>
    <body>
        <div id="demo">
            <h2>The HTTPRequest Object</h2>
            <button type="button" onclick="fun1()">Click Me</button>

        </div>
        <script>
            function fun1()
            {
                const xhttp=new XMLHttpRequest();
                xhttp.onload=function()
                {
                    document.getElementById("demo").innerHTML=this.responseText;
                };
                xhttp.open("GET","abc_info.txt");
                xhttp.send();
            }
        </script>
    </body>
</html>