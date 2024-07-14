<?php
if(isset($_POST['age'])){
    echo 'your <b>age</b> is '.$_POST['age'];
}else{
    echo 'try again';
}
?>