<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>高大資管營</title>
</head>
<style>
    div.head{font-size:40px;color:antiquewhite;background-color:#34495E;width: 800px ;margin: 0 auto}
</style>
<style>
    div.body{font-size:20px;background-color:#DAF7A6;width: 800px ;margin: 0 auto; margin-top:5px ;}
</style>
<style>
    div.table{font-size:20px;background-color: #FFC300;width: 800px;height:350px;line-height:50px;text-align:center;margin: 0 auto;margin-top:5px;;}
</style>
<style>
     div.a{font-size:40px;color:black;background-color:#A9F8FC;width: 800px ;margin: 0 auto;margin-top:5px}
</style>
<body>
    <div class="head">
        <center>Welcome to IMCP</center>
        
    </div>  
        <center>報名表單</center>
    <form action="submit.php" method="POST">
        
        <span style="font-weight:bold;">中文姓名:</span>
        <input type="text" name="name" value="請填全名(如:王小明)"><br>
    <span style="font-weight:bold;">性別:</span><br>
        <input type=radio name="gender" value="m">男
        <input type=radio name="gender" value="f">女<br>
    <span style="font-weight:bold;">出生日期:</span>
        <input type="date" name="birth"><br>
    <span style="font-weight:bold;">您的身分證字號:</span>
        <input type="text" name="id" value="僑生請填護照號碼"><br>
    <span style="font-weight:bold;">連絡電話:</span>
        <input type="text" name="number" value="09"><br>
        你來自何方?<br> <select name="city" id="" required>
            <option value="Taipei" selected>台北市</option>
            <option value="New_Taipei">新北市</option>
            <option value="Taoyuan">桃園市</option>
            <option value="Hsinchu">新竹市</option>
            <option value="Yilan">宜蘭縣</option>
            <option value="Miaoli">苗栗縣</option>
            <option value="Taichung">台中市</option>
            <option value="Changhua">彰化縣</option>
            <option value="Yunlin">雲林縣</option>
            <option value="Nantou">南投縣</option>
            <option value="Chiayi">嘉義市</option>
            <option value="Tainan">台南市</option>
            <option value="Kaohsiung" >高雄市</option>
            <option value="Pingtung">屏東縣</option>
            <option value="Hualien">花蓮縣</option>
            </select></BR>
        飲食習慣:<br>葷<input type="radio" name="eathabbit" value="M">
                素<input type="radio" name="eathabbit" value="V"><br>
        <input type="reset" value="清除"><input type="submit" value="提交"><br>
    </form>
    </div>
    <div class="a">
        <center>快來找我們玩喔~</center>
    </div>
</body>
</html>