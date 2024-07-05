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
    <h1>SUMMARY OF CASES WHERE SUPPLY AT MORE THAN ONE POINT HAS BEEN GIVEN IN ONE PREMISES</h1>
    <div class="header">
        <div class="left">
            <p>Discom: MPEZ</p>
            <p>Format: esc-2</p>
        </div>
        <div class="right">
            <p>Financial Year: 2023-24</p>
            <p>Period: June 23 To March 24</p>
        </div>
    </div>
    <form id="dataForm" method="POST" action="esc2_submit.php">
    <table>
            <thead>
                <tr>
                    <th>Name of Region</th>
                    <th>Total No. of street Light</th>
                    <th>NO. OF STREET LIGHT POINTS</th>
                    <th>LED Lights (NO.)</th>
                    <th>LED Lights (KW)</th>
                    <th>Non-LED Lights (NO.)</th>
                    <th>Non-LED Lights (KW)</th>
                    <th>Total (NO.)</th>
                    <th>Total (KW)</th>
                    <th>Programmable on-off/dimmer switch with automation for street lights</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="entry[1][RegionName]"></td>
                    <td><input type="text" name="entry[1][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[1][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[1][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[1][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[1][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[1][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[1][TotalNumber]"></td>
                    <td><input type="text" name="entry[1][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[1][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[1][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[2][RegionName]"></td>
                    <td><input type="text" name="entry[2][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[2][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[2][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[2][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[2][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[2][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[2][TotalNumber]"></td>
                    <td><input type="text" name="entry[2][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[2][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[2][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[3][RegionName]"></td>
                    <td><input type="text" name="entry[3][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[3][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[3][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[3][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[3][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[3][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[3][TotalNumber]"></td>
                    <td><input type="text" name="entry[3][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[3][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[3][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[4][RegionName]"></td>
                    <td><input type="text" name="entry[4][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[4][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[4][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[4][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[4][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[4][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[4][TotalNumber]"></td>
                    <td><input type="text" name="entry[4][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[4][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[4][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[5][RegionName]"></td>
                    <td><input type="text" name="entry[5][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[5][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[5][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[5][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[5][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[5][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[5][TotalNumber]"></td>
                    <td><input type="text" name="entry[5][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[5][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[5][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[6][RegionName]"></td>
                    <td><input type="text" name="entry[6][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[6][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[6][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[6][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[6][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[6][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[6][TotalNumber]"></td>
                    <td><input type="text" name="entry[6][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[6][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[6][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[7][RegionName]"></td>
                    <td><input type="text" name="entry[7][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[7][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[7][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[7][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[7][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[7][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[7][TotalNumber]"></td>
                    <td><input type="text" name="entry[7][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[7][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[7][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[8][RegionName]"></td>
                    <td><input type="text" name="entry[8][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[8][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[8][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[8][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[8][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[8][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[8][TotalNumber]"></td>
                    <td><input type="text" name="entry[8][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[8][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[8][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[9][RegionName]"></td>
                    <td><input type="text" name="entry[9][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[9][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[9][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[9][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[9][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[9][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[9][TotalNumber]"></td>
                    <td><input type="text" name="entry[9][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[9][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[9][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[10][RegionName]"></td>
                    <td><input type="text" name="entry[10][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[10][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[10][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[10][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[10][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[10][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[10][TotalNumber]"></td>
                    <td><input type="text" name="entry[10][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[10][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[10][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[11][RegionName]"></td>
                    <td><input type="text" name="entry[11][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[11][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[11][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[11][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[11][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[11][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[11][TotalNumber]"></td>
                    <td><input type="text" name="entry[11][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[11][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[11][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[12][RegionName]"></td>
                    <td><input type="text" name="entry[12][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[12][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[12][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[12][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[12][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[12][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[12][TotalNumber]"></td>
                    <td><input type="text" name="entry[12][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[12][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[12][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[13][RegionName]"></td>
                    <td><input type="text" name="entry[13][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[13][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[13][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[13][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[13][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[13][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[13][TotalNumber]"></td>
                    <td><input type="text" name="entry[13][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[13][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[13][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[14][RegionName]"></td>
                    <td><input type="text" name="entry[14][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[14][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[14][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[14][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[14][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[14][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[14][TotalNumber]"></td>
                    <td><input type="text" name="entry[14][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[14][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[14][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[15][RegionName]"></td>
                    <td><input type="text" name="entry[15][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[15][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[15][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[15][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[15][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[15][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[15][TotalNumber]"></td>
                    <td><input type="text" name="entry[15][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[15][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[15][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[16][RegionName]"></td>
                    <td><input type="text" name="entry[16][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[16][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[16][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[16][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[16][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[16][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[16][TotalNumber]"></td>
                    <td><input type="text" name="entry[16][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[16][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[16][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[17][RegionName]"></td>
                    <td><input type="text" name="entry[17][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[17][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[17][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[17][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[17][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[17][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[17][TotalNumber]"></td>
                    <td><input type="text" name="entry[17][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[17][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[17][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[18][RegionName]"></td>
                    <td><input type="text" name="entry[18][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[18][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[18][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[18][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[18][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[18][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[18][TotalNumber]"></td>
                    <td><input type="text" name="entry[18][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[18][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[18][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[19][RegionName]"></td>
                    <td><input type="text" name="entry[19][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[19][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[19][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[19][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[19][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[19][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[19][TotalNumber]"></td>
                    <td><input type="text" name="entry[19][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[19][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[19][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[20][RegionName]"></td>
                    <td><input type="text" name="entry[20][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[20][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[20][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[20][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[20][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[20][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[20][TotalNumber]"></td>
                    <td><input type="text" name="entry[20][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[20][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[20][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[21][RegionName]"></td>
                    <td><input type="text" name="entry[21][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[21][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[21][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[21][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[21][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[21][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[21][TotalNumber]"></td>
                    <td><input type="text" name="entry[21][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[21][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[21][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[22][RegionName]"></td>
                    <td><input type="text" name="entry[22][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[22][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[22][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[22][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[22][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[22][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[22][TotalNumber]"></td>
                    <td><input type="text" name="entry[22][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[22][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[22][year]"></td>
                </tr>
                <tr>
                    <td><input type="text" name="entry[23][RegionName]"></td>
                    <td><input type="text" name="entry[23][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[23][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[23][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[23][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[23][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[23][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[23][TotalNumber]"></td>
                    <td><input type="text" name="entry[23][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[23][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[23][year]"></td>
                </tr>

                <tr>
                    <td><input type="text" name="entry[24][RegionName]"></td>
                    <td><input type="text" name="entry[24][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[24][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[24][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[24][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[24][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[24][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[24][TotalNumber]"></td>
                    <td><input type="text" name="entry[24][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[24][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[24][year]"></td>
                </tr>

                <tr>
                    <td><input type="text" name="entry[25][RegionName]"></td>
                    <td><input type="text" name="entry[25][TotalStreetLights]"></td>
                    <td><input type="text" name="entry[25][StreetLightPoints]"></td>
                    <td><input type="text" name="entry[25][LEDLightsNumber]"></td>
                    <td><input type="text" name="entry[25][LEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[25][NonLEDLightsNumber]"></td>
                    <td><input type="text" name="entry[25][NonLEDLightsPowerKW]"></td>
                    <td><input type="text" name="entry[25][TotalNumber]"></td>
                    <td><input type="text" name="entry[25][TotalPowerKW]"></td>
                    <td><input type="text" name="entry[25][ProgrammableSwitch]"></td>
                    <td><input type="text" name="entry[25][year]"></td>
                </tr>


            </tbody>
        </table>
        <button type="submit">Save</button>
    </form>
</body>
</html>