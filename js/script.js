// side nav 
document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
    // parallax
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems, options);
});