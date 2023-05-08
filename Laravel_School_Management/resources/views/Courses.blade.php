<x-app-layout>
    <x-slot name="header">
        <!-- Your header content here -->
    </x-slot>

    <main slot="main">
        <br>
        meeeeeeeeeeeeeeeeeeeeee
    </main>
    <x-button class="first"> add Class</x-button>
    <div class="courses-container">
        <div class="course">
            <div class="course-preview">
                <h6>Course</h6>
                <h2>JavaScript Fundamentals</h2>
            </div>
            <div class="course-info">
               
                <h6>Chapter 4</h6>
                <h2>An introduction to the basics of programming in JavaScript for web development</h2>
            </div>
        </div>
    </div>

    
</x-app-layout>
  <style>
   .first {/* COLOR FROM SELECTED ITEMS */
color: white;
background-color: #00E38C;

}

.first:hover{
color: #00E38C;
background-color:white;
border: #00E38C
}


@import url("https://fonts.googleapis.com/css?family=Muli&display=swap");





.course {
	background-color: #fff;
	border-radius: 10px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	display: flex;
	max-width: 100%;
	margin: 20px;
	overflow: hidden;
	width: 700px;
}

.course h6 {
	opacity: 0.6;
	margin: 0;
	letter-spacing: 1px;
	text-transform: uppercase;
}

.course h2 {
	letter-spacing: 1px;
	margin: 10px 0;
}

.course-preview {
	background-color: #7963e5;
	color: #fff;
	padding: 30px;
	max-width: 250px;
}

.course-preview a {
	color: #fff;
	display: inline-block;
	font-size: 12px;
	opacity: 0.6;
	margin-top: 30px;
	text-decoration: none;
}

.course-info {
	padding: 30px;
	position: relative;
	width: 100%;
}






.btn {
	background-color: #2a265f;
	border: 0;
	border-radius: 50px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	color: #fff;
	font-size: 16px;
	padding: 12px 25px;
	position: absolute;
	bottom: 30px;
	right: 30px;
	letter-spacing: 1px;
}

/* SOCIAL PANEL CSS */
.social-panel-container {
	position: fixed;
	right: 0;
	bottom: 80px;
	transform: translateX(100%);
	transition: transform 0.4s ease-in-out;
}

.social-panel-container.visible {
	transform: translateX(-10px);
}

.social-panel {
	background-color: #fff;
	border-radius: 16px;
	box-shadow: 0 16px 31px -17px rgba(0, 31, 97, 0.6);
	border: 5px solid #001f61;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	font-family: "Muli";
	position: relative;
	height: 169px;
	width: 370px;
	max-width: calc(100% - 10px);
}

.social-panel button.close-btn {
	border: 0;
	color: #97a5ce;
	cursor: pointer;
	font-size: 20px;
	position: absolute;
	top: 5px;
	right: 5px;
}

.social-panel button.close-btn:focus {
	outline: none;
}

.social-panel p {
	background-color: #001f61;
	border-radius: 0 0 10px 10px;
	color: #fff;
	font-size: 14px;
	line-height: 18px;
	padding: 2px 17px 6px;
	position: absolute;
	top: 0;
	left: 50%;
	margin: 0;
	transform: translateX(-50%);
	text-align: center;
	width: 235px;
}

.social-panel p i {
	margin: 0 5px;
}

.social-panel p a {
	color: #ff7500;
	text-decoration: none;
}

.social-panel h4 {
	margin: 20px 0;
	color: #97a5ce;
	font-family: "Muli";
	font-size: 14px;
	line-height: 18px;
	text-transform: uppercase;
}

.social-panel ul {
	display: flex;
	list-style-type: none;
	padding: 0;
	margin: 0;
}

.social-panel ul li {
	margin: 0 10px;
}

.social-panel ul li a {
	border: 1px solid #dce1f2;
	border-radius: 50%;
	color: #001f61;
	font-size: 20px;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 50px;
	width: 50px;
	text-decoration: none;
}

.social-panel ul li a:hover {
	border-color: #ff6a00;
	box-shadow: 0 9px 12px -9px #ff6a00;
}



@media screen and (max-width: 480px) {
	.social-panel-container.visible {
		transform: translateX(0px);
	}

	.floating-btn {
		right: 10px;
	}
}


@media screen and (max-width: 768px) {
  .course {
    flex-direction: column;
    width: 100%;
    max-width: none;
  }

  .course-preview {
    max-width: 100%;
  }

  .course-info {
    padding: 20px;
  }

  .social-panel-container {
    bottom: 20px;
  }

  .social-panel {
    height: auto;
    width: 100%;
  }

  .social-panel p {
    width: 100%;
  }

  .social-panel ul li {
    margin: 0 5px;
  }

  .social-panel ul li a {
    height: 40px;
    width: 40px;
    font-size: 16px;
  }
}

  </style>