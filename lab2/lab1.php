
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>LAB1</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>

	<div class="arrayForm">
		<form method="post">
			<h3>Введите <br> 2 массива</h3>
				<div class="form-row">
					<input type="text" id="array1" name="arr1" required><label for="array1"> Массив 1</label><br>
					<input type="text" id="array2" name="arr2" required><label for="array2"> Массив 2</label><br>
				</div>
			<br><input type="submit">
			<h2>Ответ:</h2>
		</form>
	</div>

	<div class="otvet">
    		<?php  

   				if(isset($_POST['arr1']) and isset($_POST['arr2'])){
       
       				if ( (preg_match("#^[0-9,]+$#",$_POST['arr1'])) and (preg_match("#^[0-9,]+$#",$_POST['arr2'])) ) {
			
	       			 $arr1 = str_replace(" ", "", $_POST['arr1']);
	        		 $arr2 = str_replace(" ", "", $_POST['arr2']);
	        		 $arr1 = explode(",", $arr1);
	                 $arr2 = explode(",", $arr2);
	        
	        		 echo '<br>';

	        		 foreach($arr2 as $element)
	            		$arr1[] = $element;

	        		 echo '<br>';
					 
	        		 foreach($arr1 as $el)
	            		if((intval($el) % 2 == 0))
						
	                	echo '<div class="fontOTVET">'.$el .'</div>';        

					} else {
			   		echo "Есть недопустимые символы. Вводите цифры через запятые!";
					}
    			}
			?> 
	</div>
</body>
</html>