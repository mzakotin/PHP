<?php

echo '<b>a) größer 50</b>'.'<br>';
$zahl = 70;
echo $zahl.'<br>';

if ($zahl>50) { echo 'OK'.'<br>';}
echo '<br>';


echo '<b>b) a gewinnt</b>'.'<br>';
$a = 35;
$b = 23;

echo $a.'<br>';
echo $b.'<br>';

if (($a-$b)>=10) {echo 'a gewinnt'.'<br>';}
echo '<br>';


echo '<b>c) Summe gewinnt</b>'.'<br>';
$a = 35;
$b = 31;
$c = 32;
$d = 30;

echo $a.'<br>';
echo $b.'<br>';
echo $c.'<br>';
echo $d.'<br>';

if (($a+$b)>($c+$d)) { echo 'Team ab gewinnt'.'<br>';}
echo '<br>';


echo '<b>d) gleich und ungleich</b>'.'<br>';
$z1 = 170;
$z2 = 171;

echo $z1.'<br>';
echo $z2.'<br>';

if ($z1 == $z2) { echo 'gleich'.'<br>';}
else {echo 'ungleich'.'<br>';}
echo '<br>';


echo '<b>e) positiv/negativ</b>'.'<br>';
$zahl = 0;
echo $zahl.'<br>';

if ($zahl>=0) { echo 'positiv'.'<br>';}
else { echo 'negativ'.'<br>';}
echo '<br>';


echo '<b>f) Klausuren</b>'.'<br>';
$punkte = 30;
echo $punkte.'<br>';

switch($punkte) {
    case (!($punkte>=0  && $punkte<=10)): { echo 'Durchgefallen'.'<br>';} break;
    case (!($punkte>=11 && $punkte<=20)): { echo 'Naja'.'<br>';} break;
    case (!($punkte>=21 && $punkte<=30)): { echo 'Mittelgut'.'<br>';} break;
    case (!($punkte>=31 && $punkte<=40)): { echo 'Gut'.'<br>';} break;
    case (!($punkte>=41 && $punkte<=50)): { echo 'Super'.'<br>';} break;
    default:                              { echo 'Falscher Wert!'.'<br>';} break;
}

/*   if ($punkte>=0  && $punkte<=10) { echo 'Durchgefallen'.'<br>';}
else if ($punkte>=11 && $punkte<=20) { echo 'Naja'.'<br>';}
else if ($punkte>=21 && $punkte<=30) { echo 'Mittelgut'.'<br>';}
else if ($punkte>=31 && $punkte<=40) { echo 'Gut'.'<br>';}
else if ($punkte>=41 && $punkte<=50) { echo 'Super'.'<br>';}
   else                              { echo 'Falscher Wert!'.'<br>';}*/
echo '<br>';


echo '<b>g) Eingabeformular</b>'.'<br>';
echo '<br>';
?>
<!DOCTYPE html><html lang="de"><head><meta charset="utf-8"><title>Title</title></head><body>
    <p>Bitte geben Sie Menge und Sorte ein</p>
    <form action = "eingabeformular_aufgabe_g.php" method = "post">
    <p><input name = "liter"> Menge in Liter</p>
    <p><input name = "sorte"> Sorte (S oder N)</p>
    <p><input type = "submit">
        <input type = "reset"></p>
    </form>
    <?php
    echo ($_POST["sorte"]='');
         ($_POST["liter"]=300);
    if ($_POST["sorte"] == "S")
    {
        $zahlung = $_POST["liter"] * 1.40;
        $text = "Super";
    }
    else
    {
        $zahlung = $_POST["liter"] * 1.35;
        $text = "Normal";
    }
    $_POST["liter"] . " Liter $text kosten $zahlung &euro;".'<br>';
    echo '<br>';

    echo '<b>h) Eingabeformular Erweiterung</b>'.'<br>';
    echo ($_POST["sorte"]='');
         ($_POST["liter"]=300);

    if   ($_POST["liter"]>=100) {
        if ($_POST["sorte"] == "S")
        {
            $zahlung = $_POST["liter"] * 1.40;
            $text = "Super";
        }
        else
        {
            $zahlung = $_POST["liter"] * 1.35;
            $text = "Normal";
        }
        echo $_POST["liter"] . " Liter $text kosten $zahlung &euro;".'<br>';
    }
    ?>
    </body></html>
    <?php
    echo '<br>';


