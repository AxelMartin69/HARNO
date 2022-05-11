<!DOCTYPE html>
<html lang="et">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, inital-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://kit.fontawesome.com/882cac8f18.js" crossorigin="anonymous"></script>

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<link rel="stylesheet" href="css/style.css">
	<title>Henno</title>
</head>
<!-- Logod -->
<body class="grey lighten-5">
	<div class="container">
		<div class="row">
			<img src="logos/EML logo vektoris-01.png" alt="EML logo" class="logo">
			<img src="logos/Haridus- ja Noorteamet_3lovi_est_rgb.jpg" alt="HARNO logo" class="logo">
			<img src="" alt="HTM logo">



			<div class="col s2 offset-s2 card-panel teal lighten-2 center-align"><a href='index.php' class="black-text">EST</a> / <a href='rus.php' class="black-text">RUS</a></div>
		</div>
		<div class='row'>
			<div class='col s6' id="text">
				<h4>Oled hädas kvalifitseeritud tööjõu leidmisega ja järel-kasvu kindlustamisega?</h4>
				<h6>Uus profiõppe pilootmudel pakub lahendust, mis kasvatab kutseoskustega noori töötajaid, kes vastavad just Sinu ettevõtte vajadustele.</h6>
				<h6>Profiõpe viib kokku kutsekooli, metalliettevõtte ja erialast tööd otsiva noore, kes on juba omandanud keskhariduse. Kolmepoolse kokkuleppe alusel toimub kutseõpe paralleelselt töösuhte alustamisega ettevõttes.</h6>
				<h6>See tagab kiirema, kvaliteetsema ja täpselt ettevõtte vajadustele vastava uue meistri kujunemise - see ongi profiõpe.</h6>
			</div>
			<div class='col s6' id="pic"></div>
		</div>
		<div class='row logos'>
			<img src='' alt='VOCO logo' class="logo">
			<img src='logos/ivkhk_logo_uus.png' alt='IdaViru logo' class="logo">
			<img src='logos/vikk100-web-logo.png' alt='Viljadi kutsekas logo' class="logo">
			<img src='logos/pkhk-logo.png' alt='Pärnu kutsekas logo' class="logo">
			<img src='logos/rakvere.jpg' alt='Rakvere kutsekas logo' class="logo">
			<img src='logos/vorumaa-kutsehariduskeskus.png' alt='Võru kutsekas logo' class="logo">
			<img src='logos/lasnamäe.jpg' alt='Lasnamäe kutsekas logo' class="logo">
		</div>
		<div class='row'>
			<h6>Koostöös metallierialasid õpetavate kutsekoolidega piloteerime töökohapõhist profiõpet kolmel erialal. Palun anna meile oma huvist ja võimalikest eelistustest märku - milliste erialade proffide järelkasvu Sinu ettevõte täna ja tulevikus kõige olulisemaks peab?</h6>
		</div>
		<div class='row'>
			<div class='col s4 center-align'>
				<img src=<?php echo "''"; ?> alt=<?php echo "'CNC'"; ?>>
				<br>
				<br>
				<label>
					<input type="checkbox" class="filled-in checkbox-blue-grey" />
					<span class="black-tetx"><?php echo 'CNC operaator'; ?></span>
				</label>
				<br>
				<br>
				<code>CNC operaatori profiõpe sisaldab metallilõikepinkide programmeerimist ja ka täpsust nõudvaid käelisi oskusi. Õppe käigus on võimalik spetsialiseeruda CNC treipingi või CNC freespingi operaatoriks. Õppe aluseks on CNC metallilõikepingi operaatori õppekava.</code>
			</div>
			<div class='col s4 center-align'>
				<img src=<?php echo "''"; ?> alt=<?php echo "'Koostelukksepp'"; ?>>
				<br>
				<br>
				<label>
					<input type="checkbox" class="filled-in" />
					<span class="black-tetx"><?php echo 'Koostelukksepp'; ?></span>
				</label>
				<br>
				<br>
				<code>Koostelukksepa tööülesanded on toorikute ettevalmistamine, detailide mõõtmine, märkimine, töötlemine, puhastamine ning koostude koostamine ja reguleerimine. See eeldab jooniste lugemise oskust, masinaehitus-tehnoloogia ja kasutatavate materjalide tundmist.</code>
			</div>
			<div class='col s4 center-align'>
				<img src=<?php echo "''"; ?> alt=<?php echo "'Keevitaja'"; ?>>
				<br>
				<br>
				<label>
					<input type="checkbox" class="filled-in" />
					<span class="black-tetx"><?php echo 'Keevitaja'; ?></span>
				</label>
				<br>
				<br>
				<code>Keevitaja valmistab detaile ja kooste, kasutades erinevaid keevitusseadmeid, lähtudes tööjoonisest, töötlemistehnoloogiatest, tööprotsessidest, töövahenditest ja töödeldavatest materjalidest.</code>

			</div>

		</div>
		<div class='row'>
			<h5 class="col s6">Või hoopis mõni muu eriala?</h5>
			<div class="input-field col s6">
				<input id="muu" type="text" class="validate">
				<label for="muu">Kirjuta siia</label>
			</div>
		</div>

		<div class='row'>
			<div class='text'>
				<h1>Kui hästi profiõpe Sinu ettevõttele sobida võiks?</h1>
				<p>Palun jaga meiega lisainfot oma ettevõtte
					tausta ja vajaduste kohta, et saaksime
					hinnata uue loodava profiõppe mudeli
					sobivust Sinu ettevõttesse uute
					professionaalsete töötajate koolitamiseks.</p>
			</div>
			<div class='pic'></div>
		</div>
