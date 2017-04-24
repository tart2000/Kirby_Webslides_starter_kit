<?php snippet('header') ?>

<section class="bg-black-blue aligncenter">
 <span class="background dark" style="background-image:url('https://source.unsplash.com/6njoEbtarec/')"></span>
  <!--.wrap = container (width: 90%) -->
  <div class="wrap">
    <p class="text-subtitle">WebSlides Tutorial</p>
    <h1 class="text-landing">Components</h1>
    <p class="text-symbols">* * *</p>
    <p>
      <a class="button ghost" href="https://github.com/webslides/webslides" title="Download WebSlides">
        <svg class="fa-github">
          <use xlink:href="#fa-github"></use>
        </svg>
        Free Download
      </a>
    </p>
  </div>
  <!-- .end .wrap -->
</section>

<section class="aligncenter">
  <div class="wrap">
    <h2><strong>WebSlides Components</strong></h2>
    <p class="text-intro">A quick reference guide for beginners.</p>
    <ul class="flexblock border">
      <li>
        <!--div required = padding li or li>a-->
        <div>
          <h3><a target="_blank" href="#slide=3">Architecture</a></h3>
          <ol>
            <li><a target="_blank" href="#slide=3">Markup</a></li>
            <li><a target="_blank" href="#slide=4">CSS Syntax</a></li>
            <li><a target="_blank" href="#slide=5">Layout</a></li>
            <li><a target="_blank" href="#slide=6">Headers</a></li>
            <li><a target="_blank" href="#slide=7">Footers</a></li>
            <li><a target="_blank" href="#slide=8">Navigation</a></li>
            <li><a target="_blank" href="#slide=9">Grid</a></li>
            <li><a target="_blank" href="#slide=14">Alignments</a></li>
            <li><a target="_blank" href="#slide=27">Background Colors</a></li>
            <li><a target="_blank" href="#slide=29">Gradients</a></li>
          </ol>
        </div>
      </li>
      <li>
        <!--div required = padding li or li>a-->
        <div>
          <h3><a target="_blank" href="#slide=33">Contents (Flexible Blocks)</a></h3>
          <ol>
            <li><a target="_blank" href="#slide=33">Multipurpose</a></li>
            <li><a target="_blank" href="#slide=37">Clients</a></li>
            <li><a target="_blank" href="#slide=39">Steps</a></li>
            <li><a target="_blank" href="#slide=40">Features</a></li>
            <li><a target="_blank" href="#slide=41">Specs</a></li>
            <li><a target="_blank" href="#slide=43">CVs and News</a></li>
            <li><a target="_blank" href="#slide=44">Galleries (portfolios, teams...)</a></li>
            <li><a target="_blank" href="#slide=47">Metrics</a></li>
            <li><a target="_blank" href="#slide=48">Plans (Pricing)</a></li>
            <li><a target="_blank" href="#slide=50">Work</a></li>
          </ol>
        </div>
      </li>
      <li>
        <!--div required = padding li or li>a-->
        <div>
          <h3><a target="_blank" href="#slide=51">Landings</a></h3>
          <ol>
            <li><a target="_blank" href="#slide=51">Welcomes</a></li>
            <li><a target="_blank" href="#slide=56">Covers</a></li>
            <li><a target="_blank" href="#slide=62">Data</a></li>
            <li><a target="_blank" href="#slide=66">Abouts</a></li>
            <li><a target="_blank" href="#slide=70">Benefits</a></li>
            <li><a target="_blank" href="#slide=73">Cards</a></li>
            <li><a target="_blank" href="#slide=77">Offers and Discounts</a></li>
            <li><a target="_blank" href="#slide=82">Quotes</a></li>
            <li><a target="_blank" href="#slide=88">Buttons and Badges</a></li>
            <li><a target="_blank" href="#slide=89">Forms</a></li>
          </ol>
        </div>
      </li>
      <li>
        <!--div required = padding li or li>a-->
        <div>
          <h3><a target="_blank" href="#slide=94">Media</a></h3>
          <ol>
            <li><a target="_blank" href="#slide=95">Background Images</a></li>
            <li><a target="_blank" href="#slide=101">Background Videos</a></li>
            <li><a target="_blank" href="#slide=103">Embedding videos, charts...</a></li>
            <li><a target="_blank" href="#slide=108">Maps</a></li>
            <li><a target="_blank" href="#slide=110">500+ SVG Icons</a></li>
            <li><a target="_blank" href="#slide=111">Logos</a></li>
            <li><a target="_blank" href="#slide=112">Avatars</a></li>
            <li><a target="_blank" href="#slide=113">Devices</a></li>
            <li><a target="_blank" href="#slide=114">Screenshots</a></li>
            <li><a target="_blank" href="#slide=115">CSS Animations</a></li>
          </ol>
        </div>
      </li>
    </ul>
  </div>
  <!-- .end .wrap -->
</section>

<section>
  <!--.wrap = container (width: 90%) -->
  <div class="wrap">
    <div class="grid vertical-align">
      <div class="column">
        <h3><strong>WebSlides is really easy</strong></h3>
        <p class="text-intro">Each parent <code>&lt;section&gt;</code> in the #webslides element is an individual slide. </p>
        <p>Code looks superb. It uses <strong>intuitive markup with popular naming conventions</strong>. There's no need to overuse classes or nesting. Just focus on your ideas. <strong>Based on <a href="https://github.com/jennschiffer/SimpleSlides">SimpleSlides</a>, by <a href="http://jennmoney.biz">Jenn Schiffer</a></strong> :)</p>
      </div>
      <!-- .end .column -->
      <div class="column">
        <pre>&lt;article id="webslides"&gt;
<span class="code-comment">&lt;!-- Slide 1 --&gt;</span>
&lt;section&gt;
&lt;h1&gt;Design for trust&lt;/h1&gt;
&lt;/section&gt;
<span class="code-comment">&lt;!-- Slide 2 --&gt;</span>
&lt;section class="bg-primary"&gt;
&lt;div class="wrap"&gt;
&lt;h2&gt;.wrap = container (width: 90%) with fadein&lt;/h2&gt;
&lt;/div&gt;
&lt;/section&gt;
&lt;/article&gt;
</pre>
      </div>
      <!-- .end .column -->
    </div>
    <!-- .end .grid -->
    <hr>
    <p class="aligncenter">Vertical sliding? <code>&lt;article id="webslides" class="vertical"&gt;</code></p>
  </div>
  <!-- .end .wrap -->
</section>

<?php snippet('footer') ?>