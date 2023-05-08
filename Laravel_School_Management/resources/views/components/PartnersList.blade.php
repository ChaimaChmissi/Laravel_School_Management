<div class="slider">
    <div class="slide-track">
      <div class="slide">
        <img
          src="../images/1-removebg-preview.png"
          height="100"
          width="250"
          alt=""
        />
      </div>
      <div class="slide">
        <img
          src="../images/2-removebg-preview.png"
          height="100"
          width="250"
          alt=""
        />
      </div>
      <div class="slide">
        <img
          src="../images/3-removebg-preview.png"
          height="100"
          width="250"
          alt=""
        />
      </div>
      <div class="slide">
        <img
          src="../images/4-removebg-preview.png"
          height="100"
          width="250"
          alt=""
        />
      </div>
      <div class="slide">
        <img
          src="../images/5-removebg-preview.png"
          height="100"
          width="250"
          alt=""
        />
      </div>
      <div class="slide">
        <img
          src="../images/6-removebg-preview.png"
          height="100"
          width="250"
          alt=""
        />
      </div>
      <div class="slide">
        <img
          src="../images/7-removebg-preview.png"
          height="100"
          width="250"
          alt=""
        />
      </div>
      <div class="slide">
        <img
          src="../images/1-removebg-preview.png"
          height="100"
          width="250"
          alt=""
        />
      </div>
   
    </div>
  </div>

  <style>
    @-webkit-keyframes scroll {
      0% {
        transform: translateX(0);
      }
      100% {
        transform: translateX(calc(-250px * 7));
      }
    }
    
    @keyframes scroll {
      0% {
        transform: translateX(0);
      }
      100% {
        transform: translateX(calc(-250px * 7));
      }
    }
    
    .slider {
      height: 100px;
      margin: auto;
      overflow: hidden;
      position: relative;
      width: 100%; /* Set the width to 100% to make it responsive */
      max-width: 960px; /* Set the maximum width to avoid stretching the slider too much */
      top: 100px;
    }
    
    .slider::before,
    .slider::after {
      content: "";
      height: 100px;
      position: absolute;
      width: 10%; /* Set the width to a percentage to make it responsive */
      max-width: 200px; /* Set the maximum width to avoid stretching the slider too much */
      z-index: 2;
    }
    
    .slider::after {
      right: 0;
      top: 0;
      transform: rotateZ(180deg);
    }
    
    .slider::before {
      left: 0;
      top: 0;
    }
    
    .slider .slide-track {
      -webkit-animation: scroll 40s linear infinite;
      animation: scroll 40s linear infinite;
      display: flex;
      width: calc(250px * 14);
    }
    
    .slider .slide {
      height: 100px;
      width: 250px;
    }
    
    /* Add a media query for smaller screens */
    @media only screen and (max-width: 768px) {
      .slider {
        top: 50px; /* Reduce the top margin */
      }
      
      .slider::before,
      .slider::after {
        width: 15%; /* Increase the width to occupy more space on smaller screens */
        max-width: 150px; /* Reduce the maximum width to avoid stretching too much */
      }
      
      .slider .slide-track {
        width: calc(250px * 7); /* Reduce the width of the slide track to fit fewer slides */
      }
      
      .slider .slide {
        width: 200px; /* Reduce the width of the slides to fit on smaller screens */
      }
    }
    </style>
    