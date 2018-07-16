var d = new Date();
document.getElementById("year").innerHTML = d.getFullYear();

var mUrl = 'http://www.wolfscreamrecords.com/';
var mus = 'music/';
var art = '#';
var con = 'contact/';
var mainNav = `<h2><a href="${mUrl}">
                <img src="${mUrl}assets/img/favicon-32x32.png" alt="">
                Wolf Scream records
               </a></h2>
               <nav>
                <li><a href="${mUrl}${mus}">Music</a></li>
                <li><a href="${mUrl}${art}">Artists</a></li>
                <li><a href="${mUrl}${con}">Contact</a></li>
               </nav>`;
document.getElementById("navi").innerHTML = mainNav;
