<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <img src="img/foto.jpg" alt="php" width="250" height="250" style="float:right">                    
                </div>

                <div class="fullname">
                    <p> Зовут меня 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'Прибыл я из города', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне всего 
                    <?php  echo $age;   ?>          
                    лет. </p><br>
					<p> Позволь поведать тебе мою историю: </p>
                    <p> Однажды в студенную зимнюю пору, </p>
                    <p> Я из лесу вышел и обратно зашел. </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    
					<?php
					 if(!empty($_POST))
					 {
					     $pr = $_POST['value'];

							if($pr > 0 && $pr < 25)
								 $d = '		Это число находится между 0 и 25';
									elseif($pr > 25 && $pr < 50)
									$d = '		Это число находится между 25 и 50';
										elseif($pr > 50 && $pr < 75)
										$d = '		Это число находится между 50 и 75';	
											elseif($pr > 75 && $pr < 100)
											$d = '		Это число находится между 75 и 100';
												elseif($pr == 0)
												$d = '		Твое число - 0';
													elseif($pr == 25)
													$d = '		Твое число - 25';
														elseif($pr == 50)
														$d = '		Твое число - 50';
															elseif($pr == 75)
															$d = '		Твое число - 75';
																elseif($pr == 100)
																$d = '		Твое число - 100';
																	elseif($pr > 100)
																	$d = '		Мы вроде договорились что число будет между 0 и 100.:)';
																	
                     }                
                    ?>
					
                     

			
            </div>

			<div class="result"><br><br>
                <p class="text">
                    <?php
					 if(!empty($d))
					 {
                        echo $d;  
						
					 }
                    ?> <br>
                </p><br>
            </div>

			<div class="motivation"><br><br>
                <p class="text">
                    <?php
					 if(!empty($d))
					 {
                        echo $a. '<br>';  
						echo $b. '<br>';  
						
					 }
                    ?> <br>
                </p><br>
            </div>

            <!-- <div class="article"><br><br>
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias! 
                    Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
                </p><br>
            </div> -->
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
