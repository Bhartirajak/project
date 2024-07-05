<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meter Installation Summary</title>
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
    <h1>DETALIS OF VARIOUS TYPE OF METERS INSTALLED IN AREA OF LICENSEE	(RURAL AREA)</h1>
    <div class="header">
        <div class="left">
            <p>Discom: MPEZ</p>
            <p>Format: ESC-4B</p>
        </div>
        <div class="right">
            <p>Financial Year: 2023-24</p>
            <p>Period: June 23 To March 24</p>
        </div>
    </div>

    <form id="dataForm" method="POST" action="esc4b_submit.php">
        <table>
            <thead>
                <tr>
                    <th>S. NO.</th>
                    <th>Type of meters</th>
                    <th>No. of meters installed at the beginning of the Period</th>
                    <th>No. of meters installed during the Period</th>
                    <th>Total no. of meters installed at the end Period</th>
                    <th>No. of meters available in Stock</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class='text-left'><input type='text' name='entry[1][Sno]' value='1'></td>
                    <td class='text-left'><input type='text' name='entry[1][MeterType]'></td>
                    <td class='text-left'><input type='text' name='entry[1][MetersInstalledAtBeginning]'></td>
                    <td class='text-left'><input type='text' name='entry[1][MetersInstalledDuringPeriod]'></td>
                    <td class='text-left'><input type='text' name='entry[1][TotalMetersInstalledAtEnd]'></td>
                    <td class='text-left'><input type='text' name='entry[1][MetersAvailableInStock]'></td>
                    <td class='text-left'><input type='text' name='entry[1][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[2][Sno]' value='2'></td>
                    <td><input type='text' name='entry[2][MeterType]'></td>
                    <td><input type='text' name='entry[2][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[2][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[2][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[2][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[2][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[3][Sno]' value='3'></td>
                    <td><input type='text' name='entry[3][MeterType]'></td>
                    <td><input type='text' name='entry[3][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[3][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[3][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[3][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[3][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[4][Sno]' value='4'></td>
                    <td><input type='text' name='entry[4][MeterType]'></td>
                    <td><input type='text' name='entry[4][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[4][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[4][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[4][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[4][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[5][Sno]' value='5'></td>
                    <td><input type='text' name='entry[5][MeterType]'></td>
                    <td><input type='text' name='entry[5][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[5][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[5][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[5][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[5][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[6][Sno]' value='6'></td>
                    <td><input type='text' name='entry[6][MeterType]'></td>
                    <td><input type='text' name='entry[6][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[6][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[6][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[6][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[6][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[7][Sno]' value='7'></td>
                    <td><input type='text' name='entry[7][MeterType]'></td>
                    <td><input type='text' name='entry[7][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[7][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[7][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[7][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[7][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[8][Sno]' value='8'></td>
                    <td><input type='text' name='entry[8][MeterType]'></td>
                    <td><input type='text' name='entry[8][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[8][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[8][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[8][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[8][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[9][Sno]' value='9'></td>
                    <td><input type='text' name='entry[9][MeterType]'></td>
                    <td><input type='text' name='entry[9][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[9][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[9][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[9][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[9][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[10][Sno]' value='10'></td>
                    <td><input type='text' name='entry[10][MeterType]'></td>
                    <td><input type='text' name='entry[10][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[10][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[10][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[10][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[10][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[11][Sno]' value='11'></td>
                    <td><input type='text' name='entry[11][MeterType]'></td>
                    <td><input type='text' name='entry[11][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[11][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[11][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[11][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[11][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[12][Sno]' value='12'></td>
                    <td><input type='text' name='entry[12][MeterType]'></td>
                    <td><input type='text' name='entry[12][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[12][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[12][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[12][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[12][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[13][Sno]' value='13'></td>
                    <td><input type='text' name='entry[13][MeterType]'></td>
                    <td><input type='text' name='entry[13][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[13][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[13][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[13][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[13][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[14][Sno]' value='14'></td>
                    <td><input type='text' name='entry[14][MeterType]'></td>
                    <td><input type='text' name='entry[14][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[14][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[14][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[14][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[14][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[15][Sno]' value='15'></td>
                    <td><input type='text' name='entry[15][MeterType]'></td>
                    <td><input type='text' name='entry[15][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[15][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[15][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[15][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[15][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[16][Sno]' value='16'></td>
                    <td><input type='text' name='entry[16][MeterType]'></td>
                    <td><input type='text' name='entry[16][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[16][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[16][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[16][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[16][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[17][Sno]' value='17'></td>
                    <td><input type='text' name='entry[17][MeterType]'></td>
                    <td><input type='text' name='entry[17][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[17][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[17][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[17][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[17][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[18][Sno]' value='18'></td>
                    <td><input type='text' name='entry[18][MeterType]'></td>
                    <td><input type='text' name='entry[18][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[18][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[18][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[18][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[18][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[19][Sno]' value='19'></td>
                    <td><input type='text' name='entry[19][MeterType]'></td>
                    <td><input type='text' name='entry[19][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[19][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[19][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[19][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[19][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[20][Sno]' value='20'></td>
                    <td><input type='text' name='entry[20][MeterType]'></td>
                    <td><input type='text' name='entry[20][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[20][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[20][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[20][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[20][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[21][Sno]' value='21'></td>
                    <td><input type='text' name='entry[21][MeterType]'></td>
                    <td><input type='text' name='entry[21][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[21][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[21][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[21][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[21][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[22][Sno]' value='22'></td>
                    <td><input type='text' name='entry[22][MeterType]'></td>
                    <td><input type='text' name='entry[22][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[22][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[22][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[22][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[22][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[23][Sno]' value='23'></td>
                    <td><input type='text' name='entry[23][MeterType]'></td>
                    <td><input type='text' name='entry[23][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[23][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[23][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[23][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[23][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[24][Sno]' value='24'></td>
                    <td><input type='text' name='entry[24][MeterType]'></td>
                    <td><input type='text' name='entry[24][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[24][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[24][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[24][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[24][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[25][Sno]' value='25'></td>
                    <td><input type='text' name='entry[25][MeterType]'></td>
                    <td><input type='text' name='entry[25][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[25][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[25][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[25][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[25][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[26][Sno]' value='26'></td>
                    <td><input type='text' name='entry[26][MeterType]'></td>
                    <td><input type='text' name='entry[26][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[26][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[26][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[26][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[26][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[27][Sno]' value='27'></td>
                    <td><input type='text' name='entry[27][MeterType]'></td>
                    <td><input type='text' name='entry[27][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[27][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[27][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[27][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[27][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[28][Sno]' value='28'></td>
                    <td><input type='text' name='entry[28][MeterType]'></td>
                    <td><input type='text' name='entry[28][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[28][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[28][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[28][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[28][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[29][Sno]' value='29'></td>
                    <td><input type='text' name='entry[29][MeterType]'></td>
                    <td><input type='text' name='entry[29][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[29][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[29][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[29][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[29][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[30][Sno]' value='30'></td>
                    <td><input type='text' name='entry[30][MeterType]'></td>
                    <td><input type='text' name='entry[30][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[30][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[30][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[30][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[30][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[31][Sno]' value='31'></td>
                    <td><input type='text' name='entry[31][MeterType]'></td>
                    <td><input type='text' name='entry[31][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[31][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[31][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[31][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[31][year]'></td>
                </tr>
                <tr>
                    <td><input type='text' name='entry[32][Sno]' value='32'></td>
                    <td><input type='text' name='entry[32][MeterType]'></td>
                    <td><input type='text' name='entry[32][MetersInstalledAtBeginning]'></td>
                    <td><input type='text' name='entry[32][MetersInstalledDuringPeriod]'></td>
                    <td><input type='text' name='entry[32][TotalMetersInstalledAtEnd]'></td>
                    <td><input type='text' name='entry[32][MetersAvailableInStock]'></td>
                    <td><input type='text' name='entry[32][year]'></td>
                </tr>


            </tbody>
        </table>
        <button type="submit">Save</button>
    </form>
</body>
</html>
