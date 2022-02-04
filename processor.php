<?php

require 'loader/autoloader.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'addvisitor':
            $add = new Inser();
            extract($_POST);
            $name = $fname.' '.$lname;
            echo $ersponse = $add->insert('visitors',
           $records = [
                'name' => $name,
                'checkin' => $checkin,
                'checkout' => $checkout,
                'datevisited' => $datevisited,
                'purpose' => $purpose,
                'remarks' => $remarks,
                'phone' => $phone,
                'email' => $email,
                'address1' => $address1,
                'address2' => $address2,
            ]
        );

            break;
        case 'addcustomer':
            $add = new Inser();
            extract($_POST);
            $name = $fname.' '.$lname;
            $ename = $efname.' '.$elname;
            echo $response = $add->insert('customers',
            [
                'name' => $name,
                'gender' => $gender,
                'empstatus' => $empstatus,
                'jobtitle' => $jobtitle,
                'hedu' => $hedu,
                'mstatus' => $mstatus,
                'address' => $address,
                'phone' => $phone,
                'email' => $email,
                'ename' => $ename,
                'erelation' => $erelation,
                'eaddress' => $eaddress,
                'econt1' => $econt1,
                'econt2' => $econt2,
            ]
        );

            break;
        case 'addbookings':
        $add = new Inser();
        extract($_POST);
echo $response = $add->insert(
    'bookings',
    ['cid' => $cid,
    'bookdate' => $bookdate,
    'booktime' => $booktime,
    'toc' => $toc,
    'assigned' => $assigned,
    'hyh' => $hyh,
    'dateadded' => date('jS F, Y'), ]
);
            break;
        case 'addexcuted':
$add = new Inser();
extract($_POST);
echo $response = $add->insert('eventx', [
    'title' => $title,
    'venue' => $venue,
    'rate' => $rate,
    'edate' => $edate,
    'edays' => $edays,
    'males' => $males,
    'females' => $females,
    'total' => $total,
    'speaker' => $speaker,
    'report' => $report,
]
);
 break;
        case 'eventbook':
$add = new Inser();
extract($_POST);
$cpname = $cfname.' '.$clname;

echo $response = $add->insert('eventb',
[
    'institution' => $institution,
'title' => $title,
'address' => $address,
'program' => $program,
'requestdate' => $requestdate,
'implementeddate' => $implementeddate,
'resourceperson' => $resourceperson,
'budget' => $budget,
'remarks' => $remarks,
'cpname' => $cpname,
'cpaddress' => $cpaddress,
'cpcontact' => $cpcontact,
 ]);
        break;

    case 'addstaff':
        $add = new Inser();
        extract($_POST);
        $name = $fname.' '.$lname;
        $ename = $efname.' '.$elname;
        $nokname = $nokfname.' '.$noklname;
        echo $response = $add->insert('staff',
        [
            'name' => $name,
            'email' => $email,
            'contact' => $contact,
            'contact2' => $contact2,
            'ssnt' => $ssnt,
            'dob' => $dob,
            'gender' => $gender,
            'mstatus' => $mstatus,
            'address' => $address,
            'religion' => $religion,
            'disorder' => $disorder,
            'hedu' => $hedu,
            'hinstitute' => $hinstitute,
            'program' => $program,

            'department' => $department,
            'jobtitle' => $jobtitle,
            'datestarted' => $datestarted,
            'cfirmdate' => $cfirmdate,
            'exitdate' => $exitdate,
            'slevel' => $slevel,
            'samount' => $samount,
            'ename' => $ename,
            'erelation' => $erelation,
            'eaddress' => $eaddress,
            'econt1' => $econt1,
            'econt2' => $econt2,
            'nokname' => $nokname,
            'nokrelation' => $nokrelation,
            'nokaddress' => $nokaddress,
            'nokcont1' => $nokcont1,
            'nokcont2' => $nokcont2,
            'bankname' => $bankname,
            'branch' => $branch,
            'accname' => $accname,
            'accnumber' => $accnumber,
            'status' => 'active',
        ], $_FILES
        );
        break;

            case 'addsession':
                $add = new Inser();
                extract($_POST);
                echo $response = $add->insert('sessions',
                [
                    'cid' => $cid,
                    'presissue' => $presissue,
                    'intervgiven' => $intervgiven,
                    'assignment' => $assignment,
                    'remarks' => $remarks,
                    'datenext' => $datenext,
                ], $_FILES);
                break;
            case 'viewreport':
                $rid = $_GET['rid'];

                echo '<html><body>
                <embed src="upload/'.$rid.'" width="100%" height="800">
                </body></html>';
                break;
            case 'delete':
                $del = new Del();
                $sid = $_GET['sid'];
                $table = $_GET['table'];
                extract($_POST);

                echo $response = $del->delete($table, [
                    ['id', '=', $sid],
                ]);

                break;

           default:

            break;
    }
}
