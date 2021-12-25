<?php
  
  include "../admin2/Johan/logicJ.php";
  include "../config.php";

?>
<!DOCTYPE html>
<head>
    <title>
      Johan Cryuff | Blog
    </title>
    <meta name= "viewport" content="width=device-width, initial-scale=1">
     <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type" method="get">


    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="johan.css">

</head>
<body>
 <div id="maind1">
 <div class="hero-image">
  
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto md:flex">
          <div class="lg:w-4/6 mx-auto">
            <!--<div class="rounded-lg h-64 overflow-hidden">
              <img alt="content" class="object-cover object-center h-full w-full" src="../images/HI_Messi.png" >
            </div>-->
            <div class=" text-black-300 text-right flex flex-col sm:flex-row mt-10 ">
              <div class="hero-text">
                <p>
                  <b>
                  Cruyff was a proponent of the football philosophy known as Total Football explored by Rinus Michels,
                   and is widely regarded as one of the greatest players in the history of the sport, and the greatest manager ever.</b>
                </p>
              </div>
            </div>
          </div>
        </div>
        </div>
      </section>

     <div> 
       <center>
       <p style="font-size:4vw;color:black;" >
        Stats
       </p>
       </center>
       
       <br>

        <div id="div1" class="w3-third w3-container">
          <p>
          Games played
          <br>
          <br>
           502
          </p>
        </div>
        <div id="div1" class="w3-third w3-container">
          <p>
          Goals
          <br>
          <br>
           263
          </p>
        </div>
        <div id="div1" class="w3-third w3-container">
          <p>
          Assists
          <br>
          <br>
           145
          </p>
        </div>
      </div>
 </div>       
 <div id="maind2">
      <section class="text-gray-600 body-font">
        <div class="container px-10 py-20 mx-auto flex flex-wrap">
          <div class="lg:w-1/2 px-5 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
            <div class="w3-content w3-section">
              <img class="mySlides" src="../Johan/img/jh1.jpg" style="width:100%">
              <img class="mySlides" src="../Johan/img/jh2.jpg" style="width:75%">
              <img class="mySlides" src="../Johan/img/jh3.jpg" style="width:75%">
              <img class="mySlides" src="../Johan/img/jh4.jpg" style="width:75%">
              
            </div>
            <!--<img alt="feature" class="object-cover object-center h-full w-full" src="2019-Ballon-dOr.jpg">-->
          </div>
          <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
            <div class="flex flex-col mb-10 lg:items-start items-center">
              
              <div class="flex-grow">
                <h2 class="text-blue-800 text-lg title-font font-medium mb-3"><strong>Trophies (Club & Country)</strong> </h2>
                <p  class="leading-relaxed text-base">
                  <i id="demo1">
                    <li>  Eredivisie : 9x, LaLiga: 1x , Dutch Cup: 6x  </li> 
                    <li>Uefa Supercup : 1x ,Uefa Champions League: 3x </li>
                    <li>Intercontinental Cup: 1x , Copa del rey : 1x</li> 
                    
                    
                  </i>
                </p>
              </div>
            </div>
            <div class="flex flex-col mb-10 lg:items-start items-center">
              
            
              <div class="flex-grow">
                <h2 class="text-blue-800 text-lg title-font font-medium mb-3"><strong>Individual Awards</strong></h2>
                <p class="leading-relaxed text-base">
                  <i id="demo1">
                    <li>Ballon d'Or: 3x , Dutch top scorer: 2x </li> 
                    <li> World cup best player: 1x , World cup golden boot: 1x</li>
                    <li>Dutch POTY : 5x , Best foreign player : 2x</li>
                     
                    
                  </i>


                </p>
                
              </div>
            </div>
            <div class="flex flex-col mb-10 lg:items-start items-center">
              <h2 class="text-blue-800 text-lg title-font font-medium mb-3"><strong>Records</strong></h2>
              <p class="leading-relaxed text-base">
                <i id="demo1">
                <li>Invented 'Cryuff Turn'</li>
                <li>Invented '3-4-3' formation</li>
                <li>Led Ajax to 3 European Cup </li>
                <li>Pioneer of Modern attacking football</li>
                <li>As a manager led Fc Barcelona to win their first UCL</li>
                <li>Deemed as the 'Total Footballer'</li>
                
                 
                </i>
              </p>
          
            </div>
          </div>
        </div>
      </section>

