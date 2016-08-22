function bindZoom(){
    var el = document.querySelectorAll('a.area');
    for (var i = 0; i < el.length; ++i) el[i].addEventListener('click',function(){
        this.className = 'area click';
    });
}

function bindAnimation(){
    var el = document.querySelectorAll('a.entrance');
    for (var i = 0; i < el.length; ++i) el[i].addEventListener('click',function(){
        if (this.id.match('north')) document.getElementById('map').className = 'click north';
        if (this.id.match('south')) document.getElementById('map').className = 'click south';
        if (this.id.match('west')) document.getElementById('map').className = 'click west';
        if (this.id.match('east')) document.getElementById('map').className = 'click east';
    });
}

function openHash(){
    bindAnimation();

    var hash = window.location.hash.slice(1);
    if (hash) {
        var el = document.querySelectorAll('a.'+hash);
        for (var i = 0; i < el.length; ++i) el[i].className+=' current';
    }
}

function sign(id){
    message = document.getElementById(id).getAttribute('data-message');
    alert(message);
}