<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: burlywood;
        }

        td input[type="text"],
        td input[type="number"] {
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
    <h1>GRID INTERACTIVE RE SYSTEM (NET METERING/GROSS METERING ARRANGEMENT)</h1>
    <div class="header">
        <div class="left">
            <p>Discom: MPEZ</p>
            <p>Format: ESC-12</p>
        </div>
        <div class="right">
            <p>Financial Year: 2023-24</p>
            <p>Period: June 23 To March 24</p>
        </div>
    </div>

    <form id="dataForm" method="POST" action="esc12_Submit.php">
        <table>
            <thead>
                <tr>
                    <th>Sr.No.</th>
                    <th>Consumer Category</th>
                    <th>Total existing consumers</th>
                    <th>Total Connected Load (kW) against Col.3</th>
                    <th>Consumers with Net Metering connections at the start of the Period</th>
                    <th>Total Connected Load (kW) against Col.5</th>
                    <th>New Net Metering connections released during the Period</th>
                    <th>Total connected Load (kW) against Col.7</th>
                    <th>Consumers with Net Metering connections at the end of the Period</th>
                    <th>Total Connected Load (kW) against Col.9</th>
                    <th>Total Units Exported to Discom during the period (MU)</th>
                    <th>Total Units Imported from Discom during the period (MU)</th>
                    <th>RPO Claimed by Discom during the period (MU)</th>
                    <th>Rate (in Rs/kWh) considered for settlement of unadjusted net credited units</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
               <tr>
                    <td><input type="text" name="entry[1][SerialNumber]" value="1"></td>
                    <td><input type="text" name="entry[1][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[1][TotalExistingConsumers]"></td>
                    <td><input type="text" name="entry[1][TotalConnectedLoadCol3]"></td>
                    <td><input type="text" name="entry[1][ConsumersNetMeteringStartPeriod]"></td>
                    <td><input type="text" name="entry[1][TotalConnectedLoadCol5]"></td>
                    <td><input type="text" name="entry[1][NewNetMeteringConnectionsReleased]"></td>
                    <td><input type="text" name="entry[1][TotalConnectedLoadCol7]"></td>
                    <td><input type="text" name="entry[1][ConsumersNetMeteringEndPeriod]"></td>
                    <td><input type="text" name="entry[1][TotalConnectedLoadCol9]"></td>
                    <td><input type="text" name="entry[1][TotalUnitsExportedToDiscom]"></td>
                    <td><input type="text" name="entry[1][TotalUnitsImportedFromDiscom]"></td>
                    <td><input type="text" name="entry[1][RPOClaimedByDiscom]"></td>
                    <td><input type="text" name="entry[1][RateForSettlement]"></td>
                    <td><input type="text" name="entry[1][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[2][SerialNumber]" value="2"></td>
                    <td><input type="text" name="entry[2][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[2][TotalExistingConsumers]"></td>
                    <td><input type="text" name="entry[2][TotalConnectedLoadCol3]"></td>
                    <td><input type="text" name="entry[2][ConsumersNetMeteringStartPeriod]"></td>
                    <td><input type="text" name="entry[2][TotalConnectedLoadCol5]"></td>
                    <td><input type="text" name="entry[2][NewNetMeteringConnectionsReleased]"></td>
                    <td><input type="text" name="entry[2][TotalConnectedLoadCol7]"></td>
                    <td><input type="text" name="entry[2][ConsumersNetMeteringEndPeriod]"></td>
                    <td><input type="text" name="entry[2][TotalConnectedLoadCol9]"></td>
                    <td><input type="text" name="entry[2][TotalUnitsExportedToDiscom]"></td>
                    <td><input type="text" name="entry[2][TotalUnitsImportedFromDiscom]"></td>
                    <td><input type="text" name="entry[2][RPOClaimedByDiscom]"></td>
                    <td><input type="text" name="entry[2][RateForSettlement]"></td>
                    <td><input type="text" name="entry[2][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[3][SerialNumber]" value="3"></td>
                    <td><input type="text" name="entry[3][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[3][TotalExistingConsumers]"></td>
                    <td><input type="text" name="entry[3][TotalConnectedLoadCol3]"></td>
                    <td><input type="text" name="entry[3][ConsumersNetMeteringStartPeriod]"></td>
                    <td><input type="text" name="entry[3][TotalConnectedLoadCol5]"></td>
                    <td><input type="text" name="entry[3][NewNetMeteringConnectionsReleased]"></td>
                    <td><input type="text" name="entry[3][TotalConnectedLoadCol7]"></td>
                    <td><input type="text" name="entry[3][ConsumersNetMeteringEndPeriod]"></td>
                    <td><input type="text" name="entry[3][TotalConnectedLoadCol9]"></td>
                    <td><input type="text" name="entry[3][TotalUnitsExportedToDiscom]"></td>
                    <td><input type="text" name="entry[3][TotalUnitsImportedFromDiscom]"></td>
                    <td><input type="text" name="entry[3][RPOClaimedByDiscom]"></td>
                    <td><input type="text" name="entry[3][RateForSettlement]"></td>
                    <td><input type="text" name="entry[3][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[4][SerialNumber]" value="4"></td>
                    <td><input type="text" name="entry[4][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[4][TotalExistingConsumers]"></td>
                    <td><input type="text" name="entry[4][TotalConnectedLoadCol3]"></td>
                    <td><input type="text" name="entry[4][ConsumersNetMeteringStartPeriod]"></td>
                    <td><input type="text" name="entry[4][TotalConnectedLoadCol5]"></td>
                    <td><input type="text" name="entry[4][NewNetMeteringConnectionsReleased]"></td>
                    <td><input type="text" name="entry[4][TotalConnectedLoadCol7]"></td>
                    <td><input type="text" name="entry[4][ConsumersNetMeteringEndPeriod]"></td>
                    <td><input type="text" name="entry[4][TotalConnectedLoadCol9]"></td>
                    <td><input type="text" name="entry[4][TotalUnitsExportedToDiscom]"></td>
                    <td><input type="text" name="entry[4][TotalUnitsImportedFromDiscom]"></td>
                    <td><input type="text" name="entry[4][RPOClaimedByDiscom]"></td>
                    <td><input type="text" name="entry[4][RateForSettlement]"></td>
                    <td><input type="text" name="entry[4][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[5][SerialNumber]" value="5"></td>
                    <td><input type="text" name="entry[5][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[5][TotalExistingConsumers]"></td>
                    <td><input type="text" name="entry[5][TotalConnectedLoadCol3]"></td>
                    <td><input type="text" name="entry[5][ConsumersNetMeteringStartPeriod]"></td>
                    <td><input type="text" name="entry[5][TotalConnectedLoadCol5]"></td>
                    <td><input type="text" name="entry[5][NewNetMeteringConnectionsReleased]"></td>
                    <td><input type="text" name="entry[5][TotalConnectedLoadCol7]"></td>
                    <td><input type="text" name="entry[5][ConsumersNetMeteringEndPeriod]"></td>
                    <td><input type="text" name="entry[5][TotalConnectedLoadCol9]"></td>
                    <td><input type="text" name="entry[5][TotalUnitsExportedToDiscom]"></td>
                    <td><input type="text" name="entry[5][TotalUnitsImportedFromDiscom]"></td>
                    <td><input type="text" name="entry[5][RPOClaimedByDiscom]"></td>
                    <td><input type="text" name="entry[5][RateForSettlement]"></td>
                    <td><input type="text" name="entry[5][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[6][SerialNumber]" value="6"></td>
                    <td><input type="text" name="entry[6][ConsumerCategory]"></td>
                    <td><input type="text" name="entry[6][TotalExistingConsumers]"></td>
                    <td><input type="text" name="entry[6][TotalConnectedLoadCol3]"></td>
                    <td><input type="text" name="entry[6][ConsumersNetMeteringStartPeriod]"></td>
                    <td><input type="text" name="entry[6][TotalConnectedLoadCol5]"></td>
                    <td><input type="text" name="entry[6][NewNetMeteringConnectionsReleased]"></td>
                    <td><input type="text" name="entry[6][TotalConnectedLoadCol7]"></td>
                    <td><input type="text" name="entry[6][ConsumersNetMeteringEndPeriod]"></td>
                    <td><input type="text" name="entry[6][TotalConnectedLoadCol9]"></td>
                    <td><input type="text" name="entry[6][TotalUnitsExportedToDiscom]"></td>
                    <td><input type="text" name="entry[6][TotalUnitsImportedFromDiscom]"></td>
                    <td><input type="text" name="entry[6][RPOClaimedByDiscom]"></td>
                    <td><input type="text" name="entry[6][RateForSettlement]"></td>
                    <td><input type="text" name="entry[6][year]"></td>
                </tr>
                </tbody>
                </table>
        <button type="submit">Save</button>
    </form>
</body>
</html>
