<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <title>DEVDAT</title>
</head>
<body>
    <div class="row burger-menu">
            <p><a href="#main_nav" id="access_nav" class="access_aid">Skip to navigation</a></p>
    </div>
    <nav id="main_nav">
        <ul>
            <li>
                <a href=""> Home </a>
            </li>
            <li>
                <a href=""> About </a>
            </li>
            <li>
                <a href=""> Services </a>
            </li>
            <li>
                <a href=""> Team </a>
            </li>
            <li>
                <a href=""> Contact </a>
            </li>

            <p><a href="#body" id="access_top" class="access_aid">Skip to top</a></p>
        </ul>
    </nav>
    <div class="row main-background">
        
    </div>

    <div class="row logo">
        <a href="#">
            <img src="assets/logo/logo-devdat.png" alt="DEVDAT, We Develop that">
        </a>
    </div>

    <div class="container mx-auto center">
        <div class="row main-header">
            <div class="s12">
                <h1 class="sm:text-4xl site-eslogan"> We're innovation </h1>
            </div>
            <div class="s12">
                <h3 class="lg:text-2xl"> Let us help you grow your business. </h3>
            </div>
        </div>
        <div class="row content-spacing">
                <div class="the-company-header">
                    <h2 class="text-3xl"> The company </h2>
                </div>
                <hr/>
                <div class="the-company-info intern-spacing"> 
                    <p class="text-base"> 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                    </p>
                </div>
        </div>

        <div class="row content-spacing">
                <div class="what-we-do-header">
                    <h2 class="text-3xl"> What do we do? </h2>
                </div>
                <hr/>
                <div class="what-we-do-info intern-spacing"> 
                    <p class="text-base"> 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                    </p>
                </div>
        </div>

        <div class="row content-spacing">
            <div class="services flex items-center">
                <div class="s6 web-design">
                    <img class="services-img" src="./assets/icons/WEB_DESIGN_PNG.png" alt="Web Design">
                    <h5> WEB DESIGN </h5>
                    <hr/>
                    <ul>
                        <li> Wordpress </li>
                        <li> Sass </li>
                        <li> Less </li>
                        <li> CSS </li>
                        <li> Javascript </li>
                    </ul>
                </div>
                <div class="s6 web-applications flex flex-col items-center">
                    <img class="services-img" src="./assets/icons/WEB_APPLICATIONS_PNG.png" alt="Web Applications">
                    <h5> WEB APPLICATIONS </h5>
                    <hr/>
                    <ul>
                        <li> ReactJS </li>
                        <li> AngularJS </li>
                        <li> Ruby </li>
                        <li> Ruby on Rails </li>
                        <li> WebRTC </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row get-to-know-us content-spacing ">
            <div class="get-to-know-us-header">
                <h2 class="text-3xl"> Get to know us </h2>
            </div>
            <hr/>
            <div class="get-to-know-us-info intern-spacing">
                <p class="text-base"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                </p>
            </div>
            <div class="flex team-photo-wrapper">
                <div class="flex items-center s6 team-margin">
                    <div class="team flex flex-col ">
                        <img src="./assets/pictures/ALE_PHOTO.png" alt="Jose A Mejia">
                        <div class="team-header">
                            <h4> Jose A Mejia </h4>
                        </div>
                        <hr/>
                        <div class="team-position">
                            <p class="text-base"> Web Developer </p>
                        </div>
                    </div>
                </div>
    
                <div class=" s6">
                    <div class="team flex flex-col items-center">
                        <img src="./assets/pictures/EDU_PHOTO.png" alt="Eduardo Mejia">
                        <div class="team-header">
                            <h4> Eduardo Mejia </h4>
                        </div>
                        <hr/>
                        <div class="team-position">
                            <p class="text-base"> WebRTC and VoIP Developer </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="row contact">
            <div class="header intern-spacing">
                <h2> LETS HELP YOUR BUSINESS! </h2>
            </div>
            <hr/>
            <div class="text intern-spacing">
                <p class="text-base"> Tell us about your project, and get a free quote with an dedicated team. </p>
            </div>
            <div class="form">
                <form action="">
                    <div class="flex flex-col input-wrapper">
                        <label for="name"> </label>
                        <input name="name" type="text" placeholder="Your name">
                    </div>

                    <div class="flex flex-col input-wrapper">
                        <label for="telephone"></label>
                        <input name="telephone" type="text" placeholder="phone">
                        
                    </div>
                    <div class="flex flex-col input-wrapper">
                        <label for="email"></label>
                        <input type="text" name="email" placeholder="email">
                    </div>
                    <div class="flex flex-col input-wrapper">
                        <label for="project"></label>
                        <textarea name="project" id="project" cols="30" rows="10" placeholder="Message"></textarea>    
                    </div>

                    <div class="flex flex-row-reverse">
                        <button class="form-submit"> SEND </button>
                    </div>
                    
                </form>
            </div>
        </div>

        <div class="copy-right ">
            <p class="text-xs"> DEVDAT 2019 All right reserved | + 1 (239) 628- 6079 | <a href=""> info@devdat.io </a> </p>
        </div>
    </footer>
</body>
<script>
	var nav = document.getElementById('access_nav'),
	    body = document.body;

	nav.addEventListener('click', function(e) {
		body.className = body.className? '' : 'with_nav';
		e.preventDefault();
	});
</script>
</html>