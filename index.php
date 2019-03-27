<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 40%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        /**************/


        .modalTwo {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-contentTwo {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 40%;
        }

        /* The Close Button */
        .closeTwo {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .closeTwo:hover,
        .closeTwo:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }


        /**************/


        .modalThree {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-contentThree {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 40%;
        }

        /* The Close Button */
        .closeThree {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .closeThree:hover,
        .closeThree:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }


    </style>
</head>
<body>

<h2>CANAL1</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Some text in the Modal..</p>

        <iframe  id="iframe" src="http://181.196.18.38:8080/18.TELEVICENTRO/embed.html?autoplay=true&play_duration=600"
                allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed"
                name="wistia_embed" allowfullscreen="true" mozallowfullscreen webkitallowfullscreen
                oallowfullscreen msallowfullscreen width="500" height="300" ></iframe>
    </div>

</div>


<h2>CANAL2</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtnTwo">Open Modal</button>

<!-- The Modal -->
<div id="myModalTwo" class="modalTwo">

    <!-- Modal content -->
    <div class="modal-contentTwo">
        <span class="closeTwo">&times;</span>
        <p>Some text in the Modal..</p>

        <iframe  id="iframeTwo" src="http://181.196.18.38:8080/07.DEPORTES_REALMADRID/embed.html?autoplay=true&play_duration=600"
                 allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed"
                 name="wistia_embed" allowfullscreen="true" mozallowfullscreen webkitallowfullscreen
                 oallowfullscreen msallowfullscreen width="500" height="300" ></iframe>
    </div>

</div>


<h2>CANAL3</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtnThree">Open Modal</button>

<!-- The Modal -->
<div id="myModalThree" class="modalThree">

    <!-- Modal content -->
    <div class="modal-contentThree">
        <span class="closeThree">&times;</span>
        <p>Some text in the Modal..</p>

        <iframe  id="iframeThree" src="http://181.196.18.38:8080/07.DEPORTES_REALMADRID/embed.html?autoplay=true&play_duration=600"
                 allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed"
                 name="wistia_embed" allowfullscreen="true" mozallowfullscreen webkitallowfullscreen
                 oallowfullscreen msallowfullscreen width="500" height="300" ></iframe>
    </div>

</div>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    var frame = document.getElementById("iframe");
    var frameOriginal = document.getElementById("iframe");


    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
        frameOriginal.parentNode.appendChild(frame);
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            frameOriginal.parentNode.appendChild(frame);
        }
    }


    /************Two*********/

    // Get the modal
    var modalTwo = document.getElementById('myModalTwo');

    var frameTwo = document.getElementById("iframeTwo");
    var frameOriginalTwo = document.getElementById("iframeTwo");


    // Get the button that opens the modal
    var btnTwo = document.getElementById("myBtnTwo");

    // Get the <span> element that closes the modal
    var spanTwo = document.getElementsByClassName("closeTwo")[0];

    // When the user clicks the button, open the modal
    btnTwo.onclick = function() {
        modalTwo.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    spanTwo.onclick = function() {
        modalTwo.style.display = "none";
        frameOriginalTwo.parentNode.appendChild(frameTwo);
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modalTwo) {
            modalTwo.style.display = "none";
            frameOriginalTwo.parentNode.appendChild(frameTwo);
        }
    }

    /************Two*********/

        // Get the modal
    var modalThree = document.getElementById('myModalThree');

    var frameThree = document.getElementById("iframeThree");
    var frameOriginalThree = document.getElementById("iframeThree");


    // Get the button that opens the modal
    var btnThree = document.getElementById("myBtnThree");

    // Get the <span> element that closes the modal
    var spanThree = document.getElementsByClassName("closeThree")[0];

    // When the user clicks the button, open the modal
    btnThree.onclick = function() {
        modalThree.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal

    // When the user clicks on <span> (x), close the modal
    spanThree.onclick = function() {
        modalThree.style.display = "none";
        frameOriginalThree.parentNode.appendChild(frameThree);
    }


    window.onclick = function(event) {


        if (event.target == modal) {
            modal.style.display = "none";
            frameOriginal.parentNode.appendChild(frame);
        }


        else if (event.target == modalTwo) {
            modalTwo.style.display = "none";
            frameOriginalTwo.parentNode.appendChild(frameTwo);
        }


        else if (event.target == modalThree) {
            modalThree.style.display = "none";
            frameOriginalThree.parentNode.appendChild(frameThree);
        }



    }

</script>

</body>
</html>