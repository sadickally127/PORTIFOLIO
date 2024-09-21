<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio website of Sadick R. Ally, specializing in Web Development, Networking, and IT support.">

    <title>Personal Portifolio</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="https://kit.fontawesome.com/97cbdc0c66.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="header">
    <div class="container">
        <nav>
            <img src="CSS/IMAGES/download.png" alt="logo" class="logo" style="width:80px; height:80px; border-radius: 50%;">
            <ul id="sideMenu">
                <li><a href="#header">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#srvices">Services</a></li>
                <li><a href="#portifolio">Portifolio</a></li>
                <li><a href="#contacts">Contacts</a></li>
                <i class="fa-solid fa-xmark" onclick="closeMenu()"></i>
            </ul>
            <i class="fa-solid fa-bars" onclick="openMenu()"></i>
        </nav>
        <div class="header-text">
            <p>Cumputer Networking | Web Developer | Freelancer.</p>
            <h1>Hello, I am <span> Sadick R. Ally </span><br> from Arusha, Tanzania.</h1>
        </div>
    </div>
</div> 

<!---------------- ABOUT ----------------->
<div id="about">
<div class="container">
    <div class="row">
        <div class="about-col-1">
             <img src="CSS/IMAGES/server.jpg" alt="server-pic">
        </div>
        <div class="about-col-2">
            <h1 class="sub-title">About Me</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere sint assumenda vel dignissimos possimus magni. Possimus quo adipisci, non cumque enim commodi at facilis amet aliquam deleniti, aliquid harum velit.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam atque dolores commodi placeat voluptates. Quisquam eligendi quaerat modi, harum aspernatur corrupti esse tempora est? Ad hic dicta maiores neque facere?
            </p>

            <div class="tab-titles">
                <p class="tab-links active-link"  onclick="opentab('skills')">Skills</p>
                <p class="tab-links"  onclick="opentab('experience')">Experience</p>
                <p class="tab-links"  onclick="opentab('education')">Education</p>
            </div>
            <div class="tab-contents active-tab" id="skills">
                <ul>
                    <li><span>Computer Networking</span><br> Designing and Implementing Computer Network designs.</li>
                    <li><span>Web Development</span><br> Designing and developing Websites.</li>
                    <li><span>IT support</span><br> Providng on-site and remote support to clients on technology stuffs.
                </ul>
            </div>
            <div class="tab-contents" id="experience">
                <ul>
                    <li><span>July-Oct, 2024</span><br> Working as an Assistant Network Technician at African Court on Human and Peoples Rights (AfCHPR).</li>
                    <li><span>July-Sep, 2023</span><br> Working as a Junior Network Technician at MICA computer Ltd.</li>
                    <li><span>2021-2024</span><br> Offering Freelance Web-development services and Technical support to clients.</li>
                </ul>
            </div>
            <div class="tab-contents" id="education">
                <ul>
                    <li><span>2021-2024</span><br> Bachelor degree in Information Technology from the Institute of Accountancy Arusha.</li>
                    <li><span>2019-2021</span><br> Advanced Level Education (ACSEE) from Kahororo Boys High School.</li>
                    <li><span>2015-2018</span><br> Ordinary Level Education (OCSE) from Bukoba Secondary school.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>

<!----------------------SERVICES------------------------>
<div id="service">
    <div class="container">
        <h1 class="sub-title">My Services</h1>
        <div class="service-list">
           <div>
           <i class="fa-solid fa-code"></i>
                <h2>Web Development</h2>
                <p>We design and develop responsive and interactive websites using the latest technologies like HTML5, CSS3, JavaScript, and PHP. Whether you need a portfolio site, a business landing page, or a full-fledged web application, we've got you covered.</p>
                <a href="">Learn more</a>
           </div>
           <div>
           <i class="fa-solid fa-network-wired"></i>
                <h2>Cumputer Networking</h2>
                <p><p>We offer professional networking solutions, ensuring reliable and secure communication for businesses and individuals. Whether it's setting up a small office network or configuring advanced networking protocols, our services are designed to keep your systems connected and running smoothly.</p>
                <a href="#">Learn more</a>
           </div>
           <div>
           <i class="fa-sharp fa-solid fa-headset"></i>
                <h2>Technical Support.</h2>
                <p>Facing technical challenges? We provide comprehensive technical support services, including hardware troubleshooting, software installation, and system maintenance. Our goal is to help you resolve issues quickly and efficiently so you can focus on what matters most.</p>
                <a href="#">Learn more</a>
           </div> 
        </div>
    </div>
