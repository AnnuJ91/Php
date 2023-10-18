<!--<html>
    <body>
        <h2>The XMLHttpRequest Object</h2>
        <div id="demo">
            <p>Let AJAX change this text</p>
            <button type="button" onclick="loadDoc()">Change Content</button>
        </div>

        <script>
            function loadDoc() {
                const xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("demo").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "ajax_info.txt", true);
                xhttp.send();
            }
        </script>
    </body>
</html>
        -->
<html>
    <body>
        <h2>The XMLHttpRequest Object</h2>
        <div id="demo">
            <p>Let AJAX change this text</p>
            <button type="button" onclick="loadDoc()">Change Content</button>
        </div>

        <script>
            function loadDoc()
            {
                const xhttp=new XMLHttpRequest();
                xhttp.onload=function()
                {
                    document.getElementById("demo").innerHTML=this.responseText;
                };
                xhttp.open("GET","ajax_info.txt");
                xhttp.send();
            }
        </script>
    </body>
</html> 