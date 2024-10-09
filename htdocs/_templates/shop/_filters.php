<div class="filters w-25 d-md-block" id="filters">
    <button class="btn border-0 position-absolute top-0 end-0 btn-filter-close d-none" id="btn-filter-close"><i class="bi bi-x-lg fs-4"></i></button>
    <form class="m-4 mt-5 mb-5 ">
        <div class="row row-cols-1 gy-3">
            <div class="col">
                <h3 class="text-dark fw-sm mb-5">Catagories</h3>
                <ul class="navbar-nav flex-column ">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/catagories?type=mens">Mens</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/catagories?type=womens">Women</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/catagories?type=kids">Kids</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <h3 class="text-dark">Brand</h3>
                <div class="item m-2 row row-cols-1 gy-3">
                    <div class="col ">
                        <input type="checkbox" class=" me-3" name="shirt" id="shirt">
                        <label for="shirt" class="">Polo</label>
                    </div>
                    <div class="col">
                        <input type="checkbox" class="me-3" name="Crocodial" id="Crocodial">
                        <label for="Crocodial" class="">Crocodial</label>
                    </div>
                    <div class="col">
                        <input type="checkbox" class="me-3" name="Falcon" id="Falcon">
                        <label for="Falcon" class="">Falcon</label>
                    </div>
                    <div class="col">
                        <input type="checkbox" class="me-3" name="RTG" id="RTG">
                        <label for="RTG" class="">RTG</label>
                    </div>
                </div>
            </div>
            <div class="col">
                <h5 class="">Range </h5>
                <div class="item m-3">
                    <label for="priceRange">Price : $<span id="price-value">300</span></label> <br>
                    <input type="range" id="price-range" class="w-100 mt-3" min="0" max="1000" value="300" step="10">
                </div>
                <button class="btn p-2 ps-3  pe-3 border-0 rounded-0 text-center" type="submit" name="filter" id="filter-btn">FILTER</button>
            </div>
            <div class="col">
                <h5 class="">Color </h5>
                <div class="item mt-3 mb-3 row  row-cols-md-1 row-cols-lg-2">
                    <div class="col">
                        <a href="" class="btn border-0 d-flex" role="button"><span class="round align-self-center me-3" style="background-color: balck;"></span>Black</a>
                    </div>
                    <div class="col">
                        <a href="" class="btn border-0 d-flex" role="button"><span class="round align-self-center me-3" style="background-color: red;"></span>Red</a>
                    </div>
                    <div class="col">
                        <a href="" class="btn border-0 d-flex" role="button"><span class="round align-self-center me-3" style="background-color: blue;"></span>Blue</a>
                    </div>
                    <div class="col">
                        <a href="" class="btn border-0 d-flex" role="button"><span class="round align-self-center me-3" style="background-color: yellow;"></span>Yellow</a>
                    </div>
                    <div class="col">
                        <a href="" class="btn border-0 d-flex" role="button"><span class="round align-self-center me-3" style="background-color: pink;"></span>Pink</a>
                    </div>
                    <div class="col">
                        <a href="" class="btn border-0 d-flex" role="button"><span class="round align-self-center me-3" style="background-color: orange;"></span>Orange</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <h5 class="">Tags</h5>
                <div class="item m-3">
                    <button class="btn border border-secondary m-1">Bags</button>
                    <button class="btn border border-secondary m-1">Belts</button>
                    <button class="btn border border-secondary m-1">Pants</button>
                    <button class="btn border border-secondary m-1">Shoes</button>
                    <button class="btn border border-secondary m-1">Tawel</button>
                    <!-- <button class="btn border border-secondary">Bags</button> -->
                </div>
            </div>
            <div class="col mb-5 mt-5">
                <button class="apply btn rounded-0 m-3">Apply</button>
                <button class="btn reset rounded-0 m-3">Reset</button>
            </div>
        </div>
    </form>

</div>