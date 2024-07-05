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
    <h1>CONNECTED CONSUMERS HAVING ARREARS FOR MORE THAN 3 MONTHS & DETAILS OF PERMANANTLY DISCONNECTED CONSUMBER						</h1>
    <div class="header">
        <div class="left">
            <p>Discom: MPEZ</p>
            <p>Format: ESC-11A</p>
        </div>
        <div class="right">
            <p>Financial Year: 2023-24</p>
            <p>Period: June 23 To March 24</p>
        </div>
    </div>

    <form id="dataForm" method="POST" action="esc11a_Submit.php">
        <table>
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Name of Region</th>
                    <th>No. of connected consumers who are in arrears of more than three months</th>
                    <th>Amount of arrears against Col. 3 (Rs. In Lakh)</th>
                    <th>Reasons for non-disconnection of consumers of col. 3</th>
                    <th>No. of connections permanently disconnected</th>
                    <th>Amount of arrears against col. 6 (Rs. In Lakhs)</th>
                    <th>Year</th>
                </tr>
            </thead>
        
                <tr>
                    <td><input type="text" name="entry[1][Sno]" value="1"></td>
                    <td><input type="text" name="entry[1][RegionName]"></td>
                    <td><input type="text" name="entry[1][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[1][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[1][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[1][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[1][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[1][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[2][Sno]"value="2"></td>
                    <td><input type="text" name="entry[2][RegionName]"></td>
                    <td><input type="text" name="entry[2][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[2][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[21][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[2][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[2][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[2][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[3][Sno]"value="3"></td>
                    <td><input type="text" name="entry[3][RegionName]"></td>
                    <td><input type="text" name="entry[3][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[3][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[3][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[3][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[3][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[3][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[4][Sno]"value="4"></td>
                    <td><input type="text" name="entry[4][RegionName]"></td>
                    <td><input type="text" name="entry[4][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[4][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[4][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[4][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[4][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[4][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[5][Sno]"value="5"></td>
                    <td><input type="text" name="entry[5][RegionName]"></td>
                    <td><input type="text" name="entry[5][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[5][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[5][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[5][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[5][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[5][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[6][Sno]"value="6"></td>
                    <td><input type="text" name="entry[6][RegionName]"></td>
                    <td><input type="text" name="entry[6][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[6][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[6][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[6][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[6][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[6][year]"></td>
                </tr>

                <tr>
                    <td><input type="text" name="entry[7][Sno]"value="7"></td>
                    <td><input type="text" name="entry[7][RegionName]"></td>
                    <td><input type="text" name="entry[7][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[7][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[7][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[7][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[7][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[7][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[8][Sno]"value="8"></td>
                    <td><input type="text" name="entry[8][RegionName]"></td>
                    <td><input type="text" name="entry[8][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[8][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[8][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[8][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[8][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[8][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[9][Sno]"value="9"></td>
                    <td><input type="text" name="entry[9][RegionName]"></td>
                    <td><input type="text" name="entry[9][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[9][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[9][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[9][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[9][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[9][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[10][Sno]"value="10"></td>
                    <td><input type="text" name="entry[10][RegionName]"></td>
                    <td><input type="text" name="entry[10][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[10][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[10][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[10][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[10][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[10][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[11][Sno]"value="11"></td>
                    <td><input type="text" name="entry[11][RegionName]"></td>
                    <td><input type="text" name="entry[11][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[11][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[11][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[11][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[11][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[11][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[12][Sno]"value="12"></td>
                    <td><input type="text" name="entry[12][RegionName]"></td>
                    <td><input type="text" name="entry[12][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[12][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[12][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[12][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[12][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[12][year]"></td>
                </tr>

                <tr>
                    <td><input type="text" name="entry[13][Sno]"value="13"></td>
                    <td><input type="text" name="entry[13][RegionName]"></td>
                    <td><input type="text" name="entry[13][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[13][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[13][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[13][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[13][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[13][year]"></td>
                </tr>


                 <tr>
                    <td><input type="text" name="entry[14][Sno]"value="14"></td>
                    <td><input type="text" name="entry[14][RegionName]"></td>
                    <td><input type="text" name="entry[14][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[14][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[14][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[14][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[14][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[14][year]"></td>
                </tr> <tr>
                    <td><input type="text" name="entry[15][Sno]"value="15"></td>
                    <td><input type="text" name="entry[15][RegionName]"></td>
                    <td><input type="text" name="entry[15][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[15][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[15][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[15][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[15][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[15][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[16][Sno]"value="16"></td>
                    <td><input type="text" name="entry[16][RegionName]"></td>
                    <td><input type="text" name="entry[16][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[16][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[16][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[16][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[16][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[16][year]"></td>
                </tr>

                <tr>
                    <td><input type="text" name="entry[17][Sno]"value="17"></td>
                    <td><input type="text" name="entry[17][RegionName]"></td>
                    <td><input type="text" name="entry[17][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[17][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[17][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[17][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[17][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[17][year]"></td>
                </tr>



                <tr>
                    <td><input type="text" name="entry[18][Sno]"value="18"></td>
                    <td><input type="text" name="entry[18][RegionName]"></td>
                    <td><input type="text" name="entry[18][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[18][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[18][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[18][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[18][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[18][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[19][Sno]"value="19"></td>
                    <td><input type="text" name="entry[19][RegionName]"></td>
                    <td><input type="text" name="entry[19][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[19][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[19][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[19][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[19][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[19][year]"></td>
                </tr>

                <tr>
                    <td><input type="text" name="entry[20][Sno]"value="20"></td>
                    <td><input type="text" name="entry[20][RegionName]"></td>
                    <td><input type="text" name="entry[20][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[20][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[20][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[20][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[20][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[20][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[21][Sno]"value="21"></td>
                    <td><input type="text" name="entry[21][RegionName]"></td>
                    <td><input type="text" name="entry[21][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[21][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[21][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[21][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[21][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[21][year]"></td>
                </tr>
                
                <tr>
                    <td><input type="text" name="entry[22][Sno]"value="22"></td>
                    <td><input type="text" name="entry[22][RegionName]"></td>
                    <td><input type="text" name="entry[22][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[22][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[22][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[22][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[22][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[22][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[23][Sno]"value="23"></td>
                    <td><input type="text" name="entry[23][RegionName]"></td>
                    <td><input type="text" name="entry[23][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[23][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[23][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[23][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[23][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[23][year]"></td>
                </tr>
                
                <tr>
                    <td><input type="text" name="entry[24][Sno]"value="24"></td>
                    <td><input type="text" name="entry[24][RegionName]"></td>
                    <td><input type="text" name="entry[24][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[24][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[24][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[24][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[24][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[24][year]"></td>
                </tr>
                
                <tr>
                    <td><input type="text" name="entry[25][Sno]"value="25"></td>
                    <td><input type="text" name="entry[25][RegionName]"></td>
                    <td><input type="text" name="entry[25][ConnectedConsumersArrearsMoreThan3Months]"></td>
                    <td><input type="text" name="entry[25][ArrearsAmountInLakh]"></td>
                    <td><input type="text" name="entry[25][ReasonsForNonDisconnection]"></td>
                    <td><input type="text" name="entry[25][ConnectionsPermanentlyDisconnected]"></td>
                    <td><input type="text" name="entry[25][ArrearsAmountForDisconnectedConnectionsInLakh]"></td>
                    <td><input type="text" name="entry[25][year]"></td>
                </tr>

            </tbody>
        </table>
        <button type="submit">Save</button>
    </form>
</body>

</html>
