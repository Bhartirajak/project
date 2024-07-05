<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meter Inspection Summary</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: burlywood;
        }
        td input[type="text"] {
            width: 100%;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            background-color: seagreen;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }
        button:hover {
            background-color: #45a049;
        }
        button:focus {
            outline: none;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px;
        }
        .left {
            text-align: left;
        }
        .right {
            text-align: right;
        }
    </style>
</head>
<body>
    <h1>PERIODIC TESTING OF METERS (URBAN AREA)</h1>
    <div class="header">
        <div class="left">
            <p>Discom: MPEZ</p>
            <p>Format: ESC-5A</p>
        </div>
        <div class="right">
            <p>Financial Year: 2023-24</p>
            <p>Period: June 23 To March 24</p>
        </div>
    </div>

    <form id="dataForm" method="POST" action="esc5a_submit.php">
        <table>
            <thead>
                <tr>
                    <th>S. NO.</th>
                    <th>Particulars</th>
                    <th>Category</th>
                    <th>Total no. of meters installed at the beginning of the period</th>
                    <th>Electro mechanical</th>
                    <th>Electronic</th>
                    <th>Smart Meters</th>
                    <th>No. of meters inspected/tested during the period under report for verification of its accuracy</th>
                    <th>Electro mechanical</th>
                    <th>Electronic</th>
                    <th>Smart Meters</th>
                    <th>% of meters inspected/tested during the period for verification of its accuracy</th>
                    <th>Electro mechanical</th>
                    <th>Electronic</th>
                    <th>Smart Meters</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class='text-left'><input type='text' name='entry[1][Sno]' value='1'></td>
                    <td class='text-left'><input type='text' name='entry[1][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[1][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[1][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[1][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[1][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[1][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[1][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[1][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[1][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[1][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[1][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[1][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[1][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[1][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[1][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[2][Sno]' value='2'></td>
                    <td class='text-left'><input type='text' name='entry[2][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[2][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[2][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[2][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[2][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[2][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[2][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[2][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[2][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[2][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[2][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[2][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[2][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[2][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[2][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[3][Sno]' value='3'></td>
                    <td class='text-left'><input type='text' name='entry[3][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[3][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[3][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[3][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[3][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[3][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[3][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[3][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[3][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[3][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[3][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[3][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[3][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[3][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[3][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[4][Sno]' value='4'></td>
                    <td class='text-left'><input type='text' name='entry[4][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[4][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[4][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[4][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[4][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[4][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[4][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[4][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[4][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[4][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[4][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[4][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[4][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[4][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[4][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[5][Sno]' value='5'></td>
                    <td class='text-left'><input type='text' name='entry[5][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[5][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[5][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[5][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[5][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[5][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[5][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[5][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[5][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[5][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[5][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[5][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[5][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[5][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[5][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[6][Sno]' value='6'></td>
                    <td class='text-left'><input type='text' name='entry[6][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[6][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[5][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[6][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[6][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[6][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[6][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[6][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[6][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[6][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[6][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[6][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[6][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[6][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[6][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[7][Sno]' value='7'></td>
                    <td class='text-left'><input type='text' name='entry[7][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[7][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[7][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[7][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[7][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[7][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[7][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[7][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[7][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[7][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[7][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[7][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[7][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[7][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[7][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[8][Sno]' value='8'></td>
                    <td class='text-left'><input type='text' name='entry[8][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[8][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[8][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[8][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[8][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[8][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[8][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[8][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[8][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[8][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[8][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[8][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[8][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[8][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[8][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[9][Sno]' value='9'></td>
                    <td class='text-left'><input type='text' name='entry[9][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[9][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[9][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[9][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[9][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[9][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[9][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[9][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[9][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[9][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[9][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[9][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[9][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[9][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[9][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[10][Sno]' value='10'></td>
                    <td class='text-left'><input type='text' name='entry[10][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[10][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[10][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[10][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[10][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[10][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[10][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[10][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[10][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[10][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[10][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[10][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[10][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[10][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[10][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[11][Sno]' value='11'></td>
                    <td class='text-left'><input type='text' name='entry[11][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[11][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[11][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[11][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[11][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[11][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[11][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[11][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[11][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[11][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[11][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[11][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[11][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[11][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[11][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[12][Sno]' value='12'></td>
                    <td class='text-left'><input type='text' name='entry[12][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[12][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[12][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[12][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[12][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[12][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[12][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[12][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[12][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[12][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[12][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[12][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[12][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[12][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[12][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[13][Sno]' value='13'></td>
                    <td class='text-left'><input type='text' name='entry[13][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[13][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[13][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[13][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[13][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[13][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[13][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[13][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[13][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[13][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[13][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[13][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[13][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[13][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[13][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[14][Sno]' value='14'></td>
                    <td class='text-left'><input type='text' name='entry[14][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[14][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[14][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[14][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[14][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[14][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[14][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[14][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[14][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[14][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[14][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[14][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[14][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[14][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[14][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[15][Sno]' value='15'></td>
                    <td class='text-left'><input type='text' name='entry[15][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[15][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[15][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[15][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[15][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[15][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[15][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[15][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[15][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[15][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[15][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[15][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[15][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[15][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[15][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[16][Sno]' value='16'></td>
                    <td class='text-left'><input type='text' name='entry[16][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[16][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[16][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[16][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[16][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[16][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[16][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[16][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[16][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[16][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[16][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[16][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[16][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[16][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[16][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[17][Sno]' value='17'></td>
                    <td class='text-left'><input type='text' name='entry[17][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[17][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[17][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[17][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[17][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[17][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[17][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[17][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[17][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[17][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[17][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[17][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[17][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[17][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[17][year]'></td>
                </tr>




                <tr>
                    <td class='text-left'><input type='text' name='entry[18][Sno]' value='18'></td>
                    <td class='text-left'><input type='text' name='entry[18][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[18][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[18][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[18][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[18][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[18][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[18][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[18][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[18][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[18][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[18][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[18][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[18][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[18][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[18][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[19][Sno]' value='19'></td>
                    <td class='text-left'><input type='text' name='entry[19][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[19][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[19][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[19][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[19][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[19][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[19][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[19][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[19][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[19][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[19][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[19][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[19][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[19][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[19][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[20][Sno]' value='20'></td>
                    <td class='text-left'><input type='text' name='entry[20][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[20][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[20][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[20][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[20][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[20][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[20][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[20][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[20][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[20][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[20][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[20][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[20][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[20][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[20][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[21][Sno]' value='21'></td>
                    <td class='text-left'><input type='text' name='entry[21][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[21][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[21][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[21][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[21][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[21][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[21][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[21][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[21][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[21][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[21][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[21][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[21][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[21][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[21][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[22][Sno]' value='22'></td>
                    <td class='text-left'><input type='text' name='entry[22][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[22][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[22][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[22][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[22][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[22][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[22][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[22][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[22][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[22][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[22][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[22][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[22][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[22][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[22][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[23][Sno]' value='23'></td>
                    <td class='text-left'><input type='text' name='entry[23][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[23][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[23][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[23][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[23][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[23][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[23][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[23][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[23][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[23][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[23][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[23][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[23][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[23][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[23][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[24][Sno]' value='24'></td>
                    <td class='text-left'><input type='text' name='entry[24][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[24][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[24][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[24][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[24][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[24][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[24][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[24][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[24][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[24][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[24][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[24][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[24][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[24][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[24][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[25][Sno]' value='25'></td>
                    <td class='text-left'><input type='text' name='entry[25][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[25][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[25][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[25][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[25][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[25][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[25][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[25][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[25][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[25][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[25][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[25][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[25][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[25][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[25][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[26][Sno]' value='26'></td>
                    <td class='text-left'><input type='text' name='entry[26][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[26][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[26][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[26][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[26][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[26][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[26][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[26][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[26][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[26][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[26][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[26][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[26][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[26][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[26][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[27][Sno]' value='27'></td>
                    <td class='text-left'><input type='text' name='entry[27][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[27][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[27][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[27][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[27][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[27][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[27][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[27][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[27][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[27][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[27][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[27][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[27][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[27][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[27][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[28][Sno]' value='28'></td>
                    <td class='text-left'><input type='text' name='entry[28][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[28][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[28][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[28][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[28][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[28][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[28][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[28][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[28][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[28][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[28][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[28][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[28][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[28][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[28][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[29][Sno]' value='29'></td>
                    <td class='text-left'><input type='text' name='entry[29][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[29][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[29][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[29][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[29][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[29][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[29][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[29][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[29][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[29][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[29][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[29][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[29][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[29][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[29][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[30][Sno]' value='30'></td>
                    <td class='text-left'><input type='text' name='entry[30][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[30][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[30][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[30][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[30][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[30][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[30][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[30][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[30][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[30][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[30][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[30][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[30][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[30][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[30][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[31][Sno]' value='31'></td>
                    <td class='text-left'><input type='text' name='entry[31][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[31][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[31][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[31][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[31][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[31][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[31][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[31][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[31][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[31][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[31][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[31][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[31][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[31][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[31][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[32][Sno]' value='32'></td>
                    <td class='text-left'><input type='text' name='entry[32][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[32][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[32][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[32][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[32][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[32][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[32][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[32][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[32][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[32][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[32][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[32][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[32][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[32][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[32][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[33][Sno]' value='33'></td>
                    <td class='text-left'><input type='text' name='entry[33][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[33][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[33][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[33][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[33][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[33][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[33][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[33][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[33][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[33][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[33][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[33][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[33][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[33][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[34][Sno]' value='34'></td>
                    <td class='text-left'><input type='text' name='entry[34][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[34][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[34][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[34][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[34][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[34][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[34][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[34][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[34][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[34][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[34][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[34][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[34][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[34][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[34][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[35][Sno]' value='35'></td>
                    <td class='text-left'><input type='text' name='entry[35][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[35][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[35][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[35][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[35][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[35][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[35][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[35][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[35][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[35][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[35][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[35][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[35][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[35][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[35][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[36][Sno]' value='36'></td>
                    <td class='text-left'><input type='text' name='entry[36][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[36][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[36][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[36][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[36][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[36][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[36][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[36][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[36][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[36][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[36][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[36][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[36][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[36][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[36][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[37][Sno]' value='37'></td>
                    <td class='text-left'><input type='text' name='entry[37][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[37][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[37][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[37][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[37][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[37][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[37][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[37][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[37][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[37][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[37][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[37][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[37][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[37][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[37][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[38][Sno]' value='38'></td>
                    <td class='text-left'><input type='text' name='entry[38][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[38][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[38][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[38][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[38][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[38][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[38][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[38][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[38][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[38][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[38][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[38][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[38][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[38][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[38][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[40][Sno]' value='40'></td>
                    <td class='text-left'><input type='text' name='entry[40][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[40][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[40][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[40][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[40][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[40][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[40][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[40][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[40][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[40][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[40][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[40][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[40][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[40][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[40][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[41][Sno]' value='41'></td>
                    <td class='text-left'><input type='text' name='entry[41][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[41][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[41][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[41][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[41][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[41][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[41][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[41][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[41][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[41][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[41][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[41][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[41][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[41][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[41][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[42][Sno]' value='42'></td>
                    <td class='text-left'><input type='text' name='entry[42][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[42][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[42][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[42][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[42][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[42][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[42][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[42][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[42][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[42][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[42][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[42][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[42][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[42][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[42][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[43][Sno]' value='43'></td>
                    <td class='text-left'><input type='text' name='entry[43][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[43][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[43][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[43][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[43][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[43][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[43][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[43][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[43][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[43][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[43][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[43][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[43][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[43][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[43][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[44][Sno]' value='44'></td>
                    <td class='text-left'><input type='text' name='entry[44][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[44][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[44][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[44][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[44][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[44][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[44][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[44][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[44][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[44][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[44][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[44][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[44][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[44][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[44][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[45][Sno]' value='45'></td>
                    <td class='text-left'><input type='text' name='entry[45][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[45][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[45][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[45][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[45][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[45][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[45][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[45][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[45][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[45][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[45][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[45][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[45][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[45][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[45][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[46][Sno]' value='46'></td>
                    <td class='text-left'><input type='text' name='entry[46][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[46][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[46][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[46][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[46][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[46][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[46][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[46][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[46][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[46][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[46][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[46][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[46][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[46][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[46][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[47][Sno]' value='47'></td>
                    <td class='text-left'><input type='text' name='entry[47][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[47][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[47][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[47][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[47][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[47][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[47][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[47][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[47][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[47][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[47][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[47][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[47][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[47][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[47][year]'></td>
                </tr>



                <tr>
                    <td class='text-left'><input type='text' name='entry[48][Sno]' value='48'></td>
                    <td class='text-left'><input type='text' name='entry[48][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[48][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[48][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[48][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[48][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[48][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[48][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[48][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[48][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[48][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[48][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[48][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[48][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[48][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[48][year]'></td>
                </tr><tr>
                    <td class='text-left'><input type='text' name='entry[49][Sno]' value='49'></td>
                    <td class='text-left'><input type='text' name='entry[49][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[49][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[49][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[49][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[49][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[49][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[49][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[49][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[49][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[49][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[49][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[49][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[49][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[49][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[49][year]'></td>
                </tr>


                <tr>
                    <td class='text-left'><input type='text' name='entry[50][Sno]' value='50'></td>
                    <td class='text-left'><input type='text' name='entry[50][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[50][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[50][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[50][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[50][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[50][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[50][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[50][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[50][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[50][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[50][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[50][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[50][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[50][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[50][year]'></td>
                </tr><tr>
                    <td class='text-left'><input type='text' name='entry[51][Sno]' value='51'></td>
                    <td class='text-left'><input type='text' name='entry[51][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[51][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[51][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[51][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[51][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[51][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[51][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[51][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[51][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[51][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[51][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[51][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[51][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[51][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[51][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[52][Sno]' value='52'></td>
                    <td class='text-left'><input type='text' name='entry[52][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[52][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[52][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[52][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[52][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[52][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[52][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[52][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[52][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[52][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[52][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[52][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[52][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[52][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[52][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[53][Sno]' value='53'></td>
                    <td class='text-left'><input type='text' name='entry[53][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[53][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[53][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[53][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[53][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[53][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[53][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[53][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[53][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[53][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[53][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[53][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[53][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[53][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[53][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[54][Sno]' value='54'></td>
                    <td class='text-left'><input type='text' name='entry[54][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[54][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[54][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[54][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[54][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[54][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[54][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[54][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[54][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[54][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[54][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[54][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[54][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[54][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[54][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[55][Sno]' value='55'></td>
                    <td class='text-left'><input type='text' name='entry[55][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[55][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[55][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[55][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[55][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[55][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[55][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[55][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[55][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[55][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[55][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[55][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[55][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[55][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[55][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[56][Sno]' value='56'></td>
                    <td class='text-left'><input type='text' name='entry[56][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[56][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[56][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[56][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[56][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[56][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[56][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[56][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[56][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[56][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[56][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[56][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[56][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[56][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[56][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[57][Sno]' value='57'></td>
                    <td class='text-left'><input type='text' name='entry[57][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[57][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[57][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[57][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[57][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[57][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[57][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[57][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[57][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[57][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[57][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[57][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[57][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[57][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[57][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[58][Sno]' value='58'></td>
                    <td class='text-left'><input type='text' name='entry[58][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[58][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[58][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[58][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[58][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[58][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[58][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[58][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[58][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[58][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[58][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[58][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[58][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[58][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[58][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[59][Sno]' value='59'></td>
                    <td class='text-left'><input type='text' name='entry[59][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[59][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[59][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[59][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[59][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[59][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[59][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[59][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[59][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[59][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[59][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[59][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[59][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[59][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[59][year]'></td>
                </tr>
                <tr>
                    <td class='text-left'><input type='text' name='entry[60][Sno]' value='60'></td>
                    <td class='text-left'><input type='text' name='entry[60][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[60][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[60][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[60][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[60][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[60][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[60][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[60][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[60][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[60][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[60][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[60][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[60][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[60][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[60][year]'></td>
                </tr>

                <tr>
                    <td class='text-left'><input type='text' name='entry[61][Sno]' value='61'></td>
                    <td class='text-left'><input type='text' name='entry[61][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[61][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[61][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[61][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[61][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[61][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[61][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[61][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[61][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[61][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[61][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[61][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[61][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[61][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[61][year]'></td>
                </tr>

                <tr>
                    <td class='text-left'><input type='text' name='entry[62][Sno]' value='62'></td>
                    <td class='text-left'><input type='text' name='entry[62][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[62][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[62][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[62][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[62][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[62][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[62][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[62][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[62][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[62][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[62][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[62][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[62][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[62][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[62][year]'></td>
                </tr>

                
                <tr>
                    <td class='text-left'><input type='text' name='entry[63][Sno]' value='63'></td>
                    <td class='text-left'><input type='text' name='entry[63][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[63][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[63][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[63][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[63][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[63][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[63][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[63][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[63][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[63][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[63][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[63][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[63][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[63][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[63][year]'></td>
                </tr>
                
                <tr>
                    <td class='text-left'><input type='text' name='entry[64][Sno]' value='64'></td>
                    <td class='text-left'><input type='text' name='entry[64][Particulars]'></td>
                    <td class='text-left'><input type='text' name='entry[64][Category]'></td>
                    <td class='text-left'><input type='text' name='entry[64][TotalMetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[64][totlElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[64][totalElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[64][totalSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[64][MetersInspectedDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[64][mtrElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[64][mtrElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[64][mtrSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[64][PercentageInspected]'></td>
                    <td class='text-left'><input type='text' name='entry[64][perElectroMechanicalMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[64][perElectronicMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[64][perSmartMeters]'></td>
                    <td class='text-left'><input type='text' name='entry[64][year]'></td>
                </tr>
            </tbody>
        </table>
        <button type="submit" id="saveButton">Save</button>
    </form>
</body>
</html>
