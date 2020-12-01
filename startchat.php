<html>
    <head>
        <title>bot</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    </head>
    <body>
        <!-- Nav -->
        <nav class="navbar navbar-expand-lg "style="background-color: black;">
            <a class="navbar-brand" href="home2.php">Home</a>
            <a class="navbar-brand" href="edit.php">Profile</a>
            <a class="navbar-brand" href="Logout.php">Logout</a>
        </nav>
        <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
        <df-messenger  intent="WELCOME" chat-title="chatBot" agent-id="128779d9-ad79-4fd0-8022-c8212aedd4f0" language-code="en"></df-messenger>
    </body>
</html>