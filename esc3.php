<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumer Connections Data Entry</title>
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
    <h1>RELEASE OF NEW CONNECTIONS</h1>
    <div class="header">
        <div class="left">
            <p>Discom: MPEZ</p>
            <p>Format: ESC3</p>
        </div>
        <div class="right">
            <p>Financial Year: 2023-24</p>
            <p>Period: June 23 To March 24</p>
        </div>
    </div>
    <form id="dataForm" method="POST" action="esc3_submit.php">
        <table>
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Consumer Category (Tariff Wise)</th>
                    <th>Totao No. of new connections released during the Period </th>
                    <th>No. of new connectios released with Smart meter having pre-payment feature</th>
                    <th>No. of new connections released with non-communicable meters with pre-payment features </th>
                    <th>No. of new connections released with non-smart non-prepayment facility meters </th>
                    <th>No. of new connections released without meters </th>
                    <th>Total No. of existing metered connections at the end of Period </th>
                    <th>Total no. of existing Unmeterd connections at the end of the Period </th>
                    <th>YEAR</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="entry[1][Sno]" value="1"></td>
                    <td><input type="text" name="entry[1][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[1][TotalNewConnectionsReleased]"></td>
                    <td><input type="text" name="entry[1][NewConnectionsWithSmartMeter]"></td>
                    <td><input type="text" name="entry[1][NewConnectionsWithPrePaymentFeature]"></td>
                    <td><input type="text" name="entry[1][NewConnectionsWithNonSmartNonPrePaymentMeters]"></td>
                    <td><input type="text" name="entry[1][NewConnectionsWithoutMeters]"></td>
                    <td><input type="text" name="entry[1][TotalExistingMeteredConnections]"></td>
                    <td><input type="text" name="entry[1][TotalExistingUnmeteredConnections]"></td>
                    <td><input type="text" name="entry[1][year]"></td>
                </tr>
                <tr>
                  <td><input type="text" name="entry[2][Sno]" value="2"></td>
                    <td><input type="text" name="entry[2][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[2][TotalNewConnectionsReleased]"></td>
                    <td><input type="text" name="entry[2][NewConnectionsWithSmartMeter]"></td>
                    <td><input type="text" name="entry[2][NewConnectionsWithPrePaymentFeature]"></td>
                    <td><input type="text" name="entry[2][NewConnectionsWithNonSmartNonPrePaymentMeters]"></td>
                    <td><input type="text" name="entry[2][NewConnectionsWithoutMeters]"></td>
                    <td><input type="text" name="entry[2][TotalExistingMeteredConnections]"></td>
                    <td><input type="text" name="entry[2][TotalExistingUnmeteredConnections]"></td>
                    <td><input type="text" name="entry[2][year]"></td>
                </tr>
                <tr>
                   <td><input type="text" name="entry[3][Sno]" value="3"></td>
                    <td><input type="text" name="entry[3][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[3][TotalNewConnectionsReleased]"></td>
                    <td><input type="text" name="entry[3][NewConnectionsWithSmartMeter]"></td>
                    <td><input type="text" name="entry[3][NewConnectionsWithPrePaymentFeature]"></td>
                    <td><input type="text" name="entry[3][NewConnectionsWithNonSmartNonPrePaymentMeters]"></td>
                    <td><input type="text" name="entry[3][NewConnectionsWithoutMeters]"></td>
                    <td><input type="text" name="entry[3][TotalExistingMeteredConnections]"></td>
                    <td><input type="text" name="entry[3][TotalExistingUnmeteredConnections]"></td>
                    <td><input type="text" name="entry[3][year]"></td>
                </tr>
                <tr>
                <td><input type="text" name="entry[4][Sno]" value="4"></td>
                    <td><input type="text" name="entry[4][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[4][TotalNewConnectionsReleased]"></td>
                    <td><input type="text" name="entry[4][NewConnectionsWithSmartMeter]"></td>
                    <td><input type="text" name="entry[4][NewConnectionsWithPrePaymentFeature]"></td>
                    <td><input type="text" name="entry[4][NewConnectionsWithNonSmartNonPrePaymentMeters]"></td>
                    <td><input type="text" name="entry[4][NewConnectionsWithoutMeters]"></td>
                    <td><input type="text" name="entry[4][TotalExistingMeteredConnections]"></td>
                    <td><input type="text" name="entry[4][TotalExistingUnmeteredConnections]"></td>
                    <td><input type="text" name="entry[4][year]"></td>
                </tr>
                <tr>
                <td><input type="text" name="entry[5][Sno]" value="5"></td>
                    <td><input type="text" name="entry[5][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[5][TotalNewConnectionsReleased]"></td>
                    <td><input type="text" name="entry[5][NewConnectionsWithSmartMeter]"></td>
                    <td><input type="text" name="entry[5][NewConnectionsWithPrePaymentFeature]"></td>
                    <td><input type="text" name="entry[5][NewConnectionsWithNonSmartNonPrePaymentMeters]"></td>
                    <td><input type="text" name="entry[5][NewConnectionsWithoutMeters]"></td>
                    <td><input type="text" name="entry[5][TotalExistingMeteredConnections]"></td>
                    <td><input type="text" name="entry[5][TotalExistingUnmeteredConnections]"></td>
                    <td><input type="text" name="entry[5][year]"></td>
                </tr>
                <tr>
                <td><input type="text" name="entry[6][Sno]" value="6"></td>
                    <td><input type="text" name="entry[6][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[6][TotalNewConnectionsReleased]"></td>
                    <td><input type="text" name="entry[6][NewConnectionsWithSmartMeter]"></td>
                    <td><input type="text" name="entry[6][NewConnectionsWithPrePaymentFeature]"></td>
                    <td><input type="text" name="entry[6][NewConnectionsWithNonSmartNonPrePaymentMeters]"></td>
                    <td><input type="text" name="entry[6][NewConnectionsWithoutMeters]"></td>
                    <td><input type="text" name="entry[6][TotalExistingMeteredConnections]"></td>
                    <td><input type="text" name="entry[6][TotalExistingUnmeteredConnections]"></td>
                    <td><input type="text" name="entry[6][year]"></td>
                </tr>
                <tr>
                <td><input type="text" name="entry[7][Sno]" value="7"></td>
                    <td><input type="text" name="entry[7][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[7][TotalNewConnectionsReleased]"></td>
                    <td><input type="text" name="entry[7][NewConnectionsWithSmartMeter]"></td>
                    <td><input type="text" name="entry[7][NewConnectionsWithPrePaymentFeature]"></td>
                    <td><input type="text" name="entry[7][NewConnectionsWithNonSmartNonPrePaymentMeters]"></td>
                    <td><input type="text" name="entry[7][NewConnectionsWithoutMeters]"></td>
                    <td><input type="text" name="entry[7][TotalExistingMeteredConnections]"></td>
                    <td><input type="text" name="entry[7][TotalExistingUnmeteredConnections]"></td>
                    <td><input type="text" name="entry[7][year]"></td>
                </tr>
                <tr>
                <td><input type="text" name="entry[8][Sno]" value="8"></td>
                    <td><input type="text" name="entry[8][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[8][TotalNewConnectionsReleased]"></td>
                    <td><input type="text" name="entry[8][NewConnectionsWithSmartMeter]"></td>
                    <td><input type="text" name="entry[8][NewConnectionsWithPrePaymentFeature]"></td>
                    <td><input type="text" name="entry[8][NewConnectionsWithNonSmartNonPrePaymentMeters]"></td>
                    <td><input type="text" name="entry[8][NewConnectionsWithoutMeters]"></td>
                    <td><input type="text" name="entry[8][TotalExistingMeteredConnections]"></td>
                    <td><input type="text" name="entry[8][TotalExistingUnmeteredConnections]"></td>
                    <td><input type="text" name="entry[8][year]"></td>
                </tr>
                <tr>
                <td><input type="text" name="entry[9][Sno]" value="9"></td>
                    <td><input type="text" name="entry[9][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[9][TotalNewConnectionsReleased]"></td>
                    <td><input type="text" name="entry[9][NewConnectionsWithSmartMeter]"></td>
                    <td><input type="text" name="entry[9][NewConnectionsWithPrePaymentFeature]"></td>
                    <td><input type="text" name="entry[9][NewConnectionsWithNonSmartNonPrePaymentMeters]"></td>
                    <td><input type="text" name="entry[9][NewConnectionsWithoutMeters]"></td>
                    <td><input type="text" name="entry[9][TotalExistingMeteredConnections]"></td>
                    <td><input type="text" name="entry[9][TotalExistingUnmeteredConnections]"></td>
                    <td><input type="text" name="entry[9][year]"></td>
                </tr>
                <tr>
                <td><input type="text" name="entry[10][Sno]" value="10"></td>
                    <td><input type="text" name="entry[10][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[10][TotalNewConnectionsReleased]"></td>
                    <td><input type="text" name="entry[10][NewConnectionsWithSmartMeter]"></td>
                    <td><input type="text" name="entry[10][NewConnectionsWithPrePaymentFeature]"></td>
                    <td><input type="text" name="entry[10][NewConnectionsWithNonSmartNonPrePaymentMeters]"></td>
                    <td><input type="text" name="entry[10][NewConnectionsWithoutMeters]"></td>
                    <td><input type="text" name="entry[10][TotalExistingMeteredConnections]"></td>
                    <td><input type="text" name="entry[10][TotalExistingUnmeteredConnections]"></td>
                    <td><input type="text" name="entry[10][year]"></td>
                </tr>
                <tr>
                <td><input type="text" name="entry[11][Sno]" value="11"></td>
                    <td><input type="text" name="entry[11][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[11][TotalNewConnectionsReleased]"></td>
                    <td><input type="text" name="entry[11][NewConnectionsWithSmartMeter]"></td>
                    <td><input type="text" name="entry[11][NewConnectionsWithPrePaymentFeature]"></td>
                    <td><input type="text" name="entry[11][NewConnectionsWithNonSmartNonPrePaymentMeters]"></td>
                    <td><input type="text" name="entry[11][NewConnectionsWithoutMeters]"></td>
                    <td><input type="text" name="entry[11][TotalExistingMeteredConnections]"></td>
                    <td><input type="text" name="entry[11][TotalExistingUnmeteredConnections]"></td>
                    <td><input type="text" name="entry[11][year]"></td>
                </tr>
                <tr>
                <td><input type="text" name="entry[12][Sno]" value="12"></td>
                    <td><input type="text" name="entry[12][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[12][TotalNewConnectionsReleased]"></td>
                    <td><input type="text" name="entry[12][NewConnectionsWithSmartMeter]"></td>
                    <td><input type="text" name="entry[12][NewConnectionsWithPrePaymentFeature]"></td>
                    <td><input type="text" name="entry[12][NewConnectionsWithNonSmartNonPrePaymentMeters]"></td>
                    <td><input type="text" name="entry[12][NewConnectionsWithoutMeters]"></td>
                    <td><input type="text" name="entry[12][TotalExistingMeteredConnections]"></td>
                    <td><input type="text" name="entry[12][TotalExistingUnmeteredConnections]"></td>
                    <td><input type="text" name="entry[12][year]"></td>
                </tr>
                <tr>
                <td><input type="text" name="entry[13][Sno]" value="13"></td>
                    <td><input type="text" name="entry[13][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[13][TotalNewConnectionsReleased]"></td>
                    <td><input type="text" name="entry[13][NewConnectionsWithSmartMeter]"></td>
                    <td><input type="text" name="entry[13][NewConnectionsWithPrePaymentFeature]"></td>
                    <td><input type="text" name="entry[13][NewConnectionsWithNonSmartNonPrePaymentMeters]"></td>
                    <td><input type="text" name="entry[13][NewConnectionsWithoutMeters]"></td>
                    <td><input type="text" name="entry[13][TotalExistingMeteredConnections]"></td>
                    <td><input type="text" name="entry[13][TotalExistingUnmeteredConnections]"></td>
                    <td><input type="text" name="entry[13][year]"></td>
                </tr>
                <tr>
                <td><input type="text" name="entry[14][Sno]" value="14"></td>
                    <td><input type="text" name="entry[14][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[14][TotalNewConnectionsReleased]"></td>
                    <td><input type="text" name="entry[14][NewConnectionsWithSmartMeter]"></td>
                    <td><input type="text" name="entry[14][NewConnectionsWithPrePaymentFeature]"></td>
                    <td><input type="text" name="entry[14][NewConnectionsWithNonSmartNonPrePaymentMeters]"></td>
                    <td><input type="text" name="entry[14][NewConnectionsWithoutMeters]"></td>
                    <td><input type="text" name="entry[14][TotalExistingMeteredConnections]"></td>
                    <td><input type="text" name="entry[14][TotalExistingUnmeteredConnections]"></td>
                    <td><input type="text" name="entry[14][year]"></td>
                </tr>
                <tr>
                <td><input type="text" name="entry[15][Sno]" value="15"></td>
                    <td><input type="text" name="entry[15][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[15][TotalNewConnectionsReleased]"></td>
                    <td><input type="text" name="entry[15][NewConnectionsWithSmartMeter]"></td>
                    <td><input type="text" name="entry[15][NewConnectionsWithPrePaymentFeature]"></td>
                    <td><input type="text" name="entry[15][NewConnectionsWithNonSmartNonPrePaymentMeters]"></td>
                    <td><input type="text" name="entry[15][NewConnectionsWithoutMeters]"></td>
                    <td><input type="text" name="entry[15][TotalExistingMeteredConnections]"></td>
                    <td><input type="text" name="entry[15][TotalExistingUnmeteredConnections]"></td>
                    <td><input type="text" name="entry[15][year]"></td>
                </tr>
                <tr>
                <td><input type="text" name="entry[16][Sno]" value="16"></td>
                    <td><input type="text" name="entry[16][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[16][TotalNewConnectionsReleased]"></td>
                    <td><input type="text" name="entry[16][NewConnectionsWithSmartMeter]"></td>
                    <td><input type="text" name="entry[16][NewConnectionsWithPrePaymentFeature]"></td>
                    <td><input type="text" name="entry[16][NewConnectionsWithNonSmartNonPrePaymentMeters]"></td>
                    <td><input type="text" name="entry[16][NewConnectionsWithoutMeters]"></td>
                    <td><input type="text" name="entry[16][TotalExistingMeteredConnections]"></td>
                    <td><input type="text" name="entry[16][TotalExistingUnmeteredConnections]"></td>
                    <td><input type="text" name="entry[16][year]"></td>
                </tr>
                <tr>
                <td><input type="text" name="entry[17][Sno]" value="17"></td>
                    <td><input type="text" name="entry[17][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[17][TotalNewConnectionsReleased]"></td>
                    <td><input type="text" name="entry[17][NewConnectionsWithSmartMeter]"></td>
                    <td><input type="text" name="entry[17][NewConnectionsWithPrePaymentFeature]"></td>
                    <td><input type="text" name="entry[17][NewConnectionsWithNonSmartNonPrePaymentMeters]"></td>
                    <td><input type="text" name="entry[17][NewConnectionsWithoutMeters]"></td>
                    <td><input type="text" name="entry[17][TotalExistingMeteredConnections]"></td>
                    <td><input type="text" name="entry[17][TotalExistingUnmeteredConnections]"></td>
                    <td><input type="text" name="entry[17][year]"></td>
                </tr>
                <tr>
                <td><input type="text" name="entry[18][Sno]" value="18"></td>
                    <td><input type="text" name="entry[18][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[18][TotalNewConnectionsReleased]"></td>
                    <td><input type="text" name="entry[18][NewConnectionsWithSmartMeter]"></td>
                    <td><input type="text" name="entry[18][NewConnectionsWithPrePaymentFeature]"></td>
                    <td><input type="text" name="entry[18][NewConnectionsWithNonSmartNonPrePaymentMeters]"></td>
                    <td><input type="text" name="entry[18][NewConnectionsWithoutMeters]"></td>
                    <td><input type="text" name="entry[18][TotalExistingMeteredConnections]"></td>
                    <td><input type="text" name="entry[18][TotalExistingUnmeteredConnections]"></td>
                    <td><input type="text" name="entry[18][year]"></td>
                </tr>
                <tr>
                <td><input type="text" name="entry[19][Sno]" value="19"></td>
                    <td><input type="text" name="entry[19][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[19][TotalNewConnectionsReleased]"></td>
                    <td><input type="text" name="entry[19][NewConnectionsWithSmartMeter]"></td>
                    <td><input type="text" name="entry[19][NewConnectionsWithPrePaymentFeature]"></td>
                    <td><input type="text" name="entry[19][NewConnectionsWithNonSmartNonPrePaymentMeters]"></td>
                    <td><input type="text" name="entry[19][NewConnectionsWithoutMeters]"></td>
                    <td><input type="text" name="entry[19][TotalExistingMeteredConnections]"></td>
                    <td><input type="text" name="entry[19][TotalExistingUnmeteredConnections]"></td>
                    <td><input type="text" name="entry[19][year]"></td>
                </tr>
                <tr>
                <td><input type="text" name="entry[20][Sno]" value="20"></td>
                    <td><input type="text" name="entry[20][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[20][TotalNewConnectionsReleased]"></td>
                    <td><input type="text" name="entry[20][NewConnectionsWithSmartMeter]"></td>
                    <td><input type="text" name="entry[20][NewConnectionsWithPrePaymentFeature]"></td>
                    <td><input type="text" name="entry[20][NewConnectionsWithNonSmartNonPrePaymentMeters]"></td>
                    <td><input type="text" name="entry[20][NewConnectionsWithoutMeters]"></td>
                    <td><input type="text" name="entry[20][TotalExistingMeteredConnections]"></td>
                    <td><input type="text" name="entry[20][TotalExistingUnmeteredConnections]"></td>
                    <td><input type="text" name="entry[20][year]"></td>
                </tr>
            </tbody>
        </table>
        <button type="submit">Save</button>
    </form>
</body>
</html>
