<?php
  session_start();
  
  if(isset($_SESSION['iduser']))
  {
	  	
  }
  else
		{
		$_SESSION['blad'] = '<span style="color:red">Nie jesteś zalogowany!</span>';
		
		header('Location: logowanie.php?dys=1');
		exit();
		}
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>MPS Group & 2MOTO3</title>
	<link href="moje_style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="mobile_style.css" rel="stylesheet" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Encode+Sans+Condensed&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Elsie&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Gruppo&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<meta name="viewport" content="width=device-width" />
	<script type="text/javascript" src="skrypty.js"></script>
	<script type="text/javascript" src="function_dyspo.js"></script>
</head>


<body>

		<?php
		if(isset($_SESSION['zalogowany_user']))
		{
		echo '<nav>
			<a href="index.php">O nas</a>
			<a href="user.php">Główny panel</a>
			<a href="kontakt.php">Kontakt</a>
			<div class="animation start-logowanie"></div>
			</nav>';
		}
		if(isset($_SESSION['zalogowany_admin']))
		{
			echo '<nav>
			<a href="index.php">O nas</a>
			<a href="admin.php">Główny panel</a>
			<a href="kontakt.php">Kontakt</a>
			<div class="animation start-logowanie"></div>
			</nav>';
		}
		?>

<hr style="width: 75%; margin-top: 35px; margin-bottom: 35px" />

<div class="srodek">

	<div class="login_rog">
      <div class="do_prawej">
		<?
		echo $_SESSION['powitanie'];
		?>
		<a href="logout.php"><input type="button" class="close" value=X> </a>
		</div>
	</div>



