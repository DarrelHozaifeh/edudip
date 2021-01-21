<?php
//Allgemeine Einstellungen an der Seite
error_reporting(0);     //Fehlermeldungen anzeigen  |0=aus 1=an
session_start();    //Session für Logins starten
$settings[title] = "TimeLine® ERP - Webinarverwaltung";    //Seitentitel
$settings[description] = "";      //Seitenbeschreibung
$settings[keywords] = "";     //Seitentags (Mit Leerzeichen trennen)
$settings[charset] = "UTF-8";      //Landescode | de=Deutsch  en=Englisch
$settings[langshort] = "de";      //Landescode | de=Deutsch  en=Englisch
$settings[faviconsize] = "512x512";      //Größe des Favicons
$settings[toolkitcolor] = "#0090ea";    //Farbe der Toolkits  |Mobile Chrome-Titelleiste
$settings[userstartseite] = "home";    //Startseite für angemeldete Nutzer
$settings[gaststartseite] = "dashboard";    //Startseite für unangemeldete Nutzer


//Aufbauen einer Datenbankverbindung
// $datahost =  '';    //Hostname der Datenbank
// $datauser =  '';    //Username der Datenbank
// $datapass =  '';    //Passwort der Datenbank
// $database =  '';    //Datenbankname der Datenbank
// $con = mysqli_connect($datahost, $datauser, $datapass) or die('Fehler beim Verbinden zum MySQL Server');    //Verbindung zum Datenbnakserver aufbauen
// mysqli_select_db($con, $database) or die('Fehler beim Verbinden zur MySQL Datenbank');      //Verbindung zur Datenbank aufbauen


//Includes und andere Scripts
// include('includes/elements/modals.php');    //Einbinden der Modals
// include('includes/elements/functions.php');    //Einbinden der Functions
?>