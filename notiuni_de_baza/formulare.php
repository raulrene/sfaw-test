

<?php

$user_corect = 'admin';
$parola_corecta = 'ghiceste-Ma';


$mesaj = '';
if( isset( $_POST ) && !empty( $_POST[ 'trimite' ] ) ) {


    $erori = 0;

    if( !isset( $_POST[ 'user' ] ) || strlen( $_POST[ 'user' ] ) == 0 ) {
        $mesaj =  'Numele de utilizator nu a fost specificat';
        $erori = 1;
    } elseif( !isset( $_POST[ 'pass' ] ) || strlen( $_POST[ 'pass' ] ) == 0 ) {
        $mesaj = 'Parola nu a fost specificata';
        $erori = 1;
    }


    if( $erori == 0 ) {
        # pentru acum, vom face o verificare simpla
        if( 	$_POST[ 'user' ] === $user_corect &&
            $_POST[ 'pass' ] === $parola_corecta )
        {
            echo 'Ati fost autentificat. Veti fi redirectionat...';
            exit;
        } else {
            $mesaj = 'Username-ul sau parola sunt gresite';
        }
    }
}
?>


<html>
<head>
    <title>Aplicatie formular: pagina de login - Invata PHP</title>
</head>
<body style="font-family: verdana,sans-serif; font-size: small;">

<form action="" method="post" style="width: 30%">
    <fieldset>
        <legend>Date de autentificare</legend>
        <input type="text" name="user" /> User<br />
        <input type="password" name="pass" /> Pass<br />
    </fieldset>

    <fieldset>
        <legend>Actiuni</legend>
        <input type="submit" value="Login" name="trimite" />
        <input type="reset" value="Curata formular" />
    </fieldset>

</form>

<?php

if( strlen( $mesaj ) > 0 ) {
    echo '<p style="color: red">', $mesaj, '</p>';
}
?>

</body>
</html>


<form id="form_bing" action="http://www.bing.com/search" method="get">
    Expresie de cautat:<br />
    <input type="text" name="q" value="" /> <input type="submit" value="Cauta pe Bing" />
</form>


<form id="form_xe" action="http://www.xe.com/ucc/convert.cgi" method="get" >
    <fieldset>
        <legend>Suma de convertit</legend>
        <input type="text" name="Amount" value="10" style="width: 100px"  />
    </fieldset>

    <fieldset>
        <legend>Moneda</legend>
        <input type="text" name="From" value="EUR" style="width: 100px"  />
        - moneda sursa<br />
        <input type="text" name="To" value="RON" style="width: 100px"  />
        - moneda in care se face conversia<br />
    </fieldset>

    <fieldset>
        <input type="submit" name="image" value="Convertire"  />
    </fieldset>
</form>



<form action="http://www.ejobs.ro/user/searchjobs" id="searchjob" method="post" >
    <input type="hidden" value="" name="refine"/>
    <input type="hidden" value="" name="allof"/>
    <input type="hidden" value="" name="categ"/>
    <input type="hidden" value="" name="nivel_cariera"/>

    <table cellspacing="0" cellpadding="0" border="0" >
        <tr>
            <td valign="middle" style="padding-left: 3px;"><span>Locuri de munca:</span></td>
            <td valign="middle" style="padding-left: 9px;" rowspan="5">
                <input type="submit" value="Cauta Job >>" name="cauta_job" />
            </td>
        </tr>

        <tr>
            <td valign="middle" style="padding-left: 3px;">
                <input onclick="if (this.value=='Cuvant cheie') {this.value='';}"
                       style="width: 210px;" name="jobskeyword"  value="Cuvant cheie" />
            </td>
        </tr>

        <tr>
            <td valign="middle" style="padding-left: 3px;">
                <select style="width: 210px;" name="oras">
                    <option value="">Toate orasele</option>
                </select>
            </td>
        </tr>

    </table>
</form>










