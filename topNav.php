<div class="top_nav_div ">
    <div class="container">
        <div class="row g-3">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 top_nav_logo_col_div">
                <a href="index.php"><img class="logo" src="img/logo.svg" alt="logo"></a>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12  top_nav_input_div_col">
                <div class="top_nav_input_div">
                    <input type="text" id="btn_search_box" class="form-control" placeholder="Find a Product">
                    <img src="img/searchIcon.svg" alt="search icon">
                    <div class="search-list-box">
                        <div class="search-items-list">
                            <a href="./">Product name</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12 btn_col_div">
                <div class="top_nav_btn_div">
                    <a data-bs-toggle="modal" href="#exampleModalToggle" class="btn_1">GET A QUOTE</a>
                    <a href="tel:+1 1234553423" class="btn_2">CALL NOW</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  search-list-box-->
<script>
    $("#btn_search_box").on("input", function() {
        let _this = $(this);
        if ($(this).val().trim().length >= 1) {
            $(".search-list-box").css("display", "block");
        } else {
            $(".search-list-box").css("display", "none");
        }
    });

    $(document).ready(function() {
        const myDiv = $('.search-list-box');
        $(document).on('click', function(event) {
            if (!myDiv.is(event.target) && myDiv.has(event.target).length === 0) {
                myDiv.hide();
            }
        });
    });
</script>