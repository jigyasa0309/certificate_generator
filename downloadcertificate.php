<?php
session_start();
require("db.php");
$userName = $_SESSION['user_name'];

if (!$userName) {
    header('Location: login.php');
    exit();
}

require_once 'vendor/autoload.php';

use Dompdf\Dompdf;

// Path to the certificate file
$certificateFile = 'certificate.php';

// Create a new DOMPDF instance
$dompdf = new Dompdf();

// Load the certificate file
ob_start();
include $certificateFile;
$html = ob_get_clean();

// Load HTML content
$dompdf->loadHtml($html);

// Set paper size and orientation (optional)
$dompdf->setPaper('A4', 'portrait');

// Render the HTML content to PDF
$dompdf->render();

// Output the generated PDF as a file for download
$dompdf->stream('certificate.pdf', ['Attachment' => true]);
?>
