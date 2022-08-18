<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<?php
function giai_pt_bac_1($a,$b)
{
	if ($a==0)
	{
		if ($b==0)
			$nghiem ="Phương trình có vô số nghiệm";
		if ($b<>0)
			$nghiem ="Phương trình vô nghiệm";
		}
	else 
	{
		$nghiem = "x= round(-($b/$a),2)";
	}
	return $nghiem;
}
function giai_pt_bac_2($a,$b,$c)
{
	if ($a==0)
		$nghiem=giai_pt_bac_1($b,$c);
	if ($a<>0)
	{
		$delta = pow($b,2)-4*$a*$c;
		if ($delta < 0)
			$nghiem="Phương trình vô nghiệm";
		if ($delta==0)
		{
			$nghiem="Phương trình có nghiệm kép x1=x2=".-($b/2*$a);
		}
		else 
		{
			$can=sqrt($delta);
			$x1=(-$b+$can)/(2*$a);
			$x2=(-$b-$can)/(2*$a);
			$nghiem="Phương trình có 2 nghiệm phân biệt x1=".round($x1,2).",x2=".round($x2,2);
		}
	}
	return $nghiem;
}
if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"]))
{
	$nghiem=giai_pt_bac_2($_POST["a"],$_POST["b"],$_POST["c"]);
}

?>

<body>
     <h1 style="text-align: center;">TÍnh pt bậc 2</h1>
     <div class="thanh">
          <form action="Bai5.php" method="post">
               <label for="">Nhập: </label> <input type="text" name="a" id> <label for="">X^2  + </label> <label for="">
               <input type="text" name="b" id><label for="">X + </label> <input type="text" name="c" id=""> 
               <label for=""> =0 </label>
               <br><br> <label for=""><input style="width:400px" type="text" value="<?php if (isset($nghiem)) echo $nghiem; ?>"></label>
               <input type="submit" value="TÍnh tổng">
          </form>
     </div>
</body>

</html>