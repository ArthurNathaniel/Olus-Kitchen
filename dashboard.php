<!DOCTYPE html>
<html>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/base.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



<body>

    <div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:250px">
        <div class="w3-bar-item ">
            <div class="nav-logo"></div>
        </div>
        <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'London')">Food Menu</button>
        <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Paris')"> Sale History</button>
        <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Tokyo')">Add Menu</button>
        <div class="logout">
            <button>
                <a href="logout.php">Logout</a>
            </button>
        </div>
    </div>

    <div style="margin-left:250px">

        <div id="London" class="w3-container city" style="display:none">
            <div class="food-head">
                <p>Our Food Menu </p>
            </div>
            <div class="food-grid">

                <div class="food-card">
                    <div class="food-image"></div>
                    <div class="food-info">
                        <p>Jollof Rice & Chicken</p>
                        <p>GH₵ 15.00</p>
                    </div>
                </div>

                <div class="food-card">
                    <div class="food-image"></div>
                    <div class="food-info">
                        <p>Jollof Rice & Chicken</p>
                        <p>GH₵ 20.00</p>
                    </div>
                </div>

                <div class="food-card">
                    <div class="food-image"></div>
                    <div class="food-info">
                        <p>Plain Rice & Chicken</p>
                        <p>GH₵ 20.00</p>
                    </div>
                </div>

                <div class="food-card">
                    <div class="food-image"></div>
                    <div class="food-info">
                        <p>Plain Rice & Chicken</p>
                        <p>GH₵ 15.00</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="Paris" class="w3-container city" style="display:none">
            <h2>Paris</h2>
            <p>Paris is the capital of France.</p>
            <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
        </div>

        <div id="Tokyo" class="w3-container city" style="display:none">
            <h2>Tokyo</h2>
            <p>Tokyo is the capital of Japan.</p>
            <p>It is the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>
        </div>



    </div>

    <script src="./js/dashboard.js">
       
    </script>

</body>

</html>