echo '<b>i) Fehler im IF-ELSE-Listing</b>'.'<br>';
 $kapital = 10000;//1. Fehler: Variable auskommentiert
 $kreditsumme = 1300;//2. Fehler: Variable auskommentiert

 if ($kapital > 10000 && $kreditsumme <= 2000)//3. und 4. Fehler: "$" vor Variablen vergessen
{                               //5. Fehler: Verkettungspunkt zwischen "$kapital" und " Euro..."
$message = "Sie haben " . $kapital . " Euro Kapital, wir gewähren Ihren Kredit.";//6. Fehler: ";" fehlt
   // echo $message.'<br>';
}
elseif ($kreditsumme >2000) //7. Fehler: runde Klammern () fehlen bei "elseif $kreditsumme..."
{
    $message = "Wir gewähren grundsätzlich keine Kredite über 2000 Euro. 
    Deshalb können wir die von Ihnen gewünschte Summe von " . $kreditsumme . " Euro nicht akzeptieren.";
    /*echo $message.'<br>';*/}
 //8. Fehler: je ein Verkettungspunkt vor bzw. nach Variable vergessen + ";" am Ende des Befehls vergessen
elseif ($kapital <= 10000)
{
$message = "Sie haben zu wenig Kapital (Ihre Eingabe: $kapital), um bei uns einen Kredit zu erhalten.";
//9. Fehler: Vergleichsoperator "=" vergessen;
    //echo $message.'<br>';
}
    echo ($kapital > 10000 && $kreditsumme <= 2000) ?
    "Sie haben " . $kapital . " Euro Kapital, wir gewähren Ihren Kredit.":
        (($kreditsumme > 2000) || ($kapital <= 1000) ?
            "Wir gewähren grundsätzlich keine Kredite über 2000 Euro.
            Deshalb können wir die von Ihnen gewünschte Summe von " . $kreditsumme . " Euro nicht akzeptieren.":
            "Sie haben zu wenig Kapital (Ihre Eingabe: $kapital), um bei uns einen Kredit zu erhalten.".'<br>');


 echo '<br>';

echo '<b>j), k) IF-ELSE anwenden: Horoskop</b>'.'<br>';
echo '<br>';
$sternzeichen = 'STEINBOCK';

if ($sternzeichen == 'STEINBOCK' || $sternzeichen == 'WAAGE' || $sternzeichen == 'WIDDER') {
 echo $sternzeichen.': ';

 if ($sternzeichen == 'STEINBOCK') { echo 'Sie sind sehr impulsiv.'.'<br>';}
}

echo '<br>';

echo '<b>l) IF-ELSE anwenden: Persönlichkeits-Profiler</b>'.'<br>';
echo '<br>';
$lieblingswerkzeug = 'Hammer';

if ($lieblingswerkzeug == 'Hammer' || $lieblingswerkzeug == 'Schraubenzieher' ||
    $lieblingswerkzeug == 'Zange' || $lieblingswerkzeug == 'Säge')
{ echo 'Lieblingswerkzeug: '.$lieblingswerkzeug.'<br>';}
echo '<br>';

echo '<b>m) Anrede mit IF-ELSE</b>'.'<br>';
echo '<br>';
?>
<!DOCTYPE html><html lang="de"><head><meta charset="utf-8"><title>Title</title></head>
<body>
<p>Bitte geben Sie Nachname und Geschlecht ein</p>
<form action = "eingabeformular_aufgabe_m.php" method = "post">
    <p><input name = "Nachname"> Nachname</p>
    <p><input name = "Geschlecht"> Geschlecht (m oder w)</p>
    <p><input type = "submit">
        <input type = "reset"></p>
</form>
<?php
($_POST["nachname"]="Zakotin");
($_POST["geschlecht"]="männlich");

    ($_POST["geschlecht"] == "männlich") ? "Hallo, Herr ".$_POST["nachname"]."<br>":
    (($_POST["geschlecht"] == "weiblich") ? "Hallo, Frau ".$_POST["nachname"]."<br>":
                                            "Ungültige Geschlechtsangabe!<br>");
?>
</body></html>
<?php
echo '<br>';
