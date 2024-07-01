<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News and Shop - Contact</title>
    <link rel="stylesheet" href="/uas/css/contact.css">
    <!-- <script src="/uas/js/contact.js"></script> -->
</head>
<body>
    <header>
    <div class="container">
        <nav>
        <a href="#" class="logo">ELECTRONIX</a>
            <ul>
                    <li><a href="../index.html">News</a></li>
                    <li><a href="/uas/html/shop.html">Shop</a></li>
                    <li><a href="/uas/html/contact.php">Contact</a></li>
                    <li><a href="/uas/html/about.html">About Us</a></li>
            </ul>
        </nav>
    </div>
    </header>
    <main>
        <div class="container">
        <h1>Contact Us</h1>
        <form id="contact-form" action="sent_question.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="10" cols="50" required></textarea>
        <button type="submit">
            <div class="svg-wrapper-1">
                <div class="svg-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                    </svg>
                </div>
            </div>
            <span>Send</span>
         </button>
        </form>
        </div>
    </main>
</body>
</html>
