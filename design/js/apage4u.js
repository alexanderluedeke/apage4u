function addEvent(obj, evType, fn){ 
 if (obj.addEventListener){ 
   obj.addEventListener(evType, fn, false); 
   return true; 
 } else if (obj.attachEvent){ 
   var r = obj.attachEvent("on"+evType, fn); 
   return r; 
 } else { 
   return false; 
 } 
}
//addEvent(window, 'load', yahoo_news);

function del(o){
  var items = o.query.results.item;
  var output = '<h2>My latest bookmarks</h2>';
  output += '<ul class="generated">';
  var no_items=items.length;
  for(var i=0;i<no_items;i++){
    var title = items[i].title;
    var link = items[i].link;
    var desc = items[i].description;
    output += "<li><h3><a href='" + link + "'>"+title+"</a></h3><p>" + desc + "</p></li>";
  }
  output += "</ul>"
  document.getElementById('del-results').innerHTML = output;  
}
function hak(o){
  var items = o.query.results.item;
  var output = '<h2>My latest posts</h2>';
  output += '<ul class="generated">';
  var no_items=items.length;
  for(var i=0;i<no_items;i++){
    var title = items[i].title;
    var link = items[i].link;
    var desc = items[i].description;
    output += "<li><h3><a href='" + link + "'>"+title+"</a></h3><p>" + desc + "</p></li>";
  }
  output += "</ul>"
  document.getElementById('hak-results').innerHTML = output;  
}
function twitter(o){
  var items = o.query.results.item;
  var output = '<h2>My latest tweets</h2>';
  output += '<ul class="generated">';
  var no_items=items.length;
  for(var i=0;i<no_items;i++){
    var title = items[i].title;
    var link = items[i].link;
    output += "<li><a href='" + link + "'>"+title+"</a></li>";
  }
  output += "</ul>"
  document.getElementById('twitter-results').innerHTML = output;  
}



					// usage: <p><a href="http://lanyrd.com/people/ulrikee" id="lanyrd">See my conferences on Lanyard</a></p> 
lanyrdbadge = function(){
  var l;
  function init(){
    l = document.getElementById('lanyrd');
    if(l && l.nodeName.toLowerCase() === 'a'){
      l.innerHTML += ' <span>(Loading&hellip)</span>';
      var user = l.getAttribute('href');
      var url = 'http://query.yahooapis.com/v1/public/yql?'+
                'q=select%20*%20from%20html%20where%20url%3D%22'+
                 encodeURIComponent(user)+
                '%22%20and%20xpath%3D%22%2F%2Fh2%5Bcontains(.%2C\''+
                'Future\')%5D%2F..%22&diagnostics=true&format=xml'+
                '&callback=lanyrdbadge.seed';
      var s = document.createElement('script');
      s.setAttribute('src',url);
      document.getElementsByTagName('head')[0].appendChild(s);
    }
  }
  function seed(o){
    var res = o.results[0];
    res = res.replace(/class="split"/,'id="lanyrd"');
    res = res.replace(/speaking at/,'');
    res = res.replace(/href="/,'href="http://lanyrd.com');
    res = res.replace(/src="/gi,'src="http://lanyrd.com');
    l.parentNode.innerHTML = res;
  }
  return {seed:seed,init:init}
}();
lanyrdbadge.init();

