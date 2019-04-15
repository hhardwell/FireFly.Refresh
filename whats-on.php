<!DOCTYPE html>

<head>
<title>What's on</title>
  <link rel="stylesheet" type="text/css" href="css/whats-on.css">
</head>

<?php include"header.php";?>

<div class="content-container container">
  <h1 class="header-font color-grey page-title">What's <span class="color-orange">On</span></h1>


<!-- Opening statement -->

  <div class="opening background-grey">
    <p class="opening-blurb description-font">The Firefly team work throughout the year to put on great events. Every month, we organise and host everything from children's tea parties to deity-summoning cabal nights. Check out some of this month's highlights.
    <p class="intro color-orange description-font">Insert excitment here.</p>
  </div>

  <!-- Past Events -->
  <div>
  <h3 class="events-title description-font">This Month's Highlights</h3>
  </div>
</div>
  <div class="highlights container">
    <div class="eventCard">
      <div class="card-top">
        <img src="https://c1.staticflickr.com/9/8351/8285577130_e9fb7cc138_b.jpg" alt="bubble">
      </div>

      <div class="card-bottom description-font background-grey">
        <h5>2nd December</h5>
        <h4 class="color-orange">The Biggest Bubble</h4>
        <p>We're set to team up with bubble bath producer Bubble.Org to try and blow the biggest bubble in the world. Will it work? Who cares. </p>
      </div>
    </div>

    <div class="eventCard">
      <div class="card-top">
        <img src="./images/facebook/facebook-background.png" alt="flags">
      </div>

      <div class="card-bottom description-font background-grey">
        <h5>8th December</h5>
        <h4 class="color-orange">Flag Burning</h4>
        <p>Pretty self-explanatory. We're going to build a bonfire in the park and burn a bunch of flags. Pyromaniacs and anarchists welcome.</p>
      </div>
    </div>

    <div class="eventCard">
      <div class="card-top">
        <img src="https://dibujando.net/files/fs/p/c/900x1000/2015/108/elcthulhu_220425.jpg" alt="cthulu">
      </div>

      <div class="card-bottom description-font background-grey">
        <h5>31st December</h5>
        <h4 class="color-orange">Waking Cthulu</h4>
        <p>The Cult of Cthulu are meeting up in one of our city's old underground stations to release the ancient one and bring about a thousand years of darkness. BYOB!</p>
      </div>
    </div>
  </div>

<div class="content-container container">
  <!-- Calendar section -->
  <!-- MAGIC HIGHLIGHTS, ONLY AT TINY TINY TINY TINY SCREENSIZES -->
  <div class="magic-highlight">
    <div class="magic-card">
      <div class="mh-1-top">
        <img src="https://c1.staticflickr.com/9/8351/8285577130_e9fb7cc138_b.jpg" alt="bubble">
      </div>
      <div class="mh-1-bottom background-grey description-font">
        <h5>2nd December</h5>
        <h4 class="color-orange">The Biggest Bubble</h4>
        <p>We're set to team up with bubble bath producer Bubble.Org to try and blow the biggest bubble in the world. Will it work? Who cares. </p>
      </div>
    </div>
    <div class="magic-card">
      <div class="mh-2-top">
        <img src="./images/facebook/facebook-background.png" alt="flags">
      </div>
      <div class="mh-2-bottom background-grey description-font">
        <h5>8th December</h5>
        <h4 class="color-orange">Flag Burning</h4>
        <p>Pretty self-explanatory. We're going to build a bonfire in the park and burn a bunch of flags. Pyromaniacs and anarchists welcome.</p>
      </div>
    </div>
    <div class="magic-card">
      <div class="mh-3-top">
        <img src="https://dibujando.net/files/fs/p/c/900x1000/2015/108/elcthulhu_220425.jpg" alt="cthulu">
      </div>
      <div class="mh-3-bottom background-grey description-font">
        <h5>31st December</h5>
        <h4 class="color-orange">Waking Cthulu</h4>
        <p>The Cult of Cthulu are meeting up in one of our city's old underground stations to release the ancient one, bringing about a thousand years of darkness.</p>
      </div>
    </div>
  </div>
  <!-- THIS IS THE END OF MAGIC HIGHLIGHTS -->

  <div class="altCalendar content-container background-grey description-font">
    <p class="altText">We organise events at a breakneck pace; this list will get added to over the coming weeks. Our business is making your vision a reality. We are the preferred event service provider for universities, governments and fringe religions, and can call upon a broad reserve of experience. Visit this page again soon for an updated events list, or check our facebook page for the latest and greatest events in your area.</p>
  </div>

  <div class="calendar description-font background-grey">
    <table>
        <h4>December 2018</h4>
      <tr>
        <td>1</td>
        <td class="event">2<div class="eventinfo event1info"><p>Make sure to bring your fairy liquid for the bubble festival!</p></div></td>

        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
        <td>7</td>
          </tr>
      <tr>
        <td class="event">8<div class="eventinfo event2info"><p>Quick note: attendees are advised to bring their own flags. Petrol and firelighters provided.</p></div></td>

        <td>9</td>
        <td>10</td>
        <td>11</td>
        <td>12</td>
        <td>13</td>
        <td>14</td>
      </tr>
      <tr>
        <td>15</td>
        <td>16</td>
        <td>17</td>
        <td>18</td>
        <td>19</td>
        <td>20</td>
        <td>21</td>
      </tr>
      <tr>
        <td>22</td>
        <td>23</td>
        <td>24</td>
        <td>25</td>
        <td>26</td>
        <td>27</td>
        <td>28</td>
      </tr>
      <tr>
        <td>29</td>
        <td>30</td>
        <td class="event">31<div class="eventinfo event3info"><p>Welcoming Cthulu will feature animal sacrifice and debauchery, so children are advised not to attend.</p></div></td>


        </tr>
    </table>
  </div>
</div>

 <!-- END OF CONTENT CONTAINER -->

<!-- JAVASCRIPT -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<script>
$(document).ready(function(){
  $('.highlights').slick({
    slidesToShow:
    1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
      });
});

//
// // the calendar script
//
// $(".event1").on(
//   "mouseover",
//   (mouseOver = () => {
//     $(".event1info").css("display", "block");
//   })
// );
//
// $(".event1").on(
//   "mouseout",
//   (mouseOut = () => {
//     $(".event1info").css("display", "hidden");
//   })
// );
//
// $(".event2").on(
//   "mouseover",
//   (mouseOver = () => {
//     $(".event2info").css("display", "block");
//   })
// );
//
// $(".event2").on(
//   "mouseout",
//   (mouseOut = () => {
//     $(".event2info").css("display", "hidden");
//   })
// );
//
// $(".event3").on(
//   "mouseover",
//   (mouseOver = () => {
//     $(".event3info").css("display", "block");
//   })
// );
//
// $(".event3").on(
//   "mouseout",
//   (mouseOut = () => {
//     $(".event3info").css("display", "hidden");
//   })
// );
//
//
//
// // document.getElementsByClassName("event1").addEventListener("mouseover", mouseOver);



</script>

<?php include"footer.php";?>
