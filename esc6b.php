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
    <h1>TESTING OF ACCURACY OF METERS ON CONSUMBER'S REQUEST(RURAL AREA	)</h1>
    <div class="header">
        <div class="left">
            <p>Discom: MPEZ</p>
            <p>Format: ESC-5</p>
        </div>
        <div class="right">
            <p>Financial Year: 2023-24</p>
            <p>Period: June 23 To March 24</p>
        </div>
    </div>

    <form id="dataForm" method="POST" action="esc6b_Submit.php">
        <table>
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Consumer Category (as per retail Supply tariff Order)</th>
                    <th>No. of consumers who applied for testing their meters</th>
                    <th>Additional meter/Check Meter installed within 3 days of receipt of complaint (as per MoP Rules)
                    </th>
                    <th>No. of consumbers whose meter was tested within 15 days of receipt of application</th>
                    <th>No. of cases of Non-compliance of timelines as per Col.(5)</th>
                    <th>Reasons of delay</th>
                    <th>No. of meters found within permissible Limits of accuracy Against col.5</th>
                    <th>No. of meters Found beyond permissible Limits of Accuracy Against Col.5</th>
                    <th>No. of Cases where consumber contested the results of testing</th>
                    <th>No. of meters tested at Third-Party testing Agency approved by the Commission</th>
                    <th>No. of cases where the results of the test are found to be contrary to the test performed by
                        licensee</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tr>
                <td><input type="text" name="entry[1][Sno]" value="1"></td>
                <td><input type="text" name="entry[1][ConsumerCategory]"></td>
                <td><input type="text" name="entry[1][ConsumersAppliedForTesting]"></td>
                <td><input type="text" name="entry[1][AdditionalMeterInstalledWithin3Days]"></td>
                <td><input type="text" name="entry[1][MetersTestedWithin15Days]"></td>
                <td><input type="text" name="entry[1][CasesOfNonCompliance]"></td>
                <td><input type="text" name="entry[1][ReasonsOfDelay]"></td>
                <td><input type="text" name="entry[1][MetersWithinPermissibleLimits]"></td>
                <td><input type="text" name="entry[1][MetersBeyondPermissibleLimits]"></td>
                <td><input type="text" name="entry[1][ConsumerContestedResults]"></td>
                <td><input type="text" name="entry[1][MetersTestedAtThirdPartyAgency]"></td>
                <td><input type="text" name="entry[1][ContraryResultsToLicenseeTest]"></td>
                <td><input type="text" name="entry[1][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[2][Sno]" value="2"></td>
                <td><input type="text" name="entry[2][ConsumerCategory]"></td>
                <td><input type="text" name="entry[2][ConsumersAppliedForTesting]"></td>
                <td><input type="text" name="entry[2][AdditionalMeterInstalledWithin3Days]"></td>
                <td><input type="text" name="entry[2][MetersTestedWithin15Days]"></td>
                <td><input type="text" name="entry[2][CasesOfNonCompliance]"></td>
                <td><input type="text" name="entry[2][ReasonsOfDelay]"></td>
                <td><input type="text" name="entry[2][MetersWithinPermissibleLimits]"></td>
                <td><input type="text" name="entry[2][MetersBeyondPermissibleLimits]"></td>
                <td><input type="text" name="entry[2][ConsumerContestedResults]"></td>
                <td><input type="text" name="entry[2][MetersTestedAtThirdPartyAgency]"></td>
                <td><input type="text" name="entry[2][ContraryResultsToLicenseeTest]"></td>
                <td><input type="text" name="entry[2][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[3][Sno]" value="3"></td>
                <td><input type="text" name="entry[3][ConsumerCategory]"></td>
                <td><input type="text" name="entry[3][ConsumersAppliedForTesting]"></td>
                <td><input type="text" name="entry[3][AdditionalMeterInstalledWithin3Days]"></td>
                <td><input type="text" name="entry[3][MetersTestedWithin15Days]"></td>
                <td><input type="text" name="entry[3][CasesOfNonCompliance]"></td>
                <td><input type="text" name="entry[3][ReasonsOfDelay]"></td>
                <td><input type="text" name="entry[3][MetersWithinPermissibleLimits]"></td>
                <td><input type="text" name="entry[3][MetersBeyondPermissibleLimits]"></td>
                <td><input type="text" name="entry[3][ConsumerContestedResults]"></td>
                <td><input type="text" name="entry[3][MetersTestedAtThirdPartyAgency]"></td>
                <td><input type="text" name="entry[3][ContraryResultsToLicenseeTest]"></td>
                <td><input type="text" name="entry[3][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[4][Sno]" value="4"></td>
                <td><input type="text" name="entry[4][ConsumerCategory]"></td>
                <td><input type="text" name="entry[4][ConsumersAppliedForTesting]"></td>
                <td><input type="text" name="entry[4][AdditionalMeterInstalledWithin3Days]"></td>
                <td><input type="text" name="entry[4][MetersTestedWithin15Days]"></td>
                <td><input type="text" name="entry[4][CasesOfNonCompliance]"></td>
                <td><input type="text" name="entry[4][ReasonsOfDelay]"></td>
                <td><input type="text" name="entry[4][MetersWithinPermissibleLimits]"></td>
                <td><input type="text" name="entry[4][MetersBeyondPermissibleLimits]"></td>
                <td><input type="text" name="entry[4][ConsumerContestedResults]"></td>
                <td><input type="text" name="entry[4][MetersTestedAtThirdPartyAgency]"></td>
                <td><input type="text" name="entry[4][ContraryResultsToLicenseeTest]"></td>
                <td><input type="text" name="entry[4][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[5][Sno]" value="5"></td>
                <td><input type="text" name="entry[5][ConsumerCategory]"></td>
                <td><input type="text" name="entry[5][ConsumersAppliedForTesting]"></td>
                <td><input type="text" name="entry[5][AdditionalMeterInstalledWithin3Days]"></td>
                <td><input type="text" name="entry[5][MetersTestedWithin15Days]"></td>
                <td><input type="text" name="entry[5][CasesOfNonCompliance]"></td>
                <td><input type="text" name="entry[5][ReasonsOfDelay]"></td>
                <td><input type="text" name="entry[5][MetersWithinPermissibleLimits]"></td>
                <td><input type="text" name="entry[5][MetersBeyondPermissibleLimits]"></td>
                <td><input type="text" name="entry[5][ConsumerContestedResults]"></td>
                <td><input type="text" name="entry[5][MetersTestedAtThirdPartyAgency]"></td>
                <td><input type="text" name="entry[5][ContraryResultsToLicenseeTest]"></td>
                <td><input type="text" name="entry[5][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[6][Sno]" value="6"></td>
                <td><input type="text" name="entry[6][ConsumerCategory]"></td>
                <td><input type="text" name="entry[6][ConsumersAppliedForTesting]"></td>
                <td><input type="text" name="entry[6][AdditionalMeterInstalledWithin3Days]"></td>
                <td><input type="text" name="entry[6][MetersTestedWithin15Days]"></td>
                <td><input type="text" name="entry[6][CasesOfNonCompliance]"></td>
                <td><input type="text" name="entry[6][ReasonsOfDelay]"></td>
                <td><input type="text" name="entry[6][MetersWithinPermissibleLimits]"></td>
                <td><input type="text" name="entry[6][MetersBeyondPermissibleLimits]"></td>
                <td><input type="text" name="entry[6][ConsumerContestedResults]"></td>
                <td><input type="text" name="entry[6][MetersTestedAtThirdPartyAgency]"></td>
                <td><input type="text" name="entry[6][ContraryResultsToLicenseeTest]"></td>
                <td><input type="text" name="entry[6][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[7][Sno]" value="7"></td>
                <td><input type="text" name="entry[7][ConsumerCategory]"></td>
                <td><input type="text" name="entry[7][ConsumersAppliedForTesting]"></td>
                <td><input type="text" name="entry[7][AdditionalMeterInstalledWithin3Days]"></td>
                <td><input type="text" name="entry[7][MetersTestedWithin15Days]"></td>
                <td><input type="text" name="entry[7][CasesOfNonCompliance]"></td>
                <td><input type="text" name="entry[7][ReasonsOfDelay]"></td>
                <td><input type="text" name="entry[7][MetersWithinPermissibleLimits]"></td>
                <td><input type="text" name="entry[7][MetersBeyondPermissibleLimits]"></td>
                <td><input type="text" name="entry[7][ConsumerContestedResults]"></td>
                <td><input type="text" name="entry[7][MetersTestedAtThirdPartyAgency]"></td>
                <td><input type="text" name="entry[7][ContraryResultsToLicenseeTest]"></td>
                <td><input type="text" name="entry[7][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[8][Sno]" value="8"></td>
                <td><input type="text" name="entry[8][ConsumerCategory]"></td>
                <td><input type="text" name="entry[8][ConsumersAppliedForTesting]"></td>
                <td><input type="text" name="entry[8][AdditionalMeterInstalledWithin3Days]"></td>
                <td><input type="text" name="entry[8][MetersTestedWithin15Days]"></td>
                <td><input type="text" name="entry[8][CasesOfNonCompliance]"></td>
                <td><input type="text" name="entry[8][ReasonsOfDelay]"></td>
                <td><input type="text" name="entry[8][MetersWithinPermissibleLimits]"></td>
                <td><input type="text" name="entry[8][MetersBeyondPermissibleLimits]"></td>
                <td><input type="text" name="entry[8][ConsumerContestedResults]"></td>
                <td><input type="text" name="entry[8][MetersTestedAtThirdPartyAgency]"></td>
                <td><input type="text" name="entry[8][ContraryResultsToLicenseeTest]"></td>
                <td><input type="text" name="entry[8][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[9][Sno]" value="9"></td>
                <td><input type="text" name="entry[9][ConsumerCategory]"></td>
                <td><input type="text" name="entry[9][ConsumersAppliedForTesting]"></td>
                <td><input type="text" name="entry[9][AdditionalMeterInstalledWithin3Days]"></td>
                <td><input type="text" name="entry[9][MetersTestedWithin15Days]"></td>
                <td><input type="text" name="entry[9][CasesOfNonCompliance]"></td>
                <td><input type="text" name="entry[9][ReasonsOfDelay]"></td>
                <td><input type="text" name="entry[9][MetersWithinPermissibleLimits]"></td>
                <td><input type="text" name="entry[9][MetersBeyondPermissibleLimits]"></td>
                <td><input type="text" name="entry[9][ConsumerContestedResults]"></td>
                <td><input type="text" name="entry[9][MetersTestedAtThirdPartyAgency]"></td>
                <td><input type="text" name="entry[9][ContraryResultsToLicenseeTest]"></td>
                <td><input type="text" name="entry[9][year]"></td>
            </tr>

            <tr>
                <td><input type="text" name="entry[10][Sno]" value="10"></td>
                <td><input type="text" name="entry[10][ConsumerCategory]"></td>
                <td><input type="text" name="entry[10][ConsumersAppliedForTesting]"></td>
                <td><input type="text" name="entry[10][AdditionalMeterInstalledWithin3Days]"></td>
                <td><input type="text" name="entry[10][MetersTestedWithin15Days]"></td>
                <td><input type="text" name="entry[10][CasesOfNonCompliance]"></td>
                <td><input type="text" name="entry[10][ReasonsOfDelay]"></td>
                <td><input type="text" name="entry[10][MetersWithinPermissibleLimits]"></td>
                <td><input type="text" name="entry[10][MetersBeyondPermissibleLimits]"></td>
                <td><input type="text" name="entry[10][ConsumerContestedResults]"></td>
                <td><input type="text" name="entry[10][MetersTestedAtThirdPartyAgency]"></td>
                <td><input type="text" name="entry[10][ContraryResultsToLicenseeTest]"></td>
                <td><input type="text" name="entry[10][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[11][Sno]" value="11"></td>
                <td><input type="text" name="entry[11][ConsumerCategory]"></td>
                <td><input type="text" name="entry[11][ConsumersAppliedForTesting]"></td>
                <td><input type="text" name="entry[11][AdditionalMeterInstalledWithin3Days]"></td>
                <td><input type="text" name="entry[11][MetersTestedWithin15Days]"></td>
                <td><input type="text" name="entry[11][CasesOfNonCompliance]"></td>
                <td><input type="text" name="entry[11][ReasonsOfDelay]"></td>
                <td><input type="text" name="entry[11][MetersWithinPermissibleLimits]"></td>
                <td><input type="text" name="entry[11][MetersBeyondPermissibleLimits]"></td>
                <td><input type="text" name="entry[11][ConsumerContestedResults]"></td>
                <td><input type="text" name="entry[11][MetersTestedAtThirdPartyAgency]"></td>
                <td><input type="text" name="entry[11][ContraryResultsToLicenseeTest]"></td>
                <td><input type="text" name="entry[11][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[12][Sno]" value="12"></td>
                <td><input type="text" name="entry[12][ConsumerCategory]"></td>
                <td><input type="text" name="entry[12][ConsumersAppliedForTesting]"></td>
                <td><input type="text" name="entry[12][AdditionalMeterInstalledWithin3Days]"></td>
                <td><input type="text" name="entry[12][MetersTestedWithin15Days]"></td>
                <td><input type="text" name="entry[12][CasesOfNonCompliance]"></td>
                <td><input type="text" name="entry[12][ReasonsOfDelay]"></td>
                <td><input type="text" name="entry[12][MetersWithinPermissibleLimits]"></td>
                <td><input type="text" name="entry[12][MetersBeyondPermissibleLimits]"></td>
                <td><input type="text" name="entry[12][ConsumerContestedResults]"></td>
                <td><input type="text" name="entry[12][MetersTestedAtThirdPartyAgency]"></td>
                <td><input type="text" name="entry[12][ContraryResultsToLicenseeTest]"></td>
                <td><input type="text" name="entry[12][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[13][Sno]" value="13"></td>
                <td><input type="text" name="entry[13][ConsumerCategory]"></td>
                <td><input type="text" name="entry[13][ConsumersAppliedForTesting]"></td>
                <td><input type="text" name="entry[13][AdditionalMeterInstalledWithin3Days]"></td>
                <td><input type="text" name="entry[13][MetersTestedWithin15Days]"></td>
                <td><input type="text" name="entry[13][CasesOfNonCompliance]"></td>
                <td><input type="text" name="entry[13][ReasonsOfDelay]"></td>
                <td><input type="text" name="entry[13][MetersWithinPermissibleLimits]"></td>
                <td><input type="text" name="entry[13][MetersBeyondPermissibleLimits]"></td>
                <td><input type="text" name="entry[13][ConsumerContestedResults]"></td>
                <td><input type="text" name="entry[13][MetersTestedAtThirdPartyAgency]"></td>
                <td><input type="text" name="entry[13][ContraryResultsToLicenseeTest]"></td>
                <td><input type="text" name="entry[13][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[14][Sno]" value="14"></td>
                <td><input type="text" name="entry[14][ConsumerCategory]"></td>
                <td><input type="text" name="entry[14][ConsumersAppliedForTesting]"></td>
                <td><input type="text" name="entry[14][AdditionalMeterInstalledWithin3Days]"></td>
                <td><input type="text" name="entry[14][MetersTestedWithin15Days]"></td>
                <td><input type="text" name="entry[14][CasesOfNonCompliance]"></td>
                <td><input type="text" name="entry[14][ReasonsOfDelay]"></td>
                <td><input type="text" name="entry[14][MetersWithinPermissibleLimits]"></td>
                <td><input type="text" name="entry[14][MetersBeyondPermissibleLimits]"></td>
                <td><input type="text" name="entry[14][ConsumerContestedResults]"></td>
                <td><input type="text" name="entry[14][MetersTestedAtThirdPartyAgency]"></td>
                <td><input type="text" name="entry[14][ContraryResultsToLicenseeTest]"></td>
                <td><input type="text" name="entry[14][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[15][Sno]" value="15"></td>
                <td><input type="text" name="entry[15][ConsumerCategory]"></td>
                <td><input type="text" name="entry[15][ConsumersAppliedForTesting]"></td>
                <td><input type="text" name="entry[15][AdditionalMeterInstalledWithin3Days]"></td>
                <td><input type="text" name="entry[15][MetersTestedWithin15Days]"></td>
                <td><input type="text" name="entry[15][CasesOfNonCompliance]"></td>
                <td><input type="text" name="entry[15][ReasonsOfDelay]"></td>
                <td><input type="text" name="entry[15][MetersWithinPermissibleLimits]"></td>
                <td><input type="text" name="entry[15][MetersBeyondPermissibleLimits]"></td>
                <td><input type="text" name="entry[15][ConsumerContestedResults]"></td>
                <td><input type="text" name="entry[15][MetersTestedAtThirdPartyAgency]"></td>
                <td><input type="text" name="entry[15][ContraryResultsToLicenseeTest]"></td>
                <td><input type="text" name="entry[15][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[16][Sno]" value="16"></td>
                <td><input type="text" name="entry[16][ConsumerCategory]"></td>
                <td><input type="text" name="entry[16][ConsumersAppliedForTesting]"></td>
                <td><input type="text" name="entry[16][AdditionalMeterInstalledWithin3Days]"></td>
                <td><input type="text" name="entry[16][MetersTestedWithin15Days]"></td>
                <td><input type="text" name="entry[16][CasesOfNonCompliance]"></td>
                <td><input type="text" name="entry[16][ReasonsOfDelay]"></td>
                <td><input type="text" name="entry[16][MetersWithinPermissibleLimits]"></td>
                <td><input type="text" name="entry[16][MetersBeyondPermissibleLimits]"></td>
                <td><input type="text" name="entry[16][ConsumerContestedResults]"></td>
                <td><input type="text" name="entry[16][MetersTestedAtThirdPartyAgency]"></td>
                <td><input type="text" name="entry[16][ContraryResultsToLicenseeTest]"></td>
                <td><input type="text" name="entry[16][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[17][Sno]" value="17"></td>
                <td><input type="text" name="entry[17][ConsumerCategory]"></td>
                <td><input type="text" name="entry[17][ConsumersAppliedForTesting]"></td>
                <td><input type="text" name="entry[17][AdditionalMeterInstalledWithin3Days]"></td>
                <td><input type="text" name="entry[17][MetersTestedWithin15Days]"></td>
                <td><input type="text" name="entry[17][CasesOfNonCompliance]"></td>
                <td><input type="text" name="entry[17][ReasonsOfDelay]"></td>
                <td><input type="text" name="entry[17][MetersWithinPermissibleLimits]"></td>
                <td><input type="text" name="entry[17][MetersBeyondPermissibleLimits]"></td>
                <td><input type="text" name="entry[17][ConsumerContestedResults]"></td>
                <td><input type="text" name="entry[17][MetersTestedAtThirdPartyAgency]"></td>
                <td><input type="text" name="entry[17][ContraryResultsToLicenseeTest]"></td>
                <td><input type="text" name="entry[17][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[18][Sno]" value="18"></td>
                <td><input type="text" name="entry[18][ConsumerCategory]"></td>
                <td><input type="text" name="entry[18][ConsumersAppliedForTesting]"></td>
                <td><input type="text" name="entry[18][AdditionalMeterInstalledWithin3Days]"></td>
                <td><input type="text" name="entry[18][MetersTestedWithin15Days]"></td>
                <td><input type="text" name="entry[18][CasesOfNonCompliance]"></td>
                <td><input type="text" name="entry[18][ReasonsOfDelay]"></td>
                <td><input type="text" name="entry[18][MetersWithinPermissibleLimits]"></td>
                <td><input type="text" name="entry[18][MetersBeyondPermissibleLimits]"></td>
                <td><input type="text" name="entry[18][ConsumerContestedResults]"></td>
                <td><input type="text" name="entry[18][MetersTestedAtThirdPartyAgency]"></td>
                <td><input type="text" name="entry[18][ContraryResultsToLicenseeTest]"></td>
                <td><input type="text" name="entry[18][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[19][Sno]" value="19"></td>
                <td><input type="text" name="entry[19][ConsumerCategory]"></td>
                <td><input type="text" name="entry[19][ConsumersAppliedForTesting]"></td>
                <td><input type="text" name="entry[19][AdditionalMeterInstalledWithin3Days]"></td>
                <td><input type="text" name="entry[19][MetersTestedWithin15Days]"></td>
                <td><input type="text" name="entry[19][CasesOfNonCompliance]"></td>
                <td><input type="text" name="entry[19][ReasonsOfDelay]"></td>
                <td><input type="text" name="entry[19][MetersWithinPermissibleLimits]"></td>
                <td><input type="text" name="entry[19][MetersBeyondPermissibleLimits]"></td>
                <td><input type="text" name="entry[19][ConsumerContestedResults]"></td>
                <td><input type="text" name="entry[19][MetersTestedAtThirdPartyAgency]"></td>
                <td><input type="text" name="entry[19][ContraryResultsToLicenseeTest]"></td>
                <td><input type="text" name="entry[19][year]"></td>
            </tr>
            <tr>
                <td><input type="text" name="entry[20][Sno]" value="20"></td>
                <td><input type="text" name="entry[20][ConsumerCategory]"></td>
                <td><input type="text" name="entry[20][ConsumersAppliedForTesting]"></td>
                <td><input type="text" name="entry[20][AdditionalMeterInstalledWithin3Days]"></td>
                <td><input type="text" name="entry[20][MetersTestedWithin15Days]"></td>
                <td><input type="text" name="entry[20][CasesOfNonCompliance]"></td>
                <td><input type="text" name="entry[20][ReasonsOfDelay]"></td>
                <td><input type="text" name="entry[20][MetersWithinPermissibleLimits]"></td>
                <td><input type="text" name="entry[20][MetersBeyondPermissibleLimits]"></td>
                <td><input type="text" name="entry[20][ConsumerContestedResults]"></td>
                <td><input type="text" name="entry[20][MetersTestedAtThirdPartyAgency]"></td>
                <td><input type="text" name="entry[20][ContraryResultsToLicenseeTest]"></td>
                <td><input type="text" name="entry[20][year]"></td>
            </tr>
         </tbody>
        </table>
        <button type="submit">Save</button>
    </form>
</body>

</html>