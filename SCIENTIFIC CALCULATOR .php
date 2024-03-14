<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SCIENTIFIC CALCULATOR </title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #57606f;
		}
		h1{
			color: #fff;
			text-align: center;
		}
		.container {
			border: 2px solid;
			border-color: #D980FA #ED4C67;
			width: 50%;
			margin: 20px auto;
			padding: 20px;
			background-color: #fff;
			border-radius: 21px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		button{
			width: 70px;
			height: 46px;
			padding: 12px;
			
		}
		.number{
			background-color: #f5f6fa;
			border-color: #dfe4ea;
		}
		.equal{
			background-color: #3742fa;
			border-color: #dfe4ea;
			color: white;
			font-size: 18px;
			font-weight: bold;
		}
		.col{
			padding: 4px;
		}
		input{
			width: 80%;
			height: 40px;
			font-size: 22px;
		}
	</style>
</head>
<body>
	<center>
	<h1>SCIENTIFIC CALCULATOR </h1>

	<div class="container">

		<input id="output" type="text">
		<div class="row">
			<div class="col">
			<button class="" onclick="blockbtn()">RAD</button>
			<button class="number" onclick="blockbtn()">::::</button>
			<button class="" onclick="blockbtn()">X!</button>
			<button class="" onclick="blockbtn()">(</button>
			<button class="" onclick="blockbtn()">)</button>
			<button class="" onclick="blockbtn()">%</button>
			<button class="" onclick="clearOutput()" onclick="blockbtn()">AC</button>
			</div>
		</div>
		<div class="row">
			<div class="col">
			<button class="" onclick="blockbtn()">Inv</button>
			<button class=""  onclick="blockbtn()">sin</button>
			<button class=""  onclick="blockbtn()">ln</button>
			<button class="number" onclick="_checkoutPut('7')">7</button>
			<button class="number" onclick="_checkoutPut('8')">8</button>
			<button class="number" onclick="_checkoutPut('9')">9</button>
			<button class="" onclick="_checkoutPut('/')">/</button>
			</div>
		</div>
		<div class="row">
			<div class="col">
			<button class="" onclick="blockbtn()">π</button>
			<button class="" onclick="blockbtn()">COS</button>
			<button class="" onclick="blockbtn()">log</button>
			<button class="number" onclick="_checkoutPut('4')">4</button>
			<button class="number" onclick="_checkoutPut('5')">5</button>
			<button class="number" onclick="_checkoutPut('6')">6</button>
			<button class="" onclick="_checkoutPut('*')">X</button>
			</div>
		</div>
		<div class="row">
			<div class="col">
			<button class="" onclick="blockbtn()">e</button>
			<button class="" onclick="blockbtn()">tan</button>
			<button class="" onclick="blockbtn()">√</button>
			<button class="number" onclick="_checkoutPut('1')">1</button>
			<button class="number" onclick="_checkoutPut('2')">2</button>
			<button class="number" onclick="_checkoutPut('3')">3</button>
			<button class="" onclick="_checkoutPut('-')">-</button>
			</div>
		</div>
		<div class="row">
			<div class="col">
			<button class="" onclick="calculate()">Ans</button>
			<button class="" onclick="blockbtn()">EXP</button>
			<button class="" onclick="blockbtn()">X<sup>y</sup> </button>
			<button class="number" onclick="_checkoutPut('0')">0</button>
			<button class="number" onclick="_checkoutPut('.')">.</button>
			<button class="equal" onclick="calculate()">=</button>
			<button class="" onclick="_checkoutPut('+')">+</button>
			</div>
		</div>

		
	</div>
	</center>
	
	<script>

		var output = document.getElementById('output');


		function _checkoutPut(value) {
			output.value += value;
		}

		function clearOutput() {
			output.value = '';
		}

		function calculate() {
			
			output.value = eval(document.getElementById('output').value);
			
		}
		function blockbtn(){
			alert("This botton does not work");
		}
	</script>
</body>
</html>
