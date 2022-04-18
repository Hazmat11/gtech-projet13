// side nav 
document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
});

gapi.load('auth2', function() {
    gapi.auth2.init();
});