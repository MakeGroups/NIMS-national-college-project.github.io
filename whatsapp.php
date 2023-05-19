<a href="https://wa.me/919791586555" target="_blank">
    <div class="tt" id="myBtn1" title="Go To Whatsapp">
        <i class="bi bi-whatsapp"></i>
        <span class="tooltiptext">Whatsapp</span>
    </div>
</a>
<style>
    .tt {
        position: relative;
        display: inline-block;
        border-bottom: 1px dotted black;
    }

    .tt .tooltiptext {
        font-size: 1.5rem;
        visibility: hidden;
        width: 180px;
        background: linear-gradient(to top, hsl(37, 59%, 48%), hsl(54, 85%, 70%));
        color: hsl(359, 74%, 43%);
        text-align: center;
        border-radius: 5px;
        /* border-radius: 6px;
            padding: 5px 0; */

        /* Position the tooltip */
        position: absolute;
        z-index: 1;
        /* top: -5px;
             left: 105%; */
        top: 23px;
        left: 100px;
    }

    .tt:hover .tooltiptext {
        visibility: visible;
    }

    /* .whatsapp {
            position: fixed;
            bottom: 100px;
            left: 100px;
        } */
    #myBtn1 {

        display: block;
        position: fixed;
        bottom: 100px;
        left: 100px;
        z-index: 100000;
        font-size: 2.5rem;
        border: none;
        outline: none;
        color: hsl(359, 74%, 43%);
        font-family: Robotobold;
        font-weight: bold;
        background: linear-gradient(to top, hsl(37, 59%, 48%), hsl(54, 85%, 70%));
        border-radius: 50%;
        cursor: pointer;
        padding: 12px 22px;
        transition: 1s;
        /* text-shadow: 0.5px 0.5px black; */
    }

    #myBtn1:hover {
        color: hsl(50, 85%, 60%);
        /* background: linear-gradient(to bottom,
                hsl(359, 100%, 50%),
                hsl(359, 87%, 44%),
                hsl(359, 88%, 25%),
                hsl(359, 90%, 19%)); */
                background: linear-gradient(to bottom,
                #f80305, #ce0e10, #8a0e0e, #740b0d);
        /* text-shadow: 1px 1px black; */
    }

    @media screen and (max-width:1441px) {
        #myBtn1 {
            bottom: 90px;
            left: 60px;
        }
        .tt .tooltiptext {
        font-size: 1.2rem;
        width: 160px;
        background: linear-gradient(to top, hsl(37, 59%, 48%), hsl(54, 85%, 70%));
        color: hsl(359, 74%, 43%);
        text-align: center;
        border-radius: 5px;
        position: absolute;
        z-index: 100000;
        top: 28px;
        left: 100px;
        }
        #myBtn {
            bottom: 96px;
            right: 60px;
            z-index: 100000;
        }
    }
    @media screen and (max-width:1024px) {
        #myBtn1 {
            bottom: 100px;
            left: 60px;
            font-size: 2rem;
            padding: 6px 18px;
            z-index: 100000;
        }
        .tt .tooltiptext {
        font-size: 1.2rem;
        width: 140px;
        background: linear-gradient(to top, hsl(37, 59%, 48%), hsl(54, 85%, 70%));
        color: hsl(359, 74%, 43%);
        text-align: center;
        border-radius: 5px;
        position: absolute;
        z-index: 1;
        top: 18px;
        left: 80px;
        }
        #myBtn {
            bottom: 100px;
            right: 60px;
            font-size: 1.5rem;
            padding: 5px 15px;
            z-index: 100000;
            /* padding: 4px 12px;
            font-size: 1.5rem; */
        }
    }
    @media screen and (max-width:768px) {
        #myBtn1 {
            bottom: 100px;
            left: 50px;
            font-size: 2rem;
            padding: 6px 18px;
            z-index: 100000;
        }
        .tt .tooltiptext {
        font-size: 1rem;
        width: 120px;
        background: linear-gradient(to top, hsl(37, 59%, 48%), hsl(54, 85%, 70%));
        color: hsl(359, 74%, 43%);
        text-align: center;
        border-radius: 5px;
        position: absolute;
        z-index: 1;
        top: 18px;
        left: 75px;
        }
        #myBtn {
            bottom: 105px;
            right: 50px;
            font-size: 1.5rem;
            padding: 5px 15px;
            z-index: 100000;
            /* padding: 4px 12px;
            font-size: 1.5rem; */
        }
    }
    @media screen and (max-width:425px) {
        #myBtn1 {
            bottom: 100px;
            left: 30px;
            font-size: 1.8rem;
            padding: 7px 15px;
            z-index: 100000;
        }
        .tt .tooltiptext {
        font-size: 1rem;
        width: 100px;
        background: linear-gradient(to top, hsl(37, 59%, 48%), hsl(54, 85%, 70%));
        color: hsl(359, 74%, 43%);
        text-align: center;
        border-radius: 5px;
        position: absolute;
        z-index: 1;
        top: 17px;
        left: 65px;
        }
        #myBtn {
            bottom: 110px;
            right: 30px;
            font-size: 1.25rem;
            padding: 5px 12px;
            z-index: 100000;
            /* padding: 4px 12px;
            font-size: 1.5rem; */
        }
    }
    @media screen and (max-width:375px) {
        #myBtn1 {
            bottom: 100px;
            left: 30px;
            font-size: 1.8rem;
            padding: 7px 15px;
            z-index: 100000;
        }
        #myBtn {
            bottom: 110px;
            right: 30px;
            font-size: 1.25rem;
            padding: 5px 12px;
            z-index: 100000;
            /* padding: 4px 12px;
            font-size: 1.5rem; */
        }
    }
    @media screen and (max-width:320px) {
        #myBtn1 {
            bottom: 100px;
            left: 30px;
            font-size: 1.8rem;
            z-index: 100000;
            padding: 7px 15px;
        }
        #myBtn {
            bottom: 108px;
            right: 30px;
            font-size: 1.25rem;
            padding: 5px 12px;
            z-index: 100000;
            /* padding: 4px 12px;
            font-size: 1.5rem; */
        }
    }
</style>