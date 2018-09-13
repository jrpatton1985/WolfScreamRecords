// Main Navigation
var mUrl = 'http://www.wolfscreamrecords.com/';
var mus = 'music/';
var art = '#';
var con = 'contact/';
var mainNav = `<h2><a href="${mUrl}">
                <img src="${mUrl}assets/img/favicon-32x32.png" alt="">
                Wolf Scream Records
               </a></h2>
               <nav>
                <li><a href="${mUrl}${mus}">Music</a></li>
                <li><a href="${mUrl}${art}">Artists</a></li>
                <li><a href="${mUrl}${con}">Contact</a></li>
               </nav>`;
document.getElementById("navi").innerHTML = mainNav;

// Footer Social Media
var footerSocial = `<li><a href="http://www.facebook.com/wolfscreamrecords/" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                    <li><a href="http://www.instagram.com/wolfscreamrecords/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
                    <li><a href="https://twitter.com/Wolf_Scream_Rec" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="https://soundcloud.com/wolf-scream-records/" target="_blank"><i class="fa fa-soundcloud fa-2x"></i></a></li>
                    `;
document.getElementById("footer-social").innerHTML = footerSocial;

var d = new Date();
document.getElementById("year").innerHTML = d.getFullYear();
