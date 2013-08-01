// This is a suggestion: Allow for the translation of X out of Y correct answers.
// replace in page/site/quiz/review.php at the bottom.

<? $str = $_SESSION['wpsqt']['current_score']; 
   $str = str_replace("out of", " מתוך ", $str);
   $str = str_replace("correct", " תשובות נכונות ", $str);
 ?>
<p><font size="+3"><?php _e('Total: ', 'wp-survey-and-quiz-tool'); echo $str ; ?></font></p>
