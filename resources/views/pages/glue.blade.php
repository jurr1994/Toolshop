<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="6.css">
</head>
<style>
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: tahoma;

}
.title {
                font-size: 84px;
				text-align: center;
            }

.links > a {
                color: #3B3537;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
				text-transform: uppercase;
				
            }
body{
	
	display: flex;
	justify-content:center;
	align-items: center;
	min-height: 100vh;
	background: #EBEBEB;
	margin: 0 auto;
}

.box{
	width: 500px;
    display: inline-block;
    margin: 0 auto;
	align-items: center;
	justify-content:center;
	margin-top: 100px;
	
}

.box h2{
	color: #fff;
	background: #f69700;
	padding: 25px 20px;
	font-size: 30px;
	font-weight: 700;
	border-radius: 10px 10px 0px 0px;
    text-align: center;
    width:500px;
}

.box ul{
	position: relative;
	background: #fff;
}
.box ul li{
	list-style: none;
	padding: 15px;
	width: 100%;
	background: #fff;
	box-shadow: 0 5px 25px rgba(0,0,0,0.1);
	transition: transform 0.5s;
    color: 000000;
    

}

.box ul li:hover{
	transform: scale(1.02);
	z-index: 100;
	background: #f2f2f2;
	box-shadow: 0 5px 25px rgba(0,0,0,0.2);
	color: #00000;

}
.box ul li span{
	width: 50px;
	height: 40px;
	line-height: 20px;
	text-align: center;
	background: #f69700;
	color: #fff;
	display: inline-block;
	border-radius: 15%;
	margin-right: 10px;
	font-size: 12px;
	font-weight: 700;
	transform: translateY(-2px);
    vertical-align:middle;
    
}

.box ul li:hover span{
	background: #3B3537;
	color: #f2f2f2;
}

  
 .text{
    display: flex;
  flex-wrap: nowrap;
  background-color: DodgerBlue;
 }  
 .space{
    padding-left : 10px;
    padding-right: 10px;
	margin: 15px;
}
	
.centered-wrapper {
    position: relative;
    text-align: center;
}

.centered-content {
    display: inline-block;
    vertical-align: middle;
}

  

</style>
<body>
<body class="centered-wrapper">
<div class="centered-content">
<div class="content">
                
					<img src="{{ URL::to('/assets/logo.jpg') }}">
                </div>

                <div class="links">
                    <a href="/nutsandbolts">Test</a>
                    <a href="/screws">screws</a>
                    <a href="/glue">Nuts and bolts</a>
                    <a href="/paint">Orderlist</a>
                  
                </div>
	<div class="box">
		<h2>Nuts and bolts</h2>
        
		<ul>
			<li>
				<span>M4, 40MM</span><b>44</b> in Stock<input type="text" placeholder= "add new stock "class="space"/><input type="submit" value="Submit" class="space">
                
			</li>
			<li>
				<span>M4, 45MM</span><b>95</b> in Stock<input type="text" placeholder= "add new stock "class="space"/><input type="submit" value="Submit" class="space">
			</li>
			<li>
				<span>M5, 55MM</span><b>25</b> in Stock<input type="text" placeholder= "add new stock "class="space"/><input type="submit" value="Submit" class="space">
			</li>
			<li>
				<span>M5, 60MM</span><b>69</b> in Stock<input type="text" placeholder= "add new stock "class="space"/><input type="submit" value="Submit" class="space">
			</li>
			<li>
				<span>M8, 80MM</span><b>51</b> in Stock<input type="text" placeholder= "add new stock "class="space"/><input type="submit" value="Submit" class="space">
			</li>
			<li>
				<span>M8, 85MM</span><b>0</b> in Stock<input type="text" placeholder= "add new stock "class="space"/><input type="submit" value="Submit" class="space">
			</li>
		</ul>
	</div>
    </div>
	
</body>
</html>