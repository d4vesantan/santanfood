<?php

session_start();

$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? ''
];
$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error) {
    return !empty($error) ? "<p class='error-message'>$error</p>" : '';
}

function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active' : '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santans kitchen </title>
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./assets/logo.jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="nav">
        <a href=""><h1>Foodieland</h1></a>

        <ul class="nav-list">
            <li><a href="#">Home</a></li>
            <li><a href="#">Recipes</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About Us</a></li>
        </ul>

       <div class="social">
        <a data-social="Facebook" style="--accent-color:blue"href="https://web.facebook.com/?_rdc=1&_rdr#"><i class="fa-brands fa-facebook"  ></i></a>
        <a data-social="Instagram"style="--accent-color:red"href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
        <a data-social="Twitter"style="--accent-color:black"href="https://x.com/home"><i class="fa-brands fa-x-twitter"></i></a>
        
       </div>

       


       <div class="Login">
        <button class="login-btn">LOG IN</button>                
        <button class="signup-btn">SIGN UP</button>                
    </div>

<div class="blur-bg-overlay"></div>

<div class="form-popup">
    <span class="close-btn">close</span>

    <div class="form-box login  <?= isActiveForm('login', $activeForm); ?>" id="login-form">
        <div class="form-details">
            <h2>Welcome Back</h2>
            <p>Please log in with your personal information to stay on with us</p>
        </div>
        <div class="form-content">
            <h2>LOGIN</h2>
            <form action="login_register.php" method="post">
                <?= showError($errors['login']); ?> 
                <div class="input-field" >
                    <input type="email" name="email" required>
                    <label> Email</label> 
                </div>
                <div class="input-field">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <a href="" class="forgot-password">Forgot password?</a>
                <button type="submit" name="login">Log in</button>
            </form>
            <div class="bottom-link">
                Don't have an account?
                <a href="#" id="signup-link" onclick="showForm('register-form')"> Sign Up </a>
            </div>
        </div>
    </div>


    <div class="form-box signup <?= isActiveForm('register', $activeForm); ?>" id="register-form">
        <div class="form-details">
            <h2>Sign up</h2>
            <p>Please sign up with your personal information to stay connected with us.</p>
        </div>

        <div class="form-content">
            <h2>SIGNUP</h2>

            <form action="login_register.php" method="post">

                <?= showError($errors['register']); ?>
                <div class="input-field" >
                    <input type="text" name="name" required>
                    <label> Enter your full name</label> 
                </div>
                <div class="input-field" >
                    <input type="email" name="email" required>
                    <label> Enter your email</label> 
                </div>
                <div class="input-field">
                    <input type="password" name="password" required>
                    <label> Create Password</label>
                </div>
                <div class="policy-text">
                    <input type="checkbox" id="policy">
                    <label for="policy">
                        I agree to the 
                        <a href="#"> Terms & Conidtions</a>
                    </label>
                </div>
                <select name="role">
                    <option value="">--Select skill--</option>
                    <option value="chef">Chef</option>
                    <option value="admin">Admin</option>
                    <option value="baker">Baker</option>
                </select>
                <button type="submit" name="register"> sign Up </button>
            </form>
            <div class="bottom-link">
                Already have an account?
                <a href="#" id="login-link" onclick="showForm('login-form')"> login </a>
            </div>
        </div>
    </div>
</div>  

    <script src="./main.js"></script>

