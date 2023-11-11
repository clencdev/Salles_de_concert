<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="css/style.css"rel="stylesheet">
    <link href='https://unpkg.com/fullcalendar@5/main.min.css' rel='stylesheet' />
    <script src='https://unpkg.com/fullcalendar@5/main.min.js'></script>
    <script>

    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth', // Vue initiale du calendrier
            events: 'path_to_your_php_script/fetchEvents.php' // Chemin vers votre script PHP
        });

        calendar.render();
    });

    </script>
</head>
<body>
    <?php require_once "nav.php";?>
    
