<button onclick="topFunction()" id="myBtn" title="Go to top">
    <div class="top">
        <!-- <i class="bi bi-caret-up-fill"></i> -->
        <i class="fa-solid fa-angle-up"></i>
    </div>

</button>
<style>
    #myBtn {
        display: none;
        position: fixed;
        bottom: 100px;
        right: 100px;
        z-index: 1000000;
        font-size: 1.5rem;
        border: none;
        outline: none;
        color: hsl(359, 74%, 43%);
        font-family: Robotoregular;
        font-weight: bold;
        background: linear-gradient(to top, hsl(37, 59%, 48%), hsl(54, 85%, 70%));
        border-radius: 10%;
        cursor: pointer;
        padding: 12px 22px;
        transition: 1s;
        text-shadow: none !important;
    }

    #myBtn:hover {
        color: hsl(50, 85%, 60%);
        /* background: linear-gradient(to bottom,
                hsl(359, 100%, 50%),
                hsl(359, 87%, 44%),
                hsl(359, 88%, 25%),
                hsl(359, 90%, 19%)); */
        background: linear-gradient(to bottom,
        #f80305, #ce0e10, #8a0e0e, #740b0d);
    }
</style>

<script>
    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>