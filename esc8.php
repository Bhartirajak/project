<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
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
    <h1>PROVISIONAL BILLING DETAILS</h1>
    <div class="header">
        <div class="left">
            <p>Discom: MPEZ</p>
            <p>Format: ESC-8</p>
        </div>
        <div class="right">
            <p>Financial Year: 2023-24</p>
            <p>Period: June 23 To March 24</p>
        </div>
    </div>

    <form id="dataForm" method="POST" action="esc8_Submit.php">
        <table>
            <thead>
            <tr>
            <th>Consumber Category (as per Retail Supply Tariff Order)</th>
            <th> Total no. of Connections for which meter reading was done during the period HT</th>
            <th> Total no. of Connections for which meter reading was done during the period LT</th>
            <th>No of connections billed on Meter Reading Basis HT</th>
            <th>No of connections billed on Meter Reading Basis LT</th>
            <th>No. of connections billed on Provisional Basis (as per provisions of clause 8.42 & 8.43 of the Supply code) HT</th>
             <th>No. of connections billed on Provisional Basis (as per provisions of clause 8.42 & 8.43 of the Supply code)LT</th>
              <th>% of connections billed on Provisional Basis HT</th>
             <th>% of connections billed on Provisional Basis LT</th>
             <th>YEAR</th>
            
            
        </tr>
        </thead>
        <tr>
            <td><input type="text" name="entry[1][ConsumerCategory]" ></td>
            <td><input type="text" name="entry[1][TotalConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[1][TotalConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[1][BilledConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[1][BilledConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[1][BilledConnectionsProvisionalHT]"></td>
            <td><input type="text" name="entry[1][BilledConnectionsProvisionalLT]"></td>
            <td><input type="text" name="entry[1][PercentageBilledProvisionalHT]"></td>
            <td><input type="text" name="entry[1][PercentageBilledProvisionalLT]"></td>
            <td><input type="text" name="entry[1][year]"></td>
           </tr>
           <tr>
            <td><input type="text" name="entry[2][ConsumerCategory]" ></td>
            <td><input type="text" name="entry[2][TotalConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[2][TotalConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[2][BilledConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[2][BilledConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[2][BilledConnectionsProvisionalHT]"></td>
            <td><input type="text" name="entry[2][BilledConnectionsProvisionalLT]"></td>
            <td><input type="text" name="entry[2][PercentageBilledProvisionalHT]"></td>
            <td><input type="text" name="entry[2][PercentageBilledProvisionalLT]"></td>
            <td><input type="text" name="entry[2][year]"></td>
           </tr>


           <tr>
            <td><input type="text" name="entry[3][ConsumerCategory]"></td>
            <td><input type="text" name="entry[3][TotalConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[3][TotalConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[3][BilledConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[3][BilledConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[3][BilledConnectionsProvisionalHT]"></td>
            <td><input type="text" name="entry[3][BilledConnectionsProvisionalLT]"></td>
            <td><input type="text" name="entry[3][PercentageBilledProvisionalHT]"></td>
            <td><input type="text" name="entry[3][PercentageBilledProvisionalLT]"></td>
            <td><input type="text" name="entry[3][year]"></td>
           </tr>
           <tr>
            <td><input type="text" name="entry[4][ConsumerCategory]" ></td>
            <td><input type="text" name="entry[4][TotalConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[4][TotalConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[4][BilledConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[4][BilledConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[4][BilledConnectionsProvisionalHT]"></td>
            <td><input type="text" name="entry[4][BilledConnectionsProvisionalLT]"></td>
            <td><input type="text" name="entry[4][PercentageBilledProvisionalHT]"></td>
            <td><input type="text" name="entry[4][PercentageBilledProvisionalLT]"></td>
            <td><input type="text" name="entry[4][year]"></td>
           </tr>
           <tr>
            <td><input type="text" name="entry[5][ConsumerCategory]" ></td>
            <td><input type="text" name="entry[5][TotalConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[5][TotalConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[5][BilledConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[5][BilledConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[5][BilledConnectionsProvisionalHT]"></td>
            <td><input type="text" name="entry[5][BilledConnectionsProvisionalLT]"></td>
            <td><input type="text" name="entry[5][PercentageBilledProvisionalHT]"></td>
            <td><input type="text" name="entry[5][PercentageBilledProvisionalLT]"></td>
            <td><input type="text" name="entry[5][year]"></td>
           </tr>
           <tr>
            <td><input type="text" name="entry[6][ConsumerCategory]" ></td>
            <td><input type="text" name="entry[6][TotalConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[6][TotalConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[6][BilledConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[6][BilledConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[6][BilledConnectionsProvisionalHT]"></td>
            <td><input type="text" name="entry[6][BilledConnectionsProvisionalLT]"></td>
            <td><input type="text" name="entry[6][PercentageBilledProvisionalHT]"></td>
            <td><input type="text" name="entry[6][PercentageBilledProvisionalLT]"></td>
            <td><input type="text" name="entry[6][year]"></td>
           </tr>
           <tr>
            <td><input type="text" name="entry[7][ConsumerCategory]" ></td>
            <td><input type="text" name="entry[7][TotalConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[7][TotalConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[7][BilledConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[7][BilledConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[7][BilledConnectionsProvisionalHT]"></td>
            <td><input type="text" name="entry[7][BilledConnectionsProvisionalLT]"></td>
            <td><input type="text" name="entry[7][PercentageBilledProvisionalHT]"></td>
            <td><input type="text" name="entry[7][PercentageBilledProvisionalLT]"></td>
            <td><input type="text" name="entry[7][year]"></td>
           </tr>
           <tr>
            <td><input type="text" name="entry[8][ConsumerCategory]" ></td>
            <td><input type="text" name="entry[8][TotalConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[8][TotalConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[8][BilledConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[8][BilledConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[8][BilledConnectionsProvisionalHT]"></td>
            <td><input type="text" name="entry[8][BilledConnectionsProvisionalLT]"></td>
            <td><input type="text" name="entry[8][PercentageBilledProvisionalHT]"></td>
            <td><input type="text" name="entry[8][PercentageBilledProvisionalLT]"></td>
            <td><input type="text" name="entry[8][year]"></td>
           </tr>
           <tr>
            <td><input type="text" name="entry[9][ConsumerCategory]" ></td>
            <td><input type="text" name="entry[9][TotalConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[9][TotalConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[9][BilledConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[9][BilledConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[9][BilledConnectionsProvisionalHT]"></td>
            <td><input type="text" name="entry[9][BilledConnectionsProvisionalLT]"></td>
            <td><input type="text" name="entry[9][PercentageBilledProvisionalHT]"></td>
            <td><input type="text" name="entry[9][PercentageBilledProvisionalLT]"></td>
            <td><input type="text" name="entry[9][year]"></td>
           </tr>
           <tr>
            <td><input type="text" name="entry[10][ConsumerCategory]" ></td>
            <td><input type="text" name="entry[10][TotalConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[10][TotalConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[10][BilledConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[10][BilledConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[10][BilledConnectionsProvisionalHT]"></td>
            <td><input type="text" name="entry[10][BilledConnectionsProvisionalLT]"></td>
            <td><input type="text" name="entry[10][PercentageBilledProvisionalHT]"></td>
            <td><input type="text" name="entry[10][PercentageBilledProvisionalLT]"></td>
            <td><input type="text" name="entry[10][year]"></td>
           </tr>
           <tr>
            <td><input type="text" name="entry[11][ConsumerCategory]" ></td>
            <td><input type="text" name="entry[11][TotalConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[11][TotalConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[11][BilledConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[11][BilledConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[11][BilledConnectionsProvisionalHT]"></td>
            <td><input type="text" name="entry[11][BilledConnectionsProvisionalLT]"></td>
            <td><input type="text" name="entry[11][PercentageBilledProvisionalHT]"></td>
            <td><input type="text" name="entry[11][PercentageBilledProvisionalLT]"></td>
            <td><input type="text" name="entry[11][year]"></td>
           </tr>
           <tr>
            <td><input type="text" name="entry[12][ConsumerCategory]" ></td>
            <td><input type="text" name="entry[12][TotalConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[12][TotalConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[12][BilledConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[12][BilledConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[12][BilledConnectionsProvisionalHT]"></td>
            <td><input type="text" name="entry[12][BilledConnectionsProvisionalLT]"></td>
            <td><input type="text" name="entry[12][PercentageBilledProvisionalHT]"></td>
            <td><input type="text" name="entry[12][PercentageBilledProvisionalLT]"></td>
            <td><input type="text" name="entry[12][year]"></td>
           </tr>

           <tr>
            <td><input type="text" name="entry[13][ConsumerCategory]" ></td>
            <td><input type="text" name="entry[13][TotalConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[13][TotalConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[13][BilledConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[13][BilledConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[13][BilledConnectionsProvisionalHT]"></td>
            <td><input type="text" name="entry[13][BilledConnectionsProvisionalLT]"></td>
            <td><input type="text" name="entry[13][PercentageBilledProvisionalHT]"></td>
            <td><input type="text" name="entry[13][PercentageBilledProvisionalLT]"></td>
            <td><input type="text" name="entry[13][year]"></td>
           </tr>
           <tr>
            <td><input type="text" name="entry[14][ConsumerCategory]" ></td>
            <td><input type="text" name="entry[14][TotalConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[14][TotalConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[14][BilledConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[14][BilledConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[14][BilledConnectionsProvisionalHT]"></td>
            <td><input type="text" name="entry[14][BilledConnectionsProvisionalLT]"></td>
            <td><input type="text" name="entry[14][PercentageBilledProvisionalHT]"></td>
            <td><input type="text" name="entry[14][PercentageBilledProvisionalLT]"></td>
            <td><input type="text" name="entry[14][year]"></td>
           </tr>
           <tr>
            <td><input type="text" name="entry[15][ConsumerCategory]"></td>
            <td><input type="text" name="entry[15][TotalConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[15][TotalConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[15][BilledConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[15][BilledConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[15][BilledConnectionsProvisionalHT]"></td>
            <td><input type="text" name="entry[15][BilledConnectionsProvisionalLT]"></td>
            <td><input type="text" name="entry[15][PercentageBilledProvisionalHT]"></td>
            <td><input type="text" name="entry[15][PercentageBilledProvisionalLT]"></td>
            <td><input type="text" name="entry[15][year]"></td>
           </tr>


           <tr>
            <td><input type="text" name="entry[16][ConsumerCategory]" ></td>
            <td><input type="text" name="entry[16][TotalConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[16][TotalConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[16][BilledConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[16][BilledConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[16][BilledConnectionsProvisionalHT]"></td>
            <td><input type="text" name="entry[16][BilledConnectionsProvisionalLT]"></td>
            <td><input type="text" name="entry[16][PercentageBilledProvisionalHT]"></td>
            <td><input type="text" name="entry[16][PercentageBilledProvisionalLT]"></td>
            <td><input type="text" name="entry[16][year]"></td>
           </tr>
           <tr>
            <td><input type="text" name="entry[17][ConsumerCategory]" ></td>
            <td><input type="text" name="entry[17][TotalConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[17][TotalConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[17][BilledConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[17][BilledConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[17][BilledConnectionsProvisionalHT]"></td>
            <td><input type="text" name="entry[17][BilledConnectionsProvisionalLT]"></td>
            <td><input type="text" name="entry[17][PercentageBilledProvisionalHT]"></td>
            <td><input type="text" name="entry[17][PercentageBilledProvisionalLT]"></td>
            <td><input type="text" name="entry[17][year]"></td>
           </tr>
           <tr>
            <td><input type="text" name="entry[18][ConsumerCategory]"></td>
            <td><input type="text" name="entry[18][TotalConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[18][TotalConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[18][BilledConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[18][BilledConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[18][BilledConnectionsProvisionalHT]"></td>
            <td><input type="text" name="entry[18][BilledConnectionsProvisionalLT]"></td>
            <td><input type="text" name="entry[18][PercentageBilledProvisionalHT]"></td>
            <td><input type="text" name="entry[18][PercentageBilledProvisionalLT]"></td>
            <td><input type="text" name="entry[18][year]"></td>
           </tr>

           <tr>
            <td><input type="text" name="entry[19][ConsumerCategory]" ></td>
            <td><input type="text" name="entry[19][TotalConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[19][TotalConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[19][BilledConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[19][BilledConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[19][BilledConnectionsProvisionalHT]"></td>
            <td><input type="text" name="entry[19][BilledConnectionsProvisionalLT]"></td>
            <td><input type="text" name="entry[19][PercentageBilledProvisionalHT]"></td>
            <td><input type="text" name="entry[19][PercentageBilledProvisionalLT]"></td>
            <td><input type="text" name="entry[19][year]"></td>
           </tr>
           <tr>
            <td><input type="text" name="entry[20][ConsumerCategory]"></td>
            <td><input type="text" name="entry[20][TotalConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[20][TotalConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[20][BilledConnectionsMeterReadingHT]"></td>
            <td><input type="text" name="entry[20][BilledConnectionsMeterReadingLT]"></td>
            <td><input type="text" name="entry[20][BilledConnectionsProvisionalHT]"></td>
            <td><input type="text" name="entry[20][BilledConnectionsProvisionalLT]"></td>
            <td><input type="text" name="entry[20][PercentageBilledProvisionalHT]"></td>
            <td><input type="text" name="entry[20][PercentageBilledProvisionalLT]"></td>
            <td><input type="text" name="entry[20][year]"></td>
           </tr>
        </tbody>
        </table>
        <button type="submit">Save</button>
    </form>
</body>

</html>