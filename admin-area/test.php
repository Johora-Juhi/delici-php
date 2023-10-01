<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calendar Input Form</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#datepicker").datepicker();
        });
    </script>
</head>

<body>
    <form action="process.php" method="post">
        <label for="datepicker">Select Date:</label>
        <input type="text" id="datepicker" name="selected_date">
        <input type="submit" value="Submit">
    </form>
</body>

</html>
