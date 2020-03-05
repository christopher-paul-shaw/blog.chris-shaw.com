A peice of javascript to allow easy searching of content on the current page
--PAGE--

        <style>
        .hide {
          display:none;
        }
        </style>


        <input id="search" autocomplete="off"/>
        <div class="js-searchable">mysql</div>
        <div class="js-searchable">php</div>
        <div class="js-searchable">apache</div>
        <script>
        document.getElementById("search").addEventListener("keyup", function(){
          let searchable = document.querySelectorAll(".js-searchable");
            for (var i = 0; i < searchable.length; i++) {
            let current = searchable[i]; 
            let title = current.innerHTML;  
            if(title.includes(this.value)) {
              current.classList.remove('hide');
            }
            else {
              current.classList.add('hide');
            }
            }
        });
        </script>
    
   [!View Example] (https://codepen.io/cshaw/pen/rNVmrwY)
