<?php require_once("../resource/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
        <?php include(template . DS . "/top_nav.php");?>
            <div class="main-content col-md-9">
                <header class="header">
                    <h1>My TaskMaster Dashboard</h1>
                    <div class="notifications">
                        🔔 <span class="badge">3</span>
                    </div>
                </header>