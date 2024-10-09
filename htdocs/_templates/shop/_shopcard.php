<div class="container-fluid items mb-3 p-0 overflow-x-hidden" id="items">
 
    <div class="row mb-5 w-100">
        <!-- <span class="fs-4 fw-medium ms-0 mt-3 mb-3 text-dark opacity-50">Trends & Fashion</span> -->

        <div class="container m-0 p-0 w-100 d-lg-flex justify-content-between ">
            <h4 class="m-2 p-2 card-heading text-center text-white ">TRENDS & FASHION </h4>
            <div class="d-flex m-2 p-2 justify-content-around card-filter ">
                <div class=" ms-3 ">
                    <label for="sort" class="">Sort:</label>
                    <select name="sort" id="sort">
                        <option value="">Default Sorting</option>
                        <option value="n">Newest First</option>
                        <option value="h">High Price to Low Price</option>
                        <option value="l">Low Price to High Price</option>
                    </select>
                </div>
                <div class=" ">
                    <label for="limit" class="">Show:</label>

                    <select name="limit" id="grid-limit">
                        <?php
                        for ($i = 1; $i < 9; $i++) {
                        ?>
                            <option value="<?php echo $i ?>"><?php echo $i * 3 ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="d-md-none ">
                    <button class="btn d-flex  p-0 border-0 btn-filter-open" id="btn-filter-open"><i class="bi bi-funnel-fill"></i>Filter</button>
                </div>
            </div>
        </div>
        <?php
        
       
             session::loadTemplate("home/_carditem") ;  //  TODO:check for more is visible or not in shop page
        
        
        ?>
    </div>
</div>