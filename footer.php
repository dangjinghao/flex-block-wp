    <!-- footer container -->
    <footer id="footer" class="footer">
  <div class="footer-container">
     
    <p>&copy;<a href="<?php bloginfo( 'wpurl' );?>" target="_self"><?php bloginfo('name'); ?></a></p>

    
      <p id="hitokoto"></p>
      <script src="https://v1.hitokoto.cn/?c=a&amp;encode=js&select=%23hitokoto" defer></script>
    

    

    <p>Powered by <a href="https://wordpress.org" target="_blank" rel="noopener noreferrer">WordPress</a> Theme - <a href="https://github.com/miiiku/flex-block" target="_blank" rel="noopener noreferrer author">flex-block-wp</a></p>
    
    <!--
    <div class="footer-container__texts">
      <p>ヽ｀、ヽ｀｀、ヽ｀ヽ｀、、ヽ｀ヽ、ヽ｀、ヽ｀｀、ヽ、｀｀、、ヽ｀ヽ、｀｀、、ヽ｀ヽ、｀ヽ、｀ヽ、｀ヽ</p>
      <p>｀、ヽ｀｀、ヽ、｀｀｀、｀、ヽ🌙｀｀、｀ヽ｀ヽ、ヽ｀、ヽ｀ヽ、ヽ｀、ヽ｀ヽ、ヽ｀、ヽ｀｀、｀ヽ、｀</p>
      <p>｀、｀｀、｀、ヽ｀｀、、ヽヽ｀、｀ヽ｀ヽ、ヽ｀、ヽ｀ヽ、ヽ｀、、、ヽヽ、｀｀、、ヽ｀、ヽ｀｀、ヽ｀ヽ｀</p>
      <p>ヽ｀、｀｀、｀、ヽ｀｀、、ヽヽ｀、｀、、ヽヽ、｀Time waits for on one 🍓｀、、ヽ｀、ヽ｀｀、ヽ｀ヽ｀</p>
      <p>｀ヽ｀｀、ヽ｀ヽ｀、、ヽ｀ヽ｀ヽ｀ヽ、ヽ｀、ヽ｀｀、ヽ、｀｀、、ヽ｀ヽ、｀｀、、ヽ｀ヽ、｀ヽ、｀ヽ、｀ヽ</p>
    </div>
    -->
  </div>
</footer>
  </div>

  <div class="back-to-top-fixed">
    <svg class="icon icon-back-to-top" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
  <path d="M725.333333 426.666667c-12.8 0-21.333333-4.266667-29.866667-12.8l-213.333333-213.333333c-17.066667-17.066667-17.066667-42.666667 0-59.733333s42.666667-17.066667 59.733333 0l213.333333 213.333333c17.066667 17.066667 17.066667 42.666667 0 59.733333C746.666667 422.4 738.133333 426.666667 725.333333 426.666667z"></path>
  <path d="M298.666667 426.666667c-12.8 0-21.333333-4.266667-29.866667-12.8-17.066667-17.066667-17.066667-42.666667 0-59.733333l213.333333-213.333333c17.066667-17.066667 42.666667-17.066667 59.733333 0s17.066667 42.666667 0 59.733333l-213.333333 213.333333C320 422.4 311.466667 426.666667 298.666667 426.666667z"></path>
  <path d="M512 896c-25.6 0-42.666667-17.066667-42.666667-42.666667L469.333333 170.666667c0-25.6 17.066667-42.666667 42.666667-42.666667s42.666667 17.066667 42.666667 42.666667l0 682.666667C554.666667 878.933333 537.6 896 512 896z"></path>
</svg> 
  </div>

  
  


  <!-- aplayer 音频 start -->
  <link rel="stylesheet" href="https://unpkg.com/aplayer@1.10.1/dist/APlayer.min.css">
  <script type="text/javascript" src="https://unpkg.com/aplayer@1.10.1/dist/APlayer.min.js"></script>
  <script type="text/javascript">
    const aplayer = document.querySelectorAll(".aplayer");
    aplayer && initaplayer(aplayer);
    function initaplayer(els) {
      let elsArr = Array.from(els);
      elsArr.forEach(el => {
        let params = {
          container: el,
          audio: { ...el.dataset },
          theme: "#b7daff",
          autoplay: false,
          loop: false,
          mutex: true,
        }
        if (el.dataset.lrc) {
          params['lrcType'] = 3
        }
        new APlayer(params);
      });
    }
  </script>
  <!-- aplayer 音频 end -->
  

<!-- dplayer 视频 start -->
<script type="text/javascript" src="https://unpkg.com/dplayer@1.25.1/dist/DPlayer.min.js"></script>
<script type="text/javascript">
  const dplayer = document.querySelectorAll(".dplayer");
  dplayer && initDPlayer(dplayer);
  function initDPlayer(els) {
    let elsArr = Array.from(els);
    elsArr.forEach(el => {
      let url = el.dataset.url;
      let cover = el.dataset.cover;
      let subtitle = el.dataset.subtitle;

      let options = {
        container: el,
        video: { url: url, pic: cover },
        theme: "#b7daff",
        autoplay: false,
        loop: false,
        mutex: true,
      }

      if (subtitle) {
        options.subtitle = {
          url: el.dataset.subtitle,
        }
      }
      new DPlayer(options);
    });
  }
</script>
<!-- dplayer 视频 end -->


<!-- waterfall 瀑布流 start -->

<script src="<?php bloginfo('template_url'); ?>/lib/waterfall.min.js"></script>

<script type="text/javascript">

const waterfalls = document.querySelectorAll(".waterfall-container");

if (waterfalls && waterfalls.length > 0) {
  waterfalls.forEach((waterfall, index) => {
    let cls = "waterfall-container-" + index;
    waterfall.classList.add(cls);
    initWaterfall(cls, waterfall);
  });
}

function initWaterfall(selector, el) {
  const options = {};
  if (Object.keys(el.dataset).length > 0) {
    for (let k in el.dataset) {
      options[k] = el.dataset[k];
    }
  }
  waterfall(`.${selector}`, options);
}
</script>
<!-- waterfall 瀑布流 end -->


  <!-- zoom start -->
  
<script src="<?php bloginfo('template_url'); ?>/lib/zoom.min.js"></script>

  <script type="text/javascript">
    document.querySelector(".article-content") && zoom(".article-content");
  </script>
  <!-- zoom end -->
  



  


  


  




<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>


  
  <!-- 尾部用户自定义相关内容 -->
</body>
