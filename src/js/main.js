function subNavigation(elID) {
	
	console.log(elID);

	$("#main_navigation>li>a").removeClass("nav-active");
	$("#" + elID).addClass("nav-active");

	var subNav = "sub" + elID;
	$("#sub_navigation>div.active").removeClass("active");
	$("#" + subNav).addClass("active");

}


$(document).ready(function() {
    $('#nav_home, #nav_aboutzotter, #nav_bath, #nav_energy, #nav_zotterpoints, #nav_news').click(function(event) {
        subNavigation(event.target.id);
    });
  });

