<html>
<head>
<title>SSolver</title>
</head>
<body>
<h1>SSolver in PHP</h1>
<h3>Developed by: Drew Wallace</h3>
<?PHP
/*error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);*/
?>
Here is the Windows-based SSolver: <BR><A HREF=SSolver.exe>SSolver.exe</A>
<br><br><?php
$grid = array_fill(0, 8, array_fill(0, 8, array_fill(0, 9, 0))); //9x9x10 array filled with 0's
$gridFlag = array_fill(0, 8, array_fill(0, 8, 0)); //9x9 array filled with 0's
$nextLevel = false; //boolean
function SudokuS()	//reads in the sudoku puzzle and sets possible
{
	global $grid;
	if($_POST['tb00'] == "")
	{
		$grid[0][0][0] = 0;
	}
	else
	{
		$grid[0][0][0] = $_POST['tb00'];
	}
	if($_POST['tb01'] == "")
	{
		$grid[0][1][0] = 0;
	}
	else
	{
		$grid[0][1][0] = $_POST['tb01'];
	}
	if($_POST['tb02'] == "")
	{
		$grid[0][2][0] = 0;
	}
	else
	{
		$grid[0][2][0] = $_POST['tb02'];
	}
	if($_POST['tb03'] == "")
	{
		$grid[0][3][0] = 0;
	}
	else
	{
		$grid[0][3][0] = $_POST['tb03'];
	}
	if($_POST['tb04'] == "")
	{
		$grid[0][4][0] = 0;
	}
	else
	{
		$grid[0][4][0] = $_POST['tb04'];
	}
	if($_POST['tb05'] == "")
	{
		$grid[0][5][0] = 0;
	}
	else
	{
		$grid[0][5][0] = $_POST['tb05'];
	}
	if($_POST['tb06'] == "")
	{
		$grid[0][6][0] = 0;
	}
	else
	{
		$grid[0][6][0] = $_POST['tb06'];
	}
	if($_POST['tb07'] == "")
	{
		$grid[0][7][0] = 0;
	}
	else
	{
		$grid[0][7][0] = $_POST['tb07'];
	}
	if($_POST['tb08'] == "")
	{
		$grid[0][8][0] = 0;
	}
	else
	{
		$grid[0][8][0] = $_POST['tb08'];
	}
	if($_POST['tb10'] == "")
	{
		$grid[1][0][0] = 0;
	}
	else
	{
		$grid[1][0][0] = $_POST['tb10'];
	}
	if($_POST['tb11'] == "")
	{
		$grid[1][1][0] = 0;
	}
	else
	{
		$grid[1][1][0] = $_POST['tb11'];
	}
	if($_POST['tb12'] == "")
	{
		$grid[1][2][0] = 0;
	}
	else
	{
		$grid[1][2][0] = $_POST['tb12'];
	}
	if($_POST['tb13'] == "")
	{
		$grid[1][3][0] = 0;
	}
	else
	{
		$grid[1][3][0] = $_POST['tb13'];
	}
	if($_POST['tb14'] == "")
	{
		$grid[1][4][0] = 0;
	}
	else
	{
		$grid[1][4][0] = $_POST['tb14'];
	}
	if($_POST['tb15'] == "")
	{
		$grid[1][5][0] = 0;
	}
	else
	{
		$grid[1][5][0] = $_POST['tb15'];
	}
	if($_POST['tb16'] == "")
	{
		$grid[1][6][0] = 0;
	}
	else
	{
		$grid[1][6][0] = $_POST['tb16'];
	}
	if($_POST['tb17'] == "")
	{
		$grid[1][7][0] = 0;
	}
	else
	{
		$grid[1][7][0] = $_POST['tb17'];
	}
	if($_POST['tb18'] == "")
	{
		$grid[1][8][0] = 0;
	}
	else
	{
		$grid[1][8][0] = $_POST['tb18'];
	}
	if($_POST['tb20'] == "")
	{
		$grid[2][0][0] = 0;
	}
	else
	{
		$grid[2][0][0] = $_POST['tb20'];
	}
	if($_POST['tb21'] == "")
	{
		$grid[2][1][0] = 0;
	}
	else
	{
		$grid[2][1][0] = $_POST['tb21'];
	}
	if($_POST['tb22'] == "")
	{
		$grid[2][2][0] = 0;
	}
	else
	{
		$grid[2][2][0] = $_POST['tb22'];
	}
	if($_POST['tb23'] == "")
	{
		$grid[2][3][0] = 0;
	}
	else 
	{
		$grid[2][3][0] = $_POST['tb23'];
	}
	if($_POST['tb24'] == "")
	{
		$grid[2][4][0] = 0;
	}
	else
	{
		$grid[2][4][0] = $_POST['tb24'];
	}
	if($_POST['tb25'] == "")
	{
		$grid[2][5][0] = 0;
	}
	else
	{
		$grid[2][5][0] = $_POST['tb25'];
	}
	if($_POST['tb26'] == "")
	{
		$grid[2][6][0] = 0;
	}
	else
	{
		$grid[2][6][0] = $_POST['tb26'];
	}
	if($_POST['tb27'] == "")
	{
		$grid[2][7][0] = 0;
	}
	else
	{
		$grid[2][7][0] = $_POST['tb27'];
	}
	if($_POST['tb28'] == "")
	{
		$grid[2][8][0] = 0;
	}
	else
	{
		$grid[2][8][0] = $_POST['tb28'];
	}
	if($_POST['tb30'] == "")
	{
		$grid[3][0][0] = 0;
	}
	else
	{
		$grid[3][0][0] = $_POST['tb30'];
	}
	if($_POST['tb31'] == "")
	{
		$grid[3][1][0] = 0;
	}
	else
	{
		$grid[3][1][0] = $_POST['tb31'];
	}
	if($_POST['tb32'] == "")
	{
		$grid[3][2][0] = 0;
	}
	else
	{
		$grid[3][2][0] = $_POST['tb32'];
	}
	if($_POST['tb33'] == "")
	{
		$grid[3][3][0] = 0;
	}
	else
	{
		$grid[3][3][0] = $_POST['tb33'];
	}
	if($_POST['tb34'] == "")
	{
		$grid[3][4][0] = 0;
	}
	else
	{
		$grid[3][4][0] = $_POST['tb34'];
	}
	if($_POST['tb35'] == "")
	{
		$grid[3][5][0] = 0;
	}
	else
	{
		$grid[3][5][0] = $_POST['tb35'];
	}
	if($_POST['tb36'] == "")
	{
		$grid[3][6][0] = 0;
	}
	else
	{
		$grid[3][6][0] = $_POST['tb36'];
	}
	if($_POST['tb37'] == "")
	{
		$grid[3][7][0] = 0;
	}
	else
	{
		$grid[3][7][0] = $_POST['tb37'];
	}
	if($_POST['tb38'] == "")
	{
		$grid[3][8][0] = 0;
	}
	else
	{
		$grid[3][8][0] = $_POST['tb38'];
	}
	if($_POST['tb40'] == "")
	{
		$grid[4][0][0] = 0;
	}
	else
	{
		$grid[4][0][0] = $_POST['tb40'];
	}
	if($_POST['tb41'] == "")
	{
		$grid[4][1][0] = 0;
	}
	else
	{
		$grid[4][1][0] = $_POST['tb41'];
	}
	if($_POST['tb42'] == "")
	{
		$grid[4][2][0] = 0;
	}
	else
	{
		$grid[4][2][0] = $_POST['tb42'];
	}
	if($_POST['tb43'] == "")
	{
		$grid[4][3][0] = 0;
	}
	else
	{
		$grid[4][3][0] = $_POST['tb43'];
	}
	if($_POST['tb44'] == "")
	{
		$grid[4][4][0] = 0;
	}
	else
	{
		$grid[4][4][0] = $_POST['tb44'];
	}
	if($_POST['tb45'] == "")
	{
		$grid[4][5][0] = 0;
	}
	else
	{
		$grid[4][5][0] = $_POST['tb45'];
	}
	if($_POST['tb46'] == "")
	{
		$grid[4][6][0] = 0;
	}
	else
	{
		$grid[4][6][0] = $_POST['tb46'];
	}
	if($_POST['tb47'] == "")
	{
		$grid[4][7][0] = 0;
	}
	else
	{
		$grid[4][7][0] = $_POST['tb47'];
	}
	if($_POST['tb48'] == "")
	{
		$grid[4][8][0] = 0;
	}
	else
	{
		$grid[4][8][0] = $_POST['tb48'];
	}
	if($_POST['tb50'] == "")
	{
		$grid[5][0][0] = 0;
	}
	else
	{
		$grid[5][0][0] = $_POST['tb50'];
	}
	if($_POST['tb51'] == "")
	{
		$grid[5][1][0] = 0;
	}
	else
	{
		$grid[5][1][0] = $_POST['tb51'];
	}
	if($_POST['tb52'] == "")
	{
		$grid[5][2][0] = 0;
	}
	else
	{
		$grid[5][2][0] = $_POST['tb52'];
	}
	if($_POST['tb53'] == "")
	{
		$grid[5][3][0] = 0;
	}
	else
	{
		$grid[5][3][0] = $_POST['tb53'];
	}
	if($_POST['tb54'] == "")
	{
		$grid[5][4][0] = 0;
	}
	else
	{
		$grid[5][4][0] = $_POST['tb54'];
	}
	if($_POST['tb55'] == "")
	{
		$grid[5][5][0] = 0;
	}
	else
	{
		$grid[5][5][0] = $_POST['tb55'];
	}
	if($_POST['tb56'] == "")
	{
		$grid[5][6][0] = 0;
	}
	else
	{
		$grid[5][6][0] = $_POST['tb56'];
	}
	if($_POST['tb57'] == "")
	{
		$grid[5][7][0] = 0;
	}
	else
	{
		$grid[5][7][0] = $_POST['tb57'];
	}
	if($_POST['tb58'] == "")
	{
		$grid[5][8][0] = 0;
	}
	else
	{
		$grid[5][8][0] = $_POST['tb58'];
	}
	if($_POST['tb60'] == "")
	{
		$grid[6][0][0] = 0;
	}
	else
	{
		$grid[6][0][0] = $_POST['tb60'];
	}
	if($_POST['tb61'] == "")
	{
		$grid[6][1][0] = 0;
	}
	else
	{
		$grid[6][1][0] = $_POST['tb61'];
	}
	if($_POST['tb62'] == "")
	{
		$grid[6][2][0] = 0;
	}
	else
	{
		$grid[6][2][0] = $_POST['tb62'];
	}
	if($_POST['tb63'] == "")
	{
		$grid[6][3][0] = 0;
	}
	else
	{
		$grid[6][3][0] = $_POST['tb63'];
	}
	if($_POST['tb64'] == "")
	{
		$grid[6][4][0] = 0;
	}
	else
	{
		$grid[6][4][0] = $_POST['tb64'];
	}
	if($_POST['tb65'] == "")
	{
		$grid[6][5][0] = 0;
	}
	else
	{
		$grid[6][5][0] = $_POST['tb65'];
	}
	if($_POST['tb66'] == "")
	{
		$grid[6][6][0] = 0;
	}
	else
	{
		$grid[6][6][0] = $_POST['tb66'];
	}
	if($_POST['tb67'] == "")
	{
		$grid[6][7][0] = 0;
	}
	else
	{
		$grid[6][7][0] = $_POST['tb67'];
	}
	if($_POST['tb68'] == "")
	{
		$grid[6][8][0] = 0;
	}
	else
	{
		$grid[6][8][0] = $_POST['tb68'];
	}
	if($_POST['tb70'] == "")
	{
		$grid[7][0][0] = 0;
	}
	else
	{
		$grid[7][0][0] = $_POST['tb70'];
	}
	if($_POST['tb71'] == "")
	{
		$grid[7][1][0] = 0;
	}
	else
	{
		$grid[7][1][0] = $_POST['tb71'];
	}
	if($_POST['tb72'] == "")
	{
		$grid[7][2][0] = 0;
	}
	else
	{
		$grid[7][2][0] = $_POST['tb72'];
	}
	if($_POST['tb73'] == "")
	{
		$grid[7][3][0] = 0;
	}
	else
	{
		$grid[7][3][0] = $_POST['tb73'];
	}
	if($_POST['tb74'] == "")
	{
		$grid[7][4][0] = 0;
	}
	else
	{
		$grid[7][4][0] = $_POST['tb74'];
	}
	if($_POST['tb75'] == "")
	{
		$grid[7][5][0] = 0;
	}
	else
	{
		$grid[7][5][0] = $_POST['tb75'];
	}
	if($_POST['tb76'] == "")
	{
		$grid[7][6][0] = 0;
	}
	else
	{
		$grid[7][6][0] = $_POST['tb76'];
	}
	if($_POST['tb77'] == "")
	{
		$grid[7][7][0] = 0;
	}
	else
	{
		$grid[7][7][0] = $_POST['tb77'];
	}
	if($_POST['tb78'] == "")
	{
		$grid[7][8][0] = 0;
	}
	else
	{
		$grid[7][8][0] = $_POST['tb78'];
	}
	if($_POST['tb80'] == "")
	{
		$grid[8][0][0] = 0;
	}
	else
	{
		$grid[8][0][0] = $_POST['tb80'];
	}
	if($_POST['tb81'] == "")
	{
		$grid[8][1][0] = 0;
	}
	else
	{
		$grid[8][1][0] = $_POST['tb81'];
	}
	if($_POST['tb82'] == "")
	{
		$grid[8][2][0] = 0;
	}
	else
	{
		$grid[8][2][0] = $_POST['tb82'];
	}
	if($_POST['tb83'] == "")
	{
		$grid[8][3][0] = 0;
	}
	else
	{
		$grid[8][3][0] = $_POST['tb83'];
	}
	if($_POST['tb84'] == "")
	{
		$grid[8][4][0] = 0;
	}
	else
	{
		$grid[8][4][0] = $_POST['tb84'];
	}
	if($_POST['tb85'] == "")
	{
		$grid[8][5][0] = 0;
	}
	else
	{
		$grid[8][5][0] = $_POST['tb85'];
	}
	if($_POST['tb86'] == "")
	{
		$grid[8][6][0] = 0;
	}
	else
	{
		$grid[8][6][0] = $_POST['tb86'];
	}
	if($_POST['tb87'] == "")
	{
		$grid[8][7][0] = 0;
	}
	else
	{
		$grid[8][7][0] = $_POST['tb87'];
	}
	if($_POST['tb88'] == "")
	{
		$grid[8][8][0] = 0;
	}
	else
	{
		$grid[8][8][0] = $_POST['tb88'];
	}
	for ($r = 0 ; $r <9 ; $r++)
	{
		for ($c = 0; $c < 9; $c++)
		{
			for ($d = 1; $d < 10; $d++)
			{
				if ($grid[$r][$c][0] != 0)
				{
					$grid[$r][$c][$d] = 0;	//sets all possible for that cell to 0 if a value was given
				}
				else
				{
					$grid[$r][$c][$d] = $d;	//fills possible if no value was given
				}
			}
		}
	}
}
function zoneCheck($v, $cr, $cc)	//value, current row, current column
{
	global $grid;
	$zr = 0;
	$zc = 0;	//zone row, zone column
	if ($cr >= 0 && $cr <= 2)		
	//determines what zone the value "v" is in. zr and zc are the coordinates of the starting element of the zone
	{
		$zr = 0;		//top row
		if ($cc >= 0 && $cc <= 2)
		{
			$zc = 0;
		}
		else if($cc >= 3 && $cc <= 5)
		{
			$zc = 3;
		}
		else if($cc >= 6 && $cc <= 8)
		{
			$zc = 6;
		}
	}
	elseif($cr >= 3 && $cr <= 5)
	{
		$zr = 3;		//middle row
		if ($cc >= 0 && $cc <= 2)
		{
			$zc = 0;
		}
		else if($cc >= 3 && $cc <= 5)
		{
			$zc = 3;
		}
		else if($cc >= 6 && $cc <= 8)
		{
			$zc = 6;
		}
	}
	elseif($cr >= 6 && $cr <= 8)
	{
		$zr = 6;		//bottom row
		if ($cc >= 0 && $cc <= 2)
		{
			$zc = 0;
		}
		else if($cc >= 3 && $cc <= 5)
		{
			$zc = 3;
		}
		else if($cc >= 6 && $cc <= 8)
		{
			$zc = 6;
		}
	}
	for ($r = $zr; $r < ($zr + 3) ; $r++)	//only searches the 3x3 zone. returns false if the zone already contains the value "v"
	{
		for ($c = $zc; $c < ($zc + 3); $c++)
		{
			if($grid[$r][$c][0] == $v)
			{
				return false;
			}
		}
	}
	return true;
}
function zoneSet($v, $cr, $cc)
{
	global $grid;
	$zr = 0;
	$zc = 0;
	if ($cr >= 0 && $cr <= 2)		
	//determines what zone the value "v" is in. zr and zc are the coordinates of the starting element of the zone
	{
		$zr = 0;
		if ($cc >= 0 && $cc <= 2)
		{
			$zc = 0;
		}
		elseif($cc >= 3 && $cc <= 5)
		{
			$zc = 3;
		}
		elseif($cc >= 6 && $cc <= 8)
		{
			$zc = 6;
		}
	}
	elseif($cr >= 3 && $cr <= 5)
	{
		$zr = 3;
		if ($cc >= 0 && $cc <= 2)
		{
			$zc = 0;
		}
		elseif($cc >= 3 && $cc <= 5)
		{
			$zc = 3;
		}
		elseif($cc >= 6 && $cc <= 8)
		{
			$zc = 6;
		}
	}
	elseif($cr >= 6 && $cr <= 8)
	{
		$zr = 6;
		if ($cc >= 0 && $cc <= 2)
		{
			$zc = 0;
		}
		elseif($cc >= 3 && $cc <= 5)
		{
			$zc = 3;
		}
		elseif($cc >= 6 && $cc <= 8)
		{
			$zc = 6;
		}
	}
	for ($r = $zr ; $r < ($zr + 3) ; $r++)
	{
		for ($c = $zc; $c < ($zc + 3); $c++)
		{
			if($grid[$r][$c][$v] == $v)	//if the possible value is available then set it to 0
			{
				$grid[$r][$c][$v] = 0;
			}
		}
	}
}
function rowCheck($v, $cr)
{
	global $grid;
	for ($c = 0; $c < 9; $c++)	//searches the given row. returns false if the row already contains the value "v"
	{
		if($grid[$cr][$c][0] == $v)
		{
			return false;
		}
	}
	return true;
}
function rowSet($v, $cr)
{
	global $grid;
	for ($c = 0; $c < 9; $c++)
	{
		if($grid[$cr][$c][$v] == $v)	//if the possible value is available then set it to 0
		{
			$grid[$cr][$c][$v] = 0;
		}
	}
}
function colCheck($v, $cc)
{
	global $grid;
	for ($r = 0; $r < 9; $r++)	//searches the given column. returns false if the column already contains the value "v"
	{
		if($grid[$r][$cc][0] == $v)
		{
			return false;
		}
	}
	return true;
}
function colSet($v, $cc)
{
	global $grid;
	for ($r = 0; $r < 9; $r++)
	{
		if($grid[$r][$cc][$v] == $v)	//if the possible value is available then set it to 0
		{
			$grid[$r][$cc][$v] = 0;
		}
	}
}
function cellCheck($v, $r, $c)	//checks a single cell for the 3 cases: row, column, and zone
{
	if (zoneCheck($v, $r, $c) && rowCheck($v, $r) && colCheck($v, $c))
	{
		return true;
	}
	else
	{
		return false;
	}
}
function setPossible()
{
	global $grid;
	$v = 0;
	for ($r = 0; $r < 9; $r++)
	{
		for ($c = 0; $c < 9; $c++)
		{
			if ($grid[$r][$c][0] != 0)	//runs through the whole grid and sets the possible values for each cell
			{
				$v = $grid[$r][$c][0];
				colSet($v, $c);
				rowSet($v, $r);
				zoneSet($v, $r, $c);
			}
		}
	}
}
function setCellLoop()	//this places values in cell's with single possibilities and unique possibilities. a cell set with exactly one possibility is set because it has no other possibilities. a cell set with unique is set because no other cell in the zone, row, or column has that specific possibility.
{
	global $grid;
	global $nextLevel;
	$count = 0;	//counts possible
	$sd = 0;	//singles possibility var.
	$changed = true;
	$tmp = array_fill(0, 8, 0);	//array of possible values for the cells in a zone/row/column
	$zr = 0;
	$zc = 0;	//zone row, zone column
	while($changed == true)
	{
		$changed = false;
		for ($r = 0; $r < 9; $r++)
		{
			for ($c = 0; $c < 9; $c++)
			{
				setPossible();
				if ($grid[$r][$c][0] == 0)
				{
					//set singles. sets a cell with exactly one possibility to that possibility. 
					for ($d = 1; $d < 10; $d++)
					{
						if ($grid[$r][$c][$d] != 0)	//if a number is found in the empty cell (cell of value 0), then search through the possibilities and count for every possiblility. also store the coord. of the current possibility found
						{
							$count++;
							$sd = $d;
						}
					}
					if($count == 1)	//if only one possibility found, use the stored coord. to change the cell value to the possibility
					{
						if($nextLevel == true)
						{
							$gridFlag[$r][$c] = 1;
						}
						$grid[$r][$c][0] = $sd;
						$changed = true;
						goto eocl;
					}
					elseif($count == 0)
					{
						goto notCorrect;
					}
					$count = 0;
												
					//for unique. if a cell holds a unique possibility compared to the possibilities of its zone, row, or column, then set the cell to that possibility
					//note: the # of possibilities is more than one. also, a cell with exactly one possibility doesn't mean its unique.
					for($i = 0; $i < 9; $i++)
					{
						$tmp[$i] = 0;
					}
					//finds unique value for zone
					if ($r >= 0 && $r <= 2)	//determines what starting cell of the zone the current cell is in. zr and zc are the coordinates of the starting element of the zone
					{
						$zr = 0;		//top row
						if ($c >= 0 && $c <= 2)
						{
							$zc = 0;
						}
						elseif($c >= 3 && $c <= 5)
						{
							$zc = 3;
						}
						elseif($c >= 6 && $c <= 8)
						{
							$zc = 6;
						}
					}
					elseif($r >= 3 && $r <= 5)
					{
						$zr = 3;		//middle row
						if ($c >= 0 && $c <= 2)
						{
							$zc = 0;
						}
						elseif($c >= 3 && $c <= 5)
						{
							$zc = 3;
						}
						elseif($c >= 6 && $c <= 8)
						{
							$zc = 6;
						}
					}
					elseif($r >= 6 && $r <= 8)
					{
						$zr = 6;		//bottom row
						if ($c >= 0 && $c <= 2)
						{
							$zc = 0;
						}
						elseif($c >= 3 && $c <= 5)
						{
							$zc = 3;
						}
						elseif($c >= 6 && $c <= 8)
						{
							$zc = 6;
						}
					}
					for ($cr = $zr; $cr < ($zr + 3); $cr++)
					{
						for ($cc = $zc; $cc < ($zc + 3); $cc++)
						{
							if($cr == $r && $cc != $c && $grid[$cr][$cc][0] == 0)
							{
								for($cd = 1; $cd < 10; $cd++)
								{
									if ($grid[$cr][$cc][$cd] != 0)
									{
										$tmp[$grid[$cr][$cc][$cd] - 1] = $grid[$cr][$cc][$cd]; //stores value of possibility into index of tmp. this prevents multiple of same value
									}
								}
							}
							elseif($cr != $r && $grid[$cr][$cc][0] == 0)
							{
								for($cd = 1; $cd < 10; $cd++)
								{
									if ($grid[$cr][$cc][$cd] != 0)
									{
										$tmp[$grid[$cr][$cc][$cd] - 1] = $grid[$cr][$cc][$cd]; //stores value of possibility into index of tmp. this prevents multiple of same value
									}
								}
							}
						}
					}
					for($d = 1; $d < 10; $d++)
					{
						if($grid[$r][$c][$d] != $tmp[$grid[$r][$c][$d] - 1] && $grid[$r][$c][$d] != 0)	//if a possible value of the cell is unique to the zone, then set the cell to that value
						{
							if($nextLevel == true)
							{
								$gridFlag[$r][$c] == 1;
							}
							$grid[$r][$c][0] = $grid[$r][$c][$d];
							$changed = true;
							goto eocl;
						}
					}
					for($i = 0; $i < 9; $i++)
					{
						$tmp[$i] = 0;
					}
					//for row
					for($cc = 0; $cc < 9; $cc++)
					{
						if($cc != $c && $grid[$r][$cc][0] == 0)
						{
							for($cd = 1; $cd < 10; $cd++)
							{
								if ($grid[$r][$cc][$cd] != 0)
								{
									$tmp[$grid[$r][$cc][$cd] - 1] = $grid[$r][$cc][$cd];
								}
							}
						}
					}
					for($d = 1; $d < 10; $d++)
					{
						if($grid[$r][$c][$d] != $tmp[$grid[$r][$c][$d] - 1]  && $grid[$r][$c][$d] != 0)	//if a possible value of the cell is unique to the row, then set the cell to that value
						{
							if($nextLevel == true)
							{
								$gridFlag[$r][$c] = 1;
							}
							$grid[$r][$c][0] = $grid[$r][$c][$d];
							$changed = true;
							goto eocl;
						}
					}
					for($i = 0; $i < 9; $i++)
					{
						$tmp[$i] = 0;
					}
					//for col
					for($cr = 0; $cr < 9; $cr++)
					{
						if($cr != $r && $grid[$cr][$c][0] == 0)
						{
							for($cd = 1; $cd < 10; $cd++)
							{
								if ($grid[$cr][$c][$cd] != 0)
								{
									$tmp[$grid[$cr][$c][$cd] - 1] = $grid[$cr][$c][$cd];
								}
							}
						}
					}
					for($d = 1; $d < 10; $d++)
					{
						if($grid[$r][$c][$d] != $tmp[$grid[$r][$c][$d] - 1]  && $grid[$r][$c][$d] != 0)	//if a possible value of the cell is unique to the column, then set the cell to that value
						{
							if($nextLevel == true)
							{
								$gridFlag[$r][$c] = 1;
							}
							$grid[$r][$c][0] = $grid[$r][$c][$d];
							$changed = true;
							goto eocl;
						}
					}
					eocl:;	//end of current loop
				}
			}
		}
	}
	notCorrect:;
}
function isSolved()		//if any cell is 0, then isSolved = false
{
	global $grid;
	for ($r = 0; $r < 9; $r++)
	{
		for ($c = 0; $c < 9; $c++)
		{
			if($grid[$r][$c][0] == 0)
			{
				return false;
			}
		}
	}
	return true;
}
function isCorrect()	//if a cell is 0 and has 9 possibilities that are all 0, then isCorrect = false
{
	global $grid;
	$count = 0;
	for ($r = 0; $r < 9; $r++)
	{
		for ($c = 0; $c < 9; $c++)
		{
			if($grid[$r][$c][0] == 0)
			{
				for($d = 1; $d < 10; $d++)
				{
					if($grid[$r][$c][$d] == 0)
					{
						$count++;
					}
				}
				if($count == 9)
				{
					return false;
				}
				else
				{
					$count = 0;
				}
			}
		}
	}
	return true;
}
function findLeastPoss(&$x, &$y, &$n)
{
	global $grid;
	$count = 0;
	$n = 9;
	for ($r = 0; $r < 9; $r++)
	{
		for ($c = 0; $c < 9; $c++)
		{
			if($grid[$r][$c][0] == 0)
			{
				for($d = 1; $d < 10; $d++)
				{
					if($grid[$r][$c][$d] != 0)
					{
						$count++;	//counts the number possible
					}
				}
				if($count < $n)
				{
					$n = $count;	//if the number possible is less than the global possible save it and the coord.
					$x = $r;
					$y = $c;
				}
				else
				{
					$count = 0;
				}
			}
		}
	}
}
function solve()
{
	global $grid;
	global $gridFlag;
	$rValue = 0;
	if(isCorrect() && !isSolved())
	{
		setCellLoop();
	}
	if(!isCorrect())
	{
		return 1;
	}
	if(isSolved())
	{
		return 0;
	}
	$nextLevel = true;
	$x = 0;
	$y = 0;
	$n = 0;	//x and y are the coord. and n is the number possible
	findLeastPoss($x, $y, $n);
	for($d = 1; $d < 10; $d++)
	{
		if($grid[$x][$y][$d] != 0)
		{
			$grid[$x][$y][0] = $grid[$x][$y][$d];	//recursively goes through and checks each possibility. if the puzzle becomes solved it bails out. if not it check the next possibility
			$rValue = solve();
			if($rValue == 0)
			{
				return 0;
			}
			for ($r = 0; $r < 9; $r++)
			{
				for ($c = 0; $c < 9; $c++)
				{
					if($gridFlag[$r][$c] == 1)	//the way the flagging system works is, a flag is placed down when a value is set for a cell after a guess is made, or after we enter the first recursive loop. if a guess is incorrect, the values set within the loop must be removed so there isn't a conflict with the next guess. the reason there is no function to remove the flags is because, the new cell values created by the setCellLoop function, after guessing, mean nothing because they are dependant upon a guess that could potentially change. Also, when setting the flagged values to 0, the setPossibility function, within the setCellLoop function, will take care of the possibilities for cells that depend on the cell being set to 0.
					{
						$grid[$r][$c][0] = 0;
					}
				}
			}
		}
	}
}
/*function outputSudoku()
{
	global $grid;
	for ($r = 0; $r < 9; $r++)
	{
		for ($c = 0; $c < 9; $c++)
		{
			print($grid[$r][$c][0] + " ");
		}
		echo "\n";
	}
	//output into form todo
}*/
if(isset($_POST['tb00']))
{
	SudokuS();
	solve();
	//outputSudoku();
}
else
{}
?>
<form name="form1" action="ssolver.php" method="post">
<table border="1">
<tr><td>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[0][0][0];};?>" name="tb00" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[0][1][0];};?>" name="tb01" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[0][2][0];};?>" name="tb02" size="1" maxlength="1" />
<br>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[1][0][0];};?>" name="tb10" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[1][1][0];};?>" name="tb11" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[1][2][0];};?>" name="tb12" size="1" maxlength="1" />
<br>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[2][0][0];};?>" name="tb20" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[2][1][0];};?>" name="tb21" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[2][2][0];};?>" name="tb22" size="1" maxlength="1" /></td><td>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[0][3][0];};?>" name="tb03" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[0][4][0];};?>" name="tb04" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[0][5][0];};?>" name="tb05" size="1" maxlength="1" />
<br>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[1][3][0];};?>" name="tb13" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[1][4][0];};?>" name="tb14" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[1][5][0];};?>" name="tb15" size="1" maxlength="1" />
<br>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[2][3][0];};?>" name="tb23" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[2][4][0];};?>" name="tb24" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[2][5][0];};?>" name="tb25" size="1" maxlength="1" /></td><td>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[0][6][0];};?>" name="tb06" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[0][7][0];};?>" name="tb07" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[0][8][0];};?>" name="tb08" size="1" maxlength="1" />
<br>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[1][6][0];};?>" name="tb16" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[1][7][0];};?>" name="tb17" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[1][8][0];};?>" name="tb18" size="1" maxlength="1" />
<br>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[2][6][0];};?>" name="tb26" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[2][7][0];};?>" name="tb27" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[2][8][0];};?>" name="tb28" size="1" maxlength="1" /></td></tr><tr><td>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[3][0][0];};?>" name="tb30" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[3][1][0];};?>" name="tb31" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[3][2][0];};?>" name="tb32" size="1" maxlength="1" />
<br>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[4][0][0];};?>" name="tb40" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[4][1][0];};?>" name="tb41" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[4][2][0];};?>" name="tb42" size="1" maxlength="1" />
<br>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[5][0][0];};?>" name="tb50" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[5][1][0];};?>" name="tb51" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[5][2][0];};?>" name="tb52" size="1" maxlength="1" /></td><td>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[3][3][0];};?>" name="tb33" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[3][4][0];};?>" name="tb34" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[3][5][0];};?>" name="tb35" size="1" maxlength="1" />
<br>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[4][3][0];};?>" name="tb43" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[4][4][0];};?>" name="tb44" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[4][5][0];};?>" name="tb45" size="1" maxlength="1" />
<br>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[5][3][0];};?>" name="tb53" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[5][4][0];};?>" name="tb54" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[5][5][0];};?>" name="tb55" size="1" maxlength="1" /></td><td>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[3][6][0];};?>" name="tb36" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[3][7][0];};?>" name="tb37" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[3][8][0];};?>" name="tb38" size="1" maxlength="1" />
<br>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[4][6][0];};?>" name="tb46" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[4][7][0];};?>" name="tb47" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[4][8][0];};?>" name="tb48" size="1" maxlength="1" />
<br>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[5][6][0];};?>" name="tb56" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[5][7][0];};?>" name="tb57" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[5][8][0];};?>" name="tb58" size="1" maxlength="1" /></td></tr><tr><td>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[6][0][0];};?>" name="tb60" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[6][1][0];};?>" name="tb61" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[6][2][0];};?>" name="tb62" size="1" maxlength="1" />
<br>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[7][0][0];};?>" name="tb70" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[7][1][0];};?>" name="tb71" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[7][2][0];};?>" name="tb72" size="1" maxlength="1" />
<br>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[8][0][0];};?>" name="tb80" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[8][1][0];};?>" name="tb81" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[8][2][0];};?>" name="tb82" size="1" maxlength="1" /></td><td>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[6][3][0];};?>" name="tb63" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[6][4][0];};?>" name="tb64" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[6][5][0];};?>" name="tb65" size="1" maxlength="1" />
<br>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[7][3][0];};?>" name="tb73" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[7][4][0];};?>" name="tb74" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[7][5][0];};?>" name="tb75" size="1" maxlength="1" />
<br>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[8][3][0];};?>" name="tb83" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[8][4][0];};?>" name="tb84" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[8][5][0];};?>" name="tb85" size="1" maxlength="1" /></td><td>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[6][6][0];};?>" name="tb66" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[6][7][0];};?>" name="tb67" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[6][8][0];};?>" name="tb68" size="1" maxlength="1" />
<br>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[7][6][0];};?>" name="tb76" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[7][7][0];};?>" name="tb77" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[7][8][0];};?>" name="tb78" size="1" maxlength="1" />
<br>
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[8][6][0];};?>" name="tb86" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[8][7][0];};?>" name="tb87" size="1" maxlength="1" />
<input type="text" value="<?php if($grid[0][0][0] == 0) {echo "";} else {echo $grid[8][8][0];};?>" name="tb88" size="1" maxlength="1" /></td></tr>
</table>
<br><br>
<input  value="submit" type="Submit">
</form>

</body>
</html>
