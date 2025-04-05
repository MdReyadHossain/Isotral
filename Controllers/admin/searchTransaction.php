<?php
require "../../Models/dbAdmin.php";

function dateTimeFormat($dateTime)
{
    return date("d M Y, h:i A", strtotime($dateTime));
}

if (isset($_GET["transaction"])) {
    $key = $_GET["transaction"];
    $transactions = searchTransaction($key);
}

if ($transactions->num_rows > 0) {
    echo "
    <table class='table align-items-center mb-0'>
        <thead>
            <tr>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Transaction ID</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Source</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Destination</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Amount</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Status</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Transaction Time</th>
            </tr>
        </thead>
    <tbody>";
    while ($data = $transactions->fetch_assoc()) {
        echo "
        <tr>
            <td class='align-middle text-center text-sm'>
                <span class='text-xs text-secondary mb-0'>" . $data['trans_id'] . "</span>
            </td>
            <td class='align-middle text-center text-sm'>
                <span class='text-xs text-secondary mb-0'>" . $data['source'] . "</span>
            </td>
            <td class='align-middle text-center text-sm'>
                <span class='text-xs text-secondary mb-0'>" . $data['vault_source'] . "</span>
            </td>
            <td class='align-middle text-center text-sm'>
                <span class='text-xs text-secondary mb-0'>BDT " . $data['amount'] . " /-</span>
            </td>
            <td class='align-middle text-center'>
                " . ($data['status'] ? "<span class='badge badge-success'>Sent</span>" : "<span class='badge badge-warning'>Pending</span>") . "
            </td>
            <td class='align-middle text-center'>
                <span class='text-xs text-secondary mb-0'>" . dateTimeFormat($data['created_at']) . "</span>
            </td>
        </tr>";
    }
    echo "
    </tbody>
</table>";
} else {
    echo "
    <table class='table align-items-center mb-0'>
        <thead>
            <tr>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Transaction ID</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Source</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Destination</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Amount</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Status</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Transaction Time</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td class='align-middle text-center text-sm' colspan='6'>
                <span class='text-xs text-secondary mb-0'>No record(s) found</span>
            </td>
        </tr>
        </tbody>
    </table>";
}
