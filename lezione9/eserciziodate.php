<?php
date_default_timezone_set("Europe/Rome");
echo 'Current time: ' . date('d-m-Y H:i') . "<hr>";
echo "ESERCIZIO 1<br>";

/**
 * getCopyright
 *
 * @param  mixed $myCompany
 * @return string
 */
function getCopyright(string $myCompany): string
{
    $year = date('Y', time());
    return "Copyright {$year}  © {$myCompany} ";
}

/**
 * getBirthdayCountdown
 *
 * @param  mixed $birthdate
 * @return DateInterval
 */
function getBirthdayCountdown(DateTime $birthdate): DateInterval
{
    $today = new DateTime('now');
    $todayYear = (int) $today->format('Y');
    $todayMonth = (int) $today->format('n');
    $todayDay = (int) $today->format('j');

    $birthday = new DateTime();
    $birthdayDay = (int) $birthdate->format('j');
    $birthdayMonth = (int) $birthdate->format('n');

    if ($birthdayMonth < $todayMonth) {
        $todayYear++;
    }

    if ($birthdayMonth == $todayMonth && $birthdayDay < $todayDay) {
        $todayYear++;
    }

    $birthday->setDate($todayYear, $birthdayMonth, $birthdayDay);
    return $birthday->diff($today);
}

echo getCopyright("Coca cola");
echo '<hr>';
echo "ESERCIZIO 2<br>";

$dates = [
    '1-6-1970',
    '20-9-1990',
    '21-5-1980',
    '19-4-1980',
    '20-07-2000',
    '11-1-1980',
    '10-1-1980',
    '29-2-1980'
];

foreach ($dates as $date) {
    $interval = getBirthdayCountdown(
        DateTime::createFromFormat('j-n-Y', $date)
    );
    $suffix = $interval->days > 1 ? 'i' : 'o';
    $prefix = $interval->days > 1 ? 'no' : '';  

    if ($interval->days == 0) {
        echo "BUON COMPLEANNO<br>";
    } else {
        echo "Sei nato il " . $date . " quindi ";
        echo 'al tuo compleanno manca'.$prefix. ' '. $interval->days . ' giorn' . $suffix . '<br>';
    }

  
}

/*
2013/09/01
 - 13.09.01
 - 01-09-13
 */
echo '<hr>';
echo "ESERCIZIO 3<br>";
$today = date("Y/m/d");
echo $today . '<br>';
$today = date("y.m.d");
echo $today . '<br>';
$today = date("d-m-y");
echo $today . '<br>';