<!--logowanie-->
<div id="panel_newd">
	<?php
	date_default_timezone_set("Europe/Warsaw");
			$day   = date('j'); // dzień
		$month = date('n'); // miesiąc
		$year  = date('Y'); // rok
		$dow = date('N'); //dzień tygodnia dow= day_of_week
		$tydzien = date("W"); //numer tygodnia
        $week = date("W"); //numer tygodnia

			
		if ($dow ==1) {$nazwa_day="poniedziałek"; } 
		if ($dow ==2) {$nazwa_day="wtorek";}
		if ($dow ==3) {$nazwa_day="środa";}
		if ($dow ==4) {$nazwa_day="czwartek";}
		if ($dow ==5) {$nazwa_day="piątek";}
		if ($dow ==6) {$nazwa_day="sobota";}
		if ($dow ==7) {$nazwa_day="niedziela";}
			
		if ($month ==1) $nazwa_miesiac="stycznia";
		if ($month ==2) $nazwa_miesiac="lutego";
		if ($month ==3) $nazwa_miesiac="marca";
		if ($month ==4) $nazwa_miesiac="kwietnia";
		if ($month ==5) $nazwa_miesiac="maja";
		if ($month ==6) $nazwa_miesiac="czerwca";
		if ($month ==7) $nazwa_miesiac="lipca";
		if ($month ==8) $nazwa_miesiac="sierpnia";
		if ($month ==9) $nazwa_miesiac="września";
		if ($month ==10) $nazwa_miesiac="października";
		if ($month ==11) $nazwa_miesiac="listopada";
		if ($month ==12) $nazwa_miesiac="grudnia";

	
        echo '<br><p style="color:red">UWAGA!! Na tej stronie deklarujesz swoją dyspozycyjność tylko i wyłącznie dla pracy na uber/bolt</p>';
        echo '<br>Aby wysłać dyspozycję na DeliGoo kliknij <a href="nowa_deligoo.php">tutaj</a>';


		echo '<div style="margin:auto; text-align:center"><br>Dzisaj jest '
			.$nazwa_day. ', <b> '.$day.'. </b> dzień '.$nazwa_miesiac.' '.$year.'r.';

            
			
		?>
				<script type="text/javascript">
				<!-- Ukrycie przed przeglądarkami nie obsługującymi JavaScriptów
				setInterval('sprawdz();', 1000);

				function rokPrzestepny(rok)
				{
				  return ((rok % 4 == 0) && ((rok % 100 != 0) || (rok % 400 == 0)));
				}

				  data = new Date();

				  var rok = data.getYear();
				  if (rok < 1000) rok = 2000 + rok - 100;

				  var miesiac = data.getMonth() + 1;
				  var dzienTygodnia = data.getDay();
				  var dzienMiesiaca = data.getDate();

				  var tempDate = new Date(rok, miesiac - 1, 1);
				  var pierwszyDzienMiesiaca = tempDate.getDay();

				  if(dzienTygodnia == 0) dzienTygodnia = 7;
				  if(pierwszyDzienMiesiaca == 0) pierwszyDzienMiesiaca = 7;

				  switch(miesiac){
					case 1 : nazwaMiesiaca = "Styczeń";
							 dniWMiesiacu = 31;
							 break;
					case 2 : nazwaMiesiaca = "Luty";
							 dniWMiesiacu = rokPrzestepny(rok)?29:28;
							 break;
					case 3 : nazwaMiesiaca = "Marzec";
							 dniWMiesiacu = 31;
							 break;
					case 4 : nazwaMiesiaca = "Kwiecień";
							 dniWMiesiacu = 30;
							 break;
					case 5 : nazwaMiesiaca = "Maj";
							 dniWMiesiacu = 31;
							 break;
					case 6 : nazwaMiesiaca = "Czerwiec";
							 dniWMiesiacu = 30;
							 break;
					case 7 : nazwaMiesiaca = "Lipiec";
							 dniWMiesiacu = 31;
							 break;
					case 8 : nazwaMiesiaca = "Sierpień";
							 dniWMiesiacu = 31;
							 break;
					case 9 : nazwaMiesiaca = "Wrzesień";
							 dniWMiesiacu = 30;
							 break;
					case 10 : nazwaMiesiaca = "Październik";
							 dniWMiesiacu = 31;
							 break;
					case 11 : nazwaMiesiaca = "Listopad";
							 dniWMiesiacu = 30;
							 break;
					case 12 : nazwaMiesiaca = "Grudzień";
							 dniWMiesiacu = 31;
							 break;
				  }

				  document.write("<TABLE style='width: 150px; margin-left: auto; margin-right: auto; border: 1px solid #000;'><TR>");
				  document.write("<TD bgcolor='yellow' align='center' colspan='7'>");
				  document.write(nazwaMiesiaca + " " + rok);
				  document.write("</TD></TR><TR>");

				  document.write("<TR>");
				  document.write("<TD align='center' width='15%' bgcolor='pink'>Pn</TD>");
				  document.write("<TD align='center' width='15%'bgcolor='pink'>Wt</TD>");
				  document.write("<TD align='center' width='15%'bgcolor='pink'>Sr</TD>");
				  document.write("<TD align='center' width='15%'bgcolor='pink'>Cz</TD>");
				  document.write("<TD align='center' width='15%'bgcolor='pink'>Pi</TD>");
				  document.write("<TD align='center' width='15%'bgcolor='pink'>So</TD>");
				  document.write("<TD align='center' width='15%'bgcolor='pink'>Nd</TD>");
				  document.write("</TR>");

				  var j = dniWMiesiacu + pierwszyDzienMiesiaca - 1;

				  for(var i = 0; i < j; i++){
					if(i < pierwszyDzienMiesiaca - 1){
					  document.write("<TD bgcolor='white'></TD>");
					  continue;
					}
					if((i % 7) == 0){
					  document.write("</TR><TR>");
					}
					if((i - pierwszyDzienMiesiaca + 2) == dzienMiesiaca){
					  color = "yellow";
					}
					else{
					  color = "white";
					}
					document.write("<TD bgcolor='" + color + "' align='center'>");
					document.write(i - pierwszyDzienMiesiaca + 2);
					document.write("</TD>");
				  }
				  document.write("</TR></TABLE>");

				// Koniec kodu JavaScript -->
				</script>
				
		<?	
		include("funkcje.php");
		
		echo 'Aktualny tydzień to: <b>' .$tydzien.'</B><br><br><br></div>';
			
		if(isset($_SESSION['sukces_baza']))
		{
			echo $_SESSION['sukces_baza'];
			echo $_SESSION['send_ok'];
			unset($_SESSION['sukces_baza']);
			unset($_SESSION['send_ok']);
		}
		else
		{	

				if ($tydzien == 52) $tydzien = 1;
				else $tydzien++;
			
				$juser=$_SESSION['iduser'];
				$zwrocenie = sprawdz_puste("uber", $juser, $tydzien);
				$czy_wyslana_juz = if_dyspo_exist("uber", $juser, $tydzien);

                
                $czy_podwojna_dyspozycja = doubleweek($week);
                if ($czy_podwojna_dyspozycja === "TAK")
                {

                }
                else
                {
                    if ($zwrocenie == 0) 
                    {

                        if ($czy_wyslana_juz === 0)
                        {
                            if ($dow < 3) 
                            {
                                echo '<div style="margin: 15px auto; width: 80%">Domyślnie dyspozycja zapisuje się na kolejny tydzień tj. <b>week '.$tydzien.'</b></div>';

                                //checkbox dla tych, którzy całkowicie rezygnują z jazdy w danym tygodniu
                                echo '
                                <div id="ramka_ladna">
                                    
                                    <div style="font-size: 14px;font-family: Encode Sans Condensed, sans-serif;">
                                        <input type="checkbox" id="brakjazdy_check" name="brakjazdy_check""> 
                                        Nie chcę pracować w tym tygodniu('.$tydzien.') jako kierowca Uber/Bolt
                                    </div>
                                </div>';

                                echo'<form id="form_dyspo" action="send_dyspo.php" method="post" style="display: block">';
                                
                                $_SESSION['numer_tygodnia']=$tydzien;
                            }

                            if($dow >2 && $dow<5) 
                            {
                                
                                echo '<span style="color:red; font-size:22px; padding: 10px">Dyspozycja na kolejny tydzień ('.$tydzien.') powinna być wysłana do wtorku do północy, a dzisiaj jest <b>'.$nazwa_day.'</b>!!<br></span>';
                                echo '<div style="font-size:18px; width:70%; border:1px solid black; margin: 0 auto 15px; padding:5px">W wyjątkowych sytuacjach dopuszczalne jest wysłanie zaległej dyspozycji do czwartku do północy, jednak musisz się liczyć z tym, że Twoja dyspozycja może być brana pod uwagę w <b>ostatniej kolejności.</b></div>';

                                //checkbox dla tych, którzy całkowicie rezygnują z jazdy w danym tygodniu
                                echo '
                                <div id="ramka_ladna">
                                    
                                    <div style="font-size: 14px;font-family: Encode Sans Condensed, sans-serif;">
                                        <input type="checkbox" id="brakjazdy_check" name="brakjazdy_check""> 
                                        Nie chcę pracować w tym tygodniu('.$tydzien.') jako kierowca Uber/Bolt
                                    </div>
                                </div>';

                                echo'<form id="form_dyspo" action="send_dyspo.php" method="post" style="display: block">';
                            
                                $_SESSION['numer_tygodnia']=$tydzien;
                            }

                            if ($dow>4)
                            {
                                $tydzien++;
                                echo '<div style="margin: 15px auto; width: 80%">Dyspozycję na <b>'.$tydzien.' tydzień </b>będziesz mógł wysłać dopiero w najbliższy poniedziałek</div>';
                                echo '<p class="small">Jeżeli chcesz dopisać się do grafiku, napisz za pośrednictwem aplikacji Whatsapp (wiadomość prywatna na numer biurowy - samochód oraz godziny, w których chcesz pracować)</p>';
                                echo'<form id="form_dyspo" action="send_deligoo.php" method="post" style="display: none">';
                                $_SESSION['numer_tygodnia']=$tydzien;
                            }
                        }
                        else
                        {
                            echo '<div id="ramka_ladna">Wysłałeś już dyspozycję na <b> tydzień '.$tydzien.'</b> i wygląda ona wygląda następująco: <br>';
                            echo $czy_wyslana_juz;
                            echo '</div>';
                            echo'<form id="form_dyspo" action="send_dyspo25.php" method="post" style="display: none">';
                        }

                    }
                    else
                    {
                        echo '<span style="color:red; font-size:20px; padding: 10px">Nie możesz wysłać kolejnej dyspozycji, ponieważ w dniu <b>'.$zwrocenie.'</b> została zarejestrowana przez Ciebie "pusta" dyspozycja.</span>';
                        echo'<form id="form_dyspo" action="send_dyspo25.php" method="post" style="display: none">';
                    } 
                }
				
		}	
			?>
		
			
			
				<?
				/*wyświetlanie numeru tygodnia w polu wyboru
				
					echo '<select name="nr_tyg">';
					echo '<option  selected disabled hidden>'.$tydzien.'</option>';
					$tydzien++;
					echo '<option name="numer">'.$tydzien.'</option>';
					$tydzien++;
					echo '<option name="numer">'.$tydzien.'</option>';
					echo  "</select>";
		
					// dodanie jedynki do miesiąca
					//$month++;

					// sprawdzenie czy licznik się nie przekręcił
					//if ($month == 13) {
					//   $month = 1;
					//   $year++;
					//}
				*/
				?>

	<?

	

		if(isset($_SESSION['sukces_baza']))
		{
			 echo $_SESSION['sukces_baza'];
			 unset($_SESSION['sukces_baza']);
		}
		if(isset($_SESSION['send_ok'])) 
		{
			echo $_SESSION['send_ok'];
			unset($_SESSION['send_ok']);
		}

	?>
    <br><br>
    <label id="label1" for="number">Poniedziałek</label>
	<?
			if(isset($_SESSION['blad_dyspo1'])) echo $_SESSION['blad_dyspo1'];
			if(isset($_SESSION['brak1_dyspo1'])) echo $_SESSION['brak1_dyspo1'];
	?>
    Start:  <input type="number" id="godzina" name="l_1" min="1" max="24" value="<?php
			if (isset($_SESSION['start1']))
			{
				echo $_SESSION['start1'];
				unset($_SESSION['start1']);
			}
		?>">  Koniec: <input type="number" id="godzina" name="p_1" min="1" max="24" value="<?php
			if (isset($_SESSION['koniec1']))
			{
				echo $_SESSION['koniec1'];
				unset($_SESSION['koniec1']);
			}
		?>">
	<?php
		if ($_SESSION['check1']==1)
		{
			echo '<div style="font-size: 14px;font-family: Encode Sans Condensed, sans-serif;"><input type="checkbox" id="check_1" name="check_1" checked> Nie chcę jeździć w tym dniu</div>';
		}
		else
		{
			echo '<div style="font-size: 14px;font-family: Encode Sans Condensed, sans-serif;"><input type="checkbox" id="check_1" name="check_1"> Nie chcę jeździć w tym dniu</div>';
		}
	?>
	

		
		


    <br>
	
	<label id="label1" for="number">Wtorek</label>
	<?php
			if(isset($_SESSION['blad_dyspo2'])) echo $_SESSION['blad_dyspo2'];
			if(isset($_SESSION['brak1_dyspo2'])) echo $_SESSION['brak1_dyspo2'];
	?>
    Start:  <input type="number" id="godzina" name="l_2" min="1" max="24" value="
			<?php
			if (isset($_SESSION['start2']))
			{
				echo $_SESSION['start2'];
				unset($_SESSION['start2']);
			}
			?>
			">  
	Koniec: <input type="number" id="godzina" name="p_2" min="1" max="24" value="<?php
			if (isset($_SESSION['koniec2']))
			{
				echo $_SESSION['koniec2'];
				unset($_SESSION['koniec2']);
			}
		?>">
	<?php
		if ($_SESSION['check2']==1)
		{
			echo '<div style="font-size: 14px;font-family: Encode Sans Condensed, sans-serif;"><input type="checkbox" id="check_2" name="check_2" checked> Nie chcę jeździć w tym dniu</div>';
		}
		else
		{
			echo '<div style="font-size: 14px;font-family: Encode Sans Condensed, sans-serif;"><input type="checkbox" id="check_2" name="check_2"> Nie chcę jeździć w tym dniu</div>';
		}
	?>
	
	
	



	<br><label id="label1" for="number">Środa</label>
	<?php
			if(isset($_SESSION['blad_dyspo3'])) echo $_SESSION['blad_dyspo3'];
			if(isset($_SESSION['brak1_dyspo3'])) echo $_SESSION['brak1_dyspo3'];
	?>
    Start:  <input type="number" id="godzina" name="l_3" min="1" max="24" value="<?php
			if (isset($_SESSION['start3']))
			{
				echo $_SESSION['start3'];
				unset($_SESSION['start3']);
			}
		?>">  Koniec: <input type="number" id="godzina" name="p_3" min="1" max="24" value="<?php
			if (isset($_SESSION['koniec3']))
			{
				echo $_SESSION['koniec3'];
				unset($_SESSION['koniec3']);
			}
		?>">
	<?php
	if ($_SESSION['check3']==1)
	{
		echo '<div style="font-size: 14px;font-family: Encode Sans Condensed, sans-serif;"><input type="checkbox" id="check_3" name="check_3" checked> Nie chcę jeździć w tym dniu</div>';
	}
	else
	{
		echo '<div style="font-size: 14px;font-family: Encode Sans Condensed, sans-serif;"><input type="checkbox" id="check_3" name="check_3"> Nie chcę jeździć w tym dniu</div>';
	}
	?>


	<br><label id="label1"for="number">Czwartek</label>
	<?php
			if(isset($_SESSION['blad_dyspo4'])) echo $_SESSION['blad_dyspo4'];
			if(isset($_SESSION['brak1_dyspo4'])) echo $_SESSION['brak1_dyspo4'];
	?>
    Start:  <input type="number" id="godzina" name="l_4" min="1" max="24" value="<?php
			if (isset($_SESSION['start4']))
			{
				echo $_SESSION['start4'];
				unset($_SESSION['start4']);
			}
		?>">  Koniec: <input type="number" id="godzina" name="p_4" min="1" max="24" value="<?php
			if (isset($_SESSION['koniec4']))
			{
				echo $_SESSION['koniec4'];
				unset($_SESSION['koniec4']);
			}
		?>">
	<?php
	if ($_SESSION['check4']==1)
	{
		echo '<div style="font-size: 14px;font-family: Encode Sans Condensed, sans-serif;"><input type="checkbox" id="check_4" name="check_4" checked> Nie chcę jeździć w tym dniu</div>';
	}
	else
	{
		echo '<div style="font-size: 14px;font-family: Encode Sans Condensed, sans-serif;"><input type="checkbox" id="check_4" name="check_4"> Nie chcę jeździć w tym dniu</div>';
	}
	?>
	
	

	<br><label id="label1" for="number">Piątek</label>
	<?php
			if(isset($_SESSION['blad_dyspo5'])) echo $_SESSION['blad_dyspo5'];
			if(isset($_SESSION['brak1_dyspo5'])) echo $_SESSION['brak1_dyspo5'];
	?>
    Start:  <input type="number" id="godzina" name="l_5" min="1" max="24" value="<?php
			if (isset($_SESSION['start5']))
			{
				echo $_SESSION['start5'];
				unset($_SESSION['start5']);
			}
		?>">  Koniec: <input type="number" id="godzina" name="p_5" min="1" max="24" value="<?php
			if (isset($_SESSION['koniec5']))
			{
				echo $_SESSION['koniec5'];
				unset($_SESSION['koniec5']);
			}
		?>">
	<?php
	if ($_SESSION['check5']==1)
	{
		echo '<div style="font-size: 14px;font-family: Encode Sans Condensed, sans-serif;"><input type="checkbox" id="check_5" name="check_5" checked> Nie chcę jeździć w tym dniu</div>';
	}
	else
	{
		echo '<div style="font-size: 14px;font-family: Encode Sans Condensed, sans-serif;"><input type="checkbox" id="check_5" name="check_5"> Nie chcę jeździć w tym dniu</div>';
	}
	?>
	
	

	<br><label id="label1" for="number">Sobota</label>
	<?php
			if(isset($_SESSION['blad_dyspo6'])) echo $_SESSION['blad_dyspo6'];
			if(isset($_SESSION['brak1_dyspo6'])) echo $_SESSION['brak1_dyspo6'];
	?>
    Start:  <input type="number" id="godzina" name="l_6" min="1" max="24" value="<?php
			if (isset($_SESSION['start6']))
			{
				echo $_SESSION['start6'];
				unset($_SESSION['start6']);
			}
		?>">  Koniec: <input type="number" id="godzina" name="p_6" min="1" max="24" value="<?php
			if (isset($_SESSION['koniec6']))
			{
				echo $_SESSION['koniec6'];
				unset($_SESSION['koniec6']);
			}
		?>">
	<?php
	if ($_SESSION['check6']==1)
	{
		echo '<div style="font-size: 14px;font-family: Encode Sans Condensed, sans-serif;"><input type="checkbox" id="check_6" name="check_6" checked> Nie chcę jeździć w tym dniu</div>';
	}
	else
	{
		echo '<div style="font-size: 14px;font-family: Encode Sans Condensed, sans-serif;"><input type="checkbox" id="check_6" name="check_6"> Nie chcę jeździć w tym dniu</div>';
	}
	?>
	
	

	<br><label id="label1" for="number">Niedziela</label>
	<?php
			if(isset($_SESSION['blad_dyspo7'])) echo $_SESSION['blad_dyspo7'];
			if(isset($_SESSION['brak1_dyspo7'])) echo $_SESSION['brak1_dyspo7'];
	?>
    Start:  <input type="number" id="godzina" name="l_7" min="1" max="24" value="<?php
			if (isset($_SESSION['start7']))
			{
				echo $_SESSION['start7'];
				unset($_SESSION['start7']);
			}
		?>">  Koniec: <input type="number" id="godzina" name="p_7" min="1" max="24" value="<?php
			if (isset($_SESSION['koniec7']))
			{
				echo $_SESSION['koniec7'];
				unset($_SESSION['koniec7']);
			}
		?>">
	<?php
	if ($_SESSION['check7']==1)
	{
		echo '<div style="font-size: 14px;font-family: Encode Sans Condensed, sans-serif;"><input type="checkbox" id="check_7" name="check_7" checked> Nie chcę jeździć w tym dniu</div>';
	}
	else
	{
		echo '<div style="font-size: 14px;font-family: Encode Sans Condensed, sans-serif;"><input type="checkbox" id="check_7" name="check_7"> Nie chcę jeździć w tym dniu</div>';
	}
	?>
    
	

	<br>
   <input type="submit" id="button1" value="Wyślij" /> 
    <br><br>

  </form>


 	<form id="pusty_formularz" action="send_nulluber.php" method="post" style="display: none">
	<input type="submit" id="button" value="Potwierdź" />
	</form>
  </div>
	
	
	
</div>

		
<hr style="width: 85%; margin-top: 35px; margin-bottom: 35px" />

        
 <ul>
        <li>

		<p4>2MOTO3</p4><br>
		Mateusz Mijas<br>
		ul. Na Brzezie 18B/2<br>
		32-085 Modlniczka<br>
		</li>
		
        <li><a href="polityka_prywatnosci.php">Polityka prywatności</a></li>
		
        <li>
		<p4>MPS Group</p4><br>
		Maciej Pszczoła <br>
		Wysiołek Luborzycki 203<br>
		32-010 Kocmyrzów-Luborzyca<br>
		</li>
</ul>
		

  
  
  
  
</body>

</html>