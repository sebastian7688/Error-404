<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/add.css">
<link rel="stylesheet" href="css/qwe.css">
<!----div class="border-top bg-light"--->
<!---style>
 /* @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap");
  .material-symbols-rounded {
    font-variation-settings: "FILL" 1, "wght" 400, "GRAD" 0, "opsz" 48;
    color: var(--icon);
    font-size: 3.5rem;
    transform: translate(1px, 1px);
  }
  
  :root {
    --icon: #333;
    --color-light: rgba(10, 10, 10, 0.2);
    --linear-gradient-lightest: linear-gradient(
      135deg,
      rgba(3, 3, 3, 0.4) 0%,
      #e5e5e5 70%
    );
    --linear-gradient-light: linear-gradient(
      135deg,
      rgba(0, 0, 0, 0.53) 0%,
      #e0e0e0 60%
    );
  }
 
  
  html {
    box-sizing: border-box;
 
  }
    <!----style="font-size:70%"-
  body {
    box-sizing: inherit;
    font-family: "Inter", sans-serif;
  }
  
  .container {
    display: grid;
    justify-content: center;
  
  }
  
  .card {
    color: #222222;
    overflow: hidden;
    border-radius: 1.6rem;
    display: grid;
    grid-template-rows: 1fr 1.5fr;
    grid-template-columns: 1fr;
    position: relative;
    transition: all 0.3s;
  }
  .card__img {
    transition: transform 0.2s;
    display: block;
    width: 110%;
    overflow: hidden;
  }
  .card__img-filter {
    width: 100%;
    height: 50rem;
    background-color: var(--color-light);
    top: 0;
    position: absolute;
  }
  .card__text {
    display: grid;
    grid-template-rows: min-content 1fr 1fr min-content;
    position: relative;
    z-index: 100;
    padding: 0 2.4rem 1.5rem;
  }
  .card__header {
    margin-bottom: 1.3rem;
    font-weight: bold;
    font-size: 2.9rem;
  }
  .card__details {
    font-size: 1.4rem;
  }
  .card__price {
    align-self: center;
    display: flex;
    align-items: center;
  }
  .card__price div {
    border-radius: 100%;
    background-color: var(--color-light);
    width: 6.1rem;
    height: 6.1rem;
    display: grid;
    align-items: center;
    justify-content: center;
  }
  .card__button {
    display: flex;
    align-items: center;
    margin-top: auto;
    overflow: hidden;
    justify-content: center;
    border-radius: 12rem;
    text-decoration: none;
    padding: 0.6rem;
    transform: translate(0.6rem, 0.6rem);
    justify-self: end;
    background-color: transparent;
    font-size: 2rem;
    font-weight: bold;
    color: #222222;
    transition: transform 0.2s ease-out;
  }
  .card__button > span {
    position: relative;
    z-index: 5;
    background-color: var(--color-light);
    border-radius: 12rem;
    padding: 0.5rem 2rem;
    display: flex;
    align-items: center;
  }
  .card__button > span span {
    font-size: 4rem;
    transform: translate(1.2rem, 0);
    transition: transform 0.2s ease-out;
    padding-left: 1rem;
    color: #222222;
  }
  .card__button > div {
    background-color: var(--color-light);
    position: absolute;
    border-radius: 100%;
    width: 1rem;
    height: 1rem;
    transform: scale(0);
    transition: transform 0.5s ease-out;
  }
  .card__button:focus > span span, .card__button:active > span span {
    transform: translate(2rem, 0);
  }
  .card__background-1, .card__background-2, .card__background-3 {
    transform: translate(-16%, 28%);
    position: absolute;
    height: 65rem;
    width: 56.8rem;
  }
  .card__background-1 {
    background-image: linear-gradient(135deg, #fdfdfd 0%, #eaeaea 100%);
    z-index: 3;
  }
  .card__background-2 {
    background-image: var(--linear-gradient-light);
    transform: translate(-19.5%, 25.5%);
    z-index: 2;
  }
  .card__background-3 {
    background-image: var(--linear-gradient-lightest);
    transition: transform 0.3s;
    transform: translate(-23.3%, 21.7%);
    z-index: 1;
  }
  
  .card:hover .card__background-3 {
    transform: translate(-23.3%, -10.7%);
  }

  
  .card--aqua {
    --icon: #01becf;
    --color-light: rgba(0, 234, 255, 0.193);
    --linear-gradient-light: linear-gradient(
      135deg,
      rgba(255, 255, 255, 0.5) 0%,
      #00ccff 100%
    );
    --linear-gradient-lightest: linear-gradient(
      135deg,
      rgba(0, 247, 255, 0.25) 0%,
      #e5e5e5 100%
    );
  }</style>*/
  -div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 border-bottom border-info">
        Mis Productos
      </span></h2>


    <div class="container" style="grid-template-columns: repeat(auto-fit, 33.78rem)">
      <article class="card card--aqua">
        <img class="card__img" style="-color-light: rgba(0, 234, 255)" src="http://localhost/Error-404/img/productos/27/principal.jpg" alt="mountains view on a sunny day" />
        <div class="card__img-filter"></div>
        <div class="card__text">
          <h2 class="card__header">
            Aute occaecat labore velit
          </h2>
          <p class="card__details">
            Ad adipiscing qui nisi Duis sint fugiat anim veniam,
            consequat Duis amet, non ad tempor laborum id labore
            laborum ullamco non mollit.
          </p>
          <div class="card__price">
            <div>
              <span class="material-symbols-rounded">
                <i class="fa-solid fa-tag" style="color: #2084cf;"></i>
              </span>
            </div>
            <h3>
              $255<span class>.99</span>
            </h3>
          </div>
          <a href="#" class="card__button">
            <span>
              Ver<span class="material-symbols-rounded">
              </span>
            </span>

          </a>
        </div>
        <div class="card__background-1"></div>
        <div class="card__background-2"></div>
        <div class="card__background-3"></div>
      </article>
    </div>
  </div------><br><h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 border-bottom border-info">
        Mis Productos
      </span></h2><br><br>
