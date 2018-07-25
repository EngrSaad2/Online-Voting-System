<?php
// Connect to MySQL
$link = new mysqli( 'localhost', 'root', '', 'election' );
if ( $link->connect_errno ) {
  die ("Failed to connect to MySQL");
}

// Fetch the data
$query = "
SELECT `party_name`,`result`
FROM `result`";
$result = $link->query( $query );

// All good?
if ( !$result ) {
  // Nope
  $message  = 'Invalid query: ' . $link->error . "\n";
  $message .= 'Whole query: ' . $query;
  die( $message );
}

// Print out rows
$data = array();
while ( $row = $result->fetch_assoc() ) {
  $data[] = $row;
}
echo json_encode( $data );

// Close the connection
mysqli_close($link);
?>