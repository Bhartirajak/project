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
    <h1>DISPUTED/ERRONEOUS BILLS(URBAN AREA	)</h1>
    <div class="header">
        <div class="left">
            <p>Discom: MPEZ</p>
            <p>Format: ESC10A</p>
        </div>
        <div class="right">
            <p>Financial Year: 2023-24</p>
            <p>Period: June 23 To March 24</p>
        </div>
    </div>
    <form id="dataForm" method="POST" action="esc10a_submit.php">
        <table>
            <thead>
                <tr>
                    <th>S.No. </th>
                    <th>Name of Region </th>
                    <th>No. of complaints pending at the beginning of the period </th>
                    <th>No. of complaints received during the period </th>
                    <th>Total complaints received </th>
                    <th>No. of complaints resolved on the same day of its receipt (except for HT Consumers) if no additional information required  </th>
                    <th>No. of complaints resolved within 5 days (in case additional information required )</th>
                    <th>No. of complaints pending at the end of the period </th>
                    <th>YEAR</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="entry[1][Sno]" value="1"></td>
                    <td><input type="text" name="entry[1][RegionName]"></td>
                    <td><input type="text" name="entry[1][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[1][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[1][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[1][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[1][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[1][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[1][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[2][Sno]" value="2"></td>
                    <td><input type="text" name="entry[2][RegionName]"></td>
                    <td><input type="text" name="entry[2][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[2][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[2][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[2][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[2][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[2][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[2][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[3][Sno]" value="3"></td>
                    <td><input type="text" name="entry[3][RegionName]"></td>
                    <td><input type="text" name="entry[3][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[3][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[3][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[3][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[3][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[3][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[3][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[4][Sno]" value="4"></td>
                    <td><input type="text" name="entry[4][RegionName]"></td>
                    <td><input type="text" name="entry[4][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[4][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[4][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[4][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[4][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[4][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[4][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[5][Sno]" value="5"></td>
                    <td><input type="text" name="entry[5][RegionName]"></td>
                    <td><input type="text" name="entry[5][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[5][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[5][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[5][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[5][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[5][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[5][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[6][Sno]" value="6"></td>
                    <td><input type="text" name="entry[6][RegionName]"></td>
                    <td><input type="text" name="entry[6][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[6][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[6][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[6][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[6][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[6][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[6][year]"></td>
                </tr>

                <tr>
                    <td><input type="text" name="entry[7][Sno]" value="7"></td>
                    <td><input type="text" name="entry[7][RegionName]"></td>
                    <td><input type="text" name="entry[7][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[7][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[7][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[7][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[7][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[7][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[7][year]"></td>
                </tr> <tr>
                    <td><input type="text" name="entry[8][Sno]" value="8"></td>
                    <td><input type="text" name="entry[8][RegionName]"></td>
                    <td><input type="text" name="entry[8][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[8][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[8][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[8][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[8][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[8][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[8][year]"></td>
                </tr>

                <tr>
                    <td><input type="text" name="entry[9][Sno]" value="9"></td>
                    <td><input type="text" name="entry[9][RegionName]"></td>
                    <td><input type="text" name="entry[9][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[9][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[9][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[9][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[9][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[9][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[9][year]"></td>
                </tr>

                <tr>
                    <td><input type="text" name="entry[10][Sno]" value="10"></td>
                    <td><input type="text" name="entry[10][RegionName]"></td>
                    <td><input type="text" name="entry[10][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[10][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[10][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[10][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[10][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[10][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[10][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[11][Sno]" value="11"></td>
                    <td><input type="text" name="entry[11][RegionName]"></td>
                    <td><input type="text" name="entry[11][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[11][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[11][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[11][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[11][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[11[ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[11][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[12][Sno]" value="12"></td>
                    <td><input type="text" name="entry[12][RegionName]"></td>
                    <td><input type="text" name="entry[12][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[12][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[12][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[12][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[12][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[12][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[12][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[13][Sno]" value="13"></td>
                    <td><input type="text" name="entry[13][RegionName]"></td>
                    <td><input type="text" name="entry[13][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[13][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[13][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[13][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[13][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[13][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[13][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[14][Sno]" value="14"></td>
                    <td><input type="text" name="entry[14][RegionName]"></td>
                    <td><input type="text" name="entry[14][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[14][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[14][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[14][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[14][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[14][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[14][year]"></td>
                </tr>

                <tr>
                    <td><input type="text" name="entry[15][Sno]" value="15"></td>
                    <td><input type="text" name="entry[15][RegionName]"></td>
                    <td><input type="text" name="entry[15][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[15][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[15][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[15][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[15][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[15][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[15][year]"></td>
                </tr>

                <tr>
                    <td><input type="text" name="entry[16][Sno]" value="16"></td>
                    <td><input type="text" name="entry[16][RegionName]"></td>
                    <td><input type="text" name="entry[16][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[16][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[16][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[16][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[16][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[16][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[16][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[17][Sno]" value="17"></td>
                    <td><input type="text" name="entry[17][RegionName]"></td>
                    <td><input type="text" name="entry[17][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[17][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[17][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[17][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[17][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[17][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[17][year]"></td>
                </tr>


                <tr>
                    <td><input type="text" name="entry[18][Sno]" value="18"></td>
                    <td><input type="text" name="entry[18][RegionName]"></td>
                    <td><input type="text" name="entry[18][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[18][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[18][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[18][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[18][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[18][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[18][year]"></td>
                </tr>

                <tr>
                    <td><input type="text" name="entry[19][Sno]" value="19"></td>
                    <td><input type="text" name="entry[19][RegionName]"></td>
                    <td><input type="text" name="entry[19][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[19][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[19][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[19][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[19][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[19][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[19][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[20][Sno]" value="20"></td>
                    <td><input type="text" name="entry[20][RegionName]"></td>
                    <td><input type="text" name="entry[20][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[20][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[20][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[20][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[20][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[20][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[20][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[21][Sno]" value="21"></td>
                    <td><input type="text" name="entry[21][RegionName]"></td>
                    <td><input type="text" name="entry[21][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[21][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[21][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[21][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[21][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[21][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[21][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[22][Sno]" value="22"></td>
                    <td><input type="text" name="entry[22][RegionName]"></td>
                    <td><input type="text" name="entry[22][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[22][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[22][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[22][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[22][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[22][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[22][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[23][Sno]" value="23"></td>
                    <td><input type="text" name="entry[23][RegionName]"></td>
                    <td><input type="text" name="entry[23][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[23][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[23][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[23][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[23][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[23][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[23][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[24][Sno]" value="24"></td>
                    <td><input type="text" name="entry[24][RegionName]"></td>
                    <td><input type="text" name="entry[24][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[24][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[24][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[24][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[24][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[24][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[24][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[25][Sno]" value="25"></td>
                    <td><input type="text" name="entry[25][RegionName]"></td>
                    <td><input type="text" name="entry[25][ComplaintsPendingBeginning]"></td>
                    <td><input type="text" name="entry[25][ComplaintsReceivedDuringPeriod]"></td>
                    <td><input type="text" name="entry[25][TotalComplaintsReceived]"></td>
                    <td><input type="text" name="entry[25][ComplaintsResolvedSameDay]"></td>
                    <td><input type="text" name="entry[25][ComplaintsResolvedWithin5Days]"></td>
                    <td><input type="text" name="entry[25][ComplaintsPendingEnd]"></td>
                    <td><input type="text" name="entry[25][year]"></td>
                </tr>
               
                </tbody>
        </table>
        <button type="submit">Save</button>
    </form>
</body>
</html>
