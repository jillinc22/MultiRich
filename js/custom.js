
window.onload = function(){
    /* menu link selector, home page, highlight class */
    navHighlight('.navbar-nav li a', 'home.php', 'active'); 
}

function navHighlight(elem, home, active) {
    let url = location.href.split("/");
        currentLocation = url[url.length - 1];
        link = document.querySelectorAll(elem);
        // console.log(`inside nav: ${currentLocation} ${link}`);

    for (let i = 0; i < link.length; i++) {
        let path = link[i].href.split("/");
            page = path[path.length - 1];

        if (page == currentLocation || page == home && currentLocation == "") {
            link[i].parentNode.className += " " + active;
            document.body.className += ' ' + page.substr(0, page.lastIndexOf('.'));
        }        
    }

}