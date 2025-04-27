<?php
require "../../Models/dbAdmin.php";

function memberID($data)
{

    $year = date("y", strtotime($data['created_at']));
    $id = str_pad($data['user_id'], 4, '0', STR_PAD_LEFT);
    return "ISO-" . $id . "-" . $year;
}

if (isset($_GET["member"])) {
    $key = $_GET["member"];
    $members = searchMember($key);
}

if ($members->num_rows > 0) {
    echo "
    <table class='table table-hover align-items-center mb-0'>
        <thead>
            <tr>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>ID</th>
                <th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Name</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Phone Number</th>
            </tr>
        </thead>
    <tbody>";
    while ($data = $members->fetch_assoc()) {
        echo "
        <tr onclick=\"window.location.href='patientView?patient_id=" . $data['id'] . "'\" style='cursor: pointer;'>
            <td class='align-middle text-center text-sm'>
                <span class='text-xs text-secondary mb-0'>" . memberID($data) . "</span>
            </td>
            <td>
                <div class='d-flex px-2 py-1 align-items-center'>
                    <div>
                        <img src='" . $data['image_url'] . "' alt='Profile Image' class='avatar avatar-sm me-3'>
                    </div>
                    <div class='d-flex flex-column justify-content-center'>
                        <h6 class='mb-0 text-sm'>" . $data['name'] . "</h6>
                        <a href='mailto:" . $data['email'] . "' class='text-xs text-secondary mb-0'>" . $data['email'] . "</a>
                    </div>
                </div>
            </td>
            <td class='align-middle text-center text-sm'>
                <a href='tel:" . $data['phone'] . "' class='text-secondary text-xs font-weight-bold'>" . $data['phone'] . "</a>
            </td>
        </tr>";
    }
    echo "
    </tbody>
</table>";
} else {
    echo "
    <table class='table table-hover align-items-center mb-0'>
        <thead>
            <tr>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>ID</th>
                <th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Name</th>
                <th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Phone Number</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td class='align-middle text-center text-sm' colspan='3'>
                <span class='text-xs text-secondary mb-0'>No record(s) found</span>
            </td>
        </tr>
        </tbody>
    </table>";
}
