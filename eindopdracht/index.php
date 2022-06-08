<?php include 'includes/header.php'; ?>

<link href="./css/product-card.css" rel="stylesheet"/>

<div>
  <input class="form-control mx-auto mt-2 text-center " id="anythingSearch" style="width: 300px" type="text" placeholder="Type something to search list items">
  <div id="myDIV">
<div class="container">
        <div class="card-1 card-div">
            <div class="like-icon-div">
                <label for="card-1-like" class="like-icon-div-child">
                    <input type="checkbox" id="card-1-like">
                    <i class="far fa-heart heart-empty"></i>
                    <i class="fas fa-heart heart-fill"></i>
                </label>
            </div>
            <div class="gow-img-div img-div">
                <img src="https://github.com/gerrardNwoke/codePen-imgs/blob/main/imgs/gow-figurine.png?raw=true" alt="god-of-war-figurine">
            </div>
            <div class="text-container">
                <h2 class="item-name">Kratos and Artreus Statue - God Of War</h2>
                <p class="date"> Departure date: 31/03/2021 </p>
                <div class="pricing-and-cart">
                    <div class="pricing">
                        <p class="previous-price">$999</p>
                        <p class="current-price">$599</p>
                    </div>
                    <button id="shopingcard-btn" style="font-size:24px;border:none;"><i class="fas fa-shopping-cart"></i></button>                 
                </div>
            </div>
        </div>
        <div class="card-2 card-div">
            <div class="like-icon-div">
                <label for ="card-2-like" class="like-icon-div-child">
                    <input type="checkbox" id="card-2-like">
                    <i class="far fa-heart heart-empty"></i>
                    <i class="fas fa-heart heart-fill"></i>
                </label>
            </div>
            <div class="sekiro-img-div img-div">
                <img src="https://github.com/gerrardNwoke/codePen-imgs/blob/main/imgs/sekiro-figurine.png?raw=true" alt="sekiro-figurine">
            </div>
            <div class="text-container">
                <h2 class="item-name">Sekiro Statue - Sekiro: Shadows Die Twice</h2>
                <p class="date"> Departure date: 31/03/2021 </p>
                <div class="pricing-and-cart">
                    <div class="pricing">
                        <p class="previous-price">$50</p>
                        <p class="current-price">$799</p>
                    </div>
                    <button id="shopingcard-btn" style="font-size:24px;border:none;"><i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
        </div>
        <div class="card-3 card-div">
            <div class="like-icon-div">
                <label for="card-3-like" class="like-icon-div-child">
                    <input type="checkbox" id="card-3-like">
                    <i class="far fa-heart heart-empty"></i>
                    <i class="fas fa-heart heart-fill"></i>
                </label>
            </div>
            <div class="dazai-img-div img-div">
                <img src="https://github.com/gerrardNwoke/codePen-imgs/blob/main/imgs/dazai-figurine.png?raw=true" alt="sekiro-figurine">
            </div>
            <div class="text-container">
                <h2 class="item-name">Osamu Dazai Funko Pop - Bungou Stray Dogs</h2>
                <p class="date"> Departure date: 31/03/2021 </p>
                <div class="pricing-and-cart">
                    <div class="pricing">
                        <p class="previous-price">$449</p>
                        <p class="current-price">$279</p>
                    </div>
                    <button onclick="addToCart()" id="shopingcard-btn" style="font-size:24px;border:none;"><i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
        </div>
        <div class="card-4 card-div">
            <div class="like-icon-div">
                <label for="card-4-like" class="like-icon-div-child">
                    <input type="checkbox" id="card-4-like">
                    <i class="far fa-heart heart-empty"></i>
                    <i class="fas fa-heart heart-fill"></i>
                </label>
            </div>
            <div class="u4-img-div img-div">
                <img src="https://github.com/gerrardNwoke/codePen-imgs/blob/main/imgs/u4-figurine.png?raw=true" alt="u4-figurine">
            </div>
            <div class="text-container">
                <h2 class="item-name">Nathan Drake Statue - Uncharted 4: A Thief's End</h2>
                <p class="date"> Departure date: 31/03/2021 </p>
                <div class="pricing-and-cart">
                    <div class="pricing">
                        <p class="previous-price">$759</p>
                        <p class="current-price">$499</p>
                    </div>
                    <button onclick="addToCart()" id="shopingcard-btn" style="font-size:24px;border:none;"><i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
        </div>
        <div class="card-1 card-div">
            <div class="like-icon-div">
                <label for="card-1-like" class="like-icon-div-child">
                    <input type="checkbox" id="card-1-like">
                    <i class="far fa-heart heart-empty"></i>
                    <i class="fas fa-heart heart-fill"></i>
                </label>
            </div>     
            <div class="gow-img-div img-div">
                <img src="https://github.com/gerrardNwoke/codePen-imgs/blob/main/imgs/gow-figurine.png?raw=true" alt="god-of-war-figurine">
            </div>
            <div class="text-container">
                <h2 class="item-name">Kratos and Artreus Statue - God Of War</h2>
                <p class="date"> Departure date: 31/03/2021 </p>
                <div class="pricing-and-cart">
                    <div class="pricing">
                        <p class="previous-price">$999</p>
                        <p class="current-price">$599</p>
                    </div>
                    <button onclick="addToCart()" id="shopingcard-btn" style="font-size:24px;border:none;"><i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
        </div>
        <div class="card-2 card-div">
            <div class="like-icon-div">
                <label for ="card-2-like" class="like-icon-div-child">
                    <input type="checkbox" id="card-2-like">
                    <i class="far fa-heart heart-empty"></i>
                    <i class="fas fa-heart heart-fill"></i>
                </label>
            </div>
            <div class="sekiro-img-div img-div">
                <img src="https://github.com/gerrardNwoke/codePen-imgs/blob/main/imgs/sekiro-figurine.png?raw=true" alt="sekiro-figurine">
            </div>
            <div class="text-container">
                <h2 class="item-name">Sekiro Statue - Sekiro: Shadows Die Twice</h2>
                <p class="date"> Departure date: 31/03/2021 </p>
                <div class="pricing-and-cart">
                    <div class="pricing">
                        <p class="previous-price">$50</p>
                        <p class="current-price">$799</p>
                    </div>
                    <button onclick="addToCart()" id="shopingcard-btn" style="font-size:24px;border:none;"><i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
        </div>
        <div class="card-3 card-div">
            <div class="like-icon-div">
                <label for="card-3-like" class="like-icon-div-child">
                    <input type="checkbox" id="card-3-like">
                    <i class="far fa-heart heart-empty"></i>
                    <i class="fas fa-heart heart-fill"></i>
                </label>
            </div>
            <div class="dazai-img-div img-div">
                <img src="https://github.com/gerrardNwoke/codePen-imgs/blob/main/imgs/dazai-figurine.png?raw=true" alt="sekiro-figurine">
            </div>
            <div class="text-container">
                <h2 class="item-name">Osamu Dazai Funko Pop - Bungou Stray Dogs</h2>
                <p class="date"> Departure date: 31/03/2021 </p>
                <div class="pricing-and-cart">
                    <div class="pricing">
                        <p class="previous-price">$449</p>
                        <p class="current-price">$279</p>
                    </div>
                    <button onclick="addToCart()" id="shopingcard-btn" style="font-size:24px;border:none;"><i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
        </div>
        <div class="card-4 card-div">
            <div class="like-icon-div">
                <label for="card-4-like" class="like-icon-div-child">
                    <input type="checkbox" id="card-4-like">
                    <i class="far fa-heart heart-empty"></i>
                    <i class="fas fa-heart heart-fill"></i>
                </label>
            </div>
            <div class="u4-img-div img-div">
                <img src="https://github.com/gerrardNwoke/codePen-imgs/blob/main/imgs/u4-figurine.png?raw=true" alt="u4-figurine">
            </div>
            <div class="text-container">
                <h2 class="item-name">Nathan Drake Statue - Uncharted 4: A Thief's End</h2>
                <p class="date"> Departure date: 31/03/2021 </p>
                <div class="pricing-and-cart">
                    <div class="pricing">
                        <p class="previous-price">$759</p>
                        <p class="current-price">$499</p>
                    </div>
                    <button onclick="addToCart()" id="shopingcard-btn" style="font-size:24px;border:none;"><i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
        </div>
        <div class="card-1 card-div">
            <div class="like-icon-div">
                <label for="card-1-like" class="like-icon-div-child">
                    <input type="checkbox" id="card-1-like">
                    <i class="far fa-heart heart-empty"></i>
                    <i class="fas fa-heart heart-fill"></i>
                </label>
            </div>     
            <div class="gow-img-div img-div">
                <img src="https://github.com/gerrardNwoke/codePen-imgs/blob/main/imgs/gow-figurine.png?raw=true" alt="god-of-war-figurine">
            </div>
            <div class="text-container">
                <h2 class="item-name">Kratos and Artreus Statue - God Of War</h2>
                <p class="date"> Departure date: 31/03/2021 </p>
                <div class="pricing-and-cart">
                    <div class="pricing">
                        <p class="previous-price">$999</p>
                        <p class="current-price">$599</p>
                    </div>
                    <button onclick="addToCart()" id="shopingcard-btn" style="font-size:24px;border:none;"><i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
        </div>
        <div class="card-2 card-div">
            <div class="like-icon-div">
                <label for ="card-2-like" class="like-icon-div-child">
                    <input type="checkbox" id="card-2-like">
                    <i class="far fa-heart heart-empty"></i>
                    <i class="fas fa-heart heart-fill"></i>
                </label>
            </div>
            <div class="sekiro-img-div img-div">
                <img src="https://github.com/gerrardNwoke/codePen-imgs/blob/main/imgs/sekiro-figurine.png?raw=true" alt="sekiro-figurine">
            </div>
            <div class="text-container">
                <h2 class="item-name">Sekiro Statue - Sekiro: Shadows Die Twice</h2>
                <p class="date"> Departure date: 31/03/2021 </p>
                <div class="pricing-and-cart">
                    <div class="pricing">
                        <p class="previous-price">$50</p>
                        <p class="current-price">$799</p>
                    </div>
                    <button onclick="addToCart()" id="shopingcard-btn" style="font-size:24px;border:none;"><i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
        </div>
        <div class="card-3 card-div">
            <div class="like-icon-div">
                <label for="card-3-like" class="like-icon-div-child">
                    <input type="checkbox" id="card-3-like">
                    <i class="far fa-heart heart-empty"></i>
                    <i class="fas fa-heart heart-fill"></i>
                </label>
            </div>
            <div class="dazai-img-div img-div">
                <img src="https://github.com/gerrardNwoke/codePen-imgs/blob/main/imgs/dazai-figurine.png?raw=true" alt="sekiro-figurine">
            </div>
            <div class="text-container">
                <h2 class="item-name">Osamu Dazai Funko Pop - Bungou Stray Dogs</h2>
                <p class="date"> Departure date: 31/03/2021 </p>
                <div class="pricing-and-cart">
                    <div class="pricing">
                        <p class="previous-price">$449</p>
                        <p class="current-price">$279</p>
                    </div>
                    <button onclick="addToCart()" id="shopingcard-btn" style="font-size:24px;border:none;"><i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
        </div>
        <div class="card-4 card-div">
            <div class="like-icon-div">
                <label for="card-4-like" class="like-icon-div-child">
                    <input type="checkbox" id="card-4-like">
                    <i class="far fa-heart heart-empty"></i>
                    <i class="fas fa-heart heart-fill"></i>
                </label>
            </div>
            <div class="u4-img-div img-div">
                <img src="https://github.com/gerrardNwoke/codePen-imgs/blob/main/imgs/u4-figurine.png?raw=true" alt="u4-figurine">
            </div>
            <div class="text-container">
                <h2 class="item-name">Nathan Drake Statue - Uncharted 4: A Thief's End</h2>
                <p class="date"> Departure date: 31/03/2021 </p>
                <div class="pricing-and-cart">
                    <div class="pricing">
                        <p class="previous-price">$759</p>
                        <p class="current-price">$499</p>
                    </div>
                    <button onclick="addToCart()" id="shopingcard-btn" style="font-size:24px;border:none;"><i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>
<?php include './includes/footer.php'; ?>    
    


