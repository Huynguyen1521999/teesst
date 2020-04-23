<script>
    function getLinkJSONtamgiac() {
        var a,b,c;
        a = document.getElementById("inputa").value;
        b = document.getElementById("inputb").value;
        c = document.getElementById("inputc").value;
        window.open("api.php/checktamgiac/"+a+"/"+b+"/"+c);
    }
    function getLinkJSONyear() {
        var a,b,c;
        a = document.getElementById("inputday").value;
        b = document.getElementById("inputmonth").value;
        c = document.getElementById("inputyear").value;
        window.open("api.php/checkyear/"+a+"/"+b+"/"+c);
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
<h1>Nhập ngày tháng năm</h1>
<form>
    <label for="fname">Ngày:</label><br>
    <input type="number" id="inputday" name="fname"><br>
    <label for="lname">Tháng:</label><br>
    <input type="number" id="inputmonth" name="lname"><br>
    <label for="lname">Năm:</label><br>
    <input type="number" id="inputyear" name="lname"><br>
    <input type ="button" name="OKE" value="Submit" onclick="getLinkJSONyear()">
</form>
</body>
</html>
