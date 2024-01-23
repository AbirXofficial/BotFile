<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Capture Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f0f8ff; /* Light Blue */
        }

        .entry {
            border: 1px solid #008080; /* Teal */
            border-radius: 8px;
            margin-bottom: 20px;
            padding: 15px;
            background-color: #e0f8f7; /* Light Cyan */
        }

        .number {
            font-size: 18px;
            color: #008080; /* Teal */
        }

        .response {
            font-family: 'Courier New', Courier, monospace;
            background-color: #f0f8ff; /* Light Blue */
            padding: 10px;
            overflow-x: auto;
        }

        .timestamp {
            color: #006400; /* Dark Green */
            font-size: 14px;
        }

        /* Additional Styles for the Telegram Bot Page */
        header {
            background-color: #3498db; /* Dodger Blue */
            color: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }

        header h1 {
            margin: 0;
            font-size: 28px;
        }

        header p {
            font-size: 16px;
        }

        section h2 {
            color: #3498db; /* Dodger Blue */
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 5px;
            color: #333;
        }

        blockquote {
            font-style: italic;
            color: #555;
            border-left: 2px solid #3498db; /* Dodger Blue */
            padding-left: 10px;
            margin: 10px 0;
        }

        a {
            color: #3498db; /* Dodger Blue */
        }

        a:hover {
            text-decoration: underline;
        }

        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db; /* Dodger Blue */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        footer {
            text-align: center;
            color: #777;
            margin-top: 50px;
            background-color: #fff;
            padding: 20px;
            border-radius: 0 0 8px 8px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Designing an Informative Index Page for Your Telegram Bot</h1>
        <p>Creating a compelling index page for your Telegram Bot website is crucial for attracting users and providing them with essential information. In this article, we'll guide you through the key elements to include on your frontend to make it informative and user-friendly.</p>
    </header>

    <section id="features">
        <h2>Key Features</h2>
        <ul>
            <li>Feature 1</li>
            <li>Feature 2</li>
            <li>Feature 3</li>
            <!-- Add more features as needed -->
        </ul>
    </section>

    <section id="how-to-use">
        <h2>How to Use</h2>
        <p>Step 1: Do this</p>
        <p>Step 2: Do that</p>
        <!-- Add more steps as needed -->
    </section>

    <section id="benefits">
        <h2>Benefits</h2>
        <p>Save time, get valuable information, and enjoy a unique service with Your Telegram Bot.</p>
    </section>

    <section id="faq">
        <h2>Frequently Asked Questions</h2>
        <p>Q: Question 1?</p>
        <p>A: Answer to question 1.</p>
        <!-- Add more Q&A pairs as needed -->
    </section>

    <section id="community">
        <h2>Community and Support</h2>
        <p>Join our Telegram group for support and updates: <a href="https://t.me/BugCodeFiNDER" target="_blank">Telegram Group</a></p>
    </section>

    <section id="social-proof">
        <h2>Social Proof</h2>
        <blockquote>
            "Positive feedback from a satisfied user about Your Telegram Bot."
        </blockquote>
    </section>

    <section id="download">
        <h2>Get Started Now</h2>
        <p>Download Your Telegram Bot and enhance your Telegram experience.</p>
        <a href="https://t.me/BugCodeFiNDER" class="cta-button">Download Now</a>
    </section>

    <footer>
        <p>Contact us at: <a href="mailto:contact@foxithub.com">contact@foxithub.com</a></p>
    </footer>

    <!-- PHP code for Data Capture Display -->
    <?php
    // Read the content of DataCapture.json file
    $dataCaptureFile = 'DataCapture.json';
    $dataCaptureContent = file_get_contents($dataCaptureFile);

    // Decode the JSON content
    $dataCaptureArray = json_decode($dataCaptureContent, true);

    // Check if decoding was successful
    if ($dataCaptureArray === null) {
        echo "<p>Error decoding JSON.</p>";
    } else {
        // Loop through each entry and display formatted content
        foreach ($dataCaptureArray as $entry) {
            echo "<div class='entry'>";
            echo "<p class='number'><strong>Number:</strong> " . htmlspecialchars($entry['number']) . "</p>";
            echo "<div class='response'><strong>Response:</strong><br><pre>" . htmlspecialchars(json_encode($entry['response'], JSON_PRETTY_PRINT)) . "</pre></div>";
            echo "<p class='timestamp'><strong>Timestamp:</strong> " . date('Y-m-d H:i:s', $entry['timestamp']) . "</p>";
            echo "</div>";
        }
    }
    ?>
</body>

</html>