<style>

body {
    background-color:linear-gradient( rgba(42, 154, 240, 0.541), rgb(255, 255, 255,0.541));
     height:1320px; 
    background-size:cover;
    background-repeat: no-repeat;
  }


  input[type="radio"] {
  position: absolute;
  left: -9999px;
}
:root {
  --black: #1a1a1a;
  --white: #fff;
  --green: #49b293;
}
.filters {
  text-align: center;
  margin-bottom: 2rem;
}
.filters * {
  display: inline-block;
}
.filters label {
  padding: 0.5rem 1rem;
  margin-bottom: 0.25rem;
  border-radius: 2rem;
  min-width: 80px;
  line-height: normal;
  cursor: pointer;
  transition: all 0.1s;
}
.filters label:hover {
  background: var(--purple);
  color: var(--white);
}
:root {
  --black: #1a1a1a;
  --white: #fff;
  --green: #49b293;
}
.posts {
  display: grid;
  grid-gap: 1.5rem;
  grid-template-columns: repeat(4, 1fr);
}
.posts .post {
  background: #fafafa;
  border: 1px solid rgba(0, 0, 0, 0.1);
}
.posts .post-title {
  font-size: 1.3rem;
}
.posts .post-title:hover {
  text-decoration: underline;
}
.posts figcaption {
  padding: 1rem;
}
.posts .post-categories {
  margin-bottom: 0.75rem;
  font-size: .75rem;
}
.posts .post-categories * {
  display: inline-block;
}
.posts .post-categories li {
  margin-bottom: 0.2rem;
}
.posts .post-categories a {
  padding: 0.2rem 0.5rem;
  border-radius: 1rem;
  border: 1px solid;
  line-height: normal;
  background: all 0.1s;
}
.posts .post-categories a:hover {
  background: var(--green);
  color: var(--white);
}
@media screen and (max-width: 900px) {
  .posts {
    grid-template-columns: repeat(3, 1fr);
  }
}
@media screen and (max-width: 650px) {
  .posts {
    grid-template-columns: repeat(2, 1fr);
  }
}
ul.pagination {
    display: inline-block;
    padding: 0;
    margin: 0;
}

ul.pagination li {display: inline;}

ul.pagination li a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
}

ul.pagination li a.active {
    background-color: #169de1f8;
    color: white;
}

ul.pagination li a:hover:not(.active) {background-color: #ddd;}
ul.pagination li a {
    border-radius: 5px;
}

ul.pagination li a.active {
    border-radius: 5px;
}
ul.pagination li a {
    transition: background-color .3s;
}
ul.pagination li a {
    border: 1px solid #ddd; /* Gray */
}
.pagination li:first-child a {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}

.pagination li:last-child a {
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}ul.pagination li a {
    margin: 0 4px; /* 0 is for top and bottom. Feel free to change it */
}
  </style>
      <input type="radio" id="All" name="categories" value="All" checked>
<input type="radio" id="CSS" name="categories" value="CSS">
<input type="radio" id="JavaScript" name="categories" value="JavaScript">
<input type="radio" id="jQuery" name="categories" value="jQuery">
<input type="radio" id="WordPress" name="categories" value="WordPress">
<input type="radio" id="Slider" name="categories" value="Slider">
<input type="radio" id="fullPage.js" name="categories" value="fullPage.js">
<ol class="filters">
  <li>
    <label for="All">All</label>
  </li>
  <li>
    <label for="CSS">CSS</label>
  </li>
  <li>
    <label for="JavaScript">JavaScript</label>
  </li>
  <li>
    <label for="jQuery">jQuery</label>
  </li>
  <li>
    <label for="WordPress">WordPress</label>
  </li>
  <li>
    <label for="Slider">Slider</label>
  </li>
  <li>
    <label for="fullPage.js">fullPage.js</label>
  </li>
</ol>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <!-- 10 more list items here -->
</ol>

<html>
<body >

<ul class="pagination" style="margin-left:850px">
  <li><a href="#">«</a></li>
  <li><a class="active" href="#">1</a></li>
  <li><a href="#">»</a></li>
</ul>

</body>
</html>
<!--/div-->