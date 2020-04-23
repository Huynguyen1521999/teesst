<script>
    
    function getLinkJSONyear() {
     
        window.open("api.php/checkyear);
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

<h1>Ngày tiếp theo</h1>
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
