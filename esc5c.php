
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
    <h1>PERIODIC TESTING OF METERS</h1>
    <div class="header">
        <div class="left">
            <p>Discom: MPEZ</p>
            <p>Format: ESC-5c</p>
        </div>
        <div class="right">
            <p>Financial Year: 2023-24</p>
            <p>Period: June 23 To March 24</p>
        </div>
    </div>

    <form id="dataForm" method="POST" action="esc5c_Submit.php">
        <table>
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Name of Region</th>
                    <th>No. of Portable Meter Testing Equipments(Such as Accu-check etc.)</th>
                    <th>No of Portable Meter Testing Equipments earmarked for Rural Areas, if any</th>
                    <th>Nos/Capacity/Day of meter testing benches (shhifts of meter testing labs)</th>
                    <th>Remarks (if any)</th>
                    <th>YEAR</th>
                </tr>
                </thead>
            <tr>
                    <td><input type="text" name="entry[1][Sno]" value="1"></td>
                    <td><input type="text" name="entry[1][RegionName]"></td>
                    <td><input type="text" name="entry[1][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[1][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[1][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[1][Remarks]"></td>
                    <td><input type="text" name="entry[1][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[2][Sno]" value="2"></td>
                    <td><input type="text" name="entry[2][RegionName]"></td>
                    <td><input type="text" name="entry[2][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[2][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[2][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[2][Remarks]"></td>
                    <td><input type="text" name="entry[2][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[3][Sno]" value="3"></td>
                    <td><input type="text" name="entry[3][RegionName]"></td>
                    <td><input type="text" name="entry[3][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[3][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[3][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[3][Remarks]"></td>
                    <td><input type="text" name="entry[3][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[4][Sno]" value="4"></td>
                    <td><input type="text" name="entry[4][RegionName]"></td>
                    <td><input type="text" name="entry[4][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[4][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[4][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[4][Remarks]"></td>
                    <td><input type="text" name="entry[4][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[5][Sno]" value="5"></td>
                    <td><input type="text" name="entry[5][RegionName]"></td>
                    <td><input type="text" name="entry[5][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[5][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[5][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[5][Remarks]"></td>
                    <td><input type="text" name="entry[5][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[6][Sno]" value="6"></td>
                    <td><input type="text" name="entry[6][RegionName]"></td>
                    <td><input type="text" name="entry[6][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[6][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[6][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[6][Remarks]"></td>
                    <td><input type="text" name="entry[6][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[7][Sno]" value="7"></td>
                    <td><input type="text" name="entry[7][RegionName]"></td>
                    <td><input type="text" name="entry[7][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[7][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[7][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[7][Remarks]"></td>
                    <td><input type="text" name="entry[7][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[8][Sno]" value="8"></td>
                    <td><input type="text" name="entry[8][RegionName]"></td>
                    <td><input type="text" name="entry[8][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[8][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[8][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[8][Remarks]"></td>
                    <td><input type="text" name="entry[8][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[9][Sno]" value="9"></td>
                    <td><input type="text" name="entry[9][RegionName]"></td>
                    <td><input type="text" name="entry[9][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[9][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[9][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[9][Remarks]"></td>
                    <td><input type="text" name="entry[9][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[10][Sno]" value="10"></td>
                    <td><input type="text" name="entry[10][RegionName]"></td>
                    <td><input type="text" name="entry[10][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[10][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[10][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[10][Remarks]"></td>
                    <td><input type="text" name="entry[10][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[11][Sno]" value="11"></td>
                    <td><input type="text" name="entry[11][RegionName]"></td>
                    <td><input type="text" name="entry[11][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[11][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[11][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[11][Remarks]"></td>
                    <td><input type="text" name="entry[11][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[12][Sno]" value="12"></td>
                    <td><input type="text" name="entry[12][RegionName]"></td>
                    <td><input type="text" name="entry[12][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[12][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[12][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[12][Remarks]"></td>
                    <td><input type="text" name="entry[12][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[13][Sno]" value="13"></td>
                    <td><input type="text" name="entry[13][RegionName]"></td>
                    <td><input type="text" name="entry[13][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[13][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[13][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[13][Remarks]"></td>
                    <td><input type="text" name="entry[13][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[14][Sno]" value="14"></td>
                    <td><input type="text" name="entry[14][RegionName]"></td>
                    <td><input type="text" name="entry[14][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[14][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[14][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[14][Remarks]"></td>
                    <td><input type="text" name="entry[14][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[15][Sno]" value="15"></td>
                    <td><input type="text" name="entry[15][RegionName]"></td>
                    <td><input type="text" name="entry[15][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[15][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[15][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[15][Remarks]"></td>
                    <td><input type="text" name="entry[15][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[16][Sno]" value="16"></td>
                    <td><input type="text" name="entry[16][RegionName]"></td>
                    <td><input type="text" name="entry[16][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[16][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[16][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[16][Remarks]"></td>
                    <td><input type="text" name="entry[16][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[17][Sno]" value="17"></td>
                    <td><input type="text" name="entry[17][RegionName]"></td>
                    <td><input type="text" name="entry[17][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[17][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[17][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[17][Remarks]"></td>
                    <td><input type="text" name="entry[17][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[18][Sno]" value="18"></td>
                    <td><input type="text" name="entry[18][RegionName]"></td>
                    <td><input type="text" name="entry[18][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[18][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[18][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[18][Remarks]"></td>
                    <td><input type="text" name="entry[18][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[19][Sno]" value="19"></td>
                    <td><input type="text" name="entry[19][RegionName]"></td>
                    <td><input type="text" name="entry[19][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[19][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[19][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[19][Remarks]"></td>
                    <td><input type="text" name="entry[19][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[20][Sno]" value="20"></td>
                    <td><input type="text" name="entry[20][RegionName]"></td>
                    <td><input type="text" name="entry[20][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[20][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[20][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[20][Remarks]"></td>
                    <td><input type="text" name="entry[20][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[21][Sno]" value="21"></td>
                    <td><input type="text" name="entry[21][RegionName]"></td>
                    <td><input type="text" name="entry[21][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[21][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[21][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[21][Remarks]"></td>
                    <td><input type="text" name="entry[21][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[22][Sno]" value="22"></td>
                    <td><input type="text" name="entry[22][RegionName]"></td>
                    <td><input type="text" name="entry[22][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[22][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[22][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[22][Remarks]"></td>
                    <td><input type="text" name="entry[22][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[23][Sno]" value="23"></td>
                    <td><input type="text" name="entry[23][RegionName]"></td>
                    <td><input type="text" name="entry[23][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[23][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[23][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[23][Remarks]"></td>
                    <td><input type="text" name="entry[23][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[24][Sno]" value="24"></td>
                    <td><input type="text" name="entry[24][RegionName]"></td>
                    <td><input type="text" name="entry[24][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[24][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[24][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[24][Remarks]"></td>
                    <td><input type="text" name="entry[24][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[25][Sno]" value="25"></td>
                    <td><input type="text" name="entry[25][RegionName]"></td>
                    <td><input type="text" name="entry[25][PortableMeterTestingEquipments]"></td>
                    <td><input type="text" name="entry[25][PortableMeterTestingEquipmentsRural]"></td>
                    <td><input type="text" name="entry[25][MeterTestingBenchesCapacity]"></td>
                    <td><input type="text" name="entry[25][Remarks]"></td>
                    <td><input type="text" name="entry[25][year]"></td>
                </tr>

            </tbody>
        </table>
        <button type="submit">Save</button>
    </form>
</body>
</html>