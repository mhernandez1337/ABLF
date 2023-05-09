<div class="container">
        <div id="nav">
            <a href="https://ablfinishes.com/">
                <img src="/images/ABLF_AB.png" alt="Above & Beyond Legendary Finishes">
            </a>
            <span style="font-size:30px;cursor:pointer" id="open-btn" onclick="openNav()">&#9776;</span>
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <div id="nav-links">
                        <a href="/" <?php if($page == "home") echo 'class="active"'; ?> >Home</a>
                        <a href="/projects" <?php if($page == "projects") echo 'class="active"'; ?> >Projects</a>
                        <a href="/services" <?php if($page == "services") echo 'class="active"'; ?> >Services</a>
                        <!-- <a href="/about" <?php if($page == "about") echo 'class="active"'; ?> >About</a> -->
                        <a href="/contact" <?php if($page == "contact") echo 'class="active"'; ?>>Contact</a>
                    </div>
                    <div id="contact-us">
                        <a href="tel:559-458-5420">
                            <i class="fa-solid fa-phone orange-active large-fa"></i>
                            <div id="contact-us-text">
                                <p>559.458.5420</p>
                                <p>Contact us today!</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>