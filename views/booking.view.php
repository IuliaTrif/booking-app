<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bookings</title>
    <link rel="stylesheet" href="../css/booking.css">
</head>

<body>

<p class="reservation-text">
    Book the timeslot that fits <strong>you</strong> and <strong>your car</strong>!
</p>

<p class="requested-month">
    <?php echo date('F', mktime(0, 0, 0, $_GET['month'])) . ' booking.view.php' . date('Y'); ?>
</p>

<p class="week-days">
    <?php require('Calendar.php'); ?>
    <?= Calendar::generateWeeks((int) $_GET['month']); ?>
</p>

<p class="month-days">
    <?= Calendar::generateDays((int) $_GET['month']); ?>
</p>

</body>
</html>
