<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css"> 
   <link rel="stylesheet" href="css/all.css"> 
    <script src="script.js" defer></script>
    <title>e-Library</title>
</head>
<body>
    <header>
        <h2>### e-Library</h2>
        <div class="flex" style="--gap: 4rem;">
    <!-- Desktop Navigation Bar -->
            <nav>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="books.php">read</a></li>
                    <li>About</li>
                    <li>contact</li>
                </ul>
            </nav>
    <!-- Nav ends here -->
    <!-- Avatar -->
            <img src="images/Avatar.png" width="70px" height="auto" style="border-radius: 50%;" alt="">
        </div>
    </header>
    
    <div id="main"  ">
        <div id="landingPage">
            <div style="width: 40%;" class="grid">

                <form  method="post" action="index.php">
                <p>
                    Browse through our almighty catalog of good books and reference notes.
                </p>
                
                <h4>Oh! Your favourite Book is available for your reading pleasure.</h4>
                <p>
                    Built with love! ❤️
                <p>
                <button type="submit"><a href="books.php"> Browse Books!</a></button>

            </form>

            </div>
           <!-- landing page image -->
           <div>
                <img src="images/undraw_book_lover_re_rwjy.svg" alt="">
           </div>
        </div>
        
        
        








    </div>
<footer>
    <div>
        <div>
            <ul>
                <li>Quick Links:</li>
                <li>Search</li>
                <li>Library</li>
                <li>References</li>
                <li>About Us</li>
                <li>Contact Us</li>
            </ul>
        </div>
        <div>
            <ul>
                <li>Categories:</li>
                <li>Sciences</li>
                <li>Technology</li>
                <li>Art</li>
                <li>Entertainment</li>
                <li>Security</li>
            </ul>
        </div>
    </div>
</footer>
<div class="endNote">
    <p>Documentation. Privacy Policy.</p>
</div>

</body>
</html>