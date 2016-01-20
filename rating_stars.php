<div>
    <h5>Reviews and Ratings</h5><hr> 
    <!--rate widget-->
    <div class="rw-ui-container"></div>
    <!--Client comments-->
    <!--div class="card-panel">
      <div class="comment-pic">
        <img class="z-depth-1" src="images/cubs.jpg"><a href="#!" class="grey-text text-darken-3" >Cris Arnold L Cubcuban</a><hr>
      </div>
    </div-->  
    <ul class="collection">
      <li class="collection-item avatar">
        <img src="images/cubs.jpg" alt="" class="circle">
        <a href="#!">Cris Arnold L. Cubcuban</a>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac scelerisque nisi, sit amet ullamcorper lorem. In pharetra metus sed felis aliquam, a lacinia sem tristique. Aliquam pulvinar pulvinar est. In elementum augue vitae tincidunt pretium. Aliquam erat volutpat. 
        </p>
        <div class="rw-ui-container"></div>
      </li>
      <li class="collection-item avatar">
        <img src="images/cubs.jpg" alt="" class="circle">
        <a href="#!">Cris Arnold L. Cubcuban</a>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac scelerisque nisi, sit amet ullamcorper lorem. In pharetra metus sed felis aliquam, a lacinia sem tristique. Aliquam pulvinar pulvinar est. In elementum augue vitae tincidunt pretium. Aliquam erat volutpat. 
        </p>
        <div class="rw-ui-container"></div>
      </li>
      <li class="collection-item avatar">
        <img src="images/cubs.jpg" alt="" class="circle">
        <a href="#!">Cris Arnold L. Cubcuban</a>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac scelerisque nisi, sit amet ullamcorper lorem. In pharetra metus sed felis aliquam, a lacinia sem tristique. Aliquam pulvinar pulvinar est. In elementum augue vitae tincidunt pretium. Aliquam erat volutpat. 
        </p>
        <div class="rw-ui-container"></div>
      </li>
      <li class="collection-item avatar">
        <img src="images/cubs.jpg" alt="" class="circle">
        <a href="#!">Cris Arnold L. Cubcuban</a>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac scelerisque nisi, sit amet ullamcorper lorem. In pharetra metus sed felis aliquam, a lacinia sem tristique. Aliquam pulvinar pulvinar est. In elementum augue vitae tincidunt pretium. Aliquam erat volutpat. 
        </p>
        <div class="rw-ui-container"></div>
      </li>
  </ul>


    <!--textarea-->
    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">mode_edit</i>
            <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
            <label for="icon_prefix2">Write a review</label>
            <button style="margin-left: 700px;" href="#!" class="waves-effect waves-light btn">comment</button>
          </div>

        </div>
      </form>
    </div>
  </div>

  <script type="text/javascript">
  (function(d, t, e, m){
    
    // Async Rating-Widget initialization.
    window.RW_Async_Init = function(){
                
        RW.init({
            huid: "276036",
            uid: "2ba54a86735719f0ab5a3cd8336c2325",
            source: "website",
            options: {
                "size": "medium",
                "style": "oxygen",
                "isDummy": false
            } 
        });
        RW.render();
    };
    
    // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
        l = d.location, ck = "Y" + t.getFullYear() + 
        "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
        f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
        a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = "text/javascript";
    rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
    s.parentNode.insertBefore(rw, s);
    }(document, new Date(), "script", "rating-widget.com/"));</script>