<?php 
$nationality = "domestic";
$is_orphan = true;
$a_level_points = 50;

if ($nationality == "domestic" && !$is_orphan) {
    // Domestic students who are not orphans pay $10,000 in tuition
    $tuition = 10000;
} 
else if ($nationality == "international" && !$is_orphan) {
    // International students who are not orphans pay $20,000 in tuition
    $tuition = 20000;
} 
else if ($nationality == "domestic" && $is_orphan && $a_level_points >= 45) {
    // Domestic orphans with A level performance points greater than or equal to 45 pay $5,000 in tuition
    $tuition = 5000;
} 
else if ($nationality == "domestic" && $is_orphan && $a_level_points < 45) {
    // Domestic orphans with A level performance points less than 45 pay $8,000 in tuition
    $tuition = 8000;
} 
else if ($nationality == "international" && $is_orphan && $a_level_points >= 45) {
    // International orphans with A level performance points greater than or equal to 45 pay $15,000 in tuition
    $tuition = 15000;
} 
else {
    // International orphans with A level performance points less than 45 pay $18,000 in tuition
    $tuition = 18000;
}

echo "The tuition of the student is $tuition.";
?>
