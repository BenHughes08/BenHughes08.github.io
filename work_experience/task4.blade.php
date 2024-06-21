
{{-- <script>
    function calculate(e) {
        event.preventDefault()
        console.log("Form submitted!");
    };

    function length() {
        event.preventDefault()
        var inputText2 = document.getElementById('inputText').innerHTML
        console.log(inputText2.length);
    }
</script>


<!-- Section: Design Block -->
<section>
    <form onsubmit="calculate(this) length()">
        <textarea name="inputText">

        </textarea>
        <button type="submit">Submit</button>
    </form>
</section>


<div>
    console.log(this.length);
</div>    --}}

<script>
    
    // define 
    let playerX = 500
    let playerY = 500
    let zombieX = 0
    let zombieY = 0
    let speedX = 250
    let speedY = 250
    let multiplyer = 1
    // listen for mouse movement - get x and y coord
    // window.onmousemove=function(event) {
    //     playerX = event.clientX
    //     playerY = event.clientY
    // }

    window.onkeydown=function(event) {
        let key = event.key;
        if (key=="ArrowDown") {
            playerY += 50 * multiplyer;
        }
        if (key=="ArrowUp") {
            playerY -= 50 * multiplyer;
        }
        if (key=="ArrowLeft") {
            playerX -= 50 * multiplyer;
        }
        if (key=="ArrowRight") {
            playerX += 50 * multiplyer;
        }
    }
    // window.onkeydown=function(event) {
    //     let key = event.key;
    //     keypressed = true;
    //     if keypressed = true;
    //         if (key=="ArrowDown") {
    //             downKeyPressed = true;
    //         }
    //         if (key=="ArrowUp") {
    //             upKeyPressed = true;
    //         }
    //         if (key=="ArrowLeft") {
    //             leftKeyPressed = true;
    //         }
    //         if (key=="ArrowRight") {
    //             rightKeyPressed = true;
    //         }
    //     else {
    //         if (key=="ArrowDown") {
    //             downKeyPressed = false;
    //         }
    //         if (key=="ArrowUp") {
    //             upKeyPressed = false;
    //         }
    //         if (key=="ArrowLeft") {
    //             leftKeyPressed = false;
    //         }
    //         if (key=="ArrowRight") {
    //             rightKeyPressed = false;
    //     }
    // }
    // get player 

    // set player to mouse 
    // top - mouse
    // left - mouse

    // add speed boost (make a box and give a colour then increase speed i nthigny)

    // zombie 
    function checkCollision(zombie, player) {
        // Get bounding rectangles
        let rect1 = zombie.getBoundingClientRect();
        let rect2 = player.getBoundingClientRect();

        // Check collision
        if (rect1.right >= rect2.left &&
            rect1.left <= rect2.right &&
            rect1.bottom >= rect2.top &&
            rect1.top <= rect2.bottom) {
            return true; // Collision detected
        }
        
        return false; // No collision
        }
        

    
    let hp = 100;

    function generateBoosts() {
        let div = document.createElement('div');
        div.id = 'speed';
        document.body.appendChild(div);

    }
    generateBoosts()
    setInterval(() => {
        console.log(multiplyer)
        let player = document.getElementById("player")
        let zombie = document.getElementById("zombie")
        let speed = document.getElementById("speed")
        player.style.top = playerY
        player.style.left = playerX
        if (zombieX <= playerX) {
            zombieX += 5
            zombie.style.left = zombieX + "px";
        }
        if (zombieY <= playerY) {
            zombieY += 5
            zombie.style.top = zombieY + "px";
        }
        if (zombieX >= playerX) {
            zombieX -= 5
            zombie.style.left = zombieX + "px";
        }
        if (zombieY >= playerY) {
            zombieY -= 5
            zombie.style.top = zombieY + "px";
        }
        if (checkCollision(zombie, player)) {
            hp -= 10;
        }
        if (checkCollision(player, speed)) {
            multiplyer = 3
            setTimeout(() => {
                multiplyer = 1
            }, 3000, multiplyer); 
        }
        checkDead()


    }, 16);

    function checkDead() {
    
        // Assuming hp is a variable accessible within this function
        if (hp <= 0) {
            ("you died");
            playerX = 1000
            playerY = 1000
            zombieX = 0
            zombieY = 0
            hp = 100
            // Additional logic for when the player dies
        }
}


 
</script>

<body>
    <div id="zombie"></div>
    <div id="player"></div>
    <div id="hp"></div>
    <div id="speed" ></div>
</body>

<style>

    body {
        position: relative;
    }

    #player {
        width: 50px;
        height: 50px;
        background: red;
        position: absolute;
    }

    #zombie {
        width: 100px;
        height: 100px;
        background: black;
        position: absolute;
    }

    #speed {
        width: 25px;
        height: 25px;
        background: blue;
        position: relative;
    }


</style>


