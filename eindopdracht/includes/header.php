<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brave</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- searchbar -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <!-- js orders popup modal  -->
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
    <div class="nav-container ml-auto">
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="home" viewBox="0 0 16 16">
                <path
                    d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z">
                </path>
            </symbol>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="table" viewBox="0 0 16 16">
                <path
                    d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z">
                </path>
            </symbol>
            <symbol id="people-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z">
                </path>
            </symbol>
            <symbol id="login" viewBox="0 0 16 16">
                <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
                <path
                    d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z" />
            </symbol>
            <symbol id="logout" viewBox="0 0 16 16">
                <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
                <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
            </symbol>
            <symbol id="register" viewBox="0 0 16 16">
                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
            </symbol>
            <symbol id="cart" viewBox="0 0 16 16">
                <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
            </symbol>
                </svg>
        <header>
            <div class="px-3 py-2 bg-white text-black">
                <div class="container">
                    <div class=" flex-wrap align-items-center ">
                        <a href="/"
                            class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                                <use xlink:href="#bootstrap"></use>
                            </svg>
                        </a>
                        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                            <li>
                                <a href="index.php" id="home-btn" class="nav-link text-black shake">
                                    <svg class="bi d-block mx-auto mb-1" width="35" height="35">
                                        <use xlink:href="#home"></use>
                                    </svg>
                                    <h6>Home</h6>
                                </a>
                            </li>
                            <li>
                               <span id="modal-btn" class="nav-link text-black shake">
                                    <svg class="bi d-block mx-auto mb-1" width="35" height="35">
                                        <use xlink:href="#table"></use>
                                    </svg>
                                    <h6>Order History</h6>
                                </span>
                                <div id="myModal" class="modal">
                                      <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2 class="mx-auto">Order History</h2>
    </div>
    <table>
    <tr>
      <th>Order date</th>
      <th>Order ID</th>
      <th>Product ID</th>
      <th>Description</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Sub Total</th>
    </tr>
<tr>
   <td>22/01/2020</td>
    <td>#4535</td>
    <td>0123</td>
    <td>Kratos and Arteus Statue - God Of War</td>
    <td>4</td>
    <td>$599</td>
    <td>$2.396</td>
</tr>
<tr>
   <td>13/10/2021</td>
    <td>#4537</td>
    <td>0423</td>
    <td>Osamu Dazai Funko Pop Bungou Stray Dogs</td>
    <td>1</td>
    <td>$279</td>
    <td>$279</td>
                        </table>
                    <div class="modal-body">
                <div class="modal-content-container">
            <div class="content">
        </div>
    </div>
</div>
<div class="modal-footer">
    <h3>Totaal Basket: $2.669</h3>
</div>
</div>
</div>
                            </li>
                            <li>
                                <a href="feedback.php" id="customers-btn" class="nav-link text-black shake">
                                    <svg class="bi d-block mx-auto mb-1" width="35" height="35">
                                        <use xlink:href="#people-circle"></use>
                                    </svg>
                                    <h6>Feedback</h6>
                                </a>
                            </li>
                            <li>
                                <a href="login.php" id="login-btn" class="nav-link text-black shake">
                                    <svg class="bi d-block mx-auto mb-1" width="35" height="35">
                                        <use xlink:href="#login"></use>
                                    </svg>
                                    <h6>Login</h6>
                                </a>
                                </a>
                            </li>
                            <li>
                                <a href="logout.php" id="logout-btn" class="nav-link text-black shake">
                                    <svg class="bi d-block mx-auto mb-1" width="35" height="35">
                                        <use xlink:href="#logout"></use>
                                    </svg>
                                    <h6>Logout</h6>
                                </a>
                            </li>
                            <li>
                                <a href="register.php" class="nav-link text-black shake">
                                    <svg class="bi d-block mx-auto mb-1" width="35" height="35">
                                        <use xlink:href="#register"></use>
                                    </svg>
                                    <h6>Sign up</h6>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="mt-0 nav-link text-black shake">
                                <span class="badge badge-success" id="cart_item_count" style="font-size:12px;">0</span>
                                    <svg class="bi d-block mx-auto mb-1" width="25" height="25">
                                        <use xlink:href="#cart"></use>
                                    </svg>
                                    <h6>Cart</h6>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>              
</div>
<button onclick="topFunction()" class="bi bi-chevron-double-up" id="scroll-btn" title="Go to top"></button>
<script src="./js/modal.js"></script>
<script src="./js/scroll-to-top.js"></script>
<script src="./js/searchbox.js"></script>
<script src="./js/cart-counter.js"></script>
</header>


        