<!-- input query -->
		<div class='row'>
			<div class="input-field">
				<input id="1" type="text" class="validate">
				<label for="1">Ettevõtte nimi</label>
			</div>
			<div class="input-field">
				<input id="2" type="text" class="validate">
				<label for="2">Kes tegeleb Sinu ettevõttes uute inimeste, sh praktikantide vastuvõtmisega?</label>
			</div>
			<div class="input-field">
				<input id="3" type="text" class="validate">
				<label for="3">Milline on Sinu ettevõtte võimekus ja kogemus praktikantide personaalsel juhendamisel?</label>
			</div>
			<div class="input-field">
				<input id="4" type="text" class="validate">
				<label for="4">Kas Sinu ettevõte on valmis lepinguga tööle võtma noore, kes samal ajal õpib kutsekoolis vajalikku eriala</label>
			</div>
			<div class="input-field">
				<input id="5" type="text" class="validate">
				<label for="5">Kas Sinu ettevõte oleks huvitatud osalema 2022/23 õppeaasta profiõppe pilootprogrammis?</label>
			</div>
			<div class="input-field">
				<input id="6" type="text" class="validate">
				<label for="6">Mitu noort on Sinu ettevõte korraga võimeline ja valmis vastu võtma?</label>
			</div>
			<div class="input-field">
				<input id="7" type="text" class="validate">
				<label for="7">Tekkis küsimusi? Tahaks midagi täpsustada? Kirjuta siia!</label>
			</div>
			<div class="input-field">
				<input id="8" type="text" class="validate">
				<label for="8">Jäta meile oma e-mail kui soovid, et võtaksime Sinuga personaalselt ühendust!</label>
			</div>
		</div>

		<div class='row'>
			<div class='text'>
				<p>Aitäh lisainfot jagamast – antud küsimustikule vastamine ei kohusta Sind ega Sinu ettevõtet veel millekski.
					Küll aga saavad kiiremad ja suurema motivatsiooniga ettevõtted teiste ees olulise eelise – just nende
					hulgast valitakse välja esimesed profiõppe pilootprogrammis osalejad. Huvilistega võtame täiendava info
					ja tingimuste läbirääkimisteks eraldi ühendust.</p>
		</div>

		<div class='row'>
			<div class='text'>
				<p></p>
			</div>
		</div>
	</div>


	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>