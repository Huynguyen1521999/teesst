  <script>
    function getLinkJSONtamgiac() {
        var a,b,c;
        a = document.getElementById("inputa").value;
        b = document.getElementById("inputb").value;
        c = document.getElementById("inputc").value;
        window.open("api.php/checktamgiac/"+a+"/"+b+"/"+c);
    }
    function getLinkJSONday() {
        
        window.open("api.php/checkday/"+a);
    }
</script>

<!DOCTYPE html>
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
    <title>Ex restful api</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Phân Loại Tam Giác</h1>
<form>
    <label for="fname">a</label><br>
    <input type="number" id="inputa" name="fname"><br>
    <label for="lname">b</label><br>
    <input type="number" id="inputb" name="lname"><br>
    <label for="lname">c</label><br>
    <input type="number" id="inputc" name="lname"><br>
    <input type ="button" name="OKE" value="Submit" onclick="getLinkJSONtamgiac()">
</form>
<h1>Ngày tiếp theo</h1>
<form>
    <label for="lname">Nhập năm</label><br>
    <input type="number" id="inputyear" name="lname"><br>
    <input type ="button" name="OKE" value="GETJSON" onclick="getLinkJSONday()">
</form>
</body>
</html>
