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
    <h1>DETAILS OF PAYMENT AVENUES AND PAYMENT MADE BY CONSUMERS</h1>
    <div class="header">
        <div class="left">
            <p>Discom: MPEZ</p>
            <p>Format: ESC-9</p>
        </div>
        <div class="right">
            <p>Financial Year: 2023-24</p>
            <p>Period: June 23 To March 24</p>
        </div>
    </div>

    <form id="dataForm" method="POST" action="esc9_Submit.php">
        <table>
            <thead>
                <tr>
                    <th>Consumer Category (as per Retail Supply Tariff Order)</th>
                    <th>Total Consumers Billed (Nos) during the period</th>
                    <th>Total Billed Amount(INR) </th>
                    <th>Collection(INR)Cash</th>
                    <th>Collection Cheque, Drop boxes</th>
                    <th>Collection Other Online Modes such as ECS, credit card, Apps/UPI</th>
                    <th>Collection Total Collection made during the period</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tr>
                <td><input type="text" name="entry[1][ConsumerCategory]" ></td>
                <td><input type="text" name="entry[1][TotalConsumersBilled]"></td>
                <td><input type="text" name="entry[1][TotalBilledAmountINR]"></td>
                <td><input type="text" name="entry[1][CollectionCashINR]"></td>
                <td><input type="text" name="entry[1][CollectionChequeINR]"></td>
                <td><input type="text" name="entry[1][CollectionOnlineModesINR]"></td>
                <td><input type="text" name="entry[1][TotalCollectionINR]"></td>
                <td><input type="text" name="entry[1][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[2][ConsumerCategory]" ></td>
                <td><input type="text" name="entry[2][TotalConsumersBilled]"></td>
                <td><input type="text" name="entry[2][TotalBilledAmountINR]"></td>
                <td><input type="text" name="entry[2][CollectionCashINR]"></td>
                <td><input type="text" name="entry[2][CollectionChequeINR]"></td>
                <td><input type="text" name="entry[2][CollectionOnlineModesINR]"></td>
                <td><input type="text" name="entry[2][TotalCollectionINR]"></td>
                <td><input type="text" name="entry[2][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[3][ConsumerCategory]" ></td>
                <td><input type="text" name="entry[3][TotalConsumersBilled]"></td>
                <td><input type="text" name="entry[3][TotalBilledAmountINR]"></td>
                <td><input type="text" name="entry[3][CollectionCashINR]"></td>
                <td><input type="text" name="entry[3][CollectionChequeINR]"></td>
                <td><input type="text" name="entry[3][CollectionOnlineModesINR]"></td>
                <td><input type="text" name="entry[3][TotalCollectionINR]"></td>
                <td><input type="text" name="entry[3][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[4][ConsumerCategory]" ></td>
                <td><input type="text" name="entry[4][TotalConsumersBilled]"></td>
                <td><input type="text" name="entry[4][TotalBilledAmountINR]"></td>
                <td><input type="text" name="entry[4][CollectionCashINR]"></td>
                <td><input type="text" name="entry[4][CollectionChequeINR]"></td>
                <td><input type="text" name="entry[4][CollectionOnlineModesINR]"></td>
                <td><input type="text" name="entry[4][TotalCollectionINR]"></td>
                <td><input type="text" name="entry[4][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[5][ConsumerCategory]" ></td>
                <td><input type="text" name="entry[5][TotalConsumersBilled]"></td>
                <td><input type="text" name="entry[5][TotalBilledAmountINR]"></td>
                <td><input type="text" name="entry[5][CollectionCashINR]"></td>
                <td><input type="text" name="entry[5][CollectionChequeINR]"></td>
                <td><input type="text" name="entry[5][CollectionOnlineModesINR]"></td>
                <td><input type="text" name="entry[5][TotalCollectionINR]"></td>
                <td><input type="text" name="entry[5][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[6][ConsumerCategory]" ></td>
                <td><input type="text" name="entry[6][TotalConsumersBilled]"></td>
                <td><input type="text" name="entry[6][TotalBilledAmountINR]"></td>
                <td><input type="text" name="entry[6][CollectionCashINR]"></td>
                <td><input type="text" name="entry[6][CollectionChequeINR]"></td>
                <td><input type="text" name="entry[6][CollectionOnlineModesINR]"></td>
                <td><input type="text" name="entry[6][TotalCollectionINR]"></td>
                <td><input type="text" name="entry[6][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[7][ConsumerCategory]" ></td>
                <td><input type="text" name="entry[7][TotalConsumersBilled]"></td>
                <td><input type="text" name="entry[7][TotalBilledAmountINR]"></td>
                <td><input type="text" name="entry[7][CollectionCashINR]"></td>
                <td><input type="text" name="entry[7][CollectionChequeINR]"></td>
                <td><input type="text" name="entry[7][CollectionOnlineModesINR]"></td>
                <td><input type="text" name="entry[7][TotalCollectionINR]"></td>
                <td><input type="text" name="entry[7][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[8][ConsumerCategory]" ></td>
                <td><input type="text" name="entry[8][TotalConsumersBilled]"></td>
                <td><input type="text" name="entry[8][TotalBilledAmountINR]"></td>
                <td><input type="text" name="entry[8][CollectionCashINR]"></td>
                <td><input type="text" name="entry[8][CollectionChequeINR]"></td>
                <td><input type="text" name="entry[8][CollectionOnlineModesINR]"></td>
                <td><input type="text" name="entry[8][TotalCollectionINR]"></td>
                <td><input type="text" name="entry[8][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[9][ConsumerCategory]" ></td>
                <td><input type="text" name="entry[9][TotalConsumersBilled]"></td>
                <td><input type="text" name="entry[9][TotalBilledAmountINR]"></td>
                <td><input type="text" name="entry[9][CollectionCashINR]"></td>
                <td><input type="text" name="entry[9][CollectionChequeINR]"></td>
                <td><input type="text" name="entry[9][CollectionOnlineModesINR]"></td>
                <td><input type="text" name="entry[9][TotalCollectionINR]"></td>
                <td><input type="text" name="entry[9][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[10][ConsumerCategory]" ></td>
                <td><input type="text" name="entry[10][TotalConsumersBilled]"></td>
                <td><input type="text" name="entry[10][TotalBilledAmountINR]"></td>
                <td><input type="text" name="entry[10][CollectionCashINR]"></td>
                <td><input type="text" name="entry[10][CollectionChequeINR]"></td>
                <td><input type="text" name="entry[10][CollectionOnlineModesINR]"></td>
                <td><input type="text" name="entry[10][TotalCollectionINR]"></td>
                <td><input type="text" name="entry[10][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[11][ConsumerCategory]" ></td>
                <td><input type="text" name="entry[11][TotalConsumersBilled]"></td>
                <td><input type="text" name="entry[11][TotalBilledAmountINR]"></td>
                <td><input type="text" name="entry[11][CollectionCashINR]"></td>
                <td><input type="text" name="entry[11][CollectionChequeINR]"></td>
                <td><input type="text" name="entry[11][CollectionOnlineModesINR]"></td>
                <td><input type="text" name="entry[11][TotalCollectionINR]"></td>
                <td><input type="text" name="entry[11][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[12][ConsumerCategory]" ></td>
                <td><input type="text" name="entry[12][TotalConsumersBilled]"></td>
                <td><input type="text" name="entry[12][TotalBilledAmountINR]"></td>
                <td><input type="text" name="entry[12][CollectionCashINR]"></td>
                <td><input type="text" name="entry[12][CollectionChequeINR]"></td>
                <td><input type="text" name="entry[12][CollectionOnlineModesINR]"></td>
                <td><input type="text" name="entry[12][TotalCollectionINR]"></td>
                <td><input type="text" name="entry[12][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[13][ConsumerCategory]" ></td>
                <td><input type="text" name="entry[13][TotalConsumersBilled]"></td>
                <td><input type="text" name="entry[13][TotalBilledAmountINR]"></td>
                <td><input type="text" name="entry[13][CollectionCashINR]"></td>
                <td><input type="text" name="entry[13][CollectionChequeINR]"></td>
                <td><input type="text" name="entry[13][CollectionOnlineModesINR]"></td>
                <td><input type="text" name="entry[13][TotalCollectionINR]"></td>
                <td><input type="text" name="entry[13][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[14][ConsumerCategory]" ></td>
                <td><input type="text" name="entry[14][TotalConsumersBilled]"></td>
                <td><input type="text" name="entry[14][TotalBilledAmountINR]"></td>
                <td><input type="text" name="entry[14][CollectionCashINR]"></td>
                <td><input type="text" name="entry[14][CollectionChequeINR]"></td>
                <td><input type="text" name="entry[14][CollectionOnlineModesINR]"></td>
                <td><input type="text" name="entry[14][TotalCollectionINR]"></td>
                <td><input type="text" name="entry[14][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[15][ConsumerCategory]" ></td>
                <td><input type="text" name="entry[15][TotalConsumersBilled]"></td>
                <td><input type="text" name="entry[15][TotalBilledAmountINR]"></td>
                <td><input type="text" name="entry[15][CollectionCashINR]"></td>
                <td><input type="text" name="entry[15][CollectionChequeINR]"></td>
                <td><input type="text" name="entry[15][CollectionOnlineModesINR]"></td>
                <td><input type="text" name="entry[15][TotalCollectionINR]"></td>
                <td><input type="text" name="entry[15][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[16][ConsumerCategory]" ></td>
                <td><input type="text" name="entry[16][TotalConsumersBilled]"></td>
                <td><input type="text" name="entry[16][TotalBilledAmountINR]"></td>
                <td><input type="text" name="entry[16][CollectionCashINR]"></td>
                <td><input type="text" name="entry[16][CollectionChequeINR]"></td>
                <td><input type="text" name="entry[16][CollectionOnlineModesINR]"></td>
                <td><input type="text" name="entry[16][TotalCollectionINR]"></td>
                <td><input type="text" name="entry[16][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[17][ConsumerCategory]" ></td>
                <td><input type="text" name="entry[17][TotalConsumersBilled]"></td>
                <td><input type="text" name="entry[17][TotalBilledAmountINR]"></td>
                <td><input type="text" name="entry[17][CollectionCashINR]"></td>
                <td><input type="text" name="entry[17][CollectionChequeINR]"></td>
                <td><input type="text" name="entry[17][CollectionOnlineModesINR]"></td>
                <td><input type="text" name="entry[17][TotalCollectionINR]"></td>
                <td><input type="text" name="entry[17][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[18][ConsumerCategory]" ></td>
                <td><input type="text" name="entry[18][TotalConsumersBilled]"></td>
                <td><input type="text" name="entry[18][TotalBilledAmountINR]"></td>
                <td><input type="text" name="entry[18][CollectionCashINR]"></td>
                <td><input type="text" name="entry[18][CollectionChequeINR]"></td>
                <td><input type="text" name="entry[18][CollectionOnlineModesINR]"></td>
                <td><input type="text" name="entry[18][TotalCollectionINR]"></td>
                <td><input type="text" name="entry[18][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[19][ConsumerCategory]" ></td>
                <td><input type="text" name="entry[19][TotalConsumersBilled]"></td>
                <td><input type="text" name="entry[19][TotalBilledAmountINR]"></td>
                <td><input type="text" name="entry[19][CollectionCashINR]"></td>
                <td><input type="text" name="entry[19][CollectionChequeINR]"></td>
                <td><input type="text" name="entry[19][CollectionOnlineModesINR]"></td>
                <td><input type="text" name="entry[19][TotalCollectionINR]"></td>
                <td><input type="text" name="entry[19][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[20][ConsumerCategory]" ></td>
                <td><input type="text" name="entry[20][TotalConsumersBilled]"></td>
                <td><input type="text" name="entry[20][TotalBilledAmountINR]"></td>
                <td><input type="text" name="entry[20][CollectionCashINR]"></td>
                <td><input type="text" name="entry[20][CollectionChequeINR]"></td>
                <td><input type="text" name="entry[20][CollectionOnlineModesINR]"></td>
                <td><input type="text" name="entry[20][TotalCollectionINR]"></td>
                <td><input type="text" name="entry[20][year]"></td>
            </tr>
         </tbody>
        </table>
        <button type="submit">Save</button>
    </form>
</body>

</html>     