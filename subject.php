<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">
    <a href="home.html" class="logo">
        <i class="fas fa-graduation-cap"></i> educa
    </a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a href="home.php">home</a></li>
            <li><a href="#testimonials">testimonials</a></li>
            <li><a href="#about">about</a></li>
            <li>
                <a href="#">courses +</a>
                <ul>
                    <li><a href="subject.php?class=11">class 11</a></li>
					<li><a href="subject.php?class=12">class 12</a></li>
                </ul>
            </li>
            <li><a href="home.php#contact">contact</a></li>
        </ul>
    </nav>
</header>

<!-- header section ends -->

<style>

    #class
    {
        width: 7rem;
        height: 7rem;
        font-size: 1.8rem;
        position: relative;
        left: 3px;
        top: -6rem;
        opacity: 0;
        cursor: pointer;
    }
    .class_option
    {
        width: 7rem;
        height: 7rem;
        background: #f5f5f5;
        font-size: 3.5rem;
        padding: 1rem 2.5rem;
        border-radius: 1rem;
    }
    table tr td
    {
        width: 7rem;
        height: 7rem;
    }
    table 
    {
        position: relative;
        top: 2rem;
    }
    .category .class12, .class11
    {
        display: none;
    }
    .stdclass:hover
    {
        background: #dcdcdc;
        color: #fff;
    }
</style>
<script>
    function active(a)
    {
        document.querySelector(`.class_option_${a}`).style.cssText = "background: #224bcf; color: #fff;";
        a = a == 12 ? 11 : 12;
        document.querySelector(`.class_option_${a}`).style.cssText = "background: #f5f5f5; color: #000;";
    }
    function find(p)
    {
        document.querySelectorAll(`.class${p}`).forEach(function(pa)
        {
            pa.style.cssText = "display: block;";
        })
        p = p == 11 ? 12 : 11;
        document.querySelectorAll(`.class${p}`).forEach(function(pa)
        {
            pa.style.cssText = "display: none;";
        })
    }
    window.onload = function() {
        var a = <?php echo $_GET['class']; ?>;
        if (a == 12) {
            document.querySelector('.class12_btexp').click();
        } else if (a==11) {
            document.querySelector('.class11_btexp').click();
        }
    }
</script>
<section class="heading" style="background: #fff;">
    <h3>Choose Your Class</h3>
    <table>
        <tr>
            <td>
                <p1 class="class_option class_option_11">11</p1>
                <input type="radio" id="class" class="class11_btexp" name="class" value="11" onclick="active(11);find(11);">
            </td>
            <td style="padding-left: 2rem;">
                <p1 class="class_option class_option_12">12</p1>
                <input type="radio" id="class" class="class12_btexp" name="class" value="12" onclick="active(12);find(12);">
            </td>
        </tr>
    </table>    
</section>
<section class="heading"><h3>Notes</h3></section>
<style>
    .category .box img {
        height: 8rem;
        margin-bottom: 2rem;
    }
