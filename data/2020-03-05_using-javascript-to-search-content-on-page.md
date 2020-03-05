A peice of javascript to allow easy searching of content on the current page
--PAGE--

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
    
   [View Example] (https://codepen.io/cshaw/pen/rNVmrwY)
