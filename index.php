<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <script src="/js/myscript.js"></script>
    <title>Hunger</title>
    
    
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="header__body">
          <nav class="nav">
            <a class="nav__link active" href="">Home</a>
            <a class="nav__link" href="#about">About</a>
            <a class="nav__link" href="#team">Team</a>
            <a class="nav__link" href="#booking">Booking</a>
          </nav>

          <div class="header__logo">
            <img src="img/Vector.png" alt="Логотип" />
          </div>

          <nav class="nav">
            <a class="nav__link active" href="#menu">Menu</a>
            <a class="nav__link" href="#galerie">Galerie</a>
            <a class="nav__link" href="#events">Events</a>
            <a class="nav__link" href="#contact">Contact</a>
          </nav>
        </div>
      </div>
    </header>

    <div class="intro">
      <div class="time">
        <p>Mon - Fri: 8PM - 10PM, Sat - Sun: 8PM - 3AM</p>
      </div>

      <div class="intro__inner">
        <h2 class="intro__suptitle">RESTAURANT</h2>
        <h1 class="intro__title">HUNGRY PEOPLE</h1>
        <a class="btn1" href="#">Book Table</a>
        <a class="btn" href="#">Explore</a>
        <div class="down-btn">
          <a class="down-btn1" href="#foot"
            ><img src="img/down-btn.png" alt=""
          /></a>
        </div>
      </div>

      <div class="social">
        <a class="social1" href="#"><img src="img/facebook.png" alt="" /></a>
        <a class="social2" href="#"><img src="img/twitter.png" alt="" /></a>
        <a class="social3" href="#"> <img src="img/instagram.png" alt="" /></a>
      </div>
    </div>


    <div onclick="topFunction()" id="myBtn" title="Go to top">
      <!-- Иконка fa-chevron-up (Font Awesome) -->
      <i class="fa fa-chevron-up"></i>
    </div>

    <section class="section" id="about">
      <div class="container">
        <div class="section_body">
          <div class="section_header">
            <h1 class="section_title">about us</h1>
            <h3 class="section_suptitle">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at
              velit maximus, molestie est a, tempor magna.
            </h3>
            <div class="text">
              <p>
                Integer ullamcorper neque eu purus euismod, ac faucibus mauris
                posuere. Morbi non ultrices ligula. Sed dictum, enim sed
                ullamcorper feugiat, dui odio vehicula eros, a sollicitudin
                lorem quam nec sem. Mauris tincidunt feugiat diam convallis
                pharetra. Nulla facilisis semper laoreet.
              </p>
            </div>
          </div>
          <div class="about_img">
            <img src="img/Group.png" alt="" />
          </div>
        </div>
      </div>
    </section>

    <section class="section1" id="team">
      <div class="main-title">our team</div>
      <div class="container">
        <div class="section_body">
          <div class="about_img">
            <img src="img/Group (1).png" alt="" />
          </div>
          <div class="section_header">
            <h1 class="section_title1">MASTER CHEF</h1>
            <h3 class="section_suptitle1">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at
              velit maximus, molestie est a, tempor magna.
            </h3>
            <div class="text1">
              <p>
                Integer ullamcorper neque eu purus euismod, ac faucibus mauris
                posuere. Morbi non ultrices ligula. Sed dictum, enim sed
                ullamcorper feugiat, dui odio vehicula eros, a sollicitudin
                lorem quam nec sem. Mauris tincidunt feugiat diam convallis
                pharetra. Nulla facilisis semper laoreet.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section"  id="booking">
      <div class="container">
        <div class="section_body">
          <div class="section_header">
            <h1 class="section_title">book a table</h1>

            <div class="form">
              <form class="main_form">
                <p class="form_item">
                  <input type="text" placeholder="Name" />
                </p>
                <p class="form_item">
                  <input type="text" placeholder="Email" />
                </p>
                <p class="form_item">
                  <input type="text" placeholder="Phone" />
                </p>
                <p class="form_item">
                  <select id="People" name="people">
                     <option selected value="australia">People</option>
                     <option value="canada">1</option>
                     <option value="usa">2</option>
                     <option value="usa">3</option>
                </select>
              </p>
                
                <p class="form_item">
                  <input type="text" placeholder="Date(mm/dd)" />
                </p>

                <p class="form_item">
                  <select id="time" name="time">
                     <option selected value="australia">Time</option>
                     <option value="canada">12:00</option>
                     <option value="usa">14:00</option>
                     <option value="usa">15:00</option>
                </select>
              </p>

                
              </form>
              <a class="btn_book" href="#">Book Table</a>
            </div>
          </div>
          <div class="about_img">
            <img src="img/Group 2.png" alt="" />
          </div>
        </div>
      </div>
      <div class="down_time">
        <p>
          Mon - Fri: <b>8PM - 10PM</b>, Sat - Sun: <b>8PM - 3AM</b>, Phone:
          <b>+40 729 131 637/+40 726 458 782</b>
        </p>
      </div>
    </section>

    <section class="section2" >
      <div class="main-title">specialties</div>
      <div class="container">
        <div class="section_body">
          <div class="about_img">
            <img src="img/Group 3.png" alt="" />
          </div>
          <div class="section_header">
            <h1 class="section_title1">chocolate pancakes</h1>
            <h3 class="section_suptitle1">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at
              velit maximus, molestie est a, tempor magna.
            </h3>
            <div class="text1">
              <p>
                Integer ullamcorper neque eu purus euismod, ac faucibus mauris
                posuere. Morbi non ultrices ligula. Sed dictum, enim sed
                ullamcorper feugiat, dui odio vehicula eros, a sollicitudin
                lorem quam nec sem. Mauris tincidunt feugiat diam convallis
                pharetra. Nulla facilisis semper laoreet.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section " id="menu">
      <div class="container">
        <div class="section_body3">
          <div class="section_header">
            <h1 class="section_title">DELICIOUS MENU</h1>
            <h3 class="section_suptitle">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
              <br />
              at velit maximus, molestie est a, tempor magna.
            </h3>
          </div>
          <div class="text3">
            <nav class="nav_text3">
              <a class="text3_item" href="">Soupe</a>
              <a class="text3_item" href="">Pizza </a>
              <a class="text3_item" href="">Pasta </a>
              <a class="text3_item" href="">Desert</a>
              <a class="text3_item" href="">Wine  </a>
              <a class="text3_item" href="">Beer  </a>
              <a class="text3_item2" href="">Drinks</a>
            </nav>
            
          </div>
          <div class="menu">
            <div class="menu_item">
              <h1 class="header_menu">
                PIZZA QUATRO STAGIONI . . . . 55,68 USD
              </h1>
              <p class="down_menu">
                Integer ullamcorper neque eu purus euismod
              </p>
            </div>
            <div class="menu_item">
              <h1 class="header_menu">
                PIZZA QUATRO STAGIONI . . . . 55,68 USD
              </h1>
              <p class="down_menu">
                Integer ullamcorper neque eu purus euismod
              </p>
            </div>
            <div class="menu_item">
              <h1 class="header_menu">
                PIZZA QUATRO STAGIONI . . . . 55,68 USD
              </h1>
              <p class="down_menu">
                Integer ullamcorper neque eu purus euismod
              </p>
            </div>
            <div class="menu_item">
              <h1 class="header_menu">
                PIZZA QUATRO STAGIONI . . . . 55,68 USD
              </h1>
              <p class="down_menu">
                Integer ullamcorper neque eu purus euismod
              </p>
            </div>
            <div class="menu_item">
              <h1 class="header_menu">
                PIZZA QUATRO STAGIONI . . . . 55,68 USD
              </h1>
              <p class="down_menu">
                Integer ullamcorper neque eu purus euismod
              </p>
            </div>
            <div class="menu_item">
              <h1 class="header_menu">
                PIZZA QUATRO STAGIONI . . . . 55,68 USD
              </h1>
              <p class="down_menu">
                Integer ullamcorper neque eu purus euismod
              </p>
            </div>
            <div class="menu_item">
              <h1 class="header_menu">
                PIZZA QUATRO STAGIONI . . . . 55,68 USD
              </h1>
              <p class="down_menu">
                Integer ullamcorper neque eu purus euismod
              </p>
            </div>
            <div class="menu_item">
              <h1 class="header_menu">
                PIZZA QUATRO STAGIONI . . . . 55,68 USD
              </h1>
              <p class="down_menu">
                Integer ullamcorper neque eu purus euismod
              </p>
            </div>
            <div class="menu_item">
              <h1 class="header_menu">
                PIZZA QUATRO STAGIONI . . . . 55,68 USD
              </h1>
              <p class="down_menu">
                Integer ullamcorper neque eu purus euismod
              </p>
            </div>
            <div class="menu_item">
              <h1 class="header_menu">
                PIZZA QUATRO STAGIONI . . . . 55,68 USD
              </h1>
              <p class="down_menu">
                Integer ullamcorper neque eu purus euismod
              </p>
            </div>
            <div class="menu_item">
              <h1 class="header_menu">
                PIZZA QUATRO STAGIONI . . . . 55,68 USD
              </h1>
              <p class="down_menu">
                Integer ullamcorper neque eu purus euismod
              </p>
            </div>
            <div class="menu_item">
              <h1 class="header_menu">
                PIZZA QUATRO STAGIONI . . . . 55,68 USD
              </h1>
              <p class="down_menu">
                Integer ullamcorper neque eu purus euismod
              </p>
            </div>
            <div class="menu_item">
              <h1 class="header_menu">
                PIZZA QUATRO STAGIONI . . . . 55,68 USD
              </h1>
              <p class="down_menu">
                Integer ullamcorper neque eu purus euismod
              </p>
            </div>
            <div class="menu_item">
              <h1 class="header_menu">
                PIZZA QUATRO STAGIONI . . . . 55,68 USD
              </h1>
              <p class="down_menu">
                Integer ullamcorper neque eu purus euismod
              </p>
            </div>
            <div class="menu_item">
              <h1 class="header_menu">
                PIZZA QUATRO STAGIONI . . . . 55,68 USD
              </h1>
              <p class="down_menu">
                Integer ullamcorper neque eu purus euismod
              </p>
            </div>
            <div class="menu_item">
              <h1 class="header_menu">
                PIZZA QUATRO STAGIONI . . . . 55,68 USD
              </h1>
              <p class="down_menu">
                Integer ullamcorper neque eu purus euismod
              </p>
            </div>
            <div class="menu_item">
              <h1 class="header_menu">
                PIZZA QUATRO STAGIONI . . . . 55,68 USD
              </h1>
              <p class="down_menu">
                Integer ullamcorper neque eu purus euismod
              </p>
            </div>
            <div class="menu_item">
              <h1 class="header_menu">
                PIZZA QUATRO STAGIONI . . . . 55,68 USD
              </h1>
              <p class="down_menu">
                Integer ullamcorper neque eu purus euismod
              </p>
            </div>
            <div class="menu_item">
              <h1 class="header_menu">
                PIZZA QUATRO STAGIONI . . . . 55,68 USD
              </h1>
              <p class="down_menu">
                Integer ullamcorper neque eu purus euismod
              </p>
            </div>
            <div class="menu_item">
              <h1 class="header_menu">
                PIZZA QUATRO STAGIONI . . . . 55,68 USD
              </h1>
              <p class="down_menu">
                Integer ullamcorper neque eu purus euismod
              </p>
            </div>
            <div class="menu_item">
              <h1 class="header_menu">
                PIZZA QUATRO STAGIONI . . . . 55,68 USD
              </h1>
              <p class="down_menu">
                Integer ullamcorper neque eu purus euismod
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section2 " id="events">
      <div class="main-title">PRIVATE EVENTS</div>
      <div class="container">
        <div class="section_body">
          <div class="about_img">
            <img src="img/Group 5.png" alt="" class="scale" >
          </div>

          <div class="about_img">
            <img src="img/Group 4.png" alt="" class="scale" >
          </div>
        </div>
      </div>
      <div class="down_call">
        <p>
          For private events please call:
          <b>+40 729 131 637/+40 726 458 782</b> or use the contact form.
        </p>
      </div>
    </section>

    <section class="hero-section" id="galerie">
      <div class="section_header">
        <h1 class="section_title">Photo Galerei</h1>
        <h3 class="section_suptitle">
          Pictures our restaraunt
        </h3>
      </div>

      <div class="card-grid">
        

        <a class="card" href="#">
          <div class="card__background" style="background-image: url(img/Rectangle.png)"></div>
          
        </a>
        <a class="card" href="#">
          <div class="card__background" style="background-image: url(img/Rectangle1.png)"></div>
          
        </a>
        <a class="card" href="#">
          <div class="card__background" style="background-image: url(img/Rectangle2.png)"></div>
          
        </a>
        <a class="card" href="#">
          <div class="card__background" style="background-image: url(img/Rectangle3.png)"></div>
          
         </a>
      <div>
    </section>

    <section class="section8" id="contact">
      
        <div class="section_body_contact">
          <div class="main_contact">

            <div class="section_header">
              <h1 class="section_title1">CONTACT</h1>
              <h3 class="section_suptitle1">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                <br />
                at velit maximus, molestie est a, tempor magna.
              </h3>
            </div>

            <div class="form_contact">
            <form class="contact_form">
              <p class="contact_item">
                <input type="text" placeholder="Name" />
              </p>
              <p class="contact_item">
                <input type="text" placeholder="Email" />
              </p>
              <p class="contact_item">
                <input type="text" placeholder="Phone" />
              </p>
              <p class="contact_item message">
                <input type="text" placeholder="Message" />
              </p>
            </form>
            </div>

            <div class="contact">
            <p>
              <svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 1C8.13 1 5 4.13 5 8C5 13.25 12 21 12 21C12 21 19 13.25 19 8C19 4.13 15.87 1 12 1ZM7 8C7 5.24 9.24 3 12 3C14.76 3 17 5.24 17 8C17 10.88 14.12 15.19 12 17.88C9.92 15.21 7 10.85 7 8ZM9.5 8C9.5 6.61929 10.6193 5.5 12 5.5C12.8932 5.5 13.7185 5.9765 14.1651 6.75C14.6116 7.5235 14.6116 8.4765 14.1651 9.25C13.7185 10.0235 12.8932 10.5 12 10.5C10.6193 10.5 9.5 9.38071 9.5 8Z" fill="white"/>
                <path d="M12 21L11.6289 21.3351L12 21.7459L12.3711 21.3351L12 21ZM12 17.88L11.6056 18.1873L11.9977 18.6907L12.3927 18.1895L12 17.88ZM14.1651 6.75L14.5981 6.5L14.5981 6.5L14.1651 6.75ZM14.1651 9.25L14.5981 9.5L14.5981 9.5L14.1651 9.25ZM5.5 8C5.5 4.40614 8.40614 1.5 12 1.5V0.5C7.85386 0.5 4.5 3.85386 4.5 8H5.5ZM12 21C12.3711 20.6649 12.3711 20.6649 12.3711 20.6649C12.371 20.6649 12.371 20.6648 12.371 20.6647C12.3708 20.6646 12.3706 20.6643 12.3702 20.6639C12.3695 20.6632 12.3684 20.6619 12.3669 20.6602C12.3638 20.6568 12.3591 20.6515 12.3528 20.6445C12.3401 20.6303 12.3211 20.609 12.2961 20.5807C12.2462 20.5241 12.1723 20.4398 12.078 20.3304C11.8894 20.1115 11.6192 19.792 11.2945 19.3919C10.6447 18.5913 9.77908 17.4706 8.91448 16.1891C8.04892 14.9062 7.19053 13.4713 6.55005 12.0417C5.90664 10.6055 5.5 9.21133 5.5 8H4.5C4.5 9.41367 4.96836 10.957 5.63745 12.4505C6.30947 13.9506 7.20108 15.4375 8.08552 16.7484C8.97092 18.0607 9.85533 19.2056 10.518 20.0221C10.8496 20.4307 11.1262 20.7577 11.3204 20.9831C11.4175 21.0958 11.4941 21.1832 11.5466 21.2427C11.5729 21.2724 11.5932 21.2952 11.6071 21.3107C11.614 21.3185 11.6193 21.3244 11.623 21.3285C11.6248 21.3306 11.6262 21.3321 11.6272 21.3332C11.6277 21.3338 11.6281 21.3342 11.6284 21.3345C11.6286 21.3347 11.6287 21.3349 11.6288 21.3349C11.6289 21.3351 11.6289 21.3351 12 21ZM18.5 8C18.5 9.21133 18.0934 10.6055 17.4499 12.0417C16.8095 13.4713 15.9511 14.9062 15.0855 16.1891C14.2209 17.4706 13.3553 18.5913 12.7055 19.3919C12.3808 19.792 12.1106 20.1115 11.922 20.3304C11.8277 20.4398 11.7538 20.5241 11.7039 20.5807C11.6789 20.609 11.6599 20.6303 11.6472 20.6445C11.6409 20.6515 11.6362 20.6568 11.6331 20.6602C11.6316 20.6619 11.6305 20.6632 11.6298 20.6639C11.6294 20.6643 11.6292 20.6646 11.629 20.6647C11.629 20.6648 11.629 20.6649 11.6289 20.6649C11.6289 20.6649 11.6289 20.6649 12 21C12.3711 21.3351 12.3711 21.3351 12.3712 21.3349C12.3713 21.3349 12.3714 21.3347 12.3716 21.3345C12.3719 21.3342 12.3723 21.3338 12.3728 21.3332C12.3738 21.3321 12.3752 21.3306 12.377 21.3285C12.3807 21.3244 12.386 21.3185 12.3929 21.3107C12.4068 21.2952 12.4271 21.2724 12.4534 21.2427C12.5059 21.1832 12.5825 21.0958 12.6796 20.9831C12.8738 20.7577 13.1504 20.4307 13.482 20.0221C14.1447 19.2056 15.0291 18.0607 15.9145 16.7484C16.7989 15.4375 17.6905 13.9506 18.3626 12.4505C19.0316 10.957 19.5 9.41367 19.5 8H18.5ZM12 1.5C15.5939 1.5 18.5 4.40614 18.5 8H19.5C19.5 3.85386 16.1461 0.5 12 0.5V1.5ZM12 2.5C8.96386 2.5 6.5 4.96386 6.5 8H7.5C7.5 5.51614 9.51614 3.5 12 3.5V2.5ZM17.5 8C17.5 4.96386 15.0361 2.5 12 2.5V3.5C14.4839 3.5 16.5 5.51614 16.5 8H17.5ZM12.3927 18.1895C13.4627 16.8318 14.7298 15.0589 15.7321 13.254C16.7237 11.4684 17.5 9.57549 17.5 8H16.5C16.5 9.30451 15.8363 11.0066 14.8579 12.7685C13.8902 14.5111 12.6573 16.2382 11.6073 17.5705L12.3927 18.1895ZM6.5 8C6.5 9.5619 7.28771 11.461 8.28304 13.2505C9.28986 15.0608 10.5564 16.8405 11.6056 18.1873L12.3944 17.5727C11.3636 16.2495 10.1301 14.5142 9.15696 12.7645C8.17229 10.994 7.5 9.2881 7.5 8H6.5ZM12 5C10.3431 5 9 6.34315 9 8H10C10 6.89543 10.8954 6 12 6V5ZM14.5981 6.5C14.0622 5.5718 13.0718 5 12 5V6C12.7145 6 13.3748 6.3812 13.7321 7L14.5981 6.5ZM14.5981 9.5C15.134 8.5718 15.134 7.4282 14.5981 6.5L13.7321 7C14.0893 7.6188 14.0893 8.3812 13.7321 9L14.5981 9.5ZM12 11C13.0718 11 14.0622 10.4282 14.5981 9.5L13.7321 9C13.3748 9.6188 12.7145 10 12 10V11ZM9 8C9 9.65685 10.3431 11 12 11V10C10.8954 10 10 9.10457 10 8H9Z" fill="#F9F6F6"/>
                </g>
                <defs>
                <filter id="filter0_d" x="0.5" y="0.5" width="23" height="29.246" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                <feOffset dy="4"/>
                <feGaussianBlur stdDeviation="2"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                </filter>
                </defs>
              </svg>
                
              <p>5th London Boulevard, U.K.</p>
            </p>
            <p>
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1 0H4.5C5.05 0 5.5 0.45 5.5 1C5.5 2.25 5.7 3.45 6.07 4.57C6.18 4.92 6.1 5.31 5.82 5.59L3.62 7.79C5.06 10.62 7.38 12.93 10.21 14.38L12.41 12.18C12.61 11.99 12.86 11.89 13.12 11.89C13.22 11.89 13.33 11.9 13.43 11.94C14.55 12.31 15.76 12.51 17 12.51C17.55 12.51 18 12.96 18 13.51V17C18 17.55 17.55 18 17 18C7.61 18 0 10.39 0 1C0 0.45 0.45 0 1 0ZM3.54 2C3.6 2.89 3.75 3.76 3.99 4.59L2.79 5.79C2.38 4.59 2.12 3.32 2.03 2H3.54ZM13.4 14.02C14.25 14.26 15.12 14.41 16 14.47V15.96C14.68 15.87 13.41 15.61 12.2 15.21L13.4 14.02Z" fill="white"/>
              </svg>
                
              <p>+40 729 131 637/+40 726 458 782</p>
            </p>
            <p>
              <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21 3C21 1.9 20.1 1 19 1H3C1.9 1 1 1.9 1 3V15C1 16.1 1.9 17 3 17H19C20.1 17 21 16.1 21 15V3ZM19 3L11 8L3 3H19ZM11 10L3 5V15H19V5L11 10Z" fill="white"/>
                <path d="M11 8L10.735 8.424L11 8.58962L11.265 8.424L11 8ZM19 3L19.265 3.424L20.7434 2.5H19V3ZM3 3V2.5H1.2566L2.735 3.424L3 3ZM3 5L3.265 4.576L2.5 4.09788V5H3ZM11 10L10.735 10.424L11 10.5896L11.265 10.424L11 10ZM3 15H2.5V15.5H3V15ZM19 15V15.5H19.5V15H19ZM19 5H19.5V4.09788L18.735 4.576L19 5ZM19 1.5C19.8239 1.5 20.5 2.17614 20.5 3H21.5C21.5 1.62386 20.3761 0.5 19 0.5V1.5ZM3 1.5H19V0.5H3V1.5ZM1.5 3C1.5 2.17614 2.17614 1.5 3 1.5V0.5C1.62386 0.5 0.5 1.62386 0.5 3H1.5ZM1.5 15V3H0.5V15H1.5ZM3 16.5C2.17614 16.5 1.5 15.8239 1.5 15H0.5C0.5 16.3761 1.62386 17.5 3 17.5V16.5ZM19 16.5H3V17.5H19V16.5ZM20.5 15C20.5 15.8239 19.8239 16.5 19 16.5V17.5C20.3761 17.5 21.5 16.3761 21.5 15H20.5ZM20.5 3V15H21.5V3H20.5ZM11.265 8.424L19.265 3.424L18.735 2.576L10.735 7.576L11.265 8.424ZM2.735 3.424L10.735 8.424L11.265 7.576L3.265 2.576L2.735 3.424ZM19 2.5H3V3.5H19V2.5ZM2.735 5.424L10.735 10.424L11.265 9.576L3.265 4.576L2.735 5.424ZM3.5 15V5H2.5V15H3.5ZM19 14.5H3V15.5H19V14.5ZM18.5 5V15H19.5V5H18.5ZM11.265 10.424L19.265 5.424L18.735 4.576L10.735 9.576L11.265 10.424Z" fill="white"/>
              </svg>
                

              <p>office@mindblister.com</p>
            </p>
            <a class="btn_contact" href="#">Send message</a>
            </div>

          </div>
          
          <div class="map">
            <iframe
             src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35709.
             73439433715!2d37.16709362804254!3d55.98648250091142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
             1!3m3!1m2!1s0x46b515040599b08b%3A0x3b05106b263a30c4!2z0JfQtdC70LXQvdC-0LPRgNCw0LQsINCc0L7RgdC60LLQsA!5e0
             !3m2!1sru!2sru!4v1621339448122!5m2!1sru!2sru"
             style="border: 0"
             
             
             >
            </iframe>
          </div> 
        </div>
      

      
    </section>

    <footer class="foot" id="foot">
      <div class="container">
        <div class="foot_body">
          <p>© Copyright Mindblister 2019</p>
        </div>
      </div>
    </footer>


    <?php
    //проверяем, существуют ли переменные в массиве POST
    if (!isset($_POST['fio']) and !isset($_POST['email'])) {
    ?> 
    <form action="index.php" method="post">
            <input type="text" name="fio" placeholder="Укажите ФИО" required>
            <input type="text" name="email" placeholder="Укажите e-mail" required>
            <input type="submit" value="Отправить">
    </form> 
    <?php
        } else {
                //показываем форму
                $fio = $_POST['fio'];
                $email = $_POST['email'];
                $fio = htmlspecialchars($fio);
                $email = htmlspecialchars($email);
                $fio = urldecode($fio);
                $email = urldecode($email);
                $fio = trim($fio);
                $email = trim($email);
                if (mail("anton_sergeev_456@mail.ru@mail.ru", "Заявка с сайта", "ФИО:" . $fio . ". E-mail: " . $email, "From: example2@mail.ru \r\n")) {
                    echo "Сообщение успешно отправлено";
                } else {
                    echo "При отправке сообщения возникли ошибки";
                }
            }
                ?>



  
  </body>
</html>
