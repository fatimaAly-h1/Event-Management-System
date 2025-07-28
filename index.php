<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <?php include'navbar.php'; ?>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.html">Event Pro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
    <!--Hero Section-->
    <section class="hero text-white text-center p-5">
        <div class="container">
            <h1>Welcome To Event Pro</h1>
            <p>Your ultimate solution for managing events efficiently!</p>
            <a href="#" class="btn btn-light"> Explore Events</a>
        </div>
    </section>
    <!--Service Section-->
    <section id="services" class="py-5 bg-light">
        <div class="comtainer">
            <h2 class="text-center mb-5">Our Services</h2>
            <div class="row g-4">
                <!--Card1-->
                <div class="col-md-4">
                    <div class="card h-100 text-center shadow-sm">
                        <img src="service3.jpeg" class="card-img-top" alt="Service 1">
                        <div class="card-body">
                            <h5 class="card-title">Wedding Planning</h5>
                            <p class="card-text">We plan beautiful and stress-free weddings tailored to your needs.</p>
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <!--Card 2-->
                <div class="col-md-4">
                    <div class="card h-100 text-center shadow-sm">
                        <img src="service2.jpeg" class="card-img-top" alt="Service 2">
                        <div class="card-body">
                            <h5 class="card-title">Corporate Events</h5>
                            <p class="card-text">Professional setup for your business meetings,launches and more.</p>
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <!--Card 3-->
                <div class="col-md-4">
                    <div class="card h-100 text-center shadow-sm">
                        <img src="service4.jpeg" class="card-img-top" alt="Service 3">
                        <div class="card-body">
                            <h5 class="card-title"></h5>Birthday Parties</h5>
                            <p class="card-text">Fun and creative Birthday Partiessetup for all ages and themes.</p>
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--About Us Section-->
        <section id="about" class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <img src="about.jpg" alt="About Us" class="img-fluid rounded shadow">
                    </div>
                    <div class="col-md-6">
                        <h2>About Us</h2>
                        <p>We are a passionate team of event plannersdedicated to creating memorable experiences. From 
                            wedding and birthdays tocorporate events and product launches,we handle everything with professionalism and creativity.
                        </p>
                        <p>With years of experience and strong network of vendors, we ensure every detail is executed perfectly- making your event a sucess.</p>
                        <a href="#" class="btn btn-primary mt-3">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Testemonials Section-->
        <section id="testimonials" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">What our clients say</h2>
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active text-center">
                            <blockquote class="blockquote">
                                <p class="mb-4">They organized the most amazing wedding. Every detail was perfect.Highly recomended!!</p>
                                <footer class="blockquote-footer">Sadia aly</footer>
                            </blockquote>
                        </div>
                        <div class="carousel-item text-center">
                            <blockquote class="blockquote">
                                <p class="mb-4">Our corporate event was flawless.The team is professional,punctual and creative.</p>
                                <footer class="blockquote-footer">Mazhar Fareed</footer>
                            </blockquote>
                        </div>
                        <div class="carousel-item text-center">
                            <blockquote class="blockquote">
                                <p class="mb-4">My daughter's birthday was magical.Thanks to your team for such a amazing experience!! </p>
                                <footer class="blockquote-footer">Huma Rana</footer>
                            </blockquote>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button"data-bs-target="#testimonialCarousel" data-bs-slide="next" >
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </section>
        <!--Contact Us Section-->
        <section id="contact" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Contact Us</h2>
                <div class="row">
                    <div class="col-md-6">
                        <form action="save_contact.php" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Your Message</label>
                                <textarea class="form-control" name="message" rows="5" placeholder="Type your message here..." required></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                    <!--Google Map-->
                    <div class="col-md-6">
                        <div class="ratio ratio-4*3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d56147.89961965546!2d70.2738095442505!3d28.411901745465354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sevent%20hall%20in%20RYK!5e0!3m2!1sen!2s!4v1750919487123!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!--Footer-->
    <footer class="bg-dark text-white text-center p-3 mt-4">
        <p>&copy;2025 Event Pro. All rights reserved</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>