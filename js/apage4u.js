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

function pin(o){
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
  document.getElementById('pin-results').innerHTML = output;  
}
function hak(o){
  var items = o.query.results.item;
  var output = '<h2>My latest blog posts</h2>';
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
    output += "<li>" + title + " <a href='" + link + "'><b>Read</b></a></li>";
  }
  output += "</ul>"
  document.getElementById('twitter-results').innerHTML = output;  
}
