<!--All head parts -->

<?php include 'inc/title.php';?>

    <header>
            <div class="container">
                <div id="branding">
                    <h1><span class="highlight">T</span>as<span class="highlight">T</span>uran<span class="highlight">T</span></h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="dropdown"><a href="#" class="dropbtn">Pizza</a>
                            <div class="dropdown-content">
                              <a href="italian_pizza.php">Italian</a>
                              <a href="indian_pizza.php">Indian</a>
                              <a href="srilankan_pizza.php">Sri Lankan</a>
                            </div>
                        </li>

                        <li class="dropdown"><a href="#" class="dropbtn">Rice</a>
                            <div class="dropdown-content">
                              <a href="srilankan_rice.php">Sri Lankan</a>
                              <a href="indian_rice.php">Indian</a>
                              <a href="malaysian_rice.php">Malaysian</a>
                            </div>
                        </li>

                        <li><a href="drinks.php">Drinks</a></li>
                        <li class="current"><a href="contact.php">Contact Us</a></li>
                        <li><a href="wipe.php" onclick="return  confirm('Do you want to clean cart?')">Orders</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!--Subscribe section -->

        <?php include 'inc/subscribe.php';?>
        
        <section id="about">
            <div class="container">
                <article id="main-col">
                    <h1 class="page-title">About Us</h1>
                    <p class="main_para">Ed Tittel is a full-time independent writer, trainer, and consultant who works
                    out of his home in beautiful Austin, Texas. Ed has been writing for the trade
                    press since 1986 and has worked on more than 130 books. In addition to this
                    title, Ed has worked on more than 35 books for Wiley, including Networking
                    Windows NT Server For Dummies, XML For Dummies, and Networking with
                    NetWare For Dummies.
                    Ed is the technology editor at Certification magazine, writes the “Must Know
                    News” twice-monthly newsletter for Cramsession.com, and also writes for a
                    variety of Web sites and magazines. When he’s not busy doing all that work
                    stuff, Ed likes to travel, shoot pool, spend time with his family (especially
                    taking walks with young Gregory), and wrestle with his Labrador, Blackie.</p>

                                        <p class="dark">Ed Tittel is a full-time independent writer, trainer, and consultant who works
                    out of his home in beautiful Austin, Texas. Ed has been writing for the trade
                    press since 1986 and has worked on more than 130 books. In addition to this
                    title, Ed has worked on more than 35 books for Wiley, including Networking
                    Windows NT Server For Dummies, XML For Dummies, and Networking with
                    NetWare For Dummies.
                    Ed is the technology editor at Certification magazine, writes the “Must Know
                    News” twice-monthly newsletter for Cramsession.com, and also writes for a
                    variety of Web sites and magazines. When he’s not busy doing all that work
                    stuff, Ed likes to travel, shoot pool, spend time with his family (especially
                    taking walks with young Gregory), and wrestle with his Labrador, Blackie.</p>
                    <br>
                    
                   
                </article>

                <aside id="sidebar" class="dark">
                    <h3>Contact Us</h3>
                    <form action="contactform.php" method="POST" class="msg">
                        <div>
                            <label>Name : </label><br>
                            <input type="text" name="name" placeholder="Your Name">
                        </div>
                        <div>
                            <label>Email : </label><br>
                            <input type="email" name="email" placeholder="Your Email">
                        </div>
                        <div>
                            <label>Message : </label><br>
                            <textarea name="message" placeholder="Your Message"></textarea>
                        </div><br>
                        <button class="b_sub" type="submit">Send</button>
                    </form>

                    <p>

                    <ul>Address : No. 232 A, D.S. Senanayake Road, Nugegoda.</ul><br>
                    <ul>Phone : 0112344567 | 0112567890</ul><br>
                    <ul>Email : info@tasturant.com</ul>

                    </p>

                </aside>
            </div>
            <br><br><br><br><br>
        </section>
<!--All footer parts-->

<?php include 'inc/footer.php';?>