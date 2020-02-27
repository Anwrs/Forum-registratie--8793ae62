<?php 
    echo "<h1>Forum registratie</h1>" . PHP_EOL;
if((isset($_POST['name'])) && (isset($_POST['email'])) && (isset($_POST['age']))) {
    echo "<h2>Jouw username is " . $_POST['name'] . "<br></h2>";
    echo "<h2>Jouw email is " . $_POST['email'] . "<br></h2>";
    echo "<h2>Jouw age is " . $_POST['age'] . "<br></h2>";
} else {
    echo "Je hebt niet alles ingevuld";
}

?>