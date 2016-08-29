<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>
<?php
    if (isset($_POST['submit'])) {
        // process form
        printf('User name: %s
            <br>Password: %s
            <br>Gender: %s
            <br>Color: %s
            <br>Language(s): %s
            <br>Comments: %s
            <br>T&amp;C: %s',
             $_POST['name'],
             $_POST['password'],
             $_POST['gender'],
             $_POST['color'],
             $_POST['languages'],
             $_POST['comments'],
             $_POST['tc']);
    }
?>
    <form method="post" action="">
    User Name: <input type="text" name="name"><br>
    Password: <input type="password" name="password"><br>
    Gender:
        <input type="radio" name="gender" value="f">female
        <input type="radio" name="gender" value="m">male<br>
    Favorite color:
        <select name="color">
            <option value="#f00">red</option>
            <option value="#0f0">green</option>
            <option value="#00f">blue</option>
        </select><br>
    Languages spoken:
        <select name="languages[]" mutliple size="3">
            <option value="en">English</option>
            <option value="fr">French</option>
            <option value="it">Italian</option>
        </select><br>
    Comments: <textarea name="comments"></textarea><br>
    <input type="checkbox" name="tc" value="ok">I accept the T&#38;C<br>
    <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>