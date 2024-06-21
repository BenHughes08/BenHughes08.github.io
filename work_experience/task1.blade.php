<style>
 
    * {
        box-sizing: border-box;
    }
 
    body { 
        display:flex;
        justify-content: center;
        align-items: center;
        background-color: #ccc;
        font-family:Arial, Helvetica, sans-serif;
    }
.flex-container {
    display: flex;
    background-color:white;
    border-radius: 18px;
    height: 100%;
    max-width: 1300px;
    max-height: 700px;
}
@media screen and (max-width: 800px) {
  .flex-container {
    max-width: 500px;
    max-height: 400px;
  }
} 
 
 
 
.left {
    display: flex;
    width:50%;
    padding: 40px;
    flex-direction: column;
    justify-content: center;
 
}
 
@media screen and (max-width: 800px) {
    .left {
        padding: 20px;
    }
}
 
.left > div {
    text-align: center;
}
 
.right {
    display: flex;
    width:50%;
    background: linear-gradient(90deg, rgba(251,70,238,1) 0%, rgba(109,70,251,1) 50%, rgba(0,125,255,1) 100%);
    border-radius: 0 18px 18px 0;
    color: white;
    padding: 60px;
    align-items: center;
    line-height: 300%;
}
 
@media screen and (max-width: 800px) {
    .right{
        line-height: 1;
        padding: 30px;
    }
}
.right h4 {
    font-size: 50px;
}
 
@media screen and (max-width: 800px) {
  .right h4{
    font-size: 30px;
  }
} 
 
.left h4 {
    font-size: 23px; 
    margin: 5px 26px 26px 26px;
}
 
@media screen and (max-width: 800px) {
    .left h4 {
        font-size: 15px;
        margin: 3px 15px 15px 15px;
    }
}
 
.left svg {
    margin-top: 20px;
 
}
 
@media screen and (max-width: 800px) {
    .left svg {
        margin-top: 5px;
    }
}
 
.left p {
    font-size: 18px;
    margin-top: 80px
}
 
@media screen and (max-width: 800px) {
    .left p {
        margin-top: 5px;
    }
}
 
 
.left .FieldWrapper input {
    width: 100%;
    padding: 8px 16px;
    margin-bottom: 20px;
}
 
.left .FieldWrapper input::placeholder{
    font-size: 17px;
}
 
.left .FieldWrapper label {
    display: none;
}
 
.left .LogIn {
    flex-wrap: wrap;
}
 
.left .LogIn{
    text-align: center;
}
 
.left .LogIn button {
    margin-top: 20px;
    background: linear-gradient(90deg, rgba(251,70,238,1) 0%, rgba(109,70,251,1) 50%, rgba(0,125,255,1) 100%);
    height: 35px;
    width: 100%;
    border: 0px;
    border-radius: 3px;
    font-size: 18px;
    color: white;
}
 
@media screen and (max-width: 800px) {
    .left .LogIn button {
        height: 30px;
    }
}
 
.left .LogIn a {
    margin-top: 12px;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    color: black;
    margin-bottom: 40px;
}
 
@media screen and (max-width: 800px) {
    .left .LogIn a {
        font-size: 14px;
        margin-bottom: 20px;
        margin-top: 10px;
    }
}
 
.left .Register {
    display:flex;
    align-items: center;
    justify-content: space-between;
}
 
.left .Register button {
    width: 125px;
    height: 30px;
    color:red;
    background-color: white;
    border-color: #ccc;
    border-radius: 5px;
}
 
.left .Register p {
    font-size: 18px;
    margin: 0px;
}
 
@media screen and (max-width: 800px) {
    .left .Register p {
        font-size: 14px;
    }
}
 
 
.right p {
    font-size: 20px;
}
 
@media screen and (max-width:800px) {
    .right p{
        font-size: 18px;
    }
}
 
</style>
<section class="flex-container">
 
    <div class="left">
    <!--Logo-->
    <div>
        <svg width="118" height="34" viewBox="0 0 998 308" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M998 154C998 239.052 929.052 308 844 308C758.948 308 690 239.052 690 154C690 68.9482 758.948 0 844 0C929.052 0 998 68.9482 998 154ZM511.789 302.422C511.052 303.896 508.948 303.896 508.211 302.422L360.447 6.89443C359.782 5.56462 360.749 4.00002 362.236 4.00002L657.764 4.00005C659.251 4.00005 660.218 5.56467 659.553 6.89447L511.789 302.422ZM0 6C0 4.89543 0.895431 4 2 4H298C299.105 4 300 4.89543 300 6V62C300 63.1046 299.105 64 298 64H2C0.895429 64 0 63.1046 0 62V6ZM2 124C0.895431 124 0 124.895 0 126V182C0 183.105 0.895429 184 2 184H298C299.105 184 300 183.105 300 182V126C300 124.895 299.105 124 298 124H2ZM2 244C0.895431 244 0 244.895 0 246V302C0 303.105 0.895429 304 2 304H298C299.105 304 300 303.105 300 302V246C300 244.895 299.105 244 298 244H2Z" fill="url(#evolinear)"></path>
            <defs>
                <linearGradient id="evolinear" x1="-8.15631e-07" y1="4.00001" x2="1013.97" y2="72.8975" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#F43494"></stop>
                    <stop offset="1" stop-color="#1919FF"></stop>
                </linearGradient>
            </defs>
        </svg>
        <h4>
            We are the Evo Agency
        </h4>
    </div>
 
    <form>
        <p>Please login to your account</p>
        <!--Username input-->
        <div class="FieldWrapper">
            <label for="exampleFormControlInput1">Username</label>
            <input type="text" placeholder="Username"/>
        </div>
 
        <!--Password input-->
        <div class="FieldWrapper">
            <label for="exampleFormControlInput11">Password</label>
            <input type="password" placeholder="Password"/>
        </div>
 
        <!--Submit button-->
        <div class="LogIn">
            <button type="button">Log in</button>
            <a href="#!">Forgot password?</a>
        </div>
 
        <!--Register button-->
        <div class="Register">
            <p>Don't have an account?</p> 
            <button type="button">REGISTER</button>
        </div>
    </form>
    </div>
 
    <div class="right">
        <div>
            <h4>
                We are more than just a company
            </h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing
                elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis
                nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea commodo consequat.
            </p>
        </div>
    </div>
 
</section>