</div>



<!------------------------------ PORTIFOLIO ------------------------------>

<div id="portifolio">
    <div class="container">
    <h1 class="sub-title">My Work</h1>
    <div class="work-list">
        <div class="work">
            <img src="CSS/IMAGES/serverr.jpg" alt="Work1" style="height: 100%;">
            <div class="layer">
                <h3>Upper Zonal Trading Ltd.</h3>
                <p> Successfully designed and implemented a Local Area Network (LAN) for a mid-sized enterprise, enabling secure, remote access to the company’s internal network. This project involved configuring routers, switches so as to ensure employees could securely access company resources from remote locations.</p>
                <a href=""><i class="fa-solid fa-up-right-from-square"></i></a>
            </div>
        </div>
        <div class="work">
            <img src="CSS/IMAGES/jobportal.jpg" alt="Work2" style="height: 100%;">
            <div class="layer">
                <h3>Job Portal</h3>
                <p> The App simplifys and Automates the whole process of Job-vacancies announcement, application and response to both Potential Employers and Jobseekers.</p>
                <a href="https://bit-0054-2020.000webhostapp.com"><i class="fa-solid fa-up-right-from-square"></i></a>
            </div>
        </div>
        <div class="work">
            <img src="CSS/IMAGES/support.jpg" alt="Work3">
            <div class="layer">
                <h3>African Court On Human and Peoples Rights (AfCHPR)</h3>
                <p>Provided comprehensive IT support for a retail company and private persons, managing both software and hardware issues. This involved troubleshooting network connectivity problems, resolving printer malfunctions, and addressing software installation issues. I implemented remote support tools to provide quick and efficient solutions, reducing downtime for employees.</p>
                <a href="https://www.african-court.org/wpafc"><i class="fa-solid fa-up-right-from-square"></i></a>
            </div>
        </div>
    </div>

    <a href="" class="btn">See More</a>
    </div>
</div>



<!-------------------------------- CONTACTS ---------------------------->
<div id="contacts">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Me</h1>
                <p><i class="fa-solid fa-at"></i> sadickally127@gmail.com</p>
                <p><i class="fa-solid fa-phone-volume"></i> +255684092596</p>
                <p><i class="fa-brands fa-square-whatsapp"></i> +255622962148</p>
                <p><i class="fa-solid fa-location-dot"></i> Elerai, Arusha, Tanzania.</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/sadick.ally.127"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/sadick-ally-7b0819281/"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="https://x.com/SadickA97259407"><i class="fa-brands fa-square-x-twitter"></i></a>
                </div>
                
                <a href="" download class="btn btn2">Download CV</a>
            </div>
            <div class="contact-right">
                <form name="submit-to-google-sheet">
                    <input type="text" name="Name" placeholder="Your Name" required>
                    <input type="text" name="Email" placeholder="Your Email" required>
                    <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                    <button type="submit" class="btn btn2" style="background: #ff004f;">Submit</button>
                </form>
                <span id="msg"></span>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright © Sally 2024.</p>
    </div>
</div>




<script>
    var tablinks=document.getElementsByClassName("tab-links");
    var tabcontents=document.getElementsByClassName("tab-contents");

    function opentab(tabname){
        for(tablink of tablinks){
            tablink.classList.remove("active-link")
        }
        for(tabcontent of tabcontents){
            tabcontent.classList.remove("active-tab")
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }
</script>

<script>
var sidemenu = document.getElementById('sideMenu');

function openMenu() {
    sidemenu.style.right = "0px";
}

function closeMenu() {
    sidemenu.style.right = "-150px";
}
</script>

<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbyBfNh5chri2fD__QlEgx_DJpxF5YNShb_F16Sj_Np4SynopzMvQZnhyvX70MVtjJKs/exec'
  const form = document.forms['submit-to-google-sheet']

  const msg = document.getElementById('msg')

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => {
        msg.innerHTML = "Message sent Successfully"
        setTimeout(function(){
            msg.innerHTML = ""
        },1000)
        form.reset()
      })
      .catch(error => console.error('Error!', error.message))
  })
</script>

</body>
</html>