<?php
	$message_sent = false;
	if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$text = $_POST['text'];
	
		$to = "webeldes2020@gmail.com";
	
		$body = "";
	
		$body .= "From: ".$name. "\r\n";
		$body .= "Email: ".$email. "\r\n";
		$body .= "Text: ".$text. "\r\n";
	
		$headers = array(
			"From: webeldes.com",
			"Reply-To: webeldes.com",
			"X-Mailer: PHP/" . PHP_VERSION
		);
		$headers = implode("\r\n", $headers);

		

		if(mail($to, $text, $body,$headers)){
			echo "mejl poslat";
		}else{
			echo "greska";
		}


		$message_sent = true;
	}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Webeldes" />
    <link rel="icon" type="img/png" href="Logoes/miniLogo.png" />
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="main.css" />
    <title>American Dream | Prijava</title>
  </head>
  <body class="regStr">
    <!-- Header -->
    <div class="regStr__header">
      <div class="regStr__mainLogo">
        <img src="Logoes/whiteLogo.png" alt="Logo" />
      </div>
      <span class="backBtn">nazad na pocetnu stranicu</span>
    </div>
    <!-- Form -->
    <div class="regStr__content">
      <div class="regStr__formDiv">
        <h3>Prijavna anketa za American Dream</h3>
        <p>
          Molimo Vas da popunite anketu. Ukoliko ispunjavate uslove, naši
          zaposleni će Vas kontaktirati i pružiti Vam sve dodatne informacije.
          <br />
          <br />
          Hvala!
        </p>
        <hr />
        <span>* obavezna polja</span>
        <form action="registration.php" method="POST" >
          <div class="regStr__formSections">
            <p>Ime i prezime <span>*</span></p>
            <input
              type="text"
              name="name"
              id="name"
              placeholder="Vaš odgovor"
              required
            />
          </div>
          <div class="regStr__formSections">
            <p>Pol <span>*</span></p>
            <input type="radio" name="gender" id="gender_male" value="Muški" />
            <label for="gender_male">Muški</label>
            <input
              type="radio"
              name="gender"
              id="gender_female"
              value="Ženski"
            />
            <label for="gender_female">Ženski</label>
          </div>
          <div class="regStr__formSections">
            <p>Koliko godina imate? <span>*</span></p>
            <input
              type="text"
              name="years"
              id="years"
              placeholder="Vaš odgovor"
              required
            />
          </div>
          <div class="regStr__formSections">
            <p>Email adresa <span>*</span></p>
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Vaš odgovor"
              required
            />
          </div>
          <div class="regStr__formSections">
            <p>Broj telefona <span>*</span></p>
            <input
              type="text"
              name="number"
              id="number"
              placeholder="Vaš odgovor"
              required
            />
          </div>
          <div class="regStr__formSections">
            <p>Država (čije državljanstcvo posedujete?) <span>*</span></p>
            <input
              type="text"
              name="state"
              id="state"
              placeholder="Vaš odgovor"
              required
            />
          </div>
          <div class="regStr__formSections">
            <p>Grad? <span>*</span></p>
            <input
              type="text"
              name="city"
              id="city"
              placeholder="Vaš odgovor"
              required
            />
          </div>
          <div class="regStr__formSections">
            <p>Da li ste zaposleni? <span>*</span></p>
            <input
              type="radio"
              name="employed"
              id="employed_yes"
              value="EmployedYes"
            />
            <label for="employed_yes">Da</label>
            <input
              type="radio"
              name="employed"
              id="employed_no"
              value="EmployedNo"
            />
            <label for="employed_no">Ne</label>
          </div>
          <div class="regStr__formSections">
            <p>Da li ste u braku? <span>*</span></p>
            <input
              type="radio"
              name="marriage"
              id="marriage_yes"
              value="MariageYes"
            />
            <label for="marriage_yes">Da</label>
            <input
              type="radio"
              name="marriage"
              id="marriage_no"
              value="MariageNo"
            />
            <label for="marriage_no">Ne</label>
          </div>
          <div class="regStr__formSections">
            <p>Da li ste nekad bili u SAD? <span>*</span></p>
            <input
              type="radio"
              name="wereInSAD"
              id="wereInSAD_yes"
              value="WereInSADYes"
            />
            <label for="wereInSAD_yes">Da</label>
            <input
              type="radio"
              name="wereInSAD"
              id="wereInSAD_no"
              value="WereInSADNo"
            />
            <label for="wereInSAD_no">Ne</label>
          </div>
          <div class="regStr__formSections">
            <p>
              Ukoliko ste bili na H2B programu, navedite sve poslodavce kod
              kojih ste radili u SAD
            </p>
            <input
              type="text"
              name="workINSAD"
              id="workINSAD"
              placeholder="Vaš odgovor"
            />
          </div>
          <div class="regStr__formSections">
            <p>Ukoliko ste bili u SAD, navedite tip vize</p>
            <input
              type="text"
              name="visaType"
              id="visaType"
              placeholder="Vaš odgovor"
            />
          </div>
          <div class="regStr__formSections">
            <p>Da li posedujete SAD vozačku dozvolu? <span>*</span></p>
            <input
              type="radio"
              name="driversLicence"
              id="driversLicence_yes"
              value="driversLicenceYes"
            />
            <label for="driversLicence_yes">Da</label>
            <input
              type="radio"
              name="driversLicence"
              id="driversLicence_no"
              value="driversLicenceNo"
            />
            <label for="driversLicence_no">Ne</label>
          </div>
          <button type="submit" class="submitFormBtn">Pošalji</button>
          <button type="button" class="clearFormBtn">Poništi</button>
        </form>
      </div>
    </div>
    <!-- Footer -->
    <div class="footer footerSP" id="footer">
      <div class="footer__divs">
        <img src="Logoes/whiteLogo.png" alt="Logo" />
      </div>
      <div class="footer__divs">
        <ul class="footer__nav footer__navSP">
          <li class="footer__navs">
            <a href="/index.html#programi">Programi</a>
          </li>
          <li class="footer__navs">
            <a href="/index.html#aktuelnePonude"
              >Aktuelne ponude</a
            >
          </li>
          <li class="footer__navs">
            <a href="/index.html#uslovi">Uslovi</a>
          </li>
          <li class="footer__navs">
            <a href="/index.html#procedura">Procedura</a>
          </li>
        </ul>
      </div>
      <div class="footer__divs footer__lastDiv footer__lastDivSP">
        <h3>Kontakt:</h3>
        <div>
          <p><b>Email:</b> info@americandream.rs</p>
          <p><b>Telefon za Srbiju:</b> + 381 64 485 2903</p>
          <p><b>Telefon za Ameriku:</b> +1 347 777 9273 (viber, whatsapp)</p>
          <p>
            <b>Website:</b>
            <a href="/index.html">www.americadream.rs</a>
          </p>
        </div>
      </div>
    </div>
    <script src="registration.js"></script>
  </body>
</html>
