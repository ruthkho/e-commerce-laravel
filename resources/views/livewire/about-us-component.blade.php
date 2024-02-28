<div>
    <div class="page-heading about-heading header-text">
        <div class="container">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/" class="link">home</a></li>
                    <li class="item-link"><span>About us</span></li>
                </ul>
            </div>
        </div>

        <style>
            .services {
                background-image: url(../images/behindtes.jpeg);
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
                padding: 100px 0px;
            }

            .services .service-item {
                text-align: center;
            }

            .services .service-item .icon {
                background-color: #f7f7f7;
                padding: 40px;
            }

            .services .service-item .icon i {
                width: 100px;
                height: 100px;
                display: inline-block;
                text-align: center;
                line-height: 100px;
                background-color: #f33f3f;
                color: #fff;
                font-size: 32px;
            }

            .services .service-item .down-content {
                background-color: #fff;
                padding: 40px 30px;
            }

            .services .service-item .down-content h4 {
                font-size: 17px;
                color: #1a6692;
                margin-bottom: 20px;
            }

            .services .service-item .down-content p {
                margin-bottom: 25px;
            }

            .product-item .down-content {
                padding: 30px;
                position: relative;
            }

            .product-item .down-content h4 {
                font-size: 17px;
                color: #1a6692;
                margin-bottom: 20px;
            }

            .product-item .down-content h6 {
                position: absolute;
                top: 30px;
                right: 30px;
                font-size: 18px;
                color: #121212;
            }

            .product-item .down-content p {
                margin-bottom: 20px;
            }

            .product-item .down-content ul li {
                display: inline-block;
            }

            .product-item .down-content ul li i {
                color: #f33f3f;
                font-size: 14px;
            }

            .product-item .down-content span {
                position: absolute;
                right: 30px;
                bottom: 30px;
                font-size: 13px;
                color: #f33f3f;
                font-weight: 500;
            }

            .team-member .down-content {
                padding: 30px;
                text-align: center;
            }

            .team-member .down-content h4 {
                font-size: 17px;
                color: #1a6692;
                margin-bottom: 8px;
            }

            .team-member .down-content span {
                display: block;
                font-size: 13px;
                color: #f33f3f;
                font-weight: 500;
                margin-bottom: 20px;
            }

            .services .service-item .down-content {
                background-color: #fff;
                padding: 40px 30px;
            }

            .services .service-item .down-content h4 {
                font-size: 17px;
                color: #1a6692;
                margin-bottom: 20px;
            }

            .services .service-item .down-content p {
                margin-bottom: 25px;
            }

            .team-members {
                margin-top: 100px;
            }

            .team-member {
                border: 1px solid #eee;
                margin-bottom: 30px;
            }

            .team-member img {
                width: 100%;
                overflow: hidden;
            }

            .team-member .down-content {
                padding: 30px;
                text-align: center;
            }

            .team-member .thumb-container {
                position: relative;
            }

            .team-member .thumb-container .hover-effect {
                position: absolute;
                background-color: rgba(243,63,63,0.9);
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                opacity: 0;
                visibility: hidden;
                transition: all .5s;
            }

            .team-member .thumb-container .hover-effect .hover-content {
                position: absolute;
                display: inline-block;
                width: 100%;
                text-align: center;
                top: 50%;
                transform: translateY(-50%);
            }

            .team-member .thumb-container .hover-effect .hover-content ul.social-icons li a:hover {
                background-color: #fff;
                color: #f33f3f;
            }

            .team-member:hover .hover-effect {
                visibility: visible;
                opacity: 1;
            }

            .team-member .down-content h4 {
                font-size: 17px;
                color: #1a6692;
                margin-bottom: 8px;
            }

            .team-member .down-content span {
                display: block;
                font-size: 13px;
                color: #f33f3f;
                font-weight: 500;
                margin-bottom: 20px;
            }


            .about-features p {
                border-bottom: 1px solid #eee;
                padding-bottom: 20px;
            }

            .about-features .container .row {
                padding-bottom: 0px!important;
                border-bottom: none!important;
            }



            .best-features .container .row {
                border-bottom: 1px solid #eee;
                padding-bottom: 60px;
            }

            .best-features img {
                width: 100%;
                overflow: hidden;
            }

            .best-features h4 {
                font-size: 17px;
                color: #1a6692;
                margin-bottom: 20px;
            }

            .best-features ul.featured-list li {
                display: block;
                margin-bottom: 10px;
            }

            .best-features p {
                margin-bottom: 25px;
            }

            .best-features ul.featured-list li a {
                font-size: 14px;
                color: #4a4a4a;
                font-weight: 300;
                transition: all .3s;
                position: relative;
                padding-left: 13px;
            }

            .best-features ul.featured-list li a:before {
                content: '';
                width: 5px;
                height: 5px;
                display: inline-block;
                background-color: #4a4a4a;
                position: absolute;
                left: 0;
                transition: all .3s;
                top: 8px;
            }

            .best-features ul.featured-list li a:hover {
                color: #f33f3f;
            }

            .best-features ul.featured-list li a:hover::before {
                background-color: #f33f3f;
            }

            .best-features .filled-button {
                margin-top: 20px;
            }

            .section-heading {
                text-align: left;
                margin-bottom: 60px;
                border-bottom: 1px solid #eee;
            }

            .section-heading h2 {
                font-size: 28px;
                font-weight: 400;
                color: #1e1e1e;
                margin-bottom: 15px;
            }
            .latest-products .section-heading a {
                float: right;
                margin-top: -35px;
                text-transform: uppercase;
                font-size: 13px;
                font-weight: 700;
                color: #f33f3f;
            }
            .latest-products .section-heading a {
                float: none;
                margin-top: 0px;
                display: block;
                margin-bottom: 20px;
            }

            .page-heading .text-content h2 {
                color: #fff;
                font-size: 62px;
                text-transform: uppercase;
                letter-spacing: 5px;
            }
            .background-header .navbar-brand h2 {
                color: #121212!important;
            }
            .navbar .navbar-brand h2 {
                color: #fff;
                text-transform: uppercase;
                font-size: 24px;
                font-weight: 700;
                -webkit-transition: all .3s ease 0s;
                -moz-transition: all .3s ease 0s;
                -o-transition: all .3s ease 0s;
                transition: all .3s ease 0s;
            }
            .navbar .navbar-brand h2 em {
                font-style: normal;
                color: #f33f3f;
            }
            .banner .text-content h2 {
                color: #fff;
                font-size: 62px;
                text-transform: uppercase;
                letter-spacing: 5px;
            }
        </style>

      </div>


      <div class="best-features about-features">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Our Background</h2>
              </div>
            </div>
            <div class="col-md-6">
              <div class="right-image">
                <img src="assets/images/sbworkshop1.jpg" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="left-content">
                <h4>Who we are &amp; What we do?</h4>
                <p>Sunny Bouquet was established in the year 2019. We are now located at Jalan Song Brighton Square.</p>
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/sunnnybouquet"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/sunnybouquet/"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://wa.link/u9nzoj"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="team-members">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Our Team Members</h2>
              </div>
            </div>
            <div class="col-md-6">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="assets/images/elsa.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>SanSan</h4>
                  <span>CO-Founder</span>
                  <p></p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="assets/images/anna.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Jesmyn</h4>
                  <span>CO-Founder</span>
                  <p></p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>


      //



</div>
