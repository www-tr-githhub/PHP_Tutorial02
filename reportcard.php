<?php
$roll;
if ($roll==1) {
    $Maths=70;
    $Eng=55;
    $Sci=60;
    $Hist=80;
    $Comp=85;
    $total=($Maths+$Eng+$Sci+$Hist+$Comp)/5;
    if ($total>=60) {
       $div="First Div";
    }
    if ($total>=45) {
        $div="Second Div";
     }
     else {
        $div="Fail";
     }

}
else {
    $Maths=65;
    $Eng=75;
    $Sci=80;
    $Hist=60;
    $Comp=55;
    $total=($Maths+$Eng+$Sci+$Hist+$Comp)/5;
    if ($total>=60) {
       $div="First Div";
    }
    if ($total>=45) {
        $div="Second Div";
     }
     else {
        $div="Fail";
     }
}
?>
<html>
<!DOCTYPE html>
<html>
<head>
    <title>Subject Marks Table</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Subject Marks Table</h2>

<table>
    <tr>
        <th>Subject</th>
        <th>Marks</th>
    </tr>
    <tr>
        <td>Mathematics</td>
        <td><?php
        echo "$Maths" ?></td>
    </tr>
    <tr>
        <td>English</td>
        <td><?php
        echo "$Eng" ?></</td>
    </tr>
    <tr>
        <td>Science</td>
        <td><?php
        echo "$Sci" ?></</td>
    </tr>
    <tr>
        <td>History</td>
        <td><?php
        echo "$Hist" ?></</td>
    </tr>
    <tr>
        <td>Computer</td>
        <td><?php
        echo "$Comp" ?></</td>
    </tr>
    <tr>
        <td>Total</td>
        <td><?php
        echo "$total" ?></</td>
    </tr>
    <tr>
        <td>Division</td>
        <td><?php
        echo "$div" ?></</td>
    </tr>
</table>

</body>

</html>