<?php foreach($query as $w){ ?>
      <div id="p1" class="container px-2 py-18 text-gray-300 ">
      <center><h1><?php echo $w['h1'];?></h1></center>
      <article id="para1">
       <p><?php echo $w['p1'];?></p>
<br>

<div class="hover_img">
     <a href=""><?php echo $w['h2'];?><span><img src="../Johan/img/jh6.jpg" alt="image" height="100" /></span></a>
</div>
<br>

<p><?php echo $w['p2'];}?></p>

<br>
      </article>
      </div>


      <section class="text-gray-600 body-font">
  <div class="container px-5 py-20 mx-auto">
    
    <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-1/2 w-full bg-blue-500">
        <div class="h-full bg-blue-100 p-8 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6 text-yellow-500"> <i>“He was so mature. He was such a skinny little kid but he had such immense stamina. He could run all over the field and he could do everything: set movements up, fly down the wing, run into the penalty area, head the ball in. Left foot, right foot, anything – and such speed.”</i></p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="../images/gd.jpg" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Pep Guardiola</span>
              <span class="text-gray-500 text-sm">Former Barcelona Coach</span>
            </span>
          </a>
        </div> 
      </div>
      <div class="p-4 md:w-1/2 w-full bg-red-500">
        <div class="h-full bg-blue-100 p-8 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6 text-yellow-500">“When you saw Cruyff off the pitch he was like a thin boy. But on the pitch he was from another planet.”</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="../images/rinus.jpg" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Rinus Michels</span>
              <span class="text-gray-500 text-sm">Dutch Coach</span>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-20 mx-auto">
    
    <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-1/2 w-full bg-red-500">
        <div id="hv1" onmouseover="hoverin()" class="h-full bg-blue-100 p-8 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6 text-yellow-500"><i>"A real football brain. He had superb control, he was inventive and he could perform magic with a ball to get himself out of trouble instinctively. He got a lot of goals, and although he was so skilful, he didn’t show off – he played to the strengths of the players around him.” </i></p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="../images/bobby.jpg" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Sir Bobby Charlton</span>
              <span class="text-gray-500 text-sm">England Legend</span>
            </span>
          </a>
        </div> 
      </div>
      <div class="p-4 md:w-1/2 w-full bg-blue-500">
        <div class="h-full bg-blue-100 p-8 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6 text-yellow-500">“He was a real visionary and you can see that nowadays, almost 15 years later, he’s still ahead of most of people in football. I’ve learned a lot with him.”</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="../images/figo.jpg" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Luis Figo</span>
              <span class="text-gray-500 text-sm">Real Madrid Legend</span>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<section class="text-gray-400 bg-gray-200 body-font relative">
  <div class="container px-5 py-20 mx-auto">
    <div class="flex flex-col text-left w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-black">Comments</h1>
     
    </div>
    <form method="POST">
    <div class="lg:w-1/2 md:w-2/3  text-black">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="name" class="leading-7 text-sm text-blue-700">Name</label>
            <input type="text" id="name" name="name" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <label for="message" class="leading-7 text-sm text-gray-400">Comment</label>
            <textarea id="message" name="comment" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 h-32 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
          </div>
        </div>
        <div class="p-2 w-full">
          <button type="submit" name="submitJ" class="flex mx-right text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
        </div>

      </form>
      <br>
      <br>
      <div class="wrapper">
      <div class="prev-comments">
      <?php 
      
      $sql = "SELECT * FROM commentsj";
      $result = mysqli_query($connect, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

      ?>
      <div class="single-item">
        <h4><b><?php echo $row['name']; ?></b></h4>
        
        <p><?php echo $row['comment']; ?></p>
        <hr>
      </div>
      <?php

        }
      }
      
      ?>
      </div>
    </div>
  </div>
        <div class="p-2 w-full pt-8 mt-8 border-t mx-auto border-gray-800 text-center">
          <a class="text-indigo-400">mrpi314@protonmail.com</a>
          <br>
          <hr>
          <span class="inline-flex">
            <a class="text-gray-500" href="https://instagram.com/hs_husain?utm_medium=copy_link">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500" href="https://twitter.com/Pi3_14159263?t=lc6DuzRdzcYlxEJOq3KC1Q&s=09">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500" href="https://instagram.com/hs_husain?utm_medium=copy_link">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500">
              <svg  fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>
            </a>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>









    
</body>
<script src="johan.js"></script>
</html>
