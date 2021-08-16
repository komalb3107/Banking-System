<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>DELTA BANK</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="js/index.js">
  <link rel="shortcut icon" href="img/bank.png">
  <link
    href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Playfair+Display:wght@900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Merienda:wght@700&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Fondamento:ital@1&family=Merienda:wght@700&display=swap"
    rel="stylesheet">
</head>


<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbarr">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="img/bank.png" alt="" width="40" height="40" class="d-inline-block align-text-top">
        <h6 class="title">DELTA BANK</h6>
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#crd">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#cur">Converter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
        <form class="d-flex" >
          <button class="btn btn-outline-success homebtn" type="submit"><a href="transfer_history.php"> History </a></button>
          <button class="btn btn-outline-success homebtn" type="submit"><a href="customer.php"> View Customers </a></button>
        </form>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/img42.PNG" class="d-block w-100" alt="..." height="570px">
        <div class="carousel-caption d-none d-md-block">
          <h5>Smart Investments</h5>
          <p>Get direct consulting with our experts and play the card of smart investment.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/img44.PNG" class="d-block w-100" alt="..." height="570px">
        <div class="carousel-caption d-none d-md-block">
          <h5>Saftey First</h5>
          <p>Let it be you Pin or your health, both need a complete security. Here we provide that to you.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/img27.jpg" class="d-block w-100" alt="..." height="570px">
        <div class="carousel-caption d-none d-md-block">
          <h5>Getting Started?</h5>
          <p>New here? No worries. Just create an account with easy steps and get a cool credit card.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <div class="bg">
    <h1 class="heading">What we offer you</h1>
    <div class="boxesContainer">
      <div class="cardBox">
        <div class="card">
          <div class="front">
            <h3>Home Loan</h3>
            <p>₹100000-₹4000000</p>
            <img src="img/img33.png" alt="" class="homeimg">
          </div>
          <div class="back">
            <ul>
              <li>Borrow - ₹95000 over 3 months</li>
              <li> Interest rate - 292% pa fixed</li>
              <li>Total amount payable - ₹52500.12</li>
              <li>Representative - 1,286% APR</li>
            </ul>
            <a href="#">Apply Now</a>
          </div>
        </div>
      </div>
      <div class="cardBox">
        <div class="card">
          <div class="front">
            <h3>Car Loan</h3>
            <p>₹30000-₹400000</p>
            <img src="img/img28.png" alt="" class="homeimg">
          </div>
          <div class="back">
            <ul>
              <li>Borrow - ₹9500 over 3 months</li>
              <li> Interest rate - 292% pa fixed</li>
              <li>Total amount payable - ₹52500.12</li>
              <li>Representative - 1,286% APR</li>
            </ul>
            <a href="#" class="btn">Apply Now</a>
          </div>
        </div>
      </div>
      <div class="cardBox">
        <div class="card">
          <div class="front">
            <h3>Student Loan</h3>
            <p>₹30000-₹400000</p>
            <img src="img/img31.png" alt="" class="homeimg">
          </div>
          <div class="back">
            <ul>
              <li>Borrow - ₹9500 over 3 months</li>
              <li> Interest rate - 292% pa fixed</li>
              <li>Total amount payable - ₹52500.12</li>
              <li>Representative - 1,286% APR</li>
            </ul>
            <a href="#">Apply Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="bg1">
    <div class="boxesContainer1">
      <div class="cardBox">
        <div class="card">
          <div class="front">
            <h3>Mobile Banking</h3>
            <img src="img/img51.png" alt="" class="homeimg1">
          </div>
          <div class="back">
            <p class="apps">Mobile Banking
              Bank on the go with our Mobile Banking services. Download app or use SMSNot sure what your user ID or
              password is? We can help you out. Just apply now. </p>
            <a href="#">Apply Now</a>
          </div>
        </div>
      </div>
      <div class="cardBox">
        <div class="card">
          <div class="front">
            <h3>Internet Banking</h3>
            <img src="img/img50.png" alt="" class="homeimg1">
          </div>
          <div class="back">
            <p class="apps1"> Internet Banking
              Explore the power of simpler and smarter banking. Bank online with over 300+ services.Not sure what your
              user ID or password is? We can help you out.</p>
            <a href="#" class="btn">Apply Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="crd" id="crd">
    <h1 class="heading">Our Services</h1>
    <section class="cardd d-flex justify-content-evenly ">
      <div class="cardclass" style="width: 18rem;">
        <img src="img/img56.png" class="card-img-top" alt="..." height="150px" width="10px">
        <div class="card-body">
          <h5>Insurance Consulting</h5>
          <p>An established insurance broking and risk management company works closely with clients and spends
            considerable time in understanding the business and the risks associated with it.</p>
        </div>
      </div>
      <div class="cardclass" style="width: 18rem;">
        <img src="img/img55.png" class="card-img-top" alt="..." height="150px" width="10px">
        <div class="card-body">
          <h5>Financial Investment</h5>
          <p> We will guide you through the potential outcomes of a variety of traditional options, to help you align
            your
            risk tolerance with your desired investment performance. Be safe with us.</p>
        </div>
      </div>
      <div class="cardclass" style="width: 18rem;">
        <img src="img/img54.png" class="card-img-top" alt="..." height="150px" width="10px">
        <div class="card-body">
          <h5>Financial Management</h5>
          <p>Our team helps a client to define the role of finance in driving the strategic
            business imperatives. We'll help you to clearly articulate its Finance vision and strategy that is fit for
            purpose.</p>
        </div>
      </div>
    </section>

    <section class="cardd d-flex justify-content-evenly ">
      <div class="cardclass" style="width: 18rem;">
        <img src="img/img53.png" class="card-img-top" alt="..." height="150px" width="10px">
        <div class="card-body">
          <h5>Business Consulting</h5>
          <p>Our Business Consulting Services are structured to address a company’s end-to-end business needs. We
            provide comprehensive services to support your business by guiding you professionally. </p>
        </div>
      </div>
      <div class="cardclass" style="width: 18rem;">
        <img src="img/img52.png" class="card-img-top" alt="..." height="150px" width="10px">
        <div class="card-body">
          <h5>Income Monitoring</h5>
          <p>The primary purpose when monitoring expenditure against income is to ensure that expenditure does not
            exceed the available income.The departmental administrators spot disturbance.</p>
        </div>
      </div>
      <div class="cardclass" style="width: 18rem;">
        <img src="img/img14.png" class="card-img-top" alt="..." height="150px" width="10px">
        <div class="card-body">
          <h5>Credit Card</h5>
          <p>To ensure you are always on top of Credit Card bills, there are multiple options to seamlessly and swiftly
            clear credit dues via online or offline channels at zero cost efforlessly and easily. </p>
        </div>
      </div>
    </section>
  </div>

  <hr class="one">
  <hr>


  <div class="currency-row-outer" id="cur">
    <div class="currency-converter">
      <h2>Currency Converter</h2>
      <div class="field grid-50-50">
        <div class="colmun col-left">
          <input type="number" class="form-input" id="number" placeholder="00000">
        </div>
        <div class="colmun col-right">
          <div class="select">
            <select name="currency" class="currency" onchange="updatevalue()"></select>
          </div>
        </div>
      </div>
      <div class="field grid-50-50">
        <div class="colmun col-left">
          <input type="text" class="form-input" id="output" placeholder="00000" disabled>
        </div>
        <div class="colmun col-right">
          <div class="select">
            <select name="currency" class="currency" onchange="updatevalue()"></select>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- js script for converter -->

  <script>
    const select = document.querySelectorAll('.currency');
    const number = document.getElementById("number");
    const output = document.getElementById("output");


    fetch('https://api.frankfurter.app/currencies').then((data) => data.json())
      .then((data) => {
        display(data);
      });


    function display(data) {
      const entries = Object.entries(data);
      for (var i = 0; i < entries.length; i++) {
        select[0].innerHTML += `<option value="${entries[i][0]}">${entries[i][0]} : ${entries[i][1]}</option>`;
        select[1].innerHTML += `<option value="${entries[i][0]}">${entries[i][0]} : ${entries[i][1]}</option>`;
      }
    }


    function updatevalue() {
      let currency1 = select[0].value;
      let currency2 = select[1].value;

      let value = number.value;

      if (currency1 != currency2) {
        convert(currency1, currency2, value);
      } else {
        alert("Choose Diffrent Currency");
      }
    }


    function convert(currency1, currency2, value) {
      const host = "api.frankfurter.app";

      fetch(`https://${host}/latest?amount=${value}&from=${currency1}&to=${currency2}`)
        .then((val) => val.json())
        .then((val) => {
          console.log(Object.values(val.rates)[0]);
          output.value = Object.values(val.rates)[0];
        });

    }
  </script>

    <!-- js script ends -->



  <section id="contact">
    <div class="section-content">
      <h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s"
          data-wow-duration="2s"> Touch with us</span></h1>
      <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h3>
    </div>
    <div class="contact-section">
      <div class="container">
        <form>
          <div class="col-md-6 form-line">
            <div class="form-group">
              <label for="exampleInputUsername">Your name</label>
              <input type="text" class="form-control" id="" placeholder=" Enter Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail">Email Address</label>
              <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id">
            </div>
            <div class="form-group">
              <label for="telephone">Mobile No.</label>
              <input type="tel" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no.">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="description" id="message"></label>
              <textarea class="form-control" id="description" placeholder="Enter Your Message"></textarea>
            </div>
            <div>
              <button type="button" class="btn btn-default submit" id="msg"></i> Send Message</button>
            </div>
          </div>
        </form>
      </div>
  </section>


  <div id="container">
    <div id="part1">
      <div id="companyinfo"> <a id="sitelink" href="#">Delta Bank</a>
        <p id="title">Bank which makes you and your money feel safe.</p>
        <p id="detail">We provide our customers with every help they need. Trust Us with No Rush... </p>
      </div>
      <div id="explore">
        <p id="txt1">Explore</p> <a class="link" href="#">Home</a> <a class="link" href="#">Services</a> <a class="link"
          href="#">Contact</a> <a class="link" href="#">Converter</a>
      </div>
      <div id="visit">
        <p id="txt2">Visit</p>
        <p class="text">Lincoln House </p>
        <p class="text">78 Bhulabhai Desai Road </p>
        <p class="text">Mumbai 400 026 </p>
        <p class="text">Phone: (22) 2363-3611 </p>
        <p class="text">Fax: (22) 2363-0350 </p>
      </div>
      <div id="legal">
        <p id="txt3">Legal</p> <a class="link1" href="#">Terms and Conditions</a> <a class="link1" href="#">Private
          Policy</a>
      </div>
      <div id="subscribe">
        <p id="txt4">Subscribe to US</p>
        <form> <input id="email" type="email" placeholder="Email"> </form> <a
          class="waves-effect waves-light btn">Subscribe</a>
        <p id="txt5">Connect With US</p> <a href="https://www.facebook.com/shahanchor/" target="_blank"> <img
            src="img/facebook.png" alt="..." class="fb"> </a> <a href="https://www.linkedin.com/in/komal-biswal-71bbb71aa/"
          target="_blank"> <img src="img/linkedin.png" alt="..." class="lk"> </a> <a
          href="https://twitter.com/sakec?lang=en" target="_blank"> <img src="img/twitter.png" alt="..." class="tw"> </a>
      </div>
    </div>
    <div id="part2">
      <p id="txt6"><i class="material-icons tiny"> copyright</i> &copy 2021 komalbiswal - All right reserved</p>
    </div>
  </div>


</body>

</html>