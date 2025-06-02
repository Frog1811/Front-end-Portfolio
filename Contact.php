<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php include 'navbar.php'; ?>

<main class="container contact-page">

    <!-- Left Column -->
    <section class="contact-column contact-left">
        <h3>Contact Me</h3>
        <ul>
            <li>
                <a href="https://www.linkedin.com/in/rick-blaauw-825a46294/" target="_blank">
                    <img src="IMG/Linked_in.png" alt="LinkedIn" />
                    <span> LinkedIn - Let's connect</span>
                </a>
            </li>
            <li>
                <a href="https://github.com/Frog1811" target="_blank">
                    <img src="IMG/github.png" alt="GitHub" />
                    <span> GitHub - Check my work</span>
                </a>
            </li>
        </ul>
    </section>

    <!-- Right Column -->
    <section class="contact-column contact-right">
        <h3>Leave a Mail</h3>
        <form action="#" method="POST">
            <input type="email" name="email" placeholder="Enter your email" required />
            <textarea name="message" placeholder="Write your message here" required></textarea>
            <button type="submit">Send Mail</button>
        </form>
    </section>

</main>

<footer>
    <section class="container footer-content">
        <img src="IMG/Laptop.png" alt="Logo" class="footer-logo" />
        <nav class="socials">
            <a href="https://www.linkedin.com/in/rick-blaauw-825a46294/"><img src="IMG/Linked_in.png" alt="Social 1" /></a>
            <a href="https://github.com/Frog1811"><img src="IMG/github.png" alt="Social 2" /></a>
        </nav>
    </section>
</footer>

</body>
</html>
