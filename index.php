<?php

?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ABBAS'S PORTFOLIO</title>

    <!-- bootstrap css cdn link  -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <!-- custom css file -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- bootstrap icon cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css"
    />

    <!-- for adding animation to website we have use AOS library 
    AOS Library css file cdn link -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- jquery cdn link  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  </head>
  <body>
    <!-- navbar starts -->
    <nav
      id="navbar-top"
      class="navbar navbar-expand-lg navbar-light bg-white sticky-top"
    >
      <div class="container-fluid px-5">
        <a class="navbar-brand fw-bold fs-2" href="#" style="color: #3f396d"
          >MUHAMMAD ABBAS</a
        >
        <button
          class="nav-menu d-md-none"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <i class="bi bi-menu-button-fill"></i>
        </button>
        <div
          class="collapse navbar-collapse justify-content-center"
          id="navbarNav"
        >
          <ul class="navbar-nav gap-4" style="font-size: 1.1rem">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#service">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#testimonial">Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#blog">Blog</a>
            </li>
          </ul> -->
        <!-- </div>
        <button class="c-btn ms-4 py-2 px-4 rounded-pill d-none d-md-block"  href="#portfolio"> >Contact</button>
      </div> -->
    </nav>
    <!-- navbar ends here -->

    <!-- home section starts  -->
    <section class="home pt-5 pb-5" id="home">
      <div class="row justify-content-evenly align-middle">
        <!-- here data-aos is used for adding aos animation  -->
        <div class="col-10 col-md-6 text-center text-md-start" data-aos="slide-right">
          <h2 style="color: #3f396d">
            Hello! I Am <br /><span class="c-orange"> ABBAS</span>
          </h2>
          <p class="text-muted">
            I'm A Web Developer having 3 years of experience in expertise of
            creating website with fully responsive Also with backend part too.
          </p>
          <button class="c-btn h-btn mt-3 py-3 px-5 rounded-pill">
            Hire Me
          </button>
          <a href="" class="link ms-4 d-none">See My Work</a>
        </div>
        <div class="col-10 col-md-4 d-none d-md-block">
          <img src="images/banner-01.png" class="img-fluid" alt="" />
        </div>
      </div>
    </section>
    <!-- home section ends here -->

    <!-- expertise section starts -->
    <section class="expertise mt-5" id="service">
      <div class="heading text-center">
        <small>My Expertise</small>
        <h3>
          Provide Wide Range of <br />
          Digital Services
        </h3>
      </div>
      <div class="row justify-content-evenly mt-5">
        <div class="col-10 col-md-4" data-aos="fade-up">
          <div class="service-card">
            <div class="img">
              <img
                src="images/service-icon1.png"
                class="w-25 img-fluid img"
                alt=""
              />
            </div>
            <div class="content mt-3">
              <h4>Web Design</h4>
              <p class="text-muted">
                Skilled in using design tools to create visually appealing and user-friendly layouts that adhere to modern design principles
                .
              </p>
              <a href="" class="link">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-10" data-aos="fade-up">
          <div class="service-card">
            <div class="img">
              <img
                src="images/service-icon2.png"
                class="w-25 img-fluid img"
                alt=""
              />
            </div>
            <div class="content mt-3">
              <h4>Web Development</h4>
              <p class="text-muted">
                Experienced in developing robust, scalable web applications using the latest technologies and best practices.
              </p>
              <a href="" class="link">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-10" data-aos="fade-up">
          <div class="service-card">
            <div class="img">
              <img
                src="images/service-icon3.png"
                class="w-25 img-fluid img"
                alt=""
              />
            </div>
            <div class="content mt-3">
              <h4>Debugging</h4>
              <p class="text-muted">
                Proficient in diagnosing and fixing code issues across web applications to ensure optimal performance and user experience.
              </p>
              <a href="" class="link">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- expertise section ends here -->

    <!-- skill section starts -->
    <section class="skill mt-5 py-5" id="about">
      <div class="row justify-content-evenly">
        <div class="col-10 col-md-5 skill-with-progress" data-aos="slide-right">
          <div class="row justify-content-evenly">
            <div class="col-10 col-md-6">
              <div class="progress-card ms-3 ms-md-0">
                <div class="circular-progress html-css">
                  <span class="progress-value html-progress">0%</span>
                </div>
                <br />
                <span class="text">HTML & CSS</span>
              </div>
            </div>
            <div class="col-10 col-md-6 mt-4 mt-md-0">
              <div class="progress-card ms-3 ms-md-0">
                <div class="circular-progress javascript">
                  <span class="progress-value javascript-progress">0%</span>
                </div>
                <br />
                <span class="text">JavaScript</span>
              </div>
            </div>
          </div>
          <div class="row justify-content-evenly mt-4">
            <div class="col-10 col-md-6">
              <div class="progress-card ms-3 ms-md-0">
                <div class="circular-progress php">
                  <span class="progress-value php-progress">0%</span>
                </div>
                <br />
                <span class="text">PHP</span>
              </div>
            </div>
            <div class="col-10 col-md-6 mt-4 mt-md-0">
              <div class="progress-card ms-3  ms-md-0">
                <div class="circular-progress reactjs">
                  <span class="progress-value reactjs-progress">0%</span>
                </div>
                <br>
                <span class="text">Laravel</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-10 col-md-5 skill-detail" data-aos="slide-left">
          <div class="heading mt-5 mt-md-3">
            <small>My Skills</small>
            <h3>Beautiful & Unique Digital Experiences</h3>
            <p class="text-muted">
              Experienced in end-to-end website development, from initial design and user experience planning to coding, testing, and deployment, ensuring a fully functional and visually appealing final product
            </p>
            <p class="text-muted">
              Proficient in integrating responsive design principles and optimizing site performance to deliver a seamless experience across all devices and platforms.
            </p>
            <button class="c-btn h-btn mt-3 py-3 px-5 rounded-pill">
              <!-- here download attribute is used for adding download functionality to button  -->
              <a
                href="Entry Level Web Developer Resume.pdf"
                download="SampleCV"
                style="text-decoration: none;color: #fff;"
                >Download CV</a
              >
            </button>
          </div>
        </div>
      </div>
    </section>
    <!-- skill section end here -->

    <!-- portfolio section starts here -->
    <section class="portfolio" id="portfolio">
      <div class="heading text-center pt-5">
        <small>Creative Work</small>
        <h3>Check My Portfolio</h3>
      </div>

      <div id="myBtnContainer" class="text-center mt-4">
        <!-- here we will create custom attribute using data- for filtering -->
        <button class="filter-item" data-filter="all">All</button>
        <button class="filter-item" data-filter="game">Game</button>
        <button class="filter-item" data-filter="webapp">Web App</button>
        <button class="filter-item" data-filter="website">Website</button>
        <button class="filter-item" data-filter="brand">Brand</button>
      </div>
      <div class="portfolio-body">
        <div class="row justify-content-evenly px-4">
          <div class="post col-md-4 game all col-10 mt-3 mt-md-0" data-aos="fade-up">
            <div class="card">
              <img src="images/2048game.png" class="card-img-top" alt="..." />
              <div class="card-body text-center">
                <h4 class="card-title">2048 Game</h4>
                <span class="badge bg-secondary badge-pill">HTML&CSS</span>
                <span class="badge bg-secondary badge-pill">JavaScript</span>
                <span class="badge bg-secondary badge-pill mb-2">Game</span
                ><br />
                <a href="#" class="link">Read More</a>
              </div>
            </div>
          </div>
          <div class="post col-md-4 website all col-10 mt-3 mt-md-0" data-aos="fade-up">
            <div class="card">
              <img
                src="images/currency-converter.png"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body text-center">
                <h4 class="card-title">Converter App</h4>
                <span class="badge bg-secondary badge-pill">HTML&CSS</span>
                <span class="badge bg-secondary badge-pill">JavaScript</span>
                <span class="badge bg-secondary badge-pill mb-2">Website</span
                ><br />
                <a href="#" class="read-more-btn link">Read More</a>
              </div>
            </div>
          </div>
          <div class="post col-md-4 webapp all col-10 mt-3 mt-md-0" data-aos="fade-up">
            <div class="card">
              <img src="images/dictionary.png" class="card-img-top" alt="..." />
              <div class="card-body text-center">
                <h4 class="card-title">Dictionary</h4>
                <span class="badge bg-secondary badge-pill">HTML&CSS</span>
                <span class="badge bg-secondary badge-pill">JavaScript</span>
                <span class="badge bg-secondary badge-pill mb-2">WebApp</span
                ><br />
                <a href="#" class="read-more-btn link">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-evenly mt-4 px-4">
          <div class="post col-md-4 game all col-10 mt-3 mt-md-0" data-aos="fade-up">
            <div class="card">
              <img src="images/piceditor.png" class="card-img-top" alt="..." />
              <div class="card-body text-center">
                <h4 class="card-title">PicEditor App</h4>
                <span class="badge bg-secondary badge-pill">HTML&CSS</span>
                <span class="badge bg-secondary badge-pill">JavaScript</span>
                <span class="badge bg-secondary badge-pill mb-2">App</span
                ><br />
                <a href="#" class="read-more-btn link">Read More</a>
              </div>
            </div>
          </div>
          <div class="post col-md-4 website all col-10 mt-3 mt-md-0" data-aos="fade-up">
            <div class="card">
              <img src="images/tictactoe.png" class="card-img-top" alt="..." />
              <div class="card-body text-center">
                <h4 class="card-title">TicTacToe Game</h4>
                <span class="badge bg-secondary badge-pill">HTML&CSS</span>
                <span class="badge bg-secondary badge-pill">JavaScript</span>
                <span class="badge bg-secondary badge-pill mb-2">Game</span
                ><br />
                <a href="#" class="read-more-btn link">Read More</a>
              </div>
            </div>
          </div>
          <div class="post col-md-4 all col-10 mt-3 mt-md-0" data-aos="fade-up">
            <div class="card">
              <img
                src="images/lang-translator.png"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body text-center">
                <h4 class="card-title">Lang Translator</h4>
                <span class="badge bg-secondary badge-pill">HTML&CSS</span>
                <span class="badge bg-secondary badge-pill">JavaScript</span>
                <span class="badge bg-secondary badge-pill mb-2">Web App</span
                ><br />
                <a href="#" class="read-more-btn link">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- portfolio section ends here -->

    <!-- testimonial section starts  -->
    <!-- <section class="testimonial mt-5 pt-5" id="testimonial">
      <div class="row justify-content-evenly">
        <div class="col-md-4 col-10" data-aos="slide-right">
          <img src="images/tastimonials-img.png" class="img-fluid" alt="" />
        </div>
        <div class="col-md-6 col-10 mt-5" data-aos="slide-left">
          <div class="heading">
            <small>Testimonials</small>
            <h3>Happy Clients Feedback</h3>
            here we will use carousel element from bootstrap -->
            <!-- <div
              id="carouselExampleControls"
              class="carousel slide"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row justify-content-evenly">
                    <div class="col-2 text-center">
                      <i class="bi bi-quote"></i>
                    </div>
                    <div class="col-10">
                      <p class="text-muted">
                        Quisruam est, qui dolorem ipsum quia dolor sit amet,
                        consecteaur aeci velit, sed quia non numquam eius modi
                        tempora incidunt ut lao magnam aliquam quaerat ...
                      </p>
                      <h4>Kevin Andrew</h4>
                      <small class="fs-6 text-muted">CEO of Company</small>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row justify-content-evenly">
                    <div class="col-2 text-center">
                      <i class="bi bi-quote"></i>
                    </div>
                    <div class="col-10">
                      <p class="text-muted">
                        Quisruam est, qui dolorem ipsum quia dolor sit amet,
                        consecteaur aeci velit, sed quia non numquam eius modi
                        tempora incidunt ut lao magnam aliquam quaerat ...
                      </p>
                      <h4>Kevin Andrew</h4>
                      <small class="fs-6 text-muted">CEO of Company</small>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row justify-content-evenly">
                    <div class="col-2 text-center">
                      <i class="bi bi-quote"></i>
                    </div>
                    <div class="col-10">
                      <p class="text-muted">
                        Quisruam est, qui dolorem ipsum quia dolor sit amet,
                        consecteaur aeci velit, sed quia non numquam eius modi
                        tempora incidunt ut lao magnam aliquam quaerat ...
                      </p>
                      <h4>Kevin Andrew</h4>
                      <small class="fs-6 text-muted">CEO of Company</small>
                    </div>
                  </div>
                </div>
              </div>
              <button
                class="nextprev-btn rounded-pill prev-btn"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="prev"
              >
                <i class="bi bi-arrow-left-circle-fill prev"></i>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="nextprev-btn rounded-pill next-btn"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="next"
              >
                <i class="bi bi-arrow-right-circle-fill next"></i>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    testimonial ends here -->

  
        <!-- here we will make modals if Read more link is clicked the modal will popup -->
        <!-- <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              
                <button type="button" class="btn-c rounded-pill" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill"></i></button>
              
              <div class="modal-body px-4">
                <div class="img">
                  <img src="images/2048game.png" class="img-fluid" alt="">
                </div>
                <div class="content mt-3">
                  <small>By Abbas</small
                    ><span class="text-muted ms-2">Mar 8,2022</span>
                  <h4 class="card-title mt-3">Quis autem vea eum iure reprehenderit</h4>
                  <div class="social-links mt-4">
                      <button href="" class="rounded-pill dribble">
                        <i class="bi bi-dribbble"></i>
                      </button>
                      <button href="" class="rounded-pill whatsapp">
                        <i class="bi bi-whatsapp"></i>
                      </button>
                      <button href="" class="rounded-pill behance">
                        <i class="bi bi-behance"></i>
                      </button>
                  </div>
                  <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor eros a tellus auctor, nec suscipit nunc dignissim. Ut suscipit gravida augue sed elementum. Sed sed luctus nisl. Donec scelerisque nisi in sodales mattis. Vestibulum suscipit odio ac enim blandit sollicitudin. Aliquam ultrices sem quis urna placerat interdum. Etiam rutrum, quam sagittis tristique mollis, libero arcu scelerisque erat, eget tincidunt eros diam quis nunc.</p>
                </div>
              </div>
              <div class="heading px-2">
                <h3 class="fs-3 ms-3">Leave A Comment</h3>
              </div>
              <div class="contact-form ms-3 mt-3 pb-4 px-2">
                <div class="mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Name"
                  />
                </div>
                <div class="mb-3">
                  <input
                    type="email"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="E-mail"
                  />
                </div>
                <div class="mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Mobile No."
                  />
                </div>
                <div class="mb-3">
                  <textarea
                    class="form-control"
                    id="exampleFormControlTextarea1"
                    placeholder="Message"
                    rows="5"
                  ></textarea>
                </div>
                <button class="c-btn h-btn mt-3 py-2 px-4 rounded-pill">
                  Submit
                </button>
              </div>
              
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              
                <button type="button" class="btn-c rounded-pill" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill"></i></button>
              
              <div class="modal-body px-4">
                <div class="img">
                  <img src="images/currency-converter.png" class="img-fluid" alt="">
                </div>
                <div class="content mt-3">
                  <small>By Pawan Kumavat</small
                    ><span class="text-muted ms-2 ms-md-0">Mar 8,2022</span>
                  <h4 class="card-title mt-3">Quis autem vea eum iure reprehenderit</h4>
                  <div class="social-links mt-4">
                      <button href="" class="rounded-pill dribble">
                        <i class="bi bi-dribbble"></i>
                      </button>
                      <button href="" class="rounded-pill whatsapp">
                        <i class="bi bi-whatsapp"></i>
                      </button>
                      <button href="" class="rounded-pill behance">
                        <i class="bi bi-behance"></i>
                      </button>
                  </div>
                  <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor eros a tellus auctor, nec suscipit nunc dignissim. Ut suscipit gravida augue sed elementum. Sed sed luctus nisl. Donec scelerisque nisi in sodales mattis. Vestibulum suscipit odio ac enim blandit sollicitudin. Aliquam ultrices sem quis urna placerat interdum. Etiam rutrum, quam sagittis tristique mollis, libero arcu scelerisque erat, eget tincidunt eros diam quis nunc.</p>
                </div>
              </div>
              <div class="heading px-2">
                <h3 class="fs-3 ms-3">Leave A Comment</h3>
              </div>
              <div class="contact-form ms-3 mt-3 pb-4 px-2">
                <div class="mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Name"
                  />
                </div>
                <div class="mb-3">
                  <input
                    type="email"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="E-mail"
                  />
                </div>
                <div class="mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Mobile No."
                  />
                </div>
                <div class="mb-3">
                  <textarea
                    class="form-control"
                    id="exampleFormControlTextarea1"
                    placeholder="Message"
                    rows="5"
                  ></textarea>
                </div>
                <button class="c-btn h-btn mt-3 py-2 px-4 rounded-pill">
                  Submit
                </button>
              </div>
              
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              
                <button type="button" class="btn-c rounded-pill" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill"></i></button>
              
              <div class="modal-body px-4">
                <div class="img">
                  <img src="images/dictionary.png" class="img-fluid" alt="">
                </div>
                <div class="content mt-3">
                  <small>By Pawan Kumavat</small
                    ><span class="text-muted ms-2 ms-md-0">Mar 8,2022</span>
                  <h4 class="card-title mt-3">Quis autem vea eum iure reprehenderit</h4>
                  <div class="social-links mt-4">
                      <button href="" class="rounded-pill dribble">
                        <i class="bi bi-dribbble"></i>
                      </button>
                      <button href="" class="rounded-pill whatsapp">
                        <i class="bi bi-whatsapp"></i>
                      </button>
                      <button href="" class="rounded-pill behance">
                        <i class="bi bi-behance"></i>
                      </button>
                  </div>
                  <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor eros a tellus auctor, nec suscipit nunc dignissim. Ut suscipit gravida augue sed elementum. Sed sed luctus nisl. Donec scelerisque nisi in sodales mattis. Vestibulum suscipit odio ac enim blandit sollicitudin. Aliquam ultrices sem quis urna placerat interdum. Etiam rutrum, quam sagittis tristique mollis, libero arcu scelerisque erat, eget tincidunt eros diam quis nunc.</p>
                </div>
              </div>
              <div class="heading px-2">
                <h3 class="fs-3 ms-3">Leave A Comment</h3>
              </div>
              <div class="contact-form ms-3 mt-3 pb-4 px-2">
                <div class="mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Name"
                  />
                </div>
                <div class="mb-3">
                  <input
                    type="email"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="E-mail"
                  />
                </div>
                <div class="mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Mobile No."
                  />
                </div>
                <div class="mb-3">
                  <textarea
                    class="form-control"
                    id="exampleFormControlTextarea1"
                    placeholder="Message"
                    rows="5"
                  ></textarea>
                </div>
                <button class="c-btn h-btn mt-3 py-2 px-4 rounded-pill">
                  Submit
                </button>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- blog section ends here -->

    <!-- contact section starts -->
    <!-- <section class="contact py-5" id="contact">
      <div class="heading text-center">
        <small>Get in Touch</small>
        <h3>Any Questions? Feel Free to Contact</h3>
      </div>
      <div class="row justify-content-evenly mt-5">
        <div class="col-md-5 col-10 contact-details" data-aos="slide-right">
          <div class="row justify-content-evenly">
            <div class="col-1">
              <i class="bi bi-geo-alt-fill"></i>
            </div>
            <div class="col-11">
              <p>A:104, SUECHS, JAMSHORO, SINDH, PAKISTAN</p>
            </div>
          </div>
          <div class="row justify-content-evenly">
            <div class="col-1">
              <i class="bi bi-telephone-fill"></i>
            </div>
            <div class="col-11">
              <p>+92 3312624579</p>
            </div>
          </div>
          <div class="row justify-content-evenly">
            <div class="col-1">
              <i class="bi bi-send-fill"></i>
            </div>
            <div class="col-11">
              <p>abbasmaka22@gmail.com</p>
            </div>
          </div>
          
        </div>
        <div class="col-md-5 col-10 mt-3 mt-md-0" data-aos="slide-left">
          <div class="contact-form">
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="Name"
              />
            </div>
            <div class="mb-3">
              <input
                type="email"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="E-mail"
              />
            </div>
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="Mobile No."
              />
            </div>
            <div class="mb-3">
              <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                placeholder="Message"
                rows="5"
              ></textarea>
            </div>
            <button class="c-btn h-btn mt-3 py-3 px-5 rounded-pill">
              Submit
            </button>
          </div>
        </div>
      </div>
    </section> -->
    <!-- contact section ends here -->

      <!-- now we will make back to top button when user click on it it will be redirected to top page  -->
    <button
      type="button"
      class="btn btn-floating btn-lg rounded-pill"
      id="btn-back-to-top"
    >
      <i class="bi bi-arrow-up"></i>
    </button>

    <!-- footer section starts  -->
    <footer class="text-center text-muted py-4">
      <h3 class="text-white pt-4" data-aos="fade-up">Portfolio</h3>
      <div class="link-group mt-5" data-aos="fade-up">
        <a href="#home">Home</a>
        <div class="vr"></div>
        <a href="#about">About</a>
        <div class="vr"></div>
        <a href="#service">Service</a>
        <div class="vr"></div>
        <a href="#portfolio">Portfolio</a>
        <div class="vr"></div>
        <a href="#blog">Blog</a>
        <div class="vr"></div>
        <a href="#contact">Contact</a>
      </div>
      <div class="social-links mt-5" data-aos="fade-up">
        <button href="" class="rounded-pill dribble">
          <i class="bi bi-dribbble"></i>
        </button>
        <button href="" class="rounded-pill whatsapp">
          <i class="bi bi-whatsapp"></i>
        </button>
        <button href="" class="rounded-pill behance">
          <i class="bi bi-behance"></i>
        </button>
      </div>
      <hr class="text-muted my-4" />

      <p>Copyright 2024 Portfolio | All Rights Reserved.</p>
    </footer>
    <!-- footer section ends here -->

      <!-- bootstrap javascript cdn link  -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>

    <!-- AOS library javascript link  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      // initializing AOS library
      AOS.init({
        duration: 1000,
        offset: 50,
      });
    </script>
    <!-- custom js file linking -->
    <script src="js/script.js"></script>
    
  </body>
</html>
