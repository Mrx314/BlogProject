<?php

   include "../config.php";
   include "../admin2/maradona/logicM.php";
?>
<!DOCTYPE html>
<head>
    <title>
      Dieogo Maradona | Blog
    </title>
    <meta name= "viewport" content="width=device-width, initial-scale=1">
     <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type" method="get">


    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="m10.css">

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
                <p style="font-size:1.25vw;">
                  
                  Maradona's vision, passing, ball control, and dribbling skills were combined with his small stature, which gave him a low centre of gravity allowing him to manoeuvre better than most other players. His presence and leadership on the field had a great effect on his team's general performance, while he would often be singled out by the opposition. In addition to his creative abilities, he possessed an eye for goal and was known to be a free kick specialist.

                </p>
              </div>
            </div>
          </div>
        </div>
        </div>
      </section>

     <div> 
       <center>
       <p style="font-size:4vw;color:darkblue;" >
        Stats
       </p>
       </center>
       
       <br>

        <div id="div1" class="w3-third w3-container">
          <p>
          Games played
          <br>
          <br>
           690
          </p>
        </div>
        <div id="div1" class="w3-third w3-container">
          <p>
          Goals
          <br>
          <br>
           354
          </p>
        </div>
        <div id="div1" class="w3-third w3-container">
          <p>
          Assists
          <br>
          <br>
           64
          </p>
        </div>
      </div>
 </div>       
 <div id="maind2">
      <section class="text-gray-600 body-font">
        <div class="container px-10 py-20 mx-auto flex flex-wrap">
          <div class="lg:w-1/2 px-5 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
            <div class="w3-content w3-section">
              
              <img class="mySlides" src="../Maradona/img/md1.jpg" style="width:75%">
              <img class="mySlides" src="../Maradona/img/md.png" style="width:75%">
              <img class="mySlides" src="../Maradona/img/md2.jpg" style="width:75%">
              <img class="mySlides" src="../Maradona/img/md3.jpg" style="width:75%">
              <img class="mySlides" src="../Maradona/img/md4.jpg" style="width:75%">
              <img class="mySlides" src="../Maradona/img/md5.jpg" style="width:75%">
              <img class="mySlides" src="../Maradona/img/md6.jpg" style="width:75%">
              <img class="mySlides" src="../Maradona/img/md7.jpg" style="width:75%">
            </div>
            <!--<img alt="feature" class="object-cover object-center h-full w-full" src="2019-Ballon-dOr.jpg">-->
          </div>
          <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
            <div class="flex flex-col mb-10 lg:items-start items-center">
              
              <div class="flex-grow">
                <h2 class="text-red-700 text-lg title-font font-medium mb-3"><strong>Trophies (Club & Country)</strong> </h2>
                <p  class="leading-relaxed text-base">
                  <i id="demo1">
                    <li> World Cup: 1x , U-20 World Cup : 1x </li> 
                    <li>Argentina League: 1x ,Uefa Champions League: 1x </li>
                    <li>La liga : 1x , Copa del rey: 1x , Spanish Super cup : 1x</li> 
                    <li>Serie A : 2x , SuperCoppa : 1x , Italian Cup : 1x</li>
                    
                  </i>
                </p>
              </div>
            </div>
            <div class="flex flex-col mb-10 lg:items-start items-center">
              
            
              <div class="flex-grow">
                <h2 class="text-red-700 text-lg title-font font-medium mb-3"><strong>Individual Awards</strong></h2>
                <p class="leading-relaxed text-base">
                  <i id="demo1">
                    <li>Onze d'Or: 2x , Golden Foot: 1x </li> 
                    <li>Argentine League Top scorer: 3x , World cup golden boot: 1x</li>
                    <li> IFFHS Legends : 1x , Ballon d'Or Dream Team: 2020 ,IFFHS All-time Men's Dream Team: 2021</li>
                    <li>Fifa player of the Century : 2000</li>
                    <li>World Cup all time team : 1994 </li>
                    <li>Italian Football Hall Of Fame : 2014 </li> 
                    
                  </i>


                </p>
                
              </div>
            </div>
            <div class="flex flex-col mb-10 lg:items-start items-center">
              <h2 class="text-red-700 text-lg title-font font-medium mb-3"><strong>Records</strong></h2>
              <p class="leading-relaxed text-base">
                <i id="demo1">
                <li> The second highest goal-scorer from Argentina in World Cup finals.</li>
                <li>Most assists in World Cup (8)</li>
                <li> Most number of appearances in the World Cup by an Argentine player (21) </li>
                <li> 10 goal involvements (five goals and five assists) in seven games and no player has done that since at   single edition of a World Cup.</li>
                <li>Maradona won 152 free kicks across his four World Cups, the most in tournament history.</li>
                <li>Maradona is one of just three players to captain his country in two different men's World Cup finals</li>
                <li>ETC ETC</li>
                 
                </i>
              </p>
          
            </div>
          </div>
        </div>
      </section>
<?php foreach($query as $w){ ?>
      <div id="p1" class="container px-2 py-18 text-black-300 ">
      <article action="messi.php" method="post">
      <center><h1 name="header1"><?php echo $w['h1'];?></h1></center>
      <p><?php echo $w['p1'];?></p>
      
<br>


<center><h1><?php echo $w['h2'];?></h1></center>

<p ><?php echo $w['p2'];}?></p>
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
          <p class="leading-relaxed mb-6 text-yellow-500">“If anyone inspired me, it was undoubtedly (Maradona).”</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="../images/m10.jpg" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Lionel Messi</span>
              <span class="text-gray-500 text-sm">Argentine Legend</span>
            </span>
          </a>
        </div> 
      </div>
      <div class="p-4 md:w-1/2 w-full bg-red-500">
        <div class="h-full bg-blue-100 p-8 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6 text-yellow-500">“When Diego scored that second goal against us, I felt like applauding. I’d never felt like that before, but it’s true… and not just because it was such an important game. It was impossible to score such a beautiful goal.

“He’s the greatest player of all time, by a long way. A genuine phenomenon.”</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="../images/gary.jpg" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Gary Linekar</span>
              <span class="text-gray-500 text-sm">England Legend</span>
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
          <p class="leading-relaxed mb-6 text-yellow-500">“With him on the ball, you didn’t know where he finished and where the ball started.”</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="../images/jose.jpg" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Jose Mourinho</span>
              <span class="text-gray-500 text-sm">former Real Madrid manager</span>
            </span>
          </a>
        </div> 
      </div>
      <div class="p-4 md:w-1/2 w-full bg-blue-500">
        <div class="h-full bg-blue-100 p-8 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6 text-yellow-500">“I was very lucky to be his team-mate and get to play with him as well as watch him train every day. The things he did! He was and will always be unique.

“Off the pitch, I always liked his simplicity. He was Maradona, yet with the team he seemed just like an ordinary lad like the rest of us. He didn’t behave at all like a football star.”</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="../images/zola.jpg" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Giafranco Zola</span>
              <span class="text-gray-500 text-sm">Argentine Legend</span>
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
          <button type="submit" name="submitM" class="flex mx-right text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
        </div>

      </form>
      <br>
      <br>
      <div class="wrapper">
      <div class="prev-comments">
      <?php 
      
      $sql = "SELECT * FROM commentsm";
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
<script src="m10.js"></script>
</html>
