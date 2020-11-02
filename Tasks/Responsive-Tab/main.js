var tab_list = document.querySelectorAll(".tabs .tab-section li");
var tab_item = document.querySelectorAll(".tabs .content-head");
var tab_content = document.querySelectorAll(".tab-content");
var mob_content = document.querySelectorAll(".mob-content");



tab_list.forEach(function(tab , tab_index){
	tab.addEventListener("click", function(){
		tab_item.forEach(function(tab){
			tab.addClassName = 'de-active';
		})
			tab.addClassName = 'active';

		tab_content.forEach(function(content, content_index){
			if(content_index == tab_index){
				content.style.display = "block";
			}
			else{
				content.style.display = "none";
			}
		});

    mob_content.forEach(function(content, content_index){
      if(content_index == tab_index){
        content.style.display = "block";
      }
      else{
        content.style.display = "none";
      }
    });

	});
});