</style>
<section class="category">

    <a href="#" class="box stdclass class11">
        <img src="class 11/1.png" alt="">
        <h3>Units and Measurements</h3>
    </a>

    <a href="#" class="box stdclass class11">
        <img src="class 11/2.png" alt="">
        <h3>Kinematics in one and two dimensions</h3>
    </a>

    <a href="#" class="box stdclass class11">
        <img src="class 11/4.png" alt="">
        <h3>Newton's laws of motion</h3>
    </a>

    <a href="#" class="box stdclass class11">
        <img src="class 11/5.png" alt="">
        <h3>Work, Energy , Power</h3>
    </a>

    <a href="#" class="box stdclass class11">
        <img src="class 11/6.png" alt="">
        <h3>Systems of particles</h3>
    </a>

    <a href="#" class="box stdclass class11">
        <img src="class 11/7.png" alt="">
        <h3>Rotational Mechanics</h3>
    </a>

    <a href="#" class="box stdclass class11">
        <img src="class 11/8.png" alt="">
        <h3>Mechanical Properties of Solids</h3>
    </a>

    <a href="#" class="box stdclass class11">
        <img src="class 11/9.png" alt="">
        <h3>Mechanical Properties of Fluids</h3>
    </a>

    <a href="#" class="box stdclass class11">
        <img src="class 11/10.png" alt="">
        <h3>Kinetic Theory of Gases</h3>
    </a>

    <a href="#" class="box stdclass class11">
        <img src="class 11/11.png" alt="">
        <h3>Thermodynamics</h3>
    </a>

    <a href="#" class="box stdclass class11">
        <img src="class 11/13.png" alt="">
        <h3>Gravitation</h3>
    </a>

    <a href="#" class="box stdclass class11">
        <img src="class 11/12.png" alt="">
        <h3>Simple Harmonic Motion</h3>
    </a>

    <a href="#" class="box stdclass class11">
        <img src="class 11/14.png" alt="">
        <h3>Waves</h3>
    </a>



    <!------------------------------------------class 12-------------------------------------------->



    <a href="#" class="box stdclass class12">
        <img src="class 12/1 Electrostatics.jpg" alt="">
        <h3>Electrostatics</h3>
    </a>

    <a href="#" class="box stdclass class12">
        <img src="class 12/2 capacitance.png" alt="">
        <h3>capacitance</h3>
    </a>

    <a href="#" class="box stdclass class12">
        <img src="class 12/electric-current.png" alt="">
        <h3>current</h3>
    </a>

    <a href="#" class="box stdclass class12">
        <img src="class 12/4 magnetic-effects-of-current.jpg" alt="">
        <h3>magnetic effects of current</h3>
    </a>

    <a href="#" class="box stdclass class12">
        <img src="class 12/5 magnetism-and-matter.jpg" alt="">
        <h3>magnetism and matter</h3>
    </a>

    <a href="#" class="box stdclass class12">
        <img src="class 12/6 electromagnetic-induction.png" alt="">
        <h3>electromagnetic induction</h3>
    </a>

    <a href="#" class="box stdclass class12">
        <img src="class 12/Alternating-Current.png" alt="">
        <h3>alternating current</h3>
    </a>

    <a href="#" class="box stdclass class12">
        <img src="class 12/contact-lens.png" alt="">
        <h3>ray optics</h3>
    </a>

    <a href="#" class="box stdclass class12">
        <img src="class 12/9 wave-opticstran.png" alt="">
        <h3>wave optics</h3>
    </a>

    <a href="#" class="box stdclass class12">
        <img src="class 12/10 -  dual nature of radiation and matter.png" alt="">
        <h3>dual nature of radiation and matter</h3>
    </a>

    <a href="#" class="box stdclass class12">
        <img src="class 12/atom.png" alt="">
        <h3>atoms</h3>
    </a>

    <a href="#" class="box stdclass class12">
        <img src="class 12/nucleus.png" alt="">
        <h3>nucleus</h3>
    </a>

    <a href="#" class="box stdclass class12">
        <img src="class 12/processor.png" alt="">
        <h3>semiconductor</h3>
    </a>

    <a href="#" class="box stdclass class12">
        <img src="class 12/telecommunications.png" alt="">
        <h3>communication systems</h3>
    </a>

</section>

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>explore</h3>
			<a href="home.php">
				<i class="fas fa-arrow-right"></i> home
			</a>
			<a href="about.html">
				<i class="fas fa-arrow-right"></i> about
			</a>
			<a href="subject.php?class=11">
				<i class="fas fa-arrow-right"></i> class 11
			</a>
			<a href="subject.php?class=11">
				<i class="fas fa-arrow-right"></i> class 12
			</a>
			<a href="home.php#about">
				<i class="fas fa-arrow-right"></i> teachers
			</a>
			<a href="#contact">
				<i class="fas fa-arrow-right"></i> contact
			</a>
        </div>

        <div class="box">
            <h3>categories</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> web design </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> graphic design</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> UI / UX design</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> seo marketing</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> digital marketing</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> email marketing</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> all courses</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> my account </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> feedback </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> help center </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> certificates </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> newsletter </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
            <a href="#"> <i class="fab fa-github"></i> github </a>
        </div>

    </div>

    <div class="credit"> created by <span> Bengali Developers</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->
<!-- popup ---->

        <?php
			function popup()
			{
				echo '<div class="popupcontent">';
				echo '<div class="wrapper-1">';
				echo '<div class="wrapper-2"><br><br>';
				echo '<h1>Thank you !</h1>';
				echo '<p>Thanks for contacting us.</p>' ;
				echo '<p>We will get in touch with you as soon as possible. </p>' ;
				echo '<a href="./home.php" class="go-home"> Close </a>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
			}
		?>
		<style>
			.wrapper-1{
  				width:100%;
  				height:100vh;
				position: fixed;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				z-index: 20;
				background: #fff;
				box-shadow: 4px 8px 40px 800px rgba(31, 143, 255,0.5);
				border-radius: 10px;
  				display: flex;
				flex-direction: column;
			}
			.wrapper-2{
				padding:30px;
				height: 45vh;
				text-align:center;
			}
			h1{
				font-family: 'Kaushan Script', cursive;
				font-size:4em;
				letter-spacing:3px;
				color:#5892FF ;
				margin:0;
				margin-bottom:20px;
			}
			.wrapper-2 p{
				margin:0;
				font-size:1.5em;
				color:#aaa;
				font-family: 'Source Sans Pro', sans-serif;
				letter-spacing:1px;
			}
			.go-home{
				display : inline-block;
				text-decoration:none;
				font-size: 1.8rem;
				color:#fff;
				background:#5892FF;
				border:none;
				padding:10px 40px;
				margin:30px 10px;
				border-radius:30px;
				text-transform:capitalize;
			}

			@media (min-width:360px){
			h1{
				font-size:4.5em;
			}
			.go-home{
				margin-bottom:20px;
			}
			}

			@media (min-width:600px){
				.popupcontent{
					max-width:1000px;
					margin:0 auto;
				}
				.wrapper-1{
					height: initial;
					max-width:620px;
					margin:0 auto;
					margin-top:50px;
				}
			
			}
		</style>
