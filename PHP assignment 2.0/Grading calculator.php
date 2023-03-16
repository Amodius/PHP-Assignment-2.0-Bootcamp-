<?php
// Set the scores for each subject
$mathScore = 80;
$englishScore = 70;
$scienceScore = 90;
$socialStudiesScore = 75;

// Calculate the average score
$averageScore = ($mathScore + $englishScore + $scienceScore + $socialStudiesScore) / 4;

// Check the average score against the grading scale and output the final grade
if ($averageScore >= 90) {
  echo "Average score: " . $averageScore . ", Final grade: A";
} 
else if ($averageScore >= 80 && $averageScore < 90) {
  echo "Average score: " . $averageScore . ", Final grade: B";
} 
else if ($averageScore >= 70 && $averageScore < 80) {
  echo "Average score: " . $averageScore . ", Final grade: C";
} 
else if ($averageScore >= 60 && $averageScore < 70) {
  echo "Average score: " . $averageScore . ", Final grade: D";
} else {
  echo "Average score: " . $averageScore . ", Final grade: F";
}
?>