_!--<end of nav--->_


    <div class="hero">
        <div class="text-1">
            <div class="hot">
                <img src="./assets/scrool.jpg" alt="">
                <h4>Hot Recipes</h4>
            </div>

            <div class="cdl">
                <h1>Spicy delicious <br>chicken wings</h1>
                <p>Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim </p>

                <div class="time">
                    <div class="clock">
                        <i class="fa-solid fa-stopwatch"></i>
                        <h4>30 Minutes</h4>
                    </div>

                    <div class="knife">
                        <i class="fa-solid fa-utensils"></i>
                        <h4>kitchen</h4>
                    </div>
                </div>
               
                <div class="dg">
                    <div class="dg1">
                        <img src="./assets/Ellipse 2.jpg" alt="">

                    <h3>Dggtgtwight <br> <span class="date">October 30, 2017</span></h3>
                    </div>

                    <div class="dg2">
                        <h3>View Receipt</h3>
                        <img src="./assets/PlayCircle.jpg" alt="">
                    </div>
                    
                </div>
            </div>

            
        </div>

        <div class="text2">
            <img src="./assets/Badge.jpg" alt="">
        </div>

        <div class="text3">
            <img src="./assets/Mask Group.jpg" alt="">
        </div>
    </div>

    <div class="categories">
        <div class="categories-1">
            <h1>Categories</h1>
            
            <div class="view">
                <h4>View All Categories</h4>
            </div>
        </div>
    </div>

    <div class="slider">
        <div class="cart-item">
            <div class="cart-item-1">
                <img src="./assets/Group 836.png" alt=""> 
            </div>
    
            <div class="cart-item-2">
                <img src="./assets/Group 837.png" alt="">
            </div>
    
            <div class="cart-item-3">
                <img src="./assets/Group 838.png" alt="">
            </div>
    
            <div class="cart-item-4">
                <img src="./assets/Group 839.png" alt=""><br>
            </div>
    
            <div class="cart-item-5">
                <img src="./assets/Group 840.png" alt=""><br>
            </div>
    
            <div class="cart-item-6">
                <img src="./assets/Group 841.png" alt=""><br>
            </div>
        </div>
    </div>
    
    

    <div class="simple">
        <h1>Simple and tasty recipes</h1>
        <p>Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut <br>labore et dolore magna aliqut enim ad minim </p>
    </div>

    <div class="frame">
        <div class="frame11">
            <div class="frame-1">
                <div class="bb">
                    <img src="./assets/Chesseburger.png" class="background">
    
                     <div class="content">
                        <input type="checkbox" id="heart" class="heart-check">
                        <label for="heart" class="heart-label"></label>
                     </div>
                </div>
    
                <div class="big">
                    <h4>Big and Juicy Wagyu Beef <br> Chesseburger</h4>
                    <div class="dwn">
                        <div class="clock">
                            <i class="fa-solid fa-stopwatch"></i>
                            <h6>30 Minutes</h6>
                        </div>
        
                        <div class="knife">
                            <i class="fa-solid fa-utensils"></i>
                            <h6>kitchen</h6>
                    </div>
                   
                    </div>
                </div>
                
            </div>
    
            <div class="frame-1">
                <div class="bb">
                    <img src="./assets/Salmon.png" class="background">
    
                     <div class="content">
                        <input type="checkbox" id="hearts" class="heart-check1">
                        <label for="hearts" class="heart-labels"></label>
                     </div>
                </div>
    
                <div class="big">
                    <h4>Fresh Lime Roasted Salmon with Ginger Sauce</h4>
                    <div class="dwn">
                        <div class="clock">
                            <i class="fa-solid fa-stopwatch"></i>
                            <h6>30 Minutes</h6>
                        </div>
        
                        <div class="knife">
                            <i class="fa-solid fa-utensils"></i>
                            <h6>kitchen</h6>
                    </div>
                   
                    </div>
                </div>
                
            </div>
            
            <div class="frame-1">
                <div class="bb">
                    <img src="./assets/pan.jpg" class="background">
    
                     <div class="content">
                        <input type="checkbox" id="heart2" class="heart-check2">
                        <label for="heart2" class="heart-labels2"></label>
                     </div>
                </div>
    
                <div class="big">
                    <h4>Strawberry Oatmeal Pancake with Honey Syrup</h4>
                    <div class="dwn">
                        <div class="clock">
                            <i class="fa-solid fa-stopwatch"></i>
                            <h6>30 Minutes</h6>
                        </div>
        
                        <div class="knife">
                            <i class="fa-solid fa-utensils"></i>
                            <h6>kitchen</h6>
                    </div>
                   
                    </div>
                </div>
                
            </div>


        </div>
        
        <div class="frame22">
            <div class="frame-1">
                <div class="bb">
                    <img src="./assets/salad.jpg" class="background">
    
                     <div class="content">
                        <input type="checkbox" id="heart3" class="heart-check3">
                        <label for="heart3" class="heart-labels3"></label>
                     </div>
                </div>
    
                <div class="big">
                    <h4>Fresh and Healthy Mixed Mayonnaise salad</h4>
                    <div class="dwn">
                        <div class="clock">
                            <i class="fa-solid fa-stopwatch"></i>
                            <h6>30 Minutes</h6>
                        </div>
        
                        <div class="knife">
                            <i class="fa-solid fa-utensils"></i>
                            <h6>kitchen</h6>
                    </div>
                   
                    </div>
                </div>
                
            </div>
            
    
            <div class="frame-1">
                <div class="bb">
                    <img src="./assets/Chicken-meatball.png" class="background">
    
                     <div class="content">
                        <input type="checkbox" id="heart4" class="heart-check4">
                        <label for="heart4" class="heart-labels4"></label>
                     </div>
                </div>
    
                <div class="big">
                    <h4>Chicken Meatballs with Cream cheese</h4>
                    <div class="dwn">
                        <div class="clock">
                            <i class="fa-solid fa-stopwatch"></i>
                            <h6>30 Minutes</h6>
                        </div>
        
                        <div class="knife">
                            <i class="fa-solid fa-utensils"></i>
                            <h6>kitchen</h6>
                    </div>
                   
                    </div>
                </div>
                
            </div>
    
            <div class="frame-1">
                <div class="bb">
                    <img src="./assets/jellof.jpg" class="background">
    
                     <div class="content">
                        <input type="checkbox" id="heart5" class="heart-check5">
                        <label for="heart5" class="heart-labels5"></label>
                     </div>
                </div>
    
                <div class="big">
                    <h4>Jellof </h4>
                    <div class="dwn">
                        <div class="clock">
                            <i class="fa-solid fa-stopwatch"></i>
                            <h6>30 Minutes</h6>
                        </div>
        
                        <div class="knife">
                            <i class="fa-solid fa-utensils"></i>
                            <h6>kitchen</h6>
                    </div>
                   
                    </div>
                </div>
                
            </div>


        </div>
        
        <div class="frame33">
            <div class="frame-1">
                <div class="bb">
                    <img src="./assets/Fruity-pancakes.png" class="background">
    
                     <div class="content">
                        <input type="checkbox" id="heart6" class="heart-check6">
                        <label for="heart6" class="heart-labels6"></label>
                     </div>
                </div>
    
                <div class="big">
                    <h4>Fruity pancakes with Orange & Blueberry</h4>
                    <div class="dwn">
                        <div class="clock">
                            <i class="fa-solid fa-stopwatch"></i>
                            <h6>30 Minutes</h6>
                        </div>
        
                        <div class="knife">
                            <i class="fa-solid fa-utensils"></i>
                            <h6>kitchen</h6>
                    </div>
                   
                    </div>
                </div>
                
            </div>
    
            <div class="frame-1">
                <div class="bb">
                    <img src="./assets/Chicken-Rice.png" class="background">
    
                     <div class="content">
                        <input type="checkbox" id="heart7" class="heart-check7">
                        <label for="heart7" class="heart-labels7"></label>
                     </div>
                </div>
    
                <div class="big">
                    <h4>The Best Easy One Pot Chicken and Rice</h4>
                    <div class="dwn">
                        <div class="clock">
                            <i class="fa-solid fa-stopwatch"></i>
                            <h6>30 Minutes</h6>
                        </div>
        
                        <div class="knife">
                            <i class="fa-solid fa-utensils"></i>
                            <h6>kitchen</h6>
                    </div>
                   
                    </div>
                </div>
                
            </div>
    
            <div class="frame-1">
                <div class="bb">
                    <img src="./assets/Chicken-Pasta.png" class="background">
    
                     <div class="content">
                        <input type="checkbox" id="heart8" class="heart-check8">
                        <label for="heart8" class="heart-labels8"></label>
                     </div>
                </div>
    
                <div class="big">
                    <h4>The Creamiest Creamy Chicken and Beacon Pasta</h4>
                    <div class="dwn">
                        <div class="clock">
                            <i class="fa-solid fa-stopwatch"></i>
                            <h6>30 Minutes</h6>
                        </div>
        
                        <div class="knife">
                            <i class="fa-solid fa-utensils"></i>
                            <h6>kitchen</h6>
                    </div>
                   
                    </div>
                </div>
                
            </div>
        </div>

    </div>
    
    <div class="ndpart">
        <div class="nd-part-1">
            <div class="text-jj">
                <h1>Everyone can be a
                    chef in their own kitchen</h1>
    
                <p>Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim </p>
            </div>
           

            <div class="part-pic">
                <img src="./assets/Group 880.png" alt="">
            </div>
        </div>
    </div>

    <div class="page-ig">
        <h1>Check out @foodieland on Instagram</h1>     
        <p>Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim </p>
    </div>

    <div class="page-ig-pic">
        <div class="pic-1">
            <img src="./assets/Post.png" alt="">
        </div>

        <div class="pic-1">
            <img src="./assets/Post (1).png" alt="">
        </div>

        <div class="pic-1">
            <img src="./assets/Post (2).png" alt="">
        </div>

        <div class="pic-1">
            <img src="./assets/Post (3).png" alt="">
        </div>
    </div>
    
    <div class="ig-link">
        <a href="https://www.instagram.com/">Visit On Instagram</a>

        <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
    </div>


    <div class="recp">
        <h1>Try This Delicious Recipe
            To Make Your Day</h1>
        <p>Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqut enim ad minim </p>
    </div>

    <div class="down-slider">
        <div class="frame11">
            <div class="frame-1">
                <div class="bb">
                    <img src="./assets/BURGER.jpg" class="background">
    
                     <div class="content">
                        <input type="checkbox" id="heart9" class="heart-check9">
                        <label for="heart9" class="heart-label9"></label>
                     </div>
                </div>
    
                <div class="big">
                    <h4>Big and Juicy Wagyu Beef <br> Chesseburger</h4>
                    <div class="dwn">
                        <div class="clock">
                            <i class="fa-solid fa-stopwatch"></i>
                            <h6>30 Minutes</h6>
                        </div>
        
                        <div class="knife">
                            <i class="fa-solid fa-utensils"></i>
                            <h6>kitchen</h6>
                    </div>
                   
                    </div>
                </div>
                
            </div>
    
            <div class="frame-1">
                <div class="bb">
                    <img src="./assets/WALNUT.jpg" class="background">
    
                     <div class="content">
                        <input type="checkbox" id="heart10" class="heart-check10">
                        <label for="heart10" class="heart-label10"></label>
                     </div>
                </div>
    
                <div class="big">
                    <h4>Cauliflower Walnut Vegetarian Taco Meat</h4>
                    <div class="dwn">
                        <div class="clock">
                            <i class="fa-solid fa-stopwatch"></i>
                            <h6>30 Minutes</h6>
                        </div>
        
                        <div class="knife">
                            <i class="fa-solid fa-utensils"></i>
                            <h6>kitchen</h6>
                    </div>
                   
                    </div>
                </div>
                
            </div>
            
            <div class="frame-1">
                <div class="bb">
                    <img src="./assets/ALMOD.jpg" class="background">
    
                     <div class="content">
                        <input type="checkbox" id="heart11" class="heart-check11">
                        <label for="heart11" class="heart-label11"></label>
                     </div>
                </div>
    
                <div class="big">
                    <h4>Rainbow Chicken Salad with Almond Honey Mustard Dressing</h4>
                    <div class="dwn">
                        <div class="clock">
                            <i class="fa-solid fa-stopwatch"></i>
                            <h6>30 Minutes</h6>
                        </div>
        
                        <div class="knife">
                            <i class="fa-solid fa-utensils"></i>
                            <h6>kitchen</h6>
                    </div>
                   
                    </div>
                </div>
                
            </div>
        </div>

    </div>
  
    <div class="message">
        <h1>Deliciousness to your inbox</h1>

        <p>Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim </p>

        <div class="m">
            <input type="text" placeholder="Enter your email address">
            <button>Subscribe</button>
        </div>
    </div>

    <!-- <div class="foot"> -->
        <div class="nav">
            <a href=""><h1>Foodieland</h1></a>
    
            <ul class="nav-list">
                <li><a href="#">Home</a></li>
                <li><a href="#">Recipes</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
    
           <div class="social">
            <a data-social="Facebook" style="--accent-color:blue"href="https://web.facebook.com/?_rdc=1&_rdr#"><i class="fa-brands fa-facebook"  ></i></a>
            <a data-social="Instagram"style="--accent-color:red"href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
            <a data-social="Twitter"style="--accent-color:black"href="https://x.com/home"><i class="fa-brands fa-x-twitter"></i></a>
            
            </div>

        </div>
    </div>

    
</body>
</html>

