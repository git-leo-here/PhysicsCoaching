<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Educa</title>
		<!-- Swiper CSS -->
		<link rel="stylesheet" href="css/swiper-bundle.min.css" />

		<!-- font awesome cdn link  -->
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
		/>

		<!-- custom css file link  -->
		<link rel="stylesheet" href="css/style.css" />
		<style>
			.login_btn{
				background: #fa1d86;
				padding: 1.5rem;
			}
		</style>
		<script>
			function plus_to_min() {
				document.querySelector("#cos").innerHTML="courses -";
			}
			function min_to_plus() {
				document.querySelector("#cos").innerHTML="courses +";
			}
		</script>
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
					<li><a href="home.html">home</a></li>
					<li><a href="#testimonials">testimonials</a></li>
					<li><a href="#about">about</a></li>
					<li>
						<a href="#" id="cos" onmousemove="plus_to_min();" onmouseout="min_to_plus();">courses +</a>
						<ul>
							<li><a href="subject.php?class=11">class 11</a></li>
							<li><a href="subject.php?class=12">class 12</a></li>
						</ul>
					</li>
					<li><a href="#contact">contact</a></li>
					<li><a class="login_btn" href="login.php">login</a></li>
				</ul>
			</nav>
		</header>

		<!-- header section ends -->

		<!-- home section starts  -->

		<section class="home">
			<div class="image">
				<img src="images/home-img.png" alt="" />
			</div>

			<div class="content">
				<h3>Premium Physics Coaching</h3>
				<h5>At Comfort Of Your Home</h5>
				<br>
				<div class="item">
					<i class="fa fa-check"></i> &nbsp; Instant Doubt Solving
				</div>
				<div class="item">
					<i class="fa fa-check"></i> &nbsp;  Daily Practice Problems
				</div>
				<div class="item">
					<i class="fa fa-check"></i> &nbsp; Monthly Tests
				</div>

				<a href="#contact" class="btn">Get in Touch</a>
			</div>
		</section>

		<!-- home section ends -->

		<!-- categories section starts  -->

		<section class="category">
			<a href="#" class="box">
				<img src="images/category-1.png" alt="" />
				<h3>
					CBSE Boards <br />
					Class 10 , 11 , 12
				</h3>
			</a>

			<a href="#" class="box">
				<img src="images/category-2.png" alt="" />
				<h3>
					ICSE / ISC Boards <br />
					Class 10 , 11 , 12
				</h3>
			</a>

			<a href="#" class="box">
				<img src="images/category-3.png" alt="" />
				<h3>JEE Mains & Advanced</h3>
			</a>

			<a href="#" class="box">
				<img src="images/category-4.png" alt="" />
				<h3>NEET - UG</h3>
			</a>

			<a href="#" class="box">
				<img src="images/category-5.png" alt="" />
				<h3>Physics Olympiad</h3>
			</a>
		</section>

		<!-- categories section ends -->

		<!-- testimonials section starts  -->
		<section class="heading" id="testimonials">
			<h3>What Our Students Say</h3>
		</section>
		<div class="slide-container swiper">
			<div class="slide-content">
				<div class="card-wrapper swiper-wrapper">
					<div class="card swiper-slide">
						<div class="image-content">
							<span class="overlay"></span>

							<div class="card-image">
								<img
									src="images/teacher-1.png"
									alt=""
									class="card-img"
								/>
							</div>
						</div>

						<div class="card-content">
							<h2 class="name">David Dell</h2>
							<p class="description">
								The lorem text the section that contains header
								with having open functionality. Lorem dolor sit
								amet consectetur adipisicing elit.
							</p>

							<button class="button">View More</button>
						</div>
					</div>
					<div class="card swiper-slide">
						<div class="image-content">
							<span class="overlay"></span>

							<div class="card-image">
								<img
									src="images/teacher-2.png"
									alt=""
									class="card-img"
								/>
							</div>
						</div>

						<div class="card-content">
							<h2 class="name">David Dell</h2>
							<p class="description">
								The lorem text the section that contains header
								with having open functionality. Lorem dolor sit
								amet consectetur adipisicing elit.
							</p>

							<button class="button">View More</button>
						</div>
					</div>
					<div class="card swiper-slide">
						<div class="image-content">
							<span class="overlay"></span>

							<div class="card-image">
								<img
									src="images/teacher-3.png"
									alt=""
									class="card-img"
								/>
							</div>
						</div>

						<div class="card-content">
							<h2 class="name">David Dell</h2>
							<p class="description">
								The lorem text the section that contains header
								with having open functionality. Lorem dolor sit
								amet consectetur adipisicing elit.
							</p>

							<button class="button">View More</button>
						</div>
					</div>
					<div class="card swiper-slide">
						<div class="image-content">
							<span class="overlay"></span>

							<div class="card-image">
								<img
									src="images/teacher-4.png"
									alt=""
									class="card-img"
								/>
							</div>
						</div>

						<div class="card-content">
							<h2 class="name">David Dell</h2>
							<p class="description">
								The lorem text the section that contains header
								with having open functionality. Lorem dolor sit
								amet consectetur adipisicing elit.
							</p>

							<button class="button">View More</button>
						</div>
					</div>
					<div class="card swiper-slide">
						<div class="image-content">
							<span class="overlay"></span>

							<div class="card-image">
								<img
									src="images/teacher-5.png"
									alt=""
									class="card-img"
								/>
							</div>
						</div>

						<div class="card-content">
							<h2 class="name">David Dell</h2>
							<p class="description">
								The lorem text the section that contains header
								with having open functionality. Lorem dolor sit
								amet consectetur adipisicing elit.
							</p>

							<button class="button">View More</button>
						</div>
					</div>
					<div class="card swiper-slide">
						<div class="image-content">
							<span class="overlay"></span>

							<div class="card-image">
								<img
									src="images/teacher-6.png"
									alt=""
									class="card-img"
								/>
							</div>
						</div>

						<div class="card-content">
							<h2 class="name">David Dell</h2>
							<p class="description">
								The lorem text the section that contains header
								with having open functionality. Lorem dolor sit
								amet consectetur adipisicing elit.
							</p>

							<button class="button">View More</button>
						</div>
					</div>
					<div class="card swiper-slide">
						<div class="image-content">
							<span class="overlay"></span>

							<div class="card-image">
								<img
									src="images/teacher-7.png"
									alt=""
									class="card-img"
								/>
							</div>
						</div>

						<div class="card-content">
							<h2 class="name">David Dell</h2>
							<p class="description">
								The lorem text the section that contains header
								with having open functionality. Lorem dolor sit
								amet consectetur adipisicing elit.
							</p>

							<button class="button">View More</button>
						</div>
					</div>
					<div class="card swiper-slide">
						<div class="image-content">
							<span class="overlay"></span>

							<div class="card-image">
								<img
									src="images/teacher-8.png"
									alt=""
									class="card-img"
								/>
							</div>
						</div>

						<div class="card-content">
							<h2 class="name">David Dell</h2>
							<p class="description">
								The lorem text the section that contains header
								with having open functionality. Lorem dolor sit
								amet consectetur adipisicing elit.
							</p>

							<button class="button">View More</button>
						</div>
					</div>
					<div class="card swiper-slide">
						<div class="image-content">
							<span class="overlay"></span>

							<div class="card-image">
								<img
									src="images/teacher-9.png"
									alt=""
									class="card-img"
								/>
							</div>
						</div>

						<div class="card-content">
							<h2 class="name">David Dell</h2>
							<p class="description">
								The lorem text the section that contains header
								with having open functionality. Lorem dolor sit
								amet consectetur adipisicing elit.
							</p>

							<button class="button">View More</button>
						</div>
					</div>
				</div>
			</div>

			<div class="swiper-button-next swiper-navBtn"></div>
			<div class="swiper-button-prev swiper-navBtn"></div>
			<div class="swiper-pagination"></div>
		</div>

		<!-- about section starts  -->

		<section class="about">
			<div class="image">
				<img src="images/about-img.png" alt="" />
			</div>

			<div class="content">
				<h3>I will stay with you until you pass your exam.</h3>
				<p>
					Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id
					ducimus at maiores repellat aut debitis aliquam esse,
					quisquam nobis laborum velit voluptate excepturi obcaecati
					dignissimos omnis. Fugiat hic quod nobis?
				</p>
				<a href="#" class="btn">learn more</a>
			</div>
		</section>

		<!-- about section ends -->

		<!-- teachers section starts  -->

		<section class="heading" id="about">
			<h3>Know Your Teacher</h3>
		</section>

		<section class="teachers">
			<div class="box">
				<div class="image">
					<img src="images/teacher-1.png" alt="" />
					<div class="share">
						<a href="#" class="fab fa-facebook-f"></a>
						<a href="#" class="fab fa-twitter"></a>
						<a href="#" class="fab fa-instagram"></a>
						<a href="#" class="fab fa-linkedin"></a>
					</div>
				</div>
				<div class="content">
					<h3>john deo</h3>
					<span>web designer</span>
				</div>
			</div>

			<div class="box">
				<div class="image">
					<img src="images/teacher-2.png" alt="" />
					<div class="share">
						<a href="#" class="fab fa-facebook-f"></a>
						<a href="#" class="fab fa-twitter"></a>
						<a href="#" class="fab fa-instagram"></a>
						<a href="#" class="fab fa-linkedin"></a>
					</div>
				</div>
				<div class="content">
					<h3>john deo</h3>
					<span>web designer</span>
				</div>
			</div>

			<div class="box">
				<div class="image">
					<img src="images/teacher-3.png" alt="" />
					<div class="share">
						<a href="#" class="fab fa-facebook-f"></a>
						<a href="#" class="fab fa-twitter"></a>
						<a href="#" class="fab fa-instagram"></a>
						<a href="#" class="fab fa-linkedin"></a>
					</div>
				</div>
				<div class="content">
					<h3>john deo</h3>
					<span>web designer</span>
				</div>
			</div>
		</section>

		<!-- teachers section ends -->

		<!-- contact section starts -->

		<section class="heading" id="contact">
			<h3>contact us</h3>
		</section>

		<section class="contact">
			<div class="icons-container">
				<div class="icons">
					<i class="fas fa-phone"></i>
					<h3>our number</h3>
					<a href="tel:+911234567890">+123-456-7890</a>
					<a href="tel:+911234567890">+123-456-7890</a>
				</div>

				<div class="icons">
					<i class="fas fa-envelope"></i>
					<h3>our email</h3>
					<p>shaikhanas@gmail.com</p>
					<p>anasbhai@gmail.com</p>
				</div>

				<div class="icons">
					<i class="fas fa-map-marker-alt"></i>
					<h3>our address</h3>
					<p>mumbai, india - 400104</p>
				</div>
			</div>

			
				<?php
					$name = $email = $phone = $message = "";
					$nameerr = $emailerr = $phoneerr = $messageerr = "";
					$err = 0;
					$nameerrfill = $phoneerrfill = $emailerrfill = $messageerrfill = "";
					if ($_SERVER['REQUEST_METHOD'] == 'POST')
					{
						
						function test_inputs($data)
						{
							$data = trim($data);
							$data = stripslashes($data);
							$data = htmlspecialchars($data);
							return $data;
						}
					
						$timestamp = date('Y-m-d H:i:s');

						if(empty($_POST['email'])) {
							$emailerr = "*Email is required";
						} else {
							$email = test_inputs($_POST['email']);
							if(!filter_var($email,FILTER_VALIDATE_EMAIL))
							{
								$emailerr = "*Invalid email address";
								$err = 1;
							} else {
								$err = 0;
							}
						} 
						if(empty($_POST['name'])) {
							$nameerr = "*Name is required";
						} else {
							$name = test_inputs($_POST['name']);
							if(!preg_match("/^[a-zA-Z-' ]*$/",$name))
							{
								$nameerr = "*Only letters & whitespace allowed";
								$err = 1;
							} else {
								$err = 0;
							}
						} 
						if(empty($_POST['message'])) {
							$messageerr = "*Please enter a message";
						} else {
							$message = test_inputs($_POST['message']);
							$err = 0;
						}
						if(empty($_POST['phone']))
						{
							$phoneerr = "*Please enter a phone number";
						} else {
							$phone = test_inputs($_POST['phone']);
							if(!preg_match('/^\d{10}/', $phone))
							{
								$phoneerr = "*Invalid Phone number";
								$err = 1;
							} else {
								$err = 0;
							}
						}
						if($err == 0)
						{
							$conn = mysqli_connect('localhost', 'root', '', 'eduphysics');
							$sql = "INSERT INTO contact_details (name, phone, email, message, timestamp) VALUES ('$name', '$phone', '$email', '$message', '$timestamp');";
    						$result = mysqli_query($conn, $sql);
							popup();
						} else {							
							$emailerrfill = $email;
							$nameerrfill = $name;							
							$phoneerrfill = $phone;
							$messageerrfill = $message;
						}
					}
				?>
			
			<div class="row">
				<form action="./home.php#contact" method="post">
					<h3>get in touch</h3>
					<input
						type="text"
						placeholder="your name"
						class="box"
						name="name"
						value="<?php echo $nameerrfill; ?>"
						required
					/>
					<span style="color: red;"><?php echo $nameerr; ?></span>
					<input
						type="number"
						placeholder="your number"
						class="box"
						name="phone"
						size='10'
						value="<?php echo $phoneerrfill; ?>"
						required
					/>
					<span style="color: red;"><?php echo $phoneerr; ?></span>
					<input
						type="email"
						placeholder="your email"
						class="box"
						name="email"
						value="<?php echo $emailerrfill; ?>"
						required
					/>
					<span style="color: red;"><?php echo $emailerr; ?></span>
					<textarea
						name="message"
						placeholder="your message"
						id=""
						cols="30"
						rows="10"
						required
					><?php echo $messageerrfill; ?></textarea>
					<span style="color: red;"><?php echo $messageerr; ?></span> 
					<input type="submit" value="send message" class="btn" />
				</form>

				<iframe
					class="map"
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15076.89592087332!2d72.8319697277345!3d19.14167056419224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1635757298406!5m2!1sen!2sin"
					allowfullscreen=""
					loading="lazy"
				></iframe>
			</div>
		</section>

		<!-- contact section end -->

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
					<a href="#about">
						<i class="fas fa-arrow-right"></i> teachers
					</a>
					<a href="#contact">
						<i class="fas fa-arrow-right"></i> contact
					</a>
				</div>

				<div class="box">
					<h3>categories</h3>
					<a href="#">
						<i class="fas fa-arrow-right"></i>
						CBSE Boards Class 10 , 11 , 12
					</a>
					<a href="#">
						<i class="fas fa-arrow-right"></i>
						ICSE / ISC Boards Class 10 , 11 , 12
					</a>
					<a href="#">
						<i class="fas fa-arrow-right"></i> UI / UX design</a
					>
					<a href="#">
						<i class="fas fa-arrow-right"></i> seo marketing</a
					>
					<a href="#">
						<i class="fas fa-arrow-right"></i> digital marketing</a
					>
					<a href="#">
						<i class="fas fa-arrow-right"></i> email marketing</a
					>
					<a href="#">
						<i class="fas fa-arrow-right"></i> all courses</a
					>
				</div>

				<div class="box">
					<h3>quick links</h3>
					<a href="#">
						<i class="fas fa-arrow-right"></i> my account
					</a>
					<a href="#">
						<i class="fas fa-arrow-right"></i> feedback
					</a>
					<a href="#">
						<i class="fas fa-arrow-right"></i> help center
					</a>
					<a href="#">
						<i class="fas fa-arrow-right"></i> certificates
					</a>
					<a href="#">
						<i class="fas fa-arrow-right"></i> newsletter
					</a>
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

			<div class="credit">
				created by <span> Bengali Developers</span> | All rights
				reserved!
			</div>
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
		<!-- Swiper JS -->
		<script src="js/swiper-bundle.min.js"></script>

		<!-- custom js file link  -->
		<script src="js/script.js"></script>
	</body>
</html>
