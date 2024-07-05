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
    <h1>TESTING OF METERS (Including Maximum Demand Indicator) NOT RECORDING											</h1>
    <div class="header">
        <div class="left">
            <p>Discom: MPEZ</p>
            <p>Format: ESC-7</p>
        </div>
        <div class="right">
            <p>Financial Year: 2023-24</p>
            <p>Period: June 23 To March 24</p>
        </div>
    </div>

    <form id="dataForm" method="POST" action="esc7_Submit.php">
        <table>
            <thead>
            <tr>
            <th>S.No.</th>
            <th>Consumer Category (as per Retail supply Tariff Order)</th>
            <th>Total No. of consumers who applied for testing their meters under clause 8.23 of Supply code</th>
            <th>Total No. cases where licensee arranged for meter to be tested within 7 days of receipt of application</th>
            <th>No of Consumers whose Meter was replaced within 24 hours in Urban Areas</th>
            <th>No of Consumers whose Meter was replaced within 72 hours in Rural Areas</th>
            <th>No. of cases of Non-Compliance of timelines as per Col.(5)</th>
            <th>NO. of cases of Non-Compliance of timelines as per Col.(6)</th>
            <th>Reasons for non-compliance</th>
            <th>Total No. of Claims for compensation received</th>
            <th>Total no. of cases where compensation was paid by licensee</th>
            <th>Total compensation Amount(in INR)</th>
            <th>Year</th>
        </tr>
        </thead>
        <tr>
            <td><input type="text" name="entry[1][Sno]" value="1"></td>
            <td><input type="text" name="entry[1][ConsumerCategory]"></td>
            <td><input type="text" name="entry[1][ConsumersAppliedForTesting]"></td>
            <td><input type="text" name="entry[1][CasesWithTestingWithin7Days]"></td>
            <td><input type="text" name="entry[1][ConsumersMeterReplacedWithin24HoursUrban]"></td>
            <td><input type="text" name="entry[1][ConsumersMeterReplacedWithin72HoursRural]"></td>
            <td><input type="text" name="entry[1][CasesOfNonComplianceTimeline5]"></td>
            <td><input type="text" name="entry[1][CasesOfNonComplianceTimeline6]"></td>
            <td><input type="text" name="entry[1][ReasonsForNonCompliance]"></td>
            <td><input type="text" name="entry[1][TotalClaimsForCompensationReceived]"></td>
            <td><input type="text" name="entry[1][CasesCompensationPaidByLicensee]"></td>
            <td><input type="text" name="entry[1][TotalCompensationAmountINR]"></td>
            <td><input type="text" name="entry[1][year]"></td>
        </tr>
        <tr>
            <td><input type="text" name="entry[2][Sno]" value="2"></td>
            <td><input type="text" name="entry[2][ConsumerCategory]"></td>
            <td><input type="text" name="entry[2][ConsumersAppliedForTesting]"></td>
            <td><input type="text" name="entry[2][CasesWithTestingWithin7Days]"></td>
            <td><input type="text" name="entry[2][ConsumersMeterReplacedWithin24HoursUrban]"></td>
            <td><input type="text" name="entry[2][ConsumersMeterReplacedWithin72HoursRural]"></td>
            <td><input type="text" name="entry[2][CasesOfNonComplianceTimeline5]"></td>
            <td><input type="text" name="entry[2][CasesOfNonComplianceTimeline6]"></td>
            <td><input type="text" name="entry[2][ReasonsForNonCompliance]"></td>
            <td><input type="text" name="entry[2][TotalClaimsForCompensationReceived]"></td>
            <td><input type="text" name="entry[2][CasesCompensationPaidByLicensee]"></td>
            <td><input type="text" name="entry[2][TotalCompensationAmountINR]"></td>
            <td><input type="text" name="entry[2][year]"></td>
        </tr>
        <tr>
            <td><input type="text" name="entry[3][Sno]" value="3"></td>
            <td><input type="text" name="entry[3][ConsumerCategory]"></td>
            <td><input type="text" name="entry[3][ConsumersAppliedForTesting]"></td>
            <td><input type="text" name="entry[3][CasesWithTestingWithin7Days]"></td>
            <td><input type="text" name="entry[3][ConsumersMeterReplacedWithin24HoursUrban]"></td>
            <td><input type="text" name="entry[3][ConsumersMeterReplacedWithin72HoursRural]"></td>
            <td><input type="text" name="entry[3][CasesOfNonComplianceTimeline5]"></td>
            <td><input type="text" name="entry[3][CasesOfNonComplianceTimeline6]"></td>
            <td><input type="text" name="entry[3][ReasonsForNonCompliance]"></td>
            <td><input type="text" name="entry[3][TotalClaimsForCompensationReceived]"></td>
            <td><input type="text" name="entry[3][CasesCompensationPaidByLicensee]"></td>
            <td><input type="text" name="entry[3][TotalCompensationAmountINR]"></td>
            <td><input type="text" name="entry[3][year]"></td>
        </tr>
        <tr>
            <td><input type="text" name="entry[4][Sno]" value="4"></td>
            <td><input type="text" name="entry[4][ConsumerCategory]"></td>
            <td><input type="text" name="entry[4][ConsumersAppliedForTesting]"></td>
            <td><input type="text" name="entry[4][CasesWithTestingWithin7Days]"></td>
            <td><input type="text" name="entry[4][ConsumersMeterReplacedWithin24HoursUrban]"></td>
            <td><input type="text" name="entry[4][ConsumersMeterReplacedWithin72HoursRural]"></td>
            <td><input type="text" name="entry[4][CasesOfNonComplianceTimeline5]"></td>
            <td><input type="text" name="entry[4][CasesOfNonComplianceTimeline6]"></td>
            <td><input type="text" name="entry[4][ReasonsForNonCompliance]"></td>
            <td><input type="text" name="entry[4][TotalClaimsForCompensationReceived]"></td>
            <td><input type="text" name="entry[4][CasesCompensationPaidByLicensee]"></td>
            <td><input type="text" name="entry[4][TotalCompensationAmountINR]"></td>
            <td><input type="text" name="entry[4][year]"></td>
        </tr>
        <tr>
            <td><input type="text" name="entry[5][Sno]" value="5"></td>
            <td><input type="text" name="entry[5][ConsumerCategory]"></td>
            <td><input type="text" name="entry[5][ConsumersAppliedForTesting]"></td>
            <td><input type="text" name="entry[5][CasesWithTestingWithin7Days]"></td>
            <td><input type="text" name="entry[5][ConsumersMeterReplacedWithin24HoursUrban]"></td>
            <td><input type="text" name="entry[5][ConsumersMeterReplacedWithin72HoursRural]"></td>
            <td><input type="text" name="entry[5][CasesOfNonComplianceTimeline5]"></td>
            <td><input type="text" name="entry[5][CasesOfNonComplianceTimeline6]"></td>
            <td><input type="text" name="entry[5][ReasonsForNonCompliance]"></td>
            <td><input type="text" name="entry[5][TotalClaimsForCompensationReceived]"></td>
            <td><input type="text" name="entry[5][CasesCompensationPaidByLicensee]"></td>
            <td><input type="text" name="entry[5][TotalCompensationAmountINR]"></td>
            <td><input type="text" name="entry[5][year]"></td>
        </tr>
        <tr>
            <td><input type="text" name="entry[6][Sno]" value="6"></td>
            <td><input type="text" name="entry[6][ConsumerCategory]"></td>
            <td><input type="text" name="entry[6][ConsumersAppliedForTesting]"></td>
            <td><input type="text" name="entry[6][CasesWithTestingWithin7Days]"></td>
            <td><input type="text" name="entry[6][ConsumersMeterReplacedWithin24HoursUrban]"></td>
            <td><input type="text" name="entry[6][ConsumersMeterReplacedWithin72HoursRural]"></td>
            <td><input type="text" name="entry[6][CasesOfNonComplianceTimeline5]"></td>
            <td><input type="text" name="entry[6][CasesOfNonComplianceTimeline6]"></td>
            <td><input type="text" name="entry[6][ReasonsForNonCompliance]"></td>
            <td><input type="text" name="entry[6][TotalClaimsForCompensationReceived]"></td>
            <td><input type="text" name="entry[6][CasesCompensationPaidByLicensee]"></td>
            <td><input type="text" name="entry[6][TotalCompensationAmountINR]"></td>
            <td><input type="text" name="entry[6][year]"></td>
        </tr>
        <tr>
            <td><input type="text" name="entry[7][Sno]" value="7"></td>
            <td><input type="text" name="entry[7][ConsumerCategory]"></td>
            <td><input type="text" name="entry[7][ConsumersAppliedForTesting]"></td>
            <td><input type="text" name="entry[7][CasesWithTestingWithin7Days]"></td>
            <td><input type="text" name="entry[7][ConsumersMeterReplacedWithin24HoursUrban]"></td>
            <td><input type="text" name="entry[7][ConsumersMeterReplacedWithin72HoursRural]"></td>
            <td><input type="text" name="entry[7][CasesOfNonComplianceTimeline5]"></td>
            <td><input type="text" name="entry[7][CasesOfNonComplianceTimeline6]"></td>
            <td><input type="text" name="entry[7][ReasonsForNonCompliance]"></td>
            <td><input type="text" name="entry[7][TotalClaimsForCompensationReceived]"></td>
            <td><input type="text" name="entry[7][CasesCompensationPaidByLicensee]"></td>
            <td><input type="text" name="entry[7][TotalCompensationAmountINR]"></td>
            <td><input type="text" name="entry[7][year]"></td>
        </tr>
        <tr>
            <td><input type="text" name="entry[8][Sno]" value="8"></td>
            <td><input type="text" name="entry[8][ConsumerCategory]"></td>
            <td><input type="text" name="entry[8][ConsumersAppliedForTesting]"></td>
            <td><input type="text" name="entry[8][CasesWithTestingWithin7Days]"></td>
            <td><input type="text" name="entry[8][ConsumersMeterReplacedWithin24HoursUrban]"></td>
            <td><input type="text" name="entry[8][ConsumersMeterReplacedWithin72HoursRural]"></td>
            <td><input type="text" name="entry[8][CasesOfNonComplianceTimeline5]"></td>
            <td><input type="text" name="entry[8][CasesOfNonComplianceTimeline6]"></td>
            <td><input type="text" name="entry[8][ReasonsForNonCompliance]"></td>
            <td><input type="text" name="entry[8][TotalClaimsForCompensationReceived]"></td>
            <td><input type="text" name="entry[8][CasesCompensationPaidByLicensee]"></td>
            <td><input type="text" name="entry[8][TotalCompensationAmountINR]"></td>
            <td><input type="text" name="entry[8][year]"></td>
        </tr>
        <tr>
            <td><input type="text" name="entry[9][Sno]" value="9"></td>
            <td><input type="text" name="entry[9][ConsumerCategory]"></td>
            <td><input type="text" name="entry[9][ConsumersAppliedForTesting]"></td>
            <td><input type="text" name="entry[9][CasesWithTestingWithin7Days]"></td>
            <td><input type="text" name="entry[9][ConsumersMeterReplacedWithin24HoursUrban]"></td>
            <td><input type="text" name="entry[9][ConsumersMeterReplacedWithin72HoursRural]"></td>
            <td><input type="text" name="entry[9][CasesOfNonComplianceTimeline5]"></td>
            <td><input type="text" name="entry[9][CasesOfNonComplianceTimeline6]"></td>
            <td><input type="text" name="entry[9][ReasonsForNonCompliance]"></td>
            <td><input type="text" name="entry[9][TotalClaimsForCompensationReceived]"></td>
            <td><input type="text" name="entry[9][CasesCompensationPaidByLicensee]"></td>
            <td><input type="text" name="entry[9][TotalCompensationAmountINR]"></td>
            <td><input type="text" name="entry[9][year]"></td>
        </tr>
        <tr>
            <td><input type="text" name="entry[10][Sno]" value="10"></td>
            <td><input type="text" name="entry[10][ConsumerCategory]"></td>
            <td><input type="text" name="entry[10][ConsumersAppliedForTesting]"></td>
            <td><input type="text" name="entry[10][CasesWithTestingWithin7Days]"></td>
            <td><input type="text" name="entry[10][ConsumersMeterReplacedWithin24HoursUrban]"></td>
            <td><input type="text" name="entry[10][ConsumersMeterReplacedWithin72HoursRural]"></td>
            <td><input type="text" name="entry[10][CasesOfNonComplianceTimeline5]"></td>
            <td><input type="text" name="entry[10][CasesOfNonComplianceTimeline6]"></td>
            <td><input type="text" name="entry[10][ReasonsForNonCompliance]"></td>
            <td><input type="text" name="entry[10][TotalClaimsForCompensationReceived]"></td>
            <td><input type="text" name="entry[10][CasesCompensationPaidByLicensee]"></td>
            <td><input type="text" name="entry[10][TotalCompensationAmountINR]"></td>
            <td><input type="text" name="entry[10][year]"></td>
        </tr>
        <tr>
            <td><input type="text" name="entry[11][Sno]" value="11"></td>
            <td><input type="text" name="entry[11][ConsumerCategory]"></td>
            <td><input type="text" name="entry[11][ConsumersAppliedForTesting]"></td>
            <td><input type="text" name="entry[11][CasesWithTestingWithin7Days]"></td>
            <td><input type="text" name="entry[11][ConsumersMeterReplacedWithin24HoursUrban]"></td>
            <td><input type="text" name="entry[11][ConsumersMeterReplacedWithin72HoursRural]"></td>
            <td><input type="text" name="entry[11][CasesOfNonComplianceTimeline5]"></td>
            <td><input type="text" name="entry[11][CasesOfNonComplianceTimeline6]"></td>
            <td><input type="text" name="entry[11][ReasonsForNonCompliance]"></td>
            <td><input type="text" name="entry[11][TotalClaimsForCompensationReceived]"></td>
            <td><input type="text" name="entry[11][CasesCompensationPaidByLicensee]"></td>
            <td><input type="text" name="entry[11][TotalCompensationAmountINR]"></td>
            <td><input type="text" name="entry[11][year]"></td>
        </tr>
        <tr>
            <td><input type="text" name="entry[12][Sno]" value="12"></td>
            <td><input type="text" name="entry[12][ConsumerCategory]"></td>
            <td><input type="text" name="entry[12][ConsumersAppliedForTesting]"></td>
            <td><input type="text" name="entry[12][CasesWithTestingWithin7Days]"></td>
            <td><input type="text" name="entry[12][ConsumersMeterReplacedWithin24HoursUrban]"></td>
            <td><input type="text" name="entry[12][ConsumersMeterReplacedWithin72HoursRural]"></td>
            <td><input type="text" name="entry[12][CasesOfNonComplianceTimeline5]"></td>
            <td><input type="text" name="entry[12][CasesOfNonComplianceTimeline6]"></td>
            <td><input type="text" name="entry[12][ReasonsForNonCompliance]"></td>
            <td><input type="text" name="entry[12][TotalClaimsForCompensationReceived]"></td>
            <td><input type="text" name="entry[12][CasesCompensationPaidByLicensee]"></td>
            <td><input type="text" name="entry[12][TotalCompensationAmountINR]"></td>
            <td><input type="text" name="entry[12][year]"></td>
        </tr>
        <tr>
            <td><input type="text" name="entry[13][Sno]" value="13"></td>
            <td><input type="text" name="entry[13][ConsumerCategory]"></td>
            <td><input type="text" name="entry[13][ConsumersAppliedForTesting]"></td>
            <td><input type="text" name="entry[13][CasesWithTestingWithin7Days]"></td>
            <td><input type="text" name="entry[13][ConsumersMeterReplacedWithin24HoursUrban]"></td>
            <td><input type="text" name="entry[13][ConsumersMeterReplacedWithin72HoursRural]"></td>
            <td><input type="text" name="entry[13][CasesOfNonComplianceTimeline5]"></td>
            <td><input type="text" name="entry[13][CasesOfNonComplianceTimeline6]"></td>
            <td><input type="text" name="entry[13][ReasonsForNonCompliance]"></td>
            <td><input type="text" name="entry[13][TotalClaimsForCompensationReceived]"></td>
            <td><input type="text" name="entry[13][CasesCompensationPaidByLicensee]"></td>
            <td><input type="text" name="entry[13][TotalCompensationAmountINR]"></td>
            <td><input type="text" name="entry[13][year]"></td>
        </tr>
        <tr>
            <td><input type="text" name="entry[14][Sno]" value="14"></td>
            <td><input type="text" name="entry[14][ConsumerCategory]"></td>
            <td><input type="text" name="entry[14][ConsumersAppliedForTesting]"></td>
            <td><input type="text" name="entry[14][CasesWithTestingWithin7Days]"></td>
            <td><input type="text" name="entry[14][ConsumersMeterReplacedWithin24HoursUrban]"></td>
            <td><input type="text" name="entry[14][ConsumersMeterReplacedWithin72HoursRural]"></td>
            <td><input type="text" name="entry[14][CasesOfNonComplianceTimeline5]"></td>
            <td><input type="text" name="entry[14][CasesOfNonComplianceTimeline6]"></td>
            <td><input type="text" name="entry[14][ReasonsForNonCompliance]"></td>
            <td><input type="text" name="entry[14][TotalClaimsForCompensationReceived]"></td>
            <td><input type="text" name="entry[14][CasesCompensationPaidByLicensee]"></td>
            <td><input type="text" name="entry[14][TotalCompensationAmountINR]"></td>
            <td><input type="text" name="entry[14][year]"></td>
        </tr>
        <tr>
            <td><input type="text" name="entry[15][Sno]" value="15"></td>
            <td><input type="text" name="entry[15][ConsumerCategory]"></td>
            <td><input type="text" name="entry[15][ConsumersAppliedForTesting]"></td>
            <td><input type="text" name="entry[15][CasesWithTestingWithin7Days]"></td>
            <td><input type="text" name="entry[15][ConsumersMeterReplacedWithin24HoursUrban]"></td>
            <td><input type="text" name="entry[15][ConsumersMeterReplacedWithin72HoursRural]"></td>
            <td><input type="text" name="entry[15][CasesOfNonComplianceTimeline5]"></td>
            <td><input type="text" name="entry[15][CasesOfNonComplianceTimeline6]"></td>
            <td><input type="text" name="entry[15][ReasonsForNonCompliance]"></td>
            <td><input type="text" name="entry[15][TotalClaimsForCompensationReceived]"></td>
            <td><input type="text" name="entry[15][CasesCompensationPaidByLicensee]"></td>
            <td><input type="text" name="entry[15][TotalCompensationAmountINR]"></td>
            <td><input type="text" name="entry[15][year]"></td>
        </tr>
        <tr>
            <td><input type="text" name="entry[16][Sno]" value="16"></td>
            <td><input type="text" name="entry[16][ConsumerCategory]"></td>
            <td><input type="text" name="entry[16][ConsumersAppliedForTesting]"></td>
            <td><input type="text" name="entry[16][CasesWithTestingWithin7Days]"></td>
            <td><input type="text" name="entry[16][ConsumersMeterReplacedWithin24HoursUrban]"></td>
            <td><input type="text" name="entry[16][ConsumersMeterReplacedWithin72HoursRural]"></td>
            <td><input type="text" name="entry[16][CasesOfNonComplianceTimeline5]"></td>
            <td><input type="text" name="entry[16][CasesOfNonComplianceTimeline6]"></td>
            <td><input type="text" name="entry[16][ReasonsForNonCompliance]"></td>
            <td><input type="text" name="entry[16][TotalClaimsForCompensationReceived]"></td>
            <td><input type="text" name="entry[16][CasesCompensationPaidByLicensee]"></td>
            <td><input type="text" name="entry[16][TotalCompensationAmountINR]"></td>
            <td><input type="text" name="entry[16][year]"></td>
        </tr>
        <tr>
            <td><input type="text" name="entry[17][Sno]" value="17"></td>
            <td><input type="text" name="entry[17][ConsumerCategory]"></td>
            <td><input type="text" name="entry[17][ConsumersAppliedForTesting]"></td>
            <td><input type="text" name="entry[17][CasesWithTestingWithin7Days]"></td>
            <td><input type="text" name="entry[17][ConsumersMeterReplacedWithin24HoursUrban]"></td>
            <td><input type="text" name="entry[17][ConsumersMeterReplacedWithin72HoursRural]"></td>
            <td><input type="text" name="entry[17][CasesOfNonComplianceTimeline5]"></td>
            <td><input type="text" name="entry[17][CasesOfNonComplianceTimeline6]"></td>
            <td><input type="text" name="entry[17][ReasonsForNonCompliance]"></td>
            <td><input type="text" name="entry[17][TotalClaimsForCompensationReceived]"></td>
            <td><input type="text" name="entry[17][CasesCompensationPaidByLicensee]"></td>
            <td><input type="text" name="entry[17][TotalCompensationAmountINR]"></td>
            <td><input type="text" name="entry[17][year]"></td>
        </tr>
        <tr>
            <td><input type="text" name="entry[18][Sno]" value="18"></td>
            <td><input type="text" name="entry[18][ConsumerCategory]"></td>
            <td><input type="text" name="entry[18][ConsumersAppliedForTesting]"></td>
            <td><input type="text" name="entry[18][CasesWithTestingWithin7Days]"></td>
            <td><input type="text" name="entry[18][ConsumersMeterReplacedWithin24HoursUrban]"></td>
            <td><input type="text" name="entry[18][ConsumersMeterReplacedWithin72HoursRural]"></td>
            <td><input type="text" name="entry[18][CasesOfNonComplianceTimeline5]"></td>
            <td><input type="text" name="entry[18][CasesOfNonComplianceTimeline6]"></td>
            <td><input type="text" name="entry[18][ReasonsForNonCompliance]"></td>
            <td><input type="text" name="entry[18][TotalClaimsForCompensationReceived]"></td>
            <td><input type="text" name="entry[18][CasesCompensationPaidByLicensee]"></td>
            <td><input type="text" name="entry[18][TotalCompensationAmountINR]"></td>
            <td><input type="text" name="entry[18][year]"></td>
        </tr>
        <tr>
            <td><input type="text" name="entry[19][Sno]" value="19"></td>
            <td><input type="text" name="entry[19][ConsumerCategory]"></td>
            <td><input type="text" name="entry[19][ConsumersAppliedForTesting]"></td>
            <td><input type="text" name="entry[19][CasesWithTestingWithin7Days]"></td>
            <td><input type="text" name="entry[19][ConsumersMeterReplacedWithin24HoursUrban]"></td>
            <td><input type="text" name="entry[19][ConsumersMeterReplacedWithin72HoursRural]"></td>
            <td><input type="text" name="entry[19][CasesOfNonComplianceTimeline5]"></td>
            <td><input type="text" name="entry[19][CasesOfNonComplianceTimeline6]"></td>
            <td><input type="text" name="entry[19][ReasonsForNonCompliance]"></td>
            <td><input type="text" name="entry[19][TotalClaimsForCompensationReceived]"></td>
            <td><input type="text" name="entry[19][CasesCompensationPaidByLicensee]"></td>
            <td><input type="text" name="entry[19][TotalCompensationAmountINR]"></td>
            <td><input type="text" name="entry[19][year]"></td>
        </tr>
        <tr>
            <td><input type="text" name="entry[20][Sno]" value="20"></td>
            <td><input type="text" name="entry[20][ConsumerCategory]"></td>
            <td><input type="text" name="entry[20][ConsumersAppliedForTesting]"></td>
            <td><input type="text" name="entry[20][CasesWithTestingWithin7Days]"></td>
            <td><input type="text" name="entry[20][ConsumersMeterReplacedWithin24HoursUrban]"></td>
            <td><input type="text" name="entry[20][ConsumersMeterReplacedWithin72HoursRural]"></td>
            <td><input type="text" name="entry[20][CasesOfNonComplianceTimeline5]"></td>
            <td><input type="text" name="entry[20][CasesOfNonComplianceTimeline6]"></td>
            <td><input type="text" name="entry[20][ReasonsForNonCompliance]"></td>
            <td><input type="text" name="entry[20][TotalClaimsForCompensationReceived]"></td>
            <td><input type="text" name="entry[20][CasesCompensationPaidByLicensee]"></td>
            <td><input type="text" name="entry[20][TotalCompensationAmountINR]"></td>
            <td><input type="text" name="entry[20][year]"></td>
        </tr>
        </tbody>
        </table>
        <button type="submit">Save</button>
    </form>
</body>

</html>