<html>
<head>
<script>
function showProjects(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","listpms.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<form>
  <input type="text" name="pm" onkeypress="showProjects(this.value)">
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>

</body>
</html>
