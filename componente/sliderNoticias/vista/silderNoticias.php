
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="../dist/js/notas.js"></script>


    <div class="swiper-container">
        <div class="swiper-wrapper" id="swiper">
        </div>
    </div>


    <link rel="stylesheet" href="../dist/css/swiper.min.css">
    <style>
    body{
        margin-left: 0px; 
        margin-top: 0px; 
        margin-width:0px; 
        margin-height:0; 
        margin-right: 0px;
        overflow-x:hidden; 
        overflow-y:hidden;
    }
    a:link {
        text-decoration: none;
    }
    .swiper-container {
        background-color: #cecece;
        width: 100%;
        min-height: 100%;
        margin: 20px auto;
    }
    .swiper-slide {
        background-color: #cecece;
        
        font-size: 18px;
        font-color: black;
    }
    .swiper-slide img{
        width: 100%;
        height: 290px;
    }
    .swipetitle{
        padding: 15px 15px 15px 15px;
        margin-top: 30% !important;
        width: 95%;
        color: white;
        font-size: 18px;
        margin-left: 0%;
        background-color: black;
        position: absolute;
        opacity: 0.67;
    }

    @media screen and (max-width: 715px){
    .swipetitle{
        margin-top: 27% !important;
    }
            @media screen and (max-width: 593px){
    .swipetitle{
        margin-top: 31% !important;
    }
    @media screen and (max-width: 490px){
    .swipetitle{
        margin-top: 35% !important;
    }
    @media screen and (max-width: 382px){
    .swipetitle{
        margin-top: 40% !important;
    }
}
    </style>
    <script src="../dist/js/swiper.min.js"></script>
<script>

    $( document ).ajaxStop(function() {
        var swiper = new Swiper('.swiper-container',{
            pagination: '.swiper-pagination-h', 
            paginationClickable: true, 
            spaceBetween: 50, 
            autoplay: 3500, 
            autoplayDisableOnInteraction: true, 
            loop:true 
        });
    });
    
</script>