<div class="icon_attributes" style="display: none;">
    1 class 11 || waves || <a href="https://www.flaticon.com/free-icons/sound-waves" title="sound-waves icons">Sound-waves icons created by Freepik - Flaticon</a>
    2 class 11 || work energy power || <a href="https://www.flaticon.com/free-icons/innovate" title="innovate icons">Innovate icons created by Uniconlabs - Flaticon</a>
    3 class 11 || unit measurment || <a href="https://www.flaticon.com/free-icons/measure" title="measure icons">Measure icons created by vectorsmarket15 - Flaticon</a>
    4 class 11 || system of particals || <a href="https://www.flaticon.com/free-icons/particles" title="particles icons">Particles icons created by Freepik - Flaticon</a>
    5 class 11 || mechanical property of fluid || <a href="https://www.flaticon.com/free-icons/water" title="water icons">Water icons created by Freepik - Flaticon</a>
    6 class 11 || mechanical property of solid || <a href="https://www.flaticon.com/free-icons/solid" title="solid icons">Solid icons created by samlakodad - Flaticon</a>
    7 class 11 || thermodynamics || <a href="https://www.flaticon.com/free-icons/thermodynamics" title="thermodynamics icons">Thermodynamics icons created by Freepik - Flaticon</a>
    8 class 11 || harmonic motion || <a href="https://www.flaticon.com/free-icons/pendulum" title="pendulum icons">Pendulum icons created by Zulfa Mahendra - Flaticon</a>
    9 class 11 || rotational mechanics || <a href="https://www.flaticon.com/free-icons/automation" title="automation icons">Automation icons created by Becris - Flaticon</a>
    10 class 11 || gravity || <a href="https://www.flaticon.com/free-icons/gravity" title="gravity icons">Gravity icons created by Freepik - Flaticon</a>
    10 class 11 || newton's law of motion || <a href="https://www.flaticon.com/free-icons/newton" title="newton icons">Newton icons created by Freepik - Flaticon</a>

    11 class 12 || current || <a href="https://www.flaticon.com/free-icons/electric-current" title="electric current icons">Electric current icons created by Freepik - Flaticon</a>
    12 class 12 || magnetism and matter || <a href="https://www.flaticon.com/free-icons/core" title="core icons">Core icons created by kerismaker - Flaticon</a>
    13 class 12 || semiconductor || <a href="https://www.flaticon.com/free-icons/cpu" title="cpu icons">Cpu icons created by I Wayan Wika - Flaticon</a>
    14 class 12 || nucleus || <a href="https://www.flaticon.com/free-icons/nucleus" title="Nucleus icons">Nucleus icons created by Freepik - Flaticon</a>
    15 class 12 || magnetic effects of current || <a href="https://www.flaticon.com/free-icons/magnetic-field" title="magnetic field icons">Magnetic field icons created by surang - Flaticon</a>
    16 class 12 || ray optics || <a href="https://www.flaticon.com/free-icons/contact-lens" title="contact lens icons">Contact lens icons created by Uniconlabs - Flaticon</a>
    17 class 12 || comunication system || <a href="https://www.flaticon.com/free-icons/telecommunications" title="telecommunications icons">Telecommunications icons created by Freepik - Flaticon</a>
    18 class 12 || capacitance || <a href="https://www.flaticon.com/free-icons/capacitor" title="capacitor icons">Capacitor icons created by Smashicons - Flaticon</a>
    19 class 12 || alternating current || <a href="https://www.flaticon.com/free-icons/wave" title="wave icons">Wave icons created by Freepik - Flaticon</a>
    20 class 12 || electrostatics || <a href="https://www.flaticon.com/free-icons/magnetic-field" title="magnetic field icons">Magnetic field icons created by Freepik - Flaticon</a>
    21 class 12 || atoms || <a href="https://www.flaticon.com/free-icons/chemistry" title="chemistry icons">Chemistry icons created by Vitaly Gorbachev - Flaticon</a>
</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>