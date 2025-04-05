<?php
require "../../Models/dbAdmin.php";

function textShortener($text, $limit = 30)
{
    if (strlen($text) > $limit) {
        return substr($text, 0, 5) . '...' . substr($text, -5);
    }
    return $text;
}

function dateTimeFormat($dateTime)
{
    return date("d M Y, h:i A", strtotime($dateTime));
}

if (isset($_GET["investment"])) {
    $key = $_GET["investment"];
    $investments = searchInvestment($key);
}

if ($investments->num_rows > 0) {
    echo "
    <table class='table align-items-center mb-0'>
        <thead>
            <tr>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Title</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Description</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Amount</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Invested on</th>
            </tr>
        </thead>
    <tbody>";
    while ($data = $investments->fetch_assoc()) {
        echo "
        <tr>
            <td class='align-middle text-center text-sm'>
                <span class='text-xs text-secondary mb-0'>" . $data['title'] . "</span>
            </td>
            <td class='align-middle text-center text-sm' data-toggle='tooltip' title='" . $data['description'] . "'>
                <span class='text-xs text-secondary mb-0'>" . textShortener($data['description']) . "</span>
            </td>
            <td class='align-middle text-center text-sm'>
                <span class='text-xs text-secondary mb-0'>BDT " . $data['amount'] . " /-</span>
            </td>
            <td class='align-middle text-center text-sm'>
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
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Title</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Description</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Amount</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Invested on</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td class='align-middle text-center text-sm' colspan='4'>
                <span class='text-xs text-secondary mb-0'>No record(s) found</span>
            </td>
        </tr>
        </tbody>
    </table>";
}
