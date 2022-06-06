<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: ".gmdate("D, d M Y H:i:s",time()+(-1*60))." GMT");

if(isset($_GET['userName']))
{
    $UserName = $_GET['userName'];
    
    echo '<script>alert("Welcome to Geeks for Geeks'.$UserName.'")</script>';
}

?>
<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="webpagestying.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Welcome To My Website
    </title>
</head>

<body>
    <nav class="navbar background">
        <ul class="nav-list">
            <div class="logo">
                <img src="https://thumbs.dreamstime.com/b/aeroplane-13698602.jpg">
            </div>
            <li><a href="#Home">Home</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="#Products/Services">Products/Services</a></li>
            <li><a href="#News">News</a></li>
            <li><a href="#Contacts">Contacts</a></li>
            <li><a href="contacts.php">Contacts Page</a></li>
            <li><a href="curldemo.php">Curl Demo</a></li>
        </ul>

        <input type='submit' onclick='location.href="signin.php"'<?php if(isset($_GET['userName'])) {?> disabled="disabled" <?php } ?> id='submitbtn' name='save' value='Login'  >
        <button onclick='location.href="useraddition.php"'>UserCreation</button>
        <button onclick='location.href="usersearch.php"'>UserSearch</button>

    </nav>
    <div class="centerheading">
        <?php
        if(!isset($_GET['userName']))
        {
            $InnerUser = "koushik";
            echo "Hello <p style='color:red;'>".$InnerUser."</p>";
        }
        ?>
        Welcome to Spartan travel Agency
    </div>
    <section class="firstsection">
        <div class="box-main">
            <div class="firstHalf">
                <h1 class="text-big" id="Home">
                    Home
                </h1>
                <p></p>
                <p class="text-small">
                    This Place is for people who dream to travel world.We provide Services All across the globe.We hae some of the best policy options compared to brokes in the market. We provide the worlds best services at worlds best affordable prices.We gurantee some of the lowest prices to some of the best destinations in the world.The major take away is our include of food and snacks in all our packages.
                    <br> Welcome To The Future Of Travelling
                </p>


            </div>
        </div>
    </section>

    <section class="secondsection">
        <div class="box-main">
            <div class="secondHalf">
                <h1 class="text-big" id="About">
                    About
                </h1>
                <p class="text-small">
                    We link with your bank services and keep aside a few amounts in our savings so that you gain interest on that amount which will be helpful to travel further. We are one of the kind providing about 2000+ destinations. We are providing 3 standard packages Gold, Silver, Platinum.
                </p>


            </div>
        </div>
    </section>

    <section class="thirdsection">
        <div class="paras">
            <h1 class="sectionTag text-big" id="Products/Services">Products/Services</h1>

            <p class="grid-container">
            <p>
                <button type="button" onclick='location.href="top_rated_products.php"'>Click here for top Rated Products</button>
            </p>
            <p>
                <button type="button" onclick='location.href="recent.php"'>Click here for Last 5 Visited Packages</button>
                </p>
                <p>
                <button type="button" onclick='location.href="topchecked.php"'>Click here for 5 Most Visited Packages</button>
                </p>


            <div class ="leftbox">
                <h2>6 Month:</h2>
                Save for 6 Months and Fly with-in country
                <p>
                <button type="button"onclick ='location.href="month6.php"'>MoreInfo</button>
                </p>
            </div>

            <div class ="leftbox">
                <h2>1 Year:</h2>
                Save for an year and enjoy International Destinations for 10days.
                <p>
                <button type="button"onclick ='location.href="month1.php"'>MoreInfo</button>
                </p>
            </div>
            <div class ="leftbox">
                <h2>2 Year:</h2>
                Save for 2 years and enjoy International Destinations for 20days.
            
                <p>
                <button type="button"onclick ='location.href="year2.php"'>MoreInfo</button>
                </p>
            </div>
            <div class ="leftbox">
                <h2>3 Year:</h2>
                Save for 3 years and enjoy International Destinations for 30Days.
                <p>
                <button type="button"onclick ='location.href="month3.php"'>MoreInfo</button>
                </p>
            </div>
            <div class ="leftbox">
                <h2>4 Year:</h2>
                Post retirement plan.
                <p>
                <button type="button"onclick ='location.href="month41.php"'>MoreInfo</button>
                </p>
            </div>
            <div class ="leftbox">
                <h2>5 Year:</h2>
                Gift your children local travel.
                <p>
                <button type="button"onclick ='location.href="month5.php"'>MoreInfo</button>
                </p>
            </div>
            <div class ="leftbox">
                <h2>6 Year:</h2>
                Gift your children International travel..
                <p>
                <button type="button"onclick ='location.href="year6.php"'>MoreInfo</button>
                </p>
            </div>
            <div class ="leftbox">
                <h2>7 Year:</h2>
                Low savings plan for 7 years for international destination.
                <p>
                <button type="button"onclick ='location.href="month7.php"'>MoreInfo</button>
                </p>
            </div>
            <div class ="leftbox">
                <h2>8 Year:</h2>
                Savings plan with added benifits and cashbacks.
                <p>
                <button type="button"onclick ='location.href="month8.php"'>MoreInfo</button>
                </p>
            </div>
            </p>
        </div>
    </section>
    <section class="fourthsection">
        <div class="paras">
            <h1 class="sectionTag text-big" id="News">News</h1>

            <p class="sectionSubTag text-small">
                <br>Listed under forbes 100 growing companies
                <br>Customer Review of 5 stars by over 10k customers
                <br>Best Brokerage to fly for less price under travel magazines ratings.
            </p>
        </div>
        <div class="img-center">
            <img src="data:image/png;base64,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" alt="laptop image">
        </div>
    </section>
    <section class="sectionnew" style="padding-bottom: 6px;">
        <div class="paras">
            <h1 class="sectionTag text-big" id="Contacts">Contacts</h1>

            <p class="sectionSubTag text-small">
                <!-- <?php
                        // $txt_file = fopen('details.txt', 'r');
                        // while ($line = fgets($txt_file)) {
                        //     echo (" " . $line) . "<br>";
                        // }
                        // fclose($txt_file);
                        ?> -->

            </p>


        </div>

        <div class="contact-center">
            <img src="https://media.istockphoto.com/photos/got-a-problem-contact-us-picture-id1129113667?k=20&m=1129113667&s=612x612&w=0&h=-NVtUCwT5PYmfHgHWUTKNkJhyJ_9rnD5m9ryN_ai_X4=" alt="image">
        </div>
    </section>
    <div></div>


    <footer class="background">
        <p class="text-footer">
            Thanks For Visiting Our Company! Hope To See You Soon
        </p>


    </footer>
</body>

</html>