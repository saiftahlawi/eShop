<?php
session_start();
if(!isset($_SESSION['user'])) {
  header('Location: ./login.php');
}
include "./header.php";

?>
<style>
@import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap");
:root {
  --primary: #323232;
  --light-bg: #f4f4f4;
  --border: #eee;
}



.card {
 margin-left:15rem;
  width: 70%;
  max-width: 1100px;
  background-color: #fff;
  padding: 3rem;
}

.card__header {

  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-top: -15px;
}

.card__profile img {
  border-radius: 50%;
  height: 5rem;
  width: 5rem;
  -o-object-fit: cover;
     object-fit: cover;
}

.card__name {
  margin-left: 1.25rem;
}

.card__handle {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-top: 3px;
}

.card__button svg {
  height: 1.05rem;
  width: 1.05rem;
  margin-right: 5px;
}

.card__button {
  margin-left: auto;
}

.card__button button {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-size: 1.05rem;
  background-color: var(--primary);
  color: white;
  font-weight: bold;
  border: none;
  height: 40px;
  width: 100px;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  cursor: pointer;
}

.card__button button:active {
  -webkit-transform: scale(0.96);
          transform: scale(0.96);
}

.card__heading {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

span.circle {
  height: 3px;
  width: 3px;
  background-color: var(--primary);
  border-radius: 50%;
  display: inline-block;
  margin: 0 8px;
}

.border {
  border-radius: 5px;
  height: 2px;
  background-color: var(--border);
  border: none;
  margin: 1.25rem 0;
}

.navlinks {
  list-style: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 1.25rem;
}

.navlinks li {
  opacity: 0.5;
  -webkit-transition: opacity 200ms ease-in-out;
  transition: opacity 200ms ease-in-out;
  cursor: pointer;
}

.navlinks li:first-child {
  opacity: 1;
  font-weight: bold;
}

.navlinks li:hover {
  opacity: 1;
}

.navlinks li + li {
  margin-left: 20px;
}

.date {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-size: 0.85rem;
}

.date svg {
  margin-left: 5px;
  height: 1rem;
  width: 1rem;
}

.heading {
  font-weight: bold;
  font-size: 1.1rem;
}

.insights {
  margin: 2rem 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.insights .insight {
  width: 280px;
  padding: 1rem;
  border-radius: 8px;
  outline: 2px solid var(--border);
  -webkit-transition: all 200ms ease-in-out;
  transition: all 200ms ease-in-out;
}

.insights .insight:hover {
  color: white;
  background-color: var(--primary);
  outline: none;
}

.insights .insight .heading {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.insights .insight .heading .score {
  margin-left: auto;
}

.insights .insight .heading .score span {
  color: #44c790;
}

.insights .insight .heading span {
  font-size: 0.8rem;
}

.insight + .insight {
  margin-left: 1rem;
}

.number {
  font-size: 1.5rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  font-weight: bold;
  margin-top: 15px;
}

.number .info {
  font-size: 0.75rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-weight: normal;
}

.number .info svg {
  height: 15px;
  width: 15px;
}

.input-wrapper {
  width: 100%;
  min-height: 50px;
  padding: 20px;
  margin: 10px auto 20px auto;
}

.inputs {
  width: 400px;
  height: 30px;
  font-size: 15px;
  padding: 20px;
  box-sizing: border-box;
  border: 2px solid rgb(212, 212, 212);
}

#submit_btn {
  width: 100px;
  height: 35px;
  background: #000;
  font-weight: bold;
  color: #fff;
  border: 2px solid #000;
  border-radius: 4px;
  cursor: pointer;
}

@media (max-width: 1381px) {
  .insights {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .insights .insight:nth-child(3) {
    margin-top: 1rem;
  }
}

@media (max-width: 990px) {
  .insights {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .insights .insight + .insight {
    margin: 0;
    margin-top: 1rem;
  }
}

@media (max-width: 740px) {
  .card {
    width: 90%;
  }
  .navlinks {
    display: none;
  }
}

@media (max-width: 545px) {

  .input-wrapper input  {
    width: 100%;
  }
  .card__button button {
    width: 40px;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .card__button button span {
    display: none;
  }
  .card__button button svg {
    margin-right: 0;
  }
}

@media (max-width: 475px) {
  .card__button {
    display: none;
  }
}


</style>

<?php

?>

        <?php include '../Controler/profile.php'?>

  


    
    <?php include "./footer.php" ?>