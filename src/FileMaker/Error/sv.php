<?php namespace Kolotoc\FileMakerApi;
/**
 * src error codes - Swedish translations.
 *
 * @package src
 *
 * Copyright © 2005-2009, src, Inc.  All rights reserved.
 * NOTE:  Use of this source code is subject to the terms of the src
 * Software License which accompanies the code.  Your use of this source code
 * signifies your agreement to such license terms and conditions.  Except as
 * expressly granted in the Software License, no other copyright, patent, or
 * other intellectual property license or right is granted, either expressly or
 * by implication, by src.
 */

$__FM_ERRORS = array(
    -1 => 'Okänt fel',
    0 => 'Inget fel',
    1 => 'Användaren har avbrutit åtgärden',
    2 => 'Minnesfel',
    3 => 'Kommandot är inte tillgängligt (exempelvis fel operativsystem, fel läge osv)',
    4 => 'Okänt kommando',
    5 => 'Ogiltigt kommando (exempelvis ett Tilldela fält-steg som inte har någon beräkning angiven)',
    6 => 'Filen är skrivskyddad',
    7 => 'Minnet räcker inte.',
    8 => 'Tomt resultat',
    9 => 'Otillräcklig behörighet',
    10 => 'Begärda data saknas',
    11 => 'Namnet är ogiltigt',
    12 => 'Namnet finns redan',
    13 => 'Filen eller objektet används',
    14 => 'Utanför det tillåtna intervallet',
    15 => 'Går inte att dela med noll',
    16 => 'Åtgärden misslyckades, begär nytt försök (t.ex. en användarfråga)',
    17 => 'Försök att konvertera främmande teckenuppsättning till UTF-16 misslyckades',
    18 => 'Klienten måste ange kontoinformation för att fortsätta',
    19 => 'Strängen innehåller andra tecken än A-Z, a-z, 0-9 (ASCII)',
    20 => 'Kommando eller åtgärd avbröts av utlöst manus',
    100 => 'Fil saknas',
    101 => 'Post saknas',
    102 => 'Fält saknas',
    103 => 'Relation saknas',
    104 => 'Manus saknas',
    105 => 'Layout saknas',
    106 => 'Tabell saknas',
    107 => 'Index saknas',
    108 => 'Värdelista saknas',
    109 => 'Behörighetsuppsättning saknas',
    110 => 'Relaterade tabeller saknas',
    111 => 'Fältrepetitionen är ogiltig',
    112 => 'Fönstret saknas',
    113 => 'Funktionen saknas',
    114 => 'Filreferensen saknas',
    130 => 'Filerna är skadade eller saknas och måste installeras om',
    131 => 'Språkpaketfiler saknas (t.ex. mallfiler)',
    200 => 'Tillgång till posten nekad',
    201 => 'Det går inte att ändra fältet',
    202 => 'Tillgång till fältet nekad',
    203 => 'Det finns inga poster att skriva ut i filen eller också tillåter inte lösenordet behörighet för utskrift',
    204 => 'Ingen tillgång till fält i sorteringsordning',
    205 => 'Användaren har inte behörighet att skapa nya poster; importen kommer att skriva över befintliga data',
    206 => 'Användaren har inte behörighet att ändra lösenord eller så kan filen inte ändras',
    207 => 'Användaren har inte tillräcklig behörighet för att ändra databasschemat eller så kan filen inte ändras',
    208 => 'Lösenordet innehåller inte tillräckligt många tecken',
    209 => 'Det nya lösenordet måste skilja sig från det befintliga',
    210 => 'Användarkontot är inte aktivt',
    211 => 'Lösenordet har upphört att gälla',
    212 => 'Ogiltigt användarkonto och/eller lösenord. Försök igen',
    213 => 'Användarkontot och/eller lösenordet finns inte',
    214 => 'För många inloggningsförsök',
    215 => 'Administratörsbehörighet kan inte dupliceras',
    216 => 'Gästkontot kan inte dupliceras',
    217 => 'Användaren har inte tillräcklig behörighet för att ändra administratörskontot',
    300 => 'Filen är låst eller används',
    301 => 'Posten används av en annan användare',
    302 => 'Tabellen används av en annan användare',
    303 => 'Databasschemat används av en annan användare',
    304 => 'Layouten används av en annan användare',
    306 => 'Postens ändrings-ID matchar inte',
    400 => 'Sökvillkoren är tomma',
    401 => 'Inga poster matchar sökposten',
    402 => 'Det valda fältet är inte ett matchande fält för en länk',
    403 => 'Maxpostgränsen för testversionen av FileMakerPro har överskridits',
    404 => 'Sorteringsordningen är ogiltig',
    405 => 'Det angivna antalet poster överskrider antalet poster som kan utelämnas',
    406 => 'Ogiltiga villkor för ersättning/ändring av löpnummer',
    407 => 'Ett eller båda av de matchande fälten saknas (ogiltig relation)',
    408 => 'Det angivna fältet har fel datatyp för den här åtgärden',
    409 => 'Importordningen är ogiltig',
    410 => 'Exportordningen är ogiltig',
    412 => 'Fel version av FileMakerPro används för att reparera filen',
    413 => 'Det angivna fältet är av fel typ',
    414 => 'Resultatet kan inte visas i layouten',
    415 => 'En eller flera begärda relaterade poster är inte tillgänglig(a)',
    500 => 'Datumvärdet stämmer inte med kontrolltillvalen',
    501 => 'Tidsvärdet stämmer inte med kontrolltillvalen',
    502 => 'Det numeriska värdet stämmer inte med kontrolltillvalen',
    503 => 'Värdet i fältet stämmer inte med intervallet som angetts i kontrolltillvalen',
    504 => 'Värdet i fältet är inte unikt, vilket angetts som ett krav i kontrolltillvalen',
    505 => 'Värdet i fältet är inte ett befintligt värde i databasfilen, vilket angetts som ett krav i kontrolltillvalen',
    506 => 'Värdet i fältet finns inte med i värdelistan som angetts i kontrolltillvalet',
    507 => 'Värdet i fältet klarade inte beräkningstestet för kontrolltillvalet',
    508 => 'Ett ogiltigt värde har angetts i sökläget',
    509 => 'Fältet kräver ett giltigt värde',
    510 => 'Det relaterade värdet är tomt eller inte tillgängligt',
    511 => 'Värdet i fältet överskrider antalet tillåtna tecken',
    600 => 'Utskriftsfel',
    601 => 'Sidhuvudet och sidfoten ryms inte tillsammans på en sida',
    602 => 'Huvuddelen ryms inte på en sida med den aktuella kolumninställningen',
    603 => 'Ingen skrivaranslutning',
    700 => 'Fel filformat för import',
    706 => 'EPSF-filen saknar granskningsbild',
    707 => 'Det går inte att hitta grafikkonverteraren',
    708 => 'Det går inte att importera filen eller så krävs stöd för färgskärm för att importera filen',
    709 => 'Import av QuickTime-film misslyckades',
    710 => 'Det går inte att uppdatera QuickTime-filmreferensen eftersom databasfilen är skrivskyddad',
    711 => 'Det går inte att hitta importkonverteraren',
    714 => 'Lösenordet saknar behörighet för den här åtgärden',
    715 => 'Det angivna Excel-kalkylbladet eller intervallet saknas',
    716 => 'En SQL-fråga med DELETE, INSERT eller UPDATE är inte tillåten vid ODBC-import',
    717 => 'Det finns inte tillräcklig XML/XSL-information för att importen eller exporten ska kunna fortsätta',
    718 => 'Ett fel inträffade vid tolkningen av XML-filen (från Xerces)',
    719 => 'Ett fel inträffade vid konverteringen av XML med hjälp av XSL (från Xalan)',
    720 => 'Ett fel inträffade vid exporten, det angivna formatet har inte stöd för repeterade fält',
    721 => 'Ett okänt fel inträffade vid tolkningen eller konverteringen',
    722 => 'Det går inte att importera data till en fil utan fält',
    723 => 'Du har inte behörighet att lägga till eller ändra poster i måltabellen',
    724 => 'Du har inte behörighet att lägga till poster i måltabellen',
    725 => 'Du har inte behörighet att ändra poster i måltabellen',
    726 => 'Importfilen innehåller fler poster än måltabellen. Alla poster importerades inte',
    727 => 'Måltabellen innehåller fler poster än importfilen. Alla poster uppdaterades inte',
    729 => 'Fel inträffade vid importen. Posterna kunde inte importeras',
    730 => 'Excel-versionen stöds inte. Konvertera filen till Excel 7.0 (Excel 95), 97, 2000, XP, eller 2007 och försök igen.',
    731 => 'Filen som du importerar från innehåller inga data',
    732 => 'Den här filen kan inte sättas in eftersom den innehåller andra filer',
    733 => 'En tabell kan inte importeras till sig själv',
    734 => 'Den här filtypen kan inte visas som en bild',
    735 => 'Den här filtypen kan inte visas som en bild. Den kommer att sättas in och visas som en fil.',
    800 => 'Det går inte att skapa filen på disken',
    801 => 'Det går inte att skapa någon tillfällig fil på systemdisken',
    802 => 'Det går inte att öppna filen',
    803 => 'Filen är en enanvändarfil eller så går det inte att hitta värden',
    804 => 'Filen går inte att öppna som skrivskyddad i aktuellt tillstånd',
    805 => 'Filen är skadad; använd kommandot Reparera',
    806 => 'Det går inte att öppna filen i den här versionen av src Pro',
    807 => 'Filen är inte en FileMakerPro-fil eller så är den allvarligt skadad',
    808 => 'Det går inte att öppna filen eftersom behörigheten är skadad',
    809 => 'Disken/volymen är full',
    810 => 'Disken/volymen är låst',
    811 => 'Det går inte att öppna den tillfälliga filen som en src Pro-fil',
    813 => 'Postsynkroniseringsfel i nätverket',
    814 => 'Det går inte att öppna filen eftersom maximala antalet tillåtna filer redan är öppna',
    815 => 'Det går inte att öppna den länkade filen',
    816 => 'Det går inte att konvertera filen',
    817 => 'Det går inte att öppna filen eftersom den inte hör till denna lösning',
    819 => 'Det går inte att spara en lokal kopia av en fjärrfil',
    820 => 'Filen håller på att stängas',
    821 => 'Frånkoppling framtvingad av värden',
    822 => 'FMI-filer hittades inte; installera om saknade filer',
    823 => 'Det går inte att göra filen till en enanvändarfil eftersom gäster är anslutna',
    824 => 'Filen är skadad eller så är den inte en src-fil',
    900 => 'Allmänt fel i stavningsmotorn',
    901 => 'Standardordlistan är inte installerad',
    902 => 'Det gick inte att starta hjälpsystemet',
    903 => 'Detta kommando kan inte användas i en delad fil',
    904 => 'Kommandot kan bara användas i en fil som delas under src Server',
    905 => 'Inget aktivt fält har valts och kommandot kan bara användas om det finns ett aktivt fält',
    920 => 'Det går inte att initiera stavningsmotorn',
    921 => 'Det går inte att öppna den egna ordlistan för redigering',
    922 => 'Det går inte att hitta den egna ordlistan',
    923 => 'Den egna ordlistan är skrivskyddad',
    951 => 'Ett oväntat fel har inträffat',
    954 => 'XML-grammatiken stöds inte',
    955 => 'Inget databasnamn',
    956 => 'Det maximala antalet databassessioner har överskridits',
    957 => 'Motstridiga kommandon',
    958 => 'Parameter saknas i fråga',
    1200 => 'Allmänt beräkningsfel',
    1201 => 'För få parametrar i funktionen',
    1202 => 'För många parametrar i funktionen',
    1203 => 'Oväntat slut på beräkningen',
    1204 => 'Ett numeriskt värde, en textkonstant, ett fältnamn eller "(" krävs',
    1205 => 'Kommentaren avslutas inte med "*/"',
    1206 => 'Textkonstanten måste avslutas med ett citationstecken',
    1207 => 'Udda parentes',
    1208 => 'Operator saknas, funktionen hittades inte eller "(" förväntades inte',
    1209 => 'Ett namn (t.ex. ett fältnamn eller ett layoutnamn) saknas',
    1210 => 'Plugin-funktionen har redan registrerats',
    1211 => 'Det är inte tillåtet att använda listor i den här funktionen',
    1212 => 'En operator (t.ex. +, -, *) behövs här',
    1213 => 'Den här variabeln har redan definierats i Let-funktionen',
    1214 => 'AVERAGE, COUNT, EXTEND, GETREPETITION, MAX, MIN, NPV, STDEV, SUM och GETSUMMARY: ett uttryck påträffades där ett fält behövdes',
    1215 => 'Den här parametern är en ogiltig Get-funktionsparameter',
    1216 => 'Första argumentet i en GETSUMMARY måste vara ett statistikfält',
    1217 => 'Brytfältet är ogiltigt',
    1218 => 'Det går inte att utvärdera talet',
    1219 => 'Ett fält kan inte användas i sin egen formel',
    1220 => 'Fälttypen måste vara normal eller beräkning',
    1221 => 'Datatypen måste vara numerisk, datum, tid eller tidsstämpel',
    1222 => 'Beräkningen får inte vara lagrad',
    1223 => 'Den refererade funktionen finns inte',
    1400 => 'Det gick inte att initiera drivrutinen för ODBC-klient. Kontrollera att drivrutinerna för ODBC-klient är korrekt installerade. Obs! Plugin-programmet för delning av data via ODBC har installerats automatiskt med src Server. Drivrutinerna för ODBC-klienten installeras med CD-skivan för src Server Web Publishing. Mer information finns i Installera FileMakerdrivrutiner för ODBC- och JDBC-klienter.',
    1401 => 'Det gick inte att ställa in miljön (ODBC)',
    1402 => 'Det gick inte att frigöra miljön (ODBC)',
    1403 => 'Det gick inte att koppla från (ODBC)',
    1404 => 'Det gick inte att tilldela en anslutning (ODBC)',
    1405 => 'Det gick inte att frigöra en anslutning (ODBC)',
    1406 => 'Kontroll av SQL-API misslyckades (ODBC)',
    1407 => 'Det gick inte att tilldela en instruktion (ODBC)',
    1408 => 'Utökat fel (ODBC)',
    1450 => 'Åtgärden kräver PHP-behörighetstillägg',
    1451 => 'Åtgärden kräver att aktuell fil är en fjärrfil',
    1501 => 'SMTP-verifieringen misslyckades',
    1502 => 'Anslutningen avvisades av SMTP-servern',
    1503 => 'Fel med SSL',
    1504 => 'SMTP-servern kräver att anslutningen är krypterad',
    1505 => 'Angiven verifiering stöds inte av SMTP-servern',
    1506 => 'E-post kunde inte skickas',
    1507 => 'Det går inte att logga in på SMTP-servern'
);