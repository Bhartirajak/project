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
    <h1>SUMMARY OF CASES WHERE SUPPLY AT MORE THAN ONE POINT HAS BEEN GIVEN IN ONE PREMISES</h1>
    <div class="header">
        <div class="left">
            <p>Discom: MPEZ</p>
            <p>Format: ESC-1</p>
        </div>
        <div class="right">
            <p>Financial Year: 2023-24</p>
            <p>Period: June 23 To March 24</p>
        </div>
    </div>

    <form id="dataForm" method="POST" action="esc1_Submit.php">
        <table>
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>NAME OF CIRCLE</th>
                    <th>NAME OF DIVISION</th>
                    <th>No. of cases where supply at more than one point has been given in one premises</th>
                    <th>ADDRESS OF PREMISES WHERE MORE THAN ONE CONNECTION GIVEN</th>
                    <th>REASON FOR GIVING MORE THAN ONE CONNECTION</th>
                    <th>YEAR</th>
                </tr>
            </thead>
            <tr>
                    <td><input type="text" name="entry[1][SrNo]" value="1"></td>
                    <td><input type="text" name="entry[1][CircleName]"></td>
                    <td><input type="text" name="entry[1][DivisionName]"></td>
                    <td><input type="text" name="entry[1][CasesOfMultipleConnections]"></td>
                    <td><input type="text" name="entry[1][PremisesAddress]"></td>
                    <td><input type="text" name="entry[1][ReasonForMultipleConnections]"></td>
                    <td><input type="text" name="entry[1][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[2][SrNo]" value="2"></td>
                    <td><input type="text" name="entry[2][CircleName]"></td>
                    <td><input type="text" name="entry[2][DivisionName]"></td>
                    <td><input type="text" name="entry[2][CasesOfMultipleConnections]"></td>
                    <td><input type="text" name="entry[2][PremisesAddress]"></td>
                    <td><input type="text" name="entry[2][ReasonForMultipleConnections]"></td>
                    <td><input type="text" name="entry[2][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[3][SrNo]" value="3"></td>
                    <td><input type="text" name="entry[3][CircleName]"></td>
                    <td><input type="text" name="entry[3][DivisionName]"></td>
                    <td><input type="text" name="entry[3][CasesOfMultipleConnections]"></td>
                    <td><input type="text" name="entry[3][PremisesAddress]"></td>
                    <td><input type="text" name="entry[3][ReasonForMultipleConnections]"></td>
                    <td><input type="text" name="entry[3][year]"></td>
                    <tr>
                    <td><input type="text" name="entry[4][SrNo]" value="4"></td>
                    <td><input type="text" name="entry[4][CircleName]"></td>
                    <td><input type="text" name="entry[4][DivisionName]"></td>
                    <td><input type="text" name="entry[4][CasesOfMultipleConnections]"></td>
                    <td><input type="text" name="entry[4][PremisesAddress]"></td>
                    <td><input type="text" name="entry[4][ReasonForMultipleConnections]"></td>
                    <td><input type="text" name="entry[4][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[5][SrNo]" value="5"></td>
                    <td><input type="text" name="entry[5][CircleName]"></td>
                    <td><input type="text" name="entry[5][DivisionName]"></td>
                    <td><input type="text" name="entry[5][CasesOfMultipleConnections]"></td>
                    <td><input type="text" name="entry[5][PremisesAddress]"></td>
                    <td><input type="text" name="entry[5][ReasonForMultipleConnections]"></td>
                    <td><input type="text" name="entry[5][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[6][SrNo]" value="6"></td>
                    <td><input type="text" name="entry[6][CircleName]"></td>
                    <td><input type="text" name="entry[6][DivisionName]"></td>
                    <td><input type="text" name="entry[6][CasesOfMultipleConnections]"></td>
                    <td><input type="text" name="entry[6][PremisesAddress]"></td>
                    <td><input type="text" name="entry[6][ReasonForMultipleConnections]"></td>
                    <td><input type="text" name="entry[6][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[7][SrNo]" value="7"></td>
                    <td><input type="text" name="entry[7][CircleName]"></td>
                    <td><input type="text" name="entry[7][DivisionName]"></td>
                    <td><input type="text" name="entry[7][CasesOfMultipleConnections]"></td>
                    <td><input type="text" name="entry[7][PremisesAddress]"></td>
                    <td><input type="text" name="entry[7][ReasonForMultipleConnections]"></td>
                    <td><input type="text" name="entry[7][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[8][SrNo]" value="8"></td>
                    <td><input type="text" name="entry[8][CircleName]"></td>
                    <td><input type="text" name="entry[8][DivisionName]"></td>
                    <td><input type="text" name="entry[8][CasesOfMultipleConnections]"></td>
                    <td><input type="text" name="entry[8][PremisesAddress]"></td>
                    <td><input type="text" name="entry[8][ReasonForMultipleConnections]"></td>
                    <td><input type="text" name="entry[8][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[9][SrNo]" value="9"></td>
                    <td><input type="text" name="entry[9][CircleName]"></td>
                    <td><input type="text" name="entry[9][DivisionName]"></td>
                    <td><input type="text" name="entry[9][CasesOfMultipleConnections]"></td>
                    <td><input type="text" name="entry[9][PremisesAddress]"></td>
                    <td><input type="text" name="entry[9][ReasonForMultipleConnections]"></td>
                    <td><input type="text" name="entry[9][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[10][SrNo]" value="10"></td>
                    <td><input type="text" name="entry[10][CircleName]"></td>
                    <td><input type="text" name="entry[10][DivisionName]"></td>
                    <td><input type="text" name="entry[10][CasesOfMultipleConnections]"></td>
                    <td><input type="text" name="entry[10][PremisesAddress]"></td>
                    <td><input type="text" name="entry[10][ReasonForMultipleConnections]"></td>
                    <td><input type="text" name="entry[10][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[11][SrNo]" value="11"></td>
                    <td><input type="text" name="entry[11][CircleName]"></td>
                    <td><input type="text" name="entry[11][DivisionName]"></td>
                    <td><input type="text" name="entry[11][CasesOfMultipleConnections]"></td>
                    <td><input type="text" name="entry[11][PremisesAddress]"></td>
                    <td><input type="text" name="entry[11][ReasonForMultipleConnections]"></td>
                    <td><input type="text" name="entry[11][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[12][SrNo]" value="12"></td>
                    <td><input type="text" name="entry[12][CircleName]"></td>
                    <td><input type="text" name="entry[12][DivisionName]"></td>
                    <td><input type="text" name="entry[12][CasesOfMultipleConnections]"></td>
                    <td><input type="text" name="entry[12][PremisesAddress]"></td>
                    <td><input type="text" name="entry[12][ReasonForMultipleConnections]"></td>
                    <td><input type="text" name="entry[12][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[13][SrNo]" value="13"></td>
                    <td><input type="text" name="entry[13][CircleName]"></td>
                    <td><input type="text" name="entry[13][DivisionName]"></td>
                    <td><input type="text" name="entry[13][CasesOfMultipleConnections]"></td>
                    <td><input type="text" name="entry[13][PremisesAddress]"></td>
                    <td><input type="text" name="entry[13][ReasonForMultipleConnections]"></td>
                    <td><input type="text" name="entry[13][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[14][SrNo]" value="14"></td>
                    <td><input type="text" name="entry[14][CircleName]"></td>
                    <td><input type="text" name="entry[14][DivisionName]"></td>
                    <td><input type="text" name="entry[14][CasesOfMultipleConnections]"></td>
                    <td><input type="text" name="entry[14][PremisesAddress]"></td>
                    <td><input type="text" name="entry[14][ReasonForMultipleConnections]"></td>
                    <td><input type="text" name="entry[14][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[15][SrNo]" value="15"></td>
                    <td><input type="text" name="entry[15][CircleName]"></td>
                    <td><input type="text" name="entry[15][DivisionName]"></td>
                    <td><input type="text" name="entry[15][CasesOfMultipleConnections]"></td>
                    <td><input type="text" name="entry[15][PremisesAddress]"></td>
                    <td><input type="text" name="entry[15][ReasonForMultipleConnections]"></td>
                    <td><input type="text" name="entry[15][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[16][SrNo]" value="16"></td>
                    <td><input type="text" name="entry[16][CircleName]"></td>
                    <td><input type="text" name="entry[16][DivisionName]"></td>
                    <td><input type="text" name="entry[16][CasesOfMultipleConnections]"></td>
                    <td><input type="text" name="entry[16][PremisesAddress]"></td>
                    <td><input type="text" name="entry[16][ReasonForMultipleConnections]"></td>
                    <td><input type="text" name="entry[16][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[17][SrNo]" value="17"></td>
                    <td><input type="text" name="entry[17][CircleName]"></td>
                    <td><input type="text" name="entry[17][DivisionName]"></td>
                    <td><input type="text" name="entry[17][CasesOfMultipleConnections]"></td>
                    <td><input type="text" name="entry[17][PremisesAddress]"></td>
                    <td><input type="text" name="entry[17][ReasonForMultipleConnections]"></td>
                    <td><input type="text" name="entry[17][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[18][SrNo]" value="18"></td>
                    <td><input type="text" name="entry[18][CircleName]"></td>
                    <td><input type="text" name="entry[18][DivisionName]"></td>
                    <td><input type="text" name="entry[18][CasesOfMultipleConnections]"></td>
                    <td><input type="text" name="entry[18][PremisesAddress]"></td>
                    <td><input type="text" name="entry[18][ReasonForMultipleConnections]"></td>
                    <td><input type="text" name="entry[18][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[19][SrNo]" value="19"></td>
                    <td><input type="text" name="entry[19][CircleName]"></td>
                    <td><input type="text" name="entry[19][DivisionName]"></td>
                    <td><input type="text" name="entry[19][CasesOfMultipleConnections]"></td>
                    <td><input type="text" name="entry[19][PremisesAddress]"></td>
                    <td><input type="text" name="entry[19][ReasonForMultipleConnections]"></td>
                    <td><input type="text" name="entry[19][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[20][SrNo]" value="20"></td>
                    <td><input type="text" name="entry[20][CircleName]"></td>
                    <td><input type="text" name="entry[20][DivisionName]"></td>
                    <td><input type="text" name="entry[20][CasesOfMultipleConnections]"></td>
                    <td><input type="text" name="entry[20][PremisesAddress]"></td>
                    <td><input type="text" name="entry[20][ReasonForMultipleConnections]"></td>
                    <td><input type="text" name="entry[20][year]"></td>
                </tr>
            </tbody>
        </table>
        <button type="submit">Save</button>
    </form>
</body>
</html>